var ftf = new ftf();
                     
                        // This would be the actual instance name. Look at the var name above.
                        ftf.instance_name 	= "ftf"; 
                     
                        // We currently only have three sizes. "large" = 48x48, "regular" = 32x32, "small" = 16x16. 
                        // All other values will default to regular.
                        ftf.icon_size 	 	= "regular";
                     
                        // This will write the HTML to a specific object on the page. 
                        ftf.output_to 	 	= "ftf_link"; 
                     
                        /*
                    	This feature is a Version 2.0 feature. It is the upgrade of the previous localization option. 
	This must be a valid JSON file with the appropriate language translations. You can find the English version here:
                        http://freethefoxes.googlecode.com/svn/trunk/lang/en.json
                        You must upload the language JSON file to your website for use. (ie. ftf.lang_external = "includes/cs.json";)
                        Please refer to our localization section below for all the languages already translated.
                    	*/
                    	ftf.lang_external	 = ""; 
	/*
                    	If users browser has a 3(failed) rating.
                    	Would you like the script to automatically popup onload?
                    	The default value is true.
                    	*/	
                    	ftf.onload 		= true;
  
                        /*
                    	You can download our default css here: http://code.freethefoxes.com/latest.css
                    	*/
                    	ftf.css_external 	= "http://demo.xoofoo.org/themes/demo/js/freethefoxes.css";
	/*
                        The following are the three different approval levels you may set to specific browsers:
                        1 = Pass/Recommended
                        2 = Pass/Acceptable
                        3 = Fail
	Any other number will return an error. 
	The following are the default values for each browser but can be easily changed by 
                        resetting the values using the following method.
                        */
                        ftf.rate = {
                            "opera" : 1,
                            "chrome" : 1,
                            "safari" : 1,
                            "firefox" : 2,
                            "ie6" : 3,		
                            "ie7" : 3,		
                            "ie8" : 2	
                        };
                    	/*
                    	The following are the default values for each browser icon. Version 3.0 requires you to host your own icons.
                    	You can download a zip of all the icons above. 
                    	*/
                    	ftf.icons = {
							"firefox" : "http://demo.xoofoo.org/themes/demo/js/icons/firefox.gif",
                            "chrome" : 	"http://demo.xoofoo.org/themes/demo/js/icons/chrome.gif",
                            "opera" : 	"http://demo.xoofoo.org/themes/demo/js/icons/opera.gif",
                            "safari" : 	"http://demo.xoofoo.org/themes/demo/js/icons/safari.gif",
                            "ie6" : 	"http://demo.xoofoo.org/themes/demo/js/icons/ie6.gif",		
                            "ie7" : 	"http://demo.xoofoo.org/themes/demo/js/icons/ie7.gif",		
                            "ie8" : 	"http://demo.xoofoo.org/themes/demo/js/icons/ie8.gif"	
                    
	};		
                        // Execute
                        ftf.init(
                        );