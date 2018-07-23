<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Login extends CI_Controller
{
  public function index()
  {
    $this->load->view('user/daftar');

  }
  public function daftarAnggota()
  {
    $this->load->view('user/Anggota');
  }
  public function masuk()
  {
    $this->load->view('user/masuk');
  }
}
?>
