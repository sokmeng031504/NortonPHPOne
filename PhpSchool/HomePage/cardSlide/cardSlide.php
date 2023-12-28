<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Infinite Card Slider JavaScript | CodingNepal</title>
    <link rel="stylesheet" href="css/slide.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="./js/slide.js" defer></script>
    <style>
      .card:hover{
        box-shadow: 0 0 10px hsl(152, 51%, 52%);
      }
      img:hover{
        color: aqua;
        opacity: 0.8;
      }
      h5{
        color: black;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <i id="left" class="fa-solid fa-angle-left"></i>
      <ul class="carousel">
        <li class="card">
          <div class="img"><img src="../images/Wide Hiking Boots.webp" alt="img" draggable="false"></div>
          <h5 style="color:black">Wide Hiking </h5>
          <span>Hiking boots and walking</span>
        </li>
        <li class="card">
          <div class="img"><img src="../images/backpack4.webp" alt="img" draggable="false"></div>
          <h5 style="color:black">Backpack</h5>
          <span>Backpack Adventure</span>
        </li>
        <li class="card">
          <div class="img"><img src="../images/cook set.png" alt="img" draggable="false"></div>
          <h5 style="color:black">Cook Set</h5>
          <span>Cook Set For Adventure</span>
        </li>
        <li class="card">
          <div class="img"><img src="../images/Hiking.jpg" alt="img" draggable="false"></div>
          <h5 style="color:black">Hiking</h5>
          <span>Hiking</span>
        </li>
        <li class="card">
          <div class="img"><img src="../images/item1.webp" alt="img" draggable="false"></div>
          <h5 style="color:black">Backpack</h5>
          <span>Backpack Adventure</span>
        </li>
        <li class="card">
          <div class="img"><img src="../images/shoes5.webp" alt="img" draggable="false"></div>
          <h5 style="color:black">Wide Hiking </h5>
          <span>Hiking boots and walking</span>
        </li>
      </ul>
      <i id="right" class="fa-solid fa-angle-right"></i>
    </div>

  </body>
</html>