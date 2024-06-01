<?php

use Demo\Project\DemoController;

Route::get('/file/{routes}', [DemoController::class,'index']);

