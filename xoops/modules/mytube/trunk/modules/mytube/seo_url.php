<?php
/*
 * $Id: seo_url.php
 * Module: mytube
 * Author: Nikita <http://www.aideordi.com>
 * Licence: GNU
 */
if (!defined("XOOPS_ROOT_PATH") || !defined("XOOPS_URL") ) {
	exit();
}

define('REAL_MODULE_NAME', 'mytube');
define('SEO_MODULE_NAME', 'video');

ob_start('seo_urls');

function seo_urls($s) 
{
	$XPS_URL = str_replace('/','\/', quotemeta(XOOPS_URL) );
	$s = mytube_absolutize($s); // Fix URLs and HTML.
	
	$module_name = REAL_MODULE_NAME;
	
	$search = array(
		// Search URLs of modules' directry.
		  '/<(a|meta)([^>]*)(href|url)=([\'\"]{0,1})'.$XPS_URL.'\/modules\/'.$module_name.'\/(viewcat.php)([^>\'\"]*)([\'\"]{1})([^>]*)>/i',
		  '/<(a|meta)([^>]*)(href|url)=([\'\"]{0,1})'.$XPS_URL.'\/modules\/'.$module_name.'\/(singlevideo.php)([^>\'\"]*)([\'\"]{1})([^>]*)>/i',
	);
	
	$s = preg_replace_callback($search, 'replace_links', $s);
	
	return $s;	
}

function replace_links($matches)
{
	switch ($matches[5]) {
		case 'viewcat.php':
			$add_to_url = '';
			$req_string = $matches[6];
			if (!empty($matches[6])) 
			{
//				replacing cat=x 
				if(preg_match('/cid=([0-9]+)/', $matches[6], $mvars))
				{
					$add_to_url = 'cat'.$mvars[1].'-'.mytube_seo_cat($mvars[1]).'/';
					$req_string = preg_replace('/cid=[0-9]+/','', $matches[6]);
				}
				else 
				{
					return $matches['0'];
				}
			}
			break;
		case 'singlevideo.php':
			$add_to_url = '';
			$req_string = $matches[6];
			if (!empty($matches[6])) 
			{
//				replacing mytube=x 
				if(preg_match('/lid=([0-9]+)/', $matches[6], $mvars))
				{
					$add_to_url = 'titre'.$mvars[1].'-'.mytube_seo_video($mvars[1]).'/';
					$req_string = preg_replace('/lid=[0-9]+/','', $matches[6]);
				}
				else 
				{
					return $matches['0'];
				}
			}
			break;
	
		default:
			break;
	}
	if ($req_string == '?') 
	{
		$req_string = '';
	}
	$ret = '<'.$matches[1].$matches[2].$matches[3].'='.$matches[4].XOOPS_URL.'/'.SEO_MODULE_NAME.'/'.$add_to_url.$req_string.$matches[7].$matches[8].'>';
	return $ret;
}

function mytube_seo_cat($cid)
{
    global $xoopsDB;
	$db =& Database::getInstance();
	$query = "
		SELECT
			title
		FROM
			".$xoopsDB->prefix("xoopstube_cat")."
		WHERE 
			cid = $cid
	";
	$result = $db->query($query);
	$res = $db->fetchArray($result);
	$ret = mytube_seo_title($res['title']);
	return $ret;
}

function mytube_seo_video($lid)
{
    global $xoopsDB;
	$db =& Database::getInstance();
	$query = "
		SELECT
			title
		FROM
			".$xoopsDB->prefix("xoopstube_videos")."
		WHERE 
			lid = $lid
	";
	$result = $db->query($query);
	$res = $db->fetchArray($result);
	$ret = mytube_seo_title($res['title']);
	return $ret;
}

function mytube_seo_title($title='', $withExt=false)
{
    /**
     * if XOOPS ML is present, let's sanitize the title with the current language
     */
     $myts = MyTextSanitizer::getInstance();
     if (method_exists($myts, 'formatForML')) {
     	$title = $myts->formatForML($title);
     }

    // Transformation de la chaine en minuscule
    // Codage de la chaine afin d'�viter les erreurs 500 en cas de caract�res impr�vus
    $title   = rawurlencode(strtolower($title));

    // Transformation des ponctuations
    //                 Tab     Space      !        "        #        %        &        '        (        )        ,        /        :        ;        <        =        >        ?        @        [        \        ]        ^        {        |        }        ~       .
    $pattern = array("/%09/", "/%20/", "/%21/", "/%22/", "/%23/", "/%25/", "/%26/", "/%27/", "/%28/", "/%29/", "/%2C/", "/%2F/", "/%3A/", "/%3B/", "/%3C/", "/%3D/", "/%3E/", "/%3F/", "/%40/", "/%5B/", "/%5C/", "/%5D/", "/%5E/", "/%7B/", "/%7C/", "/%7D/", "/%7E/", "/\./", "/%2A/");
    $rep_pat = array(  "-"  ,   "-"  ,   ""   ,   ""   ,   ""   , "-100" ,   ""   ,   "-"  ,   ""   ,   ""   ,   ""   ,   "-"  ,   ""   ,   ""   ,   ""   ,   "-"  ,   ""   ,   ""   , "-at-" ,   ""   ,   "-"   ,  ""   ,   "-"  ,   ""   ,   "-"  ,   ""   ,   "-"  ,  ""  ,  ""  );
    $title   = preg_replace($pattern, $rep_pat, $title);

    // Transformation des caract�res accentu�s
    //                    ?        �        �        �        �        �        �        �        �        �        �        �        �        �        �        �      �          �          �            �          �            �         �
    $pattern = array("/%B0/", "/%E8/", "/%E9/", "/%EA/", "/%EB/", "/%E7/", "/%E0/", "/%E2/", "/%E4/", "/%EE/", "/%EF/", "/%F9/", "/%FC/", "/%FB/", "/%F4/", "/%F6/", "/%F1/", "/%E3%A9/", "/%E3%A0/", "/%E3%A8/", "/%E3%AB/", "/%E3%AE/", "/%E3%AA/");
    $rep_pat = array(  "-", "e"  ,   "e"  ,   "e"  ,   "e"  ,   "c"  ,   "a"  ,   "a"  ,   "a"  ,   "i"  ,   "i"  ,   "u"  ,   "u"  ,   "u"  ,   "o"  ,  "o",  "n", "e", "a", "e", "e", "i", "e" );
    $title   = preg_replace($pattern, $rep_pat, $title);

    if (sizeof($title) > 0)
    {
        if ($withExt) {
            $title .= '.html';
        }
        return $title;
    }
    else
        return '';
}

