<?php

namespace Daycry\Language;

class Language extends \CodeIgniter\Language\Language
{
    public function __construct( string $locale )
	{
		parent::__construct( $locale );
	}

    public function loadFile( string $file, bool $return = false )
    {
        if( $return )
        {
            return $this->load( $file, $this->locale, $return );
        }

        $this->load( $file, $this->locale, $return );

        return true;
    }

    public function getTraductions()
    {
        if( isset( $this->language[ $this->locale ] ) )
        {
            return $this->language[ $this->locale ];
        }

        return [];
    }
}