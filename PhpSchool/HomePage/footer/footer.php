<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Footers · Bootstrap v5.3</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <!-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
        .img-footer{
          margin: 0 auto;
          color: red;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
      h5{
        color:whitesmoke;
      }
      #img-footer:hover{
        box-shadow: 2px 2px 2px 2px #ccc;
        opacity: 1;
      }
    </style>


<style>
.footer{
  border-radius: 20px;
  background-color: black;
  width: 100%;
  padding: 50px;
}
.nav-link{
  color:hsl(158, 36%, 37%);
}

</style>
  </head>
<body>
<div class=" footer" style="width:100%">
  <footer>
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 ">Home</a></li>
          <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 ">About</a></li>
          <li class="nav-item mb-2"><a href="#new-product" class="nav-link p-0 ">Products</a></li>
          <li class="nav-item mb-2"><a href="#top-Rated" class="nav-link p-0 ">Top Rated</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">About</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>About</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 ">Home</a></li>
          <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 ">About</a></li>
          <li class="nav-item mb-2"><a href="#new-product" class="nav-link p-0 ">Products</a></li>
          <li class="nav-item mb-2"><a href="#top-Rated" class="nav-link p-0 ">Top Rated</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">About</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Contact</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 ">Home</a></li>
          <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 ">About</a></li>
          <li class="nav-item mb-2"><a href="#new-product" class="nav-link p-0 ">Products</a></li>
          <li class="nav-item mb-2"><a href="#top-Rated" class="nav-link p-0 ">Top Rated</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 ">About</a></li>
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Subscribe to our newsletter</h5>
          <p style="color:#ccc">Monthly digest of what's new and exciting from us.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Email address</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
            <!-- <button class="btn btn-primary" type="button" style="background-color: hsl(158, 36%, 37%);color:whitesmoke">Subscribe</button> -->
          </div>
        </form>
      </div>

      <div class="col-6 col-md-6 mb-3">
        <span>Support</span> | <span>Privacy</span> | <span>Terms of use</span>
      </div>
      <div class="col-md-12 offset-md-1 mb-3" style="margin:0 auto">
        <hr style="border: 2px solid  hsl(158, 36%, 100%)">
      </div>
      <div class="col-10 col-md-4 mb-3" style="margin-top: -30px;">
        <ul class="" style="float:left">
        <li style="color:white;float:left;padding:10px"> <i class="bi bi-telegram" style="font-size:24px;"></i></li>
        <li style="color:white;float:left;padding:10px"> <i class="bi bi-facebook" style="font-size:24px"></i> </li>
        <li style="color:white;float:left;padding:10px"> <i class="bi bi-instagram" style="font-size:24px"></i></li>
        </ul>
      </div>
      <div class="col-12 col-md-7 mb-3" style=" padding: 10px;">
        <img src="./images/logo3.jpg" alt="" width="150px" style="float:right;  border-radius: 50px; border: 3px solid hsl(158, 36%, 37%);" id="img-footer">
      </div>
    </div>
  </footer>
</div>

</body>
