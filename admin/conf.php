<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

require_once $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'php8support.php';

ob_start();

define("time_out","18200");
define("ad_user","admin_zohrabpour");
define("ad_pass","Vv?nPv7dymQr3q3q");

$country_iso = array(
    'Afghanistan' => 'AFG',
    'Aland Islands' => 'ALA',
    'Albania' => 'ALB',
    'Algeria' => 'DZA',
    'American Samoa' => 'ASM',
    'Andorra' => 'AND',
    'Angola' => 'AGO',
    'Anguilla' => 'AIA',
    'Antarctica' => 'ATA',
    'Antigua and Barbuda' => 'ATG',
    'Argentina' => 'ARG',
    'Armenia' => 'ARM',
    'Aruba' => 'ABW',
    'Australia' => 'AUS',
    'Austria' => 'AUT',
    'Azerbaijan' => 'AZE',
    'Bahamas' => 'BHS',
    'Bahrain' => 'BHR',
    'Bangladesh' => 'BGD',
    'Barbados' => 'BRB',
    'Belarus' => 'BLR',
    'Belgium' => 'BEL',
    'Belize' => 'BLZ',
    'Benin' => 'BEN',
    'Bermuda' => 'BMU',
    'Bhutan' => 'BTN',
    'Bolivia' => 'BOL',
    'Bonaire, Saint Eustatius and Saba ' => 'BES',
    'Bosnia and Herzegovina' => 'BIH',
    'Botswana' => 'BWA',
    'Bouvet Island' => 'BVT',
    'Brazil' => 'BRA',
    'British Indian Ocean Territory' => 'IOT',
    'British Virgin Islands' => 'VGB',
    'Brunei' => 'BRN',
    'Bulgaria' => 'BGR',
    'Burkina Faso' => 'BFA',
    'Burundi' => 'BDI',
    'Cambodia' => 'KHM',
    'Cameroon' => 'CMR',
    'Canada' => 'CAN',
    'Cape Verde' => 'CPV',
    'Cayman Islands' => 'CYM',
    'Central African Republic' => 'CAF',
    'Chad' => 'TCD',
    'Chile' => 'CHL',
    'China' => 'CHN',
    'Christmas Island' => 'CXR',
    'Cocos Islands' => 'CCK',
    'Colombia' => 'COL',
    'Comoros' => 'COM',
    'Cook Islands' => 'COK',
    'Costa Rica' => 'CRI',
    'Croatia' => 'HRV',
    'Cuba' => 'CUB',
    'Curacao' => 'CUW',
    'Cyprus' => 'CYP',
    'Czech Republic' => 'CZE',
    'Democratic Republic of the Congo' => 'COD',
    'Denmark' => 'DNK',
    'Djibouti' => 'DJI',
    'Dominica' => 'DMA',
    'Dominican Republic' => 'DOM',
    'East Timor' => 'TLS',
    'Ecuador' => 'ECU',
    'Egypt' => 'EGY',
    'El Salvador' => 'SLV',
    'Equatorial Guinea' => 'GNQ',
    'Eritrea' => 'ERI',
    'Estonia' => 'EST',
    'Ethiopia' => 'ETH',
    'Falkland Islands' => 'FLK',
    'Faroe Islands' => 'FRO',
    'Fiji' => 'FJI',
    'Finland' => 'FIN',
    'France' => 'FRA',
    'French Guiana' => 'GUF',
    'French Polynesia' => 'PYF',
    'French Southern Territories' => 'ATF',
    'Gabon' => 'GAB',
    'Gambia' => 'GMB',
    'Georgia' => 'GEO',
    'Germany' => 'DEU',
    'Ghana' => 'GHA',
    'Gibraltar' => 'GIB',
    'Greece' => 'GRC',
    'Greenland' => 'GRL',
    'Grenada' => 'GRD',
    'Guadeloupe' => 'GLP',
    'Guam' => 'GUM',
    'Guatemala' => 'GTM',
    'Guernsey' => 'GGY',
    'Guinea' => 'GIN',
    'Guinea-Bissau' => 'GNB',
    'Guyana' => 'GUY',
    'Haiti' => 'HTI',
    'Heard Island and McDonald Islands' => 'HMD',
    'Honduras' => 'HND',
    'Hong Kong' => 'HKG',
    'Hungary' => 'HUN',
    'Iceland' => 'ISL',
    'India' => 'IND',
    'Indonesia' => 'IDN',
    'Iran' => 'IRN',
    'Iraq' => 'IRQ',
    'Ireland' => 'IRL',
    'Isle of Man' => 'IMN',
    'Israel' => 'ISR',
    'Italy' => 'ITA',
    'Ivory Coast' => 'CIV',
    'Jamaica' => 'JAM',
    'Japan' => 'JPN',
    'Jersey' => 'JEY',
    'Jordan' => 'JOR',
    'Kazakhstan' => 'KAZ',
    'Kenya' => 'KEN',
    'Kiribati' => 'KIR',
    'Kosovo' => 'XKX',
    'Kuwait' => 'KWT',
    'Kyrgyzstan' => 'KGZ',
    'Laos' => 'LAO',
    'Latvia' => 'LVA',
    'Lebanon' => 'LBN',
    'Lesotho' => 'LSO',
    'Liberia' => 'LBR',
    'Libya' => 'LBY',
    'Liechtenstein' => 'LIE',
    'Lithuania' => 'LTU',
    'Luxembourg' => 'LUX',
    'Macao' => 'MAC',
    'Macedonia' => 'MKD',
    'Madagascar' => 'MDG',
    'Malawi' => 'MWI',
    'Malaysia' => 'MYS',
    'Maldives' => 'MDV',
    'Mali' => 'MLI',
    'Malta' => 'MLT',
    'Marshall Islands' => 'MHL',
    'Martinique' => 'MTQ',
    'Mauritania' => 'MRT',
    'Mauritius' => 'MUS',
    'Mayotte' => 'MYT',
    'Mexico' => 'MEX',
    'Micronesia' => 'FSM',
    'Moldova' => 'MDA',
    'Monaco' => 'MCO',
    'Mongolia' => 'MNG',
    'Montenegro' => 'MNE',
    'Montserrat' => 'MSR',
    'Morocco' => 'MAR',
    'Mozambique' => 'MOZ',
    'Myanmar' => 'MMR',
    'Namibia' => 'NAM',
    'Nauru' => 'NRU',
    'Nepal' => 'NPL',
    'Netherlands' => 'NLD',
    'New Caledonia' => 'NCL',
    'New Zealand' => 'NZL',
    'Nicaragua' => 'NIC',
    'Niger' => 'NER',
    'Nigeria' => 'NGA',
    'Niue' => 'NIU',
    'Norfolk Island' => 'NFK',
    'North Korea' => 'PRK',
    'Northern Mariana Islands' => 'MNP',
    'Norway' => 'NOR',
    'Oman' => 'OMN',
    'Pakistan' => 'PAK',
    'Palau' => 'PLW',
    'Palestinian Territory' => 'PSE',
    'Panama' => 'PAN',
    'Papua New Guinea' => 'PNG',
    'Paraguay' => 'PRY',
    'Peru' => 'PER',
    'Philippines' => 'PHL',
    'Pitcairn' => 'PCN',
    'Poland' => 'POL',
    'Portugal' => 'PRT',
    'Puerto Rico' => 'PRI',
    'Qatar' => 'QAT',
    'Republic of the Congo' => 'COG',
    'Reunion' => 'REU',
    'Romania' => 'ROU',
    'Russia' => 'RUS',
    'Rwanda' => 'RWA',
    'Saint Barthelemy' => 'BLM',
    'Saint Helena' => 'SHN',
    'Saint Kitts and Nevis' => 'KNA',
    'Saint Lucia' => 'LCA',
    'Saint Martin' => 'MAF',
    'Saint Pierre and Miquelon' => 'SPM',
    'Saint Vincent and the Grenadines' => 'VCT',
    'Samoa' => 'WSM',
    'San Marino' => 'SMR',
    'Sao Tome and Principe' => 'STP',
    'Saudi Arabia' => 'SAU',
    'Senegal' => 'SEN',
    'Serbia' => 'SRB',
    'Seychelles' => 'SYC',
    'Sierra Leone' => 'SLE',
    'Singapore' => 'SGP',
    'Sint Maarten' => 'SXM',
    'Slovakia' => 'SVK',
    'Slovenia' => 'SVN',
    'Solomon Islands' => 'SLB',
    'Somalia' => 'SOM',
    'South Africa' => 'ZAF',
    'South Georgia and the South Sandwich Islands' => 'SGS',
    'South Korea' => 'KOR',
    'South Sudan' => 'SSD',
    'Spain' => 'ESP',
    'Sri Lanka' => 'LKA',
    'Sudan' => 'SDN',
    'Suriname' => 'SUR',
    'Svalbard and Jan Mayen' => 'SJM',
    'Swaziland' => 'SWZ',
    'Sweden' => 'SWE',
    'Switzerland' => 'CHE',
    'Syria' => 'SYR',
    'Taiwan' => 'TWN',
    'Tajikistan' => 'TJK',
    'Tanzania' => 'TZA',
    'Thailand' => 'THA',
    'Togo' => 'TGO',
    'Tokelau' => 'TKL',
    'Tonga' => 'TON',
    'Trinidad and Tobago' => 'TTO',
    'Tunisia' => 'TUN',
    'Turkey' => 'TUR',
    'Turkmenistan' => 'TKM',
    'Turks and Caicos Islands' => 'TCA',
    'Tuvalu' => 'TUV',
    'U.S. Virgin Islands' => 'VIR',
    'Uganda' => 'UGA',
    'Ukraine' => 'UKR',
    'United Arab Emirates' => 'ARE',
    'United Kingdom' => 'GBR',
    'United States' => 'USA',
    'United States Minor Outlying Islands' => 'UMI',
    'Uruguay' => 'URY',
    'Uzbekistan' => 'UZB',
    'Vanuatu' => 'VUT',
    'Vatican' => 'VAT',
    'Venezuela' => 'VEN',
    'Vietnam' => 'VNM',
    'Wallis and Futuna' => 'WLF',
    'Western Sahara' => 'ESH',
    'Yemen' => 'YEM',
    'Zambia' => 'ZMB',
    'Zimbabwe' => 'ZWE'
);
$iso_country = array(
    'AFG' => 'Afghanistan',
    'ALA' => 'Aland Islands',
    'ALB' => 'Albania',
    'DZA' => 'Algeria',
    'ASM' => 'American Samoa',
    'AND' => 'Andorra',
    'AGO' => 'Angola',
    'AIA' => 'Anguilla',
    'ATA' => 'Antarctica',
    'ATG' => 'Antigua and Barbuda',
    'ARG' => 'Argentina',
    'ARM' => 'Armenia',
    'ABW' => 'Aruba',
    'AUS' => 'Australia',
    'AUT' => 'Austria',
    'AZE' => 'Azerbaijan',
    'BHS' => 'Bahamas',
    'BHR' => 'Bahrain',
    'BGD' => 'Bangladesh',
    'BRB' => 'Barbados',
    'BLR' => 'Belarus',
    'BEL' => 'Belgium',
    'BLZ' => 'Belize',
    'BEN' => 'Benin',
    'BMU' => 'Bermuda',
    'BTN' => 'Bhutan',
    'BOL' => 'Bolivia',
    'BES' => 'Bonaire, Saint Eustatius and Saba ',
    'BIH' => 'Bosnia and Herzegovina',
    'BWA' => 'Botswana',
    'BVT' => 'Bouvet Island',
    'BRA' => 'Brazil',
    'IOT' => 'British Indian Ocean Territory',
    'VGB' => 'British Virgin Islands',
    'BRN' => 'Brunei',
    'BGR' => 'Bulgaria',
    'BFA' => 'Burkina Faso',
    'BDI' => 'Burundi',
    'KHM' => 'Cambodia',
    'CMR' => 'Cameroon',
    'CAN' => 'Canada',
    'CPV' => 'Cape Verde',
    'CYM' => 'Cayman Islands',
    'CAF' => 'Central African Republic',
    'TCD' => 'Chad',
    'CHL' => 'Chile',
    'CHN' => 'China',
    'CXR' => 'Christmas Island',
    'CCK' => 'Cocos Islands',
    'COL' => 'Colombia',
    'COM' => 'Comoros',
    'COK' => 'Cook Islands',
    'CRI' => 'Costa Rica',
    'HRV' => 'Croatia',
    'CUB' => 'Cuba',
    'CUW' => 'Curacao',
    'CYP' => 'Cyprus',
    'CZE' => 'Czech Republic',
    'COD' => 'Democratic Republic of the Congo',
    'DNK' => 'Denmark',
    'DJI' => 'Djibouti',
    'DMA' => 'Dominica',
    'DOM' => 'Dominican Republic',
    'TLS' => 'East Timor',
    'ECU' => 'Ecuador',
    'EGY' => 'Egypt',
    'SLV' => 'El Salvador',
    'GNQ' => 'Equatorial Guinea',
    'ERI' => 'Eritrea',
    'EST' => 'Estonia',
    'ETH' => 'Ethiopia',
    'FLK' => 'Falkland Islands',
    'FRO' => 'Faroe Islands',
    'FJI' => 'Fiji',
    'FIN' => 'Finland',
    'FRA' => 'France',
    'GUF' => 'French Guiana',
    'PYF' => 'French Polynesia',
    'ATF' => 'French Southern Territories',
    'GAB' => 'Gabon',
    'GMB' => 'Gambia',
    'GEO' => 'Georgia',
    'DEU' => 'Germany',
    'GHA' => 'Ghana',
    'GIB' => 'Gibraltar',
    'GRC' => 'Greece',
    'GRL' => 'Greenland',
    'GRD' => 'Grenada',
    'GLP' => 'Guadeloupe',
    'GUM' => 'Guam',
    'GTM' => 'Guatemala',
    'GGY' => 'Guernsey',
    'GIN' => 'Guinea',
    'GNB' => 'Guinea-Bissau',
    'GUY' => 'Guyana',
    'HTI' => 'Haiti',
    'HMD' => 'Heard Island and McDonald Islands',
    'HND' => 'Honduras',
    'HKG' => 'Hong Kong',
    'HUN' => 'Hungary',
    'ISL' => 'Iceland',
    'IND' => 'India',
    'IDN' => 'Indonesia',
    'IRN' => 'Iran',
    'IRQ' => 'Iraq',
    'IRL' => 'Ireland',
    'IMN' => 'Isle of Man',
    'ISR' => 'Israel',
    'ITA' => 'Italy',
    'CIV' => 'Ivory Coast',
    'JAM' => 'Jamaica',
    'JPN' => 'Japan',
    'JEY' => 'Jersey',
    'JOR' => 'Jordan',
    'KAZ' => 'Kazakhstan',
    'KEN' => 'Kenya',
    'KIR' => 'Kiribati',
    'XKX' => 'Kosovo',
    'KWT' => 'Kuwait',
    'KGZ' => 'Kyrgyzstan',
    'LAO' => 'Laos',
    'LVA' => 'Latvia',
    'LBN' => 'Lebanon',
    'LSO' => 'Lesotho',
    'LBR' => 'Liberia',
    'LBY' => 'Libya',
    'LIE' => 'Liechtenstein',
    'LTU' => 'Lithuania',
    'LUX' => 'Luxembourg',
    'MAC' => 'Macao',
    'MKD' => 'Macedonia',
    'MDG' => 'Madagascar',
    'MWI' => 'Malawi',
    'MYS' => 'Malaysia',
    'MDV' => 'Maldives',
    'MLI' => 'Mali',
    'MLT' => 'Malta',
    'MHL' => 'Marshall Islands',
    'MTQ' => 'Martinique',
    'MRT' => 'Mauritania',
    'MUS' => 'Mauritius',
    'MYT' => 'Mayotte',
    'MEX' => 'Mexico',
    'FSM' => 'Micronesia',
    'MDA' => 'Moldova',
    'MCO' => 'Monaco',
    'MNG' => 'Mongolia',
    'MNE' => 'Montenegro',
    'MSR' => 'Montserrat',
    'MAR' => 'Morocco',
    'MOZ' => 'Mozambique',
    'MMR' => 'Myanmar',
    'NAM' => 'Namibia',
    'NRU' => 'Nauru',
    'NPL' => 'Nepal',
    'NLD' => 'Netherlands',
    'NCL' => 'New Caledonia',
    'NZL' => 'New Zealand',
    'NIC' => 'Nicaragua',
    'NER' => 'Niger',
    'NGA' => 'Nigeria',
    'NIU' => 'Niue',
    'NFK' => 'Norfolk Island',
    'PRK' => 'North Korea',
    'MNP' => 'Northern Mariana Islands',
    'NOR' => 'Norway',
    'OMN' => 'Oman',
    'PAK' => 'Pakistan',
    'PLW' => 'Palau',
    'PSE' => 'Palestinian Territory',
    'PAN' => 'Panama',
    'PNG' => 'Papua New Guinea',
    'PRY' => 'Paraguay',
    'PER' => 'Peru',
    'PHL' => 'Philippines',
    'PCN' => 'Pitcairn',
    'POL' => 'Poland',
    'PRT' => 'Portugal',
    'PRI' => 'Puerto Rico',
    'QAT' => 'Qatar',
    'COG' => 'Republic of the Congo',
    'REU' => 'Reunion',
    'ROU' => 'Romania',
    'RUS' => 'Russia',
    'RWA' => 'Rwanda',
    'BLM' => 'Saint Barthelemy',
    'SHN' => 'Saint Helena',
    'KNA' => 'Saint Kitts and Nevis',
    'LCA' => 'Saint Lucia',
    'MAF' => 'Saint Martin',
    'SPM' => 'Saint Pierre and Miquelon',
    'VCT' => 'Saint Vincent and the Grenadines',
    'WSM' => 'Samoa',
    'SMR' => 'San Marino',
    'STP' => 'Sao Tome and Principe',
    'SAU' => 'Saudi Arabia',
    'SEN' => 'Senegal',
    'SRB' => 'Serbia',
    'SYC' => 'Seychelles',
    'SLE' => 'Sierra Leone',
    'SGP' => 'Singapore',
    'SXM' => 'Sint Maarten',
    'SVK' => 'Slovakia',
    'SVN' => 'Slovenia',
    'SLB' => 'Solomon Islands',
    'SOM' => 'Somalia',
    'ZAF' => 'South Africa',
    'SGS' => 'South Georgia and the South Sandwich Islands',
    'KOR' => 'South Korea',
    'SSD' => 'South Sudan',
    'ESP' => 'Spain',
    'LKA' => 'Sri Lanka',
    'SDN' => 'Sudan',
    'SUR' => 'Suriname',
    'SJM' => 'Svalbard and Jan Mayen',
    'SWZ' => 'Swaziland',
    'SWE' => 'Sweden',
    'CHE' => 'Switzerland',
    'SYR' => 'Syria',
    'TWN' => 'Taiwan',
    'TJK' => 'Tajikistan',
    'TZA' => 'Tanzania',
    'THA' => 'Thailand',
    'TGO' => 'Togo',
    'TKL' => 'Tokelau',
    'TON' => 'Tonga',
    'TTO' => 'Trinidad and Tobago',
    'TUN' => 'Tunisia',
    'TUR' => 'Turkey',
    'TKM' => 'Turkmenistan',
    'TCA' => 'Turks and Caicos Islands',
    'TUV' => 'Tuvalu',
    'VIR' => 'U.S. Virgin Islands',
    'UGA' => 'Uganda',
    'UKR' => 'Ukraine',
    'ARE' => 'United Arab Emirates',
    'GBR' => 'United Kingdom',
    'USA' => 'United States',
    'UMI' => 'United States Minor Outlying Islands',
    'URY' => 'Uruguay',
    'UZB' => 'Uzbekistan',
    'VUT' => 'Vanuatu',
    'VAT' => 'Vatican',
    'VEN' => 'Venezuela',
    'VNM' => 'Vietnam',
    'WLF' => 'Wallis and Futuna',
    'ESH' => 'Western Sahara',
    'YEM' => 'Yemen',
    'ZMB' => 'Zambia',
    'ZWE' => 'Zimbabwe'
);
