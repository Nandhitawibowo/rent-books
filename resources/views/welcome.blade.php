<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
</head>
<body>

    <!--navbar-->
    <nav class="navbar navbar-dark navbar-expand-lg bg-secondary">
        <div class="container">
          <a class="navbar-brand" href="#">RENT BOOK</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   Kategori
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Romance</a></li>
                      <li><a class="dropdown-item" href="#">Fiksi</a></li>
                      <li><a class="dropdown-item" href="#">Horror</a></li>
                    </ul>
                  </li>
              <li class="nav-item">
                <a class="nav-link active" href="#">Login</a>
              </li>     
            </ul>
          </div>
        </div>
      </nav>

    <div class="content">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://img.freepik.com/free-vector/library-with-books-shelves-desk-study_107791-1749.jpg?w=1380&t=st=1674620157~exp=1674620757~hmac=3208e7e329c6b4dda69934db3e4b1ba5306b732e80824782770598d9edec0d41" class="d-block w-100" style="max-height: 500px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://img.freepik.com/free-vector/empty-library-interior-design-with-bookshelves_1308-72785.jpg?w=1380&t=st=1674620409~exp=1674621009~hmac=3f58e38b0ee74f6cf966e0594996bcadb06d8c760858ac51f9c7e69fbf72b13e" class="d-block w-100" style="max-height: 500px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="https://img.freepik.com/free-vector/children-reading-books-library_1308-30864.jpg?w=1380&t=st=1674620549~exp=1674621149~hmac=75b91d4d62849f9cffe11853cb1157c5f83c50e3c6f69490a51741b5dda825c0" class="d-block w-100" style="max-height: 500px" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="container my-5">
             <div class="row">
                <div class="col-lg-5">
                    <h3>Rent Book</h3>
                    <a href="#" type="button" class="btn btn-outline-secondary">AYO DAFTAR SEKARANG</a>

                </div>
                <div class="col-lg-7">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est quibusdam accusamus illo molestiae! Amet odit sint corporis. Consequuntur dolorem rem odit dicta incidunt, iste, eos minus corporis illo labore numquam?</p>
                </div>
             </div>
        </div>
      
        <!--Cards book-->
    <div class="container mt-4">
        <div class="row text-center">
            <h2>Buku Terpopuler</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn.gramedia.com/uploads/items/9786236197493.jpg" class="card-img-top" style="max-height: 400px;" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">70 MIL </h5>
                      <p class="card-text">Mengisahkan tentang perjalanan kehidupan Javio dan Primrose. Javio masih berusia lima belas tahun yang mulai menyukai Primrose Charlotte Navari, gadis manis yang memiliki mata berwarna hazel itu.</p>
                      <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                  </div>

            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdnwpseller.gramedia.net/wp-content/uploads/2022/07/01111519/image001.jpg" class="card-img-top" style="max-height: 400px;" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Kata</h5>
                      <p class="card-text">bercerita tentang hati Binta yang penuh bimbang. Binta terjebak dalam masa lalu yang belum usai, sementara cinta baru yang hangat sudah siap menyambut dirinya untuk melangkah maju.</p>
                      <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                  </div>

            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img src="http://assets.kompasiana.com/items/album/2018/08/18/14ce416308240e90767f9eed91930d1f2bc21207-1-5b784869bde5753b1a0246f2.jpg" class="card-img-top" style="max-height: 400px;" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Pergi</h5>
                      <p class="card-text">Sebuah kisah tentang menemukan tujuan, ke mana hendak pergi, melalui kenangan demi kenangan masa lalu, pertarungan hidup-mati, untuk memutuskan ke mana langkah kaki akan dibawa.</p>
                      <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                  </div>

            </div>
        </div>
    </div>

    <!-- Contact -->
    <div class="container mt-4">
        <div class="row text-center">
            <h2>Contact Admin</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <form>
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="name">
                    </div>
                    <div class="mb-3">
                      <label for="messege" class="form-label">Messege</label>
                      <textarea class="form-control" id="messege"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>

<!-- Footer -->
<footer class="bg-secondary text-white text-center text-lg-start mt-4">
    <div class="text-center p-3">
    Create By :
    <a class="text-white" style="text-decoration: none" href="https://getbootstrap.com/docs/5.3/components/buttons/">Nandhita Wibowo</a>
    </div>
    </footer>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>