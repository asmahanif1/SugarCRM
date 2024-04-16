<?php
// created: 2024-04-15 18:59:19
$dictionary["Meeting"]["fields"]["contracts_meetings_1"] = array (
  'name' => 'contracts_meetings_1',
  'type' => 'link',
  'relationship' => 'contracts_meetings_1',
  'source' => 'non-db',
  'module' => 'Contracts',
  'bean_name' => 'Contract',
  'side' => 'right',
  'vname' => 'LBL_CONTRACTS_MEETINGS_1_FROM_MEETINGS_TITLE',
  'id_name' => 'contracts_meetings_1contracts_ida',
  'link-type' => 'one',
);
$dictionary["Meeting"]["fields"]["contracts_meetings_1_name"] = array (
  'name' => 'contracts_meetings_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTRACTS_MEETINGS_1_FROM_CONTRACTS_TITLE',
  'save' => true,
  'id_name' => 'contracts_meetings_1contracts_ida',
  'link' => 'contracts_meetings_1',
  'table' => 'contracts',
  'module' => 'Contracts',
  'rname' => 'name',
);
$dictionary["Meeting"]["fields"]["contracts_meetings_1contracts_ida"] = array (
  'name' => 'contracts_meetings_1contracts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CONTRACTS_MEETINGS_1_FROM_MEETINGS_TITLE_ID',
  'id_name' => 'contracts_meetings_1contracts_ida',
  'link' => 'contracts_meetings_1',
  'table' => 'contracts',
  'module' => 'Contracts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
