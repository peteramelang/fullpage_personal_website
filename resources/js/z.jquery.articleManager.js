/**
 * articleManager 2.6.5
 * https://github.com/alvarotrigo/fullPage.js
 * MIT licensed
 *
 * Copyright (C) 2015 alvarotrigo.com - A project by Alvaro Trigo
 */

(function(){
	var loadedArticle = [];

	$( document ).ready(function() {
		var selectedArticle = "redesign-web-comic-sans";
		if(jQuery.inArray(selectedArticle, loadedArticle)!==-1){
			initArticle(selectedArticle, false);
		} else {
			articleLoader(selectedArticle, initArticle(selectedArticle, true));
			loadedArticle.push(selectedArticle);
		}
	});

	$("#what-container").find(".item").on("click", function() {
		var selectedArticle = $(this).attr('id');
		if(jQuery.inArray(selectedArticle, loadedArticle)!==-1){
			initArticle(selectedArticle, false);
		} else {
			articleLoader(selectedArticle, initArticle(selectedArticle, true));
			loadedArticle.push(selectedArticle);
		}
	});

	function articleLoader(id, callback) {
		$.ajax({
			type: "GET",
			url: "../articles/" + id + ".php",
			data: { },
			success: function(data){
				$('#article-load-wrapper').append(data);
			}
		});
	}

	function initArticle(id, newArticle) {
		var articleViewWrapper = $('#article-load-wrapper'),
			articleToShowID = id + "-view",
			articleToShow = $("#" + articleToShowID);

		hideArticle(articleToShowID);

		if(newArticle == true) {
			$(document).ajaxComplete(function(){
				articleViewController(articleToShowID, showArticle(articleViewWrapper, articleToShow));

				$.fn.fullpage.setKeyboardScrolling(false);
				$.fn.fullpage.setAllowScrolling(false);
				$.fn.fullpage.setFitToSection(false);
			});
		} else {
			articleViewController(articleToShowID, showArticle(articleViewWrapper, articleToShow));

			$.fn.fullpage.setKeyboardScrolling(false);
			$.fn.fullpage.setAllowScrolling(false);
			$.fn.fullpage.setFitToSection(false);
		}
	}

	function showArticle(articleViewWrapper, articleToShow) {
		$(articleViewWrapper).fadeIn();
		$(articleToShow).fadeIn();

		if($(articleToShow).find('.slider-container').length) {
			// slider
			console.log("do");
			$(articleToShow).find('.slider').slippry({
				auto: false,
				pager: false,
				autohover: true
			});
		}
	}

	function hideArticle(exclude) {
		var articleViewWrapper = $('#article-load-wrapper'),
			articleToHide;

		if(exclude == "" || exclude == null) {
			articleToHide = articleViewWrapper.find('.detail-view-container');
			$(articleViewWrapper).fadeOut();
		} else if(exclude && exclude != "" && exclude != null) {
			articleToHide = articleViewWrapper.find('.detail-view-container').not($(this).attr('id')==exclude);
		}

		$.fn.fullpage.setKeyboardScrolling(true);
		$.fn.fullpage.setAllowScrolling(true);
		$.fn.fullpage.setFitToSection(true);

		$(articleToHide).fadeOut();
	}

	// What: Articles view

	function articleViewController(id, callback) {
		$('#' + id).find('.btn-close-detailpage').on('click', function(){
			hideArticle("");
		});
	}
})();