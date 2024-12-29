<?php
include("database/db.php");
include("session/session.php");

function gen_uuid() {
    return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff), mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
    );
}

function getIpLocation($ipaddr) {
    $url = "http://ip-api.com/json/{$ipaddr}";

    // Initialize cURL
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    // Execute the cURL request and get the response
    $response = curl_exec($ch);

    // Check for errors
    if (curl_errno($ch)) {
        echo "Error: " . curl_error($ch);
        curl_close($ch);
        return null;
    }

    // Close cURL
    curl_close($ch);

    // Decode the JSON response
    $data = json_decode($response, true);

    return $data;
}

date_default_timezone_set("Asia/Calcutta");

$now = date("d-m-Y h:i:s A") . " GMT+05:30";
$cdtime = $_POST['cdtime'] ?? '';
$datetime1 = strtotime($now);
$datetime2 = strtotime($cdtime);
$secs = $datetime2 - $datetime1;
if ($secs<0)
{
    $secs=0;
}
$id = $_POST['id'] ?? '';
$candidate_id = $_POST['cid'] ?? '';
$candidate_name = $_POST['candidate_name'] ?? '';
$table_name = $_POST['tab'] ?? '';
$token = $_POST['gtoken'] ?? '';
$uuid=$visitorid=$_POST['visitor_id'] ?? gen_uuid();  // added in v2.0.0 2024
//$uuid=$visitorid=$_POST['visitor_id']; //Activate this code if required, incase of not getting visitor id
$event_id=$table_name;
$current_time = date("d-m-Y h:i:s A");
$date = date("Y-m-d");
$month = date("m");
$year = date("Y");

$stmt = $conn->prepare("SELECT current_status FROM event WHERE event_id = ?");
$stmt->bind_param("s", $event_id);
$stmt->execute();
$stmt->bind_result($event_status);
$stmt->fetch();
$stmt->close();

if ($event_status!="ACTIVE")
{
    $_SESSION['success_vote'] = 6;
    $enc_id = base64_encode($id);
    header("Location: vote.php?id=" . $enc_id);
    exit;

}
$query="SELECT eliminated FROM `$event_id` WHERE candidate_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $candidate_id);
$stmt->execute();
$stmt->bind_result($candidate_status);
$stmt->fetch();
$stmt->close();

$candidate_status;
if ($candidate_status==1)
{
    $_SESSION['success_vote'] = 5;
    $enc_id = base64_encode($id);
    header("Location: vote.php?id=" . $enc_id);
    exit;

}


// get staging v2.0.0 2024 OCT
$stmt = $conn->prepare("SELECT current_stage FROM staging WHERE event_id = ?");
$stmt->bind_param("s", $event_id);
$stmt->execute();
$stmt->bind_result($event_stage);
$stmt->fetch();
$stmt->close();

//$event_stage;
$cookiename="uuid_".$event_stage."_".$event_id;
//echo $cookiename;
 
// Fetch config value using prepared statement
$stmt = $conn->prepare("SELECT config_value FROM config WHERE id = ?");
$stmt->bind_param("i", $config_id);
$config_id = 2;
$stmt->execute();
$stmt->bind_result($config_value);
$stmt->fetch();
$stmt->close();

// Redirect if config value is 1
if ($config_value == 1) {
    $_SESSION['success_vote'] = 4;
    $enc_id = base64_encode($id);
    header("Location: vote.php?id=" . $enc_id);
    exit;
}

// Google reCAPTCHA validation
define("SECRET_KEY", "6LdmhuUUAAAAAMxCUZtrBVCPJbbNwPulOg9Zu60n");

function get_client_ip() {
    $ip = null;

    // Check for shared internet or proxy IPs
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // Check if there is a forwarded IP from a proxy
        // This can contain multiple IPs (comma-separated), the first one is the user's real IP
        $ipList = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $ip = trim($ipList[0]);
    } elseif (!empty($_SERVER['REMOTE_ADDR'])) {
        // Fallback to REMOTE_ADDR if no proxy IP is found
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    // Validate the IP and differentiate between IPv4 and IPv6
    $ipv4 = null;
    $ipv6 = null;

    if ($ip && filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
        $ipv4 = $ip;
    } elseif ($ip && filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
        $ipv6 = $ip;
    }

    // Return both IPs as a string
    return  $ipv4 ?? $ipv6;
}


// Function to check if IP exists in table
function check_ip($ip, $table, $conn) {
    $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM `$table` WHERE ipaddress = ?");
    $stmt->bind_param("s", $ip);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();
    return $count;
}

$tab = "vote_history_" . $table_name;
$ip = get_client_ip();

// Validate reCAPTCHA
$url = "https://www.google.com/recaptcha/api/siteverify?secret=" . SECRET_KEY . "&response=" . $token . "&remoteip=" . $ip;
$response = json_decode(file_get_contents($url));

if ($response->success && floatval($response->score) >= 0.6) 
{
        $ip_count = check_ip($ip, $tab, $conn);
	$locationData = getIpLocation($ip);

	if ($locationData && $locationData['status'] === 'success') {
    
    	$iplocation=$locationData['city'];
    	$ipregion=$locationData['regionName'];
    	$ipcountry=$locationData['country'];
    	$latitude=$locationData['lat'];
    	$longitude=$locationData['lon'];
	} else {
    
    	$iplocation="Not Available";
    	$ipregion="Not Available";
    	$ipcountry="Not Available";
    	$latitude="Not Available";
    	$iplongitude="Not Available";
	}

        /*$stmt = $conn->prepare("SELECT id, vote_stage FROM `$tab` ORDER BY id DESC LIMIT 1");
        $stmt->execute();
        $stmt->bind_result($voting_hit_id, $lastvotedstage);

            if ($stmt->fetch()) {
             // Row found, variables are already set by bind_result
            } else {
             // No row found, set default values
            $voting_hit_id = 0;
            $lastvotedstage = 0;
            }

        $stmt->close();
        */


    if($ip_count == 0 && isset($_COOKIE[$cookiename]) )
    {
        echo "condition 1";
        $_SESSION['success_vote'] = 2;
        $enc_id = base64_encode($id);
       // $stmt = $conn->prepare("INSERT INTO `$tab` (candidate, time, ipaddress, mac_id, month, year, date, vote_stage) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
       // $stmt->bind_param("sssssssi", $candidate_id, $current_time, $ip, $uuid, $month, $year, $date, $event_stage);
       // $stmt->execute();
       // $stmt->close();
        // here an additional entry of voter will be recorded

        header("Location: vote.php?id=" . $enc_id);
        exit;
    }
    elseif ($ip_count >= 1 && isset($_COOKIE[$cookiename] ))
    {
        echo "condition 2";
        $_SESSION['success_vote'] = 2;
        $enc_id = base64_encode($id);
        header("Location: vote.php?id=" . $enc_id);
        exit;

    }
    else if ($ip_count > 0 && empty($_COOKIE[$cookiename]))
    {
        echo "condition 3";
        $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM $tab WHERE ipaddress = ? AND mac_id = ? AND vote_stage = ?");
        $stmt->bind_param("ssi", $ip, $visitorid, $event_stage);
        $stmt->execute();
        $stmt->bind_result($votedcount);
        $stmt->fetch();
        $stmt->close();

        if ($votedcount>0)
        {

            echo "condition 3 inner1";
            $secs=2592000; // set for one month
            setcookie($cookiename, $uuid, time() + $secs, "/");
            $_SESSION['success_vote'] = 2;
            $enc_id = base64_encode($id);
            header("Location: vote.php?id=" . $enc_id);
            exit;

        }
        else
        {
            echo "condition 3 inner2";
            $stmt = $conn->prepare("SELECT COUNT(*) AS count FROM `$tab` WHERE mac_id = ? AND vote_stage = ?");
            $stmt->bind_param("si", $visitorid, $event_stage);
            $stmt->execute();
            $stmt->bind_result($votedcount1);
            $stmt->fetch();
            $stmt->close();

            if ($votedcount1<1)
                {
                    // do vote 

                    echo "condition 3 inner4";
                    $secs=2592000; // set for one month
                    setcookie($cookiename, $uuid, time() + $secs, "/");
            
            
            
                    // Insert vote into history table

		   $stmt = $conn->prepare("INSERT INTO `$tab`(candidate, time, ipaddress, mac_id, month, year, date, vote_stage, iplocation, ipregion,ipcountry, latitude, longitude,candidate_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
			$stmt->bind_param("sssssssissssss", $candidate_id, $current_time, $ip, $uuid, $month, $year, $date, $event_stage, $iplocation, $ipregion, $ipcountry, $latitude, $longitude, $candidate_name);
			$stmt->execute();
			$stmt->close();


			/*
                    $stmt = $conn->prepare("INSERT INTO `$tab` (candidate, time, ipaddress, mac_id, month, year, date, vote_stage) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                    $stmt->bind_param("sssssssi", $candidate_id, $current_time, $ip, $uuid, $month, $year, $date, $event_stage);
                    $stmt->execute();
                    $stmt->close();
			*/
			/*
			$stmt = $conn->prepare("INSERT INTO `$tab`(candidate, time, ipaddress, mac_id, month, year, date, vote_stage, iplocation, ipregion,ipcountry, latitude, longitude,candidate_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
			$stmt->bind_param("sssssssissssss", $candidate_id, $current_time, $ip, $uuid, $month, $year, $date, $event_stage, $iplocation, $ipregion, $ipcountry, $latitude, $longitude, $candidate_name);
			$stmt->execute();
			$stmt->close();
				*/
 		           
                    // Update vote count
                    $stmt = $conn->prepare("UPDATE `$table_name` SET vote_count = vote_count + 1 WHERE candidate_id = ? AND eliminated = 0");
                    $stmt->bind_param("s", $candidate_id);
                    $stmt->execute();
                    $stmt->close();
            
                    // Update hit counter
                    $stmt = $conn->prepare("SELECT id, date FROM hit_counter ORDER BY id DESC LIMIT 1");
                    $stmt->execute();
                    $stmt->bind_result($hit_id, $last_day);
                    $stmt->fetch();
                    $stmt->close();
                    echo "date: ".$date;
                    echo "Last day: ".$last_day;
            
                    if ($date == $last_day) {

                        echo "condition 3 inner5";
                        $stmt = $conn->prepare("UPDATE hit_counter SET voted_today = voted_today + 1 WHERE id = ?");
                        $stmt->bind_param("i", $hit_id);
                        $stmt->execute();
                        $stmt->close();
                    }
            
                    $_SESSION['success_vote'] = 1;
                    $enc_id = base64_encode($id);
                    header("Location: vote.php?id=" . $enc_id);
                    exit;
                }else
                {
                    $_SESSION['success_vote'] = 2;
                    $enc_id = base64_encode($id);
                    header("Location: vote.php?id=" . $enc_id);
                    exit;
            

                }

        }

       

    }
    

    else if (empty($_COOKIE[$cookiename]) && $ip_count == 0) 
    {

        echo "All set, condition 4";

        $secs=2592000; // set for one month
        setcookie($cookiename, $uuid, time() + $secs, "/");
	$event_stage=intval($event_stage);

        echo $event_stage;
        echo  $tab;
	echo "candidate id: ".$candidate_id."</br>";
	echo "current time: ".$current_time."</br>";
	echo "IP: ".$ip."</br>";
	echo "uuid: ".$uuid."</br>";
	echo "month: ".$month."</br>";
	echo "year: ".$year."</br>";
	echo "date: ".$date."</br>";
	echo "event stage: ".$event_stage."</br>";
        // Insert vote into history table
        //$stmt = $conn->prepare("INSERT INTO `$tab` (candidate, time, ipaddress, mac_id, month, year, date, vote_stage) VALUES (?, ?, ?, ?, ?, ?, ?. ?)");
       	// $stmt->bind_param("sssssssi", $candidate_id, $current_time, $ip, $uuid, $month, $year, $date, $event_stage);
      	 // $stmt->execute();
       	// $stmt->close();
        echo "condition 4.1";
	/*
	try {
   	 $stmt = $conn->prepare("INSERT INTO `$tab` (candidate, time, ipaddress, mac_id, month, year, date, vote_stage) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
   	 $stmt->bind_param("sssssssi", $candidate_id, $current_time, $ip, $uuid, $month, $year, $date, $event_stage);
    
   	 if ($stmt->execute()) {
        // If insertion is successful
        echo "Record inserted successfully.";
    	} else {
        // If insertion fails
        throw new Exception("Failed to insert record: " . $stmt->error);
    	}
    
   	 $stmt->close();
	} catch (Exception $e) {
    	// Display error message
   	 echo $e->getMessage();
	}
	 */	
	/*
	$stmt = $conn->prepare("INSERT INTO `$tab`(candidate, time, ipaddress, mac_id, month, year, date, vote_stage, iplocation, ipregion,ip>
        $stmt->bind_param("sssssssissssss", $candidate_id, $current_time, $ip, $uuid, $month, $year, $date, $event_stage, $iplocation, $ipreg>
        $stmt->execute();
        $stmt->close();

	*/

	$stmt = $conn->prepare("INSERT INTO `$tab`(candidate, time, ipaddress, mac_id, month, year, date, vote_stage, iplocation, ipregion,ipcountry, latitude, longitude,candidate_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssssssissssss", $candidate_id, $current_time, $ip, $uuid, $month, $year, $date, $event_stage, $iplocation, $ipregion, $ipcountry, $latitude, $longitude, $candidate_name);
	$stmt->execute();
	$stmt->close();


        // Update vote count
        $stmt = $conn->prepare("UPDATE `$table_name` SET vote_count = vote_count + 1 WHERE candidate_id = ? AND eliminated = 0");
        $stmt->bind_param("s", $candidate_id);
        $stmt->execute();
        $stmt->close();
        echo "condition 4.2";
        // Update hit counter
        $stmt = $conn->prepare("SELECT id, date FROM hit_counter ORDER BY id DESC LIMIT 1");
        $stmt->execute();
        $stmt->bind_result($hit_id, $last_day);
        $stmt->fetch();
        $stmt->close();
        echo "date: ".$date;
        echo "Last day: ".$last_day;
        echo "condition 4.3";

        if ($date == $last_day) {
            $stmt = $conn->prepare("UPDATE hit_counter SET voted_today = voted_today + 1 WHERE id = ?");
            $stmt->bind_param("i", $hit_id);
            $stmt->execute();
            $stmt->close();
            echo "condition 4.4";
        }

        $_SESSION['success_vote'] = 1;
        $enc_id = base64_encode($id);
        header("Location: vote.php?id=" . $enc_id);
        exit;



    }
    
    
    
    
    
} else {

    $_SESSION['success_vote'] = 3;
    $enc_id = base64_encode($id);
    header("Location: vote.php?id=" . $enc_id);
    exit;
}

exit;
?>
