<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SitemapController;

Route::get('/clear-route-cache', function () {
    \Artisan::call('route:clear');
    return "Route cache cleared!";
});
Route::get('/clear-app-cache', function () {
    \Artisan::call('cache:clear');
    return "Application cache cleared!";
});

Route::get('/sitemap-test.xml', [SitemapController::class, 'index']);

Route::get('/login', [UserController::class,'show'])->name('admin.show');
Route::post('/login', [UserController::class,'login'])->name('login');
Route::get('/blogs', [BlogController::class, 'blog_page'])->name('our-blog');

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/last-minute-flights-booking-deals', [HomeController::class,'flights'])->name('flights');
Route::get('/cheap-car-rental-deals', [HomeController::class,'car_rental'])->name('car.rental');
Route::get('/cheap-hotels-booking', [HomeController::class,'hotel'])->name('hotel');
Route::get('/tour-and-travel-packages', [HomeController::class,'packages'])->name('packages');
Route::get('/about', [HomeController::class,'about'])->name('about');
Route::get('/terms-conditions', [HomeController::class,'terms'])->name('terms');
Route::get('/refund-policy', [HomeController::class,'refund'])->name('refund');
Route::get('/privacy-policy', [HomeController::class,'privacy'])->name('privacy');
Route::get('/car-book-form', [HomeController::class,'car_book_form'])->name('car.book.form');
Route::post('/subscribe', [HomeController::class, 'subscribe_form'])->name('newsletter.subscribe');


Route::post('/car/store', [BookingController::class, 'store'])->name('car.booking');
Route::post('/flight/package/store', [BookingController::class, 'flight_store_package'])->name('flight.booking.package');
Route::post('/flight/store', [BookingController::class, 'flight_store'])->name('flight.booking');
Route::post('/flight/stores', [BookingController::class, 'flight_stores'])->name('flights.booking');
Route::post('/royalcare/store', [BookingController::class, 'flight_store_data'])->name('flight.storebookings');
Route::post('/hotel/store', [BookingController::class, 'hotel_store'])->name('hotel.booking');
Route::get('/hotel/booking/thank-you', [BookingController::class, 'thankyouhotelpage'])->name('hotel.thankyou');
Route::get('/flight/booking/thank-you', [BookingController::class, 'thankyou'])->name('flight.thankyou');
Route::get('/royal-care-form', [HomeController::class,'royal_care_form'])->name('royalcare.form');
Route::get('/getairportcode', [HomeController::class, 'getAirports']);
Route::get('/contact', [ContactController::class,'contact'])->name('contact');
Route::get('/contactadmin', [ContactController::class,'contactadmin'])->name('contact.admin');
Route::get('/newsletter', [ContactController::class,'newsletteradmin'])->name('newsletter.admin');
Route::post('/submit-form', [ContactController::class, 'submitcontactForm'])->name('submit.contactform');
Route::get('/blogs/{slug}', [BlogController::class,'blogdetail'])->name('blogdetail');
Route::get('newsletter/{newsletter}/edit', [ContactController::class, 'editnewsletter'])->name('newsletter.edit');
Route::put('newsletters/{newsletter}', [ContactController::class, 'updatenewsletter'])->name('newsletter.update');
Route::delete('newsletter/{newsletter}', [ContactController::class, 'destroynewsletter'])->name('newsletter.destroy');



Route::group(['middleware' => ['userAccess']], function () {

    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/setting', [SettingController::class,'index'])->name('setting.index');
    Route::post('/setting/update', [SettingController::class,'update'])->name('setting.update');

    Route::post('/settings/new-meta', [SettingController::class, 'new_meta_add'])->name('settings.new_meta');
    Route::get('settings/edit-meta/{id}', [SettingController::class, 'editSettingForm'])->name('settings.edit_meta');
    Route::post('edit-setting/{id}', [SettingController::class, 'updateSettingForm'])->name('update_setting_form');

    Route::get('/car/index', [BookingController::class, 'index'])->name('car.index');
    Route::get('/flight/booking-list', [BookingController::class, 'flight_booking_list'])->name('flight.booking_list');

    // Blog Routes start 
    Route::get('/blog', [BlogController::class, 'index'])->name('admin.blog');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/edit/{id}', [BlogController::class,'edit'])->name('blog.edit');
    Route::post('/blog/update/{id}', [BlogController::class,'update'])->name('blog.update');
    Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
    Route::post('/uploadimage', [BlogController::class,'uploadimage'])->name('ckeditor.upload');


    // Blog category Routes start 
    Route::get('/blog-category', [BlogCategoryController::class, 'index'])->name('blog-category');
    Route::post('/blog-category/store', [BlogCategoryController::class, 'store'])->name('blog-category.store');
    Route::get('/blog-category/edit/{id}', [BlogCategoryController::class,'edit'])->name('blog-category.edit');
    Route::post('/blog-category/update/{id}', [BlogCategoryController::class,'update'])->name('blog-category.update');
    Route::get('/blog-category/destroy/{id}', [BlogCategoryController::class,'destroy'])->name('blog-category.destroy');
    Route::get('flights/{id}/edit', [BookingController::class, 'editflight'])->name('flights.edit');
    Route::put('flights/{id}', [BookingController::class, 'updateflight'])->name('flights.update');
    Route::get('cars/{id}/edit', [BookingController::class, 'editcars'])->name('cars.edit');
    Route::put('cars/{id}', [BookingController::class, 'updatecars'])->name('cars.update');
    Route::delete('cars/{id}', [BookingController::class, 'destroycars'])->name('cars.destroy');

    Route::delete('flights/{id}', [BookingController::class, 'destroyflight'])->name('flights.destroy');

    Route::get('hotels', [HotelController::class, 'index'])->name('hotels.index');
    Route::get('hotels/{hotel}/edit', [HotelController::class, 'edit'])->name('hotels.edit');
    Route::put('hotels/{hotel}', [HotelController::class, 'update'])->name('hotels.update');
    Route::delete('hotels/{hotel}', [HotelController::class, 'destroy'])->name('hotels.destroy');

    Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');  
    Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');   
    Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy'); 

});

Route::get('/flight-search', [BookingController::class, 'showForm'])->name('flight.search');
Route::post('/flight-search', [BookingController::class, 'searchFlights'])->name('flight.search.submit');