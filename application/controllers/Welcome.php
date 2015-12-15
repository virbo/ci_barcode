<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * YUSUF AYUBA
	 */
	public function index()
	{
		$text = 'YUSUF AYUBA';
		$this->set_bar($text);
	}

	private function set_bar($text)
	{
		$this->load->library('zend');
		$this->zend->load('Zend/Barcode');
		/*$barcodeOptions = array('text' => $text);
		$rendererOptions = array();
		Zend_Barcode::factory('code39', 'image', $barcodeOptions, $rendererOptions)->render();*/
		Zend_Barcode::render('code128', 'image', array('text'=>$text), array());
	}
}
