<?php

use App\Http\Controllers\admin\CandCController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\SetController;
use App\Http\Controllers\admin\TransactionController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\VertualAController;
use App\Http\Controllers\AlltvController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BillController;
use App\Http\Controllers\ElectController;
use App\Http\Controllers\FundController;
use App\Http\Controllers\listdata;
use App\Http\Controllers\Updateuser;
use App\Http\Controllers\VertualController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified',
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//});

Route::get('changepass', function () {
    return view('changepass');
})->name('changepass');
Route::post('pass1', [AuthController::class, 'pass1'])->name('pass1');
Route::get('/', [AuthController::class, 'welcome'])->name('welcome');

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::post('pass', [AuthController::class, 'updatepa'])->name('pass');
    Route::get('update', [Updateuser::class, 'profile'])->name('update');
    Route::post('update2', [Updateuser::class, 'profile1'])->name('update2');
    Route::get('invoice', [AuthController::class, 'invoice'])->name('invoice');
    Route::get('charges', [AuthController::class, 'charges'])->name('charges');
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('referal', [AuthController::class, 'refer'])->name('referal');
//Route::post('mp', [ResellerController::class, 'reseller'])->name('mp');
//Route::get('reseller', [ResellerController::class, 'sell'])->name('reseller');
//Route::get('upgrade', [ResellerController::class, 'apiaccess'])->name('upgrade');
    Route::post('log', [AuthController::class, 'customLogin'])->name('log');
    Route::post('payelect', [ElectController::class, 'payelect'])->name('payelect');
    Route::post('verifye', [ElectController::class, 'verifyelect'])->name('verifye');
    Route::get('elect', [ElectController::class, 'electric'])->name('elect');
    Route::get('select', [AuthController::class, 'select'])->name('select');
    Route::get('listdata', [listdata::class, 'list'])->name('listdata');
    Route::get('listelect', [ElectController::class, 'listelect'])->name('listelect');
    Route::get('listtv/{id}', [BillController::class, 'listtv'])->name('listtv');
    Route::get('tv', [AlltvController::class, 'tv'])->name('tv');
    Route::post('tvp', [AlltvController::class, 'paytv'])->name('tvp');
    Route::get('verifytv/{value1}/{value2}', [AlltvController::class, 'verfytv'])->name('verifytv');
    Route::get('airtime', [AuthController::class, 'airtime'])->name('airtime');
    Route::post('buyairtime', [BillController::class, 'bill'])->name('buyairtime');
    Route::post('data', [BillController::class, 'data'])->name('data');
    Route::post('buydata', [AuthController::class, 'buydata'])->name('buydata');
    Route::get('redata/{selectedValue}/{category}', [AuthController::class, 'redata'])->name('redata');
    Route::post('pre', [AuthController::class, 'pre'])->name('pre');
    Route::post('bill', [BillController::class, 'bill'])->name('bill');
    Route::post('billdata', [BillController::class, 'data'])->name('billdata');
    Route::get('fund', [FundController::class, 'fund'])->name('fund');
    Route::get('tran/{reference}', [FundController::class, 'tran'])->name('tran');
    Route::get('vertual', [VertualController::class, 'vertual'])->name('vertual');
});


Route::middleware(['auth'])->group(function () {

    Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin/dashboard');
    Route::get('admin/renotransaction', [DashboardController::class, 'mcdtran'])->name('admin/renotransaction');
    Route::get('admin/refer', [DashboardController::class, 'ref'])->name('admin/refer');
    Route::get('admin/setmin', [SetController::class, 'index1'])->name('admin/setmin');
    Route::post('admin/min', [SetController::class, 'min'])->name('admin/min');
    Route::get('admin/setcharge', [SetController::class, 'index'])->name('admin/setcharge');
    Route::post('admin/setc', [SetController::class, 'charge'])->name('admin/setc');
    Route::get('admin/webbook', [DashboardController::class, 'webbook'])->name('admin/webbook');
    Route::get('admin/vertual', [VertualAController::class, 'list'])->name('admin/vertual');
    Route::post('admin/update', [VertualAController::class, 'updateuser'])->name('admin/update');
    Route::post('admin/pass', [VertualAController::class, 'pass'])->name('admin/pass');
    Route::get('admin/credit', [CandCController::class, 'cr'])->name('admin/credit');
    Route::post('admin/cr', [CandCController::class, 'credit'])->name('admin/cr');
    Route::post('admin/ch', [CandCController::class, 'charge'])->name('admin/ch');
    Route::post('admin/finduser', [UsersController::class, 'finduser'])->name('admin/finduser');
    Route::get('admin/finds', [UsersController::class, 'fin'])->name('admin/finds');
    Route::get('admin/server', [UsersController::class, 'server'])->name('admin/server');
    Route::get('admin/noti', [UsersController::class, 'mes'])->name('admin/noti');
    Route::get('admin/air', [ProductController::class, 'air'])->name('admin/air');
    Route::get('admin/up/{id}', [UsersController::class, 'up'])->name('admin/up');
    Route::get('admin/up1/{id}', [ProductController::class, 'pair'])->name('admin/up1');
    Route::get('admin/verify', [McdController::class, 'index'])->name('admin/verify');
    Route::get('admin/profile/{username}', [UsersController::class, 'profile'])->name('admin/profile');
    Route::get('admin/delete/{id}', [UsersController::class, 'del'])->name('admin/delete');
    Route::get('admin/charge', [CandCController::class, 'sp'])->name('admin/charge');
    Route::get('admin/product', [productController::class, 'index'])->name('admin/product');
    Route::get('admin/product1', [productController::class, 'index1'])->name('admin/product1');
//    Route::post('admin/do', [McdController::class, 'edit'])->name('admin/do');
    Route::post('admin/do', [ProductController::class, 'edit'])->name('admin/do');
    Route::post('admin/do1', [ProductController::class, 'edit1'])->name('admin/do1');
    Route::post('admin/not', [UsersController::class, 'me'])->name('admin/not');
    Route::get('admin/editproduct1/{id}', [ProductController::class, 'in1'])->name('admin/editproduct1');
    Route::get('admin/editproduct/{id}', [ProductController::class, 'in'])->name('admin/editproduct');
    Route::get('admin/pd/{id}', [ProductController::class, 'on'])->name('admin/pd');
    Route::get('admin/pd1/{id}', [ProductController::class, 'on1'])->name('admin/pd1');
    Route::get('admin/user', [UsersController::class, 'index'])->name('admin/user');
    Route::get('admin/deposits', [TransactionController::class, 'in'])->name('admin/deposits');
    Route::get('admin/bills', [TransactionController::class, 'bill'])->name('admin/bills');
    Route::get('admin/finddeposite', [TransactionController::class, 'index'])->name('admin/finddeposite');
    Route::post('admin/depo', [TransactionController::class, 'finduser'])->name('admin/depo');


});
