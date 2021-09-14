<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;
use App\Libraries\userToken;
use Google\Service\Books\Resource\Series;

class ApiFilter implements FilterInterface
{
	/**
	 * Do whatever processing this filter needs to do.
	 * By default it should not return anything during
	 * normal execution. However, when an abnormal state
	 * is found, it should return an instance of
	 * CodeIgniter\HTTP\Response. If it does, script
	 * execution will end and that Response will be
	 * sent back to the client, allowing for error pages,
	 * redirects, etc.
	 *
	 * @param RequestInterface $request
	 * @param array|null       $arguments
	 *
	 * @return mixed
	 */
	
	public function before(RequestInterface $request, $arguments = null)
	{
		$userToken = new userToken;
		$token = $request->getVar('token');
		if (!$token)
			$tokenResult = $userToken->checkJWT(session()->get('token'));
		else
			$tokenResult = $userToken->checkJWT($token);

		if (!$tokenResult) 
			return Services::response()->setJSON('expiren Token '.$token)->setStatusCode(ResponseInterface::HTTP_UNAUTHORIZED);
		//
	}

	/**
	 * Allows After filters to inspect and modify the response
	 * object as needed. This method does not allow any way
	 * to stop execution of other after filters, short of
	 * throwing an Exception or Error.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param array|null        $arguments
	 *
	 * @return mixed
	 */
	public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
	{
	 
		//
	}
}
