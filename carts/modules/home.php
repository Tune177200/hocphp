<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
    }
?>
<h2>Danh sách sản phẩm</h2>
<form action="" method="post">
    <table class="table table-borderd">
        <thead>
            <tr>
                <th width="5%">STT</th>
                <th>Tên</th>
                <th>Giá</th>
                <th width="20%">Mua</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                if(!empty($products)){
                    foreach($products as $key => $product){ ?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $product['name']; ?></td>
                            <td><?php echo number_format($product['price']).'đ'; ?></td>
                            <td class="d-grid">
                                <input type="number" name="quantity[<?php echo $product['id'] ?>]" class="form-control mb-2" value="1" />
                                <button type="submit" name="add_to_cart[<?php echo $product['id'] ?>]" class="btn btn-danger">Thêm vào giỏ</button>
                            </td>
                        </tr>
                    <?php }
                }
            ?>
            
        </tbody>
    </table>
</form>