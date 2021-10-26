<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
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
        $data['title'] = 'Profile';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('profile/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Ubah Profile';
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('profile/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $nama = $this->input->post('nama');
            $email = $data['user']['email'];

            $img = $_FILES['gambar']['name'];

            if ($img) {
                $config['allowed_types'] = 'jpg|png|gif';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $data = $this->upload->data();
                    $config['image_library'] = 'gd2';
                    $config['width'] = '480';
                    $config['height'] = '480';
                    $config['x_axis'] = '480';
                    $config['y_axis'] = '480';
                    $this->load->library('image_lib', $config);
                    $this->image_lib->crop();
                    $oldImage = $data['user']['gambar'];
                    if ($oldImage != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $oldImage);
                    }
                    $newImage = $this->upload->data('file_name');
                    $this->db->set('gambar', $newImage);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('admin');
            $this->session->set_flashdata('message', 'Diubah');
            redirect('profile');
        }
    }

    public function password()
    {
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Ubah Password';
        $this->form_validation->set_rules('passwordlama', 'Password Lama', 'required|trim');
        $this->form_validation->set_rules('passwordbaru', 'Password Baru', 'required|trim|min_length[6]|matches[ulangipassword]');
        $this->form_validation->set_rules('ulangipassword', 'Ulangi Password Baru', 'required|trim|min_length[6]|matches[passwordbaru]');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('profile/password', $data);
            $this->load->view('templates/footer');
        } else {
            $currentPassword = $this->input->post('passwordlama');
            $newPassword = $this->input->post('passwordbaru');
            if (password_verify($currentPassword, $data['user']['password'])) {
                if ($newPassword == $currentPassword) {
                    $this->session->set_flashdata('danger', '<div class="alert alert-danger">Password baru tidak boleh sama dengan Password lama</div>');
                    redirect('profile/password');
                } else {
                    $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);
                    $this->db->set('password', $newPassword);
                    $this->db->where('email', $data['user']['email']);
                    $this->db->update('admin');
                    $this->session->set_flashdata('message', 'Diubah');
                    redirect('profile');
                }
            } else {
                $this->session->set_flashdata('danger', '<div class="alert alert-danger">Password lama salah!</div>');
                redirect('profile/password');
            }
        }
    }
}
