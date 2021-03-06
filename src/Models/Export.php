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
class Export implements JsonSerializable {
    /**
     * The classification system. Must be one of:
     * * TARIC
     * * SCHEDULEB
     * * HTS
     * @var string $system public property
     */
    public $system;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $system   Initialization value for the property $this->system
     */
    public function __construct()
    {
        if(1 == func_num_args())
        {
            $this->system = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['system'] = $this->system;

        return $json;
    }
}