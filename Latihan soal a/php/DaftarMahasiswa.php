<?php

/* membuat class */
class DaftarMahasiswa{

	/* deklarasi atribut private */
	private $nim = 0;
	private $nama = "";
	private $jenisKelamin = "";
	private $prodi = "";
	private $semester = 0;

	/* constructor */
	public function __construct($nim = 0, $nama = "", $jenisKelamin = "", $prodi = "", $semester = 0){
		$this->nim = $nim;
		$this->nama = $nama;
		$this->jenisKelamin = $jenisKelamin;
		$this->prodi = $prodi;
		$this->semester = $semester;
	}

	/* setter dan getter untuk atribut NIM */
	public function setNIM($nim){
		$this->nim = $nim;
	}

	public function getNIM(){
		return $this->nim;
	}

	/* setter dan getter untuk atribut nama */
	public function setNama($nama){
		$this->nama = $nama;
	}

	public function getNama(){
		return $this->nama;
	}

	/* setter dan getter untuk atribut jenis kelamin */
	public function setJenisKelamin($jenisKelamin){
		$this->jenisKelamin = $jenisKelamin;
	}

	public function getJenisKelamin(){
		return $this->jenisKelamin;
	}

	/* setter dan getter untuk atribut prodi */
	public function setProdi($prodi){
		$this->prodi = $prodi;
	}

	public function getProdi(){
		return $this->prodi;
	}

	/* setter dan getter untuk atribut semester */
	public function setSemester($semester){
		$this->semester = $semester;
	}

	public function getSemester(){
		return $this->semester;
	}
}

?>