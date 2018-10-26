<?php



Route::get('/produto','ProdutoController@lista');
Route::get('/produto/mostra/{id}','ProdutoController@mostra');
Route::get('/produto/remove/{id}','ProdutoController@remove');
Route::get('/produto/novo','ProdutoController@novo');
Route::post('/produto/adiciona','ProdutoController@adicionar');
Route::get('/login','LoginController@login');
Route::post('/login','LoginController@logar');