<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Konfigurasi extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
            redirect('auth');
        }
    }
	public function index(){
        $this->db->from('konfigurasi');
        $konfig=$this->db->get()->row();
        $this->db->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('user c','a.username=c.username','left');
        $this->db->order_by('tanggal','DESC');
        $konten = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Halaman Konfigurasi',
            'konfig'        => $konfig,
            'konten'        => $konten,
        );
		$this->template->load('template_admin','admin/konfigurasi',$data);
	}
    public function update(){
        $where = array('id_konfigurasi'   => 1);
        $data = array(
            'judul_website' => $this->input->post('judul'),
            'profil_website' => $this->input->post('profil_website'),
            'facebook' => $this->input->post('facebook'),
            'instagram' => $this->input->post('instagram'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'no_wa' => $this->input->post('no_wa'),
        ); 
        $this->db->update('konfigurasi',$data);
        $this->session->set_flashdata('alert','
        <div role="alert" class="fade alert alert-success show">
            Berhasil Menperbarui konfigurasi.
        </div>
        ');
        redirect('admin/konfigurasi ');
   }
}
