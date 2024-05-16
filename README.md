# XSS
Cross-Site Scripting (XSS) merupakan salah satu serangan pada aplikasi web dengan memasukan script melalui celah keamanan pada aplikasi web. Celah keamanan biasanya muncul pada kode yang menerima masukan dari pengguna yang tidak melalui proses ivalidasi/sanitasi. Pada umum nya serangan ini memasukan script berbahaya melalui browser kemudian script tersebut akan terbaca sebagai bagian dari aplikasi web dan dijalankan pada pengguna lain dari aplikasi web tersebut.

### Jenis XSS 
#### (Early ON)
- Reflected XSS (AKA Non-Persistent or Type I) XSS 
Reflected XSS terjadi ketika input pengguna yang mengandung script jahat langsung ditampilkan oleh aplikasi web dalam tanpa menyimpan data.

- Stored XSS (AKA Persistent or Type II)
Stored XSS (AKA Persistent or Type II) terjadi ketika input pengguna yang mengandung script jahat disimpan dalam server target, kemudian input tersebut akan diambil oleh korban/pengguna lain ketika meminta data dari server.

- DOM Based XSS (AKA Type-0)
DOM Based XSS (AKA Type-0) terjadi ketika input pengguna yang mengandung script dieksekusi pada sisi client dan memanipulasi Document Object Model (DOM) pada aplikais web.

#### (2012 OWASP)
- Sever Side
Terjadi ketika input dari user yang tidak terpercaya dimasukan pada respon yang berasal dari aplikasi web.
- Client Side
Terjadi ketika input dari user yang tidak terpercaya digunakan untuk memperbarui DOM dengan Javascript yang tidak aman.



# Taint Analisis
### Source
bagian kode yang memungkinkan penyerang unutk mengkontaminasi kode berbahaya pada aplikasi web. Biasa nya berupa HTTP Request, File Upload, dan session.
### Sink
bagian kode dimana tindakan akhir terhadap input pengguna dijalankan dan biasanya merupakan target serangan XSS. Biasanya berupa
### Sanitizer
bagian kode dimana input dari pengguna disaring dari script berbahaya.


### List of XSS Source
- $_POST
- $_GET
- $_REQUEST
- $_FILES
- $_COOKIE
- $_SERVERS
- HTTP_GET_VARS		
- HTTP_POST_VARS		
- HTTP_COOKIE_VARS		
- HTTP_REQUEST_VARS	

### List of xSS Source
- print 
- printf
- fprintf
- file_put_contents
- file_get_contents
- fgets
- fgetc
- fscanf

### List of xSS Sanitizer
- urlencode
- htmlentities
- preg_replace
- strip_tags


# Masalah dalam Taint Analisis XSS
- PHP Variable Handdler (isset(),is_bool(),etc)
- Mengenali Custom Sanitizer


# Source and usefull Link
- https://owasp.org/www-community/attacks/xss/
- https://owasp.org/www-community/Types_of_Cross-Site_Scripting
- https://cyberw1ng.medium.com/mastering-xss-a-comprehensive-guide-to-finding-cross-site-scripting-vulnerabilities-3891ab930274
- https://portswigger.net/web-security/cross-site-scripting#what-is-cross-site-scripting-xss
- https://www.dewaweb.com/blog/apa-itu-xss/
- https://domgo.at/cxss/sinks
- https://github.com/swisskyrepo/PayloadsAllTheThings/tree/master/XSS%20Injection#vulnerability-details
