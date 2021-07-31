<?php
include "Connecttophp.php";



$bookid = $_GET["bookid"];
mysqli_query($conn,"DELETE FROM booking where Booking_id = '$bookid'")or die(mysqli_error($conn));
?>
<script type="text/javascript">
    alert("Data Deleted!");
    window.location.href = "Booking.php";
</script>
<?php
?>