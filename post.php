 <?php 
   include 'inc/getid.php'; 
   include 'inc/getcat.php'; 
   include 'inc/connect.php'; 
   include 'inc/hader.php'; 
 ?>
  
<!--- End Navigation ---->

<div class="addspace">

  <center><h1>Advertisement will be Here  </h1></center>

</div>
  
<div class="container">
  <div class="row">

              <?php 

              $query = "select * from blog where id=$id";
              $post = $db->select($query);
              $result= $post -> fetch_assoc();


        ?>
    <center>
      <h1><?php echo $result['title']; ?></h1>
      <p><span>Publish By <?php echo $result['auth']; ?></span><span style="margin-left: 10px" >Publish at <?php echo $result['date']; ?></span></p>
      <img src="upload/<?php echo $result['img']; ?>" class="postimg img-responsive"> </center>

      <div class="blogbodyfull"><?php echo $result['body']; ?></div>



 
    
  </div>
</div>



<div class="container">
    <div class="back"></div>
    <div class="blackline"></div>
    <center><h3>Related Post</h3></center>
    <div class="blackline"></div>
    <div class="back"></div>
    <div class="row">
<?php 
                      $per_page = 3;
                        if (isset($_GET["page"])) {
                          $page= $_GET["page"];
                        }else{
                          $page =1;
                        }
                        $start_from = ($page-1) * $per_page;

                        $query = "select * from blog where  cat_name=$cat  order by id desc limit $start_from, $per_page";
                        $post = $db->select($query);
                          if ($post) {
                        while ($result= $post -> fetch_assoc()) {
                    ?>

        <div class="col-lg-4 col-md-4">
          <a href="post.php?$id=<?php echo $result['id']; ?> & $cat=<?php echo $result['cat_name']; ?>">
           <div class="blog_card_sort">
               <img src="upload/<?php echo $result['img']; ?>" class="img-responsive blog_card_sortimg">
               <div class="text_card_sort">
                  <center><h3 class="text_card_sort0" ><?php echo $result['title']; ?></h3></center>
               </div>
           </div>
          </a> 
        </div>

<?php }} ?>

        
    </div>  
</div>
 
 
<?php include 'inc/foter.php'; ?> 