/* membuat class */
public class TimSepakbola{
	
	/* deklarasi atribut private */
	private String nama;
	private String negara;
	private int tahun;
	private String pemain;
	private String manajer;
	private String stadion;

	/* constructor */
	public TimSepakbola(){}

	public TimSepakbola(String nama, String negara, int tahun, String pemain, String manajer, String stadion){
		this.nama = nama;
		this.negara = negara;
		this.tahun = tahun;
		this.pemain = pemain;
		this.manajer = manajer;
		this.stadion = stadion;
	}

	/* setter dan getter untuk atribut nama */
	public String getNama(){
		return nama;
	}

	public void setNama(String nama){
		this.nama = nama;
	}

	/* setter dan getter untuk atribut negara */
	public String getNegara(){
		return negara;
	}

	public void setNegara(String negara){
		this.negara = negara;
	}

	/* setter dan getter untuk atribut tahun */
	public int getTahun(){
		return tahun;
	}

	public void setTahun(int tahun){
		this.tahun = tahun;
	}

	/* setter dan getter untuk atribut pemain */
	public String getPemain(){
		return pemain;
	}

	public void setPemain(String pemain){
		this.pemain = pemain;
	}

	/* setter dan getter untuk atribut manajer */
	public String getManajer(){
		return manajer;
	}

	public void setManajer(String manajer){
		this.manajer = manajer;
	}

	/* setter dan getter untuk atribut stadion */
	public String getStadion(){
		return stadion;
	}

	public void setStadion(String stadion){
		this.stadion = stadion;
	}
}