<?php
 return [
 	'client_id'=> env('TRAKT_CLIENT', null),
 	'client_secret'=> env('TRAKT_SECRET', null),
	'redirect_uri' => env('TRAKT_URL'),
 ];