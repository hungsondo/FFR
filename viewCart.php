<?php 
// Initialize shopping cart class 
include_once 'Cart.class.php'; 
$cart = new Cart; 
include "header.php";
?>



<script>
function updateCartItem(obj,id){
    $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
        if(data == 'ok'){
            location.reload();
        }else{
            alert('Cập nhật giỏ hàng thất bại, xin hãy thử lại');
        }
    });
}
</script>


<div class="small-container">
    <h1 class="align text-center">GIỎ HÀNG</h1>
    <div class="row">
        <div class="cart">
            <div class="col-lg-12">
                <div class="table  table-responsive" style="overflow-x:auto;width: 1500px;">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th width="45%">Sản phẩm</th>
                                <th width="10%">Giá</th>
                                <th width="15%">Số lượng</th>
                                <th class="text-right" width="20%">Tổng</th>
                                <th width="10%"> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if($cart->total_items() > 0){ 
                                // Get cart items from session 
                                $cartItems = $cart->contents(); 
                                foreach($cartItems as $item){ 
                            ?>
                            <tr>
                                <td><?php echo $item["name"]; ?></td>
                                <td><?php echo $item["price"].'đ'; ?></td>
                                <td><input class="form-control" type="number" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"/></td>
                                <td class="text-right"><?php echo $item["subtotal"].'đ'; ?></td>
                                <td class="text-right"><button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')?window.location.href='cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>':false;"><i class="itrash">Xóa</i> </button> </td>
                            </tr>
                            <?php } }else{ ?>
                            <tr><td colspan="5"><p>Không có gì trong giỏ hàng.....</p></td>
                            <?php } ?>
                            <?php if($cart->total_items() > 0){ ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><strong>Tổng tiền phải trả</strong></td>
                                <td class="text-right"><strong><?php echo $cart->total().'đ'; ?></strong></td>
                                <td></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a href="index.php" class="btn btn-block btn-primary">Tiếp tục mua hàng</a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <?php if($cart->total_items() > 0){ ?>
                        <a href="checkout.php" class="btn btn-lg btn-block btn-primary">Thanh toán</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?<?php include "footer.php" ?>