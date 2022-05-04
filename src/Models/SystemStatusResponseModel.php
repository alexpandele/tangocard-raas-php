<?php
/*
 * Raas
 *
 * This file was automatically generated for Tango Card, Inc. by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace RaasLib\Models;

use JsonSerializable;

/**
 *Represents the response returned from the status endpoint
 */
class SystemStatusResponseModel implements JsonSerializable
{
    /**
     * The status of the system
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $status Initialization value for $this->status
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->status = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['status'] = $this->status;

        return $json;
    }
}
