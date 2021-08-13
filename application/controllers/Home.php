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
		echo loadViewsFront('index', $data);
	}

	public function offers()
	{
		$data = loadDefaultDataFront();
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('offer', $data);
	}

	public function self()
	{
		$data = loadDefaultDataFront();
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('self', $data);
	}
	public function blog()
	{
		$data = loadDefaultDataFront();
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('blog', $data);
	}

	public function contact()
	{
		$data = loadDefaultDataFront();
		$data['cp'] = $this->uri->segment(1);
		echo loadViewsFront('contact', $data);
	}

	public function single_article($id, $slug)
	{
		$data = loadDefaultDataFront();
		$data['cp'] = 'poradnik';
		echo loadViewsFront('single_article', $data);
	}
}
