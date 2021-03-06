<?php

namespace Carlead\Zoho\CRM\Exception;

/**
 * Zoho CRM Exception.
 *
 * Standard Exception thrown when using this package
 *
 * @version 1.0.0
 */
class ZohoCRMException extends \Exception
{
    /**
     * The error code cannot be stored in the "$code" property because it is converted to integer, and we have some decimals/strings.
     *
     * @var string
     */
    private $zohoCode;

    public function __construct($message, $code = 0, Exception $exception = null)
    {
        $this->zohoCode = $code;
        parent::__construct($message, $code, $exception);
    }

    public function getZohoCode()
    {
        return $this->zohoCode;
    }
}
