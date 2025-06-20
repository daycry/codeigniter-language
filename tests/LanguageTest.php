<?php

declare(strict_types=1);

/**
 * This file is part of Codeigniter Language.
 *
 * (c) Daycry <daycry9@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests;

use Daycry\Language\Language;
use Tests\Support\TestCase;

/**
 * @internal
 */
final class LanguageTest extends TestCase
{
    public function testConstructorSetsLocale()
    {
        $language = new Language('en');
        $this->assertSame('en', $language->getLocale());
    }

    public function testLoadFileReturnsSelf()
    {
        $language = new Language('en');
        $result   = $language->loadFile('Validation');
        $this->assertInstanceOf(Language::class, $result);
    }

    public function testGetTraductionsReturnsArray()
    {
        $language = new Language('en');
        $language->loadFile('Validation');
        $this->assertIsArray($language->getTraductions());
    }
}
