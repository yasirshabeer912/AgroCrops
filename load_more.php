<?php
include('config/dbcon.php');
$items_per_load = 8;
$offset = $_POST['offset'];

$sql = $con->query("SELECT * FROM ads WHERE status='aprove' ORDER BY date DESC LIMIT $items_per_load OFFSET $offset");

while ($row = $sql->fetch_assoc()) {
  $category_id = $row['category_id'];
  $category = $con->query("SELECT * FROM category WHERE id='$category_id'")->fetch_assoc();
?>
  <div class="isotope-item cat1 cat3">
    <div class="isotope-item-inner">
      <div class="product">
        <div class="product-header">
          <div class="thumb image-swap">
            <a href="detail.php?id=<?php echo $row['id'] ?>"><img style="height: 300px;" src="PICS/<?php echo $row['image'] ?>" class="product-main-image img-responsive img-fullwidth" width="300" height="300" alt="Ads"></a>
            <a href="detail.php?id=<?php echo $row['id'] ?>"><img style="height: 300px;" src="PICS/<?php echo $row['image'] ?>" class="product-hover-image img-responsive img-fullwidth" alt="Ads"></a>
          </div>
          <div class="product-button-holder"></div>
        </div>
        <div class="product-details">
          <a href="">
            <h6 class="text-secondary"><?php echo $category['name'] ?></h6>
          </a>
          <h5 class="product-title"><a id="anchor" href="detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['title'] ?></a></h5>
          <span class="price">
            <ins><span class="amount"><span class="currency-symbol">Rs</span><?php echo $row['price'] ?></span></ins>
          </span>
          <div class="price_location d-flex justify-content-between my-2">
            <span class="address"><?php echo $row['location'] ?></span>
            <span class="time"><?php echo $row['date'] ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
 
<?php
}
?>
