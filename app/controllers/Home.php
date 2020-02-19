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

 class Home extends Controller {
	public function index()
	{
		$data['judul'] = 'Home';
		
		$data['nama'] = $this->model('User_model')->getUser();
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}
 }



