 <?php
use Illuminate\Support\Facades\Route;
use App\Livewire\ShowHome;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', ShowHome::class)->name('home');
