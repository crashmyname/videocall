<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
// routes/web.php

use BeyondCode\LaravelWebSockets\Facades\WebSockets;

Route::get('/video-call', function () {
    return view('video-call');
});

WebSockets::routes();

// routes/web.php

Route::post('/webrtc/offer', 'WebRtcController@offer');
Route::post('/webrtc/answer', 'WebRtcController@answer');
Route::post('/webrtc/ice-candidate', 'WebRtcController@iceCandidate');
