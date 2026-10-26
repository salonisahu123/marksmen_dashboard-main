<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ContactEnquiryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\JobApplicationController;
use App\Http\Controllers\Admin\JobOpeningController;
use App\Http\Controllers\Admin\JournalController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductEnquiryController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\FrontendEnquiryController;
use App\Http\Controllers\User\ApplicationController as UserApplicationController;
use App\Http\Controllers\User\AuthController as UserAuthController;
use App\Http\Controllers\User\DashboardController as UserDashboardController;
use App\Http\Controllers\User\EnquiryController as UserEnquiryController;
use App\Http\Controllers\User\JobController as UserJobController;
use App\Http\Controllers\User\ProfileController as UserProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/product-enquiry', [FrontendEnquiryController::class, 'store'])
    ->name('product-enquiry.store');

Route::post(
    '/contact-enquiry',
    [FrontendEnquiryController::class, 'contact']
)->name('contact-enquiry.store');

Route::post(
    '/career-enquiry',
    [FrontendEnquiryController::class, 'career']
)->name('career-enquiry.store');

Route::get('/test-career', function () {
    $req = Request::create('/career-enquiry', 'POST', [
        'full_name' => 'Test Name',
        'mobile_number' => '1234567890',
        'email' => 'test@test.com',
        'current_city' => 'Test City',
        'total_experience' => '2 years',
    ]);

    return app()->handle($req);
});

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/products', [FrontendController::class, 'products'])->name('products');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/mining', [FrontendController::class, 'mining'])->name('mining');
Route::get('/tata-hitachi', [FrontendController::class, 'tataHitachi'])->name('tata-hitachi');
Route::get('/schwing-stetter', [FrontendController::class, 'schwingStetter'])->name('schwing-stetter');
Route::get('/ascenso-tyres', [FrontendController::class, 'ascensoTyres'])->name('ascenso-tyres');
Route::get('/eicher-trucks', [FrontendController::class, 'eicherTrucks'])->name('eicher-trucks');
Route::get('/gallery/{filter?}', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/clients/{filter?}', [FrontendController::class, 'clients'])->name('clients');
Route::get('/careers', [FrontendController::class, 'careers'])->name('careers');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::middleware('guest')->group(function () {

            Route::get('/login', [
                AuthController::class,
                'showLogin',
            ])->name('login');

            Route::post('/login', [
                AuthController::class,
                'login',
            ])->name('login.submit');

        });
        /*
        |--------------------------------------------------------------------------
        | Protected Admin
        |--------------------------------------------------------------------------
        */

        Route::middleware('admin')
            ->group(function () {

                /*
                |--------------------------------------------------------------------------
                | Dashboard
                |--------------------------------------------------------------------------
                */

                Route::get(
                    '/dashboard',
                    [
                        DashboardController::class,
                        'index',
                    ]
                )->name('dashboard');

                /*
                |--------------------------------------------------------------------------
                | Logout
                |--------------------------------------------------------------------------
                */

                Route::post(
                    '/logout',
                    [
                        AuthController::class,
                        'logout',
                    ]
                )->name('logout');

                /*
                |--------------------------------------------------------------------------
                | Change Password
                |--------------------------------------------------------------------------
                */

                Route::get(
                    '/change-password',
                    [
                        AuthController::class,
                        'showChangePassword',
                    ]
                )->name('change-password');

                Route::put(
                    '/change-password',
                    [
                        AuthController::class,
                        'changePassword',
                    ]
                )->name('change-password.update');

                /*
                |--------------------------------------------------------------------------
                | Categories
                |--------------------------------------------------------------------------
                */

                Route::resource(
                    'categories',
                    CategoryController::class
                );

                /*
                |--------------------------------------------------------------------------
                | Product Categories
                |--------------------------------------------------------------------------
                */
                Route::resource(
                    'product-categories',
                    ProductCategoryController::class
                );

                /*
                |--------------------------------------------------------------------------
                | Products
                |--------------------------------------------------------------------------
                */
                Route::resource(
                    'products',
                    ProductController::class
                );

                /*
                |--------------------------------------------------------------------------
                | Journals
                |--------------------------------------------------------------------------
                */
                Route::resource(
                    'journals',
                    JournalController::class
                );
                /*
                |--------------------------------------------------------------------------
                | Gallery
                |--------------------------------------------------------------------------
                */

                Route::resource(
                    'galleries',
                    GalleryController::class
                );

                /*
                |--------------------------------------------------------------------------
                | Clients & Customers
                |--------------------------------------------------------------------------
                */
                Route::resource(
                    'clients',
                    ClientController::class
                );

                /*
                |--------------------------------------------------------------------------
                | Testimonials
                |--------------------------------------------------------------------------
                */
                Route::resource(
                    'testimonials',
                    TestimonialController::class
                );

                /*
                |--------------------------------------------------------------------------
                | Product Enquiries
                |--------------------------------------------------------------------------
                */

                Route::resource(
                    'product-enquiries',
                    ProductEnquiryController::class
                )->only([
                    'index',
                    'show',
                    'edit',
                    'update',
                    'destroy',
                ]);

                Route::patch(
                    'product-enquiries/{productEnquiry}/status',
                    [
                        ProductEnquiryController::class,
                        'updateStatus',
                    ]
                )->name('product-enquiries.status');

                /*
                |--------------------------------------------------------------------------
                | Contact Enquiries
                |--------------------------------------------------------------------------
                */

                Route::resource(
                    'contact-enquiries',
                    ContactEnquiryController::class
                )->only([
                    'index',
                    'show',
                    'edit',
                    'update',
                    'destroy',
                ]);

                Route::patch(
                    'contact-enquiries/{contactEnquiry}/status',
                    [
                        ContactEnquiryController::class,
                        'updateStatus',
                    ]
                )->name('contact-enquiries.status');

                /*
                |--------------------------------------------------------------------------
                | Job Openings
                |--------------------------------------------------------------------------
                */

                Route::resource(
                    'jobs',
                    JobOpeningController::class
                );

                Route::patch(
                    'jobs/{job}/status',
                    [
                        JobOpeningController::class,
                        'updateStatus',
                    ]
                )->name('jobs.status');

                /*
                |--------------------------------------------------------------------------
                | Job Applications
                |--------------------------------------------------------------------------
                */

                Route::resource(
                    'applications',
                    JobApplicationController::class
                )->only([
                    'index',
                    'show',
                    'edit',
                    'update',
                    'destroy',
                ]);

                Route::patch(
                    'applications/{application}/status',
                    [
                        JobApplicationController::class,
                        'updateStatus',
                    ]
                )->name('applications.status');

                Route::get(
                    'applications/{application}/resume',
                    [
                        JobApplicationController::class,
                        'downloadResume',
                    ]
                )->name('applications.resume');

            });
    });

