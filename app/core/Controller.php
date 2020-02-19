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
 
 class Controller {
 
	public function view($view, $data = [])
	{
		require_once '../app/views/'.$view.'.php';
	}
	
	public function model($model)
	{
		require_once '../app/models/'.$model.'.php';
		return new $model;
	}
 }
 
 

