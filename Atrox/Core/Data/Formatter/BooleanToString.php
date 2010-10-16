<?php
/**
 * @package Core
 * @subpackage Data/Formatter
 * @copyright Clock Limited 2010
 * @version 5.1 - $Revision: 1483 $ - $Date: 2010-05-19 19:29:54 +0100 (Wed, 19 May 2010) $
 */

/**
 *
 * @author Tom Smith <thomas.smith@clock.co.uk>
 * @copyright Clock Limited 2010
 * @version 5.1 - $Revision: 1483 $ - $Date: 2010-05-19 19:29:54 +0100 (Wed, 19 May 2010) $
 * @package Core
 * @subpackage Data/Formatter
 */
class Atrox_Core_Data_Formatter_BooleanToString implements Atrox_Core_Data_IFormatter {

	public function format($value) {
		return $value ? "t" : "f";
	}
}