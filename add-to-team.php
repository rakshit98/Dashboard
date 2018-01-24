<?php
	include_once("db_connect.php");
	include_once("functions.php");

	$response['status']=1;
	$response['message']="";

	$event=$_POST['team'];
	$delidtoadd=$_POST['delidtoadd'];
	$delidadd=$_POST['delidadd'];

	check_delid($delidtoadd);
	check_delid($delidadd);

	try{
		if(get_team_for_del($event,$delidtoadd,$conn))
		{
			$response['status']=0;
			$response['message']="Person already in the team";
			echo json_encode($response);
			exit();
		}
		if(!get_team_for_del($event,$delidadd,$conn))
		{
			$response['status']=0;
			$response['message']="Del id does not exist";
			echo json_encode($response);
			exit();
		}

		$teamid=get_team_for_del($event,$delidadd,$conn);
		$stmt = $conn->pepare("INSERT INTO team_config (team_id,delno) VALUES(:teamid,:del)");
		$stmt->bindParam(':teamid',$teamid,PDO::PARAM_INT);
		$stmt->bindParam(':del',$delidtoadd,PDO::PARAM_INT);
		$stmt->execute();
		$response['message']=$team;

		echo json_encode($response);


	}catch(PDOException $e)
	{
		$response['status']=0;
		$response['message']="EVENT DOES NOT EXIST";
		echo json_encode($response);
	}
?>