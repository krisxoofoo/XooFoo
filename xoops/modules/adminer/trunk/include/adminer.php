<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://php.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
*/error_reporting(6135);$ve=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($ve){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$b){$Rd=filter_input_array(constant("INPUT$b"),FILTER_UNSAFE_RAW);if($Rd){$$b=$Rd;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAETMzEREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD///8BwP//AYB//wGAf/8BgH//AYB//wGAf/8BgH//AYAB/wGAAf8BgAH/AcAA/wH+AP8B/wD/Af+B/wH///8B");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tr:hover td,tr:hover th{background:#ddf;}pre{margin:1em 0 0;}.version{color:#777;font-size:67%;}.js .hidden{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript");?>
document.body.className='js';
function
toggle(id){var
el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return
true;}
function
cookie(assign,days,params){var
date=new
Date();date.setDate(date.getDate()+days);document.cookie=assign+'; expires='+date+(params||'');}
function
verifyVersion(protocol){cookie('adminer_version=0',1);var
script=document.createElement('script');script.src=protocol+'://www.adminer.org/version.php';document.body.appendChild(script);}
function
formCheck(el,name){var
elems=el.form.elements;for(var
i=0;i<elems.length;i++){if(name.test(elems[i].name)){elems[i].checked=el.checked;}}}
function
formUncheck(id){document.getElementById(id).checked=false;}
function
formChecked(el,name){var
checked=0;var
elems=el.form.elements;for(var
i=0;i<elems.length;i++){if(name.test(elems[i].name)&&elems[i].checked){checked++;}}return
checked;}
function
tableClick(event){var
el=event.target||event.srcElement;while(!/^tr$/i.test(el.tagName)){if(/^(table|a|input|textarea)$/i.test(el.tagName)){return;}el=el.parentNode;}el=el.firstChild.firstChild;el.click&&el.click();el.onclick&&el.onclick();}
function
setHtml(id,html){var
el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html;}}}
function
selectAddRow(field){var
row=field.parentNode.cloneNode(true);var
selects=row.getElementsByTagName('select');for(var
i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[[0-9]+/,'$&1');selects[i].selectedIndex=0;}var
inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[[0-9]+/,'$&1');inputs[0].value='';inputs[0].className='';}field.parentNode.parentNode.appendChild(row);field.onchange=function(){};}
function
selectDblClick(td,event,text){var
pos=event.rangeOffset;var
value=(td.firstChild.firstChild?td.firstChild.firstChild.data:(td.firstChild.alt?td.firstChild.alt:td.firstChild.data));var
input=document.createElement(text?'textarea':'input');input.name=td.id;input.value=(value=='\u00A0'||td.getElementsByTagName('i').length?'':value);
input.style.width=(td.clientWidth-14)+'px';
if(text){var
rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}if(document.selection){var
range=document.selection.createRange();range.moveToPoint(event.x,event.y);var
range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}td.innerHTML='';td.appendChild(input);input.focus();input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var
range=document.selection.createRange();range.moveStart('character',pos);range.select();}td.ondblclick=function(){};}

