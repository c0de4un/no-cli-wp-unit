<?php
/**
 * Class SampleTest
 *
 * @package Ebids
 */

 use PHPUnit\Framework\TestCase;

/**
 * Sample test case.
 */
final class SampleTest extends TestCase {

    /**
     * This method is called before each test.
     */
    protected function setUp(): void
    {

    }

    /**
     * This method is called after each test.
     */
    protected function tearDown(): void
    {
    }

	/**
	 * A single example test.
	 */
	public function test_sample() {

		echo PHP_EOL . PHP_EOL . "Currency::char=" . get_woocommerce_currency_symbol() . PHP_EOL . PHP_EOL;

		// Replace this with some actual testing code.
		$this->assertTrue( true );
	}
}
