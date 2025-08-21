<?php

use App\Http\Controllers\SecondTestController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\TestController;
use App\Models\Teachers;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return 'Hello From Laravel';
});

Route::get('add-data',[StudentController::class,'addData']);
Route::get('get-data',[StudentController::class,'getData']);
Route::get('update-data',[StudentController::class,'updateData']);
Route::get('delete-data',[StudentController::class,'deleteData']);
Route::get('where-conditions',[StudentController::class,'whereConditions']);
Route::get('queryScope',[StudentController::class,'queryScope']);
Route::get('secondQuery',[StudentController::class,'secondQuery']);


/*Route::get('teachers',[TeachersController::class,'index']);
Route::get('add-teachers',[TeachersController::class,'add']);
Route::get('show-teacher/{id}',[TeachersController::class,'show']);
Route::get('update-teacher/{id}',[TeachersController::class,'update']);
Route::get('delete-teacher/{id}',[TeachersController::class,'delete']);*/

/*Route::get('teachers',function(){
    return Teachers::all();
});*/
/*Route::get('about',function(){
    return 'Aboout Us';
});

Route::prefix('details')->group(function(){
    Route::get('students',function(){
        return 'This Is Student';
    })->name('student-Details');
    Route::get('teachers',function(){
        return 'This Is Teacher';
    })->name('teacher-Details');
});

Route::get('student/{id}/{reg}',function($id,$reg){
    return 'Student Number '.$id.' registration number: '.$reg;
});

Route::fallback(function(){
    return 'This Page Not Exists';
});

Route::get('about-us/{name}/{id}',function($name,$id){
    $name="tester";
    $email='tester@gmail.com';
    return view('aboutus')->with('name',$name)->with('email',$email);
    return view('aboutus',compact('name','email'));
    return view('aboutus',['name'=>$name,'email'=>$email]);
    return view('aboutus',compact('name','id'));
});

Route::view('contact-us/{name}/{id}','contactus');

Route::get('students',[StudentController::class,'index']);
Route::get('about-us',[StudentController::class,'aboutUs']);

Route::controller(StudentController::class)->group(function(){
    Route::get('students','index');
    Route::get('about-us','aboutUs');
});

Route::get('invoke',TestController::class);
Route::resource('second-test',SecondTestController::class);*/

