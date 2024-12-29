<?php
include("session/session.php");
include("database/db.php");
define("SECRET_KEY","6LdmhuUUAAAAAMxCUZtrBVCPJbbNwPulOg9Zu60n");

$youricon = filter_input(INPUT_POST, 'icon', FILTER_SANITIZE_STRING);
$iconsector = filter_input(INPUT_POST, 'sector', FILTER_SANITIZE_STRING);
$whyopted = filter_input(INPUT_POST, 'opt', FILTER_SANITIZE_STRING);
$yourname = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$yoursector = filter_input(INPUT_POST, 'yourSector', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL);
$ipaddress = $_SERVER['REMOTE_ADDR'];
$token = filter_input(INPUT_POST, 'gtoken', FILTER_SANITIZE_STRING);

$url = "https://www.google.com/recaptcha/api/siteverify?secret=" . SECRET_KEY . "&response=" . $token . "&remoteip=" . $ipaddress;
$request = file_get_contents($url);
$response = json_decode($request);

if ($response->success == true && $response->score >= 0.5) {
    date_default_timezone_set("Asia/Calcutta");
    $time = date("d-m-Y h:i:s A");

    // Prepare and bind to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO suggest_icon (youricon, iconsector, whyopted, yourname, yoursector, email, time, ipaddress) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $youricon, $iconsector, $whyopted, $yourname, $yoursector, $email, $time, $ipaddress);

    if ($stmt->execute()) {
        $msg = '
        <html> 
        <head> 
            <title>New Suggestion from NewAgeIcon </title> 
        </head> 
        <body> 
            <h3>Suggestion Details <a href"www.newageicon.in">Newage Icon</a></h3> 
            <table cellspacing="0" style="border: 2px dashed #FB4314; width: 90%;"> 
                <tr><th>Name:</th><td>'.$youricon.'</td></tr> 
                <tr style="background-color: #e0e0e0;"><th>Icon Sector:</th><td>'.$iconsector.' </td></tr> 
                <tr><th>Suggested by:</th><td>'.$yourname.'</td></tr> 
                <tr style="background-color: #e0e0e0;"><th>His Sector:</th><td>'.$yoursector.'</td></tr> 
                <tr><th>Email:</th><td>'.$email.'</td></tr> 
                <tr style="background-color: #e0e0e0;"><th>Why Opted:</th><td>'.$whyopted.'</td></tr> 
            </table> 
        </body> 
        </html>';

        $sub = "NewAgeIcon Suggestion  " . $time;
        $fromName = "NewAgeIcon Suggestion";
        $from = "suggestion@newageicon.in";
        $headers = "MIME-Version: 1.0" . "\r\n"; 
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
        $headers .= 'From: ' . $fromName . '<' . $from . '>' . "\r\n";

        $to = "response.newage@gmail.com";
        mail($to, $sub, $msg, $headers);    

        // Mail to the user
        $msg = '
        <html> 
        <head> 
            <title>New Suggestion from NewAgeIcon </title> 
        </head> 
        <body> 
            <h3>Dear ' . $yourname . ',</br></h3><h4>Greetings from NewAge Team!!</h4></br>
            <h4>Thanks for your suggestion, Following are the details</h4>
            <table cellspacing="0" style="border: 2px dashed #FB4314; width: 90%;"> 
                <tr><th>Icon Name:</th><td>'.$youricon.'</td></tr> 
                <tr style="background-color: #e0e0e0;"><th>Icon Sector:</th><td>'.$iconsector.' </td></tr> 
                <tr><th>Your Name:</th><td>'.$yourname.'</td></tr> 
                <tr style="background-color: #e0e0e0;"><th>Your Sector:</th><td>'.$yoursector.'</td></tr> 
                <tr><th>Email:</th><td>'.$email.'</td></tr> 
                <tr style="background-color: #e0e0e0;"><th>Why Opted:</th><td>'.$whyopted.'</td></tr> 
            </table></br>
            <h4>Regards,</br></h4>
            <h3>NewAge Team</h3>
        </body> 
        </html>';

        $from = "no-reply@newageicon.in";
        $headers = "MIME-Version: 1.0" . "\r\n"; 
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
        $headers .= 'From: ' . $fromName . '<' . $from . '>' . "\r\n";

        mail($email, $sub, $msg, $headers);

        $_SESSION['success'] = 1;
        header("Location: ../");
        exit();
    } else {
        $_SESSION['success'] = 2;
        header("Location: ../");
        exit();
    }

    $stmt->close();
} else {
    $_SESSION['success'] = 3;
    header("Location: ../");
    exit();
}
?>




<?php
// include("session/session.php");
// include("database/db.php");
// define("SECRET_KEY","6LdmhuUUAAAAAMxCUZtrBVCPJbbNwPulOg9Zu60n");
// //$response->score=0.01;

// include("database/db.php");
//  $youricon=$_POST['icon'];
//  $iconsector=$_POST['sector'];
//  $whyopted=$_POST['opt'];
//  $yourname=$_POST['name'];
//  $yoursector=$_POST['yourSector'];
//  $email=$_POST['mail'];
// $ipaddress=$_SERVER['REMOTE_ADDR'];
// $token=$_POST['gtoken'];
// $url="https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response=".$token."&remoteip=".$ipaddress;
// $request=file_get_contents($url);
// $response=json_decode($request);
// //$response->success;

