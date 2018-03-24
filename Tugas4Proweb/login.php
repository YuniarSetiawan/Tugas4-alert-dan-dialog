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
<?php
}else {
   if(isset($_SESSION["gagal"])){
       $_SESSION["gagal"]++;
   }else{
       $_SESSION["gagal"] = 1;
   } 
   header("location:index.php");
}
