<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		echo"<h1>Perkenalan</h1>
		<h3>Nama : Halim Cakra Buana <br>
		Tanggal Lahir : 14 Juli 2002<br>
		Tempat Tinggal : Bekasi<br>
		Motivasi Kuliah : Untuk menimba ilmu dengan Pendidikan yang lebih tinggi dan menambah koneksi antar 
		teman</h3>"; 
	}
}
