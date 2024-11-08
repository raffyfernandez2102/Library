<?php
include "header.php";
include "connection.php";
?>

        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Search Books</h3>
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
                                <h2>Search Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form name="form1" action="" method="post">
                                <table class="table">
                                <tr>
                                <td><input type="text"  name="t1" placeholder="Enter Book's Name" required class="form-control"> </td>
                                <td><input type="submit"  name="submit1" value="Search" class="form-control btn btn-default"> </td>
</tr>
</table>
</form>
                                <?php
                                if(isset($_POST["submit1"]))
                                {
                                    $i=0;
                                $res=mysqli_query($link, "select * from add_books where Name like('%$_POST[t1]%')");
                                echo "<table class='table table-bordered'>";
                                echo "<tr>";
                                while($row=mysqli_fetch_array($res))
                                {
                                $i=$i+1;
                                echo "<td>";
                                echo "<b>" .$row["Name"]."</b>";
                                echo "<br>";
                                echo "<b>" . "Available:" .$row["Available"]."</b>";

                                echo "</td>";

                                if($i==2)
                                {
                                    echo "</tr>";
                                    echo "<tr>";
                                    $i=0;
                                }
                                }
                                echo "</tr>";
                                echo "</table>";
                                }
                                else {
                                $i=0;
                                $res=mysqli_query($link, "select * from add_books");
                                echo "<table class='table table-bordered'>";
                                echo "<tr>";
                                while($row=mysqli_fetch_array($res))
                                {
                                $i=$i+1;
                                echo "<td>";
                                echo "<b>" .$row["Name"]."</b>";
                                echo "<br>";
                                echo "<b>" . "Available:" .$row["Available"]."</b>";

                                echo "</td>";

                                if($i==2)
                                {
                                    echo "</tr>";
                                    echo "<tr>";
                                    $i=0;
                                }
                                }
                                echo "</tr>";
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
       