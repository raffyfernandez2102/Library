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
                        <h3>Display Books</h3>
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
                                <h2>Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                            <form name="form1" action="" method="post">
                                <input type="text" name="t1" class="form-control" placeholder="Enter Book Name">
                                <th>
                                <input type="submit" name="submit1" value="Search" class="btn btn-default">
                            </form> 
                                <?php
                                if(isset($_POST["submit1"])) 
                                {
                                    $res=mysqli_query($link, "select * from add_books where Name like('$_POST[t1]%')");
                                    echo "<table class='table table-bordered'>";
                                    echo "<tr>";
                                    echo "<th>"; echo "Books"; echo "</th>"; 
                                    echo "<th>"; echo "Author"; echo "</th>";
                                    echo "<th>"; echo "Publication"; echo "</th>";
                                    echo "<th>"; echo "Purchase_Date"; echo "</th>";
                                    echo "<th>"; echo "Price"; echo "</th>";
                                    echo "<th>"; echo "Quantity"; echo "</th>";
                                    echo "<th>"; echo "Available"; echo "</th>";
                                    echo "<th>"; echo "Delete Book"; echo "</th>";
                                    echo "</tr>";
    
                                    while ($row=mysqli_fetch_array($res)){
                                    echo "<tr>";
                                    echo "<td>"; echo $row["Name"]; echo "</td>"; 
                                    echo "<td>"; echo $row["Author"]; echo "</td>";
                                    echo "<td>"; echo $row["Publication"]; echo "</td>";
                                    echo "<td>"; echo $row["Purchase_Date"]; echo "</td>";
                                    echo "<td>"; echo $row["Price"]; echo "</td>";
                                    echo "<td>"; echo $row["Quantity"]; echo "</td>";
                                    echo "<td>"; echo $row["Available"]; echo "</td>";
                                    echo "<td>"; ?> <a href="delete_books.php?id=<?php echo $row["id"]; ?>">Delete Book</a> <?php echo "</td>";
                                    echo "</tr>";
                                    }
                                    echo "</table>";
                                }
                                else {

                                $res=mysqli_query($link, "select * from add_books");
                                echo "<table class='table table-bordered'>";
                                echo "<tr>";
                                echo "<th>"; echo "Books"; echo "</th>"; 
                                echo "<th>"; echo "Author"; echo "</th>";
                                echo "<th>"; echo "Publication"; echo "</th>";
                                echo "<th>"; echo "Purchase_Date"; echo "</th>";
                                echo "<th>"; echo "Price"; echo "</th>";
                                echo "<th>"; echo "Quantity"; echo "</th>";
                                echo "<th>"; echo "Available"; echo "</th>";
                                echo "<th>"; echo "Delete Book"; echo "</th>";
                                echo "</tr>";

                                while ($row=mysqli_fetch_array($res)){
                                echo "<tr>";
                                echo "<td>"; echo $row["Name"]; echo "</td>"; 
                                echo "<td>"; echo $row["Author"]; echo "</td>";
                                echo "<td>"; echo $row["Publication"]; echo "</td>";
                                echo "<td>"; echo $row["Purchase_Date"]; echo "</td>";
                                echo "<td>"; echo $row["Price"]; echo "</td>";
                                echo "<td>"; echo $row["Quantity"]; echo "</td>";
                                echo "<td>"; echo $row["Available"]; echo "</td>";
                                echo "<td>"; ?> <a href="delete_books.php?id=<?php echo$row["ID"]; ?>">Delete Books</a> <?php echo "</td>";
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
       