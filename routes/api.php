<?php

use App\Models\Eventinfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\WeDoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\EventinfoController;
use App\Http\Controllers\HomeAboutController;
use App\Http\Controllers\NewsEventController;
use App\Http\Controllers\HeroSliderController;
use App\Http\Controllers\CompanyInfoController;
use App\Http\Controllers\WhatWeDoPageController;
use App\Http\Controllers\MissionVisionController;
use App\Http\Controllers\SuccessStoriesController;
use App\Http\Controllers\ProgramCategoryController;
use App\Http\Controllers\VolunteerRegistrationController;

// Dashboard All API Route Start


// Hero Slider Api Route Start
Route::get("/hero-slider-data-show", [HeroSliderController::class, 'HeroSliderData']);
Route::get("/hero-slider-list", [HeroSliderController::class, 'HeroSliderList'])->middleware('auth:sanctum');
Route::post("/hero-slider-create", [HeroSliderController::class, 'HeroSliderCreate'])->middleware('auth:sanctum');
Route::post("/hero-slider-by-id", [HeroSliderController::class, 'HeroSliderById'])->middleware('auth:sanctum');
Route::post("/hero-slider-update", [HeroSliderController::class, 'HeroSliderUpdate'])->middleware('auth:sanctum');
Route::post("/delete-hero-slider", [HeroSliderController::class, 'HeroSliderDelete'])->middleware('auth:sanctum');

// Hero Slider Api Route End

// Hero About Api Route Start
Route::get("/home-about-data", [HomeAboutController::class, 'HomeAboutData']);
Route::get("/home-about-list", [HomeAboutController::class, 'HomeAboutList'])->middleware('auth:sanctum');
Route::post("/home-about-create", [HomeAboutController::class, 'HomeAboutCreate'])->middleware('auth:sanctum');
Route::post("/home-about-by-id", [HomeAboutController::class, 'HomeAboutById'])->middleware('auth:sanctum');
Route::post("/home-about-update", [HomeAboutController::class, 'HomeAboutUpdate'])->middleware('auth:sanctum');
Route::post("/delete-home-about", [HomeAboutController::class, 'HomeAboutDelete'])->middleware('auth:sanctum');
// Hero About Api Route End

// Mission Vision Api Route Start
Route::get("/mission-vission-data", [MissionVisionController::class, 'MissionVisionData']);
Route::get("/mission-vision-list", [MissionVisionController::class, 'MissionVisionList'])->middleware('auth:sanctum');
Route::post("/mission-vision-create", [MissionVisionController::class, 'MissionVisionCreate'])->middleware('auth:sanctum');
Route::post("/mission-vision-by-id", [MissionVisionController::class, 'MissionVisionById'])->middleware('auth:sanctum');
Route::post("/mission-vision-update", [MissionVisionController::class, 'MissionVisionUpdate'])->middleware('auth:sanctum');
Route::post("/delete-mission-vision", [MissionVisionController::class, 'MissionVisionDelete'])->middleware('auth:sanctum');
// Mission Vision Api Route End

// We Do Api Route Start
Route::get("/we-do-data", [WeDoController::class, 'WeDoData']);
Route::get("/we-do-list", [WeDoController::class, 'WeDoList'])->middleware('auth:sanctum');
Route::post("/we-do-create", [WeDoController::class, 'WeDoCreate'])->middleware('auth:sanctum');
Route::post("/we-do-by-id", [WeDoController::class, 'WeDoById'])->middleware('auth:sanctum');
Route::post("/we-do-update", [WeDoController::class, 'WeDoUpdate'])->middleware('auth:sanctum');
Route::post("/delete-we-do", [WeDoController::class, 'WeDoDelete'])->middleware('auth:sanctum');
// We Do Api Route End

// We Do Page Api Route Start
Route::get("/we-do-page-data", [WhatWeDoPageController::class, 'WeDoPageData']);
Route::get("/we-do-page-list", [WhatWeDoPageController::class, 'WeDoPageList'])->middleware('auth:sanctum');
Route::post("/we-do-page-create", [WhatWeDoPageController::class, 'WeDoPageCreate'])->middleware('auth:sanctum');
Route::post("/we-do-page-by-id", [WhatWeDoPageController::class, 'WeDoPageById'])->middleware('auth:sanctum');
Route::post("/we-do-page-update", [WhatWeDoPageController::class, 'WeDoPageUpdate'])->middleware('auth:sanctum');
Route::post("/delete-we-do-page", [WhatWeDoPageController::class, 'WeDoPageDelete'])->middleware('auth:sanctum');
// We Do Page Api Route End

// Event Info Api Route Start
Route::get("/event-info-data", [EventinfoController::class, 'EventInfoData']);
Route::get("/event-info-list", [EventinfoController::class, 'EventInfoList'])->middleware('auth:sanctum');
Route::post("/event-info-create", [EventinfoController::class, 'EventInfoCreate'])->middleware('auth:sanctum');
Route::post("/event-info-by-id", [EventinfoController::class, 'EventInfoById'])->middleware('auth:sanctum');
Route::post("/event-info-update", [EventinfoController::class, 'EventInfoUpdate'])->middleware('auth:sanctum');
Route::post("/delete-event-info", [EventinfoController::class, 'EventInfoDelete'])->middleware('auth:sanctum');
// Event Info Api Route End

