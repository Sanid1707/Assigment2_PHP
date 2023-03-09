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



<main class="container">
  <div class="starter-template text-center">
   


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
