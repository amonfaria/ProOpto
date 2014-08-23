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
        <div id="demo-horizontal-menu">
            <ul id="std-menu-items">
                <li class="pure-menu-selected"><a href="#">Flickr</a></li>
                <li><a href="#">Messenger</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="#">Finance</a></li>
                <li>
                    <a href="#">Other</a>
                    <ul>
                        <li class="pure-menu-heading">More from Yahoo!</li>
                        <li class="pure-menu-separator"></li>
                        <li><a href="#">Autos</a></li>
                        <li><a href="#">Flickr</a></li>
                        <li><a href="#">Answers</a></li>
                        <li>
                            <a href="#">Even More</a>
                            <ul>
                                <li><a href="#">Horoscopes</a></li>
                                <li><a href="#">Games</a></li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">OMG</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
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