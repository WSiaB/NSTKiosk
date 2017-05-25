<?php
header("Refresh:90; url=page2.php");
$command="/sbin/ifconfig wlan0 | grep 'inet addr:' | cut -d: -f2 | awk '{ print $1}'";
$localIP = exec ($command);
?>
<html>
<body>
<iframe src="https://app.smartsheet.com/b/publish?EQBCT=622a2c8c8881490b8007c1d84bc14653" width=100% height=97%></iframe>
NOTE: Changes may take up to 5 minutes to appear. IP:<?php echo $localIP; ?>.
</body>
</html>
