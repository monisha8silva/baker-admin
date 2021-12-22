<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController1;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StandardCakeController;
use App\Http\Controllers\SpecialCakeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SlicesController;
use App\Http\Controllers\MuffinsController;
use App\Http\Controllers\CupCakeController;
use App\Http\Controllers\CookieseController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DonutsController;
use App\Http\Controllers\PuffPastryController;
use App\Http\Controllers\CroissantsController;
use App\Http\Controllers\SandwitchController;
use App\Http\Controllers\BurgersController;
use App\Http\Controllers\CutletController;
use App\Http\Controllers\PizzasController;
use App\Http\Controllers\SpringRollsController;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\IcedController;
use App\Http\Controllers\CartitemController;
use App\Http\Controllers\ViewbagController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginuserController;
use app\Models\User;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\SignatureController;
use App\Http\Controllers\ButterbaseController;
use App\Http\Controllers\NewcarController;
use App\Http\Controllers\BreadController;
use App\Http\Controllers\BackedController;
use App\Http\Controllers\FriedController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LimeController;
use App\Http\Controllers\MandarinController;
use App\Http\Controllers\IcedCoffeeController;
use App\Http\Controllers\SweetsController;
use App\Http\Controllers\ChildcakeController;
use App\Http\Controllers\BeveragesController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\dataviewController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\Cart2Controller;
use App\Http\Controllers\ThankyouController;
use App\Http\Controllers\OrderSubmitController;
use App\Http\Controllers\CustomerorderController;
use App\Http\Controllers\CustomerorderdetailsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\testcontroller;
use App\Http\Controllers\dashcontroller;
use App\Http\Controllers\AdminOrdersController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminshowController;
use App\Http\Controllers\AdminproductController;
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

require __DIR__.'/auth.php';

Route::get('/', [HomeController1::class, 'home']);
Route::get('/standardCake', [StandardCakeController::class,'index']);
Route::get('/specialCake', [SpecialCakeController::class,'index']);
Route::get('/aboutus', [AboutController::class,'index']);
Route::get('/contactus', [ContactController::class,'index']);
Route::get('/slices', [SlicesController::class,'index']);
Route::get('/muffins', [MuffinsController::class,'index']);
Route::get('/cupcakes', [CupCakeController::class,'index']);
Route::get('/cookiese', [CookieseController::class,'index']);
Route::get('/gallery', [GalleryController::class,'index']);
Route::get('/donuts', [DonutsController::class,'index']);
Route::get('/puff&pastry', [PuffPastryController::class,'index']);
Route::get('/croissants', [CroissantsController::class,'index']);
Route::get('/sandwitch', [SandwitchController::class,'index']);
Route::get('/burgers', [BurgersController::class,'index']);
Route::get('/lime', [LimeController::class,'index']);
Route::get('/mandarin', [MandarinController::class,'index']);
Route::get('/icedcoffee', [IcedCoffeeController::class,'index']);
Route::get('/cutlets&samosas', [CutletController::class,'index']);
Route::get('/pizzas', [PizzasController::class,'index']);
Route::get('/springrolls', [SpringRollsController::class,'index']);
Route::get('/customcake', [CustomController::class,'index']);
Route::get('/branch', [BranchController::class,'index']);
Route::get('/sweets', [SweetsController::class,'index']);
Route::get('/childcake', [ChildcakeController::class,'index']);
Route::get('/customerorder', [CustomerorderController::class,'index']);
Route::get('/customerorderdetails/{OrderID}', [CustomerorderdetailsController::class,'index']);
Route::get('/dashboard', [DashboardController::class,'index']);
Route::get('/cartitem', [CartitemController::class,'index']);
Route::get('/viewbag', [ViewbagController::class,'index']);
Route::get('/signup', [SignupController::class,'index']);
Route::get('/facebook', [FaceBookController::class,'index']);
Route::get('customer', [CustomerController::class,'index']);
Route::get('/contactus',[ContactController::class,'index']);
Route::get('/contactus',[ContactController::class,'index']);
Route::get('/beverages',[BeveragesController::class,'index']);
Route::get('/thankyou',[ThankyouController::class,'index']);
Route::get('/loginuser',[LoginuserController::class,'index']);


