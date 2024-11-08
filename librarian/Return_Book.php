<?php
include "connection.php";
include "header.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Return Books</h3>
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
                                <h2>Return Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            <form name="form1" action="" method="post">
                                <table class="table table-bordered">
                                    <tr>
                                        <td><select name= "Username" class="form-control">
                                            
                                        <?php
                                        $res=mysqli_query($link,"select Username from issue_books where Return_Date=''");
                                        while($row=mysqli_fetch_array($res))
                                        {
                                            echo "<option>";
                                            echo $row["Username"];
                                            echo "</option>";
                                        }
                                        ?>
</select>
                                        </td>
                                        <td><input type="submit" name="submit1" value="search" class="form-control" style="background-color: blue; color:white;"></td>
                                    </tr>
</table>
</form>
                                    <?php
                                    if (isset($_POST["submit1"]))
                                    {
                                        $res=mysqli_query($link,"select * from issue_books where Username='$_POST[Username]'");
                                        echo "<table class='table table-bordered'>";
                                        echo "<tr>";
                                        echo "<th>"; echo "ID"; echo "</th>";
                                        echo "<th>"; echo "Username"; echo "</th>";
                                        echo "<th>"; echo "Email"; echo "</th>";
                                        echo "<th>"; echo "Contact"; echo "</th>";
                                        echo "<th>"; echo "Name"; echo "</th>";
                                        echo "<th>"; echo "Issue_Date"; echo "</th>";
                                        echo "<th>"; echo "Return Book"; echo "</th>";
                                        echo "</tr>";

                                        while($row=mysqli_fetch_array($res))
                                        {
                                            echo "<tr>";
                                            echo "<td>"; echo $row ["ID"]; echo "</td>";
                                            echo "<td>"; echo $row ["Username"]; echo "</td>";
                                            echo "<td>"; echo $row ["Email"]; echo "</td>";
                                            echo "<td>"; echo $row ["Contact"]; echo "</td>";
                                            echo "<td>"; echo $row ["Name"]; echo "</td>";
                                            echo "<td>"; echo $row ["Issue_Date"]; echo "</td>";
                                            echo "<td><a href='return.php?id=" . $row["ID"] . "'>Return Books</a></td>";
                                            echo "</tr>";
                                        }
                                        echo "</table>";
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
       