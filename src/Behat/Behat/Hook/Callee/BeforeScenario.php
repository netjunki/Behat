<?php

namespace Behat\Behat\Hook\Callee;

/*
 * This file is part of the Behat.
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * BeforeScenario hook.
 *
 * @author Konstantin Kudryashov <ever.zet@gmail.com>
 */
class BeforeScenario extends ScenarioHook
{
    /**
     * Initializes hook.
     *
     * @param null|string $filterString
     * @param Callable    $callback
     * @param null|string $description
     */
    public function __construct($filterString, $callback, $description = null)
    {
        parent::__construct('beforeScenario', $filterString, $callback, $description);
    }
}
