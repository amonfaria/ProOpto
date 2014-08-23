<head>
<!--[if lte IE 8]>
    <link rel="stylesheet" href="css/layouts/marketing-old-ie.css">
<![endif]-->
<!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="css/layouts/marketing.css">
<!--<![endif]-->

<script src="http://yui.yahooapis.com/3.3.0/build/yui/yui-min.js"></script>
</head>

<body class="yui3-skin-sam">

<div id="productsandservices" class="yui3-menu yui3-menu-horizontal"><!-- Bounding box -->
    <div class="yui3-menu-content"><!-- Content box -->
        <ul>
            <!-- Menu items -->
        </ul>
    </div>
</div>

</body>

<script>

//  Call the "use" method, passing in "node-menunav".  This will load the
//  script and CSS for the MenuNav Node Plugin and all of the required
//  dependencies.

YUI().use('node-menunav', function(Y) {

    //  Retrieve the Node instance representing the root menu
    //  (<div id="productsandservices">) and call the "plug" method
    //  passing in a reference to the MenuNav Node Plugin.

    var menu = Y.one("#productsandservices");

    menu.plug(Y.Plugin.NodeMenuNav);

});
</script>