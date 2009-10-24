<?php
// $Id$
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
// Author: Kazumi Ono (AKA onokazu)                                          //
// URL: http://www.myweb.ne.jp/, http://www.xoops.org/, http://jp.xoops.org/ //
// Project: The XOOPS Project                                                //
// ------------------------------------------------------------------------- //

if (!is_object($xoopsUser) || !is_object($xoopsModule) || !$xoopsUser->isAdmin($xoopsModule->mid()) ) {
    exit("Access Denied");
} else {
/*********************************************************/
/* Banners Administration Functions                      */
/*********************************************************/
function BannersAdmin()
{
    global $xoopsConfig, $xoopsModule;
    $xoopsDB =& Database::getInstance();
    xoops_cp_header();
    // Banners List
    echo "<a name='top'></a>";
    echo "<table width='100%' border='0' cellspacing='1' class='outer'><tr><td class=\"odd\">";
    echo "<div style='text-align:center'><strong>"._AM_CURACTBNR."</strong></div><br />
    <table width='100%' border='0'><tr>
    <td align='center'>"._AM_BANNERID."</td>
    <td align='center'>"._AM_IMPRESION."</td>
    <td align='center'>"._AM_IMPLEFT."</td>
    <td align='center'>"._AM_CLICKS."</td>
    <td align='center'>"._AM_NCLICKS."</td>
    <td align='center'>"._AM_CLINAME."</td>
    <td align='center'>"._AM_FUNCTION."</td></tr><tr align='center'>";
    $result = $xoopsDB->query("SELECT bid, cid, imptotal, impmade, clicks, date FROM ".$xoopsDB->prefix("banner")." ORDER BY bid");
    $myts =& MyTextSanitizer::getInstance();
    while(list($bid, $cid, $imptotal, $impmade, $clicks, $date) = $xoopsDB->fetchRow($result)) {
        $result2 = $xoopsDB->query("SELECT cid, name FROM ".$xoopsDB->prefix("bannerclient")." WHERE cid=$cid");
        list($cid, $name) = $xoopsDB->fetchRow($result2);
        $name = $myts->htmlSpecialChars($name);
        if ( $impmade == 0 ) {
            $percent = 0;
        } else {
            $percent = substr(100 * $clicks / $impmade, 0, 5);
        }
        if ( $imptotal == 0 ) {
            $left = ""._AM_UNLIMIT."";
        } else {
            $left = $imptotal-$impmade;
        }
        echo "<td align='center'>$bid</td>
        <td align='center'>$impmade</td>
        <td align='center'>$left</td>
        <td align='center'>$clicks</td>
        <td align='center'>$percent%</td>
        <td align='center'>$name</td>
        <td align='center'><a href='admin.php?fct=banners&amp;op=BannerEdit&amp;bid=$bid'>"._AM_EDIT."</a> | <a href='admin.php?fct=banners&amp;op=BannerDelete&amp;bid=$bid&amp;ok=0'>"._AM_DELETE."</a></td><tr>";
    }
    echo "</td></tr></table>";
    echo "</td></tr></table>";
    echo "<br />";
    // Finished Banners List
    echo "<a name='top'></a>";
    echo "<table width='100%' border='0' cellspacing='1' class='outer'><tr><td class=\"odd\">";
    echo "<div style='text-align:center'><strong>"._AM_FINISHBNR."</strong></div><br />
    <table width='100%' border='0'><tr>
    <td align='center'>"._AM_BANNERID."</td>
    <td align='center'>"._AM_IMPD."</td>
    <td align='center'>"._AM_CLICKS."</td>
    <td align='center'>"._AM_NCLICKS."</td>
    <td align='center'>"._AM_STARTDATE."</td>
    <td align='center'>"._AM_ENDDATE."</td>
    <td align='center'>"._AM_CLINAME."</td>
    <td align='center'>"._AM_FUNCTION."</td></tr>
    <tr>";
    $result = $xoopsDB->query("SELECT bid, cid, impressions, clicks, datestart, dateend FROM ".$xoopsDB->prefix("bannerfinish")." ORDER BY bid");
    while(list($bid, $cid, $impressions, $clicks, $datestart, $dateend) = $xoopsDB->fetchRow($result)) {
        $result2 = $xoopsDB->query("SELECT cid, name FROM ".$xoopsDB->prefix("bannerclient")." WHERE cid=$cid");
        list($cid, $name) = $xoopsDB->fetchRow($result2);
        $name = $myts->htmlSpecialChars($name);
        $percent = substr(100 * $clicks / $impressions, 0, 5);
        echo "
        <td align='center'>$bid</td>
        <td align='center'>$impressions</td>
        <td align='center'>$clicks</td>
        <td align='center'>$percent%</td>
        <td align='center'>".formatTimestamp($datestart,"m")."</td>
        <td align='center'>".formatTimestamp($dateend,"m")."</td>
        <td align='center'>$name</td>
        <td align='center'><a href='admin.php?fct=banners&amp;op=BannerFinishDelete&amp;bid=$bid'>"._AM_DELETE."</a></td><tr>";
    }
    echo "</td></tr></table>";
    echo "</td></tr></table>";
    echo "<br />";
    // Clients List
    echo "<table width='100%' border='0' cellspacing='1' class='outer'><tr><td class=\"odd\">";
    echo "
    <div style='text-align:center'><strong>"._AM_ADVCLI."</strong></div><br />
    <table width='100%' border='0'><tr align='center'>
    <td align='center'>"._AM_BANNERID."</td>
    <td align='center'>"._AM_CLINAME."</td>
    <td align='center'>"._AM_ACTIVEBNR."</td>
    <td align='center'>"._AM_CONTNAME."</td>
    <td align='center'>"._AM_CONTMAIL."</td>
    <td align='center'>"._AM_FUNCTION."</td></tr><tr align='center'>";
    $result = $xoopsDB->query("SELECT cid, name, contact, email FROM ".$xoopsDB->prefix("bannerclient")." ORDER BY cid");
    while(list($cid, $name, $contact, $email) = $xoopsDB->fetchRow($result)) {
        $name = htmlspecialchars($name,ENT_QUOTES);
        $contact = htmlspecialchars($contact,ENT_QUOTES);
        $email = htmlspecialchars($email,ENT_QUOTES);
        $result2 = $xoopsDB->query("SELECT COUNT(*) FROM ".$xoopsDB->prefix("banner")." WHERE cid=$cid");
        list($numrows) = $xoopsDB->fetchRow($result2);
        echo "
        <td align='center'>$cid</td>
        <td align='center'>$name</td>
        <td align='center'>$numrows</td>
        <td align='center'>$contact</td>
        <td align='center'>$email</td>
        <td align='center'><a href='admin.php?fct=banners&amp;op=BannerClientEdit&amp;cid=$cid'>"._AM_EDIT."</a> | <a href='admin.php?fct=banners&amp;op=BannerClientDelete&amp;cid=$cid'>"._AM_DELETE."</a></td><tr>";
    }
    echo "</td></tr></table>";
    echo "</td></tr></table>";
    echo "<br />";
    // Add Banner
    $result = $xoopsDB->query("SELECT COUNT(*) FROM ".$xoopsDB->prefix("bannerclient"));
    list($numrows) = $xoopsDB->fetchRow($result);
        if ( $numrows > 0 ) {
            echo"<table width='100%' border='0' cellspacing='1' class='outer'><tr><td class=\"odd\">";
            echo"
            <h4>"._AM_ADDNWBNR."</h4>
            <form action='admin.php' method='post'>
            "._AM_CLINAMET."
            <select name='cid'>";
            $result = $xoopsDB->query("SELECT cid, name FROM ".$xoopsDB->prefix("bannerclient"));
            while(list($cid, $name) = $xoopsDB->fetchRow($result)) {
                $name = $myts->htmlSpecialChars($name);
                echo "<option value='$cid'>$name</option>";

            }
            echo "
            </select><br />
            "._AM_IMPPURCHT."<input type='text' name='imptotal' size='12' maxlength='11' /> 0 = "._AM_UNLIMIT."<br />
            "._AM_IMGURLT."<input type='text' name='imageurl' size='50' maxlength='255' /><br />
            "._AM_CLICKURLT."<input type='text' name='clickurl' size='50' maxlength='255' /><br />
            "._AM_USEHTML." <input type='checkbox' name='htmlbanner' value='1'>
            <br />
            "._AM_CODEHTML."
            <br />
            <textarea name='htmlcode' rows='6'></textarea>
            <br />
            <input type='hidden' name='fct' value='banners' />
            <input type='hidden' name='op' value='BannersAdd' />
            ".$GLOBALS['xoopsSecurity']->getTokenHTML()."
            <input type='submit' value='"._AM_ADDBNR."' />
            </form>";
            echo"</td></tr></table>";
        }
    // Add Client
    echo "<br />";
    echo "<table width='100%' border='0' cellspacing='1' class='outer'><tr><td class=\"odd\">";
    echo "
    <h4>"._AM_ADDNWCLI."</h4>
    <form action='admin.php' method='post'>
    "._AM_CLINAMET."<input type='text' name='name' size='30' maxlength='60' /><br />
    "._AM_CONTNAMET."<input type='text' name='contact' size='30' maxlength='60' /><br />
    "._AM_CONTMAILT."<input type='text' name='email' size='30' maxlength='60' /><br />
    "._AM_CLILOGINT."<input type='text' name='login' size='12' maxlength='10' /><br />
    "._AM_CLIPASST."<input type='text' name='passwd' size='12' maxlength='10' /><br />
    "._AM_EXTINFO."<br /><textarea name='extrainfo' cols='60' rows='10' /></textarea><br />
    <input type='hidden' name='op' value='BannerAddClient' />
    ".$GLOBALS['xoopsSecurity']->getTokenHTML()."
    <input type='hidden' name='fct' value='banners' />
    <input type='submit' value='"._AM_ADDCLI."' />
    </form>";
    echo "</td></tr></table>";
    xoops_cp_footer();
}


function BannerDelete($bid)
{
    global $xoopsConfig, $xoopsModule;
    $xoopsDB =& Database::getInstance();
    $myts =& MyTextSanitizer::getInstance();
    xoops_cp_header();
    $result=$xoopsDB->query("SELECT cid, imptotal, impmade, clicks, imageurl, clickurl, htmlbanner, htmlcode FROM ".$xoopsDB->prefix("banner")." where bid=$bid");
    list($cid, $imptotal, $impmade, $clicks, $imageurl, $clickurl, $htmlbanner, $htmlcode) = $xoopsDB->fetchRow($result);
    $imageurl = htmlspecialchars($imageurl, ENT_QUOTES);
    $clickurl = htmlspecialchars($clickurl, ENT_QUOTES);
    echo"<table width='100%' border='0' cellspacing='1' class='outer'><tr><td class=\"odd\">";
    echo "<h4>"._AM_DELEBNR."</h4>";
    if ($htmlbanner){
        echo $myts->displayTarea($htmlcode,1);
    }else{
        if(strtolower(substr($imageurl,strrpos($imageurl,".")))==".swf") {
            echo "<object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/ swflash.cab#version=6,0,40,0\" width=\"468\" height=\"60\">";
            echo "<param name=movie value=\"$imageurl\">";
            echo "<param name=quality value=high>";
            echo "<embed src=\"$imageurl\" quality=high pluginspage=\"http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash\"  type=\"application/x-shockwave-flash\" width=\"468\" height=\"60\">";
            echo "</embed>";
            echo "</object>";
        } else {
            echo "<img src='$imageurl' alt='' />";
        }
    }
    echo "<a href='$clickurl'>$clickurl</a><br /><br /><table width='100%' border='0'><tr align='center'><td align='center'>"._AM_BANNERID."</td><td align='center'>"._AM_IMPRESION."</td><td align='center'>"._AM_IMPLEFT."</td><td align='center'>"._AM_CLICKS."</td><td align='center'>"._AM_NCLICKS."</td><td align='center'>"._AM_CLINAME."</td></tr><tr align='center'>";
    $result2 = $xoopsDB->query("SELECT cid, name FROM ".$xoopsDB->prefix("bannerclient")." WHERE cid=$cid");
    list($cid, $name) = $xoopsDB->fetchRow($result2);
    $name = $myts->htmlSpecialChars($name);
    $percent = substr(100 * $clicks / $impmade, 0, 5);
    if ( $imptotal == 0 ) {
        $left = 'unlimited';
    } else {
        $left = $imptotal-$impmade;
    }
    echo "
        <td align='center'>$bid</td>
        <td align='center'>$impmade</td>
        <td align='center'>$left</td>
        <td align='center'>$clicks</td>
        <td align='center'>$percent%</td>
        <td align='center'>$name</td>
        </tr></table><br />";
    xoops_confirm(array('fct' => 'banners', 'op' => 'BannerDelete2', 'bid' => $bid), 'admin.php', _AM_SUREDELE);
    echo"</td></tr></table>";
    xoops_cp_footer();
}

function BannerEdit($bid)
{
    global $xoopsConfig, $xoopsModule;
    $bid = intval($bid);
    xoops_cp_header();
    $xoopsDB =& Database::getInstance();
    $myts =& MyTextSanitizer::getInstance();
    $result=$xoopsDB->query("SELECT cid, imptotal, impmade, clicks, imageurl, clickurl, htmlbanner, htmlcode FROM ".$xoopsDB->prefix("banner")." where bid=".$bid);
    list($cid, $imptotal, $impmade, $clicks, $imageurl, $clickurl, $htmlbanner, $htmlcode) = $xoopsDB->fetchRow($result);
    echo"<table width='100%' border='0' cellspacing='1' class='outer'><tr><td class=\"odd\">";
    echo"<h4>"._AM_EDITBNR."</h4>";
    if ($htmlbanner){
        echo $myts->displayTarea($htmlcode, 1, 0, 0, 0, 0);
    }else{
        if(strtolower(substr($imageurl,strrpos($imageurl,".")))==".swf") {
            echo "<object classid=\"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000\" codebase=\"http://download.macromedia.com/pub/shockwave/cabs/flash/ swflash.cab#version=6,0,40,0\" width=\"468\" height=\"60\">";
            echo "<param name=movie value=\"$imageurl\">";
            echo "<param name=quality value=high>";
            echo "<embed src=\"$imageurl\" quality=high pluginspage=\"http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash\"  type=\"application/x-shockwave-flash\" width=\"468\" height=\"60\">";
            echo "</embed>";
            echo "</object>";
        } else {
            echo "<img src='$imageurl' alt='' />";
        }
    }
    echo "<form action='admin.php' method='post'>
    "._AM_CLINAMET."
    <select name='cid'>\n";
    $result = $xoopsDB->query("SELECT cid, name FROM ".$xoopsDB->prefix("bannerclient")." where cid=$cid");
    list($cid, $name) = $xoopsDB->fetchRow($result);
    $name = $myts->htmlSpecialChars($name);
    echo "<option value='$cid' selected='selected'>$name</option>";
    $result = $xoopsDB->query("SELECT cid, name FROM ".$xoopsDB->prefix("bannerclient"));
    while(list($ccid, $name) = $xoopsDB->fetchRow($result)) {
        $name = $myts->htmlSpecialChars($name);
        if ( $cid != $ccid ) {
            echo "<option value='$ccid'>$name</option>";
        }
    }
    echo "</select><br />";
    if ( $imptotal == 0 ) {
        $impressions = ""._AM_UNLIMIT."";
    } else {
        $impressions = $imptotal;
    }
    echo "
    "._AM_ADDIMPT."<input type='text' name='impadded' size='12' maxlength='11' /> "._AM_PURCHT."<strong>$impressions</strong> "._AM_MADET."<strong>$impmade</strong><br />
    "._AM_IMGURLT."<input type='text' name='imageurl' size='50' maxlength='200' value='".htmlspecialchars($imageurl, ENT_QUOTES)."'><br />
    "._AM_CLICKURLT."<input type='text' name='clickurl' size='50' maxlength='200' value='".htmlspecialchars($clickurl, ENT_QUOTES)."' /><br />
    "._AM_USEHTML;
    if ($htmlbanner){
        echo " <input type='checkbox' name='htmlbanner' value='1' checked='checked' />";
    }else{
        echo " <input type='checkbox' name='htmlbanner' value='1' />";
    }
    echo "
    <br />
    "._AM_CODEHTML."
    <br />
    <textarea name='htmlcode' rows='6'>".$myts->displayTarea($htmlcode, $htmlbanner, 0, 0, 0, 0)."</textarea>
    <br />
    <input type='hidden' name='bid' value='$bid' />
    <input type='hidden' name='imptotal' value='$imptotal' />
    <input type='hidden' name='fct' value='banners' />
    ".$GLOBALS['xoopsSecurity']->getTokenHTML()."
    <input type='hidden' name='op' value='BannerChange' />
    <input type='submit' value='"._AM_CHGBNR."' />
    </form>";
    echo"</td></tr></table>";
    xoops_cp_footer();
}

function BannerClientDelete($cid)
{
    global $xoopsConfig, $xoopsModule;
    $xoopsDB =& Database::getInstance();
    $myts =& MyTextSanitizer::getInstance();
    xoops_cp_header();
    $result = $xoopsDB->query("SELECT cid, name FROM ".$xoopsDB->prefix("bannerclient")." WHERE cid=$cid");
    list($cid, $name) = $xoopsDB->fetchRow($result);
    $name = $myts->htmlSpecialChars($name);
    echo "<table width='100%' border='0' cellspacing='1' class='outer'><tr><td class=\"odd\">";
    echo "<h4>"._AM_DELEADC."</h4>".sprintf(_AM_SUREDELCLI,$name)."<br /><br />";
    $result2 = $xoopsDB->query("SELECT imageurl, clickurl, htmlbanner, htmlcode FROM ".$xoopsDB->prefix("banner")." WHERE cid=$cid");
    $numrows = $xoopsDB->getRowsNum($result2);
    if ( $numrows == 0 ) {
        echo ""._AM_NOBNRRUN."<br /><br />";
    } else {
        echo "<font color='#ff0000'><strong>"._AM_WARNING."</strong></font><br />"._AM_ACTBNRRUN."<br /><br />";
    }
    while(list($imageurl, $clickurl, $htmlbanner, $htmlcode) = $xoopsDB->fetchRow($result2)) {
        $imageurl = htmlspecialchars($imageurl, ENT_QUOTES);
        $clickurl = htmlspecialchars($clickurl, ENT_QUOTES);
        $bannerobject = "";
        if ($htmlbanner){
            $bannerobject = $myts->displayTarea($htmlcode,1);
        } else {
            $bannerobject = '<div><a href="'.$clickurl.'" rel="external">';
            if(strtolower(substr($imageurl,strrpos($imageurl,".")))==".swf") {
                $bannerobject = $bannerobject
                        .'<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" width="468" height="60">'
                        .'<param name="movie" value="'.$imageurl.'"></param>'
                        .'<param name="quality" value="high"></param>'
                        .'<embed src="'.$imageurl.'" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="468" height="60">'
                        .'</embed>'
                        .'</object>';
            } else {
                $bannerobject = $bannerobject.'<img src="'.$imageurl.'" alt="" />';
            }
            $bannerobject = $bannerobject.'</a></div>';
        }
        echo $bannerobject."<a href='".$clickurl."'>".$clickurl."</a><br /><br />";
    }
    xoops_confirm(array('fct' => 'banners', 'op' => 'BannerClientDelete2', 'cid' => $cid), 'admin.php', _AM_SUREDELBNR);
    echo "</td></tr></table>";
    xoops_cp_footer();
}

function BannerClientEdit($cid)
{
    global $xoopsConfig, $xoopsModule;
    $xoopsDB =& Database::getInstance();
    $myts =& MyTextSanitizer::getInstance();
    xoops_cp_header();
    $result = $xoopsDB->query("SELECT name, contact, email, login, passwd, extrainfo FROM ".$xoopsDB->prefix("bannerclient")." WHERE cid=$cid");
    list($name, $contact, $email, $login, $passwd, $extrainfo) = $xoopsDB->fetchRow($result);
    $name = $myts->htmlSpecialChars($name);
    $contact = $myts->htmlSpecialChars($contact);
    $email = $myts->htmlSpecialChars($email);
    $login = $myts->htmlSpecialChars($login);
    $passwd = $myts->htmlSpecialChars($passwd);
    $extrainfo = $myts->htmlSpecialChars($extrainfo);
    echo "<table width='100%' border='0' cellspacing='1' class='outer'><tr><td class=\"odd\">";
    echo "
    <h4>"._AM_EDITADVCLI."</h4>
    <form action='admin.php' method='post'>
    "._AM_CLINAMET."<input type='text' name='name' value='$name' size='30' maxlength='60' /><br />
    "._AM_CONTNAMET."<input type='text' name='contact' value='$contact' size='30' maxlength='60' /><br />
    "._AM_CONTMAILT ."<input type='text' name='email' size='30' maxlength='60' value='$email' /><br />
    "._AM_CLILOGINT."<input type='text' name='login' size='12' maxlength='10' value='$login' /><br />
    "._AM_CLIPASST."<input type='text' name='passwd' size='12' maxlength='10' value='$passwd' /><br />
    "._AM_EXTINFO."<br /><textarea name='extrainfo' cols='60' rows='10' />$extrainfo</textarea><br />
    <input type='hidden' name='cid' value='$cid' />
    <input type='hidden' name='op' value='BannerClientChange' />
    ".$GLOBALS['xoopsSecurity']->getTokenHTML()."
    <input type='hidden' name='fct' value='banners' />
    <input type='submit' value='"._AM_CHGCLI."' />";
    echo "</td></tr></table>";
    xoops_cp_footer();
}

}

?>