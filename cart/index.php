<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/partials/layouts/layout-top.php';

require_once $_SERVER['DOCUMENT_ROOT'] .  '/restaurant/conf/connection.php';

$memberId = $_SESSION['memberId'];
?>

<?php
$heading = "
	   <!-- SPECIFIC CSS -->
    <link href='/restaurant/assets/css/shop.css' rel='stylesheet'>
    ";

echo $heading;

?>

<main>

    <div class="hero_single inner_pages background-image" data-background="url(img/hero_menu.jpg)">
        <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10 col-md-8">
                        <h1>Your orders</h1>
                        <p>Order food with home delivery or take away</p>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <div class="frame gray"></div>
    </div>
    <!-- /hero_single -->

    <div class="bg_gray">
        <div class="container margin_60_40">

            <form method="post">
                <table class="table table-striped cart-list">
                    <thead>
                        <tr>
                            <th>
                                Product
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Quantity
                            </th>
                            <th>
                                Subtotal
                            </th>
                            <th>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $item = query("SELECT c.*, m.* FROM cart c JOIN menu m ON c.item_id = m.item_id WHERE member_id = $memberId");






                        foreach ($item as $cart) :

                            // terpapkan price dan discount ke dalam variable
                            $priceBefore = $cart['discount_status'] > 0 ? $cart['item_price'] - ($cart['item_price'] * ($cart['discount'] / 100)) : $cart['item_price'];

                            // format harga setelah diskon, contoh = 7500 -> 7.500
                            $price = number_format($priceBefore, 0, ',', '.');
                        ?>
                            <tr>
                                <td>
                                    <div class="thumb_cart">
                                        <img src="/restaurant/admin/images/<?= $cart['item_image'] ?>" data-src="/restaurant/admin/images/<?= $cart['item_image'] ?>" class="lazy" alt="Image">
                                    </div>
                                    <span class="item_cart"><?= $cart['quantity'] ?>x <?= $cart['item_name'] ?></span>
                                </td>
                                <td>
                                    <strong>Rp. <?= $price ?></strong>
                                </td>
                                <td>
                                    <div class="numbers-row">
                                        <input type="text" value="<?= $cart['quantity'] ?>" id="quantity_1" class="qty2" name="quantity_1">
                                        <div class="inc button_inc">+</div>
                                        <div class="dec button_inc">-</div>
                                    </div>
                                </td>
                                <td>
                                    <strong>Rp. <?= $price ?></strong>
                                </td>
                                <td class="options">
                                    <a href="#"><i class="ti-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="row add_top_30 flex-sm-row-reverse cart_actions">

                    <div class="col-sm-4 text-end">
                        <button type="button" class="btn_1 outline">Update Cart</button>
                    </div>
                    <div class="col-sm-8">
                        <div class="apply-coupon">
                            <div class="form-group form-inline">
                                <input type="text" name="coupon-code" value="" placeholder="Promo code" class="form-control d-inline" style="width: 150px;"><button type="button" class="btn_1 outline">Apply Coupon</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /cart_actions -->

            </form>
        </div>

        <!-- /container -->
    </div>

    <div class="box_cart">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <?php
                    // Kode di bawah ini digunakan untuk menghitung total biaya
                    // yang dihitung dari setiap item di cart, lalu dijumlahkan
                    // menjadi total biaya yang harus dibayarkan
                    //
                    // array_reduce() digunakan untuk menggabungkan nilai-nilai
                    // di dalam array dengan menggunakan fungsi yang di
                    // tentukan, dan mengembalikan nilai yang dihasilkan
                    //
                    // $total diinisialisasi dengan 0, lalu dijumlahkan dengan
                    // biaya setiap item di cart
                    //
                    // $discountPrice dihitung dari harga asli, dan dijumlahkan
                    // dengan biaya setiap item di cart. Jika item memiliki
                    // diskon, maka harga yang dihitung adalah harga asli
                    // dikurangi diskon.
                    $total = array_reduce($item, function ($total, $item) {
                        $discountPrice = $item['item_price'] - ($item['item_price'] * ($item['discount'] / 100));
                        return $total + $item['quantity'] * $discountPrice;
                    }, 0);
                    $subtotal = 0;
                    foreach ($item as $cart) {

                        $subtotal += $cart['quantity'] * $cart['item_price'];
                    }
                    $subtotal = number_format($subtotal, 0, ',', '.');
                    $total = number_format($total, 0, ',', '.');
                    ?>


                    <?php
                    // kode di bawah ini digunakan untuk menghitung total biaya
                    // yang dihitung dari setiap item di cart, lalu dijumlahkan
                    // menjadi total biaya yang harus dibayarkan
                    //
                    //* Diskon dihitung dari harga asli, dan dijumlahkan dengan biaya setiap item di cart
                    //* Jika item memiliki diskon, maka harga yang dihitung adalah harga setelah diskon
                    //* Jika item tidak memiliki diskon, maka harga yang dihitung adalah harga asli
                    //
                    ?>
                    <ul>
                        <li>
                            <span>Subtotal</span><?= 'Rp. <s>' . $subtotal ?></s>
                            
                        </li>
                        <?php foreach ($item as $cart) : ?>
                        <?php if ($cart['discount'] > 0) : ?>
                        <li>
                            <span><?= $cart['item_name'] ?> (<?= $cart['discount'] ?>% off)</span> <?= 'Rp. ' . number_format($cart['quantity'] * ($cart['item_price'] - ($cart['item_price'] * ($cart['discount'] / 100))), 0, ',', '.') ?>
                        </li>
                        <?php endif; ?>
                        <?php endforeach; ?>
                        <li>
                            <span>Total</span> <?= 'Rp. ' . $total; ?>
                        </li>
                    </ul>
                    <a href="shop-checkout.html" class="btn_1 full-width cart">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /box_cart -->
</main>

<!-- footer -->
<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/partials/layouts/layout-bottom.php' ?>