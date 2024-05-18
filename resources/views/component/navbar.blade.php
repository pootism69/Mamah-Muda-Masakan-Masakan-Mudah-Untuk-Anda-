<a class="navbar-brand" href="{{ route("home") }}">
                <img src="img/Rectangle 6.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="viralDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Viral
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="viralDropdown">
                            <li><a class="dropdown-item" href="{{ route("year", ['filter' => "2019"]) }}">2019</a></li>
                            <li><a class="dropdown-item" href="{{ route("year", ['filter' => "2020"]) }}">2020</a></li>
                            <li><a class="dropdown-item" href="{{ route("year", ['filter' => "2021"]) }}">2021</a></li>
                            <li><a class="dropdown-item" href="{{ route("year", ['filter' => "2022"]) }}">2022</a></li>
                            <li><a class="dropdown-item" href="{{ route("year", ['filter' => "2023"]) }}">2023</a></li>
                            <li><a class="dropdown-item" href="{{ route("year", ['filter' => "2024"]) }}">2024</a></li>
                            <li><a class="dropdown-item" href="Viral.html">Lainnya</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="kategoriDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="kategoriDropdown">
                            <li><a class="dropdown-item" href="{{ route("category", ['filter' => "masakan rumahan"]) }}">>Masakan rumahan</a></li>
                            <li><a class="dropdown-item" href="{{ route("category", ['filter' => "olahan ayam"]) }}">Olahan ayam</a></li>
                            <li><a class="dropdown-item" href="{{ route("category", ['filter' => "Olahan daging"]) }}">Olahan daging</a></li>
                            <li><a class="dropdown-item" href="{{ route("category", ['filter' => "Olahan seafood"]) }}">Olahan seafood</a></li>
                            <li><a class="dropdown-item" href="{{ route("category", ['filter' => "Olahan sayuran"]) }}">Olahan sayuran</a></li>
                            <li><a class="dropdown-item" href="{{ route("category", ['filter' => "Cemilan"]) }}">Cemilan</a></li>
                            <li><a class="dropdown-item" href="{{ route("category", ['filter' => "Dessert"]) }}">Dessert</a></li>
                            
                            
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="makananDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Makanan Khas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="makananDropdown">
                            <li><a class="dropdown-item" href="{{ route("asal", ['filter' => "Nusantara"]) }}">Nusantara</a></li>
                            <li><a class="dropdown-item" href="{{ route("asal", ['filter' => "Asia"]) }}">Asia</a></li>
                            <li><a class="dropdown-item" href="{{ route("asal", ['filter' => "Western"]) }}">Western</a></li>
                            <li><a class="dropdown-item" href="{{ route("asal", ['filter' => "Lainya"]) }}">Lainnya</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("post") }}">Buat Resep</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("akun") }}">
                            <img src="img/Vector.png" width="20" height="20" alt="">

                        </a>
                    </li>
                </ul>
            </div>