<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $usersCount = User::count();
        return Inertia::render('Dashboard/Dashboard', [
            'usersCount' => fn() => $usersCount,
        ]);
    }
}
