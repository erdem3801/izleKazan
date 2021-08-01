<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
		$view = __FUNCTION__;

		return view("{$this->viewFolder}/{$view}View", $viewData);
		# code...
	}
 
}
