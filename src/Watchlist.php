<?php

 namespace Contal\Trakt;

 class Watchlist {

	public function get() {
	 return Trakt::query("GET", "sync/watchlist/shows");
	}

	public function add($id) {
	 return Trakt::query("POST", "sync/watchlist", [
		 'shows' => [
			 'ids' => [
				 'trakt' => $id
			 ]
		 ]
	 ]);
	}

	public function remove($id) {
	 return Trakt::query("POST", "sync/watchlist/remove", [
		 'shows' => [
			 'ids' => [
				 'trakt' => $id
			 ]
		 ]
	 ]);
	}
 }