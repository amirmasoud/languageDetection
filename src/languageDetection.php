<?php
namespace AmirMasoud\LanguageDetection;

/**
* 
*/
class languageDetection
{
	/**
	 * Default language if we couldn't determine user language.
	 * @var string
	 */
	protected $fallback_language = 'en';

	public function getLanguage()
	{
		/**
		 * define new var: Prior PHP 5.5 has some bugs with with empty funtion.
		 * isset funtion: Undefined index HTTP_ACCEPT_LANGUAGE
		 */
		$HTTP_ACCEPT_LANGUAGE = '';
		if( isset( $_SERVER['HTTP_ACCEPT_LANGUAGE'] ) ) :
			$HTTP_ACCEPT_LANGUAGE = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
		else :
			$HTTP_ACCEPT_LANGUAGE = '';
		endif;

		/**
		 * Get browser language otherwise
		 */
		$browser_language = '';
		if( ! empty( $HTTP_ACCEPT_LANGUAGE ) ) :
			/**
			 * Strip HTML and PHP tags from a string
			 * @var string
			 */
			$strip_tags = strip_tags( $HTTP_ACCEPT_LANGUAGE );

			/**
			 * Tokenize string
			 * @var string
			 */
			$strtok = strtok( $strip_tags, ',' );

			/**
			 * Return part of a string
			 * @var string
			 */
			$browser_language = substr( $strtok, 0, 2 );

		else :
			$browser_language = '';

		endif;

		/**
		 * if we couldn't determin user language, we will use fallback language
		 */
		if( $browser_language == '' )
			$browser_language = $this->fallback_language;

		return $browser_language;
	}
}