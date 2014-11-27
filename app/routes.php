<?php

//print App::environment();

Route::get('/', function()
{
	return View::make('layout');
	
});
