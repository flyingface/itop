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
 * Localized data
 *
 * @author      Erwan Taloc <erwan.taloc@combodo.com>
 * @author      Romain Quetiez <romain.quetiez@combodo.com>
 * @author      Denis Flaven <denis.flaven@combodo.com>
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

//////////////////////////////////////////////////////////////////////
// Relations
//////////////////////////////////////////////////////////////////////
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Relation:impacts/Description' => 'Eléments impactés par',
	'Relation:impacts/VerbUp' => 'Impacte...',
	'Relation:impacts/VerbDown' => 'Dépend de...',
	'Relation:depends on/Description' => 'Eléments dont dépend cet élément',
	'Relation:depends on/VerbUp' => 'Dépend de...',
	'Relation:depends on/VerbDown' => 'Impacte...',
));


// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//////////////////////////////////////////////////////////////////////
// Classes in 'bizmodel'
//////////////////////////////////////////////////////////////////////
//

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//////////////////////////////////////////////////////////////////////
// Note: The classes have been grouped by categories: bizmodel
//////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
// Classes in 'bizmodel'
//////////////////////////////////////////////////////////////////////
//

//
// Class: Organization
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Organization' => 'Organisation',
	'Class:Organization+' => '',
	'Class:Organization/Attribute:name' => 'Nom',
	'Class:Organization/Attribute:name+' => '',
	'Class:Organization/Attribute:code' => 'Code',
	'Class:Organization/Attribute:code+' => 'Code société (Siret, DUNS,...)',
	'Class:Organization/Attribute:status' => 'Etat',
	'Class:Organization/Attribute:status+' => '',
	'Class:Organization/Attribute:status/Value:active' => 'Active',
	'Class:Organization/Attribute:status/Value:active+' => '',
	'Class:Organization/Attribute:status/Value:inactive' => 'Inactive',
	'Class:Organization/Attribute:status/Value:inactive+' => '',
	'Class:Organization/Attribute:parent_id' => 'Organisation parente',
	'Class:Organization/Attribute:parent_id+' => '',
	'Class:Organization/Attribute:parent_name' => 'Organisation parente',
	'Class:Organization/Attribute:parent_name+' => '',
));

//
// Class: Location
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Location' => 'Lieu',
	'Class:Location+' => 'Tout type de lieu: Région, Pays, Ville, Batiment, Etage, Pièce, Rack,...',
	'Class:Location/Attribute:name' => 'Nom',
	'Class:Location/Attribute:name+' => '',
	'Class:Location/Attribute:status' => 'Etat',
	'Class:Location/Attribute:status+' => '',
	'Class:Location/Attribute:status/Value:active' => 'Actif',
	'Class:Location/Attribute:status/Value:active+' => '',
	'Class:Location/Attribute:status/Value:inactive' => 'Inactif',
	'Class:Location/Attribute:status/Value:inactive+' => '',
	'Class:Location/Attribute:org_id' => 'Organisation',
	'Class:Location/Attribute:org_id+' => '',
	'Class:Location/Attribute:org_name' => 'Organisation',
	'Class:Location/Attribute:org_name+' => '',
	'Class:Location/Attribute:address' => 'Adresse',
	'Class:Location/Attribute:address+' => 'Adresse postale',
	'Class:Location/Attribute:postal_code' => 'Code postal',
	'Class:Location/Attribute:postal_code+' => '',
	'Class:Location/Attribute:city' => 'Ville',
	'Class:Location/Attribute:city+' => '',
	'Class:Location/Attribute:country' => 'Pays',
	'Class:Location/Attribute:country+' => '',
	'Class:Location/Attribute:parent_id' => 'Lieu parent',
	'Class:Location/Attribute:parent_id+' => '',
	'Class:Location/Attribute:parent_name' => 'Lieu parent',
	'Class:Location/Attribute:parent_name+' => '',
	'Class:Location/Attribute:contact_list' => 'Contacts',
	'Class:Location/Attribute:contact_list+' => 'Contacts situé sur ce lieu',
	'Class:Location/Attribute:infra_list' => 'Infrastructure',
	'Class:Location/Attribute:infra_list+' => 'Eléments d\'infrastructure situés sur ce lieu',
));

//
// Class: Contact
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Contact' => 'Contact',
	'Class:Contact+' => '',
	'Class:Contact/Attribute:name' => 'Nom',
	'Class:Contact/Attribute:name+' => '',
	'Class:Contact/Attribute:status' => 'Etat',
	'Class:Contact/Attribute:status+' => '',
	'Class:Contact/Attribute:status/Value:active' => 'Actif',
	'Class:Contact/Attribute:status/Value:active+' => '',
	'Class:Contact/Attribute:status/Value:inactive' => 'Inactif',
	'Class:Contact/Attribute:status/Value:inactive+' => '',
	'Class:Contact/Attribute:org_id' => 'Organisation',
	'Class:Contact/Attribute:org_id+' => '',
	'Class:Contact/Attribute:org_name' => 'Organisation',
	'Class:Contact/Attribute:org_name+' => '',
	'Class:Contact/Attribute:email' => 'Email',
	'Class:Contact/Attribute:email+' => '',
	'Class:Contact/Attribute:phone' => 'Téléphone',
	'Class:Contact/Attribute:phone+' => '',
	'Class:Contact/Attribute:location_id' => 'Lieu',
	'Class:Contact/Attribute:location_id+' => '',
	'Class:Contact/Attribute:location_name' => 'Lieu',
	'Class:Contact/Attribute:location_name+' => '',
	'Class:Contact/Attribute:ci_list' => 'CIs',
	'Class:Contact/Attribute:ci_list+' => 'CIs liés à ce contact',
	'Class:Contact/Attribute:contract_list' => 'Contrats',
	'Class:Contact/Attribute:contract_list+' => 'Contrats liés à ce contact',
	'Class:Contact/Attribute:service_list' => 'Services',
	'Class:Contact/Attribute:service_list+' => 'Services liés à ce contact',
	'Class:Contact/Attribute:ticket_list' => 'Tickets',
	'Class:Contact/Attribute:ticket_list+' => 'Tickets liés à ce contact',
	'Class:Contact/Attribute:team_list' => 'Equipes',
	'Class:Contact/Attribute:team_list+' => 'Equipes dont ce contact est membre',
	'Class:Contact/Attribute:finalclass' => 'Type',
	'Class:Contact/Attribute:finalclass+' => '',
));

