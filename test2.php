<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CSS Newbie Example: Show/Hide Content</title>
<script language="javascript" type="text/javascript">
function showHide(shID) {
   if (document.getElementById(shID)) {
      if (document.getElementById(shID+'-show').style.display != 'none') {
         document.getElementById(shID+'-show').style.display = 'none';
         document.getElementById(shID).style.display = 'block';
      }
      else {
         document.getElementById(shID+'-show').style.display = 'inline';
         document.getElementById(shID).style.display = 'none';
      }
   }
}
</script>
<style type="text/css">
   /* This CSS is just for presentational purposes. */
   body {
      font-size: 62.5%;
      background-color: #777; }
   #wrap {
      font: 1.3em/1.3 Arial, Helvetica, sans-serif;
      width: 30em;
      margin: 0 auto;
      padding: 1em;
      background-color: #fff; }
   h1 {
      font-size: 200%; }

   /* This CSS is used for the Show/Hide functionality. */
   .more {
      display: none;
      border-top: 1px solid #666;
      border-bottom: 1px solid #666; }
   a.showLink, a.hideLink {
      text-decoration: none;
      color: #36f;
      padding-left: 8px;
      background: transparent url(down.gif) no-repeat left; }
   a.hideLink {
      background: transparent url(up.gif) no-repeat left; }
   a.showLink:hover, a.hideLink:hover {
      border-bottom: 1px dotted #36f; }
</style>
</head>
<body>
   <div id="wrap">
      <h1>Show/Hide Content</h1>
      <p><a href="/showhide-content-css-javascript/">Go back to the main article.</a> This example shows you how to create a show/hide container using a couple of links, a div, a few lines of CSS, and some JavaScript to manipulate our CSS. Just click on the "see more" link at the end of this paragraph to see the technique in action, and be sure to view the source to see how it all works together. <a href="#" id="example-show" class="showLink" onclick="showHide('example');return false;">See more.</a></p>
      <div id="example" class="more">
         <p>Congratulations! You've found the magic hidden text! Clicking the link below will hide this content again.</p>
         <p><a href="#" id="example-hide" class="hideLink" onclick="showHide('example');return false;">Hide this content.</a></p>
      </div>
   </div>

</body>
</html>