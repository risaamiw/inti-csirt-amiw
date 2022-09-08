<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Content extends CI_Controller
{
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
        $this->load->view('rfc2350/informasi-dokumen');
    }
    public function informasi()
    {
        $this->load->view('rfc2350/informasi_kontak');
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
}
