<?php
$cart = getSession('cart');
?>
<h2>Giỏ hàng</h2>
<?php

// xử lý cập nhật, xóa giỏ hàng

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['update_cart'])){
        $quantityArr = $_POST['quantity'];

        foreach($quantityArr as $productId => $quantity){
            if(!empty($quantity)){
                $cart[$productId] = $quantity;
            }
            
        }
        
        $msg = 'Cập nhật giỏ hàng thành công';
    
    }

    if(isset($_POST['delete'])){
        $productArr = array_keys($_POST['delete']);
        $productId = reset($productArr);
        unset($cart[$productId]);

       $msg = 'Xóa sản phẩm thành công';
    }

    if(isset($_POST['delete_all'])){
        $cart = [];
    }

    setSession('cart', $cart);
    setSession('msg', $msg ?? '');
    setSession('msg_type', 'success');
    reload();
}

if (!empty($cart)) { 
    // show thông báo
    echo getMessage(getFlashData('msg'), getFlashData('msg_type'));

    ?>
    <form action="" method="post">
        <table class="table table-borderd">
            <thead>
                <tr>
                    <th width="5%">STT</th>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th width="15%">Số lượng</th>
                    <th>Thành tiền</th>
                    <th width="5%">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                $totalQuantity = 0;
                $totalAmount = 0;
                foreach ($cart as $id => $quantity) {
                    $count++;
                    $productInfor = getProduct($id);
                    $amount = $productInfor['price'] * $quantity;
                    $totalQuantity += $quantity;
                    $totalAmount += $amount;



                ?>

                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $productInfor['name']; ?></td>
                        <td><?php echo number_format($productInfor['price']) . 'đ'; ?></td>
                        <td><input type="number" name="quantity[<?php echo $id; ?>]" class="form-control" value="<?php echo $quantity; ?>" /></td>
                        <td><?php echo number_format($amount) . 'đ'; ?></td>
                        <td>
                            <button onclick="return confirm('Bạn có chắc chắn')" type="submit" name="delete[<?php echo $id; ?>]" class="btn btn-danger">&times;</button>
                        </td>
                    </tr>
                <?php }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Tổng</th>
                    <th><?php echo $totalQuantity; ?></th>
                    <th colspan="2"><?php echo number_format($totalAmount) . 'đ'; ?></th>
                </tr>
            </tfoot>
        </table>

        
        <div class="d-flex gap-3">
            <button type="submit" name="update_cart" class="btn btn-primary order-2">Cập nhật giỏ hàng</button>
            <button type="submit" onclick="return confirm('Bạn có chắc chắn?')" name="delete_all" class="btn btn-danger order-1">Xóa giỏ hàng</button>
            <a href="?module=checkout" class="btn btn-success order-3">Thanh toán</a>
        </div>
    </form>
<?php } else {
    echo getMessage('Không có sản phẩm trong giỏ hàng. <a href="index.php">Quay lại mua hàng</a>', 'danger');
}
?>