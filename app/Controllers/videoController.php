<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class videoController extends BaseController
{
	private $viewFolder;

    public function __construct()
    {
        $this->viewFolder = "videoView";
    }
	public function view()
	{
		$locale = $this->request->getLocale();
        $viewData['locale'] = $locale;
        $view = __FUNCTION__;
        $viewData['videoID'] = $this->request->getGet('vi');
		
        return view("{$this->viewFolder}/{$view}View", $viewData);
	}
}
