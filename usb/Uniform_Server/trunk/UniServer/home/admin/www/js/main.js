/*
####################################################
# Name: The Uniform Server JS 1.0
# Developed By: The Uniform Server Development Team
# Modified Last By: Olajide Olaolorun (empirex) 
# Web: http://www.uniformserver.com
####################################################
*/

function h(t)
{
	if(typeof last == "undefined")
		last=document.anchors[0];
		
	last.className='n';
	t.className='nh';
	t.blur();
	last=t;
}

function externalRel() {
    rels = document.getElementsByTagName("a");
    for (i=0;i<rels.length;i++) {
        if (rels[i].getAttribute("rel") == "external") {
            rels[i].onclick = function() {window.open(this.href);}
        }
    }
}