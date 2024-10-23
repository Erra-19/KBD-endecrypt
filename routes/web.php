    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\inputcontroller;
    use App\Http\Controllers\anggotacontroller;

    Route::get('/', function () {
        return view('welcome');
    });

    Route::match(['get', 'post'], '/inputform', [inputcontroller::class, 'input'])->name('input');
    Route::get('/display', [inputcontroller::class, 'display'])->name('display');
    Route::get('/clear-session', [inputcontroller::class, 'clearSession'])->name('clear.session');

    Route::resource('anggota', AnggotaController::class);
