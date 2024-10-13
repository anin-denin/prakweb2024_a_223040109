<?php

class Mahasiswa extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data); // Menambahkan $data agar view menerima data
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa'; // Ubah judul untuk halaman detail
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data); // Ubah view menjadi detail untuk menunjukkan data spesifik
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location ' . BASEURL . '/mahasiswa');
        } else {
            Flasher::setFlas('gagal', 'ditambahkan', 'danger');
            header('Location: '. BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function hapus($id)
    {
        if($this->model('Mahasiswa_model')->hapusDataMahasiswa($_POST) > 0 ){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location ' . BASEURL . '/mahasiswa');
        } else {
            Flasher::setFlas('gagal', 'dihapus', 'danger');
            header('Location: '. BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function getUbah() 
    {
        echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $this->view('templates/header'. $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer');
    }
}   

