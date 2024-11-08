<?php
session_start();
if(!isset($_SESSION["librarian"]))
{
    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php
}
include "connection.php";
include "header.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Plain Page</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Add Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                
                            <form name="form1" action="" method="post" class="col-lg-6" enctype="multipart/form-data">

                            <table class="table table-bordered">
                                <tr>
                                    <td><input type="text" class="form-control" placeholder="Books Name" name="Name" required=""></td>
                                </tr>
                                
                                <tr>
                                    <td><input type="text" class="form-control" placeholder="Author" name="Author" required=""></td>
                                </tr>

                                <tr>
                                    <td><input type="text" class="form-control" placeholder="Publication" name="Publication" required=""></td>
                                </tr>

                                <tr>
                                    <td><input type="text" class="form-control" placeholder="Purchase Date" name="Purchase_Date" required=""></td>
                                </tr>

                                <tr>
                                    <td><input type="text" class="form-control" placeholder="Price" name="Price" required=""></td>
                                </tr>

                                <tr>
                                    <td><input type="text" class="form-control" placeholder="Quantity" name="Quantity" required=""></td>
                                </tr>

                                <tr>
                                    <td><input type="text" class="form-control" placeholder="Available Stock" name="Available" required=""></td>
                                </tr>

                                <tr>
                                    <td><input type="submit" name="submit1" class="btn btn-default submit" value="Insert Book"></td>
                                </tr>

                                

                                
                            </table>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
<?php
if(isset ($_POST["submit1"]))
{
    mysqli_query($link,"insert into add_books values('','$_POST[Name]','$_POST[Author]','$_POST[Publication]','$_POST[Purchase_Date]','$_POST[Price]','$_POST[Quantity]','$_POST[Available]','$_SESSION[librarian]')");

    ?>
    <script type="text/javascript">
        alert("Inserted"); 
        </script>
    <?php 

}
?>
<?php
include "footer.php";
?>
       