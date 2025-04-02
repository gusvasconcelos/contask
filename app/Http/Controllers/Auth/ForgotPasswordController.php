<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Auth\AuthService;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\ForgotPasswordRequest;
use Inertia\Inertia;
use Inertia\Response;

class ForgotPasswordController extends Controller
{
    public function __construct(
        protected AuthService $authService,
    ) {
    }

    public function create(): Response
    {
        return Inertia::render('Auth/ForgotPassword');
    }

    public function store(ForgotPasswordRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        $status = $this->authService->sendResetLink(collect($validated));

        return back()->with('success', 'Email de recuperação de senha enviado com sucesso.');
    }
}