# Sistem Informasi Surat Keterangan Mahasiswa (SKM)

#### Configurasi Project CI ( yang telah dilakukan)
1. penghapusan index.php dari url 

      sehingga dapat diakses dengan http://localhost/skm/namaRoute atau http://localhost/skm/NamaController/method.
      
2. base_url telah diubah menjadi : http://localhost/skm/ .
3. NAME_SITE pada file constant.php diisi dengan 'SKM'.
4. Menggunakan template SBAdmin2 sebagai template sementara.
5. Telah menerapkan fitur *Templating* layout sederhana.
6. Ubah file config.php bagian $config['composer_autoload'] = 'vendor/autoload.php'; untuk mengaktifkan dompdf.

#### Resource 
1. DomPDF : https://www.petanikode.com/codeigniter-dompdf/ .


#### TODO
1. Login MultiLevelUser.
2. Database Mahasiswa / API.
3. Parsing data mahasiswa ke file template pdf.
4. Testing PDF.
