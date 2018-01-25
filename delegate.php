<?php
include "database.inc.php";
include "core.inc.php";
/* session_start();
if (loggedin()==false)
{
	session_unset();
	session_destroy();
	echo "Please login.";
}
*/
$stm = $conn->prepare("SELECT ")
$events=100;
$stmt = $conn->prepare("SELECT tblevents.event_name,schdl.start_time FROM tblevents,tbleventreg,tblteams,schdl WHERE tblevents.event_id=schdl.event_id AND tblevents.event_id=tbleventreg.event_id AND tbleventreg.team_id=tblteams.team_id AND schdl.round = $round AND tblteams.del_card_no=?;");
$stmt->bind_param('s',$events);
$stmt->execute();
$result = $stmt -> get_result();
 if(($result->num_rows) > 0)
										{
											echo "$result->num_rows events \n ";
											while($row = $result -> fetch_assoc())
											{
												foreach ($row as $key => $value) 
											{
													if($key=="event_name")
														{$val="Event: ";}
													if($key=="start_time")
														{$val="Start Time: ";}
													echo "$val as $value<br>"	;
														
											}	
											
											}
													}
									
    $stmt -> close();
    $conn -> close();
?>
