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
Auth::routes();


Route::group(['middleware' => ['web', 'auth']], function () {

    Route::get('/', function () {
        return redirect('home');
    });

    Route::get('home', 'HomeController@getDashboard');


    /*student */

    Route::get('addst', 'StudentController@getAddStudent');

    Route::post('savest', 'StudentController@postSaveStudent');

    Route::get('addsthealth', 'StudentController@getAddStHealth');

    Route::post('addsthealth', 'StudentController@postSaveStudentMedical');

    Route::get('editst/{id}', 'StudentController@editStudent');

    Route::get('editsthealth', 'StudentController@editStudentHealth');

    Route::post('editsthealth', 'StudentController@postSaveStudentMedical');

    Route::post('editst/{id}/update', 'StudentController@postEditStudent');

    Route::get('deletest/{id}', 'StudentController@deleteStudent');

    Route::get('searchst', 'StudentController@getStSearch');

    Route::post('searchst', 'StudentController@searchStSearch');

    Route::get('st_profile_ach/{id}', "StudentController@searchAchievement");

    /* staff */

    Route::get('addstaff', 'StaffController@addStaff');

    Route::post('poststaff', 'StaffController@postStaff');

    Route::get('searchstaff', 'StaffController@searchStaff');

    Route::get('staff/{id}/view', 'StaffController@viewStaff');

    Route::get('staff/{id}/update', 'StaffController@editStaff');

    Route::post('staff/{id}/update', 'StaffController@postEditStaff');

    Route::get('staff/{id}/delete', 'StaffController@deleteStaff');

    /* society */

    Route::get('addsociety', 'SocietyController@getAddSociety');

    Route::post('postsociety', 'SocietyController@postAddSociety');

    Route::post('postsocietymem', 'SocietyController@postSocietyMember');

    /* Route::get('addstach', 'SocietyController@getAddStudentAchievement'); */

    Route::get('society/{id}/{mic}/{ast_mic}/{pres}/{sec}/{tres}/edit', 'SocietyController@editViewSociety');

    Route::post('editSociety', 'SocietyController@postEditSociety');
    
    Route::get('somemberlist/{id}/view', 'SocietyController@editSocietyMember');
    
    Route::post('editsocietymem', 'SocietyController@editPostSocietyMember');
    
    //Route::get('deletesportmem/{id}','SportController@deleteMember');

    Route::get('searchso', 'SocietyController@searchRegisteredSociety');

    Route::get('society/{id}/view', 'SocietyController@viewSociety');

    //Route::get('somemberlist/{id}/view', 'SocietyController@getMemberList');

    Route::get('society/{id}/delete', 'SocietyController@deleteSociety');


    /* sport */

    Route::get('addsport', 'SportController@addSport');

    Route::post('postsport', 'SportController@postSport');

    Route::get('addsportmem', 'SportController@addSportMember');
       
    Route::post('postSportMem', 'SportController@postSportMember');

    /* Route::get('addstspach','SportController@addStudentAchievement'); */

    Route::get('searchsp', 'SportController@searchRegisteredSport');

    Route::get('sport/{id}/view', 'SportController@viewSport');

    Route::get('sport/{id}/edit', 'SportController@editViewSport');

    Route::post('editsport', 'SportController@editSport');
      
    Route::get('spmemberlist/{id}/view', 'SportController@editSportMember');
    
    Route::post('editsportmem', 'SportController@editPostSportMember');
    
    Route::get('deletesportmem/{id}','SportController@deleteMember');

    Route::get('sport/{id}/manage_members', 'SportController@editSportMember');
    
    Route::get('sport/{id}/delete', 'SportController@deleteSport');


    /* Coach */

    Route::get('addcoach', 'CoachController@addCoach');

    Route::post('postcoach', 'CoachController@postCoach');

    Route::get('searchcoach', 'CoachController@searchCoach');

    Route::get('couch/{id}/view', 'CoachController@viewCouch');

    Route::get('couch/{id}/update', 'CoachController@editViewCouch');

    Route::post('editCouch', 'CoachController@editCouch');

    Route::get('couch/{id}/delete', 'CoachController@deleteCouch');

    /* HouseMeet */

    Route::get('addHouseMeet', 'HouseMeetController@addHouseMeet');

    Route::get('searchHouseMeet', 'HouseMeetController@searchHouseMeet');

    Route::post('postHouseMeet', 'HouseMeetController@postHouseMeet');

    /* Committee Member */

    Route::get('addcom', 'CommiteeController@addComMember');

    Route::post('postCom', 'CommiteeController@postComMem');

    Route::get('searchcom', 'CommiteeController@searchComMember');

    /* Achievement */

    Route::post('postach', 'AchievementController@postAchievement');

    Route::post('addstach', 'AchievementController@postStAchievement');

    Route::get('searchach', 'AchievementController@searchRegisteredAchievement');
    
    Route::get('searchachcommon', 'AchievementController@searchAchievementCommon');

    Route::get('achievement/{id}/view', 'AchievementController@viewAchievement');

    Route::get('achievement/{id}/delete', 'AchievementController@deleteachievement');
         
    Route::get('addachievement', 'AchievementController@viewActivity');
    
    Route::get('activity/{id}/viewach', 'AchievementController@addAchievement');
    
    Route::get('addstachievement', 'AchievementController@viewAchievementSeperate');
    
    Route::get('achievement/{id}/viewstach', 'AchievementController@addStAchievement');
    
    

    /* Activity */

    Route::get('addact', 'ActivityController@addActivity');

    Route::post('postact', 'ActivityController@postActivity');   

    Route::get('searchact', 'ActivityController@searchActivity');
        
    Route::get('searchactcommon', 'ActivityController@searchActivityCommon');        

    Route::get('activity/{id}/view', 'ActivityController@viewActivity');

    Route::get('activity/{id}/delete', 'ActivityController@deleteActivity');
   
    /* section */

    Route::get('addsection', 'ConfigController@getSection');

    /* house */

    Route::get('houses', 'HouseController@searchHouses');

    /* reports */

    Route::get('strank', 'ReportsController@studentRank');

    Route::get('stagegroups', 'ReportsController@studentGroups');

    Route::get('st_house', 'ReportController@viewStudentHouse');
    
    Route::post('st_house','ReportController@reportStudentHouse');

    Route::get('tr_house','ReportController@viewTeacherHouse');
    
    Route::post('tr_house','ReportController@viewTeacherHouseReport');
        
    Route::get('select_sport','ReportController@selectForSport');
    
    Route::post('sport_report','ReportController@selectForSportReport');

    Route::get('pdf','ReportController@pdf');


    /* grade */

    Route::get('addgrade', 'ConfigController@getGrade');

    /* class */

    Route::get('addclassroom', 'ConfigController@getClassroom');

    /* Event Calendar */

    Route::get('calendar', 'EventController@getCalendar');

});

