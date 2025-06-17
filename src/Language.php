<?php

/**
 * This file is part of Codeigniter Language.
 *
 * (c) Daycry <daycry9@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Daycry\Language;

use CodeIgniter\Language\Language as BaseLanguage;

class Language extends BaseLanguage
{
    public function __construct(string $locale)
    {
        parent::__construct($locale);
    }

    public function loadFile(string $file, bool $return = false)
    {
        if ($return) {
            return $this->load($file, $this->locale, $return);
        }

        $this->load($file, $this->locale, $return);

        return $this;
    }

    public function getTraductions()
    {
        if (isset($this->language[$this->locale])) {
            return $this->language[$this->locale];
        }

        return [];
    }
}
