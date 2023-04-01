<?php
$db = new DBController();
$product = new Product($db);
$item = $product->getData();
$cart = new cart($db);
$subTotal=[];
global $data;
$data=-1;
$idtest='1';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['delete-cart-submit'])){
        $deletedrecord=$cart->deleteCart($_POST['item_id']);
    }
}
?>
<!--Shopping Cart-->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-roboto font-size-20">Shopping Cart</h5>
        <!--Shopping Cart Items-->
        <div class="row">
            <div class="column3 left2">
                <?php
                foreach($product->getData('cart') as $item):
                    $cart = $product->getPRoduct($item['item_id']);
                    $data+=1;

                    $subTotal[] = array_map(function($item) use ($idtest, $data) {
                    ?>
                <!--cart item-->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="<?php echo $item['item_image']?>" style="height:120px" alt="cart1" class="img-fluid">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-roboto font-size-20"><?php echo $item['item_name']?></h5>
                        <small><?php echo $item['item_brand']?></small>
                        <!--product qty-->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-25">
                                <button type="button" data-id="<?php echo $data ?>"  class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="<?php echo $data ?>" class="qty_input border px-2 w-100 bg-light" disabled value="<?php echo htmlspecialchars($idtest)?>" placeholder="1">
                                <button type="button" data-id="<?php echo $data?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                <!--!product qty-->
                            </div>
                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'];?>" name="item_id">
                                <button type="submit" name="delete-cart-submit" class="btn font-roboto text-danger px-3 border-right">Delete</button>
                            </form>
                            <button type="submit" class="btn font-roboto text-info"></button>
                        </div>
                    </div>
                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 font-roboto">
                            <span class="product_price text-danger"><?php echo ($item['item_price'])*$idtest;?>$</span>
                        </div>
                    </div>
                </div>
                <!--!cart item-->
                <?php

                        return $item['item_price'];
                    },$cart); //closing array_map function

                endforeach;
                // Total Sum Function
                function gettSum($arr){
                    if(isset($arr)){
                        $sum = 0;
                        foreach($arr as $item){
                            $sum += floatval($item[0]);
                        }
                        return sprintf('%.2f',$sum);
                    }
                }
                ?>
            </div>
            <div class="column3 right2">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i>Your order is eligible for Free Delivery</h6>
                    <div class="border-top py-4">
                        <h5 class="font-roboto font-size-20">Subtotal (<?php echo count($subTotal)??0;?> item)&nbsp;<span id="deal-price" class="text-danger"><?php echo gettSum($subTotal)?>$</span></h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                    </div>
                </div>
            </div>

            <!--!Shopping Cart Items-->
        </div>
    </div>
</section>

<!--!Shopping Cart-->
