<?php
include ('../model/config.php');

if(isset($_GET['edit_id']))
				$id = $_GET['edit_id'];
{
 $sql_query = "SELECT facilities.rent from facilities inner join reservation on facilities.facility_id=reservation.facility_id WHERE r_id='$id' ";
 $result_set = mysqli_query($connect, $sql_query);
 $row = mysqli_fetch_assoc($result_set);
 $hourly_fee=$row['rent'];
 #echo $hourly_fee;
 #echo "</br>";
 
 $sql_query1 = "SELECT start,end from reservation WHERE r_id='$id' ";
 $result_set1 = mysqli_query($connect, $sql_query1);
 $row1 = mysqli_fetch_assoc($result_set1);
 
 $sql_query2 = "SELECT type from reservation WHERE r_id='$id'";
 $result_set2 = mysqli_query($connect, $sql_query2);
 $row2 = mysqli_fetch_assoc($result_set2);
 
 $q=strtotime($row1['end']);
$q1=strtotime($row1['start']);
 
$no_of_hours=round(abs($q - $q1) / 3600,2);
#echo $no_of_hours;

$total=$hourly_fee*$no_of_hours;
#echo $total;
 
 
 if ($row2['type']=='internal'){
	 $sql_query3 = "SELECT staff.email from staff inner join reservation on staff.user_id=reservation.user_id WHERE r_id='$id' ";
 $result_set3 = mysqli_query($connect, $sql_query);
 $row3 = mysqli_fetch_assoc($result_set);
 
 $to=$row3['email'];
		$from="UCSC";
		$url="www.ucsc.cmb.ac.lk";	
		$body="Reservation Approval
		.................................
		Url:$url;
		email Details is : $to;
		Here is your reservation fee : $total ;
		Sincerely,
		UCSC";
		
		$from="info@ucsc.cmb.ac.lk";
		$subject="UCSC reservation approval";
		$headers1="From:$from\n";
		$headers1 .= "Content-type:text/html;charset=iso-8859-1\r\n";
		$headers1 .= "X-Prority: 1\r\n";
		$headers1 .= "X-MSMail-Prority:High\r\n";
		$headers1 .= "X-Mailer:Just My Server\r\n";	
		$sentmail = mail($to,$subject,$body,$headers1);
		
		if ($sentmail==1){
				
				echo '<script type="text/javascript">';
					echo 'alert("Mail has been sent");';
                    #echo 'window.location="../view/pages/login_index.html";';
					echo '</script>';
								
		}else{
			if ($_POST['email'] != ""){
				
				echo '<script type="text/javascript">';
					echo 'alert("Not found email in database");';
                    #echo 'window.location="../view/pages/personal_information.html";';
					echo '</script>';
			}
			
								else
								{
									if($_POST['email'] != ""){
										
										echo '<script type="text/javascript">';
					echo 'alert("Cannot send password to e-mail address.Problem with sending mail....."");';
                    #echo 'window.location="../index.html";';
					echo '</script>';
									}}
		}
 }else {
	 $sql_query4 = "SELECT visitor.email from visitor inner join reservation on visitor.v_nic=reservation.v_nic WHERE r_id='$id' ";
 $result_set4 = mysqli_query($connect, $sql_query);
 $row4 = mysqli_fetch_assoc($result_set);
 
 $to=$row4['email'];
		$from="UCSC";
		$url="www.ucsc.cmb.ac.lk";	
		$body="Reservation Approval
		.................................
		Url:$url;
		email Details is : $to;
		Here is your reservation fee : $total ;
		Sincerely,
		UCSC";
		
		$from="info@ucsc.cmb.ac.lk";
		$subject="UCSC reservation approval";
		$headers1="From:$from\n";
		$headers1 .= "Content-type:text/html;charset=iso-8859-1\r\n";
		$headers1 .= "X-Prority: 1\r\n";
		$headers1 .= "X-MSMail-Prority:High\r\n";
		$headers1 .= "X-Mailer:Just My Server\r\n";	
		$sentmail = mail($to,$subject,$body,$headers1);
		
		if ($sentmail==1){
				
				echo '<script type="text/javascript">';
					echo 'alert("Mail has been sent");';
                    #echo 'window.location="../view/pages/login_index.html";';
					echo '</script>';
								
		}else{
			if ($_POST['email'] != ""){
				
				echo '<script type="text/javascript">';
					echo 'alert("Not found email in database");';
                    #echo 'window.location="../view/pages/personal_information.html";';
					echo '</script>';
			}
			
								else
								{
									if($_POST['email'] != ""){
										
										echo '<script type="text/javascript">';
					echo 'alert("Cannot send password to e-mail address.Problem with sending mail....."");';
                    #echo 'window.location="../index.html";';
					echo '</script>';
									}}
		}
	 
 }
 $sql = "update reservation set r_fee='$total',status='1' where r_id='$id'";
                if (mysqli_query($connect, $sql)) {
                    echo '<script type="text/javascript">';
					echo 'alert("Reservation approved successfully");';
                    echo 'window.location="../view/pages/admin_only.php";';
					echo '</script>';
				} else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
                }


 
}
 
 
			 ?>