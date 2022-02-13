from TimSepakbola import TimSepakbola

n = int(input("Masukkan jumlah tim sepakbola yang akan diinput: "))

# membuat array object
arrTim = [TimSepakbola() for i in range(n)]

# perulangan untuk menerima masukan data (input)
i = 0
for i in range(n):
	print("\nTim Sepakbola ", i+1)
	print("----------------")
	nama = input("Masukkan Nama Tim          : ")
	negara = input("Masukkan Negara Asal       : ")
	tahun = input("Masukkan Tahun Berdiri Tim : ")
	pemain = input("Masukkan Nama Pemain       : ")
	manajer = input("Masukkan Nama Manajer      : ")
	stadion = input("Masukkan Nama Stadion      : ")

	# proses memasukkan data input ke array menggunakan setter
	arrTim[i].setNama(nama)
	arrTim[i].setNegara(negara)
	arrTim[i].setTahun(tahun)
	arrTim[i].setPemain(pemain)
	arrTim[i].setManajer(manajer)
	arrTim[i].setStadion(stadion)

print("\n=======================================================")
print("=======================================================")

# proses perulangan untuk menampilkan keluaran (output) menggunakan getter
i = 0
for i in range(n):
	print("\nTim {} : {}". format(i+1, str(arrTim[i].getNama())))
	print("------------------------------")
	print("Negara Asal   : " + str(arrTim[i].getNegara()))
	print("Tahun Berdiri : " + str(arrTim[i].getTahun()))
	print("Nama Pemain   : " + str(arrTim[i].getPemain()))
	print("Manajer       : " + str(arrTim[i].getManajer()))
	print("Stadion       : " + str(arrTim[i].getStadion()))