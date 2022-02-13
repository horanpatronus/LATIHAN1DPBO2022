<?php
include "TimSepakbola.php";

/* deklarasi variabel lokal */
$n = 5;
$x = 0;

/* deklarasi array berisikan data */
$teams = array (
	array("Manchester United F.C.", "Inggris (Old Trafford, Manchester Raya)", 1878, "Christiano Ronaldo", "Ralf Rangnick", "Old Trafford"),
	array("Chelsea F.C.", "Inggris (Fullham, London)", 1905, "Romelu Lukaku", "Thomas Tuchel", "Stamford Bridge"),
	array("Liverpool F.C.", "Inggris (Liverpool)", 1892, "Mohamed Salah", "Jürgen Klopp", "Anfield"),
	array("Arsenal F.C.", "Inggris (Holloway, London)", 1886, "Bukayo Saka", "Mikel Arteta", "Stadion Emirates"),
	array("Manchester City F.C.", "Inggris (Manchester)", 1880, "Jack Grealish", "Pep Guardiola", "Stadion Etihad")
);

/* proses perulangan untuk memasukkan data dari array ke object menggunakan setter */
for($x = 0; $x < $n; $x++){
	$tim[$x] = new TimSepakbola();
	$tim[$x]->setNama($teams[$x][0]);
	$tim[$x]->setNegara($teams[$x][1]);
	$tim[$x]->setTahun($teams[$x][2]);
	$tim[$x]->setPemain($teams[$x][3]);
	$tim[$x]->setManajer($teams[$x][4]);
	$tim[$x]->setStadion($teams[$x][5]);
}

/* judul tampilan */
echo "<h2><b> Daftar Tim Sepakbola di Inggris </b></h2>";

/* proses perulangan untuk menampilkan isi data menggunakan getter */
for($x = 0; $x < $n; $x++){
	echo "<h3><b>" . "Tim " . $x+1 . " : " . $tim[$x]->getNama() . "</b></h3>";
	echo "Negara Asal   : ". $tim[$x]->getNegara() ."<br>";
	echo "Tahun berdiri : ". $tim[$x]->getTahun() ."<br>";
	echo "Pemain        : ". $tim[$x]->getPemain() ."<br>";
	echo "Manajer       : ". $tim[$x]->getManajer() ."<br>";
	echo "Stadion       : ". $tim[$x]->getStadion() ."<br>";
	
}

?>