module.exports = (function() {
	var $obj, activeClass, duration, makeInactive, makeActive, inner;
	activeClass = 'active';
	duration = 400;

	makeInactive = function(e){
		$obj.removeClass( activeClass );
		return false;
	}

	makeActive = function(){
		var $statement,
				$el = $(this);
		makeInactive();
		$statement = $el.find(inner);
		console.log( $statement);
		//$statement.mouseout( makeInactive )
		$statement.click( makeInactive );
		$el.addClass( activeClass ).animate(duration);
	}

	return function(item_selector, inner_selector, options) {
		console.log ("setting hover")
		$obj = $(item_selector);
		inner = inner_selector;
		$obj.click( makeActive );
		//$obj.hover( makeActive );
	}
})()