// Message Api Route Start
Route::get("/message-list", [MessageController::class, 'MessageList'])->middleware('auth:sanctum');
Route::post("/message-create", [MessageController::class, 'MessageCreate'])->middleware('auth:sanctum');
Route::post("/message-by-id", [MessageController::class, 'MessageById'])->middleware('auth:sanctum');
Route::post("/message-update", [MessageController::class, 'MessageUpdate'])->middleware('auth:sanctum');
Route::post("/delete-message", [MessageController::class, 'MessageDelete'])->middleware('auth:sanctum');
// Message Api Route End

// Company Info Api Route Start
Route::get("/company-info-Data", [CompanyInfoController::class, 'CompanyInfoData']);
Route::get("/company-info-list", [CompanyInfoController::class, 'CompanyInfoList'])->middleware('auth:sanctum');
Route::post("/company-info-create", [CompanyInfoController::class, 'CompanyInfoCreate'])->middleware('auth:sanctum');
Route::post("/company-info-by-id", [CompanyInfoController::class, 'CompanyInfoById'])->middleware('auth:sanctum');
Route::post("/company-info-update", [CompanyInfoController::class, 'CompanyInfoUpdate'])->middleware('auth:sanctum');
Route::post("/delete-company-info", [CompanyInfoController::class, 'CompanyInfoDelete'])->middleware('auth:sanctum');
// Company Info Api Route End

// Program Category Api Route Start
Route::get("/program-category-list", [ProgramCategoryController::class, 'ProgramCategoryList'])->middleware('auth:sanctum');
Route::post("/program-category-create", [ProgramCategoryController::class, 'ProgramCategoryCreate'])->middleware('auth:sanctum');
Route::post("/program-category-by-id", [ProgramCategoryController::class, 'ProgramCategoryById'])->middleware('auth:sanctum');
Route::post("/program-category-update", [ProgramCategoryController::class, 'ProgramCategoryUpdate'])->middleware('auth:sanctum');
Route::post("/delete-program-category", [ProgramCategoryController::class, 'ProgramCategoryDelete'])->middleware('auth:sanctum');
// Program Category Api Route End

// Program Category Api Route Start
Route::get("/program-list", [ProgramController::class, 'ProgramList'])->middleware('auth:sanctum');
Route::post("/program-create", [ProgramController::class, 'ProgramCreate'])->middleware('auth:sanctum');
Route::post("/program-by-id", [ProgramController::class, 'ProgramById'])->middleware('auth:sanctum');
Route::post("/program-update", [ProgramController::class, 'ProgramUpdate'])->middleware('auth:sanctum');
Route::post("/delete-program", [ProgramController::class, 'ProgramDelete'])->middleware('auth:sanctum');
// Program Category Api Route End



// Menu Api Route Start

Route::get("/menu-list", [MenuController::class, 'MenuList'])->middleware('auth:sanctum');
Route::post("/menu-create", [MenuController::class, 'MenuCreate'])->middleware('auth:sanctum');
Route::post("/menu-by-id", [MenuController::class, 'MenuById'])->middleware('auth:sanctum');
Route::post("/menu-update", [MenuController::class, 'MenuUpdate'])->middleware('auth:sanctum');
Route::post("/delete-menu", [MenuController::class, 'MenuDelete'])->middleware('auth:sanctum');

// Menu Api Route End


// News Event Api Route Start

Route::get("/news-event-front-end-data", [NewsEventController::class, 'NewsEventFrontEndData']);
Route::get("/news-event-list", [NewsEventController::class, 'NewsEventList'])->middleware('auth:sanctum');
Route::post("/news-event-create", [NewsEventController::class, 'NewsEventCreate'])->middleware('auth:sanctum');
Route::post("/news-event-by-id", [NewsEventController::class, 'NewsEventById'])->middleware('auth:sanctum');
Route::post("/news-event-update", [NewsEventController::class, 'NewsEventUpdate'])->middleware('auth:sanctum');
Route::post("/delete-news-event", [NewsEventController::class, 'NewsEventDelete'])->middleware('auth:sanctum');

// News Event Api Route End

// Success Stories Api Route Start

Route::get("/success-stories-front-end-data", [SuccessStoriesController::class, 'SuccessStoriesFrontEndData']);
Route::get("/success-stories-list", [SuccessStoriesController::class, 'SuccessStoriesList'])->middleware('auth:sanctum');
Route::post("/success-stories-create", [SuccessStoriesController::class, 'SuccessStoriesCreate'])->middleware('auth:sanctum');
Route::post("/success-stories-by-id", [SuccessStoriesController::class, 'SuccessStoriesById'])->middleware('auth:sanctum');
Route::post("/success-stories-update", [SuccessStoriesController::class, 'SuccessStoriesUpdate'])->middleware('auth:sanctum');
Route::post("/delete-success-stories", [SuccessStoriesController::class, 'SuccessStoriesDelete'])->middleware('auth:sanctum');

// Success Stories Api Route End


// Contact Api Route Start
Route::get("/contact-info-list", [ContactController::class, 'ContactInfoList'])->middleware('auth:sanctum');


// Dashboard All API Route End


// Front-End All Api Start
Route::post('/volunteer-registration', [VolunteerRegistrationController::class, 'VolunteerRegistration']);
Route::get("/volunteer-registration-list", [VolunteerRegistrationController::class, 'VolunteerRegistrationList'])->middleware('auth:sanctum');

// Front-End All Api End