//
// Class: Person
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Person' => 'Personne',
	'Class:Person+' => '',
	'Class:Person/Attribute:first_name' => 'Prénom',
	'Class:Person/Attribute:first_name+' => '',
	'Class:Person/Attribute:employee_id' => 'Numéro d\'employé',
	'Class:Person/Attribute:employee_id+' => '',
));

//
// Class: Team
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Team' => 'Equipe',
	'Class:Team+' => '',
	'Class:Team/Attribute:member_list' => 'Membres',
	'Class:Team/Attribute:member_list+' => 'Membres de l\'équipe',
));

//
// Class: lnkTeamToContact
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:lnkTeamToContact' => 'Equipe/Contact',
	'Class:lnkTeamToContact+' => 'Membres d\'une équipe',
	'Class:lnkTeamToContact/Attribute:team_id' => 'Equipe',
	'Class:lnkTeamToContact/Attribute:team_id+' => '',
	'Class:lnkTeamToContact/Attribute:contact_id' => 'Membre',
	'Class:lnkTeamToContact/Attribute:contact_id+' => '',
	'Class:lnkTeamToContact/Attribute:contact_location_id' => 'Lieu',
	'Class:lnkTeamToContact/Attribute:contact_location_id+' => '',
	'Class:lnkTeamToContact/Attribute:contact_email' => 'Email',
	'Class:lnkTeamToContact/Attribute:contact_email+' => '',
	'Class:lnkTeamToContact/Attribute:contact_phone' => 'Téléphone',
	'Class:lnkTeamToContact/Attribute:contact_phone+' => '',
	'Class:lnkTeamToContact/Attribute:role' => 'Rôle',
	'Class:lnkTeamToContact/Attribute:role+' => '',
));

//
// Class: Document
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Document' => 'Document',
	'Class:Document+' => '',
	'Class:Document/Attribute:name' => 'Nom',
	'Class:Document/Attribute:name+' => '',
	'Class:Document/Attribute:org_id' => 'Organisation',
	'Class:Document/Attribute:org_name' => 'Nom de l\'organization',
	'Class:Document/Attribute:org_name+' => '',
	'Class:Document/Attribute:description+' => '',
	'Class:Document/Attribute:description' => 'Description',
	'Class:Document/Attribute:description+' => '',
	'Class:Document/Attribute:type' => 'Type',
	'Class:Document/Attribute:type+' => '',
	'Class:Document/Attribute:type/Value:contract' => 'Contrat',
	'Class:Document/Attribute:type/Value:contract+' => '',
	'Class:Document/Attribute:type/Value:networkmap' => 'Topologie réseau',
	'Class:Document/Attribute:type/Value:networkmap+' => '',
	'Class:Document/Attribute:type/Value:presentation' => 'Présentation',
	'Class:Document/Attribute:type/Value:presentation+' => '',
	'Class:Document/Attribute:type/Value:training' => 'Support de cours',
	'Class:Document/Attribute:type/Value:training+' => '',
	'Class:Document/Attribute:type/Value:whitePaper' => 'Article de fond',
	'Class:Document/Attribute:type/Value:whitePaper+' => '',
	'Class:Document/Attribute:type/Value:workinginstructions' => 'Instructions de process',
	'Class:Document/Attribute:type/Value:workinginstructions+' => '',
	'Class:Document/Attribute:status' => 'Etat',
	'Class:Document/Attribute:status+' => '',
	'Class:Document/Attribute:status/Value:draft' => 'Brouillon',
	'Class:Document/Attribute:status/Value:draft+' => '',
	'Class:Document/Attribute:status/Value:obsolete' => 'Obsolète',
	'Class:Document/Attribute:status/Value:obsolete+' => '',
	'Class:Document/Attribute:status/Value:published' => 'Publié',
	'Class:Document/Attribute:status/Value:published+' => '',
	'Class:Document/Attribute:ci_list' => 'CIs',
	'Class:Document/Attribute:ci_list+' => 'CIs liés à ce document',
	'Class:Document/Attribute:contract_list' => 'Contrats',
	'Class:Document/Attribute:contract_list+' => 'Contrats liés à ce document',
	'Class:Document/Attribute:service_list' => 'Services',
	'Class:Document/Attribute:service_list+' => 'Services liés à ce document',
	'Class:Document/Attribute:ticket_list' => 'Tickets',
	'Class:Document/Attribute:ticket_list+' => 'Tickets liés à ce document',
	'Class:Document:PreviewTab' => 'Entrevue',
));

//
// Class: ExternalDoc
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:ExternalDoc' => 'Document externe',
	'Class:ExternalDoc+' => 'Document mis à disposition depuis un serveur web externe',
	'Class:ExternalDoc/Attribute:url' => 'Url',
	'Class:ExternalDoc/Attribute:url+' => '',
));

