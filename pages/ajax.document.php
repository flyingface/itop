<?php
// Copyright (C) 2010-2016 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify	
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>


/**
 * Handles various ajax requests
 *
 * @copyright   Copyright (C) 2010-2016 Combodo SARL
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

require_once('../approot.inc.php');
require_once(APPROOT.'application/utils.inc.php');


if (array_key_exists('HTTP_IF_MODIFIED_SINCE', $_SERVER) && (strlen($_SERVER['HTTP_IF_MODIFIED_SINCE']) > 0))
{
	// The content is garanteed to be unmodified since the URL includes a signature based on the contents of the document
	header('not modified', true, 304);
	exit;
}

try
{
	require_once(APPROOT.'/application/application.inc.php');
	require_once(APPROOT.'/application/webpage.class.inc.php');
	require_once(APPROOT.'/application/ajaxwebpage.class.inc.php');
	require_once(APPROOT.'/application/startup.inc.php');

	require_once(APPROOT.'/application/loginwebpage.class.inc.php');
	LoginWebPage::DoLoginEx(null /* any portal */, false);
	
	$oPage = new ajax_page("");
	$oPage->no_cache();

	$operation = utils::ReadParam('operation', '');
	$sClass = utils::ReadParam('class', 'MissingAjaxParam', false, 'class');

	switch($operation)
	{
		case 'download_document':
			$id = utils::ReadParam('id', '');
			$sField = utils::ReadParam('field', '');
			if ($sClass == 'Attachment')
			{
				$iCacheSec = 31556926; // One year ahead: an attachment cannot change
			}
			else
			{
				$iCacheSec = (int)utils::ReadParam('cache', 0);
			}
			if (!empty($sClass) && ($sClass != 'InlineImage') && !empty($id) && !empty($sField))
			{
				ormDocument::DownloadDocument($oPage, $sClass, $id, $sField, 'attachment');
				if ($iCacheSec > 0)
				{
					$oPage->add_header("Expires: "); // Reset the value set in ajax_page
					$oPage->add_header("Cache-Control: no-transform,public,max-age=$iCacheSec,s-maxage=$iCacheSec");
					$oPage->add_header("Pragma: cache"); // Reset the value set .... where ?
					$oPage->add_header("Last-Modified: Wed, 15 Jun 2015 13:21:15 GMT"); // An arbitrary date in the past is ok
				}
			}
			break;

		case 'download_inlineimage':
			$id = utils::ReadParam('id', '');
			$sSecret = utils::ReadParam('s', '');
			$iCacheSec = 31556926; // One year ahead: an inline image cannot change
			if (!empty($id) && !empty($sSecret))
			{
				ormDocument::DownloadDocument($oPage, 'InlineImage', $id, 'contents', 'attachment', 'secret', $sSecret);
				$oPage->add_header("Expires: "); // Reset the value set in ajax_page
				$oPage->add_header("Cache-Control: no-transform,public,max-age=$iCacheSec,s-maxage=$iCacheSec");
				$oPage->add_header("Pragma: cache"); // Reset the value set .... where ?
				$oPage->add_header("Last-Modified: Wed, 15 Jun 2016 13:21:15 GMT"); // An arbitrary date in the past is ok
			}
			break;

		default:
		$oPage->p("Invalid query.");
	}

	$oPage->output();
}
catch (Exception $e)
{
	// note: transform to cope with XSS attacks
	echo htmlentities($e->GetMessage(), ENT_QUOTES, 'utf-8');
	IssueLog::Error($e->getMessage()."\nDebug trace:\n".$e->getTraceAsString());
}
