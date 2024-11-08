<?php
session_start();
include "connection.php";
include "header.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Issue Books</h3>
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
                                <h2>Issue Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            <form name="form1" action="" method="post">
                                <table>
                                    <tr>
                                        <td>
                                            <select name="ID" class="form-control selectpicker">
                                            <?php
                                            $res=mysqli_query($link,"select ID from student_registration");
                                            while($row=mysqli_fetch_array($res))
                                            {
                                                echo "<option>";
                                                echo $row["ID"];
                                                echo "</option>";
                                            }
                                            ?>

                                        </td>
                                        <td>
                                            <input type="submit" value="search" name="submit1" 
                                            class="form-control btn btn-default" style="margin-top: 5px; margin-left: 5px;">
                                        </td>
                                     </tr>
                                        </table>

                                        <?php
                                        if (isset($_POST["submit1"]))
                                        {
                                        $res5=mysqli_query($link, "select * from student_registration where ID='$_POST[ID]'");
                                        while ($row5=mysqli_fetch_array($res5))
                                        {
                                            $FirstName=$row5["FirstName"];
                                            $LastName=$row5["LastName"];
                                            $Username=$row5["Username"];
                                            $Email=$row5["Email"];
                                            $Contact=$row5["Contact"];
                                            $ID=$row5["ID"];
                                            $_SESSION["Username"]=$Username;
                                        }
                                        ?>
                                        
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><input type="text" class="form-control" placeholder="ID" name="ID" value="<?php echo $ID; ?>" disabled></td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" class="form-control" placeholder="Username" name="Username" value= "<?php echo $Username; ?>" disabled></td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" class="form-control" placeholder="Email" name="Email" value="<?php echo $Email; ?>" required=""></td>
                                            </tr>

                                            <tr>
                                                <td><input type="text" class="form-control" placeholder="Contact" name="Contact" value="<?php echo $Contact; ?>" required=""></td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <select name="Name" class="form-control selectpicker">
                                                    <?php
                                                    $res=mysqli_query($link, "select Name from add_books");
                                                    while($row=mysqli_fetch_array($res))
                                                    {
                                                        echo "<option>"; 
                                                        echo $row["Name"];
                                                        echo "</option>";
                                                    }
                                                    ?>
                                                </select>
                                                </td>
                                            </tr>
                                            <tr>
                                            <td><input type="text" class="form-control" placeholder="Issue_Date" name="Issue_Date" value="<?php echo date('m-d-Y'); ?>" required=""></td>
                                            </tr>


                                            <tr>
                                                <td><input type="submit" value="Issue Book"
                                                    name="submit2" class="form-control btn btn-default" ></td>
                                            </tr>
                                        </table>
                                        <?php
                                        }
                                        ?>
                                    </form>

                                    <?php
                                    if(isset($_POST["submit2"]))
                                    {
                                        mysqli_query($link,"insert into issue_books values('','$_SESSION[Username]','$_POST[Email]','$_POST[Contact]','$_POST[Name]','$_POST[Issue_Date]','')");
                                        ?>
                                    <script type="text/javascript">
                                        alert("Book Issued");
                                        window.location.href= window.location.href;
                                    </script>
                                    <?php 
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

<?php
include "footer.php";
?>
       