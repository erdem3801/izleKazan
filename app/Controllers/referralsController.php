<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class referralsController extends BaseController
{
	private $viewFolder;

	public function __construct()
	{
		$this->viewFolder = "referralsView";
	}
	public function promoBanners()
	{
		$locale = $this->request->getLocale();
		$viewData['locale'] = $locale;
		$view = __FUNCTION__;

		return view("{$this->viewFolder}/{$view}View", $viewData);

		//
	}
	public function statistic()
	{
		$locale = $this->request->getLocale();
		$viewData['locale'] = $locale;
		$view = __FUNCTION__;

		return view("{$this->viewFolder}/{$view}View", $viewData);

		//
	}
	public function structure()
	{
		$locale = $this->request->getLocale();
		$viewData['locale'] = $locale;
		$view = __FUNCTION__;

		return view("{$this->viewFolder}/{$view}View", $viewData);

		//
	}
	public function utmTags()
	{
		$locale = $this->request->getLocale();
		$viewData['locale'] = $locale;
		$view = __FUNCTION__;

		return view("{$this->viewFolder}/{$view}View", $viewData);

		//
	}
}
