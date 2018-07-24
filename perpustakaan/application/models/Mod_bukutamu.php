<?php
   defined('BASEPATH') OR exit('No direct script access allowed');

   class Mod_bukutamu extends CI_Model   {
       
    public function add($data)
    {
        $this->db->insert('bukutamu', $data);
        return('true');
    }
   }
   
?>