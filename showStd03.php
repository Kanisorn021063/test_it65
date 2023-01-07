<?php
include "header.php";
include "branner.php";
include "nav.php";
include "connect.php";
?>

<div class = "container mt-5">
        <h1><b><u><center>Page index</center></u></b></h1>
        <table class = "table table-bordered">
            <tr>
                <th>รหัสนักเรียน</th>
                <th>ชื่อนักเรียน</th>
                <th>กลุ่มการเรียน</th>
                <th>ระดับชั้น</th>
            </tr>
    <?php
    $sql = "SELECT * FROM student3";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        
        ?>
            <tr>
                <td><?php echo $row['student_id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['group_id'] ?></td>
                <td><?php echo $row['level_group'] ?></td>
            </tr>
        <?php

      }
    } else {
      echo "0 results";
    }
    
    mysqli_close($conn);
    ?>
        </table>

  </div>
</div>
<?php
include ("footer.php");
?>