// Route::post('store',[ContactController::class,'store']);
Route::get('/careers',[CareersController::class,'index']);
Route::get('/signature',[SignatureController::class,'index']);
Route::get('/butterbase',[ButterbaseController::class,'index']);
Route::get('/newcar',[NewcarController::class,'index']);
Route::get('/bread',[BreadController::class,'index']);
Route::get('/backed',[BackedController::class,'index']);
Route::get('/fried',[FriedController::class,'index']);
Route::get('/products', [ProductController::class, 'productList'])->name('products.list');

Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');

Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::get('/details', [DetailsController::class, 'index']);

Route::post('/detaildatasubmit', [DetailsController::class, 'detailUpdate']);

Route::get('/ordersubmit', [OrderSubmitController::class, 'ordersubmit']);


//========================================



Route::get('/test', [testcontroller::class, 'index']);


//========================================================

Route::post('dynamic_dependent/fetch', [CheckoutController::class, 'fetch'])->name('checkoutpageController.fetch');


Route::get('/checkout', [CheckoutController::class, 'index']);

Route::get('cart2', [Cart2Controller::class, 'cartList'])->name('cart.list');
Route::post('cart2', [Cart2Controller::class, 'addToCart'])->name('cart.store');

Route::post('update-cart', [Cart2Controller::class, 'updateCart'])->name('cart.update');
Route::post('remove', [Cart2Controller::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [Cart2Controller::class, 'clearAllCart'])->name('cart.clear');


//Route::get('/datainput',[dataviewController::class,'index']);
Route::resource('/datainputNew',dataviewController::class);


Route::view('registerform','register');
Route::POST('datasubmit','RegisteredUserController@datasubmit');

Route::get('/revernew', [DashboardController::class, 'index']);

Route::get('/addcustomerdeliverdetails', [CheckoutController::class, 'addressadd']);

Route::get('contact', 'ContactFormController@form');
Route::post('contact-request', 'ContactFormController@contactRequest')->name('contact-request');

//Facebook
//Route::get('/login/facebook',[LoginController::class, 'redirectToFacebook']);
// Route::get('/login/facebook/callback', [LoginController::class ,'handleFacebookCallback']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/auth/facebook',[FaceBookController::class,'redirectToFacebook']);
Route::get('/auth/facebook/callback',[FaceBookController::class,'handle']);


Route::get('/auth/google',[GoogleController::class,'redirectToGoogle']);
Route::get('/auth/google/callback',[GoogleController::class,'handle']);

Route::get('admin',[AdminController::class,'index']);
Route::post('admin/auth',[AdminController::class,'auth'])->name('admin.auth');

Route::group(['middleware'=>'admin_auth'],function(){
    Route::get('admin/datainputNew',[AdminController::class,'datainputNew']);
    Route::get('admin/updatepassword',[AdminController::class,'updatepassword']);
   
   
});

Route::get('/adminuser',[AdminuserController::class,'index']);
Route::get('/order',[AdminOrdersController::class,'orders']);



Route::get('/navbar',function(){
      
       return view('navbar');

});

Route::get('/adminproduct/{Id}',[AdminproductController::class,'index']);

// Route::match(['get', 'post'], '/owner_login','AdminController@owner_login')->name('owner_login');
Route::match(['get', 'post'], '/owner_login',[AdminController::class,'owner_login'])->name('owner_login');

Route::match(['get', 'post'], '/owner_register',[AdminController::class,'owner_register'])->name('owner_register');


Route::group(['middleware' => ['auth.admin']], function () {
    //checkout
	Route::get('/adminshow',[AdminshowController::class,'index']);

    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

    

	//my account
	Route::get('/my_account', 'CustomerController@my_account');

});


