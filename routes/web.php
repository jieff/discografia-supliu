<?php

use App\Http\Controllers\DiscographyController;


/**
 *  Rotas de detalhes de álbuns e faixas
 */
Route::get('albums/{id}', [DiscographyController::class, 'show'])->name('albums.show');

/**
 *  Rotas para criar álbuns e faixas
 */
Route::get('/album/create', [DiscographyController::class, 'albumCreate'])->name('album.create');
Route::get('/track/create', [DiscographyController::class, 'trackCreate'])->name('track.create');

/**
 *  Rota Home
 */
Route::get('/', [DiscographyController::class, 'index'])->name('albums.index');

/**
 *  Rota para realizar pesquisa de álbum por nome
 */
Route::post('/albums/search', [DiscographyController::class, 'search'])->name('albums.search');


/**
 * Routes para chamar a view de cadastro álbum e faixas
 */
Route::post('/albums', [DiscographyController::class, 'albumStore'])->name('albums.store');
Route::post('/tracks', [DiscographyController::class, 'trackStore'])->name('tracks.store');

/**
 *  Routes para excluir álbuns e faixas
 */
Route::delete('/albums/{id}', [DiscographyController::class, 'albumDestroy'])->name('albums.destroy');
Route::delete('/tracks/{id}', [DiscographyController::class, 'trackDestroy'])->name('tracks.destroy');








