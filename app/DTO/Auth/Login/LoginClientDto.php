<?php


namespace App\DTO\Auth\Login;


use App\ValueObjects\Login;

final class LoginClientDto
{
    private Login $login;
    private string $password;
    private bool $remember;

    /**
     * LoginClientDto constructor.
     * @param  string  $login
     * @param  string  $password
     * @param  bool  $remember
     */
    public function __construct(string $login, string $password, bool $remember)
    {
        $this->login = Login::create($login);
        $this->password = $password;
        $this->remember = $remember;
    }

    /**
     * @return Login
     */
    public function getLogin(): Login
    {
        return $this->login;
    }

    /**
     * @return bool
     */
    public function remember(): bool
    {
        return $this->remember;
    }

    public function credentials(): array
    {
        return [
            'email'    => $this->login->value(),
            'password' => $this->password,
        ];
    }
}
