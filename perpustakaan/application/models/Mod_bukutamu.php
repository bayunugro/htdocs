<?php
   defined('BASEPATH') OR exit('No direct script access allowed');

   class Mod_bukutamu extends CI_Model   {
    
   /**
    * 
    *  AMBIL DATA BUKU TAMU
    * 
    */

    public function Getbukutamu()
    {
        $data = $this->db->query("select * From bukutamu");
        return $data-> result_array();
    }
    /**
     * 
     * 
     * SIMPAN DATA BUKU TAMU
     * 
     * 
     */
    public function add($data)
    {
        $this->db->insert('bukutamu', $data);
        return('true');
    }
   }
   
?>