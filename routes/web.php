<?php

Route::get('/','todoscontroller@index');

Route::resource('Todo','todoscontroller');
