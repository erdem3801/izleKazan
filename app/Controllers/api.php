<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Libraries\userToken;
use App\Models\videosModel;
use App\Models\walletModel;
use App\Models\walletStatisticModel;
use CodeIgniter\HTTP\ResponseInterface as HTTPResponseInterface;
use Google\Service\AnalyticsReporting\EcommerceData;
use Psr\Http\Message\ResponseInterface;

class api extends ResourceController
{
	/**
	 * @var HTTP\IncomingRequest
	 */
	protected $request;
	private $UserTokenLibrary;
	public function __construct()
	{
		$this->UserTokenLibrary = new userToken;
	}
	public function updateWallet()
	{
		if ($this->request->getMethod() === 'post') {
			//* request post geldi
			$token = $this->request->getVar('token');

			if ($token == null)
				$tokenResult = $this->UserTokenLibrary->checkJWT(session()->get('token'));
			else
				$tokenResult = $this->UserTokenLibrary->checkJWT($token);

			$EarnPerVideo 			= 	0.001523;
			$userId 				= 	$tokenResult['data']['ID'];
			$EarnVideoId			= 	$this->request->getVar('videoId');
			$isVideo 				=   false;
			if ($EarnVideoId) {

				$walletStatisticModel 	= 	model('walletStatisticModel');
				$isWachedVideo 			= 	$walletStatisticModel->where(['userId' => $userId, 'videoId' => $EarnVideoId])->first();
				$videoModel 			=   model('videosModel');
				$isVideo 				=   $videoModel->find($EarnVideoId);
			}


			if (!$isWachedVideo && $isVideo) {
				//! video daha önce izlenmediyse cüzdanı güncelle
				$walletModel = model('walletModel');

				$wallet = $walletModel->where('userId', $userId)->first();
				$walletModel->update($userId, ['walletMoney' => $wallet['walletMoney'] + $EarnPerVideo]);
				$walletStatisticModel->insert([
					'userId' => $userId,
					'videoId' => $EarnVideoId,
					'moneyType' =>  'EM',
					'moneyValue' => $EarnPerVideo
				]);
				return $this->respond(['earnedMoney' => $wallet['walletMoney'] + 0.001523], 200);
			} elseif ($isWachedVideo) {
				//! video daha önce izlendi cüzdanı güncelleme
				return $this->respond(['earnedMoney' => 'video already watched'], 200);
			} elseif (!$isVideo) {
				//! video idsi verilmedi yada video için id eşleşmedi hatasını gönder
				return $this->respond('video is not defined')->setStatusCode(HTTPResponseInterface::HTTP_BAD_REQUEST);
			}
		} else {
			//* request post gelmedi (get put delete) 
			return $this->respond('Not Found')->setStatusCode(HTTPResponseInterface::HTTP_NOT_FOUND);
		}
	}
	public function DeleteVideoAdvert()
	{
		if ($this->request->getMethod() === 'post') {

			$token = $this->request->getVar('token');

			if ($token == null)
				$tokenResult = $this->UserTokenLibrary->checkJWT(session()->get('token'));
			else
				$tokenResult = $this->UserTokenLibrary->checkJWT($token);

			$VideoModel = model('videosModel');
			$videoId = $this->request->getVar('videoId');
			if ($videoId) {

				$video = $VideoModel->find($videoId);
				if ($video) {
					if ($video['userId'] == $tokenResult['data']['ID']) {
						//todo video silindi mesajı verilecek
						$VideoModel->delete($videoId);
						return $this->respond('The video was deleted', 200);
					} else {
						//todo videoyu silmek isteyen kullanıcı ile videoyu yükleyen kullanıcının id'si eşleşmedi
						return $this->respond('this advert does not belong to user', HTTPResponseInterface::HTTP_NOT_ACCEPTABLE);
					}
				} else {
					//todo video bulunamadı uyarısı verilecek
					return $this->respond('not foound video', HTTPResponseInterface::HTTP_BAD_REQUEST);
				}
			}



			return $this->respond('incoming data is empty', HTTPResponseInterface::HTTP_BAD_REQUEST);
		} else
			return $this->respond('Not Found')->setStatusCode(HTTPResponseInterface::HTTP_NOT_FOUND);
	}

	public function updateAdvert(){
		if($this->request->getMethod() === 'post'){
			//* request post
			$advertModel = model('videosModel');
			$area 		 = str_replace('Item','',$this->request->getVar('area'));
			$id   		 = $this->request->getVar('id');
			$value  	 = $this->request->getVar('value');
			if($area == 'sources')
				$area = str_replace('sources','trafic',$area);

			$advertModel->update($id,[$area => $value]);
			return $this->respond(['area :' => $area,'id :' => $id,'value :' => $value]);
		 
		}else{
			//* request post gelmedi (get put delete update)
		}
	}
}
