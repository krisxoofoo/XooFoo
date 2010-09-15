<?php
/**
 * Block admin for imGlossary
 *  
 * @todo Get the core block admin form so it is always current
 * @package imGlossary
 * @author GIJOE <http://www.peak.ne.jp/>
 * @author skenow <skenow@impresscms.org>
 * @author McDonald 
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
 * @version $Id$  
 */
/** include the control panel header */
include_once '../../../include/cp_header.php';
/** include the group permissions form */
include_once 'mygrouppermform.php';
/** include the blocks class */
include_once XOOPS_ROOT_PATH . '/class/xoopsblock.php';

$icms_system_path = XOOPS_ROOT_PATH . '/modules/system';

// language files
$language = $xoopsConfig['language'] ;
//if ( file_exists( XOOPS_ROOT_PATH . '/language/' . $language . '/admin/blocksadmin.php' ) ) {
//	include XOOPS_ROOT_PATH . '/language/' . $language . '/admin/blocksadmin.php';
//} else {
//	include XOOPS_ROOT_PATH . '/language/english/admin/blocksadmin.php';
//}

// to prevent from notice that constants already defined
$error_reporting_level = error_reporting( 0 );
include_once $icms_system_path . '/constants.php';
include_once $icms_system_path . '/language/' . $language . '/admin.php';
include_once $icms_system_path . '/language/' . $language . '/admin/blocksadmin.php';
error_reporting( $error_reporting_level );

$group_defs = file( $icms_system_path . '/language/' . $language . '/admin/groups.php' );
foreach ( $group_defs as $def ) {
	if ( strstr( $def, '_AM_ACCESSRIGHTS' ) || strstr( $def, '_AM_ACTIVERIGHTS' ) ) eval( $def );
}

// check $xoopsModule
if ( !is_object( $xoopsModule ) ) redirect_header( XOOPS_URL . '/user.php', 1, _NOPERM ) ;

// check access right (needs system_admin of BLOCK)
$sysperm_handler =& xoops_gethandler('groupperm');
if ( !$sysperm_handler -> checkRight( 'system_admin', XOOPS_SYSTEM_BLOCK, $xoopsUser -> getGroups() ) ) redirect_header( XOOPS_URL . '/user.php', 1, _NOPERM );

// get blocks owned by the module
$block_arr =& XoopsBlock::getByModule( $xoopsModule -> mid() );
/** 
 * List and display the blocks and their options - this function is also found in system/admin/blocksadmin/blocksadmin.php 
 *   
 */
