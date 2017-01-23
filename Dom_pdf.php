<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Name:  DOMPDF
* 
* Author: Geordy James 
* 	 	  geordy06@gmail.com
*         @geordyjames
*          
*
* Origin API Class: https://github.com/dompdf/dompdf
*          
* Created:  24.01.2017

* Created by Geordy James to give support to dompdf 0.7.x and above 
* 
* Description:  This is a Codeigniter library which allows you to convert HTML to PDF with the DOMPDF library
* 
*/
require_once APPPATH.'third_party/dompdf/autoload.inc.php';
		
use Dompdf\Dompdf;

class Dom_pdf {
		
	public function __construct() {

		$pdf = new Dompdf();
		
		$CI =& get_instance();
		$CI->dompdf = $pdf;
		
	}
	
}