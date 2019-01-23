-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 23, 2019 at 08:45 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyectoDAW`
--

-- --------------------------------------------------------

--
-- Table structure for table `elo`
--

CREATE TABLE `elo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `nombreArchivo` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elo`
--

INSERT INTO `elo` (`id`, `nombre`, `nombreArchivo`) VALUES
(1, 'Hierro 4', 'iron_4'),
(2, 'Hierro 3', 'iron_3'),
(3, 'Hierro 2', 'iron_2'),
(4, 'Hierro 1', 'iron_1'),
(5, 'Bronce 4', 'bronze_4'),
(6, 'Bronce 3', 'bronze_3'),
(7, 'Bronce 2', 'bronze_2'),
(8, 'Bronce 1', 'bronze_1'),
(9, 'Plata 4', 'silver_4'),
(10, 'Plata 3', 'silver_3'),
(11, 'Plata 2', 'silver_2'),
(12, 'Plata 1', 'silver_1'),
(13, 'Gold 4', 'gold_4'),
(14, 'Gold 3', 'gold_3'),
(15, 'Gold 2', 'gold_2'),
(16, 'Gold 1', 'gold_1'),
(17, 'Platino 4', 'platinum_4'),
(18, 'Platino 3', 'platinum_3'),
(19, 'Platino 2', 'platinum_2'),
(20, 'Platino 1', 'platinum_1'),
(21, 'Diamante 4', 'diamond_4'),
(22, 'Diamante 3', 'diamond_3'),
(23, 'Diamante 2', 'diamond_2'),
(24, 'Diamante 1', 'diamond_1'),
(25, 'Master', 'master_1'),
(26, 'GrandMaster', 'grandmaster_1'),
(27, 'Challenger', 'challenger_1');

-- --------------------------------------------------------

--
-- Table structure for table `idioma`
--

CREATE TABLE `idioma` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` char(49) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `idioma`
--

INSERT INTO `idioma` (`id`, `nombre`) VALUES
(1, 'English'),
(2, 'Afar'),
(3, 'Abkhazian'),
(4, 'Afrikaans'),
(5, 'Amharic'),
(6, 'Arabic'),
(7, 'Assamese'),
(8, 'Aymara'),
(9, 'Azerbaijani'),
(10, 'Bashkir'),
(11, 'Belarusian'),
(12, 'Bulgarian'),
(13, 'Bihari'),
(14, 'Bislama'),
(15, 'Bengali/Bangla'),
(16, 'Tibetan'),
(17, 'Breton'),
(18, 'Catalan'),
(19, 'Corsican'),
(20, 'Czech'),
(21, 'Welsh'),
(22, 'Danish'),
(23, 'German'),
(24, 'Bhutani'),
(25, 'Greek'),
(26, 'Esperanto'),
(27, 'Spanish'),
(28, 'Estonian'),
(29, 'Basque'),
(30, 'Persian'),
(31, 'Finnish'),
(32, 'Fiji'),
(33, 'Faeroese'),
(34, 'French'),
(35, 'Frisian'),
(36, 'Irish'),
(37, 'Scots/Gaelic'),
(38, 'Galician'),
(39, 'Guarani'),
(40, 'Gujarati'),
(41, 'Hausa'),
(42, 'Hindi'),
(43, 'Croatian'),
(44, 'Hungarian'),
(45, 'Armenian'),
(46, 'Interlingua'),
(47, 'Interlingue'),
(48, 'Inupiak'),
(49, 'Indonesian'),
(50, 'Icelandic'),
(51, 'Italian'),
(52, 'Hebrew'),
(53, 'Japanese'),
(54, 'Yiddish'),
(55, 'Javanese'),
(56, 'Georgian'),
(57, 'Kazakh'),
(58, 'Greenlandic'),
(59, 'Cambodian'),
(60, 'Kannada'),
(61, 'Korean'),
(62, 'Kashmiri'),
(63, 'Kurdish'),
(64, 'Kirghiz'),
(65, 'Latin'),
(66, 'Lingala'),
(67, 'Laothian'),
(68, 'Lithuanian'),
(69, 'Latvian/Lettish'),
(70, 'Malagasy'),
(71, 'Maori'),
(72, 'Macedonian'),
(73, 'Malayalam'),
(74, 'Mongolian'),
(75, 'Moldavian'),
(76, 'Marathi'),
(77, 'Malay'),
(78, 'Maltese'),
(79, 'Burmese'),
(80, 'Nauru'),
(81, 'Nepali'),
(82, 'Dutch'),
(83, 'Norwegian'),
(84, 'Occitan'),
(85, '(Afan)/Oromoor/Oriya'),
(86, 'Punjabi'),
(87, 'Polish'),
(88, 'Pashto/Pushto'),
(89, 'Portuguese'),
(90, 'Quechua'),
(91, 'Rhaeto-Romance'),
(92, 'Kirundi'),
(93, 'Romanian'),
(94, 'Russian'),
(95, 'Kinyarwanda'),
(96, 'Sanskrit'),
(97, 'Sindhi'),
(98, 'Sangro'),
(99, 'Serbo-Croatian'),
(100, 'Singhalese'),
(101, 'Slovak'),
(102, 'Slovenian'),
(103, 'Samoan'),
(104, 'Shona'),
(105, 'Somali'),
(106, 'Albanian'),
(107, 'Serbian'),
(108, 'Siswati'),
(109, 'Sesotho'),
(110, 'Sundanese'),
(111, 'Swedish'),
(112, 'Swahili'),
(113, 'Tamil'),
(114, 'Telugu'),
(115, 'Tajik'),
(116, 'Thai'),
(117, 'Tigrinya'),
(118, 'Turkmen'),
(119, 'Tagalog'),
(120, 'Setswana'),
(121, 'Tonga'),
(122, 'Turkish'),
(123, 'Tsonga'),
(124, 'Tatar'),
(125, 'Twi'),
(126, 'Ukrainian'),
(127, 'Urdu'),
(128, 'Uzbek'),
(129, 'Vietnamese'),
(130, 'Volapuk'),
(131, 'Wolof'),
(132, 'Xhosa'),
(133, 'Yoruba'),
(134, 'Chinese'),
(135, 'Zulu');

