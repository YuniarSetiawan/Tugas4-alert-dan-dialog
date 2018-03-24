# Tugas4-alert-dan-dialog
## Penjelasan
- Algoritma dan Pseudocode
 ```sh
  ALGORITMA
    1.	Start
    2.	Masukan username dan password
    3.	Jika username dan password benar akan masuk halaman berikutnya
    4.	Jika salah  akan amuncul alert peringatan salah berapa kali
    5.	Jika salah sebanyak 3 kali maka akan diblokir
    6.	Jika  mengisi tidak lengkap akan muncul dialog untuk melegkapi password atau username
    7.	End
 	Pseudocode
    1.	Pertama buat sintax untuk tampilan awal di index.php
    2.	Buat file login.php untuk menentukan ketika salah/benar username dan pasword
    3.	Sintak jika benar
         <?php
         session_start();
         $user = $_POST["inEmail"];
         $pass = $_POST["inPassword"];
         //================================
         $dbuser = "yuniar@gmail.com";
         $dbpass = "yuniar123";
         //================================
         if($user == $dbuser && $pass == $dbpass){
         ?>
         <script>
             window.location="berhasil.php";
         </script>
    4.	Jika salah 
          }else {
           if(isset($_SESSION["gagal"])){
             $_SESSION["gagal"]++;
           }else{
             $_SESSION["gagal"] = 1;
          } 
          header("location:index.php");
          }
    5.	Di index.php memanggil login.php untuk sebuah aksi ketika username dan password benar
    6.	Ketika username dan password benar makan login.php akan mengirimkan ke berhasil.php

 ```
![flow](https://github.com/YuniarSetiawan/Tugas4-alert-dan-dialog/blob/master/flowchart.png)
![salah](https://github.com/YuniarSetiawan/Tugas4-alert-dan-dialog/blob/master/user%20dan%20pass%20salah.PNG)
![belum lengkap](https://github.com/YuniarSetiawan/Tugas4-alert-dan-dialog/blob/master/belum%20lengkap.PNG)
![berhasil](https://github.com/YuniarSetiawan/Tugas4-alert-dan-dialog/blob/master/berhasil.PNG)
