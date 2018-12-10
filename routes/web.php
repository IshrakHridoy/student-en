<?php



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
    return view('std_login');
});
Route::get('/backend', function () {
    return view('admin.admin_login');
});

//admin login
Route::post('/admin_dashboard','AdminController@dashboard');
//Route::get('/admin_dashboard','AdminController@admin_dashboard');
//admin logout
Route::get('/logout','AdminController@logout');
Route::get('/viewprofile','AdminController@viewprofile');
Route::get('/setting','AdminController@setting');

//std login
Route::post('/stdlogin','AdminController@login_dashboard');

//add std
Route::get('/addstudent','AddstudentsController@addstudent');
Route::post('/save_student','AddstudentsController@savestudent'); //save-std
Route::get('/allstudent','AllstudentsController@allstudent');
Route::get('/student_delete/{student_id}','AllstudentsController@studentdelete');
Route::get('/student_view/{student_id}','AllstudentsController@studentview');
Route::get('/student_edit/{student_id}','AllstudentsController@studentedit');
Route::post('/student_update/{student_id}','AllstudentsController@studentupdate');


Route::get('/tutionfee','TutionController@tutionfee');
Route::get('/result','ResultController@result');
Route::get('/cse','CSEController@cse');
Route::get('/eee','EEEController@eee');
Route::get('/ce','CEController@ce');
Route::get('/bba','BBAController@bba');
Route::get('/eng','ENGController@eng');


Route::get('/addT','addTeacherController@add_teacher');
Route::get('/allT','allTeacherController@all_teacher');
Route::post('/save_teacher','AddTeacherController@save_teacher'); //save_teacher
Route::get('/deptSH','DeptSHController@deptSH');
Route::get('/vc','VCController@vc');
Route::get('/registrar','RegController@registrar');

