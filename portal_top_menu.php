
<div class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">Pro Opto</a>
<div class="yui3-skin-sam">
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
</div>
    </div>
</div>

<script>
YUI({
    classNamePrefix: 'pure'
}).use('gallery-sm-menu', function (Y) {

    var horizontalMenu = new Y.Menu({
        container         : '#demo-horizontal-menu',
        sourceNode        : '#std-menu-items',
        orientation       : 'horizontal',
        hideOnOutsideClick: false,
        hideOnClick       : false
    });

    horizontalMenu.render();
    horizontalMenu.show();

});
</script>