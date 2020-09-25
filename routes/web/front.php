<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
//Route::view('about', 'pages.about');
Route::get('/about', function () {
    return view('pages.about');
});
Route::view('services', 'pages.services');
Route::get('posts/{post}', 'Posts\PostController@show')->name('posts.show');

Route::get('posts/{post}/comments', 'Comments\CommentController@index')->name('comments.index');
Route::post('posts/{post}/comments', 'Comments\CommentController@store');
Route::patch('comments/edit-the-comment-selected/{comment}', 'Comments\CommentController@patch');
Route::delete('comments/edit-the-comment-selected/{comment}', 'Comments\CommentController@destroy');

Route::middleware('auth')->prefix('account')->group(function () {
    Route::get('edit-your-profile', 'Account\AccountController@edit');
    Route::patch('update-your-profile', 'Account\AccountController@update');
    Route::get('change-your-password', 'Account\PasswordController@edit');
    Route::patch('change-your-password', 'Account\PasswordController@update');
});

Route::resource('comments/{comment}/replies', 'Comments\ReplyController');
Route::get('post-in-categories/{category}', 'Posts\CategoryController@show')->name('categories.show');

Route::get('posts-in-{sorted}', 'Posts\SortedPostController@index');
Route::prefix('api')->group(function () {
    Route::get('the-latest-post', 'Api\Posts\PostController@latest');
    Route::get('i-want-{number}-of-posts', 'Api\Posts\PostController@slider');
    Route::get('teams', 'Api\Teams\TeamController@index');
    Route::get('teams/{team}', 'Api\Teams\TeamController@show');
    Route::get('the-first-team', 'Api\Teams\TeamController@theFirst');
    Route::get('categories', 'Api\Posts\CategoryController@index');
});
