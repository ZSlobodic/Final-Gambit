<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\spells_controller;
use App\Http\Controllers\classes_controller;
use App\Http\Controllers\subclasses_controller;
use App\Http\Controllers\backgrounds_controller;
use App\Http\Controllers\races_controller;
use App\Http\Controllers\feats_controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\user_controller;
use App\Http\Controllers\CharacterController;


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

?>


<?php


Route::get('/', function () {
    if (Auth::check()){
        return view('start_page_logged_in');
    }else{
        return view('start_page');
    }
});

Route::get('/import_all', function () {
    if (Auth::user()->is_admin) {
        return view ('import_all');
    }else{
        return view ('start_page_logged_in');
    }
});

Route::get('/login', function () {
    return view ('login');
});

//User Data Base
Route::get('/users', [user_controller::class, 'index'])->name('auth.users');

Route::get('users/FetchUsers/{id}', [user_controller::class, 'FetchUsers'])->name('users.FetchUsers');

Route::post('users/HowToAdmin/{id}', [user_controller::class, 'HowToAdmin'])->name('users.HowToAdmin');
//End of user stuff

//Character stuff
Route::get('/characters', [CharacterController::class, 'index'])->name('characters.index');

Route::get('characters/createCharacter', [CharacterController::class, 'prepareCreateCharacter'])->name('characters.prepareCreateCharacter');
Route::post('characters/createCharacter', [CharacterController::class, 'createCharacter'])->name('characters.createCharacter');

Route::get('characters/showSheet/{id}', [CharacterController::class, 'show'])->name('characters.show');

Route::get('characters/editSpell/{id}', [CharacterController::class, 'editCharacter'])->name('characters.editCharacter');
Route::post('characters/updateSpell/{id}', [CharacterController::class, 'updateCharacter'])->name('characters.updateCharacter');
Route::get('characters/deleteCharacter/{id}', [CharacterController::class, 'deleteCharacter'])->name('characters.deleteCharacter');

//End of character stuff


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//SPELLS
Route::get('spells/createSpell', [spells_controller::class, 'getcreateSpell'])->name('spells.getcreateSpell');
Route::post('spells/createSpell', [spells_controller::class, 'createSpell'])->name('spells.createSpell');

Route::get('spells', [spells_controller::class, 'index'])->name('spells.index');

Route::get('spells/editSpell/{id}', [spells_controller::class, 'editSpell'])->name('spells.editSpell');
Route::post('spells/updateSpell/{id}', [spells_controller::class, 'updateSpell'])->name('spells.updateSpell');
Route::get('spells/deleteSpell/{id}', [spells_controller::class, 'deleteSpell'])->name('spells.deleteSpell');

Route::get('spells/{id}', [spells_controller::class, 'showSpell'])->name('spells.showSpell');
// Adding a page for editing my stuff.
//CLASSES
Route::get('classes/createClass', [classes_controller::class, 'getcreateClass'])->name('classes.getcreateClass');
Route::post('classes/createClass', [classes_controller::class, 'createClass'])->name('classes.createClass');

Route::get('classes', [classes_controller::class, 'index'])->name('classes.index');

Route::get('classes/editClass/{id}', [classes_controller::class, 'editClass'])->name('classes.editClass');
Route::post('classes/updateClass/{id}', [classes_controller::class, 'updateClass'])->name('classes.updateClass');
Route::get('classes/deleteClass/{id}', [classes_controller::class, 'deleteClass'])->name('classes.deleteClass');
// Adding a page for editing my stuff.
//SUBCLASSES
Route::get('subclasses/createSubclass', [subclasses_controller::class, 'getcreateSubclass'])->name('subclasses.getcreateSubclass');
Route::post('subclasses/createSubclass', [subclasses_controller::class, 'createSubclass'])->name('subclasses.createSubclass');

Route::get('subclasses', [subclasses_controller::class, 'index'])->name('subclasses.index');

Route::get('subclasses/editSubclass/{id}', [subclasses_controller::class, 'editSubclass'])->name('subclasses.editSubclass');
Route::post('subclasses/updateSubClass/{id}', [subclasses_controller::class, 'updateSubclass'])->name('subclasses.updateSubclass');
Route::get('subclasses/deleteSubClass/{id}', [subclasses_controller::class, 'deleteSubclass'])->name('subclasses.deleteSubclass');
// Adding a page for editing my stuff.
// BACKGROUNDS
Route::get('backgrounds/createBackground', [backgrounds_controller::class, 'getcreateBackground'])->name('backgrounds.getcreateBackground');
Route::post('backgrounds/createBackground', [backgrounds_controller::class, 'createBackground'])->name('backgrounds.createBackground');

Route::get('backgrounds', [backgrounds_controller::class, 'index'])->name('backgrounds.index');

Route::get('backgrounds/editBackground/{id}', [backgrounds_controller::class, 'editBackground'])->name('backgrounds.editBackground');
Route::post('backgrounds/updateBackground/{id}', [backgrounds_controller::class, 'updateBackground'])->name('backgrounds.updateBackground');
Route::get('backgrounds/deleteBackground/{id}', [backgrounds_controller::class, 'deleteBackground'])->name('backgrounds.deleteBackground');
// Adding a page for editing my stuff.
// RACES
Route::get('races/createRace', [races_controller::class, 'getcreateRace'])->name('races.getcreateRace');
Route::post('races/createRace', [races_controller::class, 'createRace'])->name('races.createRace');

Route::get('races', [races_controller::class, 'index'])->name('races.index');

Route::get('races/editRace/{id}', [races_controller::class, 'editRace'])->name('races.editRace');
Route::post('races/updateRace/{id}', [races_controller::class, 'updateRace'])->name('races.updateRace');
Route::get('races/deleteRace/{id}', [races_controller::class, 'deleteRace'])->name('races.deleteRace');
// Adding a page for editing my stuff.
// FEATS
Route::get('feats/createFeat', [feats_controller::class, 'getcreateFeat'])->name('feats.getcreateFeat');
Route::post('feats/createFeat', [feats_controller::class, 'createFeat'])->name('feats.createFeat');

Route::get('feats', [feats_controller::class, 'index'])->name('feats.index');

Route::get('feats/editFeat/{id}', [feats_controller::class, 'editFeat'])->name('feats.editFeat');
Route::post('feats/updateFeat/{id}', [feats_controller::class, 'updateFeat'])->name('feats.updateFeat');
Route::get('feats/deleteFeat/{id}', [feats_controller::class, 'deleteFeat'])->name('feats.deleteFeat');
// Adding a page for editing my stuff.
?>
