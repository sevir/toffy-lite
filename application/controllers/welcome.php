<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
	    parent::__construct();
	}

	public function index()
	{
		$this->load->library('FastCache');

		if (! $this->fastcache->isExisting('result')){
			$this->load->library('CI_Orm');

			$u = Users::find_one(1);
			var_dump($u->user_email);
			$this->fastcache->set('result', $u->user_email);
		}else{
			var_dump($this->fastcache->get('result'));
		}
	}

	public function testwordpress(){
		$args = array(
			'sort_order' => 'asc',
			'sort_column' => 'post_title',
			'hierarchical' => 1,
			'exclude' => '',
			'include' => '',
			'meta_key' => '',
			'meta_value' => '',
			'authors' => '',
			'child_of' => 0,
			'parent' => -1,
			'exclude_tree' => '',
			'number' => '',
			'offset' => 0,
			'post_type' => 'page',
			'post_status' => 'publish'
		); 
		$pages = get_pages($args); 

		var_dump($pages);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */