<?php

/**
 * This file is part of Codeigniter Language.
 *
 * (c) Daycry <daycry9@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Daycry\Language\Config;

use CodeIgniter\Config\BaseService;
use Daycry\Language\Language;

class Services extends BaseService
{
    /**
     * Responsible for loading the language string translations.
     *
     * @return Language
     */
    public static function language(?string $locale = null, bool $getShared = true)
    {
        if ($getShared) {
            return static::getSharedInstance('language', $locale)->setLocale($locale);
        }

        // Use '?:' for empty string check
        $locale = $locale ?: \Config\Services::request()->getLocale();

        return new Language($locale);
    }
}
