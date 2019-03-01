<?php
/*
 * ContentTools
 *
 * This file was automatically generated for Content Tools by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ContentToolsLib\Models;

use JsonSerializable;

/**
 *Topic Model
 */
class Topic implements JsonSerializable
{
    /**
     * The confidence of the value returned
     * @required
     * @var integer $confidence public property
     */
    public $confidence;

    /**
     * The closest found category
     * @required
     * @var string $category public property
     */
    public $category;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $confidence Initialization value for $this->confidence
     * @param string  $category   Initialization value for $this->category
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->confidence = func_get_arg(0);
            $this->category   = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['confidence'] = $this->confidence;
        $json['category']   = $this->category;

        return $json;
    }
}
