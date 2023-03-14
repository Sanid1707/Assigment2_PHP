<!-- <?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}


?> -->



<?php 
include 'include/header.php';
?>

   <!-- the below code is a bootstrap code for the carousel  ....ie the slide show  -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/jordan3.jpg" class="d-block w-100" alt="Slide 1">
    </div>
    <div class="carousel-item">
      <img src="images/jordan4.jpg" class="d-block w-100" alt="Slide 2">
    </div>
    <div class="carousel-item">
      <img src="images/converse.jpg" class="d-block w-100" alt="Slide 3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>



<style>
.card {
  max-width: 900px;
  margin: auto;
  margin-top: 80px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  transition: 0.3s;
  border-radius: 5px;
  margin-bottom:100px;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

.card-img-top {
  height: 500px;
  object-fit: cover;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.card-body {
  padding: 10px;
}

.card-title {
  margin-bottom: 5px;
  font-size: 18px;
  font-weight: bold;
}

.card-text {
  font-size: 14px;
  color: #666;
}
</style>

<div class="container">
  <div class="card-columns">
    <div class="card">
      <img src="images/kalalund.jpg" class="card-img-top img-fluid" alt="Shoe 1">
      <div class="card-body">
        <h5 class="card-title">Waaiz west </h5>
        <p class="card-text">Nike Air Max 270 React: These shoes are a combination of two of Nike's most popular technologies, the Air Max and React. They have a lightweight and breathable upper, with a foam midsole that is both comfortable and supportive. The outsole is made of durable rubber, and the shoe features Nike's signature Air Max cushioning in the heel for added comfort.</p>
      </div>
    </div>
    <div class="card">
      <img src="images/kalibhoot.jpg" class="card-img-top img-fluid" alt="Shoe 2">
      <div class="card-body">
        <h5 class="card-title">Broken Iphone</h5>
        <p class="card-text">Dr. Martens 1460 Smooth Leather Boots: These iconic boots have been a staple in punk and alternative fashion for decades. They are made of smooth leather and have a sturdy rubber sole with the classic yellow stitching around the edge. The boots have a lace-up front with metal eyelets and come in a range of colors.</p>
      </div>
    </div>
    <div class="card">
      <img src="images/sexyjordan.jpg" class="card-img-top img-fluid" alt="Shoe 3">
      <div class="card-body">
        <h5 class="card-title"> Stressfull college </h5>
        <p class="card-text">Adidas Ultraboost 21: These shoes are designed for running and have a sleek and modern design. The upper is made of breathable mesh material, and the midsole is made of Adidas' signature Boost foam, which provides responsive cushioning with every step. The outsole is made of Continental rubber for added durability and traction, and the shoe features a supportive heel counter for added stability.</p>
      </div>
    </div>
  </div>
</div>


 





<?php include 'include/footer.php';?>