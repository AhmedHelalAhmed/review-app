<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;
use Inertia\ResponseFactory;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Response|ResponseFactory
     */
    public function __invoke(Request $request)
    {
        return inertia('Dashboard',
            [
                'languages' => [
                    'reviews' => __('dashboard.reviews')
                ]
            ]

        );
    }
}
