<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Login Dengan PHP dan MySQLi</title>
</head>
<body>
    <h2>Login</h2>
    <br/>
    <!--cek pesan notifikasi-->
    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
        echo "Login gagal! username dan password salah";
    }else if($_GET['pesan'] == "logout"){
        echo "Anda telah berhasil logout";
    }else if($_GET['pesan'] == "belum_login"){
        echo "Anda harus login untuk mengakses halaman admin";
    }
}
?>
<br/>
<br/>
<form method="post" action="cek_login.php">
<table>
    <tr>
        <td>username</td>
        <td>:</td>
        <td><input type="text" name="username" placeholder="Masukkan username"></td>
</tr>
<tr>
    <td>password</td>
    <td>:</td>
    <td><input type="password" name="password" placeholder="Masukkan Password"></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><input type="Submit" value="LOGIN"></td>
</tr>
</table>
</form>
</body>
</html>