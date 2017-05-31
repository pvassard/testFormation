<?php
class calc {
 
	static function sum($arg1, $arg2) {
		$res = $arg1 + $arg2;
		return $res;
	}
 
  /**
   *  Super commentaire trololo
   */
	static function minus($arg1, $arg2) {
		$res = $arg1 - $arg2;
		return $res;
	}
 
	static function multi($arg1, $arg2) {
		$res = $arg1 * $arg2;
		return $res;
	}
 
	static function divid($arg1, $arg2) {
		if ($arg2 == 0) return 'erreur';
		$res = $arg1 / $arg2;
		return $res;
	}
 
}
?>