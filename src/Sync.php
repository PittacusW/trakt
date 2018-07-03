<?php

 namespace Contal\Trakt;

 class Sync {

	public function lastActivities() {
	 return Trakt::query("GET", "sync/last_activities");
	}
 }