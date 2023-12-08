<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');

    }
	public function index(){
        $this->db->from('user');
        $this->db->order_by('nama','ASC');
        $user = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Data Pengguna',
            'user'          => $user
        );
		$this->template->load('template_admin', 'admin/user_index', $data);
	}
    public function simpan(){
        $this->db->from('user');
        $this->db->where('username',$this->input->post('username'));
        $cek = $this->db->get()->result_array();
        if ($cek!==NULL){
            $this->session->set_flashdata('alert','
            <div role="alert" class="fade alert alert-success show">
               Username sudah ada.
            </div>
            ');
            redirect('admin/user');
        }
        $this->User_model->simpan('user',$wher);
        $this->session->set_flashdata('alert','
        <div role="alert" class="fade alert alert-success show">
            Berhasil Menambahkan User.
        </div>

        ');
        redirect('admin/user');
    }
    public function delete_data($id){
        $where = array(
            'id_user'  =>  $id
        );
        $this->db->delete('user',$where);
        $this->session->set_flashdata('alert','
        <div role="alert" class="fade alert alert-success show">
            Berhasil Menghapus User.
        </div>

        ');
        redirect('admin/user');
    }
    public function update($id){
        $username = $this->input->post('username');
        $nama = $this->input->post('nama');
        $level = $this->input->post('level');
        $data = array(
            'username' => $username,
            'nama' => $nama,
            'level' => $level,
        );
        $this->db->where('id_user',$id)->update('user',$data);
        redirect('admin/user');
   }
   
}
