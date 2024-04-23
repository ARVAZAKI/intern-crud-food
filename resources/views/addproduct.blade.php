<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Produk</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
  </head>

<body>
    <div class="container">
        <a href="/" class="btn btn-warning mt-2">Kembali</a>
        <div class="row d-flex justify-content-center align-items-center mt-4">
            <div class="col-lg-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="card mb-4">
                 <div class="container mt-3">
                  @if ($errors->any())
                  <div class="alert alert-danger mt-1 mb-3">
                    <ul>
                      @foreach ($errors->all() as $error)
                      <li>- {{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
              @endif
                 </div>
                  <h5 class="card-header">Tambah Product</h5>
                  <div class="card-body">
                    <div class="mb-3">
                      <label for="nama_produk" class="form-label">Nama Produk</label>
                      <input
                        type="text"
                        class="form-control"
                        name="nama_produk"
                      />
                    </div>
                    <div class="mb-3">
                      <label for="nama_produk" class="form-label">Harga Produk</label>
                      <input
                        type="number"
                        class="form-control"
                        name="harga_produk"
                      />
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi_produk" class="form-label">Deskripsi Produk</label>
                        <textarea class="form-control" name="deskripsi_produk" rows="3"></textarea>
                      </div>
                    <div class="mb-3">
                      <label for="kategori_produk" class="form-label">Kategori Produk</label>
                      <select name="category" id="category" class="form-select">
                        <option value="" class="mb-1">Pilih Kategori</option>
                        @foreach (\App\Models\Product::getCategory() as $category)
                        <option value="{{$category}}" class="mb-1">{{$category}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Foto Produk</label>
                        <input type="file" class="form-control" name="foto_produk">
                    </div>
                    <input type="submit" class="btn btn-success" value="Simpan">
                </form>
                  </div>
                </div>
              </div>
        </div>
    </div>
</body>
  
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../assets/vendor/js/menu.js"></script>

  <script src="../assets/vendor/libs/masonry/masonry.js"></script>

  <script src="../assets/js/main.js"></script>


  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
