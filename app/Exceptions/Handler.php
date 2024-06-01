<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Services\Errors\ErrorLogService;
use Exception;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->renderable(function (NotFoundHttpException $e, $request) {
            $error_code = $e->getCode();
            $error_file_name = $e->getFile();
            $error_line = $e->getLine();
            $error_message = $e->getMessage();

            $errorLogData = [
                'error_code' => 404, 
                'error_type' => 'NOT_FOUND',
                'route' => url()->current(), 
                'file_name' => $error_file_name .' (line: '. $error_line .')',
                'error_message' => $error_message
            ];
            ErrorLogService::saveErrorLog($errorLogData);

            if ($request->is('api/*')) 
            {
                $errors['status'] = false;
                $errors['code'] = 404;
                $errors['data'] = ['error' => [$error_message]];
                $errors['message'] = 'Record not found.';
                return response()->json($errors, 404);
            }
            else
            {
                return response()->view('errors.404', [], 404);
            }
        });

        $this->renderable(function (Exception $e, $request) {
            $error_code = $e->getCode();
            $error_file_name = $e->getFile();
            $error_line = $e->getLine();
            $error_message = $e->getMessage();

            $errorLogData = [
                'error_code' => 500, 
                'error_type' => 'INTERNAL_SERVOR_ERROR',
                'route' => url()->current(), 
                'file_name' => $error_file_name .' (line: '. $error_line .')',
                'error_message' => $error_message
            ];
            ErrorLogService::saveErrorLog($errorLogData);

            if ($request->is('api/*')) 
            {
                $errors['status'] = false;
                $errors['code'] = 500;
                $errors['data'] = ['error' => [$error_message]];
                $errors['message'] = 'Something went wrong! please try again.';
                return response()->json($errors, 500);
            }
            else
            {
                return response()->view('errors.500', ['message' => $e->getMessage()], 500);
            }
        });
    }
}
