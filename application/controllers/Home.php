<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->db->table_exists('users')) {
			$this->base_m->create_base();
		}
		if (!isset($_SESSION['lang'])) {
			$_SESSION['lang'] = 'pl';
		}
	}

	public function change($lang)
	{
		$_SESSION['lang'] = $lang;
	}

	public function index()
	{
		$data = loadDefaultDataFront();
		$data['cp'] = "main";
		$data['logo'] = $this->back_m->get_one('banners', 1);
		$data['slider'] = $this->back_m->get_all('slider');
		$data['s1'] = $this->back_m->get_one('s1', 1);
		$data['tiles1'] = $this->back_m->get_all('s1_tiles');
		$data['s2'] = $this->back_m->get_one('s2', 1);
		$data['tiles2'] = $this->back_m->get_all('s2_tiles');
		$data['s3'] = $this->back_m->get_all('s3');
		$data['s4'] = $this->back_m->get_one('s4', 1);
		$data['s5'] = $this->back_m->get_one('s5', 1);
		$data['blog'] = $this->back_m->get_all('blog');
		$data['support'] = $this->back_m->get_one('support', 1);
		$data['partner'] = $this->back_m->get_all('partners');
		$data['footer'] = $this->back_m->get_one('banners', 7);
		echo loadViewsFront('index', $data);
	}

	public function offers()
	{
		$data = loadDefaultDataFront();
		$data['cp'] = $this->uri->segment(1);
		$data['logo'] = $this->back_m->get_one('banners', 1);
		$data['banner'] = $this->back_m->get_one('banners', 2);
		$data['offer'] = $this->back_m->get_by_order('offer', 'queue');
		$data['support'] = $this->back_m->get_one('support', 2);
		$data['partner'] = $this->back_m->get_all('partners');
		$data['footer'] = $this->back_m->get_one('banners', 7);
		echo loadViewsFront('offer', $data);
	}

	public function self()
	{
		$data = loadDefaultDataFront();
		$data['cp'] = $this->uri->segment(1);
		$data['logo'] = $this->back_m->get_one('banners', 1);
		$data['banner'] = $this->back_m->get_one('banners', 3);
		$data['offer'] = $this->back_m->get_by_order('info', 'queue');
		$data['support'] = $this->back_m->get_one('support', 3);
		$data['footer'] = $this->back_m->get_one('banners', 7);
		echo loadViewsFront('self', $data);
	}
	public function blog()
	{
		$data = loadDefaultDataFront();
		$data['cp'] = $this->uri->segment(1);
		$data['logo'] = $this->back_m->get_one('banners', 1);
		$data['banner'] = $this->back_m->get_one('banners', 4);
		$data['blog'] = $this->back_m->get_with_limit('blog', 10, 'desc');
		$data['footer'] = $this->back_m->get_one('banners', 7);
		echo loadViewsFront('blog', $data);
	}

	public function contact()
	{
		$data = loadDefaultDataFront();
		$data['cp'] = $this->uri->segment(1);
		$data['logo'] = $this->back_m->get_one('banners', 1);
		$data['banner'] = $this->back_m->get_one('banners', 5);
		$data['contact_desc'] = $this->back_m->get_all('contact');
		$data['support'] = $this->back_m->get_one('support', 4);
		$data['footer'] = $this->back_m->get_one('banners', 7);
		echo loadViewsFront('contact', $data);
	}

	public function single_article($id, $slug)
	{
		$data = loadDefaultDataFront();
		$data['cp'] = 'poradnik';
		$data['logo'] = $this->back_m->get_one('banners', 1);
		$data['banner'] = $this->back_m->get_one('banners', 6);
		$data['article'] = $this->back_m->get_one('blog', $id);
		$data['photos'] = $this->back_m->get_images('gallery', 'blog', $id);
		$data['blog'] = $this->back_m->get_all('blog');
		$data['footer'] = $this->back_m->get_one('banners', 7);
		echo loadViewsFront('single_article', $data);
	}
}
