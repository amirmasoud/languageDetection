<?php
 
use AmirMasoud\LanguageDetection\languageDetection;
 
class languageDetectionTest extends PHPUnit_Framework_TestCase 
{
	/**
	 * languageDetection Instance
	 * @var language
	 */
	private $language;

	public function __construct()
	{
		/**
		 * dependency injection
		 * @var languageDetection
		 */
		$this->language = new languageDetection();
	}

	public function testLanguageDetectionGetLanguage()
	{ 
		$this->assertInternalType( 'string', $this->language->getLanguage() );
	}
 
}