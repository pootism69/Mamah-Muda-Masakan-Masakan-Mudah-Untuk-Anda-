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
    
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>Edit resep</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            @include('component/navbar')
        </div>
    </nav>
    
    <form method="POST" action ="{{ url('/resep/' . $search . '/edit/update') }}" class="container-fluid py-5">
        @csrf
        @method('put')
        <div class="container1">
            <h3 class="text-center py-5">Edit resep</h3>
            
            <div class="row mb-4">
                <label for="Nama_resep" class="col-sm-2 col-form-label">Nama Resep</label>
                <div class="col-sm-5">
                    <input type="name" name="name" class="form-control" id="Nama_resep" value = "{{$data->title}}">
                </div>
            </div>

            <div class="row mb-3">
                <label for="Kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-3">
                    <select type="category" name="category" class="form-select custom-select-red" id="autoSizingSelect" value = "{{$data->category}}">
                        <option value="Masakan rumahan">Masakan rumahan</option>
                        <option value="Olahan ayam">Olahan ayam</option>
                        <option value="Olahan daging">Olahan daging</option>
                        <option value="Olahan seafood">Olahan seafood</option>
                        <option value="Olahan sayuran">Olahan sayuran</option>
                        <option value="Cemilan">Cemilan</option>
                        <option value="Dessert">Dessert</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="Viral" class="col-sm-2 col-form-label">Apakah Resep ini pernah viral?</label>
                <div class="col-sm-3">
                    <select type="tahun" name="tahun" class="form-select custom-select-red" id="autoSizingSelect" value = "{{$data->tahun}}">
                        <option value="Bukan makanan viral">Bukan makanan viral</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="Khas" class="col-sm-2 col-form-label">Apakah resep ini makanan khas?</label>
                <div class="col-sm-3">
                    <select type="khas" name="khas" class="form-select custom-select-red" id="autoSizingSelect" value = "{{$data->origin}}">
                        
                        <option value="Bukan makanan khas">Bukan makanan khas</option>
                        <option value="Nusantara">Nusantara</option>
                        <option value="Asia">Asia</option>
                        <option value="Western">Western</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="kesulitan" class="col-sm-2 col-form-label">Apakah resep ini mudah dibuat?</label>
                <div class="col-sm-3">
                    <select type="tingkat" name="tingkat" class="form-select custom-select-red" id="autoSizingSelect" value = "{{$data->tingkat}}">
                        <option value="Mudah">Mudah</option>
                        <option value="Sedang">Sedang</option>
                        <option value="Sulit">Sulit</option>
                    </select>
                </div>
            </div>
            

            <div class="row mb-4">
                <label for="waktu" class="col-sm-2 col-form-label">Estimasi waktu dari resep ini</label>
                <div class="col-sm-1">
                    <input type="waktu" name="waktu" class="form-control" id="waktu" value = "{{$data->timeToCook}}">
                </div>
                

            </div>
    
            <div class="row mb-3">
                <label for="Bahan" class="col-sm-2 col-form-label">Bahan</label>
                <div class="form-floating col-sm-5">
                    <textarea type="bahan" name="bahan" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">
                    {{$data->ingredient}}
                    </textarea>
                    <label for="floatingTextarea2"></label>
                  </div>
            </div>

            <div class="row mb-3">
                <label for="Cara" class="col-sm-2 col-form-label">Cara memasak</label>
                <div class="form-floating col-sm-5">
                    <textarea type="instruction" name="instruction" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" >{{$data->instruction}}</textarea>
                    <label for="floatingTextarea2"></label>
                  </div>
            </div>

            <div class="row mb-3">
                    <label for="foto" class="col-sm-2 col-form-label">foto masakan</label>
                    <div class="form-floating col-sm-5">
                        <form action="" method="post" enctype="multipart/form-data">
                            <label class="file-label" for="file"></label>
                            <input type="file" accept="image/*" class="image-input" name="file" id="file">
                        </form>
                        
                        
                      </div>
                </div>

                <div class="row mb-4">
                    <div class="col-sm-5 offset-sm-2 justify-content-center"> <!-- Offset-sm-2 untuk menyesuaikan posisi tombol -->
                        <button type="button" class="Edit" onclick="tampilkanPopUpBuatresep()">Edit resep</button> <!-- Menambahkan kelas w-100 untuk membuat tombol menyesuaikan lebar layar -->
                      
                        <div id="popupbuatresep" class="popup">
                            <div class="popup-content">
                                <p>Resep dibuat</p>
                                <button name = "submit" type="submit" >OK</button>
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
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
  </body>
</html>