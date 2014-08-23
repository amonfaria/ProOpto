<?php
 
// Use in the "Post-Receive URLs" section of your GitHub repo.
echo shell_exec("/usr/bin/git pull 2>&1"); 
?>success
