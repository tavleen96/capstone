<?php
include "navigation.php";
require "config/mysqli_connect.php";

?>
<div class="c-slidr">
					<div class="w3-content w3-sectio" >
                         <img class="mySlides" src="imagesnew/oia-416136_1920.jpg ">
                        <img class="mySlides" src="imagesnew/hallstatt-3609863_1920.jpg">
                        <img  class="mySlides"src="imagesnew/cape-town-181753_1920.jpg">
                          <img class="mySlides" src="imagesnew/rio-de-janeiro-1963744_1920.jpg">
                        <img  class="mySlides"src="imagesnew/venice-2451047_1920.jpg">
						 <script>
                        var mineIndex = 0;
                        slides();// call function


                        function slides() {
                        var i;
                        var a = document.getElementsByClassName("mySlides");
                        for (i = 0; i < a.length; i++) {
                        a[i].style.display = "none";
                        }
                        mineIndex++;
                        if (mineIndex > a.length) {mineIndex = 1}
                        a[mineIndex-1].style.display = "block";
                        setTimeout(slides, 1500); // Change images after every 1.5 seconds
                        }
                    </script>
									</div>

<div class="package-wrapper">
	<?php
	if($_SESSION["username"]=="admin"){
	echo '<div class="create-package">
		<a href="http://localhost/mytrip-design/create.php">create</a>
	</div>';
}?>
	<div class="packages">
<?php $query= "SELECT * from vacationpack";
 $result = mysqli_query($link,$query);
 if(mysqli_num_rows($result)>0){
     while($row = mysqli_fetch_array($result)){
         ?>
           <div class="row">
         <form class= "form" method="post" action="menu.php?action=add&id=<?php echo $row["pk_id"]; ?>" >
          <img  class ="rounded-circle" width= 200 src="<?php echo $row["pk_image"];?>" alt="">
         <h4 class = "name"><a href="item.php?id=<?php echo $row["pk_id"]; ?> "> <?php echo $row["pk_destination"]; ?></a></h4>
         <h4>$ <?php echo $row["pk_price"]; ?></h4>
         <input type="hidden" name="hidden_name" value = "<?php echo $row["pk_destination"]; ?>">
         <input type="hidden" name="hidden_price" value = "<?php echo $row["pk_price"]; ?>">
         <input type="submit" class="btn btn-secondary" name ="add_to_cart" value ="Add to cart" >
         </form>    </div>
     <?php
     }
 }
 else{
     echo mysqli_error($link);
 }
?>
</div>
</div>
        <div class="photo">
            <ul>
                  <li><iframe width="560" height="315" src="https://www.youtube.com/embed/i9E_Blai8vk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
                <li><iframe width="560" height="315" src="https://www.youtube.com/embed/p3W3kT14jhY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
                 <li><iframe width="560" height="315" src="https://www.youtube.com/embed/gmpHIXcWlDE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></li>
            </ul>
        </div>


		<div class="footer">
			<div class="container">
				<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 padding_part">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="contact_us">
							<h4>Contact Us</h4>
							<div class="contact_us_menu">
								<ul>
                                    <li><i class="fa fa-envelope-open" aria-hidden="true"></i><span>webdesigners@gmail.com</span></li>
									<li><i class="fa fa-mobile" aria-hidden="true"></i><span>235-562-2563</span></li>

									<li><i class="fa fa-map-pin" aria-hidden="true"></i><span>1235,Street Market Canada Ontario. </span></li>
								</ul>
                                <p>© 2019. All rights reserved. </p>
							</div>
						</div>




					</div>

                </div>
		</div><!--footer-->
	</div><!--wrapper-->
    </div>
</BODY>

</HTML>
