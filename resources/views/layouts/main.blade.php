<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rent Books | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<style>
    .main{
        height: 100vh;
    }
    .sidebar{
        background-color: #F1F7B5;
    }
    .sidebar a{
        text-decoration: none;
        padding: 20px 30px;
        color: black;
        display: block;
    }
    .sidebar a:hover{
        background-color: #BA94D1;
        border-radius: 10px;
    }
    .sidebar a.active{
        background-color: #BA94D1;
        border-right: solid 4px #00425A;
        border-radius: 10px;
}

    .books{
        background-color: #BA94D1;
    }

    .card-data{
        border-radius: 5px;
        padding: 20px 40px;
        border: solid 1px;
        color: #FFFF;
    }

    .card-data i{
        font-size: 50px;
    }

    .desc{
        font-size: 30px;
    }

    .count{
        font-size: 30px;
    }

    .category{
        background-color: #BFACE2;
    }

    .user{
        background-color: #BFACE2;
    }
</style>
<body>


    <div class="main d-flex flex-column justify-content-between">
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg " style="background-color: #00425A">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">RENT BOOKS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
          </div>
        </div>
      </nav>

<div class="body-main h-100 ">
    <div class="row g-0 h-100 ">
        <div class="sidebar col-lg-2 p-5 collapse d-lg-block" id="navbarSupportedContent">
            @if(Auth::user()->roles_id == 1)
            <a href="/dashboard" @if(request()->route()->uri == 'dashboard') class='active' @endif> <i class="bi bi-house-door-fill"></i>Dashboard</a>
            <a href="/users"  @if(request()->route()->uri == 'users') class='active' @endif> <i class="bi bi-person-fill"></i>User</a>
            <a href="/category"  @if(request()->route()->uri == 'category') class='active' @endif> <i class="bi bi-bookmarks-fill"></i>Category</a>
            <a href="/books"  @if(request()->route()->uri == 'books') class='active' @endif> <i class="bi bi-book-fill"></i>Books</a>
            <a href="/rent"  @if(request()->route()->uri == 'rent') class='active' @endif> <i class="bi bi-cart-fill"></i>Rent Logs</a>
            <a href="/logout" @if(request()->route()->uri == 'logout') class= 'active' @endif><i class="bi bi-box-arrow-right"></i></i>Logout</a>            
            @else
            <a href="/profile" @if(request()->route()->uri == 'rent') class='active' @endif><i class="bi bi-person-fill"></i>Profile</a>
            <a href="/logout" @if(request()->route()->uri == 'logout') class= 'active' @endif><i class="bi bi-box-arrow-right p-1"></i></i>Logout</a> 
            @endif
        </div>
            <div class="content col-lg-10 p-5">
                @yield('content')
        </div>
    </div>
</div>


    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    </html>