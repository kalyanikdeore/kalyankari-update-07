<?php

use App\Http\Controllers\Auth\ApplicationController;
use App\Http\Controllers\Auth\DownloadController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


// Route::get('/link',function(){
//     Artisan::call('storage:link');
//      return "Storage Link!";
// });

// Route::get('/db-seed', function() {
//     Artisan::call('db:seed');
//     return "Database seeding completed!";
// });

// Route::get('/refresh-seed', function() {
//     Artisan::call('migrate:refresh', [
//         '--seed' => true,
//     ]);
//     return "Database refreshed and seeded!";
// });

// Route::get('/seed-refresh', function() {
//     Artisan::call('db:seed', [
//         '--force' => true, // Ensures it runs in production if necessary
//     ]);
//     return "Database seeding refreshed!";
// });

// Route::get('/config-cache', function() {
//     Artisan::call('config:cache');
//     return "Configuration cache created!";
// });

// Route::get('/optimize', function() {
//     Artisan::call('optimize');
//     return "Application optimized!";
// });

// Route::get('/clear-config', function() {
//     Artisan::call('config:clear');
//     return "Configuration cache cleared!";
// });



Route::controller(SiteController::class)->group(function () {

    Route::get('/', 'index')->name('home');
    Route::get('/about-us', 'about')->name('about');
    Route::get('/contact-us', 'contact')->name('contact');
  
    Route::get('/gallery', 'gallery')->name('gallery');
    Route::get('/causes', 'causes')->name('causes');
    Route::get('/donation', 'donation')->name('donation');
    Route::get('/terms_conditions', 'terms')->name('terms');
    Route::get('/eligibility-criteria', 'eligibility')->name('eligibility');


    //success stroies Student wise
    Route::get('/success-stories', 'all_stories')->name('all_stories');
    Route::get('/success-stories/{id}', 'stories')->name('stories');
    //blog page show each blog wise
    Route::get('/blogs', 'blog')->name('blog');

    Route::get('/beneficiary-student', 'students')->name('beneficiary_student');
    
       Route::get('/download-application-form', 'download')->name('download');

});

Route::controller(ApplicationController::class)->group(function () {

    Route::get('/student-application', 'index')->name('application');
    Route::get('/student-application/{message}', 'getPage')->name('thanks');
    Route::get('/donate-application', 'index')->name('donate');


});


Route::get('/{record}/pdf',[DownloadController::class,'download'])->name('application.pdf.download');