//
// Class: Note
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Note' => 'Note',
	'Class:Note+' => '',
	'Class:Note/Attribute:note' => 'Texte',
	'Class:Note/Attribute:note+' => '',
));

//
// Class: FileDoc
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:FileDoc' => 'Document (fichier)',
	'Class:FileDoc+' => '',
	'Class:FileDoc/Attribute:contents' => 'Contenu',
	'Class:FileDoc/Attribute:contents+' => '',
));

//
// Class: Licence
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Licence' => 'Licence',
	'Class:Licence+' => '',
	'Class:Licence/Attribute:provider' => 'Fournisseur',
	'Class:Licence/Attribute:provider+' => '',
	'Class:Licence/Attribute:product' => 'Produit',
	'Class:Licence/Attribute:product+' => '',
	'Class:Licence/Attribute:name' => 'Nom',
	'Class:Licence/Attribute:name+' => '',
	'Class:Licence/Attribute:start' => 'Date de début',
	'Class:Licence/Attribute:start+' => '',
	'Class:Licence/Attribute:end' => 'Date de fin',
	'Class:Licence/Attribute:end+' => '',
	'Class:Licence/Attribute:licence_key' => 'Clé de licence',
	'Class:Licence/Attribute:licence_key+' => '',
	'Class:Licence/Attribute:scope' => 'Droits d\'utilisation',
	'Class:Licence/Attribute:scope+' => '',
	'Class:Licence/Attribute:usage_limit' => 'Limites d\'utilisation',
	'Class:Licence/Attribute:usage_limit+' => '',
	'Class:Licence/Attribute:usage_list' => 'Utilisations',
	'Class:Licence/Attribute:usage_list+' => 'Applications utilisant cette licence',
));

//
// Class: Subnet
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Subnet' => 'Sous-réseau',
	'Class:Subnet+' => '',
	//'Class:Subnet/Attribute:name' => 'Name',
	//'Class:Subnet/Attribute:name+' => '',
	'Class:Subnet/Attribute:org_id' => 'Organisation',
	'Class:Subnet/Attribute:org_id+' => '',
	'Class:Subnet/Attribute:description' => 'Description',
	'Class:Subnet/Attribute:description+' => '',
	'Class:Subnet/Attribute:ip' => 'Adresse IP',
	'Class:Subnet/Attribute:ip+' => '',
	'Class:Subnet/Attribute:ip_mask' => 'Masque IP',
	'Class:Subnet/Attribute:ip_mask+' => '',
));

//
// Class: Patch
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Patch' => 'Patch',
	'Class:Patch+' => '',
	'Class:Patch/Attribute:name' => 'Nom',
	'Class:Patch/Attribute:name+' => '',
	'Class:Patch/Attribute:description' => 'Description',
	'Class:Patch/Attribute:description+' => '',
	'Class:Patch/Attribute:target_sw' => 'Logiciel cible',
	'Class:Patch/Attribute:target_sw+' => '',
	'Class:Patch/Attribute:version' => 'Version',
	'Class:Patch/Attribute:version+' => '',
	'Class:Patch/Attribute:type' => 'Type',
	'Class:Patch/Attribute:type+' => '',
	'Class:Patch/Attribute:type/Value:application' => 'Application',
	'Class:Patch/Attribute:type/Value:application+' => '',
	'Class:Patch/Attribute:type/Value:os' => 'SE',
	'Class:Patch/Attribute:type/Value:os+' => 'Système d\'exploitation',
	'Class:Patch/Attribute:type/Value:security' => 'Sécurité',
	'Class:Patch/Attribute:type/Value:security+' => '',
	'Class:Patch/Attribute:type/Value:servicepack' => 'Service Pack',
	'Class:Patch/Attribute:type/Value:servicepack+' => '',
	'Class:Patch/Attribute:ci_list' => 'Equipements',
	'Class:Patch/Attribute:ci_list+' => 'Equipements où le patch a été déployé',
));

//
// Class: Software
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Software' => 'Logiciel',
	'Class:Software+' => '',
	'Class:Software/Attribute:name' => 'Nom',
	'Class:Software/Attribute:name+' => '',
	'Class:Software/Attribute:description' => 'Description',
	'Class:Software/Attribute:description+' => '',
	'Class:Software/Attribute:instance_list' => 'Installations',
	'Class:Software/Attribute:instance_list+' => 'Installations de ce logiciel',
	'Class:Software/Attribute:finalclass' => 'Type',
	'Class:Software/Attribute:finalclass+' => '',
));

//
// Class: Application
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Application' => 'Application',
	'Class:Application+' => 'Application logicielle',
	'Class:Application/Attribute:name' => 'Nom',
	'Class:Application/Attribute:name+' => '',
	'Class:Application/Attribute:description' => 'Description',
	'Class:Application/Attribute:description+' => '',
	'Class:Application/Attribute:instance_list' => 'Installations',
	'Class:Application/Attribute:instance_list+' => 'Installations de cette application',
));

//
// Class: DBServer
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:DBServer' => 'Base de données',
	'Class:DBServer+' => 'Logiciel serveur de base de données',
	'Class:DBServer/Attribute:instance_list' => 'Installations',
	'Class:DBServer/Attribute:instance_list+' => 'Installations de ce logiciel serveur',
));

