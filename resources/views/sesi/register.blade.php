<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styledaftar.css">

    <!-- google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Pendaftaran</title>
  </head>
  <body>

  <div class="container d-flex justify-content-center align-items-center min-vh-100">


        <div class="row border rounder-5 p-3 bg-white shadow box-area">


            <div class="col-md-6 rounder-4 d-flex justify-content-center align-items-center flex-column left-box">
                <div class="featured-image mb-3"></div>
                <img src="img/Mamah muda logo-red png 2.png" class="img-fluid" alt="width: 250px;">
            </div>


            <div class="col-md-6 right-box">
                    <div class="row align-items-center">
                        <div class="header">
                            <h1>Ayo Daftar</h1>
                        </div>
                            
                
                            <div class="daftar-form">
                            <form action="register/create" method="POST" class="daftar-form">
                              @include ('component/pesan')
                              @csrf
                                <input type="Username" name="name" class="form-control" id="Username" placeholder="Masukkan Username">
                                
                                <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan email">
                
                                <input type="Password" name="password" class="form-control" id="Password" placeholder="Masukkan kata sandi">
                
                
                                <button id="daftartologin" class="Daftar">
                                  Daftar</button>
                
                            </div>
                                </div>
                    </div>
            </div>

         </div>
    </div>
    
   
        





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <!--javascript kita-->
    <!--script src="scriptdaftar.js"></script-->
  </body>
</html>