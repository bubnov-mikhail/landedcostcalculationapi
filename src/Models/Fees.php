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
class Fees implements JsonSerializable {
    /**
     * Fees subtotal
     * @required
     * @var double $amount public property
     */
    public $amount;

    /**
     * @todo Write general description for this property
     * @required
     * @var FeeDetail[] $details public property
     */
    public $details;

    /**
     * Constructor to set initial or default values of member properties
     * @param   double            $amount    Initialization value for the property $this->amount 
     * @param   array             $details   Initialization value for the property $this->details
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->amount  = func_get_arg(0);
            $this->details = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['amount']  = $this->amount;
        $json['details'] = $this->details;

        return $json;
    }
}