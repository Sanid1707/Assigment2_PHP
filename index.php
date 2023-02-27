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
    <h1>Bootstrap starter template</h1>
    <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
  </div>


  <h1>Product List</h1>
    <section>
        <!-- display a table of products -->
        <div class="table-responsive">     <!-- // ADDED THIS DIV FROM BOOTSTRAP  --> 
        <table class="table table-hover">   <!-- // ADDED THIS DIV FROM BOOTSTRAP  --> 
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Price</th>
                <th>Delete</th>
            </tr>

            <?php foreach ($products as $product) : ?>
            <tr>
                <td><?php echo $product['productCode']; ?></td>
                <td><?php echo $product['productName']; ?></td>
                <td class="right"><?php echo $product['listPrice']; ?></td>
                <td><form action="delete_product.php" method="post">
                    <input type="hidden" name="product_id"
                           value="<?php echo $product['productID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        </div>
    </section>

</main><!-- /.container -->
<?php include 'include/footer.php';?>
