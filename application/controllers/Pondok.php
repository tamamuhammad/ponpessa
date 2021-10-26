<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pondok extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged();
    }

    public function santri()
    {
        $email = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('admin', ['email' => $email])->row_array();
        $data['santri'] = $this->db->get('jumlah_santri')->result_array();
        $data['title'] = 'Jumlah Santri';
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('pondok/santri', $data);
            $this->load->view('templates/footer');
        } else {
            $id = $this->input->post('id');
            $data = [
                'jumlah' => $this->input->post('jumlah'),
                'tahun' => date("Y-m-d"),
            ];
            $this->db->set($data);
            $this->db->where('id', $id);
            $this->db->update('jumlah_santri');
            $this->session->set_flashdata('message', 'Diubah');
            redirect('pondok/santri');
        }
    }

    public function pengurus()
    {
        $email = $this->session->userdata('email');
        $data['user'] = $this->db->get_where('admin', ['email' => $email])->row_array();
        $data['pengurus'] = $this->db->get('pengurus')->result_array();
        $data['title'] = 'Pengurus';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('pondok/pengurus', $data);
            $this->load->view('templates/footer');
        } else {
            $img = $_FILES['foto']['name'];

            if ($img) {
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/pengurus/';

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
                'nama' => $this->input->post('nama'),
                'jabatan' => $this->input->post('jabatan'),
                'foto' => $newImage,
            ];
            $this->db->insert('pengurus', $data);
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('pondok/pengurus');
        }
    }

    public function fetch()
    {
        echo json_encode($this->db->get_where('pengurus', ['id' => $_POST['id']])->row_array());
    }

    public function edit()
    {
        $id = $this->input->post('id');
        $gambar = $this->db->get_where('pengurus', ['id' => $id])->row_array();
        $img = $_FILES['foto']['name'];

        if ($img) {
            $config['allowed_types'] = 'jpg|png|gif';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/pengurus/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                $oldgambar = $gambar['gambar'];
                if ($oldgambar != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/pengurus/' . $oldgambar);
                }
                $newImage = $this->upload->data('file_name');
            } else {
                echo $this->upload->display_errors();
            }
        }
        $data = [
            'nama' => $this->input->post('nama'),
            'jabatan' => $this->input->post('jabatan'),
            'foto' => $newImage
        ];
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('pengurus');
        $this->session->set_flashdata('message', 'Diubah');
        redirect('pondok/pengurus');
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pengurus');
        $this->session->set_flashdata('message', 'Dihapus');
        redirect('dashboard/pengurus');
    }
}