function list_blocks() {
	global $block_arr;

// cachetime options
	$cachetimes = array('0' => _NOCACHE, '30' => sprintf(_SECONDS, 30), '60' => _MINUTE, '300' => sprintf(_MINUTES, 5), '1800' => sprintf(_MINUTES, 30), '3600' => _HOUR, '18000' => sprintf(_HOURS, 5), '86400' => _DAY, '259200' => sprintf(_DAYS, 3), '604800' => _WEEK, '2592000' => _MONTH);

// displaying TH
	echo "
	<form action='admin.php' name='blockadmin' method='post'>
		<table width='90%' class='outer' cellpadding='4' cellspacing='1'>
		<tr valign='middle' align='center'>
			<th>" . _AM_TITLE . "</th>
			<th nowrap='nowrap'>" . _AM_SIDE . "</th>
			<th>" . _AM_WEIGHT . "</th>
			<th>" . _AM_VISIBLEIN . "</th>
			<th>" . _AM_BCACHETIME . "</th>
			<th>" . _AM_VISIBLE . "</th>
			<th>" . _AM_ACTION . "</th>
		</tr>\n";
//  if (method_exists('XoopsBlock','getBlockPositions')) {echo 'You are using ImpressCMS and can have custom block positions<br />';}
//	if (file_exists(XOOPS_ROOT_PATH.'/kernel/page.php')) {echo 'You are using ImpressCMS 1.1 and can have custom page links <br />';}
	$adv_blocks = method_exists( 'XoopsBlock', 'getBlockPositions' );
	$adv_pages = @file_exists( XOOPS_ROOT_PATH . '/kernel/page.php' );
// blocks displaying loop
//	$class = 'even';
	foreach ( array_keys( $block_arr ) as $i ) {
		$class = '';
		$weight = $block_arr[$i] -> getVar( 'weight' ) ;
		$title = $block_arr[$i] -> getVar( 'title' );
		$name = $block_arr[$i] -> getVar( 'name' );
		$bcachetime = $block_arr[$i] -> getVar( 'bcachetime' );
		$bid = $block_arr[$i] -> getVar( 'bid' );
		$yvisible = $nvisible = '';
		$ystyle = $nstyle = '';
		$yvisible = ( $block_arr[$i] -> getVar( 'visible' ) == 1 ? "checked='checked'" : '' );
		$nvisible = ( $block_arr[$i] -> getVar( 'visible' ) == 1 ? '' : "checked='checked'" );
		if ( $yvisible ) {  $ystyle = 'style="background-color: #00FF00;"';
							$class  = 'style="color:inherit; border: 1px solid #CCCCCC; padding: 2px;"'; 
		}
		if ( $nvisible ) {  $nstyle = 'style="background-color: #FF0000;"';
							$class  = 'style="color:inherit; border: 1px solid #CCCCCC; padding: 2px;"';
		}
  		$side_options = '';
     // Block positions - XOOPS 2.0.x, 2.3.x
     if ( !$adv_blocks ) {
    		$new_sides = array (
             XOOPS_SIDEBLOCK_LEFT => _AM_SBLEFT,
             XOOPS_SIDEBLOCK_RIGHT => _AM_SBRIGHT,
             XOOPS_CENTERBLOCK_LEFT => _AM_CBLEFT,
             XOOPS_CENTERBLOCK_RIGHT => _AM_CBRIGHT,
             XOOPS_CENTERBLOCK_CENTER => _AM_CBCENTER,
             XOOPS_CENTERBLOCK_BOTTOMLEFT => _AM_CBBOTTOMLEFT,
             XOOPS_CENTERBLOCK_BOTTOMRIGHT => _AM_CBBOTTOMRIGHT,
             XOOPS_CENTERBLOCK_BOTTOM => _AM_CBBOTTOM );
      } else {

     /* Block positions - ImpressCMS 1.0+ */
          $posarr = XoopsBlock::getBlockPositions ( true );
          $new_sides = array();
          foreach ( $posarr as $k => $v ) {
          	$titl = ( defined( $posarr [$k] ['title'] ) ) ? constant ( $posarr [$k] ['title'] ) : $posarr [$k] ['title'];
          	$new_sides [$k] = $titl;
          }
      }

    	foreach ( $new_sides as $sidenum => $sidename ) {
           if ( $block_arr[$i] -> getVar('side') == $sidenum) {
                $side_options .= "<option value='$sidenum' selected='selected'>$sidename</option>";     
           } else {
                $side_options .= "<option value='$sidenum' >$sidename</option>";
           }
      }

     // bcachetime
		$cachetime_options = '';
		foreach ( $cachetimes as $cachetime => $cachetime_name ) {
			if ( $bcachetime == $cachetime ) {
				$cachetime_options .= "<option value='$cachetime' selected='selected'>$cachetime_name</option>";
			} else {
				$cachetime_options .= "<option value='$cachetime'>$cachetime_name</option>";
			}
		}

     		$db =& Database::getInstance();
     if ( !$adv_pages ) {
       // target modules - ImpressCMS 1.0.x
     		$result = $db -> query( "SELECT module_id FROM " . $db -> prefix( 'block_module_link' ) . " WHERE block_id=" . $bid . "" );
    		$selected_mids = array();
     		while ( list( $selected_mid ) = $db -> fetchRow( $result ) ) {
            $selected_mids[] = ( int )$selected_mid;
    		}
        $module_handler =& xoops_gethandler( 'module' );
    		$criteria = new CriteriaCompo(new Criteria('hasmain', 1));
    		$criteria -> add( new Criteria( 'isactive', 1 ) );
    		$module_list =& $module_handler -> getList( $criteria );
    		$module_list[-1] = _AM_TOPPAGE;
    		$module_list[0] = _AM_ALLPAGES;
    		ksort($module_list);
    		$module_options = '';
  	foreach ( $module_list as $mid => $mname ) {
			if ( in_array( $mid, $selected_mids ) ) {
				$module_options .= "<option value='$mid' selected='selected'>$mname</option>";
			} else {
				$module_options .= "<option value='$mid'>$mname</option>";
			}
		}
		} else {
     /* target modules/pages - ImpressCMS 1.1+ */
    		$result = $db -> query( "SELECT module_id, page_id FROM " . $db -> prefix( 'block_module_link' ) . " WHERE block_id=" . $bid . "" );
    		$selected_mids = array();
         		while ( $row = $db -> fetchArray( $result ) ) {
               $selected_mids[] = (int)$row['module_id'] . '-' . (int)$row['page_id'];
    		}
    		$page_handler = & xoops_gethandler ( 'page' );
    		$module_options = $page_handler -> getPageSelOptions ( $selected_mids );        
    }

     // displaying part
		echo "
		<tr valign='middle'>
			<td $class align='center'>
				<strong>$name</strong>
				<br />
				<input type='text' name='title[$bid]' value='$title' size='20' />
			</td>
			<td $class align='center' nowrap='nowrap'>
				<select name='side[$bid]' size='5' >
				      $side_options
				</select>
			</td>
			<td $class align='center'>
				<input type='text' name='weight[$bid]' value='$weight' size='5' maxlength='5' style='text-align:right;' />
			</td>
			<td $class align='center'>
				<select name='bmodule[$bid][]' size='5' multiple='multiple'>
					$module_options
				</select>
			</td>
			<td $class align='center'>
				<select name='bcachetime[$bid]' size='1'>
					$cachetime_options
				</select>
			</td>
			<td $class align='center'>
			  <input type='radio' name='visible[$bid]' $ystyle value='1' $yvisible />" . _YES . "&nbsp;
                 <input type='radio' name='visible[$bid]' $nstyle value='0' $nvisible />" . _NO . "
                 <input type='hidden' name='oldvisible[$bid]' value='" . $block_arr[$i] -> getVar( 'visible' ) . "' />
               </td>
			<td $class align='center'>
				<a href='admin.php?fct=blocksadmin&amp;op=edit&amp;bid=$bid'>" . _EDIT . "</a>
				<input type='hidden' name='bid[$bid]' value='$bid' />
			</td>
		</tr>\n";

		$class = ( $class == 'even' ) ? 'odd' : 'even';
	}

	echo "
		<tr>
			<td class='foot' align='center' colspan='7'>
				<input type='hidden' name='fct' value='blocksadmin' />
				<input type='hidden' name='op' value='order' />
				<input type='submit' name='submit' value='" . _SUBMIT . "' />
			</td>
		</tr>
		</table>
	</form>\n";
}

