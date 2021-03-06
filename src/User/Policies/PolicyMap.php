<?php

/*
 * This file is part of the Antvel Shop package.
 *
 * (c) Gustavo Ocanto <gustavoocanto@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Antvel\User\Policies;

trait PolicyMap
{
	/**
     * The policy mappings for Antvel.
     *
     * @var array
     */
    protected $policies = [
        \Antvel\User\Models\User::class => UserPolicy::class,
    ];
}
