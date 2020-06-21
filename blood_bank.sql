SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



--blood--
CREATE TABLE `blood` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `email_id` text NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `blood_group` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `blood` (`id`, `fname`, `email_id`, `address`, `contact`, `gender`, `blood_group`) VALUES
(1, 'Sagar', 'Gurung', 'Pokhara, Nepal', '2147483647', 'Male', 'O-'),
(2, 'Sudeep', 'Gurung', 'Pokhara, Nepal', '2147483647', 'Male', 'A+'),
(4, 'Ram', 'Thapa', 'Pokhara, Nepal', '2147483647', 'Male', 'O+'),
(5, 'Hari', 'KC', 'Kathmandu,Nepal', '2147483647', 'Male', 'O+'),
(6, 'Sita', 'Gurung', 'Kathmandu,Nepal', '2147483647', 'Female', 'O-');






ALTER TABLE `blood`
  ADD PRIMARY KEY (`id`);





  ALTER TABLE `blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;