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

    <title>Beranda</title>
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
            <h2 class="text-center">Telusuri Makanan Viral</h2>


            
                <div class="row mt-3 justify-content-center">
                    <div class="col-lg-3 hovered-card">
                        <a href="{{ route("year", ['filter' => "2024"]) }}" class="card-link">
                            <div class="card mt-4">
                                <img src="img/Rectangle 10 (3).png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text text-center">2024</p>
                                </div>
                            </div>
                        </a>
                    </div>
    
                <div class="col-lg-3 hovered-card">
                    <a href="{{ route("year", ['filter' => "2023"]) }}" class="card-link">
                        <div class="card mt-4">
                            <img src="img/Rectangle 11.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center">2023</p>
                            </div>
                        </div>
                    </a>
                </div>
    
                <div class="col-lg-3 hovered-card">
                    <a href="{{ route("year", ['filter' => "2022"]) }}" class="card-link">
                        <div class="card mt-4">
                            <img src="img/Rectangle 12.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center">2022</p>
                            </div>
                        </div>

                    </a>
                    
                </div>
    
                <div class="col-lg-3 hovered-card" >
                    <a href="{{ route("year", ['filter' => "2021"]) }}" class="card-link">
                        <div class="card mt-4">
                            <img src="img/Rectangle 13.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center">2021</p>
                            </div>
                        </div>

                    </a>
                    
                </div>
    
                <div class="col-lg-3 hovered-card">
                    <a href="{{ route("year", ['filter' => "2020"]) }}" class="card-link">
                        <div class="card mt-4">
                            <img src="img/Rectangle 10 (2).png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center">2020</p>
                            </div>
                        </div>

                    </a>
                    
                </div>

                <div class="col-lg-3 hovered-card">
                    <a href="{{ route("year", ['filter' => "2019"]) }}" class="card-link">
                        <div class="card mt-4">
                            <img src="img/Rectangle 10 (2).png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center">2019</p>
                            </div>
                        </div>

                    </a>
                    
                </div>

                <div class="col-lg-3 hovered-card">
                    <a href="Viral.html" class="card-link">
                        <div class="card mt-4">
                            <img src="img/Rectangle 10 (2).png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center">Lainnya</p>
                            </div>
                        </div>

                    </a>
                    
                </div>

                

                
            </div>
            
        </div>
    </div>
    
    <div class="container-fluid py-5">
        <div class="container">
            <h2 class="text-center">Telusuri Kategori Makanan</h2>
            
            <div class="row mt-3 justify-content-center">
                <div class="col-lg-3 hovered-card">
                    <a href="{{ route("category", ['filter' => "masakan rumahan"]) }}" class="card-link">
                        <div class="card mt-4">
                            <img src="img/Rectangle 10 (3).png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center">Masakan rumahan</p>
                            </div>
                        </div>
                    </a>
                </div>

            <div class="col-lg-3 hovered-card">
                <a href="{{ route("category", ['filter' => "olahan ayam"]) }}" class="card-link">
                    <div class="card mt-4">
                        <img src="img/Rectangle 11.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center">Olahan ayam</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 hovered-card">
                <a href="{{ route("category", ['filter' => "Olahan daging"]) }}" class="card-link">
                    <div class="card mt-4">
                        <img src="img/Rectangle 12.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center">Olahan daging</p>
                        </div>
                    </div>

                </a>
                
            </div>

            <div class="col-lg-3 hovered-card" >
                <a href="{{ route("category", ['filter' => "Olahan seafood"]) }}" class="card-link">
                    <div class="card mt-4">
                        <img src="img/Rectangle 13.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center">Olahan seafood</p>
                        </div>
                    </div>

                </a>
                
            </div>

            <div class="col-lg-3 hovered-card">
                <a href="{{ route("category", ['filter' => "Olahan sayuran"]) }}"class="card-link">
                    <div class="card mt-4">
                        <img src="img/Rectangle 10 (2).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center">Olahan sayuran</p>
                        </div>
                    </div>

                </a>
                
            </div>

            <div class="col-lg-3 hovered-card">
                <a href="{{ route("category", ['filter' => "Cemilan"]) }}" class="card-link">
                    <div class="card mt-4">
                        <img src="img/Rectangle 10 (2).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center">Cemilan</p>
                        </div>
                    </div>

                </a>
                
            </div>

            <div class="col-lg-3 hovered-card">
                <a href="{{ route("category", ['filter' => "Dessert"]) }}" class="card-link">
                    <div class="card mt-4">
                        <img src="img/Rectangle 10 (2).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center">Dessert</p>
                        </div>
                    </div>

                </a>
                
            </div>

            
            
        </div>
    </div>
    
    <div class="container-fluid py-5">
        <div class="container">
            <h2 class="text-center">Telusuri Makanan Khas</h2>
            
            <div class="row mt-4 justify-content-center">
                
                <div class="col-lg-3 hovered-card">
                    <a href="{{ route("asal", ['filter' => "Nusantara"]) }}" class="card-link">
                        <div class="card mt-4">
                            <img src="img/Rectangle 12.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center">Nusantara</p>
                            </div>
                        </div>

                    </a>
                    
                </div>
    
                <div class="col-lg-3 hovered-card">
                    <a href="{{ route("asal", ['filter' => "Asia"]) }}" class="card-link">
                        <div class="card mt-4">
                            <img src="img/Rectangle 13.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text text-center">Asia</p>
                            </div>
                        </div>

                    </a>
                    
                </div>
    
                <div class="col-lg-3 hovered-card">
                    <a href="{{ route("asal", ['filter' => "Western"]) }}" class="card-link">
                        <div class="card mt-4">
                        <img src="img/Rectangle 10 (2).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center">Western</p>
                        </div>
                    </div>
                    </a>
                    
                </div>

                <div class="col-lg-3 hovered-card">
                    <a href="{{ route("asal", ['filter' => "Lainya"]) }}" class="card-link">
                        <div class="card mt-4">
                        <img src="img/Rectangle 10 (2).png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text text-center">Lainnya</p>
                        </div>
                    </div>
                    </a>
                    
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

    <!--Javascript kita-->
    <script src="script.js"></script>
  </body>
</html>