<?php

Route::get('timezones/{timezone}',
	'bymega\timezones\TimezonesController@index');