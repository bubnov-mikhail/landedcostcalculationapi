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
class TaxDetail45 implements JsonSerializable {
    /**
     * Tax amount
     * @required
     * @var double $amount public property
     */
    public $amount;

    /**
     * Tax name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Constructor to set initial or default values of member properties
     * @param   double            $amount   Initialization value for the property $this->amount
     * @param   string            $name     Initialization value for the property $this->name  
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->amount = func_get_arg(0);
            $this->name   = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['amount'] = $this->amount;
        $json['name']   = $this->name;

        return $json;
    }
}