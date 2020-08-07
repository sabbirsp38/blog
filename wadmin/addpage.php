<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?>
        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Add Page</h2>
                <div class="block">               
                 <form action="dbconncetaddpage.php" method="post" enctype="multipart/form-data">
                    <table class="form">
                       

                     
                        <tr>
                            <td>
                                <label>Page Name</label>
                            </td>
                            <td>
                                <select id="select" name="name">

                                    <option value="----">Select a page here</option>
                                    <option value="about">About Us</option>
                                    <option value="trams">Term & Condition</option>
                                    <option value="privacy">Privacy</option>
                                    

                                </select>
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
