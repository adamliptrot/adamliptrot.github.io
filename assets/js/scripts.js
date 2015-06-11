$(document).ready(function(){	
	$("#article article h1").each(function() {
	        var wordArray = $(this).text().split(" ");
	        if(wordArray.length>1){
	        	wordArray[wordArray.length-2] += "&nbsp;" + wordArray[wordArray.length-1];
	       		wordArray.pop();
	        	$(this).html(wordArray.join(" "));
	        }
	});
	
	$("#archive #wall").masonry({ columnWidth: 50, itemSelector: 'article' });
	
	$("#archive article h1 a").each(function() {
	        var wordArray = $(this).text().split(" ");
	        if(wordArray.length>1){
	        	wordArray[wordArray.length-2] += "&nbsp;" + wordArray[wordArray.length-1];
	       		wordArray.pop();
	        	$(this).html(wordArray.join(" "));
	        }
	});
});