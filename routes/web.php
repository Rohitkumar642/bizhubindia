<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminEditController;
use App\Http\Controllers\MessageController;

// Static Pages
Route::view('/', 'home.index')->name('default');
Route::view('/about', 'home.about-us')->name('about');
Route::view('/contact', 'home.contact-us')->name('contact');
Route::view('/services', 'home.services')->name('services');
Route::view('/faq', 'home.faq')->name('faq');

// User Auth
Route::view('/login', 'user.login')->name('login');
Route::post('/send-otp', [LoginController::class, 'sendOtp'])->name('send.otp');
Route::post('/verify-otpmobile', [LoginController::class, 'verifyOtpmobile'])->name('verify.otpmobile');

Route::view('/signup', 'user.signup')->name('signup');
Route::post('/signup', [SignupController::class, 'signup']);
Route::post('/checkotp', [SignupController::class, 'checkotp']); // ✅ Corrected typo: `SignUpController` → `SignupController`

// Vendor Routes
Route::view('/vendor', 'user.vendor_registration')->name('vendor.register');
Route::view('/vendor-registration', 'user.vendor_registration');
Route::post('/fetch-vendor-data', [VendorController::class, 'fetchVendorData'])->name('fetch.vendor.data');
Route::post('/register-vendor', [VendorController::class, 'registerVendor'])->name('register.vendor');
Route::post('/register-vendormanual', [VendorController::class, 'registerVendorNoGst'])->name('register.vendormanual');
Route::post('/verify-otp', [VendorController::class, 'verifyOtp'])->name('verify.otp');

// Home / Dashboard
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/update-vendor', [HomeController::class, 'updateVendor'])->name('update.vendor');

// Inquiry
Route::post('/inquiry', [InquiryController::class, 'store'])->name('inquiry.store');
Route::get('/eenquiry', [HomeController::class, 'inquiry'])->name('inquiry.show');

// User Logout
Route::get('/user/logout', [LoginController::class, 'logout'])->name('user.logout');

// Subscriber
Route::get('/ssubscribe/show', [HomeController::class, 'subscribe'])->name('ssubscribe.show');
Route::post('/subscribed', [SubscriberController::class, 'store'])->name('subscribed.store');

Route::get('/unsubscribe/show', [HomeController::class, 'unsubscribe'])->name('unsubscribe.show');
Route::post('/unsud', [SubscriberController::class, 'unsubscribe'])->name('unsubscribe.store');
Route::get('/unsubscribee', [SubscriberController::class, 'unsubscribe'])->name('unsubscribee');
Route::get('/unsubscribe/{email}', [SubscriberController::class, 'delete']);

// Logout (JSON)
Route::post('/logout', function () {
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
    return response()->json(['message' => 'Logged out successfully']);
})->name('logout');

// Admin Routes
Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login']);
Route::get('/admin/dashboard', [AdminLoginController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

// Admin Panel Sections
Route::get('/admin/vendors', [DashboardController::class, 'vendorList'])->name('admin.vendors');
Route::get('/admin/vendors/data', [DashboardController::class, 'getVendors'])->name('admin.vendors.data');
Route::get('/admin/subscribers', [DashboardController::class, 'showSubscribers'])->name('Subscribers');
Route::get('/admin/unsubscribers', [DashboardController::class, 'UnSubscribers'])->name('UnSubscribers');
Route::get('/admin/inquiry', [DashboardController::class, 'Inquiries'])->name('Inquiry');

// Admin Profile
Route::get('/admin/edit-profile', [AdminEditController::class, 'editProfile'])->name('admin.editProfile');
Route::post('/admin/update-profile', [AdminEditController::class, 'updateProfile'])->name('admin.updateProfile');
Route::post('/admin/reset-password', [AdminLoginController::class, 'resetPassword'])->name('admin.reset.password');

// Messages
Route::post('/send-message', [MessageController::class, 'store'])->name('send.message');
