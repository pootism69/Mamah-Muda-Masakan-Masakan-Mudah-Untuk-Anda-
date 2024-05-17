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
     
     <link rel="stylesheet" href="css/style.css">

    <title>Resep khas</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            @include('component/navbar')
        </div>
    </nav>



    
    

    <div class="container-fluid py-5">
        <div class="container">
            <h3 class="text-center">{{ $search }}</h3>
            
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
    
   
 
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>