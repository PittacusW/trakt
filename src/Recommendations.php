<?php

 namespace Contal\Trakt;

 class Recommendations {

	public function getShow() {
	 return Trakt::query("GET", "recommendations/shows");
	}
 }