<?php
/* This link will begin the page tab installation */
$YOUR_APP_ID = '';//supplied by facebook after registering app
$YOUR_URL = '';
?>
<a href="http://www.facebook.com/dialog/pagetab?app_id=<?php echo $YOUR_APP_ID; ?>&next=<?php echo $YOUR_URL; ?>">Install App</a>