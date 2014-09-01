<html>
<script language="javascript">
function fun(str)
{

    $.ajax ({
        url: "test3.php",
        data: { action : str }, //optional
        success: function( result ) {
            //do something after you receive the result
        }

}
</script>
<body>
<button type="button" name="submit" value="test1" onClick="fun(this.value)">Test1</button>
<button type="button" name="submit" value="test2" onClick="fun(this.value)">Test2</button>

</body>
</html>