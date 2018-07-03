<?php

 namespace Contal\Trakt;

 class Oauth {

	public function authorize() {
	 return "https://trakt.tv/oauth/authorize?response_type=code&client_id=" . config('trakt.client_id') . "&redirect_uri=" . config('trakt.redirect_uri') . "&state=" . csrf_token();
	}

	public function getToken($code, $state) {
	 if ($state != csrf_token()) {
		abort(401, "Token incorrecto");
	 }
	 $query = Trakt::query("POST", "oauth/token", [
		 'code'          => $code,
		 'client_id'     => config('trakt.client_id'),
		 'client_secret' => config('trakt.client_secret'),
		 'redirect_uri'  => config('trakt.redirect_uri'),
		 'grant_type'    => 'authorization_code'
	 ]);

	 return $query;
	}

	public function refreshToken($refresh_token) {
	 $query = Trakt::query("POST", "oauth/token", [
		 'refresh_token' => $code,
		 'client_id'     => config('trakt.client_id'),
		 'client_secret' => config('trakt.client_secret'),
		 'redirect_uri'  => config('trakt.redirect_uri'),
		 'grant_type'    => 'refresh_token'
	 ]);

	 return $query;
	}

	public function deviceCode() {
	 $query = Trakt::query("POST", "oauth/device/code", [
		 'client_id' => config('trakt.client_id'),
	 ]);

	 return $query;
	}

	public function pollToken($code) {
	 $query = Trakt::query("POST", "oauth/device/token", [
		 'code'          => $code,
		 'client_id'     => config('trakt.client_id'),
		 'client_secret' => config('trakt.client_secret')
	 ]);

	 return $query;
	}
 }