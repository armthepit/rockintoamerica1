$(document).ready(function(){

	$("#home").click(function(){
		$("#pageHeader").html("Featured CDs").show();
		
	});	

	$("#latestarrivals").click(function(){
		$("#pageHeader").html("Latest Arrivals").show();
	});
		     
	$("#genre.submenu").click(function(){
		var genre = $(this).data('genre');
		$("#pageHeader").html(genre).show();
	});

	$("#artist.submenu").click(function(){
		var letter = $(this).data('artist');
		$("#pageHeader").html(letter).show();
	});

	function searchCds(searchValue) {
		// alert(searchValue);
		var url = "../php/latestarrivals.php";
		$.post(url, {searchValue: searchValue}, function(data) {
			alert(data);
		});
	}

});

