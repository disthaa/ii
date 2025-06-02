<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Kantin Sekolah</title>
  </head>
  <body>
<!-- navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top shadow">
  <div class="container">
    <a class="navbar-brand" href="#">Kantin Sekolah</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link "href="#about">About Kantin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#cafetaria">Cafetaria List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#buy">How to Buy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact" >Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- about-->
<section id="about" class="pt-5 mt-5 bg-light py-5">
  <div class="container text-center">
    <h2 >About Kantin</h2>
    <div>
      <img src="img/logo.png" alt="" style="width: 150px; height: 150px;"/>
    </div>
    <p >Kantin SMK Telkom Jakarta menyediakan  makanan & minuman sehat</p>
    <div class="row justify-content-center">
      <div class="col-md-5">
        <img src="img/foto_kantin.jpeg" alt="" class="img-fluid shadow">
      </div>
      <div class="col-md-5">
        <div class="ratio ratio-4x3 shadow">
          <iframe src="https://www.youtube.com/embed/6f0baImXdB8?si=QZgwndZbEk7-_sCX" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- cafetaria list-->
<section id="cafetaria" class="py-5 bg-white">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Cafetaria List</h2>

    <!-- kantin 1-->
     <div class="card shadow rounded-4 p-4 mb-5 bg-light">
        <div class="row g-4 align-items-center">
         <div class="col-md-4 text-center">
            <img src="img/foto_kantin.jpeg" alt="Kantin Ibu Rika" class="img-fluid rounded shadow-sm mb-2" />
            <h5 class="fw-bold fs-4">Kantin Ibu Rika</h5>
          </div> 
          <div class="col-md-8 ">
            <div class="row g-4">
             <div class="col-md-6 d-flex align-items-center">
                <img src="img/nasi_goreng.jpg" alt="Nasi Goreng" class="img-thumbnail me-3" style="width: 120px; height: 120px; " />
                <div>
                  <h5 class="fw-bold mb-1">Nasi Goreng</h5>
                  <p class="mb-0 fs-5">Rp 15.000</p>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <img src="img/nasi_goreng.jpg" alt="Mie Goreng" class="img-thumbnail me-3" style="width: 120px; height: 120px; " />
                <div>
                  <h5 class="fw-bold mb-1">Mie Goreng</h5>
                  <p class="mb-0 fs-5">Rp 12.000</p>
                </div>
              </div> 
              <div class="col-md-6 d-flex align-items-center">
                <img src="img/nasi_goreng.jpg" alt="Es Teh" class="img-thumbnail me-3" style="width: 120px; height: 120px; " />
                <div>
                  <h5 class="fw-bold mb-1">Es Teh</h5>
                  <p class="mb-0 fs-5">Rp 5.000</p>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <img src="img/nasi_goreng.jpg" alt="Bubur Ayam" class="img-thumbnail me-3" style="width: 120px; height: 120px; " />
                <div>
                  <h5 class="fw-bold mb-1">Bubur Ayam</h5>
                  <p class="mb-0 fs-5">Rp13.000</p>
                </div>
              </div>
            </div>
          </div>    
        </div>
      </div>

    <!-- kantin 2-->
         <div class="card shadow rounded-4 p-4 mb-5 bg-light">
        <div class="row g-4 align-items-center">
         <div class="col-md-4 text-center">
            <img src="img/foto_kantin.jpeg" alt="Kantin Mas Riki" class="img-fluid rounded shadow-sm mb-2" />
            <h5 class="fw-bold fs-4">Kantin Mas Riki</h5>
          </div> 
          <div class="col-md-8 ">
            <div class="row g-4">
             <div class="col-md-6 d-flex align-items-center">
                <img src="img/nasi_goreng.jpg" alt="Batagor" class="img-thumbnail me-3" style="width: 120px; height: 120px; " />
                <div>
                  <h5 class="fw-bold mb-1">Batagor</h5>
                  <p class="mb-0 fs-5">Rp 10.000</p>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <img src="img/nasi_goreng.jpg" alt="Siomay" class="img-thumbnail me-3" style="width: 120px; height: 120px; " />
                <div>
                  <h5 class="fw-bold mb-1">Siomay</h5>
                  <p class="mb-0 fs-5">Rp 8.000</p>
                </div>
              </div> 
              <div class="col-md-6 d-flex align-items-center">
                <img src="img/nasi_goreng.jpg" alt="Tahu Gejrot" class="img-thumbnail me-3" style="width: 120px; height: 120px; " />
                <div>
                  <h5 class="fw-bold mb-1">Tahu Gejrot</h5>
                  <p class="mb-0 fs-5">Rp 7.000</p>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-center">
                <img src="img/nasi_goreng.jpg" alt="Es Jeruk" class="img-thumbnail me-3" style="width: 120px; height: 120px; " />
                <div>
                  <h5 class="fw-bold mb-1">Es Jeruk</h5>
                  <p class="mb-0 fs-5">Rp6.000</p>
                </div>
              </div>
            </div>
          </div>    
        </div>
      </div>

  </div>
</section>

