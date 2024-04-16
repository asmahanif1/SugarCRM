<?php
$dictionary["Meeting"]["fields"]["contracts_meetings_2"] = array (
  'name' => 'contracts_meetings_2',
  'type' => 'link',
  'relationship' => 'contracts_meetings_2',
  'source' => 'non-db',
  'module' => 'Contracts',
  'bean_name' => 'Contract',
);
$dictionary["Meeting"]["fields"]["contracts_meetings_2_name"] = array (
  'name' => 'contracts_meetings_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTRACTS_MEETINGS_2_FROM_CONTRACTS_TITLE',
  'save' => true,
  'id_name' => 'contracts_meetings_2contracts_ida',
  'link' => 'contracts_meetings_2',
  'table' => 'contracts',
  'module' => 'Contracts',
  'rname' => 'name',
);
$dictionary["Meeting"]["fields"]["contracts_meetings_2contracts_ida"] = array (
  'name' => 'contracts_meetings_2contracts_ida',
  'type' => 'id',
  'vname' => 'LBL_CONTRACTS_MEETINGS_2_FROM_MEETINGS_TITLE_ID',
  'id_name' => 'contracts_meetings_2contracts_ida',
  'link' => 'contracts_meetings_2',
  'table' => 'contracts',
  'module' => 'Contracts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
  'dbType'  => 'id',
);

$dictionary['Meeting']['relationships']['contracts_meetings_2'] = array(
  'lhs_module' => 'Meetings',
    'lhs_table' => 'meetings',
    'lhs_key' => 'contracts_meetings_2contracts_ida',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'id',
    'relationship_type'	=> 'one-to-many',
  );
