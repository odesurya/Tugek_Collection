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
  <li><a class="active" href="menu-after-login.php">Home</a></li>
  <li><a href="#">About</a></li>
  <li><a href="#page-footer">Contact</a></li>
  <li><a href="#page-footer">Feedback</a></li>
  </ul>
  </nav>
  <main>
   <div>
    <div id = "Payment">
    <div class="form-Payment">
        <h4> Pesanan kamu<a href="menu-after-login.php"> ubah product</a></h4>
        <span>
            <div class="form-barang">
            <center>
            <div class="imagepayment">
                <img src="4.jpg" alt="foto product anda" width="150px" height="150px">
            </div>
            <div class="font-payment1">
                 <h6> Product yang dipilih</h6>
            </div> 
            <div class="font-payment">
                <hr>
                <p class="text-center my-1">Kemeja Putih</p>
                <p class="text-center my-1"><del>Rp150.000</del></p>
            </div>
            <center>
            </div>
        </span>
    </div>
    <div class="pembayaran">
        <center>
        <table border="1">
            <tr>
               <td>
                <input type="radio" name="pilih">Mobile Banking</input>
                <br>
                <img src="bca.png" alt="foto product anda" width="100px" height="50px">
                <img src="mandiri.png" alt="foto product anda" width="100px" height="50px">
                <img src="bri.png" alt="foto product anda" width="100px" height="50px">
                <img src="bni.png" alt="foto product anda" width="100px" height="100px">
               </br>
              </td>
            </tr>
            <tr>
            <td>
                <input type="radio" name="pilih">E-Wallet</input>
                <br>
                <img src="gopay.png" alt="foto product anda" width="150px" height="100px">
                <img src="ovo.png" alt="foto product anda" width="120px" height="30px">
                </br>
            </td>
                
            </tr>
        </table>
        <div class="botton-payment">
            <input type="submit" name="bayar" value="Bayar" widht="100px" id="botton-payment"></center>
       </div>
    </center>
    </div>

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