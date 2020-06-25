<?php

use Illuminate\Support\Facades\Route;




Route::group(['namespace' => 'Frontend'], function(){

	// For Blog Page 
	Route::get('/', 'FrontEndManagement@homepage');
	Route::get('/blog', 'FrontEndManagement@blog');
	Route::get('/contact', 'FrontEndManagement@contact');

	// For shop Page
	Route::get('/shop', 'FrontEndManagement@shop');


	// Product ajax popup 
	Route::get('popup-product/{id}', 'FrontEndManagement@popupSingleProduct') -> name('popup-product');


	// Customers Route 
	Route::get('customer-login', 'CustomerController@index');


	// CCategory search 
	Route::get('category/{slug}', 'FrontEndManagement@searchByCategoryItems') -> name('category.search');

	


	
});


Route::group(['namespace' => 'Admin'], function(){


	// Post Route
	Route::resource('post','PostManagement');
	Route::resource('post-category','PostCatManagement');
	Route::resource('post-tag','PostTagManagement');


	// Product Route 
	Route::resource('product','ProductManagement');
	Route::resource('product-category','ProductCatManagement');
	Route::resource('product-brand','ProductBrandManagement');
	Route::resource('product-tag','ProductTagManagement');

	// Homepage Routes  
	Route::resource('home-slider','SliderManagement');
	Route::resource('offer-slider','OfferManagement');
	Route::resource('media-partner','PartnerManagement');

	// Home Page Dynamic
	Route::get('top-banner', 'HomePageManagement@topBannerEdit');
	Route::post('top-banner-upload', 'HomePageManagement@topBannerUpload');

	Route::get('logo', 'HomePageManagement@logoEdit');
	Route::post('logo-upload', 'HomePageManagement@logoUpload');


	Route::get('contact-info', 'HomePageManagement@contactEdit');
	Route::post('contact-upload', 'HomePageManagement@contactUpload');

	Route::get('footer', 'HomePageManagement@footerEdit');
	Route::post('footer-upload', 'HomePageManagement@footerUpload');

	Route::get('social', 'HomePageManagement@socialEdit');
	Route::post('social-upload', 'HomePageManagement@socialUpload');

	Route::get('newsletter', 'HomePageManagement@newsletterEdit');
	Route::post('newsletter-upload', 'HomePageManagement@newsletterUpload');


	Route::get('subscriber', 'HomePageManagement@subscriberView');
	Route::post('subscriber-upload', 'HomePageManagement@subscriberUpload');

	Route::get('page-banner', 'HomePageManagement@pageBannerView');
	Route::post('page-banner-upload', 'HomePageManagement@pageBannerUpload');




	// For shop Page
	Route::get('/cart', 'CartManagement@index');
	Route::get('/cart-load', 'CartManagement@cartLoad');
	Route::post('/cart/store', 'CartManagement@store') -> name('cart.store');
	Route::get('/cart/delete/{id}', 'CartManagement@destroy') -> name('cart.destroy');
	Route::get('/cart/update/{id}', 'CartManagement@update') -> name('cart.update');



	// checkout 
	Route::get('/checkout', 'OrderManagement@index') -> name('checkout');
	Route::post('/checkout/store', 'OrderManagement@store') -> name('checkout.store');


	// Orders 
	Route::get('all-orders', 'OrderManagement@orderAll')  -> name('all-orders');
	Route::get('complete-orders/{id}', 'OrderManagement@orderComplete') -> name('order.complete');
	Route::get('pending-orders/{id}', 'OrderManagement@orderPending') -> name('order.pending');
	Route::get('delete-orders/{id}', 'OrderManagement@orderDelete') -> name('order.delete');


});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
