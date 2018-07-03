<?php
namespace Contal\Trakt;
 
 
class Checkin {

	public function checkin($id) {
		return Trakt::query("POST", "checkin", [
			'episode'=> [
				'ids'=>[
					'trakt'=>$id
				]
			]
		]);
	}
}