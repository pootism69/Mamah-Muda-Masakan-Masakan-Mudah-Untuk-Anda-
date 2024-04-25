
//animasi love
function changeImage() {
    var image = document.getElementById('love-image');
    if (image.src.match("love-stroke.png")) {
        image.src = "img/love-fill.png";
        // Tambahkan efek zoom in di sini
        image.classList.add("zoomable");
        //kayaknya tambah ke favorit disini deh
        
    } else {
        image.src = "img/love-stroke.png";
        // Tambahkan efek zoom out di sini
        image.classList.remove("zoomable");
        //ini buat hapus dari favoritnya
        
    }
}

//pindah halaman dari akun ke edit akun

function pindahKeEditAkun() {
    window.location.href = "edit_akun.html";
}

//pindah ke resep kamu dari akun

function pindahKeresepkamu() {
    window.location.href = "resep_akun.html";
}

//LOGOUT
// Tampilkan pop-up saat tombol logout diklik
function tampilkanPopUp() {
    var popUp = document.getElementById("popupLogout");
    popUp.style.display = "block";
}

// Konfirmasi logout
function konfirmasiLogout() {
    // Proses logout di sini, seperti menghapus session, membersihkan data, dll.
    window.location.href = "login.html"; // Pindah ke halaman utama setelah logout
}



//BUAT RESEP
// Tampilkan pop-up saat tombol buat resep diklik
function tampilkanPopUpBuatresep() {
    var popUp = document.getElementById("popupbuatresep");
    popUp.style.display = "block";
}

// Konfirmasi buat resep
function konfirmasibuatresep() {
    // Proses menyimpan resep disini
    window.location.href = "resep_akun.html"; // Pindah ke halaman lain setelah menyimpan resep
}


//EDIT AKUN
// Tampilkan pop-up saat tombol EDIT diklik
function tampilkanPopUpEdit() {
    var popUp = document.getElementById("popupedit");
    popUp.style.display = "block";
}

// Konfirmasi edit akun
function konfirmasiedit() {
    // Proses edit akun disini
    window.location.href = "akun.html"; // Pindah ke halaman lain setelah menyimpan resep
}