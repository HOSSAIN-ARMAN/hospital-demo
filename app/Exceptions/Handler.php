<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Database\QueryException;
use Throwable;

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
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        // create code by arman

        // if($exception instanceof QueryException){
        //     if(str_contains($exception->getMessage(), 'Base Table Or view Not Found')){
        //         if ($request->expectsJson()) {
        //         return response()->json([
        //             'status' => false,
        //             'message' => 'System configuration incomplete. Please contact admin.'
        //         ], 500);
        //        }
        //        return response()->view('errors.database', [], 500);
        //     }
        // }

        // end

        return parent::render($request, $exception);
    }



}
