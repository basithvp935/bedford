<?php
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\AffiliationController;
use App\Http\Controllers\Admin\FeesStructureController;
 //Admin

Route::get('/clear-all-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('optimize:clear');
    echo "Cleared all caches successfully.";
});

Route::get('/admin', function() {
    return redirect('/isgi-admin');
});
Route::get('/admin/{any}', function($any) {
    return redirect('/isgi-admin/' . $any);
})->where('any', '.*');

Route::get('my/routes', [\App\Http\Controllers\TestController::class, 'routes']);
Route::group(['prefix' => 'isgi-admin','as' => 'admin::','namespace' => 'Admin'], function() {

    Route::get('/',['as'=>'main','uses'=> 'MainController@index']);
    
    // Login
    Route::get('login', ['as' => 'get_login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login', ['as' => 'post_login', 'uses' => 'Auth\LoginController@login']);
    
    Route::group(['middleware' => 'auth'], function () {
    	//Logout
    	Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
    	Route::get('dashboard', 'HomeController@index')->name('dashboard');
    	Route::resource('role', 'RoleController', ['except' => ['show', 'destroy']]);
    	Route::resource('user', 'UserController', ['except' => ['show']]);
    
        //Home page banners management
    	Route::get('banners/data', 'HomePageBannersController@getData');
    	Route::resource('banners', 'HomePageBannersController', ['except' => ['show']]);
    	Route::get('sort/banners','HomePageBannersController@sortIndex')->name('sort_banners');
    	Route::post('sort/banners-sortable','HomePageBannersController@sortData');
    
    	Route::get('other_banners', ['as' => 'other_banners', 'uses' => 'HomePageBannersController@other_banners_edit']);
    	Route::put('/other_banners/{other_banner}', ['as' => 'other_banners_update', 'uses' => 'HomePageBannersController@other_banners_update']);
    
        //Newstment management
        Route::get('news/data', 'NewsController@getData');
        Route::post('/news/set/flash','NewsController@setFlashNews');
        Route::resource('news', 'NewsController', ['except' => ['show']]);
        Route::get('sort/news','NewsController@sortIndex')->name('sort_news');
    	Route::post('sort/news-sortable','NewsController@sortData');
    
        Route::get('happenings/data', 'HappeningController@getData');
        Route::resource('happenings', 'HappeningController', ['except' => ['show']]);
        Route::get('sort/happenings','HappeningController@sortIndex')->name('sort_happenings');
    	Route::post('sort/happenings-sortable','HappeningController@sortData');

        Route::resource('qualification', 'QualificationController', ['except' => ['show']]);
        Route::get('qualification/data', 'QualificationController@getdata');
        
        Route::resource('resource', 'ResourceController', ['except' => ['show']]);
        Route::get('resource/data', 'ResourceController@getdata');
        
        Route::resource('academic_resource', 'AcademicResourceController', ['except' => ['show']]);
        Route::get('academic_resource/data', 'AcademicResourceController@getdata');
        
        Route::get('academic_calendars/data', 'AcademicCalendarController@getData');
        Route::resource('academic_calendars', 'AcademicCalendarController', ['except' => ['show']]);
        Route::get('sort/academic_calendars','AcademicCalendarController@sortIndex')->name('sort_academic_calendars');
    	Route::post('sort/academic_calendars-sortable','AcademicCalendarController@sortData');
    
        Route::get('event_calendars/data', 'EventCalendarController@getData');
        Route::resource('event_calendars', 'EventCalendarController', ['except' => ['show']]);
    
    
        Route::get('ambassadors/data', 'AmbassadorController@getData');
        Route::resource('ambassadors', 'AmbassadorController', ['except' => ['show']]);
        Route::get('sort/ambassadors','AmbassadorController@sortIndex')->name('sort_ambassadors');
    	Route::post('sort/ambassadors-sortable','AmbassadorController@sortData');
    
    
        Route::get('facts/data', 'FactController@getData');
        Route::resource('facts', 'FactController', ['except' => ['show']]);
        Route::get('sort/facts','FactController@sortIndex')->name('sort_facts');
    	Route::post('sort/facts-sortable','FactController@sortData');

        Route::get('circulars/data', 'CircularController@getData');
    	Route::resource('circulars', 'CircularController', ['except' => ['show']]);
    
        Route::get('transfer-certificates/data', 'TransferCertificateController@getData');
    	Route::resource('transfer-certificates', 'TransferCertificateController', ['except' => ['show']]);
    
        Route::get('gallerys/data', 'GalleryController@getData');
    	Route::resource('gallerys', 'GalleryController', ['except' => ['show']]);
    	Route::get('gallerys/{gallery}', ['as' => 'gallery_images', 'uses' => 'GalleryController@galleryImages']);
        Route::delete('/gallerys/sub-images/{gallery_detail}/delete',['as' => 'sub_images_delete', 'uses' => 'GalleryController@getSubImageDelete']);
        Route::get('sort/gallerys','GalleryController@sortIndex')->name('sort_gallerys');
        Route::get('sort/gallerys/videos','GalleryController@sortVideosIndex')->name('sort_videos_gallerys');
    	Route::post('sort/gallerys-sortable','GalleryController@sortData');

        Route::post('alumni-registrations/excel/data', ['as' => 'excel_alumni_registrations', 'uses' => 'AlumniRegistrationController@downloadExcel']);
        Route::get('alumni-registrations/data', 'AlumniRegistrationController@getData');
        Route::resource('alumni-registrations', 'AlumniRegistrationController', ['except' => ['show']]);

        Route::get('calendar', ['as' => 'calendar', 'uses' => 'CalendarController@edit']);
	    Route::put('calendar/{calendar}', ['as' => 'calendar.update', 'uses' => 'CalendarController@update']);

        Route::get('facilities/data', 'FacilityController@getData');
    	Route::resource('facilities', 'FacilityController', ['except' => ['show']]);
    	Route::get('home_facility', ['as' => 'home_facility', 'uses' => 'FacilityController@home_facility_edit']);
    	Route::put('/facilities/home_facility/{home_facility}', ['as' => 'home_facility_update', 'uses' => 'FacilityController@home_facility_update']);


        Route::get('digital_festival/data', 'DigitalFestivalController@getData');
        Route::resource('digital_festival', 'DigitalFestivalController', ['except' => ['show']]);
        Route::get('home_digital_festival', ['as' => 'home_digital_festival', 'uses' => 'DigitalFestivalController@home_digital_festival_edit']);
        Route::put('/digital_festival/home_digital_festival/{home_digital_festival}', ['as' => 'home_digital_festival_update', 'uses' => 'DigitalFestivalController@home_digital_festival_update']);


        Route::get('isg_internationals', ['as' => 'isg_internationals', 'uses' => 'ISGInternationalsController@edit']);
    	Route::put('isg_internationals/{isg_international}', ['as' => 'isg_international.update', 'uses' => 'ISGInternationalsController@update']);
    
        Route::get('president', ['as' => 'president', 'uses' => 'PresidentController@edit']);
    	Route::put('president/{president}', ['as' => 'president.update', 'uses' => 'PresidentController@update']);
    
        Route::get('founder', ['as' => 'president', 'uses' => 'PresidentController@edit']);
        Route::put('founder/{president}', ['as' => 'president.update', 'uses' => 'PresidentController@update']);
    
        Route::get('principal', ['as' => 'president', 'uses' => 'PresidentController@edit']);
        Route::put('principal/{president}', ['as' => 'president.update', 'uses' => 'PresidentController@update']);
        Route::get('vice-principal', ['as' => 'president', 'uses' => 'PresidentController@edit']);
    
        Route::get('admission', ['as' => 'admission', 'uses' => 'AdmissionController@edit']);
    	Route::put('admission/{admission}', ['as' => 'admission.update', 'uses' => 'AdmissionController@update']);

        // Online admission form submissions (list / view / delete)
        Route::get('admission_applications/data', 'AdmissionApplicationController@getData');
        Route::resource('admission_applications', 'AdmissionApplicationController', ['only' => ['index', 'show', 'destroy']]);
    
        Route::get('management-committees/data', 'ManagementCommitteesController@getData');
    	Route::resource('management-committees', 'ManagementCommitteesController', ['except' => ['show']]);
    	Route::get('sort/management-committees','ManagementCommitteesController@sortIndex')->name('sort_management_committees');
    	Route::post('sort/management-committees-sortable','ManagementCommitteesController@sortData');

        Route::get('faculties/data', 'FacultyController@getData');
    	Route::resource('faculties', 'FacultyController', ['except' => ['show']]);
    	Route::get('sort/faculties','FacultyController@sortIndex')->name('sort_faculties');
    	Route::post('sort/faculties-sortable','FacultyController@sortData');
    
        Route::get('syllabuses/data', 'SyllabusController@getData');
    	Route::resource('syllabuses', 'SyllabusController', ['except' => ['show']]);
    
        Route::get('question-papers/data', 'QuestionPaperController@getData');
    	Route::resource('question-papers', 'QuestionPaperController', ['except' => ['show']]);
    
        Route::get('results/data', 'ResultsController@getData');
    	Route::resource('results', 'ResultsController', ['except' => ['show']]);
    
        Route::get('about-us', ['as' => 'about_us', 'uses' => 'AboutUsController@edit']);
    	Route::put('about-us/{about_us}', ['as' => 'about_us.update', 'uses' => 'AboutUsController@update']);
    
        Route::get('academics', ['as' => 'academics', 'uses' => 'AboutUsController@editAcademics']);
    	Route::put('academics/{academic}', ['as' => 'academics.update', 'uses' => 'AboutUsController@updateAcademics']);
    
        Route::get('home-page', ['as' => 'home_page', 'uses' => 'HomePageController@edit']);
    	Route::put('home-page/{home_page}', ['as' => 'home_page.update', 'uses' => 'HomePageController@update']);

    	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    
    
        Route::get('faq', ['as' => 'faq', 'uses' => 'AboutUsController@editFAQ']);
    	Route::put('faq/{home_page}', ['as' => 'faq.update', 'uses' => 'AboutUsController@updateFAQ']);
    
    
        Route::get('enquiries/data', 'AlumniRegistrationController@getDataRegistrations');
        Route::get('enquiries', 'AlumniRegistrationController@indexEnquiries')->name('enquiries');
    
        //Irfan
        Route::get('careers/data', 'CareerController@getData');
        Route::resource('careers', 'CareerController', ['except' => ['show']]);
        
        Route::get('career_applications/archived', 'CareerApplicationController@archived')->name('career_application.archived');
        Route::get('career_applications/archived-data', 'CareerApplicationController@archivedData');
        Route::get('career_applications/data', 'CareerApplicationController@getData');
        Route::get('career_applications/details/{id}', 'CareerApplicationController@getDetails');
        Route::get('career_applications/test', 'CareerApplicationController@test');
        Route::resource('career_applications', 'CareerApplicationController', ['except' => ['show']]);
        
        Route::resource('notice', NoticeController::class);
        Route::resource('affiliations', AffiliationController::class, ['except' => ['show']]);
        Route::get('affiliations/data', [AffiliationController::class, 'getData'])->name('affiliations.data');
        
        Route::resource('fees-structures', FeesStructureController::class, ['except' => ['show']]);
        Route::get('fees-structures/data', [FeesStructureController::class, 'getData'])->name('fees-structures.data');
        
        Route::get('career_application/export/excel', 'CareerApplicationController@exportExcel');
        Route::get('career_application/export/csv', 'CareerApplicationController@exportCsv');
    });
});



//home page
Route::get('/',['as'=>'main','uses'=> 'Front\HomeController@index']);
Route::get('about-us',['as'=>'about_us','uses'=> 'Front\HomeController@aboutUs']);
Route::get('academics',['as'=>'academics','uses'=> 'Front\HomeController@academics']);
Route::get('syllabuses',['as'=>'syllabuses','uses'=> 'Front\HomeController@syllabuses']);
Route::get('question-papers',['as'=>'question-papers','uses'=> 'Front\HomeController@questionPapers']);
Route::get('circulars',['as'=>'circulars','uses'=> 'Front\HomeController@circulars']);
Route::get('admission',['as'=>'admission','uses'=> 'Front\HomeController@admission']);
Route::post('admission/store',['as'=>'admission_store','uses'=> 'Front\HomeController@admissionStore']);
Route::get('admission-procedure',['as'=>'admissionProcedure','uses'=> 'Front\HomeController@admissionProcedure']);



Route::get('faq',['as'=>'faq','uses'=> 'Front\HomeController@faq']);
Route::post('faq', ['as' => 'get_faq', 'uses' => 'Front\HomeController@getfaq']);
Route::get('management-committees',['as'=>'management_committees','uses'=> 'Front\HomeController@managementCommittee']);
Route::get('faculties',['as'=>'faculties','uses'=> 'Front\HomeController@faculties']);
Route::get('facilities',['as'=>'facilities','uses'=> 'Front\HomeController@facilities']);


Route::get('the-bright-thread', [HomeController::class, 'theBrightThread'])->name('the-bright-thread');
Route::get('why-choose-us', [HomeController::class, 'whyChooseUs'])->name('why-choose-us');

Route::get('publications',['as'=>'publications','uses'=> 'Front\HomeController@publications']);
Route::get('publication/details/{year}',['as'=>'publication_details','uses'=> 'Front\HomeController@publicationDetails']);
Route::get('gallery',['as'=>'photo_gallery','uses'=> 'Front\HomeController@photo_gallery']);
Route::get('photo-gallery/details/{gallery}',['as'=>'photo_gallery_details','uses'=> 'Front\HomeController@photoGalleryDetails']);
Route::get('video-gallery',['as'=>'video_gallery','uses'=> 'Front\HomeController@video_gallery']);

Route::get('transfer-certificate', ['as' => 'tc', 'uses' => 'Front\HomeController@tc']);
Route::post('tc', ['as' => 'get_tc', 'uses' => 'Front\HomeController@getTc']);
Route::get('news',['as'=>'allnews','uses'=> 'Front\HomeController@news']);
Route::get('news-details/{news_slug}',['as'=>'news_details','uses'=> 'Front\HomeController@newsDetails']);
Route::get('alumni-registrations',['as'=>'alumni_registrations','uses'=> 'Front\HomeController@alumniRegistrations']);
Route::post('alumni_registrations_store',['as'=>'alumni_registration_store','uses'=> 'Front\HomeController@alumniRegistrationStore']);



//contact page
Route::get('contact-us',['as'=>'contact_us','uses'=> 'Front\HomeController@contactUs']);
Route::post('contact-us/store',['as'=>'contactus_store','uses'=> 'Front\HomeController@contactUsStore']);


Route::post('enquiry/store',['as'=>'enquiry_store','uses'=> 'Front\HomeController@EnquiryStore']);

Route::get('event-calendar-details/{event_calendar_slug}',['as'=>'event_calendars_details','uses'=> 'Front\HomeController@eventCalendarDetails']);

Route::get('misson-vision',['as'=>'misson_vision','uses'=> 'Front\HomeController@missonVision']);

Route::get('video-gallery',['as'=>'video_gallery','uses'=> 'Front\HomeController@videoGallery']);
Route::get('quality-education/{id}',['as'=>'quality_education','uses'=> 'Front\HomeController@qualityEducation']);
Route::get('founder',['as'=>'founder','uses'=> 'Front\HomeController@founder']);
Route::get('principal',['as'=>'principal','uses'=> 'Front\HomeController@principal']);
// Route::get('vice-principal',['as'=>'principal','uses'=> 'Front\HomeController@vice_principal']);
Route::get('president',['as'=>'president','uses'=> 'Front\HomeController@president']);

Route::get('aims',['as'=>'aims','uses'=> 'Front\HomeController@pages']);
Route::get('student-council',['as'=>'student_council','uses'=> 'Front\HomeController@pages']);
Route::get('prefectorial-body',['as'=>'prefectorial_body','uses'=> 'Front\HomeController@pages']);
Route::get('sports-games',['as'=>'sports_games','uses'=> 'Front\HomeController@pages']);
Route::get('co-curricular-activities',['as'=>'co_curricular_activities','uses'=> 'Front\HomeController@pages']);
Route::get('houses',['as'=>'houses','uses'=> 'Front\HomeController@pages']);
Route::post('career_store',['as'=>'career_store','uses'=> 'Front\HomeController@careerStore']);

//------jamsheer edit------
Route::get('careers',['as'=>'Careers','uses'=> 'Front\HomeController@careers']);
Route::get('careerstest',['as'=>'CareersTest','uses'=> 'Front\HomeController@careerstest']);
Route::get('getcareerQualifications/{id}',['as'=>'GetCareerQualifications','uses'=> 'Front\HomeController@getcareerQualifications']);


Route::resource('isgi-admin/video-gallery', 'Admin\VideoGalleryController');

Route::resource('isgi-admin/page', 'Admin\PageController');


Route::resource('isgi-admin/quality-education/{quality_education_id}/quality-education-image', 'Admin\QualityEducationImageController');
Route::resource('isgi-admin/quality-education/{quality_education_id}/quality-education-video', 'Admin\QualityEducationVideoController');
Route::resource('isgi-admin/quality-education', 'Admin\QualityEducationController');
Route::resource('isgi-admin/department', 'Admin\DepartmentController');
Route::resource('isgi-admin/quality_education_category', 'Admin\QualityEducationCategoryController');
Route::resource('isgi-admin/mission-vision', 'Admin\MissionVisionController');

Route::get('resource', [HomeController::class, 'resources'])->name('resource');
Route::get('resources-parents', [HomeController::class, 'resourcesParents'])->name('resources-parents');
Route::get('resources-students', [HomeController::class, 'resourcesStudents'])->name('resources-students');
Route::get('fee-structure', [HomeController::class, 'feeStructure'])->name('fee-structure');
Route::get('fee-payment', [HomeController::class, 'feePayment'])->name('fee-payment');
Route::get('public-disclosur', [HomeController::class, 'publicDisclosur'])->name('public-disclosur');
Route::get('about-school', [HomeController::class, 'aboutSchool'])->name('about-school');
Route::get('career', [HomeController::class, 'career'])->name('career');
Route::get('digitalfestival', [HomeController::class, 'digitalfestival'])->name('digitalfestival');
Route::get('applicationform', [HomeController::class, 'applicationform'])->name('applicationform');
Route::get('values', [HomeController::class, 'values'])->name('values');





