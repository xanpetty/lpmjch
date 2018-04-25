<?php

    // demonstrates calling the parent class constructor

    $object = new Tiger();

    echo "Tigers have...<br>";
    echo "Fur: " . $object->fur . "<br>";
    echo "Stripes: " . $object->stripes;

    class Wildcat
    {
        public $fur; // wildcats have fur

        function __construct() { $this->fur = "true"; }

    }

    class Tiger extends Wildcat
    {
        public $stripes;    // tigers have stripes

        function __construct()     // call parent constructor first
        {
            parent::__construct(); // call parent constructor first
            $this->stripes = "true";
        }
    }
