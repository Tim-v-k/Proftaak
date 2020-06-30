<?php
// Simple wrapper class to hold json result
class JsonResult {
    public $amount;
    public $value;
 
    // Constructor for PHP object
    function __construct($value) {
        $this->amount = 1;
        $this->value = $value;
 
        if(gettype($this->value) == "array") {
            $this->amount = sizeof($this->value);
        }
    }
}