<!--product-->
<?php
    $db = new DBController();
    $product = new Product($db);
    $product_shuffle = $product->getData();
    $item_id=$_GET['item_id'];
    foreach($product->getData() as $item):
        if($item['item_id']==$item_id):
?>
<section id = "product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="column3 left">
                <img src="<?php echo $item['item_image']?>" alt="product" class="img-fluid">
                <div class="form-row pt-4 font-size-16 font-roboto">
                    <br><br>
                    <div class="qty d-flex">
                        <h6 class="font-roboto">Quantity:</h6>
                        <div class="px-4 d-flex font-rale">
                            <button type="button" data-id="0"  class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                            <input type="text" data-id="0" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">
                            <button type="button" data-id="0" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                        </div>
                    </div>
                    <br>
                    <div class="column2">
                        <button type="submit" class="btn btn-danger form-control">Proceed to buy</button>
                    </div>
                    <div class="column2">
                        <button type="submit" class="btn btn-warning form-control">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="column3 right py-5">
                <h5 class="font-roboto font-size-20"><?php echo $item['item_name']?></h5>
                <small><?php echo $item['item_brand']?></small>
                <hr class="m-0">
                <br>
                <h5 class="font-rale font-size-14">Deal Price</h5>
                <div class="price">
                    <span><?php echo $item['item_price']?>$</span>
                    <small class = "text-dark font-size-12">&nbsp;&nbsp;inclusive of all taxes</small>
                </div>
                <br>
                <h6 class="font-rubik">Product Description</h6>
                <p class="font-rale font-size-14"><?php echo $item['item_discription']?></p>
            </div>
        </div>
    </div>
</section>
<!--!product-->
<?php
        endif;
        endforeach;?>