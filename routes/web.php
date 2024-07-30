 <?php

use App\Livewire\ShowBlog;
use Illuminate\Support\Facades\Route;
use App\Livewire\ShowHome;
use App\Livewire\ShowService;
use App\Livewire\ShowServicePage;
use App\Livewire\ShowTeamPage;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', ShowHome::class)->name('home');
Route::get('/services', ShowServicePage::class)->name('servicesPage');
Route::get('/service/{id}', ShowService::class)->name('servicePage');
Route::get('/team', ShowTeamPage::class)->name('teamPage');
Route::get('/blog', ShowBlog::class)->name('blog');
