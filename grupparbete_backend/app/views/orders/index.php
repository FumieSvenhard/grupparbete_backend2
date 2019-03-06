<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<h1>Customer's order</h1>
<div class="container">

<?php foreach($data['orders'] as $order) : ?>
    <div class="card bg-light">
        <div class="card-body">
            <h1 class="card-title">Your address</h1>
            <p class="card-text"><?php echo $order->author; ?> </p>
            </div>
        </div>
    </div> 
    <?php endforeach; ?>  
<?php require APPROOT . '/views/inc/footer.php'; ?>