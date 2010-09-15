<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: class/xtube_lists.php
*
* @copyright		http://www.xoops.org/ The XOOPS Project
* @copyright		XOOPS_copyrights.txt
* @copyright		http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since			1.03
* @author		John N
* ----------------------------------------------------------------------------------------------------------
* 				MyTube
* @since			1.00
* @author		McDonald
* @version		$Id$
*/
 
class xtubeLists {
    var $value;
    var $selected;
    var $path='uploads';
    var $size;
    var $emptyselect;
    var $type;
    var $prefix;
    var $suffix;

    function xtubeLists($path='uploads', $value = null, $selected='', $size = 1, $emptyselect = 0, $type = 0, $prefix='', $suffix='') {
        $this->value = $value;
        $this->selection = $selected;
        $this->path = $path;
        $this->size = intval($size);
        $this->emptyselect = ($emptyselect) ? 0 : 1;
        $this->type = $type;
    }

    function &getarray($this_array) {
        $ret="<select size='" . $this->size() . "' name='$this->value()'>";
        if ($this->emptyselect) {
            $ret .= "<option value='" . $this->value() . "'>----------------------</option>";
        }
        foreach($this_array as $content) {
            $opt_selected="";

            if ($content[0] == $this->selected()) {
                $opt_selected="selected='selected'";
            }
            $ret .= "<option value='" . $content . "' $opt_selected>" . $content . "</option>";
        }
        $ret .= "</select>";
        return $ret;
    }

    /**
     * Private to be called by other parts of the class
     */
    function &getDirListAsArray($dirname) {
        $dirlist = array();
        if (is_dir($dirname) && $handle = opendir($dirname)) {
            while (false !== ($file = readdir($handle))) {
                if (!preg_match("/^[.]{1,2}$/", $file)) {
                    if (strtolower($file) != 'cvs' && is_dir($dirname . $file)) {
                        $dirlist[$file] = $file;
                    }
                }
            }
            closedir($handle);

            reset($dirlist);
        }
        return $dirlist;
    }

    function &getListTypeAsArray( $dirname, $type='', $prefix='', $noselection = 1 ) {
        $filelist = array();
        switch ( trim( $type ) ) {
            case 'images':
                $types = '[.gif|.jpg|.png]';
                if ( $noselection )
                    $filelist[''] = _AM_XTUBE_NOIMAGE;
                break;
            case 'media':
                $types = '[.aac|.flv|.mp3|.mp4|.swf]';
                if ( $noselection )
                    $filelist[''] = _AM_XTUBE_NOVIDEO;
                break;
            case 'html':
                $types = '[.htm|.html|.xhtml|.php|.php3|.phtml|.txt]';
                if ( $noselection )
                    $filelist[''] = _AM_XTUBE_NOSELECT;
                break;
            default:
                $types = '';
                if ( $noselection )
                    $filelist[''] = _AM_XTUBE_NOFILESELECT;
                break;
        }

        if ( substr( $dirname, -1 ) == '/' ) {
            $dirname = substr( $dirname, 0, -1 );
        }

        if ( is_dir( $dirname ) && $handle = opendir( $dirname ) ) {
            while ( false !== ( $file = readdir( $handle ) ) ) {
                if ( !preg_match( "/^[.]{1,2}$/", $file ) && preg_match( "/$types$/i", $file ) && is_file( $dirname . '/' . $file ) ) {
                    if ( strtolower( $file ) == 'blank.gif' )
                        continue;
                    $file = $prefix . $file;
                    $filelist[$file] = $file;
                }
            }
            closedir( $handle );
            asort( $filelist );
            reset( $filelist );
        }
        return $filelist;
    }
	
    function value() {
        return $this -> value;
    }

    function selected() {
        return $this -> selected;
    }

    function paths() {
        return $this -> path;
    }

    function size() {
        return $this -> size;
    }

    function emptyselect() {
        return $this -> emptyselect;
    }

    function type() {
        return $this -> type;
    }

    function prefix() {
        return $this -> prefix;
    }

    function suffix() {
        return $this -> suffix;
    }
}
?>