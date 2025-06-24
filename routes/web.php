<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeDoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsEventController;
use App\Http\Controllers\WhatWeDoPageController;
use App\Http\Controllers\SuccessStoriesController;



// User Registration API Route Strat
Route::post('/user-registration', [UserController::class, 'UserRegistration']);
Route::post('/nexus-login-page', [UserController::class, 'UserLogin']);
// User Registration API Route End

// Front-end View Route Api Start
Route::view('/', 'components.back-end.registration-form');
Route::view('/login-page', 'components.front-end.auth.registration-form');
Route::get('/user-profile', [UserController::class, 'UserProfile'])->middleware('auth:sanctum');



Route::get('/naxus-pos-logout', [UserController::class, 'UserLogout'])->middleware('auth:sanctum');

// Front-end View Route Api End


// Dashboard View Page Route Start
Route::view('/admin-dashboard-hero-slider-page', 'pages.back-end-page.hero-slider-page');
Route::view('/admin-dashboard-news-event-page', 'pages.back-end-page.news-event-page');
Route::view('/admin-dashboard-success-stories-page', 'pages.back-end-page.success-stories-page');
Route::view('/admin-dashboard-volunteer-registration-page', 'pages.back-end-page.volunteer-registration-page');
Route::view('/admin-dashboard-home-about-page', 'pages.back-end-page.home-about-page');
Route::view('/admin-dashboard-mission-vision-page', 'pages.back-end-page.mission-vision-page');
Route::view('/admin-dashboard-we-do-page', 'pages.back-end-page.we-do-page');
Route::view('/admin-dashboard-we-do-menu-page', 'pages.back-end-page.we-do-menu-page');
Route::view('/admin-dashboard-event-info-page', 'pages.back-end-page.event-info-page');
Route::view('/admin-dashboard-message-page', 'pages.back-end-page.message-page');
Route::view('/admin-dashboard-company-info-page', 'pages.back-end-page.company-info-page');
Route::view('/admin-dashboard-company-info-page', 'pages.back-end-page.company-info-page');
Route::view('/admin-dashboard-contact-info-page', 'pages.back-end-page.contact-info-page');
Route::view('/admin-dashboard-program-page', 'pages.back-end-page.program-page');
Route::view('/admin-dashboard-menu-page', 'pages.back-end-page.nevbar-menu-page');
Route::view('/admin-dashboard', 'components.back-end.dashboardsummery');

// Dashboard View Route End






// Front-End All Route Start 

Route::view('/', 'components.front-end.home-page');
Route::view('/home', 'components.front-end.home-page');
Route::view('/about-us', 'components.front-end.about-page');
Route::view('/chairman', 'components.front-end.chairman-page');
Route::view('/chief-adviser', 'components.front-end.chief-adviser-page');
Route::view('/chief-executive', 'components.front-end.chief-executive-page');
Route::view('/executive-committee', 'components.front-end.executive-committee-page');
Route::view('/objectives', 'components.front-end.objectives-page');
Route::view('/contact-us', 'components.front-end.contact-page');
Route::view('/get-involved', 'components.front-end.involved-page');
Route::view('/news-events', 'components.front-end.news-page');
Route::view('/publications', 'components.front-end.publications-page');
Route::view('/success-stories', 'components.front-end.success-page');
Route::view('/health-family-program', 'components.front-end.health-family-program-page');
Route::view('/safe-water-sanitation', 'components.front-end.safe-water-sanitation-page');
Route::view('/humanitarian-assistance', 'components.front-end.humanitarian-assistance-page');
Route::view('/eywei', 'components.front-end.eywei-page');
Route::view('/program-education', 'components.front-end.program-education-page');
Route::view('/skill-development-program', 'components.front-end.skill-development-program-page');
Route::view('/livelihood-program', 'components.front-end.livelihood-program-page');
Route::view('/awareness-program', 'components.front-end.awareness-program-page');
Route::view('/network', 'components.front-end.network-page');
Route::view('/career', 'components.front-end.career-page');
Route::view('/volunteer', 'components.front-end.volunter-page');
Route::view('/organization', 'components.front-end.organization-page');


Route::get('/single-news-events/{id}', [NewsEventController::class, 'SingleNewsEventDataShow'])->name('blog.show');
Route::get('/single-we-do/{id}', [WeDoController::class, 'SingleWeDoDataShow'])->name('we.do.show');
Route::get('/single-we-do-page/{id}', [WhatWeDoPageController::class, 'SingleWhatWeDoPageDataShow'])->name('we.do.show');
Route::get('/success-stories/{id}', [SuccessStoriesController::class, 'SingleNewsEventDataShow'])->name('blog.show');
Route::post('/contact-us', [ContactController::class, 'ContactPageData'])->name('contact.send');

// Front-End All Route End 