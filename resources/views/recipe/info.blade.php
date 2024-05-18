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

    <title>Informasi resep</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            @include('component/navbar')
        </div>
    </nav>
    @foreach($user_recipes as $user_recipe)
    <div class="container-fluid py-5">
        <div class="container">
            

            <div class="container">
                <div class="row py-5">
                    <div class="col-12 col-sm-8">
                        <div class="row">
                            <div class="col">
                                <img src="img/Rectangle 15.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4">
                        
                        <div class="row">
                            <div class="col">
                                <h5>{{ $user_recipe->title }}</h5>
                                <a href="{{ route("user", ['filter' => $user_recipe->user->id ]) }}" class="account_name">
                                    <p>{{ $user_recipe->user->name }}</p>
                                </a>
                                <p class="detail-info">
                                    Bintang <span>{{ $user_recipe->rating }} </span> <!--ini buat bintangnya-->
                                </p>
            
                                <p class="detail-info">
                                    {{ $user_recipe->tingkat }}
                                </p>
            
                                <p class="detail-info">
                                    {{ $user_recipe->timeToCook }}
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            

            <div class="keterangan">
                {{ $user_recipe->description }}
            </div>


            <div class="row py-5">
                <div class="col-md-6">
                <h5>Bahan</h5>
                <p class="recipe-text">{!! nl2br(e($user_recipe->ingredient)) !!}</p>
            </div>
            <div class="col-md-6">
                <h5>Cara</h5>
                <p class="recipe-text">{{ $user_recipe->instruction }}</p>
            </div>
    </div>
            

            @if($user_recipe->user->id != auth()->user()->id)
            <form action ="/resep/{{$user_recipe->recipeId}}/createReview" method="POST" class="komentar-diri">
            @csrf
                <h5>Berikan Komentar</h5>
                <div class="row mb-3">
                    <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-5">
                        <input type="name" name="name" class="form-control" id="Nama" value="{{ auth()->user()->name}}">
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label for="Nilai" class="col-sm-2 col-form-label">Nilai</label>
                    <div class="col-sm-1">
                        <select type="nilai" name="nilai" class="form-select" id="autoSizingSelect">
                            <option value=5>5</option>
                            <option value=4>4</option>
                            <option value=3>3</option>
                            <option value=2>2</option>
                            <option value=1>1</option>
                        </select>
                    </div>
                </div>
            
                <div class="row mb-3">
                    <label for="Komentar" class="col-sm-2 col-form-label">Komentar</label>
                    <div class="form-floating col-sm-5">
                        <textarea type="comment" name="comment" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2"></label>
                    </div>
                </div>
            
                <div class="row mb-3">
                    <div class="col-sm-2"></div> <!-- Untuk spasi di sebelah kiri -->
                    <div class="col-sm-5">
                        <a href="info.html">
                            <!--ceritanya refresh-->
                            <button type="submit" name="submit" class="btn btn-danger">Kirim Komentar</button>
                        </a>
                        
                    </div>
                </div>
            </form>
            @endif

            <div class="komentar py-5">
                <h5>Komentar</h5>
                @foreach($reviews as $review)
                <div class="col-sm-8">
                    
                    <div class="rounded border border-dark p-3">
                        <p>{{ $review->user->name }}</p>
                        <div class="d-flex align-items-center mb-2">
                            <span class="me-2">Rating:</span>
                            <!-- Anda dapat mengganti "5" dengan nilai rating yang diinginkan -->
                            <span>{{ $review->rating  }}</span>
                        </div>
                        <div class="mb-4"> <!-- Spasi 4 kali ke bawah -->
                        </div>

                        <div class="komentar">
                            <p>{{ $review->comment }}
                            </p>
                        </div>
                        
                    </div>
                    
                </div>
                @endforeach
            </div>
    

        </div>

    </div>
    @endforeach
    
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <!--Custom Javascript (javascript kita)-->
    <script src="script.js"></script>
  </body>
</html>