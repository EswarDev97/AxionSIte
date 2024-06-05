<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Corporates\CorporateController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\CPAcademyController;
use App\Http\Controllers\NewsAndEventsController;
use App\Http\Controllers\Corporates\ContactController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\Auth\SignUpController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('terms', [HomeController::class, 'terms'])->name('terms');

Route::get('sign-up', [SignUpController::class, 'index'])->name('sign-up');

Route::get('corporate', [CorporateController::class, 'index'])->name('corporate');

Route::get('products', [ProductsController::class, 'index'])->name('products');
Route::get('products/veyes-claim-survey', [ProductsController::class, 'veyesClaimSurvey'])->name('veyes-claim-survey');
Route::get('products/live-streaming', [ProductsController::class, 'liveStreaming'])->name('live-streaming');
// Route::get('products/valuation', [ProductsController::class, 'valuation'])->name('valuation');

Route::get('services', [ServicesController::class, 'index'])->name('services');
Route::get('services/preacceptance-inspection', [ServicesController::class, 'preacceptanceInspection'])->name('preacceptance-inspection');
Route::get('services/data-analytics', [ServicesController::class, 'dataAnalytics'])->name('data-analytics');
Route::get('services/image-recognition', [ServicesController::class, 'imageRecognition'])->name('image-recognition');
Route::get('services/anomaly-detection', [ServicesController::class, 'AnomalyDetection'])->name('anomaly-detection');
Route::get('services/valuation', [ProductsController::class, 'valuation'])->name('valuation');

Route::get('cp-academy', [CPAcademyController::class, 'index'])->name('cp-academy');
Route::get('ai-ml-masterclass-course', [CPAcademyController::class, 'AIMLMasterClass'])->name('ai-ml-masterclass-course');
Route::get('ai-ml-business-leader', [CPAcademyController::class, 'AIMLBusinessLeader'])->name('ai-ml-business-leader');
Route::get('ai-ml-webinar', [CPAcademyController::class, 'AIMLWebinar'])->name('ai-ml-webinar');

Route::get('news-and-events', [NewsAndEventsController::class, 'index'])->name('news-and-events');

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send-email', [ContactController::class, 'sendContactEmail']);

Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('process/checkout', [CheckoutController::class, 'processCheckout'])->name('processCheckout');
//Route::get('checkout/success', [CheckoutController::class, 'successCheckout']);

Route::get('/handle-payment/success', [CheckoutController::class, 'successCheckout']);
Route::get('/handle-payment/cancel', [CheckoutController::class, 'cancelledCheckout'])->name('checkout-cancelled');
Route::get('/handle-payment/declined', [CheckoutController::class, 'declinedCheckout'])->name('checkout-declined');

Route::get('enquiry/success', [EnquiryController::class, 'successEnquiry'])->name('success-enquiry');
Route::post('enquiry/send-email', [EnquiryController::class, 'sendEnquiryEmail'])->name('enquiry');