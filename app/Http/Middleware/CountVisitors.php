<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cache;

class CountVisitors
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
        $ip = $request->ip();
        $key = 'visitor_' . $ip;

        // Check if the visitor IP is already recorded in the cache
        if (!Cache::has($key)) {
            // Add the IP to the cache and set an expiration time (e.g., 60 minutes)
            Cache::put($key, true, now()->addMinutes(60));

            // Increment the visitor count
            Cache::increment('visitor_count');
        }

        return $next($request);
    }
}
