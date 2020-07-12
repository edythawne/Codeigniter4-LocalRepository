<?php namespace App\Controllers;

class IndexController extends BaseController {

    // Variable
    private $context = [];

    /**
     * IndexController constructor.
     */
    public function __construct() {

    }

    /**
     * Index
     */
    public function index() {
        $this->context["html"]["title"] = "Repository";
        return view("index", $this->context);
    }

}
