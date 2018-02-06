<?php include "header.php" ?>
<?php 
if(isset($_POST['register']))
{
    $post_firstname = $_POST['user_firstname'];
    $post_lastname = $_POST['user_lastname'];
    $post_number = $_POST['user_number'];
    $post_password = $_POST['user_password'];
    $post_user_role = 'user';
    
    $query1 = "SELECT * FROM users WHERE user_number='{$post_number}'";
    $test1 = mysqli_query($connection, $query1);
    if(mysqli_num_rows($test1)!=0){
        echo "<script type='text/javascript'>alert('Number Already Registered')</script>";
    }else{
        $query="INSERT INTO users(user_firstname, user_lastname, user_number, user_password, user_role) VALUES('{$post_firstname}', '{$post_lastname}', '{$post_number}', '{$post_password}', '{$post_user_role}')";
    $create_post_query = mysqli_query($connection, $query);
        if($create_post_query)
        {
            echo "<script type='text/javascript'>alert('Successfully Registered.')</script>";
        }
        else
        {
            echo "<script type='text/javascript'>alert('Server Issue, Shame on us!')</script>";
            
        }
    }
   
    
  
    
    
}

    ?>
	<h1 style="text-align: center; padding-top: 30px;">Register Page</h1>
	<div class="row">
	    <div class="col-lg-2"></div>
        <div class="col-lg-8" style="padding-top: 10%;">
        
	       <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="user_number">Mobile No.</label>
                    <div style="background-color: lightgrey; border-bottom: 2px solid black;" >
                        <input type="text" class="form-control" name="user_number" placeholder="Enter 10-digit Mobile number" required>
                    </div>
                </div>
                   <div class="form-group">
                    <label for="user_firstname">First Name</label>
                    <div style="background-color: lightgrey; border-bottom: 2px solid black;" >
                        <input type="text" class="form-control" name="user_firstname" placeholder="Enter First Name" required>
                    </div>
                </div>
                   <div class="form-group">
                    <label for="user_lastname">Last Name</label>
                    <div style="background-color: lightgrey; border-bottom: 2px solid black;" >
                        <input type="text" class="form-control" name="user_lastname" placeholder="Enter Last Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="user_password">Password</label>
                    <div style="background-color: lightgrey; border-bottom: 2px solid black;" >
                        <input type="password" class="form-control" name="user_password" placeholder="Enter your password" required>
                    </div>
                </div>
                <div class="form-group">
        <input class="btn btn-primary" type="submit" name="register" value="Register">
    </div>
            </form> 
	    </div>
	    <div class="col-lg-2"></div>
	</div>
	
	
	
<?php include "footer.php";?>

	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