//
// Class: lnkPatchToCI
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:lnkPatchToCI' => 'Patch/CI',
	'Class:lnkPatchToCI+' => '',
	'Class:lnkPatchToCI/Attribute:patch_id' => 'Patch',
	'Class:lnkPatchToCI/Attribute:patch_id+' => '',
	'Class:lnkPatchToCI/Attribute:patch_name' => 'Patch',
	'Class:lnkPatchToCI/Attribute:patch_name+' => '',
	'Class:lnkPatchToCI/Attribute:ci_id' => 'CI',
	'Class:lnkPatchToCI/Attribute:ci_id+' => '',
	'Class:lnkPatchToCI/Attribute:ci_name' => 'CI',
	'Class:lnkPatchToCI/Attribute:ci_name+' => '',
	'Class:lnkPatchToCI/Attribute:ci_status' => 'Etat du CI',
	'Class:lnkPatchToCI/Attribute:ci_status+' => '',
));

//
// Class: FunctionalCI
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:FunctionalCI' => 'CI fonctionnel',
	'Class:FunctionalCI+' => '',
	'Class:FunctionalCI/Attribute:name' => 'Nom',
	'Class:FunctionalCI/Attribute:name+' => '',
	'Class:FunctionalCI/Attribute:status' => 'Etat',
	'Class:FunctionalCI/Attribute:status+' => '',
	'Class:FunctionalCI/Attribute:status/Value:implementation' => 'Implémentation',
	'Class:FunctionalCI/Attribute:status/Value:implementation+' => '',
	'Class:FunctionalCI/Attribute:status/Value:obsolete' => 'Obsolète',
	'Class:FunctionalCI/Attribute:status/Value:obsolete+' => '',
	'Class:FunctionalCI/Attribute:status/Value:production' => 'Production',
	'Class:FunctionalCI/Attribute:status/Value:production+' => '',
	'Class:FunctionalCI/Attribute:org_id' => 'Organisation',
	'Class:FunctionalCI/Attribute:org_id+' => '',
	'Class:FunctionalCI/Attribute:owner_name' => 'Organisation',
	'Class:FunctionalCI/Attribute:owner_name+' => '',
	'Class:FunctionalCI/Attribute:importance' => 'Criticité métier',
	'Class:FunctionalCI/Attribute:importance+' => '',
	'Class:FunctionalCI/Attribute:importance/Value:high' => 'Haute',
	'Class:FunctionalCI/Attribute:importance/Value:high+' => '',
	'Class:FunctionalCI/Attribute:importance/Value:low' => 'Basse',
	'Class:FunctionalCI/Attribute:importance/Value:low+' => '',
	'Class:FunctionalCI/Attribute:importance/Value:medium' => 'Moyenne',
	'Class:FunctionalCI/Attribute:importance/Value:medium+' => '',
	'Class:FunctionalCI/Attribute:contact_list' => 'Contacts',
	'Class:FunctionalCI/Attribute:contact_list+' => 'Contacts pour ce CI',
	'Class:FunctionalCI/Attribute:document_list' => 'Documents',
	'Class:FunctionalCI/Attribute:document_list+' => 'Documentation pour ce CI',
	'Class:FunctionalCI/Attribute:solution_list' => 'Solutions applicatives',
	'Class:FunctionalCI/Attribute:solution_list+' => 'Solutions applicatives pour ce CI',
	'Class:FunctionalCI/Attribute:contract_list' => 'Contracts',
	'Class:FunctionalCI/Attribute:contract_list+' => 'Contracts de support de ce CI',
	'Class:FunctionalCI/Attribute:ticket_list' => 'Tickets',
	'Class:FunctionalCI/Attribute:ticket_list+' => 'Tickets liés à ce CI',
	'Class:FunctionalCI/Attribute:finalclass' => 'Type',
	'Class:FunctionalCI/Attribute:finalclass+' => '',
));

//
// Class: SoftwareInstance
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:SoftwareInstance' => 'Instance de logiciel',
	'Class:SoftwareInstance+' => '',
	'Class:SoftwareInstance/Attribute:device_id' => 'Equipement',
	'Class:SoftwareInstance/Attribute:device_id+' => '',
	'Class:SoftwareInstance/Attribute:device_name' => 'Equipement',
	'Class:SoftwareInstance/Attribute:device_name+' => '',
	'Class:SoftwareInstance/Attribute:licence_id' => 'Licence',
	'Class:SoftwareInstance/Attribute:licence_id+' => '',
	'Class:SoftwareInstance/Attribute:licence_name' => 'Licence',
	'Class:SoftwareInstance/Attribute:licence_name+' => '',
	'Class:SoftwareInstance/Attribute:software_id' => 'Logiciel',
	'Class:SoftwareInstance/Attribute:software_id+' => '',
	'Class:SoftwareInstance/Attribute:software_name' => 'Logiciel',
	'Class:SoftwareInstance/Attribute:software_name+' => '',
	'Class:SoftwareInstance/Attribute:version' => 'Version',
	'Class:SoftwareInstance/Attribute:version+' => '',
	'Class:SoftwareInstance/Attribute:description' => 'Description',
	'Class:SoftwareInstance/Attribute:description+' => '',
));

//
// Class: ApplicationInstance
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:ApplicationInstance' => 'Instance d\'application',
	'Class:ApplicationInstance+' => '',
));

//
// Class: DBServerInstance
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:DBServerInstance' => 'Instance de serveur de base de données',
	'Class:DBServerInstance+' => '',
	'Class:DBServerInstance/Attribute:dbinstance_list' => 'Bases',
	'Class:DBServerInstance/Attribute:dbinstance_list+' => 'Liste des sources de données',
));

