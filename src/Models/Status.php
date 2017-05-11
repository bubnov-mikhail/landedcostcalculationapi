<?php 
/*
 * LandedCostCalculationAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace LandedCostCalculationAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class Status implements JsonSerializable {
    /**
     * The response status
     * @required
     * @var string $result public property
     */
    public $result;

    /**
     * The response messages, if any apply
     * @var array $messages public property
     */
    public $messages;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $result     Initialization value for the property $this->result  
     * @param   array             $messages   Initialization value for the property $this->messages
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->result   = func_get_arg(0);
            $this->messages = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['result']   = $this->result;
        $json['messages'] = $this->messages;

        return $json;
    }
}