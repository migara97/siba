-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 06:44 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siba`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminName` varchar(60) NOT NULL,
  `adminPass` varchar(40) NOT NULL,
  `adminEmail` varchar(100) NOT NULL,
  `adminID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminName`, `adminPass`, `adminEmail`, `adminID`) VALUES
('dffefwf', '45417', 'pasindulakshitha0@gmail.com', 'EX2');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_ID` varchar(25) NOT NULL,
  `course_Name` varchar(100) NOT NULL,
  `department_ID` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_ID`, `course_Name`, `department_ID`) VALUES
('BA', 'tertretrt', 'BAAAAAA'),
('bsc', 'bsc in IT', 'BAAAAAA'),
('BTEC', 'ehbugur', 'IT'),
('gbg676', 'gitkht', 'ENG'),
('IT132', 'rerewr', 'IT'),
('IT134', 'dadadad', 'IT'),
('IT135', 'jjhh', ' vf'),
('IT138', 'fdhfh', 'BAAAAAA');

-- --------------------------------------------------------

--
-- Table structure for table `course_subject`
--

CREATE TABLE `course_subject` (
  `course_ID` varchar(25) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject_ID` varchar(20) NOT NULL,
  `subject_name` varchar(60) NOT NULL,
  `subject_Credit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_subject`
--

INSERT INTO `course_subject` (`course_ID`, `semester`, `subject_ID`, `subject_name`, `subject_Credit`) VALUES
('IT134', 'Semester 2', '343', 'fr3r', 3),
('IT132', 'Semester 1', '5555', 'vfdsds', 2),
('bsc', 'Semester 1', 'IT167', 'fsefsefse', 2),
('bsc', 'Semester 1', 'IT188', 'fgfdg', 2),
('bsc', 'Semester 2', 'IT199', 'bfjfr', 3);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_ID` varchar(40) NOT NULL,
  `department_Name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_ID`, `department_Name`, `email`, `password`) VALUES
(' vf', '55', 'lahirusampath8899@gmail.com', ''),
('BA', '', '', ''),
('BAAA', 'Baklssa', 'lahirusampath8899@gmail.com', '84845'),
('BAAAAAA', 'Baklssa', 'lahirusampath8899@gmail.com', '80394'),
('BBB', 'uwq8duwd', 'mi@lmkl.ioo', '65625'),
('BTech', 'dfafefessr', 'harshabandaraherath@gmail.com', '64708'),
('BTechNo', 'dgereytert', 'harshabandaraherath@gmail.com', '48001'),
('Ca', '54', '', ''),
('eeet', 'hfdhhdfh', 'lahirusampath8899@gmail.com', '98092'),
('en', 'enhh', 'md@gamil.com', ''),
('ENG', 'hehhrhrhhrrhhr', 'miga@lmkl.ioo', '47848'),
('IT', 'sdswwfds', 'lahirusampath8899@gmail.com\r\n', '1111'),
('nnn', 'fdhdh', 'md@gamil.com', '28409'),
('SSS', 'wegrhrh', 'mgggi@lmkl.ioo', '28925');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userName` varchar(60) NOT NULL,
  `userPassword` varchar(100) NOT NULL,
  `userType` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userName`, `userPassword`, `userType`, `image`) VALUES
('BAAAAAA', 'cbe8ffcb78f6eede50da766c84812032', 'department', ''),
('BTech', '61902b624f0a47ebccf60c37179a2ef1', 'department', ''),
('BTechNo', '5b2b90013bf899246dfdfd063813e999', 'department', ''),
('eeet', '8c6dcba7c9f30a96d19ddd3daf97752a', 'department', ''),
('EX2', '904c8fb988626da85712893a8adc45f1', 'admin', 'No Image'),
('IT', 'b59c67bf196a4758191e42f76670ceba', 'department', ''),
('it001', '89ac3847f89c59936579cfc2ce0454ca', 'student', ''),
('it55', '57b8d9ceaa1a98dd5f889f2b9a4854db', 'student', ''),
('it66', 'dd4850c37ab93695eee67508960bde39', 'student', ''),
('it67', 'c0d29696fc1eea771df60ff95a4772ff', 'student', 'Upload/Kajol.jpg'),
('it69', 'c1addc2e0e8dd31640ce77c265cbbaa5', 'student', ''),
('migara', '3b712de48137572f3849aabd5666a4e3', 'student', ''),
('nnn', 'da03a6389035b1470aa3d49b3ba4360c', 'department', ''),
('result', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', ''),
('vf', '59c8c54d5605bcce38bfb6e7a7960b02', 'student', '');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `student_ID` varchar(60) NOT NULL,
  `is_approve` int(1) NOT NULL DEFAULT '0',
  `msg` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `expire` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `student_ID`, `is_approve`, `msg`, `date`, `expire`) VALUES
