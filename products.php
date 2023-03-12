
<?php 
session_start();

?>
<?php
require_once('database.php');
$queryProducts = 'SELECT * FROM products';
$statement = $db->prepare($queryProducts);
$statement->execute();
$products = $statement->fetchAll();
$statement->closeCursor();
?>

<?php include 'include/header.php';?>
<main class="container" style="margin-top: 50px; margin-bottom: 50px;">
    <h1 class="text-center mb-5">Product List</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($products as $product) : ?>
            <div class="col mb-4">
                <div class="card h-100" style="background-color:#EEEAE9; border: none;">
                    <a href="#"><img class="card-img-top img-fluid rounded" src="<?php echo $product['images']; ?>" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#" style="color: #343a40; font-weight: bold;"><?php echo $product['name']; ?></a>
                        </h4>
                        <h5 class="card-text" style="color:#EC401C; font-size: 20px;">$<?php echo $product['price']; ?></h5>
                        <p class="card-text" style="color: #6c757d;"><?php echo $product['description']; ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php echo $product['category_id']; ?></small>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php include 'include/footer.php';?>
