<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="noie"> <!--<![endif]-->
<head>
<title>Turn.js: DEMO</title>
<meta name="viewport" content="width=1200" />
<meta name="keywords" content="page,flip,pages,effect,flipbook,flipboard,jquery,html5,book,magazine,newspaper,ipad,iphone,android,ios" />
<meta name="description" content="Turn.js makes a beautiful page turning effect using HTML5 and jQuery" />
<link rel="icon" type="image/png" href="images/favicon.png" />
<link type="text/css" rel="stylesheet" href="css/jquery.ui.css" >
<link type="text/css" rel="stylesheet" href="css/default.css" >
<script type="text/javascript" src="js/all.js"></script>
<script type="text/javascript" src="js/hash.js"></script>
<script type="text/javascript" src="js/turn.min.js"></script>
<script type="text/javascript" src="js/zoom.min.js"></script>
<script type="text/javascript" src="js/bookshelf.js"></script>
</head>
<body>
<!-- preview show-samples sample-steve-jobs show-bar-->
<div class="splash">
	<div class="center">
    	<div class="bookshelf">
            <div class="shelf">
                <div class="row-1">
                    <div class="loc">
                        <div> <div class="sample thumb1" sample="steve-jobs"></div> </div>
                    </div>
                </div>
            </div>
    	</div>
        <!-- Samples-->
        <div class="samples">
            <div class="bar">
                <div class="share">
                    <i class="icon table-contents" title="Table of contents"></i>
                    <i class="icon zoom-in" title="Zoom in"></i>
                    <i class="icon share-facebook" title="Share on facebook"></i>
                    <i class="icon share-twitter" title="Share on Twitter"></i>
                    <i class="icon share-plus" title="Share on G+"></i>
                    <i class="icon share-pinterest" title="Share on Pinterest"></i>
                </div>
                <a class="icon quit"></a>
            </div>
            <div id="book-wrapper">
                <div id="book-zoom"></div>
            </div>
            <div id="slider-bar" class="turnjs-slider">
                <div id="slider"></div>
            </div>
    
        </div>
        <!-- End samples -->
    </div>
    <div class="gradient"></div>
</div>
<script type="text/javascript">
yepnope({
	test : Modernizr.csstransforms,
	nope : ['js/turn.html4.min.js', 'css/jquery.ui.html4.css']
});

$('#sample-viewer a').click(function() {
	$(this).hide();
	yepnope({
		test : Modernizr.csstransforms,
		load: ['js/basic.js', 'css/basic.css'],
		nope: 'css/basic.html4.css?'+Math.round(Math.random()*100)
	});
});

$('.loc .sample').click(function() {
	if($(this).attr("sample") != undefined && $(this).attr("sample") != '') {
		window.location.hash = '#samples/'+$(this).attr("sample")+'/';
	}
});
</script>
</body>
</html>
