<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login Suaco</title>
</head>
<body>

    <!----------------------- Main Container -------------------------->

     <div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Login Container -------------------------->

       <div class="row border rounded-5 p-3 bg-white shadow box-area">

    <!--------------------------- Left Box ----------------------------->

       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box">
           <div class="featured-image mb-3">
            
           </div>
       </div> 

    <!-------------------- ------ Right Box ---------------------------->
        
       <div class="col-md-6 right-box">
          <div class="row align-items-center">
          <?php if(!empty($_GET['gagal'])){?>
     <?php if($_GET['gagal']=="userKosong"){?>
          <span class="text-danger">
           Maaf Email Tidak Boleh Kosong
          </span>
        <?php } else if($_GET['gagal']=="passKosong"){?>
          <span class="text-danger"> 
          Maaf Password Tidak Boleh Kosong
         </span>
        <?php } else {?>
          <span class="text-danger">  
          Maaf Email dan Password Anda Salah
        </span>
        <?php }?>
<?php }?>
                <form action="konfirmasilogin.php" method="post">
                <div class="header-text mb-4">
                     <h2>CAFE SUACO</h2>
                     <p>Semangat!</p>
                </div>
                <div class="input-group mb-3">
                    <input name="email" type="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email">
                </div>
                <div class="input-group mb-1">
                    <input name="password" type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                </div>
                <div class="input-group mb-5 d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="formCheck" class="form-check-label text-secondary"><small>Remember me</small></label>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <button name="login" type="submit" class="btn btn-lg btn-primary w-100 fs-6">
                        Login
                    </button>
                    </a>
                </div>
                </form>
                
          </div>
       </div> 

      </div>
    </div>

</body>
</html>