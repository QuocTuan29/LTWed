<div class="prd-block">
    <h2>Giỏ hàng của bạn</h2>
    <div class="cart">
        <?php

        ?>
        <form method="post" id="giohang">
            <table>
                <tr>
                    <td class="cart-item-img" width="25%" rowspan="4"><img width="100" height="110" src="quantri/anh/<?php echo $row['anh_sp'] ?>" /></td>
                    <td>Sản phẩm:</td>
                    <td class="cart-item-title" width="50%"><?php echo $row['ten_sp'] ?></td>
                </tr>
                <tr>
                    <td>Giá:</td>
                </tr>
                <tr>
                    <td>Số lượng:</td>
                </tr>
                <tr>
                    <td>Thành tiền:</td>
                </tr>
            </table>
        </form>
    </div>
</div>