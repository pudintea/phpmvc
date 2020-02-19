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
 
 class Flasher{
	public static function setFlash($pesan, $aksi, $tipe)
	{
		$_SESSION['flash'] = [
			'pesan' 	=> $pesan,
			'aksi'		=> $aksi,
			'tipe'		=> $tipe
		];
	}
	
	public static function flash()
	{
		if(isset($_SESSION['flash'])){
			echo '<div class="alert alert-'.$_SESSION['flash']['tipe'].' alert-dismissible fade show" role="alert">
					Data Mahasiswa <strong>'.$_SESSION['flash']['pesan'].'</strong> '.$_SESSION['flash']['aksi'].'
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>';
			unset($_SESSION['flash']);
		}
	}
	
	
 }
 
 
 
 
 
 
 
 
 
 
 