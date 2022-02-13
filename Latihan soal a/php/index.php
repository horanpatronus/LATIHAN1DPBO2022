<?php
include "DaftarMahasiswa.php";

/* memasukkan data menggunakan setter getter */
$mahasiswa1 = new DaftarMahasiswa();
$mahasiswa1->setNIM(2003688);
$mahasiswa1->setNama("Rahma Maulida");
$mahasiswa1->setJenisKelamin("Perempuan");
$mahasiswa1->setProdi("Ilmu Komputer");
$mahasiswa1->setSemester(4);

/* memasukkan data dengan konstruktor */
$mahasiswa2 = new DaftarMahasiswa(2000360, "Muhammad Aditya Hasta Pratama", "Laki-Laki", "Matematika", 2);

/* judul tampilan */
echo "<h2><b> Daftar Mahasiswa Universitas Pendidikan Indonesia </b></h2>";

/* menampilkan isi data menggunakan getter */
echo  "<h3><b>Mahasiswa 1 </b></h3>";
echo "NIM           : ". $mahasiswa1->getNIM() ."<br>";
echo "Nama          : ". $mahasiswa1->getNama() ."<br>";
echo "Jenis Kelamin : ". $mahasiswa1->getJenisKelamin() ."<br>";
echo "Program Studi : ". $mahasiswa1->getProdi() ."<br>";
echo "Semester      : ". $mahasiswa1->getSemester() ."<br>";

echo "<br>";

echo  "<h3><b>Mahasiswa 2 </b></h3>";
echo "NIM           : ". $mahasiswa2->getNIM() ."<br>";
echo "Nama          : ". $mahasiswa2->getNama() ."<br>";
echo "Jenis Kelamin : ". $mahasiswa2->getJenisKelamin() ."<br>";
echo "Program Studi : ". $mahasiswa2->getProdi() ."<br>";
echo "Semester      : ". $mahasiswa2->getSemester() ."<br>";

?>