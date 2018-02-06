<?php include "header.php" ?>
	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images2/blog1.jpg); ">
		<h2 class="l-text2 t-center">
			Blog
		</h2>
	</section>


	<!-- content page -->
	<section class="bgwhite p-t-60">
		<div class="container">
			<div class="row">
			<?php
    $query14 = "SELECT * FROM blog";
$test14 = mysqli_query($connection, $query14);
while($row = mysqli_fetch_assoc($test14))
{ ?>
				<div class="col-md-8 col-lg-9 p-b-75">
					<div class="p-r-50 p-r-0-lg">
						<!-- item blog -->
						<div class="item-blog p-b-80">
							<a href="blog-detail.php?blogid=<?php echo $row['blog_id']; ?>" class="item-blog-img pos-relative dis-block hov-img-zoom">
								<img src="images2/<?php echo $row['blog_image']; ?>" alt="IMG-BLOG">
							</a>

							<div class="item-blog-txt p-t-33">
								<h4 class="p-b-11">
									<a href="blog-detail.php?blogid=<?php echo $row['blog_id']; ?>" class="m-text24">
										<?php echo $row['blog_name']; ?>
									</a>
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										By <?php echo $row['blog_author']; ?>
									</span>
								</div>

								<p class="p-b-12">
									
								</p>

								<a href="blog-detail.php?blogid=<?php echo $row['blog_id']; ?>" class="s-text20">
									Continue Reading
									<i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
								</a>
							</div>
						</div>

						
					</div>
					
					
					<!-- Pagination
					<div class="pagination flex-m flex-w p-r-50">
						<a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
						<a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
					</div>
					-->
				</div>
				<?php
}
?>
				

				<div class="col-md-4 col-lg-3 p-b-75">
					<div class="rightbar">
						
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
			</div>
		</div>
	</section>


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
	<script src="js/main.js"></script>

</body>
</html>
