<?php
$viewdefs['Opportunities'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'link' => true,
                'label' => 'LBL_LIST_OPPORTUNITY_NAME',
                'enabled' => true,
                'default' => true,
                'related_fields' => 
                array (
                  0 => 'total_revenue_line_items',
                  1 => 'closed_revenue_line_items',
                  2 => 'included_revenue_line_items',
                ),
              ),
              1 => 
              array (
                'name' => 'account_name',
                'link' => true,
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
              ),
              2 => 
              array (
                'name' => 'date_closed',
                'type' => 'date-cascade',
                'label' => 'LBL_DATE_CLOSED',
                'enabled' => true,
                'default' => true,
                'disable_field' => 
                array (
                  0 => 'total_revenue_line_items',
                  1 => 'closed_revenue_line_items',
                ),
              ),
              3 => 
              array (
                'name' => 'sales_status',
                'label' => 'LBL_SALES_STATUS',
                'default' => true,
                'enabled' => true,
                'type' => 'enum',
              ),
              4 => 
              array (
                'name' => 'sales_stage',
                'type' => 'enum-cascade',
                'label' => 'LBL_LIST_SALES_STAGE',
                'enabled' => true,
                'default' => true,
                'disable_field' => 
                array (
                  0 => 'total_revenue_line_items',
                  1 => 'closed_revenue_line_items',
                ),
              ),
              5 => 
              array (
                'name' => 'commit_stage',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'forecasted_likely',
                'comment' => 'Rollup of included RLIs on the Opportunity',
                'readonly' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_FORECASTED_LIKELY',
                'span' => 6,
                'default' => true,
                'enabled' => true,
              ),
              7 => 
              array (
                'name' => 'lost',
                'comment' => 'Rollup of lost RLIs on the Opportunity',
                'readonly' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_LOST',
                'default' => true,
                'enabled' => true,
              ),
              8 => 
              array (
                'name' => 'amount',
                'type' => 'currency',
                'label' => 'LBL_LIKELY',
                'related_fields' => 
                array (
                  0 => 'amount',
                  1 => 'currency_id',
                  2 => 'base_rate',
                ),
                'currency_field' => 'currency_id',
                'base_rate_field' => 'base_rate',
                'enabled' => true,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'opportunity_type',
                'label' => 'LBL_TYPE',
                'enabled' => true,
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'lead_source',
                'label' => 'LBL_LEAD_SOURCE',
                'enabled' => true,
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'next_step',
                'label' => 'LBL_NEXT_STEP',
                'enabled' => true,
                'default' => true,
              ),
              12 => 
              array (
                'name' => 'probability',
                'label' => 'LBL_PROBABILITY',
                'enabled' => true,
                'default' => true,
              ),
              13 => 
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
                'sortable' => true,
              ),
              14 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => true,
                'sortable' => true,
              ),
              15 => 
              array (
                'name' => 'modified_by_name',
                'label' => 'LBL_MODIFIED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
                'sortable' => true,
              ),
              16 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
              17 => 
              array (
                'name' => 'my_text_field',
                'label' => 'LBL_TEXT_FIELD_EXAMPLE',
                'enabled' => true,
                'default' => true,
              ),
              18 => 
              array (
                'name' => 'service_start_date',
                'type' => 'date-cascade',
                'label' => 'LBL_SERVICE_START_DATE',
                'disable_field' => 'service_open_revenue_line_items',
                'related_fields' => 
                array (
                  0 => 'service_open_revenue_line_items',
                ),
                'default' => false,
                'enabled' => true,
              ),
              19 => 
              array (
                'name' => 'service_duration',
                'type' => 'fieldset-cascade',
                'label' => 'LBL_SERVICE_DURATION',
                'inline' => true,
                'show_child_labels' => false,
                'css_class' => 'service-duration-field',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'service_duration_value',
                    'label' => 'LBL_SERVICE_DURATION_VALUE',
                  ),
                  1 => 
                  array (
                    'name' => 'service_duration_unit',
                    'label' => 'LBL_SERVICE_DURATION_UNIT',
                  ),
                ),
                'orderBy' => 'service_duration_unit',
                'related_fields' => 
                array (
                  0 => 'service_duration_value',
                  1 => 'service_duration_unit',
                  2 => 'service_open_flex_duration_rlis',
                ),
                'disable_field' => 'service_open_flex_duration_rlis',
                'default' => false,
                'enabled' => true,
              ),
              20 => 
              array (
                'name' => 'is_escalated',
                'label' => 'LBL_ESCALATED',
                'badge_label' => 'LBL_ESCALATED',
                'warning_level' => 'important',
                'type' => 'badge',
                'enabled' => true,
                'default' => false,
              ),
              21 => 
              array (
                'name' => 'team_name',
                'type' => 'teamset',
                'label' => 'LBL_LIST_TEAM',
                'enabled' => true,
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
