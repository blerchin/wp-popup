// Application bootstrapper.
Application = {
    initialize: function() {
				var hover, local_scroll;
				hover = require("lib/hover");
				local_scroll = require("lib/scroll_to");
				$(function(){
					hover( ".artist-list li", ".artist-statement" );
					local_scroll( ".menu-main-menu-container");
				});

		}
}


module.exports = Application
