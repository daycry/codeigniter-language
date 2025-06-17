<?php

declare(strict_types=1);

/**
 * This file is part of Mediapro WebsCorpo.
 *
 * (c) Mediapro <cau.info@mediapro.tv>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Support;

use CodeIgniter\Config\Factories;
use CodeIgniter\Settings\Settings;
use CodeIgniter\Test\CIUnitTestCase;
use Config\Security;
use Config\Services;
use Daycry\Twig\Config\Twig as TwigConfig;
use Daycry\Twig\Twig;
use Mediapro\WebsCorpo\Common\Config\Settings as SettingsConfig;

abstract class TestCase extends CIUnitTestCase
{
    protected function setUp(): void
    {
        $this->resetServices();

        parent::setUp();
    }
}
