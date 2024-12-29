<?php 
include("session/session.php");

if(!isset($_SESSION['otpattempt'])) {
    session_destroy();
    header("Location: index.php");
    exit;
}

include("database/db.php");

if($_SESSION['otpattempt'] == 'success') {

    if(strcmp($_POST['confirmpassword'], $_POST['newpassword']) == 0) {

        $pwd = $_POST['confirmpassword'];
        $uid = $_SESSION['uid'];

        // Secure the query with a prepared statement
        $stmt = $conn->prepare("UPDATE `admin_login` SET `password` = ? WHERE `id` = ?");
        $stmt->bind_param("si", $pwd, $uid);  // "si" means string, integer

        if($stmt->execute()) {

            // Mailing logic remains the same
            $email = $_SESSION['emailtoverify'];
            $name = $_SESSION['nameofuser'];

            date_default_timezone_set("Asia/Calcutta"); 
            $datentime = date("d-m-Y h:i:sa");
            $time = $datentime;

            $subject = "New Age Icon Password has been changed";
            $fromName = "New Age ADMIN";
            $from = "admin@newageicon.in";

            $header = "MIME-Version: 1.0" . "\r\n"; 
            $header .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
            $header .= 'From: '.$fromName.'<'.$from.'>' . "\r\n";

            $body = '<html> 
                <body> 
                    <h3>Hi '.$name.', </h3>  </br> 
                    You have successfully updated your Newage dashboard password. </br></br>
                    If you have not made this change or notice any error, please contact us at support@newageicon.in </br></br>
                    <table cellspacing="0">
                        <tr> 
                            <th>Time:</th><td>'.$time.'</td> 
                        </tr> 
                    </table> 
                    </br>
                    <h4>Cheers!  </h4>
                    <h3>Team New Age</h3>
                </body> 
            </html>';

            // Sending email via the external API
            $url = "http://www.explorebackpackers.com/API/api.php?email=" . base64_encode($email) .
                   "&subject=" . base64_encode($subject) .
                   "&body=" . base64_encode(htmlspecialchars($body)) .
                   "&header=" . base64_encode(htmlspecialchars($header));
            
            $request = file_get_contents($url);
            $result = json_decode($request);

            // Success handling
            $_SESSION['resetattempt'] = "success";
            header("Location: index.php");
            exit;
        }

        $stmt->close();
    } else {
        header("Location: reset-password.php");
        exit;
    }

} else {
    session_destroy();
    header("Location: index.php");
    exit;
}
?>


<?php 
// include("session/session.php");

// if(!isset($_SESSION['otpattempt']))	
// {
// 	session_destroy();
// 	echo "<script>location='index.php'</script>";
// }
// include("database/db.php");
// if($_SESSION['otpattempt']=='success')
// {
	
// 	if(strcmp($_POST['confirmpassword'],$_POST['newpassword'])==0)
// 	{
	
// 		$pwd=$_POST['confirmpassword'];
// 		$uid=$_SESSION['uid'];
// 		$qry= "UPDATE `admin_login` SET `password` ='$pwd' WHERE `id` = '$uid'";
// 		if($conn->query($qry))
// 		{
			
			
			
			
// 			//mailing//
			
// 	$email=$_SESSION['emailtoverify'];
// 	$name=$_SESSION['nameofuser'];	
			
			
// 			date_default_timezone_set("Asia/Calcutta"); 
// $datentime= date("d-m-Y h:i:sa");
// $time=$datentime;

// $subject="New Age Icon Password has been changed" ;
// $fromName="New Age ADMIN";
// $from="admin@newageicon.in";
// //$body="hai%20am%20tony";
// $header = "MIME-Version: 1.0" . "\r\n"; 
// $header .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// // Additional headers 
// $header .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
// //$header .= 'Cc: explore.backpackers@gmail.com' . "\r\n"; 


// $body = '<html> 
   
//     <body> 

//         <h3>Hi '.$name.', </h3>  </br> 


// You have successfully updated your Newage dashboard password. </br></br>

// If you have not made this change or notice any error, please contact us at support@newageicon.in </br></br>



//         <table cellspacing='.'"'.'0'.'"'.' >
            
             
// 			 <tr> 
//                 <th>Time:</th><td>'.$time.'</td> 
//             </tr> 
			 
//         </table> 
//         </br>
//         <h4>Cheers!  </h4>
		
//         <h3>Team New Age</h3>
//     </body> 
//     </html>';
// // mailing
// //echo $url="http://www.explorebackpackers.com/API/api.php?to=".$email."&subject=".$subject."&body=".$body."&header=".$header;

// $url="http://www.explorebackpackers.com/API/api.php?email=".base64_encode($email)."&subject=".base64_encode($subject)."&body=".base64_encode(htmlspecialchars($body))."&header=".base64_encode(htmlspecialchars($header));
// $request=file_get_contents($url);
// $result=json_decode($request);
			
			
// 			//mailing//
			
// 		$_SESSION['resetattempt']="success";
// 		echo "<script>location='index.php'</script>";	
// 		}
// 	}
// 	else
// 	{
// 	echo "<script>location='reset-password.php'</script>";		
// 	}
// }
// else
// {
// 	session_destroy();
// 	echo "<script>location='index.php'</script>";
// }

?>