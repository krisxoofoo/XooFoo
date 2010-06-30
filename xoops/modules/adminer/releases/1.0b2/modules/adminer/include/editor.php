<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://php.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
*/error_reporting(6135);$_c=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($_c){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$b){$kd=filter_input_array(constant("INPUT$b"),FILTER_UNSAFE_RAW);if($kd){$$b=$kd;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
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
bodyLoad(version){}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;}}exit;}function
connection(){global$a;return$a;}function
idf_unescape($z){$nc=substr($z,-1);return
str_replace($nc.$nc,$nc,substr($z,1,-1));}function
escape_string($b){global$a;return
substr($a->quote($b),1,-1);}function
bracket_escape($z,$md=false){static$Nc=array(':'=>':1',']'=>':2','['=>':3');return
strtr($z,($md?array_flip($Nc):$Nc));}function
h($x){return
htmlspecialchars($x,ENT_QUOTES);}function
nbsp($x){return(trim($x)!=""?h($x):"&nbsp;");}function
nl_br($x){return
str_replace("\n","<br>",$x);}function
checkbox($g,$l,$yb,$Mc="",$Oc=""){static$X=0;$X++;$d="<input type='checkbox'".($g?" name='$g' value='".h($l)."'":"").($yb?" checked":"").($Oc?" onclick=\"$Oc\"":"")." id='checkbox-$X'>";return($Mc!=""?"<label for='checkbox-$X'>$d".h($Mc)."</label>":$d);}function
optionlist($Aa,$Md=null,$Qc=false){$d="";foreach($Aa
as$la=>$p){if(is_array($p)){$d.='<optgroup label="'.h($la).'">';}foreach((is_array($p)?$p:array($la=>$p))as$f=>$b){$d.='<option'.($Qc||is_string($f)?' value="'.h($f).'"':'').(($Qc||is_string($f)?(string)$f:$b)===$Md?' selected':'').'>'.h($b);}if(is_array($p)){$d.='</optgroup>';}}return$d;}function
html_select($g,$Aa,$l="",$Xa=true){if($Xa){return"<select name='".h($g)."'".(is_string($Xa)?" onchange=\"$Xa\"":"").">".optionlist($Aa,$l)."</select>";}$d="";foreach($Aa
as$f=>$b){$d.="<label><input type='radio' name='".h($g)."' value='".h($f)."'".($f==$l?" checked":"").">".h($b)."</label>";}return$d;}function
textarea($g,$l,$O=10,$Ia=80){echo"<textarea name='$g' rows='$O' cols='$Ia' style='width: 98%;' spellcheck='false'>".h($l)."</textarea>";}function
ini_bool($Ld){$b=ini_get($Ld);return(eregi('^(on|true|yes)$',$b)||(int)$b);}function
get_vals($j,$w=0){global$a;$d=array();$e=$a->query($j);if(is_object($e)){while($c=$e->fetch_row()){$d[]=$c[$w];}}return$d;}function
get_key_vals($j,$P=null){global$a;if(!is_object($P)){$P=$a;}$d=array();$e=$P->query($j);while($c=$e->fetch_row()){$d[$c[0]]=$c[1];}return$d;}function
unique_array($c,$R){foreach($R
as$_a){if(ereg("PRIMARY|UNIQUE",$_a["type"])){$d=array();foreach($_a["columns"]as$f){if(!isset($c[$f])){continue
2;}$d[$f]=$c[$f];}return$d;}}$d=array();foreach($c
as$f=>$b){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$f)){$d[$f]=$b;}}return$d;}function
where($m){$d=array();foreach((array)$m["where"]as$f=>$b){$d[]=idf_escape(bracket_escape($f,1)).(ereg('\\.',$b)?" LIKE ".exact_value(addcslashes($b,"%_")):" = ".exact_value($b));}foreach((array)$m["null"]as$f){$d[]=idf_escape($f)." IS NULL";}return
implode(" AND ",$d);}function
where_check($b){parse_str($b,$Sd);return
where($Sd);}function
where_link($q,$w,$l,$Jd="="){return"&where%5B$q%5D%5Bcol%5D=".urlencode($w)."&where%5B$q%5D%5Bop%5D=".urlencode($Jd)."&where%5B$q%5D%5Bval%5D=".urlencode($l);}function
cookie($g,$l){global$hb;$rb=array($g,(ereg("\n",$l)?"":$l),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$hb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$rb[]=true;}return
call_user_func_array('setcookie',$rb);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($f){return$_SESSION[$f][DRIVER][SERVER][$_GET["username"]];}function
set_session($f,$b){$_SESSION[$f][DRIVER][SERVER][$_GET["username"]]=$b;}function
auth_url($Fb,$_,$D){global$na;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($na))."|username|".session_name()),$k);return"$k[1]?".(SID&&!$_COOKIE?SID."&":"").($Fb!="server"||$_!=""?urlencode($Fb)."=".urlencode($_)."&":"")."username=".urlencode($D).($k[2]?"&$k[2]":"");}function
redirect($ga,$ma=null){if(isset($ma)){restart_session();$_SESSION["messages"][]=$ma;}if(isset($ga)){header("Location: ".($ga!=""?$ga:"."));exit;}}function
query_redirect($j,$ga,$ma,$Kb=true,$Kd=true,$Xc=false){global$a,$r,$n;if($Kd){$Xc=!$a->query($j);}$Zb="";if($j){$Zb=$n->messageQuery($j);}if($Xc){$r=error().$Zb;return
false;}if($Kb){redirect($ga,$ma.$Zb);}return
true;}function
queries($j=null){global$a;static$Ca=array();if(!isset($j)){return
implode(";\n",$Ca);}$Ca[]=$j;return$a->query($j);}function
apply_queries($j,$A,$od='table'){foreach($A
as$i){if(!queries("$j ".$od($i))){return
false;}}return
true;}function
queries_redirect($ga,$ma,$Kb){return
query_redirect(queries(),$ga,$ma,$Kb,false,!$Kb);}function
remove_from_uri($wa=""){return
substr(preg_replace("~(?<=[?&])($wa".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($L,$Fd){return" ".($L==$Fd?$L+1:'<a href="'.h(remove_from_uri("page").($L?"&page=$L":"")).'">'.($L+1)."</a>");}function
get_file($f,$Wc=false){$Y=$_FILES[$f];if(!$Y||$Y["error"]){return$Y["error"];}return
file_get_contents($Wc&&ereg('\\.gz$',$Y["name"])?"compress.zlib://$Y[tmp_name]":($Wc&&ereg('\\.bz2$',$Y["name"])?"compress.bzip2://$Y[tmp_name]":$Y["tmp_name"]));}function
upload_error($r){$Ec=($r==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($r?lang(0).($Ec?" ".lang(1,$Ec):""):lang(2));}function
odd($d=' class="odd"'){static$q=0;if(!$d){$q=-1;}return($q++%
2?$d:'');}function
is_utf8($b){return(preg_match('~~u',$b)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$b));}function
shorten_utf8($x,$ra=80,$Nd=""){if(!preg_match("(^([\t\r\n -\x{FFFF}]{0,$ra})($)?)u",$x,$k)){preg_match("(^([\t\r\n -~]{0,$ra})($)?)",$x,$k);}return
h($k[1]).$Nd.(isset($k[2])?"":"<i>...</i>");}function
friendly_url($b){return
preg_replace('~[^a-z0-9_]~i','-',$b);}function
hidden_fields($Da,$vd=array()){while(list($f,$b)=each($Da)){if(is_array($b)){foreach($b
as$la=>$p){$Da[$f."[$la]"]=$p;}}elseif(!in_array($f,$vd)){echo'<input type="hidden" name="'.h($f).'" value="'.h($b).'">';}}}function
hidden_fields_get(){echo(SID&&!$_COOKIE?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($i){$d=array();foreach(foreign_keys($i)as$J){foreach($J["source"]as$b){$d[$b][]=$J;}}return$d;}function
enum_input($C,$g,$h,$l){preg_match_all("~'((?:[^']|'')*)'~",$h["length"],$Z);foreach($Z[1]as$q=>$b){$b=stripcslashes(str_replace("''","'",$b));$yb=(is_int($l)?$l==$q+1:(is_array($l)?in_array($q+1,$l):$l===$b));echo" <label><input type='$C' name='$g' value='".($q+1)."'".($yb?' checked':'').'>'.h($b).'</label>';}}function
input($h,$l,$N){global$U,$n,$Ha;$g=h(bracket_escape($h["field"]));echo"<td class='function'>";$ba=(isset($_GET["select"])?array("orig"=>lang(3)):array())+$n->editFunctions($h);if($h["type"]=="enum"){echo
nbsp($ba[""])."<td>".($ba["orig"]?"<label><input type='radio' name='fields[$g]' value='-1' checked><i>$ba[orig]</i></label> ":""),$n->editInput($_GET["edit"],$h," name='fields[$g]'",$l);enum_input("radio","fields[$g]",$h,$l);}else{$Va=0;foreach($ba
as$f=>$b){if($f===""||!$b){break;}$Va++;}$Xa=($Va?" onchange=\"var f = this.form['function[".addcslashes($g,"\r\n'\\")."]']; if ($Va > f.selectedIndex) f.selectedIndex = $Va;\"":"");$Na=" name='fields[$g]'$Xa";echo(count($ba)>1?html_select("function[$g]",$ba,!isset($N)||in_array($N,$ba)?$N:""):nbsp(reset($ba))).'<td>';$Yc=$n->editInput($_GET["edit"],$h,$Na,$l);if($Yc!=""){echo$Yc;}elseif($h["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$h["length"],$Z);foreach($Z[1]as$q=>$b){$b=stripcslashes(str_replace("''","'",$b));$yb=(is_int($l)?($l>>$q)&1:in_array($b,explode(",",$l),true));echo" <label><input type='checkbox' name='fields[$g][$q]' value='".(1<<$q)."'".($yb?' checked':'')."$Xa>".h($b).'</label>';}}elseif(ereg('binary|blob|bytea|raw|file',$h["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$g'$Xa>";}elseif(ereg('text|lob',$h["type"])){echo"<textarea ".($Ha!="sqlite"||ereg("\n",$l)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$Na>".h($l).'</textarea>';}else{$dd=(!ereg('int',$h["type"])&&preg_match('~^([0-9]+)(,([0-9]+))?$~',$h["length"],$k)?($k[1]+($k[3]?1:0)+($k[2]&&!$h["unsigned"]?1:0)):($U[$h["type"]]?$U[$h["type"]]+($h["unsigned"]?0:1):0));echo"<input value='".h($l)."'".($dd?" maxlength='$dd'":"").(ereg('char',$h["type"])&&$h["length"]>20?" size='40'":"")."$Na>";}}}function
process_input($h){global$a,$n;$z=bracket_escape($h["field"]);$N=$_POST["function"][$z];$l=$_POST["fields"][$z];if($h["type"]=="enum"){if($l==-1){return
false;}if($l==""){return"NULL";}return
intval($l);}if($h["auto_increment"]&&$l==""){return
null;}if($N=="orig"){return
false;}if($N=="NULL"){return"NULL";}if($h["type"]=="set"){return
array_sum((array)$l);}if(ereg('binary|blob|bytea|raw|file',$h["type"])&&ini_bool("file_uploads")){$Y=get_file("fields-$z");if(!is_string($Y)){return
false;}return$a->quote($Y);}return$n->processInput($h,$l,$N);}function
search_tables(){global$n,$a;$xc=false;foreach(table_status()as$i=>$F){$g=$n->tableName($F);if(isset($F["Engine"])&&$g!=""&&(!$_POST["tables"]||in_array($i,$_POST["tables"]))){$e=$a->query("SELECT".limit("1 FROM ".table($i)," WHERE ".implode(" AND ",$n->selectSearchProcess(fields($i),array())),1));if($e->fetch_row()){if(!$xc){echo"<ul>\n";$xc=true;}echo"<li><a href='".h(ME."select=".urlencode($i)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>".h($g)."</a>\n";}}}echo($xc?"</ul>":"<p class='message'>".lang(4))."\n";}function
dump_csv($c){foreach($c
as$f=>$b){if(preg_match("~[\"\n,;]~",$b)||$b===""){$c[$f]='"'.str_replace('"','""',$b).'"';}}echo
implode(($_POST["format"]=="csv"?",":";"),$c)."\n";}function
apply_sql_function($N,$w){return($N?($N=="unixepoch"?"DATETIME($w, '$N')":($N=="count distinct"?"COUNT(DISTINCT ":strtoupper("$N("))."$w)"):$w);}function
password_file(){$Tb=ini_get("upload_tmp_dir");if(!$Tb){if(function_exists('sys_get_temp_dir')){$Tb=sys_get_temp_dir();}else{$Q=@tempnam("","");if(!$Q){return
false;}$Tb=dirname($Q);unlink($Q);}}$Q="$Tb/adminer.key";$d=@file_get_contents($Q);if($d){return$d;}$ic=@fopen($Q,"w");if($ic){$d=md5(uniqid(mt_rand(),true));fwrite($ic,$d);fclose($ic);}return$d;}function
is_email($jb){$cd='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$sb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$aa="$cd+(\\.$cd+)*@($sb?\\.)+$sb";return
preg_match("(^$aa(,\\s*$aa)*\$)i",$jb);}function
is_url($x){$sb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($sb?\\.)+$sb(:[0-9]+)?(/.*)?(\\?.*)?(#.*)?\$~i",$x,$k)?strtolower($k[1]):"");}function
print_fieldset($X,$rd,$wd=false){echo"<fieldset><legend><a href='#fieldset-$X' onclick=\"return !toggle('fieldset-$X');\">$rd</a></legend><div id='fieldset-$X'".($wd?"":" class='hidden'").">\n";}function
bold($x,$xd){return($xd?"<b>$x</b>":$x);}if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$hb=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!ini_bool("session.auto_start")){session_name("adminer_sid");$rb=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$hb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$rb[]=true;}call_user_func_array('session_set_cookie_params',$rb);session_start();}if(get_magic_quotes_gpc()){$Da=array(&$_GET,&$_POST,&$_COOKIE);while(list($f,$b)=each($Da)){foreach($b
as$la=>$p){unset($Da[$f][$la]);if(is_array($p)){$Da[$f][stripslashes($la)]=$p;$Da[]=&$Da[$f][stripslashes($la)];}else{$Da[$f][stripslashes($la)]=($_c?$p:stripslashes($p));}}}unset($Da);}if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);$gb=array('en'=>'English','cs'=>'Čeština','sk'=>'Slovenčina','nl'=>'Nederlands','es'=>'Español','de'=>'Deutsch','fr'=>'Français','it'=>'Italiano','et'=>'Eesti','ru'=>'Русский язык','zh'=>'简体中文','zh-tw'=>'繁體中文','ja'=>'日本語',);function
lang($z,$vc=null){global$za,$ia;$ib=$ia[$z];if(is_array($ib)&&$ib){$Bd=($vc==1?0:((!$vc||$vc>=5)&&ereg('cs|sk|ru',$za)?2:1));$ib=$ib[$Bd];}$Ic=func_get_args();array_shift($Ic);return
vsprintf((isset($ib)?$ib:$z),$Ic);}function
switch_lang(){global$za,$gb;echo"<form action=''>\n<div id='lang'>";hidden_fields($_GET,array('lang'));echo
lang(5).": ".html_select("lang",$gb,$za,"this.form.submit();")," <input type='submit' value='".lang(6)."' class='hidden'>\n","</div>\n</form>\n";}if(isset($_GET["lang"])){$_COOKIE["adminer_lang"]=$_GET["lang"];$_SESSION["lang"]=$_GET["lang"];}$za="en";if(isset($gb[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$za=$_COOKIE["adminer_lang"];}elseif(isset($gb[$_SESSION["lang"]])){$za=$_SESSION["lang"];}else{$Nb=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$Z,PREG_SET_ORDER);foreach($Z
as$k){$Nb[$k[1]]=(isset($k[3])?$k[3]:1);}arsort($Nb);foreach($Nb
as$f=>$Wb){if(isset($gb[$f])){$za=$f;break;}$f=preg_replace('~-.*~','',$f);if(!isset($Nb[$f])&&isset($gb[$f])){$za=$f;break;}}}switch($za){case"cs":$ia=array('Nepodařilo se nahrát soubor.','Maximální povolená velikost souboru je %sB.','Soubor neexistuje.','původní','Žádné tabulky.','Jazyk','Vybrat','Soubor existuje.','Uživatelské typy','Čísla','Datum a čas','Řetězce','Binární','Síť','Geometrie','Seznamy','Editor','Uživatel','Heslo','Přihlásit se','Trvalé přihlášení','Nová položka','poslední',array('%d bajt','%d bajty','%d bajtů'),'$6.$4.$1','Vyhledat','kdekoliv','Seřadit','Limit','Akce','Vypsat','E-mail','Odesílatel','Předmět','Vložit','Přílohy','Odeslat',array('Byl odeslán %d e-mail.','Byly odeslány %d e-maily.','Bylo odesláno %d e-mailů.'),'teď','d.m.[rrrr]','Odhlásit','Server','Žádná extenze','Není dostupná žádná z podporovaných PHP extenzí (%s).','Neplatný token CSRF. Odešlete formulář znovu.','Odhlášení proběhlo v pořádku.','Session proměnné musí být povolené.','Session vypršela, přihlašte se prosím znovu.','Neplatné přihlašovací údaje.','Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','Opravdu?','Položka byla smazána.','Položka byla aktualizována.','Položka%s byla vložena.','Upravit','Uložit','Uložit a pokračovat v editaci','Uložit a vložit další','Smazat',array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),'Dvojklikněte na políčko, které chcete změnit.',array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),'Nepodařilo se vypsat tabulku','Žádné řádky.','upravit','Vztahy','Ke změně této hodnoty zvyšte délku textů.','Ke změně této hodnoty použijte odkaz upravit.','Stránka',array('%d řádek','%d řádky','%d řádků'),'celý výsledek','Klonovat','Export','Import CSV','Import','Vyhledat data v tabulkách','prázdné');break;case"de":$ia=array('Hochladen von Datei fehlgeschlagen.','Maximal erlaubte Dateigrösse ist %sB.','Datei existiert nicht.','Original','Keine Tabellen.','Sprache','Benutzung','Datei existiert schon.','Benutzer-definierte Typen','Zahlen','Datum oder Zeit','Zeichenketten','Binär','Netzwerk','Geometrie','Listen','Editor','Benutzer','Passwort','Login','Passwort speichern','Neuer Datensatz','letzte',array('%d Byte','%d Bytes'),'$6.$4.$1','Suchen','beliebig','Ordnen','Begrenzung','Aktion','Daten zeigen von','E-mail','Von','Betreff','Hinzufügen','Anhänge','Abschicken',array('%d e-mail abgeschickt.','%d e-mails abgeschickt.'),'now','t.m.[jjjj]','Abmelden','Server','Keine Erweiterungen installiert','Keine der unterstützten PHP-Erweiterungen (%s) ist vorhanden.','CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.','Abmeldung erfolgreich.','Sitzungen müssen aktiviert sein.','Sitzungsdauer abgelaufen, bitte erneut anmelden.','Ungültige Anmelde-Informationen.','POST data zu gross. Reduzieren Sie die Grösse oder vergrössern Sie den Wert %s in der Konfiguration.','Sind Sie sicher ?','Datensatz gelöscht.','Datensatz geändert.','Datensatz%s hinzugefügt.','Ändern','Speichern','Speichern und weiter bearbeiten','Speichern und nächsten hinzufügen','Entfernen',array('%d Artikel betroffen.','%d Artikel betroffen.'),'Doppelklick zum Bearbeiten des Wertes.',array('%d Datensatz importiert.','%d Datensätze wurden importiert.'),'Auswahl der Tabelle fehlgeschlagen','Keine Daten.','ändern','Relationen','Vergrössern Sie die Textlänge um den Wert ändern zu können.','Benutzen Sie den Link zum editieren dieses Wertes.','Seite',array('%d Datensatz','%d Datensätze'),'Gesamtergebnis','Klonen','Exportieren','Importiere CSV','Importieren','Suche in Tabellen','leer');break;case"en":$ia=array('Unable to upload a file.','Maximum allowed file size is %sB.','File does not exist.','original','No tables.','Language','Use','File exists.','User types','Numbers','Date and time','Strings','Binary','Network','Geometry','Lists','Editor','Username','Password','Login','Permanent login','New item','last',array('%d byte','%d bytes'),'$1-$3-$5','Search','anywhere','Sort','Limit','Action','Select','E-mail','From','Subject','Insert','Attachments','Send',array('%d e-mail has been sent.','%d e-mails have been sent.'),'now','[yyyy]-mm-dd','Logout','Server','No extension','None of the supported PHP extensions (%s) are available.','Invalid CSRF token. Send the form again.','Logout successful.','Session support must be enabled.','Session expired, please login again.','Invalid credentials.','Too big POST data. Reduce the data or increase the %s configuration directive.','Are you sure?','Item has been deleted.','Item has been updated.','Item%s has been inserted.','Edit','Save','Save and continue edit','Save and insert next','Delete',array('%d item has been affected.','%d items have been affected.'),'Double click on a value to modify it.',array('%d row has been imported.','%d rows have been imported.'),'Unable to select the table','No rows.','edit','Relations','Increase text length to modify this value.','Use edit link to modify this value.','Page',array('%d row','%d rows'),'whole result','Clone','Export','CSV Import','Import','Search data in tables','%d in total');break;case"es":$ia=array('No es posible importar archivo.','Tamaño máximo de archivo es %sB.','Archivo no existe.','original','No existen tablas.','Idioma','Usar','Archivo ya existe.','Tipos definido por el usuario','Números','Fecha y hora','Cadena','Binario','Red','Geometría','Listas','Editor','Usuario','Contraseña','Login','Guardar contraseña','Nuevo Registro','último',array('%d byte','%d bytes'),'$5/$3/$1','Condición','donde sea','Ordenar','Limit','Acción','Mostrar','Email','De','Asunto','Agregar','Adjuntos','Enviar',array('%d email enviado.','%d emails enviados.'),'now','dd/mm/[aaaa]','Logout','Servidor','No hay extension','Ninguna de las extensiones PHP soportadas (%s) está disponible.','Token CSRF inválido. Vuelva a enviar los datos del formulario.','Salida exitosa.','Deben estar habilitadas las sesiones.','Sesión expirada, por favor ingrese su clave de nuevo.','Identificacion inválida.','POST data demasiado grande. Reduzca el tamaño o aumente la directiva de configuración %s.','Está seguro?','Registro eliminado.','Registro modificado.','Registro%s insertado.','Modificar','Guardar','Guardar y continuar editando','Guardar e insertar otro','Eliminar',array('%d ítem afectado.','%d itemes afectados.'),'Doble-clic sobre el valor para editarlo.',array('%d registro importado.','%d registros importados.'),'No es posible seleccionar la tabla','No existen registros.','modificar','Relaciones','Aumente el tamaño del campo de texto para modificar este valor.','Utilice el enlace de modificar para realizar los cambios.','Página',array('%d registro','%d registros'),'resultado completo','Clonar','Exportar','Importar CSV','Importar','Buscar datos en tablas','ningúno');break;case"et":$ia=array('Faili üleslaadimine pole võimalik.','Maksimaalne failisuurus %sB.','Faili ei leitud.','originaal','Tabeleid ei leitud.','Keel','Kasuta','Fail juba eksisteerib.','Kasutajatüübid','Numbrilised','Kuupäev ja kellaaeg','Tekstid','Binaar','Võrk (network)','Geomeetria','Listid','Redaktor','Kasutajanimi','Parool','Logi sisse','Jäta mind meelde','Lisa kirje','viimane',array('%d bait','%d baiti'),'$6.$4.$1','Otsi','vahet pole','Sorteeri','Piira','Tegevus','Kuva','E-post','Kellelt','Pealkiri','Sisesta','Manused','Saada',array('Saadetud kirju: %d.','Saadetud kirju: %d.'),'now','d.m.[yyyy]','Logi välja','Server','Ei leitud laiendust','Serveris pole ühtegi toetatud PHP laiendustest (%s).','Sobimatu CSRF, palun postitage vorm uuesti.','Väljalogimine õnnestus.','Sessioonid peavad olema lubatud.','Sessioon on aegunud, palun logige uuesti sisse.','Ebakorrektsed andmed.','POST-andmete maht on liialt suur. Palun vähendage andmeid või suurendage %s php-seadet.','Kas oled kindel?','Kustutamine õnnestus.','Uuendamine õnnestus.','Kirje%s on edukalt lisatud.','Muuda','Salvesta','Salvesta ja jätka muutmist','Salvesta ja lisa järgmine','Kustuta',array('Mõjutatud kirjeid: %d.','Mõjutatud kirjeid: %d.'),'Väärtuse muutmiseks topelt-kliki sellel.',array('Imporditi %d rida.','Imporditi %d rida.'),'Tabeli valimine ebaõnnestus','Sissekanded puuduvad.','muuda','Seosed','Väärtuse muutmiseks suurenda tekstiveeru pikkust.','Väärtuse muutmiseks kasuta muutmislinki.','Lehekülg',array('%d rida','%d rida'),'Täielikud tulemused','Kloon','Ekspordi','Impordi CSV','Impordi','Otsi kogu andmebaasist','tühi');break;case"fr":$ia=array('Impossible d\'importer le fichier.','Taille maximale des fichiers est de %sB.','Le fichier est introuvable.','original','Aucunes tables.','Langues','Utiliser','File exists.','User types','Nombres','Date et heure','Chaînes','Binaires','Network','Geometry','Listes','Editeur','Utilisateur','Mot de passe','Authentification','Authentification permanente','Nouvel élément','last',array('%d octet','%d octets'),'$5/$3/$1','Rechercher','n\'importe où','Ordonner','Limit','Action','Select','Courriel','De','Sujet','Insérer','Attachments','Envoyer',array('%d message a été envoyé.','%d messages ont été envoyés.'),'now','jj/mm/[aaaa]','Déconnexion','Serveur','Extension introuvable','Aucune des extensions PHP supportées (%s) n\'est disponible.','Token CSRF invalide. Veuillez réenvoyer le formulaire.','Au revoir !','Veuillez activer les sessions.','Session expirée, veuillez vous authentifier à nouveau.','Authentification échouée.','Donnée POST trop grande . Réduire la taille des données ou modifier le %s dans la configuration de PHP.','Êtes-vous certain?','Élément supprimé.','Élément modifié.','Item%s has been inserted.','Modifier','Sauvegarder','Sauvegarder et continuer l\'édition','Sauvegarder et insérer le prochain','Effacer',array('%d élément ont été modifié.','%d éléments ont été modifié.'),'Double click on a value to modify it.',array('%d ligne a été importé.','%d lignes ont été importé.'),'Impossible de sélectionner la table','Aucun résultat.','modifier','Relations','Increase text length to modify this value.','Use edit link to modify this value.','Page',array('%d ligne','%d lignes'),'résultat entier','Cloner','Exporter','Importation CVS','Importer','Search data in tables','%d au total');break;case"it":$ia=array('Caricamento del file non riuscito.','La dimensione massima del file è %sB.','Il file non esiste.','originale','No tabelle.','Lingua','Usa','Il file esiste già.','Tipi definiti dall\'utente','Numeri','Data e ora','Stringhe','Binari','Rete','Geometria','Liste','Editor','Utente','Password','Autenticazione','Login permanente','Nuovo elemento','ultima',array('%d byte','%d bytes'),'$5/$3/$1','Cerca','ovunque','Ordina','Limite','Azione','Seleziona','E-mail','Da','Oggetto','Inserisci','Allegati','Invia',array('%d e-mail inviata.','%d e-mail inviate.'),'now','dd/mm/[yyyy]','Esci','Server','Estensioni non presenti','Nessuna delle estensioni PHP supportate (%s) disponibile.','Token CSRF non valido. Reinvia la richiesta.','Uscita effettuata con successo.','Le sessioni devono essere abilitate.','Sessione scaduta, autenticarsi di nuovo.','Credenziali non valide.','Troppi dati via POST. Ridurre i dati o aumentare la direttiva di configurazione %s.','Sicuro?','Elemento eliminato.','Elemento aggiornato.','Elemento%s inserito.','Modifica','Salva','Salva e continua','Salva e inserisci un altro','Elimina',array('Il risultato consiste in %d elemento','Il risultato consiste in %d elementi'),'Fai doppio click su un valore per modificarlo.',array('%d riga importata.','%d righe importate.'),'Selezione della tabella non riuscita','Nessuna riga.','modifica','Relazioni','Aumenta la lunghezza del testo per modificare questo valore.','Usa il link modifica per modificare questo valore.','Pagina',array('%d riga','%d righe'),'intero risultato','Clona','Esporta','Importa da CSV','Importa','Cerca nelle tabelle','vuoto');break;case"ja":$ia=array('ファイルをアップロードできません','最大ファイルサイズ %sB','ファイルは存在しません','元','テーブルがありません没有表。','言語','使用','File exists.','User types','数字','日時','文字列','バイナリ','Network','Geometry','リスト','エディタ','ユーザ名','パスワード','ログイン','永続的にログイン','項目の作成','last','%d バイト','$1.$3.$5','検索','任意','ソート','制約','動作','選択','メール','差出人','題名','挿入','Attachments','送信','%d メールを送信しました','now','[yyyy].mm.dd','ログアウト','サーバ','拡張機能がありません','PHPの拡張機能（%s）がセットアップされていません','不正なCSRFトークン。再送信してください','ログアウト','セッションを有効にしてください','セッションの期限切れ。ログインし直してください','不正なログイン','POSTデータが大きすぎます。データサイズを小さくするか %s 設定を大きくしてください','実行しますか？','項目を削除しました','項目を更新しました','Item%s has been inserted.','編集','保存','保存して継続','保存／追加','削除','%d を更新しました','Double click on a value to modify it.','%d 行をインポートしました','テーブルを選択できません','行がありません','編集','関係','Increase text length to modify this value.','Use edit link to modify this value.','ページ','%d 行','全結果','クローン','エクスポート','CSV インポート','インポート','Search data in tables','合計 %d');break;case"nl":$ia=array('Onmogelijk bestand te uploaden.','Maximum toegelaten bestandsgrootte is %sB.','Bestand niet gevonden.','origineel','Geen tabellen.','Taal','Gebruik','Bestand bestaat reeds.','Gebruikersgedefiniëerde types','Getallen','Datum en tijd','Tekst','Binaire gegevens','Netwerk','Geometrie','Lijsten','Editor','Gebruikersnaam','Wachtwoord','Inloggen','Blijf aangemeld','Nieuw item','laatste',array('%d byte','%d bytes'),'$5-$3-$1','Zoeken','overal','Sorteren','Beperk','Acties','Kies','E-mail','Van','Onderwerp','Toevoegen','Bijlagen','Verzenden',array('%d e-mail verzonden.','%d e-mails verzonden.'),'now','dd-mm-[jjjj]','Uitloggen','Server','Geen extensie','Geen geldige PHP extensies beschikbaar (%s).','Ongeldig CSRF token. Verstuur het formulier opnieuw.','Uitloggen geslaagd.','Sessies moeten geactiveerd zijn.','Uw sessie is verlopen. Gelieve opnieuw in te loggen.','Ongeldige logingegevens.','POST-data is te groot. Verklein de hoeveelheid data of verhoog de %s configuratie.','Weet u het zeker?','Item verwijderd.','Item aangepast.','Item%s toegevoegd.','Bewerk','Opslaan','Opslaan en verder bewerken','Opslaan, daarna toevoegen','Verwijderen',array('%d item aangepast.','%d items aangepast.'),'Dubbelklik op een waarde om deze te bewerken.',array('%d rij werd geïmporteerd.','%d rijen werden geïmporteerd.'),'Onmogelijk tabel te selecteren','Geen rijen.','bewerk','Relaties','Verhoog de lengte om deze waarde te bewerken.','Gebruik de link "bewerk" om deze waarde te wijzigen.','Pagina',array('%d rij','%d rijen'),'volledig resultaat','Dupliceer','Exporteren','CSV Import','Importeren','Zoeken in database','leeg');break;case"ru":$ia=array('Не удалось загрузить файл на сервер.','Максимальный разрешенный размер файла - %sB.','Такого файла не существует.','исходный','В базе данных нет таблиц.','Язык','Выбрать','Файл уже существует.','Типы пользователей','Число','Дата и время','Строки','Двоичный тип','Сеть','Геометрия','Списки','Редактор','Имя пользователя','Пароль','Войти','Оставаться в системе','Новая запись','последняя',array('%d байт','%d байта','%d байтов'),'$5.$3.$1','Поиск','в любом месте','Сортировать','Лимит','Действие','Выбрать','Электропочта','От','Кому','Вставить','Прикрепленные файлы','Послать',array('Было отправлено %d письмо.','Было отправлено %d письма.','Было отправлено %d писем.'),'now','дд.мм.[гггг]','Выйти','Сервер','Нет расширений','Не доступно ни одного расширения из поддерживаемых (%s).','Недействительный CSRF токен. Отправите форму ещё раз.','Вы успешно покинули систему.','Сессии должны быть включены.','Срок действия сесси истек, нужно снова войти в систему.','Неправильное имя пользователя или пароль.','Слишком большой объем POST-данных. Пошлите меньший объем данных или увеличьте параметр конфигурационной директивы %s.','Вы уверены?','Запись удалена.','Запись обновлена.','Запись%s была вставлена.','Редактировать','Сохранить','Сохранить и продолжить редактирование','Сохранить и вставить еще','Стереть',array('Была изменена %d запись.','Были изменены %d записи.','Было изменено %d записей.'),'Кликни два раза по значению, чтобы его изменить.',array('Импортирована %d строка.','Импортировано %d строки.','Импортировано %d строк.'),'Не удалось получить данные из таблицы','Нет записей.','редактировать','Реляции','Увеличь длину текста, чтобы изменить это значение.','Изменить это значение можно с помощью ссылки «изменить».','Страница',array('%d строка','%d строки','%d строк'),'весь результат','Клонировать','Експорт','Импорт CSV','Импорт','Поиск в таблицах','пусто');break;case"sk":$ia=array('Súbor sa nepodarilo nahrať.','Maximálna povolená veľkosť súboru je %sB.','Súbor neexistuje.','originál','Žiadne tabuľky.','Jazyk','Vybrať','Súbor existuje.','Užívateľské typy','Čísla','Dátum a čas','Reťazce','Binárne','Sieť','Geometria','Zoznamy','Editor','Používateľ','Heslo','Prihlásiť sa','Trvalé prihlásenie','Nová položka','posledný',array('%d bajt','%d bajty','%d bajtov'),'$6.$4.$1','Vyhľadať','kdekoľvek','Zotriediť','Limit','Akcia','Vypísať','E-mail','Odosielateľ','Predmet','Vložiť','Prílohy','Odoslať',array('Bol odoslaný %d e-mail.','Boli odoslané %d e-maily.','Bolo odoslaných %d e-mailov.'),'now','d.m.[rrrr]','Odhlásiť','Server','Žiadne rozšírenie','Nie je dostupné žiadne z podporovaných rozšírení (%s).','Neplatný token CSRF. Odošlite formulár znova.','Odhlásenie prebehlo v poriadku.','Session premenné musia byť povolené.','Session vypršala, prihláste sa prosím znova.','Neplatné prihlasovacie údaje.','Príliš veľké POST dáta. Zmenšite dáta alebo zvýšte hodnotu konfiguračej direktívy %s.','Naozaj?','Položka bola vymazaná.','Položka bola aktualizovaná.','Položka%s bola vložená.','Upraviť','Uložiť','Uložiť a pokračovať v úpravách','Uložiť a vložiť ďalší','Zmazať','%d položiek bolo ovplyvnených.','Dvojkliknite na políčko, ktoré chcete zmeniť.',array('Bol importovaný %d záznam.','Boli importované %d záznamy.','Bolo importovaných %d záznamov.'),'Tabuľku sa nepodarilo vypísať','Žiadne riadky.','upraviť','Vzťahy','Pre zmenu tejto hodnoty zvýšte dĺžku textov.','Pre zmenu tejto hodnoty použite odkaz upraviť.','Stránka',array('%d riadok','%d riadky','%d riadkov'),'celý výsledok','Klonovať','Export','Import CSV','Import','Vyhľadať dáta v tabuľkách','prázdne');break;case"zh-tw":$ia=array('無法上傳檔案。','允許的檔案上限大小為%sB','檔案不存在','原始','沒有資料表。','語言','使用','檔案已存在。','使用者類型','數字','日期時間','字符串','二進制','網路','幾何','列表','編輯器','帳號','密碼','登入','永久登入','新建項','最後一頁','%d byte(s)','$1.$3.$5','搜尋','任意位置','排序','限定','動作','選擇','電子郵件','來自','主題','插入','附件','發送','已發送 %d 封郵件。','now','[yyyy].mm.dd','登出','伺服器','沒有 擴充模組','沒有任何支援的PHP擴充模組（%s）。','無效的 CSRF token。請重新發送表單。','登出成功。','Session 必須被啟用。','Session 已過期，請重新登入。','無效的憑證。','POST 資料太大。減少資料或者增加 %s 的設定值。','你確定嗎？','該項目已被刪除','已更新項目。','已插入項目%s。','編輯','儲存','保存並繼續編輯','儲存並插入下一個','刪除','%d個項目受到影響。','雙擊以進行修改。','%d行已導入。','無法選擇該資料表','沒有行。','編輯','關聯','增加字串長度來修改。','使用編輯連結來修改。','頁','%d行','所有結果','複製','匯出','匯入 CSV','匯入','在資料庫搜尋','空值');break;case"zh":$ia=array('不能上传文件。','最多允许的文件大小为 %sB','文件不存在。','原始','没有表。','语言','使用','文件已存在。','用户类型','数字','日期时间','字符串','二进制','网络','几何图形','列表','编辑器','用户名','密码','登录','保持登录','新建项','最后','%d 字节','$1.$3.$5','搜索','任意位置','排序','限定','动作','选择','电子邮件','来自','主题','插入','附件','发送','%d 封邮件已发送。','now','[yyyy].mm.dd','注销','服务器','没有扩展','没有支持的 PHP 扩展可用（%s）。','无效 CSRF 令牌。重新发送表单。','注销成功。','会话必须被启用。','会话已过期，请重新登录。','无效凭据。','太大的 POST 数据。减少数据或者增加 %s 配置命令。','你确定吗？','已删除项目。','已更新项目。','已插入项目%s。','编辑','保存','保存并继续编辑','保存并插入下一个','删除','%d 个项目受到影响。','在值上双击类修改它。','%d 行已导入。','不能选择该表','没有行。','编辑','关联信息','增加文本长度以修改该值。','使用编辑链接来修改该值。','页面','%d 行','所有结果','克隆','导出','CSV 导入','导入','在表中搜索数据','空');break;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($_d,$D,$H,$yd='auth_error'){set_exception_handler($yd);parent::__construct($_d,$D,$H);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($j,$xa=false){$e=parent::query($j);if(!$e){$zd=$this->errorInfo();$this->error=$zd[2];return
false;}$this->store_result($e);return$e;}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result($e=null){if(!$e){$e=$this->_result;}if($e->columnCount()){$e->num_rows=$e->rowCount();return$e;}$this->affected_rows=$e->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($j,$h=0){$e=$this->query($j);if(!$e){return
false;}$c=$e->fetch();return$c[$h];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$c=(object)$this->getColumnMeta($this->_offset++);$c->orgtable=$c->table;$c->orgname=$c->name;$c->charsetnr=(in_array("blob",$c->flags)?63:0);return$c;}}}$ka=array();$na=array();$ka[]="SQLite";$ka[]="SQLite3";$ka[]="PDO_SQLite";if(extension_loaded("sqlite3")||extension_loaded("pdo_sqlite")){$na["sqlite"]="SQLite 3";}if(extension_loaded("sqlite")||extension_loaded("pdo_sqlite")){$na["sqlite2"]="SQLite 2";}if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite2"])?"sqlite":"sqlite3")){if(isset($_GET["sqlite2"])){class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Q){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Q);}function
query($j,$xa=false){$Id=($xa?"unbufferedQuery":"query");$e=@$this->_link->$Id($j,SQLITE_BOTH,$r);if(!$e){$this->error=$r;return
false;}elseif($e===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($e);}function
quote($x){return"'".sqlite_escape_string($x)."'";}function
store_result(){return$this->_result;}function
result($j,$h=0){$e=$this->query($j);if(!is_object($e)){return
false;}$c=$e->_result->fetch();return$c[$h];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($e){$this->_result=$e;if(method_exists($e,'numRows')){$this->num_rows=$e->numRows();}}function
fetch_assoc(){$c=$this->_result->fetch(SQLITE_ASSOC);if(!$c){return
false;}$d=array();foreach($c
as$f=>$b){$d[($f[0]=='"'?idf_unescape($f):$f)]=$b;}return$d;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$g=$this->_result->fieldName($this->_offset++);$aa='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($aa\\.)?$aa\$~",$g,$k)){$i=($k[3]!=""?$k[3]:idf_unescape($k[2]));$g=($k[5]!=""?$k[5]:idf_unescape($k[4]));}return(object)array("name"=>$g,"orgname"=>$g,"orgtable"=>$i,);}}}else{class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Q){$this->_link=new
SQLite3($Q);$rc=$this->_link->version();$this->server_info=$rc["versionString"];}function
query($j){$e=@$this->_link->query($j);if(!$e){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($e->numColumns()){return
new
Min_Result($e);}$this->affected_rows=$this->_link->changes();return
true;}function
quote($x){return"'".$this->_link->escapeString($x)."'";}function
store_result(){return$this->_result;}function
result($j,$h=0){$e=$this->query($j);if(!is_object($e)){return
false;}$c=$e->_result->fetchArray();return$c[$h];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($e){$this->_result=$e;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$w=$this->_offset++;$C=$this->_result->columnType($w);return(object)array("name"=>$this->_result->columnName($w),"type"=>$C,"charsetnr"=>($C==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($Q){$this->dsn(DRIVER.":$Q","","");}}}class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($Q){if(is_readable($Q)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\]|:)",$Q)?$Q:dirname($_SERVER["SCRIPT_FILENAME"])."/$Q")." AS a")){$this->Min_SQLite($Q);return
true;}return
false;}function
multi_query($j){return$this->_result=$this->query($j);}function
next_result(){return
false;}}function
idf_escape($z){return'"'.str_replace('"','""',$z).'"';}function
table($z){return
idf_escape($z);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($j,$m,$y,$S=0,$da=" "){return" $j$m".(isset($y)?$da."LIMIT $y".($S?" OFFSET $S":""):"");}function
limit1($j,$m){global$a;return($a->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($j,$m,1):" $j$m");}function
db_collation($B,$xb){global$a;return$a->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($T){return
array();}function
table_status($g=""){global$a;$d=array();$e=$a->query("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($g!=""?" AND name = ".$a->quote($g):""));while($c=$e->fetch_assoc()){$c["Auto_increment"]="";$d[$c["Name"]]=$c;}$e=$a->query("SELECT * FROM sqlite_sequence");if($e){while($c=$e->fetch_assoc()){$d[$c["name"]]["Auto_increment"]=$c["seq"];}}return($g!=""?$d[$g]:$d);}function
is_view($F){return$F["Engine"]=="view";}function
fk_support($F){global$a;return!$a->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($i,$Ab=false){global$a;$d=array();$e=$a->query("PRAGMA table_info(".table($i).")");if(is_object($e)){while($c=$e->fetch_assoc()){$C=strtolower($c["type"]);$bb=$c["dflt_value"];$d[$c["name"]]=array("field"=>$c["name"],"type"=>(eregi("int",$C)?"integer":(eregi("char|clob|text",$C)?"text":(eregi("blob",$C)?"blob":(eregi("real|floa|doub",$C)?"real":"numeric")))),"full_type"=>$C,"default"=>(ereg("'(.*)'",$bb,$k)?str_replace("''","'",$k[1]):($bb=="NULL"?null:$bb)),"null"=>!$c["notnull"],"auto_increment"=>eregi('^integer$',$C)&&$c["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$c["pk"],);}}return$d;}function
indexes($i,$P=null){global$a;$d=array();$Za=array();foreach(fields($i)as$h){if($h["primary"]){$Za[]=$h["field"];}}if($Za){$d[""]=array("type"=>"PRIMARY","columns"=>$Za,"lengths"=>array());}$e=$a->query("PRAGMA index_list(".table($i).")");if(is_object($e)){while($c=$e->fetch_assoc()){$d[$c["name"]]["type"]=($c["unique"]?"UNIQUE":"INDEX");$d[$c["name"]]["lengths"]=array();$Ad=$a->query("PRAGMA index_info(".idf_escape($c["name"]).")");while($Cd=$Ad->fetch_assoc()){$d[$c["name"]]["columns"][]=$Cd["name"];}}}return$d;}function
foreign_keys($i){global$a;$d=array();$e=$a->query("PRAGMA foreign_key_list(".table($i).")");if(is_object($e)){while($c=$e->fetch_assoc()){$J=&$d[$c["id"]];if(!$J){$J=$c;}$J["source"][]=$c["from"];$J["target"][]=$c["to"];}}return$d;}function
view($g){global$a;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$a->result("SELECT sql FROM sqlite_master WHERE name = ".$a->quote($g))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($B){return
false;}function
error(){global$a;return
h($a->error);}function
exact_value($b){global$a;return$a->quote($b);}function
create_database($B,$G){global$a;if(file_exists($B)){$a->error=lang(7);return
false;}$v=new
Min_SQLite($B);$v->query('PRAGMA encoding = "UTF-8"');$v->query('CREATE TABLE adminer (i)');$v->query('DROP TABLE adminer');return
true;}function
drop_databases($T){global$a;$a->Min_SQLite(":memory:");foreach($T
as$B){if(!@unlink($B)){$a->error=lang(7);return
false;}}return
true;}function
rename_database($g,$G){global$a;$a->Min_SQLite(":memory:");$a->error=lang(7);return@rename(DB,$g);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($i,$g,$t,$Ya,$Ua,$fb,$G,$oa,$mb){global$a;$s=array();foreach($t
as$h){if($h[1]){$s[]=($i!=""&&$h[0]==""?"ADD ":"  ").implode($h[1]);}}$s=array_merge($s,$Ya);if($i!=""){foreach($s
as$b){if(!queries("ALTER TABLE ".table($i)." $b")){return
false;}}if($i!=$g&&!queries("ALTER TABLE ".table($i)." RENAME TO ".table($g))){return
false;}}elseif(!queries("CREATE TABLE ".table($g)." (\n".implode(",\n",$s)."\n)")){return
false;}if($oa){queries("UPDATE sqlite_sequence SET seq = $oa WHERE name = ".$a->quote($g));}return
true;}function
alter_indexes($i,$s){foreach($s
as$b){if(!queries(($b[2]?"DROP INDEX":"CREATE".($b[0]!="INDEX"?" UNIQUE":"")." INDEX ".idf_escape(uniqid($i."_"))." ON ".table($i))." $b[1]")){return
false;}}return
true;}function
truncate_tables($A){return
apply_queries("DELETE FROM",$A);}function
drop_views($V){return
apply_queries("DROP VIEW",$V);}function
drop_tables($A){return
apply_queries("DROP TABLE",$A);}function
move_tables($A,$V,$Ma){return
false;}function
trigger($g){global$a;preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$a->result("SELECT sql FROM sqlite_master WHERE name = ".$a->quote($g)),$k);return
array("Timing"=>strtoupper($k[1]),"Event"=>strtoupper($k[2]),"Trigger"=>$g,"Statement"=>$k[3]);}function
triggers($i){global$a;$d=array();$e=$a->query("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".$a->quote($i));while($c=$e->fetch_assoc()){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$c["sql"],$k);$d[$c["name"]]=array($k[1],$k[2]);}return$d;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($g,$C){}function
routines(){}function
begin(){return
queries("BEGIN");}function
insert_into($i,$o){return
queries("INSERT INTO ".table($i).($o?" (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")":"DEFAULT VALUES"));}function
insert_update($i,$o){return
queries("REPLACE INTO ".table($i)." (".implode(", ",array_keys($o)).") VALUES (".implode(", ",$o).")");}function
last_id(){global$a;return$a->result("SELECT LAST_INSERT_ROWID()");}function
explain($a,$j){return$a->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($qd){return
true;}function
create_sql($i,$oa){global$a;return$a->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".$a->quote($i));}function
truncate_sql($i){return"DELETE FROM ".table($i);}function
use_sql($M){}function
trigger_sql($i,$jc){global$a;return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND name = ".$a->quote($i)));}function
show_variables(){global$a;$d=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$f){$d[$f]=$a->result("PRAGMA $f");}return$d;}function
show_status(){$d=array();foreach(get_vals("PRAGMA compile_options")as$pd){list($f,$b)=explode("=",$pd,2);$d[$f]=$b;}return$d;}function
support($Ga){return
ereg('^(view|trigger|variables|status)$',$Ga);}$Ha="sqlite";$U=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Ea=array_keys($U);$Pb=array();$qb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$ba=array("hex","length","lower","round","unixepoch","upper");$Hb=array("avg","count","count distinct","group_concat","max","min","sum");$Eb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$ka[]="PgSQL";$ka[]="PDO_PgSQL";if(extension_loaded("pgsql")||extension_loaded("pdo_pgsql")){$na["pgsql"]="PostgreSQL";}if(isset($_GET["pgsql"])){define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($sd,$r){if(ini_bool("html_errors")){$r=html_entity_decode(strip_tags($r));}$r=ereg_replace('^[^:]*: ','',$r);$this->error=$r;}function
connect($_,$D,$H){set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($_,"'\\"))."' user='".addcslashes($D,"'\\")."' password='".addcslashes($H,"'\\")."'";$this->_link=@pg_connect($this->_string.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":""),PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&DB!=""){$this->_database=false;$this->_link=@pg_connect($this->_string,PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$rc=pg_version($this->_link);$this->server_info=$rc["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($x){return"'".pg_escape_string($this->_link,$x)."'";}function
select_db($M){if($M==DB){return$this->_database;}$d=@pg_connect($this->_connection." dbname='".addcslashes($M,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($d){$this->_link=$d;}return$d;}function
close(){$this->_link=@pg_connect($this->_string);}function
query($j,$xa=false){$e=@pg_query($this->_link,$j);if(!$e){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($e)){$this->affected_rows=pg_affected_rows($e);return
true;}return
new
Min_Result($e);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$h=0){$e=$this->query($j);if(!$e){return
false;}return
pg_fetch_result($e->_result,0,$h);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($e){$this->_result=$e;$this->num_rows=pg_num_rows($e);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$w=$this->_offset++;$d=new
stdClass;if(function_exists('pg_field_table')){$d->orgtable=pg_field_table($this->_result,$w);}$d->name=pg_field_name($this->_result,$w);$d->orgname=$d->name;$d->type=pg_field_type($this->_result,$w);$d->charsetnr=($d->type=="bytea"?63:0);return$d;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($_,$D,$H){$x="pgsql:host='".str_replace(":","' port='",addcslashes($_,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn($x.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":""),$D,$H);return
true;}function
select_db($M){return(DB==$M);}function
close(){}}}function
idf_escape($z){return'"'.str_replace('"','""',$z).'"';}function
table($z){return
idf_escape($z);}function
connect(){global$n;$a=new
Min_DB;$ha=$n->credentials();if($a->connect($ha[0],$ha[1],$ha[2])){return$a;}return$a->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database");}function
limit($j,$m,$y,$S=0,$da=" "){return" $j$m".(isset($y)?$da."LIMIT $y".($S?" OFFSET $S":""):"");}function
limit1($j,$m){return" $j$m";}function
db_collation($B,$xb){global$a;return$a->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$a;return$a->result("SELECT user");}function
tables_list(){global$a;return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($T){return
array();}function
table_status($g=""){global$a;$d=array();$e=$a->query("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN '' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($g!=""?" AND relname = ".$a->quote($g):""));while($c=$e->fetch_assoc()){$d[$c["Name"]]=$c;}return($g!=""?$d[$g]:$d);}function
is_view($F){return$F["Engine"]=="view";}function
fk_support($F){return
true;}function
fields($i,$Ab=false){global$a;$d=array();$e=$a->query("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".$a->quote($i)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
".($Ab?"":"AND a.attnum > 0")."
ORDER BY a.attnum < 0, a.attnum");if($e){while($c=$e->fetch_assoc()){ereg('(.*)(\\((.*)\\))?',$c["full_type"],$k);list(,$c["type"],,$c["length"])=$k;$c["full_type"]=$c["type"].($c["length"]?"($c[length])":"");$c["null"]=($c["attnotnull"]=="f");$c["auto_increment"]=eregi("^nextval\\(",$c["default"]);$c["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);$d[$c["field"]]=$c;}}return$d;}function
indexes($i,$P=null){global$a;if(!is_object($P)){$P=$a;}$d=array();$hd=$P->result("SELECT oid FROM pg_class WHERE relname = ".$P->quote($i));$I=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $hd AND attnum > 0",$P);$e=$P->query("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $hd AND ci.oid = i.indexrelid");while($c=$e->fetch_assoc()){$d[$c["relname"]]["type"]=($c["indisprimary"]=="t"?"PRIMARY":($c["indisunique"]=="t"?"UNIQUE":"INDEX"));$d[$c["relname"]]["columns"]=array();foreach(explode(" ",$c["indkey"])as$td){$d[$c["relname"]]["columns"][]=$I[$td];}$d[$c["relname"]]["lengths"]=array();}return$d;}function
foreign_keys($i){global$a;$d=array();$e=$a->query("SELECT tc.constraint_name, kcu.column_name, rc.update_rule AS on_update, rc.delete_rule AS on_delete, ccu.table_name AS table, ccu.column_name AS ref
FROM information_schema.table_constraints tc
LEFT JOIN information_schema.key_column_usage kcu USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.referential_constraints rc USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.constraint_column_usage ccu ON rc.unique_constraint_catalog = ccu.constraint_catalog AND rc.unique_constraint_schema = ccu.constraint_schema AND rc.unique_constraint_name = ccu.constraint_name
WHERE tc.constraint_type = 'FOREIGN KEY' AND tc.table_name = ".$a->quote($i));while($c=$e->fetch_assoc()){$J=&$d[$c["constraint_name"]];if(!$J){$J=$c;}$J["source"][]=$c["column_name"];$J["target"][]=$c["ref"];}return$d;}function
view($g){global$a;return
array("select"=>$a->result("SELECT pg_get_viewdef(".$a->quote($g).")"));}function
collations(){return
array();}function
information_schema($B){return($B=="information_schema");}function
error(){global$a;$d=h($a->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$d,$k)){$d=$k[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($k[3]).'})(.*)~','\\1<b>\\2</b>',$k[2]).$k[4];}return
nl_br($d);}function
exact_value($b){global$a;return$a->quote($b);}function
create_database($B,$G){return
queries("CREATE DATABASE ".idf_escape($B).($G?" ENCODING ".idf_escape($G):""));}function
drop_databases($T){global$a;$a->close();return
apply_queries("DROP DATABASE",$T,'idf_escape');}function
rename_database($g,$G){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($g));}function
auto_increment(){return"";}function
alter_table($i,$g,$t,$Ya,$Ua,$fb,$G,$oa,$mb){global$a;$s=array();$Ca=array();foreach($t
as$h){$w=idf_escape($h[0]);$b=$h[1];if(!$b){$s[]="DROP $w";}else{$mc=$b[5];unset($b[5]);if(isset($b[6])&&$h[0]==""){$b[1]=($b[1]=="bigint"?" big":" ")."serial";}if($h[0]==""){$s[]=($i!=""?"ADD ":"  ").implode($b);}else{if($w!=$b[0]){$Ca[]="ALTER TABLE ".table($i)." RENAME $w TO $b[0]";}$s[]="ALTER $w TYPE$b[1]";if(!$b[6]){$s[]="ALTER $w ".($b[3]?"SET$b[3]":"DROP DEFAULT");$s[]="ALTER $w ".($b[2]==" NULL"?"DROP NOT":"SET").$b[2];}}if($h[0]!=""||$mc!=""){$Ca[]="COMMENT ON COLUMN ".table($i).".$b[0] IS ".($mc!=""?substr($mc,9):"''");}}}$s=array_merge($s,$Ya);if($i==""){array_unshift($Ca,"CREATE TABLE ".table($g)." (\n".implode(",\n",$s)."\n)");}elseif($s){array_unshift($Ca,"ALTER TABLE ".table($i)."\n".implode(",\n",$s));}if($i!=""&&$i!=$g){$Ca[]="ALTER TABLE ".table($i)." RENAME TO ".table($g);}if($i!=""||$Ua!=""){$Ca[]="COMMENT ON TABLE ".table($g)." IS ".$a->quote($Ua);}if($oa!=""){}foreach($Ca
as$j){if(!queries($j)){return
false;}}return
true;}function
alter_indexes($i,$s){$Oa=array();$Wa=array();foreach($s
as$b){if($b[0]!="INDEX"){$Oa[]=($b[2]?"\nDROP CONSTRAINT ":"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"")).$b[1];}elseif($b[2]){$Wa[]=$b[1];}elseif(!queries("CREATE INDEX ".idf_escape(uniqid($i."_"))." ON ".table($i)." $b[1]")){return
false;}}return((!$Oa||queries("ALTER TABLE ".table($i).implode(",",$Oa)))&&(!$Wa||queries("DROP INDEX ".implode(", ",$Wa))));}function
truncate_tables($A){return
queries("TRUNCATE ".implode(", ",array_map('table',$A)));return
true;}function
drop_views($V){return
queries("DROP VIEW ".implode(", ",array_map('table',$V)));}function
drop_tables($A){return
queries("DROP TABLE ".implode(", ",array_map('table',$A)));}function
move_tables($A,$V,$Ma){foreach($A
as$i){if(!queries("ALTER TABLE ".table($i)." SET SCHEMA ".idf_escape($Ma))){return
false;}}foreach($V
as$i){if(!queries("ALTER VIEW ".table($i)." SET SCHEMA ".idf_escape($Ma))){return
false;}}return
true;}function
trigger($g){global$a;$e=$a->query('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.$a->quote($_GET["trigger"]).' AND trigger_name = '.$a->quote($g));return$e->fetch_assoc();}function
triggers($i){global$a;$d=array();$e=$a->query("SELECT * FROM information_schema.triggers WHERE event_object_table = ".$a->quote($i));while($c=$e->fetch_assoc()){$d[$c["trigger_name"]]=array($c["condition_timing"],$c["event_manipulation"]);}return$d;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
begin(){return
queries("BEGIN");}function
insert_into($i,$o){return
queries("INSERT INTO ".table($i).($o?" (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")":"DEFAULT VALUES"));}function
last_id(){return
0;}function
explain($a,$j){return$a->query("EXPLAIN $j");}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace");}function
get_schema(){global$a;return$a->result("SELECT current_schema()");}function
set_schema($wc){global$a,$U,$Ea;$d=$a->query("SET search_path TO ".idf_escape($wc));foreach(types()as$C){if(!isset($U[$C])){$U[$C]=0;$Ea[lang(8)][]=$C;}}return$d;}function
use_sql($M){return"\connect ".idf_escape($M);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
support($Ga){return
ereg('^(comment|view|scheme|sequence|trigger|type|variables|drop_col)$',$Ga);}$Ha="pgsql";$U=array();$Ea=array();foreach(array(lang(9)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(10)=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),lang(11)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(12)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(13)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(14)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$f=>$b){$U+=$b;$Ea[$f]=array_keys($b);}$Pb=array();$qb=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$ba=array("char_length","lower","round","to_hex","to_timestamp","upper");$Hb=array("avg","count","count distinct","max","min","sum");$Eb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$ka[]="OCI8";$ka[]="PDO_OCI";if(extension_loaded("oci8")||extension_loaded("pdo_oci")){$na["oracle"]="Oracle";}if(isset($_GET["oracle"])){define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($sd,$r){if(ini_bool("html_errors")){$r=html_entity_decode(strip_tags($r));}$r=ereg_replace('^[^:]*: ','',$r);$this->error=$r;}function
connect($_,$D,$H){$this->_link=@oci_new_connect($D,$H,$_);if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$r=oci_error();$this->error=$r["message"];return
false;}function
quote($x){return"'".str_replace("'","''",$x)."'";}function
select_db($M){return
true;}function
query($j,$xa=false){$e=oci_parse($this->_link,$j);if(!$e){$r=oci_error($this->_link);$this->error=$r["message"];return
false;}set_error_handler(array($this,'_error'));$d=@oci_execute($e);restore_error_handler();if($d){if(oci_num_fields($e)){return
new
Min_Result($e);}$this->affected_rows=oci_num_rows($e);}return$d;}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$h=1){$e=$this->query($j);if(!is_object($e)||!oci_fetch($e->_result)){return
false;}return
oci_result($e->_result,$h);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($e){$this->_result=$e;}function
_convert($c){foreach((array)$c
as$f=>$b){if(is_a($b,'OCI-Lob')){$c[$f]=$b->load();}}return$c;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$w=$this->_offset++;$d=new
stdClass;$d->name=oci_field_name($this->_result,$w);$d->orgname=$d->name;$d->type=oci_field_type($this->_result,$w);$d->charsetnr=(ereg("raw|blob|bfile",$d->type)?63:0);return$d;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($_,$D,$H){}function
select_db($M){}}}function
idf_escape($z){return'"'.str_replace('"','""',$z).'"';}function
table($z){return
idf_escape($z);}function
connect(){global$n;$a=new
Min_DB;$ha=$n->credentials();if($a->connect($ha[0],$ha[1],$ha[2])){return$a;}return$a->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($j,$m,$y,$S=0,$da=" "){return" $j$m".(isset($y)?($m?" AND":$da."WHERE").($S?" rownum > $S AND":"")." rownum <= ".($y+$S):"");}function
limit1($j,$m){return" $j$m";}function
db_collation($B,$xb){global$a;return$a->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$a;return$a->result("SELECT USER FROM DUAL");}function
tables_list(){global$a;return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".$a->quote(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($T){return
array();}function
table_status($g=""){global$a;$d=array();$ub=$a->quote($g);$e=$a->query('SELECT table_name "Name", \'table\' "Engine" FROM all_tables WHERE tablespace_name = '.$a->quote(DB).($g!=""?" AND table_name = $ub":"")."
UNION SELECT view_name, 'view' FROM user_views".($g!=""?" WHERE view_name = $ub":""));while($c=$e->fetch_assoc()){if($g!=""){return$c;}$d[$c["Name"]]=$c;}return$d;}function
is_view($F){return$F["Engine"]=="view";}function
fk_support($F){return
true;}function
fields($i,$Ab=false){global$a;$d=array();$e=$a->query("SELECT * FROM all_tab_columns WHERE table_name = ".$a->quote($i)." ORDER BY column_id");if($e){while($c=$e->fetch_assoc()){$C=$c["DATA_TYPE"];$ra="$c[DATA_PRECISION],$c[DATA_SCALE]";if($ra==","){$ra=$c["DATA_LENGTH"];}$d[$c["COLUMN_NAME"]]=array("field"=>$c["COLUMN_NAME"],"full_type"=>$C.($ra?"($ra)":""),"type"=>strtolower($C),"length"=>$ra,"default"=>$c["DATA_DEFAULT"],"null"=>($c["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}}return$d;}function
indexes($i,$P=null){return
array();}function
view($g){global$a;$e=$a->query('SELECT text "select" FROM user_views WHERE view_name = '.$a->quote($g));return$e->fetch_assoc();}function
collations(){return
array();}function
information_schema($B){return
false;}function
error(){global$a;return
h($a->error);}function
exact_value($b){global$a;return$a->quote($b);}function
explain($a,$j){}function
alter_table($i,$g,$t,$Ya,$Ua,$fb,$G,$oa,$mb){$s=$Wa=array();foreach($t
as$h){$b=$h[1];if($b&&$h[0]!=""&&idf_escape($h[0])!=$b[0]){queries("ALTER TABLE ".table($i)." RENAME COLUMN ".idf_escape($h[0])." TO $b[0]");}if($b){$s[]=($i!=""?($h[0]!=""?"MODIFY (":"ADD ("):"  ").implode($b).($i!=""?")":"");}else{$Wa[]=idf_escape($h[0]);}}if($i==""){return
queries("CREATE TABLE ".table($g)." (\n".implode(",\n",$s)."\n)");}return(!$s||queries("ALTER TABLE ".table($i)."\n".implode("\n",$s)))&&(!$Wa||queries("ALTER TABLE ".table($i)." DROP (".implode(", ",$Wa).")"))&&($i==$g||queries("ALTER TABLE ".table($i)." RENAME TO ".table($g)));}function
foreign_keys($i){return
array();}function
truncate_tables($A){return
apply_queries("TRUNCATE TABLE",$A);}function
drop_views($V){return
apply_queries("DROP VIEW",$V);}function
drop_tables($A){return
apply_queries("DROP TABLE",$A);}function
begin(){return
true;}function
insert_into($i,$o){return
queries("INSERT INTO ".table($i)." (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")");}function
last_id(){return
0;}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($qd){return
true;}function
support($Ga){return
ereg("view|drop_col",$Ga);}$Ha="oracle";$U=array();$Ea=array();foreach(array(lang(9)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(10)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(11)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(12)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$f=>$b){$U+=$b;$Ea[$f]=array_keys($b);}$Pb=array();$qb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$ba=array("length","lower","round","upper");$Hb=array("avg","count","count distinct","max","min","sum");$Eb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$ka[]="SQLSRV";$ka[]="MSSQL";if(extension_loaded("sqlsrv")||extension_loaded("mssql")){$na["mssql"]="MS SQL";}if(isset($_GET["mssql"])){define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$r){$this->error.="$r[message]\n";}$this->error=rtrim($this->error);}function
connect($_,$D,$H){$this->_link=@sqlsrv_connect($_,array("UID"=>$D,"PWD"=>$H));if($this->_link){$ud=sqlsrv_server_info($this->_link);$this->server_info=$ud['SQLServerVersion'];}else{$this->_get_error();}return(bool)$this->_link;}function
quote($x){return"'".str_replace("'","''",$x)."'";}function
select_db($M){return$this->query("USE $M");}function
query($j,$xa=false){$e=sqlsrv_query($this->_link,$j);if(!$e){$this->_get_error();return
false;}return$this->store_result($e);}function
multi_query($j){$this->_result=sqlsrv_query($this->_link,$j);if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($e=null){if(!$e){$e=$this->_result;}if(sqlsrv_field_metadata($e)){return
new
Min_Result($e);}$this->affected_rows=sqlsrv_rows_affected($e);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($j,$h=0){$e=$this->query($j);if(!is_object($e)){return
false;}$c=$e->fetch_row();return$c[$h];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($e){$this->_result=$e;}function
_convert($c){foreach((array)$c
as$f=>$b){if(is_a($b,'DateTime')){$c[$f]=$b->format("Y-m-d H:i:s");}}return$c;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields){$this->_fields=sqlsrv_field_metadata($this->_result);}$h=$this->_fields[$this->_offset++];$d=new
stdClass;$d->name=$h["Name"];$d->orgname=$h["Name"];$d->type=($h["Type"]==1?254:0);return$d;}function
seek($S){for($q=0;$q<$S;$q++){sqlsrv_fetch($this->_result);}}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($_,$D,$H){$this->_link=@mssql_connect($_,$D,$H);if($this->_link){$e=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$c=$e->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$c[0]] $c[1]";}else{$this->error=mssql_get_last_message();}return(bool)$this->_link;}function
quote($x){return"'".str_replace("'","''",$x)."'";}function
select_db($M){return
mssql_select_db($M);}function
query($j,$xa=false){$e=mssql_query($j,$this->_link);if(!$e){$this->error=mssql_get_last_message();return
false;}if($e===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($e);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($j,$h=0){$e=$this->query($j);if(!is_object($e)){return
false;}return
mssql_result($e->_result,0,$h);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($e){$this->_result=$e;$this->num_rows=mssql_num_rows($e);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$d=mssql_fetch_field($this->_result);$d->orgtable=$d->table;$d->orgname=$d->name;return$d;}function
seek($S){mssql_data_seek($this->_result,$S);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($z){return"[".str_replace("]","]]",$z)."]";}function
table($z){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($z);}function
connect(){global$n;$a=new
Min_DB;$ha=$n->credentials();if($a->connect($ha[0],$ha[1],$ha[2])){return$a;}return$a->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($j,$m,$y,$S=0,$da=" "){return(isset($y)?" TOP (".($y+$S).")":"")." $j$m";}function
limit1($j,$m){return
limit($j,$m,1);}function
db_collation($B,$xb){global$a;return$a->result("SELECT collation_name FROM sys.databases WHERE name =  ".$a->quote($B));}function
engines(){return
array();}function
logged_user(){global$a;return$a->result("SELECT SUSER_NAME()");}function
tables_list(){global$a;return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".$a->quote(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($T){global$a;$d=array();foreach($T
as$B){$a->select_db($B);$d[$B]=$a->result("SELECT COUNT(*) FROM information_schema.TABLES");}return$d;}function
table_status($g=""){global$a;$d=array();$e=$a->query("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".$a->quote(get_schema()).") AND type IN ('S', 'U', 'V')".($g!=""?" AND name = ".$a->quote($g):""));while($c=$e->fetch_assoc()){if($g!=""){return$c;}$d[$c["Name"]]=$c;}return$d;}function
is_view($F){return$F["Engine"]=="VIEW";}function
fk_support($F){return
true;}function
fields($i,$Ab=false){global$a;$d=array();$e=$a->query("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".$a->quote(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".$a->quote($i));while($c=$e->fetch_assoc()){$C=$c["type"];$ra=(ereg("char|binary",$C)?$c["max_length"]:($C=="decimal"?"$c[precision],$c[scale]":""));$d[$c["name"]]=array("field"=>$c["name"],"full_type"=>$C.($ra?"($ra)":""),"type"=>$C,"length"=>$ra,"default"=>$c["default"],"null"=>$c["is_nullable"],"auto_increment"=>$c["is_identity"],"collation"=>$c["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$c["is_identity"],);}return$d;}function
indexes($i,$P=null){global$a;if(!is_object($P)){$P=$a;}$d=array();$e=$P->query("SELECT indexes.name, key_ordinal, is_unique, is_primary_key, columns.name AS column_name
FROM sys.indexes
INNER JOIN sys.index_columns ON indexes.object_id = index_columns.object_id AND indexes.index_id = index_columns.index_id
INNER JOIN sys.columns ON index_columns.object_id = columns.object_id AND index_columns.column_id = columns.column_id
WHERE OBJECT_NAME(indexes.object_id) = ".$P->quote($i));if($e){while($c=$e->fetch_assoc()){$d[$c["name"]]["type"]=($c["is_primary_key"]?"PRIMARY":($c["is_unique"]?"UNIQUE":"INDEX"));$d[$c["name"]]["lengths"]=array();$d[$c["name"]]["columns"][$c["key_ordinal"]]=$c["column_name"];}}return$d;}function
view($g){global$a;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$a->result("SELECT view_definition FROM information_schema.views WHERE table_schema = SCHEMA_NAME() AND table_name = ".$a->quote($g))));}function
collations(){$d=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$G){$d[ereg_replace("_.*","",$G)][]=$G;}return$d;}function
information_schema($B){return
false;}function
error(){global$a;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$a->error)));}function
exact_value($b){global$a;return$a->quote($b);}function
create_database($B,$G){return
queries("CREATE DATABASE ".idf_escape($B).($G?" COLLATE ".idf_escape($G):""));}function
drop_databases($T){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$T)));}function
rename_database($g,$G){if($G){queries("ALTER DATABASE ".idf_escape(DB)." COLLATE ".idf_escape($G));}queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($g));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".preg_replace('~\\D+~','',$_POST["Auto_increment"]).",1)":"");}function
alter_table($i,$g,$t,$Ya,$Ua,$fb,$G,$oa,$mb){global$a;$s=array();foreach($t
as$h){$w=idf_escape($h[0]);$b=$h[1];if(!$b){$s["DROP"][]=" COLUMN $h[0]";}else{$b[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$b[1]);if($h[0]==""){$s["ADD"][]="\n  ".implode("",$b);}else{unset($b[6]);if($w!=$b[0]){queries("EXEC sp_rename ".$a->quote(table($i).".$w").", ".$a->quote(idf_unescape($b[0])).", 'COLUMN'");}$s["ALTER COLUMN ".implode("",$b)][]="";}}}if($i==""){return
queries("CREATE TABLE ".table($g)." (".implode(",",(array)$s["ADD"])."\n)");}if($i!=$g){queries("EXEC sp_rename ".$a->quote(table($i)).", ".$a->quote($g));}foreach($s
as$f=>$b){if(!queries("ALTER TABLE ".idf_escape($g)." $f".implode(",",$b))){return
false;}}return
true;}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($i,$o){return
queries("INSERT INTO ".table($i).($o?" (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")":"DEFAULT VALUES"));}function
last_id(){global$a;return$a->result("SELECT SCOPE_IDENTITY()");}function
explain($a,$j){$a->query("SET SHOWPLAN_ALL ON");$d=$a->query($j);$a->query("SET SHOWPLAN_ALL OFF");return$d;}function
foreign_keys($i){global$a;$e=$a->query("EXEC sp_fkeys @fktable_name = ".$a->quote($i));$d=array();while($c=$e->fetch_assoc()){$J=&$d[$c["FK_NAME"]];$J["table"]=$c["PKTABLE_NAME"];$J["source"][]=$c["FKCOLUMN_NAME"];$J["target"][]=$c["PKCOLUMN_NAME"];}return$d;}function
truncate_tables($A){return
apply_queries("TRUNCATE TABLE",$A);}function
drop_views($V){return
queries("DROP VIEW ".implode(", ",array_map('table',$V)));}function
drop_tables($A){return
queries("DROP TABLE ".implode(", ",array_map('table',$A)));}function
move_tables($A,$V,$Ma){return
apply_queries("ALTER SCHEMA ".idf_escape($Ma)." TRANSFER",array_merge($A,$V));}function
trigger($g){global$a;$e=$a->query("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".$a->quote($g));$c=$e->fetch_assoc();$c["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$c["text"]);return$c;}function
triggers($i){global$a;$d=array();$e=$a->query("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".$a->quote($i));while($c=$e->fetch_assoc()){$d[$c["name"]]=array($c["Timing"],$c["Event"]);}return$d;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$a;if($_GET["ns"]!=""){return$_GET["ns"];}return$a->result("SELECT SCHEMA_NAME()");}function
set_schema($wc){return
true;}function
use_sql($M){return"USE ".idf_escape($M);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($Ga){return
ereg('^(scheme|trigger|view|drop_col)$',$Ga);}$Ha="mssql";$U=array();$Ea=array();foreach(array(lang(9)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(10)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(11)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(12)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$f=>$b){$U+=$b;$Ea[$f]=array_keys($b);}$Pb=array();$qb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$ba=array("len","lower","round","upper");$Hb=array("avg","count","count distinct","max","min","sum");$Eb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$ka[]="MySQLi";$ka[]="MySQL";$ka[]="PDO_MySQL";if(extension_loaded("mysqli")||extension_loaded("mysql")||extension_loaded("pdo_mysql")){$na=array("server"=>"MySQL")+$na;}if(!defined("DRIVER")){define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($_,$D,$H){list($Gd,$Jb)=explode(":",$_,2);return@$this->real_connect(($_!=""?$Gd:ini_get("mysqli.default_host")),("$_$D"!=""?$D:ini_get("mysqli.default_user")),("$_$D$H"!=""?$H:ini_get("mysqli.default_pw")),null,(is_numeric($Jb)?$Jb:ini_get("mysqli.default_port")),(!is_numeric($Jb)?$Jb:null));}function
result($j,$h=0){$e=$this->query($j);if(!$e){return
false;}$c=$e->fetch_array();return$c[$h];}function
quote($x){return"'".$this->escape_string($x)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($_,$D,$H){$this->_link=@mysql_connect(($_!=""?$_:ini_get("mysql.default_host")),("$_$D"!=""?$D:ini_get("mysql.default_user")),("$_$D$H"!=""?$H:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($x){return"'".mysql_real_escape_string($x,$this->_link)."'";}function
select_db($M){return
mysql_select_db($M,$this->_link);}function
query($j,$xa=false){$e=@($xa?mysql_unbuffered_query($j,$this->_link):mysql_query($j,$this->_link));if(!$e){$this->error=mysql_error($this->_link);return
false;}if($e===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($e);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$h=0){$e=$this->query($j);if(!$e){return
false;}return
mysql_result($e->_result,0,$h);}}class
Min_Result{var$num_rows,$_result;function
Min_Result($e){$this->_result=$e;$this->num_rows=mysql_num_rows($e);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$d=mysql_fetch_field($this->_result);$d->orgtable=$d->table;$d->orgname=$d->name;$d->charsetnr=($d->blob?63:0);return$d;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($_,$D,$H){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:([0-9])~',';port=\\1',$_)),$D,$H);return
true;}function
select_db($M){return$this->query("USE ".idf_escape($M));}function
query($j,$xa=false){$this->setAttribute(1000,!$xa);return
parent::query($j,$xa);}}}function
idf_escape($z){return"`".str_replace("`","``",$z)."`";}function
table($z){return
idf_escape($z);}function
connect(){global$n;$a=new
Min_DB;$ha=$n->credentials();if($a->connect($ha[0],$ha[1],$ha[2])){$a->query("SET SQL_QUOTE_SHOW_CREATE=1");$a->query("SET NAMES utf8");return$a;}return$a->error;}function
get_databases($Od=true){$d=&get_session("databases");if(!isset($d)){if($Od){restart_session();ob_flush();flush();}$d=get_vals("SHOW DATABASES");}return$d;}function
limit($j,$m,$y,$S=0,$da=" "){return" $j$m".(isset($y)?$da."LIMIT $y".($S?" OFFSET $S":""):"");}function
limit1($j,$m){return
limit($j,$m,1);}function
db_collation($B,$xb){global$a;$d=null;$Oa=$a->result("SHOW CREATE DATABASE ".idf_escape($B),1);if(preg_match('~ COLLATE ([^ ]+)~',$Oa,$k)){$d=$k[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Oa,$k)){$d=$xb[$k[1]][0];}return$d;}function
engines(){global$a;$d=array();$e=$a->query("SHOW ENGINES");while($c=$e->fetch_assoc()){if(ereg("YES|DEFAULT",$c["Support"])){$d[]=$c["Engine"];}}return$d;}function
logged_user(){global$a;return$a->result("SELECT USER()");}function
tables_list(){global$a;return
get_key_vals("SHOW".($a->server_info>=5?" FULL":"")." TABLES");}function
count_tables($T){$d=array();foreach($T
as$B){$d[$B]=count(get_vals("SHOW TABLES IN ".idf_escape($B)));}return$d;}function
table_status($g=""){global$a;$d=array();$e=$a->query("SHOW TABLE STATUS".($g!=""?" LIKE ".$a->quote(addcslashes($g,"%_")):""));while($c=$e->fetch_assoc()){if($c["Engine"]=="InnoDB"){$c["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$c["Comment"]);}if(!isset($c["Rows"])){$c["Comment"]="";}if($g!=""){return$c;}$d[$c["Name"]]=$c;}return$d;}function
is_view($F){return!isset($F["Rows"]);}function
fk_support($F){return($F["Engine"]=="InnoDB");}function
fields($i,$Ab=false){global$a;$d=array();$e=$a->query("SHOW FULL COLUMNS FROM ".table($i));if($e){while($c=$e->fetch_assoc()){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$c["Type"],$k);$d[$c["Field"]]=array("field"=>$c["Field"],"full_type"=>$c["Type"],"type"=>$k[1],"length"=>$k[2],"unsigned"=>ltrim($k[3].$k[4]),"default"=>($c["Default"]!=""||ereg("char",$k[1])?$c["Default"]:null),"null"=>($c["Null"]=="YES"),"auto_increment"=>($c["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$c["Extra"],$k)?$k[1]:""),"collation"=>$c["Collation"],"privileges"=>array_flip(explode(",",$c["Privileges"])),"comment"=>$c["Comment"],"primary"=>($c["Key"]=="PRI"),);}}return$d;}function
indexes($i,$P=null){global$a;if(!is_object($P)){$P=$a;}$d=array();$e=$P->query("SHOW INDEX FROM ".table($i));if($e){while($c=$e->fetch_assoc()){$d[$c["Key_name"]]["type"]=($c["Key_name"]=="PRIMARY"?"PRIMARY":($c["Index_type"]=="FULLTEXT"?"FULLTEXT":($c["Non_unique"]?"INDEX":"UNIQUE")));$d[$c["Key_name"]]["columns"][]=$c["Column_name"];$d[$c["Key_name"]]["lengths"][]=$c["Sub_part"];}}return$d;}function
foreign_keys($i){global$a,$zc;static$aa='`(?:[^`]|``)+`';$d=array();$Tc=$a->result("SHOW CREATE TABLE ".table($i),1);if($Tc){preg_match_all("~CONSTRAINT ($aa) FOREIGN KEY \\(((?:$aa,? ?)+)\\) REFERENCES ($aa)(?:\\.($aa))? \\(((?:$aa,? ?)+)\\)(?: ON DELETE (".implode("|",$zc)."))?(?: ON UPDATE (".implode("|",$zc)."))?~",$Tc,$Z,PREG_SET_ORDER);foreach($Z
as$k){preg_match_all("~$aa~",$k[2],$lc);preg_match_all("~$aa~",$k[5],$Ma);$d[idf_unescape($k[1])]=array("db"=>idf_unescape($k[4]!=""?$k[3]:$k[4]),"table"=>idf_unescape($k[4]!=""?$k[4]:$k[3]),"source"=>array_map('idf_unescape',$lc[0]),"target"=>array_map('idf_unescape',$Ma[0]),"on_delete"=>$k[6],"on_update"=>$k[7],);}}return$d;}function
view($g){global$a;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$a->result("SHOW CREATE VIEW ".table($g),1)));}function
collations(){global$a;$d=array();$e=$a->query("SHOW COLLATION");while($c=$e->fetch_assoc()){$d[$c["Charset"]][]=$c["Collation"];}ksort($d);foreach($d
as$f=>$b){sort($d[$f]);}return$d;}function
information_schema($B){global$a;return($a->server_info>=5&&$B=="information_schema");}function
error(){global$a;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$a->error));}function
exact_value($b){global$a;return$a->quote($b)." COLLATE utf8_bin";}function
create_database($B,$G){global$a;set_session("databases",null);return
queries("CREATE DATABASE ".idf_escape($B).($G?" COLLATE ".$a->quote($G):""));}function
drop_databases($T){set_session("databases",null);return
apply_queries("DROP DATABASE",$T,'idf_escape');}function
rename_database($g,$G){global$a;if(create_database($g,$G)){$db=array();foreach(tables_list()as$i=>$C){$db[]=table($i)." TO ".idf_escape($g).".".table($i);}if(!$db||queries("RENAME TABLE ".implode(", ",$db))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$hc=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$_a){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$_a["columns"],true)){$hc="";break;}if($_a["type"]=="PRIMARY"){$hc=" UNIQUE";}}}return" AUTO_INCREMENT$hc";}function
alter_table($i,$g,$t,$Ya,$Ua,$fb,$G,$oa,$mb){global$a;$s=array();foreach($t
as$h){$s[]=($h[1]?($i!=""?($h[0]!=""?"CHANGE ".idf_escape($h[0]):"ADD"):" ")." ".implode($h[1]).($i!=""?" $h[2]":""):"DROP ".idf_escape($h[0]));}$s=array_merge($s,$Ya);$Lc="COMMENT=".$a->quote($Ua).($fb?" ENGINE=".$a->quote($fb):"").($G?" COLLATE ".$a->quote($G):"").($oa!=""?" AUTO_INCREMENT=$oa":"").$mb;if($i==""){return
queries("CREATE TABLE ".table($g)." (\n".implode(",\n",$s)."\n) $Lc");}if($i!=$g){$s[]="RENAME TO ".table($g);}$s[]=$Lc;return
queries("ALTER TABLE ".table($i)."\n".implode(",\n",$s));}function
alter_indexes($i,$s){foreach($s
as$f=>$b){$s[$f]=($b[2]?"\nDROP INDEX ":"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"")).$b[1];}return
queries("ALTER TABLE ".table($i).implode(",",$s));}function
truncate_tables($A){return
apply_queries("TRUNCATE TABLE",$A);}function
drop_views($V){return
queries("DROP VIEW ".implode(", ",array_map('table',$V)));}function
drop_tables($A){return
queries("DROP TABLE ".implode(", ",array_map('table',$A)));}function
move_tables($A,$V,$Ma){$db=array();foreach(array_merge($A,$V)as$i){$db[]=table($i)." TO ".idf_escape($Ma).".".table($i);}return
queries("RENAME TABLE ".implode(", ",$db));}function
trigger($g){global$a;$e=$a->query("SHOW TRIGGERS WHERE `Trigger` = ".$a->quote($g));return$e->fetch_assoc();}function
triggers($i){global$a;$d=array();$e=$a->query("SHOW TRIGGERS LIKE ".$a->quote(addcslashes($i,"%_")));while($c=$e->fetch_assoc()){$d[$c["Trigger"]]=array($c["Timing"],$c["Event"]);}return$d;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($g,$C){global$a,$Jc,$Pd,$U;$Qd=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Dc="((".implode("|",array_merge(array_keys($U),$Qd)).")(?:\\s*\\(((?:[^'\")]*|$Jc)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$aa="\\s*(".($C=="FUNCTION"?"":implode("|",$Pd)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Dc";$Oa=$a->result("SHOW CREATE $C ".idf_escape($g),2);preg_match("~\\(((?:$aa\\s*,?)*)\\)".($C=="FUNCTION"?"\\s*RETURNS\\s+$Dc":"")."\\s*(.*)~is",$Oa,$k);$t=array();preg_match_all("~$aa\\s*,?~is",$k[1],$Z,PREG_SET_ORDER);foreach($Z
as$wa){$g=str_replace("``","`",$wa[2]).$wa[3];$t[]=array("field"=>$g,"type"=>strtolower($wa[5]),"length"=>preg_replace_callback("~$Jc~s",'normalize_enum',$wa[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$wa[8] $wa[7]"))),"full_type"=>$wa[4],"inout"=>strtoupper($wa[1]),"collation"=>strtolower($wa[9]),);}if($C!="FUNCTION"){return
array("fields"=>$t,"definition"=>$k[11]);}return
array("fields"=>$t,"returns"=>array("type"=>$k[12],"length"=>$k[13],"unsigned"=>$k[15],"collation"=>$k[16]),"definition"=>$k[17],);}function
routines(){global$a;$d=array();$e=$a->query("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".$a->quote(DB));while($c=$e->fetch_assoc()){$d[]=$c;}return$d;}function
begin(){return
queries("BEGIN");}function
insert_into($i,$o){return
queries("INSERT INTO ".table($i)." (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")");}function
insert_update($i,$o){foreach($o
as$f=>$b){$o[$f]="$f = $b";}$va=implode(", ",$o);return
queries("INSERT INTO ".table($i)." SET $va ON DUPLICATE KEY UPDATE $va");}function
last_id(){global$a;return$a->result("SELECT LAST_INSERT_ID()");}function
explain($a,$j){return$a->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($wc){return
true;}function
create_sql($i,$oa){global$a;$d=$a->result("SHOW CREATE TABLE ".table($i),1);if(!$oa){$d=preg_replace('~ AUTO_INCREMENT=[0-9]+~','',$d);}return$d;}function
truncate_sql($i){return"TRUNCATE ".table($i);}function
use_sql($M){return"USE ".idf_escape($M);}function
trigger_sql($i,$jc){global$a;$e=$a->query("SHOW TRIGGERS LIKE ".$a->quote(addcslashes($i,"%_")));$d="";if($e->num_rows){while($c=$e->fetch_assoc()){$d.="\n".($jc=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($c["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($c["Trigger"])." $c[Timing] $c[Event] ON ".table($c["Table"])." FOR EACH ROW\n$c[Statement];;\n";}}return$d;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($Ga){global$a;return!ereg("scheme|sequence|type".($a->server_info<5.1?"|event|partitioning".($a->server_info<5?"|view|routine|trigger":""):""),$Ga);}$Ha="sql";$U=array();$Ea=array();foreach(array(lang(9)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(10)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(11)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(12)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(15)=>array("enum"=>65535,"set"=>64),)as$f=>$b){$U+=$b;$Ea[$f]=array_keys($b);}$Pb=array("unsigned","zerofill","unsigned zerofill");$qb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$ba=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Hb=array("avg","count","count distinct","group_concat","max","min","sum");$Eb=array(array("char"=>"md5/sha1/password/encrypt/uuid","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(SID&&!$_COOKIE?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$Gb="3.0.0-dev";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return
lang(16);}function
credentials(){return
array();}function
permanentLogin(){return
password_file();}function
database(){global$a;$Yb=get_databases(false);return(!$Yb?$a->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$Yb[(information_schema($Yb[0])?1:0)]);}function
loginForm(){echo'<table cellspacing="0">
<tr><th>',lang(17),'<td><input type="hidden" name="driver" value="server"><input type="hidden" name="server" value=""><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>',lang(18),'<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".lang(19)."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],lang(20))."\n";}function
login($Td,$H){return
true;}function
tableName($tb){return
h($tb["Comment"]!=""?$tb["Comment"]:$tb["Name"]);}function
fieldName($h,$qa=0){return
h($h["comment"]!=""?$h["comment"]:$h["field"]);}function
selectLinks($tb,$o=""){$u=$tb["Name"];if(isset($o)){echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($u).$o).'">'.lang(21)."</a>\n";}echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".lang(22)."'>&gt;&gt;</a>\n";}function
backwardKeys($i,$Hd){global$a;$d=array();$e=$a->query("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".$a->quote($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".$a->quote($this->database())."
AND REFERENCED_TABLE_NAME = ".$a->quote($i)."
ORDER BY ORDINAL_POSITION");if($e){while($c=$e->fetch_assoc()){$d[$c["TABLE_NAME"]]["keys"][$c["CONSTRAINT_NAME"]][$c["COLUMN_NAME"]]=$c["REFERENCED_COLUMN_NAME"];}foreach($d
as$f=>$b){$g=$this->tableName(table_status($f));if($g!=""){$ub=preg_quote($Hd);$da="(:|\\s*-)?\\s+";$d[$f]["name"]=(preg_match("(^$ub$da(.+)|^(.+?)$da$ub\$)",$g,$k)?$k[2].$k[3]:$g);}else{unset($d[$f]);}}}return$d;}function
backwardKeysPrint($gd,$c){if($gd){echo"<td>";foreach($gd
as$i=>$Zc){foreach($Zc["keys"]as$Ia){$v=ME.'select='.urlencode($i);$q=0;foreach($Ia
as$w=>$b){$v.=where_link($q++,$w,$c[$b]);}echo"<a href='".h($v)."'>".h($Zc["name"])."</a>";$v=ME.'edit='.urlencode($i);foreach($Ia
as$w=>$b){$v.="&set".urlencode("[".bracket_escape($w)."]")."=".urlencode($c[$b]);}echo"<a href='".h($v)."' title='".lang(21)."'>+</a> ";}}}}function
selectQuery($j){return"<!--\n".str_replace("--","--><!--",$j)."\n-->\n";}function
rowDescription($i){foreach(fields($i)as$h){if($h["type"]=="varchar"){return
idf_escape($h["field"]);}}return"";}function
rowDescriptions($O,$nb){$d=$O;foreach($O[0]as$f=>$b){foreach((array)$nb[$f]as$ta){if(count($ta["source"])==1){$X=idf_escape($ta["target"][0]);$g=$this->rowDescription($ta["table"]);if($g!=""){$bd=array();foreach($O
as$c){$bd[$c[$f]]=exact_value($c[$f]);}$gc=$this->_values[$ta["table"]];if(!$gc){$gc=get_key_vals("SELECT $X, $g FROM ".idf_escape($ta["table"])." WHERE $X IN (".implode(", ",$bd).")");}foreach($O
as$K=>$c){if(isset($c[$f])){$d[$K][$f]=(string)$gc[$c[$f]];}}break;}}}}return$d;}function
selectVal($b,$v,$h){$d=($b=="<i>NULL</i>"?"&nbsp;":$b);if(ereg('binary|blob|bytea',$h["type"])&&!is_utf8($b)){$d=lang(23,strlen($b));if(ereg("^(GIF|\xFF\xD8\xFF|\x89\x50\x4E\x47\x0D\x0A\x1A\x0A)",$b)){$d="<img src='$v' alt='$d'>";}}if($h["full_type"]=="tinyint(1)"&&$d!="&nbsp;"){$d='<img src="'.($b?"".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.0-dev":"".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=cross.gif&amp;version=3.0.0-dev").'" alt="'.h($b).'">';}if($v){$d="<a href='$v'>$d</a>";}if(!$v&&$h["full_type"]!="tinyint(1)"&&ereg('int|float|double|decimal',$h["type"])){$d="<div class='number'>$d</div>";}elseif(ereg('date',$h["type"])){$d="<div class='datetime'>$d</div>";}return$d;}function
editVal($b,$h){if(ereg('date|timestamp',$h["type"])&&isset($b)){return
preg_replace('~^([0-9]{2}([0-9]+))-(0?([0-9]+))-(0?([0-9]+))~',lang(24),$b);}return$b;}function
selectColumnsPrint($E,$I){}function
selectSearchPrint($m,$I,$R){$m=(array)$_GET["where"];echo'<fieldset><legend>'.lang(25)."</legend><div>\n";$fc=array();foreach($m
as$f=>$b){$fc[$b["col"]]=$f;}$q=0;foreach(fields($_GET["select"])as$g=>$h){if(ereg("enum",$h["type"])){$Ka=$I[$g];$f=$fc[$g];$q--;echo"<div>".h($Ka)."<input type='hidden' name='where[$q][col]' value='".h($g)."'>:";enum_input("checkbox","where[$q][val][]",$h,(array)$m[$f]["val"]);echo"</div>\n";unset($I[$g]);}}foreach($I
as$g=>$Ka){$Aa=$this->_foreignKeyOptions($_GET["select"],$g);if($Aa){$f=$fc[$g];$q--;echo"<div>".h($Ka)."<input type='hidden' name='where[$q][col]' value='".h($g)."'><input type='hidden' name='where[$q][op]' value='='>: <select name='where[$q][val]'>".optionlist($Aa,$m[$f]["val"],true)."</select></div>\n";unset($I[$g]);}}$q=0;foreach($m
as$b){if(($b["col"]==""||$I[$b["col"]])&&"$b[col]$b[val]"!=""){echo"<div><select name='where[$q][col]'><option value=''>(".lang(26).")".optionlist($I,$b["col"],true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators,$b["op"]),"<input name='where[$q][val]' value='".h($b["val"])."'></div>\n";$q++;}}echo"<div><select name='where[$q][col]' onchange='selectAddRow(this);'><option value=''>(".lang(26).")".optionlist($I,null,true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators),"<input name='where[$q][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($qa,$I,$R){$dc=array();foreach($R
as$f=>$_a){$qa=array();foreach($_a["columns"]as$b){$qa[]=$this->fieldName(array("field"=>$b,"comment"=>$I[$b]));}if(count(array_filter($qa,'strlen'))>1&&$f!="PRIMARY"){$dc[$f]=implode(", ",$qa);}}if($dc){echo'<fieldset><legend>'.lang(27)."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$dc,$_GET["index_order"],true)."</select>","</div></fieldset>\n";}}function
selectLimitPrint($y){echo"<fieldset><legend>".lang(28)."</legend><div>";echo
html_select("limit",array("","30","100"),$y),"</div></fieldset>\n";}function
selectLengthPrint($eb){}function
selectActionPrint(){echo"<fieldset><legend>".lang(29)."</legend><div>","<input type='submit' value='".lang(30)."'>","</div></fieldset>\n";}function
selectEmailPrint($Lb,$I){if($Lb){echo'<fieldset><legend><a href="#fieldset-email" onclick="return !toggle(\'fieldset-email\');">'.lang(31)."</a></legend><div id='fieldset-email'".($_POST["email_append"]?"":" class='hidden'").">\n","<p>".lang(32).": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",lang(33).": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea><br>\n",html_select("email_addition",$I,$_POST["email_addition"])."<input type='submit' name='email_append' value='".lang(34)."'>\n";echo"<p>".lang(35).": <input type='file' name='email_files[]' onchange=\"var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el); this.onchange = function () { };\">","<p>".(count($Lb)==1?'<input type="hidden" name="email_field" value="'.h(key($Lb)).'">':html_select("email_field",$Lb)),"<input type='submit' name='email' value='".lang(36)."' onclick=\"return this.form['delete'].onclick();\">\n","</div></fieldset>\n";}}function
selectColumnsProcess($I,$R){return
array(array(),array());}function
selectSearchProcess($t,$R){$d=array();foreach((array)$_GET["where"]as$f=>$m){$Ja=$m["col"];$Bb=$m["op"];$b=$m["val"];if(($f<0?"":$Ja).$b!=""){$Cb=array();foreach(($Ja!=""?array($Ja=>$t[$Ja]):$t)as$g=>$h){if($Ja!=""||is_numeric($b)||!ereg('int|float|double|decimal',$h["type"])){if($Ja!=""&&$h["type"]=="enum"){$Cb[]=idf_escape($g)." IN (".implode(", ",array_map('intval',$b)).")";}else{$ld=ereg('char|text|enum|set',$h["type"]);$l=$this->processInput($h,($ld&&ereg('^[^%]+$',$b)?"%$b%":$b));$Cb[]=idf_escape($g).($l=="NULL"?" IS".($Bb==">="?" NOT":""):(in_array($Bb,$this->operators)?" $Bb":($Bb!="="&&$ld?" LIKE":" =")))." $l";}}}$d[]=($Cb?"(".implode(" OR ",$Cb).")":"0");}}return$d;}function
selectOrderProcess($t,$R){if($_GET["order"]){return
array(idf_escape($_GET["order"][0]).(isset($_GET["desc"][0])?" DESC":""));}$bc=$_GET["index_order"];foreach(($bc!=""?array($R[$bc]):$R)as$_a){if($bc!=""||$_a["type"]=="INDEX"){$Ka=false;foreach($_a["columns"]as$b){if(ereg('date|timestamp',$t[$b]["type"])){$Ka=true;break;}}$d=array();foreach($_a["columns"]as$b){$d[]=idf_escape($b).($Ka?" DESC":"");}return$d;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($m,$nb){global$a;if($_POST["email_append"]){return
true;}if($_POST["email"]){$ed=0;if($_POST["all"]||$_POST["check"]){$h=idf_escape($_POST["email_field"]);$Mb=$_POST["email_subject"];$ma=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Mb.$ma",$Z);$e=$a->query("SELECT DISTINCT $h".($Z[1]?", ".implode(", ",array_map('idf_escape',array_unique($Z[1]))):"")." FROM ".idf_escape($_GET["select"])." WHERE $h IS NOT NULL AND $h != ''".($m?" AND ".implode(" AND ",$m):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$O=array();while($c=$e->fetch_assoc()){$O[]=$c;}$t=fields($_GET["select"]);foreach($this->rowDescriptions($O,$nb)as$c){$ac=array('{\\'=>'{');foreach($Z[1]as$b){$ac['{$'."$b}"]=$this->editVal($c[$b],$t[$b]);}$jb=$c[$_POST["email_field"]];if(is_email($jb)&&send_email($jb,strtr($Mb,$ac),strtr($ma,$ac),$_POST["email_from"],$_FILES["email_files"])){$ed++;}}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(37,$ed));}return
false;}function
messageQuery($j){return"<!--\n".str_replace("--","--><!--",$j)."\n-->";}function
editFunctions($h){$d=array(""=>($h["null"]||$h["auto_increment"]||$h["full_type"]=="tinyint(1)"?"":"*"));if(ereg('date|time',$h["type"])){$d["now"]=lang(38);}if(eregi('_(md5|sha1)$',$h["field"],$k)){$d[]=strtolower($k[1]);}return$d;}function
editInput($i,$h,$Na,$l){if($h["type"]=="enum"){return($h["null"]?"<input type='radio'$Na value=''".($l||isset($_GET["select"])?"":" checked").">":"");}$Aa=$this->_foreignKeyOptions($i,$h["field"]);if($Aa){return"<select$Na>".optionlist($Aa,$l,true)."</select>";}if($h["full_type"]=="tinyint(1)"){return'<input type="checkbox" value="'.h($l?$l:1).'"'.($l?' checked':'')."$Na>";}if(ereg('date|timestamp',$h["type"])){return"<input value='".h($l)."'$Na> (".lang(39).")";}return'';}function
processInput($h,$l,$N=""){global$a;if($N=="now"){return"$N()";}$d=$l;if(ereg('date|timestamp',$h["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>[0-9]*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>[0-9]{1,2})',preg_quote(lang(24)))).'(.*))',$l,$k)){$d=($k["p1"]!=""?$k["p1"]:($k["p2"]!=""?($k["p2"]<70?20:19).$k["p2"]:gmdate("Y")))."-$k[p3]$k[p4]-$k[p5]$k[p6]".end($k);}$d=$a->quote($d);if(!ereg('varchar|text',$h["type"])&&$h["full_type"]!="tinyint(1)"&&$l==""){$d="NULL";}elseif(ereg('^(md5|sha1)$',$N)){$d="$N($d)";}return$d;}function
dumpOutput($E,$l=""){return"";}function
dumpFormat($E,$l=""){return
html_select("format",array('csv'=>'CSV,','csv;'=>'CSV;'),$l,$E);}function
navigation($Rb){global$Gb,$ua;echo'<h1>',$this->name(),'
<a href="http://www.adminer.org/" id="h1"></a>
<span class="version">',$Gb,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($Gb,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Rb=="auth"){$Va=true;foreach((array)$_SESSION["passwords"]["server"][""]as$D=>$H){if(isset($H)){if($Va){echo"<p>\n";$Va=false;}echo"<a href='".h(auth_url("server","",$D))."'>".h($D)."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="hidden" name="token" value="',$ua,'">
<input type="submit" name="logout" value="',lang(40),'">
</p>
</form>
';if($Rb!="db"){$F=table_status();if(!$F){echo"<p class='message'>".lang(4)."\n";}else{$this->tablesPrint($F);}}}}function
tablesPrint($A){echo"<p id='tables'>\n";foreach($A
as$c){$g=$this->tableName($c);if(isset($c["Engine"])&&$g!=""){echo"<a href='".h(ME).'select='.urlencode($c["Name"])."'>".bold($g,$_GET["select"]==$c["Name"])."</a><br>\n";}}}function
_foreignKeyOptions($i,$w){global$a;$nb=column_foreign_keys($i);foreach((array)$nb[$w]as$ta){if(count($ta["source"])==1){$X=idf_escape($ta["target"][0]);$g=$this->rowDescription($ta["table"]);if($g!=""){$d=&$this->_values[$ta["table"]];if(!isset($d)){$F=table_status($ta["table"]);$d=($F["Rows"]>1000?array():array(""=>"")+get_key_vals("SELECT $X, $g FROM ".idf_escape($ta["table"])." ORDER BY 2"));}return$d;}}}}}$n=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($Sc,$r="",$pb=array(),$Fc=""){global$za,$Gb,$hb,$n,$a,$na;header("Content-Type: text/html; charset=utf-8");header("X-Frame-Options: deny");$Gc=$Sc.($Fc!=""?": ".h($Fc):"");$ob=($hb?"https":"http");echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="',$za,'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Gc.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$n->name(),'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=favicon.ico&amp;version=3.0.0-dev",'">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=default.css&amp;version=3.0.0-dev";echo'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body onload="bodyLoad(\'',(is_object($a)?substr($a->server_info,0,3):""),'\', \'',$ob,'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$ob');"),'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=functions.js&amp;version=3.0.0-dev",'"></script>

<div id="content">
';if(isset($pb)){$v=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($v?h($v):".").'">'.$na[DRIVER].'</a> &raquo; ';$v=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$_=(SERVER!=""?h(SERVER):lang(41));if($pb===false){echo"$_\n";}else{echo"<a href='".($v?h($v):".")."'>$_</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($pb))){echo'<a href="'.h($v."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($pb)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($pb
as$f=>$b){$Ka=(is_array($b)?$b[1]:$b);if($Ka!=""){echo'<a href="'.h(ME."$f=").urlencode(is_array($b)?$b[0]:$b).'">'.h($Ka).'</a> &raquo; ';}}}echo"$Sc\n";}}echo"<h2>$Gc</h2>\n";restart_session();if($_SESSION["messages"]){echo"<div class='message'>".implode("</div>\n<div class='message'>",$_SESSION["messages"])."</div>\n";$_SESSION["messages"]=array();}$T=&get_session("databases");if(DB!=""&&$T&&!in_array(DB,$T,true)){$T=null;}if($r){echo"<div class='error'>$r</div>\n";}}function
page_footer($Rb=""){global$n;echo'</div>

';switch_lang();echo'<div id="menu">
';$n->navigation($Rb);echo'</div>
';session_write_close();ob_flush();flush();}function
int32($K){while($K>=2147483648){$K-=4294967296;}while($K<=-2147483649){$K+=4294967296;}return(int)$K;}function
long2str($p,$ec){$ab='';foreach($p
as$b){$ab.=pack('V',$b);}if($ec){return
substr($ab,0,end($p));}return$ab;}function
str2long($ab,$ec){$p=array_values(unpack('V*',str_pad($ab,4*ceil(strlen($ab)/4),"\0")));if($ec){$p[]=strlen($ab);}return$p;}function
xxtea_mx($fa,$ca,$ja,$la){return
int32((($fa>>5&0x7FFFFFF)^$ca<<2)+(($ca>>3&0x1FFFFFFF)^$fa<<4))^int32(($ja^$ca)+($la^$fa));}function
encrypt_string($vb,$f){if($vb==""){return"";}$f=array_values(unpack("V*",pack("H*",md5($f))));$p=str2long($vb,true);$K=count($p)-1;$fa=$p[$K];$ca=$p[0];$Wb=floor(6+52/($K+1));$ja=0;while($Wb-->0){$ja=int32($ja+0x9E3779B9);$zb=$ja>>2&3;for($ea=0;$ea<$K;$ea++){$ca=$p[$ea+1];$Sa=xxtea_mx($fa,$ca,$ja,$f[$ea&3^$zb]);$fa=int32($p[$ea]+$Sa);$p[$ea]=$fa;}$ca=$p[0];$Sa=xxtea_mx($fa,$ca,$ja,$f[$ea&3^$zb]);$fa=int32($p[$K]+$Sa);$p[$K]=$fa;}return
long2str($p,false);}function
decrypt_string($vb,$f){if($vb==""){return"";}$f=array_values(unpack("V*",pack("H*",md5($f))));$p=str2long($vb,false);$K=count($p)-1;$fa=$p[$K];$ca=$p[0];$Wb=floor(6+52/($K+1));$ja=int32($Wb*0x9E3779B9);while($ja){$zb=$ja>>2&3;for($ea=$K;$ea>0;$ea--){$fa=$p[$ea-1];$Sa=xxtea_mx($fa,$ca,$ja,$f[$ea&3^$zb]);$ca=int32($p[$ea]-$Sa);$p[$ea]=$ca;}$fa=$p[$K];$Sa=xxtea_mx($fa,$ca,$ja,$f[$ea&3^$zb]);$ca=int32($p[0]-$Sa);$p[0]=$ca;$ja=int32($ja-0x9E3779B9);}return
long2str($p,true);}$a='';if(!$na){page_header(lang(42),lang(43,implode(", ",$ka)),null);page_footer("auth");exit;}$ua=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$Pa=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$b){list($f)=explode(":",$b);$Pa[$f]=$b;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["passwords"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$f=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Ub=$n->permanentLogin();$Pa[$f]="$f:".base64_encode($Ub?encrypt_string($_POST["password"],$Ub):"");cookie("adminer_permanent",implode(" ",$Pa));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($ua&&$_POST["token"]!=$ua){page_header(lang(40),lang(44));page_footer("db");exit;}else{foreach(array("passwords","databases","history")as$f){set_session($f,null);}$f=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Pa[$f]){unset($Pa[$f]);cookie("adminer_permanent",implode(" ",$Pa));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(45));}}elseif($Pa&&!$_SESSION["passwords"]){session_regenerate_id();$Ub=$n->permanentLogin();foreach($Pa
as$f=>$b){list(,$Rd)=explode(":",$b);list($Fb,$_,$D)=array_map('base64_decode',explode("-",$f));$_SESSION["passwords"][$Fb][$_][$D]=decrypt_string($Rd,$Ub);}}function
auth_error($Kc=null){global$a,$n,$ua;$Vb=session_name();$r="";if(!$_COOKIE[$Vb]&&$_GET[$Vb]&&ini_bool("session.use_only_cookies")){$r=lang(46);}elseif(isset($_GET["username"])){if(($_COOKIE[$Vb]||$_GET[$Vb])&&!$ua){$r=lang(47);}else{$H=&get_session("passwords");if(isset($H)){$r=h($Kc?$Kc->getMessage():(is_string($a)?$a:lang(48)));$H=null;}}}page_header(lang(19),$r,null);echo"<form action='' method='post'>\n";$n->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])&&class_exists("Min_DB")){$a=connect();}if(is_string($a)||!$n->login($_GET["username"],get_session("passwords"))){auth_error();exit;}$ua=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$ua;}$r=($_POST?($_POST["token"]==$ua?"":lang(44)):($_SERVER["REQUEST_METHOD"]!="POST"?"":lang(49,'"post_max_size"')));$a->select_db($n->database());function
email_header($Dd){return"=?UTF-8?B?".base64_encode($Dd)."?=";}function
send_email($jb,$Mb,$ma,$cb="",$Sb=array()){$W=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$ma=str_replace("\n",$W,wordwrap(str_replace("\r","","$ma\n")));$Ob=uniqid("boundary");$Qb="";foreach($Sb["error"]as$f=>$b){if(!$b){$Qb.="--$Ob$W"."Content-Type: ".str_replace("\n","",$Sb["type"][$f]).$W."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Sb["name"][$f])."\"$W"."Content-Transfer-Encoding: base64$W$W".chunk_split(base64_encode(file_get_contents($Sb["tmp_name"][$f])),76,$W).$W;}}$Ac="";$Xb="Content-Type: text/plain; charset=utf-8$W"."Content-Transfer-Encoding: 8bit";if($Qb){$Qb.="--$Ob--$W";$Ac="--$Ob$W$Xb$W$W";$Xb="Content-Type: multipart/mixed; boundary=\"$Ob\"";}$Xb.=$W."MIME-Version: 1.0$W"."X-Mailer: Adminer Editor".($cb?$W."From: ".str_replace("\n","",$cb):"");return
mail($jb,email_header($Mb),$Ac.$ma.$Qb,$Xb);}function
dump_table($i){echo"\xef\xbb\xbf";}function
dump_data($i,$jc,$E=""){global$a;$e=$a->query(($E?$E:"SELECT * FROM ".idf_escape($i)),1);if($e){while($c=$e->fetch_assoc()){dump_csv($c);}}}function
dump_headers($Vc){$Q=($Vc!=""?friendly_url($Vc):"dump");$ad="csv";header("Content-Type: text/csv; charset=utf-8");header("Content-Disposition: attachment; filename=$Q.$ad");session_write_close();return$ad;}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$zc=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$nd=" onclick=\"return confirm('".lang(50)."');\"";$na[DRIVER]=lang(19);if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["download"])){$u=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$u-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$a->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($u)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$u=$_GET["edit"];$m=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$va=(isset($_GET["select"])?$_POST["edit"]:$m);$t=fields($u);foreach($t
as$g=>$h){if(!isset($h["privileges"][$va?"update":"insert"])||$n->fieldName($h)==""){unset($t[$g]);}}if($_POST&&!$r&&!isset($_GET["select"])){$ga=$_POST["referer"];if($_POST["insert"]){$ga=($va?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$ga)){$ga=ME."select=".urlencode($u);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($u),$m),$ga,lang(51));}else{$o=array();foreach($t
as$g=>$h){$b=process_input($h);if($b!==false&&$b!==null){$o[idf_escape($g)]=($va?"\n".idf_escape($g)." = $b":$b);}}if($va){if(!$o){redirect($ga);}query_redirect("UPDATE".limit1(table($u)." SET".implode(",",$o),"\nWHERE $m"),$ga,lang(52));}else{$e=insert_into($u,$o);$Uc=($e?last_id():0);queries_redirect($ga,lang(53,($Uc?" $Uc":"")),$e);}}}$_b=$n->tableName(table_status($u));page_header(($va?lang(54):lang(34)),$r,array("select"=>array($u,$_b)),$_b);$c=null;if($_POST["save"]){$c=(array)$_POST["fields"];}elseif($m){$E=array();foreach($t
as$g=>$h){if(isset($h["privileges"]["select"])){$E[]=($_POST["clone"]&&$h["auto_increment"]?"'' AS ":(ereg("enum|set",$h["type"])?"1*".idf_escape($g)." AS ":"")).idf_escape($g);}}$c=array();if($E){$e=$a->query("SELECT".limit(implode(", ",$E)." FROM ".table($u)," WHERE $m",(isset($_GET["select"])?2:1)));$c=$e->fetch_assoc();if(isset($_GET["select"])&&$e->fetch_assoc()){$c=null;}}}echo'
<form action="" method="post" enctype="multipart/form-data">
';if($t){echo"<table cellspacing='0'>\n";foreach($t
as$g=>$h){echo"<tr><th>".$n->fieldName($h);$bb=$_GET["set"][bracket_escape($g)];$l=(isset($c)?($c[$g]!=""&&ereg("enum|set",$h["type"])?intval($c[$g]):$c[$g]):(!$va&&$h["auto_increment"]?"":(isset($_GET["select"])?false:(isset($bb)?$bb:$h["default"]))));if(!$_POST["save"]&&is_string($l)){$l=$n->editVal($l,$h);}$N=($_POST["save"]?(string)$_POST["function"][$g]:($m&&$h["on_update"]=="CURRENT_TIMESTAMP"?"now":($l===false?null:(isset($l)?'':'NULL'))));if($h["type"]=="timestamp"&&$l=="CURRENT_TIMESTAMP"){$l="";$N="now";}input($h,$l,$N);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$ua,'">
<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
';if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}if($t){echo"<input type='submit' value='".lang(55)."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($va?lang(56):lang(57))."'>\n";}}if($va){echo"<input type='submit' name='delete' value='".lang(58)."'$nd>\n";}echo'</form>
';}elseif(isset($_GET["select"])){$u=$_GET["select"];$F=table_status($u);$R=indexes($u);$t=fields($u,1);$wb=column_foreign_keys($u);$Bc=array();$I=array();$eb=null;foreach($t
as$f=>$h){$g=$n->fieldName($h);if(isset($h["privileges"]["select"])&&$g!=""){$I[$f]=html_entity_decode(strip_tags($g));if(ereg('text|lob',$h["type"])){$eb=$n->selectLengthProcess();}}$Bc+=$h["privileges"];}list($E,$Ba)=$n->selectColumnsProcess($I,$R);$m=$n->selectSearchProcess($t,$R);$qa=$n->selectOrderProcess($t,$R);$y=$n->selectLimitProcess();$cb=($E?implode(", ",$E):"*")."\nFROM ".table($u);$cc=($Ba&&count($Ba)<count($E)?"\nGROUP BY ".implode(", ",$Ba):"").($qa?"\nORDER BY ".implode(", ",$qa):"");if($_POST&&!$r){$id="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Za=($R["PRIMARY"]?($E?array_flip($R["PRIMARY"]["columns"]):array()):null);foreach($E
as$f=>$b){$b=$_GET["columns"][$f];if(!$b["fun"]){unset($Za[$b["col"]]);}}if($_POST["export"]){dump_headers($u);dump_table($u,"");if($_POST["format"]!="sql"){$c=array_keys($t);if($E){$c=array();foreach($E
as$b){$c[]=(ereg('^`.*`$',$b)?idf_unescape($b):$b);}}dump_csv($c);}if(!is_array($_POST["check"])||$Za===array()){$yc=$m;if(is_array($_POST["check"])){$yc[]="($id)";}dump_data($u,"INSERT","SELECT $cb".($yc?"\nWHERE ".implode(" AND ",$yc):"").$cc);}else{$jd=array();foreach($_POST["check"]as$b){$jd[]="(SELECT".limit($cb,"\nWHERE ".($m?implode(" AND ",$m)." AND ":"").where_check($b).$cc,1).")";}dump_data($u,"INSERT",implode(" UNION ALL ",$jd));}exit;}if(!$n->selectEmailProcess($m,$wb)){if($_POST["save"]||$_POST["delete"]){$e=true;$La=0;$j=table($u);$o=array();if(!$_POST["delete"]){foreach($I
as$g=>$b){$b=process_input($t[$g]);if($b!==null){if($_POST["clone"]){$o[idf_escape($g)]=($b!==false?$b:idf_escape($g));}elseif($b!==false){$o[]=idf_escape($g)." = $b";}}}$j.=($_POST["clone"]?" (".implode(", ",array_keys($o)).")\nSELECT ".implode(", ",$o)."\nFROM ".table($u):" SET\n".implode(",\n",$o));}if($_POST["delete"]||$o){$Ib="UPDATE";if($_POST["delete"]){$Ib="DELETE";$j="FROM $j";}if($_POST["clone"]){$Ib="INSERT";$j="INTO $j";}if($_POST["all"]||($Za===array()&&$_POST["check"])||count($Ba)<count($E)){$e=queries($Ib." $j".($_POST["all"]?($m?"\nWHERE ".implode(" AND ",$m):""):"\nWHERE $id"));$La=$a->affected_rows;}else{foreach((array)$_POST["check"]as$b){$e=queries($Ib.limit1($j,"\nWHERE ".where_check($b)));if(!$e){break;}$La+=$a->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(59,$La),$e);}elseif(!$_POST["import"]){if(!$_POST["val"]){$r=lang(60);}else{$e=true;$La=0;foreach($_POST["val"]as$Fa=>$c){$o=array();foreach($c
as$f=>$b){$f=bracket_escape($f,1);$o[]=idf_escape($f)." = ".$n->processInput($t[$f],$b);}$e=queries("UPDATE".limit1(table($u)." SET ".implode(", ",$o)," WHERE ".where_check($Fa).($m?" AND ".implode(" AND ",$m):"")));if(!$e){break;}$La+=$a->affected_rows;}queries_redirect(remove_from_uri(),lang(59,$La),$e);}}elseif(is_string($Y=get_file("csv_file",true))){$Y=preg_replace("~^\xEF\xBB\xBF~",'',$Y);$e=true;$Ia=array_keys($t);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Y,$Z);$La=count($Z[0]);begin();$da=($_POST["separator"]=="csv"?",":";");foreach($Z[0]as$f=>$b){preg_match_all("~((\"[^\"]*\")+|[^$da]*)$da~",$b.$da,$kc);if(!$f&&!array_diff($kc[1],$Ia)){$Ia=$kc[1];$La--;}else{$o=array();foreach($kc[1]as$q=>$Ja){$o[idf_escape($Ia[$q])]=($Ja==""&&$t[$Ia[$q]]["null"]?"NULL":$a->quote(str_replace('""','"',preg_replace('~^"|"$~','',$Ja))));}$e=insert_update($u,$o);if(!$e){break;}}}if($e){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(61,$La),$e);queries("ROLLBACK");}else{$r=upload_error($Y);}}}$_b=$n->tableName($F);page_header(lang(30).": $_b",$r);session_write_close();$o=null;if(isset($Bc["insert"])){$o="";foreach((array)$_GET["where"]as$b){if(count($wb[$b["col"]])==1&&($b["op"]=="="||(!$b["op"]&&!ereg('[_%]',$b["val"])))){$o.="&set".urlencode("[".bracket_escape($b["col"])."]")."=".urlencode($b["val"]);}}}$n->selectLinks($F,$o);if(!$I){echo"<p class='error'>".lang(62).($t?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($u).'">',"</div>\n";$n->selectColumnsPrint($E,$I);$n->selectSearchPrint($m,$I,$R);$n->selectOrderPrint($qa,$I,$R);$n->selectLimitPrint($y);$n->selectLengthPrint($eb);$n->selectActionPrint($eb);echo"</form>\n";$L=$_GET["page"];if($L=="last"){$sa=$a->result("SELECT COUNT(*) FROM ".table($u).($m?" WHERE ".implode(" AND ",$m):""));$L=floor(($sa-1)/$y);}$j="SELECT".limit((intval($y)&&$Ba&&count($Ba)<count($E)&&$Ha=="sql"?"SQL_CALC_FOUND_ROWS ":"").$cb,($m?"\nWHERE ".implode(" AND ",$m):"").$cc,($y!=""?intval($y):null),($L?$y*$L:0),"\n");echo$n->selectQuery($j);$e=$a->query($j);if(!$e){echo"<p class='error'>".error()."\n";}else{if($Ha=="mssql"){$e->seek($y*$L);}$Db=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$O=array();while($c=$e->fetch_assoc()){$O[]=$c;}if($_GET["page"]!="last"){$sa=(intval($y)&&$Ba&&count($Ba)<count($E)?($Ha=="sql"?$a->result(" SELECT FOUND_ROWS()"):$a->result("SELECT COUNT(*) FROM ($j) x")):count($O));}if(!$O){echo"<p class='message'>".lang(63)."\n";}else{$fd=$n->backwardKeys($u,$_b);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n","<thead><tr><td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(64)."</a>";$oc=array();$ba=array();reset($E);$qa=1;foreach($O[0]as$f=>$b){$b=$_GET["columns"][key($E)];$h=$t[$E?$b["col"]:$f];$g=($h?$n->fieldName($h,$qa):"*");if($g!=""){$qa++;$oc[$f]=$g;echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($f).($_GET["order"][0]==$f&&!$_GET["desc"][0]?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($b["fun"],$g)."</a>";}$ba[$f]=$b["fun"];next($E);}$pc=array();if($_GET["modify"]){foreach($O
as$c){foreach($c
as$f=>$b){$pc[$f]=max($pc[$f],min(40,strlen(utf8_decode($b))));}}}echo($fd?"<th>".lang(65):"")."</thead>\n";foreach($n->rowDescriptions($O,$wb)as$K=>$c){$uc=unique_array($O[$K],$R);$Fa="";foreach($uc
as$f=>$b){$Fa.="&".(isset($b)?urlencode("where[".bracket_escape($f)."]")."=".urlencode($b):"null%5B%5D=".urlencode($f));}echo"<tr".odd()."><td>".checkbox("check[]",substr($Fa,1),in_array(substr($Fa,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($E)!=count($Ba)||information_schema(DB)?'':" <a href='".h(ME."edit=".urlencode($u).$Fa)."'>".lang(64)."</a>");foreach($c
as$f=>$b){if(isset($oc[$f])){$h=$t[$f];if($b!=""&&(!isset($Db[$f])||$Db[$f]!="")){$Db[$f]=(is_email($b)?$oc[$f]:"");}$v="";$b=$n->editVal($b,$h);if(!isset($b)){$b="<i>NULL</i>";}else{if(ereg('binary|blob|bytea|raw|file',$h["type"])&&$b!=""){$v=h(ME.'download='.urlencode($u).'&field='.urlencode($f).$Fa);}if($b==""){$b="&nbsp;";}elseif($eb!=""&&ereg('text|blob',$h["type"])&&is_utf8($b)){$b=shorten_utf8($b,max(0,intval($eb)));}else{$b=h($b);}if(!$v){foreach((array)$wb[$f]as$J){if(count($wb[$f])==1||count($J["source"])==1){foreach($J["source"]as$q=>$lc){$v.=where_link($q,$J["target"][$q],$O[$K][$lc]);}$v=h(($J["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($J["db"]),ME):ME).'select='.urlencode($J["table"]).$v);break;}}}if($f=="COUNT(*)"){$v=h(ME."select=".urlencode($u));$q=0;foreach((array)$_GET["where"]as$p){if(!array_key_exists($p["col"],$uc)){$v.=h(where_link($q++,$p["col"],$p["val"],$p["op"]));}}foreach($uc
as$la=>$p){$v.=h(where_link($q++,$la,$p,(isset($p)?"=":"IS NULL")));}}}if(!$v){if(is_email($b)){$v="mailto:$b";}if($ob=is_url($c[$f])){$v=($ob=="http"&&$hb?$c[$f]:"$ob://www.adminer.org/redirect/?url=".urlencode($c[$f]));}}$X=h("val[$Fa][".bracket_escape($f)."]");$l=$_POST["val"][$Fa][bracket_escape($f)];$Cc=h(isset($l)?$l:$c[$f]);$Hc=strpos($b,"<i>...</i>");$Pc=is_utf8($b)&&!$Hc&&$O[$K][$f]==$c[$f]&&!$ba[$f];$Rc=ereg('text|lob',$h["type"]);echo(($_GET["modify"]&&$Pc)||isset($l)?"<td>".($Rc?"<textarea name='$X' cols='30' rows='".(substr_count($c[$f],"\n")+1)."'>$Cc</textarea>":"<input name='$X' value='$Cc' size='$pc[$f]'>"):"<td id='$X' ondblclick=\"".($Pc?"selectDblClick(this, event".($Rc?", 1":"").")":"alert('".h($Hc?lang(66):lang(67))."')").";\">".$n->selectVal($b,$v,$h));}}$n->backwardKeysPrint($fd,$O[$K]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$tc);if($O||$L){$sc=true;if($_GET["page"]!="last"&&intval($y)&&count($Ba)>=count($E)&&($sa>=$y||$L)){$sa=$F["Rows"];if(!isset($sa)||$m||2*$L*$y>$sa||($F["Engine"]=="InnoDB"&&$sa<1e4)){ob_flush();flush();$sa=$a->result("SELECT COUNT(*) FROM ".table($u).($m?" WHERE ".implode(" AND ",$m):""));}else{$sc=false;}}echo"<p class='pages'>";if(intval($y)&&$sa>$y){$qc=floor(($sa-1)/$y);echo
lang(68).":".pagination(0,$L).($L>5?" ...":"");for($q=max(1,$L-4);$q<min($qc,$L+5);$q++){echo
pagination($q,$L);}echo($L+5<$qc?" ...":"").($sc?pagination($qc,$L):' <a href="'.h(remove_from_uri()."&page=last").'">'.lang(22)."</a>");}echo" (".($sc?"":"~ ").lang(69,$sa).") ".checkbox("all",1,0,lang(70))."\n";if(!information_schema(DB)){echo'<fieldset><legend>',lang(54),'</legend><div>
<input type="submit" value="',lang(55),'" title="',lang(60),'">
<input type="submit" name="edit" value="',lang(54),'">
<input type="submit" name="clone" value="',lang(71),'">
<input type="submit" name="delete" value="',lang(58),'" onclick="return confirm(\'',lang(50);?> (' + (this.form['all'].checked ? <?php echo$sa,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",lang(72));echo$n->dumpOutput(1,$tc["output"])." ".$n->dumpFormat(1,$tc["format"]);echo" <input type='submit' name='export' value='".lang(72)."'>\n","</div></fieldset>\n";}print_fieldset("import",lang(73),!$e->num_rows);echo"<input type='hidden' name='token' value='$ua'><input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;"),$tc["format"],1);echo" <input type='submit' name='import' value='".lang(74)."'>\n","</div></fieldset>\n";$n->selectEmailPrint(array_filter($Db,'strlen'),$I);echo"</form>\n";}}}else{page_header(lang(41),"",false);echo'<form action=""><p>
',lang(75),':
';hidden_fields_get();echo'<input name="where[0][val]" value="',h($_GET["where"][0]["val"]),'">
<input type="submit" value="',lang(25),'" />
</form>
';if($_GET["where"][0]["val"]!=""){search_tables();}}page_footer();