<!-- how to buy-->
<section id="buy" class="bg-light py-5">
  <div class="container">
    <h2 class="text-center fw-bold mb-4">How to Buy</h2>
    <form action="proses_pesan.php" method="POST" class="card p-4 shadow rounded-4 mx-auto" style="max-width: 700px;">
      
      <!-- Menu Kantin Ibu Rika -->
      <div class="mb-4">
        <label class="form-label fw-bold fs-5">Menu Kantin Ibu Rika</label>
        
        <div class="form-check mt-2 d-flex align-items-center">
          <input class="form-check-input me-2" type="checkbox" value="Nasi Goreng" id="menu1" name="menu[kantin_ibu_rika][]" onchange="toggleJumlah('menu1', 'jumlah1')">
          <label class="form-check-label me-3" for="menu1">Nasi Goreng - Rp15.000</label>
          <input type="number" name="jumlah[kantin_ibu_rika][]" id="jumlah1" min="1" value="1" class="form-control" style="width: 100px;" disabled>
        </div>

        <div class="form-check mt-2 d-flex align-items-center">
          <input class="form-check-input me-2" type="checkbox" value="Mie Goreng" id="menu2" name="menu[kantin_ibu_rika][]" onchange="toggleJumlah('menu2', 'jumlah2')">
          <label class="form-check-label me-3" for="menu2">Mie Goreng - Rp12.000</label>
          <input type="number" name="jumlah[kantin_ibu_rika][]" id="jumlah2" min="1" value="1" class="form-control" style="width: 100px;" disabled>
        </div>

        <div class="form-check mt-2 d-flex align-items-center">
          <input class="form-check-input me-2" type="checkbox" value="Es Teh" id="menu3" name="menu[kantin_ibu_rika][]" onchange="toggleJumlah('menu3', 'jumlah3')">
          <label class="form-check-label me-3" for="menu3">Es Teh - Rp5.000</label>
          <input type="number" name="jumlah[kantin_ibu_rika][]" id="jumlah3" min="1" value="1" class="form-control" style="width: 100px;" disabled>
        </div>

        <div class="form-check mt-2 d-flex align-items-center">
          <input class="form-check-input me-2" type="checkbox" value="Bubur Ayam" id="menu4" name="menu[kantin_ibu_rika][]" onchange="toggleJumlah('menu4', 'jumlah4')">
          <label class="form-check-label me-3" for="menu4">Bubur Ayam - Rp13.000</label>
          <input type="number" name="jumlah[kantin_ibu_rika][]" id="jumlah4" min="1" value="1" class="form-control" style="width: 100px;" disabled>
        </div>
      </div>

      <!-- Menu Kantin Mas Riki -->
      <div class="mb-4">
        <label class="form-label fw-bold fs-5">Menu Kantin Mas Riki</label>
        
        <div class="form-check mt-2 d-flex align-items-center">
          <input class="form-check-input me-2" type="checkbox" value="Batagor" id="menu5" name="menu[kantin_mas_riki][]" onchange="toggleJumlah('menu5', 'jumlah5')">
          <label class="form-check-label me-3" for="menu5">Batagor - Rp10.000</label>
          <input type="number" name="jumlah[kantin_mas_riki][]" id="jumlah5" min="1" value="1" class="form-control" style="width: 100px;" disabled>
        </div>

        <div class="form-check mt-2 d-flex align-items-center">
          <input class="form-check-input me-2" type="checkbox" value="Siomay" id="menu6" name="menu[kantin_mas_riki][]" onchange="toggleJumlah('menu6', 'jumlah6')">
          <label class="form-check-label me-3" for="menu6">Siomay - Rp8.000</label>
          <input type="number" name="jumlah[kantin_mas_riki][]" id="jumlah6" min="1" value="1" class="form-control" style="width: 100px;" disabled>
        </div>

        <div class="form-check mt-2 d-flex align-items-center">
          <input class="form-check-input me-2" type="checkbox" value="Tahu Gejrot" id="menu7" name="menu[kantin_mas_riki][]" onchange="toggleJumlah('menu7', 'jumlah7')">
          <label class="form-check-label me-3" for="menu7">Tahu Gejrot - Rp7.000</label>
          <input type="number" name="jumlah[kantin_mas_riki][]" id="jumlah7" min="1" value="1" class="form-control" style="width: 100px;" disabled>
        </div>

        <div class="form-check mt-2 d-flex align-items-center">
          <input class="form-check-input me-2" type="checkbox" value="Es Jeruk" id="menu8" name="menu[kantin_mas_riki][]" onchange="toggleJumlah('menu8', 'jumlah8')">
          <label class="form-check-label me-3" for="menu8">Es Jeruk - Rp6.000</label>
          <input type="number" name="jumlah[kantin_mas_riki][]" id="jumlah8" min="1" value="1" class="form-control" style="width: 100px;" disabled>
        </div>
      </div>

      <button type="submit" class="btn btn-success w-100">Pesan Sekarang</button>
    </form>
  </div>
</section>

<!-- contact us-->
      <section id="contact" class="py-5">
      <div class="container">
        <h2 class="text-center">Contact Us</h2>
        <form action="contact_output.php" method="post" class="mt-4">
          <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nama Anda" required />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Anda" required />
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Pesan</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-success">Kirim</button>
        </form>
      </div>
    </section>
    
<!-- footer-->
 <footer class="pb-3 py-5 bg-success text-white text-center">
  <p>Created with love by <a href="" class="text-white fw-bold">Gadis Yatma</a></p>
 </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script>
  function toggleJumlah(menuId, jumlahId) {
    const checkbox = document.getElementById(menuId);
    const jumlahInput = document.getElementById(jumlahId);
    jumlahInput.disabled = !checkbox.checked;
  }
</script>
  </body>
</html>