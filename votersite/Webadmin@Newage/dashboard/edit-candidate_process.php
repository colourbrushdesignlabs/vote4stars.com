<?php 
include("../session/session_check.php");
include("../database/db.php");

// Validate and sanitize inputs
$id = isset($_POST['id']) ? intval($_POST['id']) : 0;
$candidate_name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8') : '';
$old_photo = isset($_POST['old_image']) ? htmlspecialchars(trim($_POST['old_image']), ENT_QUOTES, 'UTF-8') : '';
$sector = isset($_POST['sector']) ? htmlspecialchars(trim($_POST['sector']), ENT_QUOTES, 'UTF-8') : '';
$description = isset($_POST['editor1']) ? htmlspecialchars(trim($_POST['editor1']), ENT_QUOTES, 'UTF-8') : '';
//$description = $_POST['editor1'];
$table_name = isset($_POST['table_name']) ? htmlspecialchars(trim($_POST['table_name']), ENT_QUOTES, 'UTF-8') : '';
$candidate_id = isset($_POST['candidate_id']) ? intval($_POST['candidate_id']) : 0;

// File upload check
if ($_FILES['image']['error'] == 0) {
    // Validate file type
    $allowed_types = ['image/png', 'image/jpg', 'image/jpeg'];
    if (!in_array($_FILES["image"]["type"], $allowed_types)) {
        header("Location: view-candidate.php");
        exit;
    }

    // Delete the old photo after verifying the path
    if (!empty($old_photo) && file_exists($old_photo)) {
        unlink($old_photo); // Ensure proper validation of file path
    }

    // Process the new photo
    $file_ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
    $photo = $candidate_id . '.' . $file_ext; // New file name based on candidate ID
    $upload_dir = "images/candidate/";

    // Ensure the upload directory exists
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }

    // Move the uploaded file
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $upload_dir . $photo)) {
        // Use a prepared statement to prevent SQL injection
        $qry = $conn->prepare("UPDATE `$table_name` SET `candidate` = ?, `sector` = ?, `description` = ?, `file_path` = ? WHERE `id` = ?");
        $qry->bind_param('ssssi', $candidate_name, $sector, $description, $photo, $id);
    }
} else {
    // If no file is uploaded, update other fields only
    $qry = $conn->prepare("UPDATE `$table_name` SET `candidate` = ?, `sector` = ?, `description` = ? WHERE `id` = ?");
    $qry->bind_param('sssi', $candidate_name, $sector, $description, $id);
}

// Execute query and redirect
if ($qry->execute()) {
    header("Location: view-candidate.php");
    exit;
} else {
    header("Location: view-candidate.php?error=update_failed");
    exit;
}

$qry->close();
$conn->close();
?>

 
 
 
 <!-- <?php 
// include("../session/session_check.php");
// include("../database/db.php");
// $rand=mt_rand(100, 999);
// $id=$_POST['id'];
// $candidate_name=$_POST['name'];
// $old_photo=$_POST['old_image'];
// //$candidate_photo=$candidate_id.".jpg";
// $sector=$_POST['sector'];
// $description=$_POST['editor1'];
// $table_name=$_POST['table_name'];
// $candidate_id=$_POST['candidate_id'];



// if($_FILES['image']['error']==0)
// {

// 	if(!($_FILES["image"]["type"] == "image/png") 
// || !($_FILES["image"]["type"] == "image/jpg") 
// || !($_FILES["image"]["type"] == "image/jpeg"))
// {
// 	echo "<script>location='view-candidate.php'</script>";
// } 
	

// 	unlink($old_photo);
	
// $file1=$_FILES['image']['name'];
// $photo="";
// //if($_FILES['image']['error']==0)
// //{
// $ext= strtolower(substr(strrchr($file1,"."),1));

// $elen=strlen($ext);
// $flen=strlen($file1);
// $slen=$flen-$elen-1;
// //$sname=substr($file1,0,$slen);
// $sname=$candidate_id;	
// $photo=$sname.".".$ext;
// move_uploaded_file($_FILES["image"]["tmp_name"],"images/candidate/".$photo);
// //}

// $qry="UPDATE `$table_name` SET `candidate` = '$candidate_name', `sector` = '$sector',`description` = '$description',`file_path` = '$photo' WHERE `$table_name`.`id` = $id";

// if($conn->query($qry))
// {
// 	//$_SESSION['success_add_candi']=1;
// 	echo "<script>location='view-candidate.php'</script>";
// }
// else
// {
// 	//$_SESSION['success_add_candi']=2;
// 	echo "<script>location='view-candidate.php'</script>";
	
// }

	
	
	

// }
// else
// {
	
	


// $qry="UPDATE `$table_name` SET `candidate` = '$candidate_name', `sector` = '$sector',`description` = '$description' WHERE `$table_name`.`id` = $id";

// if($conn->query($qry))
// {
// 	//$_SESSION['success_add_candi']=1;
// 	echo "<script>location='view-candidate.php'</script>";
// }
// else
// {
// 	//$_SESSION['success_add_candi']=2;
// 	echo "<script>location='view-candidate.php'</script>";
	
// }

// }






?> -->