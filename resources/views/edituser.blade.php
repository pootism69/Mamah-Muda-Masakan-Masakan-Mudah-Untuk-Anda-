<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css"><link rel="stylesheet" href="style.css">

    <title>Edit akun</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            @include('component/navbar')
        </div>
    </nav>


    <form action="{{route('update.account')}}" method="POST" class="container-fluid py-5">
    @csrf
    @method('PUT') <!-- This simulates PUT request -->
    <div class="container-fluid py-5">
        <div class="container1">
            <h3 class="text-center py-5">Edit akun</h3>
            
            <div class="container2 " style="padding-left: 20px; padding-right: 2S0px;">
                <div class="row mb-4">
                    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-5">
                        <input type="name" name="name"  class="form-control" id="Nama" value="{{ $user->name }}">
                    </div>
                </div>
            
                <div class="row mb-4">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-5">
                        <input type="email" name="email"  class="form-control" id="email" value="{{ $user->email }}">
                    </div>
                </div>
            
                <div class="row mb-4">
                    <label for="Password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-5">
                        <input type="password" name="password" class="form-control" id="Password" placeholder="Masukkan kata sandi">
                    </div>
                </div>
            
                <div class="row mb-4">
                    <div class="col-sm-5 offset-sm-2 d-flex justify-content-center justify-content-sm-start" style="padding-left: 40px; padding-right: 40px;"> <!-- Menggunakan kelas justify-content-sm-start untuk mengatur posisi tombol ke kiri pada perangkat seluler -->
                        <button type="button" class="Edit btn btn-primary" onclick="tampilkanPopUpEdit()">Edit</button> <!-- Menambahkan kelas btn dan btn-primary untuk tampilan tombol yang lebih baik -->

                        <div id="popupedit" class="popup">
                            <div class="popup-content">
                                <p>Informasi akun sudah diedit</p>
                                <button onclick="konfirmasiedit()">OK</button>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>

           
            
            
        </div>
    </div>

</form>
    
    



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <!--Javascript kita-->
    <script src="js/script.js"></script>
  </body>
</html>