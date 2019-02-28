<?php
/*
 * ContentTools
 *
 * This file was automatically generated for Content Tools by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ContentToolsLib\Controllers;

use ContentToolsLib\APIException;
use ContentToolsLib\APIHelper;
use ContentToolsLib\Configuration;
use ContentToolsLib\Models;
use ContentToolsLib\Exceptions;
use ContentToolsLib\Http\HttpRequest;
use ContentToolsLib\Http\HttpResponse;
use ContentToolsLib\Http\HttpMethod;
use ContentToolsLib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class APIController extends BaseController
{
    /**
     * @var APIController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return APIController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Analyse the sentiment of text
     *
     * @param string $text Text to be analysed
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createSentiment(
        $text
    ) {

        //prepare query string for API call
        $_queryBuilder = '/analyse/sentiment';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::$BASEURI . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'Authorization' => sprintf('Bearer %1$s', Configuration::$oAuthAccessToken)
        );

        //prepare parameters
        $_parameters = array (
            'text' => $text
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl, $_parameters);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, Request\Body::Form($_parameters));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'ContentToolsLib\\Models\\SentimentScore');
    }
}
