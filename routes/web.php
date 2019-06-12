<?php

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

use App\Http\CodeHighlight\CodeHighlight;
use Illuminate\Support\Facades\Route;
use Michelf\Markdown;

Route::get('/away-link_{id}', function($id) {
	$links = [
    	'https://webformyself.com/verstka/?utm_medium=affiliate&utm_source=denars22'
    ];
  	
    $id = (int)$id;
  
    if ($links[$id-1]) return redirect($links[$id-1]);
})->where('id', '[1]{1}');

Route::prefix('bootstrap_4/start')->group(function () {
    Route::get('/{lesson}-lesson', function ($lesson) {
        $file = __DIR__ . '/../data/'.$lesson.'.txt';

        if (!file_exists($file)) {
            return abort(404);
        }

        $file = file_get_contents($file);
        $file = CodeHighlight::transform($file);
        $file = Markdown::defaultTransform($file);

        return view('index', [
            'file' => $file,
            'lesson' => $lesson
        ]);
    })->where('lesson', '[1-4]{1}');;
});
