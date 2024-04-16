<?php
// created: 2024-04-15 18:59:19
$dictionary["contracts_meetings_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'contracts_meetings_1' => 
    array (
      'lhs_module' => 'Contracts',
      'lhs_table' => 'contracts',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'contracts_meetings_1_c',
      'join_key_lhs' => 'contracts_meetings_1contracts_ida',
      'join_key_rhs' => 'contracts_meetings_1meetings_idb',
    ),
  ),
  'table' => 'contracts_meetings_1_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'contracts_meetings_1contracts_ida' => 
    array (
      'name' => 'contracts_meetings_1contracts_ida',
      'type' => 'id',
    ),
    'contracts_meetings_1meetings_idb' => 
    array (
      'name' => 'contracts_meetings_1meetings_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_contracts_meetings_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_contracts_meetings_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contracts_meetings_1contracts_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_contracts_meetings_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contracts_meetings_1meetings_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'contracts_meetings_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'contracts_meetings_1meetings_idb',
      ),
    ),
  ),
);