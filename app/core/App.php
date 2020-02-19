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
 
 class App {
	
	protected $controller = 'Home';
	protected $method = 'index';
	protected $params = [];
	
	
	public function __construct()
		{
			$url = $this->parseURL();
			
			// UNTUK CONTROLLER
			
			// ada gak file sesuai di folder controller
			if( file_exists('../app/controllers/'.$url[0].'.php')){
				//Jika filenya ada, maka controller diatas kita timpa dengan controller yang ada
				$this->controller = $url[0];
				unset($url[0]);
			}
			// kita panggil controllernya
			require_once '../app/controllers/'.$this->controller.'.php';
			$this->controller = new $this->controller;
			
			//UNTUK METHOD / FUNCTION
			
			if(isset($url[1])){
				if(method_exists($this->controller , $url[1])){
					$this->method = $url[1];
					unset($url[1]);
				}
			}
			
			// PARAMS
			if(!empty($url)){
				
				// dimasukan ke params prootected di atas
				$this->params = array_values($url);
			}
			
			// Jalankan Controller dan Method serta kirimkan params jika ada
			call_user_func_array([$this->controller, $this->method], $this->params);
			
		}
	
	public function parseURL()
	{
		if( isset($_GET['url']) ){
			//Bersihkan garis miring di akhir
			$url = rtrim($_GET['url'], '/');
			
			//Bersihkan URL dari karakter-karakter aneh
			$url = filter_var($url, FILTER_SANITIZE_URL);
			
			// URL kita pecah berdasarkan tanda /
			$url = explode('/', $url);
			
			return $url;
		}
	}
	
 }
 
 

