<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    /**
     * @param boolean $status
     * @param null|string $message
     * @param array $data
     * @param array $error
     * @param int $code
     * @param bool $strict
     * @return \Illuminate\Http\JsonResponse
     */
    public static function response($status, $message = null, $data = null, $error = null, $code = 200, $strict = true)
    {
        if (is_array($data) && empty($data) && $strict) {
            $data = null;
        }
        if (is_array($error) && empty($errors) && $strict) {
            $errors = null;
        }
        return response()->json(compact('status', 'message', 'data', 'error', 'code'), 200);
    }
}
