<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\spells_controller;
use App\Http\Controllers\classes_controller;
use App\Http\Controllers\subclasses_controller;
use App\Http\Controllers\backgrounds_controller;
use App\Http\Controllers\races_controller;
use App\Http\Controllers\feats_controller;


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
    return view('posts', [
        'posts' => Post::all()
    ]);
});

Route::get('spells/createSpell', [spells_controller::class, 'getcreateSpell'])->name('spells.getcreateSpell');
Route::post('spells/createSpell', [spells_controller::class, 'createSpell'])->name('spells.createSpell');

Route::get('spells', [spells_controller::class, 'index'])->name('spells.index');
// Adding a page for editing my stuff.
//CLASSES
Route::get('classes/createClass', [classes_controller::class, 'getcreateClass'])->name('classes.getcreateClass');
Route::post('classes/createClass', [classes_controller::class, 'createClass'])->name('classes.createClass');

Route::get('classes', [classes_controller::class, 'index'])->name('classes.index');

Route::get('classes/editClass/{id}', [classes_controller::class, 'editClass'])->name('classes.editClass');
Route::post('classes/updateClass/{id}', [classes_controller::class, 'updateClass'])->name('classes.updateClass');
Route::get('classes/deleteClass/{id}', [classes_controller::class, 'deleteClass'])->name('classes.deleteClass');
// Adding a page for editing my stuff.
Route::get('subclasses/createSubclass', [subclasses_controller::class, 'getcreateSubclass'])->name('subclasses.getcreateSubclass');
Route::post('subclasses/createSubclass', [subclasses_controller::class, 'createSubclass'])->name('subclasses.createSubclass');

Route::get('subclasses', [subclasses_controller::class, 'index'])->name('subclasses.index');
// Adding a page for editing my stuff.
Route::get('backgrounds/createBackground', [backgrounds_controller::class, 'getcreateBackground'])->name('backgrounds.getcreateBackground');
Route::post('backgrounds/createBackground', [backgrounds_controller::class, 'createBackground'])->name('backgrounds.createBackground');

Route::get('backgrounds', [backgrounds_controller::class, 'index'])->name('backgrounds.index');
// Adding a page for editing my stuff.
Route::get('races/createRace', [races_controller::class, 'getcreateRace'])->name('races.getcreateRace');
Route::post('races/createRace', [races_controller::class, 'createRace'])->name('races.createRace');

Route::get('races', [races_controller::class, 'index'])->name('races.index');
// Adding a page for editing my stuff.
Route::get('feats/createFeat', [feats_controller::class, 'getcreateFeat'])->name('feats.getcreateFeat');
Route::post('feats/createFeat', [feats_controller::class, 'createFeat'])->name('feats.createFeat');

Route::get('feats', [feats_controller::class, 'index'])->name('feats.index');
// Adding a page for editing my stuff.

