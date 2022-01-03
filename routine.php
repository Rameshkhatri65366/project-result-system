<?php include("header.php"); ?>
<?php include_once 'db_connect.php'; ?>
<html>

<body>
      <?php
      if (isset($_POST['btn_submit'])) {
            $faculty = $_POST['faculty'];
            $semester = $_POST['semester'];

      ?>
            <?php
            $sql =  "SELECT * FROM `routine` where faculty = '" . $_POST['faculty'] . "' and semester='" . $_POST['semester'] . "' ";
                  $result_set = mysqli_query($con, $sql) or die(mysqli_error($con));
                  while ($row = mysqli_fetch_array($result_set)) { ?>
                        <h1>Your Routine is shown below.</h1>
                        <table border="1">
                              <thead>
                                    <tr class="heading">
                                          <th colspan="10"> <b>
                                                      <h2>Acme Engineering College<br>Sitapaila,Kathmandu</h2>
                                                </b></th>
                                    </tr>
                              </thead>
                              <tbody>
                                    <tr>
                                          <td colspan="10"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                &nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                                <b>Faculty: <?php echo $row['faculty'] ?></b>
                                          </td>

                                    </tr>
                                    <tr>
                                          <td colspan="10">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                                <b> Semester: <?php echo $row['semester'] ?></b>
                                          </td>
                                    </tr>
                                    <tr>
                                          <td colspan="4"><b>Date</b></td>
                                          <td colspan="6"><b>Subject</b></td>
                                    </tr>
                                    <tr>
                                          <td colspan="4"><?php echo $row['date-1'] ?></td>
                                          <td colspan="6"><?php echo $row['sub-1'] ?></td>
                                    </tr>
                                    <tr>
                                          <td colspan="4"><?php echo $row['date-2'] ?></td>
                                          <td colspan="6"><?php echo $row['sub-2'] ?></td>
                                    </tr>
                                    <tr>
                                          <td colspan="4"><?php echo $row['date-3'] ?></td>
                                          <td colspan="6"><?php echo $row['sub-3'] ?></td>
                                    </tr>
                                    <!--<tr>
                                    <td colspan="4"><? php // echo $row['date-5'] 
                                                      ?></td>
                                    <td colspan="6"><?php //echo $row['date-5'] 
                                                      ?></td>
                                    </tr>
                                    <tr>
                                          <td colspan="4"><?php //echo $row['date-6'] 
                                                            ?></td>
                                          <td colspan="6"><?php //echo $row['date-6'] 
                                                            ?></td>
                                    </tr>-->
                              </tbody>
                        </table>
      <?php  }
            }
      ?>
</body>
<footer> <?php include("footer.php") ?></footer>

</html>
<style>
      print_btn{
            size: larger;
      }
      html,
      body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;

      }

      h1 {
            margin-top: 35px;
            color: black;
      }

      h2 {
            padding: 15px;
text-align: center;
      }

      table {
            margin-left: auto;
            margin-right: auto;
            width: 80%;
            border-collapse: collapse;
            border-width: 5px;
            margin-top: 50px;
      }

      tr,
      td {
            padding: 20px;
            border-width: 1px;
            margin-left: auto;
            margin-right: auto;
      }
</style>