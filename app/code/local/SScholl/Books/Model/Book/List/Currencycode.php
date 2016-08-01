<?php /**************** Copyright notice ************************
 *  (c) 2011 Simon Eric Scholl <simon@sdscholl.de>
 *  All rights reserved
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 ***************************************************************/

class SScholl_Books_Model_Book_List_Currencycode
	extends Varien_Object
{

	public function getAllOptions()
	{
		return $this->_options;
	}
	
    public function getOption($option)
    {
        return $this->_options[$option];
    }

	protected $_options = array(
		'AED'	=>	'UAE Dirham', //United Arab Emirates. MARKER
		'AFA'	=>	'Afghani', //DEPRECATED, replaced by AFN. MARKER
		'AFN'	=>	'Afghani', //Afghanistan. MARKER
		'ALL'	=>	'Lek', //Albania. MARKER
		'AMD'	=>	'Armenian Dram', //Armenia. MARKER
		'ANG'	=>	'Netherlands Antillian Guilder', //Curaçao, Sint Maarten. MARKER
		'AOA'	=>	'Angolan Kwanza', //Angola. MARKER
		'ARS'	=>	'Argentine Peso', //Argentina. MARKER
		'ATS'	=>	'Austria, Schilling', //Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro. MARKER
		'AUD'	=>	'Australian Dollar', //Australia, Christmas Island, Cocos (Keeling) Islands, Heard Island and McDonald Islands, Kiribati, Nauru, Norfolk Island, Tuvalu. MARKER
		'AWG'	=>	'Aruban Florin', //Aruba. MARKER
		'AZN'	=>	'Azerbaijanian Manat', //Azerbaijan. MARKER
		'BAM'	=>	'Convertible Marks', //Bosnia and Herzegovina. MARKER
		'BBD'	=>	'Barbados Dollar', //Barbados. MARKER
		'BDT'	=>	'Taka', //Bangladesh. MARKER
		'BEF'	=>	'Belgium, Franc', //Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro. MARKER
		'BGL'	=>	'Lev', //DEPRECATED, replaced by BGN. MARKER
		'BGN'	=>	'Lev', //Bulgaria. MARKER
		'BHD'	=>	'Bahraini Dinar', //Bahrain. MARKER
		'BIF'	=>	'Burundi Franc', //Burundi. MARKER
		'BMD'	=>	'Bermuda Dollar', //Bermuda. MARKER
		'BND'	=>	'Brunei Dollar', //Brunei Darussalam. MARKER
		'BOB'	=>	'Boliviano', //Bolivia. MARKER
		'BRL'	=>	'Brazilian Real', //Brazil. MARKER
		'BSD'	=>	'Bahamian Dollar', //Bahamas. MARKER
		'BTN'	=>	'Ngultrun', //Bhutan. MARKER
		'BWP'	=>	'Pula', //Botswana. MARKER
		'BYR'	=>	'Belarussian Ruble', //Belarus. MARKER
		'BZD'	=>	'Belize Dollar', //Belize. MARKER
		'CAD'	=>	'Canadian Dollar', //Canada. MARKER
		'CDF'	=>	'Franc Congolais', //Congo (Democratic Republic of the). MARKER
		'CHF'	=>	'Swiss Franc', //Switzerland, Liechtenstein. MARKER
		'CLP'	=>	'Chilean Peso', //Chile. MARKER
		'CNY'	=>	'Yuan Renminbi', //China. MARKER
		'COP'	=>	'Colombian Peso', //Colombia. MARKER
		'CRC'	=>	'Costa Rican Colon', //Costa Rica. MARKER
		'CSD'	=>	'Serbian Dinar', //Deprecated, replaced by RSD. MARKER
		'CUC'	=>	'Cuban Convertible Peso', //Cuba (alternative currency). MARKER
		'CUP'	=>	'Cuban Peso', //Cuba. MARKER
		'CVE'	=>	'Cape Verde Escudo', //Cape Verde. MARKER
		'CYP'	=>	'Cyprus Pound', //Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro. MARKER
		'CZK'	=>	'Czech Koruna', //Czech Republic. MARKER
		'DEM'	=>	'Germany, Mark', //Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro. MARKER
		'DJF'	=>	'Djibouti Franc', //Djibouti. MARKER
		'DKK'	=>	'Danish Krone', //Denmark, Faroe Islands, Greenland. MARKER
		'DOP'	=>	'Dominican Peso', //Dominican Republic. MARKER
		'DZD'	=>	'Algerian Dinar', //Algeria. MARKER
		'EEK'	=>	'Kroon', //Estonia – now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro. MARKER
		'EGP'	=>	'Egyptian Pound', //Egypt. MARKER
		'ERN'	=>	'Nakfa', //Eritrea. MARKER
		'ESP'	=>	'Spain, Peseta', //Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro. MARKER
		'ETB'	=>	'Ethiopian Birr', //Ethiopia. MARKER
		'EUR'	=>	'Euro', //Andorra, Austria, Belgium, Cyprus, Estonia, Finland, France, Fr Guiana, Fr S Territories, Germany, Greece, Guadeloupe, Holy See (Vatican City), Ireland, Italy, Luxembourg, Martinique, Malta, Mayotte, Monaco, Montenegro, Netherlands, Portugal, Réunion, St Pierre and Miquelon, San Marino, Spain. MARKER
		'FIM'	=>	'Finland, Markka', //Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro. MARKER
		'FJD'	=>	'Fiji Dollar', //Fiji. MARKER
		'FKP'	=>	'Falkland Islands Pound', //Falkland Islands (Malvinas). MARKER
		'FRF'	=>	'France, Franc', //Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro. MARKER
		'GBP'	=>	'Pound Sterling', //United Kingdom, Isle of Man, Channel Islands, South Georgia, South Sandwich Islands, British Indian Ocean Territory. MARKER
		'GEL'	=>	'Lari', //Georgia. MARKER
		'GHC'	=>	'Cedi', //Deprecated, replaced by GHS. MARKER
		'GHS'	=>	'Cedi', //Ghana. MARKER
		'GIP'	=>	'Gibraltar Pound', //Gibraltar. MARKER
		'GMD'	=>	'Dalasi', //Gambia. MARKER
		'GNF'	=>	'Guinea Franc', //Guinea. MARKER
		'GRD'	=>	'Greece, Drachma', //Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro. MARKER
		'GTQ'	=>	'Quetzal', //Guatemala. MARKER
		'GWP'	=>	'Guinea-Bissau Peso', //Now replaced by the CFA Franc BCEAO XOF use only for historical prices that pre-date use of the CFA Franc. MARKER
		'GYD'	=>	'Guyana Dollar', //Guyana. MARKER
		'HKD'	=>	'Hong Kong Dollar', //Hong Kong, Macao. MARKER
		'HNL'	=>	'Lempira', //Honduras. MARKER
		'HRK'	=>	'Croatian Kuna', //Croatia. MARKER
		'HTG'	=>	'Gourde', //Haiti. MARKER
		'HUF'	=>	'Forint', //Hungary. MARKER
		'IDR'	=>	'Rupiah', //Indonesia. MARKER
		'IEP'	=>	'Ireland, Punt', //Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro. MARKER
		'ILS'	=>	'Israeli Sheqel', //Israel. MARKER
		'INR'	=>	'Indian Rupee', //India. MARKER
		'IQD'	=>	'Iraqi Dinar', //Iraq. MARKER
		'IRR'	=>	'Iranian Rial', //Iran (Islamic Republic of). MARKER
		'ISK'	=>	'Iceland Krona', //Iceland. MARKER
		'ITL'	=>	'Italy, Lira', //Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro. MARKER
		'JMD'	=>	'Jamaican Dollar', //Jamaica. MARKER
		'JOD'	=>	'Jordanian Dinar', //Jordan. MARKER
		'JPY'	=>	'Yen', //Japan. MARKER
		'KES'	=>	'Kenyan Shilling', //Kenya. MARKER
		'KGS'	=>	'Som', //Kyrgyzstan. MARKER
		'KHR'	=>	'Riel', //Cambodia. MARKER
		'KMF'	=>	'Comoro Franc', //Comoros. MARKER
		'KPW'	=>	'North Korean Won', //Korea (Democratic People’s Republic of). MARKER
		'KRW'	=>	'Won', //Korea (Republic of). MARKER
		'KWD'	=>	'Kuwaiti Dinar', //Kuwait. MARKER
		'KYD'	=>	'Cayman Islands Dollar', //Cayman Islands. MARKER
		'KZT'	=>	'Tenge', //Kazakstan. MARKER
		'LAK'	=>	'Kip', //Lao People’s Democratic Republic. MARKER
		'LBP'	=>	'Lebanese Pound', //Lebanon. MARKER
		'LKR'	=>	'Sri Lanka Rupee', //Sri Lanka. MARKER
		'LRD'	=>	'Liberian Dollar', //Liberia. MARKER
		'LSL'	=>	'Loti', //Lesotho. MARKER
		'LTL'	=>	'Lithuanian Litus', //Lithuania. MARKER
		'LUF'	=>	'Luxembourg, Franc', //Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro. MARKER
		'LVL'	=>	'Latvian Lats', //Latvia. MARKER
		'LYD'	=>	'Libyan Dinar', //Libyan Arab Jamahiriya. MARKER
		'MAD'	=>	'Moroccan Dirham', //Morocco, Western Sahara. MARKER
		'MDL'	=>	'Moldovan Leu', //Moldova, Republic of. MARKER
		'MGA'	=>	'Ariary', //Madagascar. MARKER
		'MGF'	=>	'Malagasy Franc', //Now replaced by the Ariary (MGA). MARKER
		'MKD'	=>	'Denar', //Macedonia (former Yugoslav Republic of). MARKER
		'MMK'	=>	'Kyat', //Myanmar. MARKER
		'MNT'	=>	'Tugrik', //Mongolia. MARKER
		'MOP'	=>	'Pataca', //Macau. MARKER
		'MRO'	=>	'Ouguiya', //Mauritania. MARKER
		'MTL'	=>	'Maltese Lira', //Malta – now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro. MARKER
		'MUR'	=>	'Mauritius Rupee', //Mauritius. MARKER
		'MVR'	=>	'Rufiyaa', //Maldives. MARKER
		'MWK'	=>	'Kwacha', //Malawi. MARKER
		'MXN'	=>	'Mexican Peso', //Mexico. MARKER
		'MYR'	=>	'Malaysian Ringgit', //Malaysia. MARKER
		'MZN'	=>	'Metical', //Mozambique. MARKER
		'NAD'	=>	'Namibia Dollar', //Namibia. MARKER
		'NGN'	=>	'Naira', //Nigeria. MARKER
		'NIO'	=>	'Cordoba Oro', //Nicaragua. MARKER
		'NLG'	=>	'Netherlands, Guilder', //Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro. MARKER
		'NOK'	=>	'Norwegian Krone', //Norway, Bouvet Island, Svalbard and Jan Mayen. MARKER
		'NPR'	=>	'Nepalese Rupee', //Nepal. MARKER
		'NZD'	=>	'New Zealand Dollar', //New Zealand, Cook Islands, Niue, Pitcairn, Tokelau. MARKER
		'OMR'	=>	'Rial Omani', //Oman. MARKER
		'PAB'	=>	'Balboa', //Panama. MARKER
		'PEN'	=>	'Nuevo Sol', //Peru. MARKER
		'PGK'	=>	'Kina', //Papua New Guinea. MARKER
		'PHP'	=>	'Philippine Peso', //Philippines. MARKER
		'PKR'	=>	'Pakistan Rupee', //Pakistan. MARKER
		'PLN'	=>	'Zloty', //Poland. MARKER
		'PTE'	=>	'Portugal, Escudo', //Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro. MARKER
		'PYG'	=>	'Guarani', //Paraguay. MARKER
		'QAR'	=>	'Qatari Rial', //Qatar. MARKER
		'ROL'	=>	'Old Leu', //Deprecated, replaced by RON. MARKER
		'RON'	=>	'New Leu', //Romania. MARKER
		'RSD'	=>	'Serbian Dinar', //Serbia. MARKER
		'RUB'	=>	'Russian Ruble', //Russian Federation. MARKER
		'RUR'	=>	'Russian Ruble', //DEPRECATED, replaced by RUB. MARKER
		'RWF'	=>	'Rwanda Franc', //Rwanda. MARKER
		'SAR'	=>	'Saudi Riyal', //Saudi Arabia. MARKER
		'SBD'	=>	'Solomon Islands Dollar', //Solomon Islands. MARKER
		'SCR'	=>	'Seychelles Rupee', //Seychelles. MARKER
		'SDD'	=>	'Sudanese Dinar', //Now replaced by the Sudanese Pound (SDG). MARKER
		'SDG'	=>	'Sudanese Pound', //Sudan. MARKER
		'SEK'	=>	'Swedish Krona', //Sweden. MARKER
		'SGD'	=>	'Singapore Dollar', //Singapore. MARKER
		'SHP'	=>	'Saint Helena Pound', //Saint Helena. MARKER
		'SIT'	=>	'Tolar', //Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro. MARKER
		'SKK'	=>	'Slovak Koruna', //Now replaced by the Euro (EUR): use only for historical prices that pre-date the introduction of the Euro. MARKER
		'SLL'	=>	'Leone', //Sierra Leone. MARKER
		'SOS'	=>	'Somali Shilling', //Somalia. MARKER
		'SRD'	=>	'Suriname Guilder', //Suriname. MARKER
		'SRG'	=>	'Suriname Guilder', //DEPRECATED, replaced by SRD. MARKER
		'STD'	=>	'Dobra', //São Tome and Principe. MARKER
		'SVC'	=>	'El Salvador Colon', //El Salvador. MARKER
		'SYP'	=>	'Syrian Pound', //Syrian Arab Republic. MARKER
		'SZL'	=>	'Lilangeni', //Swaziland. MARKER
		'THB'	=>	'Baht', //Thailand. MARKER
		'TJS'	=>	'Somoni', //Tajikistan. MARKER
		'TMM'	=>	'Manat', //Deprecated, replaced by TMT. MARKER
		'TMT'	=>	'Manat', //Turkmenistan. MARKER
		'TND'	=>	'Tunisian Dinar', //Tunisia. MARKER
		'TOP'	=>	'Pa’anga', //Tonga. MARKER
		'TPE'	=>	'Timor Escudo', //NO LONGER VALID, Timor-Leste now uses the US Dollar. MARKER
		'TRL'	=>	'Turkish Lira (old)', //Deprecated, replaced by TRY. MARKER
		'TRY'	=>	'Turkish Lira (new)', //Turkey, from 1 January 2005. MARKER
		'TTD'	=>	'Trinidad and Tobago Dollar', //Trinidad and Tobago. MARKER
		'TWD'	=>	'New Taiwan Dollar', //Taiwan (Province of China). MARKER
		'TZS'	=>	'Tanzanian Shilling', //Tanzania (United Republic of). MARKER
		'UAH'	=>	'Hryvnia', //Ukraine. MARKER
		'UGX'	=>	'Uganda Shilling', //Uganda. MARKER
		'USD'	=>	'US Dollar', //United States, American Samoa, British Indian Ocean Territory, Ecuador, Guam, Marshall Is, Micronesia (Federated States of), Northern Mariana Is, Palau, Puerto Rico, Timor-Leste, Turks and Caicos Is, US Minor Outlying Is, Virgin Is (British), Virgin Is (US). MARKER
		'UYU'	=>	'Peso Uruguayo', //Uruguay. MARKER
		'UZS'	=>	'Uzbekistan Sum', //Uzbekistan. MARKER
		'VEB'	=>	'Bolivar', //Deprecated, replaced by VEF. MARKER
		'VEF'	=>	'Bolivar fuerte', //Venezuela. MARKER
		'VND'	=>	'Dong', //Viet Nam. MARKER
		'VUV'	=>	'Vatu', //Vanuatu. MARKER
		'WST'	=>	'Tala', //Samoa. MARKER
		'XAF'	=>	'CFA Franc BEAC', //Cameroon, Central African Republic, Chad, Congo, Equatorial Guinea, Gabon. MARKER
		'XCD'	=>	'East Caribbean Dollar', //Anguilla, Antigua and Barbuda, Dominica, Grenada, Montserrat, Saint Kitts and Nevis, Saint Lucia, Saint Vincent and the Grenadines. MARKER
		'XOF'	=>	'CFA Franc BCEAO', //Benin, Burkina Faso, Côte D’Ivoire, Guinea-Bissau, Mali, Niger, Senegal, Togo. MARKER
		'XPF'	=>	'CFP Franc', //French Polynesia, New Caledonia, Wallis and Futuna. MARKER
		'YER'	=>	'Yemeni Rial', //Yemen. MARKER
		'YUM'	=>	'Yugoslavian Dinar', //DEPRECATED, replaced by CSD. MARKER
		'ZAR'	=>	'Rand', //South Africa. MARKER
		'ZMK'	=>	'Kwacha', //Zambia. MARKER
		'ZWD'	=>	'Zimbabwe Dollar', //Deprecated, replaced with ZWL. MARKER
		'ZWL'	=>	'Zimbabwe Dollar', //Zimbabwe. MARKER

	);

}