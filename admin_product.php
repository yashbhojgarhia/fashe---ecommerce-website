<?php include "header1.php";?>
     
     <?php
if(isset($_POST['submit']))
{
    $prod_name = $_POST['prod_name'];
    $prod_price = $_POST['prod_price'];
    $prod_cat_id = $_POST['cat_prod_id'];
    $prod_count = $_POST['prod_count'];
    $prod_image=$_FILES['image']['name'];
    $prod_image_temp=$_FILES['image']['tmp_name'];
    move_uploaded_file($prod_image_temp, "images2/$prod_image");
    $query="INSERT INTO product(prod_name, prod_price, cat_prod_id, prod_count, prod_image) VALUES('{$prod_name}', {$prod_price}, {$prod_cat_id}, {$prod_count}, '{$prod_image}')";
    $create_post_query = mysqli_query($connection, $query);
    header("Location: admin_product.php");
    
}
?>
<?php
    if(isset($_GET['delete']))
                                   {
                                       $prod_id=$_GET['delete'];
                                       $query5="DELETE FROM product WHERE prod_id = {$prod_id}";
                                       $delete_query = mysqli_query($connection,$query5);
                                       header("Location: admin_product.php");
                                   }
     ?>
     <h2>Welcome Admin</h2>
     <hr style="width: 80%;">

<h2 style="padding-left:80px;">Add Product</h2>
<br><br><br>

<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-4">
        <form action="" method="post" enctype="multipart/form-data">    
           <div class="form-group">
               <h4>Product Name</h4> <input type="text" placeholder="Enter name" name="prod_name">
               <h4>Product Price</h4><input type="text" placeholder="Enter Price" name="prod_price">
                <h4>Product Category</h4>
                <select name="cat_prod_id" id="cat_prod_id">
                   <?php
                   $query7 = "SELECT * FROM category";
                                $select_categories = mysqli_query($connection, $query7);
                                while($row = mysqli_fetch_assoc($select_categories))
                                {
                                    $cat_id = $row['cat_id'];
                                    $cat_name = $row['cat_name'];
                                    echo "<option value='$cat_id'>{$cat_name}</option>";
                                 }
                    ?>
                </select>
               <h4>Product Count</h4><input type="text" placeholder="Enter Count" name="prod_count">  
               <br>
               <h4>Product Image</h4><input type="file" name="image">     <br>                             
                <input type="submit" class="btn btn-primary" name="submit" value="Add Product">
            </div>  
        </form>        
    </div>
    <div class="col-lg-4">
        <table class="table table-bordered table-hover">
           <thead>
               <tr>
                   <th>Category Id</th>
                   <th>Product Name</th>
                   <th>Product Price</th>
                   <th>Product Count</th>
               </tr>
           </thead>
           <tbody>
             <?php
              $query3 = "SELECT * From product";
              $test5 = mysqli_query($connection, $query3);
               while($row=mysqli_fetch_assoc($test5))
               {?>
               <tr>
                   <td><?php echo $row['cat_prod_id']; ?></td>
                   <td><?php echo $row['prod_name']; ?></td>
                   <td><?php echo $row['prod_price']; ?></td>
                   <td><?php echo $row['prod_count']; ?></td>
                   <td><a href='admin_product.php?delete=<?php echo $row['prod_id']; ?>'>Delete</a></td>
               </tr>
               <?php
               }
               ?>
           </tbody>
        </table>        
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