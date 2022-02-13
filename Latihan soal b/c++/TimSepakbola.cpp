#include <iostream>
#include <string>

using namespace std;

class TimSepakbola{

	private:
		/* deklarasi atribut private */
		string nama;
		string negara;
		int tahun;
		string pemain;
		string manajer;
		string stadion;

	public:

		/* constructor */
		TimSepakbola(){
			this->nama = "";
			this->negara = "";
			this->tahun = 0;
			this->pemain = "";
			this->manajer = "";
			this->stadion = "";
		}

		TimSepakbola(string nama, string negara, int tahun, string pemain, string manajer, string stadion){
			this->nama = nama;
			this->negara = negara;
			this->tahun = tahun;
			this->pemain = pemain;
			this->manajer = manajer;
			this->stadion = stadion;
		}

		/* setter dan getter atribut nama */
		void setNama(string nama){
			this->nama = nama;
		}

		string getNama(){
			return this->nama;
		}

		/* setter dan getter atribut negara */
		void setNegara(string negara){
			this->negara = negara;
		}

		string getNegara(){
			return this->negara;
		}

		/* setter dan getter atribut tahun */
		void setTahun(int tahun){
			this->tahun = tahun;
		}

		int getTahun(){
			return this->tahun;
		}

		/* setter dan getter atribut pemain */
		void setPemain(string pemain){
			this->pemain = pemain;
		}

		string getPemain(){
			return this->pemain;
		}

		/* setter dan getter atribut manajer */
		void setManajer(string manajer){
			this->manajer = manajer;
		}

		string getManajer(){
			return this->manajer;
		}

		/* setter dan getter atribut stadion */
		void setStadion(string stadion){
			this->stadion = stadion;
		}

		string getStadion(){
			return this->stadion;
		}

		/* destructor */
		~TimSepakbola(){}
};