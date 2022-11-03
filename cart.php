<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>

<?php session_start() ?>

<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here.
        <ul>
            <?php foreach ($_SESSION['product'] as $product) {
            echo $catalog[$product]['name']; } ?>
        </ul>
    </div>
</section>
<?php require 'inc/foot.php'; ?>