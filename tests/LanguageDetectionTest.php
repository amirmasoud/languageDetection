<?php
 
use AmirMasoud\LanguageDetection\Language;
 
class languageDetectionTest extends PHPUnit_Framework_TestCase 
{

	public function testLanguageDetectionGetLanguage()
	{ 
		$this->assertInternalType( 'string', Language::getLanguage() );
	}
 
}