function
bodyLoad(version,protocol){var
jushRoot=protocol + '://www.adminer.org/static/';var
script=document.createElement('script');script.src=jushRoot+'jush.js';script.onload=function(){if(window.jush){
jush.create_links=' target="_blank"';jush.urls.sql[0]='http://dev.mysql.com/doc/refman/'+version+'/en/$key';jush.urls.sql_sqlset=jush.urls.sql[0];jush.urls.sqlset[0]=jush.urls.sql[0];jush.urls.sqlstatus[0]=jush.urls.sql[0];jush.urls.pgsql[0]='http://www.postgresql.org/docs/'+version+'/static/$key';jush.urls.pgsql_pgsqlset=jush.urls.pgsql[0];jush.urls.pgsqlset[0]='http://www.postgresql.org/docs/'+version+'/static/runtime-config-$key.html#GUC-$1';jush.style(jushRoot+'jush.css');if(window.jushLinks){jush.custom_links=jushLinks;}jush.highlight_tag('pre',0);jush.highlight_tag('code');}};script.onreadystatechange=function(){if(/^(loaded|complete)$/.test(script.readyState)){script.onload();}};document.body.appendChild(script);}
function
selectValue(select){return
select.value||select.options[select.selectedIndex].text;}
function
formField(form,name){for(var
i=0;i<form.length;i++){if(form[i].name==name){return
form[i];}}}
function
typePassword(el,disable){try{el.type=(disable?'text':'password');}catch(e){}}var
added='.',rowCount;
function
reEscape(s){return
s.replace(/[\[\]\\^$*+?.(){|}]/,'\\$&');}
function
idfEscape(s){return
s.replace(/`/,'``');}
function
editingNameChange(field){var
name=field.name.substr(0,field.name.length-7);var
type=formField(field.form,name+'[type]');var
opts=type.options;var
table=reEscape(field.value);var
column='';var
match;if((match=/(.+)_(.+)/.exec(table))||(match=/(.*[a-z])([A-Z].*)/.exec(table))){
table=match[1];column=match[2];}var
plural='(?:e?s)?';var
tabCol=table+plural+'_?'+column;var
re=new
RegExp('(^'+idfEscape(table+plural)+'`'+idfEscape(column)+'$'
+'|^'+idfEscape(tabCol)+'`'
+'|^'+idfEscape(column+plural)+'`'+idfEscape(table)+'$'
+')|`'+idfEscape(tabCol)+'$'
,'i');var
candidate;
for(var
i=opts.length;i--;){if(!/`/.test(opts[i].value)){
if(i==opts.length-2&&candidate&&!match[1]&&name=='fields[1]'){
return
false;}break;}if(match=re.exec(opts[i].value)){if(candidate){return
false;}candidate=i;}}if(candidate){type.selectedIndex=candidate;type.onchange();}}
function
editingAddRow(button,allowed,focus){if(allowed&&rowCount>=allowed){return
false;}var
match=/([0-9]+)(\.[0-9]+)?/.exec(button.name);var
x=match[0]+(match[2]?added.substr(match[2].length):added)+'1';var
row=button.parentNode.parentNode;var
row2=row.cloneNode(true);var
tags=row.getElementsByTagName('select');var
tags2=row2.getElementsByTagName('select');for(var
i=0;i<tags.length;i++){tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);tags2[i].selectedIndex=tags[i].selectedIndex;}tags=row.getElementsByTagName('input');tags2=row2.getElementsByTagName('input');var
input=tags2[0];
for(var
i=0;i<tags.length;i++){if(tags[i].name=='auto_increment_col'){tags2[i].value=x;tags2[i].checked=false;}tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);if(/\[(orig|field|comment|default)/.test(tags[i].name)){tags2[i].value='';}if(/\[(has_default)/.test(tags[i].name)){tags2[i].checked=false;}}tags[0].onchange=function(){editingNameChange(tags[0]);};row.parentNode.insertBefore(row2,row.nextSibling);if(focus){input.onchange=function(){editingNameChange(input);};input.focus();}added+='0';rowCount++;return
true;}
function
editingRemoveRow(button){var
field=formField(button.form,button.name.replace(/drop_col(.+)/,'fields$1[field]'));field.parentNode.removeChild(field);button.parentNode.parentNode.style.display='none';return
true;}var
lastType='';
function
editingTypeChange(type){var
name=type.name.substr(0,type.name.length-6);var
text=selectValue(type);for(var
i=0;i<type.form.elements.length;i++){var
el=type.form.elements[i];if(el.name==name+'[length]'&&!((/(char|binary)$/.test(lastType)&&/(char|binary)$/.test(text))||(/(enum|set)$/.test(lastType)&&/(enum|set)$/.test(text)))){el.value='';}if(lastType=='timestamp'&&el.name==name+'[has_default]'&&/timestamp/i.test(formField(type.form,name+'[default]').value)){el.checked=false;}if(el.name==name+'[collation]'){el.className=(/(char|text|enum|set)$/.test(text)?'':'hidden');}if(el.name==name+'[unsigned]'){el.className=(/(int|float|double|decimal)$/.test(text)?'':'hidden');}if(el.name==name+'[on_delete]'){el.className=(/`/.test(text)?'':'hidden');}}}
function
editingLengthFocus(field){var
td=field.parentNode;if(/(enum|set)$/.test(selectValue(td.previousSibling.firstChild))){var
edit=document.getElementById('enum-edit');var
val=field.value;edit.value=(/^'.+','.+'$/.test(val)?val.substr(1,val.length-2).replace(/','/g,"\n").replace(/''/g,"'"):val);td.appendChild(edit);field.style.display='none';edit.style.display='inline';edit.focus();}}
function
editingLengthBlur(edit){var
field=edit.parentNode.firstChild;var
val=edit.value;field.value=(/\n/.test(val)?"'"+val.replace(/\n+$/,'').replace(/'/g,"''").replace(/\n/g,"','")+"'":val);field.style.display='inline';edit.style.display='none';}
function
columnShow(checked,column){var
trs=document.getElementById('edit-fields').getElementsByTagName('tr');for(var
i=0;i<trs.length;i++){trs[i].getElementsByTagName('td')[column].className=(checked?'':'hidden');}}
function
partitionByChange(el){var
partitionTable=/RANGE|LIST/.test(selectValue(el));el.form['partitions'].className=(partitionTable||!el.selectedIndex?'hidden':'');document.getElementById('partition-table').className=(partitionTable?'':'hidden');}
function
partitionNameChange(el){var
row=el.parentNode.parentNode.cloneNode(true);row.firstChild.firstChild.value='';el.parentNode.parentNode.parentNode.appendChild(row);el.onchange=function(){};}
function
foreignAddRow(field){var
row=field.parentNode.parentNode.cloneNode(true);var
selects=row.getElementsByTagName('select');for(var
i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/\]/,'1$&');selects[i].selectedIndex=0;}field.parentNode.parentNode.parentNode.appendChild(row);field.onchange=function(){};}
function
indexesAddRow(field){var
row=field.parentNode.parentNode.cloneNode(true);var
spans=row.getElementsByTagName('span');for(var
i=0;i<spans.length-1;i++){row.removeChild(spans[i]);}var
selects=row.getElementsByTagName('select');for(var
i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/indexes\[[0-9]+/,'$&1');selects[i].selectedIndex=0;}var
input=row.getElementsByTagName('input')[0];input.name=input.name.replace(/indexes\[[0-9]+/,'$&1');input.value='';field.parentNode.parentNode.parentNode.appendChild(row);field.onchange=function(){};}
function
indexesAddColumn(field){var
column=field.parentNode.cloneNode(true);var
select=column.getElementsByTagName('select')[0];select.name=select.name.replace(/\]\[[0-9]+/,'$&1');select.selectedIndex=0;var
input=column.getElementsByTagName('input')[0];input.name=input.name.replace(/\]\[[0-9]+/,'$&1');input.value='';field.parentNode.parentNode.appendChild(column);field.onchange=function(){};}var
that,x,y,em,tablePos;
function
schemaMousedown(el,event){that=el;x=event.clientX-el.offsetLeft;y=event.clientY-el.offsetTop;}
function
schemaMousemove(ev){if(that!==undefined){ev=ev||event;var
left=(ev.clientX-x)/
em;var
top=(ev.clientY-y)/
em;var
divs=that.getElementsByTagName('div');var
lineSet={};for(var
i=0;i<divs.length;i++){if(divs[i].className=='references'){var
div2=document.getElementById((divs[i].id.substr(0,4)=='refs'?'refd':'refs')+divs[i].id.substr(4));var
ref=(tablePos[divs[i].title]?tablePos[divs[i].title]:[div2.parentNode.offsetTop
/
em,0]);var
left1=-1;var
isTop=true;var
id=divs[i].id.replace(/^ref.(.+)-.+/,'$1');if(divs[i].parentNode!=div2.parentNode){left1=Math.min(0,ref[1]-left)-1;divs[i].style.left=left1+'em';divs[i].getElementsByTagName('div')[0].style.width=-left1+'em';var
left2=Math.min(0,left-ref[1])-1;div2.style.left=left2+'em';div2.getElementsByTagName('div')[0].style.width=-left2+'em';isTop=(div2.offsetTop+ref[0]*em>divs[i].offsetTop+top*em);}if(!lineSet[id]){var
line=document.getElementById(divs[i].id.replace(/^....(.+)-[0-9]+$/,'refl$1'));var
shift=ev.clientY-y-that.offsetTop;line.style.left=(left+left1)+'em';if(isTop){line.style.top=(line.offsetTop+shift)/
em+'em';}if(divs[i].parentNode!=div2.parentNode){line=line.getElementsByTagName('div')[0];line.style.height=(line.offsetHeight+(isTop?-1:1)*shift)/
em+'em';}lineSet[id]=true;}}}that.style.left=left+'em';that.style.top=top+'em';}}
function
schemaMouseup(ev){if(that!==undefined){ev=ev||event;tablePos[that.firstChild.firstChild.firstChild.data]=[(ev.clientY-y)/
em,(ev.clientX-x)/
em];that=undefined;var
s='';for(var
key
in
tablePos){s+='_'+key+':'+Math.round(tablePos[key][0]*10000)/
10000+'x'+Math.round(tablePos[key][1]*10000)/
10000;}cookie('adminer_schema='+encodeURIComponent(s.substr(1)),30,'; path="'+location.pathname+location.search+'"');}}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;}}exit;}function
connection(){global$c;return$c;}function
idf_unescape($J){$wb=substr($J,-1);return
str_replace($wb.$wb,$wb,substr($J,1,-1));}function
escape_string($b){global$c;return
substr($c->quote($b),1,-1);}function
bracket_escape($J,$ff=false){static$ie=array(':'=>':1',']'=>':2','['=>':3');return
strtr($J,($ff?array_flip($ie):$ie));}function
h($H){return
htmlspecialchars($H,ENT_QUOTES);}function
nbsp($H){return(trim($H)!=""?h($H):"&nbsp;");}function
nl_br($H){return
str_replace("\n","<br>",$H);}function
checkbox($h,$p,$Fa,$je="",$ke=""){static$T=0;$T++;$f="<input type='checkbox'".($h?" name='$h' value='".h($p)."'":"").($Fa?" checked":"").($ke?" onclick=\"$ke\"":"")." id='checkbox-$T'>";return($je!=""?"<label for='checkbox-$T'>$f".h($je)."</label>":$f);}function
optionlist($Oc,$wf=null,$Ue=false){$f="";foreach($Oc
as$Ha=>$v){if(is_array($v)){$f.='<optgroup label="'.h($Ha).'">';}foreach((is_array($v)?$v:array($Ha=>$v))as$e=>$b){$f.='<option'.($Ue||is_string($e)?' value="'.h($e).'"':'').(($Ue||is_string($e)?(string)$e:$b)===$wf?' selected':'').'>'.h($b);}if(is_array($v)){$f.='</optgroup>';}}return$f;}function
html_select($h,$Oc,$p="",$Gb=true){if($Gb){return"<select name='".h($h)."'".(is_string($Gb)?" onchange=\"$Gb\"":"").">".optionlist($Oc,$p)."</select>";}$f="";foreach($Oc
as$e=>$b){$f.="<label><input type='radio' name='".h($h)."' value='".h($e)."'".($e==$p?" checked":"").">".h($b)."</label>";}return$f;}function
textarea($h,$p,$xa=10,$mb=80){echo"<textarea name='$h' rows='$xa' cols='$mb' style='width: 98%;' spellcheck='false'>".h($p)."</textarea>";}function
ini_bool($sf){$b=ini_get($sf);return(eregi('^(on|true|yes)$',$b)||(int)$b);}function
get_vals($j,$G=0){global$c;$f=array();$g=$c->query($j);if(is_object($g)){while($a=$g->fetch_row()){$f[]=$a[$G];}}return$f;}function
get_key_vals($j,$L=null){global$c;if(!is_object($L)){$L=$c;}$f=array();$g=$L->query($j);while($a=$g->fetch_row()){$f[$a[0]]=$a[1];}return$f;}function
unique_array($a,$I){foreach($I
as$y){if(ereg("PRIMARY|UNIQUE",$y["type"])){$f=array();foreach($y["columns"]as$e){if(!isset($a[$e])){continue
2;}$f[$e]=$a[$e];}return$f;}}$f=array();foreach($a
as$e=>$b){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$e)){$f[$e]=$b;}}return$f;}function
where($t){$f=array();foreach((array)$t["where"]as$e=>$b){$f[]=idf_escape(bracket_escape($e,1)).(ereg('\\.',$b)?" LIKE ".exact_value(addcslashes($b,"%_")):" = ".exact_value($b));}foreach((array)$t["null"]as$e){$f[]=idf_escape($e)." IS NULL";}return
implode(" AND ",$f);}function
where_check($b){parse_str($b,$uf);return
where($uf);}function
where_link($l,$G,$p,$qf="="){return"&where%5B$l%5D%5Bcol%5D=".urlencode($G)."&where%5B$l%5D%5Bop%5D=".urlencode($qf)."&where%5B$l%5D%5Bval%5D=".urlencode($p);}function
cookie($h,$p){global$dc;$qc=array($h,(ereg("\n",$p)?"":$p),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$dc);if(version_compare(PHP_VERSION,'5.2.0')>=0){$qc[]=true;}return
call_user_func_array('setcookie',$qc);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($e){return$_SESSION[$e][DRIVER][SERVER][$_GET["username"]];}function
set_session($e,$b){$_SESSION[$e][DRIVER][SERVER][$_GET["username"]]=$b;}function
auth_url($Fb,$E,$N){global$ga;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ga))."|username|".session_name()),$k);return"$k[1]?".(SID&&!$_COOKIE?SID."&":"").($Fb!="server"||$E!=""?urlencode($Fb)."=".urlencode($E)."&":"")."username=".urlencode($N).($k[2]?"&$k[2]":"");}function
redirect($ka,$va=null){if(isset($va)){restart_session();$_SESSION["messages"][]=$va;}if(isset($ka)){header("Location: ".($ka!=""?$ka:"."));exit;}}function
query_redirect($j,$ka,$va,$Jc=true,$zf=true,$we=false){global$c,$n,$q;if($zf){$we=!$c->query($j);}$Gd="";if($j){$Gd=$q->messageQuery($j);}if($we){$n=error().$Gd;return
false;}if($Jc){redirect($ka,$va.$Gd);}return
true;}function
queries($j=null){global$c;static$na=array();if(!isset($j)){return
implode(";\n",$na);}$na[]=$j;return$c->query($j);}function
apply_queries($j,$F,$xf='table'){foreach($F
as$i){if(!queries("$j ".$xf($i))){return
false;}}return
true;}function
queries_redirect($ka,$va,$Jc){return
query_redirect(queries(),$ka,$va,$Jc,false,!$Jc);}function
remove_from_uri($Wa=""){return
substr(preg_replace("~(?<=[?&])($Wa".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($aa,$kf){return" ".($aa==$kf?$aa+1:'<a href="'.h(remove_from_uri("page").($aa?"&page=$aa":"")).'">'.($aa+1)."</a>");}function
get_file($e,$Be=false){$qa=$_FILES[$e];if(!$qa||$qa["error"]){return$qa["error"];}return
file_get_contents($Be&&ereg('\\.gz$',$qa["name"])?"compress.zlib://$qa[tmp_name]":($Be&&ereg('\\.bz2$',$qa["name"])?"compress.bzip2://$qa[tmp_name]":$qa["tmp_name"]));}function
upload_error($n){$Ae=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($n?lang(0).($Ae?" ".lang(1,$Ae):""):lang(2));}function
odd($f=' class="odd"'){static$l=0;if(!$f){$l=-1;}return($l++%
2?$f:'');}function
is_utf8($b){return(preg_match('~~u',$b)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$b));}function
shorten_utf8($H,$Z=80,$Df=""){if(!preg_match("(^([\t\r\n -\x{FFFF}]{0,$Z})($)?)u",$H,$k)){preg_match("(^([\t\r\n -~]{0,$Z})($)?)",$H,$k);}return
h($k[1]).$Df.(isset($k[2])?"":"<i>...</i>");}function
friendly_url($b){return
preg_replace('~[^a-z0-9_]~i','-',$b);}function
hidden_fields($eb,$of=array()){while(list($e,$b)=each($eb)){if(is_array($b)){foreach($b
as$Ha=>$v){$eb[$e."[$Ha]"]=$v;}}elseif(!in_array($e,$of)){echo'<input type="hidden" name="'.h($e).'" value="'.h($b).'">';}}}function
hidden_fields_get(){echo(SID&&!$_COOKIE?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($i){$f=array();foreach(foreign_keys($i)as$_){foreach($_["source"]as$b){$f[$b][]=$_;}}return$f;}function
enum_input($x,$h,$d,$p){preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$ja);foreach($ja[1]as$l=>$b){$b=stripcslashes(str_replace("''","'",$b));$Fa=(is_int($p)?$p==$l+1:(is_array($p)?in_array($l+1,$p):$p===$b));echo" <label><input type='$x' name='$h' value='".($l+1)."'".($Fa?' checked':'').'>'.h($b).'</label>';}}function
input($d,$p,$O){global$S,$q,$A;$h=h(bracket_escape($d["field"]));echo"<td class='function'>";$X=(isset($_GET["select"])?array("orig"=>lang(3)):array())+$q->editFunctions($d);if($d["type"]=="enum"){echo
nbsp($X[""])."<td>".($X["orig"]?"<label><input type='radio' name='fields[$h]' value='-1' checked><i>$X[orig]</i></label> ":""),$q->editInput($_GET["edit"],$d," name='fields[$h]'",$p);enum_input("radio","fields[$h]",$d,$p);}else{$fb=0;foreach($X
as$e=>$b){if($e===""||!$b){break;}$fb++;}$Gb=($fb?" onchange=\"var f = this.form['function[".addcslashes($h,"\r\n'\\")."]']; if ($fb > f.selectedIndex) f.selectedIndex = $fb;\"":"");$Ob=" name='fields[$h]'$Gb";echo(count($X)>1?html_select("function[$h]",$X,!isset($O)||in_array($O,$X)?$O:""):nbsp(reset($X))).'<td>';$_e=$q->editInput($_GET["edit"],$d,$Ob,$p);if($_e!=""){echo$_e;}elseif($d["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$ja);foreach($ja[1]as$l=>$b){$b=stripcslashes(str_replace("''","'",$b));$Fa=(is_int($p)?($p>>$l)&1:in_array($b,explode(",",$p),true));echo" <label><input type='checkbox' name='fields[$h][$l]' value='".(1<<$l)."'".($Fa?' checked':'')."$Gb>".h($b).'</label>';}}elseif(ereg('binary|blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$h'$Gb>";}elseif(ereg('text|lob',$d["type"])){echo"<textarea ".($A!="sqlite"||ereg("\n",$p)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$Ob>".h($p).'</textarea>';}else{$Ee=(!ereg('int',$d["type"])&&preg_match('~^([0-9]+)(,([0-9]+))?$~',$d["length"],$k)?($k[1]+($k[3]?1:0)+($k[2]&&!$d["unsigned"]?1:0)):($S[$d["type"]]?$S[$d["type"]]+($d["unsigned"]?0:1):0));echo"<input value='".h($p)."'".($Ee?" maxlength='$Ee'":"").(ereg('char',$d["type"])&&$d["length"]>20?" size='40'":"")."$Ob>";}}}function
process_input($d){global$c,$q;$J=bracket_escape($d["field"]);$O=$_POST["function"][$J];$p=$_POST["fields"][$J];if($d["type"]=="enum"){if($p==-1){return
false;}if($p==""){return"NULL";}return
intval($p);}if($d["auto_increment"]&&$p==""){return
null;}if($O=="orig"){return
false;}if($O=="NULL"){return"NULL";}if($d["type"]=="set"){return
array_sum((array)$p);}if(ereg('binary|blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){$qa=get_file("fields-$J");if(!is_string($qa)){return
false;}return$c->quote($qa);}return$q->processInput($d,$p,$O);}function
search_tables(){global$q,$c;$pa=false;foreach(table_status()as$i=>$D){$h=$q->tableName($D);if(isset($D["Engine"])&&$h!=""&&(!$_POST["tables"]||in_array($i,$_POST["tables"]))){$g=$c->query("SELECT".limit("1 FROM ".table($i)," WHERE ".implode(" AND ",$q->selectSearchProcess(fields($i),array())),1));if($g->fetch_row()){if(!$pa){echo"<ul>\n";$pa=true;}echo"<li><a href='".h(ME."select=".urlencode($i)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>".h($h)."</a>\n";}}}echo($pa?"</ul>":"<p class='message'>".lang(4))."\n";}function
dump_csv($a){foreach($a
as$e=>$b){if(preg_match("~[\"\n,;]~",$b)||$b===""){$a[$e]='"'.str_replace('"','""',$b).'"';}}echo
implode(($_POST["format"]=="csv"?",":";"),$a)."\n";}function
apply_sql_function($O,$G){return($O?($O=="unixepoch"?"DATETIME($G, '$O')":($O=="count distinct"?"COUNT(DISTINCT ":strtoupper("$O("))."$G)"):$G);}function
password_file(){$Tc=ini_get("upload_tmp_dir");if(!$Tc){if(function_exists('sys_get_temp_dir')){$Tc=sys_get_temp_dir();}else{$W=@tempnam("","");if(!$W){return
false;}$Tc=dirname($W);unlink($W);}}$W="$Tc/adminer.key";$f=@file_get_contents($W);if($f){return$f;}$Ja=@fopen($W,"w");if($Ja){$f=md5(uniqid(mt_rand(),true));fwrite($Ja,$f);fclose($Ja);}return$f;}function
is_email($hf){$re='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$zc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$ha="$re+(\\.$re+)*@($zc?\\.)+$zc";return
preg_match("(^$ha(,\\s*$ha)*\$)i",$hf);}function
is_url($H){$zc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($zc?\\.)+$zc(:[0-9]+)?(/.*)?(\\?.*)?(#.*)?\$~i",$H,$k)?strtolower($k[1]):"");}function
print_fieldset($T,$gf,$Ye=false){echo"<fieldset><legend><a href='#fieldset-$T' onclick=\"return !toggle('fieldset-$T');\">$gf</a></legend><div id='fieldset-$T'".($Ye?"":" class='hidden'").">\n";}function
bold($H,$We){return($We?"<b>$H</b>":$H);}if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$dc=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!ini_bool("session.auto_start")){session_name("adminer_sid");$qc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$dc);if(version_compare(PHP_VERSION,'5.2.0')>=0){$qc[]=true;}call_user_func_array('session_set_cookie_params',$qc);session_start();}if(get_magic_quotes_gpc()){$eb=array(&$_GET,&$_POST,&$_COOKIE);while(list($e,$b)=each($eb)){foreach($b
as$Ha=>$v){unset($eb[$e][$Ha]);if(is_array($v)){$eb[$e][stripslashes($Ha)]=$v;$eb[]=&$eb[$e][stripslashes($Ha)];}else{$eb[$e][stripslashes($Ha)]=($ve?$v:stripslashes($v));}}}unset($eb);}if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);$gc=array('en'=>'English','cs'=>'Čeština','sk'=>'Slovenčina','nl'=>'Nederlands','es'=>'Español','de'=>'Deutsch','fr'=>'Français','it'=>'Italiano','et'=>'Eesti','ru'=>'Русский язык','zh'=>'简体中文','zh-tw'=>'繁體中文','ja'=>'日本語',);function
lang($J,$xd=null){global$Za,$Ba;$fc=$Ba[$J];if(is_array($fc)&&$fc){$sc=($xd==1?0:((!$xd||$xd>=5)&&ereg('cs|sk|ru',$Za)?2:1));$fc=$fc[$sc];}$Ne=func_get_args();array_shift($Ne);return
vsprintf((isset($fc)?$fc:$J),$Ne);}function
switch_lang(){global$Za,$gc;echo"<form action=''>\n<div id='lang'>";hidden_fields($_GET,array('lang'));echo
lang(5).": ".html_select("lang",$gc,$Za,"this.form.submit();")," <input type='submit' value='".lang(6)."' class='hidden'>\n","</div>\n</form>\n";}if(isset($_GET["lang"])){$_COOKIE["adminer_lang"]=$_GET["lang"];$_SESSION["lang"]=$_GET["lang"];}$Za="en";if(isset($gc[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$Za=$_COOKIE["adminer_lang"];}elseif(isset($gc[$_SESSION["lang"]])){$Za=$_SESSION["lang"];}else{$Pc=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$ja,PREG_SET_ORDER);foreach($ja
as$k){$Pc[$k[1]]=(isset($k[3])?$k[3]:1);}arsort($Pc);foreach($Pc
as$e=>$ra){if(isset($gc[$e])){$Za=$e;break;}$e=preg_replace('~-.*~','',$e);if(!isset($Pc[$e])&&isset($gc[$e])){$Za=$e;break;}}}switch($Za){case"cs":$Ba=array('Nepodařilo se nahrát soubor.','Maximální povolená velikost souboru je %sB.','Soubor neexistuje.','původní','Žádné tabulky.','Jazyk','Vybrat','Soubor existuje.','Uživatelské typy','Čísla','Datum a čas','Řetězce','Binární','Síť','Geometrie','Seznamy','Systém','Server','Uživatel','Heslo','Přihlásit se','Trvalé přihlášení','Vypsat data','Zobrazit strukturu','Pozměnit pohled','Pozměnit tabulku','Nová položka','poslední','Upravit',array('%d bajt','%d bajty','%d bajtů'),'Vypsat','Funkce','Agregace','Vyhledat','kdekoliv','Seřadit','sestupně','Limit','Délka textů','Akce','SQL příkaz','prázdné','otevřít','uložit','Export','Odhlásit','databáze','schéma','Vytvořit novou tabulku','vypsat','Žádná extenze','Není dostupná žádná z podporovaných PHP extenzí (%s).','Neplatný token CSRF. Odešlete formulář znovu.','Odhlášení proběhlo v pořádku.','Session proměnné musí být povolené.','Session vypršela, přihlašte se prosím znovu.','Neplatné přihlašovací údaje.','Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','Databáze','Nesprávná databáze.','Databáze byly odstraněny.','Vybrat databázi','Vytvořit novou databázi','Oprávnění','Seznam procesů','Proměnné','Stav','Verze %s: %s přes PHP extenzi %s','Přihlášen jako: %s','Porovnávání','Tabulky','Odstranit','Opravdu?','Žádné řádky.','Cizí klíče','porovnávání','Při smazání','Název sloupce','Název parametru','Typ','Délka','Volby','Auto Increment','Výchozí hodnoty','Komentář','Přidat další','Přesunout nahoru','Přesunout dolů','Odebrat','Pohled','Tabulka','Sloupec','Indexy','Pozměnit indexy','Zdroj','Cíl','Při změně','Změnit','Přidat cizí klíč','Triggery','Přidat trigger','Schéma databáze','Export','Výstup','Formát','Procedury a funkce','Události','Data','upravit','Vytvořit uživatele','Chyba v dotazu','%.3f s',array('%d řádek','%d řádky','%d řádků'),array('Příkaz proběhl v pořádku, byl změněn %d záznam.','Příkaz proběhl v pořádku, byly změněny %d záznamy.','Příkaz proběhl v pořádku, bylo změněno %d záznamů.'),'Žádné příkazy k vykonání.','Provést','Zastavit při chybě','Nahrání souboru','Nahrávání souborů není povoleno.','Ze serveru','Soubor %s na webovém serveru','Spustit soubor','Historie','Vyčistit','Položka byla smazána.','Položka byla aktualizována.','Položka%s byla vložena.','Vložit','Uložit','Uložit a pokračovat v editaci','Uložit a vložit další','Smazat','Tabulka byla odstraněna.','Tabulka byla změněna.','Tabulka byla vytvořena.','Vytvořit tabulku','Byl překročen maximální povolený počet polí. Zvyšte prosím %s a %s.','Název tabulky','úložiště','Rozdělit podle','Oddíly','Název oddílu','Hodnoty','Indexy byly změněny.','Typ indexu','Sloupec (délka)','Databáze byla odstraněna.','Databáze byla přejmenována.','Databáze byla vytvořena.','Databáze byla změněna.','Pozměnit databázi','Vytvořit databázi','Schéma bylo odstraněno.','Schéma bylo vytvořeno.','Schéma bylo změněno.','Pozměnit schéma','Vytvořit schéma','Zavolat',array('Procedura byla zavolána, byl změněn %d záznam.','Procedura byla zavolána, byly změněny %d záznamy.','Procedura byla zavolána, bylo změněno %d záznamů.'),'Cizí klíč byl odstraněn.','Cizí klíč byl změněn.','Cizí klíč byl vytvořen.','Zdrojové a cílové sloupce musí mít stejný datový typ, nad cílovými sloupci musí být definován index a odkazovaná data musí existovat.','Cizí klíč','Cílová tabulka','Změnit','Přidat sloupec','Pohled byl odstraněn.','Pohled byl změněn.','Pohled byl vytvořen.','Vytvořit pohled','Název','Událost byla odstraněna.','Událost byla změněna.','Událost byla vytvořena.','Pozměnit událost','Vytvořit událost','Začátek','Konec','Každých','Po dokončení zachovat','Procedura byla odstraněna.','Procedura byla změněna.','Procedura byla vytvořena.','Změnit funkci','Změnit proceduru','Vytvořit funkci','Vytvořit proceduru','Návratový typ','Sekvence byla odstraněna.','Sekvence byla vytvořena.','Sekvence byla změněna.','Pozměnit sekvenci','Vytvořit sekvenci','Typ byl odstraněn.','Typ byl vytvořen.','Pozměnit typ','Vytvořit typ','Trigger byl odstraněn.','Trigger byl změněn.','Trigger byl vytvořen.','Změnit trigger','Vytvořit trigger','Čas','Událost','Uživatel byl odstraněn.','Uživatel byl změněn.','Uživatel byl vytvořen.','Zahašované','Procedura','Povolit','Zakázat',array('Byl ukončen %d proces.','Byly ukončeny %d procesy.','Bylo ukončeno %d procesů.'),'Ukončit',array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),'Dvojklikněte na políčko, které chcete změnit.',array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),'Nepodařilo se vypsat tabulku','Vztahy','Ke změně této hodnoty zvyšte délku textů.','Ke změně této hodnoty použijte odkaz upravit.','Stránka','celý výsledek','Klonovat','Import CSV','Import','Tabulky byly vyprázdněny.','Tabulky byly přesunuty','Tabulky byly odstraněny.','Schéma','Tabulky a pohledy','Vyhledat data v tabulkách','Úložiště','Velikost dat','Velikost indexů','Volné místo','Řádků','%d celkem','Analyzovat','Optimalizovat','Zkontrolovat','Opravit','Vyprázdnit','Přesunout do jiné databáze','Přesunout','Sekvence','Plán','V daný čas',' ','teď');break;case"de":$Ba=array('Hochladen von Datei fehlgeschlagen.','Maximal erlaubte Dateigrösse ist %sB.','Datei existiert nicht.','Original','Keine Tabellen.','Sprache','Benutzung','Datei existiert schon.','Benutzer-definierte Typen','Zahlen','Datum oder Zeit','Zeichenketten','Binär','Netzwerk','Geometrie','Listen','Datenbank System','Server','Benutzer','Passwort','Login','Passwort speichern','Daten auswählen','Struktur anzeigen','View ändern','Tabelle ändern','Neuer Datensatz','letzte','Ändern',array('%d Byte','%d Bytes'),'Daten zeigen von','Funktionen','Agregationen','Suchen','beliebig','Ordnen','absteigend','Begrenzung','Textlänge','Aktion','SQL-Query','leer','anzeigen','Datei','Export','Abmelden','Datenbank','Schema','Neue Tabelle','zeigen','Keine Erweiterungen installiert','Keine der unterstützten PHP-Erweiterungen (%s) ist vorhanden.','CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.','Abmeldung erfolgreich.','Sitzungen müssen aktiviert sein.','Sitzungsdauer abgelaufen, bitte erneut anmelden.','Ungültige Anmelde-Informationen.','POST data zu gross. Reduzieren Sie die Grösse oder vergrössern Sie den Wert %s in der Konfiguration.','Datenbank','Datenbank ungültig.','Datenbanken entfernt.','Datenbank auswählen','Neue Datenbank','Rechte','Prozessliste','Variablen','Status','Version %s: %s, mit PHP-Erweiterung %s','Angemeldet als: %s','Collation','Tabellen','Entfernen','Sind Sie sicher ?','Keine Daten.','Fremdschlüssel','Kollation','ON DELETE','Spaltenname','Name des Parameters','Typ','Länge','Optionen','Auto-Inkrement','Vorgabewerte festlegen','Kommentar','Hinzufügen','Nach oben','Nach unten','Entfernen','View','Tabelle','Spalte','Indizes','Indizes ändern','Ursprung','Ziel','ON UPDATE','Ändern','Fremdschlüssel hinzufügen','Trigger','Trigger hinzufügen','Datenbankschema','Exportieren','Ergebnis','Format','Prozeduren','Ereignisse','Daten','ändern','Neuer Benutzer','Fehler in der SQL-Abfrage','%.3f s',array('%d Datensatz','%d Datensätze'),array('Abfrage ausgeführt, %d Datensatz betroffen.','Abfrage ausgeführt, %d Datensätze betroffen.'),'Kein Kommando vorhanden.','Ausführen','Bei Fehler anhaltan','Datei importieren','Importieren von Dateien abgeschaltet.','Auf Server','Webserver Datei %s','Datei ausführen','History','Entleeren','Datensatz gelöscht.','Datensatz geändert.','Datensatz%s hinzugefügt.','Hinzufügen','Speichern','Speichern und weiter bearbeiten','Speichern und nächsten hinzufügen','Entfernen','Tabelle entfernt.','Tabelle geändert.','Tabelle erstellt.','Neue Tabelle erstellen','Die maximal erlaubte Anzahl der Felder ist überschritten. Bitte %s und %s erhöhen.','Name der Tabelle','Motor','Partitionieren um','Partitionen','Name der Partition','Werte','Indizes geändert.','Index-Typ','Spalte (Länge)','Datenbank entfernt.','Datenbank umbenannt.','Datenbank erstellt.','Datenbank geändert.','Datenbank ändern','Neue Datenbank','Schema wurde gelöscht.','Neues Schema erstellt.','Schema geändert.','Schema ändern','Neues Schema','Aufrufen',array('Kommando SQL ausgeführt, %d Datensatz betroffen.','Kommando SQL ausgeführt, %d Datensätze betroffen.'),'Fremdschlüssel entfernt.','Fremdschlüssel geändert.','Fremdschlüssel erstellt.','Spalten des Ursprungs und des Zieles müssen vom gleichen Datentyp sein, es muss unter den Zielspalten ein Index existieren und die referenzierten Daten müssen existieren.','Fremdschlüssel','Zieltabelle','Ändern','Spalte hinzufügen','View entfernt.','View geändert.','View erstellt.','Neue View erstellen','Name','Ereignis entfernt.','Ereignis geändert.','Ereignis erstellt.','Ereignis ändern','Ereignis erstellen','Start','Ende','Jede','Nach der Ausführung erhalten','Prozedur entfernt.','Prozedur geändert.','Prozedur erstellt.','Funktion ändern','Prozedur ändern','Neue Funktion','Neue Prozedur','Typ des Rückgabewertes','Sequenz gelöscht.','Neue Sequenz erstellt.','Sequenz geändert.','Sequenz ändern','Neue Sequenz','Typ gelöscht.','Typ erstellt.','Typ ändern','Typ erstellen','Trigger entfernt.','Trigger geändert.','Trigger erstellt.','Trigger ändern','Trigger hinzufügen','Zeitpunkt','Ereignis','Benutzer entfernt.','Benutzer geändert.','Benutzer erstellt.','Hashed','Rutine','Erlauben','Verbieten',array('%d Prozess gestoppt.','%d Prozesse gestoppt.'),'Anhalten',array('%d Artikel betroffen.','%d Artikel betroffen.'),'Doppelklick zum Bearbeiten des Wertes.',array('%d Datensatz importiert.','%d Datensätze wurden importiert.'),'Auswahl der Tabelle fehlgeschlagen','Relationen','Vergrössern Sie die Textlänge um den Wert ändern zu können.','Benutzen Sie den Link zum editieren dieses Wertes.','Seite','Gesamtergebnis','Klonen','Importiere CSV','Importieren','Tabellen sind entleert worden (truncate).','Tabellen verschoben.','Tabellen wurden entfernt (drop).','Schema','Tabellen und Views','Suche in Tabellen','Motor','Datengrösse','Indexgrösse','Freier Bereich','Datensätze','%d insgesamt','Analysieren','Optimisieren','Prüfen','Reparieren','Entleeren (truncate)','In andere Datenbank verschieben','Verschieben','Sequenz','Zeitplan','Zur angegebenen Zeit',' ','Anhänge');break;case"en":$Ba=array('Unable to upload a file.','Maximum allowed file size is %sB.','File does not exist.','original','No tables.','Language','Use','File exists.','User types','Numbers','Date and time','Strings','Binary','Network','Geometry','Lists','System','Server','Username','Password','Login','Permanent login','Select data','Show structure','Alter view','Alter table','New item','last','Edit',array('%d byte','%d bytes'),'Select','Functions','Aggregation','Search','anywhere','Sort','descending','Limit','Text length','Action','SQL command','empty','open','save','Dump','Logout','database','schema','Create new table','select','No extension','None of the supported PHP extensions (%s) are available.','Invalid CSRF token. Send the form again.','Logout successful.','Session support must be enabled.','Session expired, please login again.','Invalid credentials.','Too big POST data. Reduce the data or increase the %s configuration directive.','Database','Invalid database.','Databases have been dropped.','Select database','Create new database','Privileges','Process list','Variables','Status','%s version: %s through PHP extension %s','Logged as: %s','Collation','Tables','Drop','Are you sure?','No rows.','Foreign keys','collation','ON DELETE','Column name','Parameter name','Type','Length','Options','Auto Increment','Default values','Comment','Add next','Move up','Move down','Remove','View','Table','Column','Indexes','Alter indexes','Source','Target','ON UPDATE','Alter','Add foreign key','Triggers','Add trigger','Database schema','Export','Output','Format','Routines','Events','Data','edit','Create user','Error in query','%.3f s',array('%d row','%d rows'),array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),'No commands to execute.','Execute','Stop on error','File upload','File uploads are disabled.','From server','Webserver file %s','Run file','History','Clear','Item has been deleted.','Item has been updated.','Item%s has been inserted.','Insert','Save','Save and continue edit','Save and insert next','Delete','Table has been dropped.','Table has been altered.','Table has been created.','Create table','Maximum number of allowed fields exceeded. Please increase %s and %s.','Table name','engine','Partition by','Partitions','Partition name','Values','Indexes have been altered.','Index Type','Column (length)','Database has been dropped.','Database has been renamed.','Database has been created.','Database has been altered.','Alter database','Create database','Schema has been dropped.','Schema has been created.','Schema has been altered.','Alter schema','Create schema','Call',array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),'Foreign key has been dropped.','Foreign key has been altered.','Foreign key has been created.','Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.','Foreign key','Target table','Change','Add column','View has been dropped.','View has been altered.','View has been created.','Create view','Name','Event has been dropped.','Event has been altered.','Event has been created.','Alter event','Create event','Start','End','Every','On completion preserve','Routine has been dropped.','Routine has been altered.','Routine has been created.','Alter function','Alter procedure','Create function','Create procedure','Return type','Sequence has been dropped.','Sequence has been created.','Sequence has been altered.','Alter sequence','Create sequence','Type has been dropped.','Type has been created.','Alter type','Create type','Trigger has been dropped.','Trigger has been altered.','Trigger has been created.','Alter trigger','Create trigger','Time','Event','User has been dropped.','User has been altered.','User has been created.','Hashed','Routine','Grant','Revoke',array('%d process has been killed.','%d processes have been killed.'),'Kill',array('%d item has been affected.','%d items have been affected.'),'Double click on a value to modify it.',array('%d row has been imported.','%d rows have been imported.'),'Unable to select the table','Relations','Increase text length to modify this value.','Use edit link to modify this value.','Page','whole result','Clone','CSV Import','Import','Tables have been truncated.','Tables have been moved.','Tables have been dropped.','Schema','Tables and views','Search data in tables','Engine','Data Length','Index Length','Data Free','Rows','%d in total','Analyze','Optimize','Check','Repair','Truncate','Move to other database','Move','Sequences','Schedule','At given time',',',array('%d e-mail has been sent.','%d e-mails have been sent.'));break;case"es":$Ba=array('No es posible importar archivo.','Tamaño máximo de archivo es %sB.','Archivo no existe.','original','No existen tablas.','Idioma','Usar','Archivo ya existe.','Tipos definido por el usuario','Números','Fecha y hora','Cadena','Binario','Red','Geometría','Listas','Motor de base de datos','Servidor','Usuario','Contraseña','Login','Guardar contraseña','Seleccionar datos','Mostrar estructura','Modificar vista','Modifique estructura','Nuevo Registro','último','Modificar',array('%d byte','%d bytes'),'Mostrar','Funciones','Agregaciones','Condición','donde sea','Ordenar','descendiente','Limit','Longitud de texto','Acción','Comando SQL','ningúno','mostrar','archivo','Export','Logout','base de datos','esquema','Nueva tabla','registros','No hay extension','Ninguna de las extensiones PHP soportadas (%s) está disponible.','Token CSRF inválido. Vuelva a enviar los datos del formulario.','Salida exitosa.','Deben estar habilitadas las sesiones.','Sesión expirada, por favor ingrese su clave de nuevo.','Identificacion inválida.','POST data demasiado grande. Reduzca el tamaño o aumente la directiva de configuración %s.','Base de datos','Base de datos inválida.','Bases de datos eliminadas.','Seleccionar Base de datos','Ingrese nueva base de datos','Privilegios','Lista de procesos','Variables','Estado','Versión %s: %s a través de extensión PHP %s','Logeado como: %s','Colación','Tablas','Eliminar','Está seguro?','No existen registros.','Claves foráneas','colación','ON DELETE','Nombre de columna','Nombre de Parámetro','Tipo','Longitud','Opciones','Incremento automático','Valores predeterminados','Comentario','Agregar','Mover arriba','Mover abajo','Eliminar','Vistas','Tabla','Columna','Indices','Modificar indices','Origen','Destino','ON UPDATE','Modificar','Agregar clave foránea','Triggers','Agregar trigger','Esquema de base de datos','Exportar','Salida','Formato','Procedimientos','Eventos','Datos','modificar','Crear Usuario','Error en consulta','%.3f s',array('%d registro','%d registros'),array('Consulta ejecutada, %d registro afectado.','Consulta ejecutada, %d registros afectados.'),'No hay comando para ejecutar.','Ejecutar','Parar en caso de error','Importar archivo','Importación de archivos deshablilitado.','Desde servidor','Archivo de servidor web %s','Ejecutar Archivo','History','Vaciar','Registro eliminado.','Registro modificado.','Registro%s insertado.','Agregar','Guardar','Guardar y continuar editando','Guardar e insertar otro','Eliminar','Tabla eliminada.','Tabla modificada.','Tabla creada.','Cree tabla','Cantida máxima de campos permitidos excedidos. Por favor aumente %s y %s.','Nombre de la tabla','motor','Particionar por','Particiones','Nombre de Partición','Valores','Indices modificados.','Tipo de índice','Columna (longitud)','Base de datos eliminada.','Base de datos renombrada.','Base de datos creada.','Base de datos modificada.','Modificar Base de datos','Crear Base de datos','Esquema eliminado.','Esquema creado.','Esquema modificado.','Modificar esquema','Crear esquema','Llamar',array('Consulta ejecutada, %d registro afectado.','Consulta ejecutada, %d registros afectados.'),'Clave externa eliminada.','Clave externa modificada.','Clave externa creada.','Las columnas de origen y destino deben ser del mismo tipo, debe existir un índice entre las columnas del destino y el registro referenciado debe existir.','Clave externa','Tabla de destino','Modificar','Agregar columna','Vista eliminada.','Vista modificada.','Vista creada.','Cear vista','Nombre','Evento eliminado.','Evento modificado.','Evento creado.','Modificar Evento','Crear Evento','Inicio','Fin','Cada','Al completar preservar','Procedimiento eliminado.','Procedimiento modificado.','Procedimiento creado.','Modificar Función','Modificar procedimiento','Crear función','Crear procedimiento','Tipo de valor de regreso','Secuencia eliminada.','Secuencia creada.','Secuencia modificada.','Modificar secuencia','Crear secuencias','Tipo eliminado.','Tipo creado.','Modificar tipo','Crear tipo','Trigger eliminado.','Trigger modificado.','Trigger creado.','Modificar Trigger','Agregar Trigger','Tiempo','Evento','Usuario eliminado.','Usuario modificado.','Usuario creado.','Hash','Rutina','Conceder','Impedir',array('%d proceso detenido.','%d procesos detenidos.'),'Detener',array('%d ítem afectado.','%d itemes afectados.'),'Doble-clic sobre el valor para editarlo.',array('%d registro importado.','%d registros importados.'),'No es posible seleccionar la tabla','Relaciones','Aumente el tamaño del campo de texto para modificar este valor.','Utilice el enlace de modificar para realizar los cambios.','Página','resultado completo','Clonar','Importar CSV','Importar','Tablas vaciadas (truncate).','Se movieron las tablas.','Tablas eliminadas.','Esquema','Tablas y vistas','Buscar datos en tablas','Motor','Longitud de datos','Longitud de índice','Espacio libre','Registros','%d en total','Analizar','Optimizar','Comprobar','Reparar','Vaciar','Mover a otra base de datos','Mover','Secuencias','Agenda','A hora determinada',' ','Adjuntos');break;case"et":$Ba=array('Faili üleslaadimine pole võimalik.','Maksimaalne failisuurus %sB.','Faili ei leitud.','originaal','Tabeleid ei leitud.','Keel','Kasuta','Fail juba eksisteerib.','Kasutajatüübid','Numbrilised','Kuupäev ja kellaaeg','Tekstid','Binaar','Võrk (network)','Geomeetria','Listid','Andmebaasimootor','Server','Kasutajanimi','Parool','Logi sisse','Jäta mind meelde','Vaata andmeid','Näita struktuuri','Muuda vaadet (VIEW)','Muuda tabeli struktuuri','Lisa kirje','viimane','Muuda',array('%d bait','%d baiti'),'Kuva','Funktsioonid','Liitmine','Otsi','vahet pole','Sorteeri','kahanevalt','Piira','Teksti pikkus','Tegevus','SQL-Päring','tühi','näita brauseris','salvesta failina','Ekspordi','Logi välja','andmebaas','struktuur','Loo uus tabel','kuva','Ei leitud laiendust','Serveris pole ühtegi toetatud PHP laiendustest (%s).','Sobimatu CSRF, palun postitage vorm uuesti.','Väljalogimine õnnestus.','Sessioonid peavad olema lubatud.','Sessioon on aegunud, palun logige uuesti sisse.','Ebakorrektsed andmed.','POST-andmete maht on liialt suur. Palun vähendage andmeid või suurendage %s php-seadet.','Andmebaas','Tundmatu andmebaas.','Andmebaasid on edukalt kustutatud.','Vali andmebaas','Loo uus andmebaas','Õigused','Protsesside nimekiri','Muutujad','Staatus','%s versioon: %s, kasutatud PHP moodul: %s','Sisse logitud: %s','Tähetabel','Tabelid','Kustuta','Kas oled kindel?','Sissekanded puuduvad.','Võõrvõtmed (foreign key)','tähetabel','ON DELETE','Veeru nimi','Parameetri nimi','Tüüp','Pikkus','Valikud','Automaatselt suurenev','Vaikimisi väärtused','Kommentaar','Lisa järgmine','Liiguta ülespoole','Liiguta allapoole','Eemalda','Vaata','Tabel','Veerg','Indeksid','Muuda indekseid','Allikas','Sihtkoht','ON UPDATE','Muuda','Lisa võõrvõti','Päästikud (trigger)','Lisa päästik (TRIGGER)','Andmebaasi skeem','Ekspordi','Väljund','Formaat','Protseduurid','Sündmused (EVENTS)','Andmed','muuda','Loo uus kasutaja','Päringus esines viga','%.3f s',array('%d rida','%d rida'),array('Päring õnnestus, mõjutatatud ridu: %d.','Päring õnnestus, mõjutatatud ridu: %d.'),'Käsk puudub.','Käivita','Peatuda vea esinemisel','Faili üleslaadimine','Failide üleslaadimine on keelatud.','Serverist','Fail serveris: %s','Käivita fail','Ajalugu','Puhasta','Kustutamine õnnestus.','Uuendamine õnnestus.','Kirje%s on edukalt lisatud.','Sisesta','Salvesta','Salvesta ja jätka muutmist','Salvesta ja lisa järgmine','Kustuta','Tabel on edukalt kustutatud.','Tabeli andmed on edukalt muudetud.','Tabel on edukalt loodud.','Loo uus tabel','Maksimaalne väljade arv ületatud. Palun suurendage %s ja %s.','Tabeli nimi','andmebaasimootor','Partitsiooni','Partitsioonid','Partitsiooni nimi','Väärtused','Indeksite andmed on edukalt uuendatud.','Indeksi tüüp','Veerg (pikkus)','Andmebaas on edukalt kustutatud.','Andmebaas on edukalt ümber nimetatud.','Andmebaas on edukalt loodud.','Andmebaasi struktuuri uuendamine õnnestus.','Muuda andmebaasi','Loo uus andmebaas','Struktuur on edukalt kustutatud.','Struktuur on edukalt loodud.','Struktuur on edukalt muudetud.','Muuda struktuuri','Loo struktuur','Käivita',array('Protseduur täideti edukalt, mõjutatud ridu: %d.','Protseduur täideti edukalt, mõjutatud ridu: %d.'),'Võõrvõti on edukalt kustutatud.','Võõrvõtme andmed on edukalt muudetud.','Võõrvõri on edukalt loodud.','Lähte- ja sihtveerud peavad eksisteerima ja omama sama andmetüüpi, sihtveergudel peab olema määratud indeks ning viidatud andmed peavad eksisteerima.','Võõrvõti','Siht-tabel','Muuda','Lisa veerg','Vaade (VIEW) on edukalt kustutatud.','Vaade (VIEW) on edukalt muudetud.','Vaade (VIEW) on edukalt loodud.','Loo uus vaade (VIEW)','Nimi','Sündmus on edukalt kustutatud.','Sündmuse andmed on edukalt uuendatud.','Sündmus on edukalt loodud.','Muuda sündmuse andmeid','Loo uus sündmus (EVENT)','Alusta','Lõpeta','Iga','Lõpetamisel jäta sündmus alles','Protseduur on edukalt kustutatud.','Protseduuri andmed on edukalt muudetud.','Protseduur on edukalt loodud.','Muuda funktsiooni','Muuda protseduuri','Loo uus funktsioon','Loo uus protseduur','Tagastustüüp','Jada on edukalt kustutatud.','Jada on edukalt loodud.','Jada on edukalt muudetud.','Muuda jada','Loo jada','Tüüp on edukalt kustutatud.','Tüüp on edukalt loodud.','Muuda tüüpi','Loo tüüp','Päästik on edukalt kustutatud.','Päästiku andmed on edukalt uuendatud.','Uus päästik on edukalt loodud.','Muuda päästiku andmeid','Loo uus päästik (TRIGGER)','Aeg','Sündmus','Kasutaja on edukalt kustutatud.','Kasutaja andmed on edukalt muudetud.','Kasutaja on edukalt lisatud.','Häshitud (Hashed)','Protseduur','Anna','Eemalda',array('Protsess on edukalt peatatud (%d).','Valitud protsessid (%d) on edukalt peatatud.'),'Peata',array('Mõjutatud kirjeid: %d.','Mõjutatud kirjeid: %d.'),'Väärtuse muutmiseks topelt-kliki sellel.',array('Imporditi %d rida.','Imporditi %d rida.'),'Tabeli valimine ebaõnnestus','Seosed','Väärtuse muutmiseks suurenda tekstiveeru pikkust.','Väärtuse muutmiseks kasuta muutmislinki.','Lehekülg','Täielikud tulemused','Kloon','Impordi CSV','Impordi','Validud tabelid on edukalt tühjendatud.','Valitud tabelid on edukalt liigutatud.','Valitud tabelid on edukalt kustutatud.','Struktuur','Tabelid ja vaated','Otsi kogu andmebaasist','Implementatsioon','Andmete pikkus','Indeksi pikkus','Vaba ruumi','Ridu','Kokku: %d','Analüüsi','Optimeeri','Kontrolli','Paranda','Tühjenda','Liiguta teise andmebaasi','Liiguta','Jadad (sequences)','Ajakava','Antud ajahetkel',',','Manused');break;case"fr":$Ba=array('Impossible d\'importer le fichier.','Taille maximale des fichiers est de %sB.','Le fichier est introuvable.','original','Aucunes tables.','Langues','Utiliser','File exists.','User types','Nombres','Date et heure','Chaînes','Binaires','Network','Geometry','Listes','System','Serveur','Utilisateur','Mot de passe','Authentification','Authentification permanente','Select data','Show structure','Modifier une vue','Modifier la table','Nouvel élément','last','Modifier',array('%d octet','%d octets'),'Select','Fonctions','Agrégation','Rechercher','n\'importe où','Ordonner','décroissant','Limit','Longueur du texte','Action','Requête SQL','empty','ouvrir','sauvegarder','Exporter','Déconnexion','base de données','schema','Créer une table','select','Extension introuvable','Aucune des extensions PHP supportées (%s) n\'est disponible.','Token CSRF invalide. Veuillez réenvoyer le formulaire.','Au revoir !','Veuillez activer les sessions.','Session expirée, veuillez vous authentifier à nouveau.','Authentification échouée.','Donnée POST trop grande . Réduire la taille des données ou modifier le %s dans la configuration de PHP.','Base de données','Base de donnée invalide.','Databases have been dropped.','Selectionner la base de donnée','Créer une base de donnée','Privilège','Liste de processus','Variables','Status','Version de %s: %s utilisant l\'extension %s','Authentifié en tant que %s','Collation','Tables','Effacer','Êtes-vous certain?','Aucun résultat.','Clé éxterne','collation','ON DELETE','Nom de la colonne','Nom du Paramêtre','Type','Longeur','Options','Auto increment','Valeurs par défaut','Commentaire','Ajouter le prochain','Déplacer vers le haut','Déplacer vers le bas','Effacer','Vue','Table','Colonne','Index','Modifier les index','Source','Cible','ON UPDATE','Modifier','Ajouter une clé externe','Triggers','Ajouter un trigger','Schéma de la base de données','Exporter','Sortie','Formatter','Routines','Évènement','Donnée','modifier','Créer un utilisateur','Erreur dans la requête','%.3f s',array('%d ligne','%d lignes'),array('Requête exécutée, %d ligne affectée.','Requête exécutée, %d lignes affectées.'),'Aucune commande à exécuter.','Exécuter','Arrêt sur erreur','Importer un fichier','Importation de fichier désactivé.','From server','%s fichier du serveur Web','Executer le fichier','Historique','Effacer','Élément supprimé.','Élément modifié.','Item%s has been inserted.','Insérer','Sauvegarder','Sauvegarder et continuer l\'édition','Sauvegarder et insérer le prochain','Effacer','Table effacée.','Table modifiée.','Table créée.','Créer une table','Le nombre de champs maximum est dépassé. Veuillez augmenter %s et %s.','Nom de la table','moteur','Partitionné par','Partitions','Nom de la partition','Valeurs','Index modifiés.','Type d\'index','Colonne (longueur)','Base de données effacée.','Base de données renommée.','Base de données créée.','Base de données modifiée.','Modifier la base de données','Créer une base de données','Schema has been dropped.','Schema has been created.','Schema has been altered.','Alter schema','Create schema','Appeler',array('Routine exécutée, %d ligne modifiée.','Routine exécutée, %d lignes modifiées.'),'Clé externe effacée.','Clé externe modifiée.','Clé externe créée.','Les colonnes selectionnées et les colonnes de destination doivent être du même type, il doit y avoir un index sur les colonnes de destination et les données de référence doivent exister.','Clé externe','Table visée','Modifier','Ajouter une colonne','Vue effacée.','Vue modifiée.','Vue créée.','Créer une vue','Nom','L\'évènement a été supprimé.','L\'évènement a été modifié.','L\'évènement a été créé.','Modifier un évènement','Créer un évènement','Démarrer','Terminer','Chaque','Conserver quand complété','Procédure éliminée.','Procédure modifiée.','Procédure créée.','Modifier la fonction','Modifier la procédure','Créer une fonction','Créer une procédure','Type de retour','Sequence has been dropped.','Sequence has been created.','Sequence has been altered.','Alter sequence','Create sequence','Type has been dropped.','Type has been created.','Alter type','Create type','Trigger éliminé.','Trigger modifié.','Trigger créé.','Modifier un trigger','Ajouter un trigger','Temps','Évènement','Utilisateur éffacé.','Utilisateur modifié.','Utilisateur créé.','Haché','Routine','Grant','Revoke',array('%d processus arrêté.','%d processus arrêtés.'),'Arrêter',array('%d élément ont été modifié.','%d éléments ont été modifié.'),'Double click on a value to modify it.',array('%d ligne a été importé.','%d lignes ont été importé.'),'Impossible de sélectionner la table','Relations','Increase text length to modify this value.','Use edit link to modify this value.','Page','résultat entier','Cloner','Importation CVS','Importer','Les tables ont été tronquées.','Les tables ont été déplacées.','Les tables ont été effacées.','Schema','Tables et vues','Search data in tables','Moteur','Longeur des données','Longeur de l\'index','Vide','Rangés','%d au total','Analyser','Opitimiser','Vérifier','Réparer','Tronquer','Déplacer dans une autre base de données','Déplacer','Sequences','Horaire','À un moment précis',',',array('%d message a été envoyé.','%d messages ont été envoyés.'));break;case"it":$Ba=array('Caricamento del file non riuscito.','La dimensione massima del file è %sB.','Il file non esiste.','originale','No tabelle.','Lingua','Usa','Il file esiste già.','Tipi definiti dall\'utente','Numeri','Data e ora','Stringhe','Binari','Rete','Geometria','Liste','Sistema','Server','Utente','Password','Autenticazione','Login permanente','Visualizza dati','Visualizza struttura','Modifica vista','Modifica tabella','Nuovo elemento','ultima','Modifica',array('%d byte','%d bytes'),'Seleziona','Funzioni','Aggregazione','Cerca','ovunque','Ordina','discendente','Limite','Lunghezza testo','Azione','Comando SQL','vuoto','apri','salva','Dump','Esci','database','schema','Crea nuova tabella','seleziona','Estensioni non presenti','Nessuna delle estensioni PHP supportate (%s) disponibile.','Token CSRF non valido. Reinvia la richiesta.','Uscita effettuata con successo.','Le sessioni devono essere abilitate.','Sessione scaduta, autenticarsi di nuovo.','Credenziali non valide.','Troppi dati via POST. Ridurre i dati o aumentare la direttiva di configurazione %s.','Database','Database non valido.','Database eliminati.','Seleziona database','Crea nuovo database','Privilegi','Elenco processi','Variabili','Stato','Versione %s: %s via estensione PHP %s','Autenticato come: %s','Collazione','Tabelle','Elimina','Sicuro?','Nessuna riga.','Chiavi esterne','collazione','ON DELETE','Nome colonna','Nome parametro','Tipo','Lunghezza','Opzioni','Auto incremento','Valori predefiniti','Commento','Aggiungi altro','Sposta su','Sposta giu','Rimuovi','Vedi','Tabella','Colonna','Indici','Modifica indici','Sorgente','Obiettivo','ON UPDATE','Modifica','Aggiungi foreign key','Trigger','Aggiungi trigger','Schema database','Esporta','Risultato','Formato','Routine','Eventi','Dati','modifica','Crea utente','Errore nella query','%.3f s',array('%d riga','%d righe'),array('Esecuzione della query OK, %d riga interessata.','Esecuzione della query OK, %d righe interessate.'),'Nessun commando da eseguire.','Esegui','Stop su errore','Caricamento file','Caricamento file disabilitato.','Dal server','Webserver file %s','Esegui file','Storico','Pulisci','Elemento eliminato.','Elemento aggiornato.','Elemento%s inserito.','Inserisci','Salva','Salva e continua','Salva e inserisci un altro','Elimina','Tabella eliminata.','Tabella modificata.','Tabella creata.','Crea tabella','Troppi campi. Per favore aumentare %s e %s.','Nome tabella','motore','Partiziona per','Partizioni','Nome partizione','Valori','Indici modificati.','Tipo indice','Colonna (lunghezza)','Database eliminato.','Database rinominato.','Database creato.','Database modificato.','Modifica database','Crea database','Schema eliminato.','Schema creato.','Schema modificato.','Modifica schema','Crea schema','Chiama',array('Routine chiamata, %d riga interessata.','Routine chiamata, %d righe interessate.'),'Foreign key eliminata.','Foreign key modificata.','Foreign key creata.','Le colonne sorgente e destinazione devono essere dello stesso tipo e ci deve essere un indice sulla colonna di destinazione e sui dati referenziati.','Foreign key','Tabella obiettivo','Cambia','Aggiungi colonna','Vista eliminata.','Vista modificata.','Vista creata.','Crea vista','Nome','Evento eliminato.','Evento modificato.','Evento creato.','Modifica evento','Crea evento','Inizio','Fine','Ogni','Al termine preservare','Routine eliminata.','Routine modificata.','Routine creata.','Modifica funzione','Modifica procedura','Crea funzione','Crea procedura','Return type','Sequenza eliminata.','Sequenza creata.','Sequenza modificata.','Modifica sequenza','Crea sequenza','Tipo definito dall\'utente eliminato.','Tipo definito dall\'utente creato.','Modifica tipo definito dall\'utente','Crea tipo definito dall\'utente','Trigger eliminato.','Trigger modificato.','Trigger creato.','Modifica trigger','Crea trigger','Orario','Evento','Utente eliminato.','Utente modificato.','Utente creato.','Hashed','Routine','Permetti','Revoca',array('%d processo interrotto.','%d processi interrotti.'),'Interrompi',array('Il risultato consiste in %d elemento','Il risultato consiste in %d elementi'),'Fai doppio click su un valore per modificarlo.',array('%d riga importata.','%d righe importate.'),'Selezione della tabella non riuscita','Relazioni','Aumenta la lunghezza del testo per modificare questo valore.','Usa il link modifica per modificare questo valore.','Pagina','intero risultato','Clona','Importa da CSV','Importa','Le tabelle sono state svuotate.','Le tabelle sono state spostate.','Le tabelle sono state eliminate.','Schema','Tabelle e viste','Cerca nelle tabelle','Motore','Lunghezza dato','Lunghezza indice','Dati liberi','Righe','%d in totale','Analizza','Ottimizza','Controlla','Ripara','Svuota','Sposta in altro database','Sposta','Sequenza','Pianifica','A tempo prestabilito','.','Allegati');break;case"ja":$Ba=array('ファイルをアップロードできません','最大ファイルサイズ %sB','ファイルは存在しません','元','テーブルがありません没有表。','言語','使用','File exists.','User types','数字','日時','文字列','バイナリ','Network','Geometry','リスト','System','サーバ','ユーザ名','パスワード','ログイン','永続的にログイン','データ','構造','ビューを変更','テーブルの変更','項目の作成','last','編集','%d バイト','選択','関数','集合','検索','任意','ソート','降順','制約','文字列の長さ','動作','SQLコマンド','empty','開く','保存','ダンプ','ログアウト','データベース','schema','テーブルを作成','選択','拡張機能がありません','PHPの拡張機能（%s）がセットアップされていません','不正なCSRFトークン。再送信してください','ログアウト','セッションを有効にしてください','セッションの期限切れ。ログインし直してください','不正なログイン','POSTデータが大きすぎます。データサイズを小さくするか %s 設定を大きくしてください','データベース','不正なデータベース','Databases have been dropped.','データベースを選択してください','新規にデータベースを作成','権限','プロセス一覧','変数','状態','%sバージョン：%s、 PHP拡張機能 %s','ログ：%s','照合順序','テーブル','削除','実行しますか？','行がありません','外部キー','照合順序','ON DELETE','列名','参数名','型','長さ','設定','連番','規定値','コメント','追加','上','下','移除','ビュー','テーブル','列','索引','索引の変更','ソース','ターゲット','ON UPDATE','変更','外部キーを追加','トリガー','トリガーの追加','数据?概要','エクスポート','出力','形式','ルーチン','イベント','データ','編集','ユーザを作成','クエリーのエラー','%.3f 秒','%d 行','クエリーを実行しました。%d 行を変更しました','実行するコマンドがありません','実行','エラーの場合は停止','ファイルをアップロード','ファイルのアップロードが無効です','From server','Webサーバファイル %s','ファイルを実行','履歴','消去','項目を削除しました','項目を更新しました','Item%s has been inserted.','挿入','保存','保存して継続','保存／追加','削除','テーブルを削除しました','テーブルを変更しました','テーブルを作成しました','テーブルを作成','定義可能な最大フィールド数を越えました。%s と %s を増やしてください。','テーブル名','エンジン','パーティション','パーティション','パーティション名','値','索引を変更しました','索引の型','列（長さ）','データベースを削除しました','データベースの名前を変えました','データベースを作成しました','データベースを変更しました','データベースを変更','データベースを作成','Schema has been dropped.','Schema has been created.','Schema has been altered.','Alter schema','Create schema','呼出し','ルーチンを呼びました。%d 行を変更しました','外部キーを削除しました','外部キーを変更しました','外部キーを作成しました','ソースとターゲットの列は同じデータ型でなければなりません。ターゲット列に索引があり、データが存在しなければなりません。','外キー','テーブル','変更','列を追加','ビューを削除しました','ビューを変更しました','ビューを作成しました','ビューを作成','名称','削除しました','変更しました','作成しました','変更','作成','開始','終了','毎回','完成後に保存','ルーチンを作成','ルーチンを変更','ルーチンを作成','関数の変更','プロシージャの変更','関数の作成','プロシージャの作成','戻り値の型','Sequence has been dropped.','Sequence has been created.','Sequence has been altered.','Alter sequence','Create sequence','Type has been dropped.','Type has been created.','Alter type','Create type','トリガーを削除しました','トリガーを変更しました','トリガーを追加しました','トリガーの変更','トリガーの作成','時間','イベント','ユーザを削除','ユーザを変更','ユーザを作成','Hashed','ルーチン','権限の付与','権限の取消し','%d プロセスを強制終了しました','強制終了','%d を更新しました','Double click on a value to modify it.','%d 行をインポートしました','テーブルを選択できません','関係','Increase text length to modify this value.','Use edit link to modify this value.','ページ','全結果','クローン','CSV インポート','インポート','テーブルをtruncateしました','テーブルを移動しました','テーブルを削除しました','Schema','テーブルとビュー','Search data in tables','エンジン','データ長','索引長','空き','行数','合計 %d','分析','最適化','チェック','修復','Truncate','別のデータベースへ移動?','移動','Sequences','スケジュール','指定時刻',',','%d メールを送信しました');break;case"nl":$Ba=array('Onmogelijk bestand te uploaden.','Maximum toegelaten bestandsgrootte is %sB.','Bestand niet gevonden.','origineel','Geen tabellen.','Taal','Gebruik','Bestand bestaat reeds.','Gebruikersgedefiniëerde types','Getallen','Datum en tijd','Tekst','Binaire gegevens','Netwerk','Geometrie','Lijsten','Databasesysteem','Server','Gebruikersnaam','Wachtwoord','Inloggen','Blijf aangemeld','Gegevens selecteren','Toon structuur','View aanpassen','Tabel aanpassen','Nieuw item','laatste','Bewerk',array('%d byte','%d bytes'),'Kies','Functies','Totalen','Zoeken','overal','Sorteren','Aflopend','Beperk','Tekst lengte','Acties','SQL opdracht','leeg','openen','opslaan','Exporteer','Uitloggen','database','schema','Nieuwe tabel','kies','Geen extensie','Geen geldige PHP extensies beschikbaar (%s).','Ongeldig CSRF token. Verstuur het formulier opnieuw.','Uitloggen geslaagd.','Sessies moeten geactiveerd zijn.','Uw sessie is verlopen. Gelieve opnieuw in te loggen.','Ongeldige logingegevens.','POST-data is te groot. Verklein de hoeveelheid data of verhoog de %s configuratie.','Database','Ongeldige database.','Databases verwijderd.','Database selecteren','Nieuwe database','Rechten','Proceslijst','Variabelen','Status','%s versie: %s met PHP extensie %s','Aangemeld als: %s','Collatie','Tabellen','Verwijderen','Weet u het zeker?','Geen rijen.','Foreign keys','collation','ON DELETE','Kolomnaam','Parameternaam','Type','Lengte','Opties','Auto nummering','Standaard waarden','Commentaar','Volgende toevoegen','Omhoog','Omlaag','Verwijderen','View','Tabel','Kolom','Indexen','Indexen aanpassen','Bron','Doel','ON UPDATE','Aanpassen','Foreign key aanmaken','Triggers','Trigger aanmaken','Database schema','Exporteren','Uitvoer','Formaat','Procedures','Events','Data','bewerk','Gebruiker aanmaken','Fout in query','%.3f s',array('%d rij','%d rijen'),array('Query uitgevoerd, %d rij geraakt.','Query uitgevoerd, %d rijen geraakt.'),'Geen opdrachten uit te voeren.','Uitvoeren','Stoppen bij fout','Bestand uploaden','Bestanden uploaden is uitgeschakeld.','Van server','Webserver bestand %s','Bestand uitvoeren','Geschiedenis','Wissen','Item verwijderd.','Item aangepast.','Item%s toegevoegd.','Toevoegen','Opslaan','Opslaan en verder bewerken','Opslaan, daarna toevoegen','Verwijderen','Tabel verwijderd.','Tabel aangepast.','Tabel aangemaakt.','Tabel aanmaken','Maximum aantal velden bereikt. Verhoog %s en %s.','Tabelnaam','engine','Partitioneren op','Partities','Partitie naam','Waarden','Index aangepast.','Index type','Kolom (lengte)','Database verwijderd.','Database hernoemd.','Database aangemaakt.','Database aangepast.','Database aanpassen','Database aanmaken','Schema verwijderd.','Schema aangemaakt.','Schema gewijzigd.','Schema wijzigen','Schema maken','Uitvoeren',array('Procedure uitgevoerd, %d rij geraakt.','Procedure uitgevoerd, %d rijen geraakt.'),'Foreign key verwijderd.','Foreign key aangepast.','Foreign key aangemaakt.','Bron- en doelkolommen moeten van hetzelfde data type zijn, er moet een index bestaan op de gekozen kolommen en er moet gerelateerde data bestaan.','Foreign key','Doeltabel','Veranderen','Kolom toevoegen','View verwijderd.','View aangepast.','View aangemaakt.','View aanmaken','Naam','Event werd verwijderd.','Event werd aangepast.','Event werd aangemaakt.','Event aanpassen','Event aanmaken','Start','Stop','Iedere','Bewaren na voltooiing','Procedure verwijderd.','Procedure aangepast.','Procedure aangemaakt.','Functie aanpassen','Procedure aanpassen','Functie aanmaken','Procedure aanmaken','Return type','Sequence verwijderd.','Sequence aangemaakt.','Sequence gewijzigd.','Sequence wijzigen','Sequence maken','Type verwijderd.','Type aangemaakt.','Type wijzigen','Type maken','Trigger verwijderd.','Trigger aangepast.','Trigger aangemaakt.','Trigger aanpassen','Trigger aanmaken','Time','Event','Gebruiker verwijderd.','Gebruiker aangepast.','Gebruiker aangemaakt.','Gehashed','Routine','Toekennen','Intrekken',array('%d proces gestopt.','%d processen gestopt.'),'Stoppen',array('%d item aangepast.','%d items aangepast.'),'Dubbelklik op een waarde om deze te bewerken.',array('%d rij werd geïmporteerd.','%d rijen werden geïmporteerd.'),'Onmogelijk tabel te selecteren','Relaties','Verhoog de lengte om deze waarde te bewerken.','Gebruik de link "bewerk" om deze waarde te wijzigen.','Pagina','volledig resultaat','Dupliceer','CSV Import','Importeren','Tabellen werden geleegd.','Tabellen werden verplaatst.','Tabellen werden verwijderd.','Schema','Tabellen en views','Zoeken in database','Engine','Data lengte','Index lengte','Data Vrij','Rijen','%d in totaal','Analyseer','Optimaliseer','Controleer','Herstel','Legen','Verplaats naar andere database','Verplaats','Sequences','Schedule','Op aangegeven tijd','.','Bijlagen');break;case"ru":$Ba=array('Не удалось загрузить файл на сервер.','Максимальный разрешенный размер файла - %sB.','Такого файла не существует.','исходный','В базе данных нет таблиц.','Язык','Выбрать','Файл уже существует.','Типы пользователей','Число','Дата и время','Строки','Двоичный тип','Сеть','Геометрия','Списки','Движок','Сервер','Имя пользователя','Пароль','Войти','Оставаться в системе','Выбрать','Показать структуру','Изменить представление','Изменить таблицу','Новая запись','последняя','Редактировать',array('%d байт','%d байта','%d байтов'),'Выбрать','Функции','Агрегация','Поиск','в любом месте','Сортировать','по убыванию','Лимит','Длина текста','Действие','SQL запрос','пусто','открыть','сохранить','Дамп','Выйти','база данных','схема','Создать новую таблицу','выбрать','Нет расширений','Не доступно ни одного расширения из поддерживаемых (%s).','Недействительный CSRF токен. Отправите форму ещё раз.','Вы успешно покинули систему.','Сессии должны быть включены.','Срок действия сесси истек, нужно снова войти в систему.','Неправильное имя пользователя или пароль.','Слишком большой объем POST-данных. Пошлите меньший объем данных или увеличьте параметр конфигурационной директивы %s.','База данных','Плохая база данных.','Базы данных удалены.','Выбрать базу данных','Создать новую базу данных','Полномочия','Список процессов','Переменные','Состояние','Версия %s: %s с PHP-расширением %s','Вы вошли как: %s','Режим сопоставления','Таблицы','Удалить','Вы уверены?','Нет записей.','Внешние ключи','режим сопоставления','При стирании','Название поля','Название параметра','Тип','Длина','Действие','Автоматическое приращение','Значения по умолчанию','Комментарий','Добавить еще','Переместить вверх','Переместить вниз','Удалить','Представление','Таблица','Колонка','Индексы','Изменить индексы','Источник','Цель','При обновлении','Изменить','Добавить внешний ключ','Триггеры','Добавить триггер','Схема базы данных','Експорт','Выходные данные','Формат','Хранимые процедуры и функции','События','Данные','редактировать','Создать пользователя','Ошибка в запросe','%.3f s',array('%d строка','%d строки','%d строк'),array('Запрос завершен, изменена %d запись.','Запрос завершен, изменены %d записи.','Запрос завершен, изменено %d записей.'),'Нет команд для выполнения.','Выполнить','Остановить при ошибке','Загрузить файл на сервер','Загрузка файлов на сервер запрещена.','С сервера','Файл %s на вебсервере','Запустить файл','История','Очистить','Запись удалена.','Запись обновлена.','Запись%s была вставлена.','Вставить','Сохранить','Сохранить и продолжить редактирование','Сохранить и вставить еще','Стереть','Таблица была удалена.','Таблица была изменена.','Таблица была создана.','Создать таблицу','Достигнуто максимальное значение количества доступных полей. Увеличьте %s и %s.','Название таблицы','тип','Разделить по','Разделы','Название раздела','Параметры','Индексы изменены.','Тип индекса','Колонка (длина)','База данных была удалена.','База данных была переименована.','База данных была создана.','База данных была изменена.','Изменить базу данных','Создать базу данных','Схема удалена.','Создана новая схема.','Схема изменена.','Изменить схему','Новая схема','Вызвать',array('Была вызвана процедура, %d запись была изменена.','Была вызвана процедура, %d записи было изменено.','Была вызвана процедура, %d записей было изменено.'),'Внешний ключ был удален.','Внешний ключ был изменен.','Внешний ключ был создан.','Колонки должны иметь одинаковые типы данных, в результирующей колонке должен быть индекс, данные для импорта должны существовать.','Внешний ключ','Результирующая таблица','Изменить','Добавить колонку','Представление было удалено.','Представление было изменено.','Представление было создано.','Создать представление','Название','Событие было удалено.','Событие было изменено.','Событие было создано.','Изменить событие','Создать событие','Начало','Конец','Каждые','После завершения сохранить','Процедура была удалена.','Процедура была изменена.','Процедура была создана.','Изменить функцию','Изменить процедуру','Создать функцию','Создать процедуру','Возвращаемый тип','«Последовательность» удалена.','Создана новая «последовательность».','«Последовательность» изменена.','Изменить «последовательность»','Создать «последовательность»','Тип удален.','Создан новый тип.','Изменить тип','Создать тип','Триггер был удален.','Триггер был изменен.','Триггер был создан.','Изменить триггер','Создать триггер','Время','Событие','Пользователь был удален.','Пользователь был изменен.','Пользователь был создан.','Хешировано','Процедура','Позволить','Запретить',array('Был завершен %d процесс.','Было завершено %d процесса.','Было завершёно %d процессов.'),'Завершить',array('Была изменена %d запись.','Были изменены %d записи.','Было изменено %d записей.'),'Кликни два раза по значению, чтобы его изменить.',array('Импортирована %d строка.','Импортировано %d строки.','Импортировано %d строк.'),'Не удалось получить данные из таблицы','Реляции','Увеличь длину текста, чтобы изменить это значение.','Изменить это значение можно с помощью ссылки «изменить».','Страница','весь результат','Клонировать','Импорт CSV','Импорт','Таблицы были очищены.','Таблицы были перемещены.','Таблицы были удалены.','Схема','Таблицы и представления','Поиск в таблицах','Тип','Объём данных','Объём индексов','Свободное место','Строк','Всего %d','Анализировать','Оптимизировать','Проверить','Исправить','Очистить','Переместить в другою базу данных','Переместить','«Последовательности»','Расписание','В данное время',' ','Прикрепленные файлы');break;case"sk":$Ba=array('Súbor sa nepodarilo nahrať.','Maximálna povolená veľkosť súboru je %sB.','Súbor neexistuje.','originál','Žiadne tabuľky.','Jazyk','Vybrať','Súbor existuje.','Užívateľské typy','Čísla','Dátum a čas','Reťazce','Binárne','Sieť','Geometria','Zoznamy','Systém','Server','Používateľ','Heslo','Prihlásiť sa','Trvalé prihlásenie','Vypísať dáta','Zobraziť štruktúru','Zmeniť pohľad','Zmeniť tabuľku','Nová položka','posledný','Upraviť',array('%d bajt','%d bajty','%d bajtov'),'Vypísať','Funkcie','Agregácia','Vyhľadať','kdekoľvek','Zotriediť','zostupne','Limit','Dĺžka textov','Akcia','SQL príkaz','prázdne','otvoriť','uložiť','Export','Odhlásiť','databáza','schéma','Vytvoriť novú tabuľku','vypísať','Žiadne rozšírenie','Nie je dostupné žiadne z podporovaných rozšírení (%s).','Neplatný token CSRF. Odošlite formulár znova.','Odhlásenie prebehlo v poriadku.','Session premenné musia byť povolené.','Session vypršala, prihláste sa prosím znova.','Neplatné prihlasovacie údaje.','Príliš veľké POST dáta. Zmenšite dáta alebo zvýšte hodnotu konfiguračej direktívy %s.','Databáza','Nesprávna databáza.','Databázy boli odstránené.','Vybrať databázu','Vytvoriť novú databázu','Oprávnenia','Zoznam procesov','Premenné','Stav','Verzia %s: %s cez PHP rozšírenie %s','Prihlásený ako: %s','Porovnávanie','Tabuľky','Odstrániť','Naozaj?','Žiadne riadky.','Cudzie kľúče','porovnávanie','ON DELETE','Názov stĺpca','Názov parametra','Typ','Dĺžka','Voľby','Auto Increment','Východzie hodnoty','Komentár','Pridať ďalší','Presunúť hore','Presunúť dolu','Odobrať','Pohľad','Tabuľka','Stĺpec','Indexy','Zmeniť indexy','Zdroj','Cieľ','ON UPDATE','Zmeniť','Pridať cudzí kľúč','Triggery','Pridať trigger','Schéma databázy','Export','Výstup','Formát','Procedúry','Udalosti','Dáta','upraviť','Vytvoriť používateľa','Chyba v dotaze','%.3f s',array('%d riadok','%d riadky','%d riadkov'),array('Príkaz prebehol v poriadku, bol zmenený %d záznam.','Príkaz prebehol v poriadku boli zmenené %d záznamy.','Príkaz prebehol v poriadku bolo zmenených %d záznamov.'),'Žiadne príkazy na vykonanie.','Vykonať','Zastaviť pri chybe','Nahranie súboru','Nahrávánie súborov nie je povolené.','Zo serveru','Súbor %s na webovom serveri','Spustiť súbor','História','Vyčistiť','Položka bola vymazaná.','Položka bola aktualizovaná.','Položka%s bola vložená.','Vložiť','Uložiť','Uložiť a pokračovať v úpravách','Uložiť a vložiť ďalší','Zmazať','Tabuľka bola odstránená.','Tabuľka bola zmenená.','Tabuľka bola vytvorená.','Vytvoriť tabuľku','Bol prekročený maximálny počet povolených polí. Zvýšte prosím %s a %s.','Názov tabuľky','úložisko','Rozdeliť podľa','Oddiely','Názov oddielu','Hodnoty','Indexy boli zmenené.','Typ indexu','Stĺpec (dĺžka)','Databáza bola odstránená.','Databáza bola premenovaná.','Databáza bola vytvorená.','Databáza bola zmenená.','Zmeniť databázu','Vytvoriť databázu','Schéma bola odstránená.','Schéma bola vytvorená.','Schéma bola zmenená.','Pozmeniť schému','Vytvoriť schému','Zavolať',array('Procedúra bola zavolaná, bol zmenený %d záznam.','Procedúra bola zavolaná, boli zmenené %d záznamy.','Procedúra bola zavolaná, bolo zmenených %d záznamov.'),'Cudzí kľúč bol odstránený.','Cudzí kľúč bol zmenený.','Cudzí kľúč bol vytvorený.','Zdrojové a cieľové stĺpce musia mať rovnaký datový typ, nad cieľovými stĺpcami musí byť definovaný index a odkazované dáta musia existovať.','Cudzí kľúč','Cieľová tabuľka','Zmeniť','Pridať stĺpec','Pohľad bol odstránený.','Pohľad bol zmenený.','Pohľad bol vytvorený.','Vytvoriť pohľad','Názov','Udalosť bola odstránená.','Udalosť bola zmenená.','Udalosť bola vytvorená.','Upraviť udalosť','Vytvoriť udalosť','Začiatok','Koniec','Každých','Po dokončení zachovat','Procedúra bola odstránená.','Procedúra bola zmenená.','Procedúra bola vytvorená.','Zmeniť funkciu','Zmeniť procedúru','Vytvoriť funkciu','Vytvoriť procedúru','Návratový typ','Sekvencia bola odstránená.','Sekvencia bola vytvorená.','Sekvencia bola zmenená.','Pozmeniť sekvenciu','Vytvoriť sekvenciu','Typ bol odstránený.','Typ bol vytvorený.','Pozmeniť typ','Vytvoriť typ','Trigger bol odstránený.','Trigger bol zmenený.','Trigger bol vytvorený.','Zmeniť trigger','Vytvoriť trigger','Čas','Udalosť','Používateľ bol odstránený.','Používateľ bol zmenený.','Používateľ bol vytvorený.','Zahašované','Procedúra','Povoliť','Zakázať',array('Bol ukončený %d proces.','Boli ukončené %d procesy.','Bolo ukončených %d procesov.'),'Ukončiť','%d položiek bolo ovplyvnených.','Dvojkliknite na políčko, ktoré chcete zmeniť.',array('Bol importovaný %d záznam.','Boli importované %d záznamy.','Bolo importovaných %d záznamov.'),'Tabuľku sa nepodarilo vypísať','Vzťahy','Pre zmenu tejto hodnoty zvýšte dĺžku textov.','Pre zmenu tejto hodnoty použite odkaz upraviť.','Stránka','celý výsledok','Klonovať','Import CSV','Import','Tabuľka bola vyprázdnená','Tabuľka bola presunutá','Tabuľka bola odstránená','Schéma','Tabuľky a pohľady','Vyhľadať dáta v tabuľkách','Typ','Veľkosť dát','Veľkosť indexu','Voľné miesto','Riadky','%d celkom','Analyzovať','Optimalizovať','Skontrolovať','Opraviť','Vyprázdniť','Presunúť do inej databázy','Presunúť','Sekvencia','Plán','V stanovený čas',' ','Prílohy');break;case"zh-tw":$Ba=array('無法上傳檔案。','允許的檔案上限大小為%sB','檔案不存在','原始','沒有資料表。','語言','使用','檔案已存在。','使用者類型','數字','日期時間','字符串','二進制','網路','幾何','列表','資料庫系統','伺服器','帳號','密碼','登入','永久登入','選擇資料','秀出結構','更改檢視表','更改資料表','新建項','最後一頁','編輯','%d byte(s)','選擇','函數','集合','搜尋','任意位置','排序','降冪','限定','Text 長度','動作','SQL命令','空值','打開','儲存','導入/導出','登出','資料庫','架構','建立新資料表','選擇','沒有 擴充模組','沒有任何支援的PHP擴充模組（%s）。','無效的 CSRF token。請重新發送表單。','登出成功。','Session 必須被啟用。','Session 已過期，請重新登入。','無效的憑證。','POST 資料太大。減少資料或者增加 %s 的設定值。','資料庫','無效的資料庫。','資料庫已刪除。','選擇資料庫','建立新資料庫','權限','進程列表','變數','狀態','%s版本：%s 透過PHP擴充模組 %s','登錄為：%s','校對','資料表','丟棄','你確定嗎？','沒有行。','外鍵','校對','ON DELETE','列名','參數名稱','類型','長度','選項','自動增加','預設值','註解','新增下一個','上移','下移','移除','檢視表','資料表','列','索引','更改索引','來源','目標','ON UPDATE','更改','新增外鍵','觸發器','建立觸發器','資料庫架構','匯出','輸出','格式','程序','事件','資料','編輯','建立使用者','查詢出錯','%.3f秒','%d行','執行查詢OK，%d行受影響','沒有命令可執行。','執行','出錯時停止','檔案上傳','檔案上傳被禁用。','從伺服器','網頁伺服器檔案 %s','執行檔案','歷史','清除','該項目已被刪除','已更新項目。','已插入項目%s。','插入','儲存','保存並繼續編輯','儲存並插入下一個','刪除','已經刪除資料表。','資料表已更改。','資料表已更改。','建立資料表表','超過最多允許的字段數量。請增加%s和%s 。','資料表名稱','引擎','分區類型','分區','分區名','值','已更改索引。','索引類型','列（長度）','資料庫已刪除。','已重新命名資料庫。','已建立資料庫。','已更改資料庫。','更改資料庫','建立資料庫','已刪除架構。','已建立架構。','已更改架構。','更改架構','建立架構','呼叫','程序已被執行，%d行被影響','已刪除外鍵。','已更改外鍵。','已建立外鍵。','源列和目標列必須具有相同的數據類型，在目標列上必須有一個索引並且引用的數據必須存在。','外鍵','目標資料表','更改','新增資料列','已丟棄檢視表。','已更改檢視表。','已建立檢視表。','建立檢視表','名稱','已丟棄事件。','已更改事件。','已建立事件。','更改事件','建立事件','開始','結束','每','在完成後保存','已丟棄程序。','已更改子程序。','已建立子程序。','更改函數','更改過程','建立函數','建立預存程序','返回類型','已刪除 sequence。','已建立 sequence。','已更改 sequence。','更改 sequence','建立 sequence','已刪除類型。','已建立類型。','更改類型','建立類型','已丟棄觸發器。','已更改觸發器。','已建立觸發器。','更改觸發器','建立觸發器','時間','事件','已丟棄使用者。','已更改使用者。','已建立使用者。','Hashed','程序','授權','廢除','%d 個 Process(es) 被終止','終止','%d個項目受到影響。','雙擊以進行修改。','%d行已導入。','無法選擇該資料表','關聯','增加字串長度來修改。','使用編輯連結來修改。','頁','所有結果','複製','匯入 CSV','匯入','已清空資料表。','已轉移資料表。','已丟棄表。','架構','資料表和檢視表','在資料庫搜尋','引擎','資料長度','索引長度','資料空閒','行數','總共 %d 個','分析','優化','檢查','修復','清空','轉移到其它資料庫','轉移','Sequences','調度','在指定時間',',','附件');break;case"zh":$Ba=array('不能上传文件。','最多允许的文件大小为 %sB','文件不存在。','原始','没有表。','语言','使用','文件已存在。','用户类型','数字','日期时间','字符串','二进制','网络','几何图形','列表','系统','服务器','用户名','密码','登录','保持登录','选择数据','显示结构','更改视图','更改表','新建项','最后','编辑','%d 字节','选择','函数','集合','搜索','任意位置','排序','降序','限定','文本长度','动作','SQL命令','空','打开','保存','导出','注销','数据库','模式','创建新表','选择','没有扩展','没有支持的 PHP 扩展可用（%s）。','无效 CSRF 令牌。重新发送表单。','注销成功。','会话必须被启用。','会话已过期，请重新登录。','无效凭据。','太大的 POST 数据。减少数据或者增加 %s 配置命令。','数据库','无效数据库。','已丢弃数据库。','选择数据库','创建新数据库','权限','进程列表','变量','状态','%s 版本：%s 通过 PHP 扩展 %s','登录为：%s','校对','表','丢弃','你确定吗？','没有行。','外键','校对','ON DELETE','列名','参数名','类型','长度','选项','自动增量','默认值','注释','添加下一个','上移','下移','移除','视图','表','列','索引','更改索引','源','目标','ON UPDATE','更改','添加外键','触发器','创建触发器','数据库概要','导出','输出','格式','子程序','事件','数据','编辑','创建用户','查询出错','%.3f 秒','%d 行','执行查询OK，%d 行受影响。','没有命令执行。','执行','出错时停止','文件上传','文件上传被禁用。','来自服务器','Web服务器文件 %s','运行文件','历史','清除','已删除项目。','已更新项目。','已插入项目%s。','插入','保存','保存并继续编辑','保存并插入下一个','删除','已丢弃表。','已更改表。','已创建表。','创建表','超过最多允许的字段数量。请增加 %s 和 %s 。','表名','引擎','分区类型','分区','分区名','值','已更改索引。','索引类型','列（长度）','已丢弃数据库。','已重命名数据库。','已创建数据库。','已更改数据库。','更改数据库','创建数据库','已丢弃模式。','已创建模式。','已更改模式。','更改模式','创建模式','调用','子程序被调用，%d 行被影响。','已删除外键。','已更改外键。','已创建外键。','源列和目标列必须具有相同的数据类型，在目标列上必须有一个索引并且引用的数据必须存在。','外键','目标表','更改','增加列','已丢弃视图。','已更改视图。','已创建视图。','创建视图','名称','已丢弃事件。','已更改事件。','已创建事件。','更改事件','创建事件','开始','结束','每','完成后保存','已丢弃子程序。','已更改子程序。','已创建子程序。','更改函数','更改过程','创建函数','创建过程','返回类型','已丢弃序列。','已创建序列。','已更改序列。','更改序列','创建序列','已丢弃类型。','已创建类型。','更改类型','创建类型','已丢弃触发器。','已更改触发器。','已创建触发器。','更改触发器','创建触发器','时间','事件','已丢弃用户。','已更改用户。','已创建用户。','Hashed','子程序','授权','废除','%d 个进程被终止','终止','%d 个项目受到影响。','在值上双击类修改它。','%d 行已导入。','不能选择该表','关联信息','增加文本长度以修改该值。','使用编辑链接来修改该值。','页面','所有结果','克隆','CSV 导入','导入','已清空表。','已转移表。','已丢弃表。','模式','表和视图','在表中搜索数据','引擎','数据长度','索引长度','数据空闲','行数','共计 %d','分析','优化','检查','修复','清空','转移到其它数据库','转移','序列','调度','在指定时间',',','附件');break;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($ef,$N,$Q,$Ef='auth_error'){set_exception_handler($Ef);parent::__construct($ef,$N,$Q);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($j,$Ya=false){$g=parent::query($j);if(!$g){$Bf=$this->errorInfo();$this->error=$Bf[2];return
false;}$this->store_result($g);return$g;}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result($g=null){if(!$g){$g=$this->_result;}if($g->columnCount()){$g->num_rows=$g->rowCount();return$g;}$this->affected_rows=$g->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($j,$d=0){$g=$this->query($j);if(!$g){return
false;}$a=$g->fetch();return$a[$d];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$a=(object)$this->getColumnMeta($this->_offset++);$a->orgtable=$a->table;$a->orgname=$a->name;$a->charsetnr=(in_array("blob",$a->flags)?63:0);return$a;}}}$Aa=array();$ga=array();$Aa[]="SQLite";$Aa[]="SQLite3";$Aa[]="PDO_SQLite";if(extension_loaded("sqlite3")||extension_loaded("pdo_sqlite")){$ga["sqlite"]="SQLite 3";}if(extension_loaded("sqlite")||extension_loaded("pdo_sqlite")){$ga["sqlite2"]="SQLite 2";}if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite2"])?"sqlite":"sqlite3")){if(isset($_GET["sqlite2"])){class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($W){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($W);}function
query($j,$Ya=false){$lf=($Ya?"unbufferedQuery":"query");$g=@$this->_link->$lf($j,SQLITE_BOTH,$n);if(!$g){$this->error=$n;return
false;}elseif($g===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($g);}function
quote($H){return"'".sqlite_escape_string($H)."'";}function
store_result(){return$this->_result;}function
result($j,$d=0){$g=$this->query($j);if(!is_object($g)){return
false;}$a=$g->_result->fetch();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($g){$this->_result=$g;if(method_exists($g,'numRows')){$this->num_rows=$g->numRows();}}function
fetch_assoc(){$a=$this->_result->fetch(SQLITE_ASSOC);if(!$a){return
false;}$f=array();foreach($a
as$e=>$b){$f[($e[0]=='"'?idf_unescape($e):$e)]=$b;}return$f;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$h=$this->_result->fieldName($this->_offset++);$ha='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($ha\\.)?$ha\$~",$h,$k)){$i=($k[3]!=""?$k[3]:idf_unescape($k[2]));$h=($k[5]!=""?$k[5]:idf_unescape($k[4]));}return(object)array("name"=>$h,"orgname"=>$h,"orgtable"=>$i,);}}}else{class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($W){$this->_link=new
SQLite3($W);$rd=$this->_link->version();$this->server_info=$rd["versionString"];}function
query($j){$g=@$this->_link->query($j);if(!$g){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($g->numColumns()){return
new
Min_Result($g);}$this->affected_rows=$this->_link->changes();return
true;}function
quote($H){return"'".$this->_link->escapeString($H)."'";}function
store_result(){return$this->_result;}function
result($j,$d=0){$g=$this->query($j);if(!is_object($g)){return
false;}$a=$g->_result->fetchArray();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($g){$this->_result=$g;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$G=$this->_offset++;$x=$this->_result->columnType($G);return(object)array("name"=>$this->_result->columnName($G),"type"=>$x,"charsetnr"=>($x==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($W){$this->dsn(DRIVER.":$W","","");}}}class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($W){if(is_readable($W)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\]|:)",$W)?$W:dirname($_SERVER["SCRIPT_FILENAME"])."/$W")." AS a")){$this->Min_SQLite($W);return
true;}return
false;}function
multi_query($j){return$this->_result=$this->query($j);}function
next_result(){return
false;}}function
idf_escape($J){return'"'.str_replace('"','""',$J).'"';}function
table($J){return
idf_escape($J);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($j,$t,$K,$M=0,$Na=" "){return" $j$t".(isset($K)?$Na."LIMIT $K".($M?" OFFSET $M":""):"");}function
limit1($j,$t){global$c;return($c->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($j,$t,1):" $j$t");}function
db_collation($r,$U){global$c;return$c->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($B){return
array();}function
table_status($h=""){global$c;$f=array();$g=$c->query("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($h!=""?" AND name = ".$c->quote($h):""));while($a=$g->fetch_assoc()){$a["Auto_increment"]="";$f[$a["Name"]]=$a;}$g=$c->query("SELECT * FROM sqlite_sequence");if($g){while($a=$g->fetch_assoc()){$f[$a["name"]]["Auto_increment"]=$a["seq"];}}return($h!=""?$f[$h]:$f);}function
is_view($D){return$D["Engine"]=="view";}function
fk_support($D){global$c;return!$c->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($i,$uc=false){global$c;$f=array();$g=$c->query("PRAGMA table_info(".table($i).")");if(is_object($g)){while($a=$g->fetch_assoc()){$x=strtolower($a["type"]);$ta=$a["dflt_value"];$f[$a["name"]]=array("field"=>$a["name"],"type"=>(eregi("int",$x)?"integer":(eregi("char|clob|text",$x)?"text":(eregi("blob",$x)?"blob":(eregi("real|floa|doub",$x)?"real":"numeric")))),"full_type"=>$x,"default"=>(ereg("'(.*)'",$ta,$k)?str_replace("''","'",$k[1]):($ta=="NULL"?null:$ta)),"null"=>!$a["notnull"],"auto_increment"=>eregi('^integer$',$x)&&$a["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$a["pk"],);}}return$f;}function
indexes($i,$L=null){global$c;$f=array();$Nb=array();foreach(fields($i)as$d){if($d["primary"]){$Nb[]=$d["field"];}}if($Nb){$f[""]=array("type"=>"PRIMARY","columns"=>$Nb,"lengths"=>array());}$g=$c->query("PRAGMA index_list(".table($i).")");if(is_object($g)){while($a=$g->fetch_assoc()){$f[$a["name"]]["type"]=($a["unique"]?"UNIQUE":"INDEX");$f[$a["name"]]["lengths"]=array();$if=$c->query("PRAGMA index_info(".idf_escape($a["name"]).")");while($Kc=$if->fetch_assoc()){$f[$a["name"]]["columns"][]=$Kc["name"];}}}return$f;}function
foreign_keys($i){global$c;$f=array();$g=$c->query("PRAGMA foreign_key_list(".table($i).")");if(is_object($g)){while($a=$g->fetch_assoc()){$_=&$f[$a["id"]];if(!$_){$_=$a;}$_["source"][]=$a["from"];$_["target"][]=$a["to"];}}return$f;}function
view($h){global$c;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$c->result("SELECT sql FROM sqlite_master WHERE name = ".$c->quote($h))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($r){return
false;}function
error(){global$c;return
h($c->error);}function
exact_value($b){global$c;return$c->quote($b);}function
create_database($r,$R){global$c;if(file_exists($r)){$c->error=lang(7);return
false;}$w=new
Min_SQLite($r);$w->query('PRAGMA encoding = "UTF-8"');$w->query('CREATE TABLE adminer (i)');$w->query('DROP TABLE adminer');return
true;}function
drop_databases($B){global$c;$c->Min_SQLite(":memory:");foreach($B
as$r){if(!@unlink($r)){$c->error=lang(7);return
false;}}return
true;}function
rename_database($h,$R){global$c;$c->Min_SQLite(":memory:");$c->error=lang(7);return@rename(DB,$h);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($i,$h,$o,$hb,$Oa,$ob,$R,$La,$tb){global$c;$u=array();foreach($o
as$d){if($d[1]){$u[]=($i!=""&&$d[0]==""?"ADD ":"  ").implode($d[1]);}}$u=array_merge($u,$hb);if($i!=""){foreach($u
as$b){if(!queries("ALTER TABLE ".table($i)." $b")){return
false;}}if($i!=$h&&!queries("ALTER TABLE ".table($i)." RENAME TO ".table($h))){return
false;}}elseif(!queries("CREATE TABLE ".table($h)." (\n".implode(",\n",$u)."\n)")){return
false;}if($La){queries("UPDATE sqlite_sequence SET seq = $La WHERE name = ".$c->quote($h));}return
true;}function
alter_indexes($i,$u){foreach($u
as$b){if(!queries(($b[2]?"DROP INDEX":"CREATE".($b[0]!="INDEX"?" UNIQUE":"")." INDEX ".idf_escape(uniqid($i."_"))." ON ".table($i))." $b[1]")){return
false;}}return
true;}function
truncate_tables($F){return
apply_queries("DELETE FROM",$F);}function
drop_views($Y){return
apply_queries("DROP VIEW",$Y);}function
drop_tables($F){return
apply_queries("DROP TABLE",$F);}function
move_tables($F,$Y,$oa){return
false;}function
trigger($h){global$c;preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$c->result("SELECT sql FROM sqlite_master WHERE name = ".$c->quote($h)),$k);return
array("Timing"=>strtoupper($k[1]),"Event"=>strtoupper($k[2]),"Trigger"=>$h,"Statement"=>$k[3]);}function
triggers($i){global$c;$f=array();$g=$c->query("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".$c->quote($i));while($a=$g->fetch_assoc()){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$a["sql"],$k);$f[$a["name"]]=array($k[1],$k[2]);}return$f;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($h,$x){}function
routines(){}function
begin(){return
queries("BEGIN");}function
insert_into($i,$s){return
queries("INSERT INTO ".table($i).($s?" (".implode(", ",array_keys($s)).")\nVALUES (".implode(", ",$s).")":"DEFAULT VALUES"));}function
insert_update($i,$s){return
queries("REPLACE INTO ".table($i)." (".implode(", ",array_keys($s)).") VALUES (".implode(", ",$s).")");}function
last_id(){global$c;return$c->result("SELECT LAST_INSERT_ROWID()");}function
explain($c,$j){return$c->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($_f){return
true;}function
create_sql($i,$La){global$c;return$c->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".$c->quote($i));}function
truncate_sql($i){return"DELETE FROM ".table($i);}function
use_sql($ca){}function
trigger_sql($i,$V){global$c;return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND name = ".$c->quote($i)));}function
show_variables(){global$c;$f=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$e){$f[$e]=$c->result("PRAGMA $e");}return$f;}function
show_status(){$f=array();foreach(get_vals("PRAGMA compile_options")as$jf){list($e,$b)=explode("=",$jf,2);$f[$e]=$b;}return$f;}function
support($sb){return
ereg('^(view|trigger|variables|status)$',$sb);}$A="sqlite";$S=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Ma=array_keys($S);$pb=array();$Ub=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$X=array("hex","length","lower","round","unixepoch","upper");$qb=array("avg","count","count distinct","group_concat","max","min","sum");$ec=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Aa[]="PgSQL";$Aa[]="PDO_PgSQL";if(extension_loaded("pgsql")||extension_loaded("pdo_pgsql")){$ga["pgsql"]="PostgreSQL";}if(isset($_GET["pgsql"])){define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($pf,$n){if(ini_bool("html_errors")){$n=html_entity_decode(strip_tags($n));}$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($E,$N,$Q){set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($E,"'\\"))."' user='".addcslashes($N,"'\\")."' password='".addcslashes($Q,"'\\")."'";$this->_link=@pg_connect($this->_string.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":""),PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&DB!=""){$this->_database=false;$this->_link=@pg_connect($this->_string,PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$rd=pg_version($this->_link);$this->server_info=$rd["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($H){return"'".pg_escape_string($this->_link,$H)."'";}function
select_db($ca){if($ca==DB){return$this->_database;}$f=@pg_connect($this->_connection." dbname='".addcslashes($ca,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($f){$this->_link=$f;}return$f;}function
close(){$this->_link=@pg_connect($this->_string);}function
query($j,$Ya=false){$g=@pg_query($this->_link,$j);if(!$g){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($g)){$this->affected_rows=pg_affected_rows($g);return
true;}return
new
Min_Result($g);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$d=0){$g=$this->query($j);if(!$g){return
false;}return
pg_fetch_result($g->_result,0,$d);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($g){$this->_result=$g;$this->num_rows=pg_num_rows($g);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$G=$this->_offset++;$f=new
stdClass;if(function_exists('pg_field_table')){$f->orgtable=pg_field_table($this->_result,$G);}$f->name=pg_field_name($this->_result,$G);$f->orgname=$f->name;$f->type=pg_field_type($this->_result,$G);$f->charsetnr=($f->type=="bytea"?63:0);return$f;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($E,$N,$Q){$H="pgsql:host='".str_replace(":","' port='",addcslashes($E,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn($H.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":""),$N,$Q);return
true;}function
select_db($ca){return(DB==$ca);}function
close(){}}}function
idf_escape($J){return'"'.str_replace('"','""',$J).'"';}function
table($J){return
idf_escape($J);}function
connect(){global$q;$c=new
Min_DB;$sa=$q->credentials();if($c->connect($sa[0],$sa[1],$sa[2])){return$c;}return$c->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database");}function
limit($j,$t,$K,$M=0,$Na=" "){return" $j$t".(isset($K)?$Na."LIMIT $K".($M?" OFFSET $M":""):"");}function
limit1($j,$t){return" $j$t";}function
db_collation($r,$U){global$c;return$c->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$c;return$c->result("SELECT user");}function
tables_list(){global$c;return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($B){return
array();}function
table_status($h=""){global$c;$f=array();$g=$c->query("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN '' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($h!=""?" AND relname = ".$c->quote($h):""));while($a=$g->fetch_assoc()){$f[$a["Name"]]=$a;}return($h!=""?$f[$h]:$f);}function
is_view($D){return$D["Engine"]=="view";}function
fk_support($D){return
true;}function
fields($i,$uc=false){global$c;$f=array();$g=$c->query("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".$c->quote($i)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
".($uc?"":"AND a.attnum > 0")."
ORDER BY a.attnum < 0, a.attnum");if($g){while($a=$g->fetch_assoc()){ereg('(.*)(\\((.*)\\))?',$a["full_type"],$k);list(,$a["type"],,$a["length"])=$k;$a["full_type"]=$a["type"].($a["length"]?"($a[length])":"");$a["null"]=($a["attnotnull"]=="f");$a["auto_increment"]=eregi("^nextval\\(",$a["default"]);$a["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);$f[$a["field"]]=$a;}}return$f;}function
indexes($i,$L=null){global$c;if(!is_object($L)){$L=$c;}$f=array();$Oe=$L->result("SELECT oid FROM pg_class WHERE relname = ".$L->quote($i));$z=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Oe AND attnum > 0",$L);$g=$L->query("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $Oe AND ci.oid = i.indexrelid");while($a=$g->fetch_assoc()){$f[$a["relname"]]["type"]=($a["indisprimary"]=="t"?"PRIMARY":($a["indisunique"]=="t"?"UNIQUE":"INDEX"));$f[$a["relname"]]["columns"]=array();foreach(explode(" ",$a["indkey"])as$mf){$f[$a["relname"]]["columns"][]=$z[$mf];}$f[$a["relname"]]["lengths"]=array();}return$f;}function
foreign_keys($i){global$c;$f=array();$g=$c->query("SELECT tc.constraint_name, kcu.column_name, rc.update_rule AS on_update, rc.delete_rule AS on_delete, ccu.table_name AS table, ccu.column_name AS ref
FROM information_schema.table_constraints tc
LEFT JOIN information_schema.key_column_usage kcu USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.referential_constraints rc USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.constraint_column_usage ccu ON rc.unique_constraint_catalog = ccu.constraint_catalog AND rc.unique_constraint_schema = ccu.constraint_schema AND rc.unique_constraint_name = ccu.constraint_name
WHERE tc.constraint_type = 'FOREIGN KEY' AND tc.table_name = ".$c->quote($i));while($a=$g->fetch_assoc()){$_=&$f[$a["constraint_name"]];if(!$_){$_=$a;}$_["source"][]=$a["column_name"];$_["target"][]=$a["ref"];}return$f;}function
view($h){global$c;return
array("select"=>$c->result("SELECT pg_get_viewdef(".$c->quote($h).")"));}function
collations(){return
array();}function
information_schema($r){return($r=="information_schema");}function
error(){global$c;$f=h($c->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$f,$k)){$f=$k[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($k[3]).'})(.*)~','\\1<b>\\2</b>',$k[2]).$k[4];}return
nl_br($f);}function
exact_value($b){global$c;return$c->quote($b);}function
create_database($r,$R){return
queries("CREATE DATABASE ".idf_escape($r).($R?" ENCODING ".idf_escape($R):""));}function
drop_databases($B){global$c;$c->close();return
apply_queries("DROP DATABASE",$B,'idf_escape');}function
rename_database($h,$R){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($h));}function
auto_increment(){return"";}function
alter_table($i,$h,$o,$hb,$Oa,$ob,$R,$La,$tb){global$c;$u=array();$na=array();foreach($o
as$d){$G=idf_escape($d[0]);$b=$d[1];if(!$b){$u[]="DROP $G";}else{$Zc=$b[5];unset($b[5]);if(isset($b[6])&&$d[0]==""){$b[1]=($b[1]=="bigint"?" big":" ")."serial";}if($d[0]==""){$u[]=($i!=""?"ADD ":"  ").implode($b);}else{if($G!=$b[0]){$na[]="ALTER TABLE ".table($i)." RENAME $G TO $b[0]";}$u[]="ALTER $G TYPE$b[1]";if(!$b[6]){$u[]="ALTER $G ".($b[3]?"SET$b[3]":"DROP DEFAULT");$u[]="ALTER $G ".($b[2]==" NULL"?"DROP NOT":"SET").$b[2];}}if($d[0]!=""||$Zc!=""){$na[]="COMMENT ON COLUMN ".table($i).".$b[0] IS ".($Zc!=""?substr($Zc,9):"''");}}}$u=array_merge($u,$hb);if($i==""){array_unshift($na,"CREATE TABLE ".table($h)." (\n".implode(",\n",$u)."\n)");}elseif($u){array_unshift($na,"ALTER TABLE ".table($i)."\n".implode(",\n",$u));}if($i!=""&&$i!=$h){$na[]="ALTER TABLE ".table($i)." RENAME TO ".table($h);}if($i!=""||$Oa!=""){$na[]="COMMENT ON TABLE ".table($h)." IS ".$c->quote($Oa);}if($La!=""){}foreach($na
as$j){if(!queries($j)){return
false;}}return
true;}function
alter_indexes($i,$u){$ia=array();$kb=array();foreach($u
as$b){if($b[0]!="INDEX"){$ia[]=($b[2]?"\nDROP CONSTRAINT ":"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"")).$b[1];}elseif($b[2]){$kb[]=$b[1];}elseif(!queries("CREATE INDEX ".idf_escape(uniqid($i."_"))." ON ".table($i)." $b[1]")){return
false;}}return((!$ia||queries("ALTER TABLE ".table($i).implode(",",$ia)))&&(!$kb||queries("DROP INDEX ".implode(", ",$kb))));}function
truncate_tables($F){return
queries("TRUNCATE ".implode(", ",array_map('table',$F)));return
true;}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($F){return
queries("DROP TABLE ".implode(", ",array_map('table',$F)));}function
move_tables($F,$Y,$oa){foreach($F
as$i){if(!queries("ALTER TABLE ".table($i)." SET SCHEMA ".idf_escape($oa))){return
false;}}foreach($Y
as$i){if(!queries("ALTER VIEW ".table($i)." SET SCHEMA ".idf_escape($oa))){return
false;}}return
true;}function
trigger($h){global$c;$g=$c->query('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.$c->quote($_GET["trigger"]).' AND trigger_name = '.$c->quote($h));return$g->fetch_assoc();}function
triggers($i){global$c;$f=array();$g=$c->query("SELECT * FROM information_schema.triggers WHERE event_object_table = ".$c->quote($i));while($a=$g->fetch_assoc()){$f[$a["trigger_name"]]=array($a["condition_timing"],$a["event_manipulation"]);}return$f;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
begin(){return
queries("BEGIN");}function
insert_into($i,$s){return
queries("INSERT INTO ".table($i).($s?" (".implode(", ",array_keys($s)).")\nVALUES (".implode(", ",$s).")":"DEFAULT VALUES"));}function
last_id(){return
0;}function
explain($c,$j){return$c->query("EXPLAIN $j");}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace");}function
get_schema(){global$c;return$c->result("SELECT current_schema()");}function
set_schema($Ga){global$c,$S,$Ma;$f=$c->query("SET search_path TO ".idf_escape($Ga));foreach(types()as$x){if(!isset($S[$x])){$S[$x]=0;$Ma[lang(8)][]=$x;}}return$f;}function
use_sql($ca){return"\connect ".idf_escape($ca);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
support($sb){return
ereg('^(comment|view|scheme|sequence|trigger|type|variables|drop_col)$',$sb);}$A="pgsql";$S=array();$Ma=array();foreach(array(lang(9)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(10)=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),lang(11)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(12)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(13)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(14)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$e=>$b){$S+=$b;$Ma[$e]=array_keys($b);}$pb=array();$Ub=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$X=array("char_length","lower","round","to_hex","to_timestamp","upper");$qb=array("avg","count","count distinct","max","min","sum");$ec=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Aa[]="OCI8";$Aa[]="PDO_OCI";if(extension_loaded("oci8")||extension_loaded("pdo_oci")){$ga["oracle"]="Oracle";}if(isset($_GET["oracle"])){define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($pf,$n){if(ini_bool("html_errors")){$n=html_entity_decode(strip_tags($n));}$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($E,$N,$Q){$this->_link=@oci_new_connect($N,$Q,$E);if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($H){return"'".str_replace("'","''",$H)."'";}function
select_db($ca){return
true;}function
query($j,$Ya=false){$g=oci_parse($this->_link,$j);if(!$g){$n=oci_error($this->_link);$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$f=@oci_execute($g);restore_error_handler();if($f){if(oci_num_fields($g)){return
new
Min_Result($g);}$this->affected_rows=oci_num_rows($g);}return$f;}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$d=1){$g=$this->query($j);if(!is_object($g)||!oci_fetch($g->_result)){return
false;}return
oci_result($g->_result,$d);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($g){$this->_result=$g;}function
_convert($a){foreach((array)$a
as$e=>$b){if(is_a($b,'OCI-Lob')){$a[$e]=$b->load();}}return$a;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$G=$this->_offset++;$f=new
stdClass;$f->name=oci_field_name($this->_result,$G);$f->orgname=$f->name;$f->type=oci_field_type($this->_result,$G);$f->charsetnr=(ereg("raw|blob|bfile",$f->type)?63:0);return$f;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($E,$N,$Q){}function
select_db($ca){}}}function
idf_escape($J){return'"'.str_replace('"','""',$J).'"';}function
table($J){return
idf_escape($J);}function
connect(){global$q;$c=new
Min_DB;$sa=$q->credentials();if($c->connect($sa[0],$sa[1],$sa[2])){return$c;}return$c->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($j,$t,$K,$M=0,$Na=" "){return" $j$t".(isset($K)?($t?" AND":$Na."WHERE").($M?" rownum > $M AND":"")." rownum <= ".($K+$M):"");}function
limit1($j,$t){return" $j$t";}function
db_collation($r,$U){global$c;return$c->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$c;return$c->result("SELECT USER FROM DUAL");}function
tables_list(){global$c;return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".$c->quote(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($B){return
array();}function
table_status($h=""){global$c;$f=array();$te=$c->quote($h);$g=$c->query('SELECT table_name "Name", \'table\' "Engine" FROM all_tables WHERE tablespace_name = '.$c->quote(DB).($h!=""?" AND table_name = $te":"")."
UNION SELECT view_name, 'view' FROM user_views".($h!=""?" WHERE view_name = $te":""));while($a=$g->fetch_assoc()){if($h!=""){return$a;}$f[$a["Name"]]=$a;}return$f;}function
is_view($D){return$D["Engine"]=="view";}function
fk_support($D){return
true;}function
fields($i,$uc=false){global$c;$f=array();$g=$c->query("SELECT * FROM all_tab_columns WHERE table_name = ".$c->quote($i)." ORDER BY column_id");if($g){while($a=$g->fetch_assoc()){$x=$a["DATA_TYPE"];$Z="$a[DATA_PRECISION],$a[DATA_SCALE]";if($Z==","){$Z=$a["DATA_LENGTH"];}$f[$a["COLUMN_NAME"]]=array("field"=>$a["COLUMN_NAME"],"full_type"=>$x.($Z?"($Z)":""),"type"=>strtolower($x),"length"=>$Z,"default"=>$a["DATA_DEFAULT"],"null"=>($a["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}}return$f;}function
indexes($i,$L=null){return
array();}function
view($h){global$c;$g=$c->query('SELECT text "select" FROM user_views WHERE view_name = '.$c->quote($h));return$g->fetch_assoc();}function
collations(){return
array();}function
information_schema($r){return
false;}function
error(){global$c;return
h($c->error);}function
exact_value($b){global$c;return$c->quote($b);}function
explain($c,$j){}function
alter_table($i,$h,$o,$hb,$Oa,$ob,$R,$La,$tb){$u=$kb=array();foreach($o
as$d){$b=$d[1];if($b&&$d[0]!=""&&idf_escape($d[0])!=$b[0]){queries("ALTER TABLE ".table($i)." RENAME COLUMN ".idf_escape($d[0])." TO $b[0]");}if($b){$u[]=($i!=""?($d[0]!=""?"MODIFY (":"ADD ("):"  ").implode($b).($i!=""?")":"");}else{$kb[]=idf_escape($d[0]);}}if($i==""){return
queries("CREATE TABLE ".table($h)." (\n".implode(",\n",$u)."\n)");}return(!$u||queries("ALTER TABLE ".table($i)."\n".implode("\n",$u)))&&(!$kb||queries("ALTER TABLE ".table($i)." DROP (".implode(", ",$kb).")"))&&($i==$h||queries("ALTER TABLE ".table($i)." RENAME TO ".table($h)));}function
foreign_keys($i){return
array();}function
truncate_tables($F){return
apply_queries("TRUNCATE TABLE",$F);}function
drop_views($Y){return
apply_queries("DROP VIEW",$Y);}function
drop_tables($F){return
apply_queries("DROP TABLE",$F);}function
begin(){return
true;}function
insert_into($i,$s){return
queries("INSERT INTO ".table($i)." (".implode(", ",array_keys($s)).")\nVALUES (".implode(", ",$s).")");}function
last_id(){return
0;}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($_f){return
true;}function
support($sb){return
ereg("view|drop_col",$sb);}$A="oracle";$S=array();$Ma=array();foreach(array(lang(9)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(10)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(11)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(12)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$e=>$b){$S+=$b;$Ma[$e]=array_keys($b);}$pb=array();$Ub=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$X=array("length","lower","round","upper");$qb=array("avg","count","count distinct","max","min","sum");$ec=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Aa[]="SQLSRV";$Aa[]="MSSQL";if(extension_loaded("sqlsrv")||extension_loaded("mssql")){$ga["mssql"]="MS SQL";}if(isset($_GET["mssql"])){define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($E,$N,$Q){$this->_link=@sqlsrv_connect($E,array("UID"=>$N,"PWD"=>$Q));if($this->_link){$bf=sqlsrv_server_info($this->_link);$this->server_info=$bf['SQLServerVersion'];}else{$this->_get_error();}return(bool)$this->_link;}function
quote($H){return"'".str_replace("'","''",$H)."'";}function
select_db($ca){return$this->query("USE $ca");}function
query($j,$Ya=false){$g=sqlsrv_query($this->_link,$j);if(!$g){$this->_get_error();return
false;}return$this->store_result($g);}function
multi_query($j){$this->_result=sqlsrv_query($this->_link,$j);if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($g=null){if(!$g){$g=$this->_result;}if(sqlsrv_field_metadata($g)){return
new
Min_Result($g);}$this->affected_rows=sqlsrv_rows_affected($g);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($j,$d=0){$g=$this->query($j);if(!is_object($g)){return
false;}$a=$g->fetch_row();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($g){$this->_result=$g;}function
_convert($a){foreach((array)$a
as$e=>$b){if(is_a($b,'DateTime')){$a[$e]=$b->format("Y-m-d H:i:s");}}return$a;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields){$this->_fields=sqlsrv_field_metadata($this->_result);}$d=$this->_fields[$this->_offset++];$f=new
stdClass;$f->name=$d["Name"];$f->orgname=$d["Name"];$f->type=($d["Type"]==1?254:0);return$f;}function
seek($M){for($l=0;$l<$M;$l++){sqlsrv_fetch($this->_result);}}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($E,$N,$Q){$this->_link=@mssql_connect($E,$N,$Q);if($this->_link){$g=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$a=$g->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$a[0]] $a[1]";}else{$this->error=mssql_get_last_message();}return(bool)$this->_link;}function
quote($H){return"'".str_replace("'","''",$H)."'";}function
select_db($ca){return
mssql_select_db($ca);}function
query($j,$Ya=false){$g=mssql_query($j,$this->_link);if(!$g){$this->error=mssql_get_last_message();return
false;}if($g===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($g);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($j,$d=0){$g=$this->query($j);if(!is_object($g)){return
false;}return
mssql_result($g->_result,0,$d);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($g){$this->_result=$g;$this->num_rows=mssql_num_rows($g);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$f=mssql_fetch_field($this->_result);$f->orgtable=$f->table;$f->orgname=$f->name;return$f;}function
seek($M){mssql_data_seek($this->_result,$M);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($J){return"[".str_replace("]","]]",$J)."]";}function
table($J){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($J);}function
connect(){global$q;$c=new
Min_DB;$sa=$q->credentials();if($c->connect($sa[0],$sa[1],$sa[2])){return$c;}return$c->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($j,$t,$K,$M=0,$Na=" "){return(isset($K)?" TOP (".($K+$M).")":"")." $j$t";}function
limit1($j,$t){return
limit($j,$t,1);}function
db_collation($r,$U){global$c;return$c->result("SELECT collation_name FROM sys.databases WHERE name =  ".$c->quote($r));}function
engines(){return
array();}function
logged_user(){global$c;return$c->result("SELECT SUSER_NAME()");}function
tables_list(){global$c;return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".$c->quote(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($B){global$c;$f=array();foreach($B
as$r){$c->select_db($r);$f[$r]=$c->result("SELECT COUNT(*) FROM information_schema.TABLES");}return$f;}function
table_status($h=""){global$c;$f=array();$g=$c->query("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".$c->quote(get_schema()).") AND type IN ('S', 'U', 'V')".($h!=""?" AND name = ".$c->quote($h):""));while($a=$g->fetch_assoc()){if($h!=""){return$a;}$f[$a["Name"]]=$a;}return$f;}function
is_view($D){return$D["Engine"]=="VIEW";}function
fk_support($D){return
true;}function
fields($i,$uc=false){global$c;$f=array();$g=$c->query("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".$c->quote(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".$c->quote($i));while($a=$g->fetch_assoc()){$x=$a["type"];$Z=(ereg("char|binary",$x)?$a["max_length"]:($x=="decimal"?"$a[precision],$a[scale]":""));$f[$a["name"]]=array("field"=>$a["name"],"full_type"=>$x.($Z?"($Z)":""),"type"=>$x,"length"=>$Z,"default"=>$a["default"],"null"=>$a["is_nullable"],"auto_increment"=>$a["is_identity"],"collation"=>$a["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$a["is_identity"],);}return$f;}function
indexes($i,$L=null){global$c;if(!is_object($L)){$L=$c;}$f=array();$g=$L->query("SELECT indexes.name, key_ordinal, is_unique, is_primary_key, columns.name AS column_name
FROM sys.indexes
INNER JOIN sys.index_columns ON indexes.object_id = index_columns.object_id AND indexes.index_id = index_columns.index_id
INNER JOIN sys.columns ON index_columns.object_id = columns.object_id AND index_columns.column_id = columns.column_id
WHERE OBJECT_NAME(indexes.object_id) = ".$L->quote($i));if($g){while($a=$g->fetch_assoc()){$f[$a["name"]]["type"]=($a["is_primary_key"]?"PRIMARY":($a["is_unique"]?"UNIQUE":"INDEX"));$f[$a["name"]]["lengths"]=array();$f[$a["name"]]["columns"][$a["key_ordinal"]]=$a["column_name"];}}return$f;}function
view($h){global$c;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$c->result("SELECT view_definition FROM information_schema.views WHERE table_schema = SCHEMA_NAME() AND table_name = ".$c->quote($h))));}function
collations(){$f=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$R){$f[ereg_replace("_.*","",$R)][]=$R;}return$f;}function
information_schema($r){return
false;}function
error(){global$c;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$c->error)));}function
exact_value($b){global$c;return$c->quote($b);}function
create_database($r,$R){return
queries("CREATE DATABASE ".idf_escape($r).($R?" COLLATE ".idf_escape($R):""));}function
drop_databases($B){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$B)));}function
rename_database($h,$R){if($R){queries("ALTER DATABASE ".idf_escape(DB)." COLLATE ".idf_escape($R));}queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($h));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".preg_replace('~\\D+~','',$_POST["Auto_increment"]).",1)":"");}function
alter_table($i,$h,$o,$hb,$Oa,$ob,$R,$La,$tb){global$c;$u=array();foreach($o
as$d){$G=idf_escape($d[0]);$b=$d[1];if(!$b){$u["DROP"][]=" COLUMN $d[0]";}else{$b[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$b[1]);if($d[0]==""){$u["ADD"][]="\n  ".implode("",$b);}else{unset($b[6]);if($G!=$b[0]){queries("EXEC sp_rename ".$c->quote(table($i).".$G").", ".$c->quote(idf_unescape($b[0])).", 'COLUMN'");}$u["ALTER COLUMN ".implode("",$b)][]="";}}}if($i==""){return
queries("CREATE TABLE ".table($h)." (".implode(",",(array)$u["ADD"])."\n)");}if($i!=$h){queries("EXEC sp_rename ".$c->quote(table($i)).", ".$c->quote($h));}foreach($u
as$e=>$b){if(!queries("ALTER TABLE ".idf_escape($h)." $e".implode(",",$b))){return
false;}}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($i,$s){return
queries("INSERT INTO ".table($i).($s?" (".implode(", ",array_keys($s)).")\nVALUES (".implode(", ",$s).")":"DEFAULT VALUES"));}function
last_id(){global$c;return$c->result("SELECT SCOPE_IDENTITY()");}function
explain($c,$j){$c->query("SET SHOWPLAN_ALL ON");$f=$c->query($j);$c->query("SET SHOWPLAN_ALL OFF");return$f;}function
foreign_keys($i){global$c;$g=$c->query("EXEC sp_fkeys @fktable_name = ".$c->quote($i));$f=array();while($a=$g->fetch_assoc()){$_=&$f[$a["FK_NAME"]];$_["table"]=$a["PKTABLE_NAME"];$_["source"][]=$a["FKCOLUMN_NAME"];$_["target"][]=$a["PKCOLUMN_NAME"];}return$f;}function
truncate_tables($F){return
apply_queries("TRUNCATE TABLE",$F);}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($F){return
queries("DROP TABLE ".implode(", ",array_map('table',$F)));}function
move_tables($F,$Y,$oa){return
apply_queries("ALTER SCHEMA ".idf_escape($oa)." TRANSFER",array_merge($F,$Y));}function
trigger($h){global$c;$g=$c->query("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".$c->quote($h));$a=$g->fetch_assoc();$a["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$a["text"]);return$a;}function
triggers($i){global$c;$f=array();$g=$c->query("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".$c->quote($i));while($a=$g->fetch_assoc()){$f[$a["name"]]=array($a["Timing"],$a["Event"]);}return$f;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$c;if($_GET["ns"]!=""){return$_GET["ns"];}return$c->result("SELECT SCHEMA_NAME()");}function
set_schema($Ga){return
true;}function
use_sql($ca){return"USE ".idf_escape($ca);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($sb){return
ereg('^(scheme|trigger|view|drop_col)$',$sb);}$A="mssql";$S=array();$Ma=array();foreach(array(lang(9)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(10)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(11)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(12)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$e=>$b){$S+=$b;$Ma[$e]=array_keys($b);}$pb=array();$Ub=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$X=array("len","lower","round","upper");$qb=array("avg","count","count distinct","max","min","sum");$ec=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Aa[]="MySQLi";$Aa[]="MySQL";$Aa[]="PDO_MySQL";if(extension_loaded("mysqli")||extension_loaded("mysql")||extension_loaded("pdo_mysql")){$ga=array("server"=>"MySQL")+$ga;}if(!defined("DRIVER")){define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($E,$N,$Q){list($Ze,$Lc)=explode(":",$E,2);return@$this->real_connect(($E!=""?$Ze:ini_get("mysqli.default_host")),("$E$N"!=""?$N:ini_get("mysqli.default_user")),("$E$N$Q"!=""?$Q:ini_get("mysqli.default_pw")),null,(is_numeric($Lc)?$Lc:ini_get("mysqli.default_port")),(!is_numeric($Lc)?$Lc:null));}function
result($j,$d=0){$g=$this->query($j);if(!$g){return
false;}$a=$g->fetch_array();return$a[$d];}function
quote($H){return"'".$this->escape_string($H)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($E,$N,$Q){$this->_link=@mysql_connect(($E!=""?$E:ini_get("mysql.default_host")),("$E$N"!=""?$N:ini_get("mysql.default_user")),("$E$N$Q"!=""?$Q:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($H){return"'".mysql_real_escape_string($H,$this->_link)."'";}function
select_db($ca){return
mysql_select_db($ca,$this->_link);}function
query($j,$Ya=false){$g=@($Ya?mysql_unbuffered_query($j,$this->_link):mysql_query($j,$this->_link));if(!$g){$this->error=mysql_error($this->_link);return
false;}if($g===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($g);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$d=0){$g=$this->query($j);if(!$g){return
false;}return
mysql_result($g->_result,0,$d);}}class
Min_Result{var$num_rows,$_result;function
Min_Result($g){$this->_result=$g;$this->num_rows=mysql_num_rows($g);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$f=mysql_fetch_field($this->_result);$f->orgtable=$f->table;$f->orgname=$f->name;$f->charsetnr=($f->blob?63:0);return$f;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($E,$N,$Q){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:([0-9])~',';port=\\1',$E)),$N,$Q);return
true;}function
select_db($ca){return$this->query("USE ".idf_escape($ca));}function
query($j,$Ya=false){$this->setAttribute(1000,!$Ya);return
parent::query($j,$Ya);}}}function
idf_escape($J){return"`".str_replace("`","``",$J)."`";}function
table($J){return
idf_escape($J);}function
connect(){global$q;$c=new
Min_DB;$sa=$q->credentials();if($c->connect($sa[0],$sa[1],$sa[2])){$c->query("SET SQL_QUOTE_SHOW_CREATE=1");$c->query("SET NAMES utf8");return$c;}return$c->error;}function
get_databases($tf=true){$f=&get_session("databases");if(!isset($f)){if($tf){restart_session();ob_flush();flush();}$f=get_vals("SHOW DATABASES");}return$f;}function
limit($j,$t,$K,$M=0,$Na=" "){return" $j$t".(isset($K)?$Na."LIMIT $K".($M?" OFFSET $M":""):"");}function
limit1($j,$t){return
limit($j,$t,1);}function
db_collation($r,$U){global$c;$f=null;$ia=$c->result("SHOW CREATE DATABASE ".idf_escape($r),1);if(preg_match('~ COLLATE ([^ ]+)~',$ia,$k)){$f=$k[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$ia,$k)){$f=$U[$k[1]][0];}return$f;}function
engines(){global$c;$f=array();$g=$c->query("SHOW ENGINES");while($a=$g->fetch_assoc()){if(ereg("YES|DEFAULT",$a["Support"])){$f[]=$a["Engine"];}}return$f;}function
logged_user(){global$c;return$c->result("SELECT USER()");}function
tables_list(){global$c;return
get_key_vals("SHOW".($c->server_info>=5?" FULL":"")." TABLES");}function
count_tables($B){$f=array();foreach($B
as$r){$f[$r]=count(get_vals("SHOW TABLES IN ".idf_escape($r)));}return$f;}function
table_status($h=""){global$c;$f=array();$g=$c->query("SHOW TABLE STATUS".($h!=""?" LIKE ".$c->quote(addcslashes($h,"%_")):""));while($a=$g->fetch_assoc()){if($a["Engine"]=="InnoDB"){$a["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["Comment"]);}if(!isset($a["Rows"])){$a["Comment"]="";}if($h!=""){return$a;}$f[$a["Name"]]=$a;}return$f;}function
is_view($D){return!isset($D["Rows"]);}function
fk_support($D){return($D["Engine"]=="InnoDB");}function
fields($i,$uc=false){global$c;$f=array();$g=$c->query("SHOW FULL COLUMNS FROM ".table($i));if($g){while($a=$g->fetch_assoc()){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$a["Type"],$k);$f[$a["Field"]]=array("field"=>$a["Field"],"full_type"=>$a["Type"],"type"=>$k[1],"length"=>$k[2],"unsigned"=>ltrim($k[3].$k[4]),"default"=>($a["Default"]!=""||ereg("char",$k[1])?$a["Default"]:null),"null"=>($a["Null"]=="YES"),"auto_increment"=>($a["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$a["Extra"],$k)?$k[1]:""),"collation"=>$a["Collation"],"privileges"=>array_flip(explode(",",$a["Privileges"])),"comment"=>$a["Comment"],"primary"=>($a["Key"]=="PRI"),);}}return$f;}function
indexes($i,$L=null){global$c;if(!is_object($L)){$L=$c;}$f=array();$g=$L->query("SHOW INDEX FROM ".table($i));if($g){while($a=$g->fetch_assoc()){$f[$a["Key_name"]]["type"]=($a["Key_name"]=="PRIMARY"?"PRIMARY":($a["Index_type"]=="FULLTEXT"?"FULLTEXT":($a["Non_unique"]?"INDEX":"UNIQUE")));$f[$a["Key_name"]]["columns"][]=$a["Column_name"];$f[$a["Key_name"]]["lengths"][]=$a["Sub_part"];}}return$f;}function
foreign_keys($i){global$c,$lb;static$ha='`(?:[^`]|``)+`';$f=array();$Me=$c->result("SHOW CREATE TABLE ".table($i),1);if($Me){preg_match_all("~CONSTRAINT ($ha) FOREIGN KEY \\(((?:$ha,? ?)+)\\) REFERENCES ($ha)(?:\\.($ha))? \\(((?:$ha,? ?)+)\\)(?: ON DELETE (".implode("|",$lb)."))?(?: ON UPDATE (".implode("|",$lb)."))?~",$Me,$ja,PREG_SET_ORDER);foreach($ja
as$k){preg_match_all("~$ha~",$k[2],$Da);preg_match_all("~$ha~",$k[5],$oa);$f[idf_unescape($k[1])]=array("db"=>idf_unescape($k[4]!=""?$k[3]:$k[4]),"table"=>idf_unescape($k[4]!=""?$k[4]:$k[3]),"source"=>array_map('idf_unescape',$Da[0]),"target"=>array_map('idf_unescape',$oa[0]),"on_delete"=>$k[6],"on_update"=>$k[7],);}}return$f;}function
view($h){global$c;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$c->result("SHOW CREATE VIEW ".table($h),1)));}function
collations(){global$c;$f=array();$g=$c->query("SHOW COLLATION");while($a=$g->fetch_assoc()){$f[$a["Charset"]][]=$a["Collation"];}ksort($f);foreach($f
as$e=>$b){sort($f[$e]);}return$f;}function
information_schema($r){global$c;return($c->server_info>=5&&$r=="information_schema");}function
error(){global$c;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$c->error));}function
exact_value($b){global$c;return$c->quote($b)." COLLATE utf8_bin";}function
create_database($r,$R){global$c;set_session("databases",null);return
queries("CREATE DATABASE ".idf_escape($r).($R?" COLLATE ".$c->quote($R):""));}function
drop_databases($B){set_session("databases",null);return
apply_queries("DROP DATABASE",$B,'idf_escape');}function
rename_database($h,$R){global$c;if(create_database($h,$R)){$ac=array();foreach(tables_list()as$i=>$x){$ac[]=table($i)." TO ".idf_escape($h).".".table($i);}if(!$ac||queries("RENAME TABLE ".implode(", ",$ac))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$nd=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$y){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$y["columns"],true)){$nd="";break;}if($y["type"]=="PRIMARY"){$nd=" UNIQUE";}}}return" AUTO_INCREMENT$nd";}function
alter_table($i,$h,$o,$hb,$Oa,$ob,$R,$La,$tb){global$c;$u=array();foreach($o
as$d){$u[]=($d[1]?($i!=""?($d[0]!=""?"CHANGE ".idf_escape($d[0]):"ADD"):" ")." ".implode($d[1]).($i!=""?" $d[2]":""):"DROP ".idf_escape($d[0]));}$u=array_merge($u,$hb);$Sb="COMMENT=".$c->quote($Oa).($ob?" ENGINE=".$c->quote($ob):"").($R?" COLLATE ".$c->quote($R):"").($La!=""?" AUTO_INCREMENT=$La":"").$tb;if($i==""){return
queries("CREATE TABLE ".table($h)." (\n".implode(",\n",$u)."\n) $Sb");}if($i!=$h){$u[]="RENAME TO ".table($h);}$u[]=$Sb;return
queries("ALTER TABLE ".table($i)."\n".implode(",\n",$u));}function
alter_indexes($i,$u){foreach($u
as$e=>$b){$u[$e]=($b[2]?"\nDROP INDEX ":"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"")).$b[1];}return
queries("ALTER TABLE ".table($i).implode(",",$u));}function
truncate_tables($F){return
apply_queries("TRUNCATE TABLE",$F);}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($F){return
queries("DROP TABLE ".implode(", ",array_map('table',$F)));}function
move_tables($F,$Y,$oa){$ac=array();foreach(array_merge($F,$Y)as$i){$ac[]=table($i)." TO ".idf_escape($oa).".".table($i);}return
queries("RENAME TABLE ".implode(", ",$ac));}function
trigger($h){global$c;$g=$c->query("SHOW TRIGGERS WHERE `Trigger` = ".$c->quote($h));return$g->fetch_assoc();}function
triggers($i){global$c;$f=array();$g=$c->query("SHOW TRIGGERS LIKE ".$c->quote(addcslashes($i,"%_")));while($a=$g->fetch_assoc()){$f[$a["Trigger"]]=array($a["Timing"],$a["Event"]);}return$f;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($h,$x){global$c,$Db,$Rb,$S;$cf=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Re="((".implode("|",array_merge(array_keys($S),$cf)).")(?:\\s*\\(((?:[^'\")]*|$Db)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$ha="\\s*(".($x=="FUNCTION"?"":implode("|",$Rb)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Re";$ia=$c->result("SHOW CREATE $x ".idf_escape($h),2);preg_match("~\\(((?:$ha\\s*,?)*)\\)".($x=="FUNCTION"?"\\s*RETURNS\\s+$Re":"")."\\s*(.*)~is",$ia,$k);$o=array();preg_match_all("~$ha\\s*,?~is",$k[1],$ja,PREG_SET_ORDER);foreach($ja
as$Wa){$h=str_replace("``","`",$Wa[2]).$Wa[3];$o[]=array("field"=>$h,"type"=>strtolower($Wa[5]),"length"=>preg_replace_callback("~$Db~s",'normalize_enum',$Wa[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Wa[8] $Wa[7]"))),"full_type"=>$Wa[4],"inout"=>strtoupper($Wa[1]),"collation"=>strtolower($Wa[9]),);}if($x!="FUNCTION"){return
array("fields"=>$o,"definition"=>$k[11]);}return
array("fields"=>$o,"returns"=>array("type"=>$k[12],"length"=>$k[13],"unsigned"=>$k[15],"collation"=>$k[16]),"definition"=>$k[17],);}function
routines(){global$c;$f=array();$g=$c->query("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".$c->quote(DB));while($a=$g->fetch_assoc()){$f[]=$a;}return$f;}function
begin(){return
queries("BEGIN");}function
insert_into($i,$s){return
queries("INSERT INTO ".table($i)." (".implode(", ",array_keys($s)).")\nVALUES (".implode(", ",$s).")");}function
insert_update($i,$s){foreach($s
as$e=>$b){$s[$e]="$e = $b";}$Va=implode(", ",$s);return
queries("INSERT INTO ".table($i)." SET $Va ON DUPLICATE KEY UPDATE $Va");}function
last_id(){global$c;return$c->result("SELECT LAST_INSERT_ID()");}function
explain($c,$j){return$c->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ga){return
true;}function
create_sql($i,$La){global$c;$f=$c->result("SHOW CREATE TABLE ".table($i),1);if(!$La){$f=preg_replace('~ AUTO_INCREMENT=[0-9]+~','',$f);}return$f;}function
truncate_sql($i){return"TRUNCATE ".table($i);}function
use_sql($ca){return"USE ".idf_escape($ca);}function
trigger_sql($i,$V){global$c;$g=$c->query("SHOW TRIGGERS LIKE ".$c->quote(addcslashes($i,"%_")));$f="";if($g->num_rows){while($a=$g->fetch_assoc()){$f.="\n".($V=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($a["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($a["Trigger"])." $a[Timing] $a[Event] ON ".table($a["Table"])." FOR EACH ROW\n$a[Statement];;\n";}}return$f;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($sb){global$c;return!ereg("scheme|sequence|type".($c->server_info<5.1?"|event|partitioning".($c->server_info<5?"|view|routine|trigger":""):""),$sb);}$A="sql";$S=array();$Ma=array();foreach(array(lang(9)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(10)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(11)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(12)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(15)=>array("enum"=>65535,"set"=>64),)as$e=>$b){$S+=$b;$Ma[$e]=array_keys($b);}$pb=array("unsigned","zerofill","unsigned zerofill");$Ub=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$X=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$qb=array("avg","count","count distinct","group_concat","max","min","sum");$ec=array(array("char"=>"md5/sha1/password/encrypt/uuid","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(SID&&!$_COOKIE?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$Tb="3.0.0-dev";class
Adminer{var$operators;function
name(){return"Adminer";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("passwords"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
loginForm(){global$ga,$Aa;echo'<table cellspacing="0">
<tr><th>',lang(16),'<td>',html_select("driver",$ga,DRIVER),'<tr><th>',lang(17),'<td><input name="server" value="',h(SERVER),'">
<tr><th>',lang(18),'<td><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>',lang(19),'<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".lang(20)."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],lang(21))."\n";}function
login($Kf,$Q){return
true;}function
tableName($Wc){return
h($Wc["Name"]);}function
fieldName($d,$vb=0){return'<span title="'.h($d["full_type"]).'">'.h($d["field"]).'</span>';}function
selectLinks($Wc,$s=""){echo'<p class="tabs">';$Ia=array("select"=>lang(22),"table"=>lang(23));if(is_view($Wc)){$Ia["view"]=lang(24);}else{$Ia["create"]=lang(25);}if(isset($s)){$Ia["edit"]=lang(26);}foreach($Ia
as$e=>$b){echo" <a href='".h(ME)."$e=".urlencode($Wc["Name"]).($e=="edit"?$s:"")."'>".bold($b,isset($_GET[$e]))."</a>";}echo"\n";}function
backwardKeys($i,$If){return
array();}function
backwardKeysPrint($Hf,$a){}function
selectQuery($j){global$A;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".lang(27)."'>&gt;&gt;</a> <code class='jush-$A'>".h(str_replace("\n"," ",$j))."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".lang(28)."</a>\n";}function
rowDescription($i){return"";}function
rowDescriptions($xa,$df){return$xa;}function
selectVal($b,$w,$d){$f=($b!="<i>NULL</i>"&&$d["type"]=="char"?"<code>$b</code>":$b);if(ereg('binary|blob|bytea|raw|file',$d["type"])&&!is_utf8($b)){$f=lang(29,strlen($b));}return($w?"<a href='$w'>$f</a>":$f);}function
editVal($b,$d){return$b;}function
selectColumnsPrint($C,$z){global$X,$qb;print_fieldset("select",lang(30),$C);$l=0;$ne=array(lang(31)=>$X,lang(32)=>$qb);foreach($C
as$e=>$b){$b=$_GET["columns"][$e];echo"<div>".html_select("columns[$l][fun]",array(-1=>"")+$ne,$b["fun"]),"(<select name='columns[$l][col]'><option>".optionlist($z,$b["col"],true)."</select>)</div>\n";$l++;}echo"<div>".html_select("columns[$l][fun]",array(-1=>"")+$ne,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$l][col]' onchange='selectAddRow(this);'><option>".optionlist($z,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($t,$z,$I){print_fieldset("search",lang(33),$t);foreach($I
as$l=>$y){if($y["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$y["columns"]))."</i>) AGAINST"," <input name='fulltext[$l]' value='".h($_GET["fulltext"][$l])."'>",checkbox("boolean[$l]",1,isset($_GET["boolean"][$l]),"BOOL"),"<br>\n";}}$l=0;foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){echo"<div><select name='where[$l][col]'><option value=''>(".lang(34).")".optionlist($z,$b["col"],true)."</select>",html_select("where[$l][op]",$this->operators,$b["op"]),"<input name='where[$l][val]' value='".h($b["val"])."'></div>\n";$l++;}}echo"<div><select name='where[$l][col]' onchange='selectAddRow(this);'><option value=''>(".lang(34).")".optionlist($z,null,true)."</select>",html_select("where[$l][op]",$this->operators),"<input name='where[$l][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($vb,$z,$I){print_fieldset("sort",lang(35),$vb);$l=0;foreach((array)$_GET["order"]as$e=>$b){if(isset($z[$b])){echo"<div><select name='order[$l]'><option>".optionlist($z,$b,true)."</select>",checkbox("desc[$l]",1,isset($_GET["desc"][$e]),lang(36))."</div>\n";$l++;}}echo"<div><select name='order[$l]' onchange='selectAddRow(this);'><option>".optionlist($z,null,true)."</select>",checkbox("desc[$l]",1,0,lang(36))."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($K){echo"<fieldset><legend>".lang(37)."</legend><div>";echo"<input name='limit' size='3' value='".h($K)."'>","</div></fieldset>\n";}function
selectLengthPrint($yb){if(isset($yb)){echo"<fieldset><legend>".lang(38)."</legend><div>",'<input name="text_length" size="3" value="'.h($yb).'">',"</div></fieldset>\n";}}function
selectActionPrint(){echo"<fieldset><legend>".lang(39)."</legend><div>","<input type='submit' value='".lang(30)."'>","</div></fieldset>\n";}function
selectEmailPrint($Gf,$z){}function
selectColumnsProcess($z,$I){global$X,$qb;$C=array();$Ka=array();foreach((array)$_GET["columns"]as$e=>$b){if($b["fun"]=="count"||(isset($z[$b["col"]])&&(!$b["fun"]||in_array($b["fun"],$X)||in_array($b["fun"],$qb)))){$C[$e]=apply_sql_function($b["fun"],(isset($z[$b["col"]])?idf_escape($b["col"]):"*"));if(!in_array($b["fun"],$qb)){$Ka[]=$C[$e];}}}return
array($C,$Ka);}function
selectSearchProcess($o,$I){global$c,$A;$f=array();foreach($I
as$l=>$y){if($y["type"]=="FULLTEXT"&&$_GET["fulltext"][$l]!=""){$f[]="MATCH (".implode(", ",array_map('idf_escape',$y["columns"])).") AGAINST (".$c->quote($_GET["fulltext"][$l]).(isset($_GET["boolean"][$l])?" IN BOOLEAN MODE":"").")";}}foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){$Qb=" $b[op]";if(ereg('IN$',$b["op"])){$Eb=process_length($b["val"]);$Qb.=" (".($Eb!=""?$Eb:"NULL").")";}elseif($b["op"]=="LIKE %%"){$Qb=" LIKE ".$this->processInput($o[$b["col"]],"%$b[val]%");}elseif(!ereg('NULL$',$b["op"])){$Qb.=" ".$this->processInput($o[$b["col"]],$b["val"]);}if($b["col"]!=""){$f[]=idf_escape($b["col"]).$Qb;}else{$mb=array();foreach($o
as$h=>$d){if(is_numeric($b["val"])||!ereg('int|float|double|decimal',$d["type"])){$h=idf_escape($h);$mb[]=($A=="sql"&&ereg('char|text|enum|set',$d["type"])&&!ereg('^utf8',$d["collation"])?"CONVERT($h USING utf8)":$h);}}$f[]=($mb?"(".implode("$Qb OR ",$mb)."$Qb)":"0");}}}return$f;}function
selectOrderProcess($o,$I){$f=array();foreach((array)$_GET["order"]as$e=>$b){if(isset($o[$b])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$b)){$f[]=(isset($o[$b])?idf_escape($b):$b).(isset($_GET["desc"][$e])?" DESC":"");}}return$f;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($t,$df){return
false;}function
messageQuery($j){global$A;restart_session();$T="sql-".count($_SESSION["messages"]);$bb=&get_session("history");$bb[$_GET["db"]][]=(strlen($j)>1e6?ereg_replace('[\x80-\xFF]+$','',substr($j,0,1e6))."\n...":$j);return" <a href='#$T' onclick=\"return !toggle('$T');\">".lang(40)."</a><div id='$T' class='hidden'><pre class='jush-$A'>".shorten_utf8($j,1000).'</pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($bb[$_GET["db"]])-1)).'">'.lang(28).'</a></div>';}function
editFunctions($d){global$ec;$f=($d["null"]?"NULL/":"");foreach($ec
as$e=>$X){if(!$e||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($X
as$ha=>$b){if(!$ha||ereg($ha,$d["type"])){$f.="/$b";}}}}return
explode("/",$f);}function
editInput($i,$d,$Ob,$p){if($d["type"]=="enum"){return($d["null"]?"<label><input type='radio'$Ob value=''".(isset($p)||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"")."<label><input type='radio'$Ob value='0'".($p===0?" checked":"")."><i>".lang(41)."</i></label>";}return"";}function
processInput($d,$p,$O=""){global$c;$h=$d["field"];$f=$c->quote($p);if(ereg('^(now|getdate|uuid)$',$O)){$f="$O()";}elseif(ereg('^current_(date|timestamp)$',$O)){$f=$O;}elseif(ereg('^([+-]|\\|\\|)$',$O)){$f=idf_escape($h)." $O $f";}elseif(ereg('^[+-] interval$',$O)){$f=idf_escape($h)." $O ".(preg_match("~^([0-9]+|'[0-9.: -]') [A-Z_]+$~i",$p)?$p:$f);}elseif(ereg('^(addtime|subtime|concat)$',$O)){$f="$O(".idf_escape($h).", $f)";}elseif(ereg('^(md5|sha1|password|encrypt)$',$O)){$f="$O($f)";}return$f;}function
dumpOutput($C,$p=""){$f=array('text'=>lang(42),'file'=>lang(43));if(function_exists('gzencode')){$f['gz']='gzip';}if(function_exists('bzcompress')){$f['bz2']='bzip2';}return
html_select("output",$f,$p,$C);}function
dumpFormat($C,$p=""){return
html_select("format",array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;'),$p,$C);}function
navigation($Xc){global$Tb,$c,$P,$A,$ga;echo'<h1>',$this->name(),'
<a href="http://www.adminer.org/" id="h1"></a>
<span class="version">',$Tb,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($Tb,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Xc=="auth"){$fb=true;foreach((array)$_SESSION["passwords"]as$Fb=>$Xe){foreach($Xe
as$E=>$Ve){foreach($Ve
as$N=>$Q){if(isset($Q)){if($fb){echo"<p>\n";$fb=false;}echo"<a href='".h(auth_url($Fb,$E,$N))."'>($ga[$Fb]) ".h($N.($E!=""?"@$E":""))."</a><br>\n";}}}}}else{$B=get_databases();echo'<form action="" method="post">
<p class="logout">
<a href="',h(ME),'sql=">',bold(lang(40),isset($_GET["sql"])),'</a>
<a href="',h(ME),'dump=',urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"]),'">',bold(lang(44),isset($_GET["dump"])),'</a>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" name="logout" value="',lang(45),'">
</p>
</form>
<form action="">
<p>
';hidden_fields_get();echo($B?html_select("db",array(""=>"(".lang(46).")")+$B,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="',lang(6),'"',($B?" class='hidden'":""),'>
';if($Xc!="db"&&DB!=""&&$c->select_db(DB)){if(support("scheme")){echo"<br>".html_select("ns",array(""=>"(".lang(47).")")+schemas(),$_GET["ns"],"this.form.submit();");if($_GET["ns"]!=""){set_schema($_GET["ns"]);}}if($_GET["ns"]!==""){$F=tables_list();if(!$F){echo"<p class='message'>".lang(4)."\n";}else{$this->tablesPrint($F);$Ia=array();foreach($F
as$i=>$x){$Ia[]=preg_quote($i,'/');}echo"<script type='text/javascript'>\n","var jushLinks = { $A: [ '".addcslashes(h(ME),"\\'/")."table=\$&', /\\b(".implode("|",$Ia).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$b){echo"jushLinks.$b = jushLinks.$A;\n";}echo"</script>\n";}echo'<p><a href="'.h(ME).'create=">'.bold(lang(48),$_GET["create"]==="")."</a>\n";}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}}function
tablesPrint($F){echo"<p id='tables'>\n";foreach($F
as$i=>$x){echo'<a href="'.h(ME).'select='.urlencode($i).'">'.bold(lang(49),$_GET["select"]==$i).'</a> ','<a href="'.h(ME).'table='.urlencode($i).'">'.bold($this->tableName(array("Name"=>$i)),$_GET["table"]==$i)."</a><br>\n";}}}$q=(function_exists('adminer_object')?adminer_object():new
Adminer);if(!isset($q->operators)){$q->operators=$Ub;}function
page_header($ye,$n="",$lc=array(),$ze=""){global$Za,$Tb,$dc,$q,$c,$ga;header("Content-Type: text/html; charset=utf-8");header("X-Frame-Options: deny");$ue=$ye.($ze!=""?": ".h($ze):"");$nc=($dc?"https":"http");echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="',$Za,'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$ue.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$q->name(),'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=favicon.ico&amp;version=3.0.0-dev",'">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=default.css&amp;version=3.0.0-dev";echo'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body onload="bodyLoad(\'',(is_object($c)?substr($c->server_info,0,3):""),'\', \'',$nc,'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$nc');"),'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=functions.js&amp;version=3.0.0-dev",'"></script>

<div id="content">
';if(isset($lc)){$w=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($w?h($w):".").'">'.$ga[DRIVER].'</a> &raquo; ';$w=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$E=(SERVER!=""?h(SERVER):lang(17));if($lc===false){echo"$E\n";}else{echo"<a href='".($w?h($w):".")."'>$E</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($lc))){echo'<a href="'.h($w."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($lc)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($lc
as$e=>$b){$jc=(is_array($b)?$b[1]:$b);if($jc!=""){echo'<a href="'.h(ME."$e=").urlencode(is_array($b)?$b[0]:$b).'">'.h($jc).'</a> &raquo; ';}}}echo"$ye\n";}}echo"<h2>$ue</h2>\n";restart_session();if($_SESSION["messages"]){echo"<div class='message'>".implode("</div>\n<div class='message'>",$_SESSION["messages"])."</div>\n";$_SESSION["messages"]=array();}$B=&get_session("databases");if(DB!=""&&$B&&!in_array(DB,$B,true)){$B=null;}if($n){echo"<div class='error'>$n</div>\n";}}function
page_footer($Xc=""){global$q;echo'</div>

';switch_lang();echo'<div id="menu">
';$q->navigation($Xc);echo'</div>
';session_write_close();ob_flush();flush();}function
int32($ba){while($ba>=2147483648){$ba-=4294967296;}while($ba<=-2147483649){$ba+=4294967296;}return(int)$ba;}function
long2str($v,$yd){$fa='';foreach($v
as$b){$fa.=pack('V',$b);}if($yd){return
substr($fa,0,end($v));}return$fa;}function
str2long($fa,$yd){$v=array_values(unpack('V*',str_pad($fa,4*ceil(strlen($fa)/4),"\0")));if($yd){$v[]=strlen($fa);}return$v;}function
xxtea_mx($za,$ua,$Ea,$Ha){return
int32((($za>>5&0x7FFFFFF)^$ua<<2)+(($ua>>3&0x1FFFFFFF)^$za<<4))^int32(($Ea^$ua)+($Ha^$za));}function
encrypt_string($yc,$e){if($yc==""){return"";}$e=array_values(unpack("V*",pack("H*",md5($e))));$v=str2long($yc,true);$ba=count($v)-1;$za=$v[$ba];$ua=$v[0];$ra=floor(6+52/($ba+1));$Ea=0;while($ra-->0){$Ea=int32($Ea+0x9E3779B9);$xc=$Ea>>2&3;for($wa=0;$wa<$ba;$wa++){$ua=$v[$wa+1];$Cb=xxtea_mx($za,$ua,$Ea,$e[$wa&3^$xc]);$za=int32($v[$wa]+$Cb);$v[$wa]=$za;}$ua=$v[0];$Cb=xxtea_mx($za,$ua,$Ea,$e[$wa&3^$xc]);$za=int32($v[$ba]+$Cb);$v[$ba]=$za;}return
long2str($v,false);}function
decrypt_string($yc,$e){if($yc==""){return"";}$e=array_values(unpack("V*",pack("H*",md5($e))));$v=str2long($yc,false);$ba=count($v)-1;$za=$v[$ba];$ua=$v[0];$ra=floor(6+52/($ba+1));$Ea=int32($ra*0x9E3779B9);while($Ea){$xc=$Ea>>2&3;for($wa=$ba;$wa>0;$wa--){$za=$v[$wa-1];$Cb=xxtea_mx($za,$ua,$Ea,$e[$wa&3^$xc]);$ua=int32($v[$wa]-$Cb);$v[$wa]=$ua;}$za=$v[$ba];$Cb=xxtea_mx($za,$ua,$Ea,$e[$wa&3^$xc]);$ua=int32($v[0]-$Cb);$v[0]=$ua;$Ea=int32($Ea-0x9E3779B9);}return
long2str($v,true);}$c='';if(!$ga){page_header(lang(50),lang(51,implode(", ",$Aa)),null);page_footer("auth");exit;}$P=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$zb=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$b){list($e)=explode(":",$b);$zb[$e]=$b;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["passwords"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$e=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Gc=$q->permanentLogin();$zb[$e]="$e:".base64_encode($Gc?encrypt_string($_POST["password"],$Gc):"");cookie("adminer_permanent",implode(" ",$zb));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($P&&$_POST["token"]!=$P){page_header(lang(45),lang(52));page_footer("db");exit;}else{foreach(array("passwords","databases","history")as$e){set_session($e,null);}$e=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($zb[$e]){unset($zb[$e]);cookie("adminer_permanent",implode(" ",$zb));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(53));}}elseif($zb&&!$_SESSION["passwords"]){session_regenerate_id();$Gc=$q->permanentLogin();foreach($zb
as$e=>$b){list(,$Af)=explode(":",$b);list($Fb,$E,$N)=array_map('base64_decode',explode("-",$e));$_SESSION["passwords"][$Fb][$E][$N]=decrypt_string($Af,$Gc);}}function
auth_error($De=null){global$c,$q,$P;$Hc=session_name();$n="";if(!$_COOKIE[$Hc]&&$_GET[$Hc]&&ini_bool("session.use_only_cookies")){$n=lang(54);}elseif(isset($_GET["username"])){if(($_COOKIE[$Hc]||$_GET[$Hc])&&!$P){$n=lang(55);}else{$Q=&get_session("passwords");if(isset($Q)){$n=h($De?$De->getMessage():(is_string($c)?$c:lang(56)));$Q=null;}}}page_header(lang(20),$n,null);echo"<form action='' method='post'>\n";$q->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])&&class_exists("Min_DB")){$c=connect();}if(is_string($c)||!$q->login($_GET["username"],get_session("passwords"))){auth_error();exit;}$P=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$P;}$n=($_POST?($_POST["token"]==$P?"":lang(52)):($_SERVER["REQUEST_METHOD"]!="POST"?"":lang(57,'"post_max_size"')));function
connect_error(){global$c,$Tb,$P,$n,$ga;$B=array();if(DB!=""){page_header(lang(58).": ".h(DB),lang(59),true);}else{if($_POST["db"]&&!$n){set_session("databases",null);queries_redirect(substr(ME,0,-1),lang(60),drop_databases($_POST["db"]));}page_header(lang(61),$n,false);echo"<p><a href='".h(ME)."database='>".lang(62)."</a>\n";foreach(array('privileges'=>lang(63),'processlist'=>lang(64),'variables'=>lang(65),'status'=>lang(66),)as$e=>$b){if(support($e)){echo"<a href='".h(ME)."$e='>$b</a>\n";}}echo"<p>".lang(67,$ga[DRIVER],"<b>$c->server_info</b>","<b>$c->extension</b>")."\n","<p>".lang(68,"<b>".h(logged_user())."</b>")."\n";$B=get_databases();if($B){$U=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' onclick='tableClick(event);'>\n","<thead><tr><td><input type='hidden' name='token' value='$P'>&nbsp;<th>".lang(58)."<td>".lang(69)."<td>".lang(70)."</thead>\n";foreach($B
as$r){$ud=h(ME)."db=".urlencode($r);echo"<tr".odd()."><td>".checkbox("db[]",$r,in_array($r,(array)$_POST["db"])),"<th><a href='$ud'>".h($r)."</a>","<td><a href='$ud&amp;database='>".nbsp(db_collation($r,$U))."</a>","<td align='right'><a href='$ud&amp;schema=' id='tables-".h($r)."'>?</a>","\n";}echo"</table>\n","<p><input type='submit' name='drop' value='".lang(71)."' onclick=\"return confirm('".lang(72)." (' + formChecked(this, /db/) + ')');\">\n","</form>\n";}}page_footer("db");echo"<script type='text/javascript'>\n";foreach(count_tables($B)as$r=>$b){echo"setHtml('tables-".addcslashes($r,"\\'/")."', '$b');\n";}echo"</script>\n";}if(isset($_GET["status"])){$_GET["variables"]=$_GET["status"];}if(!(DB!=""?$c->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"]))){if(DB!=""){set_session("databases",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""&&(!isset($_GET["ns"])||!set_schema($_GET["ns"]))){redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());}function
select($g,$L=null){$Ia=array();$I=array();$z=array();$Ce=array();$S=array();odd('');for($l=0;$a=$g->fetch_row();$l++){if(!$l){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($ma=0;$ma<count($a);$ma++){$d=$g->fetch_field();$Ca=$d->orgtable;$pc=$d->orgname;if($Ca!=""){if(!isset($I[$Ca])){$I[$Ca]=array();foreach(indexes($Ca,$L)as$y){if($y["type"]=="PRIMARY"){$I[$Ca]=array_flip($y["columns"]);break;}}$z[$Ca]=$I[$Ca];}if(isset($z[$Ca][$pc])){unset($z[$Ca][$pc]);$I[$Ca][$pc]=$ma;$Ia[$ma]=$Ca;}}if($d->charsetnr==63){$Ce[$ma]=true;}$S[$ma]=$d->type;echo"<th".($Ca!=""||$d->name!=$pc?" title='".h(($Ca!=""?"$Ca.":"").$pc)."'":"").">".h($d->name);}echo"</thead>\n";}echo"<tr".odd().">";foreach($a
as$e=>$b){if(!isset($b)){$b="<i>NULL</i>";}else{if($Ce[$e]&&!is_utf8($b)){$b="<i>".lang(29,strlen($b))."</i>";}elseif(!strlen($b)){$b="&nbsp;";}else{$b=h($b);if($S[$e]==254){$b="<code>$b</code>";}}if(isset($Ia[$e])&&!$z[$Ia[$e]]){$w="edit=".urlencode($Ia[$e]);foreach($I[$Ia[$e]]as$Bc=>$ma){$w.="&where".urlencode("[".bracket_escape($Bc)."]")."=".urlencode($a[$ma]);}$b="<a href='".h(ME.$w)."'>$b</a>";}}echo"<td>$b";}}echo($l?"</table>":"<p class='message'>".lang(73))."\n";}function
referencable_primary($Ff){$f=array();foreach(table_status()as$_a=>$i){if($_a!=$Ff&&fk_support($i)){foreach(fields($_a)as$d){if($d["primary"]){if($f[$_a]){unset($f[$_a]);break;}$f[$_a]=$d;}}}}return$f;}function
edit_type($e,$d,$U,$da=array()){global$Ma,$S,$pb,$Rb,$lb;echo'<td><select name="',$e,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$d["type"]||isset($S[$d["type"]])?array():array($d["type"]))+$Ma+($da?array(lang(74)=>$da):array()),$d["type"]),'</select>
<td><input name="',$e,'[length]" value="',h($d["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td>',"<select name='$e"."[collation]'".(ereg('(char|text|enum|set)$',$d["type"])?"":" class='hidden'").'><option value="">('.lang(75).')'.optionlist($U,$d["collation"]).'</select>',($pb?"<select name='$e"."[unsigned]'".(!$d["type"]||ereg('(int|float|double|decimal)$',$d["type"])?"":" class='hidden'").'><option>'.optionlist($pb,$d["unsigned"]).'</select>':''),($da?"<select name='$e"."[on_delete]'".(ereg("`",$d["type"])?"":" class='hidden'")."><option value=''>(".lang(76).")".optionlist($lb,$d["on_delete"])."</select> ":" ");}function
process_length($Z){global$Db;return(preg_match("~^\\s*(?:$Db)(?:\\s*,\\s*(?:$Db))*\\s*\$~",$Z)&&preg_match_all("~$Db~",$Z,$ja)?implode(",",$ja[0]):preg_replace('~[^0-9,+-]~','',$Z));}function
process_type($d,$wc="COLLATE"){global$c,$pb;return" $d[type]".($d["length"]!=""?"(".process_length($d["length"]).")":"").(ereg('int|float|double|decimal',$d["type"])&&in_array($d["unsigned"],$pb)?" $d[unsigned]":"").(ereg('char|text|enum|set',$d["type"])&&$d["collation"]?" $wc ".$c->quote($d["collation"]):"");}function
process_field($d,$Ic){global$c;return
array(idf_escape($d["field"]),process_type($Ic),($d["null"]?" NULL":" NOT NULL"),(isset($d["default"])?" DEFAULT ".($d["type"]=="timestamp"&&eregi("^CURRENT_TIMESTAMP$",$d["default"])?$d["default"]:$c->quote($d["default"])):""),($d["on_update"]?" ON UPDATE $d[on_update]":""),(support("comment")&&$d["comment"]!=""?" COMMENT ".$c->quote($d["comment"]):""),($d["auto_increment"]?auto_increment():null),);}function
type_class($x){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$e=>$b){if(ereg("$e|$b",$x)){return" class='$e'";}}}function
edit_fields($o,$U,$x="TABLE",$qe=0,$da=array(),$Jb=false){global$Rb;foreach($o
as$d){if($d["comment"]!=""){$Jb=true;break;}}echo'<thead><tr class="wrap">
';if($x=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($x=="TABLE"?lang(77):lang(78)),'<td>',lang(79),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>',lang(80),'<td>',lang(81);if($x=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="',lang(82),'">AI</acronym>
<td class="hidden">',lang(83),(support("comment")?"<td".($Jb?"":" class='hidden'").">".lang(84):"");}echo'<td>',"<input type='image' name='add[".(support("move_col")?0:count($o))."]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.0-dev' alt='+' title='".lang(85)."'>",'<script type="text/javascript">row_count = ',count($o),';</script>
</thead>
';foreach($o
as$l=>$d){$l++;$bd=$d[($_POST?"orig":"field")];$pe=(isset($_POST["add"][$l-1])||(isset($d["field"])&&!$_POST["drop_col"][$l]))&&(support("drop_col")||$bd=="");echo'<tr',($pe?"":" style='display: none;'"),'>
',($x=="PROCEDURE"?"<td>".html_select("fields[$l][inout]",$Rb,$d["inout"]):""),'<th>';if($pe){echo'<input name="fields[',$l,'][field]" value="',h($d["field"]),'" onchange="',($d["field"]!=""||count($o)>1?"":"editingAddRow(this, $qe); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$l,'][orig]" value="',h($bd),'">
';edit_type("fields[$l]",$d,$U,$da);if($x=="TABLE"){echo'<td>',checkbox("fields[$l][null]",1,$d["null"]),'<td><input type="radio" name="auto_increment_col" value="',$l,'"';if($d["auto_increment"]){echo' checked';}echo'>
<td class="hidden">',checkbox("fields[$l][has_default]",1,$d["has_default"]),'<input name="fields[',$l,'][default]" value="',h($d["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($Jb?"":" class='hidden'")."><input name='fields[$l][comment]' value='".h($d["comment"])."' maxlength='255'>":"");}echo"<td>",(support("move_col")?"<input type='image' name='add[$l]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.0-dev' alt='+' title='".lang(85)."' onclick='return !editingAddRow(this, $qe, 1);'>&nbsp;"."<input type='image' name='up[$l]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=up.gif&amp;version=3.0.0-dev' alt='^' title='".lang(86)."'>&nbsp;"."<input type='image' name='down[$l]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=down.gif&amp;version=3.0.0-dev' alt='v' title='".lang(87)."'>&nbsp;":""),($bd==""||support("drop_col")?"<input type='image' name='drop_col[$l]' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=cross.gif&amp;version=3.0.0-dev' alt='x' title='".lang(88)."' onclick='return !editingRemoveRow(this);'>":""),"\n";}return$Jb;}function
process_fields(&$o){ksort($o);$M=0;if($_POST["up"]){$wb=0;foreach($o
as$e=>$d){if(key($_POST["up"])==$e){unset($o[$e]);array_splice($o,$wb,0,array($d));break;}if(isset($d["field"])){$wb=$M;}$M++;}}if($_POST["down"]){$pa=false;foreach($o
as$e=>$d){if(isset($d["field"])&&$pa){unset($o[key($_POST["down"])]);array_splice($o,$M,0,array($pa));break;}if(key($_POST["down"])==$e){$pa=$d;}$M++;}}$o=array_values($o);if($_POST["add"]){array_splice($o,key($_POST["add"]),0,array(array()));}}function
normalize_enum($k){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($k[0][0].$k[0][0],$k[0][0],substr($k[0],1,-1))),'\\'))."'";}function
grant($ea,$la,$z,$Ab){if(!$la){return
true;}if($la==array("ALL PRIVILEGES","GRANT OPTION")){return($ea=="GRANT"?queries("$ea ALL PRIVILEGES$Ab WITH GRANT OPTION"):queries("$ea ALL PRIVILEGES$Ab")&&queries("$ea GRANT OPTION$Ab"));}return
queries("$ea ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$z, ",$la).$z).$Ab);}function
drop_create($kb,$ia,$ka,$oe,$Cf,$yf,$h){if($_POST["drop"]){return
query_redirect($kb,$ka,$oe,true,!$_POST["dropped"]);}$Ua=$h!=""&&($_POST["dropped"]||queries($kb));$vf=queries($ia);if(!queries_redirect($ka,($h!=""?$Cf:$yf),$vf)&&$Ua){restart_session();$_SESSION["messages"][]=$oe;}return$Ua;}function
tar_file($W,$dd){$f=pack("a100a8a8a8a12a12",$W,644,0,0,decoct(strlen($dd)),decoct(time()));$se=8*32;for($l=0;$l<strlen($f);$l++){$se+=ord($f{$l});}$f.=sprintf("%06o",$se)."\0 ";return$f.str_repeat("\0",512-strlen($f)).$dd.str_repeat("\0",511-(strlen($dd)+511)%
512);}function
dump_table($i,$V,$pd=false){global$c;if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($V){dump_csv(array_keys(fields($i)));}}elseif($V){$ia=create_sql($i,$_POST["auto_increment"]);if($ia){if($V=="DROP+CREATE"){echo"DROP ".($pd?"VIEW":"TABLE")." IF EXISTS ".table($i).";\n";}echo($V!="CREATE+ALTER"?$ia:($pd?substr_replace($ia," OR REPLACE",6,0):substr_replace($ia," IF NOT EXISTS",12,0))).";\n\n";}if($V=="CREATE+ALTER"&&!$pd){$j="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".$c->quote($i)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$o=array();$g=$c->query($j);$Kb="";while($a=$g->fetch_assoc()){$ta=$a["COLUMN_DEFAULT"];$a["default"]=(isset($ta)?$c->quote($ta):"NULL");$a["after"]=$c->quote($Kb);$a["alter"]=escape_string(idf_escape($a["COLUMN_NAME"])." $a[COLUMN_TYPE]".($a["COLLATION_NAME"]?" COLLATE $a[COLLATION_NAME]":"").(isset($ta)?" DEFAULT ".($ta=="CURRENT_TIMESTAMP"?$ta:$a["default"]):"").($a["IS_NULLABLE"]=="YES"?"":" NOT NULL").($a["EXTRA"]?" $a[EXTRA]":"").($a["COLUMN_COMMENT"]?" COMMENT ".$c->quote($a["COLUMN_COMMENT"]):"").($Kb?" AFTER ".idf_escape($Kb):" FIRST"));echo", ADD $a[alter]";$o[]=$a;$Kb=$a["COLUMN_NAME"];}echo"';
	DECLARE columns CURSOR FOR $j;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	SET @alter_table = '';
	OPEN columns;
	REPEAT
		FETCH columns INTO _column_name, _column_default, _is_nullable, _collation_name, _column_type, _extra, _column_comment;
		IF NOT done THEN
			SET set_after = 1;
			CASE _column_name";foreach($o
as$a){echo"
				WHEN ".$c->quote($a["COLUMN_NAME"])." THEN
					SET add_columns = REPLACE(add_columns, ', ADD $a[alter]', '');
					IF NOT (_column_default <=> $a[default]) OR _is_nullable != '$a[IS_NULLABLE]' OR _collation_name != '$a[COLLATION_NAME]' OR _column_type != ".$c->quote($a["COLUMN_TYPE"])." OR _extra != '$a[EXTRA]' OR _column_comment != ".$c->quote($a["COLUMN_COMMENT"])." OR after != $a[after] THEN
						SET @alter_table = CONCAT(@alter_table, ', MODIFY $a[alter]');
					END IF;";}echo"
				ELSE
					SET @alter_table = CONCAT(@alter_table, ', DROP ', _column_name);
					SET set_after = 0;
			END CASE;
			IF set_after THEN
				SET after = _column_name;
			END IF;
		END IF;
	UNTIL done END REPEAT;
	CLOSE columns;
	IF @alter_table != '' OR add_columns != '' THEN
		SET alter_command = CONCAT(alter_command, 'ALTER TABLE ".table($i)."', SUBSTR(CONCAT(add_columns, @alter_table), 2), ';\\n');
	END IF;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;

";}}}function
dump_data($i,$V,$C=""){global$c,$A;$Ge=($A=="sqlite"?0:1048576);if($V){if($_POST["format"]=="sql"&&$V=="TRUNCATE+INSERT"){echo
truncate_sql($i).";\n";}$o=fields($i);$g=$c->query(($C?$C:"SELECT * FROM ".table($i)),1);if($g){$tc="";$jb="";while($a=$g->fetch_assoc()){if($_POST["format"]!="sql"){dump_csv($a);}else{if(!$tc){$tc="INSERT INTO ".table($i)." (".implode(", ",array_map('idf_escape',array_keys($a))).") VALUES";}foreach($a
as$e=>$b){$a[$e]=(isset($b)?(ereg('int|float|double|decimal',$o[$e]["type"])?$b:$c->quote($b)):"NULL");}$fa=implode(",\t",$a);if($V=="INSERT+UPDATE"){$s=array();foreach($a
as$e=>$b){$s[]=idf_escape($e)." = $b";}echo"$tc ($fa) ON DUPLICATE KEY UPDATE ".implode(", ",$s).";\n";}else{$fa=($Ge?"\n":" ")."($fa)";if(!$jb){$jb=$tc.$fa;}elseif(strlen($jb)+2+strlen($fa)<$Ge){$jb.=",$fa";}else{$jb.=";\n";echo$jb;$jb=$tc.$fa;}}}}if($_POST["format"]=="sql"&&$V!="INSERT+UPDATE"&&$jb){$jb.=";\n";echo$jb;}}}}function
dump_headers($Fe,$nf=false){$W=($Fe!=""?friendly_url($Fe):"adminer");$Hb=$_POST["output"];$xb=($_POST["format"]=="sql"?"sql":($nf?"tar":"csv"));header("Content-Type: ".($Hb=="bz2"?"application/x-bzip":($Hb=="gz"?"application/x-gzip":($xb=="tar"?"application/x-tar":($xb=="sql"||$Hb!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($Hb!="text"){header("Content-Disposition: attachment; filename=$W.$xb".($Hb!="file"&&!ereg('[^0-9a-z]',$Hb)?".$Hb":""));}session_write_close();if($_POST["output"]=="bz2"){ob_start('bzcompress',1e6);}if($_POST["output"]=="gz"){ob_start('gzencode',1e6);}return$xb;}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$lb=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$ab=" onclick=\"return confirm('".lang(72)."');\"";$Db='\'(?:\'\'|[^\'\\\\]|\\\\.)*\'|"(?:""|[^"\\\\]|\\\\.)*"';$Rb=array("IN","OUT","INOUT");if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["callf"])){$_GET["call"]=$_GET["callf"];}if(isset($_GET["function"])){$_GET["procedure"]=$_GET["function"];}if(isset($_GET["download"])){$m=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$m-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$c->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($m)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$m=$_GET["table"];$o=fields($m);if(!$o){$n=error();}$D=($o?table_status($m):array());page_header(($o&&is_view($D)?lang(89):lang(90)).": ".h($m),$n);$q->selectLinks($D);if($o){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(91)."<td>".lang(79).(support("comment")?"<td>".lang(84):"")."</thead>\n";foreach($o
as$d){echo"<tr".odd()."><th>".h($d["field"]),"<td>".h($d["full_type"]).($d["null"]?" <i>NULL</i>":"").($d["auto_increment"]?" <i>".lang(82)."</i>":""),(support("comment")?"<td>".nbsp($d["comment"]):""),"\n";}echo"</table>\n";if(!is_view($D)){echo"<h3>".lang(92)."</h3>\n";$I=indexes($m);if($I){echo"<table cellspacing='0'>\n";foreach($I
as$h=>$y){ksort($y["columns"]);$oc=array();foreach($y["columns"]as$e=>$b){$oc[]="<i>".h($b)."</i>".($y["lengths"][$e]?"(".$y["lengths"][$e].")":"");}echo"<tr title='".h($h)."'><th>$y[type]<td>".implode(", ",$oc)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($m).'">'.lang(93)."</a>\n";if(fk_support($D)){echo"<h3>".lang(74)."</h3>\n";$da=foreign_keys($m);if($da){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(94)."<td>".lang(95)."<td>".lang(76)."<td>".lang(96).($A!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($da
as$h=>$_){$w=($_["db"]!=""?"<b>".h($_["db"])."</b>.":"").h($_["table"]);echo"<tr>","<th><i>".implode("</i>, <i>",array_map('h',$_["source"]))."</i>","<td><a href='".h($_["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($_["db"]),ME):ME)."table=".urlencode($_["table"])."'>$w</a>","(<i>".implode("</i>, <i>",array_map('h',$_["target"]))."</i>)","<td>$_[on_delete]\n","<td>$_[on_update]\n";if($A!="sqlite"){echo'<td><a href="'.h(ME.'foreign='.urlencode($m).'&name='.urlencode($h)).'">'.lang(97).'</a>';}}echo"</table>\n";}if($A!="sqlite"){echo'<p><a href="'.h(ME).'foreign='.urlencode($m).'">'.lang(98)."</a>\n";}}if(support("trigger")){echo"<h3>".lang(99)."</h3>\n";$rc=triggers($m);if($rc){echo"<table cellspacing='0'>\n";foreach($rc
as$e=>$b){echo"<tr valign='top'><td>$b[0]<td>$b[1]<th>".h($e)."<td><a href='".h(ME.'trigger='.urlencode($m).'&name='.urlencode($e))."'>".lang(97)."</a>\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($m).'">'.lang(100)."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header(lang(101),"",array(),DB);$rb=array();$Se=array();preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$_COOKIE["adminer_schema"],$ja,PREG_SET_ORDER);foreach($ja
as$l=>$k){$rb[$k[1]]=array($k[2],$k[3]);$Se[]="\n\t'".addcslashes($k[1],"\r\n'\\/")."': [ $k[2], $k[3] ]";}$bc=0;$Ie=-1;$Ga=array();$He=array();$me=array();foreach(table_status()as$a){if(!isset($a["Engine"])){continue;}$sc=0;$Ga[$a["Name"]]["fields"]=array();foreach(fields($a["Name"])as$h=>$d){$sc+=1.25;$d["pos"]=$sc;$Ga[$a["Name"]]["fields"][$h]=$d;}$Ga[$a["Name"]]["pos"]=($rb[$a["Name"]]?$rb[$a["Name"]]:array($bc,0));if(fk_support($a)){foreach(foreign_keys($a["Name"])as$b){if(!$b["db"]){$ya=$Ie;if($rb[$a["Name"]][1]||$rb[$b["table"]][1]){$ya=min(floatval($rb[$a["Name"]][1]),floatval($rb[$b["table"]][1]))-1;}else{$Ie-=.1;}while($me[(string)$ya]){$ya-=.0001;}$Ga[$a["Name"]]["references"][$b["table"]][(string)$ya]=array($b["source"],$b["target"]);$He[$b["table"]][$a["Name"]][(string)$ya]=$b["target"];$me[(string)$ya]=true;}}}$bc=max($bc,$Ga[$a["Name"]]["pos"][0]+2.5+$sc);}echo'<div id="schema" style="height: ',$bc,'em;">
<script type="text/javascript">
tablePos = {',implode(",",$Se)."\n",'};
em = document.getElementById(\'schema\').offsetHeight / ',$bc,';
document.onmousemove = schemaMousemove;
document.onmouseup = schemaMouseup;
</script>
';foreach($Ga
as$h=>$i){echo"<div class='table' style='top: ".$i["pos"][0]."em; left: ".$i["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($h).'"><b>'.h($h)."</b></a><br>\n";foreach($i["fields"]as$d){$b='<span'.type_class($d["type"]).' title="'.h($d["full_type"].($d["null"]?" NULL":'')).'">'.h($d["field"]).'</span>';echo($d["primary"]?"<i>$b</i>":$b)."<br>\n";}foreach((array)$i["references"]as$Zb=>$ic){foreach($ic
as$ya=>$Vc){$kc=$ya-$rb[$h][1];$l=0;foreach($Vc[0]as$Da){echo"<div class='references' title='".h($Zb)."' id='refs$ya-".($l++)."' style='left: $kc"."em; top: ".$i["fields"][$Da]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$kc)."em;'></div></div>\n";}}}foreach((array)$He[$h]as$Zb=>$ic){foreach($ic
as$ya=>$z){$kc=$ya-$rb[$h][1];$l=0;foreach($z
as$oa){echo"<div class='references' title='".h($Zb)."' id='refd$ya-".($l++)."' style='left: $kc"."em; top: ".$i["fields"][$oa]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=arrow.gif) no-repeat right center;&amp;version=3.0.0-dev'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$kc)."em;'></div></div>\n";}}}echo"</div>\n";}foreach($Ga
as$h=>$i){foreach((array)$i["references"]as$Zb=>$ic){foreach($ic
as$ya=>$Vc){$Yc=$bc;$fd=-10;foreach($Vc[0]as$e=>$Da){$Le=$i["pos"][0]+$i["fields"][$Da]["pos"];$Ke=$Ga[$Zb]["pos"][0]+$Ga[$Zb]["fields"][$Vc[1][$e]]["pos"];$Yc=min($Yc,$Le,$Ke);$fd=max($fd,$Le,$Ke);}echo"<div class='references' id='refl$ya' style='left: $ya"."em; top: $Yc"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($fd-$Yc)."em;'></div></div>\n";}}}echo'</div>
';}elseif(isset($_GET["dump"])){$m=$_GET["dump"];if($_POST){$Je="";foreach(array("output","format","db_style","table_style","data_style")as$e){$Je.="&$e=".urlencode($_POST[$e]);}cookie("adminer_export",substr($Je,1));$xb=dump_headers(($m!=""?$m:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));if($_POST["format"]=="sql"){echo"-- Adminer $Tb ".$ga[DRIVER]." dump

".($A!="sql"?"":"SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = ".$c->quote($c->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

");}$V=$_POST["db_style"];$B=array(DB);if(DB==""){$B=$_POST["databases"];if(is_string($B)){$B=explode("\n",rtrim(str_replace("\r","",$B),"\n"));}}foreach((array)$B
as$r){if($c->select_db($r)){if($_POST["format"]=="sql"&&ereg('CREATE',$V)&&($ia=$c->result("SHOW CREATE DATABASE ".idf_escape($r),1))){if($V=="DROP+CREATE"){echo"DROP DATABASE IF EXISTS ".idf_escape($r).";\n";}echo($V=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$ia):$ia).";\n";}if($_POST["format"]=="sql"){if($V){echo
use_sql($r).";\n\n";}if(in_array("CREATE+ALTER",array($V,$_POST["table_style"]))){echo"SET @adminer_alter = '';\n\n";}$ib="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Ra){$g=$c->query("SHOW $Ra STATUS WHERE Db = ".$c->quote($r));while($a=$g->fetch_assoc()){$ib.=($V!='DROP+CREATE'?"DROP $Ra IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$c->result("SHOW CREATE $Ra ".idf_escape($a["Name"]),2).";;\n\n";}}}if($_POST["events"]){$g=$c->query("SHOW EVENTS");if($g){while($a=$g->fetch_assoc()){$ib.=($V!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$c->result("SHOW CREATE EVENT ".idf_escape($a["Name"]),3).";;\n\n";}}}if($ib){echo"DELIMITER ;;\n\n$ib"."DELIMITER ;\n\n";}}if($_POST["table_style"]||$_POST["data_style"]){$Y=array();foreach(table_status()as$a){$i=(DB==""||in_array($a["Name"],(array)$_POST["tables"]));$Te=(DB==""||in_array($a["Name"],(array)$_POST["data"]));if($i||$Te){if(!is_view($a)){if($xb=="tar"){ob_start();}dump_table($a["Name"],($i?$_POST["table_style"]:""));if($Te){dump_data($a["Name"],$_POST["data_style"]);}if($_POST["format"]=="sql"&&$_POST["triggers"]){$rc=trigger_sql($a["Name"],$_POST["table_style"]);if($rc){echo"\nDELIMITER ;;\n$rc\nDELIMITER ;\n";}}if($xb=="tar"){echo
tar_file((DB!=""?"":"$r/")."$a[Name].csv",ob_get_clean());}elseif($_POST["format"]=="sql"){echo"\n";}}elseif($_POST["format"]=="sql"){$Y[]=$a["Name"];}}}foreach($Y
as$Cc){dump_table($Cc,$_POST["table_style"],true);}if($xb=="tar"){echo
pack("x512");}}if($V=="CREATE+ALTER"&&$_POST["format"]=="sql"){$j="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _table_name, _engine, _table_collation varchar(64);
	DECLARE _table_comment varchar(64);
	DECLARE done bool DEFAULT 0;
	DECLARE tables CURSOR FOR $j;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	OPEN tables;
	REPEAT
		FETCH tables INTO _table_name, _engine, _table_collation, _table_comment;
		IF NOT done THEN
			CASE _table_name";$g=$c->query($j);while($a=$g->fetch_assoc()){$Oa=$c->quote($a["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["TABLE_COMMENT"]):$a["TABLE_COMMENT"]);echo"
				WHEN ".$c->quote($a["TABLE_NAME"])." THEN
					".(isset($a["ENGINE"])?"IF _engine != '$a[ENGINE]' OR _table_collation != '$a[TABLE_COLLATION]' OR _table_comment != $Oa THEN
						ALTER TABLE ".idf_escape($a["TABLE_NAME"])." ENGINE=$a[ENGINE] COLLATE=$a[TABLE_COLLATION] COMMENT=$Oa;
					END IF":"BEGIN END").";";}echo"
				ELSE
					SET alter_command = CONCAT(alter_command, 'DROP TABLE `', REPLACE(_table_name, '`', '``'), '`;\\n');
			END CASE;
		END IF;
	UNTIL done END REPEAT;
	CLOSE tables;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;
";}if(in_array("CREATE+ALTER",array($V,$_POST["table_style"]))&&$_POST["format"]=="sql"){echo"SELECT @adminer_alter;\n";}}}exit;}page_header(lang(102),"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$Pe=array('','USE','DROP+CREATE','CREATE');$Qe=array('','DROP+CREATE','CREATE');$xe=array('','TRUNCATE+INSERT','INSERT');if($A=="sql"){$Pe[]='CREATE+ALTER';$Qe[]='CREATE+ALTER';$xe[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$a);if(!$a){$a=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");}$Fa=($_GET["dump"]=="");echo"<tr><th>".lang(103)."<td>".$q->dumpOutput(0,$a["output"])."\n","<tr><th>".lang(104)."<td>".$q->dumpFormat(0,$a["format"])."\n",($A=="sqlite"?"":"<tr><th>".lang(58)."<td>".html_select('db_style',$Pe,$a["db_style"]).(support("routine")?checkbox("routines",1,$Fa,lang(105)):"").(support("event")?checkbox("events",1,$Fa,lang(106)):"")),"<tr><th>".lang(70)."<td>".html_select('table_style',$Qe,$a["table_style"]).checkbox("auto_increment",1,$a["table_style"],lang(82)).(support("trigger")?checkbox("triggers",1,$a["table_style"],lang(99)):""),"<tr><th>".lang(107)."<td>".html_select('data_style',$xe,$a["data_style"]),'</table>
<p><input type="submit" value="',lang(102),'">

<table cellspacing="0">
';$_d=array();if(DB!=""){$Fa=($m!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$Fa onclick='formCheck(this, /^tables\\[/);'>".lang(70)."</label>","<th style='text-align: right;'><label>".lang(107)."<input type='checkbox' id='check-data'$Fa onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Y="";foreach(table_status()as$a){$h=$a["Name"];$_c=ereg_replace("_.*","",$h);$Fa=($m==""||$m==(substr($m,-1)=="%"?"$_c%":$h));$oc="<tr><td>".checkbox("tables[]",$h,$Fa,$h,"formUncheck('check-tables');");if(is_view($a)){$Y.="$oc\n";}else{echo"$oc<td align='right'><label>".($a["Engine"]=="InnoDB"&&$a["Rows"]?"~ ":"").$a["Rows"].checkbox("data[]",$h,$Fa,"","formUncheck('check-data');")."</label>\n";}$_d[$_c]++;}echo$Y;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($m==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".lang(58)."</label></thead>\n";$B=get_databases();if($B){foreach($B
as$r){if(!information_schema($r)){$_c=ereg_replace("_.*","",$r);echo"<tr><td>".checkbox("databases[]",$r,$m==""||$m=="$_c%",$r,"formUncheck('check-databases');")."</label>\n";$_d[$_c]++;}}}else{echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}}echo'</table>
</form>
';$fb=true;foreach($_d
as$e=>$b){if($e!=""&&$b>1){echo($fb?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$e%")."'>".h($e)."</a>";$fb=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(63));$g=$c->query("SELECT User, Host FROM mysql.user ORDER BY Host, User");if(!$g){echo'<form action=""><p>
';hidden_fields_get();echo
lang(18),': <input name="user">
',lang(17),': <input name="host" value="localhost">
<input type="hidden" name="grant" value="">
<input type="submit" value="',lang(28),'">
</form>
';$g=$c->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");}echo"<table cellspacing='0'>\n","<thead><tr><th>&nbsp;<th>".lang(18)."<th>".lang(17)."</thead>\n";while($a=$g->fetch_assoc()){echo'<tr'.odd().'><td><a href="'.h(ME.'user='.urlencode($a["User"]).'&host='.urlencode($a["Host"])).'">'.lang(108).'</a><td>'.h($a["User"])."<td>".h($a["Host"])."\n";}echo"</table>\n",'<p><a href="'.h(ME).'user=">'.lang(109)."</a>";}elseif(isset($_GET["sql"])){restart_session();$rf=&get_session("history");$bb=&$rf[DB];if(!$n&&$_POST["clear"]){$bb=array();redirect(remove_from_uri("history"));}page_header(lang(40),$n);if(!$n&&$_POST){$Ja=false;$j=$_POST["query"];if($_POST["webfile"]){$Ja=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$j=($Ja?fread($Ja,1e6):false);}elseif($_FILES["sql_file"]["error"]!=4){$j=get_file("sql_file",true);}if(is_string($j)){if(function_exists('memory_get_usage')){@ini_set("memory_limit",2*strlen($j)+memory_get_usage()+8e6);}if($j!=""&&strlen($j)<1e6&&(!$bb||end($bb)!=$j)){$bb[]=$j;}$Mc="(\\s|/\\*.*\\*/|(#|-- )[^\n]*\n|--\n)";if(!ini_bool("session.use_cookies")){session_write_close();}$qd=";";$M=0;$Hd=true;$L=connect();if(is_object($L)&&DB!=""){$L->select_db(DB);}$na=0;$md="";while($j!=""){if(!$M&&preg_match('~^\\s*DELIMITER\\s+(.+)~i',$j,$k)){$qd=$k[1];$j=substr($j,strlen($k[0]));}else{preg_match('('.preg_quote($qd).'|[\'`"]|/\\*|-- |#|$)',$j,$k,PREG_OFFSET_CAPTURE,$M);$pa=$k[0][0];$M=$k[0][1]+strlen($pa);if(!$pa&&$Ja&&!feof($Ja)){$j.=fread($Ja,1e5);}else{if(!$pa&&rtrim($j)==""){break;}if(!$pa||$pa==$qd){$Hd=false;$ra=substr($j,0,$k[0][1]);$na++;echo"<pre class='jush-$A' id='sql-$na'>".shorten_utf8(trim($ra),1000)."</pre>\n";ob_flush();flush();$Fd=explode(" ",microtime());if(!$c->multi_query($ra)){echo"<p class='error'>".lang(110).": ".error()."\n";$md.=" <a href='#sql-$na'>$na</a>";if($_POST["error_stops"]){break;}}else{if(is_object($L)&&preg_match("~^$Mc*(USE)\\b~isU",$ra)){$L->query($ra);}do{$g=$c->store_result();$gd=explode(" ",microtime());$Id=" <span class='time'>(".lang(111,max(0,$gd[0]-$Fd[0]+$gd[1]-$Fd[1])).")</span>";if(is_object($g)){select($g,$L);echo"<p>".($g->num_rows?lang(112,$g->num_rows):"").$Id;if($L&&preg_match("~^($Mc|\\()*SELECT\\b~isU",$ra)){$T="explain-$na";echo", <a href='#$T' onclick=\"return !toggle('$T');\">EXPLAIN</a>\n","<div id='$T' class='hidden'>\n";select(explain($L,$ra));echo"</div>\n";}}else{if(preg_match("~^$Mc*(CREATE|DROP|ALTER)$Mc+(DATABASE|SCHEMA)\\b~isU",$ra)){restart_session();set_session("databases",null);session_write_close();}echo"<p class='message' title='".h($c->info)."'>".lang(113,$c->affected_rows)."$Id\n";}$Fd=$gd;}while($c->next_result());}$j=substr($j,$M);$M=0;}else{while(preg_match('~'.($pa=='/*'?'\\*/':(ereg('-- |#',$pa)?"\n":"$pa|\\\\.")).'|$~s',$j,$k,PREG_OFFSET_CAPTURE,$M)){$fa=$k[0][0];$M=$k[0][1]+strlen($fa);if(!$fa&&$Ja&&!feof($Ja)){$j.=fread($Ja,1e6);}elseif($fa[0]!="\\"){break;}}}}}}if($md&&$na>1){echo"<p class='error'>".lang(110).": $md\n";}if($Hd){echo"<p class='message'>".lang(114)."\n";}}else{echo"<p class='error'>".upload_error($j)."\n";}}echo'
<form action="" method="post" enctype="multipart/form-data">
<p>';$ra=$_GET["sql"];if($_POST){$ra=$_POST["query"];}elseif($_GET["history"]!=""){$ra=$bb[$_GET["history"]];}textarea("query",$ra,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),'<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="',lang(115),'">
',checkbox("error_stops",1,$_POST["error_stops"],lang(116)),'
',"<p>".(ini_bool("file_uploads")?lang(117).': <input type="file" name="sql_file">':lang(118));print_fieldset("webfile",lang(119),$_POST["webfile"]);$wd=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$e=>$b){if(extension_loaded($b)){$wd[]=".$e";}}echo
lang(120,"<code>adminer.sql".($wd?"[".implode("|",$wd)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(121).'">',"</div></fieldset>\n";if($bb){print_fieldset("history",lang(122),$_GET["history"]!="");foreach($bb
as$e=>$b){echo'<a href="'.h(ME."sql=&history=$e").'">'.lang(28)."</a> <code class='jush-$A'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$b)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(123)."'>\n","</div></fieldset>\n";}echo'
</form>
';}elseif(isset($_GET["edit"])){$m=$_GET["edit"];$t=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$Va=(isset($_GET["select"])?$_POST["edit"]:$t);$o=fields($m);foreach($o
as$h=>$d){if(!isset($d["privileges"][$Va?"update":"insert"])||$q->fieldName($d)==""){unset($o[$h]);}}if($_POST&&!$n&&!isset($_GET["select"])){$ka=$_POST["referer"];if($_POST["insert"]){$ka=($Va?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$ka)){$ka=ME."select=".urlencode($m);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($m),$t),$ka,lang(124));}else{$s=array();foreach($o
as$h=>$d){$b=process_input($d);if($b!==false&&$b!==null){$s[idf_escape($h)]=($Va?"\n".idf_escape($h)." = $b":$b);}}if($Va){if(!$s){redirect($ka);}query_redirect("UPDATE".limit1(table($m)." SET".implode(",",$s),"\nWHERE $t"),$ka,lang(125));}else{$g=insert_into($m,$s);$Md=($g?last_id():0);queries_redirect($ka,lang(126,($Md?" $Md":"")),$g);}}}$_a=$q->tableName(table_status($m));page_header(($Va?lang(28):lang(127)),$n,array("select"=>array($m,$_a)),$_a);$a=null;if($_POST["save"]){$a=(array)$_POST["fields"];}elseif($t){$C=array();foreach($o
as$h=>$d){if(isset($d["privileges"]["select"])){$C[]=($_POST["clone"]&&$d["auto_increment"]?"'' AS ":(ereg("enum|set",$d["type"])?"1*".idf_escape($h)." AS ":"")).idf_escape($h);}}$a=array();if($C){$g=$c->query("SELECT".limit(implode(", ",$C)." FROM ".table($m)," WHERE $t",(isset($_GET["select"])?2:1)));$a=$g->fetch_assoc();if(isset($_GET["select"])&&$g->fetch_assoc()){$a=null;}}}echo'
<form action="" method="post" enctype="multipart/form-data">
';if($o){echo"<table cellspacing='0'>\n";foreach($o
as$h=>$d){echo"<tr><th>".$q->fieldName($d);$ta=$_GET["set"][bracket_escape($h)];$p=(isset($a)?($a[$h]!=""&&ereg("enum|set",$d["type"])?intval($a[$h]):$a[$h]):(!$Va&&$d["auto_increment"]?"":(isset($_GET["select"])?false:(isset($ta)?$ta:$d["default"]))));if(!$_POST["save"]&&is_string($p)){$p=$q->editVal($p,$d);}$O=($_POST["save"]?(string)$_POST["function"][$h]:($t&&$d["on_update"]=="CURRENT_TIMESTAMP"?"now":($p===false?null:(isset($p)?'':'NULL'))));if($d["type"]=="timestamp"&&$p=="CURRENT_TIMESTAMP"){$p="";$O="now";}input($d,$p,$O);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$P,'">
<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
';if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}if($o){echo"<input type='submit' value='".lang(128)."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($Va?lang(129):lang(130))."'>\n";}}if($Va){echo"<input type='submit' name='delete' value='".lang(131)."'$ab>\n";}echo'</form>
';}elseif(isset($_GET["create"])){$m=$_GET["create"];$Ld=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$Kd=referencable_primary($m);$da=array();foreach($Kd
as$_a=>$d){$da[str_replace("`","``",$_a)."`".str_replace("`","``",$d["field"])]=$_a;}$Qc=array();$Nc=array();if($m!=""){$Qc=fields($m);$Nc=table_status($m);}if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"]){query_redirect("DROP TABLE ".table($m),substr(ME,0,-1),lang(132));}else{$o=array();$hb=array();ksort($_POST["fields"]);$ad=reset($Qc);$Kb="FIRST";foreach($_POST["fields"]as$e=>$d){$_=$da[$d["type"]];$Ic=(isset($_)?$Kd[$_]:$d);if($d["field"]!=""){if(!$d["has_default"]){$d["default"]=null;}$ta=eregi_replace(" *on update CURRENT_TIMESTAMP","",$d["default"]);if($ta!=$d["default"]){$d["on_update"]="CURRENT_TIMESTAMP";$d["default"]=$ta;}if($e==$_POST["auto_increment_col"]){$d["auto_increment"]=true;}$Jd=process_field($d,$Ic);if($Jd!=process_field($ad,$ad)){$o[]=array($d["orig"],$Jd,$Kb);}if(isset($_)){$hb[]=($m!=""?"ADD":" ")." FOREIGN KEY (".idf_escape($d["field"]).") REFERENCES ".idf_escape($da[$d["type"]])." (".idf_escape($Ic["field"]).")".(in_array($d["on_delete"],$lb)?" ON DELETE $d[on_delete]":"");}$Kb="AFTER ".idf_escape($d["field"]);}elseif($d["orig"]!=""){$o[]=array($d["orig"]);}if($d["orig"]!=""){$ad=next($Qc);}}$tb="";if(in_array($_POST["partition_by"],$Ld)){$jd=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$e=>$b){$p=$_POST["partition_values"][$e];$jd[]="\nPARTITION ".idf_escape($b)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($p!=""?" ($p)":" MAXVALUE");}}$tb.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($jd?" (".implode(",",$jd)."\n)":($_POST["partitions"]?" PARTITIONS ".intval($_POST["partitions"]):""));}elseif($m!=""&&support("partitioning")){$tb.="\nREMOVE PARTITIONING";}$va=lang(133);if($m==""){cookie("adminer_engine",$_POST["Engine"]);$va=lang(134);}queries_redirect(ME."table=".urlencode($_POST["name"]),$va,alter_table($m,$_POST["name"],$o,$hb,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$Nc["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$Nc["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?preg_replace('~\\D+~','',$_POST["Auto_increment"]):""),$tb));}}page_header(($m!=""?lang(25):lang(135)),$n,array("table"=>$m),$m);$a=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"")),"partition_names"=>array(""),);if($_POST){$a=$_POST;if($a["auto_increment_col"]){$a["fields"][$a["auto_increment_col"]]["auto_increment"]=true;}process_fields($a["fields"]);}elseif($m!=""){$a=$Nc;$a["name"]=$m;$a["fields"]=array();if(!$_GET["auto_increment"]){$a["Auto_increment"]="";}foreach($Qc
as$d){$d["has_default"]=isset($d["default"]);if($d["on_update"]){$d["default"].=" ON UPDATE $d[on_update]";}$a["fields"][]=$d;}if(support("partitioning")){$Yb="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".$c->quote(DB)." AND TABLE_NAME = ".$c->quote($m);$g=$c->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Yb ORDER BY PARTITION_ORDINAL_POSITION LIMIT 1");list($a["partition_by"],$a["partitions"],$a["partition"])=$g->fetch_row();$a["partition_names"]=array();$a["partition_values"]=array();$g=$c->query("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Yb AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION");while($Kc=$g->fetch_assoc()){$a["partition_names"][]=$Kc["PARTITION_NAME"];$a["partition_values"][]=$Kc["PARTITION_DESCRIPTION"];}$a["partition_names"][]="";}}$U=collations();$id=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($id&&count($a["fields"])>$id){echo"<p class='error'>".h(lang(136,'suhosin.post.max_vars','suhosin.request.max_vars'))."\n";}$hd=engines();foreach($hd
as$ob){if(!strcasecmp($ob,$a["Engine"])){$a["Engine"]=$ob;break;}}echo'
<form action="" method="post" id="form">
<p>
',lang(137),': <input name="name" maxlength="64" value="',h($a["name"]),'">
',($hd?html_select("Engine",array(""=>"(".lang(138).")")+$hd,$a["Engine"]):""),' ',($U&&!ereg("sqlite|mssql",$A)?html_select("Collation",array(""=>"(".lang(75).")")+$U,$a["Collation"]):""),' <input type="submit" value="',lang(128),'">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$Jb=edit_fields($a["fields"],$U,"TABLE",$id,$da,$a["Comment"]!="");echo'</table>
<p>
',lang(82),': <input name="Auto_increment" size="6" value="',h($a["Auto_increment"]),'">
<script type="text/javascript">
document.write(\'<label><input type="checkbox" onclick="columnShow(this.checked, 5);">',lang(83),'<\\/label>\');
</script>
',(support("comment")?checkbox("","",$Jb,lang(84),"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();").' <input id="Comment" name="Comment" value="'.h($a["Comment"]).'" maxlength="60"'.($Jb?'':' class="hidden"').'>':''),'<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="',lang(128),'">
';if(strlen($_GET["create"])){echo'<input type="submit" name="drop" value="',lang(71),'"',$ab,'>';}if(support("partitioning")){$le=ereg('RANGE|LIST',$a["partition_by"]);print_fieldset("partition",lang(139),$a["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$Ld,$a["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($a["partition"]),'">)
',lang(140),': <input name="partitions" size="2" value="',h($a["partitions"]),'"',($le||!$a["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($le?"":" class='hidden'"),'>
<thead><tr><th>',lang(141),'<th>',lang(142),'</thead>
';foreach($a["partition_names"]as$e=>$b){echo'<tr>','<td><input name="partition_names[]" value="'.h($b).'"'.($e==count($a["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($a["partition_values"][$e]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$m=$_GET["indexes"];$ld=array("PRIMARY","UNIQUE","INDEX");$D=table_status($m);if(ereg("MyISAM|Maria",$D["Engine"])){$ld[]="FULLTEXT";}$I=indexes($m);if($_POST&&!$n&&!$_POST["add"]){$u=array();foreach($_POST["indexes"]as$y){if(in_array($y["type"],$ld)){$z=array();$Vb=array();$s=array();ksort($y["columns"]);foreach($y["columns"]as$e=>$G){if($G!=""){$Z=$y["lengths"][$e];$s[]=idf_escape($G).($Z?"(".intval($Z).")":"");$z[]=$G;$Vb[]=($Z?$Z:null);}}if($z){foreach($I
as$h=>$_b){ksort($_b["columns"]);ksort($_b["lengths"]);if($y["type"]==$_b["type"]&&array_values($_b["columns"])===$z&&(!$_b["lengths"]||array_values($_b["lengths"])===$Vb)){unset($I[$h]);continue
2;}}$u[]=array($y["type"],"(".implode(", ",$s).")");}}}foreach($I
as$h=>$_b){$u[]=array($_b["type"],idf_escape($h),"DROP");}if(!$u){redirect(ME."table=".urlencode($m));}queries_redirect(ME."table=".urlencode($m),lang(143),alter_indexes($m,$u));}page_header(lang(92),$n,array("table"=>$m),$m);$o=array_keys(fields($m));$a=array("indexes"=>$I);if($_POST){$a=$_POST;if($_POST["add"]){foreach($a["indexes"]as$e=>$y){if($y["columns"][count($y["columns"])]!=""){$a["indexes"][$e]["columns"][]="";}}$y=end($a["indexes"]);if($y["type"]||array_filter($y["columns"],'strlen')||array_filter($y["lengths"],'strlen')){$a["indexes"][]=array("columns"=>array(1=>""));}}}else{foreach($a["indexes"]as$e=>$y){$a["indexes"][$e]["columns"][]="";}$a["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0">
<thead><tr><th>',lang(144),'<th>',lang(145),'</thead>
';$ma=0;foreach($a["indexes"]as$y){echo"<tr><td>".html_select("indexes[$ma][type]",array(-1=>"")+$ld,$y["type"],($ma==count($a["indexes"])-1?"indexesAddRow(this);":1))."<td>\n";ksort($y["columns"]);foreach($y["columns"]as$l=>$G){echo"<span>".html_select("indexes[$ma][columns][$l]",array(-1=>"")+$o,$G,($l==count($y["columns"])?"indexesAddColumn(this);":1)),"<input name='indexes[$ma][lengths][$l]' size='2' value='".h($y["lengths"][$l])."'> </span>\n";}echo"\n";$ma++;}echo'</table>
<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="',lang(128),'">
<noscript><p><input type="submit" name="add" value="',lang(85),'"></noscript>
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$n&&!isset($_POST["add_x"])){restart_session();if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(146),drop_databases(array(DB)));}elseif(DB!==$_POST["name"]){if(DB!=""){$_GET["db"]=$_POST["name"];queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($_POST["name"]),lang(147),rename_database($_POST["name"],$_POST["collation"]));}else{$Wb=explode("\n",str_replace("\r","",$_POST["name"]));$ee=true;$wb="";foreach($Wb
as$r){if(count($Wb)==1||$r!=""){if(!create_database($r,$_POST["collation"])){$ee=false;}$wb=$r;}}queries_redirect(ME."db=".urlencode($wb),lang(148),$ee);}}else{if(!$_POST["collation"]){redirect(substr(ME,0,-1));}query_redirect("ALTER DATABASE ".idf_escape($_POST["name"])." COLLATE ".$c->quote($_POST["collation"]),substr(ME,0,-1),lang(149));}}page_header(DB!=""?lang(150):lang(151),$n,array(),DB);$U=collations();$h=DB;$wc=null;if($_POST){$h=$_POST["name"];$wc=$_POST["collation"];}elseif(DB!=""){$wc=db_collation(DB,$U);}elseif($A=="sql"){foreach(get_vals("SHOW GRANTS")as$ea){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$ea,$k)&&$k[1]){$h=stripcslashes(idf_unescape("`$k[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($h,"\n")?'<textarea name="name" rows="10" cols="40">'.h($h).'</textarea><br>':'<input name="name" value="'.h($h).'" maxlength="64">')."\n".($U?html_select("collation",array(""=>"(".lang(75).")")+$U,$wc):""),'<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="',lang(128),'">
';if(DB!=""){echo"<input type='submit' name='drop' value='".lang(71)."'$ab>\n";}elseif(!$_POST["add_x"]&&$_GET["db"]==""){echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.0-dev' alt='+' title='".lang(85)."'>\n";}echo'</form>
';}elseif(isset($_GET["scheme"])){if($_POST&&!$n){$w=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"]){query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$w,lang(152));}else{$w.=urlencode($_POST["name"]);if($_GET["ns"]==""){query_redirect("CREATE SCHEMA ".idf_escape($_POST["name"]),$w,lang(153));}elseif($_GET["ns"]!=$_POST["name"]){query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($_POST["name"]),$w,lang(154));}else{redirect($w);}}}page_header($_GET["ns"]!=""?lang(155):lang(156),$n);$a=array("name"=>$_GET["ns"]);if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p><input name="name" value="',h($a["name"]),'">
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="',lang(128),'">
';if($_GET["ns"]!=""){echo"<input type='submit' name='drop' value='".lang(71)."'$ab>\n";}echo'</form>
';}elseif(isset($_GET["call"])){$Qa=$_GET["call"];page_header(lang(157).": ".h($Qa),$n);$Ra=routine($Qa,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Eb=array();$ib=array();foreach($Ra["fields"]as$l=>$d){if(substr($d["inout"],-3)=="OUT"){$ib[$l]="@".idf_escape($d["field"])." AS ".idf_escape($d["field"]);}if(!$d["inout"]||substr($d["inout"],0,2)=="IN"){$Eb[]=$l;}}if(!$n&&$_POST){$de=array();foreach($Ra["fields"]as$e=>$d){if(in_array($e,$Eb)){$b=process_input($d);if($b===false){$b="''";}if(isset($ib[$e])){$c->query("SET @".idf_escape($d["field"])." = $b");}}$de[]=(isset($ib[$e])?"@".idf_escape($d["field"]):$b);}$j=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($Qa)."(".implode(", ",$de).")";echo"<p><code class='jush-$A'>".h($j)."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".lang(28)."</a>\n";if(!$c->multi_query($j)){echo"<p class='error'>".error()."\n";}else{do{$g=$c->store_result();if(is_object($g)){select($g);}else{echo"<p class='message'>".lang(158,$c->affected_rows)."\n";}}while($c->next_result());if($ib){select($c->query("SELECT ".implode(", ",$ib)));}}}echo'
<form action="" method="post">
';if($Eb){echo"<table cellspacing='0'>\n";foreach($Eb
as$e){$d=$Ra["fields"][$e];$h=$d["field"];echo"<tr><th>".$q->fieldName($d);$p=$_POST["fields"][$h];if($p!=""&&ereg("enum|set",$d["type"])){$p=intval($p);}input($d,$p,(string)$_POST["function"][$h]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="',lang(157),'">
</form>
';}elseif(isset($_GET["foreign"])){$m=$_GET["foreign"];if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"]){query_redirect("ALTER TABLE ".table($m)."\nDROP ".($A=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($m),lang(159));}else{$Da=array_filter($_POST["source"],'strlen');ksort($Da);$oa=array();foreach($Da
as$e=>$b){$oa[$e]=$_POST["target"][$e];}query_redirect("ALTER TABLE ".table($m).($_GET["name"]!=""?"\nDROP FOREIGN KEY ".idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$Da)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$oa)).")".(in_array($_POST["on_delete"],$lb)?" ON DELETE $_POST[on_delete]":"").(in_array($_POST["on_update"],$lb)?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($m),($_GET["name"]!=""?lang(160):lang(161)));$n=lang(162)."<br>$n";}}page_header(lang(163),$n,array("table"=>$m),$m);$a=array("table"=>$m,"source"=>array(""));if($_POST){$a=$_POST;ksort($a["source"]);if($_POST["add"]){$a["source"][]="";}elseif($_POST["change"]||$_POST["change-js"]){$a["target"]=array();}}elseif($_GET["name"]!=""){$da=foreign_keys($m);$a=$da[$_GET["name"]];$a["source"][]="";}$Da=array_keys(fields($m));$oa=($m===$a["table"]?$Da:array_keys(fields($a["table"])));$ce=array();foreach(table_status()as$h=>$D){if(fk_support($D)){$ce[]=$h;}}echo'
<form action="" method="post">
<p>
';if($a["db"]==""){echo
lang(164),':
',html_select("table",$ce,$a["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(165),'"></noscript>
<table cellspacing="0">
<thead><tr><th>',lang(94),'<th>',lang(95),'</thead>
';$ma=0;foreach($a["source"]as$e=>$b){echo"<tr>","<td>".html_select("source[".intval($e)."]",array(-1=>"")+$Da,$b,($ma==count($a["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".intval($e)."]",$oa,$a["target"][$e]);$ma++;}echo'</table>
<p>
',lang(76),': ',html_select("on_delete",array(-1=>"")+$lb,$a["on_delete"]),' ',lang(96),': ',html_select("on_update",array(-1=>"")+$lb,$a["on_update"]),'<p>
<input type="submit" value="',lang(128),'">
<noscript><p><input type="submit" name="add" value="',lang(166),'"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="',lang(71),'"',$ab,'>';}echo'<input type="hidden" name="token" value="',$P,'">
</form>
';}elseif(isset($_GET["view"])){$m=$_GET["view"];$Ua=false;if($_POST&&!$n){$Ua=drop_create("DROP VIEW ".table($m),"CREATE VIEW ".table($_POST["name"])." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($_POST["name"])),lang(167),lang(168),lang(169),$m);}page_header(($m!=""?lang(24):lang(170)),$n,array("table"=>$m),$m);$a=array();if($_POST){$a=$_POST;}elseif($m!=""){$a=view($m);$a["name"]=$m;}echo'
<form action="" method="post">
<p>';textarea("select",$a["select"]);echo'<p>
<input type="hidden" name="token" value="',$P,'">
';if($Ua){echo'<input type="hidden" name="dropped" value="1">';}echo
lang(171),': <input name="name" value="',h($a["name"]),'" maxlength="64">
<input type="submit" value="',lang(128),'">
</form>
';}elseif(isset($_GET["event"])){$gb=$_GET["event"];$be=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$cd=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$n){if($_POST["drop"]){query_redirect("DROP EVENT ".idf_escape($gb),substr(ME,0,-1),lang(172));}elseif(in_array($_POST["INTERVAL_FIELD"],$be)&&isset($cd[$_POST["STATUS"]])){$fe="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".$c->quote($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".$c->quote($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".$c->quote($_POST["ENDS"]):""):"AT ".$c->quote($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";query_redirect(($gb!=""?"ALTER EVENT ".idf_escape($gb).$fe.($gb!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$fe)."\n".$cd[$_POST["STATUS"]]." COMMENT ".$c->quote($_POST["EVENT_COMMENT"])." DO\n$_POST[EVENT_DEFINITION]",substr(ME,0,-1),($gb!=""?lang(173):lang(174)));}}page_header(($gb!=""?lang(175).": ".h($gb):lang(176)),$n);$a=array();if($_POST){$a=$_POST;}elseif($gb!=""){$g=$c->query("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".$c->quote(DB)." AND EVENT_NAME = ".$c->quote($gb));$a=$g->fetch_assoc();}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(171),'<td><input name="EVENT_NAME" value="',h($a["EVENT_NAME"]),'" maxlength="64">
<tr><th>',lang(177),'<td><input name="STARTS" value="',h("$a[EXECUTE_AT]$a[STARTS]"),'">
<tr><th>',lang(178),'<td><input name="ENDS" value="',h($a["ENDS"]),'">
<tr><th>',lang(179),'<td><input name="INTERVAL_VALUE" value="',h($a["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$be,$a["INTERVAL_FIELD"]),'<tr><th>',lang(66),'<td>',html_select("STATUS",$cd,$a["STATUS"]),'<tr><th>',lang(84),'<td><input name="EVENT_COMMENT" value="',h($a["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$a["ON_COMPLETION"]=="PRESERVE",lang(180)),'</table>
<p>';textarea("EVENT_DEFINITION",$a["EVENT_DEFINITION"]);echo'<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="',lang(128),'">
';if($gb!=""){echo'<input type="submit" name="drop" value="',lang(71),'"',$ab,'>';}echo'</form>
';}elseif(isset($_GET["procedure"])){$Qa=$_GET["procedure"];$Ra=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$Ua=false;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$s=array();$o=(array)$_POST["fields"];ksort($o);foreach($o
as$d){if($d["field"]!=""){$s[]=(in_array($d["inout"],$Rb)?"$d[inout] ":"").idf_escape($d["field"]).process_type($d,"CHARACTER SET");}}$Ua=drop_create("DROP $Ra ".idf_escape($Qa),"CREATE $Ra ".idf_escape($_POST["name"])." (".implode(", ",$s).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"")."\n$_POST[definition]",substr(ME,0,-1),lang(181),lang(182),lang(183),$Qa);}page_header(($Qa!=""?(isset($_GET["function"])?lang(184):lang(185)).": ".h($Qa):(isset($_GET["function"])?lang(186):lang(187))),$n);$U=get_vals("SHOW CHARACTER SET");sort($U);$a=array("fields"=>array());if($_POST){$a=$_POST;$a["fields"]=(array)$a["fields"];process_fields($a["fields"]);}elseif($Qa!=""){$a=routine($Qa,$Ra);$a["name"]=$Qa;}echo'
<form action="" method="post" id="form">
<table cellspacing="0" class="nowrap">
';edit_fields($a["fields"],$U,$Ra);if(isset($_GET["function"])){echo"<tr><td>".lang(188);edit_type("returns",$a["returns"],$U);}echo'</table>
<p>';textarea("definition",$a["definition"]);echo'<p>
<input type="hidden" name="token" value="',$P,'">
';if($Ua){echo'<input type="hidden" name="dropped" value="1">';}echo
lang(171),': <input name="name" value="',h($a["name"]),'" maxlength="64">
<input type="submit" value="',lang(128),'">
';if($Qa!=""){echo'<input type="submit" name="drop" value="',lang(71),'"',$ab,'>';}echo'</form>
';}elseif(isset($_GET["sequence"])){$Bb=$_GET["sequence"];if($_POST&&!$n){$w=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP SEQUENCE ".idf_escape($Bb),$w,lang(189));}elseif($Bb==""){query_redirect("CREATE SEQUENCE ".idf_escape($_POST["name"]),$w,lang(190));}elseif($Bb!=$_POST["name"]){query_redirect("ALTER SEQUENCE ".idf_escape($Bb)." RENAME TO ".idf_escape($_POST["name"]),$w,lang(191));}else{redirect($w);}}page_header($Bb!=""?lang(192).": ".h($Bb):lang(193),$n);$a=array("name"=>$Bb);if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p><input name="name" value="',h($a["name"]),'">
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="',lang(128),'">
';if($Bb!=""){echo"<input type='submit' name='drop' value='".lang(71)."'$ab>\n";}echo'</form>
';}elseif(isset($_GET["type"])){$Rc=$_GET["type"];if($_POST&&!$n){$w=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP TYPE ".idf_escape($Rc),$w,lang(194));}else{query_redirect("CREATE TYPE ".idf_escape($_POST["name"])." $_POST[as]",$w,lang(195));}}page_header($Rc!=""?lang(196).": ".h($Rc):lang(197),$n);$a["as"]="AS ";if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p>
<input type="hidden" name="token" value="',$P,'">
';if($Rc!=""){echo"<input type='submit' name='drop' value='".lang(71)."'$ab>\n";}else{echo"<input name='name' value='".h($a['name'])."'>\n";textarea("as",$a["as"]);echo"<p><input type='submit' value='".lang(128)."'>\n";}echo'</form>
';}elseif(isset($_GET["trigger"])){$m=$_GET["trigger"];$Dc=trigger_options();$ge=array("INSERT","UPDATE","DELETE");$Ua=false;if($_POST&&!$n&&in_array($_POST["Timing"],$Dc["Timing"])&&in_array($_POST["Event"],$ge)&&in_array($_POST["Type"],$Dc["Type"])){$Nd=" $_POST[Timing] $_POST[Event]";$Ab=" ON ".table($m);$Ua=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($A=="pgsql"?$Ab:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($A=="mssql"?$Ab.$Nd:$Nd.$Ab)." $_POST[Type]\n$_POST[Statement]",ME."table=".urlencode($m),lang(198),lang(199),lang(200),$_GET["name"]);}page_header(($_GET["name"]!=""?lang(201).": ".h($_GET["name"]):lang(202)),$n,array("table"=>$m));$a=array("Trigger"=>$m."_bi");if($_POST){$a=$_POST;}elseif($_GET["name"]!=""){$a=trigger($_GET["name"]);}echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(203),'<td>',html_select("Timing",$Dc["Timing"],$a["Timing"],"if (/^".h(preg_quote($m,"/"))."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".h(addcslashes($m,"\r\n'\\"))."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>',lang(204),'<td>',html_select("Event",$ge,$a["Event"],"this.form['Timing'].onchange();"),'<tr><th>',lang(79),'<td>',html_select("Type",$Dc["Type"],$a["Type"]),'</table>
<p>';textarea("Statement",$a["Statement"]);echo'<p>
<input type="hidden" name="token" value="',$P,'">
';if($Ua){echo'<input type="hidden" name="dropped" value="1">';}echo
lang(171),': <input name="Trigger" value="',h($a["Trigger"]),'" maxlength="64">
<input type="submit" value="',lang(128),'">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="',lang(71),'"',$ab,'>';}echo'</form>
';}elseif(isset($_GET["user"])){$td=$_GET["user"];$la=array(""=>array("All privileges"=>""));$g=$c->query("SHOW PRIVILEGES");while($a=$g->fetch_assoc()){foreach(explode(",",($a["Privilege"]=="Grant option"?"":$a["Context"]))as$Sc){$la[$Sc][$a["Privilege"]]=$a["Comment"];}}$la["Server Admin"]+=$la["File access on server"];$la["Databases"]["Create routine"]=$la["Procedures"]["Create routine"];unset($la["Procedures"]["Create routine"]);$la["Columns"]=array();foreach(array("Select","Insert","Update","References")as$b){$la["Columns"][$b]=$la["Tables"][$b];}unset($la["Server Admin"]["Usage"]);foreach($la["Tables"]as$e=>$b){unset($la["Databases"][$e]);}$vc=array();if($_POST){foreach($_POST["objects"]as$e=>$b){$vc[$b]=(array)$vc[$b]+(array)$_POST["grants"][$e];}}$cb=array();$Fc="";if(isset($_GET["host"])&&($g=$c->query("SHOW GRANTS FOR ".$c->quote($td)."@".$c->quote($_GET["host"])))){while($a=$g->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$a[0],$k)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$k[1],$ja,PREG_SET_ORDER)){foreach($ja
as$b){if($b[1]!="USAGE"){$cb["$k[2]$b[2]"][$b[1]]=true;}if(ereg(' WITH GRANT OPTION',$a[0])){$cb["$k[2]$b[2]"]["GRANT OPTION"]=true;}}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$a[0],$k)){$Fc=$k[1];}}}if($_POST&&!$n){$Xb=(isset($_GET["host"])?$c->quote($td)."@".$c->quote($_GET["host"]):"''");$db=$c->quote($_POST["user"])."@".$c->quote($_POST["host"]);$Cd=$c->quote($_POST["pass"]);if($_POST["drop"]){query_redirect("DROP USER $Xb",ME."privileges=",lang(205));}else{if($Xb!=$db){$n=!queries(($c->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $db IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $Cd");}elseif($_POST["pass"]!=$Fc||!$_POST["hashed"]){queries("SET PASSWORD FOR $db = ".($_POST["hashed"]?$Cd:"PASSWORD($Cd)"));}if(!$n){$hc=array();foreach($vc
as$Xa=>$ea){if(isset($_GET["grant"])){$ea=array_filter($ea);}$ea=array_keys($ea);if(isset($_GET["grant"])){$hc=array_diff(array_keys(array_filter($vc[$Xa],'strlen')),$ea);}elseif($Xb==$db){$he=array_keys((array)$cb[$Xa]);$hc=array_diff($he,$ea);$ea=array_diff($ea,$he);unset($cb[$Xa]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Xa,$k)&&(!grant("REVOKE",$hc,$k[2]," ON $k[1] FROM $db")||!grant("GRANT",$ea,$k[2]," ON $k[1] TO $db"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($Xb!=$db){queries("DROP USER $Xb");}elseif(!isset($_GET["grant"])){foreach($cb
as$Xa=>$hc){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Xa,$k)){grant("REVOKE",array_keys($hc),$k[2]," ON $k[1] FROM $db");}}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(206):lang(207)),!$n);if($Xb!=$db){$c->query("DROP USER $db");}}}page_header((isset($_GET["host"])?lang(18).": ".h("$td@$_GET[host]"):lang(109)),$n,array("privileges"=>array('',lang(63))));if($_POST){$a=$_POST;$cb=$vc;}else{$a=$_GET+array("host"=>$c->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$a["pass"]=$Fc;if($Fc!=""){$a["hashed"]=true;}$cb[""]=true;}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(18),'<td><input name="user" maxlength="16" value="',h($a["user"]),'">
<tr><th>',lang(17),'<td><input name="host" maxlength="60" value="',h($a["host"]),'">
<tr><th>',lang(19),'<td><input id="pass" name="pass" value="',h($a["pass"]),'">
';if(!$a["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$a["hashed"],lang(208),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($c->server_info,0,3)."/en/grant.html'>".lang(63)."</a>";$l=0;foreach($cb
as$Xa=>$ea){echo'<th>'.($Xa!="*.*"?"<input name='objects[$l]' value='".h($Xa)."' size='10'>":"<input type='hidden' name='objects[$l]' value='*.*' size='10'>*.*");$l++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(17),"Databases"=>lang(58),"Tables"=>lang(90),"Columns"=>lang(91),"Procedures"=>lang(209),)as$Sc=>$jc){foreach((array)$la[$Sc]as$mc=>$Oa){echo"<tr".odd()."><td".($jc?">$jc<td":" colspan='2'").' lang="en" title="'.h($Oa).'">'.h($mc);$l=0;foreach($cb
as$Xa=>$ea){$h="'grants[$l][".h(strtoupper($mc))."]'";$p=$ea[strtoupper($mc)];if($Sc=="Server Admin"&&$Xa!=(isset($cb["*.*"])?"*.*":"")){echo"<td>&nbsp;";}elseif(isset($_GET["grant"])){echo"<td><select name=$h><option><option value='1'".($p?" selected":"").">".lang(210)."<option value='0'".($p=="0"?" selected":"").">".lang(211)."</select>";}else{echo"<td align='center'><input type='checkbox' name=$h value='1'".($p?" checked":"").($mc=="All privileges"?" id='grants-$l-all'":($mc=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$l-all');\"")).">";}$l++;}}}echo"</table>\n",'<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="',lang(128),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(71),'"',$ab,'>';}echo'</form>
';}elseif(isset($_GET["processlist"])){if($_POST&&!$n){$Ed=0;foreach((array)$_POST["kill"]as$b){if(queries("KILL ".ereg_replace("[^0-9]+","",$b))){$Ed++;}}queries_redirect(ME."processlist=",lang(212,$Ed),$Ed||!$_POST["kill"]);}page_header(lang(64),$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" class="nowrap">
';$g=$c->query("SHOW FULL PROCESSLIST");for($l=0;$a=$g->fetch_assoc();$l++){if(!$l){echo"<thead><tr lang='en'><th>&nbsp;<th>".implode("<th>",array_keys($a))."</thead>\n";}echo"<tr".odd()."><td>".checkbox("kill[]",$a["Id"],0)."<td>".implode("<td>",array_map('nbsp',$a))."\n";}echo'</table>
<p>
<input type="hidden" name="token" value="',$P,'">
<input type="submit" value="',lang(213),'">
</form>
';}elseif(isset($_GET["select"])){$m=$_GET["select"];$D=table_status($m);$I=indexes($m);$o=fields($m,1);$da=column_foreign_keys($m);$ae=array();$z=array();$yb=null;foreach($o
as$e=>$d){$h=$q->fieldName($d);if(isset($d["privileges"]["select"])&&$h!=""){$z[$e]=html_entity_decode(strip_tags($h));if(ereg('text|lob',$d["type"])){$yb=$q->selectLengthProcess();}}$ae+=$d["privileges"];}list($C,$Ka)=$q->selectColumnsProcess($z,$I);$t=$q->selectSearchProcess($o,$I);$vb=$q->selectOrderProcess($o,$I);$K=$q->selectLimitProcess();$Yb=($C?implode(", ",$C):"*")."\nFROM ".table($m);$sd=($Ka&&count($Ka)<count($C)?"\nGROUP BY ".implode(", ",$Ka):"").($vb?"\nORDER BY ".implode(", ",$vb):"");if($_POST&&!$n){$Zd="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Nb=($I["PRIMARY"]?($C?array_flip($I["PRIMARY"]["columns"]):array()):null);foreach($C
as$e=>$b){$b=$_GET["columns"][$e];if(!$b["fun"]){unset($Nb[$b["col"]]);}}if($_POST["export"]){dump_headers($m);dump_table($m,"");if($_POST["format"]!="sql"){$a=array_keys($o);if($C){$a=array();foreach($C
as$b){$a[]=(ereg('^`.*`$',$b)?idf_unescape($b):$b);}}dump_csv($a);}if(!is_array($_POST["check"])||$Nb===array()){$ed=$t;if(is_array($_POST["check"])){$ed[]="($Zd)";}dump_data($m,"INSERT","SELECT $Yb".($ed?"\nWHERE ".implode(" AND ",$ed):"").$sd);}else{$Sd=array();foreach($_POST["check"]as$b){$Sd[]="(SELECT".limit($Yb,"\nWHERE ".($t?implode(" AND ",$t)." AND ":"").where_check($b).$sd,1).")";}dump_data($m,"INSERT",implode(" UNION ALL ",$Sd));}exit;}if(!$q->selectEmailProcess($t,$da)){if($_POST["save"]||$_POST["delete"]){$g=true;$ub=0;$j=table($m);$s=array();if(!$_POST["delete"]){foreach($z
as$h=>$b){$b=process_input($o[$h]);if($b!==null){if($_POST["clone"]){$s[idf_escape($h)]=($b!==false?$b:idf_escape($h));}elseif($b!==false){$s[]=idf_escape($h)." = $b";}}}$j.=($_POST["clone"]?" (".implode(", ",array_keys($s)).")\nSELECT ".implode(", ",$s)."\nFROM ".table($m):" SET\n".implode(",\n",$s));}if($_POST["delete"]||$s){$Uc="UPDATE";if($_POST["delete"]){$Uc="DELETE";$j="FROM $j";}if($_POST["clone"]){$Uc="INSERT";$j="INTO $j";}if($_POST["all"]||($Nb===array()&&$_POST["check"])||count($Ka)<count($C)){$g=queries($Uc." $j".($_POST["all"]?($t?"\nWHERE ".implode(" AND ",$t):""):"\nWHERE $Zd"));$ub=$c->affected_rows;}else{foreach((array)$_POST["check"]as$b){$g=queries($Uc.limit1($j,"\nWHERE ".where_check($b)));if(!$g){break;}$ub+=$c->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(214,$ub),$g);}elseif(!$_POST["import"]){if(!$_POST["val"]){$n=lang(215);}else{$g=true;$ub=0;foreach($_POST["val"]as$nb=>$a){$s=array();foreach($a
as$e=>$b){$e=bracket_escape($e,1);$s[]=idf_escape($e)." = ".$q->processInput($o[$e],$b);}$g=queries("UPDATE".limit1(table($m)." SET ".implode(", ",$s)," WHERE ".where_check($nb).($t?" AND ".implode(" AND ",$t):"")));if(!$g){break;}$ub+=$c->affected_rows;}queries_redirect(remove_from_uri(),lang(214,$ub),$g);}}elseif(is_string($qa=get_file("csv_file",true))){$qa=preg_replace("~^\xEF\xBB\xBF~",'',$qa);$g=true;$mb=array_keys($o);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$qa,$ja);$ub=count($ja[0]);begin();$Na=($_POST["separator"]=="csv"?",":";");foreach($ja[0]as$e=>$b){preg_match_all("~((\"[^\"]*\")+|[^$Na]*)$Na~",$b.$Na,$kd);if(!$e&&!array_diff($kd[1],$mb)){$mb=$kd[1];$ub--;}else{$s=array();foreach($kd[1]as$l=>$Bc){$s[idf_escape($mb[$l])]=($Bc==""&&$o[$mb[$l]]["null"]?"NULL":$c->quote(str_replace('""','"',preg_replace('~^"|"$~','',$Bc))));}$g=insert_update($m,$s);if(!$g){break;}}}if($g){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(216,$ub),$g);queries("ROLLBACK");}else{$n=upload_error($qa);}}}$_a=$q->tableName($D);page_header(lang(30).": $_a",$n);session_write_close();$s=null;if(isset($ae["insert"])){$s="";foreach((array)$_GET["where"]as$b){if(count($da[$b["col"]])==1&&($b["op"]=="="||(!$b["op"]&&!ereg('[_%]',$b["val"])))){$s.="&set".urlencode("[".bracket_escape($b["col"])."]")."=".urlencode($b["val"]);}}}$q->selectLinks($D,$s);if(!$z){echo"<p class='error'>".lang(217).($o?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($m).'">',"</div>\n";$q->selectColumnsPrint($C,$z);$q->selectSearchPrint($t,$z,$I);$q->selectOrderPrint($vb,$z,$I);$q->selectLimitPrint($K);$q->selectLengthPrint($yb);$q->selectActionPrint($yb);echo"</form>\n";$aa=$_GET["page"];if($aa=="last"){$Sa=$c->result("SELECT COUNT(*) FROM ".table($m).($t?" WHERE ".implode(" AND ",$t):""));$aa=floor(($Sa-1)/$K);}$j="SELECT".limit((intval($K)&&$Ka&&count($Ka)<count($C)&&$A=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Yb,($t?"\nWHERE ".implode(" AND ",$t):"").$sd,($K!=""?intval($K):null),($aa?$K*$aa:0),"\n");echo$q->selectQuery($j);$g=$c->query($j);if(!$g){echo"<p class='error'>".error()."\n";}else{if($A=="mssql"){$g->seek($K*$aa);}$Ec=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$xa=array();while($a=$g->fetch_assoc()){$xa[]=$a;}if($_GET["page"]!="last"){$Sa=(intval($K)&&$Ka&&count($Ka)<count($C)?($A=="sql"?$c->result(" SELECT FOUND_ROWS()"):$c->result("SELECT COUNT(*) FROM ($j) x")):count($xa));}if(!$xa){echo"<p class='message'>".lang(73)."\n";}else{$Qd=$q->backwardKeys($m,$_a);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n","<thead><tr><td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(108)."</a>";$Bd=array();$X=array();reset($C);$vb=1;foreach($xa[0]as$e=>$b){$b=$_GET["columns"][key($C)];$d=$o[$C?$b["col"]:$e];$h=($d?$q->fieldName($d,$vb):"*");if($h!=""){$vb++;$Bd[$e]=$h;echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($e).($_GET["order"][0]==$e&&!$_GET["desc"][0]?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($b["fun"],$h)."</a>";}$X[$e]=$b["fun"];next($C);}$Vb=array();if($_GET["modify"]){foreach($xa
as$a){foreach($a
as$e=>$b){$Vb[$e]=max($Vb[$e],min(40,strlen(utf8_decode($b))));}}}echo($Qd?"<th>".lang(218):"")."</thead>\n";foreach($q->rowDescriptions($xa,$da)as$ba=>$a){$Ad=unique_array($xa[$ba],$I);$nb="";foreach($Ad
as$e=>$b){$nb.="&".(isset($b)?urlencode("where[".bracket_escape($e)."]")."=".urlencode($b):"null%5B%5D=".urlencode($e));}echo"<tr".odd()."><td>".checkbox("check[]",substr($nb,1),in_array(substr($nb,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($C)!=count($Ka)||information_schema(DB)?'':" <a href='".h(ME."edit=".urlencode($m).$nb)."'>".lang(108)."</a>");foreach($a
as$e=>$b){if(isset($Bd[$e])){$d=$o[$e];if($b!=""&&(!isset($Ec[$e])||$Ec[$e]!="")){$Ec[$e]=(is_email($b)?$Bd[$e]:"");}$w="";$b=$q->editVal($b,$d);if(!isset($b)){$b="<i>NULL</i>";}else{if(ereg('binary|blob|bytea|raw|file',$d["type"])&&$b!=""){$w=h(ME.'download='.urlencode($m).'&field='.urlencode($e).$nb);}if($b==""){$b="&nbsp;";}elseif($yb!=""&&ereg('text|blob',$d["type"])&&is_utf8($b)){$b=shorten_utf8($b,max(0,intval($yb)));}else{$b=h($b);}if(!$w){foreach((array)$da[$e]as$_){if(count($da[$e])==1||count($_["source"])==1){foreach($_["source"]as$l=>$Da){$w.=where_link($l,$_["target"][$l],$xa[$ba][$Da]);}$w=h(($_["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($_["db"]),ME):ME).'select='.urlencode($_["table"]).$w);break;}}}if($e=="COUNT(*)"){$w=h(ME."select=".urlencode($m));$l=0;foreach((array)$_GET["where"]as$v){if(!array_key_exists($v["col"],$Ad)){$w.=h(where_link($l++,$v["col"],$v["val"],$v["op"]));}}foreach($Ad
as$Ha=>$v){$w.=h(where_link($l++,$Ha,$v,(isset($v)?"=":"IS NULL")));}}}if(!$w){if(is_email($b)){$w="mailto:$b";}if($nc=is_url($a[$e])){$w=($nc=="http"&&$dc?$a[$e]:"$nc://www.adminer.org/redirect/?url=".urlencode($a[$e]));}}$T=h("val[$nb][".bracket_escape($e)."]");$p=$_POST["val"][$nb][bracket_escape($e)];$Od=h(isset($p)?$p:$a[$e]);$Pd=strpos($b,"<i>...</i>");$Td=is_utf8($b)&&!$Pd&&$xa[$ba][$e]==$a[$e]&&!$X[$e];$Ud=ereg('text|lob',$d["type"]);echo(($_GET["modify"]&&$Td)||isset($p)?"<td>".($Ud?"<textarea name='$T' cols='30' rows='".(substr_count($a[$e],"\n")+1)."'>$Od</textarea>":"<input name='$T' value='$Od' size='$Vb[$e]'>"):"<td id='$T' ondblclick=\"".($Td?"selectDblClick(this, event".($Ud?", 1":"").")":"alert('".h($Pd?lang(219):lang(220))."')").";\">".$q->selectVal($b,$w,$d));}}$q->backwardKeysPrint($Qd,$xa[$ba]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$zd);if($xa||$aa){$vd=true;if($_GET["page"]!="last"&&intval($K)&&count($Ka)>=count($C)&&($Sa>=$K||$aa)){$Sa=$D["Rows"];if(!isset($Sa)||$t||2*$aa*$K>$Sa||($D["Engine"]=="InnoDB"&&$Sa<1e4)){ob_flush();flush();$Sa=$c->result("SELECT COUNT(*) FROM ".table($m).($t?" WHERE ".implode(" AND ",$t):""));}else{$vd=false;}}echo"<p class='pages'>";if(intval($K)&&$Sa>$K){$Dd=floor(($Sa-1)/$K);echo
lang(221).":".pagination(0,$aa).($aa>5?" ...":"");for($l=max(1,$aa-4);$l<min($Dd,$aa+5);$l++){echo
pagination($l,$aa);}echo($aa+5<$Dd?" ...":"").($vd?pagination($Dd,$aa):' <a href="'.h(remove_from_uri()."&page=last").'">'.lang(27)."</a>");}echo" (".($vd?"":"~ ").lang(112,$Sa).") ".checkbox("all",1,0,lang(222))."\n";if(!information_schema(DB)){echo'<fieldset><legend>',lang(28),'</legend><div>
<input type="submit" value="',lang(128),'" title="',lang(215),'">
<input type="submit" name="edit" value="',lang(28),'">
<input type="submit" name="clone" value="',lang(223),'">
<input type="submit" name="delete" value="',lang(131),'" onclick="return confirm(\'',lang(72);?> (' + (this.form['all'].checked ? <?php echo$Sa,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",lang(102));echo$q->dumpOutput(1,$zd["output"])." ".$q->dumpFormat(1,$zd["format"]);echo" <input type='submit' name='export' value='".lang(102)."'>\n","</div></fieldset>\n";}print_fieldset("import",lang(224),!$g->num_rows);echo"<input type='hidden' name='token' value='$P'><input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;"),$zd["format"],1);echo" <input type='submit' name='import' value='".lang(225)."'>\n","</div></fieldset>\n";$q->selectEmailPrint(array_filter($Ec,'strlen'),$z);echo"</form>\n";}}}elseif(isset($_GET["variables"])){$Sb=isset($_GET["status"]);page_header($Sb?lang(66):lang(65));$Yd=($Sb?show_status():show_variables());if(!$Yd){echo"<p class='message'>".lang(73)."\n";}else{echo"<table cellspacing='0'>\n";foreach($Yd
as$e=>$b){echo"<tr>","<th><code class='jush-".$A.($Sb?"status":"set")."'>".h($e)."</code>","<td>".nbsp($b);}echo"</table>\n";}}else{$Xd=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Xd&&!$n&&!$_POST["search"]){$g=true;$va="";if($A=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"])){queries("SET foreign_key_checks = 0");}if($_POST["truncate"]){if($_POST["tables"]){$g=truncate_tables($_POST["tables"]);}$va=lang(226);}elseif($_POST["move"]){$g=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$va=lang(227);}elseif($_POST["drop"]){if($_POST["views"]){$g=drop_views($_POST["views"]);}if($g&&$_POST["tables"]){$g=drop_tables($_POST["tables"]);}$va=lang(228);}elseif($_POST["tables"]&&($g=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($a=$g->fetch_assoc()){$va.="<b>".h($a["Table"])."</b>: ".h($a["Msg_text"])."<br>";}}queries_redirect(substr(ME,0,-1),$va,$g);}page_header(($_GET["ns"]==""?lang(58).": ".h(DB):lang(229).": ".h($_GET["ns"])),$n,true);echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.lang(150)."</a>\n":"");if(support("scheme")){echo"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(155):lang(156))."</a>\n";}if($_GET["ns"]!==""){echo'<a href="'.h(ME).'schema=">'.lang(101)."</a>\n";$Ac=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);echo"<h3>".lang(230)."</h3>\n";$od=tables_list();if(!$od){echo"<p class='message'>".lang(4)."\n";}else{echo"<form action='' method='post'>\n","<p>".lang(231).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".lang(33)."'>\n";if($_POST["search"]&&$_POST["query"]!=""){$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);"><th>'.lang(90).'<td>'.lang(232).'<td>'.lang(69).'<td>'.lang(233).'<td>'.lang(234).'<td>'.lang(235).'<td>'.lang(82).'<td>'.lang(236).(support("comment")?'<td>'.lang(84):'')."</thead>\n";foreach($od
as$h=>$x){$Cc=(isset($x)&&!eregi("table",$x));echo'<tr'.odd().'><td>'.checkbox(($Cc?"views[]":"tables[]"),$h,in_array($h,$Xd,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($h).'">'.h($h).'</a>';if($Cc){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($h).'">'.lang(89).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($h).'">?</a>';}else{echo"<td id='Engine-".h($h)."'>&nbsp;<td id='Collation-".h($h)."'>&nbsp;";foreach(array("Data_length"=>"create","Index_length"=>"indexes","Data_free"=>"edit","Auto_increment"=>"auto_increment=1&create","Rows"=>"select")as$e=>$w){echo"<td align='right'><a href='".h(ME."$w=").urlencode($h)."' id='$e-".h($h)."'>?</a>";}}echo(support("comment")?"<td id='Comment-".h($h)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(237,count($od)),"<td>".$c->result("SELECT @@storage_engine"),"<td>".db_collation(DB,collations());foreach($Ac
as$e=>$b){echo"<td align='right' id='sum-$e'>&nbsp;";}echo"</table>\n";if(!information_schema(DB)){echo"<p><input type='hidden' name='token' value='$P'>".($A=="sql"?"<input type='submit' value='".lang(238)."'> <input type='submit' name='optimize' value='".lang(239)."'> <input type='submit' name='check' value='".lang(240)."'> <input type='submit' name='repair' value='".lang(241)."'> ":"")."<input type='submit' name='truncate' value='".lang(242)."' onclick=\"return confirm('".lang(72)." (' + formChecked(this, /tables/) + ')');\"> <input type='submit' name='drop' value='".lang(71)."' onclick=\"return confirm('".lang(72)." (' + formChecked(this, /tables|views/) + ')');\">\n";$Wb=(support("scheme")?schemas():get_databases());if(count($Wb)!=1&&$A!="sqlite"){$r=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(243).($Wb?": ".html_select("target",$Wb,$r):': <input name="target" value="'.h($r).'">')." <input type='submit' name='move' value='".lang(244)."'>\n";}}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.lang(135)."</a>\n";if(support("view")){echo'<a href="'.h(ME).'view=">'.lang(170)."</a>\n";}if(support("routine")){echo"<h3>".lang(105)."</h3>\n";$Wd=routines();if($Wd){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(171).'<td>'.lang(79).'<td>'.lang(188)."<td>&nbsp;</thead>\n";odd('');foreach($Wd
as$a){echo'<tr'.odd().'>','<th><a href="'.h(ME).($a["ROUTINE_TYPE"]=="FUNCTION"?'callf=':'call=').urlencode($a["ROUTINE_NAME"]).'">'.h($a["ROUTINE_NAME"]).'</a>','<td>'.h($a["ROUTINE_TYPE"]),'<td>'.h($a["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($a["ROUTINE_TYPE"]=="FUNCTION"?'function=':'procedure=').urlencode($a["ROUTINE_NAME"]).'">'.lang(97)."</a>";}echo"</table>\n";}echo'<p><a href="'.h(ME).'procedure=">'.lang(187).'</a> <a href="'.h(ME).'function=">'.lang(186)."</a>\n";}if(support("sequence")){echo"<h3>".lang(245)."</h3>\n";$Vd=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($Vd){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(171)."</thead>\n";odd('');foreach($Vd
as$b){echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."sequence='>".lang(193)."</a>\n";}if(support("type")){echo"<h3>".lang(8)."</h3>\n";$S=types();if($S){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(171)."</thead>\n";odd('');foreach($S
as$b){echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."type='>".lang(197)."</a>\n";}if(support("event")){echo"<h3>".lang(106)."</h3>\n";$g=$c->query("SHOW EVENTS");if($g&&$g->num_rows){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(171)."<td>".lang(246)."<td>".lang(177)."<td>".lang(178)."</thead>\n";while($a=$g->fetch_assoc()){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($a["Name"]).'">'.h($a["Name"])."</a>","<td>".($a["Execute at"]?lang(247)."<td>".$a["Execute at"]:lang(179)." ".$a["Interval value"]." ".$a["Interval field"]."<td>$a[Starts]"),"<td>$a[Ends]";}echo"</table>\n";}echo'<p><a href="'.h(ME).'event=">'.lang(176)."</a>\n";}page_footer();$D=table_status();if($D){echo"<script type='text/javascript'>\n";foreach($D
as$a){$T=addcslashes($a["Name"],"\\'/");echo"setHtml('Comment-$T', '".nbsp($a["Comment"])."');\n";if(!is_view($a)){foreach(array("Engine","Collation")as$e){echo"setHtml('$e-$T', '".nbsp($a[$e])."');\n";}foreach($Ac+array("Auto_increment"=>0,"Rows"=>0)as$e=>$b){if($a[$e]!=""){$b=number_format($a[$e],0,'.',lang(248));echo"setHtml('$e-$T', '".($e=="Rows"&&$a["Engine"]=="InnoDB"&&$b?"~ $b":$b)."');\n";if(isset($Ac[$e])){$Ac[$e]+=($a["Engine"]!="InnoDB"||$e!="Data_free"?$a[$e]:0);}}elseif(array_key_exists($e,$a)){echo"setHtml('$e-$T');\n";}}}}foreach($Ac
as$e=>$b){echo"setHtml('sum-$e', '".number_format($b,0,'.',lang(248))."');\n";}echo"</script>\n";}exit;}}page_footer();