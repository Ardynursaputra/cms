<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }


	public function index(){
        $data = array(
            'judul_halaman' => 'Dashboard',
            'caraousel' => $this->db->get('caraousel')->result_array(),
            'konfigurasi' => $this->db->get('konfigurasi')->row(),
            'kategori' => $this->db->get('kategori')->result_array(),
            'konten' => $this->db->from('konten')->join('kategori', 'konten.id_kategori = kategori.id_kategori')->order_by('tanggal DESC')->limit(6)->get()->result_array(),
        );
		$this->template->load('template_cms','beranda',$data);
	}

    public function artikel($id){

        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array(); 

        $this->db->from('konfigurasi');
        $konfigurasi = $this->db->get()->row(); 

        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
        $this->db->join('user c', 'a.username = c.username', 'left');
        $this->db->where('slug', $id);
        $konten = $this->db->get()->row(); 

        $data = array(
            'judul_halaman' => 'Dashboard',
            'konfigurasi' => $konfigurasi,
            'kategori' => $kategori,
            'konten' => $konten,
        );
		$this->template->load('template_cms','detail',$data);
    }

    public function kategori($id){
        
        $this->db->from('konfigurasi');
        $konfigurasi = $this->db->get()->row(); 
        
        $this->db->from('kategori');
        $kategori = $this->db->get()->result_array(); 
        
        $this->db->from('konten a');
        $this->db->join('kategori b', 'a.id_kategori = b.id_kategori', 'left');
        $this->db->join('user c', 'a.username = c.username', 'left');
        $this->db->where('a.id_kategori', $id);
        $konten = $this->db->get()->result_array(); 

        $this->db->from('kategori')->where('id_kategori', $id);
        $nama_kategori = $this->db->get()->row()->nama_kategori;

        $data = array(
            'judul_halaman' => $nama_kategori.' | Dashboard',
            'nama_kategori'  => $nama_kategori,
            'konfigurasi' => $konfigurasi,
            'kategori' => $kategori,
            'konten' => $konten,
        );
		$this->template->load('template_cms','kategori',$data);
	}
}
