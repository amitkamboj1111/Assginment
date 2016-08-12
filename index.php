<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/styles.css">
<script src="css/jquery-3.1.0.min.js"></script>
</head>
<body>

<section class="main">
	 <form class="search" method="get" >
		 <input autocomplete="off" id = "categoryId" data-id = "" type="text" placeholder="Search category" />
		 <ul class="results" >
			<li id = "categoryId0" class ="categoryliclass cl" data-id = "" ><a href="index.html"></a></li>
			<li id = "categoryId1" class ="categoryliclass cl" data-id = "" ><a href="index.html"></a></li>
	 		<li id = "categoryId2" class ="categoryliclass cl" data-id = "" ><a href="index.html"></a></li>
         	<li id = "categoryId3" class ="categoryliclass cl" data-id = "" ><a href="index.html"></a></li>
         	<li id = "categoryId4" class ="categoryliclass cl" data-id = "" ><a href="index.html"></a></li>
		 </ul>
	 </form>
</section>

<section class="main">
	 <form class="search" method="get" >
		 <input autocomplete="off" id = "productId" data-id = "" type="text" placeholder="Search product" />
		 <ul class="results" >
			<li id = "productId0" class ="productliclass cl" data-id = "" ><a href="index.html"></a></li>
			<li id = "productId1" class ="productliclass cl" data-id = "" ><a href="index.html"></a></li>
	 		<li id = "productId2" class ="productliclass cl" data-id = "" ><a href="index.html"></a></li>
         	<li id = "productId3" class ="productliclass cl" data-id = "" ><a href="index.html"></a></li>
         	<li id = "productId4" class ="productliclass cl" data-id = "" ><a href="index.html"></a></li>
		 </ul>
	 </form>
</section>

<div id = "productInfo" style="text-align:center;margin-top:30px;">
    <span>Product Name:</span><span id = "productName"></span>
    <br>
    <span>Product Price:</span><span id = "productPrice"></span>
</div>

</body>
<script type="text/javascript">

$('#productInfo').hide();
$('.categoryliclass').hide();
$('.productliclass').hide();

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

	results = $.parseJSON(results);

	for (var i = 0; i < results.length; i++) {
		if (results[i].hasOwnProperty('categoryId')) {
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
	$('#categoryId').val($(event.target).text());
    $('.categoryliclass').hide();
});

</script>

<script type="text/javascript">
	var typingTimer2;                //timer identifier
var doneTypingInterval2 = 300;  //time in ms, 5 second for example
var $input = $('#productId');

//on keyup, start the countdown
$input.on('keyup', function () {
  clearTimeout(typingTimer2);
  typingTimer = setTimeout(doneTyping2, doneTypingInterval2);
});

//on keydown, clear the countdown 
$input.on('keydown', function () {
  clearTimeout(typingTimer2);
});

function hideOldResults2() {
	for (var i = 0; i < 5; i++) {
		$('#productId'+i).hide();
	}
}
function showNewResults2(results) {

	results = $.parseJSON(results);

	for (var i = 0; i < results.length; i++) {
		if (results[i].hasOwnProperty('productId')) {
			$('#productId'+i).data('id' , results[i]['productId']);
			$('#productId'+i).text((results)[i]['productName']);
			$('#productId'+i).show();
		}
		else
			break;
	}
}
//user is "finished typing," do something
function doneTyping2 () {
    var data;
    if($('#categoryId').val()){
        data = {
            text : $('#productId').val(),
            categoryId : $('#categoryId').data('id')
        };
    }
    else {
        data = {
            text : $('#productId').val(),
        };
    }
  $.ajax({url: "/backend/products.php", 
		data: data, 
		success: function(result){
        hideOldResults2();
        showNewResults2(result);
    }});
}

function printProductInfo(results) {
    results = $.parseJSON(results);
    $('#productName').text(results[0]['productName']);
    $('#productPrice').text(results[0]['price']);
    $('#productInfo').show();
}

$('.productliclass').click(function(event) {
	var text = $(event.target).data('id');
	$('#productId').data('id',text);
	$('#productId').val($(event.target).text());
    $('.productliclass').hide();
    $.ajax({url: "/backend/productInfo.php", 
        data: {productId : text}, 
        success: function(result){
        printProductInfo(result);
    }});
});

$(document).click(function(){
  $(".cl").hide();
});

$(".cl").click(function(e){
  e.stopPropagation();
});

</script>

</html>
