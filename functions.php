<?php
function check_delid($field){
	if(preg_match('/^[0-9]{1,6}$/', $field)=='0'){
		$response['status']=0;
		$response['message']="invalid delete card number";
		echo json_encode($response);
		exit();
	}
}

function check_eventid($field){
	if(preg_match('/^[0-9]{1,6}$/', $event)=='0'){
		$response['status']=0;
		$response['message']="invalid event id";
		echo json_encode($response);
		exit();
	}
}

function get_team_for_del($event,$del,$conn){
	$stmt = $conn->prepare("SELECT team_id FROM team_config INNER JOIN team ON team_config.team_id=team.id WHERE team.event_id = :event AND team_config.delno = :del");
	$stmt->bindParam(':event',$event,PDO::PARAM_INT);
	$stmt->bindParam(':del',$del,PDO::PARAM_INT);
	$stmt->execute();
	$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
	if(count($res)==0)
		return NULL;
	else
		return $res[0]['team_id'];
}
?>