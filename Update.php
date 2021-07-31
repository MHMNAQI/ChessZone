<?php
include 'Connecttophp.php';
session_start();

 
$id = $_GET['rn'];
mysqli_query($conn,"DELETE FROM booking where Cust_id = $id " );
?>
<script type="text/javascript">
    alert("Item Removed!");
    window.location.href = "AdminD.php";
</script>
<?php
 
?>