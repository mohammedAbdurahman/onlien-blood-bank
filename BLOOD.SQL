CREATE TABLE `bloodD` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `Email ID` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `blood_group` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`id`, `fname`, `Email ID`, `address`, `contact`, `gender`, `blood_group`) VALUES
(1, 'Sagar', 'Gurung', 'MOHAMMED@GMAL.COM, Nepal', '2147483647', 'Male', 'O-'),
(2, 'Sudeep', 'Gurung', 'MOHAMMED@GMAL.COM, Nepal', '2147483647', 'Male', 'A+'),
(4, 'Ram', 'Thapa', 'MOHAMMED@GMAL.COM, Nepal', '2147483647', 'Male', 'O+'),
(5, 'Hari', 'KC', 'MOHAMMED@GMAL.COM,Nepal', '2147483647', 'Male', 'O+'),
(6, 'Sita', 'Gurung', 'MOHAMMED@GMAL.COM,Nepal', '2147483647', 'Female', 'O-');
