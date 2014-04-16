exports.config =
	# Edit the next line to change default build path.
	paths:
		public: '../'

	files:
		javascripts:
	# Defines what file will be generated with `brunch generate`.
			
			# Describes how files will be compiled & joined together.
			# Available formats:
			# * 'outputFilePath'
			# * map of ('outputFilePath': /regExp that matches input path/)
			# * map of ('outputFilePath': function that takes input path)
			joinTo:
				'javascripts/app.js': /^app/
				'javascripts/vendor.js': /^(vendor|bower_components)/
				'test/javascripts/test.js': /^test[\\/](?!vendor)/
				'test/javascripts/test-vendor.js': /^test[\\/](?=vendor)/
						 
		stylesheets:
				defaultExtension: 'less'
				joinTo:
					'stylesheets/app.css': /^(app|vendor)/
					'test/stylesheets/test.css': /^test/
				order:
					before: [
						'vendor/styles/bootstrap/bootstrap.css',
						'app/styles/base.scss'
					]
	
	# Settings of web server that will run with `brunch watch [--server]`.
	# server:
	#    # Path to your server node.js module.
	#    # If it's commented-out, brunch will use built-in express.js server.
	#    path: 'server.coffee'
	#    port: 3333
	#    
	#    # Run even without `--server` option?
	#    run: yes
