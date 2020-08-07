<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?>   

        <div class="grid_10">
            <div class="box round first grid">
                <h2>Post List</h2> 
                <div class="block"> 
                <?php 
                if (isset($_GET['delid'])) {
                  $did = $_GET['delid'];
                  $query = "DELETE FROM blog WHERE id='$did'";
                   $db-> delete($query);
                }
               

             
                    ?> 
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="10%">No</th>
                            <th width="30%">Name</th>
                            <th width="20%">Published Date</th>
                            <th width="20%">Published By</th>
                            <th width="25%">Remove From Trending</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php 

                        $query = "select * from blog where tranding=1  order by id desc";
                        $contact = $db->select($query);
                        if ($contact) {
                            $i=0;
                        while ($result= $contact -> fetch_assoc()) {
                            $i++;


                    ?>

                 

                         
                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['title']; ?></td>
                            <td><?php echo $result['date']; ?></td>
                            <td><?php echo $result['auth']; ?></td>
                            
                <td> <a class="btn-green" href="dbconncetremovetranding.php?$id=<?php echo $result['id']; ?>  " >Remove From Trending</a></td>
                        </tr>
                        <?php  }} ?>

                    </tbody>
                </table>
    
               </div>
            </div>




        </div>






        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
            setSidebarHeight();
        });
    </script>
    <div id="site_info">
      <p>
         &copy; Copyright <a href="#">Back Banchers</a>. All Rights Reserved.
        </p>
    </div>
       
</body>
</html>
