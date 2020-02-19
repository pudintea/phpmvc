<?php 
/*
 * Nama 		: Pudin Saepudin Ilham
 * Email 		: najzmitea@gmail.com
 * Github		: https://github.com/pudintea
 * Web			: https://www.pudintea.web.id
 * Instagram	: https://instagram.com/pudin.ira
 * Telegram		: https://t.me/pudintea
 *
 */
 
 
 class About extends Controller{
	 public function index($nama = 'Pudin', $pekerjaan = 'Petani', $umur = 26){
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = 'About';
		
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}
	
	public function page(){
	
		$data['judul'] = 'Page';
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}
 }
 
 
 
 