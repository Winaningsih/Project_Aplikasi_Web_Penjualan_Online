<?php

class Model_kategori extends CI_Model
{
    public function data_sofa()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'sofa'));
    }

    public function data_lemari()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'lemari'));
    }

    public function data_tempat_tidur()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'tempat tidur'));
    }

    public function data_elektronik()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'elektronik'));
    }

    public function data_perlengkapan_dapur()
    {
        return $this->db->get_where("tb_barang", array('kategori' => 'perlengkapan dapur'));
    }
}
