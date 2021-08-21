<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Libraries\userToken;
use App\Models\walletModel;

class api extends ResourceController
{
	public function updateWallet($token = null)
	{
		$userToken = new userToken;
		if ($token == null)
			$tokenResult = $userToken->checkJWT(session()->get('token'));
		else
			$tokenResult = $userToken->checkJWT($token);

		if ($tokenResult) {
			$walletModel = model('walletModel');
			$wallet = $walletModel->where('userId', $tokenResult['data']['ID'])->first();
			$walletModel->update($tokenResult['data']['ID'],['walletMoney'=> $wallet['walletMoney'] + 0.001523]);
			return $this->respond(['earnedMoney' => $wallet['walletMoney'] + 0.001523 ], 200);
		} else
			return $this->respond('expiren Token', 400);
	}
}
