<?php
namespace Contal\Trakt;
 
 
class Collection {
	public function get() {
		return Trakt::query("GET", "sync/collection/shows");
	}

	public function add($id) {
		return Trakt::query("POST", "sync/collection", [
			'shows'=>[
				'ids'=>[
					'trakt'=>$id
				]
			]
		]);
	}

	public function remove($id) {
		return Trakt::query("POST", "sync/collection/remove", [
			'shows'=>[
				'ids'=>[
					'trakt'=>$id
				]
			]
		]);
	}
	}