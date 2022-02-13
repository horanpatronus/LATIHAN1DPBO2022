#include <bits/stdc++.h>
#include "TimSepakbola.cpp"

using namespace std;

int main(){
	
	/* deklarasi variabel lokal */
	int n = 0, i = 0;

	/* proses memasukkan jumlah data */
	cout << "Masukkan banyaknya jumlah tim sepakbola: ";
	cin >> n;
	cin.ignore();

	/* inisialisasi array object */
	TimSepakbola arrTim[n];

	/* proses perulangan untuk memasukkan isi data (input) */
	for(i=0; i<n; i++){

		/* deklarasi variabel lokal penampung input */
		string nama = "";
		string negara = "";
		int tahun = 0;
		string pemain = "";
		string manajer = "";
		string stadion = "";

		/* tampilan awal program */
		cout << "\nTim Sepakbola " << i+1 << endl;
		cout << "----------------" << endl;
		
		/* memasukkan tiap data satu persatu */
		cout << "Masukkan Nama: ";
		getline (cin, nama);
		cout << "Masukkan Negara Asal: "; 
		getline (cin, negara);
		cout << "Masukkan Tahun: ";
		cin >> tahun;
		cin.ignore();
		cout << "Masukkan Nama Pemain: ";
		getline (cin, pemain);
		cout << "Masukkan Nama Manajer: ";
		getline (cin, manajer);
		cout << "Masukkan Nama Stadion: ";
		getline (cin, stadion);

		/* menyimpan data input ke dalam array */
		arrTim[i].setNama(nama);
		arrTim[i].setNegara(negara);
		arrTim[i].setTahun(tahun);
		arrTim[i].setPemain(pemain);
		arrTim[i].setManajer(manajer);
		arrTim[i].setStadion(stadion);
	}

	cout << "\n=======================================================" << endl;
	cout << "=======================================================" << endl;

	/* proses perulangan menampilkan data (output) */ 
	for(i=0; i<n; i++){
		cout << endl << "Tim " << i+1 << " : " << arrTim[i].getNama() << endl;
		cout << "------------------------------" << endl;
		cout << "Nama          : " << arrTim[i].getNama() << endl;
		cout << "Negara Asal   : " << arrTim[i].getNegara() << endl;
		cout << "Tahun Berdiri : " << arrTim[i].getTahun() << endl;
		cout << "Nama Pemain   : " << arrTim[i].getPemain() << endl;
		cout << "Manajer       : " << arrTim[i].getManajer() << endl;
		cout << "Stadion       : " << arrTim[i].getStadion() << endl;
		fflush(stdin);
	}
}
