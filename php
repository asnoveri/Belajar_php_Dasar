Tutorial php dasar 

# Mengintsal PHP
	1. download dan intsall xampp
	2. setiing path -> digunakan agar kita bisa megkakses php dari terminal atau command prompt
		- (linux /mac) edit file .bashrc atau .profile atau .zshrc dan tambahkan script berikut
			export PATH="/Applications/XAMPP/bin:$PATH"
		- (Windows)
			- cari dimana tersimpan file php.exe
			- bukak env
			- klik enviroment variable
			- cari path pada user varibael(hanya bisa digunakan oleh user tertentu) atau pada sistem variabel(bisa digunakan untuk seluh user)
			- lalu klik tombol edit
			- dan akan tampil halaman edit enviroment variabale 
			- lalu klik new dan tambahkan folder tempat tersimpanny file php.exe
			- lalu coba tes php version pada cmd atau terminal
      
   # menjalankan file php via terminal
      - jalankan terminal
      - isikan php namafile.php
      
      
   # Tipe Data di PHP   
      - Tipe data number
      	 - int   -> bilangan bulat decimal (base 10), hexadecimal (base16), binary (base2)
	 - float -> bilangan pecahan	
      - Tipe Data String
      	- tipe data string adalah representasi dari texs
	- string bisa mengandung kosong atau banyak karakter
	- membuat string bisa mengunakan single qoute ('') dan double qoute("")

    # Variable
      - temnpat penyimpanan data sehinga bisa di gunakan lagi
      - bisa menampung berbagai jenis tipe data dan bisa berubah-ubah tipe datannya
      - membuatr varibale bisa mengunakan tanda dolar ($) diikuti dengan nama varibalenya
      - penamaan variabel tidak boleh mengandung spasi
      
    # Variable Variables
    	- membuat variable dari string value variable
	- tidak di rekomendasikan mengunakan fitru ini karena sangat membingungkan
	- membuat variable dari value variable kita bisa mengunakan tanda $$ diikuti dengan nama varibalenya
	
	
    # Constant
    	- tempat penyimpanan data yang tidak bisa di ubah
	- membuat constant kita dapat mengunakan function define()
	- Pembuatan nama constant dengan mengunakan UPPER_CASE
   
