<?php
namespace Contal\Trakt;
 
 
class Calendars {

	public function getShows($start_date, $days) {
		return Trakt::query("GET", "calendars/my/shows/$start_date/$days");
		
	}
	public function getNewShows($start_date, $days) {
		return Trakt::query("GET", "calendars/my/shows/new/$start_date/$days");
	}
	public function getSeasonPremieres($start_date, $days) {
		return Trakt::query("GET", "calendars/my/shows/premieres/$start_date/$days");
	}
	
}