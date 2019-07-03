<?php

/*
 * This file is part of sanchescom-vault.
 *
 * (c) Aleksandr Efimov <sanches.com@mail.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sanchescom\Vault\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Vault.
 *
 * @method static \Sanchescom\Vault\Vault setToken(string $token)
 * @method static \Jippi\Vault\Services\Sys sys()
 * @method static \Jippi\Vault\Services\Data data()
 * @method static \Jippi\Vault\Services\Auth\Token authToken()
 * @method static \Sanchescom\Vault\Services\Raw raw()
 */
class Vault extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Sanchescom.vault';
    }
}
