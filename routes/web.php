<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\LeagueTableController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\Admin\AdminPlayerController;

// Redirect root URL to leaderboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/matches', [DashboardController::class, 'matches'])->name('matches.index');
Route::get('/matches/{match}', [DashboardController::class, 'showMatch'])->name('matches.show');
Route::get('/leaderboard', [LeaderboardController::class, 'index'])->name('leaderboard.index');
Route::get('/leaderboard/{stat}', [LeaderboardController::class, 'stat'])->name('leaderboard.stat');
Route::get('/league-table', [LeagueTableController::class, 'index'])->name('league.table');
Route::get('/players', [PlayerController::class, 'index'])->name('players.index');
Route::get('/players/{id}', [PlayerController::class, 'show'])->name('players.show');


// Admin routes (admin role only)
Route::middleware(['auth:admin', 'admin.only'])->group(function () {
    Route::get('/admin', function () {
        return redirect(route('admin.weekly_draw'));
    });

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/players', [AdminPlayerController::class, 'index'])->name('players.index');
        Route::get('/players/create', [AdminPlayerController::class, 'create'])->name('players.create');
        Route::post('/players', [AdminPlayerController::class, 'store'])->name('players.store');
        Route::get('/players/{player}/edit', [AdminPlayerController::class, 'edit'])->name('players.edit');
        Route::put('/players/{player}', [AdminPlayerController::class, 'update'])->name('players.update');
        Route::delete('/players/{player}', [AdminPlayerController::class, 'destroy'])->name('players.destroy');

        Route::prefix('matches')->name('matches.')->group(function () {
            Route::get('/', [AdminController::class, 'matchesIndex'])->name('index');
            Route::get('/{match}/edit', [AdminController::class, 'editMatch'])->name('edit');
            Route::put('/{match}', [AdminController::class, 'updateMatch'])->name('update');
            Route::delete('/{match}', [AdminController::class, 'destroyMatch'])->name('destroy');
        });
    });

    Route::match(['get', 'post'], '/weekly_draw', [AdminController::class, 'weeklyDraw'])->name('admin.weekly_draw');
    Route::get('/stats_inputter', [AdminController::class, 'statsInputter'])->name('admin.stats_inputter');
    Route::post('/stats_inputter', [AdminController::class, 'storeMatchPlayerStats'])->name('admin.stats_inputter.store');
    // Legacy aliases (kept for backward compatibility)
    Route::get('/add_players', [AdminPlayerController::class, 'create'])->name('admin.add_players');
    Route::post('/add_players', [AdminPlayerController::class, 'store'])->name('admin.add_players.store');
    Route::get('/new_season', [AdminController::class, 'newSeason'])->name('admin.new_season');
    Route::post('/new_season', [AdminController::class, 'createSeason'])->name('admin.new_season.create');
    Route::get('/match_played', [AdminController::class, 'matchPlayed'])->name('admin.match_played');
    Route::post('/match_played', [AdminController::class, 'storeMatch'])->name('admin.match_played.store');
});



// Public login routes (now at /public/login) -- disabled for now, but code is kept for future use
// Route::get('/public/login', [\App\Http\Controllers\Auth\PublicSessionController::class, 'create'])->name('public.login');
// Route::post('/public/login', [\App\Http\Controllers\Auth\PublicSessionController::class, 'store'])->name('public.login.store');
// Route::post('/public/logout', [\App\Http\Controllers\Auth\PublicSessionController::class, 'destroy'])->name('public.logout');

// Admin login routes
Route::get('/admin/login', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'create'])->name('admin.login');
Route::post('/admin/login', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store'])->name('admin.login.store');
Route::post('/admin/logout', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');

require __DIR__ . '/auth.php';
