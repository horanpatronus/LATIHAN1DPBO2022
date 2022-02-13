<?php

/* membuat class */
class TimSepakbola{

	/* deklarasi atribut private */
	private $nama = "";
	private $negara = "";
	private $tahun = 0;
	private $pemain = "";
	private $manajer = "";
	private $stadion = "";

	/* constructor */
	public function __construct($nama = "", $negara = "", $tahun = 0, $pemain = "", $manajer = "", $stadion = ""){
		$this->nama = $nama;
		$this->negara = $negara;
		$this->tahun = $tahun;
		$this->pemain = $pemain;
	}

	/* setter dan getter untuk atribut nama */
	public function setNama($nama){
		$this->nama = $nama;
	}

	public function getNama(){
		return $this->nama;
	}

	/* setter dan getter untuk atribut negara */
	public function setNegara($negara){
		$this->negara = $negara;
	}

	public function getNegara(){
		return $this->negara;
	}

	/* setter dan getter untuk atribut tahun */
	public function setTahun($tahun){
		$this->tahun = $tahun;
	}

	public function getTahun(){
		return $this->tahun;
	}

	/* setter dan getter untuk atribut pemain */
	public function setPemain($pemain){
		$this->pemain = $pemain;
	}

	public function getPemain(){
		return $this->pemain;
	}

	/* setter dan getter untuk atribut manajer */
	public function setManajer($manajer){
		$this->manajer = $manajer;
	}

	public function getManajer(){
		return $this->manajer;
	}

	/* setter dan getter untuk atribut stadion */
	public function setStadion($stadion){
		$this->stadion = $stadion;
	}

	public function getStadion(){
		return $this->stadion;
	}
}

?>