//
// Class: DatabaseInstance
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:DatabaseInstance' => 'Base de données',
	'Class:DatabaseInstance+' => '',
	'Class:DatabaseInstance/Attribute:db_server_instance_id' => 'Serveur de données',
	'Class:DatabaseInstance/Attribute:db_server_instance_id+' => '',
	'Class:DatabaseInstance/Attribute:db_server_instance_version' => 'Version',
	'Class:DatabaseInstance/Attribute:db_server_instance_version+' => '',
	'Class:DatabaseInstance/Attribute:description' => 'Description',
	'Class:DatabaseInstance/Attribute:description+' => '',
));

//
// Class: ApplicationSolution
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:ApplicationSolution' => 'Solution applicative',
	'Class:ApplicationSolution+' => '',
	'Class:ApplicationSolution/Attribute:description' => 'Description',
	'Class:ApplicationSolution/Attribute:description+' => '',
	'Class:ApplicationSolution/Attribute:ci_list' => 'CIs',
	'Class:ApplicationSolution/Attribute:ci_list+' => 'CIs composant cette solution',
	'Class:ApplicationSolution/Attribute:process_list' => 'Processus métier',
	'Class:ApplicationSolution/Attribute:process_list+' => 'Processus métier reposant sur cette solution',
));

//
// Class: BusinessProcess
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:BusinessProcess' => 'Processus métier',
	'Class:BusinessProcess+' => '',
	'Class:BusinessProcess/Attribute:description' => 'Description',
	'Class:BusinessProcess/Attribute:description+' => '',
	'Class:BusinessProcess/Attribute:used_solution_list' => 'Solutions applicatives',
	'Class:BusinessProcess/Attribute:used_solution_list+' => 'Solutions applicatives sur lesquelles ce processus repose',
));

//
// Class: ConnectableCI
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:ConnectableCI' => 'CI connectable',
	'Class:ConnectableCI+' => '',
	'Class:ConnectableCI/Attribute:brand' => 'Marque',
	'Class:ConnectableCI/Attribute:brand+' => '',
	'Class:ConnectableCI/Attribute:model' => 'Modèle',
	'Class:ConnectableCI/Attribute:model+' => '',
	'Class:ConnectableCI/Attribute:serial_number' => 'Numéro de série',
	'Class:ConnectableCI/Attribute:serial_number+' => '',
	'Class:ConnectableCI/Attribute:asset_ref' => 'Numéro d\'actif',
	'Class:ConnectableCI/Attribute:asset_ref+' => '',
));

//
// Class: NetworkInterface
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:NetworkInterface' => 'Interface réseau',
	'Class:NetworkInterface+' => '',
	'Class:NetworkInterface/Attribute:device_id' => 'Equipement',
	'Class:NetworkInterface/Attribute:device_id+' => '',
	'Class:NetworkInterface/Attribute:device_name' => 'Equipement',
	'Class:NetworkInterface/Attribute:device_name+' => '',
	'Class:NetworkInterface/Attribute:logical_type' => 'Type logique',
	'Class:NetworkInterface/Attribute:logical_type+' => '',
	'Class:NetworkInterface/Attribute:logical_type/Value:backup' => 'Backup',
	'Class:NetworkInterface/Attribute:logical_type/Value:backup+' => '',
	'Class:NetworkInterface/Attribute:logical_type/Value:logical' => 'Logical',
	'Class:NetworkInterface/Attribute:logical_type/Value:logical+' => '',
	'Class:NetworkInterface/Attribute:logical_type/Value:port' => 'Port',
	'Class:NetworkInterface/Attribute:logical_type/Value:port+' => '',
	'Class:NetworkInterface/Attribute:logical_type/Value:primary' => 'Primary',
	'Class:NetworkInterface/Attribute:logical_type/Value:primary+' => '',
	'Class:NetworkInterface/Attribute:logical_type/Value:secondary' => 'Secondary',
	'Class:NetworkInterface/Attribute:logical_type/Value:secondary+' => '',
	'Class:NetworkInterface/Attribute:physical_type' => 'Physical Type',
	'Class:NetworkInterface/Attribute:physical_type+' => '',
	'Class:NetworkInterface/Attribute:physical_type/Value:atm' => 'ATM',
	'Class:NetworkInterface/Attribute:physical_type/Value:atm+' => '',
	'Class:NetworkInterface/Attribute:physical_type/Value:ethernet' => 'Ethernet',
	'Class:NetworkInterface/Attribute:physical_type/Value:ethernet+' => '',
	'Class:NetworkInterface/Attribute:physical_type/Value:framerelay' => 'Frame Relay',
	'Class:NetworkInterface/Attribute:physical_type/Value:framerelay+' => '',
	'Class:NetworkInterface/Attribute:physical_type/Value:vlan' => 'VLAN',
	'Class:NetworkInterface/Attribute:physical_type/Value:vlan+' => '',
	'Class:NetworkInterface/Attribute:ip_address' => 'Addresse IP',
	'Class:NetworkInterface/Attribute:ip_address+' => '',
	'Class:NetworkInterface/Attribute:ip_mask' => 'Masque IP',
	'Class:NetworkInterface/Attribute:ip_mask+' => '',
	'Class:NetworkInterface/Attribute:mac_address' => 'Addresse MAC',
	'Class:NetworkInterface/Attribute:mac_address+' => '',
	'Class:NetworkInterface/Attribute:speed' => 'Vitesse',
	'Class:NetworkInterface/Attribute:speed+' => '',
	'Class:NetworkInterface/Attribute:duplex' => 'Duplex',
	'Class:NetworkInterface/Attribute:duplex+' => '',
	'Class:NetworkInterface/Attribute:duplex/Value:full' => 'Full',
	'Class:NetworkInterface/Attribute:duplex/Value:full+' => '',
	'Class:NetworkInterface/Attribute:duplex/Value:half' => 'Half',
	'Class:NetworkInterface/Attribute:duplex/Value:half+' => '',
	'Class:NetworkInterface/Attribute:duplex/Value:unknown' => 'Unknown',
	'Class:NetworkInterface/Attribute:duplex/Value:unknown+' => '',
	'Class:NetworkInterface/Attribute:connected_if' => 'Connectée à',
	'Class:NetworkInterface/Attribute:connected_if+' => 'Interface connectée',
	'Class:NetworkInterface/Attribute:connected_name' => 'Connectée à',
	'Class:NetworkInterface/Attribute:connected_name+' => '',
	'Class:NetworkInterface/Attribute:connected_if_device_id' => 'Equipement connecté',
	'Class:NetworkInterface/Attribute:connected_if_device_id+' => '',
	'Class:NetworkInterface/Attribute:link_type' => 'Type de lien',
	'Class:NetworkInterface/Attribute:link_type+' => '',
	'Class:NetworkInterface/Attribute:link_type/Value:uplink' => 'Lien vers le haut',
	'Class:NetworkInterface/Attribute:link_type/Value:uplink+' => '',
	'Class:NetworkInterface/Attribute:link_type/Value:downlink' => 'Lien vers le bas',
	'Class:NetworkInterface/Attribute:link_type/Value:downlink+' => '',
));

