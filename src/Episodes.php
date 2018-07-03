<?php
namespace Contal\Trakt;
 
 
class Episodes {

	public function summary($id, $season, $episode) {
		return Trakt::query("GET", "shows/id/seasons/$season/episodes/$episode");
		
	}

	
}