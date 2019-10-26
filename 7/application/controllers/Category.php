<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category extends CI_Controller
{   
    
    public function index()
    {  
        $sql = "SELECT * FROM categories";        
        $data = $this->db->query($sql);

        $this->template->load('template','category_index', array(        
            'data' => $data,
        ));
    }

    public function create()
    {          
        $this->template->load('template','category_create');
    }

    public function insert()
    {          
        $data['name'] = $this->input->post('name');
        $this->db->insert('categories', $data);
        redirect(site_url('category'));
        
    }

    public function read($id)
    {  
        $sql  =  "SELECT * FROM categories WHERE id = '$id' ";

        $this->template->load('template','category_read', array(        
            'data' => $this->db->query($sql)->row(),
        ));
    }

    public function edit($id)
    {  
        $sql  =  "SELECT * FROM categories WHERE id = '$id' ";

        $this->template->load('template','category_edit', array(        
            'data' => $this->db->query($sql)->row(),
        ));
    }

    public function update()
    {          
        $data['name'] = $this->input->post('name');
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('categories', $data);

        redirect(site_url('category'));
        
    }

    public function delete($id)
    {          
        $this->db->where('id', $id);
        $this->db->delete('categories');

        redirect(site_url('category'));
        
    }

    

}