<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?>
        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Add New Catagory</h2>
                <div class="block">               
                 <form action="dbconncetaddblog.php" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Blog Title</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Post Title..." class="medium" name="title" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select id="select" name="cat">

                <?php 

                    $query = "select * from cat ";
                        $catagori = $db->select($query);
                        if ($catagori) {
                            $i=0;
                        while ($result= $catagori -> fetch_assoc()) {
                            $i++;


                    ?>
                                    <option value="<?php echo $result['id']; ?>"><?php echo $result['name']; ?></option>
                                    <?php } }
                                    ?>

                                </select>
                            </td>
                        </tr>
                   
                    
                        <tr>
                            <td>
                                <label>Published By</label>
                            </td>
                            <td>
                                <input type="text"  name="pby" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Upload Image</label>
                            </td>
                            <td>
                                <input type="file"  name="img" />
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top; padding-top: 9px;">
                                <label>Content</label>
                            </td>
                            <td>
                                <textarea class="tinymce" name="body"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>

                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>


        <script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            setupTinyMCE();
            setDatePicker('date-picker');
            $('input[type="checkbox"]').fancybutton();
            $('input[type="radio"]').fancybutton();
        });
    </script>
        <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            setSidebarHeight();
        });
    </script>

   <?php include 'inc/foter.php'; ?> 
