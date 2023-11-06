<?php

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

require __DIR__ . '/web/auth.route.php';

require __DIR__ . '/web/user/user.route.php';

require __DIR__ . '/web/admin/admin.route.php';
