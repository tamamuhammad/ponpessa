<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = 'Halaman Home';
        $data['artikel'] = $this->db->order_by('id', 'DESC');
        $data['artikel'] = $this->db->limit(3);
        $data['artikel'] = $this->db->get('artikel')->result_array();
        $data['s'] = $this->db->get_where('jumlah_santri', ['id' => 2])->row_array();
        $data['pengurus'] = $this->db->get_where('pengurus', ['jabatan' => 'Pengasuh'])->row_array();
        $this->load->view('templates/home_header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/home_footer');
    }
    public function artikel()
    {
        $data['judul'] = 'Artikel';
        $dataawal = $this->db->get('artikel')->result_array();
        $config['total_rows'] = count($dataawal);
        $config['per_page'] = 6;

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['artikel'] = $this->db->get('artikel', $config['per_page'], $data['start'])->result_array();
        $this->load->view('templates/home_header', $data);
        $this->load->view('home/artikel', $data);
        $this->load->view('templates/home_footer');
    }
    public function madrasah()
    {
        $data['judul'] = 'Madrasah';
        $this->load->view('templates/home_header', $data);
        $this->load->view('home/madrasah', $data);
        $this->load->view('templates/home_footer');
    }
    public function pengurus()
    {
        $data['judul'] = 'Kepengurusan';
        $data['pengasuh'] = $this->db->get_where('pengurus', ['jabatan' => 'Pengasuh'])->row_array();
        $data['staff'] = $this->db->get_where('pengurus', ['jabatan' => 'Staff'])->result_array();
        $data['pengurus'] = $this->db->get_where('pengurus', ['jabatan' => 'Wali Kamar'])->result_array();
        $this->load->view('templates/home_header', $data);
        $this->load->view('home/pengurus', $data);
        $this->load->view('templates/home_footer');
    }
    public function galeri()
    {
        $data['judul'] = 'Galery';
        $dataawal = $this->db->get('galeri')->result_array();
        $config['base_url'] = 'http://localhost/ppsa/home/galeri';
        $config['total_rows'] = count($dataawal);
        $config['per_page'] = 9;

        $config['full_tag_open'] = '<nav class="block-27 "><ul class="pagination d-flex justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = ['class' => 'page-link'];

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['foto'] = $this->db->order_by('id', 'DESC');
        $data['foto'] = $this->db->get('galeri', $config['per_page'], $data['start'])->result_array();
        $this->load->view('templates/home_header', $data);
        $this->load->view('home/galeri', $data);
        $this->load->view('templates/home_footer');
    }
    public function profil()
    {
        $data['judul'] = 'Profil';
        $this->load->view('templates/home_header', $data);
        $this->load->view('home/profil', $data);
        $this->load->view('templates/home_footer');
    }
}
