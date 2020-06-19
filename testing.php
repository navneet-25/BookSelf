<?php
date_default_timezone_set("Indian/Kerguelen");
$trackingid = date("jmY").rand(1,99999).date("his");
echo $trackingid;
?>