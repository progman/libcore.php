//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert string for json string
 * \param[in] in input string
 * \return json string
 */
function libcore__tojson($in)
{
// http://json.org
// \u0022 - " - Unicode Character 'QUOTATION MARK' (U+0022)
// \u005c - \ - Unicode Character 'REVERSE SOLIDUS' (U+005C)
// \u002f - / - Unicode Character 'SOLIDUS' (U+002F) /
// \u0008 - b - backspace - Unicode Character 'BACKSPACE' (U+0008)
// \u000c - f - formfeed - Unicode Character 'FORM FEED (FF)' (U+000C)
// \u000a - \n newline - 'LINE FEED (LF)' (U+000A)
// \u000d - \r carriage return - 'CARRIAGE RETURN (CR)' (U+000D)
// \u0009 - \t horizontal tab - Unicode Character 'CHARACTER TABULATION' (U+0009)

	static $libcore__tojson_table = array
	(
//		0x00   0x01   0x02   0x03   0x04   0x05   0x06   0x07   0x08   0x09   0x0A   0x0B   0x0C    0x0D   0x0E   0x0F
		null,  null,  null,  null,  null,  null,  null,  null,  '\b',  '\t',  '\n',  null,  '\f',   '\r',  null,  null, // 0x00
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0x10
		null,  null,  '\"',  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  '\/', // 0x20
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0x30
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0x40
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  "\\\\", null,  null,  null, // 0x50
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0x60
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0x70
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0x80
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0x90
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0xA0
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0xB0
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0xC0
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0xD0
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null, // 0xE0
		null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,  null,   null,  null,  null  // 0xF0
	);

	$out = "";
	settype($in, "string");

	$size = strlen($in);
	if ($size === 0) return $out;

	for ($i=0; $i < $size; ++$i)
	{
		$ch = $in[$i];

		$x = $libcore__tojson_table[ord($ch)];
		if ($x !== null)
		{
			$out .= $x;
		}
		else
		{
			$out .= $ch;
		}
	}

	return $out;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
