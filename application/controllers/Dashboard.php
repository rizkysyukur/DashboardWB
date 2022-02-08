<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard');
		$this->load->view('template/footer');
	}

	public function master_budget()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('tables/master_budget');
		$this->load->view('template/footer');
	}

	public function sub_budget_lv1()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('tables/sub_budget_lv1');
		$this->load->view('template/footer');
	}

	public function sub_budget_lv2()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('tables/sub_budget_lv2');
		$this->load->view('template/footer');
	}

	public function transaction()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('tables/transaction');
		$this->load->view('template/footer');
	}
}
