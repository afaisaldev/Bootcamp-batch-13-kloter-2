<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Books extends CI_Controller
{   
    
    public function index()
    {  
        $sql = "SELECT * FROM books";        
        $data = $this->db->query($sql);

        $this->template->load('template','books_index', array(        
            'data' => $data,
        ));
    }

    public function create()
    {   
        $sql = "SELECT * FROM categories";        
        $data = $this->db->query($sql);

        $this->template->load('template','books_create', array(        
            'data' => $data,
        ));
    }

    public function insert()
    {          
        $config['upload_path']          = './uploads/';
        $config['allowed_types']    = '*';
        $this->load->library('upload', $config);
        $this->upload->do_upload('img');
        $upload_data1 =  $this->upload->data();
        $file =   $upload_data1['file_name'];
        $this->upload->initialize($config);

        $data['name']           = $this->input->post('name');
        $data['stok']           = $this->input->post('stok');
        $data['deskripsi']      = $this->input->post('deskripsi');
        $data['category_id']    = $this->input->post('category_id');
        $data['image']          = $file;

        $this->db->insert('books', $data);
        redirect(site_url('books'));
        
    }

    public function read($id)
    {  
        $sql  =  "SELECT * FROM books WHERE id = '$id' ";

        $this->template->load('template','books_read', array(        
            'data' => $this->db->query($sql)->row(),
        ));
    }

    public function edit($id)
    {  
        $sql    =  "SELECT * FROM books WHERE id = '$id' ";
        $cat_id = $this->db->query("SELECT * FROM books WHERE id = '$id'")->row()->category_id;

        $sqls   = "SELECT * FROM categories where id != '$cat_id'";        
        $data1  = $this->db->query($sqls);

        $this->template->load('template','books_edit', array(        
            'data'  => $this->db->query($sql)->row(),
            'cmb'   => $data1
        ));
    }

    public function update()
    {        
        $config['upload_path']          = './uploads/';
        $config['allowed_types']    = '*';
        $this->load->library('upload', $config);
        $this->upload->do_upload('img');
        $upload_data1 =  $this->upload->data();
        $file =   $upload_data1['file_name'];
        $this->upload->initialize($config);

        $data['name']           = $this->input->post('name');
        $data['stok']           = $this->input->post('stok');
        $data['deskripsi']      = $this->input->post('deskripsi');
        $data['category_id']    = $this->input->post('category_id');
        $data['image']          = $file;

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('books', $data);

        redirect(site_url('books'));
        
    }

    public function delete($id)
    {          
        $this->db->where('id', $id);
        $this->db->delete('books');

        redirect(site_url('books'));
        
    }

    

}