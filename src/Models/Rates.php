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
class Rates implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @var Duties[] $duties public property
     */
    public $duties;

    /**
     * @todo Write general description for this property
     * @var Taxes[] $taxes public property
     */
    public $taxes;

    /**
     * Constructor to set initial or default values of member properties
     * @param   array             $duties   Initialization value for the property $this->duties
     * @param   array             $taxes    Initialization value for the property $this->taxes 
     */
    public function __construct()
    {
        if(2 == func_num_args())
        {
            $this->duties = func_get_arg(0);
            $this->taxes  = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['duties'] = $this->duties;
        $json['taxes']  = $this->taxes;

        return $json;
    }
}