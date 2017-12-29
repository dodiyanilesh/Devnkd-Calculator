<?php 

	Route::get('calculator',function(){
			echo 'Hello from the calculator package!';
	});

	Route::get('add/{a}/{b}','devnkd\calculator\CalculatorController@add');

?>