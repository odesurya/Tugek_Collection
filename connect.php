<?php
$conn = mysqli_connect("localhost","root","", "tugek_collection");

function registrasi($data){
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $nama =  mysqli_real_escape_string($conn, $data["nama"]);
    $tanggal = mysqli_real_escape_string($conn, $data["tanggal"]);
    $email = strtolower(stripcslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["Password"]);
    $password1 = mysqli_real_escape_string($conn, $data["Password1"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
    	echo"<script>
		alert('username sudah terdaftar!');
		</script>";
		return false;
    }
    
    //data apakah telah diisi
    if($username == null){
       echo"<script>
       alert('data mohon diisi');
       </script>";
		return false;
    }

    // cek konfirmasi passowrd
    if($password !== $password1){
    	echo"<script>
		alert('konfirmasi password tidak sesuai');
		</script>";
		return false;
    }
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan ke db
    mysqli_query($conn, "INSERT INTO user VALUES('','$username','$nama', '$tanggal','$email', '$password')");
    return mysqli_affected_rows($conn);
}
?>