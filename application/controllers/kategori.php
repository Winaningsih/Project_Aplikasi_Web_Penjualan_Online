<?php

class kategori extends CI_Controller
{
    public function sofa()
    {
        $data['sofa'] = $this->model_kategori->data_sofa()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('sofa', $data);
        $this->load->view('templates/footer');
    }

    public function lemari()
    {
        $data['lemari'] = $this->model_kategori->data_lemari()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('lemari', $data);
        $this->load->view('templates/footer');
    }

    public function tempat_tidur()
    {
        $data['tempat_tidur'] = $this->model_kategori->data_tempat_tidur()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tempat_tidur', $data);
        $this->load->view('templates/footer');
    }

    public function elektronik()
    {
        $data['elektronik'] = $this->model_kategori->data_elektronik()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('elektronik', $data);
        $this->load->view('templates/footer');
    }

    public function perlengkapan_dapur()
    {
        $data['perlengkapan_dapur'] = $this->model_kategori->data_perlengkapan_dapur()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('perlengkapan_dapur', $data);
        $this->load->view('templates/footer');
    }
}
