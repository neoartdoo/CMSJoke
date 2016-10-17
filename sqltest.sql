CREATE TABLE `djokes` (
  `id` bigint(20) NOT NULL,
  `title` varchar(250) NOT NULL DEFAULT '',
  `category` varchar(250) NOT NULL DEFAULT '',
  `joke` text NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Active',
  `score` int(11) NOT NULL DEFAULT '0',
  `points` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


Create Table 'Marjan'(
'id' bigint(25) not NULL,
'naslov' varchar

)