// //$response->score;
// if($response->success=true && $response->score>=0.5)

// {
// date_default_timezone_set("Asia/Calcutta"); 
// $datentime= date("d-m-Y h:i:s A");
// $time=$datentime;


// $qry= "insert into suggest_icon(youricon,iconsector,whyopted,yourname,yoursector,email,time,ipaddress)values('$youricon','$iconsector','$whyopted','$yourname','$yoursector','$email','$time','$ipaddress')";

// if ($conn->query($qry) == TRUE)
// {
    
	
// 	$msg = '<html> 
//     <head> 
//         <title>New Suggestion from NewAgeIcon </title> 
//     </head> 
//     <body> 
//         <h3>Suggestion Details <a href"www.newageicon.in">Newage Icon</a></h3> 
//         <table cellspacing="0" style="border: 2px dashed #FB4314; width: 90%;"> 
//             <tr> 
//                 <th>Name:</th><td>'.$youricon.'</td> 
//             </tr> 
//              <tr  style="background-color: #e0e0e0;"> 
//                 <th>Icon Sector:</th><td>'.$iconsector.' </td> 
//             </tr> 
//              <tr> 
//                 <th>Suggested by:</th><td>'.$yourname.'</td> 
//             </tr> 
//              <tr  style="background-color: #e0e0e0;"> 
//                 <th>His Sector:</th><td>'.$yoursector.'</td> 
//             </tr> 
//             <tr > 
//                 <th>Email:</th><td>'.$email.'</td> 
//             </tr> 

//             <tr  style="background-color: #e0e0e0;"> 
//                 <th>Why Opted:</th><td>'.$whyopted.'</td> 
//             </tr> 
//         </table> 
//     </body> 
//     </html>';

// $sub="NewAgeIcon Suggestion  ".$time;
// $fromName="NewAgeIcon Suggestion";
// $from="suggestion@newageicon.in";
// $headers = "MIME-Version: 1.0" . "\r\n"; 
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
//  $to="response.newage@gmail.com";
// // Additional headers 
// $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
// //$headers .= 'Cc: explore.backpackers@gmail.com' . "\r\n"; 
// //$headers .= 'Bcc: response.newage@gmail.com' . "\r\n"; 

// //$url="http://www.explorebackpackers.com/API/api.php?email=".base64_encode($to)."&subject=".base64_encode($sub)."&body=".base64_encode(htmlspecialchars($msg))."&header=".base64_encode(htmlspecialchars($headers));
// //$request=file_get_contents($url);
// //$result=json_decode($request);
// mail($to,$sub,$msg,$headers);			

// $msg = '<html> 
//     <head> 
//         <title>New Suggestion from NewAgeIcon </title> 
//     </head> 
//     <body> 
//         <h3>Dear '.$yourname.',</br> </h3>  <h4>Greetings from NewAge Team!!</h4>
//         </br>
//         <h4>Thanks for your suggestion, Following are the details</h4>
//         <table cellspacing="0" style="border: 2px dashed #FB4314; width: 90%;"> 
//             <tr> 
//                 <th>Icon Name:</th><td>'.$youricon.'</td> 
//             </tr> 
//              <tr  style="background-color: #e0e0e0;"> 
//                 <th>Icon Sector:</th><td>'.$iconsector.' </td> 
//             </tr> 
//              <tr> 
//                 <th>Your Name:</th><td>'.$yourname.'</td> 
//             </tr> 
//              <tr  style="background-color: #e0e0e0;"> 
//                 <th>Your Sector:</th><td>'.$yoursector.'</td> 
//             </tr> 
//             <tr > 
//                 <th>Email:</th><td>'.$email.'</td> 
//             </tr> 

//             <tr  style="background-color: #e0e0e0;"> 
//                 <th>Why Opted:</th><td>'.$whyopted.'</td> 
//             </tr> 
//         </table> 
//         </br>
//         <h4>Regards,</br>  </h4>
//         <h3>NewAge Team</h3>
//     </body> 
//     </html>';
    
// $from="no-reply@newageicon.in";
// $headers = "MIME-Version: 1.0" . "\r\n"; 
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// // Additional headers 
// $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
// mail($email,$sub,$msg,$headers);
// //$url="http://www.explorebackpackers.com/API/api.php?email=".base64_encode($email)."&subject=".base64_encode($sub)."&body=".base64_encode(htmlspecialchars($msg))."&header=".base64_encode(htmlspecialchars($headers));
// //$request=file_get_contents($url);
// //$result=json_decode($request);
	
	
   
//   $_SESSION['success']=1;  
// 	echo "<script>location='../'</script>";
 
// } else
// {
//     $_SESSION['success']=2;  
//     echo "<script>location='../'</script>";
//    // header("Location: http://newageicon.in/NewAgeIcon/index.php?aid=2");
// //echo "<script>location='index.php'</script>";
// }

	
// }

// else
// {
//     $_SESSION['success']=3;  
// 	//header("Location: http://newageicon.in/NewAgeIcon/index.php?aid=3");
// echo "<script>location='../'</script>";
	
// }

?>
