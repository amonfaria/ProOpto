<?php
   include("main-header.php");

?>


<button class="hilang">Hilang!</button>
<div id="muncul-1">
<td><button id="muncul-1" type="button" data-toggle="tooltip" title="Negar Acesso" class="button-small-red-inverse pure-button red-tooltip"> hide me<i class="fa fa-times fa-lg"></i></button> </td>
    <td>oi </td>
    <td>dois </td>
    <td>tres</td>
    <td>quatro</td>
</div>
<button class="bukatutup">Muncul &amp; Hilang!</button>
<div id="target"></div>

<script>
$('#muncul-1').click(function() {
    $('#muncul-1').hide(500);
});
$('.hilang').click(function() {
    $('#target').hide(500);
});
$('.bukatutup').click(function() {
    $('#target').toggle('slow');
});
</script>