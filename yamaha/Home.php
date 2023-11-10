<!DOCTYPE html>
<html>
<head>
    <title>Yamaha</title>
    <!-- CSS sheet -->
    <link href="Resources/css.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header & Navigation Bar -->
        <?php include('header.php'); ?>
        <?php
        ///////////////////////Display reviews///////////////////////
        $select_recently_reviewed_products = "SELECT DISTINCT (tblproductreviews.ProductID), tblProducts.ProductName, tblProducts.ProductImage, tblProducts.ProductPrice, tblProducts.ProductDiscountAmount FROM tblproductreviews INNER JOIN tblProducts ON tblproductreviews.ProductID=tblProducts.ProductID ORDER BY tblproductreviews.ReviewDate DESC LIMIT 5";
        $result_recently_reviewed_products = mysqli_query($con, $select_recently_reviewed_products);
        $select_latest_products = "SELECT * FROM `tblproducts` ORDER BY CreatedDate ASC LIMIT 5";
        $result_latest_products = mysqli_query($con, $select_latest_products);
        ?>
        <!-- Main Frame -->
        <div id="mainframe">
            <div class="sub_framefullpage">
                <!-- Products Frame -->
                <h3>Welcome</h3>
                <p>
                    <div class="row">
                        <div class="col_3">
                            <img src="Resources/designimages/BF.png" style="width:100%">
                            <img src="Resources/designimages/Electrical.png" style="width:100%">
                        </div>
                        <div class="col_3">
                            <img src="Resources/designimages/Fuel And Air.png" style="width:100%">
                            <img src="Resources/designimages/Browse.jpg" style="width:100%">
                        </div>
                    </div>
                </p>
            </div>
        </div>

        <!-- Latest Products -->
        

        <div class="clear"></div>

        <!-- Footer -->
        <?php include('Resources/footer.php'); ?>

    </div>
</body>
</html>










