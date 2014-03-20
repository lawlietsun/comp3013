/*quick search*/
$(document).ready( function() {
			$(".result").hide();

$("#key").keyup( function(event){
	var key = $("#key").val();

	if( key != 0){
		$.ajax({
		type: "POST",
		data: ({key: key}),
		url:"quicksearch.php",
		success: function(response) {
		$(".result").slideDown().html(response); 
		}
		})
		
		}else{
		
		$(".result").slideUp();
		$(".result").val("");
		}
 }) 

 /* Advanced Search */
	
$("#advanced").click( function() {

	var title = $("#title").val();
	var author = $("#author").val();
	var subject = $("#subject").val();
	var start = $("#start_year").val();
	var end = $("#end_year").val();
	if ( (title == "") || (author == "") || (subject == "") ){
	
	$(".errormessage").fadeIn();
		
	}else{
		$('.book_loading').show();
		$('#advanced').attr('disabled', true);
		
		$(".errormessage").fadeOut();
		$.ajax({
		type: "POST",
		data: ({title: title, author: author, subject: subject, start: start, end: end}),
		url:"app/content/search/advanced/result.php",
		success: function(response) {
		
		$('#advanced').removeAttr('disabled');
		$(".advancedresult").html(response);
		$('.book_loading').slideUp();
		}
		})
	}
});

/* BY YEAR */
$("#by-year").click( function() {

	var start = $("#start_year").val();
	var end = $("#end_year").val();
	if ( (start == "") || (end == "") ){
	
	$(".errormessage").fadeIn();
		
	}else{
		$('.book_loading').show();
		$(".errormessage").fadeOut();
		$.ajax({
		type: "POST",
		data: ({start: start, end: end}),
		url:"app/content/search/results/by_year.php",
		success: function(response) {
		$(".year-result").html(response);
			$('.book_loading').slideUp();
		}
		})
	}
});
	
/* BY title */
$("#by-title").click( function() {

	var title = $("#title").val();
	
	if ( title == "" ){
	
	$(".errormessage").fadeIn();

	}else{
		$('.book_loading').show();
		$(".errormessage").fadeOut();
		$.ajax({
		type: "POST",
		data: ({title: title}),
		url:"app/content/search/results/title.php",
		success: function(response) {
		$(".title-result").html(response);
		$('.book_loading').slideUp();
			$('.book_loading').slideUp();
		}
		})
	}
});
	/* BY subject */$("#by-subject").click( function() {
	var subject = $("#subject").val();	
	
	if ( subject == "" ){		
	
	$(".errormessage").fadeIn();
	
	}else{		
	
	$(".errormessage").fadeOut();	
	$('.book_loading').show();
	$.ajax({	
	
	type: "POST",	
	
	data: ({subject: subject}),
	
	url:"app/content/search/results/subject.php",	
	
	success: function(response) {	
	
	$(".title-result").html(response);	
		$('.book_loading').slideUp();
	}	
	
	})	
	
	}});	

	
	/* BY accession */$("#by-accession").click( function() {
		$(".title-result").hide();
	var accession = $("#accession").val();	
	
			if ( accession == "" ){
			
			$(".errormessage").fadeIn();	
			
			}else{	
			
			$(".errormessage").fadeOut();	
			$('.book_loading').show();
			$.ajax({	
			
			type: "POST",	
			
			data: ({accession: accession}),
			
			url:"app/content/search/results/accession.php",
			
			success: function(response) {		
			
			$(".title-result").show().html(response);		
				$('.book_loading').slideUp();
			}		
			
			})	
			
			}
			
			});
	
	
/* BY Author */
$("#by-author").click( function() {

	var author = $("#author").val();
	
	if ( author == "" ){
	
	$(".errormessage").fadeIn();
		
	}else{
		$('.book_loading').show();
		$(".errormessage").fadeOut();
		$.ajax({
		type: "POST",
		data: ({author: author}),
		url:"app/content/search/results/author.php",
		success: function(response) {
		$(".author-result").html(response);
			$('.book_loading').slideUp();
		}
		})
	}
});
		
 
}) 