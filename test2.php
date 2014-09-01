<html>
<script language="javascript">
function fun(str)
{
alert(str);
}
</script>
<body>
<form name="f1">

<button type="button" name="submit" value="test1" onClick="fun(this.value)">
</form>
<form name="f1">
<button type="button" name="submit" value="test2" onClick="fun(this.value)">
</form>
</body>
</html>