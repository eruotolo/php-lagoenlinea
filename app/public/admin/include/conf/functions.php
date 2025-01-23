<?php
	function relativedate($secs) {
		$second = 1;
		$minute = 60;
		$hour = 60*60;
		$day = 60*60*24;
		$week = 60*60*24*7;
		$month = 60*60*24*7*30;
		$year = 60*60*24*7*30*365;
		
		if ($secs <= 0) { $output = "now";
		}elseif ($secs > $second && $secs < $minute) { $output = round($secs/$second)." lng_second";
		}elseif ($secs >= $minute && $secs < $hour) { $output = round($secs/$minute)." lng_minute";
		}elseif ($secs >= $hour && $secs < $day) { $output = round($secs/$hour)." lng_hour";
		}elseif ($secs >= $day && $secs < $week) { $output = round($secs/$day)." lng_day";
		}elseif ($secs >= $week && $secs < $month) { $output = round($secs/$week)." lng_week";
		}elseif ($secs >= $month && $secs < $year) { $output = round($secs/$month)." lng_month";
		}elseif ($secs >= $year && $secs < $year*10) { $output = round($secs/$year)." lng_year";
		}else{ $output = " more than a decade ago"; }
		
		if ($output <> "now"){
			$output = (substr($output,0,2)<>"1 ") ? $output."s" : $output;
		}
		return $output;
	}
	
	
	
	function dateDifftoNow($datevar) {
		$date1 = date("Y-m-d H:i:s");
		$date2 = $datevar;
		 
		//Convert them to timestamps.
		$date1Timestamp = strtotime($date1);
		$date2Timestamp = strtotime($date2);
		 
		//Calculate the difference.
		return $date1Timestamp - $date2Timestamp;		
	}
	
	function clean_field_to_db($var) {
		$aux = str_replace("'",'&#39;',$var);
		$aux = str_replace('"','&quot;',$aux);
		return $aux;
	}
	
	function other_user_avatar($rid) {
		if (file_exists("images/avatar/$rid.jpg")) {
			return "images/avatar/$rid.jpg?t=" . time();
		} else {
			return "images/avatar/noavatar.jpg";
		}			
	}
	
	function clean_quotes($text) {
		$text = str_replace('"', "\"", $text);
		$text = str_replace("'", "\'", $text);	
		return $text;
	}
?>