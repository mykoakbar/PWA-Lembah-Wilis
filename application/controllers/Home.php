<?php 
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_galeri');
		$this->load->model('m_album');
		$this->load->model('m_pengunjung');
        $this->m_pengunjung->count_visitor();
	}

	function index(){
		$data['title'] = 'Lembah Wilis';
		$x['alb']=$this->m_album->get_all_album();
		$x['data']=$this->m_galeri->get_all_galeri();
		$this->load->view('v_home',$x);
		$this->load->view('templates/footer');
		$this->load->view('templates/header', $data);
	}
}