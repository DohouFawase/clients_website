<?php

use App\Http\Controllers\admin\blog\PostController;
use App\Http\Controllers\admin\blog\SectionController;
use App\Http\Controllers\admin\commerce\CategorieController;
use App\Http\Controllers\admin\commerce\CmdDetailController;
use App\Http\Controllers\admin\commerce\CommandeController;
use App\Http\Controllers\admin\commerce\PaymentController;
use App\Http\Controllers\admin\commerce\ProductController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\web\CartController;
use App\Http\Controllers\web\FrontController;

use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\TranslationController;
use Illuminate\Support\Facades\Auth;
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






Route::prefix('admin')-> middleware(['auth', 'isAdmin']) -> name('admin.')->group(function(){
   Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
   Route::resource('categorie', CategorieController::class)->except(["show"]);
   Route::resource('section', SectionController::class)->except(["show"]);
   Route::resource('detail', CmdDetailController::class)->except(["show"]);
   Route::resource('commande', CommandeController::class)->except(["show"]);
   Route::resource('payment', PaymentController::class)->except(["show"]);
   Route::resource('post', PostController::class)->except(['show']);
   Route::resource('product', ProductController::class)->except(['show']);
});
Auth::routes();

Route::prefix("web")->group(function(){
      $idregex = '[0-9]+';
      $slugReguest = '[0-9a-z\-]+';
   Route:: get('boutique',[ FrontController::class, 'boutique'])->name('boutique');
   Route:: get('categorie/{slug}-{categorie}',[ FrontController::class, 'categorie'])->name('categorie')->where([
      'categorie'=> $idregex,
      'slug'=>$slugReguest
   ]);
   Route:: get('section/{slug}-{section}',[ FrontController::class, 'section'])->name('section')->where([
      'section'=> $idregex,
      'slug'=>$slugReguest
   ]);;
   Route:: get('blog',[ FrontController::class, 'blog'])->name('blog');
   Route:: get('productdetail/{slug}-{product}',[ FrontController::class, 'show'])->name('show')->where([
      'product'=> $idregex,
      'slug'=>$slugReguest
   ]);
   Route:: get('blogdetail/{slug}-{post}',[ FrontController::class, 'blogdetail'])->name('view')->where([
      'post'=> $idregex,
      'slug'=>$slugReguest
   ]);
   Route:: get('conatct',[ FrontController::class, 'conatct'])->name('conatct');
   Route:: post('contact',[ FrontController::class, 'contactForm'])->name('contact.contactForm');

   Route:: get('about',[ FrontController::class, 'about'])->name('about');
 
   Route:: get('payment',[ TranslationController::class, 'payment'])->name('payment');
   Route:: get('chekinformation',[ TranslationController::class, 'information'])->name('information');


   Route:: get('cart', [CartController::class,'index'])->name('cart.panier');
   Route::post('cart', [CartController::class,'addToCart'])->name('cart.addTocart');
   Route::post('cartUpdate', [CartController::class,'cartUpdate'])->name('cart.cartUpdate');
   Route::post('removeCart', [CartController::class,'removeCart'])->name('cart.removeCart');
   Route::post('clearAll', [CartController::class,'clearAll'])->name('cart.clearAll');
});
Route::get('/', [HomeController::class,'index'])->name('home');

