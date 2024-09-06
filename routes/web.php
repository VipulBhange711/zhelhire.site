<?php



use App\Http\Controllers\AuthController;

use App\Http\Controllers\AutherController;

use App\Http\Controllers\CourseController;

use App\Http\Middleware\AuthArea;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MyController;

use App\Http\Controllers\OfficeController;

use Illuminate\Support\Facades\Artisan;



Route::view("/lg", "components.dashboard.auth.login")->name('login');

Route::post("login", [AuthController::class, "login"])->name('login.post');



Route::view("register", "components.dashboard.auth.register")->name('register.get');

Route::post("register", [AuthController::class, "register"])->name('register.post');



Route::get('logout', [AuthController::class,"logout"])->name('logout');



Route::get('googleLogin', [AuthController::class, "GoogleLogin"])->name('GoogleLogin');

Route::get('dashboard/check/callback', [AuthController::class, "googleHandle"])->name('googleHandle');



Route::view('viewlog','uiPages.index');

Route::get('/', [MyController::class, 'home'])->name('home');

Route::get('/contact', [MyController::class, 'contact'])->name('contact');

Route::get('/services', [MyController::class, 'services'])->name('services');

Route::get('/about', [MyController::class, 'about'])->name('about');

Route::get('/vip', [MyController::class, 'vip'])->name('vip');

Route::view('/viewCourse','uiPages.view_courses')->name('viewCourses');

Route::post('/inquery', [MyController::class, 'inquery'])->name('inquery.post');



// Course Route

Route::get('/webCourseNow',[CourseController::class,'webview']);

Route::get('/webCourse',[CourseController::class,'webCourse'])->name('Web.course');

// Course Route 





Route::middleware([AuthArea::class])->group(function () {

    Route::get('/dashboard', [AuthController::class, "dashboard"])->name('welcome');

    Route::get('/JobList', [AutherController::class, "joblist"])->name('joblist');

    Route::get('users', [AutherController::class, 'index'])->name('index');



    Route::get('/paymentSlip',[OfficeController::class,'paymentSlip'])->name('paymentSlip');

    Route::post('/InternshipLetter',[OfficeController::class,'InternshipLetter'])->name('InternshipLetter');

    Route::post('/AppraisalLetter',[OfficeController::class,'AppraisalLetter'])->name('AppraisalLetter');

});



Route::get('/socialite', function () {
    $output = shell_exec('composer require laravel/socialite 2>&1');
    return nl2br($output);
});


Route::get('/optimizew', function () {
    Artisan::call('optimize');
    return 'Application optimized!';
});



// Artisan Command
Route::get('/component/{name}', function ($name) {
    Artisan::call('make:component', ['name' => $name]);
    return response()->json(['message' => "Component '$name' created successfully"]);
});

Route::get('/migrate', function () {
    Artisan::call('migrate');
    return response()->json(['message' => 'Migration completed successfully']);
});

Route::get('/controller/{name}', function ($name) {
    Artisan::call('make:controller', ['name' => $name]);
    return response()->json(['message' => "Controller '$name' Created Successfully"]);
});

Route::get('/RouteClear', function () {
    Artisan::call('route:clear');
    return response()->json(['message' => "Route Clear  Successfully"]);
});
Route::get('/ConfigClear', function () {
    Artisan::call('config:clear');
    return response()->json(['message' => "config Clear  Successfully"]);
});
Route::get('/CacheClear', function () {
    Artisan::call('cache:clear');
    return response()->json(['message' => "CaChe Clear  Successfully"]);
});
Route::get('/Optimize', function () {
    Artisan::call('optimize');
    return response()->json(['message' => "Optimize  Successfully"]);
});
// Artisan Command





