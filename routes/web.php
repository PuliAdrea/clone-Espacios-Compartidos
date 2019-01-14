<?php

Route::get('/','PagesController@inicio')->name('ini');

Route::get('buscar', 'PagesController@buscar')->name('bus');

Route::get('preguntas/{pregunta?}', 'PagesController@preguntas')->name('pre');





Route::get('login', 'PagesController@login')->name('log');



