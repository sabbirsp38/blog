 <?php 
   include 'inc/connect.php'; 
   include 'inc/hader.php'; 
 ?>
  
<!--- End Navigation ---->


  
<div class="container">
    <div class="row">


               
<?php

                       $scrach= $_GET['scrach'];

                        $per_page = 20;
                        if (isset($_GET["page"])) {
                          $page= $_GET["page"];
                        }else{
                          $page =1;
                        }
                        $start_from = ($page-1) * $per_page;

                        $query = "select * from blog WHERE  title LIKE '%$scrach%' OR body LIKE '%$scrach%' order by id desc limit $start_from, $per_page";
                        $post = $db->select($query);
                          if ($post) {
                        while ($result= $post -> fetch_assoc()) {

            

              ?>      


              <div class="col-lg-6 col-md-6 col-sm-6">
                    <a href="post.php?$id=<?php echo $result['id']; ?> & $cat=<?php echo $result['cat_name']; ?>">
                      <div class="newscard">
                          <div class="newcardimg0" ><img src="upload/<?php echo $result['img']; ?>" class="newscardimg img-responsive"></div>
                          <div class="newscard0">
                              <small><span id="aut">By <?php echo $result['auth']; ?></span><span id="date"><?php echo $result['date']; ?></span></small>

                              <center><h3 class="blog_title_smaill"><?php echo $result['title']; ?></h3></center>
                              <p class="blog_title_smaill_body">
                                <?php echo $fm-> textshortentt ($result['body']); ?>
                              </p>
                              
                          </div>
                          
                      </div>
                  </a>  
              </div>


<?php } } else{ ?>
<center><h1>Nothing Match With this</h1></center>
<?php  } ?>
              
            </div>
            
        </div>
    

<!--paginetation-->
    <?php
    $query = "select * from blog"; 
    $result = $db->select($query);
    $total_rows = mysqli_num_rows($result);
    $total_page = ceil ($total_rows/$per_page);

    echo " <span class=paginetation > <a href='scarch.php?page=1 '>First Page</a>";

    for ($i=1; $i<= $total_page; $i++) { 
     echo "<a href='scarch.php?page=".$i." '>".$i. ">></a>";
     } 


     echo "<a href='scarch.php?page=$total_page '>Last Page</a></span>"?>
    <!--paginetation-->
    <?php //} ?>
 
 
 <?php include 'inc/foter.php'; ?>