<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

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

Route::middleware(['checkEcommerceMaintenance'])->group(function () {

        Route::post('/register/create', [App\Http\Controllers\User\UserController::class, 'create'])->name('register.create');
        Route::post('/otp', [App\Http\Controllers\User\UserController::class, 'getOtp'])->name('otp');
        Route::post('/otp/verify', [App\Http\Controllers\User\UserController::class, 'verifyOTP'])->name('otp.verify');
        Route::post('/change-password/verify-username', [App\Http\Controllers\User\UserController::class, 'verifyUsername'])->name('change-password.verify-username');
        Route::post('/change-password/change', [App\Http\Controllers\User\UserController::class, 'changePassword'])->name('change-password.change');
        Route::post('/otp/verify-change', [App\Http\Controllers\User\UserController::class, 'verifyOTPChange'])->name('otp.verify-change');
        ## NORMAL 
        Route::get('/', [App\Http\Controllers\EcommerceController::class, 'index'])->name('index');
        Route::get('/product', [App\Http\Controllers\EcommerceController::class, 'product'])->name('product');
        Route::get('/cart', [App\Http\Controllers\EcommerceController::class, 'cart'])->name('cart');
        Route::get('/login-register', [App\Http\Controllers\EcommerceController::class, 'loginRegister'])->name('login-register');
        Route::get('/register', [App\Http\Controllers\EcommerceController::class, 'register'])->name('register-page');
        Route::get('/about', [App\Http\Controllers\EcommerceController::class, 'about'])->name('about');
        Route::get('/contact', [App\Http\Controllers\EcommerceController::class, 'contact'])->name('contact');
        Route::get('/agent', [App\Http\Controllers\EcommerceController::class, 'agent'])->name('agent');
        Route::get('/produce', [App\Http\Controllers\EcommerceController::class, 'produce'])->name('produce');
        Route::get('/post/cart', [App\Http\Controllers\EcommerceController::class, 'cartPost'])->name('cart-post');
        Route::post('/get/footer/contract', [App\Http\Controllers\EcommerceController::class, 'getFooterContract'])->name('get-footer-contract');
        Route::get('/products/detail/{id}', [App\Http\Controllers\EcommerceController::class, 'productDetail'])->name('product-detail');
        Route::get('/form-upload-slip/order/{id}',[App\Http\Controllers\EcommerceController::class, 'formUploadSlip'])->name('form-upload-slip');
        Route::post('/upload-slip',[App\Http\Controllers\EcommerceController::class, 'uploadSlip'])->name('upload-slip');
        Route::get('/profile-account', [App\Http\Controllers\EcommerceController::class, 'profileAccount'])->name('profile-account');
        Route::get('/products', [App\Http\Controllers\EcommerceController::class, 'products'])->name('products');
        Route::get('/option', [App\Http\Controllers\EcommerceController::class, 'option'])->name('option');
        Route::post('/get-district', [App\Http\Controllers\EcommerceController::class, 'getDistrict'])->name('get-district');
        Route::post('/get-sub-district', [App\Http\Controllers\EcommerceController::class, 'getSubDistrict'])->name('get-sub-district');
        Route::post('/get-zipcode', [App\Http\Controllers\EcommerceController::class, 'getZipcode'])->name('get-zipcode');
        Route::post('/order-received', [App\Http\Controllers\EcommerceController::class, 'orderReceived'])->name('order-received');
        Route::post('/profile-account/store', [App\Http\Controllers\EcommerceController::class, 'profileAccountStore'])->name('profile-account.store');
        Route::post('/profile-account-bill/store', [App\Http\Controllers\EcommerceController::class, 'profileAccountBillStore'])->name('profile-account-bill.store');
        Route::get('/manual', [App\Http\Controllers\EcommerceController::class, 'manual'])->name('manual');
        Route::get('/repair-example', [App\Http\Controllers\EcommerceController::class, 'repairExample'])->name('repair-example');
        #pdf-invoices-repair
        Route::get('/invoices', [App\Http\Controllers\PdfController::class, 'pdfHTML'])->name('pdf');
        Route::get('/create-invoice',[App\Http\Controllers\PdfController::class, 'createPdf']); 
        #pdf-invoice-order
        Route::get('/invoices-order', [App\Http\Controllers\pdfOrderController::class, 'OrderPdfHTML'])->name('pdf-order');
        Route::get('/create-invoices-order',[App\Http\Controllers\pdfOrderController::class, 'createOrderPdf']); 
        Route::get('/verify-username', [App\Http\Controllers\EcommerceController::class, 'verifyUsername'])->name('verify-username');
        Route::get('/ecom/change-password', [App\Http\Controllers\EcommerceController::class, 'changePasswordPage'])->name('ecom.change-password');
        // Route::post('/page/order-received', [App\Http\Controllers\EcommerceController::class, 'orderReceivedPage'])->name('order-received-page');

        Route::middleware(['auth', 'user', 'preventBackHistory'])->group(function () {
                Route::post('/checkout', [App\Http\Controllers\EcommerceController::class, 'checkout'])->name('checkout');
        });
});

