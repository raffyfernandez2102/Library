<?php
include "connection.php";
$id=$_GET["id"];
$a=date ('m-d-Y');
$res=mysqli_query($link, "update Issue_Books set Return_Date='$a' where id=$id;");
?>

<script type="text/javascript">
        window.location="Return_Book.php";
</script>