Route::prefix('user')
    ->name('user.')
    ->group(function () {

        /*
        |--------------------------------------------------------------------------
        | Guest User
        |--------------------------------------------------------------------------
        */

        Route::middleware('guest')->group(function () {

            Route::get('/login', [
                UserAuthController::class,
                'showLogin',
            ])->name('login');

            Route::post('/login', [
                UserAuthController::class,
                'login',
            ])->name('login.submit');

            Route::get('/register', [
                UserAuthController::class,
                'showRegister',
            ])->name('register');

            Route::post('/register', [
                UserAuthController::class,
                'register',
            ])->name('register.submit');

        });

        /*
        |--------------------------------------------------------------------------
        | Authenticated User
        |--------------------------------------------------------------------------
        */

        Route::middleware('user')->group(function () {

            /*
            |--------------------------------------------------------------------------
            | Dashboard
            |--------------------------------------------------------------------------
            */

            Route::get('/dashboard', [
                UserDashboardController::class,
                'index',
            ])->name('dashboard');

            /*
            |--------------------------------------------------------------------------
            | Jobs
            |--------------------------------------------------------------------------
            */

            Route::get('/jobs', [
                UserJobController::class,
                'index',
            ])->name('jobs.index');

            Route::get('/jobs/{job}', [
                UserJobController::class,
                'show',
            ])->name('jobs.show');

            Route::get('/jobs/{job}/apply', [
                UserApplicationController::class,
                'create',
            ])->name('jobs.apply');

            Route::post('/jobs/{job}/apply', [
                UserApplicationController::class,
                'store',
            ])->name('jobs.apply.store');

            /*
            |--------------------------------------------------------------------------
            | My Applications
            |--------------------------------------------------------------------------
            */

            Route::get('/applications', [
                UserApplicationController::class,
                'index',
            ])->name('applications.index');

            /*
            |--------------------------------------------------------------------------
            | Product Enquiry
            |--------------------------------------------------------------------------
            */

            Route::get('/product-enquiry', [
                UserEnquiryController::class,
                'productForm',
            ])->name('product-enquiry');

            Route::post('/product-enquiry', [
                UserEnquiryController::class,
                'submitProduct',
            ])->name('product-enquiry.submit');

            /*
            |--------------------------------------------------------------------------
            | Contact / Callback
            |--------------------------------------------------------------------------
            */

            Route::get('/contact', [
                UserEnquiryController::class,
                'contactForm',
            ])->name('contact');

            Route::post('/contact', [
                UserEnquiryController::class,
                'submitContact',
            ])->name('contact.submit');

            /*
            |--------------------------------------------------------------------------
            | Profile
            |--------------------------------------------------------------------------
            */

            Route::get('/profile', [
                UserProfileController::class,
                'index',
            ])->name('profile');

            Route::put('/profile', [
                UserProfileController::class,
                'update',
            ])->name('profile.update');

            /*
            |--------------------------------------------------------------------------
            | Change Password
            |--------------------------------------------------------------------------
            */

            Route::get('/change-password', [
                UserProfileController::class,
                'passwordForm',
            ])->name('change-password');

            Route::put('/change-password', [
                UserProfileController::class,
                'changePassword',
            ])->name('change-password.update');

            /*
            |--------------------------------------------------------------------------
            | Logout
            |--------------------------------------------------------------------------
            */

            Route::post('/logout', [
                UserAuthController::class,
                'logout',
            ])->name('logout');

        });

    });

/*
|--------------------------------------------------------------------------
| Backwards-Compatibility for Legacy /storage/{path} URLs
|--------------------------------------------------------------------------
| Serves any legacy /storage/... requests directly from public/uploads
| so existing links never break.
*/
Route::get('/storage/{path}', function (string $path) {
    $basePath = realpath(public_path('uploads'));
    $realFilePath = realpath(public_path('uploads/'.$path));

    if (! $basePath || ! $realFilePath || ! str_starts_with($realFilePath, $basePath) || ! file_exists($realFilePath)) {
        abort(404, 'File not found');
    }

    $mimeType = mime_content_type($realFilePath) ?: 'application/octet-stream';

    return response()->file($realFilePath, [
        'Content-Type' => $mimeType,
        'Cache-Control' => 'public, max-age=604800, immutable',
    ]);
})->where('path', '.*');
