<?php 

Route::set('index.php', function() {
	Index::CreateView('Index');	
});

Route::set('fach', function() {
	Fach::CreateView('Fach');	
});

Route::set('vorlesung', function() {
	Vorlesung::CreateView('Vorlesung');	
});

Route::set('noten', function() {
	Noten::CreateView('Noten');	
});

Route::set('access', function() {
	Access::FileAccess();	
});

Route::set('logout', function() {
	LogOut::LogOff();	
});

Route::set('upload', function() {
	Upload::Uploader();	
});

Route::set('profil', function() {
	Profil::CreateView('Profil');	
});


?>