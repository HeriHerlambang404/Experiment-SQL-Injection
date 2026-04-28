# Experiment-SQL-Injection

Melakukan Login tanpa password menggunakan SQL Injection

1. Menipu" sistem basis data (database) agar memberikan akses meskipun kamu tidak tahu kata sandi yang benar.Dengan cara menuliskan Kode (' OR 1=1 #) Di Username dan isi password acak
<img width="1919" height="1027" alt="image" src="https://github.com/user-attachments/assets/77d9e24b-2dbc-41fa-98c1-f8b0a787e29f" />
Dengan Menuliskan Komen di akhir username maka akan mengskip validasi password dan dapat login ke halaman utama setelah login
<img width="1919" height="1029" alt="image" src="https://github.com/user-attachments/assets/b8244c70-482e-4a7f-8617-5db82f4f7a23" />

2. Logika di Balik Layar (Kondisi Normal)
Ketika kamu mencoba login secara normal, website akan menjalankan perintah SQL ke database yang kira-kira bentuknya seperti ini:

SELECT * FROM users WHERE username = '$username' AND password = '$password';

Sistem hanya akan membiarkanmu masuk jika kedua syarat tersebut benar (Username cocok DAN Password cocok).
3. Apa yang Terjadi Saat Kamu Memasukkan ' OR 1=1 #
Saat kamu memasukkan kode tersebut ke kolom username, perintah SQL di server berubah menjadi:

SELECT * FROM users WHERE username = '' OR 1=1 #' AND password = 'acak';

Mari kita bedah bagian kodenya:

' (Tanda Petik Tunggal): Ini digunakan untuk menutup input username lebih awal.

OR 1=1: Ini adalah logika matematika yang selalu benar (True). Karena menggunakan operator OR, sistem tidak lagi peduli apakah username-nya benar atau salah. Selama salah satu syaratnya benar (dalam hal ini 1=1), maka seluruh pernyataan dianggap benar.

(atau -- di beberapa database): Ini adalah simbol komentar. Simbol ini memerintahkan database untuk mengabaikan semua kode yang ada di belakangnya. Jadi, pengecekan password yang asli (AND password = ...) dihapus dari perintah.

4. Hasil AkhirnyaKarena database melihat perintah tersebut sebagai "Cari user yang usernamenya kosong ATAU yang 1 sama dengan 1", dan karena $1=1$ selalu benar, database akan mengembalikan data pengguna pertama yang ia temukan (biasanya akun Admin).Sistem login kemudian mengira kamu berhasil melakukan autentikasi dan langsung membukakan pintu masuk.
