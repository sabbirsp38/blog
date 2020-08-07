 <?php 
   include 'inc/connect.php'; 
   include 'inc/hader.php'; 
 ?>
  
<!--- End Navigation ---->

<div class="addspace"><center><h1>Advertisement will be Here  </h1></center></div>
  
<div class="container">
    <div class="row">
        <div style="margin-top: 10px;" class="col-md-3 col-lg-3">
            <ul class="ProductPageCat">
              <li><a href="allcat.php">TRENDING NOW</a></li>

                 <?php 
                        

                $query = "select * from cat";
                $catagori = $db->select($query);
                if ($catagori) {
                while ($result= $catagori -> fetch_assoc()) {


                ?><li><a href="cati.php? $catagori=<?php echo $result['id']; ?>"><?php echo $result['name']; ?></a></li>
                        <?php } } else{ ?>
                        <li>No Catagori created</li>


                        <?php
                    } 
                    ?>
            </ul>


        </div>
        <div class="col-md-9 col-lg-9">
            <div class="row">
               
<?php

if (!isset($_GET['$catagori']) || $_GET['$catagori']==NULL  ) {
    header("Location: 404.php") ;
}else{
     $id= $_GET['$catagori'];
}

                       $per_page = 20;
                        if (isset($_GET["page"])) {
                          $page= $_GET["page"];
                        }else{
                          $page =1;
                        }
                        $start_from = ($page-1) * $per_page;

            $query = "select * from blog where cat_name=$id";
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
                              <?php echo $fm-> textshortentt ($result['body']); ?>
                            </p>
                            
                        </div>
                        
                    </div>
                </a>  
              </div>


<?php }}?> 
              
            </div>
            
        </div>
        
    </div>
    
</div>

<!--paginetation-->
    <?php
    $query = "select * from blog"; 
    $result = $db->select($query);
    $total_rows = mysqli_num_rows($result);
    $total_page = ceil ($total_rows/$per_page);

    echo " <span class=paginetation > <a href='cati.php?page=1 '>First Page</a>";

    for ($i=1; $i<= $total_page; $i++) { 
     echo "<a href='cati.php?page=".$i." '>".$i. ">></a>";
     } 


     echo "<a href='cati.php?page=$total_page '>Last Page</a></span>"?>
    <!--paginetation-->
    <?php //} ?>

 
 
 <?php include 'inc/foter.php'; ?>