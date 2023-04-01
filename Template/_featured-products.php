<?php
$db = new DBController();
$product = new Product($db);
$item = $product->getData();
$Cart = new Cart($db);

//request method post
if($_SERVER['REQUEST_METHOD']=="POST"){
    //call method addtocart
    $Cart->addToCart($_POST['user_id'],$_POST['item_id']);
}
?>
<!--Featured Products-->
<section id="FeaturedProducts">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Featured Products</h4>
        <div class="row">
            <div class="column">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-rale">
                        <a href="productpage.php?item_id=1"><img src="./Assests/product1.jpg" alt="product1" style="width:100%"></a>
                        <div class="text-center">
                            <h6>Samsung Odyssey G9</h6>
                            <div class="price py-2">
                                <span>$1000</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo 1?>">
                                <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                <button type="submit" name = "top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </form>                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-rale">
                        <a href="productpage.php?item_id=20"><img src="./Assests/product2.jpg" alt="product2" style="width:100%"></a>
                        <div class="text-center">
                            <h6>ASUS ROG GEForce RTX 4090 OC</h6>
                            <div class="price py-2">
                                <span>$2000</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo 20?>">
                                <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                <button type="submit" name = "top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </form>                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-rale">
                        <a href="productpage.php?item_id=15"><img src="./Assests/product3.jpg" alt="product2" style="width:100%"></a>
                        <div class="text-center">
                            <h6>SteelSeries Arctis 7</h6>
                            <div class="price py-2">
                                <span>$100</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo 15?>">
                                <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                <button type="submit" name = "top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </form>                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-rale">
                        <a href="productpage.php?item_id=10"><img src="./Assests/product4.jpg" alt="product2" style="width:100%"></a>
                        <div class="text-center">
                            <h6>Skyloong SK61S PBT</h6>
                            <div class="price py-2">
                                <span>$60</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo 10?>">
                                <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                <button type="submit" name = "top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </form>                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-rale">
                        <a href="productpage.php?item_id=9"><img src="./Assests/product5.jpg" alt="product2" style="width:100%"></a>
                        <div class="text-center">
                            <h6>Logitech G402</h6>
                            <div class="price py-2">
                                <span>$20</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo 9?>">
                                <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                <button type="submit" name = "top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </form>                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="item py-2" style="width:200px;">
                    <div class="product font-rale">
                        <a href="productpage.php?item_id=24"><img src="./Assests/product6.jpg" alt="product2" style="width:100%"></a>
                        <div class="text-center">
                            <h6>Core I9 12900 12th Gen</h6>
                            <div class="price py-2">
                                <span>$500</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo 24?>">
                                <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                <button type="submit" name = "top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>
                            </form>                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--!Featured Products-->
<?php ?>