<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\videosModel;

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

        $videoModel = model('videosModel');
        $vid = $this->request->getGet('vi');
        $viewData['video'] = $videoModel->find($vid);
        if(!$viewData['video']){
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Video  {$vid}");
        }
		
        return view("{$this->viewFolder}/{$view}View", $viewData);
	}
}
