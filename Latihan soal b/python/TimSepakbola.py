# membuat class 
class TimSepakbola():

	# deklarasi atribut private
	__nama = ""
	__negara = ""
	__tahun = 0
	__pemain = ""
	__manajer = ""
	__stadion = ""

	# constructor
	def __init__(self, nama = "", negara = "", tahun = 0, pemain = "", manajer = "", stadion = "") :
		self.__nama = nama
		self.__negara = negara
		self.__tahun = tahun
		self.__pemain = pemain
		self.__manajer = manajer
		self.stadion = stadion

	# setter dan getter atribut nama
	def setNama(self, nama):
		self.__nama = nama

	def getNama(self):
		return self.__nama

	# setter dan getter atribut negara
	def setNegara(self, negara):
		self.__negara = negara

	def getNegara(self):
		return self.__negara

	# setter dan getter atribut tahun
	def setTahun(self, tahun):
		self.__tahun = tahun

	def getTahun(self):
		return self.__tahun

	# setter dan getter atribut pemain
	def setPemain(self, pemain):
		self.__pemain = pemain

	def getPemain(self):
		return self.__pemain
	
	# setter dan getter atribut manajer
	def setManajer(self, manajer):
		self.__manajer = manajer

	def getManajer(self):
		return self.__manajer
	
	# setter dan getter atribut stadion
	def setStadion(self, stadion):
		self.__stadion = stadion

	def getStadion(self):
		return self.__stadion