<?php
include "header.php"; 
?>
<?php
if(isset($_POST['calc']))
{
    $area = $_POST['area'];
    $price = $_POST['crop'];
    $unit = $area/5;
    $p = $price*$unit;
    echo "<script>alert('" . $unit .  "Kgs is required costing Rs." . $p . "')</script>";
}
?>

<h1 style="text-align: center; padding-top: 30px;">Calculator</h1>
	<div class="row">
	    <div class="col-lg-2"></div>
        <div class="col-lg-8" style="padding-top: 10%;">
	       <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="area">Area in Acres</label>
                    <div style="background-color: lightgrey; border-bottom: 2px solid black;" >
                        <input type="text" class="form-control" name="area" placeholder="Enter Area">
                    </div>
                </div>
                <div class="form-group">
                    <label for="crop">Crop</label>
                    <select name="crop">
                   <?php
                   $query7 = "SELECT * FROM calculator";
                                $select_calc = mysqli_query($connection, $query7);
                                while($row = mysqli_fetch_assoc($select_calc))
                                {
                                    $crop_name = $row['crop_name'];
                                    $crop_price = $row['crop_price'];
                                    echo "<option value='$crop_price'>{$crop_name}</option>";
                                 }
                    ?>
                </select>
                </div>
               <div class="form-group">
        <input class="btn btn-primary" type="submit" name="calc" value="Calculate">
    </div>
                </div>
            </form> 
	    </div>
	    <div class="col-lg-2"></div>
	</div>

<?php
include "footer.php";
?>
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
