<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['title'] = 'UMKM Wonorejo - Beranda';
		$this->load->view('user/beranda', $data);
	}

	public function kontak()
	{
		$data['title'] = 'UMKM Wonorejo - Kontak';
		$this->load->view('user/kontak', $data);
	}
}
