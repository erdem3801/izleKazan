<?php

namespace App\Controllers;


class addAdvertsController extends BaseController
{
   
    private $viewFolder;
    private $subModel; 

    public function __construct()
    {
        $this->viewFolder = ""; 
    }
	public function addAdverts()
	{
        $locale = $this->request->getLocale();
		$viewData['locale'] = $locale;
        $view = __FUNCTION__;
		return view($view,$viewData);
	}
   
}
