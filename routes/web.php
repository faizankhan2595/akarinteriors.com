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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/projects', function () {
    return view('projects');
});

// get the slug from the URL and render different views based on the slug
Route::get('/project/{slug}', function ($slug) {

    // $projects = '[
    //     {"name":"Swimwell ","image":"/GALLERY/THE GATEWAY PHOTOS/C48A1022-Edit.jpg","year":"2023","url":"/project/swimwell"},
    //     {"name":"Raheja Interface ","image":"/GALLERY/THE GATEWAY PHOTOS/C48A1022-Edit.jpg","year":"2023","url":"/project/raheja"},
    //     {"name":"Laxmi Jewels (ongoing)","image":"/GALLERY/THE GATEWAY PHOTOS/C48A1022-Edit.jpg","year":"2023","url":"/project/laxmi-jewels"},
    //     {"name":"Thoughtrains (ongoing)","image":"/GALLERY/THE GATEWAY PHOTOS/C48A1022-Edit.jpg","year":"2023","url":"/project/thoughtrains"},
    //     {"name":"Berggruen (ongoing)","image":"/GALLERY/THE GATEWAY PHOTOS/C48A1022-Edit.jpg","year":"2023","url":"/project/berggruen"},
    //     {"name":"THE GATEWAY","image":"/GALLERY/THE GATEWAY PHOTOS/C48A1022-Edit.jpg","year":"2023","url":"/project/gateway"},
    //     {"name":"RAZINE HOUSE","image":"/GALLERY/RAZINE HOUSE PHOTOS/Study Room_V13_View.jpg","year":"2022","url":"/project/razine-house"},
    //     {"name":"MALHAR","image":"/GALLERY/MALHAR 3DS/Vijay_Patil_Residence_Living_Room_Option_01.jpg","year":"2022","url":"/project/malhar"},
    //     {"name":"KAPADIA","image":"/GALLERY/KAPADIA 3DS/Hall2.jpg","year":"2022","url":"/project/kapadia"}
    // ]';

    switch ($slug) {
        case 'swimwell':
            return view('project-swimwell');
            break;
        case 'raheja':
            return view('project-raheja');
            break;
        case 'laxmi-jewels':
            return view('project-laxmi-jewels');
            break;
        case 'thoughtrains':
            return view('project-thoughtrains');
            break;
        case 'berggruen':
            return view('project-berggruen');
            break;
        case 'gateway':
            return view('project-gateway');
            break;
        case 'razine-house':
            return view('project-razine-house');
            break;
        case 'malhar':
            return view('project-malhar');
            break;
        case 'kapadia':
            return view('project-kapadia');
            break;
        case 'interface':
            return view('project-interface');
            break;
        default:
            return view('project-not-found');
            break;
    }
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

Route::get('/tos', function () {
    return view('tos');
});