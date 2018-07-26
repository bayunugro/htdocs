<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Login extends CI_Controller
{

  function __construct(){
    parent::__construct();
    
     //$this->load->model(['Mod_bukutamu']);

  }
  /**
   * 
   * 
   */


  public function index()
  {

    $data = $this->Mod_bukutamu->Getbukutamu();
    $this->load->view('user/bukutamu', array('data' => $data ));

  }

  /** 
   * 
   * 
   * 
   */



  public function daftarBukutamu()
  {
    $this->load->view('user/Reg_bukutamu');
  }


  /** 
   * 
   * 
   * 
   */
  public function masuk()
  {
    $this->load->view('user/masuk');
  }

  
  
  //  Register Buku Tamu 

  public function signup()
  {
    if (isset($_POST['submit'])) {
      $namaLengkap = $this->input->post('namaLengkap');
      $jeniskelamin = $this->input->post('jenkel');
      $alamat = $this->input->post('alamat');
      $instansi = $this->input->post('instansi');
      $pekerjaan = $this->input->post('pekerjaan');
      $notelp = $this->input->post('notelp');
      $keperluan = $this->input->post('keperluan');
      
      $data = array(
        'namaLengkap' => $namaLengkap,
        'jenisKelamin' => $jeniskelamin,
        'alamat' => $alamat,
        'instansi' => $instansi,
        'pekerjaan' => $pekerjaan,
        'noTelp' => $notelp,
        'keperluan' => $keperluan
      );

      $this->Mod_bukutamu->add($data);
      redirect(base_url());

    } else {
      # code...
    }
    
  }
}
?>
