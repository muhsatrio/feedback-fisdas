$(document).ready(function() {
	$(".page1").click(function() {
		$(".halaman1").fadeIn();
		$(".halaman2").hide();
		$(".halaman3").hide();
		$(".halaman4").hide();
		$(".halaman5").hide();
		$(".halaman6").hide();
		$(".halaman7").hide();
		$(".halaman8").hide();
		$(".halaman9").hide();
	});
	$(".page2").click(function() {
		$(".halaman1").hide();
		$(".halaman2").fadeIn();
		$(".halaman3").hide();
		$(".halaman4").hide();
		$(".halaman5").hide();
		$(".halaman6").hide();
		$(".halaman7").hide();
		$(".halaman8").hide();
		$(".halaman9").hide();
	});
	$(".page3").click(function() {
		$(".halaman1").hide();
		$(".halaman2").hide();
		$(".halaman3").fadeIn();
		$(".halaman4").hide();
		$(".halaman5").hide();
		$(".halaman6").hide();
		$(".halaman7").hide();
		$(".halaman8").hide();
		$(".halaman9").hide();
	});
	$(".page4").click(function() {
		$(".halaman1").hide();
		$(".halaman2").hide();
		$(".halaman3").hide();
		$(".halaman4").fadeIn();
		$(".halaman5").hide();
		$(".halaman6").hide();
		$(".halaman7").hide();
		$(".halaman8").hide();
		$(".halaman9").hide();
	});
	$(".page5").click(function() {
		$(".halaman1").hide();
		$(".halaman2").hide();
		$(".halaman3").hide();
		$(".halaman4").hide();
		$(".halaman5").fadeIn();
		$(".halaman6").hide();
		$(".halaman7").hide();
		$(".halaman8").hide();
		$(".halaman9").hide();
	});
	$(".page6").click(function() {
		$(".halaman1").hide();
		$(".halaman2").hide();
		$(".halaman3").hide();
		$(".halaman4").hide();
		$(".halaman5").hide();
		$(".halaman6").fadeIn();
		$(".halaman7").hide();
		$(".halaman8").hide();
		$(".halaman9").hide();
	});
	$(".page7").click(function() {
		$(".halaman1").hide();
		$(".halaman2").hide();
		$(".halaman3").hide();
		$(".halaman4").hide();
		$(".halaman5").hide();
		$(".halaman6").hide();
		$(".halaman7").fadeIn();
		$(".halaman8").hide();
		$(".halaman9").hide();
	});
	$(".page8").click(function() {
		$(".halaman1").hide();
		$(".halaman2").hide();
		$(".halaman3").hide();
		$(".halaman4").hide();
		$(".halaman5").hide();
		$(".halaman6").hide();
		$(".halaman7").hide();
		$(".halaman8").fadeIn();
		$(".halaman9").hide();
	});
	$(".page9").click(function() {
		$(".halaman1").hide();
		$(".halaman2").hide();
		$(".halaman3").hide();
		$(".halaman4").hide();
		$(".halaman5").hide();
		$(".halaman6").hide();
		$(".halaman7").hide();
		$(".halaman8").hide();
		$(".halaman9").fadeIn();
	});
	$(".button-2015-cowo").click(function() {
		$(".cowo-2015").show();
		$(".cewe-2015").hide();
		$(".cowo-2016").hide();
		$(".cewe-2016").hide();
	});
	$(".button-2015-cewe").click(function() {
		$(".cowo-2015").hide();
		$(".cewe-2015").show();
		$(".cowo-2016").hide();
		$(".cewe-2016").hide();
	});
	$(".button-2016-cowo").click(function() {
		$(".cowo-2015").hide();
		$(".cewe-2015").hide();
		$(".cowo-2016").show();
		$(".cewe-2016").hide();
	});
	$(".button-2016-cewe").click(function() {
		$(".cowo-2015").hide();
		$(".cewe-2015").hide();
		$(".cowo-2016").hide();
		$(".cewe-2016").show();
	});
	$(".button-logout").click(function() {
		window.location.href = 'logout';
	});
});