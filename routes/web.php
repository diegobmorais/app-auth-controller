<?php

use App\Http\Controllers\TarefaController;
use App\Mail\MensagemMail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('tarefas','App\Http\Controllers\TarefaController')->middleware('auth');

Route::
get('/enviar-email', function(){

    return new MensagemMail();
    //Mail::to('diegobatistademorais@gmail.com')->send(new MensagemMail());
    //return 'email enviado com sucesso!';
});
