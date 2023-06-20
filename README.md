# daful
 daftar ulang siswa sekolah menggunakan codeIgniter 3 

## Minimum Requirement

- [X] PHP versi 7.1 dan extension yang diperlukan selama instalasi menggunakan composer
- [X] Webserver Apache/Nginx/IIS
- [X] Database MySQL/MariaDB

## Cara Install

- [X] Clone/Download repository `git clone https://github.com/habibubebo/daful.git` dan pindah ke folder `daful`
- [X] Jalankan [Composer](https://getcomposer.org/download) Install/Update `composer update --prefer-dist -vvv`
- [X] Setup koneksi database pada `.env`
- [X] Atur environment pada index.php sesuai dengan kebutuhan, terdapat 3 pilihan yaitu developmpent, testing, production

## buat file .env di dalam folder Application yang berisi :
```lang=bash
DB_HOSTNAME="localhost"
DB_USERNAME="usernameDatabase"
DB_PASSWORD="passwordDatabase"
DB_DATABASE="namaDatabase"
DB_DRIVER="mysqli"
```

## Lisensi

Proyek ini menggunakan lisensi [MIT](https://tldrlegal.com/license/mit-license) &copy; Habib Muhammad.
Pastikan Anda memahami kewajiban dan hak Anda sebelum Anda memutuskan untuk menggunakan aplikasi ini.