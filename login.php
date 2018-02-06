<?php include "header.php" ?>

<?php
if(isset($_POST['login']))
{
    $user_number=$_POST['user_number'];
    $password= $_POST['user_password'];
    $user_number = mysqli_real_escape_string($connection, $user_number);
    $password = mysqli_real_escape_string($connection, $password);
    $db_password = "";
    $query = "SELECT * FROM users WHERE user_number = '{$user_number}'";
    $select_user_query = mysqli_query($connection, $query);
    if(!$select_user_query)
        die("Query Failed " . mysqli_error($connection));
    while($row=mysqli_fetch_assoc($select_user_query))
    {
        $db_user_id = $row['user_id'];
        $db_number = $row['user_number'];
        $db_password = $row['user_password'];
        $db_firstname = $row['user_firstname'];
        $db_lastname = $row['user_lastname'];
        $db_user_role = $row['user_role'];
    }
//    $password = crypt($password, $db_user_password);
    
    if($password == $db_password){
        $_SESSION['user_id'] = $db_user_id;
        $_SESSION['firstname'] = $db_firstname;
        $_SESSION['lastname'] = $db_lastname;
        $_SESSION['user_role'] = $db_user_role;
        
        header("Location: index.php");
    }
    else {
        echo "<script type='text/javascript'>alert('Either Unregistered or Wrong Password')</script>";
    }
        

}
?>
     

	<h1 style="text-align: center; padding-top: 30px;">Login Page</h1>
	<div class="row">
	    <div class="col-lg-2"></div>
        <div class="col-lg-8" style="padding-top: 10%;">
	       <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="user_number">Mobile No.</label>
                    <div style="background-color: lightgrey; border-bottom: 2px solid black;" >
                        <input type="text" class="form-control" name="user_number" placeholder="Enter 10-digit Mobile number">
                    </div>
                </div>
                <div class="form-group">
                    <label for="user_password">Password</label>
                    <div style="background-color: lightgrey; border-bottom: 2px solid black;" >
                        <input type="password" class="form-control" name="user_password" placeholder="Enter your password">
                    </div>
                </div>
               <div class="form-group">
        <input class="btn btn-primary" type="submit" name="login" value="LogIn">
    </div>
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
