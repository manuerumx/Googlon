<?php

namespace MGR\Googlon\Semantics;

class Googlon {

	public const ALPHABETH = 'sxocqnmwpfyheljrdgui';
	public const MIN_NUMBER = 81827;
	public const DIVISIBLE = 3;

	private const REGEX_SUBJUNCTIVE = '/(?=\b\w{6,}\b)(\b[ocqnwyheljrgi])\w*[ocqnwyheljrgi]\b/m';
	private const REGEX_ALL_VERBS = '/(?=\b\w{6,}\b)\w*[ocqnwyheljrgi]\b/m';
	private const REGEX_PREPOSITIONS = '/(?=\b\w{6}\b)(?=\w*[dxsmpf]\b)(\b((?!(u))\w)+\b)/m';
	private const REGEX_ILLEGAL_TEXT = '/\b[^sxocqnmwpfyheljrdgui \n\r]/m';

	private $text;

	public function __construct(string $text) {
		$this->text = $text;
		$is_illegal = $this->isIllegalText();
		if ($is_illegal) {
			throw new \RuntimeException('The text provided unknown characters for the Googlon language');
		}
	}

	public function getPrettyNumbers(): array {
		$words = preg_split('/[\s]/', $this->text, null, PREG_SPLIT_NO_EMPTY);
		return $this->processWordAsNumbers($words);
	}

	public function getWordSorted(): string {
		$words = preg_split('/[\s]/', $this->text, null, PREG_SPLIT_NO_EMPTY);
		$sorted = GooglonUtils::googlonTranslator($words);
		return implode(' ', $sorted);
	}

	public function getSubjunctiveVerbs(): array {
		return $this->getMatches(self::REGEX_SUBJUNCTIVE);
	}

	public function getAllVerbs(): array {
		return $this->getMatches(self::REGEX_ALL_VERBS);
	}

	public function getPrepositions(): array {
		return $this->getMatches(self::REGEX_PREPOSITIONS);
	}

	private function processWordAsNumbers($words): array {
		$pretty_words = [];
		foreach ($words as $word) {
			$word_value = GooglonUtils::convertWordIntoBase20($word);
			$is_divisible = GooglonUtils::isValueDivisibleBy($word_value, self::DIVISIBLE);

			if ($word_value >= self::MIN_NUMBER && $is_divisible) {
				$pretty_words[] = $word;
			}
		}
		return array_unique($pretty_words);
	}

	private function getMatches(string $expresion): array {
		$matches = [];
		preg_match_all($expresion, $this->text, $matches, PREG_SET_ORDER);
		return $matches;
	}

	private function isIllegalText(): bool {
		$count = $this->getMatches(self::REGEX_ILLEGAL_TEXT);
		return count($count) > 0;
	}

}
