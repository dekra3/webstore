<?php
/*
  LightSpeed Web Store
 
  NOTICE OF LICENSE
 
  This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to support@lightspeedretail.com <mailto:support@lightspeedretail.com>
 * so we can send you a copy immediately.
 
  DISCLAIMER
 
 * Do not edit or add to this file if you wish to upgrade Web Store to newer
 * versions in the future. If you wish to customize Web Store for your
 * needs please refer to http://www.lightspeedretail.com for more information.
 
 * @copyright  Copyright (c) 2011 Xsilva Systems, Inc. http://www.lightspeedretail.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 
 */

/**
 * xlsws_404 class
 * We use this as a display page for 404 error messaages for things like unfound products or categories
 * Should only be returned with 404 error code
 */
class xlsws_404 extends xlsws_index {

	/**
	 * build_main - constructor for this controller
	 * @param none
	 * @return none
	 */
	protected function build_main() {
		$this->msg->HtmlEntities= false;
		$this->msg = "<p>404 Document Not Found</p>The page you are looking for is not valid. Please try going to the <a href='"._xls_site_url()."'> home page</a>.";

		$this->mainPnl = new QPanel($this,'MainPanel');
		$this->mainPnl->Template = templateNamed('msg.tpl.php');
		
	}
}

if(!defined('CUSTOM_STOP_XLSWS'))
	xlsws_404::Run('xlsws_404', templateNamed('index.tpl.php'));
