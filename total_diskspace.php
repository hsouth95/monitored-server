<?php
//makes a csv of disk space used, and total disk space

//total disk space
$totalBytes = disk_total_space("/");
$diskSize = $totalBytes/1024/1024/1024;
$diskSize = number_format($diskSize, 2);

//available disk space
$availableBytes = disk_free_space("/");
$availableDiskSize = $availableBytes/1024/1024/1024;
$availableDiskSize = number_format($availableDiskSize, 2);

//used disk space
$usedDiskSpace = $diskSize - $availableDiskSize;

$filewriter = fopen("diskspace.csv", "w");
fwrite($filewriter,"$usedDiskSpace,$diskSize");
fclose($filewriter);

?>
