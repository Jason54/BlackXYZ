<?php

declare(strict_types=1);

namespace BlackXYZ;

class Utils{

	public static function getCompassDirection(float $deg) : string{
		$deg %= 360;
		if($deg < 0){
			$deg += 360;
		}

		if(22.5 <= $deg and $deg < 67.5){
			return "Nord-Ouest";
		}elseif(67.5 <= $deg and $deg < 112.5){
			return "Nord";
		}elseif(112.5 <= $deg and $deg < 157.5){
			return "Nord-Est";
		}elseif(157.5 <= $deg and $deg < 202.5){
			return "Est";
		}elseif(202.5 <= $deg and $deg < 247.5){
			return "Sud-Est";
		}elseif(247.5 <= $deg and $deg < 292.5){
			return "Sud";
		}elseif(292.5 <= $deg and $deg < 337.5){
			return "Sud-Ouest";
		}else{
			return "Ouest";
		}
	}

	public static function getFormattedCoords(int $precision, float ...$coords) : string{
		foreach($coords as &$c){
			$c = number_format($c, $precision, ".", ",");
		}

		return implode(", ", $coords);
	}

}
