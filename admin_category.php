<?php 
include "header1.php";
?>
     <?php 
if(isset($_POST['submit']))
{
    $post_cat_name = $_POST['cat_name'];
    
    $add_query = "INSERT INTO category(cat_name) VALUES('{$post_cat_name}')";
    $test_query = mysqli_query($connection, $add_query);
    if($test_query)
        {
            echo "<script type='text/javascript'>alert('Successfully Added.')</script>";
        }
}
    ?>
    <?php
    if(isset($_GET['delete']))
                                   {
                                       $the_cat_id=$_GET['delete'];
                                       $query5="DELETE FROM category WHERE cat_id = {$the_cat_id}";
                                       $delete_query = mysqli_query($connection,$query5);
                                       header("Location: admin_category.php");
                                   }
     ?>
     <h2>Welcome Admin</h2>
     <hr style="width: 80%;">
      <div class="row" style="padding: 20px;">
                    <div class="col-lg-6">
           <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                   <label for="cat_name" style="">Add Category</label>
                                   <br>
                                    <input type="text" placeholder="Enter new category" name="cat_name">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                                </div>
                            </form>
                    </div>
                    <div class="col-lg-6">
                           <table class="table table-bordered table-hover">
                               <thead>
                                   <tr>
                                       <th>Id</th>
                                       <th>Category Title</th>
                                   </tr>
                               </thead>
                               <tbody>
                                 <?php
                                  $query2 = "SELECT * From category";
                                  $test4 = mysqli_query($connection, $query2);
                                   while($row=mysqli_fetch_assoc($test4))
                                   {?>
                                   <tr>
                                       <td><?php echo $row['cat_id']; ?></td>
                                       <td><?php echo $row['cat_name']; ?></td>
                                       <td><a href='admin_category.php?delete=<?php echo $row['cat_id']; ?>'>Delete</a></td>
                                   </tr>
                                   <?php
                                   }
                                   ?>
                               </tbody>
                           </table>
                        </div>
                </div>
                        
                                    
        <?php
include "footer.php"; ?>
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
