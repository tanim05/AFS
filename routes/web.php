<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return redirect('login');
    
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', 'App\Http\Controllers\Backend\PagesController@index')->name('dashboard');

Route::group(['middleware' => ['auth']], function() {
    /**
    * Logout Route
    */
    Route::get('/logout', 'App\Http\Controllers\LogoutController@perform')->name('logout.perform');
 });

Auth::routes();
// Batch Urls
Route::get('/batch', 'App\Http\Controllers\Backend\BatchController@index')->name('batch.index');
Route::post('/batch/store', 'App\Http\Controllers\Backend\BatchController@store')->name('batch.store');
Route::post('/batch/update/{id}', 'App\Http\Controllers\Backend\BatchController@update')->name('batch.update');
Route::post('/batch/delete/{id}', 'App\Http\Controllers\Backend\BatchController@delete')->name('batch.delete');

// Intake Urls
Route::get('/intake', 'App\Http\Controllers\Backend\IntakeController@index')->name('intake.index');
Route::post('/intake/store', 'App\Http\Controllers\Backend\IntakeController@store')->name('intake.store');
Route::post('/intake/update/{id}', 'App\Http\Controllers\Backend\IntakeController@update')->name('intake.update');
Route::post('/intake/delete/{id}', 'App\Http\Controllers\Backend\IntakeController@delete')->name('intake.delete');




// Module Urls
Route::get('/module', 'App\Http\Controllers\Backend\ModuleController@index')->name('module.index');


Route::post('/module/store', 'App\Http\Controllers\Backend\ModuleController@store')->name('module.store');
Route::post('/module/update/{id}', 'App\Http\Controllers\Backend\ModuleController@update')->name('module.update');
Route::post('/module/delete/{id}', 'App\Http\Controllers\Backend\ModuleController@delete')->name('module.delete');

Route::get('/module/approve/{id}', 'App\Http\Controllers\Backend\ModuleController@approve')->name('module.approve');
Route::post('/module/close', 'App\Http\Controllers\Backend\ModuleController@close')->name('module.close');

Route::get('/module/report/{id}', 'App\Http\Controllers\Backend\ModuleController@report')->name('note.report');
Route::get('/note/flow', 'App\Http\Controllers\Backend\ModuleController@createflow')->name('note.flow');
//template
Route::get('/template', 'App\Http\Controllers\TemplateController@index')->name('template.index');
Route::post('/templete/store', 'App\Http\Controllers\TemplateController@store')->name('template.store');
Route::post('/templete/update/{id}', 'App\Http\Controllers\TemplateController@update')->name('template.update');
Route::post('/templete/delete/{id}', 'App\Http\Controllers\TemplateController@delete')->name('template.delete');
Route::get('/templete/report/{id}', 'App\Http\Controllers\TemplateController@report')->name('template.report');
Route::get('/templete/sendmail', 'App\Http\Controllers\TemplateController@sendmail')->name('template.sendmail');

//inobx
Route::get('/inbox', 'App\Http\Controllers\InboxController@index')->name('inbox.index');
Route::post('/inbox/update/{id}', 'App\Http\Controllers\InboxController@update')->name('inbox.update');
Route::get('/note/reject/{id}', 'App\Http\Controllers\InboxController@reject')->name('note.reject');
Route::get('/note/approve/{id}', 'App\Http\Controllers\InboxController@approve')->name('note.approve');
Route::get('/inbox/edit/{id}', 'App\Http\Controllers\InboxController@EditNote')->name('inbox.edit');

Route::get( '/inboxchairman/{id}', 'App\Http\Controllers\InboxController@chairman')->name('inboxchairman.index');


//outbox
Route::get('/outbox', 'App\Http\Controllers\OutboxController@index')->name('outbox.index');

Route::get('/outbox/edit/{id}', 'App\Http\Controllers\OutboxController@ViewNote')->name('outbox.edit');
Route::post('/outbox/close', 'App\Http\Controllers\OutboxController@close')->name('outbox.close');

