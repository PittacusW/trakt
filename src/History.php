<?php

 namespace Contal\Trakt;

 class History {

	public function get() {
	 return Trakt::query("GET", "sync/watched/shows");
	}

	public function add($id) {
	 return Trakt::query("POST", "sync/history", [
		 'shows' => [
			 'ids' => [
				 'trakt' => $id
			 ]
		 ]
	 ]);
	}

	public function remove($id) {
	 return Trakt::query("POST", "sync/history/remove", [
		 'shows' => [
			 'ids' => [
				 'trakt' => $id
			 ]
		 ]
	 ]);
	}
 }