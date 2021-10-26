<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged();
    }

    public function index()
    {
        $email = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('admin', ['email' => $email])->row_array();
        $data['santri'] = $this->db->get('jumlah_santri')->result_array();
        $data['artikel'] = $this->db->get('artikel')->num_rows();
        $data['pengurus'] = $this->db->get('pengurus')->num_rows();
        $data['title'] = 'Dashboard';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('templates/footer');
    }

    public function artikel()
    {
        $email = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('admin', ['email' => $email])->row_array();
        $data['artikel'] = $this->db->get('artikel')->result_array();
        $data['title'] = 'Artikel';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard/artikel', $data);
        $this->load->view('templates/footer');
    }

    public function galeri()
    {
        $email = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('admin', ['email' => $email])->row_array();
        $data['galeri'] = $this->db->order_by('id', 'DESC');
        $data['galeri'] = $this->db->get('galeri')->result_array();
        $data['title'] = 'Galeri';
        $this->form_validation->set_rules('ket', 'Keterangan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('dashboard/galeri', $data);
            $this->load->view('templates/footer');
        } else {
            $img = $_FILES['foto']['name'];

            if ($img) {
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/galeri/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $newImage = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            } else {
                $newImage = 'default.jpg';
            }
            $data = [
                'foto' => $newImage,
                'ket' => $this->input->post('ket'),
                'tgl' => date("Y-m-d")
            ];
            $this->db->insert('galeri', $data);
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('dashboard/galeri');
        }
    }

    public function delete($id)
    {
        $foto = $this->db->get_where('galeri', ['id' => $id])->row_array();
        unlink(FCPATH . 'assets/img/galeri/' . $foto['foto']);
        $this->db->where('id', $id);
        $this->db->delete('galeri');
        $this->session->set_flashdata('message', 'Dihapus');
        redirect('dashboard/galeri');
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('artikel');
        $this->session->set_flashdata('message', 'Dihapus');
        redirect('dashboard/artikel');
    }

    public function fetch()
    {
        echo json_encode($this->db->get_where('artikel', ['id' => $_POST['id']])->row_array());
    }

    public function tambah()
    {
        $email = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('admin', ['email' => $email])->row_array();
        $data['title'] = 'Tambah Artikel';
        $this->form_validation->set_rules('judul', 'Judul', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('artikel/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $img = $_FILES['foto']['name'];

            if ($img) {
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/artikel/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $newImage = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            } else {
                $newImage = 'default.jpg';
            }
            $data = [
                'judul' => $this->input->post('judul'),
                'gambar' => $newImage,
                'isi' => $this->input->post('isi'),
                'tgl' => date("Y-m-d")
            ];
            $this->db->insert('artikel', $data);
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('dashboard/artikel');
        }
    }

    public function edit($id)
    {
        $email = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('admin', ['email' => $email])->row_array();
        $data['artikel'] = $this->db->get_where('artikel', ['id' => $id])->row_array();
        $data['title'] = 'Edit Artikel';
        $this->form_validation->set_rules('judul', 'Judul', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('artikel/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $img = $_FILES['foto']['name'];

            if ($img) {
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/artikel/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    $oldgambar = $data['artikel']['gambar'];
                    if ($oldgambar != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/artikel/' . $oldgambar);
                    }
                    $newImage = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            } else {
                $newImage = $data['artikel']['gambar'];
            }
            $data = [
                'judul' => $this->input->post('judul'),
                'gambar' => $newImage,
                'isi' => $this->input->post('isi'),
                'tgl' => date("Y-m-d")
            ];
            $this->db->set($data);
            $this->db->where('id', $id);
            $this->db->update('artikel');
            $this->session->set_flashdata('message', 'Diubah');
            redirect('dashboard/artikel');
        }
    }
}
