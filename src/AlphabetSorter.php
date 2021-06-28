<?php

namespace Gkmn\Src;

require_once (__DIR__ . '/../vendor/autoload.php');

class AlphabetSorter {
  public function sort(string $s): string
  {
      $letterToNumberMapping = [];

      foreach (range('a', 'z') as $key => $letter) {
        $letterToNumberMapping[$letter] = $key + 1;
      }

      $numbers = array_map(function(string $letter) use ($letterToNumberMapping) {
        return $letterToNumberMapping[strtolower($letter)] ?? null;
      }, str_split($s));

      return implode(' ', array_filter($numbers));
    }
}