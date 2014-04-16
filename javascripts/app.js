(function(/*! Brunch !*/) {
  'use strict';

  var globals = typeof window !== 'undefined' ? window : global;
  if (typeof globals.require === 'function') return;

  var modules = {};
  var cache = {};

  var has = function(object, name) {
    return ({}).hasOwnProperty.call(object, name);
  };

  var expand = function(root, name) {
    var results = [], parts, part;
    if (/^\.\.?(\/|$)/.test(name)) {
      parts = [root, name].join('/').split('/');
    } else {
      parts = name.split('/');
    }
    for (var i = 0, length = parts.length; i < length; i++) {
      part = parts[i];
      if (part === '..') {
        results.pop();
      } else if (part !== '.' && part !== '') {
        results.push(part);
      }
    }
    return results.join('/');
  };

  var dirname = function(path) {
    return path.split('/').slice(0, -1).join('/');
  };

  var localRequire = function(path) {
    return function(name) {
      var dir = dirname(path);
      var absolute = expand(dir, name);
      return globals.require(absolute, path);
    };
  };

  var initModule = function(name, definition) {
    var module = {id: name, exports: {}};
    cache[name] = module;
    definition(module.exports, localRequire(name), module);
    return module.exports;
  };

  var require = function(name, loaderPath) {
    var path = expand(name, '.');
    if (loaderPath == null) loaderPath = '/';

    if (has(cache, path)) return cache[path].exports;
    if (has(modules, path)) return initModule(path, modules[path]);

    var dirIndex = expand(path, './index');
    if (has(cache, dirIndex)) return cache[dirIndex].exports;
    if (has(modules, dirIndex)) return initModule(dirIndex, modules[dirIndex]);

    throw new Error('Cannot find module "' + name + '" from '+ '"' + loaderPath + '"');
  };

  var define = function(bundle, fn) {
    if (typeof bundle === 'object') {
      for (var key in bundle) {
        if (has(bundle, key)) {
          modules[key] = bundle[key];
        }
      }
    } else {
      modules[bundle] = fn;
    }
  };

  var list = function() {
    var result = [];
    for (var item in modules) {
      if (has(modules, item)) {
        result.push(item);
      }
    }
    return result;
  };

  globals.require = require;
  globals.require.define = define;
  globals.require.register = define;
  globals.require.list = list;
  globals.require.brunch = true;
})();
require.register("application", function(exports, require, module) {
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

});

;require.register("initialize", function(exports, require, module) {
var application = require('application')

$(function() {
    application.initialize()
})

});

;require.register("lib/hover", function(exports, require, module) {
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

});

;require.register("lib/scroll_to", function(exports, require, module) {
module.exports = (function() {
	return function(nav_list){
		$(nav_list).localScroll({
				offset: {top: -10},
				hash: true
		});
	}

})();

});

;
//# sourceMappingURL=app.js.map