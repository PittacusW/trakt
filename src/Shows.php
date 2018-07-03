<?php
namespace Contal\Trakt;
 
 
class Shows {

	

	public function watched() {
		return Trakt::query("GET", "shows/watched/monthly");
	}

	public function anticipated() {
		return Trakt::query("GET", "shows/anticipated");
	}

	public function updates($date) {
		return Trakt::query("GET", "shows/updates/$date");
	}

	public function summary($id) {
		return Trakt::query("GET", "shows/$id");
	}

	public function progress($id) {
		return Trakt::query("GET", "shows/$id/progress/watched?hidden=false&specials=false&count_specials=false");
	}

	


}