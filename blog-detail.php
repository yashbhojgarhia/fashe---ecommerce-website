
	<?php include "header.php"; ?>
<?php
	$the_blog_id=0;
if(isset($_GET['blogid']))
{
  $the_blog_id = $_GET['blogid'];
}
	$query13 = "SELECT * FROM blog WHERE blog_id=$the_blog_id";
$test13 = mysqli_query($connection, $query13);
while($row = mysqli_fetch_assoc($test13))
{
    ?>
	<!-- breadcrumb -->
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="index.php" class="s-text16">
			Home
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="blog.php" class="s-text16">
			Blog
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<span class="s-text17">
			<?php echo $row['blog_name']; ?>
		</span>
	</div>

	<!-- content page -->
	<section class="bgwhite p-t-60 p-b-25">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-lg-9 p-b-80">
					<div class="p-r-50 p-r-0-lg">
						<div class="p-b-40">
							<div class="blog-detail-img wrap-pic-w">
								<img src="images2/<?php echo $row['blog_image']; ?>" alt="IMG-BLOG">
							</div>

							<div class="blog-detail-txt p-t-33">
								<h4 class="p-b-11 m-text24">
									<?php echo $row['blog_name']; ?>
								</h4>

								<div class="s-text8 flex-w flex-m p-b-21">
									<span>
										By <?php echo $row['blog_author']; ?>
									</span>

								</div>

								<p class="p-b-25">
									<?php echo $row['blog_content']; ?>
								</p>
							</div>

						</div>
					</div>
				</div>
				<?php
}
?>

				<div class="col-md-4 col-lg-3 p-b-80">
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
	<script src="js/main.js"></script>

</body>
</html>