-- --------------------------------------------------------

--
-- Table structure for table `pais`
--

CREATE TABLE `pais` (
  `id` int(5) NOT NULL,
  `codigoPais` char(2) NOT NULL DEFAULT '',
  `nombrePais` varchar(45) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pais`
--

INSERT INTO `pais` (`id`, `codigoPais`, `nombrePais`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'AS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BQ', 'Bonaire'),
(28, 'BA', 'Bosnia and Herzegovina'),
(29, 'BW', 'Botswana'),
(30, 'BV', 'Bouvet Island'),
(31, 'BR', 'Brazil'),
(32, 'IO', 'British Indian Ocean Territory'),
(33, 'VG', 'British Virgin Islands'),
(34, 'BN', 'Brunei'),
(35, 'BG', 'Bulgaria'),
(36, 'BF', 'Burkina Faso'),
(37, 'BI', 'Burundi'),
(38, 'KH', 'Cambodia'),
(39, 'CM', 'Cameroon'),
(40, 'CA', 'Canada'),
(41, 'CV', 'Cape Verde'),
(42, 'KY', 'Cayman Islands'),
(43, 'CF', 'Central African Republic'),
(44, 'TD', 'Chad'),
(45, 'CL', 'Chile'),
(46, 'CN', 'China'),
(47, 'CX', 'Christmas Island'),
(48, 'CC', 'Cocos [Keeling] Islands'),
(49, 'CO', 'Colombia'),
(50, 'KM', 'Comoros'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia'),
(54, 'CU', 'Cuba'),
(55, 'CW', 'Curacao'),
(56, 'CY', 'Cyprus'),
(57, 'CZ', 'Czechia'),
(58, 'CD', 'Democratic Republic of the Congo'),
(59, 'DK', 'Denmark'),
(60, 'DJ', 'Djibouti'),
(61, 'DM', 'Dominica'),
(62, 'DO', 'Dominican Republic'),
(63, 'TL', 'East Timor'),
(64, 'EC', 'Ecuador'),
(65, 'EG', 'Egypt'),
(66, 'SV', 'El Salvador'),
(67, 'GQ', 'Equatorial Guinea'),
(68, 'ER', 'Eritrea'),
(69, 'EE', 'Estonia'),
(70, 'ET', 'Ethiopia'),
(71, 'FK', 'Falkland Islands'),
(72, 'FO', 'Faroe Islands'),
(73, 'FJ', 'Fiji'),
(74, 'FI', 'Finland'),
(75, 'FR', 'France'),
(76, 'GF', 'French Guiana'),
(77, 'PF', 'French Polynesia'),
(78, 'TF', 'French Southern Territories'),
(79, 'GA', 'Gabon'),
(80, 'GM', 'Gambia'),
(81, 'GE', 'Georgia'),
(82, 'DE', 'Germany'),
(83, 'GH', 'Ghana'),
(84, 'GI', 'Gibraltar'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'GG', 'Guernsey'),
(92, 'GN', 'Guinea'),
(93, 'GW', 'Guinea-Bissau'),
(94, 'GY', 'Guyana'),
(95, 'HT', 'Haiti'),
(96, 'HM', 'Heard Island and McDonald Islands'),
(97, 'HN', 'Honduras'),
(98, 'HK', 'Hong Kong'),
(99, 'HU', 'Hungary'),
(100, 'IS', 'Iceland'),
(101, 'IN', 'India'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IM', 'Isle of Man'),
(107, 'IL', 'Israel'),
(108, 'IT', 'Italy'),
(109, 'CI', 'Ivory Coast'),
(110, 'JM', 'Jamaica'),
(111, 'JP', 'Japan'),
(112, 'JE', 'Jersey'),
(113, 'JO', 'Jordan'),
(114, 'KZ', 'Kazakhstan'),
(115, 'KE', 'Kenya'),
(116, 'KI', 'Kiribati'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Laos'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macao'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'YT', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia'),
(144, 'MD', 'Moldova'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar [Burma]'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'NC', 'New Caledonia'),
(157, 'NZ', 'New Zealand'),
(158, 'NI', 'Nicaragua'),
(159, 'NE', 'Niger'),
(160, 'NG', 'Nigeria'),
(161, 'NU', 'Niue'),
(162, 'NF', 'Norfolk Island'),
(163, 'KP', 'North Korea'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn Islands'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'CG', 'Republic of the Congo'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russia'),
(183, 'RW', 'Rwanda'),
(184, 'RE', 'Réunion'),
(185, 'BL', 'Saint Barthélemy'),
(186, 'SH', 'Saint Helena'),
(187, 'KN', 'Saint Kitts and Nevis'),
(188, 'LC', 'Saint Lucia'),
(189, 'MF', 'Saint Martin'),
(190, 'PM', 'Saint Pierre and Miquelon'),
(191, 'VC', 'Saint Vincent and the Grenadines'),
(192, 'WS', 'Samoa'),
(193, 'SM', 'San Marino'),
(194, 'SA', 'Saudi Arabia'),
(195, 'SN', 'Senegal'),
(196, 'RS', 'Serbia'),
(197, 'SC', 'Seychelles'),
(198, 'SL', 'Sierra Leone'),
(199, 'SG', 'Singapore'),
(200, 'SX', 'Sint Maarten'),
(201, 'SK', 'Slovakia'),
(202, 'SI', 'Slovenia'),
(203, 'SB', 'Solomon Islands'),
(204, 'SO', 'Somalia'),
(205, 'ZA', 'South Africa'),
(206, 'GS', 'South Georgia and the South Sandwich Islands'),
(207, 'KR', 'South Korea'),
(208, 'SS', 'South Sudan'),
(209, 'ES', 'Spain'),
(210, 'LK', 'Sri Lanka'),
(211, 'SD', 'Sudan'),
(212, 'SR', 'Suriname'),
(213, 'SJ', 'Svalbard and Jan Mayen'),
(214, 'SZ', 'Swaziland'),
(215, 'SE', 'Sweden'),
(216, 'CH', 'Switzerland'),
(217, 'SY', 'Syria'),
(218, 'ST', 'São Tomé and Príncipe'),
(219, 'TW', 'Taiwan'),
(220, 'TJ', 'Tajikistan'),
(221, 'TZ', 'Tanzania'),
(222, 'TH', 'Thailand'),
(223, 'TG', 'Togo'),
(224, 'TK', 'Tokelau'),
(225, 'TO', 'Tonga'),
(226, 'TT', 'Trinidad and Tobago'),
(227, 'TN', 'Tunisia'),
(228, 'TR', 'Turkey'),
(229, 'TM', 'Turkmenistan'),
(230, 'TC', 'Turks and Caicos Islands'),
(231, 'TV', 'Tuvalu'),
(232, 'UM', 'U.S. Minor Outlying Islands'),
(233, 'VI', 'U.S. Virgin Islands'),
(234, 'UG', 'Uganda'),
(235, 'UA', 'Ukraine'),
(236, 'AE', 'United Arab Emirates'),
(237, 'GB', 'United Kingdom'),
(238, 'US', 'United States'),
(239, 'UY', 'Uruguay'),
(240, 'UZ', 'Uzbekistan'),
(241, 'VU', 'Vanuatu'),
(242, 'VA', 'Vatican City'),
(243, 'VE', 'Venezuela'),
(244, 'VN', 'Vietnam'),
(245, 'WF', 'Wallis and Futuna'),
(246, 'EH', 'Western Sahara'),
(247, 'YE', 'Yemen'),
(248, 'ZM', 'Zambia'),
(249, 'ZW', 'Zimbabwe'),
(250, 'AX', 'Åland');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int(5) NOT NULL,
  `codigoRegion` char(8) NOT NULL DEFAULT '',
  `nombreRegion` varchar(45) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `codigoRegion`, `nombreRegion`) VALUES
(1, 'BR', 'Brasil'),
(2, 'EUNE', 'Europa Este'),
(3, 'EUW', 'Europa Oeste'),
(4, 'LAN', 'Latinoamerica Norte'),
(5, 'LAS', 'Latinoamerica Sur'),
(6, 'NA', 'America del Norte'),
(7, 'OCE', 'Oceania'),
(8, 'RU', 'Rusia'),
(9, 'TR', 'Turquia'),
(10, 'JP', 'Japon'),
(11, 'KR', 'Corea'),
(12, 'CN', 'China'),
(13, 'SEA', 'Sudeste Asia');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nick` varchar(64) NOT NULL,
  `password` binary(16) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `idPais` int(11) NOT NULL,
  `idIdioma` int(11) NOT NULL,
  `idElo` int(11) NOT NULL,
  `rolPreferido` varchar(64) NOT NULL,
  `rolBuscado` varchar(64) NOT NULL,
  `idRegion` int(11) NOT NULL,
  `mensaje` text NOT NULL,
  `rolWeb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elo`
--
ALTER TABLE `elo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elo`
--
ALTER TABLE `elo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `idioma`
--
ALTER TABLE `idioma`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
--
-- AUTO_INCREMENT for table `pais`
--
ALTER TABLE `pais`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;
--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
