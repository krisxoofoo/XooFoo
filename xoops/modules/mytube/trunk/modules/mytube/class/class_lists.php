<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: class/class_lists.php
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

class fileList {

    var $filelist = array();

    var $value;
    var $selected;
    var $path='uploads';
    var $size;
    var $emptyselect;
    var $type;
    var $prefix;
    var $suffix;
    var $noselection;

    /**
     * SpotList::SpotList()
     * 
     * @param string $path 
     * @param unknown $value 
     * @param string $selected 
     * @param integer $size 
     * @param integer $emptyselect 
     * @param integer $type 
     * @param string $prefix 
     * @param string $suffix 
     * @return 
     */
    function fileList( $path = 'uploads', $value = null, $selected='', $size = 1  ) {
        $this -> value = $value;
        $this -> selection = $selected;
        $this -> size = intval( $size );

        $path_to_check = XOOPS_ROOT_PATH . "/{$path}";
        if ( !is_dir( $path_to_check ) ) {
            if ( false === @mkdir( "$path_to_check", 0777 ) ) {
                XoopsErrorHandler_HandleError( E_USER_WARNING, $path_to_check._AM_XTUBE_DOESNOTEXIST, __FILE__, __LINE__ );
                return false;                
            } 
        } 
        $this -> path = $path;
    } 

    /**
     * SpotList::setNoselection()
     * 
     * @param integer $value 
     * @return 
     */

    function setEmptyselect( $value = 0 ) {
        $this -> emptyselect = ( intval($value) != 1 ) ? 0 : 1;
    } 

    function setNoselection( $value = 0 ) {
        $this -> noselection = ( intval($value) != 1 ) ? 0 : 1;
    } 

    function setPrefix( $value='' ) {
        $this -> prefix = ( strval($value) != '') ? strval( $value ) : '';
    } 

    function setSuffix( $value='' ) {
        $this -> suffix = ( strval($value) != '') ? strval( $value ) : '';
    } 

    function setlistType( $value='images' ) {
        $this -> type = strval( strtolower($value) );
    }	
    /**
     * SpotList::show_selection()
     * 
     * @return 
     */
    function &show_selection() {
        $ret = "<select size='" . $this -> size() . "' name='$this->value()'>";
        if ( $this -> emptyselect ) {
            $ret .= "<option value='" . $this -> value() . "'>----------------------</option>";
        } 
        foreach( $this -> filelist as $content ) {
            $opt_selected = "";

            if ( $content[0] == $this -> selected() ) {
                $opt_selected = "selected='selected'";
            } 
            $ret .= "<option value='" . $content . "' $opt_selected>" . $content . "</option>";
        } 
        $ret .= "</select>";
        return $ret;
    } 

    /**
     * SpotList::getListTypeAsArray()
     * 
     * @return 
     */
    function &getListTypeAsArray() {
        $filelist = array();
        switch ( trim( $this -> type ) ) {
            case 'images':
                $types = '[.gif|.jpg|.png]';
                if ( $this -> noselection )
                    $this -> filelist[0] = _AM_XTUBE_NOIMAGE;
                break;
            case 'media':
                $types = '[.aac|.flv|.mp3|.mp4|.swf]';
                if ( $this -> noselection )
                    $this -> filelist[0] = _AM_XTUBE_NOVIDEO;
                break;

            case 'html':
                $types = '[.htm|.html|.xhtml|.php|.php3|.phtml|.txt]';
                if ( $this -> noselection )
                    $this -> filelist[0] = _AM_XTUBE_NOSELECT;
                break;

            default:
                $types = '';
                if ( $this -> noselection )
                    $this -> filelist[0] = _AM_XTUBE_NOFILESELECT;
                break;
        } 

        if ( substr( $this -> path, -1 ) == '/' ) {
            $this -> path = substr( $this -> path, 0, -1 );
        } 

        $_full_path = XOOPS_ROOT_PATH . "/{$this->path}";

        if ( is_dir( $_full_path ) && $handle = opendir( $_full_path ) ) {
            while ( false !== ( $file = readdir( $handle ) ) ) {
                if ( !preg_match( "/^[.]{1,2}$/", $file ) && preg_match( "/$types$/i", $file ) && is_file( $_full_path . '/' . $file ) ) {
                    if ( strtolower( $file ) == 'blank.gif' )
                        Continue;
                    $file = $this -> prefix . $file;
                    $this -> filelist[$file] = $file;
                } 
            } 
            closedir( $handle );
            asort( $this -> filelist );
            reset( $this -> filelist );
        } 
        return $this -> filelist;
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