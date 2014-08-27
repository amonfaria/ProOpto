<?php
include("main-header.php");
?>
<button id="button" type="button">hello</button>

<script language="javascript">
$("#button").click(function() { 
    // assumes element with id='button'
    $("#newpost").toggle();
});
</script>