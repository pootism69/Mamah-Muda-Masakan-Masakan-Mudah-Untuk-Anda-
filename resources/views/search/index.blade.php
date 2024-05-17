
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

    <title>Pencarian</title>
  </head>
    
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            @include('component/navbar')
        </div>
    </nav>


    <div class="container-fluid banner d-flex align-items-center">
        <div class="container">
            <h1 class="text-center display-5 mb-3">Yuk cari resep kesukaanmu</h1>
            <!-- Search-->
            <form action="/search" method="GET">
            <div class="col-8 offset-2 mx-auto">
                <div class="input-group mb-3">
                    <input name="search" type="text" class="form-control" placeholder="Cari resep atau nama akun" aria-label="Recipient's username" aria-describedby="button-addon2">
                
                    <button class="btn btn-outline-secondary btn-cari" type="submit" id="button-addon2">Cari</button>

                    
                    
                </div>
            </div>
            </form>
        </div>
    </div>
    
    <div class="container-fluid py-5">
        <div class="container">
            <h3 class="text-center">Hasil pencarian untuk {{ $search }}</h3>
            <div class="row mt-3 justify-content-center">
            @if(!$user_recipes->isEmpty())
                    @foreach($user_recipes as $user_recipe)
                    <div class="col-lg-3 hovered-card">
                            <a href="{{ route("resep", ['filter' => $user_recipe->recipeId ]) }}" class="card-link">
                                <div class="card mt-4">
                                    <img src="img/Rectangle 10 (3).png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-text text-left">{{ $user_recipe->title }}</p>
                                    </div>
                                    <div class="rating-circle">
                                        <span class="rating-number">{{ $user_recipe->rating }}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else 
                    <center><h1>makanan tidak ditemukan</h1></center>
                @endif
            

            
            </div>
        </div>
    </div>
    
                
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h2>Hasil pencarian akun untuk {{ $search }} </h3>
                
        </div>


        
        <div class="row justify-content-center">
            
            <div class="col-10 col-md-8 mx-auto my-4">
            @if(!$users->isEmpty())
                @foreach($users as $user)
                    <div class="mt-4">
                        <a href="{{ route("user", ['filter' => $user->id ]) }}", class ="account-box">
                            <img src="img/Vector (3).png" class="gambar-akun" alt="Avatar">
                            <div class="text-akun">{{$user->name}}</div>
                        </a>
                        
                    </div>
                @endforeach
                @else 
                    <center><h1>user tidak ditemukan</h1></center>
                @endif
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

    <!--Custom Javascript (javascript kita)-->
    <!--script src="script.js"></script-->
  </body>
</html>