<?php
/**
 * @copyright Clock Limited 2007
 * @version 5.1 - $Revision: 1487 $ - $Date: 2010-05-20 17:42:53 +0100 (Thu, 20 May 2010) $
 * @package Application
 * @subpackage Mvc
 */

/**
 * Base View for all implementions of MVC
 *
 * @author Paul Serby<paul.serby@clock.co.uk>
 * @copyright Clock Limited 2007
 * @version 5.1 - $Revision: 1487 $ - $Date: 2010-05-20 17:42:53 +0100 (Thu, 20 May 2010) $
 * @package Application
 * @subpackage Mvc
 */
abstract class Atrox_Application_Component_View  { 
	
	abstract public function convertObject($object);
}