//
// Class: Device
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Device' => 'Equipement',
	'Class:Device+' => '',
	'Class:Device/Attribute:nwinterface_list' => 'Interfaces réseau',
	'Class:Device/Attribute:nwinterface_list+' => '',
));

//
// Class: PC
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:PC' => 'PC',
	'Class:PC+' => '',
	'Class:PC/Attribute:cpu' => 'CPU',
	'Class:PC/Attribute:cpu+' => '',
	'Class:PC/Attribute:ram' => 'RAM',
	'Class:PC/Attribute:ram+' => '',
	'Class:PC/Attribute:hdd' => 'Disque dur',
	'Class:PC/Attribute:hdd+' => '',
	'Class:PC/Attribute:os_family' => 'OS - famille',
	'Class:PC/Attribute:os_family+' => '',
	'Class:PC/Attribute:os_version' => 'OS - version',
	'Class:PC/Attribute:os_version+' => '',
	'Class:PC/Attribute:application_list' => 'Applications',
	'Class:PC/Attribute:application_list+' => 'Applications installées sur ce PC',
	'Class:PC/Attribute:patch_list' => 'Patchs',
	'Class:PC/Attribute:patch_list+' => 'Patchs installés sur ce PC',
));

//
// Class: MobileCI
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:MobileCI' => 'CI mobile',
	'Class:MobileCI+' => '',
));

//
// Class: MobilePhone
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:MobilePhone' => 'Téléphone portable',
	'Class:MobilePhone+' => '',
	'Class:MobilePhone/Attribute:number' => 'Numéro de téléphone',
	'Class:MobilePhone/Attribute:number+' => '',
	'Class:MobilePhone/Attribute:imei' => 'IMEI',
	'Class:MobilePhone/Attribute:imei+' => '',
	'Class:MobilePhone/Attribute:hw_pin' => 'PIN matériel',
	'Class:MobilePhone/Attribute:hw_pin+' => '',
));


//
// Class: InfrastructureCI
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:InfrastructureCI' => 'CI d\'infrastructure',
	'Class:InfrastructureCI+' => '',
	'Class:InfrastructureCI/Attribute:description' => 'Description',
	'Class:InfrastructureCI/Attribute:description+' => '',
	'Class:InfrastructureCI/Attribute:location_id' => 'Lieu',
	'Class:InfrastructureCI/Attribute:location_id+' => '',
	'Class:InfrastructureCI/Attribute:location_name' => 'Lieu',
	'Class:InfrastructureCI/Attribute:location_name+' => '',
	'Class:InfrastructureCI/Attribute:location_details' => 'Détails sur le lieu',
	'Class:InfrastructureCI/Attribute:location_details+' => '',
	'Class:InfrastructureCI/Attribute:management_ip' => 'IP de gestion',
	'Class:InfrastructureCI/Attribute:management_ip+' => '',
	'Class:InfrastructureCI/Attribute:default_gateway' => '"Gateway" par défaut',
	'Class:InfrastructureCI/Attribute:default_gateway+' => '',
));

//
// Class: NetworkDevice
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:NetworkDevice' => 'Equipement réseau',
	'Class:NetworkDevice+' => '',
	'Class:NetworkDevice/Attribute:type' => 'Type',
	'Class:NetworkDevice/Attribute:type+' => '',
	'Class:NetworkDevice/Attribute:type/Value:wanaccelerator' => 'Accelerateur WAN',
	'Class:NetworkDevice/Attribute:type/Value:wanaccelerator+' => '',
	'Class:NetworkDevice/Attribute:type/Value:firewall' => 'Pare-feu',
	'Class:NetworkDevice/Attribute:type/Value:firewall+' => '',
	'Class:NetworkDevice/Attribute:type/Value:hub' => 'Hub',
	'Class:NetworkDevice/Attribute:type/Value:hub+' => '',
	'Class:NetworkDevice/Attribute:type/Value:loadbalancer' => 'Load Balancer',
	'Class:NetworkDevice/Attribute:type/Value:loadbalancer+' => '',
	'Class:NetworkDevice/Attribute:type/Value:router' => 'Routeur',
	'Class:NetworkDevice/Attribute:type/Value:router+' => '',
	'Class:NetworkDevice/Attribute:type/Value:switch' => 'Commutateur',
	'Class:NetworkDevice/Attribute:type/Value:switch+' => '',
	'Class:NetworkDevice/Attribute:ios_version' => 'Version IOS',
	'Class:NetworkDevice/Attribute:ios_version+' => '',
	'Class:NetworkDevice/Attribute:ram' => 'RAM',
	'Class:NetworkDevice/Attribute:ram+' => '',
	'Class:NetworkDevice/Attribute:snmp_read' => 'SNMP Lecture',
	'Class:NetworkDevice/Attribute:snmp_read+' => '',
	'Class:NetworkDevice/Attribute:snmp_write' => 'SNMP Ecriture',
	'Class:NetworkDevice/Attribute:snmp_write+' => '',
));

