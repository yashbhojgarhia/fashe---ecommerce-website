<?php include "header1.php" ?>
<?php
if(isset($_POST['submit'])){
	$blog_name = $_POST['blog_name'];
	$blog_author = $_POST['blog_author'];
	$blog_content = $_POST['blog_content'];
    $blog_image=$_FILES['image']['name'];
    $blog_image_temp=$_FILES['image']['tmp_name'];
    move_uploaded_file($blog_image_temp, "images2/$blog_image");
	$query_add = "INSERT INTO blog (blog_name, blog_author, blog_content, blog_image) VALUES ('{$blog_name}','{$blog_author}','{$blog_content}', '{$blog_image}')";

	$row = mysqli_query($connection, $query_add);


}

?>
<h3 class="text-center">Add Blog</h3><br><br><br>
<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8">
		<form action="" method="post" enctype="multipart/form-data">
			<input type="text" name="blog_name" style="border-bottom: 2px solid black;" placeholder="Enter Blog Title/Name" required><br><br><br>
			<input type="text" name="blog_author" style="border-bottom: 2px solid black;" placeholder="Enter Blog Author Name" required><br><br><br>

			<h4>Add Image</h4><input type="file" name="image"> <br>
			<textarea rows="20" cols="90" name="blog_content" style="border-bottom: 2px solid black;" placeholder="Enter Your Blog here" required></textarea><br>
			<input type="submit" class="btn btn-primary" name="submit" value="Submit">
		</form>
		<br><br>
	</div>
	<div class="col-lg-2"></div>
</div>



<?php include "footer.php" ?>



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
