<?php
include "header.php";
include "connection.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Welcome</h3>
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
                                <h2>Student Information</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <?php
                                $res=mysqli_query($link, "select * from student_registration");
                                echo "<table class='table table-bordered'>";
                                echo "<tr>";
                                echo "<th>"; echo "FirstName"; echo "</th>";
                                echo "<th>"; echo "LastName"; echo "</th>";
                                echo "<th>"; echo "Username"; echo "</th>";
                                echo "<th>"; echo "Email"; echo "</th>";
                                echo "<th>"; echo "Contact"; echo "</th>";
                                echo "</tr>";
                                while($row=mysqli_fetch_array($res))
                                {
                                echo "<tr>";
                                echo "<td>"; echo $row["FirstName"]; echo "</td>";
                                echo "<td>"; echo $row["LastName"]; echo "</td>";
                                echo "<td>"; echo $row["Username"]; echo "</td>";
                                echo "<td>"; echo $row["Email"]; echo "</td>";
                                echo "<td>"; echo $row["Contact"]; echo "</td>";
                                echo "</tr>";
                                }
                                echo "</table>";
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
       