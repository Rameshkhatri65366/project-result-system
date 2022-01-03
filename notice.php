<?php
include_once 'db_connect.php';
?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>

<head>
     <title></title>

<body>

     <label>
          <h1></h1>
     </label>
     <link rel="stylesheet" href="viewtable.css">

     </style>
     <div id="body">
          <table border="1">
               <tr>
                    <td></td>
                    <td></td>
                    <td></td>
               </tr>
               <tr>
                    <?php
                    $sql = "SELECT * FROM `notice`";
                    $result_set = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($result_set)) { ?>
                         <td><?php echo $row['description'] ?></td>
                         <td width="150px"> <?php echo $row['date'] ?> </td>
                         <td width="300px"><a href="notice/<?php echo $row['file'] ?>" target="notice.php">CLICK TO VIEW EXAM CENTERS</a></td>

               </tr>
          <?php  } ?>
     </div>
     </table>

</body>

</html>