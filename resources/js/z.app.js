(function(){
	$(document).ready(function() {
		setHelloContainerWidthAndCenter();
		setSkillContainerWidthAndLineheight();
		setWhatWorkViewsSameHeight();
		initArticleManager();
		setWowContainerWidthAndCenter();

		initFullpageJS();
		initWorkViewToggler();
	});

	//
	// fullPage.js - https://github.com/alvarotrigo/fullPage.js

	function initFullpageJS() {

		$('.btn-previous-wrapper').on("click", function() {
			$.fn.fullpage.moveSectionUp();
		});

		$('.btn-next-wrapper').on("click", function() {
			$.fn.fullpage.moveSectionDown();
		});

		$('#fullpage').fullpage({
			//Navigation
			anchors:['hello', 'who', 'what', 'wow'],

			//Scrolling
			css3: true,
			scrollingSpeed: 700,
			autoScrolling: true,
			fitToSection: true,
			scrollBar: false,
			easing: 'easeInOutCubic',
			easingcss3: 'ease',

			//Design
			controlArrows: true,
			verticalCentered: true,
			paddingTop: '0px',
			responsive: 0,

			//events
			onLeave: function(index, nextIndex, direction){},
			afterLoad: function(anchorLink, index){},
			afterRender: function(){},
			afterResize: function(){},
			afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
			onSlideLeave: function(anchorLink, index, slideIndex, direction){}
		});
	}

	// Set Hello-line width

	function setHelloContainerWidthAndCenter() {
		var helloWidth = $('#hello-container').find('p.font-size-h1').width();
		$('#hello-container').find('.content').width(helloWidth);
		$('#hello-container').find('p.name').width(helloWidth);
	}

	// Who? - About: Typewriter Text
	// typed.js - https://github.com/mattboldt/typed.js/

	$(function(){
		$("#personal-info").typed({
			strings: ["in training at <a href='https://format-d.com' target='_blank'>Format D</a>", "Second sentence."],
			typeSpeed: 60,
			startDelay: 0,
			backSpeed: 40,
			backDelay: 2200,
			loop: true
		});
	});

	// Set skills-left-width

	function setSkillContainerWidthAndLineheight() {
		var backendTitle = $('#who-container').find('.back-end .title'),
			frontendTitle = $('#who-container').find('.front-end .title'),
			designTitle = $('#who-container').find('.design .title'),

			frontendSkills = $('#who-container').find('.front-end .skill-title').length,
			backendSkills = $('#who-container').find('.back-end .skill-title').length,
			designSkills = $('#who-container').find('.design .skill-title').length,

			frontendTitleLineHeight = 19 * frontendSkills + (frontendSkills - 1) * 10,
			backendTitleLineHeight = 19 * backendSkills + (backendSkills - 1) * 10,
			designTitleLineHeight = 19 * designSkills + (designSkills - 1) * 10 ;

		var skillsWidth = backendTitle.width();
		frontendTitle.width(skillsWidth);
		designTitle.width(skillsWidth);

		frontendTitle.css("line-height", frontendTitleLineHeight + "px");
		backendTitle.css("line-height", backendTitleLineHeight + "px");
		designTitle.css("line-height", designTitleLineHeight + "px");
	}

	// Who? - Skills Help Toggler

	$("#who-container").find(".help-toggler").on("click", function() {
		$(this).next(".help-content").toggle();
	});

	// What? - Set same height

	function setWhatWorkViewsSameHeight() {
		var workViewHeight = $("#what-container").find("#work-featured").height();
		$("#what-container").find("#work-all").height(workViewHeight);
	}

	// What? - Toggle work view

	function initWorkViewToggler() {
		var activeWorkView = "work-featured";

		$("#what-container").find(".view-toggler").on("click", function() {
			var viewSelectorPressed = $(this).attr("id");

			if(viewSelectorPressed == "view-toggler-show-all" && activeWorkView != "work-all") {
				$("#what-container").find("#work-featured").hide();
				$("#what-container").find("#work-all").show();
				activeWorkView = "work-all";
				$("#what-container").find("div").toggleClass("active");
			} else if(viewSelectorPressed == "view-toggler-show-featured" && activeWorkView != "work-featured") {
				$("#what-container").find("#work-all").hide();
				$("#what-container").find("#work-featured").show();
				activeWorkView = "work-featured";
				$("#what-container").find("div").toggleClass("active");
			}
		});
	}

	// What: Load articles

	function initArticleManager() {
		var loadedArticle = [];

		$( document ).ready(function() {
			var selectedArticle = "redesign-web-comic-sans";
			if(jQuery.inArray(selectedArticle, loadedArticle)!==-1){
				showArticle(selectedArticle, false);
			} else {
				articleLoader(selectedArticle, showArticle(selectedArticle, true));
				loadedArticle.push(selectedArticle);
			}
		});

		$("#what-container").find(".item").on("click", function() {
			var selectedArticle = $(this).attr('id');
			if(jQuery.inArray(selectedArticle, loadedArticle)!==-1){
				showArticle(selectedArticle, false);
			} else {
				articleLoader(selectedArticle, showArticle(selectedArticle, true));
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

		function showArticle(id, newArticle) {
			var articleViewWrapper = $('#article-load-wrapper'),
				articleToShowID = id + "-view",
				articleToShow = $("#" + articleToShowID);

			hideArticle(articleToShowID);

			if(newArticle == true) {
				$(document).ajaxComplete(function(){
					articleViewController(articleToShowID);
					console.log("controller: " + articleToShow);

					$.fn.fullpage.setKeyboardScrolling(false);
					$.fn.fullpage.setAllowScrolling(false);
					$.fn.fullpage.setFitToSection(false);

					$(articleViewWrapper).show();
					$(articleToShow).show();
				});
			} else {
				articleViewController(articleToShowID);

				$.fn.fullpage.setKeyboardScrolling(false);
				$.fn.fullpage.setAllowScrolling(false);
				$.fn.fullpage.setFitToSection(false);

				$(articleViewWrapper).show();
				$(articleToShow).show();
			}
		}

		function hideArticle(exclude) {
			var articleViewWrapper = $('#article-load-wrapper'),
				articleToHide;

			if(exclude == "" || exclude == null) {
				articleToHide = articleViewWrapper.find('.detail-view-container');
				$(articleViewWrapper).hide();
			} else if(exclude && exclude != "" && exclude != null) {
				articleToHide = articleViewWrapper.find('.detail-view-container').not($(this).attr('id')==exclude);
			}

			$.fn.fullpage.setKeyboardScrolling(true);
			$.fn.fullpage.setAllowScrolling(true);
			$.fn.fullpage.setFitToSection(true);

			$(articleToHide).hide();
		}

		// What: Articles view

		function articleViewController(id) {
			if($('#' + id).find('.slider-container').length){
				console.log('#' + id + " has slider");
			} else {
				console.log('#' + id + " has NO slider");
			}

			$('#' + id).find('.btn-close-detailpage').on('click', function(){
				hideArticle("");
			});
		}
	}

	// Wow: Set container width

	function setWowContainerWidthAndCenter() {
		var wowWidth = $('#wow-container').find('.font-size-h2').width();
		$('#wow-container').find('.content').width(wowWidth);

		var headerWidth = $('#wow-container').find('.font-size-h1').width();
		$('#wow-container').find('.title-box').width(headerWidth);
	}
})();
