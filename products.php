<?php
require_once('database.php');
$queryProducts = 'SELECT * FROM products';
$statement = $db->prepare($queryProducts);
$statement->execute();
$products = $statement->fetchAll();
$statement->closeCursor();
?>

<?php include 'include/header.php';?>

<main class="container">
    <h1>Product List</h1>
    <section class="row">
        <!-- display products using cards -->
        <?php foreach ($products as $product) : ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="<?php echo $product['images']; ?>" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#"><?php echo $product['name']; ?></a>
                        </h4>
                        <h5>$<?php echo $product['price']; ?></h5>
                        <p class="card-text"><?php echo $product['description']; ?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"><?php echo $product['category_id']; ?></small>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</main>

<?php include 'include/footer.php';?>