(2, 'it67', 1, 'gdsrghdsr', '2020-07-14', '2020-07-24'),
(3, 'result', 1, '6yhyjuj6uj', '2020-07-17', '2020-07-27'),
(4, 'result', 0, 'eeryreyyey', '2020-07-20', '2020-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `result_ID` int(11) NOT NULL,
  `student_ID` varchar(60) NOT NULL,
  `course_ID` varchar(60) NOT NULL,
  `semester` int(20) NOT NULL,
  `subjects_ID` varchar(40) NOT NULL,
  `subject_Credit` int(20) NOT NULL,
  `assignment_marks` int(60) NOT NULL,
  `paper_Marks` int(40) NOT NULL,
  `result` int(60) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `GPA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_ID` varchar(60) NOT NULL,
  `student_Name` varchar(100) NOT NULL,
  `student_Email` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `course_ID` varchar(50) NOT NULL,
  `student_Password` varchar(100) NOT NULL,
  `st_Number` int(11) NOT NULL,
  `department_ID` varchar(60) NOT NULL,
  `st_Address` varchar(150) NOT NULL,
  `st_NIC` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_ID`, `student_Name`, `student_Email`, `gender`, `DOB`, `course_ID`, `student_Password`, `st_Number`, `department_ID`, `st_Address`, `st_NIC`) VALUES
('it001', 'lalala', 'k1975.lahiru@gmail.com', 'Male', '1993-12-26', '', '40720', 774594957, 'BAAAAAA', '', ''),
('it66', 'mmm', 'migaraliya@lmkl.ioo', '', '1997-01-16', 'bsc', '43057', 714594957, 'BAAAAAA', '', ''),
('it67', 'mjyh', 'lahirusampath8899@gmail.com', 'Male', '1995-01-31', '54', '20131', 775715197, 'BTech', 'ererwat', '972211222v'),
('it69', 'eweew', 'miga@lmkl.ioo', 'Male', '2020-07-17', '', '82030', 774594957, 'BAAAAAA', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_subjects`
--

CREATE TABLE `student_subjects` (
  `id` int(11) NOT NULL,
  `course_ID` varchar(60) NOT NULL,
  `student_ID` varchar(100) NOT NULL,
  `samester` varchar(20) NOT NULL,
  `subjects_ID` varchar(60) NOT NULL,
  `subject_name` varchar(60) NOT NULL,
  `subject_Credit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_subjects`
--

INSERT INTO `student_subjects` (`id`, `course_ID`, `student_ID`, `samester`, `subjects_ID`, `subject_name`, `subject_Credit`) VALUES
(1, 'bsc', 'it67', 'Semester 1', 'IT167', 'fsefsefse', 2),
(2, 'bsc', 'it67', 'Semester 1', 'IT188', 'fgfdg', 2),
(3, 'bsc', 'it67', 'Semester 2', 'IT199', 'bfjfr', 3),
(4, 'bsc', 'it001', 'Semester 1', 'IT167', 'fsefsefse', 2),
(5, 'bsc', 'it001', 'Semester 1', 'IT188', 'fgfdg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_ID`);

--
-- Indexes for table `course_subject`
--
ALTER TABLE `course_subject`
  ADD PRIMARY KEY (`subject_ID`),
  ADD KEY `Test` (`course_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`userName`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`result_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_ID`);

--
-- Indexes for table `student_subjects`
--
ALTER TABLE `student_subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `result_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_subjects`
--
ALTER TABLE `student_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_subject`
--
ALTER TABLE `course_subject`
  ADD CONSTRAINT `Test` FOREIGN KEY (`course_ID`) REFERENCES `course` (`Course_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
