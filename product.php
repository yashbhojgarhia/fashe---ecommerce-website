<?php include "header.php"; ?>
    <?php
$the_cat_id = 0;
if(isset($_GET['catid']))
{
    $the_cat_id = $_GET['catid'];
}
?>

	<!-- Title Page -->
	<?php
$query10 = "SELECT * FROM category WHERE cat_id = $the_cat_id";
$test10 = mysqli_query($connection, $query10);
while($row=mysqli_fetch_assoc($test10))
{
    ?>
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images2/blur.jpg);">
		<h2 class="l-text2 t-center">
			<?php echo $row['cat_name']; ?>
		</h2>
	</section>
	<?php
}
?>


	<!-- Content page -->
	<section class="bgwhite p-t-55 p-b-65">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
					<div class="leftbar p-r-20 p-r-0-sm">
						<!--  -->
						<h4 class="m-text14 p-b-7">
							Categories
						</h4>

						<ul class="p-b-54">
						<?php
                            $query9 = "SELECT * FROM category";
                            $test9 = mysqli_query($connection, $query9);
                            while($row = mysqli_fetch_assoc($test9))
                            {
                                ?>
							<li class="p-t-4">
								<a href="product.php?catid=<?php echo $row['cat_id']; ?>" class="s-text13 active1">
									<?php echo $row['cat_name']; ?>
								</a>
							</li>
                            <?php
                            }
                            ?>
						</ul>

					</div>
				</div>

				<div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
					
					<!-- Product -->
					<div class="row">
					<?php
                        $query11 = "SELECT * FROM product WHERE cat_prod_id= $the_cat_id";
                        $test11 = mysqli_query($connection, $query11);
                        while($row = mysqli_fetch_assoc($test11))
                        {
                        ?>
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
							<!-- Block2 -->
							<div class="block2">
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
									<img src="images2/<?php echo $row['prod_image']; ?>" alt="IMG-PRODUCT">

									<div class="block2-overlay trans-0-4">
										<div class="block2-btn-addcart w-size1 trans-0-4">
											<!-- Button -->
											<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                <a href="add.php?id=<?php echo $row['prod_id']; ?>">Add to Cart</a>
											</button>
										</div>
									</div>
								</div>

								<div class="block2-txt p-t-20">
									<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
										<?php echo $row['prod_name']; ?>
									</a>

									<span class="block2-price m-text6 p-r-5">
										<?php echo $row['prod_price']; ?>
									</span>
								</div>
							</div>
						</div>
						<?php
                        }
                        ?>

					</div>

				</div>
			</div>
		</div>
	</section>


	<!-- Footer -->
	
<?php include "footer.php"; ?>


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



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

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
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
	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
