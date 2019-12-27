<?php

Route::get('', ['as' => 'admin.dashboard', function () {
	$content = 'Define your dashboard here.';
	return AdminSection::view($content, 'Управление контентом');
}]);

Route::get('information', ['as' => 'admin.information', function () {
	$content = 'Моя инфа по умолчанию';
	return AdminSection::view($content, 'Information');
}]);