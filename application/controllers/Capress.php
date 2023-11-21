<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Capress extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Capress_model');
    }
    public function index()
    {
        $data['judul']="Halaman Calon Presiden";
        $data['calon_presiden']=$this->Capress_model->get();
        $this->load->view("layout/header");
        $this->load->view("mahasiswa/vw_capress", $data);
        $this->load->view("layout/footer");
    }
    public function tambah()
    {
        $data['judul']="Halaman Tambah Calon Presiden";
        $this->load->view("layout/header");
        $this->load->view("mahasiswa/vw_tambah_capress", $data);
        $this->load->view("layout/footer");
    }
    public function detail($id)
    {
        $data['judul']="Halaman Detail Calon Presiden";
        $data['calon_presiden']= $this->Capress_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("mahasiswa/vw_detail_capress", $data);
        $this->load->view("layout/footer");
    }
    public function hapus($id)
    {
        $this->Capress_model->delete($id);
        redirect('Capress');
    }
    function upload()
    {
        $data= [
            'id'=>$this->input->post('id'),
            'nik'=>$this->input->post('nik'),
            'nama_lengkap'=>$this->input->post('nama_lengkap'),
            'asal'=>$this->input->post('asal'),
            'partai_pendukung'=>$this->input->post('partai_pendukung'),
            'riwayat_pekerjaan'=>$this->input->post('riwayat_pekerjaan'),
            'umur'=>$this->input->post('umur'),
        ];
        $this->Capress_model->insert($data);
        redirect('Capress');
    }
    public function edit($id)
    {
        $data['judul']="Halaman Edit Calon Presiden";
        $data['calon_presiden']= $this->Capress_model->getById($id);
        $this->load->view("layout/header");
        $this->load->view("mahasiswa/vw_ubah_capress", $data);
        $this->load->view("layout/footer");
    }
    function update()
    {
        $data= [
            'id'=>$this->input->post('id'),
            'nik'=>$this->input->post('nik'),
            'nama_lengkap'=>$this->input->post('nama_lengkap'),
            'asal'=>$this->input->post('asal'),
            'partai_pendukung'=>$this->input->post('partai_pendukung'),
            'riwayat_pekerjaan'=>$this->input->post('riwayat_pekerjaan'),
            'umur'=>$this->input->post('umur'),
        ];
        $id=$this->input->post('id');
        $this->Capress_model->update(['id'=>$id], $data);
        redirect('Capress');
    }
}
?>