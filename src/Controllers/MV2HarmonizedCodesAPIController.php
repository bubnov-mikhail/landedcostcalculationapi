<?php
/*
 * LandedCostCalculationAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace LandedCostCalculationAPILib\Controllers;

use LandedCostCalculationAPILib\APIException;
use LandedCostCalculationAPILib\APIHelper;
use LandedCostCalculationAPILib\Configuration;
use LandedCostCalculationAPILib\Models;
use LandedCostCalculationAPILib\Exceptions;
use LandedCostCalculationAPILib\Http\HttpRequest;
use LandedCostCalculationAPILib\Http\HttpResponse;
use LandedCostCalculationAPILib\Http\HttpMethod;
use LandedCostCalculationAPILib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class MV2HarmonizedCodesAPIController extends BaseController {

    /**
     * @var MV2HarmonizedCodesAPIController The reference to *Singleton* instance of this class
     */
    private static $instance;
    
    /**
     * Returns the *Singleton* instance of this class.
     * @return MV2HarmonizedCodesAPIController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Presents all of the available Harmonized Codes as a browesable tree. Each request specifies a parent node, and the response lists all child nodes of that parent. If no parent node is specified, all root-level nodes will be returned
     * @param  string     $parent     Optional parameter: The name of the parent node. Note that it is important to use the name of the node, as not all nodes have a harmonized code, and the code itself is different than the name
     * @param  string     $system     Optional parameter: The classification system you want to browse.
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getBrowseHSData (
                $parent = NULL,
                $system = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v2/browse';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'parent' => $parent,
            'system' => $system,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse,$_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapArray($response->body, array(), new Models\BrowseHSDataResponse());
    }
        
    /**
     * Search for Duty Rates for a harmonized code. Rates are dependant on at least a destination country
     * @param  string     $code            Required parameter: The harmonized code
     * @param  string     $destination     Required parameter: The destination country for which rate data is desired
     * @param  string     $system          Required parameter: The classification system to which the code belongs
     * @param  string     $source          Optional parameter: An optional filter for rates that limits results to a specific origin country
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRateDetails (
                $code,
                $destination,
                $system,
                $source = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v2/hscodes';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'code'        => $code,
            'destination' => $destination,
            'system'      => $system,
            'source'      => $source,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse,$_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapArray($response->body, array(), new Models\GetRateDetailsResponse());
    }
        
    /**
     * Allows for the traversal of classification system, harmonized codes, and duty rates, allowing the user to browse the available content
     * @param  string     $code         Required parameter: The harmonized code within a system. If code is provided, system must also be provided
     * @param  string     $system       Required parameter: The classification system. If omitted, the response will be all current classification systems
     * @param  bool       $fullpath     Optional parameter: If present, the response will include the entire chapter, subchapter, etc. and description data for a code
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getRateData (
                $code,
                $system,
                $fullpath = NULL) 
    {
        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/v2/hscodes/{system}/{code}';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'code'     => $code,
            'system'   => $system,
            ));

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'fullpath' => var_export($fullpath, true),
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'Accept'        => 'application/json'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse,$_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapArray($response->body, array(), new Models\GetRateDataResponse());
    }
        

}