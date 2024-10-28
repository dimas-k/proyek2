<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Exceptions\PostTooLargeException;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}



// public function render($request, Exception $exception)
// {
//     if ($exception instanceof PostTooLargeException) {
//         return response()->view('errors.post_too_large', [], 413);
//     }

//     return parent::render($request, $exception);
// }
