import java.util.*;

public class Main{
	public static void main(String[] args){

		System.out.print("\nMasukkan jumlah tim sepakbola yang akan diinput: ");
		int n = 0;

		/* memasukkan jumlah tim yang akan diinput */
		Scanner sc = new Scanner(System.in);
		try{
			n = sc.nextInt();
			sc.nextLine();
		}catch(Exception e){}

		/* inisialisasi array object */
		TimSepakbola[] arrTim = new TimSepakbola[n];

		/* deklarasi variabel lokal penampung input data */
		int i = 0;
		String nama = "";
		String negara = "";
		int tahun = 0;
		String pemain = "";
		String manajer = "";
		String stadion = "";

		/* proses perulangan untuk menerima masukan data tim */
		for(i=0; i<n; i++){
			System.out.println("\nTim Sepakbola " + (i+1));

			System.out.print("Masukkan Nama Tim          : ");
			try{
				nama = sc.nextLine();
			}catch(Exception e){}
			
			System.out.print("Masukkan Negara Asal       : ");
			try{
				negara = sc.nextLine();
			}catch(Exception e){}
			
			System.out.print("Masukkan Tahun Berdiri Tim : ");
			try{
				tahun = sc.nextInt();
				sc.nextLine();
			}catch(Exception e){}

			System.out.print("Masukkan Nama Pemain       : ");
			try{
				pemain = sc.nextLine();
			}catch(Exception e){}

			System.out.print("Masukkan Nama Manajer      : ");
			try{
				manajer = sc.nextLine();
			}catch(Exception e){}

			System.out.print("Masukkan Stadion           : ");
			try{
				stadion = sc.nextLine();
			}catch(Exception e){}

			/* memasukkan data dari variabel penampung ke object menggunakan setter */
			arrTim[i] = new TimSepakbola();
			arrTim[i].setNama(nama);
			arrTim[i].setNegara(negara);
			arrTim[i].setTahun(tahun);
			arrTim[i].setPemain(pemain);
			arrTim[i].setManajer(manajer);
			arrTim[i].setStadion(stadion);

		}

		System.out.println("\n=======================================================");
		System.out.println("=======================================================");

		/* proses perulangan untuk menampilkan data menggunakan getter */
		for(i=0; i<n; i++){
			System.out.println("\nTim " + (i+1) + " : " + arrTim[i].getNama());
			System.out.println("------------------------------");
			System.out.println("Negara Asal   : " + arrTim[i].getNegara());
			System.out.println("Tahun Berdiri : " + arrTim[i].getTahun());
			System.out.println("Nama Pemain   : " + arrTim[i].getPemain());
			System.out.println("Manajer       : " + arrTim[i].getManajer());
			System.out.println("Stadion       : " + arrTim[i].getStadion());
		}
	}
}