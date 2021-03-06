<?php 
/*
 * LandedCostCalculationAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace LandedCostCalculationAPILib\Models;

use JsonSerializable;

/**
 * The discount to apply at the shipment level
 */
class Discount implements JsonSerializable {
    /**
     * A flate amount to discount the shipment or item
     * @var double $amount public property
     */
    public $amount;

    /**
     * A percentage to discount the shipment or item
     * @var double $rate public property
     */
    public $rate;

    /**
     * The type of discount to apply. Currently, the system only supports sales discounts offered directly to consumers
     * @var string $type public property
     */
    public $type;

    /**
     * Constructor to set initial or default values of member properties
     * @param   double            $amount   Initialization value for the property $this->amount
     * @param   double            $rate     Initialization value for the property $this->rate  
     * @param   string            $type     Initialization value for the property $this->type  
     */
    public function __construct()
    {
        if(3 == func_num_args())
        {
            $this->amount = func_get_arg(0);
            $this->rate   = func_get_arg(1);
            $this->type   = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['amount'] = $this->amount;
        $json['rate']   = $this->rate;
        $json['type']   = $this->type;

        return $json;
    }
}