// Subject Urls
Route::get('/subject', 'App\Http\Controllers\Backend\SubjectController@index')->name('subject.index');
Route::post('/subject/store', 'App\Http\Controllers\Backend\SubjectController@store')->name('subject.store');
Route::post('/subject/update/{id}', 'App\Http\Controllers\Backend\SubjectController@update')->name('subject.update');
Route::post('/subject/delete/{id}', 'App\Http\Controllers\Backend\SubjectController@delete')->name('subject.delete');

// Participant Urls
Route::get('/participant', 'App\Http\Controllers\Backend\ParticipantController@index')->name('participant.index');
Route::post('/participant/store', 'App\Http\Controllers\Backend\ParticipantController@store')->name('participant.store');
Route::post('/participant/update/{id}', 'App\Http\Controllers\Backend\ParticipantController@update')->name('participant.update');
Route::post('/participant/delete/{id}', 'App\Http\Controllers\Backend\ParticipantController@delete')->name('participant.delete');

// Teacher Urls
Route::get('/teacher', 'App\Http\Controllers\Backend\TeacherController@index')->name('teacher.index');
Route::post('/teacher/store', 'App\Http\Controllers\Backend\TeacherController@store')->name('teacher.store');
Route::post('/teacher/update/{id}', 'App\Http\Controllers\Backend\TeacherController@update')->name('teacher.update');
Route::post('/teacher/delete/{id}', 'App\Http\Controllers\Backend\TeacherController@destroy')->name('teacher.delete');

// Routine Urls
Route::get('/routine', 'App\Http\Controllers\Backend\RoutineController@index')->name('routine.index');
Route::post('/routine/store', 'App\Http\Controllers\Backend\RoutineController@store')->name('routine.store');
Route::post('/routine/update/{id}', 'App\Http\Controllers\Backend\RoutineController@update')->name('routine.update');
Route::post('/routine/delete/{id}', 'App\Http\Controllers\Backend\RoutineController@delete')->name('routine.delete');

// Marks Urls
Route::get('/mark', 'App\Http\Controllers\Backend\MarkController@index')->name('mark.index');
Route::post('/mark/store', 'App\Http\Controllers\Backend\MarkController@store')->name('mark.store');
Route::post('/mark/update/{id}', 'App\Http\Controllers\Backend\MarkController@update')->name('mark.update');
Route::post('/mark/delete/{id}', 'App\Http\Controllers\Backend\MarkController@destroy')->name('mark.delete');

// notice Urls
Route::get('/notice', 'App\Http\Controllers\Backend\NoticeController@index')->name('notice.index');
Route::post('/notice/store', 'App\Http\Controllers\Backend\NoticeController@store')->name('notice.store');
Route::post('/notice/update/{id}', 'App\Http\Controllers\Backend\NoticeController@update')->name('notice.update');
Route::get('/notice/delete/{id}', 'App\Http\Controllers\Backend\NoticeController@destroy')->name('notice.delete');


// Route::get('/', 'App\Http\Controllers\Backend\PagesController@index')->name('welcome');
Route::get('/insert', 'App\Http\Controllers\Backend\ProgressReportController@insert')->name('insert');

Route::post('/store', 'App\Http\Controllers\Backend\ProgressReportController@store')->name('store');
Route::post('/storeB', 'App\Http\Controllers\Backend\ProgressbController@storeB')->name('storeB');
Route::post('/storeC', 'App\Http\Controllers\Backend\PlacedJobsController@storeC')->name('storeC');
Route::post('/storeD', 'App\Http\Controllers\Backend\CourseOfferedController@storeD')->name('storeD');
Route::post('/storeE', 'App\Http\Controllers\Backend\TrainersInvolvedController@storeE')->name('storeE');
Route::post('/storeF', 'App\Http\Controllers\Backend\NumberTrainersController@storeF')->name('storeF');
Route::post('/storeG', 'App\Http\Controllers\Backend\AccessoriesController@storeG')->name('storeG');



