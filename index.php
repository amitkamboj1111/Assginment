<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	/* * Copyright (c) 2012 Thibaut Courouble
 * Licensed under the MIT License
   ================================================== */

body {
    background: #f7f7f7;
    color: #404040;
    font-family: 'HelveticaNeue', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-size: 13px;
    font-weight: normal;
    line-height: 20px;
}

a {
    color: #1e7ad3;
    text-decoration: none;
}

a:hover { text-decoration: underline }

.container, .main {
    width: 640px;
    margin-left: auto;
    margin-right: auto;
    height: 300px;
}

.main { margin-top: 50px }

input {
    font-family: 'HelveticaNeue', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    font-size: 13px;
    color: #555860;
}

.search {
    position: relative;
    margin: 0 auto;
    width: 300px;
}

.search input {
    height: 26px;
    width: 100%;
    padding: 0 12px 0 25px;
    background: white url("http://cssdeck.com/uploads/media/items/5/5JuDgOa.png") 8px 6px no-repeat;
    border-width: 1px;
    border-style: solid;
    border-color: #a8acbc #babdcc #c0c3d2;
    border-radius: 13px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -ms-box-sizing: border-box;
    -o-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-box-shadow: inset 0 1px #e5e7ed, 0 1px 0 #fcfcfc;
    -moz-box-shadow: inset 0 1px #e5e7ed, 0 1px 0 #fcfcfc;
    -ms-box-shadow: inset 0 1px #e5e7ed, 0 1px 0 #fcfcfc;
    -o-box-shadow: inset 0 1px #e5e7ed, 0 1px 0 #fcfcfc;
    box-shadow: inset 0 1px #e5e7ed, 0 1px 0 #fcfcfc;
}

.search input:focus {
    outline: none;
    border-color: #66b1ee;
    -webkit-box-shadow: 0 0 2px rgba(85, 168, 236, 0.9);
    -moz-box-shadow: 0 0 2px rgba(85, 168, 236, 0.9);
    -ms-box-shadow: 0 0 2px rgba(85, 168, 236, 0.9);
    -o-box-shadow: 0 0 2px rgba(85, 168, 236, 0.9);
    box-shadow: 0 0 2px rgba(85, 168, 236, 0.9);
}

.search input:focus + .results { display: block }

