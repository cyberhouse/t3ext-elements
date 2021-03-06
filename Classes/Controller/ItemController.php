<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2014 Georg Ringer <geoorg.ringer@cyberhouse.at>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Item controller
 *
 * @package TYPO3
 * @subpackage tx_elements
 */
class Tx_Elements_Controller_ItemController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * Show the element
	 *
	 * @return void
	 */
	public function showAction() {
		$element = $this->configurationManager->getContentObject()->data;
		$element['element_relation'] = explode(',', $element['element_relation']);

	        foreach ($element['element_relation'] as $key => $value) {
	            $record = $GLOBALS['TYPO3_DB']->exec_SELECTgetSingleRow('*', 'tt_content', 'deleted=0 AND hidden=0 AND uid=' . $value);
	            if (empty($record)) {
	                unset($element['element_relation'][$key]);
	            }
	        }

		$this->view->assign('ce', $element);
	}

}
