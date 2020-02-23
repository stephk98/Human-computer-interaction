-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 10:03 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  `cardnumber` bigint(16) UNSIGNED DEFAULT NULL,
  `cardtype` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  `discountnumber` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`, `name`, `surname`, `cardnumber`, `cardtype`, `confirmpassword`, `discountnumber`) VALUES
(1, 'stefania@test.com', 'test1234', 'stefania@test.com', 'Στεφανία', 'Κωστάκη', 1234567890123456, 'Μειωμένο', 'test1234', 123456781234),
(2, 'theoni@test.com', 'test4321', 'theoni@test.com', 'Θεώνη', 'Παλαιολόγου', 1212343456567878, 'Κανονικό', 'test4321', NULL),
(6, '1234@test.com', 'qazwsx', '1234@test.com', 'toni1', 'pala', NULL, 'Κανονικό', '', NULL),
(7, '1234@test.com', 'qazwer', '1234@test.com', 'toni1', 'pala', 0, 'Κανονικό', '', 0),
(8, 'root@test.com', '12345678', 'root@test.com', 'tet', 'poo', 12345678909999, 'Αμέα/Ανέργος', '', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `apo` varchar(255) NOT NULL,
  `pros` varchar(255) NOT NULL,
  `route` longtext NOT NULL,
  `ID` int(11) NOT NULL,
  `Total_Distance` text NOT NULL,
  `Total_minutes` text NOT NULL,
  `Total_cost` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`apo`, `pros`, `route`, `ID`, `Total_Distance`, `Total_minutes`, `Total_cost`) VALUES
('Συνταγμα', 'Αεροδρομιο', '1. Κατεύθυνση βόρεια στην Λεωφόρος Βασιλίσσης Αμαλίας. Προχωρήστε για 74 μέτρα. \r\nΕκτιμώμενος χρόνος: 1 λεπτά, 13:33:37 \r\n\r\n2. Πηγαίνετε σε σταθμό ΣΤ.ΣΥΝΤΑΓΜΑΤΟΣ Metro και πάρτε το μετρό Μ3 προς ΑΓΙΑ ΜΑΡΙΝΑ - ΔΟΥΚ. ΠΛΑΚΕΝΤΙΑΣ - ΑΕΡΟΔΡΟΜΙΟ. Ακολουθήστε τη διαδρομή για 15 σταθμούς.\r\nΕκτιμώμενος χρόνος: 41 λεπτά, 13:35:00 \r\n\r\n3. Κατεβείτε στη στάση ΣΤ.ΑΕΡΟΔΡΟΜΙΟΥ.\r\n\r\n4. Κατεύθυνση νοτιοανατολικά. Προχωρήστε για 138 μέτρα.\r\nΕκτιμώμενος χρόνος: 2 λεπτά, 14:16:00 \r\n\r\n5. Στρίψτε αριστερά. Προχωρήστε για 97 μέτρα. \r\nΕκτιμώμενος χρόνος: 1 λεπτά, 14:18:28 \r\n\r\n6. Φτάνετε στον προορισμό σας αριστερά. ', 1, '32609 μέτρα', '46 λεπτά', '€10'),
('Σύνταγμα', 'Αεροδρομιο', '1. Κατεύθυνση βόρεια στην Λεωφόρος Βασιλίσσης Αμαλίας. Προχωρήστε για 42 μέτρα.\r\n\r\n2. Στρίψτε αριστερά και μπείτε στην Όθωνος. Προχωρήστε για 71 μέτρα.\r\nΕκτιμώμενος χρόνος: 1 λεπτά, 12:07:49\r\n\r\n3. Πηγαίνετε σε στάση ΑΦΕΤΗΡΙΑ Bus και πάρτε το λεωφορείο X95 προς ΣΥΝΤΑΓΜΑ - ΑΕΡΟΛ. ΑΘΗΝΩΝ (EXPRESS). Ακολουθήστε τη διαδρομή για 17 στάσεις.\r\nΕκτιμώμενος χρόνος: 63 λεπτά, 12:09:00\r\n\r\n4. Κατεβείτε στη στάση ΚΤΙΡΙΟ ΑΝΑΧΩΡΗΣΕΩΝ.\r\n\r\n5. Κατεύθυνση βορειοανατολικά. Προχωρήστε για 6 μέτρα.\r\n\r\n6. Στρίψτε αριστερά. Προχωρήστε για 44 μέτρα.\r\n\r\n7. Στρίψτε αριστερά και μπείτε στην Σκάλες. Προχωρήστε για 78 μέτρα.\r\nΕκτιμώμενος χρόνος: 1 λεπτά, 12:12:02\r\n\r\n8. Κατεύθυνση βορειοανατολικά. Προχωρήστε για 97 μέτρα.\r\nΕκτιμώμενος χρόνος: 1 λεπτά, 12:13:38\r\n\r\n9. Φτάνετε στον προορισμό σας αριστερά.', 2, '33415 μέτρα', '72 λεπτά', '€6'),
('Συνταγμα', 'Καισαριανή', '1. Κατεύθυνση ανατολικά στην Λεωφόρος Βασιλίσσης Σοφίας. Προχωρήστε για 74 μέτρα.\r\n\r\n2. Πηγαίνετε σε στάση ΣΥΝΤΑΓΜΑ Bus και πάρτε το λεωφορείο 224 προς ΕΛ. ΒΕΝΙΖΕΛΟΥ - ΚΑΙΣΑΡΙΑΝΗ. Ακολουθήστε τη διαδρομή για 5 στάσεις.\r\n3. Κατεβείτε στη στάση ΔΗΜΑΡΧΕΙΟ.\r\n4. Κατεύθυνση ανατολικά στην Λεωφόρος Εθνικής Αντιστάσεως. Προχωρήστε για 85 μέτρα.\r\n5. Φτάνετε στην Λεωφόρος Εθνικής Αντιστάσεως.\r\n\r\n', 3, '2095 μέτρα', '11 λεπτά', '€1,4'),
('Μαρούσι', 'Καλλιθέα', '1.	Κατεύθυνση νοτιοανατολικά στην Περικλέους. Προχωρήστε για 148 μέτρα.\r\n2.	Πάρτε την οδό Περικλέους αριστερά. Προχωρήστε για 48 μέτρα.\r\n3.	Στρίψτε δεξιά και μπείτε στην Όθωνος. Προχωρήστε για 20 μέτρα.\r\n4.	Πηγαίνετε σε σταθμό ΣΤ.ΑΜΑΡΟΥΣΙΟΥ Metro και πάρτε το μετρό Μ1 προς ΚΗΦΙΣΙΑ - ΠΕΙΡΑΙΑΣ. Ακολουθήστε τη διαδρομή για 18 σταθμούς.\r\n5.	Κατεβείτε στη στάση ΣΤ.ΚΑΛΛΙΘΕΑΣ.\r\n6.	Κατεύθυνση νότια. Προχωρήστε για 23 μέτρα.\r\n7.	Στρίψτε ελαφρώς αριστερά και μπείτε στην Σιβιτανίδου. Προχωρήστε για 58 μέτρα.\r\n8.	Φτάνετε στην Σιβιτανίδου.\r\n\r\n\r\n', 4, '18651 μέτρα', '49 λεπτά', '€1,4'),
('Κηφισιά', 'Χολαργός', '1. Κατεύθυνση νοτιοδυτικά στην Λύρα Γ.. Προχωρήστε για 23 μέτρα.\r\n2. Στρίψτε δεξιά και μπείτε στην Ελαιών. Προχωρήστε για 186 μέτρα.\r\n3. Πηγαίνετε σε στάση ΧΕΛΙΔΟΝΟΥΣ Bus και πάρτε το λεωφορείο Β9 προς Ν. ΚΗΦΙΣΙΑ - ΜΕΤΑΜΟΡΦΩΣΗ - ΧΑΛΚΟΚΟΝΔΥΛΗ. Ακολουθήστε τη διαδρομή για 28 στάσεις.\r\n4. Κατεβείτε στη στάση ΓΕΦΥΡΑ.\r\n5. Περπατήστε προς το σταθμό Μεταμόρφωση Train.\r\n6. Πηγαίνετε σε σταθμό Μεταμόρφωση Train και πάρτε το μετρό Άνω Λιόσια - Αεροδρόμιο προς Αεροδρόμιο. Ακολουθήστε τη διαδρομή για 5 σταθμούς.\r\n7. Κατεβείτε στη στάση Δουκίσσης Πλακεντίας.\r\n8. Περπατήστε προς το σταθμό ΣΤ.ΔΟΥΚ.ΠΛΑΚΕΝΤΙΑΣ Metro.\r\n9. Πηγαίνετε σε σταθμό ΣΤ.ΔΟΥΚ.ΠΛΑΚΕΝΤΙΑΣ Metro και πάρτε το μετρό Μ3 προς ΑΕΡΟΔΡΟΜΙΟ - ΔΟΥΚ. ΠΛΑΚΕΝΤΙΑΣ - ΑΓΙΑ ΜΑΡΙΝΑ. Ακολουθήστε τη διαδρομή για 5 σταθμούς.\r\n10. Κατεβείτε στη στάση ΣΤ.ΕΘΝ.ΑΜΥΝΑΣ.\r\n11. Κατεύθυνση βορειοανατολικά στην Λεωφόρος Μεσογείων. Προχωρήστε για 196 μέτρα.\r\n12. Στρίψτε δεξιά και μπείτε στην Ξανθίππου. Προχωρήστε για 12 μέτρα.\r\n13. Στρίψτε αριστερά και μπείτε στην Λεωφόρος Μεσογείων. Προχωρήστε για 53 μέτρα.\r\n14. Πηγαίνετε σε στάση 2η ΧΟΛΑΡΓΟΥ Bus και πάρτε το λεωφορείο 418 προς ΣΤ. ΕΘΝ. ΑΜΥΝΑΣ - ΣΧΟΛ. ΧΟΛΑΡΓΟΥ (ΚΥΚΛΙΚΗ). Ακολουθήστε τη διαδρομή για 10 στάσεις.\r\n15. Κατεβείτε στη στάση 5η ΣΧΟΛΕΙΩΝ ΧΟΛΑΡΓΟΥ.\r\n16. Κατεύθυνση βόρεια στην 25ης Μαρτίου. Προχωρήστε για 150 μέτρα.\r\n17. Φτάνετε στην 25ης Μαρτίου\r\n', 5, '25023 μέτρα', '97 λεπτά', '€1,4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cardnumber` (`cardnumber`),
  ADD UNIQUE KEY `discountnumber` (`discountnumber`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
