<?php
if(isset($_POST['keys'])) shell_exec('echo -n ' . $_POST['keys'] . ' > /dev/ttyS0');
//echo file_get_contents('/dev/ttyS0');
?>
