<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Content extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); {
            $this->load->model('admin/indok_model');
            $this->load->model('admin/kontak_model');
        }
    }

    public function index()
    {
        $this->load->view('rfc2350/index');
    }
    public function tentang()
    {
        $this->load->view('rfc2350/tentang-csirt');
    }
    public function kebijakan()
    {
        $this->load->view('rfc2350/kebijakan');
    }
    public function siber()
    {
        $this->load->view('siber/aduan_siber');
    }
    public function indok()
    {
        $query = $this->indok_model->daftar_indok();
        $data = array('indok' => $query);
        $this->load->view('rfc2350/informasi-dokumen', $data);
    }
    public function informasi()
    {
        $query = $this->kontak_model->daftar_kontak();
        $data = array('kontak' => $query);
        $this->load->view('rfc2350/informasi_kontak', $data);
    }
    public function alper()
    {
        $this->load->view('rfc2350/alamat');
    }
    public function dokpen()
    {
        $this->load->view('rfc2350/dokpen');
    }
    public function profil()
    {
        $this->load->view('landing/profil');
    }
    public function layanan()
    {
        $this->load->view('landing/layanan');
    }
    public function hubungi()
    {
        $this->load->view('landing/hubungi');
    }
    public function berita1()
    {
        $this->load->view('berita/berita1');
    }
    public function berita3()
    {
        $this->load->view('berita/berita3');
    }
}
