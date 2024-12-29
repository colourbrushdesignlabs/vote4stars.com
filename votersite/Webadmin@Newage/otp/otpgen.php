<?php

function otpgen()
{
$num_str = sprintf("%06d", mt_rand(1, 999999));
return($num_str);

}










?>