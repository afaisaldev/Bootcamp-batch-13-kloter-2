<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Display extends CI_Controller
{   
    
    public function index()
    {  
        $sql = "SELECT * FROM categories";        
        $data = $this->db->query($sql);

        $this->template->load('template','display_index', array(        
            'data' => $data,
        ));
    }

    public function pinjam($id)
    {          
        $stok = $this->db->query("SELECT * FROM books WHERE id = '$id'")->row()->stok;
        $stok_update = $stok - 1;    

        $data['stok'] = $stok_update;

        $this->db->where('id', $id);
        $this->db->update('books', $data);

        redirect(site_url('display'));
    }

    public function kembalikan($id)
    {          
        $stok = $this->db->query("SELECT * FROM books WHERE id = '$id'")->row()->stok;
        $stok_update = $stok + 1;    

        $data['stok'] = $stok_update;

        $this->db->where('id', $id);
        $this->db->update('books', $data);

        redirect(site_url('display'));
    }

    

}