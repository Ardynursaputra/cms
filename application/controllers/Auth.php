<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
	public function index(){
        $data = array(
            'judul_halaman' => 'Dashboard'
        );
		$this->load->view('login');
	}
    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->db->from('user');
        $this->db->where('username',$username);
        $cek = $this->db->get()->row_array();
        
        if ($cek == NULL){
            $this->session->set_flashdata('alert','
            <div role="alert" class="fade alert alert-success show">
               Username tidak ada.
            </div>
            ');
            redirect('auth');
        } else if($cek['password'] == $password){
            $data = [
                'username' => $cek['username'],
                'nama' => $cek['nama'],
                'level' => $cek['level'],
                'id_user' => $cek['id_user'],
            ];
            $this->session->set_userdata($data);
            var_dump($this->session->userdata('level'));
            redirect('admin/home');
        }else{
            $this->session->set_flashdata('alert','
            <div role="alert" class="fade alert alert-success show">
               password salah
            </div>
            ');
            redirect('auth');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('auth');
    }
}
