<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}


?>



<?php
require_once('database.php');
$queryProducts = 'SELECT * FROM products';
$statement = $db->prepare($queryProducts);
$statement->execute();
$products = $statement->fetchAll();
$statement->closeCursor();
?>
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


<main class="container">

 


  <h1>Product List</h1>
    <section>
        <!-- display a table of products -->
        <div class="table-responsive">     <!-- // ADDED THIS DIV FROM BOOTSTRAP  --> 
        <table class="table table-hover">   <!-- // ADDED THIS DIV FROM BOOTSTRAP  --> 
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Price</th>
              
            </tr>

            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['name']; ?></td>
                <td><?php echo $product['category_id']; ?></td>
                <td class="right"><?php echo $product['price']; ?></td>
               
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
    </section>

</main><!-- /.container -->
<?php include 'include/footer.php';?>
