<?php

Route::view('/','pages.index');
Route::view('/topic/{id}','pages.topic.show')->name('topic.single');
Route::view('/topic/','pages.topic.index')->name('topic.all');
Route::view('/lesson/','pages.topic.index')->name('lesson.all');
Route::view('/lecture/','pages.topic.index')->name('lecture.all');
Route::view('/live/','pages.topic.index')->name('live');
Route::view('/contect/','pages.topic.index')->name('contect');
Route::view('/live/','pages.topic.index')->name('live');
Route::view('/brief','pages.brief')->name('brief');
Auth::routes();



// This For Admin Routes 
Route::prefix('admin/auth')->group(function() {

    //Route::view('/topics','');

});