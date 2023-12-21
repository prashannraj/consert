<?php

use Illuminate\Support\Facades\Route;
use App\Models\Configuration;
use App\Models\ClassData;
use App\Models\RegisterForm;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Student;

Route::get('/logout', function() {
    Auth::guard('student')->logout();
    return redirect('/');
});

Route::get('/', function() { return view('pages.index', [
    'theme' => Configuration::findorfail(1),
    'classData' => ClassData::where('status', 'active')->where('admission_from', '<=', Carbon::now())->where('admission_to', '>=', Carbon::now())->orderBy('order', 'ASC')->get()
]); })->name('home');
Route::get('/register', function() {
    return redirect('/');
});
Route::get('/register/{id}', function($id) {
    if (Auth::guard('student')->check()) {
        return view('pages.register', [ 'theme' => Configuration::findorfail(1), 'classData' => ClassData::where('status', 'active')->findorfail($id) ]);
    }
    else {
        Notification::make()
            ->title('You need to login first.')
            ->iconColor('danger')
            ->send();
        return redirect('/login');
    }
});

Route::get('/dashboard', function() {
    if (Auth::guard('student')->check()) {
        return view('pages.dashboard', [
            'theme' => Configuration::findorfail(1),
        ]);
    }
    else {
        return redirect('/login');
    }
});

Route::get('/signup', function() {
    if (Auth::guard('student')->check()) {
        return redirect('/dashboard');
    }
    else {
        return view('pages.signup', [
            'theme' => Configuration::findorfail(1),
        ]);
    }
});

Route::get('/forgot-password', function() {
    if (!Auth::guard('student')->check()) {
        return view('pages.forgot-password', [
            'theme' => Configuration::findorfail(1),
        ]);
    }
    else {
        return redirect('/');
    }
});

Route::get('/reset-password/{token}', function($token) {
    $check = Student::where('status', 'active')->where('token', $token)->first();
    if ($check != NULL) {
        return view('pages.reset-password', [
            'token' => $token,
            'theme' => Configuration::findorfail(1),
        ]);
    }
    else {
        return redirect('/');
    }
});

Route::get('/login', function() {
    if (Auth::guard('student')->check()) {
        return redirect('/dashboard');
    }
    else {
        return view('pages.login', [
            'theme' => Configuration::findorfail(1),
        ]);
    }
});

Route::get('/id-card', function() {
    if (Auth::guard('student')->check()) {
        $data = RegisterForm::where('student_db_id', Auth::guard('student')->user()->id)->where('status', 'approved')->orderBy('id', 'DESC')->first();
        if ($data != NULL) {
            return view('pages.studentID', [
                'data' => $data
            ]);
        }
        else {
            Notification::make()
                ->title('Admission form needs to be approved first.')
                ->iconColor('danger')
                ->send();
            return redirect('/dashboard');
        }
    }
    else {
        Notification::make()
            ->title('You need to login first.')
            ->iconColor('danger')
            ->send();
        return redirect('/');
    }
});

Route::get('/id-card/{id}', function($id) {
    if (Auth::check()) {
        return view('pages.id-card', [
            'data' => RegisterForm::findorfail($id)
        ]);
    }
    else {
        Notification::make()
            ->title('Login to your dashboard first to create ID Card.')
            ->iconColor('danger')
            ->send();
        return redirect('/');
    }
});