.search .results {
    /*display: none;*/
    position: absolute;
    top: 35px;
    left: 0;
    right: 0;
    z-index: 10;
    padding: 0;
    margin: 0;
    border-width: 1px;
    border-style: solid;
    border-color: #cbcfe2 #c8cee7 #c4c7d7;
    border-radius: 3px;
    background-color: #fdfdfd;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fdfdfd), color-stop(100%, #eceef4));
    background-image: -webkit-linear-gradient(top, #fdfdfd, #eceef4);
    background-image: -moz-linear-gradient(top, #fdfdfd, #eceef4);
    background-image: -ms-linear-gradient(top, #fdfdfd, #eceef4);
    background-image: -o-linear-gradient(top, #fdfdfd, #eceef4);
    background-image: linear-gradient(top, #fdfdfd, #eceef4);
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    -ms-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    -o-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}

.search .results li { display: block }

.search .results li:first-child { margin-top: -1px }

.search .results li:first-child:before, .search .results li:first-child:after {
    display: block;
    content: '';
    width: 0;
    height: 0;
    position: absolute;
    left: 50%;
    margin-left: -5px;
    border: 5px outset transparent;
}

.search .results li:first-child:before {
    border-bottom: 5px solid #c4c7d7;
    top: -11px;
}

.search .results li:first-child:after {
    border-bottom: 5px solid #fdfdfd;
    top: -10px;
}

.search .results li:first-child:hover:before, .search .results li:first-child:hover:after { display: none }

.search .results li:last-child { margin-bottom: -1px }

.search .results a {
    display: block;
    position: relative;
    margin: 0 -1px;
    padding: 6px 40px 6px 10px;
    color: #808394;
    font-weight: 500;
    text-shadow: 0 1px #fff;
    border: 1px solid transparent;
    border-radius: 3px;
}

.search .results a span { font-weight: 200 }

.search .results a:before {
    content: '';
    width: 18px;
    height: 18px;
    position: absolute;
    top: 50%;
    right: 10px;
    margin-top: -9px;
    background: url("http://cssdeck.com/uploads/media/items/7/7BNkBjd.png") 0 0 no-repeat;
}

.search .results a:hover {
    text-decoration: none;
    color: #fff;
    text-shadow: 0 -1px rgba(0, 0, 0, 0.3);
    border-color: #2380dd #2179d5 #1a60aa;
    background-color: #338cdf;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #59aaf4), color-stop(100%, #338cdf));
    background-image: -webkit-linear-gradient(top, #59aaf4, #338cdf);
    background-image: -moz-linear-gradient(top, #59aaf4, #338cdf);
    background-image: -ms-linear-gradient(top, #59aaf4, #338cdf);
    background-image: -o-linear-gradient(top, #59aaf4, #338cdf);
    background-image: linear-gradient(top, #59aaf4, #338cdf);
    -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
    -moz-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
    -ms-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
    -o-box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
    box-shadow: inset 0 1px rgba(255, 255, 255, 0.2), 0 1px rgba(0, 0, 0, 0.08);
}

:-moz-placeholder {
    color: #a7aabc;
    font-weight: 200;
}

::-webkit-input-placeholder {
    color: #a7aabc;
    font-weight: 200;
}

.lt-ie9 .search input { line-height: 26px }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>

<!--<form style = "text-align:center">
  Category:
  <input id="categoryId" align="center" type="text" name="categoryname">

  <ul class="results" >
	<li><a href="index.html">Search Result #1<br /><span>Description...</span></a></li>
	<li><a href="index.html">Search Result #2<br /><span>Description...</span></a></li>
	<li><a href="index.html">Search Result #3<br /><span>Description...</span></a></li>
    <li><a href="index.html">Search Result #4</a></li>
   </ul>
  
  Product:
  <input type="text" name="productname">
</form>-->


<section class="main">
	 <form class="search" method="get" action="index.html" >
		 <input autocomplete="off" id = "categoryId" data-id = "" type="text" name="q" placeholder="Search..." />
		 <ul class="results" >
			<li id = "categoryId0" class ="categoryliclass" data-id = "" ><a href="index.html">Search Result #1</a></li>
			<li id = "categoryId1" class ="categoryliclass" data-id = "" ><a href="index.html">Search Result #2</a></li>
	 		<li id = "categoryId2" class ="categoryliclass" data-id = "" ><a href="index.html">Search Result #3</a></li>
         	<li id = "categoryId3" class ="categoryliclass" data-id = "" ><a href="index.html">Search Result #4</a></li>
         	<li id = "categoryId4" class ="categoryliclass" data-id = "" ><a href="index.html">Search Result #5</a></li>
		 </ul>
	 </form>
</section>

<section class="main">
	 <form class="search" method="get" action="index.html" >
		 <input autocomplete="off" id = "productId" data-id = "" type="text" name="q" placeholder="Search..." />
		 <ul class="results" >
			<li id = "productId0" class ="productliclass" data-id = "" ><a href="index.html">Search Result #1</a></li>
			<li id = "productId1" class ="productliclass" data-id = "" ><a href="index.html">Search Result #2</a></li>
	 		<li id = "productId2" class ="productliclass" data-id = "" ><a href="index.html">Search Result #3</a></li>
         	<li id = "productId3" class ="productliclass" data-id = "" ><a href="index.html">Search Result #4</a></li>
         	<li id = "productId4" class ="productliclass" data-id = "" ><a href="index.html">Search Result #5</a></li>
		 </ul>
	 </form>
</section>


</body>
<script type="text/javascript">
	var typingTimer;                //timer identifier
var doneTypingInterval = 300;  //time in ms, 5 second for example
var $input = $('#categoryId');

//on keyup, start the countdown
$input.on('keyup', function () {
  clearTimeout(typingTimer);
  typingTimer = setTimeout(doneTyping, doneTypingInterval);
});

//on keydown, clear the countdown 
$input.on('keydown', function () {
  clearTimeout(typingTimer);
});

function hideOldResults() {
	for (var i = 0; i < 5; i++) {
		$('#categoryId'+i).hide();
	}
}
function showNewResults(results) {

//alert(results);
	results = $.parseJSON(results);

	for (var i = 0; i < results.length; i++) {
		if (results[i].hasOwnProperty('categoryId')) {
			//alert(results[i]['categoryId']);
			$('#categoryId'+i).data('id' , results[i]['categoryId']);
			$('#categoryId'+i).text((results)[i]['categoryName']);
			$('#categoryId'+i).show();
		}
		else
			break;
	}
}

//user is "finished typing," do something
function doneTyping () {
  $.ajax({url: "/backend/categories.php", 
		data: {text : $('#categoryId').val()}, 
		success: function(result){
        hideOldResults();
        showNewResults(result);
    }});
}

$('.categoryliclass').click(function(event) {
	var text = $(event.target).data('id');
	$('#categoryId').data('id',text);
	//alert($('#categoryId').data('id'));
	$('#categoryId').val($(event.target).text());
});

</script>

<script type="text/javascript">
	var typingTimer;                //timer identifier
var doneTypingInterval = 300;  //time in ms, 5 second for example
var $input = $('#productId');

//on keyup, start the countdown
$input.on('keyup', function () {
  clearTimeout(typingTimer);
  typingTimer = setTimeout(doneTyping, doneTypingInterval);
});

//on keydown, clear the countdown 
$input.on('keydown', function () {
  clearTimeout(typingTimer);
});

function hideOldResults() {
	for (var i = 0; i < 5; i++) {
		$('#productId'+i).hide();
	}
}
function showNewResults(results) {

//alert(results);
	results = $.parseJSON(results);

	for (var i = 0; i < results.length; i++) {
		if (results[i].hasOwnProperty('productId')) {
			//alert(results[i]['categoryId']);
			$('#productId'+i).data('id' , results[i]['productId']);
			$('#productId'+i).text((results)[i]['productName']);
			$('#productId'+i).show();
		}
		else
			break;
	}
}

//user is "finished typing," do something
function doneTyping () {
  $.ajax({url: "/backend/categories.php", 
		data: {text : $('#categoryId').val()}, 
		success: function(result){
        hideOldResults();
        showNewResults(result);
    }});
}

$('.categoryliclass').click(function(event) {
	var text = $(event.target).data('id');
	$('#categoryId').data('id',text);
	alert($('#categoryId').data('id'));
	$('#categoryId').val($(event.target).text());
});

</script>

</html>
