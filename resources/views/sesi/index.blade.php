<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/stylelogin.css">

    <!-- google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <title>Login</title>
  </head>
  <body>
    
    <section class="login  d-flex">
        
        <div class="login-left w-50 h-100">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/Mamah muda logo-red png 2.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/image 2.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/image 3.png" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            

        </div>
        <div class="login-right w-50 h-100">
            @include ('component/pesan')
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-8"> <!--ini ukurannya belum menyesuaikan -->
                    <div class="header">
                        <h1>Selamat datang</h1>
                    </div>
        
                    <form action ="sesi/login" method= "POST" class="login-form" >
                        @csrf
                        <label for="name" class="form-label">Username</label>
                        <input type="name" name="name" class="form-control" id="Username" placeholder="Masukkan Username" value="{{ Session::get('user') }}">
        
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="Password" placeholder="Masukkan kata sandi">
        
                        <a href="#" class="text-decoration-none text-center">lupa password?</a>
        
                        <button name = "submit" type="submit" id="masukBtn" class="Masuk">
                          Masuk
                      </button>
                      
        
                    </form>
                    <a href="{{ route("register") }}" id="daftarBtn" class="btn Daftar">Daftar</a>
                </div>

        </div>
    </section>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <!--javascript kita-->
    <!--script src="js/scriptlogin.js"></script-->
  </body>
</html>