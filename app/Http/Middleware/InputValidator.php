<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\JsonResponse;

class InputValidator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        dd($request->input());
        /*$model = app($modelName);
        $validator = app('validator')->make($request->input(), $model->rules($request));
        if ($validator->fails()) {
            return $this->response($request, $validator->errors());
        }
        return $next($request);*/
    }

    protected function response($request, $errors)
    {
        if($request->ajax()) {
            return new JsonResponse($errors, 422);
        }

        return redirect()->back()->withErrors($errors)->withInput();
    }
}
