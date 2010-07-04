<?php
// Copyright (C) 2010 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

/**
 * Persistent classes for a CMDB
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

class Incident extends ResponseTicket
{
	public static function Init()
	{
		$aParams = array
		(
			"category" => "bizmodel,searchable,incidentmgmt",
			"key_type" => "autoincrement",
			"name_attcode" => "ref",
			"state_attcode" => "status",
			"reconc_keys" => array("ref"),
			"db_table" => "ticket_incident",
			"db_key_field" => "id",
			"db_finalclass_field" => "",
			"display_template" => "",
		);
		MetaModel::Init_Params($aParams);
		MetaModel::Init_InheritAttributes();
		MetaModel::Init_InheritLifecycle();
	}
}

$oMyMenuGroup = new MenuGroup('IncidentManagement', 1 /* fRank */);

// By default, one entry per class
new OQLMenuNode('Incidents', 'SELECT Incident', $oMyMenuGroup->GetIndex(), 0 /* fRank */);
new OQLMenuNode('OpenedIncidents', 'SELECT Incident WHERE status IN ("new", "assigned", "escalation")', $oMyMenuGroup->GetIndex(), 0 /* fRank */);
new OQLMenuNode('ClosedIncidents', 'SELECT Incident WHERE status IN ("resolved", "closed")', $oMyMenuGroup->GetIndex(), 0 /* fRank */);
//new TemplateMenuNode('WelcomeMenuPage', '../business/templates/welcome_menu.html', $oWelcomeMenu->GetIndex() /* oParent */, 1 /* fRank */);


?>
