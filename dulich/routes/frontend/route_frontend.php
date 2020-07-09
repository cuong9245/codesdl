
<?php 

require ('route-user.php');

// Route::get('/','Frontend\FrontendController@home')->name('home');
// Route::get('/','Frontend\FrontendController@homes')->name('home');

Route::get('/address','Frontend\FrontendController@getNameAddress');

Route::get('/ticket-train','Frontend\FrontendController@ticketTrain');

Route::get('/tour','Frontend\FrontendController@tour')->name('tour');

Route::post('/filter','Frontend\FrontendController@filterByPrice');

Route::post('/find-ticket','Frontend\FrontendController@getPriceTicket');

Route::post('/buy-ticket','Frontend\FrontendController@bookingTicket');

Route::post('/book-tour','Frontend\FrontendController@bookingTour');

// Route::get('/sfilter','Frontend\FrontendController@filter');


Route::post('/commentpost', 'Frontend\FrontendController@sendLikeComment');

// Route::get('/become-local-exprert','Frontend\FrontendController@becomeLocalExpress')->name('becomeLocalExpress');

Route::get('/about-us','Frontend\FrontendController@aboutUs')->name('aboutUs');

// Route::get('/blog','Frontend\FrontendController@blog')->name('blog');

Route::get('/booking/{id}','Frontend\FrontendController@bookings')->name('booking');

// Route::get('/contact','Frontend\FrontendController@contactss')->name('contact');

// Route::get('/faq','Frontend\FrontendController@faq')->name('faqs');

Route::get('/news/{id}','Frontend\FrontendController@newsDetail')->name('tinChiTiet');


Route::get('/tourDetails/{id}','Frontend\FrontendController@tourDetailss')->name('tourDetails');


Route::get('tin-tuc','Frontend\newsController@listNews')->name('tin tuc');

Route::get('reads','Frontend\TourController@readFile');

Route::get('tin-tuc/{id}','Frontend\newsController@newsDetail')->name('newsDetail');

Route::get('dia-diem/{id}','Frontend\TourController@address')->name('diadiem');

// Route::get('/contact','Frontend\FrontendController@contact')->name('contact');

Route::post('/booktour','Frontend\TourController@booktour');

Route::get('/mails','Frontend\TourController@mail');

Route::get('/result','Frontend\TourController@getOnepay');

Route::get('/read','Frontend\TourController@readFile');

Route::get('/time-tour','Frontend\TourController@timeTour')->name('time-tour');

Route::get('discount-tour','Frontend\TourController@discountTour')->name('discount-tour');

Route::get('/tour-detail/{id}','Frontend\TourController@tourDetail')->name('tourDetail');

Route::get('/promotion','Frontend\FrontendController@promotionShows')->name('promotions');

Route::get('/promotion/{id}','Frontend\FrontendController@promotionDetail')->name('promotionsDetail');

Route::get('find','Frontend\FrontendController@findtour')->name('find');

Route::get('search/{id}', 'Frontend\FrontendController@search')->name('search');

Route::get('results', 'Frontend\FrontendController@result')->name('results');

Route::get('replace', 'Frontend\FrontendController@replaceWord');

Route::get('groupTour/{id}', 'Frontend\FrontendController@groupTourShow')->name('GroupTour');