/* section ajax */

Route::get('viewsection', 'ConfigController@viewSection');

Route::post('postsection', 'ConfigController@postSection');

Route::get('deletesection/{id}', 'ConfigController@deleteSection');

Route::get('editsection/{id}', 'ConfigController@editSection');

/* grade ajax */

Route::get('viewgrade', 'ConfigController@viewGrade');

Route::post('postgrade', 'ConfigController@postGrade');

Route::get('deletegrade/{id}', 'ConfigController@deleteGrade');

/* class ajax */

Route::get('viewclassroom', 'ConfigController@viewClassroom');

Route::post('postclassroom', 'ConfigController@postClassroom');

Route::get('deleteclassroom/{id}', 'ConfigController@deleteClassroom');

/* Society ajax */

Route::get('viewnamesotr/{id}', 'SocietyController@getName');

Route::get('viewnamesost/{id}', 'SocietyController@getNameStudent');

Route::get('loadact', 'SocietyController@loadActivity');

/* Sport ajax */

Route::get('viewnamesp/{id}', 'SportController@getName');

Route::get('viewnamecoach/{id}', 'SportController@getNameCoach');


/* Testing */
Route::get('stclub', 'TestController@loadStudentClubs');

Route::post('stclub', 'TestController@resultStudentClubs');