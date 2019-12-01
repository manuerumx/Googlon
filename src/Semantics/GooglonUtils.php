<?php

namespace MGR\Googlon\Semantics;

final class GooglonUtils {

	public static function convertWordIntoBase20($word): int {
		$array_alphabet = str_split(Googlon::ALPHABETH);
		$word_size = strlen($word);
		$value = 0;
		for ($i = 0; $i < $word_size; $i++) {
			$factorial = array_search($word[$i], $array_alphabet, true);
			$value += (20 ** $i) * $factorial;
		}
		if(is_float($value)){
			echo $value . PHP_EOL;
		}
		return $value;
	}

	public static function googlonTranslator(array $words): array {
		$alphabeth_order = str_split(Googlon::ALPHABETH);
		$key_order = array_flip($alphabeth_order);

		$numeric_words = self::convertWordsToNumber($words, $key_order);
		$numeric_words = self::customSort($numeric_words);
		$sorted_words = self::convertNumericToWords($numeric_words, $alphabeth_order);

		$sorted_words = array_unique($sorted_words);
		return $sorted_words;
	}

	public static function wordToNumArray(string $word, array $key_order): array {
		$chars = str_split(strtolower($word));
		$arr = [];
		foreach ($chars as $char) {
			$arr[] = $key_order[$char];
		}
		return $arr;
	}

	public static function arrayNumToWord(array $original_array, array $char_order): string {
		$new_array = [];
		foreach ($original_array as $i) {
			$new_array[] = $char_order[$i];
		}
		return implode('', $new_array);
	}

	public static function convertNumericToWords(array $numeric_words, array $alphabet_order): array {
		$sorted_words = [];
		foreach ($numeric_words as $num_word) {
			$sorted_words[] = self::arrayNumToWord($num_word, $alphabet_order);
		}
		return $sorted_words;
	}

	public static function customSort(array $original_array): array {
		$array_of_strings = [];
		$sorted_array = [];

		foreach ($original_array as $t) {
			$array_of_strings[] = implode('-', $t);
		}

		array_multisort($array_of_strings, SORT_NATURAL);

		foreach ($array_of_strings as $t) {
			$sorted_array[] = explode('-', $t);
		}

		return $sorted_array;
	}

	public static function convertWordsToNumber(array $words, array $key_order): array {
		$numeric_words = [];
		foreach ($words as $word) {
			$numeric_words[] = self::wordToNumArray($word, $key_order);
		}
		return $numeric_words;
	}

	public static function isValueDivisibleBy(int $word_value, int $divisible): bool {
		return $word_value % $divisible === 0;
	}
}
