<?php
include_once('db_connect.php');
include_once('functions.php');

$delno = $_GET['delno'];
check_delid($delno);
try{
	$stmt = $conn->prepare("SELECT events.name,team_config.team_id,team_config.delno FROM events INNER JOIN team ON team.event_id = events.id INNER JOIN team_config ON team.id = team_config.team_id WHERE team_config.team_id in (SELECT team_id FROM team_config WHERE delno = :delno) ORDER BY team_config.team_id ASC");
	$stmt->bindParam(':delno',$delno,PDO::PARAM_INT);
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$response['status']=1;
	$response['message']=$results;
	echo json_encode($response);

}catch(PDOException $e){
	$response['status']=0;
	$response['message']=$e->getMessage();
	echo json_encode($response);
}
?>