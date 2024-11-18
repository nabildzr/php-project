<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/partials/layouts/layout-top.php';

require_once $_SERVER['DOCUMENT_ROOT'] .  '/restaurant/conf/function.php';
?>

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT m.*, md.* FROM menu m JOIN menu_description md ON m.item_id = md.item_id WHERE m.item_id ='$id'";
    $data = query($query)[0];

    // format price, ex = 10000 -> 10.000
    $price = number_format($data['item_price'], 0, ',', '.');
    $discountPercent = round($data['discount']);

    $discountPrice = $data['item_price'] - ($data['item_price'] * ($data['discount'] / 100));
    $discountPriceFormatted = number_format($discountPrice, 0, ',', '.');
}



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
                        <h1>Our Shop</h1>
                        <p>Order food with home delivery or take away</p>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <div class="frame white"></div>
    </div>
    <!-- /hero_single -->

    <div class="container margin_60_40">
        <div class="row">
            <div class="col-lg-6 magnific-gallery">
                <p>
                    <a href="/restaurant/admin/images/<?= $data['item_image'] ?>" title="<?= $data['item_name'] ?>"
                        data-effect="mfp-zoom-in" style="justify-content: center; display: flex;"><img
                            src="/restaurant/admin/images/<?= $data['item_image'] ?>" alt=""
                            style="width: 20em; height: 20em; " class="img-fluid"></a>
                </p>

                <!-- IF YOU WANT TO ADD ANOTHER IMAGE THEN WILL HAVE STATIC SCROLL -->
                <!-- <p>
                    <a href="img/shop/2-small.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="/restaurant/assets/img/shop/2-small.jpg" alt="" class="img-fluid lazy"></a>
                </p> -->
            </div>
            <div class="col-lg-6" id="sidebar_fixed">
                <div class="prod_info">
                    <form action="" method="post">

                        <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i
                                class="icon_star voted"></i><i class="icon_star voted"></i><i
                                class="icon_star"></i><em>4
                                reviews</em></span>
                        <h1><?= $data['item_name'] ?></h1>
                        <p><?= $data['item_description'] ?></p>
                        <!-- <p>Vix patrioque cotidieque ad, iusto probatus volutpat id pri. Amet dicam omnesque at est, voluptua assueverit ut has, modo hinc nec ea. Quas nulla labore est ne, est in quod solet labitur, sit ne probo mandamus.</p> -->
                        <div class="prod_options">
                            <!-- THIS IS FOR DROPDOWN (SIZE) -->
                            <!-- <div class="row">
                            <label class="col-xl-5 col-lg-5 col-md-6 col-6"><strong>Size</strong></label>
                            <div class="col-xl-4 col-lg-5 col-md-6 col-6">
                                <div class="custom-select-form">
                                    <select class="wide">
                                        <option value="" selected>Small</option>
                                        <option value="">Medium</option>
                                        <option value="">Large</option>
                                        <option value="">Extra Large</option>
                                        <option value="">Extra Extra Large</option>
                                    </select>
                                </div>
                            </div>
                        </div> -->
                            <div class="row">
                                <label class="col-xl-5 col-lg-5  col-md-6 col-6"><strong>Quantity</strong></label>
                                <div class="col-xl-4 col-lg-5 col-md-6 col-6">
                                    <div class="numbers-row">
                                        <input type="text" value="1" id="quantity_1" class="qty2" name="quantity_1">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-md-6">
                                <div class="price_main">

                                    <!-- NEW PRICE  -->


                                    <?= $data['discount_status'] ? "
                                <span class='new_price'>Rp. $discountPriceFormatted </span>
                                " :

                                        "<span class='new_price'>Rp. $price </span>" ?>


                                    <!-- PERCENT -->
                                    <!-- if discount is true then will show these -->
                                    <?= $data['discount_status'] ? "
                                
                                <span class='percentage'>$discountPercent%</span>
                                " : "" ?>


                                    <!-- OLD PRICE -->
                                    <?= $data['discount_status'] ? "<span class='old_price'>Rp. $price </span>" : "" ?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="btn_add_to_cart"><a href="#0" class="btn_1">Add to Cart</a></div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /prod_info -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->

    <div class="tabs_product">
        <div class="container">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">Description</a>
                </li>
                <li class="nav-item">
                    <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">Reviews</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /tabs_product -->
    <div class="tab_content_wrapper">
        <div class="container">
            <div class="tab-content" role="tablist">
                <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                    <div class="card-header" role="tab" id="heading-A">
                        <h5 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="false"
                                aria-controls="collapse-A">
                                Description
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Details and ingredients</h3>
                                    <p><?= $data['ingredients'] ?? "Not added yet." ?></p>
                                </div>
                                <div class="col-md-6">
                                    <h3>Specifications <?= $data['ingredients'] ?? "" ?></h3>
                                    <div class="table-responsive">
                                        <table class="table table-sm table-striped">
                                            <tbody>
                                                <tr>
                                                    <td><strong>Calories</strong></td>
                                                    <td><?= $data['calories'] ?? "Not added yet." ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Protein</strong></td>
                                                    <td><?= $data['protein'] ?? "Not added yet." ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Carboidrates</strong></td>
                                                    <td><?= $data['carboidrates'] ?? "Not added yet." ?></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Fat</strong></td>
                                                    <td><?= $data['fat'] ?? "Not added yet." ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /table-responsive -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                    <div class="card-header" role="tab" id="heading-B">
                        <h5 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false"
                                aria-controls="collapse-B">
                                Reviews
                            </a>
                        </h5>
                    </div>
                    <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">
                        <div class="card-body">
                            <div class="row justify-content-between">
                                <div class="col-lg-6">
                                    <div class="review_content">
                                        <div class="clearfix add_bottom_10">
                                            <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i
                                                    class="icon_star"></i><i class="icon_star"></i><i
                                                    class="icon_star"></i><em>5.0/5.0</em></span>
                                            <em>Published 54 minutes ago</em>
                                        </div>
                                        <h4>"Commpletely satisfied"</h4>
                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea.
                                            Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere
                                            fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer
                                            petentium cu his.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="review_content">
                                        <div class="clearfix add_bottom_10">
                                            <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i
                                                    class="icon_star"></i><i class="icon_star empty"></i><i
                                                    class="icon_star empty"></i><em>4.0/5.0</em></span>
                                            <em>Published 1 day ago</em>
                                        </div>
                                        <h4>"Always the best"</h4>
                                        <p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere
                                            fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer
                                            petentium cu his.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /row -->
                            <div class="row justify-content-between">
                                <div class="col-lg-6">
                                    <div class="review_content">
                                        <div class="clearfix add_bottom_10">
                                            <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i
                                                    class="icon_star"></i><i class="icon_star"></i><i
                                                    class="icon_star empty"></i><em>4.5/5.0</em></span>
                                            <em>Published 3 days ago</em>
                                        </div>
                                        <h4>"Outstanding"</h4>
                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea.
                                            Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere
                                            fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer
                                            petentium cu his.</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="review_content">
                                        <div class="clearfix add_bottom_10">
                                            <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i
                                                    class="icon_star"></i><i class="icon_star"></i><i
                                                    class="icon_star"></i><em>5.0/5.0</em></span>
                                            <em>Published 4 days ago</em>
                                        </div>
                                        <h4>"Excellent"</h4>
                                        <p>Sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius
                                            essent fuisset ut. Viderer petentium cu his.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /row -->
                            <p class="text-end"><a href="leave-review.html" class="btn_1">Leave a review</a></p>
                        </div>
                        <!-- /card-body -->
                    </div>
                </div>
            </div>
            <!-- /tab-content -->
        </div>
    </div>
</main>

<?php
$script = "
	<script>
		// Sticky sidebar
		$('#sidebar_fixed').theiaStickySidebar({
			minWidth: 991,
			updateSidebarHeight: true,
			additionalMarginTop: 90
		});
	</script>
    ";

echo $script;

?>

<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/restaurant/partials/layouts/layout-bottom.php';
