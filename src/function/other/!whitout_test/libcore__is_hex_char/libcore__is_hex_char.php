//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * check hex char
 * \param[in] val source value
 * \return hex char flag
 */
function libcore__is_hex_char($val)
{
	static $libcore__hex2bin_table = array
	(
//	0x00  0x01  0x02  0x03  0x04  0x05  0x06  0x07  0x08  0x09  0x0A  0x0B  0x0C  0x0D  0x0E  0x0F
		null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0x00
		null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0x10
		null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0x20
		0x00, 0x01, 0x02, 0x03, 0x04, 0x05, 0x06, 0x07, 0x08, 0x09, null, null, null, null, null, null, // 0x30
		null, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f, null, null, null, null, null, null, null, null, null, // 0x40
		null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0x50
		null, 0x0a, 0x0b, 0x0c, 0x0d, 0x0e, 0x0f, null, null, null, null, null, null, null, null, null, // 0x60
		null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0x70
		null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0x80
		null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0x90
		null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0xA0
		null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0xB0
		null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0xC0
		null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0xD0
		null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, // 0xE0
		null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null  // 0xF0
	);


	if (strcmp(gettype($val), 'integer') !== 0)
	{
		return false;
	}


	if
	(
		($val < 0) ||
		($val > 255)
	)
	{
		return false;
	}


	if ($libcore__hex2bin_table[$val] !== null) return true;


	return false;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
