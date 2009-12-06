
function zeta_Collapsible( target, trigger ) {
	var me=this;

	this.collapsed = false;
	this.target = $(target);
	this.persistable = true;
	if ( !this.target ) return;

	if ( trigger ) {
		this.trigger = trigger;
	} else {
		// By default, the 1st child element is the trigger
		var children = this.target.childNodes;
		//if ( this.target.parentNode.tagName.toLowerCase() == 'table' ) {
			//children = this.target.getElementsByTagName( 'tr' );
		//}
		for ( var i=0; !this.trigger && i!=children.length; i++ ) {
			var elt=children[i];
			if ( elt.nodeType != 1 ) continue;
			this.trigger = elt;
		}
	}

	this.toggle = function ( evt, collapse ) {
		if ( !me.target ) return;

		if ( typeof collapse != 'undefined' ) me.collapsed = collapse;
		else me.collapsed = !me.collapsed;

		if ( me.collapsed ) Element.addClassName( me.target, "collapsed" );
		else Element.removeClassName( me.target, "collapsed" );
		if ( document.recalc ) document.recalc();
		if ( me.persistable ) me.persistState();
	}

	this.persistState = function () {
		if ( document.all ) return;
		var actual = Xoops.getCookie( "zeta_Collapsible" );
		var cookie = '';
		if ( actual ) {
			var ids = actual.split(",");
			for ( var i in ids ) {
				if ( ids[i] && (typeof ids[i] != 'function') && ids[i] != me.target.id ) {
					cookie = cookie + ids[i] + ",";
				}
			}
		}
		if ( me.collapsed )	cookie = cookie + me.target.id;
		Xoops.setCookie( "zeta_Collapsible", cookie, 48 );
	}
	this.reloadState = function () {
		if ( document.all ) return;
		var cookie = Xoops.getCookie( "zeta_Collapsible" );
		if ( cookie ) {
			var ids = cookie.split(",");
			for ( var i in ids ) {
				if ( ids[i] == me.target.id ) {
					me.toggle( null, true );
					return;
				}
			}
			me.toggle( null, false );
		}	
	}
	// Initialization
	if ( this.trigger ) {
		Element.addClassName( this.trigger, "trigger" );
		Event.observe( this.trigger, "click", this.toggle );
	}
	if ( this.persistable && this.target.id ) this.reloadState();
}

function initTheme() {
	var elts=document.getElementsByTagName( '*' );
	var n,c;
	for ( n = 0; n != elts.length; n++ ) {
		var classes = Element.classNames( elts[n] ).entries();
		for ( c = 0; c != classes.length; c++ ) {
			if ( classes[c].substr( 0, 5 ) == 'zeta_' ) {
				if ( window[classes[c]] ) {
					if ( !elts[n].widget ) elts[n].widget=new Array();
					elts[n].widget[ classes[c] ] = new window[classes[c]]( elts[n] );
				}
			}
		}
	}
	if ( $('xo-canvas-leftcolumn').widget.zeta_Collapsible.collapsed ) zeta_switchLeftCol();
}
Event.observe( window, 'load', initTheme );

function zeta_switchLeftCol() {
	var canvas = $('xo-canvas');
	var blocks = $('xo-canvas-leftcolumn').childNodes;
	var i;
	if ( Element.hasClassName( canvas, 'threecolumns-layout' ) ) {
		Element.removeClassName( canvas, 'threecolumns-layout' );
		Element.addClassName(  canvas, 'rightcolumn-layout' );
	} else {
		Element.removeClassName(  canvas, 'rightcolumn-layout' );
		Element.addClassName( canvas, 'threecolumns-layout' );
	}
}