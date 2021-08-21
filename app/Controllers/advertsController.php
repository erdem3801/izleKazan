<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\videosModel;

class advertsController extends BaseController
{
	private $viewFolder;

	public function __construct()
	{
		$this->viewFolder = "advertsView";
	}
	public function addAdvert()
	{
		$locale = $this->request->getLocale();
		$viewData['locale'] = $locale;
		$view = __FUNCTION__;

		return view("{$this->viewFolder}/{$view}View", $viewData);

		//
	}
	public function budget()
	{
		$locale = $this->request->getLocale();
		$viewData['locale'] = $locale;
		$view = __FUNCTION__;

		return view("{$this->viewFolder}/{$view}View", $viewData);

		# code...
	}
	public function myAds()
	{
	 
		$locale = $this->request->getLocale();
		$viewData['locale'] = $locale;
		$videoModel = model('videosModel');
		$viewData['myAds'] = $videoModel->where('userId' , session()->get('userData.ID'))->findAll();
		$view = __FUNCTION__;

		return view("{$this->viewFolder}/{$view}View", $viewData);
		# code...
	}
	public function addVideo()
    {
		$videoModel = model('videosModel');
		$locale = $this->request->getLocale();
		 
		if($this->request->getMethod()=='post'){
			$queryData = $this->request->getPost();
			if($this->request->getPost('submit') == 'save'){
				$queryData['isStart'] = 0;
			}
			elseif($this->request->getPost('submit') == 'start'){
				$queryData['isStart'] = 1;
			}
			$link = $queryData['link'];
			
			$parts = parse_url($link , PHP_URL_QUERY);
			parse_str($parts, $query);
			$queryData['videoId'] = $query['v'];

			$queryData['duration'] = $queryData['duration']*5;
			$queryData['userId'] = session()->get('userData.ID');
			$videoModel->insert($queryData);
			
			return redirect()->to(base_url("{$locale}/adverts/myAds"));

		}
		$viewData['locale'] = $locale;
		$view = __FUNCTION__;

		return view("{$this->viewFolder}/{$view}View", $viewData);
    }
}
