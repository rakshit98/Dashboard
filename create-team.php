<?php
include_once('db_connect.php');
include_once('functions.php');

$del = $_POST['delno'];
$event = $_POST['event'];

$response['status']=1;
$response['message']='';

try{
	if(get_team_for_del($event,$del,$conn)!=NULL){
		$response['status']=0;
		$response['message']='Delegate already registered for event';
		echo json_encode($response);
		exit();
	}
	$stmt1 = $conn->prepare("INSERT INTO team(event_id) VALUES (:event)");
	$stmt1->bindParam(':event',$event,PDO::PARAM_INT);
	$stmt1->execute();
	$team = $conn->lastInsertId();

	$stmt2 = $conn->prepare("INSERT INTO team_config(team_id,delno) VALUES(:team,:del)");
	$stmt2->bindParam(':team',$team,PDO::PARAM_INT);
	$stmt2->bindParam(':del',$del,PDO::PARAM_INT);
	$stmt2->execute();
	$response['message']=$team;

	echo json_encode($response);

}catch(PDOException $e){
	$response['status']=0;
	$response['message']="EVENT or DELEGATE doesn't exist";
	echo json_encode($response);
}
?>