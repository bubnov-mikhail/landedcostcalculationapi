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
class GetRateDetailsResponse implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var CodePath[] $codePath public property
     */
    public $codePath;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $hsCode public property
     */
    public $hsCode;

    /**
     * @todo Write general description for this property
     * @required
     * @var Rate[] $rates public property
     */
    public $rates;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $system public property
     */
    public $system;

    /**
     * Constructor to set initial or default values of member properties
     * @param   array             $codePath   Initialization value for the property $this->codePath
     * @param   string            $hsCode     Initialization value for the property $this->hsCode  
     * @param   array             $rates      Initialization value for the property $this->rates   
     * @param   string            $system     Initialization value for the property $this->system  
     */
    public function __construct()
    {
        if(4 == func_num_args())
        {
            $this->codePath = func_get_arg(0);
            $this->hsCode   = func_get_arg(1);
            $this->rates    = func_get_arg(2);
            $this->system   = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['codePath'] = $this->codePath;
        $json['hsCode']   = $this->hsCode;
        $json['rates']    = $this->rates;
        $json['system']   = $this->system;

        return $json;
    }
}