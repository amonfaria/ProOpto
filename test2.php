<html>
<script language="javascript">
function fun(str)
{
alert(str);
}
</script>
<body>
<form name="f1">
<input type="text" name="txt" size=20>
<input type="radio" name="r1" value="radio1" onClick="fun(this.value)">
</form>
</body>
</html>