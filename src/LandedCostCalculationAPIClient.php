<?php
/*
 * LandedCostCalculationAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace LandedCostCalculationAPILib;

use LandedCostCalculationAPILib\Controllers;

/**
 * LandedCostCalculationAPILib client class
 */
class LandedCostCalculationAPIClient
{
 
    /**
     * Singleton access to LandedCostCalculationAPI controller
     * @return Controllers\LandedCostCalculationAPIController The *Singleton* instance
     */
    public function getLandedCostCalculationAPI()
    {
        return Controllers\LandedCostCalculationAPIController::getInstance();
    }
 
    /**
     * Singleton access to MV2CountryAndClassificationAPI controller
     * @return Controllers\MV2CountryAndClassificationAPIController The *Singleton* instance
     */
    public function getMV2CountryAndClassificationAPI()
    {
        return Controllers\MV2CountryAndClassificationAPIController::getInstance();
    }
 
    /**
     * Singleton access to MV2HarmonizedCodesAPI controller
     * @return Controllers\MV2HarmonizedCodesAPIController The *Singleton* instance
     */
    public function getMV2HarmonizedCodesAPI()
    {
        return Controllers\MV2HarmonizedCodesAPIController::getInstance();
    }
}