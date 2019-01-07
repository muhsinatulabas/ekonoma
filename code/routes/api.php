<?php
Route::get('user/{id}','ApiController@getUser');
Route::get('modul/{id}','ApiController@getModul');
Route::get('pc-lpnu/{id}','ApiController@getPCLPNU');
Route::get('kategori/{id}','ApiController@getKategori');
Route::get('pengusaha/{id}','ApiController@getPengusaha');
Route::get('perusahaan/{id}','ApiController@getPerusahaan');
Route::get('quote/{id}','ApiController@getQuote');
Route::get('gallery/{id}','ApiController@getGallery');
Route::get('album/{id}','ApiController@getAlbum');