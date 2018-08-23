<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Login extends CI_Controller
{

  function __construct(){
    parent::__construct();
    
  }
  public function index()
  {

    $data = $this->Mod_bukutamu->Getbukutamu();
    $this->load->view('user/bukutamu', array('data' => $data ));
  }


   
  public function masuk()
  {
    $this->load->view('user/masuk');
  }

  public function registration()
  {
    $this->load->view('user/Reg_bukutamu');
  }

  public function signRegistration()
  {
    if (isset($_POST['submit'])) {

      $this->form_validation->set_rules('namaLengkap' ,'Nama Lengkap','required|alpha_numeric_spaces|min_length[3]',
                               array('required' => '%s Harus Di Isi',
                                      'min_legth' => 'Minimal harus 3 Huruf')
                              );
      $this->form_validation->set_rules('alamat' ,'Alamat','required',
                              array('required' => '%s Harap Di Isi',)
                              );
      $this->form_validation->set_rules('instansi' ,'Instansi','required',
                              array('required' => '%s Harap Di Isi'));
      $this->form_validation->set_rules('pekerjaan' ,'Pekerjaan','required|alpha',
                              array('required' => '%s Harap Di Isi'));
      $this->form_validation->set_rules('notelp' ,'No Telp','required|numeric',
                              array('required' => '%s Harap Di Isi'));
      $this->form_validation->set_rules('keperluan' ,'Keperluan','required|alpha',
                              array('required' => '%s Harap Di Isi'));
                              
        if ($this->form_validation->run() ==  TRUE) {
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
         }
           else
         {
           $this->load->view('user/Reg_bukutamu');
      
          }
        }
      }
    }
?>
