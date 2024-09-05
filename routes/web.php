<?php
use App\Model\Student;
use Illuminate\Support\Facades\Route;


Route::get('/students/create', function() {
    $student = new Student();
    $student->first_name = 'Vismark';
    $student->last_name = 'Cotanda';
    $student->email = 'pomsmanding@gmail.com';
    $student->save();
    return 'Student Created!';
});

Route::get('/students', function(){
    $students = Student::all();
    return $students;
});

Route::get('/students/update', function(){
    $student = Student::where('email', 'pomsmanding@gmail.com')->first();
    $student->email = 'pomsmanding@gmail.com';
    $student->save();
    return 'Student Updated!';
});

Route::get('/students/delete', function (){
    $student = Student::where('email', 'pomsmanding@gmail.com')->first();
    $student->delete();
    return 'Student Deleted!';
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
