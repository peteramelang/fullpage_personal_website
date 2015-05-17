//
// onScreen - https://github.com/silvestreh/onScreen

$('elements').onScreen({
	container: window,
	direction: 'vertical',
	doIn: function() {
		// Do something to the matched elements as they come in
	},
	doOut: function() {
		// Do something to the matched elements as they get off scren
	},
	tolerance: 0,
	throttle: 50,
	toggleClass: 'onScreen',
	lazyAttr: null,
	lazyPlaceholder: 'someImage.jpg',
	debug: false
});