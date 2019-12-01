<?php

namespace Test\MGR\Googlon\Semantics;

use MGR\Googlon\GooglonHelperForTests;
use MGR\Googlon\Semantics\Googlon;
use PHPUnit\Framework\TestCase;

class GooglonTest extends TestCase {

	public function testIllegalText(){
		$illegal_text = 'aashdjzxc asdjjds0xlma812 dshja87213 sjhzxdkj';
		$this->expectException(\RuntimeException::class);
		$instance = new Googlon($illegal_text);
	}

	/**
	 * @dataProvider dataForTestGetPrettyNumbersCount
	 * @param string $testCase
	 * @param int $expected_count
	 */
	public function testGetPrettyNumbersCount(string $testCase, int $expected_count): void {
		$googlon_text = GooglonHelperForTests::getTestCase($testCase);

		$instance = new Googlon($googlon_text);
		$pretty_numbers = $instance->getPrettyNumbers();

		$this->assertCount($expected_count, $pretty_numbers);
	}

	/**
	 * @dataProvider dataForTestGetWordsSorted
	 * @param string $testCase
	 */
	public function testGetWordsSorted(string $testCase): void {
		$googlon_text = GooglonHelperForTests::getTestCase($testCase);
		$expected = GooglonHelperForTests::getExpectedTestCase($testCase);
		$expected = preg_replace('/[\r\n]/', ' ', $expected);

		$instance = new Googlon($googlon_text);
		$sorted = $instance->getWordSorted();

		$this->assertEquals($expected, $sorted);
	}

	/**
	 * @dataProvider dataForTestGetPrepositons
	 * @param string $testCase
	 * @param int $expected_count
	 */
	public function testGetPrepositions(string $testCase, int $expected_count): void {
		$googlon_text = GooglonHelperForTests::getTestCase($testCase);

		$instance = new Googlon($googlon_text);
		$subjuntives = $instance->getPrepositions();

		$this->assertCount($expected_count, $subjuntives);
	}

	/**
	 * @dataProvider dataForTestGetSubjunctiveVerbs
	 * @param string $testCase
	 * @param int $expected_count
	 */
	public function testGetSubjunctiveVerbs(string $testCase, int $expected_count): void {
		$googlon_text = GooglonHelperForTests::getTestCase($testCase);

		$instance = new Googlon($googlon_text);
		$subjuntives = $instance->getSubjunctiveVerbs();

		$this->assertCount($expected_count, $subjuntives);
	}

	/**
	 * @dataProvider dataForTestGetAllVerbs
	 * @param string $testCase
	 * @param int $expected_count
	 */
	public function testGetAllVerbs(string $testCase, int $expected_count): void {
		$googlon_text = GooglonHelperForTests::getTestCase($testCase);

		$instance = new Googlon($googlon_text);
		$verbs = $instance->getAllVerbs();

		$this->assertCount($expected_count, $verbs);
	}

	public function dataForTestGetSubjunctiveVerbs(): array {
		return [
			['TestCase_01', 25],
			['TestCase_02', 26],
			['TestCase_03', 22],
			['TestCase_04', 19],
			['TestCase_05', 19],
		];
	}

	public function dataForTestGetAllVerbs(): array {
		return [
			['TestCase_01', 36],
			['TestCase_02', 46],
			['TestCase_03', 37],
			['TestCase_04', 31],
			['TestCase_05', 32],
		];
	}

	public function dataForTestGetPrepositons(): array {
		return [
			['TestCase_01', 3],
			['TestCase_02', 3],
			['TestCase_03', 2],
			['TestCase_04', 3],
			['TestCase_05', 1],
		];
	}

	public function dataForTestGetWordsSorted(): array {
		return [
			['TestCase_01'],
			['TestCase_02'],
			['TestCase_03'],
			['TestCase_04'],
			['TestCase_05'],
		];
	}

	public function dataForTestGetPrettyNumbersCount(): array {
		return [
			['TestCase_01', 22],
			['TestCase_02', 21],
			['TestCase_03', 27],
			['TestCase_04', 27],
			['TestCase_05', 26],
		];
	}
}
