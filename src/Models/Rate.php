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
class Rate implements JsonSerializable {
    /**
     * The three-character ISO code for the currency in which the duty should be assessed
     * @var string $currency public property
     */
    public $currency;

    /**
     * The customs value describes how to apply the duty rate. There are two current types
     *  * fob
     *  * cif
     * @var string $customsValue public property
     */
    public $customsValue;

    /**
     * The formula used to calculate the rate, presented in Avalara-specific format
     * @var string $formula public property
     */
    public $formula;

    /**
     * The human-readable version of the rate
     * @var string $raw public property
     */
    public $raw;

    /**
     * @todo Write general description for this property
     * @var array $required public property
     */
    public $required;

    /**
     * The two-character ISO code identifying the origin country associated with the duty
     * @var string $sourceCountry public property
     */
    public $sourceCountry;

    /**
     * There are three types of landed cost rates that may be returned.
     *  * ad valorem: this rate applies to the declared `customs-value` This is typically represented as a percentage of the cost.
     *  * units: this is a rate that is tied to unit of meaure. This is typically expressed as a monetary value per quantity, such as: $1/kg
     *  * unknown: there is no stored rate data (or no applicable taxes) for the specified combination. Note that these will always have `"formula": "notax()"
     * @var string $type public property
     */
    public $type;

    /**
     * If the rate is assessed at a unit level, the appropriate unit involved. If `type` is not `units`, this value will be an empty string
     * @var string $unit public property
     */
    public $unit;

    /**
     * Constructor to set initial or default values of member properties
     * @param   string            $currency        Initialization value for the property $this->currency     
     * @param   string            $customsValue    Initialization value for the property $this->customsValue 
     * @param   string            $formula         Initialization value for the property $this->formula      
     * @param   string            $raw             Initialization value for the property $this->raw          
     * @param   array             $required        Initialization value for the property $this->required     
     * @param   string            $sourceCountry   Initialization value for the property $this->sourceCountry
     * @param   string            $type            Initialization value for the property $this->type         
     * @param   string            $unit            Initialization value for the property $this->unit         
     */
    public function __construct()
    {
        if(8 == func_num_args())
        {
            $this->currency      = func_get_arg(0);
            $this->customsValue  = func_get_arg(1);
            $this->formula       = func_get_arg(2);
            $this->raw           = func_get_arg(3);
            $this->required      = func_get_arg(4);
            $this->sourceCountry = func_get_arg(5);
            $this->type          = func_get_arg(6);
            $this->unit          = func_get_arg(7);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['currency']      = $this->currency;
        $json['customsValue']  = $this->customsValue;
        $json['formula']       = $this->formula;
        $json['raw']           = $this->raw;
        $json['required']      = $this->required;
        $json['sourceCountry'] = $this->sourceCountry;
        $json['type']          = $this->type;
        $json['unit']          = $this->unit;

        return $json;
    }
}