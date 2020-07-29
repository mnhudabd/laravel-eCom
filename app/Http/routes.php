<?php


/*


-------------------------------------
 Application Routes
-------------------------------------



*/


Route::get('/', function()
{
	print_r(app()->make('redis'));
})