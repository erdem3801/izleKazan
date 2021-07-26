<?php

namespace App\Controllers;


class controlCenterController extends BaseController
{
    private $viewFolder;

    public function __construct()
    {
        $this->viewFolder = "controlCenterView";
    }
    public function advertiser()
    {
        $locale = $this->request->getLocale();
        $viewData['locale'] = $locale;
        $view = __FUNCTION__;

      
        return view("{$this->viewFolder}/{$view}View", $viewData);
        # code...
    }
    public function user()
    {
        $locale = $this->request->getLocale();
        $viewData['locale'] = $locale;
        $view = __FUNCTION__;

      
        return view("{$this->viewFolder}/{$view}View", $viewData);
        # code...
    }
}
