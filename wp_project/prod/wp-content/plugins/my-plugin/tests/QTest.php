<?php

/**
 * Class QTest
 *
 * @package Ebids
 */

// = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// NAMESPACE
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// USE
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

use PHPUnit\Framework\TestCase;

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// CLASS
// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

/**
 * @brief
 * Base Test
 * 
 * @version 1.0.0
 */
abstract class QTest extends TestCase
{

    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    //                       META & TRAITS
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    //                        CONSTANTS
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

    public const STEP_TAG = 'STEP';
    public const INFO_TAG = 'INFO';
    public const GOOD_TAG = 'GOOD';
    public const DEBUG_TAG = 'VERBOSE';
    public const WARNING_TAG = 'WARNING';
    public const ERROR_TAG = 'ERROR';

    static protected $instance = null;

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    //                          FIELDS
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    //                        CONSTRUCTOR
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

    protected function __construct()
    {
    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    //                     GETTERS & SETTERS
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    //                       METHODS.PUBLIC
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

	/**
	 * echo with end-of-line.
	 * 
	 * @param String $msg - message.
	 */
	public static function echoln( string $msg ): void
	{
		echo $msg.PHP_EOL;
    }

    /**
     * Prints line of text to log
     * 
     * @param String $msg
     * @param String $log_tag
     */
    final protected function printLog( string $msg, string $log_tag = self::GOOD_TAG )
    {
        self::echoln( "{$log_tag}: {$msg}" );
    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    //                     METHODS.PROTECTED
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

    /**
     * This method is called before the first test of this test class is run.
     */
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
    }

    /**
     * This method is called after the last test of this test class is run.
     */
    public static function tearDownAfterClass(): void
    {
        parent::tearDownAfterClass();
        self::$instance = null;
    }

    /**
     * This method is called before each test.
     */
    protected function setUp(): void
    {
        parent::setUp();
        self::$instance = $this;
    }

    /**
     * This method is called after each test.
     */
    protected function tearDown(): void
    {
        parent::tearDown();
    }

    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    //                      METHODS.PRIVATE
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =

}

// = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =
