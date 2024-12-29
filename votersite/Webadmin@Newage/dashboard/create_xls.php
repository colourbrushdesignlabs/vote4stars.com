<?php
include("../database/db.php");
include("session/session.php");
$item=$_GET['item'];

if($item=="all")
{
	$sql="SELECT `youricon`,`iconsector`,`whyopted`,`yourname`,`yoursector`,`email`,`time` FROM `suggest_icon` ORDER BY `suggest_icon`.`id` DESC"; 
}
else if($item=="starred")
{
	$sql="SELECT `youricon`,`iconsector`,`whyopted`,`yourname`,`yoursector`,`email`,`time` FROM `suggest_icon` where `starred`=1 ORDER BY `suggest_icon`.`id` DESC"; 
}else
{
 echo "<script>location='index.php'</script>";	
}


date_default_timezone_set("Asia/Calcutta"); 
$datentime= date("d-m-Y h:i:s A");
$time=$datentime;


$filename = "suggestions_upto_".$time;  //your_file_name
$file_ending = "xls";   //file_extention

header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename".'.'.$file_ending);  
header("Pragma: no-cache"); 
header("Expires: 0");

$sep = "\t";


$resultt = $conn->query($sql);
while ($property = mysqli_fetch_field($resultt)) { //fetch table field name
    echo $property->name."\t";
}

print("\n");    

while($row = mysqli_fetch_row($resultt))  //fetch_table_data
{  
    $schema_insert = "";
    for($j=0; $j< mysqli_num_fields($resultt);$j++)
    {
        if(!isset($row[$j]))
            $schema_insert .= "NULL".$sep;
        elseif ($row[$j] != "")
            $schema_insert .= "$row[$j]".$sep;
        else
            $schema_insert .= "".$sep;
    }
	
    $schema_insert = str_replace($sep."$", "", $schema_insert);
    $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
    $schema_insert .= "\t";
    print(trim($schema_insert));
    print "\n";

}

?>