<?php
 
// Use in the "Post-Receive URLs" section of your GitHub repo.
 
if ( $_POST['payload'] ) {
  shell_exec( 'cd /usr/share/portal/login/proopto/ && git reset --hard HEAD && git pull' );
}
 
?>
