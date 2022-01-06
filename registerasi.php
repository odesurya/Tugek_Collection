<?php
require 'connect.php';

?>

<!doctype html>
<html lang="en"dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="button.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" /> 
    <link rel="stylesheet" href="footer.css"/>
    <title>Project 1</title>
  </head>
  <body>
    <nav id="navigasi">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <label class="logo">Tugek Collection</label>
        <ul>
  <li><a class="active" href="menu.php">Home</a></li>
  <li><a href="#">About</a></li>
  <li><a href="#page-footer">Contact</a></li>
  <li><a href="#page-footer">Feedback</a></li>
  </ul>
  </nav>
  <main>
   <div>
    <div id = "register">
    <div class="form-register">
        <center>
          <form action="" method="post">
            <table>
            <div class="imageregister">
                <img src="7.png" alt="" width="100px">
            </div>
            <div class="font">
                <th>
                    <h1> Register Form </h1>
                </th>
            </div>
            <div class="register">
                <tr>
                    <td>Username :</br><input type="Username" name="username" id="register1" ></td>
                </tr>
            </div>
            <div class="register">
                  <tr>
                    <td>Nama : <br><input type="text" name="nama" id="register1"></td>
                 </tr>
            </div>
            <div class="register">
                <tr>
                  <td>tanggal lahir :<br><input type="date" name="tanggal" id="register1"></td>
               </tr>
               </div>
            <div class="register">
                <tr>
                  <td>Email: <br><input type="email" name="email" id="register1"></td>
               </tr>
           </div>
           <div class="register">
                <tr>
                    <td>Set Password: <br><input type="Password" name="Password" id="register1"></td>
                </tr>
           </div>
           <div class="register">
                <tr>
                    <td>Confirm Password: <br><input type="Password" name="Password1" id="register1"></td>
                </tr>
            </div>
          
            <div class="register">
                 <tr>
                    <td><center></center><input type="submit" name="register" value="Register" widht="100px" id="submit"></center></td>
                </tr>
            </div>
          </table>   
        </form>
            <div class="font-register">
                <hr>
                <h7> Have account? please <a href="login.php">Login</a> </h7>
            </div>
            </center> 
    </div>
    <?php
if(isset($_POST["register"])){
	if(registrasi($_POST) > 0){
		echo"<script>
		alert('user baru berhasil ditambahkan');
    document.location.href = 'login.php';
		</script>";
	} else {
		echo mysqli_error($conn);
	}
}
?>
  </main>
 <footer id="page-footer">
    <div class="container">
      <div class="row">
        <div class="footer-logo">
          <h3><span class="fg-primary">Tugek Collection</span></h3>
        </div>
        <div class="footer-information">
          <h5>Contact Information</h5>
          <p>Jalan Raya Batutabih Klungkung</p>
          <p>Email: odesuryawidnyana@gmail.com</p>
          <p>Phone: 082144888888</p>
        </div>
        <div class="footer-social">
          <h5>Social Acount</h5>
          <div class="footer-content">
                 <ul class="socials">
                   <li><a href="https://www.facebook.com/ode.surya.79"><i class="fab fa-facebook-f"></i></a></li>
                   <li><a href="https://www.instagram.com/p/BtfBjcshYTS/?utm_medium=copy_link"><i class="fab fa-instagram"> </i></a></li>
                 </ul>
                </div>
        </div>
      </div>
      <hr>
      <div class="footercp">
        <div class="footercp">
          <p>Copyright 2022.</p>
        </div>
      </div>
    </div>
  </footer>
</body> 
</html>