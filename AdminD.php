<?php
include('Connecttophp.php');
 

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/">
</head>

<body>

    <table>
      <tr>
        <th>CUSTOMER NAME</th>
        <th>BOOKING DATE</th>
        <th>BOOKING TIME</th>
        <th>ACTION</th>
      </tr>
      <?php
        $sql = "SELECT c.Cust_id, c.c_n, b.Book_date, b.Book_time FROM cust_log c, booking b WHERE c.Cust_id = b.Cust_id";
        $result = $conn-> query($sql);
        ?>
        <?php
        if ($result-> num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
                ?>

                <tr>
                <td><?php echo $row['c_n']; ?></td>
                <td><?php echo $row['Book_time']; ?></td>
                <td><?php echo $row['Book_date']; ?></td>
                <td><a href ="Update.php?rn=<?php echo $row['Cust_id']; ?>" onclick="return deleteme()"><button name="delete">Delete</button></td>
                </tr>

                <script>
                function deleteme()
                {
                  return confirm('Are you sure you want to DELETE THIS CUSTOMER BOOKING!!!')
                }
                </script>
                <?php
            }
        }
        else 
        {
          ?>
            <tr>
            <th colspan="2"> There's No data found!!!</th>
        </tr>
        <?php
        }
?>
    </table>
    
 


    
