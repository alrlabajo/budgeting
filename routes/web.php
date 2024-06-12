<?php

use App\Http\Controllers\PDFController;
use App\Http\Controllers\PermissionController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerifyController;

// Forms
use App\Livewire\ActivityJustification;
use App\Livewire\ActivityJustificationForm;
use App\Livewire\Amendment;
use App\Livewire\AmendmentForm;
use App\Livewire\Appropriations;
use App\Livewire\Appropriationsform;
use App\Livewire\Budgetcalltracking;
use App\Livewire\BUR;
use App\Livewire\BurForm;
use App\Livewire\CapitalOutlayForm;
use App\Livewire\Chart;

use App\Livewire\ChartComponent;

use App\Livewire\EditCapitalOutlay;


use App\Livewire\LoadCapitalOutlay;
use App\Livewire\LoadMOOE;



use App\Livewire\MaintenanceForm;
use App\Livewire\Mooe;
use App\Livewire\Paymentrequesttracking;
use App\Livewire\PersonalServices;
use App\Livewire\PersonalServicesForm;


use App\Livewire\PersonnelSchedule;
use App\Livewire\PersonnelScheduleForm;
use App\Livewire\PPMP;
use App\Livewire\PpmpForm;
use App\Livewire\Settings;
use App\Livewire\TrackFiles;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
})*/

// Chart
Route::get('/chart', ChartComponent::class);

// ERP Route
Route::get('/verify', [VerifyController::class, 'verify'])
    ->name('verify');

// roles and permissions route
Route::group(['middleware' => ['isAdmin']], function () {
    // Permissions Routes
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);
    Route::put('permissions/{permissionId}/edit', [App\Http\Controllers\PermissionController::class, 'edit']);
    Route::get('permissions/{permissionId}/delete', [App\Http\Controllers\PermissionController::class, 'destroy']);

    // Roles Routes
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::put('roles/{roleId}/edit', [App\Http\Controllers\RoleController::class, 'edit']);
    Route::get('roles/{roleId}/delete', [App\Http\Controllers\RoleController::class, 'destroy']);

    // Users Routes
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::put('users/{userId}/edit', [App\Http\Controllers\UserController::class, 'edit']);
    Route::get('users/{userId}/delete', [App\Http\Controllers\UserController::class, 'destroy']);
});

// end of roles and permissions route

// Route::group(['middleware' => 'auth'], function () {
//Record Routes
Route::get('/activity-justification', ActivityJustification::class);
Route::get('/personal-services', PersonalServices::class);
Route::get('/personnel-schedule', PersonnelSchedule::class);
// Route::get('/MOOE', Mooe::class);

Route::get('/PPMP', PPMP::class);
Route::get('/BUR', BUR::class);
Route::get('/amendment', Amendment::class);

Route::get('/capital-outlay', LoadCapitalOutlay::class);
Route::get('/MOOE', LoadMOOE::class);
// Route::get('/capital-outlay/{capital_outlay}/edit', EditCapitalOutlay::class);
// Route::get('/capital-outlay/{capital_outlay}/edit', EditCapitalOutlay::class);

// Route::resource('/capital-outlay', LoadCapitalOutlay::class);
// Route::put('/capital-outlay/{capital_outlay_id}/edit', [LoadCapitalOutlay::class, 'edit']);

Route::get('/', Chart::class);

// Route::get('/', function () {
//     return view('dashboard');
// })


Route::get('/track-files', TrackFiles::class);
Route::get('/budget-call-track', Budgetcalltracking::class);
Route::get('/payment-request-track', Paymentrequesttracking::class);


//Form Routes
Route::get('/activity-justification-form', ActivityJustificationForm::class);
Route::get('/personal-services-form', PersonalServicesForm::class);
Route::get('/personnel-schedule-form', PersonnelScheduleForm::class);
Route::get('/MOOE-form', MaintenanceForm::class);
Route::get('/capital-outlay-form', CapitalOutlayForm::class);
Route::get('/PPMP-form', PpmpForm::class);
Route::get('/appropriations', Appropriations::class);
Route::get('/BUR-form', BurForm::class);
Route::get('/amendment-form', AmendmentForm::class);
Route::get('/appropriations-form', Appropriationsform::class);


//Others
Route::get('/settings', Settings::class);
Route::get('generate-pdf', [App\Http\Controllers\PDFController::class, 'generatePDF']);



Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return 'Database connection is working';
    } catch (\Exception $e) {
        return 'Database connection is not working: ' . $e->getMessage();
    }
});


// Route::get('/', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('/sample-csv', function () {
    $headers = [
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename="sample.csv"',
    ];
    $callback = function () {
        $handle = fopen('php://output', 'w');
        fputcsv($handle, ['Account Code', 'Items of Expenditure', 'Budget', 'Justification']);
        fclose($handle);
    };
    return response()->stream($callback, 200, $headers);
})->name('sample.csv.download');

Route::post('import', 'servicesImport@import');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// });

require __DIR__ . '/auth.php';
