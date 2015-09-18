<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Class registry
*
* This function acts as a singleton.  If the requested class does not
* exist it is instantiated and set to a static variable.  If it has
* previously been instantiated the variable is returned.
*
* @access	public
* @param	string	the class name being requested
* @param	string	the directory where the class should be found
* @param	string	the class name prefix
* @return	object
*/
function &load_class($class, $directory = 'libraries', $prefix = 'CI_')
{
	static $_classes = array();

	// Does the class exist?  If so, we're done...
	if (isset($_classes[$class]))
	{
		return $_classes[$class];
	}

	$name = FALSE;

	//libcache hack
	if( ! isset($GLOBALS['libcache'])){
		if(file_exists(APPPATH.'/cache/libcache.php')){
			include(APPPATH.'/cache/libcache.php');
			$GLOBALS['libcache'] = $a;
		}
	}

	if( isset ($GLOBALS['libcache']) ){
		if (isset($GLOBALS['libcache'][$class])){
			require( $GLOBALS['libcache'][$class] );
			$name = $prefix.$class;

			if ( isset( $GLOBALS['libcache'][config_item('subclass_prefix').$class] ) ){
				require( $GLOBALS['libcache'][config_item('subclass_prefix').$class] );
				$name = config_item('subclass_prefix').$class;
			}
			// Keep track of what we just loaded
			is_loaded($class);

			$_classes[$class] = new $name();
			return $_classes[$class];
		}
		
	}
	//end libcache hack
	


	// Look for the class first in the local application/libraries folder
	// then in the native system/libraries folder
	foreach (array(CREAMTURE_PATH.'/',APPPATH, BASEPATH) as $path)
	{
		if (file_exists($path.$directory.'/'.$class.'.php'))
		{
			$name = $prefix.$class;

			if (class_exists($name) === FALSE)
			{
				require($path.$directory.'/'.$class.'.php');
			}

			break;
		}
	}

	// Is the request a class extension?  If so we load it too
	foreach (array(CREAMTURE_PATH.'/', APPPATH) as $path2)
	{
		if (file_exists($path2.$directory.'/'.config_item('subclass_prefix').$class.'.php'))
		{
			$name = config_item('subclass_prefix').$class;

			if (class_exists($name) === FALSE)
			{
				require($path2.$directory.'/'.config_item('subclass_prefix').$class.'.php');
			}
		}
	}

	// Did we find the class?
	if ($name === FALSE)
	{
		// Note: We use exit() rather then show_error() in order to avoid a
		// self-referencing loop with the Excptions class
		exit('Unable to locate the specified class: '.$class.'.php');
	}

	// Keep track of what we just loaded
	is_loaded($class);

	$_classes[$class] = new $name();
	return $_classes[$class];
}


// --------------------------------------------------------------------

/* End of file Common.php */