function mytube_absolutize($s){
	if(preg_match('/\/$/',$_SERVER['REQUEST_URI'])){
		$req_dir=preg_replace('/\/$/','',$_SERVER['REQUEST_URI']);
		$req_php="";
	}else{
		$req_dir=dirname($_SERVER['REQUEST_URI']);
		$req_php=preg_replace('/.*(\/[a-zA-Z0-9_\-]+)\.php.*/','\\1.php',$_SERVER['REQUEST_URI']);
	}
	$req_dir = ($req_dir == "\\" || $req_dir == "/" ) ? "" : $req_dir ;
	$dir_arr=explode('/', $req_dir);
	$m = count($dir_arr)-1;
	$d1 = @str_replace('/'.$dir_arr[$m],   '', $req_dir);
	$d2 = @str_replace('/'.$dir_arr[$m-1], '', $d1);
	$d3 = @str_replace('/'.$dir_arr[$m-2], '', $d2);
	$d4 = @str_replace('/'.$dir_arr[$m-3], '', $d3);
	$d5 = @str_replace('/'.$dir_arr[$m-4], '', $d4);
	$host = 'http://'.$_SERVER['HTTP_HOST'];
	$in = array(
		 '/<([^>\?\&]*)(href|src|action|background|window\.location)=([^\"\' >]+)([^>]*)>/i'
		,'/<([^>\?\&]*)(href|src|action|background|window\.location)=([\"\']{1})\.\.\/\.\.\/\.\.\/([^\"\']*)([\"\']{1})([^>]*)>/i'
		,'/<([^>\?\&]*)(href|src|action|background|window\.location)=([\"\']{1})\.\.\/\.\.\/([^\"\']*)([\"\']{1})([^>]*)>/i'
		,'/<([^>\?\&]*)(href|src|action|background|window\.location)=([\"\']{1})\.\.\/([^\"\']*)([\"\']{1})([^>]*)>/i'
		,'/<([^>\?\&]*)(href|src|action|background|window\.location)=([\"\']{1})\/([^\"\']*)([\"\']{1})([^>]*)>/i'
		,'/<([^>\?\&]*)(href|src|action|background|window\.location)=([\"\']{1})\?([^\"\']*)([\"\']{1})([^>]*)>/i'
		//This dir
		,'/<([^>\?\&]*)(href|src|action|background|window\.location)=([\"\']{1})([^#]{1}[^\/\"\'>]*)([\"\']{1})([^>]*)>/i'
		,'/<([^>\?\&]*)(href|src|action|background|window\.location)=([\"\']{1})(?:\.\/)?([^\"\'\/:]*\/*)?([^\"\'\/:]*\/*)?([^\"\'\/:]*\/*)?([a-zA-Z0-9_\-]+)\.([^\"\'>]*)([\"\']{1})([^>]*)>/i'
		,'/[^"\'a-zA-Z_0-9](window\.open|url)\(([\"\']{0,1})(?:\.\/)?([^\"\'\/]*)\.([^\"\'\/]+)([\"\']*)([^\)]*)/i'
		,'/<meta([^>]*)url=([a-zA-Z0-9_\-]+)\.([^\"\'>]*)([\"\']{1})([^>]*)>/i'
	);
	$out = array(
		 '<\\1\\2="\\3"\\4>'
		,'<\\1\\2=\\3'.$host.$d3.'/\\4\\5\\6>'
		,'<\\1\\2=\\3'.$host.$d2.'/\\4\\5\\6>'
		,'<\\1\\2=\\3'.$host.$d1.'/\\4\\5\\6>'
		,'<\\1\\2=\\3'.$host.'/\\4\\5\\6>'
		,'<\\1\\2=\\3'.$host.$_SERVER['PHP_SELF'].'?\\4\\5\\6>'
		//This dir.
		,'<\\1\\2=\\3'.$host.$req_dir.'/\\4\\5\\6\\7>'
		,'<\\1\\2=\\3'.$host.$req_dir.'/\\4\\5\\6\\7.\\8\\9\\10>'
		,'$1($2'.$host.$req_dir.'/$3.$4$5$6'
		,'<meta$1url='.$host.$req_dir.'/$2.$3$4$5>'
	);
	$s = preg_replace($in, $out, $s); 
	
	return $s;
}
?>