<?php
        include '../model/config.php';
                   
        $result=mysqli_query($connect, "SELECT count(*) from facilities");
        $count = mysqli_num_rows($result);
		$count++;
        $fid = "F000" .$count;
        ?> 