Route::middleware(['checkAdminMaintenance'])->group(function () {
        ## ADMIN
        // Route::get('/admin', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
        Route::prefix('admin')->name('admin.')->middleware(['admin', 'auth', 'preventBackHistory'])->group(function () {
                Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');
                Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

                ##Customer
                Route::get('/customer', [App\Http\Controllers\Admin\CustomerController::class, 'index'])->name('customer.index');
                Route::post('/customer/show', [App\Http\Controllers\Admin\CustomerController::class, 'show'])->name('customer.show');
                Route::get('/customer/profile/{id}', [App\Http\Controllers\Admin\CustomerController::class, 'showProfile'])->name('customer.showProfile');
                Route::post('/customer/store', [App\Http\Controllers\Admin\CustomerController::class, 'store'])->name('customer.store');
                Route::post('/customer/destroy', [App\Http\Controllers\Admin\CustomerController::class, 'destroy'])->name('customer.destroy');
                Route::post('/customer/check-phone', [App\Http\Controllers\Admin\CustomerController::class, 'checkPhone'])->name('customer.check-phone');
                Route::post('/customer/update', [App\Http\Controllers\Admin\CustomerController::class, 'update'])->name('customer.update');

                #Customer Address
                Route::post('/customer/update-address', [App\Http\Controllers\Admin\CustomerController::class, 'updateAddress'])->name('customer.update-address');
                Route::post('/customer/update-bill-address', [App\Http\Controllers\Admin\CustomerController::class, 'updateBillAddress'])->name('customer.update-bill-address');
                Route::post('/customer/get-district', [App\Http\Controllers\Admin\CustomerController::class, 'getDistrict'])->name('customer.get-district');
                Route::post('/customer/get-sub-district', [App\Http\Controllers\Admin\CustomerController::class, 'getSubDistrict'])->name('customer.get-sub-district');
                Route::post('/customer/get-zipcode', [App\Http\Controllers\Admin\CustomerController::class, 'getZipcode'])->name('customer.get-zipcode');

                ##Product
                Route::get('/product', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('product.index');
                Route::post('/product/show', [App\Http\Controllers\Admin\ProductController::class, 'show'])->name('product.show');
                Route::get('/product/detail/{id}', [App\Http\Controllers\Admin\ProductController::class, 'detail'])->name('product.detail');
                Route::post('/product/store', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('product.store');
                Route::post('/product/store-edit', [App\Http\Controllers\Admin\ProductController::class, 'storeEdit'])->name('product.store-edit');
                Route::post('/product/destroy', [App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('product.destroy');
                Route::post('/product/change-status', [App\Http\Controllers\Admin\ProductController::class, 'changeStatus'])->name('product.change-status');
                Route::post('/product/change-status2', [App\Http\Controllers\Admin\ProductController::class, 'changeStatusNew'])->name('product.change-status2');
                Route::post('/product/change-status3', [App\Http\Controllers\Admin\ProductController::class, 'changeStatusRecommend'])->name('product.change-status3');
                Route::post('/product/update', [App\Http\Controllers\Admin\ProductController::class, 'update'])->name('product.update');
                Route::post('/product/destroy-img', [App\Http\Controllers\Admin\ProductController::class, 'destroyImage'])->name('product.destroy-img');

                ##Product Category
                Route::get('/product-cat', [App\Http\Controllers\Admin\ProductCategoryController::class, 'index'])->name('product-cat.index');
                Route::post('/product-cat/show', [App\Http\Controllers\Admin\ProductCategoryController::class, 'show'])->name('product-cat.show');
                Route::post('/product-cat/store', [App\Http\Controllers\Admin\ProductCategoryController::class, 'store'])->name('product-cat.store');
                Route::post('/product-cat/destroy', [App\Http\Controllers\Admin\ProductCategoryController::class, 'destroy'])->name('product-cat.destroy');
                Route::post('/product-cat/change-status', [App\Http\Controllers\Admin\ProductCategoryController::class, 'changeStatus'])->name('product-cat.change-status');

                ##Product brand
                Route::get('/product-brand', [App\Http\Controllers\Admin\ProductBrandController::class, 'index'])->name('product-brand.index');
                Route::post('/product-brand/show', [App\Http\Controllers\Admin\ProductBrandController::class, 'show'])->name('product-brand.show');
                Route::post('/product-brand/store', [App\Http\Controllers\Admin\ProductBrandController::class, 'store'])->name('product-brand.store');
                Route::post('/product-brand/destroy', [App\Http\Controllers\Admin\ProductBrandController::class, 'show'])->name('product-brand.destroy');
                Route::post('/product-brand/change-status', [App\Http\Controllers\Admin\ProductBrandController::class, 'changeStatus'])->name('product-brand.change-status');

                ##Agent
                Route::get('/agent', [App\Http\Controllers\Admin\AgentController::class, 'index'])->name('agent.index');
                Route::post('/agent/show', [App\Http\Controllers\Admin\AgentController::class, 'show'])->name('agent.show');
                Route::post('/agent/store', [App\Http\Controllers\Admin\AgentController::class, 'store'])->name('agent.store');
                Route::post('/agent/destroy', [App\Http\Controllers\Admin\AgentController::class, 'destroy'])->name('agent.destroy');
                Route::post('/agent/change-status', [App\Http\Controllers\Admin\AgentController::class, 'changeStatus'])->name('agent.change-status');
                Route::get('/agent/create-user', [App\Http\Controllers\Admin\AgentController::class, 'createUser'])->name('agent.create-user');
                Route::post('/agent/create-user/store', [App\Http\Controllers\Admin\AgentController::class, 'storeUser'])->name('agent.store-user');
                Route::post('/agent/create-user/destroy', [App\Http\Controllers\Admin\AgentController::class, 'destroyUser'])->name('agent.destroy-user');
                Route::post('/agent/check-agent', [App\Http\Controllers\Admin\AgentController::class, 'checkAgent'])->name('agent.check-agent');

                ##order
                Route::get('/order', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('order.index');
                Route::post('/order/show', [App\Http\Controllers\Admin\OrderController::class, 'show'])->name('order.show');
                Route::get('/order/{id}', [App\Http\Controllers\Admin\OrderController::class, 'detail'])->name('order.detail');
                Route::post('/order/change-status', [App\Http\Controllers\Admin\OrderController::class, 'changeStatus'])->name('order.change-status');
                Route::post('/order/destroy', [App\Http\Controllers\Admin\OrderController::class, 'destroy'])->name('order.destroy');
                Route::post('/order/order-customer/{id}', [App\Http\Controllers\Admin\OrderController::class, 'orderCustomer'])->name('order.order-customer');
                Route::post('/order/get-count-order', [App\Http\Controllers\Admin\OrderController::class, 'getCountOrder'])->name('order.get-order-count');


                ##Waranty
                Route::get('/warranty', [App\Http\Controllers\Admin\WarrantyController::class, 'index'])->name('warranty.index');
                Route::post('/warranty/show', [App\Http\Controllers\Admin\WarrantyController::class, 'show'])->name('warranty.show');
                Route::post('/warranty/store', [App\Http\Controllers\Admin\WarrantyController::class, 'store'])->name('warranty.store');
                Route::post('/warranty/update', [App\Http\Controllers\Admin\WarrantyController::class, 'update'])->name('warranty.update');
                Route::post('/warranty/destroy', [App\Http\Controllers\Admin\WarrantyController::class, 'destroy'])->name('warranty.destroy');
                Route::post('/warranty/check-code', [App\Http\Controllers\Admin\WarrantyController::class, 'checkCode'])->name('warranty.check-code');
                Route::post('/warranty/warranty-customer/{id}', [App\Http\Controllers\Admin\WarrantyController::class, 'warrantyCustomer'])->name('warranty.warranty-customer');
                
                ##Repair
                Route::get('/repair', [App\Http\Controllers\Admin\RepairController::class, 'index'])->name('repair.index');
                Route::post('/repair/show', [App\Http\Controllers\Admin\RepairController::class, 'show'])->name('repair.show');
                Route::post('/repair/store', [App\Http\Controllers\Admin\RepairController::class, 'store'])->name('repair.store');
                Route::post('/repair/update', [App\Http\Controllers\Admin\RepairController::class, 'update'])->name('repair.update');
                Route::post('/repair/destroy', [App\Http\Controllers\Admin\RepairController::class, 'destroy'])->name('repair.destroy');
                Route::post('/repair/check-code', [App\Http\Controllers\Admin\RepairController::class, 'checkCode'])->name('repair.check-code');
                Route::post('/repair/repair-customer/{id}', [App\Http\Controllers\Admin\RepairController::class, 'repairCustomer'])->name('repair.repair-customer');
                Route::post('/repair/get-count-repair', [App\Http\Controllers\Admin\RepairController::class, 'getCountRepair'])->name('repair.get-repair-count');
                Route::get('/create-invoice/{id}',[App\Http\Controllers\PdfController::class, 'createPdfAdmin']); 

                ##Onsite
                Route::get('/onsite', [App\Http\Controllers\Admin\OnsiteController::class, 'index'])->name('onsite.index');
                Route::post('/onsite/show', [App\Http\Controllers\Admin\OnsiteController::class, 'show'])->name('onsite.show');
                Route::post('/onsite/store', [App\Http\Controllers\Admin\OnsiteController::class, 'store'])->name('onsite.store');
                Route::post('/onsite/update', [App\Http\Controllers\Admin\OnsiteController::class, 'update'])->name('onsite.update');
                Route::post('/onsite/destroy', [App\Http\Controllers\Admin\OnsiteController::class, 'destroy'])->name('onsite.destroy');
                Route::post('/onsite/check-code', [App\Http\Controllers\Admin\OnsiteController::class, 'checkCode'])->name('onsite.check-code');
                Route::post('/onsite/onsite-customer/{id}', [App\Http\Controllers\Admin\OnsiteController::class, 'onsiteCustomer'])->name('onsite.onsite-customer');
                // Route::get('/create-invoice/{id}',[App\Http\Controllers\PdfController::class, 'createPdfOnsite']); 

                ##Payment
                Route::get('/payment', [App\Http\Controllers\Admin\PaymentController::class, 'index'])->name('payment.index');

                ##Report
                Route::get('/report', [App\Http\Controllers\Admin\ReportController::class, 'index'])->name('report.index');


        });
});

Route::middleware(['checkAgentMaintenance'])->group(function () {
        ##AGENT
        Route::prefix('agent-member')->name('agent-member.')->middleware(['agent', 'auth', 'preventBackHistory'])->group(function () {
        
                // Route::get('/', [App\Http\Controllers\Agent\HomeController::class, 'root'])->name('root');

                Route::get('/', [App\Http\Controllers\Agent\DashboardController::class, 'index'])->name('index');


                ##Customer
                Route::get('/customer', [App\Http\Controllers\Agent\CustomerController::class, 'index'])->name('customer.index');
                Route::post('/customer/show', [App\Http\Controllers\Agent\CustomerController::class, 'show'])->name('customer.show');
                Route::get('/customer/profile/{id}', [App\Http\Controllers\Agent\CustomerController::class, 'showProfile'])->name('customer.showProfile');
                Route::post('/customer/store', [App\Http\Controllers\Agent\CustomerController::class, 'store'])->name('customer.store');
                Route::post('/customer/destroy', [App\Http\Controllers\Agent\CustomerController::class, 'destroy'])->name('customer.destroy');
                Route::post('/customer/check-phone', [App\Http\Controllers\Agent\CustomerController::class, 'checkPhone'])->name('customer.check-phone');
                Route::post('/customer/update', [App\Http\Controllers\Agent\CustomerController::class, 'update'])->name('customer.update');

                #Customer Address
                Route::post('/customer/update-address', [App\Http\Controllers\Agent\CustomerController::class, 'updateAddress'])->name('customer.update-address');
                Route::post('/customer/update-bill-address', [App\Http\Controllers\Agent\CustomerController::class, 'updateBillAddress'])->name('customer.update-bill-address');
                Route::post('/customer/get-district', [App\Http\Controllers\Agent\CustomerController::class, 'getDistrict'])->name('customer.get-district');
                Route::post('/customer/get-sub-district', [App\Http\Controllers\Agent\CustomerController::class, 'getSubDistrict'])->name('customer.get-sub-district');
                Route::post('/customer/get-zipcode', [App\Http\Controllers\Agent\CustomerController::class, 'getZipcode'])->name('customer.get-zipcode');

                ##Waranty
                Route::get('/warranty', [App\Http\Controllers\Agent\WarrantyController::class, 'index'])->name('warranty.index');
                Route::post('/warranty/show', [App\Http\Controllers\Agent\WarrantyController::class, 'show'])->name('warranty.show');
                Route::post('/warranty/store', [App\Http\Controllers\Agent\WarrantyController::class, 'store'])->name('warranty.store');
                Route::post('/warranty/update', [App\Http\Controllers\Agent\WarrantyController::class, 'update'])->name('warranty.update');
                Route::post('/warranty/destroy', [App\Http\Controllers\Agent\WarrantyController::class, 'destroy'])->name('warranty.destroy');
                Route::post('/warranty/check-code', [App\Http\Controllers\Agent\WarrantyController::class, 'checkCode'])->name('warranty.check-code');
                Route::post('/warranty/warranty-customer/{id}', [App\Http\Controllers\Agent\WarrantyController::class, 'warrantyCustomer'])->name('warranty.warranty-customer');
                
                ##Repair
                Route::get('/repair', [App\Http\Controllers\Agent\RepairController::class, 'index'])->name('repair.index');
                Route::post('/repair/show', [App\Http\Controllers\Agent\RepairController::class, 'show'])->name('repair.show');
                Route::post('/repair/store', [App\Http\Controllers\Agent\RepairController::class, 'store'])->name('repair.store');
                Route::post('/repair/update', [App\Http\Controllers\Agent\RepairController::class, 'update'])->name('repair.update');
                Route::post('/repair/destroy', [App\Http\Controllers\Agent\RepairController::class, 'destroy'])->name('repair.destroy');
                Route::post('/repair/check-code', [App\Http\Controllers\Agent\RepairController::class, 'checkCode'])->name('repair.check-code');
                Route::post('/repair/repair-customer/{id}', [App\Http\Controllers\Agent\RepairController::class, 'repairCustomer'])->name('repair.repair-customer');

        });
});

Route::get('/pages-maintenance', [App\Http\Controllers\Controller::class, 'pagesmaintenance'])->name('maintenance');
Route::post('/change-password', [App\Http\Controllers\Controller::class, 'changePassword'])->name('change-password');

##Profile account
Route::get('/profile-account', [App\Http\Controllers\EcommerceController::class, 'profileAccount'])->name('profile-account');

Route::get('/get-content/{file}', function ($file) {
        $url = Storage::disk('spaces')->temporaryUrl($file, now()->addMinutes(5));
        if ($url) {
                return Redirect::to($url);
        }
        return abort(404);
})->where('file', '.+');



// ## ADMIN
// // Route::get('/admin', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

// // Route::group(['prefix'=>'admin', 'name'=>'admin.', 'middleware'=>['admin','auth','PreventBackHistory']], function(){
// Route::prefix('admin')->name('admin.')->middleware(['admin','auth','preventBackHistory'])->group(function () {
//         Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');
//         Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('dashboard');
//         ##Customer
//         Route::get('/customer', [App\Http\Controllers\Admin\CustomerController::class, 'index'])->name('customer.index');
//         Route::post('/customer/show', [App\Http\Controllers\Admin\CustomerController::class, 'show'])->name('customer.show');
//         Route::get('/customer/profile/{id}', [App\Http\Controllers\Admin\CustomerController::class, 'showProfile'])->name('customer.showProfile');
//         Route::post('/customer/store', [App\Http\Controllers\Admin\CustomerController::class, 'store'])->name('customer.store');
//         Route::post('/customer/destroy', [App\Http\Controllers\Admin\CustomerController::class, 'destroy'])->name('customer.destroy');
//         Route::post('/customer/check-phone', [App\Http\Controllers\Admin\CustomerController::class, 'checkPhone'])->name('customer.check-phone');
//         Route::post('/customer/update', [App\Http\Controllers\Admin\CustomerController::class, 'update'])->name('customer.update');

//         #Customer Address
//         Route::post('/customer/update-address', [App\Http\Controllers\Admin\CustomerController::class, 'updateAddress'])->name('customer.update-address');
//         Route::post('/customer/update-bill-address', [App\Http\Controllers\Admin\CustomerController::class, 'updateBillAddress'])->name('customer.update-bill-address');
//         Route::post('/customer/get-district', [App\Http\Controllers\Admin\CustomerController::class, 'getDistrict'])->name('customer.get-district');
//         Route::post('/customer/get-sub-district', [App\Http\Controllers\Admin\CustomerController::class, 'getSubDistrict'])->name('customer.get-sub-district');
//         Route::post('/customer/get-zipcode', [App\Http\Controllers\Admin\CustomerController::class, 'getZipcode'])->name('customer.get-zipcode');

//         ##Product
//         Route::get('/product', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('product.index');
//         Route::post('/product/show', [App\Http\Controllers\Admin\ProductController::class, 'show'])->name('product.show');
//         Route::get('/product/detail/{id}', [App\Http\Controllers\Admin\ProductController::class, 'detail'])->name('product.detail');
//         Route::post('/product/store', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('product.store');
//         Route::post('/product/destroy', [App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('product.destroy');
//         Route::post('/product/change-status', [App\Http\Controllers\Admin\ProductController::class, 'changeStatus'])->name('product.change-status');
//         Route::post('/product/update', [App\Http\Controllers\Admin\ProductController::class, 'update'])->name('product.update');
//         Route::post('/product/destroy-img', [App\Http\Controllers\Admin\ProductController::class, 'destroyImage'])->name('product.destroy-img');

//         ##Product Category
//         Route::get('/product-cat', [App\Http\Controllers\Admin\ProductCategoryController::class, 'index'])->name('product-cat.index');
//         Route::post('/product-cat/show', [App\Http\Controllers\Admin\ProductCategoryController::class, 'show'])->name('product-cat.show');
//         Route::post('/product-cat/store', [App\Http\Controllers\Admin\ProductCategoryController::class, 'store'])->name('product-cat.store');
//         Route::post('/product-cat/destroy', [App\Http\Controllers\Admin\ProductCategoryController::class, 'destroy'])->name('product-cat.destroy');
//         Route::post('/product-cat/change-status', [App\Http\Controllers\Admin\ProductCategoryController::class, 'changeStatus'])->name('product-cat.change-status');

//         ##Product brand
//         Route::get('/product-brand', [App\Http\Controllers\Admin\ProductBrandController::class, 'index'])->name('product-brand.index');
//         Route::post('/product-brand/show', [App\Http\Controllers\Admin\ProductBrandController::class, 'show'])->name('product-brand.show');
//         Route::post('/product-brand/store', [App\Http\Controllers\Admin\ProductBrandController::class, 'store'])->name('product-brand.store');
//         Route::post('/product-brand/destroy', [App\Http\Controllers\Admin\ProductBrandController::class, 'show'])->name('product-brand.destroy');
//         Route::post('/product-brand/change-status', [App\Http\Controllers\Admin\ProductBrandController::class, 'changeStatus'])->name('product-brand.change-status');

//         ##Agent
//         Route::get('/agent', [App\Http\Controllers\Admin\AgentController::class, 'index'])->name('agent.index');
//         Route::post('/agent/show', [App\Http\Controllers\Admin\AgentController::class, 'show'])->name('agent.show');
//         Route::post('/agent/store', [App\Http\Controllers\Admin\AgentController::class, 'store'])->name('agent.store');
//         Route::post('/agent/destroy', [App\Http\Controllers\Admin\AgentController::class, 'destroy'])->name('agent.destroy');
//         Route::post('/agent/change-status', [App\Http\Controllers\Admin\AgentController::class, 'changeStatus'])->name('agent.change-status');

//         ##order
//         Route::get('/order', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('order.index');
//         Route::post('/order/show', [App\Http\Controllers\Admin\OrderController::class, 'show'])->name('order.show');
//         Route::get('/order/{id}', [App\Http\Controllers\Admin\OrderController::class, 'detail'])->name('order.detail');
//         Route::post('/order/change-status', [App\Http\Controllers\Admin\OrderController::class, 'changeStatus'])->name('order.change-status');

//         ##Waranty
//         Route::get('/warranty', [App\Http\Controllers\Admin\WarrantyController::class, 'index'])->name('warranty.index');
//         Route::post('/warranty/show', [App\Http\Controllers\Admin\WarrantyController::class, 'show'])->name('warranty.show');
//         Route::post('/warranty/store', [App\Http\Controllers\Admin\WarrantyController::class, 'store'])->name('warranty.store');
//         Route::post('/warranty/update', [App\Http\Controllers\Admin\WarrantyController::class, 'update'])->name('warranty.update');
//         Route::post('/warranty/destroy', [App\Http\Controllers\Admin\WarrantyController::class, 'destroy'])->name('warranty.destroy');
//         Route::post('/warranty/check-code', [App\Http\Controllers\Admin\WarrantyController::class, 'checkCode'])->name('warranty.check-code');
//         Route::post('/warranty/warranty-customer/{id}', [App\Http\Controllers\Admin\WarrantyController::class, 'warrantyCustomer'])->name('warranty.warranty-customer');

// });


Route::get('/linkstorage', function () {
        Artisan::call('storage:link');
});



##Route to ui template
// Route::get('/apps-filemanager', [App\Http\Controllers\UiController::class, 'appsfilemanager'])->name('appsfilemanager');
// Route::get('/auth-confirm-mail-2', [App\Http\Controllers\UiController::class, 'authconfirmmail2'])->name('authconfirmmail2');
// Route::get('/auth-confirm-mail', [App\Http\Controllers\UiController::class, 'authconfirmmail'])->name('authconfirmmail');
// Route::get('/auth-email-verification-2', [App\Http\Controllers\UiController::class, 'authemailverification2'])->name('authemailverification2');
// Route::get('/auth-email-verification', [App\Http\Controllers\UiController::class, 'authemailverification'])->name('authemailverification');
// Route::get('/auth-lock-screen-2', [App\Http\Controllers\UiController::class, 'authlockscreen2'])->name('authlockscreen2');
// Route::get('/auth-lock-screen', [App\Http\Controllers\UiController::class, 'authlockscreen'])->name('authlockscreen');
// Route::get('/auth-login-2', [App\Http\Controllers\UiController::class, 'authlogin2'])->name('authlogin2');
// Route::get('/auth-login', [App\Http\Controllers\UiController::class, 'authlogin'])->name('authlogin');
// Route::get('/auth-recoverpw-2', [App\Http\Controllers\UiController::class, 'authrecoverpw2'])->name('authrecoverpw2');
// Route::get('/auth-recoverpw', [App\Http\Controllers\UiController::class, 'authrecoverpw'])->name('authrecoverpw');
// Route::get('/auth-register-2', [App\Http\Controllers\UiController::class, 'authregister2'])->name('authregister2');
// Route::get('/auth-register', [App\Http\Controllers\UiController::class, 'authregister'])->name('authregister');
// Route::get('/auth-two-step-verification-2', [App\Http\Controllers\UiController::class, 'authtwostepverification2'])->name('authtwostepverification2');
// Route::get('/auth-two-step-verification', [App\Http\Controllers\UiController::class, 'authtwostepverification'])->name('authtwostepverification');
// Route::get('/blog-details', [App\Http\Controllers\UiController::class, 'blogdetails'])->name('blogdetails');
// Route::get('/blog-grid', [App\Http\Controllers\UiController::class, 'bloggrid'])->name('bloggrid');
// Route::get('/blog-list', [App\Http\Controllers\UiController::class, 'bloglist'])->name('bloglist');
// Route::get('/calendar', [App\Http\Controllers\UiController::class, 'calendar'])->name('calendar');
// Route::get('/charts-apex', [App\Http\Controllers\UiController::class, 'chartsapex'])->name('chartsapex');
// Route::get('/charts-chartjs', [App\Http\Controllers\UiController::class, 'chartschartjs'])->name('chartschartjs');
// Route::get('/charts-echart', [App\Http\Controllers\UiController::class, 'chartsechart'])->name('chartsechart');
// Route::get('/charts-flot', [App\Http\Controllers\UiController::class, 'chartsflot'])->name('chartsflot');
// Route::get('/charts-knob', [App\Http\Controllers\UiController::class, 'chartsknob'])->name('chartsknob');
// Route::get('/charts-sparkline', [App\Http\Controllers\UiController::class, 'chartssparkline'])->name('chartssparkline');
// Route::get('/charts-tui', [App\Http\Controllers\UiController::class, 'chartstui'])->name('chartstui');
// Route::get('/chat', [App\Http\Controllers\UiController::class, 'chat'])->name('chat');
// Route::get('/contacts-grid', [App\Http\Controllers\UiController::class, 'contactsgrid'])->name('contactsgrid');
// Route::get('/contacts-list', [App\Http\Controllers\UiController::class, 'contactslist'])->name('contactslist');
// Route::get('/contacts-profile', [App\Http\Controllers\UiController::class, 'contactsprofile'])->name('contactsprofile');
// Route::get('/crypto-buy-sell', [App\Http\Controllers\UiController::class, 'cryptobuysell'])->name('cryptobuysell');
// Route::get('/crypto-exchange', [App\Http\Controllers\UiController::class, 'cryptoexchange'])->name('cryptoexchange');
// Route::get('/crypto-ico-landing', [App\Http\Controllers\UiController::class, 'cryptoicolanding'])->name('cryptoicolanding');
// Route::get('/crypto-kyc-application', [App\Http\Controllers\UiController::class, 'cryptokycapplication'])->name('cryptokycapplication');
// Route::get('/crypto-lending', [App\Http\Controllers\UiController::class, 'cryptolending'])->name('cryptolending');
// Route::get('/crypto-orders', [App\Http\Controllers\UiController::class, 'cryptoorders'])->name('cryptoorders');
// Route::get('/crypto-wallet', [App\Http\Controllers\UiController::class, 'cryptowallet'])->name('cryptowallet');
// Route::get('/dashboard-blog', [App\Http\Controllers\UiController::class, 'dashboardblog'])->name('dashboardblog');
// Route::get('/dashboard-crypto', [App\Http\Controllers\UiController::class, 'dashboardcrypto'])->name('dashboardcrypto');
// Route::get('/dashboard-saas', [App\Http\Controllers\UiController::class, 'dashboardsaas'])->name('dashboardsaas');
// Route::get('/ecommerce-add-product', [App\Http\Controllers\UiController::class, 'ecommerceaddproduct'])->name('ecommerceaddproduct');
// Route::get('/ecommerce-cart', [App\Http\Controllers\UiController::class, 'ecommercecart'])->name('ecommercecart');
// Route::get('/ecommerce-checkout', [App\Http\Controllers\UiController::class, 'ecommercecheckout'])->name('ecommercecheckout');
// Route::get('/ecommerce-customers', [App\Http\Controllers\UiController::class, 'ecommercecustomers'])->name('ecommercecustomers');
// Route::get('/ecommerce-orders', [App\Http\Controllers\UiController::class, 'ecommerceorders'])->name('ecommerceorders');
// Route::get('/ecommerce-product-detail', [App\Http\Controllers\UiController::class, 'ecommerceproductdetail'])->name('ecommerceproductdetail');
// Route::get('/ecommerce-products', [App\Http\Controllers\UiController::class, 'ecommerceproducts'])->name('ecommerceproducts');
// Route::get('/ecommerce-shops', [App\Http\Controllers\UiController::class, 'ecommerceshops'])->name('ecommerceshops');
// Route::get('/email-inbox', [App\Http\Controllers\UiController::class, 'emailinbox'])->name('emailinbox');
// Route::get('/email-read', [App\Http\Controllers\UiController::class, 'emailread'])->name('emailread');
// Route::get('/email-template-alert', [App\Http\Controllers\UiController::class, 'emailtemplatealert'])->name('emailtemplatealert');
// Route::get('/email-template-basic', [App\Http\Controllers\UiController::class, 'emailtemplatebasic'])->name('emailtemplatebasic');
// Route::get('/email-template-billing', [App\Http\Controllers\UiController::class, 'emailtemplatebilling'])->name('emailtemplatebilling');
// Route::get('/form-advanced', [App\Http\Controllers\UiController::class, 'formadvanced'])->name('formadvanced');
// Route::get('/form-editors', [App\Http\Controllers\UiController::class, 'formeditors'])->name('formeditors');
// Route::get('/form-elements', [App\Http\Controllers\UiController::class, 'formelements'])->name('formelements');
// Route::get('/form-layouts', [App\Http\Controllers\UiController::class, 'formlayouts'])->name('formlayouts');
// Route::get('/form-mask', [App\Http\Controllers\UiController::class, 'formmask'])->name('formmask');
// Route::get('/form-repeater', [App\Http\Controllers\UiController::class, 'formrepeater'])->name('formrepeater');
// Route::get('/form-uploads', [App\Http\Controllers\UiController::class, 'formuploads'])->name('formuploads');
// Route::get('/form-validation', [App\Http\Controllers\UiController::class, 'formvalidation'])->name('formvalidation');
// Route::get('/form-wizard', [App\Http\Controllers\UiController::class, 'formwizard'])->name('formwizard');
// Route::get('/form-xeditable', [App\Http\Controllers\UiController::class, 'formxeditable'])->name('formxeditable');
// Route::get('/home', [App\Http\Controllers\UiController::class, 'home'])->name('home');
// Route::get('/icons-boxicons', [App\Http\Controllers\UiController::class, 'iconsboxicons'])->name('iconsboxicons');
// Route::get('/icons-dripicons', [App\Http\Controllers\UiController::class, 'iconsdripicons'])->name('iconsdripicons');
// Route::get('/icons-fontawesome', [App\Http\Controllers\UiController::class, 'iconsfontawesome'])->name('iconsfontawesome');
// Route::get('/icons-materialdesign', [App\Http\Controllers\UiController::class, 'iconsmaterialdesign'])->name('iconsmaterialdesign');
// Route::get('/index-admin', [App\Http\Controllers\UiController::class, 'index'])->name('indexadmin');
// Route::get('/invoices-detail', [App\Http\Controllers\UiController::class, 'invoicesdetail'])->name('invoicesdetail');
// Route::get('/invoices-list', [App\Http\Controllers\UiController::class, 'invoiceslist'])->name('invoiceslist');
// Route::get('/layouts-boxed', [App\Http\Controllers\UiController::class, 'layoutsboxed'])->name('layoutsboxed');
// Route::get('/layouts-light-sidebar', [App\Http\Controllers\UiController::class, 'layoutslightsidebar'])->name('layoutslightsidebar');
// Route::get('/layouts-icon-sidebar', [App\Http\Controllers\UiController::class, 'layoutsiconsidebar'])->name('layoutsiconsidebar');
// Route::get('/layouts-colored-sidebar', [App\Http\Controllers\UiController::class, 'layoutscoloredsidebar'])->name('layoutscoloredsidebar');
// Route::get('/layouts-compact-sidebar', [App\Http\Controllers\UiController::class, 'layoutscompactsidebar'])->name('layoutscompactsidebar');
// Route::get('/layouts-hori-boxed-width', [App\Http\Controllers\UiController::class, 'layoutshoriboxedwidth'])->name('layoutshoriboxedwidth');
// Route::get('/layouts-hori-colored-header', [App\Http\Controllers\UiController::class, 'layoutshoricoloredheader'])->name('layoutshoricoloredheader');
// Route::get('/layouts-hori-preloader', [App\Http\Controllers\UiController::class, 'layoutshoripreloader'])->name('layoutshoripreloader');
// Route::get('/layouts-preloader', [App\Http\Controllers\UiController::class, 'layoutspreloader'])->name('layoutspreloader');
// Route::get('/layouts-horizontal', [App\Http\Controllers\UiController::class, 'layoutshorizontal'])->name('layoutshorizontal');
// Route::get('/layouts-hori-topbar-light', [App\Http\Controllers\UiController::class, 'layoutshoritopbarlight'])->name('layoutshoritopbarlight');
// Route::get('/layouts-hori-scrollable', [App\Http\Controllers\UiController::class, 'layoutshoriscrollable'])->name('layoutshoriscrollable');
// Route::get('/layouts-scrollable', [App\Http\Controllers\UiController::class, 'layoutsscrollable'])->name('layoutsscrollable');
// Route::get('/layouts-vertical', [App\Http\Controllers\UiController::class, 'layoutsvertical'])->name('layoutsvertical');
// Route::get('/maps-google', [App\Http\Controllers\UiController::class, 'mapsgoogle'])->name('mapsgoogle');
// Route::get('/maps-leaflet', [App\Http\Controllers\UiController::class, 'mapsleaflet'])->name('mapsleaflet');
// Route::get('/maps-vector', [App\Http\Controllers\UiController::class, 'mapsvector'])->name('mapsvector');
// Route::get('/pages-404', [App\Http\Controllers\UiController::class, 'pages404'])->name('pages404');
// Route::get('/pages-500', [App\Http\Controllers\UiController::class, 'pages500'])->name('pages500');
// Route::get('/pages-maintenance', [App\Http\Controllers\UiController::class, 'pagesmaintenance'])->name('pagesmaintenance');
// Route::get('/pages-comingsoon', [App\Http\Controllers\UiController::class, 'pagescomingsoon'])->name('pagescomingsoon');
// Route::get('/pages-faqs', [App\Http\Controllers\UiController::class, 'pagesfaqs'])->name('pagesfaqs');
// Route::get('/pages-pricing', [App\Http\Controllers\UiController::class, 'pagespricing'])->name('pagespricing');
// Route::get('/pages-starter', [App\Http\Controllers\UiController::class, 'pagesstarter'])->name('pagesstarter');
// Route::get('/pages-timeline', [App\Http\Controllers\UiController::class, 'pagestimeline'])->name('pagestimeline');
// Route::get('/projects-create', [App\Http\Controllers\UiController::class, 'projectscreate'])->name('projectscreate');
// Route::get('/projects-grid', [App\Http\Controllers\UiController::class, 'projectsgrid'])->name('projectsgrid');
// Route::get('/projects-list', [App\Http\Controllers\UiController::class, 'projectslist'])->name('projectslist');
// Route::get('/projects-overview', [App\Http\Controllers\UiController::class, 'projectsoverview'])->name('projectsoverview');
// Route::get('/tables-basic', [App\Http\Controllers\UiController::class, 'tablesbasic'])->name('tablesbasic');
// Route::get('/tables-datatable', [App\Http\Controllers\UiController::class, 'tablesdatatable'])->name('tablesdatatable');
// Route::get('/tables-editable', [App\Http\Controllers\UiController::class, 'tableseditable'])->name('tableseditable');
// Route::get('/tables-responsive', [App\Http\Controllers\UiController::class, 'tablesresponsive'])->name('tablesresponsive');
// Route::get('/tasks-create', [App\Http\Controllers\UiController::class, 'taskscreate'])->name('taskscreate');
// Route::get('/tasks-kanban', [App\Http\Controllers\UiController::class, 'taskskanban'])->name('taskskanban');
// Route::get('/tasks-list', [App\Http\Controllers\UiController::class, 'taskslist'])->name('taskslist');
// Route::get('/ui-alerts', [App\Http\Controllers\UiController::class, 'uialerts'])->name('uialerts');
// Route::get('/ui-buttons', [App\Http\Controllers\UiController::class, 'uibuttons'])->name('uibuttons');
// Route::get('/ui-cards', [App\Http\Controllers\UiController::class, 'uicards'])->name('uicards');
// Route::get('/ui-carousel', [App\Http\Controllers\UiController::class, 'uicarousel'])->name('uicarousel');
// Route::get('/ui-colors', [App\Http\Controllers\UiController::class, 'uicolors'])->name('uicolors');
// Route::get('/ui-dropdowns', [App\Http\Controllers\UiController::class, 'uidropdowns'])->name('uidropdowns');
// Route::get('/ui-general', [App\Http\Controllers\UiController::class, 'uigeneral'])->name('uigeneral');
// Route::get('/ui-grid', [App\Http\Controllers\UiController::class, 'uigrid'])->name('uigrid');
// Route::get('/ui-images', [App\Http\Controllers\UiController::class, 'uiimages'])->name('uiimages');
// Route::get('/ui-lightbox', [App\Http\Controllers\UiController::class, 'uilightbox'])->name('uilightbox');
// Route::get('/ui-modals', [App\Http\Controllers\UiController::class, 'uimodals'])->name('uimodals');
// Route::get('/ui-notifications', [App\Http\Controllers\UiController::class, 'uinotifications'])->name('uinotifications');
// Route::get('/ui-offcanvas', [App\Http\Controllers\UiController::class, 'uioffcanvas'])->name('uioffcanvas');
// Route::get('/ui-progressbars', [App\Http\Controllers\UiController::class, 'uiprogressbars'])->name('uiprogressbars');
// Route::get('/ui-rangeslider', [App\Http\Controllers\UiController::class, 'uirangeslider'])->name('uirangeslider');
// Route::get('/ui-rating', [App\Http\Controllers\UiController::class, 'uirating'])->name('uirating');
// Route::get('/ui-session-timeout', [App\Http\Controllers\UiController::class, 'uisessiontimeout'])->name('uisessiontimeout');
// Route::get('/ui-sweet-alert', [App\Http\Controllers\UiController::class, 'uisweetalert'])->name('uisweetalert');
// Route::get('/ui-tabs-accordions', [App\Http\Controllers\UiController::class, 'uitabsaccordions'])->name('uitabsaccordions');
// Route::get('/ui-typography', [App\Http\Controllers\UiController::class, 'uitypography'])->name('uitypography');
// Route::get('/ui-video', [App\Http\Controllers\UiController::class, 'uivideo'])->name('uivideo');
// Route::get('/welcome', [App\Http\Controllers\UiController::class, 'welcome'])->name('welcome');