//
// Class: Server
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Server' => 'Serveur',
	'Class:Server+' => '',
	'Class:Server/Attribute:cpu' => 'CPU',
	'Class:Server/Attribute:cpu+' => '',
	'Class:Server/Attribute:ram' => 'RAM',
	'Class:Server/Attribute:ram+' => '',
	'Class:Server/Attribute:hdd' => 'Disque dur',
	'Class:Server/Attribute:hdd+' => '',
	'Class:Server/Attribute:os_family' => 'OS - famille',
	'Class:Server/Attribute:os_family+' => '',
	'Class:Server/Attribute:os_version' => 'OS - version',
	'Class:Server/Attribute:os_version+' => '',
	'Class:Server/Attribute:application_list' => 'Applications',
	'Class:Server/Attribute:application_list+' => 'Applications installées sur ce serveur',
	'Class:Server/Attribute:patch_list' => 'Patchs',
	'Class:Server/Attribute:patch_list+' => 'Patchs installés sur ce serveur',
));


//
// Class: Printer
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Printer' => 'Imprimante',
	'Class:Printer+' => '',
	'Class:Printer/Attribute:type' => 'Type',
	'Class:Printer/Attribute:type+' => '',
	'Class:Printer/Attribute:type/Value:mopier' => 'Tout-en-un',
	'Class:Printer/Attribute:type/Value:mopier+' => '',
	'Class:Printer/Attribute:type/Value:printer' => 'Imprimante seule',
	'Class:Printer/Attribute:type/Value:printer+' => '',
	'Class:Printer/Attribute:technology' => 'Technologie',
	'Class:Printer/Attribute:technology+' => '',
	'Class:Printer/Attribute:technology/Value:inkjet' => 'Jet d\'encre',
	'Class:Printer/Attribute:technology/Value:inkjet+' => '',
	'Class:Printer/Attribute:technology/Value:laser' => 'Laser',
	'Class:Printer/Attribute:technology/Value:laser+' => '',
	'Class:Printer/Attribute:technology/Value:tracer' => 'Traceur',
	'Class:Printer/Attribute:technology/Value:tracer+' => '',
));

//
// Class: lnkCIToDoc
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:lnkCIToDoc' => 'Document/CI',
	'Class:lnkCIToDoc+' => '',
	'Class:lnkCIToDoc/Attribute:ci_id' => 'CI',
	'Class:lnkCIToDoc/Attribute:ci_id+' => '',
	'Class:lnkCIToDoc/Attribute:ci_name' => 'CI',
	'Class:lnkCIToDoc/Attribute:ci_name+' => '',
	'Class:lnkCIToDoc/Attribute:ci_status' => 'Etat du CI',
	'Class:lnkCIToDoc/Attribute:ci_status+' => '',
	'Class:lnkCIToDoc/Attribute:document_id' => 'Document',
	'Class:lnkCIToDoc/Attribute:document_id+' => '',
	'Class:lnkCIToDoc/Attribute:document_name' => 'Document',
	'Class:lnkCIToDoc/Attribute:document_name+' => '',
	'Class:lnkCIToDoc/Attribute:document_type' => 'Type de document',
	'Class:lnkCIToDoc/Attribute:document_type+' => '',
	'Class:lnkCIToDoc/Attribute:document_status' => 'Etat du document',
	'Class:lnkCIToDoc/Attribute:document_status+' => '',
));

//
// Class: lnkCIToContact
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:lnkCIToContact' => 'CI/Contact',
	'Class:lnkCIToContact+' => '',
	'Class:lnkCIToContact/Attribute:ci_id' => 'CI',
	'Class:lnkCIToContact/Attribute:ci_id+' => '',
	'Class:lnkCIToContact/Attribute:ci_name' => 'CI',
	'Class:lnkCIToContact/Attribute:ci_name+' => '',
	'Class:lnkCIToContact/Attribute:ci_status' => 'Etat du CI',
	'Class:lnkCIToContact/Attribute:ci_status+' => '',
	'Class:lnkCIToContact/Attribute:contact_id' => 'Contact',
	'Class:lnkCIToContact/Attribute:contact_id+' => '',
	'Class:lnkCIToContact/Attribute:contact_name' => 'Contact',
	'Class:lnkCIToContact/Attribute:contact_name+' => '',
	'Class:lnkCIToContact/Attribute:contact_email' => 'Email du contact',
	'Class:lnkCIToContact/Attribute:contact_email+' => '',
	'Class:lnkCIToContact/Attribute:role' => 'Rôle',
	'Class:lnkCIToContact/Attribute:role+' => 'Rôle du contact vis-à-vis du CI',
));

