//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
/**
 * search currency info (see ISO 4217)
 * \param[in] code of currency like 'RUB'
 * \param[in] num  of currency like '643'
 * \return result
 */
function libcore__currency_iso4217($code = null, $num = null)
{
	$result = new result_t(__FUNCTION__, __FILE__);

	$currency_iso4217 =
	[
		(object)[ 'code'=> "AED", 'num'=> "784", 'digits'=> 2, 'currency'=> "United Arab Emirates dirham",                                  'country'=> "United Arab Emirates" ],
		(object)[ 'code'=> "AFN", 'num'=> "971", 'digits'=> 2, 'currency'=> "Afghan afghani",                                               'country'=> "Afghanistan" ],
		(object)[ 'code'=> "ALL", 'num'=> "008", 'digits'=> 2, 'currency'=> "Albanian lek",                                                 'country'=> "Albania" ],
		(object)[ 'code'=> "AMD", 'num'=> "051", 'digits'=> 2, 'currency'=> "Armenian dram",                                                'country'=> "Armenia" ],
		(object)[ 'code'=> "ANG", 'num'=> "532", 'digits'=> 2, 'currency'=> "Netherlands Antillean guilder",                                'country'=> "Curaçao (CW),  Sint Maarten (SX)" ],
		(object)[ 'code'=> "AOA", 'num'=> "973", 'digits'=> 2, 'currency'=> "Angolan kwanza",                                               'country'=> "Angola" ],
		(object)[ 'code'=> "ARS", 'num'=> "032", 'digits'=> 2, 'currency'=> "Argentine peso",                                               'country'=> "Argentina" ],
		(object)[ 'code'=> "AUD", 'num'=> "036", 'digits'=> 2, 'currency'=> "Australian dollar",                                            'country'=> "Australia,  Christmas Island (CX),  Cocos (Keeling) Islands (CC),  Heard Island and McDonald Islands (HM),  Kiribati (KI),  Nauru (NR),  Norfolk Island (NF),  Tuvalu (TV)" ],
		(object)[ 'code'=> "AWG", 'num'=> "533", 'digits'=> 2, 'currency'=> "Aruban florin",                                                'country'=> "Aruba" ],
		(object)[ 'code'=> "AZN", 'num'=> "944", 'digits'=> 2, 'currency'=> "Azerbaijani manat",                                            'country'=> "Azerbaijan" ],
		(object)[ 'code'=> "BAM", 'num'=> "977", 'digits'=> 2, 'currency'=> "Bosnia and Herzegovina convertible mark",                      'country'=> "Bosnia and Herzegovina" ],
		(object)[ 'code'=> "BBD", 'num'=> "052", 'digits'=> 2, 'currency'=> "Barbados dollar",                                              'country'=> "Barbados" ],
		(object)[ 'code'=> "BDT", 'num'=> "050", 'digits'=> 2, 'currency'=> "Bangladeshi taka",                                             'country'=> "Bangladesh" ],
		(object)[ 'code'=> "BGN", 'num'=> "975", 'digits'=> 2, 'currency'=> "Bulgarian lev",                                                'country'=> "Bulgaria" ],
		(object)[ 'code'=> "BHD", 'num'=> "048", 'digits'=> 3, 'currency'=> "Bahraini dinar",                                               'country'=> "Bahrain" ],
		(object)[ 'code'=> "BIF", 'num'=> "108", 'digits'=> 0, 'currency'=> "Burundian franc",                                              'country'=> "Burundi" ],
		(object)[ 'code'=> "BMD", 'num'=> "060", 'digits'=> 2, 'currency'=> "Bermudian dollar",                                             'country'=> "Bermuda" ],
		(object)[ 'code'=> "BND", 'num'=> "096", 'digits'=> 2, 'currency'=> "Brunei dollar",                                                'country'=> "Brunei" ],
		(object)[ 'code'=> "BOB", 'num'=> "068", 'digits'=> 2, 'currency'=> "Boliviano",                                                    'country'=> "Bolivia" ],
		(object)[ 'code'=> "BOV", 'num'=> "984", 'digits'=> 2, 'currency'=> "Bolivian Mvdol (funds code)",                                  'country'=> "Bolivia" ],
		(object)[ 'code'=> "BRL", 'num'=> "986", 'digits'=> 2, 'currency'=> "Brazilian real",                                               'country'=> "Brazil" ],
		(object)[ 'code'=> "BSD", 'num'=> "044", 'digits'=> 2, 'currency'=> "Bahamian dollar",                                              'country'=> "Bahamas" ],
		(object)[ 'code'=> "BTN", 'num'=> "064", 'digits'=> 2, 'currency'=> "Bhutanese ngultrum",                                           'country'=> "Bhutan" ],
		(object)[ 'code'=> "BWP", 'num'=> "072", 'digits'=> 2, 'currency'=> "Botswana pula",                                                'country'=> "Botswana" ],
		(object)[ 'code'=> "BYN", 'num'=> "933", 'digits'=> 2, 'currency'=> "Belarusian ruble",                                             'country'=> "Belarus" ],
		(object)[ 'code'=> "BZD", 'num'=> "084", 'digits'=> 2, 'currency'=> "Belize dollar",                                                'country'=> "Belize" ],
		(object)[ 'code'=> "CAD", 'num'=> "124", 'digits'=> 2, 'currency'=> "Canadian dollar",                                              'country'=> "Canada" ],
		(object)[ 'code'=> "CDF", 'num'=> "976", 'digits'=> 2, 'currency'=> "Congolese franc",                                              'country'=> "Democratic Republic of the Congo" ],
		(object)[ 'code'=> "CHE", 'num'=> "947", 'digits'=> 2, 'currency'=> "WIR euro (complementary currency)",                            'country'=> "Switzerland" ],
		(object)[ 'code'=> "CHF", 'num'=> "756", 'digits'=> 2, 'currency'=> "Swiss franc",                                                  'country'=> "Switzerland,  Liechtenstein (LI)" ],
		(object)[ 'code'=> "CHW", 'num'=> "948", 'digits'=> 2, 'currency'=> "WIR franc (complementary currency)",                           'country'=> "Switzerland" ],
		(object)[ 'code'=> "CLF", 'num'=> "990", 'digits'=> 4, 'currency'=> "Unidad de Fomento (funds code)",                               'country'=> "Chile" ],
		(object)[ 'code'=> "CLP", 'num'=> "152", 'digits'=> 0, 'currency'=> "Chilean peso",                                                 'country'=> "Chile" ],
		(object)[ 'code'=> "CNY", 'num'=> "156", 'digits'=> 2, 'currency'=> "Chinese yuan",                                                 'country'=> "China" ],
		(object)[ 'code'=> "COP", 'num'=> "170", 'digits'=> 2, 'currency'=> "Colombian peso",                                               'country'=> "Colombia" ],
		(object)[ 'code'=> "COU", 'num'=> "970", 'digits'=> 2, 'currency'=> "Unidad de Valor Real (UVR) (funds code)",                      'country'=> "Colombia" ],
		(object)[ 'code'=> "CRC", 'num'=> "188", 'digits'=> 2, 'currency'=> "Costa Rican colon",                                            'country'=> "Costa Rica" ],
		(object)[ 'code'=> "CUC", 'num'=> "931", 'digits'=> 2, 'currency'=> "Cuban convertible peso",                                       'country'=> "Cuba" ],
		(object)[ 'code'=> "CUP", 'num'=> "192", 'digits'=> 2, 'currency'=> "Cuban peso",                                                   'country'=> "Cuba" ],
		(object)[ 'code'=> "CVE", 'num'=> "132", 'digits'=> 2, 'currency'=> "Cape Verdean escudo",                                          'country'=> "Cabo Verde" ],
		(object)[ 'code'=> "CZK", 'num'=> "203", 'digits'=> 2, 'currency'=> "Czech koruna",                                                 'country'=> "Czechia" ],
		(object)[ 'code'=> "DJF", 'num'=> "262", 'digits'=> 0, 'currency'=> "Djiboutian franc",                                             'country'=> "Djibouti" ],
		(object)[ 'code'=> "DKK", 'num'=> "208", 'digits'=> 2, 'currency'=> "Danish krone",                                                 'country'=> "Denmark,  Faroe Islands (FO),  Greenland (GL)" ],
		(object)[ 'code'=> "DOP", 'num'=> "214", 'digits'=> 2, 'currency'=> "Dominican peso",                                               'country'=> "Dominican Republic" ],
		(object)[ 'code'=> "DZD", 'num'=> "012", 'digits'=> 2, 'currency'=> "Algerian dinar",                                               'country'=> "Algeria" ],
		(object)[ 'code'=> "EGP", 'num'=> "818", 'digits'=> 2, 'currency'=> "Egyptian pound",                                               'country'=> "Egypt" ],
		(object)[ 'code'=> "ERN", 'num'=> "232", 'digits'=> 2, 'currency'=> "Eritrean nakfa",                                               'country'=> "Eritrea" ],
		(object)[ 'code'=> "ETB", 'num'=> "230", 'digits'=> 2, 'currency'=> "Ethiopian birr",                                               'country'=> "Ethiopia" ],
		(object)[ 'code'=> "EUR", 'num'=> "978", 'digits'=> 2, 'currency'=> "Euro",                                                         'country'=> "Åland Islands (AX),  European Union (EU),  Andorra (AD),  Austria (AT),  Belgium (BE),  Cyprus (CY),  Estonia (EE),  Finland (FI),  France (FR),  French Southern and Antarctic Lands (TF),  Germany (DE),  Greece (GR),  Guadeloupe (GP),  Ireland (IE),  Italy (IT),  Latvia (LV),  Lithuania (LT),  Luxembourg (LU),  Malta (MT),  French Guiana (GF),  Martinique (MQ),  Mayotte (YT),  Monaco (MC),  Montenegro (ME),  Netherlands (NL),  Portugal (PT),  Réunion (RE),  Saint Barthélemy (BL),  Saint Martin (MF),  Saint Pierre and Miquelon (PM),  San Marino (SM),  Slovakia (SK),  Slovenia (SI),  Spain (ES),   Vatican City (VA)" ],
		(object)[ 'code'=> "FJD", 'num'=> "242", 'digits'=> 2, 'currency'=> "Fiji dollar",                                                  'country'=> "Fiji" ],
		(object)[ 'code'=> "FKP", 'num'=> "238", 'digits'=> 2, 'currency'=> "Falkland Islands pound",                                       'country'=> "Falkland Islands (pegged to GBP 1:1)" ],
		(object)[ 'code'=> "GBP", 'num'=> "826", 'digits'=> 2, 'currency'=> "Pound sterling",                                               'country'=> "United Kingdom,  Isle of Man (IM, see Manx pound),  Jersey (JE, see Jersey pound),  Guernsey (GG, see Guernsey pound),  Tristan da Cunha (SH-TA)" ],
		(object)[ 'code'=> "GEL", 'num'=> "981", 'digits'=> 2, 'currency'=> "Georgian lari",                                                'country'=> "Georgia" ],
		(object)[ 'code'=> "GHS", 'num'=> "936", 'digits'=> 2, 'currency'=> "Ghanaian cedi",                                                'country'=> "Ghana" ],
		(object)[ 'code'=> "GIP", 'num'=> "292", 'digits'=> 2, 'currency'=> "Gibraltar pound",                                              'country'=> "Gibraltar (pegged to GBP 1:1)" ],
		(object)[ 'code'=> "GMD", 'num'=> "270", 'digits'=> 2, 'currency'=> "Gambian dalasi",                                               'country'=> "Gambia" ],
		(object)[ 'code'=> "GNF", 'num'=> "324", 'digits'=> 0, 'currency'=> "Guinean franc",                                                'country'=> "Guinea" ],
		(object)[ 'code'=> "GTQ", 'num'=> "320", 'digits'=> 2, 'currency'=> "Guatemalan quetzal",                                           'country'=> "Guatemala" ],
		(object)[ 'code'=> "GYD", 'num'=> "328", 'digits'=> 2, 'currency'=> "Guyanese dollar",                                              'country'=> "Guyana" ],
		(object)[ 'code'=> "HKD", 'num'=> "344", 'digits'=> 2, 'currency'=> "Hong Kong dollar",                                             'country'=> "Hong Kong" ],
		(object)[ 'code'=> "HNL", 'num'=> "340", 'digits'=> 2, 'currency'=> "Honduran lempira",                                             'country'=> "Honduras" ],
		(object)[ 'code'=> "HRK", 'num'=> "191", 'digits'=> 2, 'currency'=> "Croatian kuna",                                                'country'=> "Croatia" ],
		(object)[ 'code'=> "HTG", 'num'=> "332", 'digits'=> 2, 'currency'=> "Haitian gourde",                                               'country'=> "Haiti" ],
		(object)[ 'code'=> "HUF", 'num'=> "348", 'digits'=> 2, 'currency'=> "Hungarian forint",                                             'country'=> "Hungary" ],
		(object)[ 'code'=> "IDR", 'num'=> "360", 'digits'=> 2, 'currency'=> "Indonesian rupiah",                                            'country'=> "Indonesia" ],
		(object)[ 'code'=> "ILS", 'num'=> "376", 'digits'=> 2, 'currency'=> "Israeli new shekel",                                           'country'=> "Israel" ],
		(object)[ 'code'=> "INR", 'num'=> "356", 'digits'=> 2, 'currency'=> "Indian rupee",                                                 'country'=> "India,  Bhutan" ],
		(object)[ 'code'=> "IQD", 'num'=> "368", 'digits'=> 3, 'currency'=> "Iraqi dinar",                                                  'country'=> "Iraq" ],
		(object)[ 'code'=> "IRR", 'num'=> "364", 'digits'=> 2, 'currency'=> "Iranian rial",                                                 'country'=> "Iran" ],
		(object)[ 'code'=> "ISK", 'num'=> "352", 'digits'=> 0, 'currency'=> "Icelandic króna",                                              'country'=> "Iceland" ],
		(object)[ 'code'=> "JMD", 'num'=> "388", 'digits'=> 2, 'currency'=> "Jamaican dollar",                                              'country'=> "Jamaica" ],
		(object)[ 'code'=> "JOD", 'num'=> "400", 'digits'=> 3, 'currency'=> "Jordanian dinar",                                              'country'=> "Jordan" ],
		(object)[ 'code'=> "JPY", 'num'=> "392", 'digits'=> 0, 'currency'=> "Japanese yen",                                                 'country'=> "Japan" ],
		(object)[ 'code'=> "KES", 'num'=> "404", 'digits'=> 2, 'currency'=> "Kenyan shilling",                                              'country'=> "Kenya" ],
		(object)[ 'code'=> "KGS", 'num'=> "417", 'digits'=> 2, 'currency'=> "Kyrgyzstani som",                                              'country'=> "Kyrgyzstan" ],
		(object)[ 'code'=> "KHR", 'num'=> "116", 'digits'=> 2, 'currency'=> "Cambodian riel",                                               'country'=> "Cambodia" ],
		(object)[ 'code'=> "KMF", 'num'=> "174", 'digits'=> 0, 'currency'=> "Comoro franc",                                                 'country'=> "Comoros" ],
		(object)[ 'code'=> "KPW", 'num'=> "408", 'digits'=> 2, 'currency'=> "North Korean won",                                             'country'=> "North Korea" ],
		(object)[ 'code'=> "KRW", 'num'=> "410", 'digits'=> 0, 'currency'=> "South Korean won",                                             'country'=> "South Korea" ],
		(object)[ 'code'=> "KWD", 'num'=> "414", 'digits'=> 3, 'currency'=> "Kuwaiti dinar",                                                'country'=> "Kuwait" ],
		(object)[ 'code'=> "KYD", 'num'=> "136", 'digits'=> 2, 'currency'=> "Cayman Islands dollar",                                        'country'=> "Cayman Islands" ],
		(object)[ 'code'=> "KZT", 'num'=> "398", 'digits'=> 2, 'currency'=> "Kazakhstani tenge",                                            'country'=> "Kazakhstan" ],
		(object)[ 'code'=> "LAK", 'num'=> "418", 'digits'=> 2, 'currency'=> "Lao kip",                                                      'country'=> "Laos" ],
		(object)[ 'code'=> "LBP", 'num'=> "422", 'digits'=> 2, 'currency'=> "Lebanese pound",                                               'country'=> "Lebanon" ],
		(object)[ 'code'=> "LKR", 'num'=> "144", 'digits'=> 2, 'currency'=> "Sri Lankan rupee",                                             'country'=> "Sri Lanka" ],
		(object)[ 'code'=> "LRD", 'num'=> "430", 'digits'=> 2, 'currency'=> "Liberian dollar",                                              'country'=> "Liberia" ],
		(object)[ 'code'=> "LSL", 'num'=> "426", 'digits'=> 2, 'currency'=> "Lesotho loti",                                                 'country'=> "Lesotho" ],
		(object)[ 'code'=> "LYD", 'num'=> "434", 'digits'=> 3, 'currency'=> "Libyan dinar",                                                 'country'=> "Libya" ],
		(object)[ 'code'=> "MAD", 'num'=> "504", 'digits'=> 2, 'currency'=> "Moroccan dirham",                                              'country'=> "Morocco,  Western Sahara" ],
		(object)[ 'code'=> "MDL", 'num'=> "498", 'digits'=> 2, 'currency'=> "Moldovan leu",                                                 'country'=> "Moldova" ],
		(object)[ 'code'=> "MGA", 'num'=> "969", 'digits'=> 2, 'currency'=> "Malagasy ariary",                                              'country'=> "Madagascar" ],
		(object)[ 'code'=> "MKD", 'num'=> "807", 'digits'=> 2, 'currency'=> "Macedonian denar",                                             'country'=> "North Macedonia" ],
		(object)[ 'code'=> "MMK", 'num'=> "104", 'digits'=> 2, 'currency'=> "Myanmar kyat",                                                 'country'=> "Myanmar" ],
		(object)[ 'code'=> "MNT", 'num'=> "496", 'digits'=> 2, 'currency'=> "Mongolian tögrög",                                             'country'=> "Mongolia" ],
		(object)[ 'code'=> "MOP", 'num'=> "446", 'digits'=> 2, 'currency'=> "Macanese pataca",                                              'country'=> "Macau" ],
		(object)[ 'code'=> "MRU", 'num'=> "929", 'digits'=> 2, 'currency'=> "Mauritanian ouguiya",                                          'country'=> "Mauritania" ],
		(object)[ 'code'=> "MUR", 'num'=> "480", 'digits'=> 2, 'currency'=> "Mauritian rupee",                                              'country'=> "Mauritius" ],
		(object)[ 'code'=> "MVR", 'num'=> "462", 'digits'=> 2, 'currency'=> "Maldivian rufiyaa",                                            'country'=> "Maldives" ],
		(object)[ 'code'=> "MWK", 'num'=> "454", 'digits'=> 2, 'currency'=> "Malawian kwacha",                                              'country'=> "Malawi" ],
		(object)[ 'code'=> "MXN", 'num'=> "484", 'digits'=> 2, 'currency'=> "Mexican peso",                                                 'country'=> "Mexico" ],
		(object)[ 'code'=> "MXV", 'num'=> "979", 'digits'=> 2, 'currency'=> "Mexican Unidad de Inversion (UDI) (funds code)",               'country'=> "Mexico" ],
		(object)[ 'code'=> "MYR", 'num'=> "458", 'digits'=> 2, 'currency'=> "Malaysian ringgit",                                            'country'=> "Malaysia" ],
		(object)[ 'code'=> "MZN", 'num'=> "943", 'digits'=> 2, 'currency'=> "Mozambican metical",                                           'country'=> "Mozambique" ],
		(object)[ 'code'=> "NAD", 'num'=> "516", 'digits'=> 2, 'currency'=> "Namibian dollar",                                              'country'=> "Namibia" ],
		(object)[ 'code'=> "NGN", 'num'=> "566", 'digits'=> 2, 'currency'=> "Nigerian naira",                                               'country'=> "Nigeria" ],
		(object)[ 'code'=> "NIO", 'num'=> "558", 'digits'=> 2, 'currency'=> "Nicaraguan córdoba",                                           'country'=> "Nicaragua" ],
		(object)[ 'code'=> "NOK", 'num'=> "578", 'digits'=> 2, 'currency'=> "Norwegian krone",                                              'country'=> "Norway,  Svalbard and  Jan Mayen (SJ),  Bouvet Island (BV)" ],
		(object)[ 'code'=> "NPR", 'num'=> "524", 'digits'=> 2, 'currency'=> "Nepalese rupee",                                               'country'=> "Nepal" ],
		(object)[ 'code'=> "NZD", 'num'=> "554", 'digits'=> 2, 'currency'=> "New Zealand dollar",                                           'country'=> "New Zealand,  Cook Islands (CK),  Niue (NU),  Pitcairn Islands (PN; see also Pitcairn Islands dollar),  Tokelau (TK)" ],
		(object)[ 'code'=> "OMR", 'num'=> "512", 'digits'=> 3, 'currency'=> "Omani rial",                                                   'country'=> "Oman" ],
		(object)[ 'code'=> "PAB", 'num'=> "590", 'digits'=> 2, 'currency'=> "Panamanian balboa",                                            'country'=> "Panama" ],
		(object)[ 'code'=> "PEN", 'num'=> "604", 'digits'=> 2, 'currency'=> "Peruvian sol",                                                 'country'=> "Peru" ],
		(object)[ 'code'=> "PGK", 'num'=> "598", 'digits'=> 2, 'currency'=> "Papua New Guinean kina",                                       'country'=> "Papua New Guinea" ],
		(object)[ 'code'=> "PHP", 'num'=> "608", 'digits'=> 2, 'currency'=> "Philippine peso",                                              'country'=> "Philippines" ],
		(object)[ 'code'=> "PKR", 'num'=> "586", 'digits'=> 2, 'currency'=> "Pakistani rupee",                                              'country'=> "Pakistan" ],
		(object)[ 'code'=> "PLN", 'num'=> "985", 'digits'=> 2, 'currency'=> "Polish złoty",                                                 'country'=> "Poland" ],
		(object)[ 'code'=> "PYG", 'num'=> "600", 'digits'=> 0, 'currency'=> "Paraguayan guaraní",                                           'country'=> "Paraguay" ],
		(object)[ 'code'=> "QAR", 'num'=> "634", 'digits'=> 2, 'currency'=> "Qatari riyal",                                                 'country'=> "Qatar" ],
		(object)[ 'code'=> "RON", 'num'=> "946", 'digits'=> 2, 'currency'=> "Romanian leu",                                                 'country'=> "Romania" ],
		(object)[ 'code'=> "RSD", 'num'=> "941", 'digits'=> 2, 'currency'=> "Serbian dinar",                                                'country'=> "Serbia" ],
		(object)[ 'code'=> "RUB", 'num'=> "643", 'digits'=> 2, 'currency'=> "Russian ruble",                                                'country'=> "Russia" ],
		(object)[ 'code'=> "RWF", 'num'=> "646", 'digits'=> 0, 'currency'=> "Rwandan franc",                                                'country'=> "Rwanda" ],
		(object)[ 'code'=> "SAR", 'num'=> "682", 'digits'=> 2, 'currency'=> "Saudi riyal",                                                  'country'=> "Saudi Arabia" ],
		(object)[ 'code'=> "SBD", 'num'=> "090", 'digits'=> 2, 'currency'=> "Solomon Islands dollar",                                       'country'=> "Solomon Islands" ],
		(object)[ 'code'=> "SCR", 'num'=> "690", 'digits'=> 2, 'currency'=> "Seychelles rupee",                                             'country'=> "Seychelles" ],
		(object)[ 'code'=> "SDG", 'num'=> "938", 'digits'=> 2, 'currency'=> "Sudanese pound",                                               'country'=> "Sudan" ],
		(object)[ 'code'=> "SEK", 'num'=> "752", 'digits'=> 2, 'currency'=> "Swedish krona/kronor",                                         'country'=> "Sweden" ],
		(object)[ 'code'=> "SGD", 'num'=> "702", 'digits'=> 2, 'currency'=> "Singapore dollar",                                             'country'=> "Singapore" ],
		(object)[ 'code'=> "SHP", 'num'=> "654", 'digits'=> 2, 'currency'=> "Saint Helena pound",                                           'country'=> "Saint Helena (SH-SH),  Ascension Island (SH-AC)" ],
		(object)[ 'code'=> "SLL", 'num'=> "694", 'digits'=> 2, 'currency'=> "Sierra Leonean leone",                                         'country'=> "Sierra Leone" ],
		(object)[ 'code'=> "SOS", 'num'=> "706", 'digits'=> 2, 'currency'=> "Somali shilling",                                              'country'=> "Somalia" ],
		(object)[ 'code'=> "SRD", 'num'=> "968", 'digits'=> 2, 'currency'=> "Surinamese dollar",                                            'country'=> "Suriname" ],
		(object)[ 'code'=> "SSP", 'num'=> "728", 'digits'=> 2, 'currency'=> "South Sudanese pound",                                         'country'=> "South Sudan" ],
		(object)[ 'code'=> "STN", 'num'=> "930", 'digits'=> 2, 'currency'=> "São Tomé and Príncipe dobra",                                  'country'=> "São Tomé and Príncipe" ],
		(object)[ 'code'=> "SVC", 'num'=> "222", 'digits'=> 2, 'currency'=> "Salvadoran colón",                                             'country'=> "El Salvador" ],
		(object)[ 'code'=> "SYP", 'num'=> "760", 'digits'=> 2, 'currency'=> "Syrian pound",                                                 'country'=> "Syria" ],
		(object)[ 'code'=> "SZL", 'num'=> "748", 'digits'=> 2, 'currency'=> "Swazi lilangeni",                                              'country'=> "Eswatini" ],
		(object)[ 'code'=> "THB", 'num'=> "764", 'digits'=> 2, 'currency'=> "Thai baht",                                                    'country'=> "Thailand" ],
		(object)[ 'code'=> "TJS", 'num'=> "972", 'digits'=> 2, 'currency'=> "Tajikistani somoni",                                           'country'=> "Tajikistan" ],
		(object)[ 'code'=> "TMT", 'num'=> "934", 'digits'=> 2, 'currency'=> "Turkmenistan manat",                                           'country'=> "Turkmenistan" ],
		(object)[ 'code'=> "TND", 'num'=> "788", 'digits'=> 3, 'currency'=> "Tunisian dinar",                                               'country'=> "Tunisia" ],
		(object)[ 'code'=> "TOP", 'num'=> "776", 'digits'=> 2, 'currency'=> "Tongan paʻanga",                                               'country'=> "Tonga" ],
		(object)[ 'code'=> "TRY", 'num'=> "949", 'digits'=> 2, 'currency'=> "Turkish lira",                                                 'country'=> "Turkey" ],
		(object)[ 'code'=> "TTD", 'num'=> "780", 'digits'=> 2, 'currency'=> "Trinidad and Tobago dollar",                                   'country'=> "Trinidad and Tobago" ],
		(object)[ 'code'=> "TWD", 'num'=> "901", 'digits'=> 2, 'currency'=> "New Taiwan dollar",                                            'country'=> "Taiwan" ],
		(object)[ 'code'=> "TZS", 'num'=> "834", 'digits'=> 2, 'currency'=> "Tanzanian shilling",                                           'country'=> "Tanzania" ],
		(object)[ 'code'=> "UAH", 'num'=> "980", 'digits'=> 2, 'currency'=> "Ukrainian hryvnia",                                            'country'=> "Ukraine" ],
		(object)[ 'code'=> "UGX", 'num'=> "800", 'digits'=> 0, 'currency'=> "Ugandan shilling",                                             'country'=> "Uganda" ],
		(object)[ 'code'=> "USD", 'num'=> "840", 'digits'=> 2, 'currency'=> "United States dollar",                                         'country'=> "United States,  American Samoa (AS),  British Indian Ocean Territory (IO) (also uses GBP),  British Virgin Islands (VG),  Caribbean Netherlands (BQ – Bonaire, Sint Eustatius and Saba),  Ecuador (EC),  El Salvador (SV),  Guam (GU),  Haiti (HT),  Marshall Islands (MH),  Federated States of Micronesia (FM),  Northern Mariana Islands (MP),  Palau (PW),  Panama (PA) (as well as Panamanian Balboa),  Puerto Rico (PR),  Timor-Leste (TL),  Turks and Caicos Islands (TC),  U.S. Virgin Islands (VI),  United States Minor Outlying Islands (UM)" ],
		(object)[ 'code'=> "USN", 'num'=> "997", 'digits'=> 2, 'currency'=> "United States dollar (next day) (funds code)",                 'country'=> "United States" ],
		(object)[ 'code'=> "UYI", 'num'=> "940", 'digits'=> 0, 'currency'=> "Uruguay Peso en Unidades Indexadas (URUIURUI) (funds code)",   'country'=> "Uruguay" ],
		(object)[ 'code'=> "UYU", 'num'=> "858", 'digits'=> 2, 'currency'=> "Uruguayan peso",                                               'country'=> "Uruguay" ],
		(object)[ 'code'=> "UYW", 'num'=> "927", 'digits'=> 4, 'currency'=> "Unidad previsional",                                           'country'=> "Uruguay" ],
		(object)[ 'code'=> "UZS", 'num'=> "860", 'digits'=> 2, 'currency'=> "Uzbekistan som",                                               'country'=> "Uzbekistan" ],
		(object)[ 'code'=> "VES", 'num'=> "928", 'digits'=> 2, 'currency'=> "Venezuelan bolívar soberano",                                  'country'=> "Venezuela" ],
		(object)[ 'code'=> "VND", 'num'=> "704", 'digits'=> 0, 'currency'=> "Vietnamese đồng",                                              'country'=> "Vietnam" ],
		(object)[ 'code'=> "VUV", 'num'=> "548", 'digits'=> 0, 'currency'=> "Vanuatu vatu",                                                 'country'=> "Vanuatu" ],
		(object)[ 'code'=> "WST", 'num'=> "882", 'digits'=> 2, 'currency'=> "Samoan tala",                                                  'country'=> "Samoa" ],
		(object)[ 'code'=> "XAF", 'num'=> "950", 'digits'=> 0, 'currency'=> "CFA franc BEAC",                                               'country'=> "Cameroon (CM),  Central African Republic (CF),  Republic of the Congo (CG),  Chad (TD),  Equatorial Guinea (GQ),  Gabon (GA)" ],
		(object)[ 'code'=> "XCD", 'num'=> "951", 'digits'=> 2, 'currency'=> "East Caribbean dollar",                                        'country'=> "Anguilla (AI),  Antigua and Barbuda (AG),  Dominica (DM),  Grenada (GD),  Montserrat (MS),  Saint Kitts and Nevis (KN),  Saint Lucia (LC),  Saint Vincent and the Grenadines (VC)" ],
		(object)[ 'code'=> "XOF", 'num'=> "952", 'digits'=> 0, 'currency'=> "CFA franc BCEAO",                                              'country'=> "Benin (BJ),  Burkina Faso (BF),  Côte d'Ivoire (CI),  Guinea-Bissau (GW),  Mali (ML),  Niger (NE),  Senegal (SN),  Togo (TG)" ],
		(object)[ 'code'=> "XPF", 'num'=> "953", 'digits'=> 0, 'currency'=> "CFP franc (franc Pacifique)",                                  'country'=> "French territories of the Pacific Ocean:  French Polynesia (PF),  New Caledonia (NC),  Wallis and Futuna (WF)" ],
		(object)[ 'code'=> "YER", 'num'=> "886", 'digits'=> 2, 'currency'=> "Yemeni rial",                                                  'country'=> "Yemen" ],
		(object)[ 'code'=> "ZAR", 'num'=> "710", 'digits'=> 2, 'currency'=> "South African rand",                                           'country'=> "Lesotho,  Namibia,  South Africa" ],
		(object)[ 'code'=> "ZMW", 'num'=> "967", 'digits'=> 2, 'currency'=> "Zambian kwacha",                                               'country'=> "Zambia" ],
		(object)[ 'code'=> "ZWL", 'num'=> "932", 'digits'=> 2, 'currency'=> "Zimbabwean dollar",                                            'country'=> "Zimbabwe" ]
	];
	$currency_iso4217_size = count($currency_iso4217);


	if (($code === null) && ($num === null))
	{
//		$value = (object)[ 'code'=> "???", 'num'=> "???", 'digits'=> 0, 'currency'=> "???", 'country'=> "???" ];

//		$result->set_ok();
//		$result->set_value($value);
		$result->set_err(1, 'currency was not found');
		return $result;
	}


	for ($i=0; $i < $currency_iso4217_size; $i++)
	{
		if (($code === null) && ($num !== null))
		{
			if (strcmp(currency_iso4217[$i]->{'num'}, $num) === 0)
			{
				$result->set_ok();
				$result->set_value(currency_iso4217[$i]);
				return $result;
			}
		}
		if (($code !== null) && ($num === null))
		{
			if (strcmp(currency_iso4217[$i]->{'code'}, $code) === 0)
			{
				$result->set_ok();
				$result->set_value(currency_iso4217[$i]);
				return $result;
			}
		}
		if (($code !== null) && ($num !== null))
		{
			if
			(
				(strcmp(currency_iso4217[$i]->{'code'}, $code) === 0) &&
				(strcmp(currency_iso4217[$i]->{'num'},  $num)  === 0)
			)
			{
				$result->set_ok();
				$result->set_value(currency_iso4217[$i]);
				return $result;
			}
		}
	}


	$result->set_err(1, 'currency was not found');
	return $result;
}
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------//
