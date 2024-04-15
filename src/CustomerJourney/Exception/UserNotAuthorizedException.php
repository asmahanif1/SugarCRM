<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

namespace Sugarcrm\Sugarcrm\CustomerJourney\Exception;

/**
 * This action is not allowed for this user
 */
class UserNotAuthorizedException extends InvalidLicenseException
{
    /**
     * @var integer
     */
    public $httpCode = 403;

    /**
     * @var string
     */
    public $errorLabel = 'invalid_license';

    /**
     * @var string
     */
    public $messageLabel = 'ERROR_USER_MISSING_ACCESS';
}
