<?php

namespace App\Http\Middleware;

use Closure;
use App\Enums\RoleEnum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminOnly
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check() || Auth::user()->role !== RoleEnum::ADMIN->value) {
            abort(403, 'Unauthorized.');
        }
            $admin = Auth::guard('admin')->user();
        if (!$admin || $admin->role !== RoleEnum::ADMIN->value) {
            abort(403, 'Unauthorized.');
        }
            return $next($request);
    }
}
