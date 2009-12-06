

var Xoops = {
	url: '',
	themeUrl: '',

	setCookie: function ( name, value, hours ) {
		var expires = "";
		if (hours) {
			var date = new Date();
			date.setTime( hours*3600*1000 + date.getTime() );
			expires = "; expires="+date.toGMTString();
		}
		document.cookie = name+"="+value+expires+"; path=/";
	},
	getCookie: function ( name ) {
		var nameEQ = name + "=";
		var ca = document.cookie.split(';');
		for(var i=0;i < ca.length;i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1,c.length);
			if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
		}
		return null;
	},
	deleteCookie: function ( name ) {
		this.setCookie( name, "", -1 );
	}
}
