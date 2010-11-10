// ----------------------------------------------------------------------------
// markItUp!
// ----------------------------------------------------------------------------
// Copyright (C) 2008 Jay Salvat
// http://markitup.jaysalvat.com/
// ----------------------------------------------------------------------------
mySettings = {	
	markupSet:  [	
	{	name:'Email selection', 
		className:'email', 
		beforeInsert:function(h) { 
				if (h.altKey) {
					email = prompt("Email:");
				} else {
					email = "";	
				}
				subject = prompt("Subject:", "From markItUp! editor");
				document.location="mailto:"+email+"?subject="+escape(subject)+"&body="+escape(h.selection); 
			} 
		}
	]
}