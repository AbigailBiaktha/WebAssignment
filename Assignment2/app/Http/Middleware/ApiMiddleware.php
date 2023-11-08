<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\TaskController; 


class ApiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check the "Accept" header for JSON format
        if ($request->wantsJson()) {
            return $next($request);
        }

        // If JSON is not requested, return a JSON response with an error message and status code
        return response()->json(['error' => 'Unsupported Media Type'], 415);
    }
}
