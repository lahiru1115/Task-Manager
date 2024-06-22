-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 22, 2024 at 04:15 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task_manager`
--
CREATE DATABASE IF NOT EXISTS `task_manager` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `task_manager`;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=311 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `username`, `title`, `description`, `date`, `timestamp`) VALUES
(309, 'Dave', 'Deploy the latest version of the application', 'Deploy the latest version of the application to the server, and verify that all services are running smoothly.', '2024-06-25', '2024-06-22 03:28:53'),
(310, 'Trudy', 'Conduct a thorough code review for quality assurance', 'Review the recent code changes for quality and adherence to coding standards, providing feedback as needed.', '2024-07-04', '2024-06-22 03:28:53'),
(306, 'Olivia', 'Conduct user interviews to gather insights', 'Interview users to gather insights on their experience with the product, focusing on pain points and suggestions.', '2024-06-29', '2024-06-22 03:28:53'),
(307, 'Peggy', 'Prepare a sales pitch presentation for clients', 'Create a comprehensive sales pitch presentation for potential clients, highlighting key benefits and features.', '2024-06-30', '2024-06-22 03:28:53'),
(308, 'Quincy', 'Implement the new feature as discussed in the meeting', 'Develop the new feature as discussed in the last meeting, ensuring it meets all specified requirements.', '2024-07-01', '2024-06-22 03:28:53'),
(304, 'Ivan', 'Create a comprehensive marketing plan', 'Develop a detailed marketing strategy for the new product, including target audience and channels.', '2024-06-23', '2024-06-22 03:28:53'),
(305, 'Judy', 'Analyze recent user feedback and trends', 'Examine the recent feedback from users and report findings to the product development team.', '2024-06-24', '2024-06-22 03:28:53'),
(303, 'Grace', 'Review recent pull requests from the team', 'Check and approve the latest pull requests from the team, providing detailed feedback where necessary to ensure code quality and adherence to coding standards.', '2024-06-22', '2024-06-22 03:28:53'),
(301, 'Rachel', 'Fix security issues identified in the recent audit', 'Address the security vulnerabilities identified in the recent audit, and implement necessary measures.', '2024-07-02', '2024-06-22 03:28:53'),
(302, 'Sam', 'Update the website content to reflect recent changes', 'Refresh the content on the website to reflect recent changes, including new products and services.', '2024-07-03', '2024-06-22 03:28:53'),
(298, 'Frank', 'Optimize database performance for large queries', 'Improve the performance of the database queries, especially those involving large datasets.', '2024-06-22', '2024-06-22 03:28:53'),
(299, 'Heidi', 'Plan the next sprint planning meeting', 'Organize the agenda for the next sprint planning meeting, including discussion topics and goals.', '2024-06-30', '2024-06-22 03:28:53'),
(300, 'Charlie', 'Design a new logo for the product launch that aligns with brand identity', 'Create a new logo for the upcoming product launch, ensuring it aligns with the brand identity. The new logo should be modern, visually appealing, and easily recognizable.', '2024-06-22', '2024-06-22 03:28:53'),
(295, 'Mallory', 'Write unit tests for the new application features', 'Add unit tests for the new features in the application to ensure they function as expected.', '2024-06-27', '2024-06-22 03:28:53'),
(296, 'Nathan', 'Update the user guide with latest features', 'Revise the user guide with the latest features and updates, ensuring all information is accurate.', '2024-06-28', '2024-06-22 03:28:53'),
(297, 'Bob', 'Update API documentation for new endpoints', 'Add the new API endpoints to the documentation, including examples and usage scenarios.', '2024-10-15', '2024-06-22 03:28:53'),
(294, 'Laura', 'Design UI mockups for the new interface', 'Create detailed mockups for the new user interface, including different screen sizes and devices.', '2024-06-26', '2024-06-22 03:28:53'),
(293, 'Kevin', 'Set up CI/CD pipeline for automated deployments', 'Configure the CI/CD pipeline for automated deployments, including testing and deployment stages.', '2024-06-25', '2024-06-22 03:28:53'),
(291, 'Alice', 'Fix critical bug in login page', 'Resolve the login page issue where users cannot log in due to authentication failure.', '2024-06-22', '2024-06-22 03:28:53'),
(292, 'Eve', 'Test the payment gateway integration for ecommerce site', 'Ensure the payment gateway integration is working properly by conducting end-to-end tests. Verify that transactions are processed accurately and that the system handles errors gracefully.', '2024-06-22', '2024-06-22 03:28:53');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
