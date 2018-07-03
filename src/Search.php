<?php
namespace Contal\Trakt;
 
 
class Search {

	public function text($query) {
		return Trakt::query("GET", "search/show?query=$query");
	}

	public function id($id) {
		return Trakt::query("GET", "search/trakt/$id?type=show");
	}
}