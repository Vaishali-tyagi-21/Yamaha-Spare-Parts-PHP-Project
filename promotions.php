<!DOCTYPE html>
<html>
<head>
    <title>Yamaha</title>
    <!-- CSS sheet -->
    <link href="Resources/css.css" rel="stylesheet" type="text/css">
    <style>
        .sub_framefullpage
            {
			background-color: #2980b9;
			color: #000;
		}
        
    </style>
</head>
<body>
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header & Navigation Bar -->
        <?php include('header.php'); ?>
        <?php
        ///////////////////////Display reviews///////////////////////
        $select_highest = "SELECT * FROM `tblproducts` ORDER BY ProductDiscountAmount DESC LIMIT 5";
        $result_select_highest = mysqli_query($con, $select_highest);
        $select_all = "SELECT * FROM `tblproducts` WHERE  ProductDiscountAmount > 0 ORDER BY ProductDiscountAmount DESC ";
        $result_select_all = mysqli_query($con, $select_all);
        ?>
        <!-- Main Frame -->
        <div id="mainframe">
            <div class="sub_framefullpage">
                <!-- Products Frame -->
                <h3>Promotions</h3>
                <p>
                    <div class="row">
                        <div class="col_3">
                            <img src="Resources/designimages/promo1.jpg" style="width:100%">
                        </div>
                        <div class="col_3">
                            <img src="Resources/designimages/promo2.jpg" style="width:100%">
                        </div>
                    </div>
                </p>
            </div>

            <!-- Latest Products -->
            <div class="sub_framefullpage">
                <h3>Highest Discounts Offered By Yamaha</h3>
                <div class="productframe">
                    <?php
                    // Count number of rows
                    $no_of_rows = mysqli_num_rows($result_select_highest);
                    if ($no_of_rows > 0) {
                        // Fetch products from variable and display
                        while ($data = mysqli_fetch_array($result_select_highest)) {
                            ?>
                            <div class="product" style="width:23%;">
                                <?php if ($data['ProductDiscountAmount'] != "0") { ?>
                                    <span class="product-discount-label" style="background-color:red; color:#FFF">-<?php echo  $data['ProductDiscountAmount']; ?> %</span>
                                <?php } else { ?>
                                    <span class="product-discount-label"
                                          style="background-color:#FFF; color:#FFF">-<?php echo $data['ProductDiscountAmount']; ?> %</span>
                                <?php } ?>

                                <img src="<?php echo $data['ProductImage']; ?>">
                                <br>
                                <br>
                                <div class="product_name" style="background-color:yellow; color:#000">
                                    <?php echo $data['ProductName']; ?>
                                </div>
                                <div class="product_price">
                                    ₹:<?php echo $data['ProductPrice']; ?>
                                </div>
                                <a href="viewproduct.php?pid=<?php echo $data['ProductID']; ?>"><input name=""
                                                                                                      type="button"
                                                                                                      value="See Details"></a>
                                <!-- Add "Cart" and "Buy Now" buttons with the same styling -->
                                <a href="viewproduct.php?pid=<?php echo $data['ProductID']; ?>&action=cart"><input name="" type="button" value="Cart" class="product-button"></a>
                     <a href="viewproduct.php?pid=<?php echo $data['ProductID']; ?>"><input name="" type="button" value="Buy Now" class="product-button"></a>
                            </div>
                        <?php }
                    } else { ?>
                        <h3>Oops! No Products Found!</h3>
                    <?php } ?>
                </div>
            </div>

            <p>
                <div class="row">
                    <div class="col_3">
                        <img src="Resources/designimages/promo3.jpg" style="width:100%">
                    </div>
                    <div class="col_3">
                        <img src="Resources/designimages/promo4.jpg" style="width:100%">
                    </div>
                </div>
            </p>

            <!-- Recently Reviewed Products -->
            <div class="sub_framefullpage">
                <h3>All Discounted Products</h3>
                <div class="productframe">
                    <?php
                    // Count number of rows
                    $no_of_rows = mysqli_num_rows($result_select_all);
                    if ($no_of_rows > 0) {
                        // Fetch products from variable and display
                        while ($data = mysqli_fetch_array($result_select_all)) {
                            ?>
                            <div class="product" style=" width:23%">
                                <?php if ($data['ProductDiscountAmount'] != "0") { ?>
                                    <span class="product-discount-label">-<?php echo $data['ProductDiscountAmount']; ?> %</span>
                                <?php } else { ?>
                                    <span class="product-discount-label"
                                          style="background-color:#FFF; color:#FFF">-<?php echo $data['ProductDiscountAmount']; ?> %</span>
                                <?php } ?>

                                <img src="<?php echo $data['ProductImage']; ?>">
                                <br>
                                <br>
                                <div class="product_name" style="background-color:yellow; color:#000">
                                    <?php echo $data['ProductName']; ?>
                                </div>
                                <div class="product_price">
                                    ₹:<?php echo $data['ProductPrice']; ?>
                                </div>
                                <a href="viewproduct.php?pid=<?php echo $data['ProductID']; ?>"><input name=""
                                                                                                      type="button"
                                                                                                      value="See Details"></a>
                                <!-- Add "Cart" and "Buy Now" buttons with the same styling -->
                                <a href="checkout.php?pid=<?php echo $data['ProductID']; ?>&action=cart"><input name=""
                                                                                                             type="button"
                                                                                                             value="Cart"
                                                                                                             class="product-button"></a>
                                <a href="checkout.php?pid=<?php echo $data['ProductID']; ?>&action=buy_now"><input name=""
                                                                                                               type="button"
                                                                                                               value="Buy Now"
                                                                                                               class="product-button"></a>
                            </div>
                        <?php }
                    } else { ?>
                        <h3>Oops! No Products Found!</h3>
                    <?php } ?>
                </div>
            </div>

            <div class="clear"></div>

            <!-- Footer -->
            <?php include('Resources/footer.php'); ?>

        </div>
    </div>
</body>
</html>
