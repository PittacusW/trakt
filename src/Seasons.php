<?php
namespace Contal\Trakt;
 
 
class Seasons {

	public function summary($id) {
		return Trakt::query("GET", "shows/$id/seasons");
	}

	public function season($id, $season) {
		return Trakt::query("GET", "shows/$id/seasons/$season?translations=es");
	}

	
}