//
// Class: lnkSolutionToCI
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:lnkSolutionToCI' => 'CI/Solution',
	'Class:lnkSolutionToCI+' => '',
	'Class:lnkSolutionToCI/Attribute:solution_id' => 'Solution applicative',
	'Class:lnkSolutionToCI/Attribute:solution_id+' => '',
	'Class:lnkSolutionToCI/Attribute:solution_name' => 'Solution applicative',
	'Class:lnkSolutionToCI/Attribute:solution_name+' => '',
	'Class:lnkSolutionToCI/Attribute:ci_id' => 'CI',
	'Class:lnkSolutionToCI/Attribute:ci_id+' => '',
	'Class:lnkSolutionToCI/Attribute:ci_name' => 'CI',
	'Class:lnkSolutionToCI/Attribute:ci_name+' => '',
	'Class:lnkSolutionToCI/Attribute:ci_status' => 'Etat du CI',
	'Class:lnkSolutionToCI/Attribute:ci_status+' => '',
	'Class:lnkSolutionToCI/Attribute:utility' => 'Utilisation',
	'Class:lnkSolutionToCI/Attribute:utility+' => 'Utilisation du CI dans la solution',
));

//
// Class: lnkProcessToSolution
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:lnkProcessToSolution' => 'Processus métier/Solution',
	'Class:lnkProcessToSolution+' => '',
	'Class:lnkProcessToSolution/Attribute:solution_id' => 'Solution applicative',
	'Class:lnkProcessToSolution/Attribute:solution_id+' => '',
	'Class:lnkProcessToSolution/Attribute:solution_name' => 'Solution applicative',
	'Class:lnkProcessToSolution/Attribute:solution_name+' => '',
	'Class:lnkProcessToSolution/Attribute:process_id' => 'Processus',
	'Class:lnkProcessToSolution/Attribute:process_id+' => '',
	'Class:lnkProcessToSolution/Attribute:process_name' => 'Processus',
	'Class:lnkProcessToSolution/Attribute:process_name+' => '',
	'Class:lnkProcessToSolution/Attribute:reason' => 'Raison',
	'Class:lnkProcessToSolution/Attribute:reason+' => 'Plus d\'information sur le lien entre ce processus et cette solution',
));



//
// Class extensions
//

Dict::Add('FR FR', 'French', 'Français', array(
'Class:Subnet/Tab:IPUsage' => 'IP utilisées',
'Class:Subnet/Tab:IPUsage-explain' => 'Interfaces ayant une IP dans la plage: <em>%1$s</em> à <em>%2$s</em>',
'Class:Subnet/Tab:FreeIPs' => 'IP disponibles',
'Class:Subnet/Tab:FreeIPs-count' => 'IP disponibles: %1$s',
'Class:Subnet/Tab:FreeIPs-explain' => 'Voici un échantillon de dix addresses IP disponibles',
));

//
// Application Menu
//

Dict::Add('FR FR', 'French', 'Français', array(
'Menu:Catalogs' => 'Catalogues',
'Menu:Catalogs+' => 'Types de données',
'Menu:Audit' => 'Audit',
'Menu:Audit+' => 'Audit',
'Menu:Organization' => 'Organisations',
'Menu:Organization+' => 'Toutes les organisations',
'Menu:Application' => 'Applications',
'Menu:Application+' => 'Toutes les applications',
'Menu:DBServer' => 'Serveurs de base de données',
'Menu:DBServer+' => 'Serveurs de base de données',
'Menu:Audit' => 'Audit',
'Menu:ConfigManagement' => 'Gestion de la configuration',
'Menu:ConfigManagement+' => 'Gestion de la configuration',
'Menu:ConfigManagementOverview' => 'Vue d\'ensemble',
'Menu:ConfigManagementOverview+' => 'Vue d\'ensemble',
'Menu:Contact' => 'Contacts',
'Menu:Contact+' => 'Contacts',
'Menu:Person' => 'Personnes',
'Menu:Person+' => 'Toutes les personnes',
'Menu:Team' => 'Equipes',
'Menu:Team+' => 'Toutes les équipes',
'Menu:Document' => 'Documents',
'Menu:Document+' => 'Tous les documents',
'Menu:Location' => 'Lieux',
'Menu:Location+' => 'Tous les lieux',
'Menu:ConfigManagementCI' => 'CIs',
'Menu:ConfigManagementCI+' => 'CIs',
'Menu:BusinessProcess' => 'Processus métier',
'Menu:BusinessProcess+' => 'Tous les processus métier',
'Menu:ApplicationSolution' => 'Solutions applicatives',
'Menu:ApplicationSolution+' => 'Toutes les solutions applicatives',
'Menu:ConfigManagementSoftware' => 'Gestion des applications',
'Menu:Licence' => 'Licences',
'Menu:Licence+' => 'Toutes les licences',
'Menu:Patch' => 'Patchs',
'Menu:Patch+' => 'Tous les patchs',
'Menu:ApplicationInstance' => 'Logiciels installés',
'Menu:ApplicationInstance+' => 'Applications et serveur de base de données',
'Menu:ConfigManagementHardware' => 'Gestion de l\'infrastructure',
'Menu:Subnet' => 'Sous-réseaux',
'Menu:Subnet+' => 'Tous les sous-réseaux',
'Menu:NetworkDevice' => 'Equipments réseau',
'Menu:NetworkDevice+' => 'Tous les équipments réseau',
'Menu:Server' => 'Serveurs',
'Menu:Server+' => 'Tous les serveurs',
'Menu:Printer' => 'Imprimantes',
'Menu:Printer+' => 'Toutes les imprimantes',
'Menu:MobilePhone' => 'Téléphones portables',
'Menu:MobilePhone+' => 'Tous les téléphones portables',
'Menu:PC' => 'Ordinateurs personnels',
'Menu:PC+' => 'Tous les ordinateurs personnels',
));
?>
