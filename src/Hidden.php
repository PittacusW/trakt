<?php
namespace Contal\Trakt;
 
 
class Hidden  {

	public function get() {
		return Trakt::query("GET", "users/hidden/calendar?type=show");
	}

	public function add($id) {
		Trakt::query("POST", "users/hidden/recommendations", [
			'shows'=>[
				'ids'=>[
					'trakt'=>$id
				]
			]
		]);
		return Trakt::query("POST", "users/hidden/calendar", [
			'shows'=>[
				'ids'=>[
					'trakt'=>$id
				]
			]
		]);

	}

	public function remove($id) {
		Trakt::query("POST", "users/hidden/calendar/remove", [
			'shows'=>[
				'ids'=>[
					'trakt'=>$id
				]
			]
		]);
		return Trakt::query("POST", "users/hidden/recommendations/remove", [
			'shows'=>[
				'ids'=>[
					'trakt'=>$id
				]
			]
		]);
	}
}