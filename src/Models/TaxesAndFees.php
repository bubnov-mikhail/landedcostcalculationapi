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
class TaxesAndFees implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @var Duties35 $duties public property
     */
    public $duties;

    /**
     * @todo Write general description for this property
     * @var Fees $fees public property
     */
    public $fees;

    /**
     * @todo Write general description for this property
     * @var Taxes37 $taxes public property
     */
    public $taxes;

    /**
     * Constructor to set initial or default values of member properties
     * @param   Duties35          $duties   Initialization value for the property $this->duties
     * @param   Fees              $fees     Initialization value for the property $this->fees  
     * @param   Taxes37           $taxes    Initialization value for the property $this->taxes 
     */
    public function __construct()
    {
        if(3 == func_num_args())
        {
            $this->duties = func_get_arg(0);
            $this->fees   = func_get_arg(1);
            $this->taxes  = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['duties'] = $this->duties;
        $json['fees']   = $this->fees;
        $json['taxes']  = $this->taxes;

        return $json;
    }
}