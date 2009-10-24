<?php
/**
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code 
 which is considered copyrighted (c) material of the original comment or credit authors.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

/**
 *  Xoops Form Class Elements
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/ 
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      form
 * @since           2.0.0
 * @author          Kazumi Ono <onokazu@xoops.org>
 * @author          John Neill <catzwolf@xoops.org>
 * @version         $Id$
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

/**
 * XoopsFormButtonTray
 *
 * @author 		Kazumi Ono <onokazu@xoops.org>
 * @author 		John Neill <catzwolf@xoops.org>
 * @copyright   The XOOPS Project http://sourceforge.net/projects/xoops/ 
 * @package 	kernel
 * @subpackage 	form
 * @access 		public
 */
class XoopsFormButtonTray extends XoopsFormElement {
	/**
	 * Value
	 *
	 * @var string
	 * @access private
	 */
	var $_value;

	/**
	 * Type of the button. This could be either "button", "submit", or "reset"
	 *
	 * @var string
	 * @access private
	 */
	var $_type;

	/**
	 * XoopsFormButtonTray::XoopsFormButtonTray()
	 *
	 * @param mixed $name
	 * @param string $value
	 * @param string $type
	 * @param string $onclick
	 */
	function XoopsFormButtonTray( $name, $value = '', $type = '', $onclick = '', $showDelete = false ) {
		$this->setName( $name );
		$this->setValue( $value );
		$this->_type = ( !empty( $type ) ) ? $type : 'submit';
		$this->_showDelete = $showDelete;
		if ( $onclick ) {
			$this->setExtra( $onclick );
		} else {
			$this->setExtra( '' );
		}
	}

	/**
	 * XoopsFormButtonTray::getValue()
	 *
	 * @return
	 */
	function getValue() {
		return $this->_value;
	}

	/**
	 * XoopsFormButtonTray::setValue()
	 *
	 * @param mixed $value
	 * @return
	 */
	function setValue( $value ) {
		$this->_value = $value;
	}

	/**
	 * XoopsFormButtonTray::getType()
	 *
	 * @return
	 */
	function getType() {
		return $this->_type;
	}

	/**
	 * XoopsFormButtonTray::render()
	 *
	 * @return
	 */
	function render() {
		// onclick="this.form.elements.op.value=\'delfile\';
		$ret = '';
		if ( $this->_showDelete ) {
			$ret .= '<input type="submit" class="formbutton" name="delete" id="delete" value="' . _DELETE . '" onclick="this.form.elements.op.value=\'delete\'">&nbsp;';
		}
		$ret .= '<input type="button" value="' . _CANCEL . '" onClick="history.go(-1);return true;" />&nbsp;<input type="reset" class="formbutton"  name="reset"  id="reset" value="' . _RESET . '" />&nbsp;<input type="' . $this->getType() . '" class="formbutton"  name="' . $this->getName() . '"  id="' . $this->getName() . '" value="' . $this->getValue() . '"' . $this->getExtra() . '  />';
		return $ret;
	}
}

?>