<?php

namespace App\Controllers;

class Home extends BaseController
{

	
    private $viewFolder;
    private $subModel; 

    public function __construct()
    {
        $this->viewFolder = ""; 
    }
	public function index()
	{
        $locale = $this->request->getLocale();
		$viewData['locale'] = $locale;
        $view = __FUNCTION__;
		return view($view,$viewData);
	}
 
 
}
