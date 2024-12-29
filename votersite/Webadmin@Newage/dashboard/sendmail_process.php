
<?php
include("../session/session.php");
date_default_timezone_set("Asia/Calcutta"); 
$datentime= date("d-m-Y h:i:sa");
$time=$datentime;
//$email=$_POST['to'];
$email="response.newage@gmail.com";
$subject=$_POST['subject'];
$bcc=$_POST['bcc'];
$fromName="Admin NewAge";
$from="response.newage@gmail.com";

$header = "MIME-Version: 1.0" . "\r\n"; 
$header .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
// Additional headers 
$header .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
$header .= 'Cc: response.newage@gmail.com' . "\r\n"; 
$header .= 'Bcc: '.$bcc. "\r\n"; 

$body = "<html> 
   
    <body>".$_POST['editor1']."
	
	
	
    </body> 
    </html>";
// mailing
//echo $url="http://www.explorebackpackers.com/API/api.php?to=".$email."&subject=".$subject."&body=".$body."&header=".$header;

$url="http://www.explorebackpackers.com/API/api.php?email=".base64_encode($email)."&subject=".base64_encode($subject)."&body=".base64_encode(htmlspecialchars($body))."&header=".base64_encode(htmlspecialchars($header));
$request=file_get_contents($url);
$result=json_decode($request);
//echo $result->{"data"};
 //print_r($result);


$status=$result[0]->status;

if($status=='success')
{
	
	$_SESSION['emailsuccess']=1;
	
	echo "<script>location='sendmail.php'</script>";	
}
else
{
	echo "operation failed";
}

?>