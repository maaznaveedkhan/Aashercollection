<?php

use App\Http\Controllers\HomeController;
use App\Models\Category;
use App\Models\InstagramPost;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $products = Product::paginate(20);
    $popular_categories = Category::paginate(3);
    $categories = Category::with('products')->get();
    $instas = InstagramPost::paginate(10);
    // dd($categories);
    // $categories = Category::all();
    return view('frontend.index', compact('products', 'categories','popular_categories','instas'));
})->name('/');
Route::get('about_us', [App\Http\Controllers\AboutController::class, 'about_us'])->name('about_us');
Route::get('contact_us', [App\Http\Controllers\ContactController::class, 'contact_us'])->name('contact_us');
Route::post('new_message', [App\Http\Controllers\ContactController::class, 'new_message'])->name('new_message');
Route::get('produts_detail/{id}', [App\Http\Controllers\ProductController::class, 'product_detail'])->name('product_detail');
Route::get('popular_categories/{id}', [App\Http\Controllers\CategoryController::class, 'popular_categories'])->name('popular_categories');
// Route::get('/search','ProductController@index');
// Route::get('/search_results','SearchController@search');
Route::get('cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [App\Http\Controllers\CartController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [App\Http\Controllers\CartController::class, 'update'])->name('update.cart');
// Route::delete('remove-from-cart', [App\Http\Controllers\CartController::class, 'remove'])->name('remove.from.cart');
Route::get('delete/{id}', [App\Http\Controllers\CartController::class, 'remove']);
Route::get('unset', [App\Http\Controllers\CartController::class, 'unset']);
Route::get('blogs', [App\Http\Controllers\BlogController::class, 'index'])->name('blogs');
Route::get('blog_detail/{id}', [App\Http\Controllers\BlogController::class, 'blog_detail'])->name('blog_detail');
Route::get('blog_type/{id}', [App\Http\Controllers\BlogController::class, 'blog_type'])->name('blog_type');
Route::get('privacy_policy', [App\Http\Controllers\AboutController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('terms&conditions', [App\Http\Controllers\AboutController::class, 'terms'])->name('terms');
Route::get('faq', [App\Http\Controllers\AboutController::class, 'faq'])->name('faq');
Route::get('search', [App\Http\Controllers\ProductController::class, 'search'])->name('search');
Route::get('compare/{id}', [App\Http\Controllers\WishlistController::class, 'compare'])->name('compare');
Route::get('compare_search', [App\Http\Controllers\WishlistController::class, 'autosearch'])->name('compare_search');
Route::get('find_product', [App\Http\Controllers\WishlistController::class, 'find_product'])->name('find_product');
Route::get('checkout', [App\Http\Controllers\OrderController::class, 'checkout'])->name('checkout');
Route::post('placeorder', [App\Http\Controllers\OrderController::class, 'placeorder'])->name('placeorder');
Route::post('add_attribute_session',[App\Http\Controllers\CartController::class,'add_attribute_session'])->name('add_attribute_session');
Route::group(['middleware' => ['auth']], function () {
    //Checkout
    Route::get('wishlist', [App\Http\Controllers\WishlistController::class, 'wishlist'])->name('wishlist');
    Route::get('add_to_wishlist/{id}', [App\Http\Controllers\WishlistController::class, 'add_to_wishlist'])->name('add_to_wishlist');
    Route::get('remove_from_wishlist/{id}', [App\Http\Controllers\WishlistController::class, 'remove_from_wishlist'])->name('remove_from_wishlist');
});

Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');
//User Routes
Route::group(['middleware' => ['user', 'auth']], function () {
    //User Dashboard
    Route::get('user/home', [HomeController::class, 'user_dashboard'])->name('user_dashboard');
    Route::get('user/add_info', [App\Http\Controllers\UserInfoController::class, 'index'])->name('add_info');
    Route::post('update_info/{id}', [App\Http\Controllers\UserInfoController::class, 'add_info'])->name('update_info');
    Route::get('user/my_orders', [App\Http\Controllers\OrderController::class, 'orders'])->name('my_orders');
    Route::get('user/order_detail/{id}', [App\Http\Controllers\OrderController::class, 'order_detail'])->name('order_detail');
    Route::post('post_review', [App\Http\Controllers\ReviewController::class, 'post_review'])->name('post_review');
});
// Admin Routes
Route::group(['middleware' => ['admin', 'auth']], function () {
    //Admin Dashboard
    Route::get('admin/home', [HomeController::class, 'admin_dashboard'])->name('admin_dashboard');
    //Catgpories
    Route::get('admin/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('admin_categories');
    Route::post('admin/add_category', [App\Http\Controllers\CategoryController::class, 'add_category'])->name('add_category');
    Route::get('admin/delete_category/{id}', [App\Http\Controllers\CategoryController::class, 'delete_category'])->name('delete_category');
    //Products
    Route::get('admin/products', [App\Http\Controllers\ProductController::class, 'index'])->name('admin_products');
    Route::get('admin/add_product', [App\Http\Controllers\ProductController::class, 'prod_form'])->name('admin_prod_form');
    Route::post('add_product', [App\Http\Controllers\ProductController::class, 'add_product'])->name('add_product');
    Route::get('delete_product/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('delete_product');
    Route::get('admin/view_product/{id}', [App\Http\Controllers\ProductController::class, 'view_product'])->name('view_product');
    Route::get('admin/edit_product/{id}', [App\Http\Controllers\ProductController::class, 'edit_product'])->name('edit_product');
    Route::post('update_product/{id}', [App\Http\Controllers\ProductController::class, 'update_product'])->name('update_product');
    // Product Attributes
    Route::get('admin/add_attribute', [App\Http\Controllers\AttributeController::class, 'attribute_form'])->name('admin_attribute_form');
    Route::get('set-data', [App\Http\Controllers\AttributeController::class, 'setData'])->name('session.create');
    //Order
    Route::get('admin/new_orders', [App\Http\Controllers\OrderController::class, 'admin_orders'])->name('admin_orders');
    Route::get('admin/order_detail/{id}', [App\Http\Controllers\OrderController::class, 'admin_order_detail'])->name('admin_order_detail');
    Route::get('admin/orders_in_process', [App\Http\Controllers\OrderController::class, 'order_processing'])->name('admin_processing_orders');
    Route::get('admin/dispatched_orders', [App\Http\Controllers\OrderController::class, 'dispatched_orders'])->name('admin_dispatched_orders');
    Route::get('admin/cancelled_orders', [App\Http\Controllers\OrderController::class, 'cancelled_orders'])->name('admin_cancelled_orders');
    Route::get('admin/delivered_orders', [App\Http\Controllers\OrderController::class, 'admin_delivered_orders'])->name('admin_delivered_orders');
    //Order Status
    Route::get('admin/approve_order/{id}', [App\Http\Controllers\OrderController::class, 'approve_order'])->name('approve_order');
    Route::get('admin/cancel_order/{id}', [App\Http\Controllers\OrderController::class, 'cancel_order'])->name('cancel_order');
    Route::get('admin/order_on_delivery/{id}', [App\Http\Controllers\OrderController::class, 'order_on_delivery'])->name('order_on_delivery');
    Route::get('admin/order_delviered/{id}', [App\Http\Controllers\OrderController::class, 'delivered_order'])->name('order_delviered');
    //Details
    Route::get('admin/about_us', [App\Http\Controllers\AboutController::class, 'index'])->name('admin_abouts');
    Route::get('admin/about_form', [App\Http\Controllers\AboutController::class, 'about_form'])->name('admin_about_form');
    Route::post('add_about', [App\Http\Controllers\AboutController::class, 'add_about'])->name('add_about');
    Route::get('delete_about/{id}', [App\Http\Controllers\AboutController::class, 'destroy'])->name('delete_about');

    Route::post('ckeditor/upload/project', [App\Http\Controllers\CKEditorController::class,'add_project'])->name('ckeditor-project-upload');
    Route::get('new_messages', [App\Http\Controllers\ContactController::class, 'new_messages'])->name('admin_new_messages');
    Route::get('old_messages', [App\Http\Controllers\ContactController::class, 'old_messages'])->name('admin_old_messages');
    Route::get('view_message/{id}',[App\Http\Controllers\ContactController::class, 'message_detail'])->name('view_message');
    //Insta Post
    Route::get('admin/insta_us', [App\Http\Controllers\InstaPostController::class, 'index'])->name('admin_instas');
    Route::get('admin/insta_form', [App\Http\Controllers\InstaPostController::class, 'insta_form'])->name('admin_insta_form');
    Route::post('add_insta', [App\Http\Controllers\InstaPostController::class, 'add_insta'])->name('add_insta');
    Route::get('delete_insta/{id}', [App\Http\Controllers\instaPostController::class, 'destroy'])->name('delete_insta');
    // Blog Types
    Route::get('admin/blog_types', [App\Http\Controllers\BlogTypeController::class, 'index'])->name('admin_blog_types');
    Route::post('add_blog_type', [App\Http\Controllers\BlogTypeController::class, 'add_blog_type'])->name('add_blog_type');
    //Blog
    Route::get('admin/blogs', [App\Http\Controllers\BlogController::class, 'blogs'])->name('admin_blogs');
    Route::get('admin/blog_form', [App\Http\Controllers\BlogController::class, 'blog_form'])->name('admin_blog_form');
    Route::post('add_blog', [App\Http\Controllers\BlogController::class, 'add_blog'])->name('add_blog');
    Route::get('delete_blog/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('delete_blog');
});
