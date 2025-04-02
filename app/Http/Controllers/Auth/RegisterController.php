<?php

namespace App\Http\Controllers\Auth;

use Inertia\Inertia;
use Inertia\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Services\Auth\AuthService;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterController extends Controller
{
    public function __construct(
        protected AuthService $authService,
    ) {
    }

    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    public function store(RegisterRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $this->authService->create(collect($validated));

        return redirect(route('dashboard'));
    }
}
