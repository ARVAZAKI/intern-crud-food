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
              <h4 class="fw-bold py-3 mb-4 text-center"><span class="text-muted fw-light">Produk </span>Makanan dan Minuman</h4>
              <div class="container-fluid">
                <a href="/tambah-product" class="btn btn-success">Tambah Produk</a>
                @if (Session::has('message'))
                  <div class="alert alert-success">{{Session::get('message')}}</div>
                  @endif
                <div class="row mb-2 d-flex justify-content-evenly">
                    @foreach ($produk as $item)
                    <div class="col-md-3 col-lg-3 mb-3 mt-3 d-flex">
                        <div class="card h-100">
                            <img src="{{ asset('storage/photo/' . $item->foto_produk) }}" class="img-top" alt="Foto Produk">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->nama_produk }}</h5>
                                <p class="card-text">Harga: {{ $item->harga_produk }}</p>
                                <a href="{{route('detailProduct', $item->id)}}" class="btn btn-outline-primary">Lihat detail</a>
                                <a href="{{route('editProduct',$item->id)}}" class="btn btn-outline-warning">Edit</a>
                                <a href="{{route('deleteProduct',$item->id)}}" class="btn btn-outline-danger">Hapus</a>
                              </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            

    </div>
  
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
