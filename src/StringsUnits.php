<?php
namespace StringsUnits;

function capitalize($text)
{
  if ($text === '') {
    return '';
  }
  $firstSymbol = strtoupper($text[0]);
  $restSubstring = substr($text, 1);
  return "{$firstSymbol}{$restSubstring}";
}