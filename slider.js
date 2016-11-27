/* 
 * Image Slider Script
 * Written by: Eric Beets
 */
 
$(document).ready(function ($) {  
	var slideCount = $("#slider ul li").length;
	var slideWidth = 850;
	var sliderUlWidth = slideCount * slideWidth;
	var currentSlide = 1;
	$('#slider ul').css({ width: sliderUlWidth});
    function moveLeft() {
		if(currentSlide==1){
			currentSlide = slideCount;
			$('#slider ul').animate({
				marginLeft: "-"+(currentSlide-1)*850+"px"
			}, 200*(slideCount-1));
		} else {
			currentSlide--;
			$('#slider ul').animate({
				marginLeft: "+=850"
			}, 200);
		}
		resetButtons();
    }
    function moveRight() {
        if(currentSlide==slideCount){
			currentSlide = 1;
			$('#slider ul').animate({
				marginLeft: "-"+(currentSlide-1)*850+"px"
			}, 200*(slideCount-1));
		} else {
			currentSlide++;
			$('#slider ul').animate({
				marginLeft: "-=850"
			}, 200);
		}
		resetButtons();
    }
	function resetButtons (){
		$("#slider #buttons").html("");
		for(var i = 1;i<=slideCount;i++){
			if(i==currentSlide)
				$("#slider #buttons").append("<i id=\""+i+"\"class=\"slidebutton fa fa-circle\"></i>");
			else
				$("#slider #buttons").append("<i id=\""+i+"\"class=\"slidebutton fa fa-circle-thin\"></i>");
		}
		enableButtonClick();
	}
	resetButtons();
	var interval = setInterval(function () {moveRight();}, 5000);
    $('a#control_prev').click(function () {
		clearInterval(interval);
        moveLeft();
		interval = setInterval(function () {moveRight();}, 5000);
    });

    $('a#control_next').click(function () {
		clearInterval(interval);
        moveRight();
		interval = setInterval(function () {moveRight();}, 5000);
    });
	function enableButtonClick() {
		$('#slider .slidebutton').click(function(event) { buttonClick(event); });
	}
	function buttonClick (event) {
		gotoslide = event.target.id;
		if(gotoslide!=currentSlide){
			clearInterval(interval);
			$('#slider ul').animate({
				marginLeft: "-"+(gotoslide-1)*850+"px"
			}, 200*Math.abs(gotoslide-currentSlide));
			currentSlide = gotoslide;
			resetButtons();
			interval = setInterval(function () {moveRight();}, 5000);
		} else {
			clearInterval(interval);
			interval = setInterval(function () {moveRight();}, 5000);
		}
	}
});    