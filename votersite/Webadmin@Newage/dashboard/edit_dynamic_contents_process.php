<?php
include("../session/session.php");
include("../database/db.php");

// Validate and sanitize inputs
$caption = isset($_POST['caption']) ? htmlspecialchars(trim($_POST['caption']), ENT_QUOTES, 'UTF-8') : '';
$content = isset($_POST['editor1']) ? htmlspecialchars(trim($_POST['editor1']), ENT_QUOTES, 'UTF-8') : '';
$id = isset($_POST['id']) ? intval($_POST['id']) : 0;
$menu_name = isset($_POST['menuname']) ? htmlspecialchars(trim($_POST['menuname']), ENT_QUOTES, 'UTF-8') : $caption;
$hide = isset($_POST['hide']) && $_POST['hide'] === 'hide' ? 1 : 0;

// Use prepared statements to prevent SQL injection
$qry1 = $conn->prepare("UPDATE `dynamic_contents` SET `caption` = ?, `content` = ?, `hide` = ?, `menu` = ? WHERE `id` = ?");
$qry1->bind_param('ssisi', $caption, $content, $hide, $menu_name, $id);

if ($qry1->execute()) {
    $_SESSION['editsuccess'] = 1;
    $e_id = base64_encode($id);

    if ($id == 1) {
        echo "<script>location='edit_countdown.php?id=" . $e_id . "'</script>";
    } else {
        echo "<script>location='edit_dynamic_contents.php?id=" . $e_id . "'</script>";
    }
} else {
    $_SESSION['editsuccess'] = 2;
    $e_id = base64_encode($id);
    echo "<script>location='edit_dynamic_contents.php?id=" . $e_id . "'</script>";
}

$qry1->close();
$conn->close();
?>



<?php
// include("../session/session.php");
// include("../database/db.php");
// $caption=$_POST['caption'];
// $content=$_POST['editor1'];
// $_POST['menuname'];
// $id=$_POST['id'];
// if (isset($_POST['hide']))
// {
	
// 	if($_POST['hide']=='hide')
// 	{
// 		$hide=1;
// 	}
// 	else
// 	{
// 		$hide=0;
		
// 	}
// }
// else
// {
// 	$hide=0;
	
// }

// if(isset($_POST['menuname']))

// {
// 	$menu_name=$_POST['menuname'];
// }
// else
// {
// 	$menu_name=$_POST['caption'];
// }


// $qry1="UPDATE `dynamic_contents` SET `caption` = '$caption', `content` = '$content', `hide`='$hide',`menu`='$menu_name' WHERE `dynamic_contents`.`id` = '$id';";

// if($conn->query($qry1))
// {
// 	$_SESSION['editsuccess']=1;
// 	$e_id=base64_encode($id);
	
// 	if($id==1)
// 	{
		
// 		echo "<script>location='edit_countdown.php?id=".$e_id."'</script>";
// 	}
// 	echo "<script>location='edit_dynamic_contents.php?id=".$e_id."'</script>";
	
// }
// else
// {
// 	$_SESSION['editsuccess']=2;
// 	$e_id=base64_encode($id);
// 	echo "<script>location='edit_dynamic_contents.php?id=".$e_id."'</script>";
// }


?>
