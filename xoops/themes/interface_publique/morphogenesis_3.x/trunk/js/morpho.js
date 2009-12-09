/*
 * Mor.pho.GEN.e.sis 3.0
 *
 * @package         themes
 * @since           2.4.x
 * @maintained      Afux <http://www.afux.org>
 *
 * @version         $Id
*/

/* text sizer */
	function fsize(size,unit,id){
	  var vfontsize = document.getElementById(id);
	  if(vfontsize){
	   vfontsize.style.fontSize = size + unit;
	  }
	}

var textsize = 1;
	function changetextsize(up){
	  if(up){
	   textsize = parseFloat(textsize)+0.05;
	  }else{
	   textsize =parseFloat(textsize)-0.05;
	  }
	}

/* show hide id */
	function showhide(id) {
	var elmt = document.getElementById(id);
	if (elmt) {
	  if(elmt.style.display=='block'){
		elmt.style.display='none';
	  }
	  else{
		  elmt.style.display='block';    
	  }
	}
	}
  
  /*------------------------------------------------------------

  --------------------------------------------------------------*/