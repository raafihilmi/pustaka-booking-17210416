<?php

class Contoh1 extends CI_Controller{
 public function index(){
  echo "<h1>Halo, Perkenalkan</h1>";
  echo "Nama Saya Raafi Hilmi, 
  Saya tinggal di Tangerang Selatan,
  Saya suka makan mie ayam";

 }

 public function datadiri(){
  echo "<h1>Perkenalan</h1>";
  echo "<p>Nama : Raafi Hilmi</p>";
		echo"<p>Kelas : 17.6A.27</p>";
		echo"<p>Program Studi : Teknologi Informasi</p>";
		echo"<p>Semester : 6</p>";
		echo"<p>Alamat : Jl. Rodahias, Serpong, Tangerang Selatan, Banten</p>";
 }
}
