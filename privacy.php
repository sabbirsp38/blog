 <?php 
   include 'inc/connect.php'; 
   include 'inc/hader.php'; 
 ?>



<div class="container">
	        <?php 

              $query = "select * from pages where name='privacy' order by id desc ";
              $post = $db->select($query);
              $result= $post -> fetch_assoc();


        ?>
	<div class="pagecontent">
		<p><?php echo $result['body']; ?></p>
		
	</div>
</div>
	
</div>


















  <?php include 'inc/foter.php'; ?>