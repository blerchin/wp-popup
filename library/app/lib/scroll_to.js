module.exports = (function() {
	return function(nav_list){
		$(nav_list).localScroll({
				offset: {top: -10},
				hash: true
		});
	}

})();
