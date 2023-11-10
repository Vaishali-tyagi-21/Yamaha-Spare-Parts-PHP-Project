<!DOCTYPE html>
	<html>
	<head>
	<title>Explorer Style</title>
	<link href="Resources/css.css" rel="stylesheet" type="text/css">
   <script>
document.addEventListener("DOMContentLoaded", function() {
    // Find the "Place Order" button by its id
    var placeOrderButton = document.getElementById("placeOrderButton");

    // Add a click event listener to the button
    placeOrderButton.addEventListener("click", function(e) {
        e.preventDefault(); 
        window.location.href = "https://buy.stripe.com/9AQcNcg7f5tDcgg144";
    });
});
</script>

	</head>
	<body>
    
	<!-----------------Wrapper----------------->
    
	<div id="wrapper"> 
    
	<!-----------------Header & Navigation Bar----------------->
    
	<?php 
	include('header.php');

	?>
     
	<!-----------------Main Frame----------------->
    
	<div id="mainframe">
	<div class="sub_frame">
    <h3>Checkout</h3>
	<hr>
    <form method="post">
    
    
    
    
                       <div class="col_3">
                       
                  <table>
                     <tr>
                        <th>Delivery Address</th>
                     </tr>
                     <tr>
                        <td>Recipient Name: <input name="recipientname" type="text" value="" required> </td>
                         </tr>
                         <tr>
                        <td>Recipient Phone: <input name="recipientphone" type="text" value="" required> </td>
                        <tr>
                        </tr>
                        <td>Delivery Address: <input name="deliveryaddress" type="text" value="" required> </td>
                        <tr>
                        </tr>
                        <td>Delivery City: <select name="deliverycity">
                        <option value="Colombo">Delhi</option>
                        <option value="Dehiwala">Mumbai</option>
<option value="Moratuwa">Hyderabad</option>
<option value="Sri Jayawardenapura Kotte">Chennai</option>
<option value="Negombo">Uttar Pardesh</option>
<option value="Kandy">Jharkhand</option>
<option value="Galle">Bihar</option>
<option value="Trincomalee">Gujarat</option>
<option value="Batticaloa">Rajasthan</option>
<option value="Jaffna">Goa</option>
<option value="Katunayake">Jammu and Kashmir</option>
<option value="Dambulla">Madhya Pradesh</option>
<option value="Kolonnawa">Karnataka</option>
<option value="Kurunegala">Kerala</option>
<option value="Wattala">Wattala</option>
<option value="Avissawella">Avissawella</option>
<option value="Weligama">Weligama</option>
<option value="Ambalangoda">Ambalangoda</option>
<option value="Kegalle">Kegalle</option>
<option value="Hambantota">Hambantota</option>
<option value="Tangalle">Tangalle</option>
<option value="Gampaha">Gampaha</option>
<option value="Horana">Horana</option>
<option value="Wattegama">Wattegama</option>
<option value="Minuwangoda">Minuwangoda</option>

                        </select>
                        </td>
                        </tr>
                        <tr>
                        <td>Location Type: <select name="locationtype">
                        <option value="home">Home</option>
                        <option value="workplace">Workplace</option>
                        <option value="other">Other</option>
                        </select> </td>
                        </tr>
						<tr>
                        <td>Shipping Type: <select name="shippingtype">
                        
                        <option value="0">Free Shipping: 0.00 ₹ (7 Days)</option>
                        <option value="200">Standard Shipping: 200.00 ₹ (2 Days)</option>
                        <option value="500">Express Shipping: 500.00 ₹ (1 Days)</option>
                        </select>
                        </td>
                        </tr>
                     </tr>
                  </table>
                  </div>
                   <div class="col_3">
                   
                  <table>
                     <tr>
                        <th>Billing Summary</th>
                     </tr>
                     <tr>
                        <td><b>Total Products:</b> <?php echo $_SESSION['totalproducts']; ?></td>
                     </tr>
                     <tr>
                        <td><b>Total Price:</b> <?php echo $_SESSION['totalprice']; ?>.00 ₹ <sub>*Excluding Shipping Charges</sub></td>
                        
                     </tr>
                     <tr>
                        <td><b>Tax:</b> 0 ₹</li>
                     </tr>
                  </table>   
                  <table>
                     <tr>
                        <td ></td>
                        <td colspan="6" class="tf"><input type="submit" name="placeorder" class="cart_btn" value="Place Order"></td>
                     </tr>
                     <tr>
                        <td ></td>
                        <td colspan="6" class="tf">
    <input type="submit" name="placeorder" id="placeOrderButton" class="cart_btn" value="PayNow">
</td>
                     </tr>

                  </table>
                  

                  
                  </div>

    </form>
	</div>    
	<div class="clear"></div>
	<!-----------------Footer----------------->
	<?php include('Resources/footer.php');?>
	</div>
    </div>
	</body>
	</html>