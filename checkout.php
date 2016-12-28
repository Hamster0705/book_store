<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
 
require('includes/config.php');     
    $uid = $_SESSION['id'];
    if(isset($submit))
    {
        unset($_SESSION['cart']);
    $query="insert into orders(name,address,town,city,ward,phone,u_id) values('$name','$address','$pc','$city','$state','$phone','$uid')";
    
    $res=mysqli_query($conn,$query) or die("Can't Execute Query...");
    header("location:payment_details.php");
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <?php
            include("includes/head.inc.php");
        ?>
</head>

<body>
            <!-- start header -->
                <div id="header">
                    <div id="menu">
                        <?php
                            include("includes/menu.inc.php");
                        ?>
                    </div>
                </div>
                
            <!-- end header -->

            <div class="freshdesignweb-top">
                <div class="clr"></div>
                
            </div><!--/ freshdesignweb top bar --> 
  
        <h1 style="margin-top: 100px; text-align: center;font-size: 30px;font-weight: bolder;"> Shipping details </h1>
      <div  class="form" style="margin-top: 20px">
            <form id="contactform" method="post"> 
                <p class="contact"><label for="name">Full name</label></p> 
                <input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
                 
                <p class="contact"><label for="email">Detail address</label></p> 
                <textarea id="address" name="address" placeholder="Hamlet, Alley, Lane, Quarter, ..." required="" cols="55" row="10"type="email"> </textarea>
                <p class="contact"><label for="state">Ward/ Village</label></p> 
                <input type="text" id="state" name="state" required="" placeholder="">                 
                <p class="contact"><label for="username">Town/ District</label></p> 
                <input id="pc" name="pc" required="" tabindex="2" type="text"> 
                 
                <p class="contact"><label for="city">Province/ City</label></p> 
                <input type="text" id="city" name="city" required="" placeholder=""> 

            <p class="contact"><label for="phone">Mobile phone</label></p> 
            <input id="phone" name="phone" placeholder="phone number" required="" type="text"> <br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Confirm & Proceed" type="submit">    
   </form> 
</div>      
</div>
</div>
</body>