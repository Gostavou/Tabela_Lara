<?php

use App\Http\Controllers\TarefaController;

Route::get('/tarefas', [TarefaController::class, 'index']);
