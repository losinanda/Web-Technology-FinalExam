<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontpageController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SpecializationController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use App\Http\Controllers\PostController;
use App\Models\Post;

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

// Route Defaults
Route::get('/', function () {
    return view('frontpage.homepage');
})->name('homepage');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// ---------------------------------------------------------------- //


// Route Medicine Lists
// Route::get('/index', [HomeController::class, 'index']);
// Route::get('/Home', [HomeController::class, 'home']);
// Route::get('/CekDokter', [HomeController::class, 'dokter']);
// Route::get('/Category', function(Category $category){
//     return view('viewDok.category', [
//         "title"=> "Category",
//         'posts'=> $category->posts,
//         'category'=> $category->name_cat
//     ]);

// });
// Route::get('/percobaan', [HomeController::class, 'percobaan']);

Route::get('/Obat', [HomeController::class, 'obat'])->name('obat');
Route::get('/create', [HomeController::class, 'create'])->name('create_obat');
Route::get('/Adminobat', [HomeController::class, 'adminObat'])->name('admin_obat');
Route::post('/Adminobat', [HomeController::class, 'store']);
Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('edit_obat');
Route::patch('/Adminobat/{id}', [HomeController::class, 'update']);
Route::get('/Adminobat/{id}', [HomeController::class, 'destroy'])->name('delete_obat');


// ---------------------------------------------------------------- //

//Route Doctor Lists
Route::get('/list_doctor', [FrontpageController::class, 'list_doctor'])->name('list_doctor');
Route::get('/detail_doctor', [FrontpageController::class, 'detail_doctor'])->name('detail_doctor');
Route::get('/form/{id}', [FrontpageController::class, 'get_form'])->name('form');
Route::post('/post_form', [FrontpageController::class, 'post_form'])->name('post_form');

Route::middleware('auth')->group(function () {
    Route::get('/admin', function () {
        return view('backpage.dashboard');
    })->name('admin');

    // Start Doctor List Control
    Route::get('/admin/list_doctor', [DoctorController::class, 'index'])->name('admin_listdoctor');
    Route::get('/admin/add_doctor', [DoctorController::class, 'create'])->name('admin_adddoctor');
    Route::post('/admin/store_doctor', [DoctorController::class, 'store'])->name('admin_postdoctor');
    Route::get('/admin/edit_doctor/{id}', [DoctorController::class, 'edit'])->name('admin_editdoctor');
    Route::post('/admin/update_doctor/{id}', [DoctorController::class, 'update'])->name('admin_updatedoctor');
    Route::get('/admin/delete_doctor/{id}', [DoctorController::class, 'destroy'])->name('admin_deletedoctor');
    Route::get('/admin/search_doctor', [DoctorController::class, 'search'])->name('admin_searchdoctor');
    // End Doctor List Control

    // Start Specializations List Control
    Route::get('/admin/specialization_doctor', [SpecializationController::class, 'index'])->name('admin_specializationdoctor');
    Route::get('/admin/add_specialization_doctor', [SpecializationController::class, 'create'])->name('admin_addspecializationdoctor');
    Route::post('/admin/add_specialization_doctor/post', [SpecializationController::class, 'store'])->name('admin_postspecializationdoctor');
    Route::get('/admin/edit_specialization_doctor/{id}', [SpecializationController::class, 'edit'])->name('admin_editspecializationdoctor');
    Route::post('/admin/edit_specialization_doctor/post/{id}', [SpecializationController::class, 'update'])->name('admin_editspecializationdoctor_post');
    Route::get('/admin/delete_specialization_doctor/{id}', [SpecializationController::class, 'destroy'])->name('admin_deletespecializationdoctor');
    Route::get('/admin/search_specialization', [SpecializationController::class, 'search'])->name('admin_searchspecialization');
    //End Specializations List Control

});
Route::middleware('auth')->group(function () {
    // Start Forms List Control
    Route::get('/admin/form_user', [FormController::class, 'index'])->name('admin_formuser');
    Route::get('/admin/info_form_user/{id}', [FormController::class, 'info'])->name('admin_infoformuser');
    Route::post('/admin/edit_form_user/post_note/{id}', [FormController::class, 'store_note'])->name('admin_editformuser_postnote');
    Route::post('/admin/edit_form_user/post_approval/{id}', [FormController::class, 'store_approval'])->name('admin_editformuser_postapproval');
    Route::get('/admin/delete_form_user/{id}', [FormController::class, 'destroy'])->name('admin_deleteformuser');
    Route::get('/admin/search_form', [FormController::class, 'search'])->name('admin_searchform');
    //End Forms List Control
});

// Route::get('/get-started', function () {
//     return view('frontpage.homepage-backup');
// })->name('homepage2');

require __DIR__ . '/auth.php';
