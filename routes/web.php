<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Native\Laravel\Facades\Notification;
use Native\Laravel\Facades\Settings;
use Native\Laravel\Facades\Window;

Route::get('/', function () {
    if (request()->openwindow) {
        Window::open('about')
            ->route('about')
            ->width(800)
            ->height(800)
            // ->alwaysOnTop()
            ->showDevTools(false);
    }

    if (request()->notification) {
        Notification::new()
            ->title('Hello from NativeApp')
            ->message('This is a detail message coming from your native app.')
            ->show();
    }

    return view('welcome', [
        'users' => User::all(),
    ]);
});

Route::post('/user', function () {
    User::factory()->create();

    Notification::new()
        ->title('User created!')
        ->message('Details about user here.')
        ->show();

    return back();
});

Route::view('/about', 'about')->name('about');

Route::get('/settings', function () {
    return view('/settings');
});

Route::post('/settings', function (Request $request) {
    Settings::set('theme', $request->theme);

    return redirect('/');
});

Route::get('/reddit', function () {
    $response = Http::get('https://www.reddit.com/r/rarepuppers.json');
    $posts = $response->json()['data']['children'];

    return view('index', [
        'posts' => $posts,
    ]);
});

Route::get('/posts/{id}', function (string $id) {
    $response = Http::get('https://api.reddit.com/api/info/?id='.$id);
    $post = $response->json()['data']['children'];

    Notification::new()
        ->title($post[0]['data']['title'])
        ->message('Cute doggos')
        ->show();

    return view('show', [
        'post' => $post,
    ]);
});
