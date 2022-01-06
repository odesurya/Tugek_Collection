<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
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
 <form action="" method="POST"> 
    <li style ="color : white; font-style: bold;">
 <?php echo "<a>" . $_SESSION['username'] . "</a>"; ?>
    </li>
 <li><a class="active" href="#">Home</a></li>
  <li><a href="#">About</a></li>
  <li><a href="#page-footer">Contact</a></li>
  <li><a href="#page-footer">Feedback</a></li>
  </ul>
  </form>
  </nav>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="1.jpg" class="d-block w-100" alt="foto_orang" style="height: 40vh"> 
        <div class="carousel-caption d-none d-md-block">
          <h5>Pakaian Wanita berkelas</h5>
          <p>Semua kebutuhan pakaian anda terpenuhi disini.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="2.jpg" class="d-block w-100" alt="foto_hima"style="height: 40vh">
        <div class="carousel-caption d-none d-md-block">
            <h5>Pakaian Pria berkelas</h5>
            <p>Semua kebutuhan pakaian anda terpenuhi disini.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="3.jpg" class="d-block w-100" alt="foto_unud" style="height: 40vh">
        <div class="carousel-caption d-none d-md-block">
            <h5>Pakaian Balita berkelas</h5>
            <p>Semua kebutuhan pakaian anda terpenuhi disini.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <main>
    <div id="card">
        <div class="card">
            <h2 class="my-2">Pakaian Wanita Berkelas</h2>
            <div class="cards">
                <div class="card-item">
                    <img src="4.jpg?v=1569994029" alt="" width="200px">
                    <div class="lines">
                        <p class="text-center my-1">Kemeja Putih</p>
                        <p class="text-center my-1">Rp.150.000</p>
                         <a href="payment.php"> <p class="text-center my-1"><b>Grab now!</b> </a></p>
                    </div>
                </div>

                <div class="card-item">
                    <img src="5.jpg?v=1569993934" alt="" width="200px">
                    <div class="lines">
                        <p class="text-center my-1">Daster</p>
                        <p class="text-center my-1">Rp.20.000 - <del>Rp.45.000</del></p>
                        <a href="payment.php"> <p class="text-center my-1"><b>Grab now!</b> </a></p>
                    </div>
                </div>
                
                <div class="card-item">
                    <img src="6.jpg?v=1569993934" alt="" width="200px" height="200px">
                    <div class="lines">
                        <p class="text-center my-1">Baju Melali</p>
                        <p class="text-center my-1">Rp.50.000 - <del>Rp.150.000</del></p>
                        <a href="payment.php"> <p class="text-center my-1"><b>Grab now!</b> </a></p>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="card">
            <h2 class="my-2">Kain Lembaran Berkelas</h2>
            <div class="cards">
                <div class="card-item">
                    <img src="7.jpeg" alt="" width="200px">
                    <div class="lines">
                        <p class="text-center my-1">Kain Warna Hijau</p>
                        <p class="text-center my-1">Rp.40.000 - <del>RP.45.000</del></p>
                        <a href="payment.php"> <p class="text-center my-1"><b>Grab now!</b> </a></p>
                    </div>
                </div>

                <div class="card-item">
                    <img src="8.jpeg" alt="" width="200px">
                    <div class="lines">
                        <p class="text-center my-1">Kain Warna Nudemillo</p>
                        <p class="text-center my-1">Rp.40.000 - <del>RP.45.000</del></p>
                        <a href="payment.php"> <p class="text-center my-1"><b>Grab now!</b> </a></p>
                    </div>
                </div>

                <div class="card-item">
                    <img src="9.jpeg" alt="" width="200px">
                    <div class="lines">
                        <p class="text-center my-1">Kain Warna Gold lasem</p>
                        <p class="text-center my-1">Rp.40.000 - <del>RP.45.000</del></p>
                        <a href="payment.php"> <p class="text-center my-1"><b>Grab now!</b> </a></p>
                    </div>
                </div>
                
                <div class="card-item">
                    <img src="10.jpeg" alt="" width="200px">
                    <div class="lines">
                        <p class="text-center my-1">Kain Warna Dusty Purple</p>
                        <p class="text-center my-1">Rp.40.000 - <del>RP.45.000</del></p>
                        <a href="payment.php"> <p class="text-center my-1"><b>Grab now!</b> </a></p>
                    </div>
                </div>

                <div class="card-item">
                    <img src="11.jpeg" alt="" width="200px">
                    <div class="lines">
                        <p class="text-center my-1">Kain Warna Gading Sandat</p>
                        <p class="text-center my-1">Rp.40.000 - <del>RP.45.000</del></p>
                        <a href="payment.php"> <p class="text-center my-1"><b>Grab now!</b> </a></p>
                    </div>
                </div>

                <div class="card-item">
                    <img src="12.jpeg" alt="" width="200px">
                    <div class="lines">
                        <p class="text-center my-1">Kain Warna Putih Bersih</p>
                        <p class="text-center my-1">Rp.40.000 - <del>RP.45.000</del></p>
                        <a href="payment.php"> <p class="text-center my-1"><b>Grab now!</b> </a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <h2 class="my-2">Baju Kebaya Berkelas</h2>
            <div class="cards">
                <div class="card-item">
                    <img src="13.jpeg" alt="" width="200px">
                    <div class="lines">
                        <p class="text-center my-1">Kebaya Warna Pink Creamy</p>
                        <p class="text-center my-1">Rp.70.000 - <del>RP.105.000</del></p>
                        <a href="payment.php"> <p class="text-center my-1"><b>Grab now!</b> </a></p>
                    </div>
                </div>

                <div class="card-item">
                    <img src="14.jpeg" alt="" width="200px">
                    <div class="lines">
                        <p class="text-center my-1">Kebaya Hijau Sandat</p>
                        <p class="text-center my-1">Rp.70.000 - <del>RP.105.000</del></p>
                        <a href="payment.php"> <p class="text-center my-1"><b>Grab now!</b> </a></p>
                    </div>
                </div>

                <div class="card-item">
                    <img src="15.jpeg" alt="" width="200px">
                    <div class="lines">
                        <p class="text-center my-1">Kebaya Dark Orchid</p>
                        <p class="text-center my-1">Rp.70.000 - <del>RP.105.000</del></p>
                        <a href="payment.php"> <p class="text-center my-1"><b>Grab now!</b> </a></p>
                    </div>
                </div>
                
                <div class="card-item">
                    <img src="16.jpeg" alt="" width="200px" height="200px">
                    <div class="lines">
                        <p class="text-center my-1">Kebaya Bordir Ungu</p>
                        <p class="text-center my-1">Rp.70.000 - <del>RP.105.000</del></p>
                        <a href="payment.php"> <p class="text-center my-1"><b>Grab now!</b> </a></p>
                    </div>
                </div>

                <div class="card-item">
                    <img src="17.jpeg" alt="" width="200px" height="200px">
                    <div class="lines">
                        <p class="text-center my-1">Kebaya Bordir Cream</p>
                        <p class="text-center my-1">Rp.70.000 - <del>RP.105.000</del></p>
                        <a href="payment.php"> <p class="text-center my-1"><b>Grab now!</b> </a></p>
                    </div>
                </div>

                <div class="card-item">
                    <img src="18.jpeg" alt="" width="200px" height="200px">
                    <div class="lines">
                        <p class="text-center my-1">Kebaya Bordir Orange</p>
                        <p class="text-center my-1">Rp.70.000 - <del>RP.105.000</del></p>
                        <a href="payment.php"> <p class="text-center my-1"><b>Grab now!</b> </a></p>
                    </div>
                </div>
            </div>
        </div>
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
        <div class="footer-newsletter">
          <h5>Logout</h5>
            <a href="logout.php" <button class="btn btn-primary btn-sm mt-2">logout</button></a>
          </form>
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