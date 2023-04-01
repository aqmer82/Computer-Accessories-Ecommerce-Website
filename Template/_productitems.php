<!--Product items-->
<?php
$db = new DBController();
$product = new Product($db);
$product_shuffle = $product->getData();
$Cart = new Cart($db);

//request method post
if($_SERVER['REQUEST_METHOD']=="POST"){
    //call method addtocart
    $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
}
?>
<section id="Products">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Products</h4>
        <div class="row">
            <?php foreach($product_shuffle as $item){ ?>
            <div class="column">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-rale">
                        <a href="<?php printf('%s?item_id=%s','productpage.php',$item['item_id']);?>"> <img src="<?php echo $item['item_image']?>" alt="product2" style="width:100%"></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name'] ?></h6>
                            <div class="price py-2">
                                <span><?php echo $item['item_price']?>$</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id']?>">
                                <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                <button type="submit" name = "top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>
<!--!Product items-->