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
class Details implements JsonSerializable {
    /**
     * @todo Write general description for this property
     * @required
     * @var Items $items public property
     */
    public $items;

    /**
     * @todo Write general description for this property
     * @required
     * @var Items $shipping public property
     */
    public $shipping;

    /**
     * @todo Write general description for this property
     * @var Discounts $discounts public property
     */
    public $discounts;

    /**
     * @todo Write general description for this property
     * @var Items55 $duties public property
     */
    public $duties;

    /**
     * @todo Write general description for this property
     * @var Items59 $fees public property
     */
    public $fees;

    /**
     * @todo Write general description for this property
     * @var Items57 $taxes public property
     */
    public $taxes;

    /**
     * Constructor to set initial or default values of member properties
     * @param   Items             $items       Initialization value for the property $this->items    
     * @param   Items             $shipping    Initialization value for the property $this->shipping 
     * @param   Discounts         $discounts   Initialization value for the property $this->discounts
     * @param   Items55           $duties      Initialization value for the property $this->duties   
     * @param   Items59           $fees        Initialization value for the property $this->fees     
     * @param   Items57           $taxes       Initialization value for the property $this->taxes    
     */
    public function __construct()
    {
        if(6 == func_num_args())
        {
            $this->items     = func_get_arg(0);
            $this->shipping  = func_get_arg(1);
            $this->discounts = func_get_arg(2);
            $this->duties    = func_get_arg(3);
            $this->fees      = func_get_arg(4);
            $this->taxes     = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['items']     = $this->items;
        $json['shipping']  = $this->shipping;
        $json['discounts'] = $this->discounts;
        $json['duties']    = $this->duties;
        $json['fees']      = $this->fees;
        $json['taxes']     = $this->taxes;

        return $json;
    }
}