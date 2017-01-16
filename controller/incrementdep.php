<?php
        include '../model/config.php';
                  
        $result=mysqli_query($connect, "SELECT count(*) from department");
		$rows=mysqli_num_rows($result);
        $rows++;
        $did = "D000" . $rows;
        ?> 