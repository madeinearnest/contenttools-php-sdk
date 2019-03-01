<?php
/*
 * ContentTools
 *
 * This file was automatically generated for Content Tools by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ContentToolsLib;

use ContentToolsLib\Controllers;

/**
 * ContentTools client class
 */
class ContentToolsClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $oAuthAccessToken = null
    ) {
        Configuration::$oAuthAccessToken = $oAuthAccessToken ? $oAuthAccessToken : Configuration::$oAuthAccessToken;
    }
    /**
     * Singleton access to API controller
     * @return Controllers\APIController The *Singleton* instance
     */
    public function getClient()
    {
        return Controllers\APIController::getInstance();
    }
    /**
     * Singleton access to API controller
     * @return Controllers\APIController The *Singleton* instance
     */
    public function getClient()
    {
        return Controllers\APIController::getInstance();
    }
}
