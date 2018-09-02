//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * convert iso8601 to GMT unixmicrotime, from "2017-10-16T10:36:17.31004+0000" to "1508150177310040"
 * \param[in] iso8601 time like 2017-10-16T10:36:17.31004+0000
 * \return result GMT unixmicrotime of false if error
 */
function libcore__iso8601_to_unixmicrotime($iso8601)
{
	$filter_list = [
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDD'                         ], // 20050809							9 августа 2005 года

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss'                  ], // 20050809T183142					9 августа 2005 года 18 часов 31 минута 42 секунды
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.u'                ], // 20050809T183142.1				9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uu'               ], // 20050809T183142.21				9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuu'              ], // 20050809T183142.321				9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuu'             ], // 20050809T183142.4321				9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuu'            ], // 20050809T183142.54321			9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu'           ], // 20050809T183142.654321			9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss+HH'               ], // 20050809T183142+03				9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.u+HH'             ], // 20050809T183142.1+03				9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uu+HH'            ], // 20050809T183142.21+03			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuu+HH'           ], // 20050809T183142.321+03			9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuu+HH'          ], // 20050809T183142.4321+03			9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuu+HH'         ], // 20050809T183142.54321+03			9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu+HH'        ], // 20050809T183142.654321+03		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss+HHQQ'             ], // 20050809T183142+0330				9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.u+HHQQ'           ], // 20050809T183142.1+0330			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uu+HHQQ'          ], // 20050809T183142.21+0330			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuu+HHQQ'         ], // 20050809T183142.321+0330			9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuu+HHQQ'        ], // 20050809T183142.4321+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuu+HHQQ'       ], // 20050809T183142.54321+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu+HHQQ'      ], // 20050809T183142.654321+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss+HH:QQ'            ], // 20050809T183142+03:30			9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.u+HH:QQ'          ], // 20050809T183142.1+03:30			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uu+HH:QQ'         ], // 20050809T183142.21+03:30			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuu+HH:QQ'        ], // 20050809T183142.321+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuu+HH:QQ'       ], // 20050809T183142.4321+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuu+HH:QQ'      ], // 20050809T183142.54321+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu+HH:QQ'     ], // 20050809T183142.654321+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss-HH'               ], // 20050809T183142-03				9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.u-HH'             ], // 20050809T183142.1-03				9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uu-HH'            ], // 20050809T183142.21-03			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuu-HH'           ], // 20050809T183142.321-03			9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuu-HH'          ], // 20050809T183142.4321-03			9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuuu-HH'         ], // 20050809T183142.54321-03			9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu-HH'        ], // 20050809T183142.654321-03		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss-HHQQ'             ], // 20050809T183142-0330				9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.u-HHQQ'           ], // 20050809T183142.1-0330			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uu-HHQQ'          ], // 20050809T183142.21-0330			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuu-HHQQ'         ], // 20050809T183142.321-0330			9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuu-HHQQ'        ], // 20050809T183142.4321-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuuu-HHQQ'       ], // 20050809T183142.54321-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu-HHQQ'      ], // 20050809T183142.654321-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss-HH:QQ'            ], // 20050809T183142-03:30			9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.u-HH:QQ'          ], // 20050809T183142.1-03:30			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uu-HH:QQ'         ], // 20050809T183142.21-03:30			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuu-HH:QQ'        ], // 20050809T183142.321-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuu-HH:QQ'       ], // 20050809T183142.4321-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuuu-HH:QQ'      ], // 20050809T183142.54321-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYYMMDDThhmmss.uuuuuu-HH:QQ'     ], // 20050809T183142.654321-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DD'                       ], // 2005-08-09						9 августа 2005 года

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss'              ], // 2005-08-09T18:31:42				9 августа 2005 года 18 часов 31 минута 42 секунды
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u'            ], // 2005-08-09T18:31:42.1			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu'           ], // 2005-08-09T18:31:42.21			9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu'          ], // 2005-08-09T18:31:42.321			9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu'         ], // 2005-08-09T18:31:42.4321			9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu'        ], // 2005-08-09T18:31:42.54321		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu'       ], // 2005-08-09T18:31:42.654321		9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss+HH'           ], // 2005-08-09T18:31:42+03			9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u+HH'         ], // 2005-08-09T18:31:42.1+03			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu+HH'        ], // 2005-08-09T18:31:42.21+03		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu+HH'       ], // 2005-08-09T18:31:42.321+03		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu+HH'      ], // 2005-08-09T18:31:42.4321+03		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu+HH'     ], // 2005-08-09T18:31:42.54321+03		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu+HH'    ], // 2005-08-09T18:31:42.654321+03	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss+HHQQ'         ], // 2005-08-09T18:31:42+0330			9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u+HHQQ'       ], // 2005-08-09T18:31:42.1+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu+HHQQ'      ], // 2005-08-09T18:31:42.21+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu+HHQQ'     ], // 2005-08-09T18:31:42.321+0330		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu+HHQQ'    ], // 2005-08-09T18:31:42.4321+0330	9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu+HHQQ'   ], // 2005-08-09T18:31:42.54321+0330	9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu+HHQQ'  ], // 2005-08-09T18:31:42.654321+0330	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss+HH:QQ'        ], // 2005-08-09T18:31:42+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u+HH:QQ'      ], // 2005-08-09T18:31:42.1+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu+HH:QQ'     ], // 2005-08-09T18:31:42.21+03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu+HH:QQ'    ], // 2005-08-09T18:31:42.321+03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu+HH:QQ'   ], // 2005-08-09T18:31:42.4321+03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu+HH:QQ'  ], // 2005-08-09T18:31:42.54321+03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC+03 часа 30 минут
		[ 'gmt_offset_sign'=> '+', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu+HH:QQ' ], // 2005-08-09T18:31:42.654321+03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC+03 часа 30 минут

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss-HH'           ], // 2005-08-09T18:31:42-03			9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u-HH'         ], // 2005-08-09T18:31:42.1-03			9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu-HH'        ], // 2005-08-09T18:31:42.21-03		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu-HH'       ], // 2005-08-09T18:31:42.321-03		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu-HH'      ], // 2005-08-09T18:31:42.4321-03		9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu-HH'     ], // 2005-08-09T18:31:42.54321-03		9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu-HH'    ], // 2005-08-09T18:31:42.654321-03	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss-HHQQ'         ], // 2005-08-09T18:31:42-0330			9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u-HHQQ'       ], // 2005-08-09T18:31:42.1-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu-HHQQ'      ], // 2005-08-09T18:31:42.21-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu-HHQQ'     ], // 2005-08-09T18:31:42.321-0330		9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu-HHQQ'    ], // 2005-08-09T18:31:42.4321-0330	9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu-HHQQ'   ], // 2005-08-09T18:31:42.54321-0330	9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu-HHQQ'  ], // 2005-08-09T18:31:42.654321-0330	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут

		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss-HH:QQ'        ], // 2005-08-09T18:31:42-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.u-HH:QQ'      ], // 2005-08-09T18:31:42.1-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 1 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uu-HH:QQ'     ], // 2005-08-09T18:31:42.21-03:30		9 августа 2005 года 18 часов 31 минута 42 секунды 21 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuu-HH:QQ'    ], // 2005-08-09T18:31:42.321-03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuu-HH:QQ'   ], // 2005-08-09T18:31:42.4321-03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 4321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuu-HH:QQ'  ], // 2005-08-09T18:31:42.54321-03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 54321 миллисекунда UTC-03 часа 30 минут
		[ 'gmt_offset_sign'=> '-', 'filter'=> 'YYYY-MM-DDThh:mm:ss.uuuuuu-HH:QQ' ], // 2005-08-09T18:31:42.654321-03:30	9 августа 2005 года 18 часов 31 минута 42 секунды 654321 миллисекунда UTC-03 часа 30 минут
	];
	$filter_list_size = count($filter_list);


	for ($i=0; $i < $filter_list_size; $i++)
	{
		$filter_list[$i]['flag_enable'] = true;
		$filter_list[$i]['out'] = [];
		$filter_list[$i]['out']['year'] = '';
		$filter_list[$i]['out']['month'] = '';
		$filter_list[$i]['out']['day'] = '';
		$filter_list[$i]['out']['hour'] = '';
		$filter_list[$i]['out']['min'] = '';
		$filter_list[$i]['out']['sec'] = '';
		$filter_list[$i]['out']['microsec'] = '';
		$filter_list[$i]['out']['gmt_offset_hour'] = '';
		$filter_list[$i]['out']['gmt_offset_min'] = '';
	}


	$iso8601_size = strlen($iso8601);

	$flag_found = false;
	for ($i=0; $i < $filter_list_size; $i++)
	{
		$filter_size = strlen($filter_list[$i]['filter']);

		if ($filter_size !== $iso8601_size)
		{
			$filter_list[$i]['flag_enable'] = false;
		}
		else
		{
			$flag_found = true;
		}
	}
	if ($flag_found === false)
	{
		return false;
	}


	for ($i=0; $i < $iso8601_size; $i++)
	{
		for ($j=0; $j < $filter_list_size; $j++)
		{
			if ($filter_list[$j]['flag_enable'] === false) continue;

			$ch = $filter_list[$j]['filter'][$i];
			settype($ch, "string");

			for (;;)
			{
				if
				(
					(strcmp($ch, "Y") === 0) ||
					(strcmp($ch, "M") === 0) ||
					(strcmp($ch, "D") === 0) ||
					(strcmp($ch, "h") === 0) ||
					(strcmp($ch, "m") === 0) ||
					(strcmp($ch, "s") === 0) ||
					(strcmp($ch, "u") === 0) ||
					(strcmp($ch, "H") === 0) ||
					(strcmp($ch, "Q") === 0)
				)
				{
					if (libcore__is_uint($iso8601[$i]) === false)
					{
						$filter_list[$j]['flag_enable'] = false;
						break;
					}
				}
				if (strcmp($ch, "Y") === 0)
				{
					$filter_list[$j]['out']['year'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "M") === 0)
				{
					$filter_list[$j]['out']['month'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "D") === 0)
				{
					$filter_list[$j]['out']['day'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "h") === 0)
				{
					$filter_list[$j]['out']['hour'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "m") === 0)
				{
					$filter_list[$j]['out']['min'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "s") === 0)
				{
					$filter_list[$j]['out']['sec'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "u") === 0)
				{
					$filter_list[$j]['out']['microsec'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "H") === 0)
				{
					$filter_list[$j]['out']['gmt_offset_hour'] .= $iso8601[$i];
					break;
				}
				if (strcmp($ch, "Q") === 0)
				{
					$filter_list[$j]['out']['gmt_offset_min'] .= $iso8601[$i];
					break;
				}
				if (strcmp($filter_list[$j]['filter'][$i], $iso8601[$i]) !== 0)
				{
					$filter_list[$j]['flag_enable'] = false;
					break;
				}
				break;
			}
		}
	}


	$count = 0;
	$index = -1;
	for ($i=0; $i < $filter_list_size; $i++)
	{
		if ($filter_list[$i]['flag_enable'] === false) continue;

		$index = $i;
		$count++;
	}
	if ($count === 0)
	{
		return false;
	}
	if ($count > 1)
	{
		return false;
	}


	$year            = $filter_list[$index]['out']['year'];
	$month           = $filter_list[$index]['out']['month'];
	$day             = $filter_list[$index]['out']['day'];
	$hour            = $filter_list[$index]['out']['hour'];
	$min             = $filter_list[$index]['out']['min'];
	$sec             = $filter_list[$index]['out']['sec'];
	$microsec        = $filter_list[$index]['out']['microsec'];
	$gmt_offset_sign = $filter_list[$index]['gmt_offset_sign'];
	$gmt_offset_hour = $filter_list[$index]['out']['gmt_offset_hour'];
	$gmt_offset_min  = $filter_list[$index]['out']['gmt_offset_min'];


	if (strcmp($year,            '') === 0) $year            = '0';
	if (strcmp($month,           '') === 0) $month           = '0';
	if (strcmp($day,             '') === 0) $day             = '0';
	if (strcmp($hour,            '') === 0) $hour            = '0';
	if (strcmp($min,             '') === 0) $min             = '0';
	if (strcmp($sec,             '') === 0) $sec             = '0';
	if (strcmp($microsec,        '') === 0) $microsec        = '0';
	if (strcmp($gmt_offset_hour, '') === 0) $gmt_offset_hour = '0';
	if (strcmp($gmt_offset_min,  '') === 0) $gmt_offset_min  = '0';

/*
	echo "iso8601:".$iso8601."\n";
	echo "year:".$year."\n";
	echo "month:".$month."\n";
	echo "day:".$day."\n";
	echo "hour:".$hour."\n";
	echo "min:".$min."\n";
	echo "sec:".$sec."\n";
	echo "microsec:".$microsec."\n";
	echo "gmt_offset_hour:".$gmt_offset_hour."\n";
	echo "gmt_offset_min:".$gmt_offset_min."\n";
*/

	$unixtime = gmmktime ($hour, $min, $sec, $month, $day, $year);


	$gmt_offset = ($gmt_offset_hour * 60 * 60) + ($gmt_offset_min * 60);


	if (strcmp($gmt_offset_sign, '+') === 0)
	{
		$unixtime = $unixtime - $gmt_offset;
	}
	else
	{
		$unixtime = $unixtime + $gmt_offset;
	}

	$unixmicrotime = ($unixtime * 1000000) + $microsec;


	for (;;)
	{
		if (strlen($unixmicrotime) === 16) break;

		$unixmicrotime = "0".$unixmicrotime;
	}


	return $unixmicrotime;
}
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
