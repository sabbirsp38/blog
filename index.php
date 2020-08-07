 <?php 
   include 'inc/connect.php'; 
   include 'inc/hader.php'; 
 ?>
           <?php 

              $query = "select * from advatisment order by id desc ";
              $post = $db->select($query);
              $result= $post -> fetch_assoc();


        ?>
<div class="addspace"><p><?php echo $result['body']; ?></p></div>
  
<!--- Header ---->
 
 <div id="header" class="header">
     <div class="container">
         <div class="row">

          <?php 

              $query = "select * from blog order by id desc ";
              $post = $db->select($query);
              $result= $post -> fetch_assoc();


        ?>
             <div class="col-lg-8 col-md-8">
               <a href="post.php?$id=<?php echo $result['id']; ?> & $cat=<?php echo $result['cat_name']; ?>">
                   <div class="trad_big">
                       <img src="upload/<?php echo $result['img']; ?>" class=" tragimg img-responsive">
                       <div class="text_card">
                          <center><h3><?php echo $result['title']; ?></h3></center>

                          <p class="blog_body"><?php echo $fm-> textshortent ($result['body']); ?></p>

                       </div>
                   </div>
               </a> 
             </div>
             <div class="col-lg-4 col-md-4">
                <center>
                    
                    <div class="hadertrad"><h3>TRENDING</h3></div>

                    <?php 
                      $per_page = 5;
                        if (isset($_GET["page"])) {
                          $page= $_GET["page"];
                        }else{
                          $page =1;
                        }
                        $start_from = ($page-1) * $per_page;

                        $query = "select * from blog where tranding=1 order by id desc limit $start_from, $per_page";
                        $post = $db->select($query);
                          if ($post) {
                        while ($result= $post -> fetch_assoc()) {
                    ?>
                    
                    <div class="shorttext"><a  href="post.php?$id=<?php echo $result['id']; ?> & $cat=<?php echo $result['cat_name']; ?>"><h4 class="shorttextinner"><?php echo $result['title']; ?></h4></a></div>

                    <?php }} ?>
                </center>
                 
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="row">

                <?php 
                      $per_page =4;
                        if (isset($_GET["page"])) {
                          $page= $_GET["page"];
                        }else{
                          $page =1;
                        }
                        $start_from = ($page-1) * $per_page;

                        $query = "select * from blog order by id desc limit $start_from, $per_page";
                        $post = $db->select($query);
                          if ($post) {
                            $count = 0;
                        while ($result= $post -> fetch_assoc()) {
                          if($count==0)
                          {
                            $count++;
                            
                          }
                          else
                          {
                          
                    ?>
                    <div class="col-lg-4 col-md-4">
                      <a href="post.php?$id=<?php echo $result['id']; ?> & $cat=<?php echo $result['cat_name']; ?>">
                       <div class="blog_card_sort">
                           <img src="upload/<?php echo $result['img']; ?>" class="img-responsive blog_card_sortimg">
                           <div class="text_card_sort">
                              <center><h3 class="text_card_sort0" >
                                <?php echo $result['title']; ?></h3>
                              </center>
                           </div>
                       </div>
                      </a> 
                    </div>
                    
                  <?php }}}?>  


                    
                </div>
            </div>
         </div>
     </div>
 </div>
  
<!---- End Header ---->
 
<!--  Lattest New Section Start here --> 
<div class="container">
    <div class="back"></div>
    <div class="blackline"></div>
    <div class="innarbackline">
      <center><h3>TRENDING NOW</h3></center>
      <a href="allcat.php" class="button_readmore">View All</a>
    </div>
    <div class="blackline"></div>
    <div class="row">

      <?php 
                      $per_page = 16;
                        if (isset($_GET["page"])) {
                          $page= $_GET["page"];
                        }else{
                          $page =1;
                        }
                        $start_from = ($page-1) * $per_page;

                        $query = "select * from blog where tranding=1 order by id desc limit $start_from, $per_page";
                        $post = $db->select($query);
                          if ($post) {
                        while ($result= $post -> fetch_assoc()) {
                    ?>


        <div class="col-lg-4 col-md-4 col-sm-4">
            <a href="post.php?$id=<?php echo $result['id']; ?> & $cat=<?php echo $result['cat_name']; ?>">
                <div class="newscard">
                    <div class="newcardimg0" ><img src="upload/<?php echo $result['img']; ?>" class="newscardimg img-responsive"></div>
                    <div class="newscard0">
                        <small><span id="aut">By <?php echo $result['auth']; ?></span><span id="date"><?php echo $result['date']; ?></span></small>

                        <center><h3 class="blog_title_smaill"><?php echo $result['title']; ?></h3></center>
                        <p class="blog_title_smaill_body">
                          <?php echo $fm-> textshortent ($result['body']); ?>
                        </p>
                        
                    </div>
                    
                </div>
            </a>  
        </div>
        
<?php }} ?>
        
    </div>   
</div>
 
<!--  Lattest New Section End here --> 
<!--  Lattest New Section Start here --> 
<div class="container">
    <div class="back"></div>
    <div class="blackline"></div>
    <div class="innarbackline">
      <center><h3>LATEST UPDATES</h3></center>
      <a href="allcat.php" class="button_readmore">View All</a>
    </div>
    <div class="blackline"></div>
    <div class="row">


         <?php 
                      $per_page = 16;
                        if (isset($_GET["page"])) {
                          $page= $_GET["page"];
                        }else{
                          $page =1;
                        }
                        $start_from = ($page-1) * $per_page;

                        $query = "select * from blog order by id desc limit $start_from, $per_page";
                        $post = $db->select($query);
                          if ($post) {
                        while ($result= $post -> fetch_assoc()) {
                    ?>


        <div class="col-lg-4 col-md-4 col-sm-4">
            <a href="post.php?$id=<?php echo $result['id']; ?> & $cat=<?php echo $result['cat_name']; ?>">
                <div class="newscard">
                    <div class="newcardimg0" ><img src="upload/<?php echo $result['img']; ?>" class="newscardimg img-responsive"></div>
                    <div class="newscard0">
                        <small><span id="aut">By <?php echo $result['auth']; ?></span><span id="date"><?php echo $result['date']; ?></span></small>

                        <center><h3 class="blog_title_smaill"><?php echo $result['title']; ?></h3></center>
                        <p class="blog_title_smaill_body">
                          <?php echo $fm-> textshortent ($result['body']); ?>
                        </p>
                        
                    </div>
                    
                </div>
            </a>  
        </div>
        
<?php }} ?>


        
    </div>   
</div>
 
<!--  Lattest New Section End here --> 





 
 <?php include 'inc/foter.php'; ?>