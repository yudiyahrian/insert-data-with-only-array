<?php

class biodata{
    public $nama = '';
    public $kelas = '';
    public $jurusan = '';
    public $sekolah = '';

    public function data(){
    if (isset($_POST['add'])){
        $this->nama = $_POST['name'];
        $this->kelas = $_POST['kelas'];
        $this->jurusan = $_POST['jurusan'];
        $this->sekolah = $_POST['sekolah'];
    }

        return [
            "nama"=>$this->nama,
            "kelas"=>$this->kelas,
            "jurusan"=>$this->jurusan,
            "sekolah"=>$this->sekolah,
        ];
    }

    protected $email = '';
    protected $no_hp = '';
    protected $jenis_kelamin = '';
    protected $alamat = '';
}

class bio_siswa extends biodata{
    
    public function data_siswa(){
        if (isset($_POST['add'])){
        $this->email = $_POST['email'];
        $this->no_hp = $_POST['no_hp'];
        $this->jenis_kelamin = $_POST['jenis_kelamin'];
        $this->alamat = $_POST['alamat'];
    }

        return [
            "email"=>$this->email,
            "no_hp"=>$this->no_hp,
            "jenis_kelamin"=>$this->jenis_kelamin,
            "alamat"=>$this->alamat,
        ];
    }
}
?>