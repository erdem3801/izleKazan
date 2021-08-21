<?php

namespace App\Controllers;

use App\Models\videosModel;
use App\Models\walletModel;

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

        $videoModel = model('videosModel');
        $walletModel = model('walletModel');

        $viewData['videos'] = $videoModel->where('userId !=', session()->get('userData.ID'))->findAll();
        $viewData['wallet']  = $walletModel->where('userId', session()->get('userData.ID'))->first();

        return view("{$this->viewFolder}/{$view}View", $viewData);
        # code...
    }
}
