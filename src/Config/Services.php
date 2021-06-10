<?php namespace Daycry\Language\Config;

use CodeIgniter\Config\BaseService;
use Daycry\Language\Language;

class Services extends BaseService
{
    /**
	 * Responsible for loading the language string translations.
	 *
	 * @param string|null $locale
	 * @param boolean     $getShared
	 *
	 * @return Language
	 */
	public static function language(string $locale = null, bool $getShared = true)
	{
		if ($getShared)
		{
			return static::getSharedInstance( 'language', $locale )->setLocale( $locale );
		}

		// Use '?:' for empty string check
		$locale = $locale ?: \Config\Services::request()->getLocale();

		return new \Daycry\Language\Language( $locale );
	}

	//--------------------------------------------------------------------
}