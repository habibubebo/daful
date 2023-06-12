"use strict";
$(function() {
	var f = $(".btn-page-block-custom");
	 f.length && f.on("click", function() {
		$.blockUI({
			message: '<div class="d-flex justify-content-center"><p class="mb-0">Mohon Sabar Menunggu...</p><br> <div class="sk-wave m-0"><div class="sk-rect sk-wave-rect"></div> <div class="sk-rect sk-wave-rect"></div> <div class="sk-rect sk-wave-rect"></div> <div class="sk-rect sk-wave-rect"></div> <div class="sk-rect sk-wave-rect"></div></div> </div>',
			timeout: 6e4,
			css: {
				backgroundColor: "transparent",
				color: "#fff",
				border: "0"
			},
			overlayCSS: {
				opacity: .5
			}
		})
	});
});