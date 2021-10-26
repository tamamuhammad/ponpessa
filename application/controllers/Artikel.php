<?php

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($id)
    {
        $data['artikel'] = $this->db->get_where('artikel', ['id' => $id])->row_array();
        $data['trending'] = $this->db->order_by('id', 'DESC');
        $data['trending'] = $this->db->get('artikel')->result_array();
        $data['judul'] = $data['artikel']['judul'];
        $this->load->view('templates/home_header', $data);
        $this->load->view('artikel/index', $data);
        $this->load->view('templates/home_footer');
    }
}
