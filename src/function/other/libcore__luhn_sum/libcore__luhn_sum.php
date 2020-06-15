//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * make luhn sum
 * \param[in] str num string
 * \return num string with luhn sum
 */
function libcore__luhn_sum($str)
{
	$result = new result_t(__FUNCTION__, __FILE__);


	settype($str, "string");


	if (libcore__is_uint($str) === false)
	{
		$result->set_err(1, 'invalid argument');
		return $result;
	}


	$val = $str."0";
	$val_size = strlen($val);
	$flag_parity_str = libcore__is_parity($val_size);


	$sum = 0;
	for ($i=0; $i < $val_size; $i++)
	{
		$ch = $val[$i] - '0';
//echo "ch: ".$ch."\n";


		$flag_parity_idx = libcore__is_parity($i);
//echo "flag_parity_idx: ".print_r($flag_parity_idx, true)."\n";
//echo "flag_parity_idx: ".$flag_parity_idx."\n";

		if ($flag_parity_str === $flag_parity_idx)
		{
			$tmp = $ch * 2;
			if ($tmp > 9)
			{
				$sum += ($tmp - 9);
//echo "1+: ".($tmp - 9)."\n";
			}
			else
			{
				$sum += $tmp;
//echo "2+: ".($tmp)."\n";
			}
		}
		else
		{
			$sum += $ch;
//echo "3+: ".($ch)."\n";
		}
	}
//echo "sum: ".$sum."\n";


//	$luhn_sum = "0";
	if (intval(floor($sum / 10) * 10) === $sum)
	{
		$result->set_ok();
		$result->set_value($val);
		return $result;
	}


	$luhn_sum = ((intval(floor($sum / 10)) + 1) * 10) - $sum;


	$result->set_ok();
	$result->set_value($str.$luhn_sum);
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