function list_groups() {
	global $xoopsModule, $block_arr;

	foreach ( array_keys( $block_arr ) as $i ) {
		$item_list[ $block_arr[$i] -> getVar( 'bid' ) ] = $block_arr[$i] -> getVar(  'title' );
	}

	$form = new MyXoopsGroupPermForm( _MD_AM_ADGS, 1, 'block_read', '' );
	$form -> addAppendix( 'module_admin', $xoopsModule -> mid(), $xoopsModule -> name() . ' ' . _AM_ACTIVERIGHTS );
	$form -> addAppendix( 'module_read', $xoopsModule -> mid(), $xoopsModule -> name() . ' ' . _AM_ACCESSRIGHTS );
	foreach ( $item_list as $item_id => $item_name ) {
		$form -> addItem( $item_id, $item_name );
	}
	echo $form -> render();
}

if ( ! empty( $_POST['submit'] ) ) {
	include 'mygroupperm.php';
	redirect_header( XOOPS_URL . '/modules/' . $xoopsModule -> dirname() . '/admin/myblocksadmin.php', 1, _MD_AM_DBUPDATED );
}

include XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/include/functions.php';

xoops_cp_header() ;

xtube_adminmenu();

if ( file_exists( './mymenu.php' ) ) include( './mymenu.php' ) ;

// echo "<h3 style='text-align:left;'>" . $xoopsModule -> name() . "</h3>\n";
echo "<h4 style='text-align:left;'>" . _AM_BADMIN . "</h4>\n";
list_blocks();
list_groups();
xoops_cp_footer();

?>