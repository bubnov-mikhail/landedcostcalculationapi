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
class Obligations implements JsonSerializable {
    /**
     * Obligations the buyer is responsible for paying
     * @required
     * @var Obligation[] $buyer public property
     */
    public $buyer;

    /**
     * Constructor to set initial or default values of member properties
     * @param   array             $buyer   Initialization value for the property $this->buyer
     */
    public function __construct()
    {
        if(1 == func_num_args())
        {
            $this->buyer = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['buyer'] = $this->buyer;

        return $json;
    }
}