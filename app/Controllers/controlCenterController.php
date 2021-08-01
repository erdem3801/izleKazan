<?php

namespace App\Controllers;


class controlCenterController extends BaseController
{
    private $viewFolder;

    public function __construct()
    {
        $this->viewFolder = "controlCenterView";
    }
    public function controlCenter()
    {
        $locale = $this->request->getLocale();
        $viewData['locale'] = $locale;
        $view = __FUNCTION__;

        $videoUrl = "https://www.youtube.com/watch?v=v0QTdCHX_-c";
        $parts = parse_url($videoUrl , PHP_URL_QUERY);
        parse_str($parts, $query);
        $viewData['videoID'] = $query['v'];
       

        return view("{$this->viewFolder}/{$view}View", $viewData);
        # code...
    }
}
