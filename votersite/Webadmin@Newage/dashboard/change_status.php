
<?php
include("../session/session_check.php"); 
include("../database/db.php"); 

// Validate inputs
$action = isset($_GET['action']) ? htmlspecialchars(trim($_GET['action']), ENT_QUOTES, 'UTF-8') : '';
$new_value = isset($_GET['new_value']) ? htmlspecialchars(trim($_GET['new_value']), ENT_QUOTES, 'UTF-8') : '';

// Prepared statement template
$qry = $conn->prepare("UPDATE `config` SET `config_value` = ? WHERE `id` = ?");

if ($action === 'suggestion_and_vote') {
    $id = 1;
} elseif ($action === 'vote_allow') {
    $id = 2;
} elseif ($action === 'Sort') {
    $id = 3;
} else {
    header("Location: home.php");
    exit;
}

// Bind parameters and execute
$qry->bind_param('si', $new_value, $id);
if ($qry->execute()) {
    header("Location: home.php");
    exit;
} else {
    // Handle the error appropriately (optional: log the error)
    header("Location: home.php?error=update_failed");
    exit;
}

$qry->close();
$conn->close();
?>


<?php
// include("../session/session_check.php"); 
// include("../database/db.php"); 
// $action=$_GET['action'];
// $new_value=$_GET['new_value'];

// if($action=='suggestion_and_vote')
// {
// 	$qry="UPDATE `config` SET `config_value`='$new_value' WHERE `id`=1";
// 	if($conn->query($qry))
// 	{
// 		echo "<script>location='home.php'</script>";
// 	}
	
// }
// elseif($action=='vote_allow')
// {
// 	$qry="UPDATE `config` SET `config_value`='$new_value' WHERE `id`=2";
// 	if($conn->query($qry))
// 	{
// 		echo "<script>location='home.php'</script>";
// 	}
	
// }
// elseif($action=='Sort')
// {
// 	$qry="UPDATE `config` SET `config_value`='$new_value' WHERE `id`=3";
// 	if($conn->query($qry))
// 	{
// 		echo "<script>location='home.php'</script>";
// 	}
	
// }
// else
// {
// 	echo "<script>location='home.php'</script>";
// }

?>