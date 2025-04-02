<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class AuthService
{
    public function __construct(
        protected User $user,
    ) {
    }

    public function create(Collection $request): User
    {
        $user = $this->user->create($request->all());

        return $user;
    }

    public function login(Collection $request): User
    {
        $user = $this->user->where('email', $request->get('email'))->first();

        if (!$user || !Hash::check($request->get('password'), $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['As credenciais fornecidas são inválidas.'],
            ]);
        }

        Auth::login($user);

        return $user;
    }

    /**
     * todo: implement this
     */
    public function sendResetLink(Collection $request): string
    {
        // $status = Password::sendResetLink($request->all());

        // if ($status !== Password::RESET_LINK_SENT) {
        //     throw ValidationException::withMessages([
        //         'email' => $status,
        //     ]);
        // }

        return 'Email de redefinição de senha enviado com sucesso.';
    }
}