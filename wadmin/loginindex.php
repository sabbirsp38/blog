<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?> 
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Index Page</h2> 
                <div class="block"> 
                <?php 
                if (isset($_GET['delid'])) {
                  $did = $_GET['delid'];
                  $query = "DELETE FROM tbl_message WHERE id='$did'";
                   $db-> delete($query);
                }
               

             
                    ?> 
                    <table class="data display datatable" id="example">
                    <thead>
                        <tr>
                            <th width="10%">No</th>
                            <th width="15%">Name</th>
                            <th width="15%">Email</th>
                            <th width="20%">Number</th>
                            <th width="30%">Message</th>
                            <th width="10%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php 

                        $query = "select * from tbl_message order by id desc";
                        $contact = $db->select($query);
                        if ($contact) {
                            $i=0;
                        while ($result= $contact -> fetch_assoc()) {
                            $i++;


                    ?>

                 

                         
                        <tr class="odd gradeX">
                            <td><?php echo $i; ?></td>
                            <td><?php echo $result['name']; ?></td>
                            <td><?php echo $result['email']; ?></td>
                            <td><?php echo $result['phone']; ?></td>
                            <td><?php echo $result['message']; ?></td>
                            
                            <td> <a onclick="return confirm('Are you sure to DELETE!');" 
                href="?delid=<?php echo $result['id']; ?>  " class="btn btn-green CoustRead01 ">Delete</a></td>

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
<?php include 'inc/foter.php'; ?>  

<script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();

            $('.datatable').dataTable();
            setSidebarHeight();


        });
    </script>
