<?php
        include('../model/config.php');
                   
        $result=mysqli_query($connect,"SELECT count(*) from centers");
		
		$rows=mysqli_num_rows($result);
        $rows++;
        $cid = "C000" . $rows;
?> 