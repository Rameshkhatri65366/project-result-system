<!DOCTYPE html>
<html>

<head>
  <title>Acme engineering college</title>
</head>

<body>
  <link rel="stylesheet" href="style.css">
  <header>
    <?php include 'header.php'; ?>
  </header>
  <main class="main">

    <div class="container" style="background-color:#D5F3FE; width:100%; height:80px; border:3px solid #ccc; overflow-y:auto">
      <a href="view.php"><button class="view_button">View centers:</button></a>

      <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
        <?php
        include 'db_connect.php';
        $sql = "SELECT * FROM  `tbl_uploads` order by `date` ";
        $result = mysqli_query($con, $sql);
        if (false === $result) {
          echo mysqli_error($con);
        } else {
          while ($row = mysqli_fetch_array($result)) {

        ?>


            <a href="view.php">(<?php echo $row['date'] ?>) &#8594 <?php echo $row['description'] ?>. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>



        <?php   }
        }
        ?>
      </marquee>
      <br />
    </div>
    <style>
      .container {
        margin-top: 15px;

      }

      .view_button {
        background-color: #1a3c80;
        border: none;
        color: white;
        padding: 8px;
        position: relative;
        margin-top: 5px;
        right: 45%;
      }

      ;
    </style>
    <div class="top_part_container">
      <div class="slideshow-container" style="width:600px;height:900px;background-color:#dee2e6"></div> 


      </div>
      <!--start of Notice-->
      <div class="notice_container" style="width:700px;height:600px;background-color:#dee2e6">
        <a href="notice.php">
          <h2> Click to view latest notice..</h2>
        </a>
        <?php
        include 'db_connect.php';
        ?>
        <table>
          <tr>
            <td></td>
            <td>Date</td>
            <td>Notice</td>

          </tr>
          <tr>
            <?php
            $sql = "SELECT * FROM `notice`";
            $result_set = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($result_set)) { ?>
              <td>&#8594 </td>
              <td width="150px"> <?php echo $row['date'] ?> </td>
              <td width="600px"><a href="notice.php"><?php echo $row['description']; ?> </a></td>
          </tr>
        <?php  } ?>
      </div>
      </table>
      <style>
        h2 {
          animation: blinkingText 1.2s infinite;
        }

        @keyframes blinkingText {
          0% {
            color: dodgerblue;
          }

          49% {
            color: dodgerblue;
          }

          60% {
            color: dodgerblue;
          }

          99% {
            color: transparent;
          }

          100% {
            color: #000;
          }
        }
table{
margin-top: 35px;

}
        td {
          padding: 10px;
        }

        tr:hover {
          background-color: gray;
        }

        tr:nth-child(even) {
          background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
          background-color: #dee2e6;
        }

        .notice_container{
margin-top: 180px;

        }
      </style>
</body>
</main>
<footer>
  <?php include 'footer.php'; ?>
</footer>