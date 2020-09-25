<?php
Route::namespace('Posts')->middleware('permission:create posts')->group(function () {
    Route::get('posts-table', 'PostController@table')->name('posts.table');
    Route::get('posts-count', 'PostController@count')->name('posts.count');
    Route::get('create-new-post', 'PostController@create')->name('posts.create');
    Route::post('create-new-post', 'PostController@store')->name('posts.store');
    Route::get('edit-the-post/{post}', 'PostController@edit')->name('posts.edit');
    Route::patch('edit-the-post/{post}', 'PostController@update')->name('posts.update');
    Route::delete('delete-the-post/{post}', 'PostController@delete')->name('posts.delete');

    Route::get('the-category', 'CategoryController@index')->name('categories.index');
    Route::post('store-new-category', 'CategoryController@store')->name('categories.store');

    Route::get('edit-the-category-selected/{category}', 'CategoryController@edit')->name('categories.edit');
    Route::patch('update-the-category-selected/{category}', 'CategoryController@update')->name('categories.update');
    Route::delete('delete-the-category-selected/{category}', 'CategoryController@destroy')->name('categories.delete');
});

Route::get('dashboard', 'DashboardController');

Route::get('create-new-team', 'Teams\TeamController@create')->name('teams.create');
Route::post('store-new-team', 'Teams\TeamController@store')->name('teams.store');
Route::get('teams', 'Teams\TeamController@index')->name('teams.table');
Route::get('edit-the-team-selected/{team}', 'Teams\TeamController@edit')->name('teams.edit');
Route::patch('edit-the-team-selected/{team}', 'Teams\TeamController@update');
Route::delete('delete-the-team-selected/{team}', 'Teams\TeamController@delete')->name('teams.delete');

Route::prefix('permissions')->middleware('permission:roles permissions')->group(function () {
    Route::get('index-permission', 'Permissions\PermissionController@index')->name('permissions.index');
    Route::post('create-permission', 'Permissions\PermissionController@store')->name('permissions.store');
    Route::get('edit-selected-permission/{permission}', 'Permissions\PermissionController@edit')->name('permissions.edit');
    Route::patch('update-selected-permission/{permission}', 'Permissions\PermissionController@update')->name('permissions.update');
    Route::delete('delete-selected-permission/{permission}', 'Permissions\PermissionController@destroy')->name('permissions.delete');

    Route::get('rules', 'Permissions\RolePermissionController@rule')->name('roles.permissions');
    Route::post('confirm-rules', 'Permissions\RolePermissionController@confirm');
    Route::get('index-role', 'Permissions\RoleController@index')->name('roles.index');
    Route::post('create-new-role', 'Permissions\RoleController@store')->name('roles.store');
    Route::get('edit-selected-role/{role}', 'Permissions\RoleController@edit')->name('roles.edit');
    Route::patch('update-selected-role/{role}', 'Permissions\RoleController@update')->name('roles.update');
    Route::delete('delete-selected-role/{role}', 'Permissions\RoleController@destroy')->name('roles.delete');

    Route::get('create-new-users', 'Permissions\UserController@index')->name('users.permission.table');
    Route::post('assign-role-to-existing-users', 'Permissions\UserController@assign')->name('users.permission.assign');
    Route::post('store-new-users', 'Permissions\UserController@store')->name('users.permission.store');
    Route::get('{user}/update-the-user', 'Permissions\UserController@edit')->name('users.permission.edit');
    Route::patch('{user}/update-the-user', 'Permissions\UserController@update');
    Route::delete('{user}/delete-the-user', 'Permissions\UserController@delete')->name('users.permission.delete');
});