/* 
 * Navbar Script
 * Written by: Eric Beets
 */
 
$(document).ready(function(e) {
	$("header nav .current").first().attr("id","current");
	$("header nav ul").hover(function(e){
		$("header nav #current").toggleClass("current");
	},function(e){
		$("header nav #current").toggleClass("current");
	});
});