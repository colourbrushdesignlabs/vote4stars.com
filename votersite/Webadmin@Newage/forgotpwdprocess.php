<?php

include("database/db.php");
include("session/session.php");
include("otp/otpgen.php");

$email = $_SESSION['emailtoverify'] = $_POST['mail'];
$otp = $_SESSION['otp'] = otpgen();

// Prepared statement to prevent SQL injection
$qry = "SELECT * FROM admin_login WHERE email = ?";
$stmt = $conn->prepare($qry);
$stmt->bind_param("s", $email); // "s" indicates the type (string)
$stmt->execute();
$qryresult = $stmt->get_result();

if ($qryresult->num_rows == 1) {
    while ($row = $qryresult->fetch_assoc()) {
        $name = $_SESSION['nameofuser'] = $row['Name'];
        $_SESSION['uid'] = $id = $row['id'];
    }

    date_default_timezone_set("Asia/Calcutta");
    $datentime = date("d-m-Y h:i:sa");
    $time = $datentime;

    $subject = "OTP for Password Reset @" . $time;
    $fromName = "OTP-ADMIN";
    $from = "otpadmin@newageicon.in";

    $header = "MIME-Version: 1.0" . "\r\n";
    $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $header .= 'From: ' . $fromName . '<' . $from . '>' . "\r\n";

    $body = '<html>
        <body>
            <h3>Dear ' . $name . ',</br> </h3>  
            <h2>' . $otp . '</h2>  
            <h4>is the OTP to reset your password</h4>
            <table cellspacing="0">
                <tr>
                    <th>Time:</th><td>' . $time . '</td>
                </tr>
            </table>
            </br>
            <h4>Regards,</h4>
            </br>
            <h3>NewAge SuperAdmin</h3>
        </body>
    </html>';

    // URL encoding for the email parameters
    $url = "http://www.explorebackpackers.com/API/api.php?email=" . base64_encode($email) . "&subject=" . base64_encode($subject) . "&body=" . base64_encode(htmlspecialchars($body)) . "&header=" . base64_encode(htmlspecialchars($header));
    $request = file_get_contents($url);
    $result = json_decode($request);

    $status = $result[0]->status;
    echo "<script>location='otpverify.php'</script>";

} else {
    $_SESSION['nomail'] = 1;
    echo "<script>location='forgot-password.php?nomail=1'</script>";
}

$stmt->close();
?>




<?php

// include("database/db.php");
// include("session/session.php");
// include("otp/otpgen.php");

// $email=$_SESSION['emailtoverify']=$_POST['mail'];
// $otp=$_SESSION['otp']=otpgen();
// //$qry4="select * from admin_login where email=".$email;
 
// $qry = "SELECT * FROM admin_login where email='$email'" ;
//                 $qryresult=$conn->query($qry);
				
// 				if ($qryresult->num_rows ==1) 
// 				{
    
//                 while($row = $qryresult->fetch_assoc()) 
// 				{
			
//                $name=$_SESSION['nameofuser']=$row['Name'];
// 			   $_SESSION['uid']=$id=$row['id'];
// 			   //$_SESSION['username']=$username=$row['username'];
					
//                }
					
					
					
					
					
				



// date_default_timezone_set("Asia/Calcutta"); 
// $datentime= date("d-m-Y h:i:sa");
// $time=$datentime;

// $subject="OTP for Password Reset @".$time;
// $fromName=" OTP-ADMIN";
// $from="otpadmin@newageicon.in";
// //$body="hai%20am%20tony";
// $header = "MIME-Version: 1.0" . "\r\n"; 
// $header .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// // Additional headers 
// $header .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
// //$header .= 'Cc: explore.backpackers@gmail.com' . "\r\n"; 


// $body = '<html> 
   
//     <body> 

//         <h3>Dear '.$name.',</br> </h3>  <h2> '.$otp.' <h2>  <h4>is the OTP to reset your password</h4>
//         <table cellspacing='.'"'.'0'.'"'.' >
            
             
// 			 <tr> 
//                 <th>Time:</th><td>'.$time.'</td> 
//             </tr> 
			 
//         </table> 
//         </br>
//         <h4>Regards,  </h4>
// 		</br>
//         <h3>NewAge SuperAdmin</h3>
//     </body> 
//     </html>';
// // mailing
// //echo $url="http://www.explorebackpackers.com/API/api.php?to=".$email."&subject=".$subject."&body=".$body."&header=".$header;

// $url="http://www.explorebackpackers.com/API/api.php?email=".base64_encode($email)."&subject=".base64_encode($subject)."&body=".base64_encode(htmlspecialchars($body))."&header=".base64_encode(htmlspecialchars($header));
// $request=file_get_contents($url);
// $result=json_decode($request);
// //echo $result->{"data"};
//  //print_r($result);


// $status=$result[0]->status;
// echo "<script>location='otpverify.php'</script>";

	
// }
// 	else				
// 				{
// 		$_SESSION['nomail']=1;
// echo "<script>location='forgot-password.php?nomail=1'</script>";
		

// 						}




?>


