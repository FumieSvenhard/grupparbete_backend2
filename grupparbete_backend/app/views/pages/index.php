<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="container my-5">
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./public/img/img1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
      </div>   
    </div>
    <div class="carousel-item">
      <img src="./public/img/img2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
      </div>   
    </div>
    <div class="carousel-item">
      <img src="./public/img/img3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>

<div class="container">
  <div class="row">
    <?php foreach($data['products'] as $product) : ?>
    <div class="col-md-4 mb-5">
      <div class="card"style="width: 18rem;">
      
      <img src="./public/img/<?php echo $product->image; ?>" class="card-img-top" alt="...">
      <div class="card-body mb-3">
  <h3 class="card-title"><?php echo $product->title; ?></h3>
    <p class="card-text"><?php echo $product->author; ?><br><span class="text-danger font-weight-bold"><?php echo $product->price; ?> kr</span></p>
    <a href="<?php echo URLROOT; ?>/orders/index" class="btn btn-danger btn-block">Add to Cart</a>
</div>


</div>
</div>
<?php endforeach; ?>  
</div>
</div>
    
<?php require APPROOT . '/views/inc/footer.php'; ?>