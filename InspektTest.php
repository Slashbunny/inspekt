<?php
require_once 'PHPUnit/Framework.php';

require_once 'Inspekt.php';

/**
 * Test class for Inspekt.
 * Generated by PHPUnit on 2009-07-18 at 19:53:18.
 */
class InspektTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @var	   Inspekt
	 * @access protected
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 *
	 * @access protected
	 */
	protected function setUp()
	{
		// $this->object = new Inspekt;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 *
	 * @access protected
	 */
	protected function tearDown()
	{
	}

	/**
	 * Generated from @assert ('1)@*(&UR)HQ)W(*(HG))') === '1URHQWHG'.
	 */
	public function testGetAlnum()
	{
		$this->assertSame(
			'1URHQWHG',
			Inspekt::getAlnum('1)@*(&UR)HQ)W(*(HG))')
		);
	}

	/**
	 *
	 */
	public function testGetAlnumArray()
	{
		$this->assertSame(
			array(
				'1URHQWHG',
				'nSsdW3V0',
			),
			Inspekt::getAlnum(array(
				'1)@*(&UR)HQ)W(*(HG))',
				'n)@##S!!s>d<W.3,/V=0',
			))
		);
	}

	/**
	 * Generated from @assert ('1)@*(&UR)HQ)56W(*(HG))') === '156'.
	 */
	public function testGetDigits()
	{
		$this->assertSame(
		  '156',
		  Inspekt::getDigits('1)@*(&UR)HQ)56W(*(HG))')
		);
	}

	/**
	 *
	 */
	public function testGetDigitsArray()
	{
		$this->assertSame(
			array(
				'156',
				'51947399',
			),
			Inspekt::getDigits(array(
				'1)@*(&UR)HQ)56W(*(HG))',
				'abc5def1,.><9///4##@7afg=3=+9-_9',
			))
		);
	}

	/**
	 * Generated from @assert ('/usr/lib/php/Pear.php') === '/usr/lib/php'.
	 */
	public function testGetDir()
	{
		$this->assertSame(
		  '/usr/lib/php',
		  Inspekt::getDir('/usr/lib/php/Pear.php')
		);
	}

	/**
	 *
	 */
	public function testGetDirArray()
	{
		$this->assertSame(
			array(
				'/usr/lib/php',
				'C:\WINDOWS\system32\drivers\etc',
			),
			Inspekt::getDir(array(
				'/usr/lib/php/Pear.php',
				'C:\WINDOWS\system32\drivers\etc\hosts',
			))
		);
	}

	/**
	 * Generated from @assert ('1)45@*(&UR)HQ)W.0000(*(HG))') === 1.
	 */
	public function testGetInt()
	{
		$this->assertSame(
		  1,
		  Inspekt::getInt('1)45@*(&UR)HQ)W.0000(*(HG))')
		);
	}

	/**
	 * Generated from @assert ('A1)45@*(&UR)HQ)W.0000(*(HG))') === 0.
	 */
	public function testGetInt2()
	{
		$this->assertSame(
		  0,
		  Inspekt::getInt('A1)45@*(&UR)HQ)W.0000(*(HG))')
		);
	}

	/**
	 * Generated from @assert ('A1)45@*(&UR)HQ)W.0000(*(HG))') === 0.
	 */
	public function testGetIntArray()
	{
		$this->assertSame(
			array(
				0,
				1
			),
			Inspekt::getInt(
				array(
					'A1)45@*(&UR)HQ)W.0000(*(HG))',
					'1)45@*(&UR)HQ)W.0000(*(HG))'
				)
			)
		);
	}

	/**
	 * Test cases for Inspekt::getFloat()
	 */
	public function getFloatProvider()
	{
		return array(
			array('200.200'                      , 200.2),
			array('123.456'                      , 123.456),
			array(30.00                          , 30.00),
			array(1.2e3                          , 1.2e3),
			array(7E-10                          , 7E-10),
			array('1.2e3'                        , 1.2e3),
			array('7E-10'                        , 7E-10),
			array('A1)45@*(&UR)HQ)W.0000(*(HG))' , 0.0),
			array('1)45@*(&UR)HQ)W.0000(*(HG))'  , 1.0),
		);
	}

	/**
	 * @dataProvider getFloatProvider
	 */
	public function testGetFloat($input, $expected)
	{
		$this->assertSame($expected, Inspekt::getFloat($input));
	}

	/**
	 *
	 */
	public function testGetFloatArray()
	{
		$this->assertSame(
			array(
				200.2,
				1.2e3,
				7E-10,
				0.0,
				1.0,
				),
			Inspekt::getFloat(
				array(
					'200.200',
					'1.2e3',
					7E-10,
					'A1)45@*(&UR)HQ)W.0000(*(HG))',
					'1)45@*(&UR)HQ)W.0000(*(HG))',
				)
			)
		);
	}

	/**
	 * Generated from @assert ('NCOFWIERNVOWIEBHV12047057y0650ytg0314') === true.
	 */
	public function testIsAlnum()
	{
		$this->assertSame(
		  true,
		  Inspekt::isAlnum('NCOFWIERNVOWIEBHV12047057y0650ytg0314')
		);
	}

	/**
	 * Generated from @assert ('NCOFWIERNVOWIEBHV2@12047057y0650ytg0314') === false.
	 */
	public function testIsAlnum2()
	{
		$this->assertSame(
		  false,
		  Inspekt::isAlnum('NCOFWIERNVOWIEBHV2@12047057y0650ytg0314')
		);
	}

	/**
	 * Generated from @assert ('funkatron') === true.
	 */
	public function testIsAlnum3()
	{
		$this->assertSame(
		  true,
		  Inspekt::isAlnum('funkatron')
		);
	}

	/**
	 * Generated from @assert ('funkatron_user') === false.
	 */
	public function testIsAlnum4()
	{
		$this->assertSame(
		  false,
		  Inspekt::isAlnum('funkatron_user')
		);
	}

	/**
	 * Generated from @assert ('funkatron-user') === false.
	 */
	public function testIsAlnum5()
	{
		$this->assertSame(
		  false,
		  Inspekt::isAlnum('funkatron-user')
		);
	}

	/**
	 * Generated from @assert ('_funkatronuser') === false.
	 */
	public function testIsAlnum6()
	{
		$this->assertSame(
		  false,
		  Inspekt::isAlnum('_funkatronuser')
		);
	}

	/**
	 * Generated from @assert ('NCOFWIERNVOWIEBHV12047057y0650ytg0314') === false.
	 */
	public function testIsAlpha()
	{
		$this->assertSame(
		  false,
		  Inspekt::isAlpha('NCOFWIERNVOWIEBHV12047057y0650ytg0314')
		);
	}

	/**
	 * Generated from @assert ('NCOFWIERNVOWIEBHV2@12047057y0650ytg0314') === false.
	 */
	public function testIsAlpha2()
	{
		$this->assertSame(
		  false,
		  Inspekt::isAlpha('NCOFWIERNVOWIEBHV2@12047057y0650ytg0314')
		);
	}

	/**
	 * Generated from @assert ('funkatron') === true.
	 */
	public function testIsAlpha3()
	{
		$this->assertSame(
		  true,
		  Inspekt::isAlpha('funkatron')
		);
	}

	/**
	 * Generated from @assert ('funkatron_user') === false.
	 */
	public function testIsAlpha4()
	{
		$this->assertSame(
		  false,
		  Inspekt::isAlpha('funkatron_user')
		);
	}

	/**
	 * Generated from @assert ('funkatron-user') === false.
	 */
	public function testIsAlpha5()
	{
		$this->assertSame(
		  false,
		  Inspekt::isAlpha('funkatron-user')
		);
	}

	/**
	 * Generated from @assert ('_funkatronuser') === false.
	 */
	public function testIsAlpha6()
	{
		$this->assertSame(
		  false,
		  Inspekt::isAlpha('_funkatronuser')
		);
	}

	/**
	 * Generated from @assert (12, 0, 12) === TRUE.
	 */
	public function testIsBetween()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isBetween(12, 0, 12)
		);
	}

	/**
	 * Generated from @assert (12, 0, 12, FALSE) === FALSE.
	 */
	public function testIsBetween2()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isBetween(12, 0, 12, FALSE)
		);
	}

	/**
	 * Generated from @assert ('f', 'a', 'm', FALSE) === TRUE.
	 */
	public function testIsBetween3()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isBetween('f', 'a', 'm', FALSE)
		);
	}

	/**
	 * Generated from @assert ('p', 'a', 'm', FALSE) === FALSE.
	 */
	public function testIsBetween4()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isBetween('p', 'a', 'm', FALSE)
		);
	}

	/**
	 * Generated from @assert ('2009-06-30') === TRUE.
	 */
	public function testIsDate()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isDate('2009-06-30')
		);
	}

	/**
	 * Generated from @assert ('2009-06-31') === FALSE.
	 */
	public function testIsDate2()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isDate('2009-06-31')
		);
	}

	/**
	 * Generated from @assert ('2009-6-30') === TRUE.
	 */
	public function testIsDate3()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isDate('2009-6-30')
		);
	}

	/**
	 * Generated from @assert ('2-6-30') === TRUE.
	 */
	public function testIsDate4()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isDate('2-6-30')
		);
	}

	/**
	 * Generated from @assert ('1029438750192730t91740987023948') === FALSE.
	 */
	public function testIsDigits()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isDigits('1029438750192730t91740987023948')
		);
	}

	/**
	 * Generated from @assert ('102943875019273091740987023948') === TRUE.
	 */
	public function testIsDigits2()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isDigits('102943875019273091740987023948')
		);
	}

	/**
	 * Generated from @assert (102943875019273091740987023948) === FALSE.
	 */
	public function testIsDigits3()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isDigits(102943875019273091740987023948)
		);
	}

	/**
	 * Generated from @assert ('coj@poop.com') === TRUE.
	 */
	public function testIsEmail()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isEmail('coj@poop.com')
		);
	}

	/**
	 * Generated from @assert ('coj+booboo@poop.com') === TRUE.
	 */
	public function testIsEmail2()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isEmail('coj+booboo@poop.com')
		);
	}

	/**
	 * Generated from @assert ('coj!booboo@poop.com') === FALSE.
	 */
	public function testIsEmail3()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isEmail('coj!booboo@poop.com')
		);
	}

	/**
	 * Generated from @assert ('@poop.com') === FALSE.
	 */
	public function testIsEmail4()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isEmail('@poop.com')
		);
	}

	/**
	 * Generated from @assert ('a@b') === FALSE.
	 */
	public function testIsEmail5()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isEmail('a@b')
		);
	}

	/**
	 * Generated from @assert ('webmaster') === FALSE.
	 */
	public function testIsEmail6()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isEmail('webmaster')
		);
	}

	/**
	 * Generated from @assert (10244578109.234451) === TRUE.
	 */
	public function testIsFloat()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isFloat(10244578109.234451)
		);
	}

	/**
	 * Generated from @assert ('10244578109.234451') === FALSE.
	 */
	public function testIsFloat2()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isFloat('10244578109.234451')
		);
	}

	/**
	 * Generated from @assert ('10,244,578,109.234451') === FALSE.
	 */
	public function testIsFloat3()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isFloat('10,244,578,109.234451')
		);
	}

	/**
	 * Generated from @assert (5, 0) === TRUE.
	 */
	public function testIsGreaterThan()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isGreaterThan(5, 0)
		);
	}

	/**
	 * Generated from @assert (2, 10) === FALSE.
	 */
	public function testIsGreaterThan2()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isGreaterThan(2, 10)
		);
	}

	/**
	 * Generated from @assert ('b', 'a') === TRUE.
	 */
	public function testIsGreaterThan3()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isGreaterThan('b', 'a')
		);
	}

	/**
	 * Generated from @assert ('a', 'b') === FALSE.
	 */
	public function testIsGreaterThan4()
	{
		$this->assertSame(
		  FALSE,
		  Inspekt::isGreaterThan('a', 'b')
		);
	}

	/**
	 * Generated from @assert ('6F') === TRUE.
	 */
	public function testIsHex()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isHex('6F')
		);
	}

	/**
	 * Generated from @assert ('F6') === TRUE.
	 */
	public function testIsHex2()
	{
		$this->assertSame(
		  TRUE,
		  Inspekt::isHex('F6')
		);
	}

	/**
	 *
	 */
	public function testMakeServerCage()
	{
		$cage = Inspekt::makeServerCage();
		$this->assertTrue($cage instanceof Inspekt_Cage);
	}

	/**
	 *
	 */
	public function testMakeGetCage()
	{
		$cage = Inspekt::makeGetCage();
		$this->assertTrue($cage instanceof Inspekt_Cage);
	}

	/**
	 *
	 */
	public function testMakePostCage()
	{
		$cage = Inspekt::makePostCage();
		$this->assertTrue($cage instanceof Inspekt_Cage);
	}

	/**
	 *
	 */
	public function testMakeCookieCage()
	{
		$cage = Inspekt::makeCookieCage();
		$this->assertTrue($cage instanceof Inspekt_Cage);
	}

	/**
	 *
	 */
	public function testMakeEnvCage()
	{
		$cage = Inspekt::makeEnvCage();
		$this->assertTrue($cage instanceof Inspekt_Cage);
	}

	/**
	 *
	 */
	public function testMakeFilesCage()
	{
		$cage = Inspekt::makeFilesCage();
		$this->assertTrue($cage instanceof Inspekt_Cage);
	}

	/**
	 * session cages currently aren't supported
	 * @expectedException PHPUnit_Framework_Error
	 */
	public function testMakeSessionCage()
	{
		Inspekt::makeSessionCage();
	}

	/**
	 *
	 */
	public function testMakeSuperCage()
	{
		$cage = Inspekt::makeSuperCage();
		$this->assertTrue($cage instanceof Inspekt_SuperCage);
	}

	/**
	 *
	 */
	public function testUseFilterExt()
	{
		$this->assertTrue(Inspekt::useFilterExt(true));
		$this->assertTrue(Inspekt::useFilterExt());
		$this->assertFalse(Inspekt::useFilterExt(false));
		$this->assertFalse(Inspekt::useFilterExt());
	}

	/**
	 *
	 */
	public function testConvertArrayToArrayObject()
	{
		$arr = array(1,2,3,4);
		$ao  = Inspekt::convertArrayToArrayObject($arr);
		$this->assertTrue($ao instanceof ArrayObject);
	}

	/**
	 *
	 */
	public function testGetAlpha()
	{
		$input  = '0qhf01 *#R& !)*h09hqwe0fH! )efh0hf';
		$output = 'qhfRhhqwefHefhhf';
		$this->assertTrue(Inspekt::getAlpha($input) === $output);
		
		$input  = array('1241DOSLDH', 'efoihr123-', 'eoeijfo1');
		$output = array('DOSLDH', 'efoihr', 'eoeijfo');
		$this->assertEquals(Inspekt::getAlpha($input), $output);
	}

	/**
	 *
	 */
	public function testGetPath()
	{
		$expected  = dirname(__FILE__);
		$this->assertTrue(Inspekt::getPath('./') == $expected);
		
		$expected = dirname(dirname(dirname(__FILE__)));
		$this->assertTrue(Inspekt::getPath('./../../') == $expected);
	}

	/**
	 *
	 */
	public function testGetPathArray()
	{
		$this->assertSame(
			array(
				dirname(__FILE__),
				dirname(dirname(dirname(__FILE__))),
			),
			Inspekt::getPath(
				array(
					'./',
					'./../../'
				)
			)
		);
	}

	/**
	 *
	 */
	public function testGetROT13()
	{
		$input = 'I am not an animal!';
		$expect= 'V nz abg na navzny!';
		$this->assertSame($expect, Inspekt::getROT13($input));
	}

	/**
	 *
	 */
	public function testGetROT13Array()
	{
		$input = array('I am not an animal!');
		$expect= array('V nz abg na navzny!');
		$this->assertSame($expect, Inspekt::getROT13($input));
	}

	/**
	 * @expectedException PHPUnit_Framework_Error
	 */
	public function testGetCharListMissingSecondParam()
	{
		Inspekt::getChars('MyInput!');
	}

	/**
	 * @expectedException PHPUnit_Framework_Error
	 */
	public function testGetCharListInvalidSecondParam()
	{
		Inspekt::getChars('MyInput!', 'This Should be an Array!');
	}

	/**
	 * @expectedException PHPUnit_Framework_Error
	 */
	public function testGetCharListInvalidSecondParamValueMacro()
	{
		Inspekt::getChars('MyInput!', array('a-z', 'bad', '_', '@'));
	}

	/**
	 * @expectedException PHPUnit_Framework_Error
	 */
	public function testGetCharListInvalidSecondParamValueArray()
	{
		Inspekt::getChars('MyInput!', array('a-z', array('b', 'a', 'd'), '_', '@'));
	}

	/**
	 *
	 */
	public function testGetCharListEmpty()
	{
		$this->assertSame('', Inspekt::getChars('', array()));
	}

	/**
	 *
	 */
	public function testGetCharListEmptyArray()
	{
		$this->assertSame(
			array('', ''),
			Inspekt::getChars(array('', ''), array())
		);
	}

	/**
	 * Dataprovider for testGetCharListValidList test
	 */
	public function getCharsProvider()
	{
		return array(
			array('bunny!',      array('a-z', '!'),                'bunny!'),
			array('OiNk681',     array('0-9', 'A-Z', 'a-z'),       'OiNk681'),
			array('bunny!',      array('A-Z', '!'),                '!'),
			array('user_name',   array('a-z', 'A-Z', '_'),         'user_name'),
			array('t0talf41l',   array('A-Z', '@', '.'),           ''),
			array('moo@you',     array('a-z', 'm', 'o', 'u', '@'), 'moo@you'),
			array('some/stuff',  array('t', 's', 'u', '/'),        's/stu'),
			array('1234567890',  array('0-9', '9', '1', '0'),      '1234567890'),
			array('12345678-',   array('0', '-', '9'),             '-'),
			array('nothing',     array('a', '-', 'z'),             ''),
			array('moo[test^]',  array('o', 'e', '[', '^'),        'oo[e^'),
			array('((OiNk\\',    array('(', 'i', '\\'),            '((i\\'),
			array('some stuf|f', array(' ', 's', '|', 't', 'm'),   'sm st|'),
			array('test-toast',  array('-', '-', '-'),             '-'),
			array('test-toast',  array('-'),                       '-'),
		);
	}

	/**
	 * @dataProvider getCharsProvider
	 */
	public function testGetCharListValidList($input, $valid_chars, $output)
	{
		$this->assertSame($output, Inspekt::getChars($input, $valid_chars));
	}

	/**
	 * @link https://www.paypal.com/en_US/vhelp/paypalmanager_help/credit_card_numbers.htm
	 */
	public function testIsCcnum()
	{
		$input = '5105105105105100';
		$this->assertTrue(Inspekt::isCcnum($input));
	}

	/**
	 * @expectedException PHPUnit_Framework_Error
	 */
	public function testIsCcnumUnsupportedOption()
	{
		$input = '5105105105105100';
		Inspekt::isCcnum($input, "moo");
	}

	/**
	 *
	 */
	public function testIsCcnumBadLength()
	{
		$input = '1234';
		$this->assertFalse(Inspekt::isCcnum($input));
	}

	/**
	 *
	 */
	public function testIsHostname()
	{
		$input = '192.168.1.1';
		$this->assertTrue(Inspekt::isHostname($input));
	}

	/**
	 * @expectedException PHPUnit_Framework_Error
	 */
	public function testIsHostnameBadParamAllowType()
	{
		Inspekt::isHostname("ignored", "oink");
	}

	/**
	 * @expectedException PHPUnit_Framework_Error
	 */
	public function testIsHostnameBadParamAllowValue()
	{
		Inspekt::isHostname("ignored", 8);
	}

	/**
	 *
	 */
	public function testIsHostnameIPAllowed()
	{
		$this->assertTrue(Inspekt::isHostname("127.0.0.1", ISPK_HOST_ALLOW_IP));
	}

	/**
	 *
	 */
	public function testIsHostnameIPButNotAllowed()
	{
		$this->assertFalse(Inspekt::isHostname("127.0.0.1", ISPK_HOST_ALLOW_DNS));
	}

	/**
	 *
	 */
	public function testIsHostnameIPBad()
	{
		$this->assertFalse(Inspekt::isHostname("999.999", ISPK_HOST_ALLOW_IP));
	}

	/**
	 *
	 */
	public function testIsHostnameDomainNameAllowed()
	{
		$this->assertTrue(Inspekt::isHostname("www.google.com", ISPK_HOST_ALLOW_DNS));
	}

	/**
	 *
	 */
	public function testIsHostnameDomainNameButNotAllowed()
	{
		$this->assertFalse(Inspekt::isHostname("www.google.com", ISPK_HOST_ALLOW_IP));
	}

	/**
	 *
	 */
	public function testIsHostnameDomainNameBad()
	{
		$this->assertFalse(Inspekt::isHostname("google", ISPK_HOST_ALLOW_DNS));
	}

	/**
	 *
	 */
	public function testIsHostnameLocalNameAllowed()
	{
		$this->assertTrue(Inspekt::isHostname("bunny", ISPK_HOST_ALLOW_LOCAL));
	}

	/**
	 *
	 */
	public function testIsHostnameLocalNameButNotAllowed()
	{
		$this->assertFalse(Inspekt::isHostname("bunny", ISPK_HOST_ALLOW_IP));
	}

	/**
	 *
	 */
	public function testIsHostnameLocalNameBad()
	{
		$this->assertFalse(Inspekt::isHostname("bunny099", ISPK_HOST_ALLOW_IP));
	}

	/**
	 *
	 */
	public function testIsInt()
	{
		$input = '9223372036854775807';
		$this->assertTrue(Inspekt::isInt($input));
	}

	/**
	 *
	 */
	public function testIsInt1()
	{
		$input = '-9223372036854775807';
		$this->assertTrue(Inspekt::isInt($input));
	}
	/**
	 *
	 */
	public function testIsInt2()
	{
		$input = '4523231.123';
		$this->assertFalse(Inspekt::isInt($input));
	}
	/**
	 *
	 */
	public function testIsInt3()
	{
		$input = '1';
		$this->assertTrue(Inspekt::isInt($input));
	}
	/**
	 *
	 */
	public function testIsInt4()
	{
		$input = 2147483647;
		$this->assertTrue(Inspekt::isInt($input));
	}

	/**
	 *
	 */
	public function testIsIp()
	{
		$input = '192.168.1.1';
		$this->assertTrue(Inspekt::isIp($input));
	}

	/**
	 *
	 */
	public function testIsLessThan()
	{
		$this->assertTrue(Inspekt::isLessThan('a', 'b'));
	}

	/**
	 *
	 */
	public function testIsOneOf()
	{
		$oneof = '<>\'"&';
		$input = '&';
		$this->assertTrue(Inspekt::isOneOf($input, $oneof));
	}

	/**
	 *
	 */
	public function testIsPhone()
	{
		$input = '7655559090';
		$this->assertTrue(Inspekt::isPhone($input));
	}

	/**
	 *
	 */
	public function testIsPhoneBadInputType()
	{
		$input = 'bunny01';
		$this->assertFalse(Inspekt::isPhone($input));
	}

	/**
	 *
	 */
	public function testIsPhoneBadInputLength()
	{
		$input = '1234';
		$this->assertFalse(Inspekt::isPhone($input));
	}

	/**
	 * @expectedException PHPUnit_Framework_Error
	 */
	public function testIsPhoneUnsupportedCountryCode()
	{
		$input = '1234567890';
		Inspekt::isPhone($input, 'SB');
	}

	/**
	 * @todo Implement testIsRegex().
	 */
	public function testIsRegex()
	{
		$input = 'username_786';
		$regex = '/[a-zA-Z0-9_]/';
		$this->assertTrue(Inspekt::isRegex($input, $regex));
	}

	/**
	 * Dataprovider for Inspekt::isUri() Testing
	 */
	public function isUriProvider()
	{
		return array(
			array(false, '//lessthan'),
			array(true,  'ftp://funky7:boooboo@123.444.999.12/'),
			array(false, 'http://spinaltap.micro.umn.edu/00/Weather/California/Los%lngeles'),
			array(true,  'http://funkatron.com/////////12341241'),
			array(true,  'http://funkatron.com:12'),
			array(true,  'http://funkatron.com:8000/#foo'),
			array(true,  'https://funkatron.com'),
			array(true,  'https://funkatron.com:42/funky.php?foo[]=bar'),
			array(true,  'http://www.w3.org/2001/XMLSchema'),
			array(true,  'http://news.bbc.co.uk/2/hi/middle_east/8277040.stm'),
			array(true,  'http://www.google.com/?url=http://www.google.com&confuse=false'),
			array(true,  'http://user:pass@domain.com:8080/some/path/stuff.php?var=1&moo=oink#anchor1'),
		);
	}

	/**
	 * @dataProvider isUriProvider
	 */
	public function testIsUri($expected, $uri)
	{
		if ($expected === true)
		{
			$this->assertTrue(Inspekt::isUri($uri));
		}
		else
		{
			$this->assertFalse(Inspekt::isUri($uri));
		}
	}

	/**
	 *
	 */
	public function testIsZip()
	{
		$input = '00202';
		$this->assertTrue(Inspekt::isZip($input));
	}

	/**
	 *
	 */
	public function testIsZip1()
	{
		$input = 'C6D-5F5';
		$this->assertFalse(Inspekt::isZip($input));
	}

	/**
	 *
	 */
	public function testIsZip2()
	{
		$input = '46544-4142';
		$this->assertTrue(Inspekt::isZip($input));
	}

	/**
	 *
	 */
	public function testNoTags()
	{
		$input = '<SCRIPT>alert(\'foobar\');</SCRIPT>';
		$expect= 'alert(\'foobar\');';
		$this->assertSame($expect, Inspekt::noTags($input));
	}

	/**
	 *
	 */
	public function testNoTagsArray()
	{
		$input = array('<SCRIPT>alert(\'foobar\');</SCRIPT>');
		$expect= array('alert(\'foobar\');');
		$this->assertSame($expect, Inspekt::noTags($input));
	}

	/**
	 * What might look like blank spaces below are mostly low ASCII chars
	 */
	public function testNoTagsOrSpecial()
	{
		$input = '    <SCRIPT<strong>>alert(\'foobar\');<</strong>/SCRIPT>';
		$expect= '&#21;&#21;&#21;&#21;&#21;&#21;&#22; &#22; &#22; &#22; alert(&#039;foobar&#039;);';
		$this->assertSame($expect, Inspekt::noTagsOrSpecial($input));
	}

	/**
	 * What might look like blank spaces below are mostly low ASCII chars
	 */
	public function testNoTagsOrSpecialArray()
	{
		$input  = array('    <SCRIPT<strong>>alert(\'foobar\');<</strong>/SCRIPT>');
		$expect = array('&#21;&#21;&#21;&#21;&#21;&#21;&#22; &#22; &#22; &#22; alert(&#039;foobar&#039;);');
		$this->assertSame($expect, Inspekt::noTagsOrSpecial($input));
	}

	/**
	 *
	 */
	public function testNoPath()
	{
		$input = './../../../../../../../../../etc/passwd';
		$expect= 'passwd';
		$this->assertSame($expect, Inspekt::noPath($input));
	}

	/**
	 *
	 */
	public function testNoPathArray()
	{
		$input = array('./../../../../../../../../../etc/passwd');
		$expect= array('passwd');
		$this->assertSame($expect, Inspekt::noPath($input));
	}

	/**
	 * @todo Implement testEscMySQL().
	 */
	public function testEscMySQL()
	{
		if (!extension_loaded('mysql')) {
			$this->markTestSkipped(
			  'The MySQL extension is not available.'
			);
		}
		
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testEscPgSQL().
	 */
	public function testEscPgSQL()
	{
		if (!extension_loaded('pgsql')) {
			$this->markTestSkipped(
			  'The PGSQL extension is not available.'
			);
		}
		
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}

	/**
	 * @todo Implement testEscPgSQLBytea().
	 */
	public function testEscPgSQLBytea()
	{
		if (!extension_loaded('pgsql')) {
			$this->markTestSkipped(
			  'The PGSQL extension is not available.'
			);
		}
		
		// Remove the following lines when you implement this test.
		$this->markTestIncomplete(
		  'This test has not been implemented yet.'
		);
	}
}
?>
