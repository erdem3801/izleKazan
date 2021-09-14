<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\videosModel;
use App\Models\walletModel; 

class advertsController extends BaseController
{
	/**
	 * @var HTTP\IncomingRequest
	 */
	protected $request;
	
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
		$viewData['myAds'] = $videoModel->where('userId', session()->get('userData.ID'))->findAll();
		$view = __FUNCTION__;

		return view("{$this->viewFolder}/{$view}View", $viewData);
		# code...
	}
	public function addVideo()
	{
		$videoModel = model('videosModel');
		$locale = $this->request->getLocale();

		if ($this->request->getMethod() == 'post') {
			$WalletModel = model('walletModel');
			$Wallet = $WalletModel->find(session()->get('userData.ID'));
			$post = $this->request->getPost();

			$tariff = 1.00;
			if (isset($post['isShowAfterClick']))
				$tariff += 0.1;
			if (isset($post['isOnlyHQuser']))
				$tariff += 0.1;
			if ($post['viewPerPerson'] != 0)
				$tariff += 0.1;
			if ($post['viewPerHour'] != 0)
				$tariff += 0.1;
			$tariff +=  0.03 * ($post['duration'] * 5 - 20);
			if ($Wallet) {
				//* kullanıcı cüzdanı tanımlandıysa devam et

				parse_str(parse_url($post['link'], PHP_URL_QUERY), $query);
				$queryData = $post;
				$queryData['videoId'] = trim(str_replace('"', '', $query['v']));
				$queryData['payment'] = $tariff;
				$queryData['duration'] = $post['duration'] * 5;
				$queryData['userId'] = session()->get('userData.ID');

				if ($this->request->getPost('submit') == 'save') {
					//* video aadvert kayıt ise 
					$queryData['isStart'] = 0;
					$videoModel->insert($queryData);
					return redirect()->to(base_url("{$locale}/adverts/myAds"));
				} elseif ($this->request->getPost('submit') == 'start') {
					//todo video advert başlatılacaksa cüzdan kontrol edilecek
					$WalletModel = model('walletModel');
					$Wallet = $WalletModel->find(session()->get('userData.ID'));

					//*kulllanıcı cüzdanı tanımlandımı kontrolü

					if ($Wallet['walletMoney'] >= $tariff) {
						//* cüzdanda yeterli para varsa videoyu yayınlamayı başlat
						$queryData['isStart'] = 1;
						$videoModel->insert($queryData);
						return redirect()->to(base_url('adverts/myAds'));
					} else {
						session()->setFlashData('SwalMessage', 'Cüzdanınızda Yeterli Token Yok ');
						session()->setFlashData('SwalIcon', 'info');

						//todo cüzdanda yeterli para yok kullanıcıyı satın almaya yönlendir
					}
				}
			} else {
				//todo kullanıcı cğzdanı tanımlanmadıysa uyarı ver
				session()->setFlashData('SwalMessage', 'cüzdan Tanımlanmadı');
				session()->setFlashData('SwalIcon', 'error');
			}
			$viewData = $post;
		}
		$viewData['locale'] = $locale;
		$view = __FUNCTION__;

		return view("{$this->viewFolder}/{$view}View", $viewData);
	}
}
