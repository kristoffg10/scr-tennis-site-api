-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 27, 2026 at 05:20 PM
-- Server version: 8.0.44-0ubuntu0.22.04.1
-- PHP Version: 8.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ib3`
--

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_initial` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `effectivity` date NOT NULL,
  `expiry` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `lastname`, `firstname`, `middle_initial`, `license_type`, `license_id`, `effectivity`, `expiry`, `created_at`, `updated_at`, `deleted_at`) VALUES
('436f3b2a-e01a-11f0-830d-00155d29d2e9', 'ABAD', 'VENFIL', 'V', 'Life', '2624542-8763776-000000', '2024-06-14', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f4a16-e01a-11f0-830d-00155d29d2e9', 'ALBITOS', 'EVERLITA', 'I', 'Life', '2315474-7637760-000000', '2023-03-03', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f5128-e01a-11f0-830d-00155d29d2e9', 'ALIX', 'MIRASOL', 'O', 'Life', '2465018-7637760-000000', '2021-10-14', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f51ed-e01a-11f0-830d-00155d29d2e9', 'AMORA', 'DEOFFREY BEN', 'F', 'Life', '4516631-5763776-000000', '2022-06-10', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f525f-e01a-11f0-830d-00155d29d2e9', 'ANGELES', 'JOHN ROY', 'A', 'Life', '2812214-7763776-000000', '2022-09-01', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f52c0-e01a-11f0-830d-00155d29d2e9', 'ANTIOJO', 'REYNALDO', 'D', 'Life', '0834618-7637760-000000', '2023-11-21', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f5322-e01a-11f0-830d-00155d29d2e9', 'APOLONIO', 'ANGELO MIGUEL', 'C', 'Life', '6728512-9763776-000000', '2021-02-10', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f5386-e01a-11f0-830d-00155d29d2e9', 'ARRIOLA', 'HOAGY', 'P', 'Life', '2502316-4763776-000000', '2018-07-31', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f54c0-e01a-11f0-830d-00155d29d2e9', 'ATIENZA', 'ELOISA JEAN', 'B', 'Life', '3348763-1763776-000000', '2023-12-20', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f5556-e01a-11f0-830d-00155d29d2e9', 'ATIL', 'MARI TONEE', 'P', 'Life', '4291961-4763776-000000', '2023-08-14', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f55c0-e01a-11f0-830d-00155d29d2e9', 'AUSTRIA', 'JELO', 'B', 'Life', '2870238-9763776-000000', '2022-11-10', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f563d-e01a-11f0-830d-00155d29d2e9', 'BACOLOD', 'ZACH ANDREW', 'D', 'Life', '7357723-8763776-000000', '2021-02-10', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f56a8-e01a-11f0-830d-00155d29d2e9', 'BALANKIG', 'CHRISTINE', 'C', 'Life', '3890070-7637760-000000', '2024-05-27', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f57f2-e01a-11f0-830d-00155d29d2e9', 'BALDO', 'MA JESSICA', 'B', 'Life', '6472929-7637760-000000', '2024-05-27', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f58a2-e01a-11f0-830d-00155d29d2e9', 'BANZON', 'ANA LIZZA', 'D', 'Life', '4385552-4763776-000000', '2025-07-09', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f5a0a-e01a-11f0-830d-00155d29d2e9', 'BAYSIC', 'CAMILLE ROSE', 'T', 'Life', '0398828-7637760-000000', '2024-05-21', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f5aa7-e01a-11f0-830d-00155d29d2e9', 'BELISARIO', 'MARY GRACE', 'S', 'Life', '8038754-8763776-000000', '2024-10-08', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f5c15-e01a-11f0-830d-00155d29d2e9', 'CABELIZA', 'LEVY', 'C', 'Life', '1564329-7637760-000000', '2025-02-06', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f5c7f-e01a-11f0-830d-00155d29d2e9', 'CHUA', 'MARY ROSE', 'F', 'Life', '6732271-7637760-000000', '2021-02-10', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f5ce3-e01a-11f0-830d-00155d29d2e9', 'CUBA', 'DYLINDIA', 'P', 'Life', '0917658-7637760-000000', '2017-06-08', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f5d42-e01a-11f0-830d-00155d29d2e9', 'CUNANAN', 'CATHERINE', '-', 'Life', '5425811-3763776-000000', '2019-12-23', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f5daf-e01a-11f0-830d-00155d29d2e9', 'DE LEON', 'EUGENE ANDREW', 'C', 'Life', '1424393-7763776-000000', '2017-04-25', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f5ec4-e01a-11f0-830d-00155d29d2e9', 'DE OCAMPO', 'LIZETH', 'B', 'Life', '8509932-7763776-000000', '2023-07-18', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f5f7a-e01a-11f0-830d-00155d29d2e9', 'DEFENSOR', 'NIKO RYAN', 'J', 'Life', '8103838-7637760-000000', '2022-12-02', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6005-e01a-11f0-830d-00155d29d2e9', 'DIMAYUGA', 'JOENEL', 'S', 'Life', '7910142-1763776-000000', '2024-02-26', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6072-e01a-11f0-830d-00155d29d2e9', 'DIVA', 'ANNA RACQUEL', 'A', 'Life', '1224257-8763776-000000', '2023-02-10', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f60d7-e01a-11f0-830d-00155d29d2e9', 'DIZON', 'MARK JOHN CHRISTOPHER', 'G', 'Life', '5422004-5763776-000000', '2024-08-22', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6141-e01a-11f0-830d-00155d29d2e9', 'ESPALDON', 'MA. JESUSA', 'C', 'Life', '4559348-4763776-000000', '2023-03-31', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f61a1-e01a-11f0-830d-00155d29d2e9', 'ESPIRITU', 'MICHAEL', 'D', 'Life', '4754675-6763776-000000', '2024-08-19', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f64a7-e01a-11f0-830d-00155d29d2e9', 'FRASCO', 'ROXANNE VANESSA', 'D', 'Life', '7306361-7637760-000000', '2024-08-22', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f650a-e01a-11f0-830d-00155d29d2e9', 'GALANG', 'LOURDES', 'P', 'Life', '6182972-7637760-000000', '2022-04-04', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f656d-e01a-11f0-830d-00155d29d2e9', 'GARCIA', 'DIANA', 'Y', 'Life', '1447447-6763776-000000', '2022-04-07', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f65d0-e01a-11f0-830d-00155d29d2e9', 'GARCIA', 'REYNALDO', 'J', 'Life', '6829645-3763776-000000', '2021-02-21', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6630-e01a-11f0-830d-00155d29d2e9', 'GUERINDOLA', 'MARY ANN', 'A', 'Life', '0997956-7637760-000000', '2022-08-15', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6697-e01a-11f0-830d-00155d29d2e9', 'GUSTILO', 'MA. YVONNE', 'T', 'Life', '6183703-7637760-000000', '2021-05-05', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f67e1-e01a-11f0-830d-00155d29d2e9', 'HALE', 'CHERIE LEI', 'C', 'Life', '8340885-1763776-000000', '2021-05-05', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6952-e01a-11f0-830d-00155d29d2e9', 'HERNANDEZ', 'CHRISTIAN', 'D', 'Life', '5563208-1763776-000000', '2022-12-19', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f69e1-e01a-11f0-830d-00155d29d2e9', 'HIDALGO', 'JEANNIFER', 'B', 'Life', '3379361-7637760-000000', '2023-04-17', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6a43-e01a-11f0-830d-00155d29d2e9', 'HOLGANZA', 'IMELDA GEORGIA', 'G', 'Life', '7270547-7637760-000000', '2025-05-07', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6aa5-e01a-11f0-830d-00155d29d2e9', 'JAMIN', 'LIEZEL', 'E', 'Life', '8171820-0763776-000000', '2025-07-31', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6b0b-e01a-11f0-830d-00155d29d2e9', 'JERMINA', 'ROXANNE', 'A', 'Life', '9540553-2763776-000000', '2023-06-09', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6b69-e01a-11f0-830d-00155d29d2e9', 'KAPUNAN', 'VIRGILIO', 'R', 'Life', '4696179-7637760-000000', '2021-12-06', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6bd6-e01a-11f0-830d-00155d29d2e9', 'LABAYOG', 'NATHALIE ROSE', 'S', 'Life', '6890555-4763776-000000', '2021-02-10', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6c37-e01a-11f0-830d-00155d29d2e9', 'LAMPREA', 'MARIA ROSARIO SOCORRO', 'V', 'Life', '3545911-7637760-000000', '2021-02-10', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6ccf-e01a-11f0-830d-00155d29d2e9', 'LIBOON', 'SAMANTHA', 'L', 'Life', '7002750-3763776-000000', '2023-08-14', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6d31-e01a-11f0-830d-00155d29d2e9', 'LINGA', 'IRENE', 'C', 'Life', '8726098-2763776-000000', '2025-08-22', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6d90-e01a-11f0-830d-00155d29d2e9', 'MACABALI', 'JOMARI', 'P', 'Life', '2401465-4763776-000000', '2023-03-03', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6e0a-e01a-11f0-830d-00155d29d2e9', 'MACAPAGAL', 'ANN MARGARETH', 'P', 'Life', '4788549-7763776-000000', '2023-10-03', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6e69-e01a-11f0-830d-00155d29d2e9', 'MAGPANTAY', 'MARIELLE', 'L', 'Life', '6787795-3763776-000000', '2025-05-21', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6ecf-e01a-11f0-830d-00155d29d2e9', 'MAGTIBAY', 'JESSICA MARA', 'M', 'Life', '1055609-7637760-00000', '2025-09-16', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6f32-e01a-11f0-830d-00155d29d2e9', 'MASIGLAT', 'JOHN CARLO', 'P', 'Life', '7564898-7763776-00000', '2021-05-05', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6f91-e01a-11f0-830d-00155d29d2e9', 'MATIAS', 'DWIGHT EMERSON', 'G', 'Life', '4111087-4763776-00000', '2019-12-23', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f6fef-e01a-11f0-830d-00155d29d2e9', 'MENDOZA', 'EDGAR', 'M', 'Life', '3775990-7637760-00000', '2021-05-05', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f704f-e01a-11f0-830d-00155d29d2e9', 'MERCADO', 'LESLIE', 'M', 'Life', '1072181-7637760-00000', '2025-08-22', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f7194-e01a-11f0-830d-00155d29d2e9', 'MIPHRANUM', 'MATTHEWS KYLE', 'N', 'Life', '9023010-5763776-00000', '2024-07-31', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f721f-e01a-11f0-830d-00155d29d2e9', 'MUEDAN', 'MARK', 'A', 'Life', '6776527-4763776-00000', '2021-02-10', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f7285-e01a-11f0-830d-00155d29d2e9', 'NAVARRO', 'GINA', 'A', 'Life', '5334320-3763776-00000', '2022-11-10', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f72e4-e01a-11f0-830d-00155d29d2e9', 'PEREZ', 'GILDA IRENE', 'R', 'Life', '9184952-5763776-00000', '2023-01-26', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f7347-e01a-11f0-830d-00155d29d2e9', 'PRADO', 'LARA MAE', 'T', 'Life', '2227803-7637760-00000', '2023-07-12', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f73a4-e01a-11f0-830d-00155d29d2e9', 'PUNZALAN', 'ANGELICA', 'M', 'Life', '1129697-7637760-00000', '2022-09-15', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f7406-e01a-11f0-830d-00155d29d2e9', 'QUILATON', 'RONNIE', 'P', 'Life', '1731689-1763776-00000', '2024-12-20', '2026-12-21', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f7468-e01a-11f0-830d-00155d29d2e9', 'RAMALES', 'JOHN LAURENCE', 'F', 'Life', '7153017-6763776-00000', '2022-11-10', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f74c9-e01a-11f0-830d-00155d29d2e9', 'REQUINO', 'JORLAND FLYNN', 'L', 'Life', '8356690-5763776-00000', '2023-10-03', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f7529-e01a-11f0-830d-00155d29d2e9', 'REQUINO', 'CHERRY ANN', 'D', 'Life', '1013859-7637760-00000', '2023-10-03', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f7588-e01a-11f0-830d-00155d29d2e9', 'REYES', 'CEZAR', 'R', 'Life', '1141571-7637760-00000', '2021-05-05', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f76e7-e01a-11f0-830d-00155d29d2e9', 'ROSANE', 'RUSELLA', 'S', 'Life', '9422941-7637760-00000', '2021-10-28', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f7774-e01a-11f0-830d-00155d29d2e9', 'SALAZAR', 'KENT ALVIN', 'D', 'Life', '8337662-3763776-00000', '2021-05-05', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f77e4-e01a-11f0-830d-00155d29d2e9', 'SALIGO', 'JAN JAEL', 'C', 'Life', '6332189-7637760-00000', '2023-07-04', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f784b-e01a-11f0-830d-00155d29d2e9', 'SAMPAYAN', 'JERSON', 'B', 'Life', '1523882-4763776-00000', '2025-10-30', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f78b0-e01a-11f0-830d-00155d29d2e9', 'SAN AGUSTIN', 'ROMULO', 'P', 'Life', '1208466-2763776-00000', '2017-01-19', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f7912-e01a-11f0-830d-00155d29d2e9', 'SAN JUAN', 'RENATO', 'M', 'Life', '4076584-0763776-00000', '2023-03-14', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f7973-e01a-11f0-830d-00155d29d2e9', 'SANCHEZ', 'MA. REMEDIOS', 'D', 'Life', '6742740-7637760-00000', '2023-09-20', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f79d2-e01a-11f0-830d-00155d29d2e9', 'SILVESTRE', 'AUREA', 'N', 'Life', '6195035-7637760-00000', '2017-04-04', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f7a34-e01a-11f0-830d-00155d29d2e9', 'SIM', 'LIEZEL', 'R', 'Life', '1278855-3763776-00000', '2022-03-25', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f8385-e01a-11f0-830d-00155d29d2e9', 'SOTELO', 'ALAN DAVID', 'B', 'Life', '8765203-3763776-00000', '2024-02-26', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f88d5-e01a-11f0-830d-00155d29d2e9', 'TAN', 'STEVEN', 'Y', 'Life', '5557901-2763776-00000', '2021-02-10', '2026-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f8979-e01a-11f0-830d-00155d29d2e9', 'URBIZTONDO', 'MYRA', 'V', 'Life', '1195419-7637760-00000', '2025-09-04', '2027-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL),
('436f89f6-e01a-11f0-830d-00155d29d2e9', 'ZOSIMO', 'MICHAEL', 'C', 'Life', '1211757-7637760-00000', '2017-04-25', '2025-12-31', '2025-12-23 16:13:38', '2025-12-23 16:13:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `annual_reports`
--

CREATE TABLE `annual_reports` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `featured` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `annual_reports`
--

INSERT INTO `annual_reports` (`id`, `title`, `subtitle`, `description`, `featured`, `created_at`, `updated_at`, `deleted_at`) VALUES
('061daee9-2b75-4397-a2bf-1eeb897bae8f', '2024 Annual Integrated Report', 'Synergy: Charting the Course for a New Chapter', 'The report reflects the collective strength, collaboration, and resilience that define GLAPI. It showcases how we have worked together to navigate change, strengthen our operations, and remain steadfast in our mission to protect and empower Filipinos.\r\n\r\nThrough this report, we aim to provide our stakeholders with a comprehensive view of our financial performance, operational highlights, governance practices, and sustainability initiatives—all geared towards building a stronger, more sustainable future.', 1, NULL, NULL, NULL),
('13c961da-e08b-4b78-8dfa-7c87d92bf043', '2023 Annual Integrated Report', NULL, NULL, 0, NULL, NULL, NULL),
('140c2b30-4745-4a9a-bf84-677c333a2cc5', '2022 Annual Integrated Report', NULL, NULL, 0, NULL, NULL, NULL),
('1e492837-cc9d-480f-beaf-1e565b78bd98', '2020 Annual Integrated Report', NULL, NULL, 0, NULL, NULL, NULL),
('32e43a38-4aa8-46b2-990f-69e53e00fd25', '2021 Annual Integrated Report', NULL, NULL, 0, NULL, NULL, NULL),
('623d2f8d-6b5f-497d-9a8f-4e4a67558f01', '2019 Annual Integrated Report', NULL, NULL, 0, NULL, NULL, NULL),
('7a454239-fa95-4190-a845-7cdf6d21f08d', '2016 Annual Integrated Report', NULL, NULL, 0, NULL, NULL, NULL),
('b63c8ee2-52aa-4968-a0dd-ee08b36e78f2', '2018 Annual Integrated Report', NULL, NULL, 0, NULL, NULL, NULL),
('d61e372c-c114-42fc-b876-2495718e9507', '2017 Annual Integrated Report', NULL, NULL, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('sustainability','blog','press-release') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL,
  `slug` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` int NOT NULL DEFAULT '1',
  `featured` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `type`, `date`, `slug`, `category_id`, `enabled`, `featured`, `created_at`, `updated_at`, `deleted_at`) VALUES
('0a5afc35-46f6-4e14-8744-4b4b0a9e395d', 'Sample Blog Article 10', 'This is the content for Sample Blog Article 10.', 'press-release', '2026-01-12 07:29:27', 'sample-blog-article-10', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:29:27', '2026-01-22 07:29:27', NULL),
('13f25325-9cc4-4ff8-ad80-a7633258038c', 'Building a Culture of Care in the Workplace', 'insert content', 'blog', '2025-11-13 21:58:49', 'building-a-culture-of-care-in-the-workplace', 'f1d160dd-6810-4256-926c-9aff02b33017', 1, 1, NULL, NULL, NULL),
('15c39620-feb3-4698-a70d-d62d17d43f67', 'Sample Blog Article 1', 'This is the content for Sample Blog Article 1.', 'sustainability', '2026-01-21 07:29:34', 'sample-blog-article-1', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:29:34', '2026-01-22 07:29:34', NULL),
('23464f8a-c4d9-4e0d-9017-1c5154d37127', 'InLife Benefits achieves continued growth in operating result thanks to an increasingly diversified business profile', 'insert content here', 'press-release', '2024-10-28 21:42:33', 'inlife-benefits-achieves-continued-growth-in-operating-result-thanks-to-an-increasingly-diversified-business-profile', 'f1d160dd-6810-4256-926c-9aff02b33017', 1, 0, NULL, NULL, NULL),
('24046931-2b17-460e-a04c-4b5276410c7d', 'Sample Blog Article 1', 'This is the content for Sample Blog Article 1.', 'blog', '2026-01-21 07:26:19', 'sample-blog-article-1', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:26:19', '2026-01-22 07:26:19', NULL),
('3c8b059b-de20-410d-b8c3-ab24b5e5ca45', 'Sample Blog Article 10', 'This is the content for Sample Blog Article 10.', 'blog', '2026-01-12 07:26:19', 'sample-blog-article-10', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:26:19', '2026-01-22 07:26:19', NULL),
('42648cfa-5022-44e0-8848-c3c0cd35e3cd', 'Sample Blog Article 7', 'This is the content for Sample Blog Article 7.', 'press-release', '2026-01-15 07:29:27', 'sample-blog-article-7', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:29:27', '2026-01-22 07:29:27', NULL),
('42d2ea1c-8e22-498e-ae1a-04b3cb8e17e2', 'InLife Benefits releases Full Year 2024 Results', 'insert content here', 'press-release', '2025-03-20 21:42:33', 'inlife-benefits-releases-full-year-2024-results', 'f1d160dd-6810-4256-926c-9aff02b33017', 1, 0, NULL, NULL, NULL),
('57d4886b-1493-4266-b513-46d523107dbf', 'Introducing Paperless Billing for our customers and partners.', 'InLife Benefits is committed to environmental sustainability by providing paperless billing. This initiative reduces paper waste, promotes efficiency,\r\nand offers customers a convenient way to manage their accounts while helping the planet.', 'sustainability', '2026-01-20 05:47:15', 'introducing-paperless-billing-for-our-customers-and-partners', '4c1406b2-86f9-4caf-ad95-99bd3217f075', 1, 0, NULL, NULL, NULL),
('5d55830a-b607-4791-9b85-9cad7f157ea8', 'Sample Blog Article 8', 'This is the content for Sample Blog Article 8.', 'blog', '2026-01-14 07:26:19', 'sample-blog-article-8', '97e0a130-f6b8-48e8-b8d0-ed14f2c0881c', 1, 0, '2026-01-22 07:26:19', '2026-01-22 07:26:19', NULL),
('60d490fa-54ce-4818-94d5-9a1ecee44369', 'Sample Blog Article 2', 'This is the content for Sample Blog Article 2.', 'sustainability', '2026-01-20 07:29:34', 'sample-blog-article-2', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:29:34', '2026-01-22 07:29:34', NULL),
('686eb1e6-bd54-49c0-bd1a-2499b6c4f8ac', 'Preparing Your Employees for Life’s ‘What Ifs’: Why Group Life and Health Insurance Matter', 'insert content', 'blog', '2025-11-12 21:58:49', 'preparing-your-employees-for-lifes-what-ifs-why-group-life-and-health-insurance-matter', '97e0a130-f6b8-48e8-b8d0-ed14f2c0881c', 1, 1, NULL, NULL, NULL),
('6d0e77f4-4f46-4a87-8484-dff1340d13fe', 'Sample Blog Article 4', 'This is the content for Sample Blog Article 4.', 'sustainability', '2026-01-18 07:29:34', 'sample-blog-article-4', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:29:34', '2026-01-22 07:29:34', NULL),
('6da5b08c-e442-4826-aee1-3654e039a00c', 'Sample Blog Article 6', 'This is the content for Sample Blog Article 6.', 'press-release', '2026-01-16 07:29:27', 'sample-blog-article-6', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:29:27', '2026-01-22 07:29:27', NULL),
('7588dc9e-94c9-456d-80e9-20566adeee57', 'Our Tree Planting Program', 'InLife Benefits is deeply committed to environmental stewardship, recognizing the vital role trees play in sustaining our planet. Through its dedicated tree planting programs, InLife Benefits actively contributes to reforestation efforts, biodiversity conservation, and the creation of a greener, healthier future for all.\r\n\r\nIn partnership with local communities and environmental organizations, InLife Benefits carefully selects tree species that are native to the region and well-suited to the local climate. These trees not only help restore degraded landscapes but also provide essential habitats for wildlife, support local ecosystems, and enhance the overall ecological balance.\r\n\r\nInLife Benefits\' tree planting activities extend beyond simply planting trees. The company also focuses on educating local communities about the importance of environmental conservation and sustainable practices. By empowering individuals with knowledge and skills, InLife Benefits fosters a sense of ownership and responsibility for the long-term care and protection of our natural resources.\r\n\r\nThrough its tree planting programs, InLife Benefits aims to mitigate the impacts of climate change, improve air and water quality, and enhance the resilience of local communities to environmental challenges. These efforts contribute to a more sustainable and equitable future for generations to come.\r\n\r\nInLife Benefits invites its employees, customers, and partners to join in its tree planting initiatives. By working together, we can make a significant difference in creating a greener, healthier, and more sustainable world for all.', 'sustainability', '2026-01-21 05:47:15', 'our-tree-planting-program', '85b5cb80-2c8c-486a-9296-f1264a0cf776', 1, 0, NULL, NULL, NULL),
('76e4858f-db6f-4165-ae6d-9446fbfc7606', 'InLife Benefits continues to achieve strong growth in operating result driven  by all business segments', 'insert content here', 'press-release', '2024-11-27 21:42:33', 'inlife-benefits-continues-to-achieve-strong-growth-in-operating-result-driven-by-all-business-segments', 'f1d160dd-6810-4256-926c-9aff02b33017', 1, 0, NULL, NULL, NULL),
('77110c32-1d17-49d4-8290-fc1f0b369df7', 'Sample Blog Article 3', 'This is the content for Sample Blog Article 3.', 'press-release', '2026-01-19 07:29:27', 'sample-blog-article-3', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:29:27', '2026-01-22 07:29:27', NULL),
('7f1ad9b2-184c-4452-b0e0-f13879d80a30', 'Sample Blog Article 7', 'This is the content for Sample Blog Article 7.', 'blog', '2026-01-15 07:26:19', 'sample-blog-article-7', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:26:19', '2026-01-22 07:26:19', NULL),
('845d4c38-e8bb-4972-bc5b-d42387e432cc', 'InLife Benefits Consolidated Results  as of 30 June 2024', 'insert content', 'press-release', '2024-10-11 21:42:33', 'inlife-benefits-consolidated-results-as-of-30-june-2024', 'f1d160dd-6810-4256-926c-9aff02b33017', 1, 0, NULL, NULL, NULL),
('85e87475-c1f6-45a6-8ecb-926794a278c7', 'Sample Blog Article 6', 'This is the content for Sample Blog Article 6.', 'blog', '2026-01-16 07:26:19', 'sample-blog-article-6', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:26:19', '2026-01-22 07:26:19', NULL),
('9f7c0621-84d5-42f8-bbc1-4a14ddbe5f6d', 'Sample Blog Article 5', 'This is the content for Sample Blog Article 5.', 'sustainability', '2026-01-17 07:29:34', 'sample-blog-article-5', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:29:34', '2026-01-22 07:29:34', NULL),
('a48790b1-7b86-47d7-97d2-03cd84080d50', 'Healthy Team, Happy Budget: 10 Wellness Moves That Save Real Money', 'insert content', 'blog', '2025-09-15 21:58:49', 'healthy-team-happy-budget-10-wellness-moves-that-save-real-money', '97e0a130-f6b8-48e8-b8d0-ed14f2c0881c', 1, 0, NULL, NULL, NULL),
('a5e668ca-1e71-4a3c-b69d-7c1c3c3c4755', 'Sample Blog Article 1', 'This is the content for Sample Blog Article 1.', 'press-release', '2026-01-21 07:29:27', 'sample-blog-article-1', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:29:27', '2026-01-22 07:29:27', NULL),
('a800193d-577c-4547-ab14-f59116cd03a9', 'Sample Blog Article 2', 'This is the content for Sample Blog Article 2.', 'press-release', '2026-01-20 07:29:27', 'sample-blog-article-2', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:29:27', '2026-01-22 07:29:27', NULL),
('aa17ead0-d2ba-4f31-b037-293394ec0fe1', 'Sample Blog Article 5', 'This is the content for Sample Blog Article 5.', 'press-release', '2026-01-17 07:29:27', 'sample-blog-article-5', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:29:27', '2026-01-22 07:29:27', NULL),
('b4e08897-05bd-4a22-a100-01a55da0820a', 'Sample Blog Article 6', 'This is the content for Sample Blog Article 6.', 'sustainability', '2026-01-16 07:29:34', 'sample-blog-article-6', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:29:34', '2026-01-22 07:29:34', NULL),
('b537f8e2-726c-4e89-93b3-ece2d3aba96c', 'Sample Blog Article 4', 'This is the content for Sample Blog Article 4.', 'blog', '2026-01-18 07:26:19', 'sample-blog-article-4', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:26:19', '2026-01-22 07:26:19', NULL),
('b65d94d0-80ea-48b6-b155-998129341e10', 'Sample Blog Article 8', 'This is the content for Sample Blog Article 8.', 'sustainability', '2026-01-14 07:29:34', 'sample-blog-article-8', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:29:34', '2026-01-22 07:29:34', NULL),
('ca061ebb-abca-4d07-b74a-8fb255ec7ac6', 'Sample Blog Article 9', 'This is the content for Sample Blog Article 9.', 'press-release', '2026-01-13 07:29:27', 'sample-blog-article-9', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:29:27', '2026-01-22 07:29:27', NULL),
('ca2936d5-ab8c-40e2-8af9-54ab45de14d4', 'Sample Blog Article 7', 'This is the content for Sample Blog Article 7.', 'sustainability', '2026-01-15 07:29:34', 'sample-blog-article-7', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:29:34', '2026-01-22 07:29:34', NULL),
('cdaf38ef-a417-4c91-a5c8-c94ac5651e80', 'Sample Blog Article 9', 'This is the content for Sample Blog Article 9.', 'blog', '2026-01-13 07:26:19', 'sample-blog-article-9', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:26:19', '2026-01-22 07:26:19', NULL),
('ce8d6f67-2518-4d85-8651-00163c60675d', 'Sample Blog Article 9', 'This is the content for Sample Blog Article 9.', 'sustainability', '2026-01-13 07:29:34', 'sample-blog-article-9', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:29:34', '2026-01-22 07:29:34', NULL),
('d28c253b-c911-41ef-8f34-1411c4b9cee1', 'Cultivating diversity, equality and inclusivity across all our teams.', 'InLife Benefits fosters a culture of inclusivity by embracing diverse backgrounds, perspectives, and experiences. We are committed to providing equal opportunities, fair treatment, and a supportive environment where every employee can thrive and contribute their best.', 'sustainability', '2026-01-21 05:47:15', 'cultivating-diversity-equality-and-inclusivity-across-all-our-teams', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, NULL, NULL, NULL),
('d7f3768d-eb0f-4982-bae5-0995e2909b51', 'Sample Blog Article 3', 'This is the content for Sample Blog Article 3.', 'sustainability', '2026-01-19 07:29:34', 'sample-blog-article-3', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:29:34', '2026-01-22 07:29:34', NULL),
('df14e8f2-af6e-454e-adbd-4aaff011f1ac', 'Sample Blog Article 2', 'This is the content for Sample Blog Article 2.', 'blog', '2026-01-20 07:26:19', 'sample-blog-article-2', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:26:19', '2026-01-22 07:26:19', NULL),
('ebceba2b-a57f-4256-8e1f-c2a081998d9e', 'Sample Blog Article 3', 'This is the content for Sample Blog Article 3.', 'blog', '2026-01-19 07:26:19', 'sample-blog-article-3', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:26:19', '2026-01-22 07:26:19', NULL),
('ed3c34d6-e995-4606-8da1-fe83255a55d1', 'Sample Blog Article 10', 'This is the content for Sample Blog Article 10.', 'sustainability', '2026-01-12 07:29:34', 'sample-blog-article-10', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:29:34', '2026-01-22 07:29:34', NULL),
('ef5cad5e-f79e-4459-9ef1-42a700b1fd1c', 'Sample Blog Article 8', 'This is the content for Sample Blog Article 8.', 'press-release', '2026-01-14 07:29:27', 'sample-blog-article-8', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:29:27', '2026-01-22 07:29:27', NULL),
('f0291cf3-71d8-4a68-b75a-93d8a61f43fc', 'InLife and Generali Unite to Forge a Stronger Future in Insurance', 'insert content here', 'press-release', '2025-05-22 21:42:33', 'inlife-and-generali-unite-to-forge-a-stronger-future-in-insurance', 'f1d160dd-6810-4256-926c-9aff02b33017', 1, 0, NULL, NULL, NULL),
('f17c9ebc-8f73-4756-9806-e39bbe882d54', 'Maximize Your Healthcare: How Our Plans Work With PhilHealth for Smarter Care', 'insert content', 'blog', '2025-10-07 21:58:49', 'maximize-your-healthcare-how-our-plans-work-with-philhealth-for-smarter-care', '97e0a130-f6b8-48e8-b8d0-ed14f2c0881c', 1, 0, NULL, NULL, NULL),
('f2b8c539-99fc-4759-8673-025f0090e25c', 'Sample Blog Article 4', 'This is the content for Sample Blog Article 4.', 'press-release', '2026-01-18 07:29:27', 'sample-blog-article-4', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:29:27', '2026-01-22 07:29:27', NULL),
('f950c422-4feb-41c6-ada2-d9485a1abe49', 'Sample Blog Article 5', 'This is the content for Sample Blog Article 5.', 'blog', '2026-01-17 07:26:19', 'sample-blog-article-5', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-22 07:26:19', '2026-01-22 07:26:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buttons`
--

CREATE TABLE `buttons` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_link_out` tinyint NOT NULL DEFAULT '0',
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` tinyint DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buttons`
--

INSERT INTO `buttons` (`id`, `parent`, `button_name`, `is_link_out`, `link`, `order`, `created_at`, `updated_at`, `deleted_at`) VALUES
('037d4134-1d26-499b-b513-efe0805083fa', 'ab134e6c-c5e0-4bac-a054-7613b5af1098', 'Google play Store', 1, 'https://play.google.com/store/apps/details?id=ph.com.insularlife.access.CustomerPortalMobile&pcampaignid=web_share', 2, NULL, NULL, NULL),
('16e7aefc-29fc-46ac-b025-c69880383fb2', '93626331-3954-4ad6-bcf4-7bd5d39b355f', 'See Our Sustainability & CSR', 0, '@', NULL, NULL, NULL, NULL),
('1901ddd2-1f5c-4d68-a521-c30a088b9019', 'eb1c8afa-a784-4eec-80f0-64ac118809a9', 'Google play Store', 1, 'https://play.google.com/store/apps/details?id=ph.com.insularlife.access.CustomerPortalMobile&pcampaignid=web_share', 2, NULL, NULL, NULL),
('30beb064-d20d-4a0e-b8f7-59f76b2ebfa3', '228a8bd6-d7fb-41ac-9a94-dcfa9ee4d92f', 'Discover Our Digital Platforms', 0, '#', NULL, NULL, NULL, NULL),
('361c3fac-f778-4442-abbf-24cf14e8fdf3', '620cf776-4830-413c-b887-e9517f95211b', 'Apple App Store', 1, 'https://apps.apple.com/ph/app/inlife-app/id1609007099', 1, NULL, NULL, NULL),
('369e9d87-9eaf-4247-a0db-8880e2b865fb', 'cc30c0ed-ddfd-449a-b5fa-35d95d03ffc4', 'Google play Store', 1, 'https://play.google.com/store/apps/details?id=ph.com.insularlife.access.CustomerPortalMobile&pcampaignid=web_share', 2, NULL, NULL, NULL),
('3e56ceda-4c79-46c4-a6e6-feec9ed33b89', 'cd03399a-5ce7-4e28-9de4-016b88a5c9d5', 'Explore Corporate Governance', 0, '@', NULL, NULL, NULL, NULL),
('3f1860ce-a33e-4334-92d8-934bcaaa1f20', '848c4b84-3916-44bc-a01d-2eaa5b1c44d9', 'Visit Sheroes Website', 1, 'https://google.com', NULL, NULL, NULL, NULL),
('4ad7fe19-9364-4a7d-8125-b463e944386e', 'e5f084af-3d78-4a8a-9bdc-bbbb99d2a99c', 'Apple App Store', 1, 'https://apps.apple.com/ph/app/inlife-app/id1609007099', 1, NULL, NULL, NULL),
('4aeaa541-1b31-4462-992e-18c4569766f3', '6282bf09-5da5-4618-b5cf-74a83199bd50', 'Request for Proposal', 0, '#', 1, NULL, NULL, NULL),
('6a76b71f-2ec8-4e44-868d-178bfe11d556', 'd14ceb34-27a8-4c28-ad2a-bc551ddcb66c', 'Visit Our Help & FAQ Center', 0, '#', 1, NULL, NULL, NULL),
('8742cd11-679f-48ec-8b22-831f7a7f351a', 'e9d269d3-4d87-44ba-9f2b-473d7f7de107', 'Visit the InLife Website', 1, 'https://www.inlife.com.ph/', 1, NULL, NULL, NULL),
('87e680df-1c54-4523-b3fb-3bce07eebf4a', '45e9cd30-d2ed-400d-9062-267dc1ac3a1a', 'See Agent Accreditation', 0, '#', 1, NULL, NULL, NULL),
('a2646ba5-cdb5-48e2-b29b-ac949405f63e', 'fb8b66f6-f030-4970-96dc-b0d7c7209e6b', '#', 0, '#', NULL, NULL, NULL, NULL),
('a66a5e31-1a96-45d6-a084-1531338802d9', '620cf776-4830-413c-b887-e9517f95211b', 'Google play Store', 1, 'https://play.google.com/store/apps/details?id=ph.com.insularlife.access.CustomerPortalMobile&pcampaignid=web_share', 2, NULL, NULL, NULL),
('a7b5c38a-3ae7-4748-8a7e-88a197686d21', '8a52b2de-56c6-40f4-9c86-67fc584c2256', 'See Downloadable Forms', 0, '/forms', 1, NULL, NULL, NULL),
('a819ed69-d19e-4a1e-a9e3-c7f2f98583d5', '087a5bac-63f3-4e8a-ada5-7d4bc33c1bb8', 'See Annual Integrated Reports', 0, '#', 1, NULL, NULL, NULL),
('aa838650-6a91-45d6-a9f0-11e084de1cbf', 'cb75b8b0-ccee-46f1-b2b2-e5ecc13e0c43', 'Careers at InLife Benefits', 0, '#', 1, NULL, NULL, NULL),
('afc94a4f-bdd7-43cb-b053-7916fc131ea9', '2bc5c657-67eb-49f0-9b8b-95a626ed9eb4', 'Discover Management Team', 0, '#', 1, NULL, NULL, NULL),
('b5179038-fb3c-4eea-ae6e-c08f3847f5ac', 'e5f084af-3d78-4a8a-9bdc-bbbb99d2a99c', 'Google play Store', 1, 'https://play.google.com/store/apps/details?id=ph.com.insularlife.access.CustomerPortalMobile&pcampaignid=web_share', 2, NULL, NULL, NULL),
('c0098495-db6f-4d7e-be0c-3fd36b58e03d', 'eb1c8afa-a784-4eec-80f0-64ac118809a9', 'Apple App Store', 1, 'https://apps.apple.com/ph/app/inlife-app/id1609007099', 1, NULL, NULL, NULL),
('d06b9616-c6af-49a6-a9c8-09ad5db1883b', 'ab134e6c-c5e0-4bac-a054-7613b5af1098', 'Apple App Store', 1, 'https://apps.apple.com/ph/app/inlife-app/id1609007099', 1, NULL, NULL, NULL),
('d15c889b-89d2-4be5-9492-805820f7be0a', '4839e9cb-8605-4013-ba02-32174b5137e9', '#', 0, '#', NULL, NULL, NULL, NULL),
('d546add8-d92c-49ce-a592-2f5a654f6f62', 'd0d3bcd9-81cb-4c3e-9319-8a6c7824037d', 'Visit our eShop', 1, 'https://www.inlife.com.ph/', 1, NULL, NULL, NULL),
('d6a1402b-9c4f-4692-bfe0-5c95b6e9ee76', '5987494e-57cc-48c0-a8b8-9d5d7b42212e', 'About Beneficiary Enrollment', 0, '#', 1, NULL, NULL, NULL),
('dcce9a8e-af06-4e85-a898-6956ad2dbbc4', 'cc30c0ed-ddfd-449a-b5fa-35d95d03ffc4', 'Apple App Store', 1, 'https://apps.apple.com/ph/app/inlife-app/id1609007099', 1, NULL, NULL, NULL),
('e006e291-c08a-4380-8292-cf685c52f808', '6938eae5-1204-4c4d-979b-e645aa9afe59', 'See List of Agents', 0, '#', 1, NULL, NULL, NULL),
('fe86377f-2fb3-40e5-98fd-afa5a0a36669', 'e252184b-330e-4559-b8c0-6e3a1a282973', 'Go to Member Portal', 1, 'https://memberportal.generali.com.ph/', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrangement` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefits` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsibilities` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualifications` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL,
  `slug` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `title`, `department`, `arrangement`, `address`, `benefits`, `responsibilities`, `qualifications`, `date`, `slug`, `enabled`, `created_at`, `updated_at`, `deleted_at`) VALUES
('2fa9be6e-9215-4804-95d0-df11d04405cd', 'Senior Provider Network Specialist', 'Operations - Claims', 'Hybrid (3 days onsite weekly)', 'Makati City', 'insert benefits here', 'insert responsibilities here', 'insert duties here', '2026-01-20 10:11:48', 'senior-provider-network-specialist', 1, NULL, NULL, NULL),
('e2f98ee7-84b7-4fe2-bc5c-647d3f86a37a', 'Senior Claims Specialist', 'Operations - Claims', 'Hybrid (3 days onsite weekly)', 'Makati City', 'insert benefits here', 'insert responsibilities here', 'insert duties here', '2026-01-21 10:11:48', 'senior-claims-specialist', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sequence` int DEFAULT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_resized` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `parent_id`, `name`, `size`, `title`, `alt`, `caption`, `sequence`, `path`, `path_resized`, `model`, `category`, `link`, `created_at`, `updated_at`, `deleted_at`) VALUES
('acf9fa9e-3e0d-4af8-ae37-866513142f02', '1d72089d-80bd-47af-8782-65f1d7e98f8f', 'get-instagram-api-token-for-website-integration_15-14-26-812428.pdf', '1.39 MB', NULL, NULL, NULL, 0, 'uploads/page_section/2026-01-27/get-instagram-api-token-for-website-integration_15-14-26-812428.pdf', 'uploads/page_section/2026-01-27/get-instagram-api-token-for-website-integration_15-14-26-812428.pdf', 'page_section', 'pdf', NULL, '2026-01-27 07:14:26', '2026-01-27 07:14:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sequence` int DEFAULT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_resized` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `parent_id`, `name`, `size`, `title`, `alt`, `caption`, `sequence`, `path`, `path_resized`, `model`, `category`, `link`, `created_at`, `updated_at`, `deleted_at`) VALUES
('026dad8f-e0b3-4fd3-9ca5-e66a2b657ecf', 'e390b688-115c-47c6-8007-b412df0f06d0', 'Screenshot from 2025-06-25 17-33-04.png', '64.63 KB', NULL, 'awaw', NULL, 0, 'uploads/doctor/2025-07-02/screenshot-from-2025-06-25-17-33-04_15-42-48-393660.png', 'uploads/doctor/2025-07-02/screenshot-from-2025-06-25-17-33-04_15-42-48-393660_resized.png', 'doctor', 'main_image', NULL, '2025-07-02 07:42:48', '2025-07-02 07:42:48', NULL),
('0e4e2443-75ad-469b-9708-44cc8bfd2934', 'c64dd884-cfdf-401b-bae1-6c002ba03230', '500x500.png', '34.77 KB', NULL, 'werwe', NULL, 0, 'uploads/section_tab/2026-01-27/500x500_13-21-18-881336.png', 'uploads/section_tab/2026-01-27/500x500_13-21-18-881336_resized.png', 'section_tab', 'main_image', NULL, '2026-01-27 05:21:19', '2026-01-27 05:21:19', NULL),
('1591c368-359f-4953-97f2-8a6f894ea5d9', '1959a4d6-7c3c-4887-bc8d-3dd6e903a2db', 'placeholder (1) (1).jpg', '43.64 KB', NULL, 's', NULL, 0, 'uploads/doctor/2025-11-24/placeholder-1-1_18-16-46-950411.jpg', 'uploads/doctor/2025-11-24/placeholder-1-1_18-16-46-950411_resized.jpg', 'doctor', 'main_image', NULL, '2025-11-24 18:16:47', '2025-11-24 18:16:47', NULL),
('25249e0a-1c02-452e-9d94-366019449338', '17ae20f0-3eb6-42be-b047-c3dce8c5316f', 'Group 19090 (1).png', '2.05 KB', NULL, 'xzcf', NULL, 0, 'uploads/h_m_o/2025-11-26/group-19090-1_17-43-50-175332.png', 'uploads/h_m_o/2025-11-26/group-19090-1_17-43-50-175332_resized.png', 'h_m_o', 'main_image', NULL, '2025-11-26 17:43:50', '2025-11-26 17:43:50', NULL),
('25af2722-7ae7-4672-980e-c84aa6c0e184', 'd2852ecf-5449-4d61-8840-d427a60b15bb', '276-x-390_15-23-33-564581.jpg', '8.38 KB', NULL, 'test', NULL, 0, 'uploads/speciality/2025-07-09/276-x-390-15-23-33-564581_13-26-16-110280.jpg', 'uploads/speciality/2025-07-09/276-x-390-15-23-33-564581_13-26-16-110280_resized.jpg', 'speciality', 'main_image', NULL, '2025-07-09 05:26:16', '2025-07-09 05:26:16', NULL),
('269a6540-fbbe-4339-9755-e609f99ab704', 'fbceb035-5fd6-4a78-b2ca-fb2d3de79ee4', '276-x-390_15-23-33-564581.jpg', '8.38 KB', NULL, 'test', NULL, 0, 'uploads/doctor/2025-12-01/276-x-390-15-23-33-564581_10-30-33-378343.jpg', 'uploads/doctor/2025-12-01/276-x-390-15-23-33-564581_10-30-33-378343_resized.jpg', 'doctor', 'main_image', NULL, '2025-12-01 10:30:33', '2025-12-01 10:30:33', NULL),
('2fbbea3b-afa3-4a42-ac95-fe5569f2f326', '50e2d6f6-4acb-415a-9b37-ea2a366b01c2', '2022_SM_Supermalls_Logo.png', '116.80 KB', NULL, 'xc', NULL, 0, 'uploads/international_insurance/2025-11-26/2022-sm-supermalls-logo_17-52-18-021513.png', 'uploads/international_insurance/2025-11-26/2022-sm-supermalls-logo_17-52-18-021513_resized.png', 'international_insurance', 'main_image', NULL, '2025-11-26 17:52:18', '2025-11-26 17:52:18', NULL),
('44999faa-7278-4789-90fd-f4003be6f2c6', 'da5a070f-dc8c-4716-a1ce-aeade052725b', '667x416.png', '315.15 KB', NULL, 'test', NULL, 0, 'uploads/doctor/2025-11-24/667x416_14-32-52-117704.png', 'uploads/doctor/2025-11-24/667x416_14-32-52-117704_resized.png', 'doctor', 'main_image', NULL, '2025-11-24 14:32:52', '2025-11-24 14:32:52', NULL),
('455be22c-d2f0-42bd-b374-f9d7158cf767', '8400b348-492e-4376-b856-1e2b89f22ee8', 'data-privacy-top_01-46-54-195975.webp', '624.21 KB', NULL, 'awaw', NULL, 0, 'uploads/speciality/2025-07-10/data-privacy-top-01-46-54-195975_13-37-03-169764.webp', 'uploads/speciality/2025-07-10/data-privacy-top-01-46-54-195975_13-37-03-169764_resized.webp', 'speciality', 'main_image', NULL, '2025-07-10 05:37:03', '2025-07-10 05:37:03', NULL),
('49578ad2-9b44-44ce-ae0c-fbdb21aca322', '03ca965c-89e8-4ac4-8a50-f6f0b5923109', '276-x-390_15-23-33-564581.jpg', '8.38 KB', NULL, 'test', NULL, 0, 'uploads/specialty/2025-07-10/276-x-390-15-23-33-564581_15-58-09-559425.jpg', 'uploads/specialty/2025-07-10/276-x-390-15-23-33-564581_15-58-09-559425_resized.jpg', 'specialty', 'main_image', NULL, '2025-07-10 07:58:09', '2025-07-10 07:58:09', NULL),
('495c7a25-c2ae-410c-8b05-c4d7abf2c843', 'e55ad8c1-0bb7-4d9a-abd8-496a58a121b9', '276-x-390_15-23-33-564581.jpg', '8.38 KB', NULL, 'test', NULL, 0, 'uploads/doctor/2025-07-16/276-x-390-15-23-33-564581_14-23-23-961245.jpg', 'uploads/doctor/2025-07-16/276-x-390-15-23-33-564581_14-23-23-961245_resized.jpg', 'doctor', 'main_image', NULL, '2025-07-16 06:23:24', '2025-07-16 06:23:24', NULL),
('4bb905e8-4705-4129-b6ef-9aebb4b69632', '6d0af61c-cb56-11f0-a135-00155dd8dc27', 'Group 19090 (2).png', '2.37 KB', NULL, 'sda', NULL, 0, 'uploads/page_section/2025-12-01/group-19090-2_16-52-33-336262.png', 'uploads/page_section/2025-12-01/group-19090-2_16-52-33-336262_resized.png', 'page_section', 'mobile_image', NULL, '2025-12-01 16:52:33', '2025-12-01 16:52:33', NULL),
('5452731b-4c47-4877-a529-3b769e0205ed', '51126157-5b5b-44d7-aa46-6279f6d31f05', '276-x-390_15-23-33-564581.jpg', '8.38 KB', NULL, 'test', NULL, 0, 'uploads/speciality/2025-07-10/276-x-390-15-23-33-564581_15-44-59-582785.jpg', 'uploads/speciality/2025-07-10/276-x-390-15-23-33-564581_15-44-59-582785_resized.jpg', 'speciality', 'main_image', NULL, '2025-07-10 07:44:59', '2025-07-10 07:44:59', NULL),
('5d1858eb-c253-4c83-9058-06132d867dd0', '2908bcfe-e2e2-4741-8846-ea3d82c42280', 'WljP9nl7kKyiGfg1ZBZ6dhhLavhRHO_XkGEwCxOgZ1U.webp', '28.82 KB', NULL, 'test', NULL, 0, 'uploads/doctor/2025-11-12/wljp9nl7kkyigfg1zbz6dhhlavhrho-xkgewcxogz1u_13-37-41-748058.webp', 'uploads/doctor/2025-11-12/wljp9nl7kkyigfg1zbz6dhhlavhrho-xkgewcxogz1u_13-37-41-748058_resized.webp', 'doctor', 'main_image', NULL, '2025-11-12 05:37:41', '2025-11-12 05:37:41', NULL),
('601fd929-0ff2-4c1c-ac85-60fc4615784d', '685dd7ee-b153-4a12-bcfc-414b8e26b3b1', 'WljP9nl7kKyiGfg1ZBZ6dhhLavhRHO_XkGEwCxOgZ1U.webp', '28.82 KB', NULL, 'test', NULL, 0, 'uploads/speciality/2025-07-10/wljp9nl7kkyigfg1zbz6dhhlavhrho-xkgewcxogz1u_13-42-49-262475.webp', 'uploads/speciality/2025-07-10/wljp9nl7kkyigfg1zbz6dhhlavhrho-xkgewcxogz1u_13-42-49-262475_resized.webp', 'speciality', 'main_image', NULL, '2025-07-10 05:42:49', '2025-07-10 05:42:49', NULL),
('61efde66-996d-4529-a18d-18e313146e01', '5674ae7d-f1c4-4d78-ad53-6bb8166faf64', 'WljP9nl7kKyiGfg1ZBZ6dhhLavhRHO_XkGEwCxOgZ1U.webp', '28.82 KB', NULL, 'Test', NULL, 0, 'uploads/speciality/2025-07-10/wljp9nl7kkyigfg1zbz6dhhlavhrho-xkgewcxogz1u_13-44-11-949243.webp', 'uploads/speciality/2025-07-10/wljp9nl7kkyigfg1zbz6dhhlavhrho-xkgewcxogz1u_13-44-11-949243_resized.webp', 'speciality', 'main_image', NULL, '2025-07-10 05:44:12', '2025-07-10 05:44:12', NULL),
('6d818d05-d8ae-44b6-b9e5-d5459e9fce02', '285fbb92-82d7-4a14-8e4e-17ef68671d24', 'WljP9nl7kKyiGfg1ZBZ6dhhLavhRHO_XkGEwCxOgZ1U.webp', '28.82 KB', NULL, 'test', NULL, 0, 'uploads/doctor/2025-11-05/wljp9nl7kkyigfg1zbz6dhhlavhrho-xkgewcxogz1u_11-57-33-408405.webp', 'uploads/doctor/2025-11-05/wljp9nl7kkyigfg1zbz6dhhlavhrho-xkgewcxogz1u_11-57-33-408405_resized.webp', 'doctor', 'main_image', NULL, '2025-11-05 03:57:33', '2025-11-05 03:57:33', NULL),
('743aa67d-ab15-4879-94b5-d564f617c4f1', '474d8ed0-b690-4ae1-a725-7eddb19a4815', '500x500.png', '34.77 KB', NULL, '12', NULL, 0, 'uploads/plan_availment/2026-01-26/500x500_14-46-28-883263.png', 'uploads/plan_availment/2026-01-26/500x500_14-46-28-883263_resized.png', 'plan_availment', 'main_image', NULL, '2026-01-26 06:46:28', '2026-01-26 06:46:28', NULL),
('772b2f39-c343-4703-b00c-a9b728fece08', '6cf81163-b0a5-44d7-a40e-c739386fcf05', 'WljP9nl7kKyiGfg1ZBZ6dhhLavhRHO_XkGEwCxOgZ1U.webp', '28.82 KB', NULL, 'test', NULL, 0, 'uploads/doctor/2025-11-06/wljp9nl7kkyigfg1zbz6dhhlavhrho-xkgewcxogz1u_15-07-21-936628.webp', 'uploads/doctor/2025-11-06/wljp9nl7kkyigfg1zbz6dhhlavhrho-xkgewcxogz1u_15-07-21-936628_resized.webp', 'doctor', 'main_image', NULL, '2025-11-06 07:07:22', '2025-11-06 07:07:22', NULL),
('8bcae132-fa23-4376-8b33-662f92442500', 'ca2b046e-a689-44f3-89d0-8fb8c7084986', 'Free-Professional-Banner-Template-scaled.jpg', '184.85 KB', NULL, 'test', NULL, 0, 'uploads/doctor/2025-07-02/free-professional-banner-template-scaled_15-40-18-408447.jpg', 'uploads/doctor/2025-07-02/free-professional-banner-template-scaled_15-40-18-408447_resized.jpg', 'doctor', 'main_image', NULL, '2025-07-02 07:40:18', '2025-07-02 07:40:18', NULL),
('9b191fc2-5cd4-489b-b444-bf6ae6b26634', '6062ce78-df74-41b7-ad88-5c0d880f545d', 'image (3).png', '123.15 KB', NULL, 'test', NULL, 0, 'uploads/doctor/2025-11-13/image-3_17-11-53-224772.png', 'uploads/doctor/2025-11-13/image-3_17-11-53-224772_resized.png', 'doctor', 'main_image', NULL, '2025-11-13 09:11:53', '2025-11-13 09:11:53', NULL),
('9c7b2bd8-46c6-4baa-94bd-a2ecaf871dab', 'd0bbde0a-baf0-493e-b1ff-3a6aabc71b59', 'WljP9nl7kKyiGfg1ZBZ6dhhLavhRHO_XkGEwCxOgZ1U.webp', '28.82 KB', NULL, 'Test', NULL, 0, 'uploads/doctor/2025-06-26/wljp9nl7kkyigfg1zbz6dhhlavhrho-xkgewcxogz1u_15-59-43-452528.webp', 'uploads/doctor/2025-06-26/wljp9nl7kkyigfg1zbz6dhhlavhrho-xkgewcxogz1u_15-59-43-452528_resized.webp', 'doctor', 'main_image', NULL, '2025-06-26 07:59:43', '2025-06-26 07:59:43', NULL),
('afe0e3b2-56da-403b-ad36-5defa4f29dbd', '6d0af61c-cb56-11f0-a135-00155dd8dc27', 'Group 19090.png', '2.05 KB', NULL, 'sd', NULL, 0, 'uploads/page_section/2025-12-01/group-19090_16-52-33-305582.png', 'uploads/page_section/2025-12-01/group-19090_16-52-33-305582_resized.png', 'page_section', 'main_image', NULL, '2025-12-01 16:52:33', '2025-12-01 16:52:33', NULL),
('bbbcee11-2245-4e10-861b-2a5977a46607', '5b64e631-dd64-4905-b1e9-cfdf136ed9e4', 'placeholder (1).jpg', '19.15 KB', NULL, 's', NULL, 0, 'uploads/doctor/2025-11-24/placeholder-1_17-59-01-586794.jpg', 'uploads/doctor/2025-11-24/placeholder-1_17-59-01-586794_resized.jpg', 'doctor', 'main_image', NULL, '2025-11-24 17:59:01', '2025-11-24 17:59:01', NULL),
('c414f65a-7ba4-4ea2-8a0c-1d2c59886d36', '0709daa2-61d3-4568-8cf4-0b1c73d33165', '276-x-390_15-23-33-564581.jpg', '8.38 KB', NULL, 'test', NULL, 0, 'uploads/speciality/2025-07-10/276-x-390-15-23-33-564581_13-33-50-663264.jpg', 'uploads/speciality/2025-07-10/276-x-390-15-23-33-564581_13-33-50-663264_resized.jpg', 'speciality', 'main_image', NULL, '2025-07-10 05:33:50', '2025-07-10 05:33:50', NULL),
('ccc882e3-88c0-4950-8cf8-8de077fab3b0', 'a914033b-33df-4015-b49e-6da100bfb89c', '276-x-390_15-23-33-564581.jpg', '8.38 KB', NULL, 'Test', NULL, 0, 'uploads/speciality/2025-07-10/276-x-390-15-23-33-564581_13-47-10-485145.jpg', 'uploads/speciality/2025-07-10/276-x-390-15-23-33-564581_13-47-10-485145_resized.jpg', 'speciality', 'main_image', NULL, '2025-07-10 05:47:10', '2025-07-10 05:47:10', NULL),
('d1793c17-247b-4e65-ade0-a06526ca92ad', '18514947-9145-4742-8439-0eab2c8a68d1', 'jollibee.webp', '141.71 KB', NULL, 'asd', NULL, 0, 'uploads/international_insurance/2025-11-26/jollibee_15-59-02-689093.webp', 'uploads/international_insurance/2025-11-26/jollibee_15-59-02-689093_resized.webp', 'international_insurance', 'main_image', NULL, '2025-11-26 15:59:04', '2025-11-26 15:59:04', NULL),
('d8824e9b-f61a-48fa-baf8-a24f251c8d36', 'd3658bfd-d20c-4bce-bd7b-5316f169bd34', '276-x-390_15-23-33-564581.jpg', '8.38 KB', NULL, 'Test', NULL, 0, 'uploads/doctor/2025-06-26/276-x-390-15-23-33-564581_17-53-19-722614.jpg', 'uploads/doctor/2025-06-26/276-x-390-15-23-33-564581_17-53-19-722614_resized.jpg', 'doctor', 'main_image', NULL, '2025-06-26 09:53:19', '2025-06-26 09:53:19', NULL),
('f236bb1f-1281-4c70-ae7b-c6b045b7358d', '3530a1dc-7695-4b4a-823d-021cf5da2d4c', '360_F_310176141_FD4jdEjtqsNmuIaHbGcSlHJnLJcu3Qm8.jpg', '50.61 KB', NULL, 'test', NULL, 0, 'uploads/doctor/2025-07-01/360-f-310176141-fd4jdejtqsnmuiahbgcslhjnljcu3qm8_17-12-49-356718.jpg', 'uploads/doctor/2025-07-01/360-f-310176141-fd4jdejtqsnmuiahbgcslhjnljcu3qm8_17-12-49-356718_resized.jpg', 'doctor', 'main_image', NULL, '2025-07-01 09:12:49', '2025-07-01 09:12:49', NULL),
('fec2861a-cd21-4e96-8782-318a743bcd7b', '156bca1d-e79a-428f-adcb-88b41061b760', 'Screenshot from 2025-07-02 13-54-43.png', '44.43 KB', NULL, 'Test', NULL, 0, 'uploads/doctor/2025-07-02/screenshot-from-2025-07-02-13-54-43_15-50-37-838035.png', 'uploads/doctor/2025-07-02/screenshot-from-2025-07-02-13-54-43_15-50-37-838035_resized.png', 'doctor', 'main_image', NULL, '2025-07-02 07:50:37', '2025-07-02 07:50:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leaders`
--

CREATE TABLE `leaders` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('director','management','others') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `biography` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sequence` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaders`
--

INSERT INTO `leaders` (`id`, `name`, `position`, `type`, `biography`, `sequence`, `created_at`, `updated_at`, `deleted_at`) VALUES
('06e347c8-6a46-4726-a0cf-ffb136b1d85b', 'Advanced Medical Access Philippines', 'Web Developer', 'management', '<p>yhkjfhkhg</p>', 8, '2026-01-26 07:29:05', '2026-01-26 07:29:05', NULL),
('0b70a241-e198-4106-9697-f172e5a2a390', 'Percival Cirilo Flores', 'Chief Strategy and Transformation Officer', 'management', 'insert content', 8, NULL, NULL, NULL),
('2be43bcb-7495-4704-aeeb-de797c7c0d98', 'Maria Noemi G. Azura', 'Executive Director', 'director', 'insert content', 2, NULL, NULL, NULL),
('30ac39d9-cd7f-4efb-abb4-2a37b4570840', 'Grace Gelle', 'Chief Sales Officer', 'management', 'insert content', 5, NULL, NULL, NULL),
('48f9344b-3c72-478e-be98-cfac2abeac0c', 'Marlon Platon, CPA', 'Head of Investments', 'others', NULL, 4, NULL, NULL, NULL),
('4f1707ac-328c-48d4-b162-7f9f6d10e354', 'Marianne Lopez, M.D.', 'Medical Director', 'others', NULL, 3, NULL, NULL, NULL),
('4f36bfc5-be00-4974-8c6f-93ae36cdc85a', 'Nina Perpetua D. Aguas', 'Non-Executive Director', 'director', 'Date of First Board Appointment: March 24, 2022\r\nNationality and Age: Filipino, 61 years old\r\nOther Directorships and Experience\r\nNoemi is a dynamic business leader with extensive experience in health insurance and consumer banking gained from local and global companies spanning over three decades. The breadth of her experience includes business transformation, innovation and strategy, sales and distribution, audit and compliance. She is a Senior Executive Vice President at InLife and a Trustee of Insular Foundation, Inc.\r\n\r\nShe is also the former President and Chief Executive Officer of Insular Health Care, Inc. Outside of InLife group, she is a Director of City Savings Bank and Maria Health. Prior to joining InLife in 2017, she previously served as President & CEO of PhilCare. She also held various leadership roles in Citibank, American Express and Australia New Zealand (ANZ) Bank, including an international assignment at ANZ Melbourne.', 1, NULL, NULL, NULL),
('6c248043-79a3-4d03-bd36-80ae92264d3a', 'Maria Noemi G. Azura', 'President and Chief Executive Officer', 'management', 'insert content here', 1, NULL, NULL, NULL),
('73dbd758-e929-4b09-b7a2-28349a355d80', 'Charlotte Reyes, M.D.', 'Chief Group Operations Officer', 'management', 'insert content here', 3, NULL, NULL, NULL),
('7b312251-771d-47c7-97ed-240b64d36fd5', 'Mona Lisa B.Dela Cruz', 'Independent Director', 'director', 'insert content', 3, NULL, NULL, NULL),
('a45191f8-7162-4bc4-9175-ac4cef100f29', 'Conrado Dela Cruz', 'Chief Actuary', 'management', 'insert content', 4, NULL, NULL, NULL),
('aafa34e8-9616-44f4-a14e-5a7b9a862c55', 'Marcos Delin, CPA', 'Chief Finance Officer', 'management', 'insert content', 7, NULL, NULL, NULL),
('c7c91227-ddc8-4687-a5f5-4bb7009bdbbe', 'Gerlyn Gamboa', 'Head of Internal Audit', 'others', NULL, 1, NULL, NULL, NULL),
('cb1dba1b-6b5b-42b3-ae59-2412e3aadd5e', 'Lorna Pabelico', 'Chief Human Resource Officer', 'management', 'insert content', 6, NULL, NULL, NULL),
('d734c188-b149-4da6-9c2e-a76fb87ebcb3', 'Stefani Sano, Jr. ', 'Head of Risk Management', 'others', NULL, 5, NULL, NULL, NULL),
('dc9248d3-b594-4c3b-994c-55b94db5bba0', 'Carol Santos', 'Chief Information Technology Officer', 'management', 'insert content here', 2, NULL, NULL, NULL),
('e2430054-10bd-4038-a10b-2c21dcf3d4b0', 'Maria Carolina V. Dominguez', 'Independent Director', 'director', 'insert content', 4, NULL, NULL, NULL),
('e89e9ea8-0985-4d5b-885d-45beccb413b4', 'Johayna Milca Javier', 'Head of Marketing and Communications', 'others', NULL, 2, NULL, NULL, NULL),
('f2a3b945-3d85-4cec-92b1-31cf05459b8c', 'Raoul Antonio E. Littaua', 'Non-Executive Director', 'director', 'insert content', 5, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abbreviation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `local` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `slug`, `abbreviation`, `email`, `contact_number`, `local`, `address`, `created_at`, `updated_at`, `deleted_at`) VALUES
('2fcaebc2-1136-4237-81ad-0c14a0ca96f3', 'Global City', 'global-city', 'BGC', NULL, '8-789-7700', '1032 / 1035', 'Rizal Drive cor. 32nd St. & 5th Avenue, Taguig, 1634', '2025-06-11 07:44:18', NULL, NULL),
('34359367-b630-4bc0-bece-3f4bd786baf0', 'Quezon City', 'quezon-city', 'QC', NULL, '8-723-0101', '1912 / 5433', '279 E Rodriguez Sr. Avenue, Quezon City, 1112', '2025-06-11 07:44:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `editor_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `editor_id`, `action`, `page`, `item_name`, `item_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('009cadc7-d67f-446a-aebd-2a3803e67663', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Specialty Create', 'Spec1222', '03ca965c-89e8-4ac4-8a50-f6f0b5923109', '2025-07-10 07:58:09', '2025-07-10 07:58:09', NULL),
('00bcea34-8f37-4b33-a738-335b41199fc9', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-10 08:45:19', '2025-06-10 08:45:19', NULL),
('02699c27-7259-485e-b636-a4f2da8da564', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-13 04:01:50', '2025-11-13 04:01:50', NULL),
('0496279b-1a6a-4d06-8d48-9499981b8d2c', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-09 05:51:53', '2025-06-09 05:51:53', NULL),
('0846210e-5725-4a63-97c2-8795be6e4774', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2026-01-15 15:22:03', '2026-01-15 15:22:03', NULL),
('08529293-26a0-4c79-9461-8ab38aedda7c', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Hannah Montes', 'da5a070f-dc8c-4716-a1ce-aeade052725b', '2025-11-24 14:36:19', '2025-11-24 14:36:19', NULL),
('0967763e-515d-4970-8ade-9358224709d3', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-24 18:02:12', '2025-11-24 18:02:12', NULL),
('0c930780-a13e-40cd-a548-b87608f70b25', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Grer Tret', 'fbceb035-5fd6-4a78-b2ca-fb2d3de79ee4', '2025-12-01 10:30:33', '2025-12-01 10:30:33', NULL),
('0e949295-9b7b-4e53-a8da-48f9d81e91fb', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'HMO Update', 'sdfff', '17ae20f0-3eb6-42be-b047-c3dce8c5316f', '2025-11-26 17:43:50', '2025-11-26 17:43:50', NULL),
('1057a126-8a39-4c97-82fd-6ae1d75069d4', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2026-01-27 06:39:14', '2026-01-27 06:39:14', NULL),
('1169c4ec-b16d-4085-8778-927f28514d75', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'International Insurance Update', 'xcv', '50e2d6f6-4acb-415a-9b37-ea2a366b01c2', '2025-11-26 17:52:18', '2025-11-26 17:52:18', NULL),
('13b25ccd-bcfd-4321-9443-71e2cbf9f59f', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-26 17:46:17', '2025-11-26 17:46:17', NULL),
('1409f7f7-c4d4-4358-99a4-db0e8681b58c', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-09 08:38:52', '2025-06-09 08:38:52', NULL),
('16c26674-04ff-457c-926c-4b35c45d817e', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Doctor Create', 'Dr. Abby Sanchez', '5b64e631-dd64-4905-b1e9-cfdf136ed9e4', '2025-11-24 17:59:01', '2025-11-24 17:59:01', NULL),
('1707f869-5310-4fb8-864a-a4988364b13f', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-12-12 07:16:03', '2025-12-12 07:16:03', NULL),
('1737dc84-b517-4aad-8aa5-6d74555787a5', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Doctor', 'Dr.', '26802d64-3587-46de-bc27-423918a8f89b', '2025-06-24 07:43:45', '2025-06-24 07:43:45', NULL),
('195df826-ce2e-4f7e-97e8-910da0c51e42', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-12-08 23:55:00', '2025-12-08 23:55:00', NULL),
('1bb9d735-a7cd-4282-9d0a-a5014fce112e', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-10 03:31:25', '2025-06-10 03:31:25', NULL),
('1e8d4efc-54f7-437b-88ef-1c5057353e06', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-25 14:55:44', '2025-11-25 14:55:44', NULL),
('20067ba2-a14e-4845-92b9-4cd5b28fa607', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-10 07:22:57', '2025-06-10 07:22:57', NULL),
('21adafac-69b2-4119-91ed-9920781d069a', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-10 03:27:28', '2025-06-10 03:27:28', NULL),
('2293eefc-a6be-41b2-a672-899a38a2d8a0', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-25 07:11:56', '2025-06-25 07:11:56', NULL),
('23a63de0-0ff6-4b3a-8a3f-2d564912b547', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-25 14:46:14', '2025-11-25 14:46:14', NULL),
('23a8bec3-379e-4f5f-bedf-6ce9b3f55655', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Changed', 'Homepage', 'Banner', '6d0af61c-cb56-11f0-a135-00155dd8dc27', '2025-12-01 16:52:33', '2025-12-01 16:52:33', NULL),
('2489db34-cba5-4f49-8355-eb1ecb71e6de', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Logout', NULL, NULL, NULL, '2025-12-12 10:23:43', '2025-12-12 10:23:43', NULL),
('25b92a39-82fe-428e-8b7e-66902c6505d2', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-16 08:40:32', '2025-06-16 08:40:32', NULL),
('2684b86c-92c8-4204-b88d-4afcb595e427', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-11 06:43:44', '2025-06-11 06:43:44', NULL),
('26acfb0e-bc3c-466d-9822-5c50978a7768', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-24 14:29:18', '2025-11-24 14:29:18', NULL),
('26d2518c-30b8-49c1-a7f3-32027366a691', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-28 13:41:56', '2025-11-28 13:41:56', NULL),
('277e294c-f52c-4479-8b8b-f573b2fe0c62', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2026-01-03 01:22:23', '2026-01-03 01:22:23', NULL),
('2880c4a7-5f80-4711-ae54-1fdc47e0b79c', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-12-01 10:28:56', '2025-12-01 10:28:56', NULL),
('2a34012f-b2dd-4eb9-a608-e234befc3de6', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-18 15:18:11', '2025-11-18 15:18:11', NULL),
('2b79915c-5a7b-44cb-b8d9-9dbfb8a9aca8', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Grer Tret', 'fbceb035-5fd6-4a78-b2ca-fb2d3de79ee4', '2025-07-07 06:48:39', '2025-07-07 06:48:39', NULL),
('2be9d620-2eb6-4c95-a96f-48210c38b07a', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Doctor Create', 'Dr. Portia Graham', 'd3658bfd-d20c-4bce-bd7b-5316f169bd34', '2025-06-26 09:53:19', '2025-06-26 09:53:19', NULL),
('2c8d98f1-0ce9-4226-820c-a72c5e6e049b', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'International Insurance Create', 'asd', '18514947-9145-4742-8439-0eab2c8a68d1', '2025-11-26 15:59:04', '2025-11-26 15:59:04', NULL),
('2d41f189-0580-4289-89aa-d3775dd5e081', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Logout', NULL, NULL, NULL, '2026-01-13 08:08:58', '2026-01-13 08:08:58', NULL),
('2e86643b-4670-4585-be69-bfc78d85d24c', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Specialty Create', 'Spec1', 'a914033b-33df-4015-b49e-6da100bfb89c', '2025-07-10 05:47:10', '2025-07-10 05:47:10', NULL),
('2f6075dc-cfe3-45a4-a6fd-9486dd3ec987', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-26 11:03:55', '2025-11-26 11:03:55', NULL),
('31cf0198-0143-4385-a03f-26661d0f757f', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-07-09 02:14:07', '2025-07-09 02:14:07', NULL),
('3a7490e5-46a6-4351-aa99-49c730c3c078', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-05 02:47:16', '2025-11-05 02:47:16', NULL),
('3c91aae6-83f5-4491-8ac8-2a69c3e36d75', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-10 03:33:27', '2025-06-10 03:33:27', NULL),
('3e61ffc3-aeca-4afd-aec0-ae634fe1c35e', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Hedda Bates', '285fbb92-82d7-4a14-8e4e-17ef68671d24', '2025-11-05 06:11:04', '2025-11-05 06:11:04', NULL),
('3f489b8f-b2bf-45a5-8d53-c7dff2c449d7', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-26 17:33:22', '2025-11-26 17:33:22', NULL),
('4482f746-049b-4da5-8a08-ebac03ec1dc8', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Abby Sanchez', '5b64e631-dd64-4905-b1e9-cfdf136ed9e4', '2025-11-24 18:01:19', '2025-11-24 18:01:19', NULL),
('46ec5fef-de32-4f2d-840c-a73c9b6bfeea', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-11 03:22:09', '2025-06-11 03:22:09', NULL),
('4754fec8-a737-4f50-bc76-d6952c9eb13f', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Specialty Update', 'Spec13333311', '03ca965c-89e8-4ac4-8a50-f6f0b5923109', '2025-07-16 06:06:50', '2025-07-16 06:06:50', NULL),
('48242258-1570-4d16-9fc3-197ea7504784', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-11 08:33:39', '2025-06-11 08:33:39', NULL),
('485d4b10-71bd-4a7d-9cd2-9800399af8c0', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-03 02:45:57', '2025-11-03 02:45:57', NULL),
('49f96ade-426b-4f27-b961-1901a0be497f', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-24 14:36:47', '2025-11-24 14:36:47', NULL),
('4a2cf826-b9a0-46e2-8cce-56efe3fd884d', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-24 17:47:45', '2025-11-24 17:47:45', NULL),
('4a464248-4753-49cd-b501-247fe08b788c', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Specialty Create', 'Spec1', '0709daa2-61d3-4568-8cf4-0b1c73d33165', '2025-07-10 05:33:50', '2025-07-10 05:33:50', NULL),
('4b9362ec-f0a4-42c2-8a0d-21ec612dfe0c', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Doctor Create', 'Dr. Jaan Dela Cruz', '156bca1d-e79a-428f-adcb-88b41061b760', '2025-07-02 07:50:37', '2025-07-02 07:50:37', NULL),
('4d19fe66-b9b3-4212-bb88-7abe69ea7b41', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Logout', NULL, NULL, NULL, '2025-11-25 17:52:42', '2025-11-25 17:52:42', NULL),
('4e683f86-328a-4269-8689-fd40fd334adc', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-07-10 02:34:56', '2025-07-10 02:34:56', NULL),
('4f96f3d4-71a5-4a69-bb71-6c74ff4f0c92', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Hannah Montes', 'da5a070f-dc8c-4716-a1ce-aeade052725b', '2025-11-24 14:35:28', '2025-11-24 14:35:28', NULL),
('502df764-8fed-4b6e-9c39-81ded7dc43d8', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Doctor Create', 'Dr. Juan Dela Cruz', 'd0bbde0a-baf0-493e-b1ff-3a6aabc71b59', '2025-06-26 07:59:43', '2025-06-26 07:59:43', NULL),
('51b1d879-9443-4a6c-9d0b-d72a144dc110', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Logout', NULL, NULL, NULL, '2025-07-02 10:00:50', '2025-07-02 10:00:50', NULL),
('51f76d30-f405-4908-a0d8-217bf2bd2313', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Specialty Create', 'Spec1', '5674ae7d-f1c4-4d78-ad53-6bb8166faf64', '2025-07-10 05:44:12', '2025-07-10 05:44:12', NULL),
('5287ee24-2847-497d-8b3d-539fd025245b', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-11 05:58:57', '2025-06-11 05:58:57', NULL),
('52b039e7-12ff-4a04-a3f7-7621d33a72aa', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-16 09:20:09', '2025-06-16 09:20:09', NULL),
('552d778d-09a5-4470-b8de-ae18dbdfdb57', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Doctor Create', 'Sunt explicabo Cons Hedda Bates', '285fbb92-82d7-4a14-8e4e-17ef68671d24', '2025-11-05 03:57:33', '2025-11-05 03:57:33', NULL),
('565bd301-a383-46b0-8383-88034e719c94', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Hannah Montes', 'da5a070f-dc8c-4716-a1ce-aeade052725b', '2025-11-24 15:09:31', '2025-11-24 15:09:31', NULL),
('567d8e72-ecd3-4721-abd7-7f302926bf20', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2026-01-13 08:04:22', '2026-01-13 08:04:22', NULL),
('5807eafb-8a19-486a-b597-dbeb48c1fcab', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-17 02:31:48', '2025-06-17 02:31:48', NULL),
('58501bc2-bf19-41fc-af1c-f178f130a54e', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-06 03:23:52', '2025-11-06 03:23:52', NULL),
('5953ce51-028d-4587-9a50-cec10a249c13', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-09 02:30:45', '2025-06-09 02:30:45', NULL),
('5aa107c7-3f2a-44cf-a78e-8b8c8dfb9be0', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Specialty Update', 'Spec13333311', '03ca965c-89e8-4ac4-8a50-f6f0b5923109', '2025-07-16 06:13:55', '2025-07-16 06:13:55', NULL),
('5c1c7da9-a5c0-43b4-aba7-5dbfa53c1d6d', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-25 13:50:24', '2025-11-25 13:50:24', NULL),
('5c8c00b7-be9b-443f-a058-8a8dddbd78f0', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Diana Bau', 'e55ad8c1-0bb7-4d9a-abd8-496a58a121b9', '2025-11-05 03:44:09', '2025-11-05 03:44:09', NULL),
('5cac2fb9-1322-4683-b3e0-d6ac1c40bd27', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-16 03:42:38', '2025-06-16 03:42:38', NULL),
('5d4f3932-cbe6-41c0-a1de-4167a2244098', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Changed', 'Corporate Governance', 'Annual Integrated Report File', '1d72089d-80bd-47af-8782-65f1d7e98f8f', '2026-01-27 07:14:26', '2026-01-27 07:14:26', NULL),
('5f177e8d-438e-4fc5-9bdd-328395ee9061', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-12 03:17:57', '2025-11-12 03:17:57', NULL),
('5f4aa83d-b7b3-47e0-9c20-eabf266d97de', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Amir Osborn', '6062ce78-df74-41b7-ad88-5c0d880f545d', '2025-11-13 09:30:06', '2025-11-13 09:30:06', NULL),
('60cea1cb-8476-4d6c-80e1-a3974b46de0b', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-24 14:35:04', '2025-11-24 14:35:04', NULL),
('671c41cf-166d-42ca-b59d-ff19ee4733d8', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-24 14:28:08', '2025-11-24 14:28:08', NULL),
('67ad3f33-9c3c-45c1-908c-372c12085903', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-11 02:33:11', '2025-06-11 02:33:11', NULL),
('72c3ca8e-d068-4684-8bfc-ec3d7087e4db', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-12 05:28:35', '2025-11-12 05:28:35', NULL),
('72e2a3b0-63b3-41e7-a4de-7558ab81d52d', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Hannah Montes', 'da5a070f-dc8c-4716-a1ce-aeade052725b', '2025-11-24 14:37:34', '2025-11-24 14:37:34', NULL),
('7344bf5a-7e5f-4d54-97c7-1e899680c4d3', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-13 04:01:15', '2025-11-13 04:01:15', NULL),
('7450deb4-ee67-420f-8c02-c321aa60ac12', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-18 14:15:11', '2025-11-18 14:15:11', NULL),
('7743dd8c-46b5-476d-83a9-f43ccb8301d4', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Diana Baust', 'e55ad8c1-0bb7-4d9a-abd8-496a58a121b9', '2025-11-05 03:52:30', '2025-11-05 03:52:30', NULL),
('78444731-4e57-4b58-9664-9ec93d3bf4dc', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-26 17:55:59', '2025-11-26 17:55:59', NULL),
('789bad25-5cb7-4d66-a65d-e2f8033542e8', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Logout', NULL, NULL, NULL, '2025-12-09 05:01:23', '2025-12-09 05:01:23', NULL),
('798fbaec-18eb-47d1-8638-f30432d6f32d', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Logout', NULL, NULL, NULL, '2025-11-12 05:27:56', '2025-11-12 05:27:56', NULL),
('7a20f619-7def-47d5-ab8f-0394829f96b8', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-18 15:22:44', '2025-11-18 15:22:44', NULL),
('7adc8af0-02c4-448c-bd66-3d1aaac885f3', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-23 02:35:44', '2025-06-23 02:35:44', NULL),
('7e77ff86-67ff-48c3-9f1e-23b3742d4b8a', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-18 14:15:25', '2025-11-18 14:15:25', NULL),
('7ee32bf8-92c3-415e-8b4b-ef4565f13786', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Hannah Montes', 'da5a070f-dc8c-4716-a1ce-aeade052725b', '2025-11-24 14:34:28', '2025-11-24 14:34:28', NULL),
('80b2a94e-32d8-4416-b7da-069cda1bcfd0', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-26 17:49:40', '2025-11-26 17:49:40', NULL),
('81a1957a-31b8-4a6a-a9b1-444ec1f4651e', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-11 05:22:02', '2025-06-11 05:22:02', NULL),
('82323354-153b-48d5-9410-6c98773a4cd3', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-16 07:45:50', '2025-06-16 07:45:50', NULL),
('82949b91-3336-423b-b551-11e5d2a141b3', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-12-01 16:52:11', '2025-12-01 16:52:11', NULL),
('82dffdb0-1777-41eb-8701-51d94c37fcad', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-16 02:28:50', '2025-06-16 02:28:50', NULL),
('840196a7-f915-48cc-bf6d-b0bce7e51571', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-16 05:43:09', '2025-06-16 05:43:09', NULL),
('85ead7be-e256-4bc1-86d5-95b1df8046cd', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Doctor Create', 'Dr. Grer Tret', 'fbceb035-5fd6-4a78-b2ca-fb2d3de79ee4', '2025-07-02 07:45:56', '2025-07-02 07:45:56', NULL),
('8666583d-7513-41a9-9e37-5e283e304a42', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2026-01-13 08:03:30', '2026-01-13 08:03:30', NULL),
('8670a9cf-0c06-4a10-aaea-08f9f0c6456e', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2026-01-03 01:21:03', '2026-01-03 01:21:03', NULL),
('87fb1b7e-547e-4878-ae8e-7acd0a716c1e', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Hannah Montes', 'da5a070f-dc8c-4716-a1ce-aeade052725b', '2025-11-24 14:33:25', '2025-11-24 14:33:25', NULL),
('8a8451ac-6610-458b-b0ef-228cd21d1a53', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-07-17 06:55:23', '2025-07-17 06:55:23', NULL),
('8a96cf98-64c8-442c-8e37-6eb97e286c95', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-24 06:25:32', '2025-06-24 06:25:32', NULL),
('8acec690-2e02-4243-8361-95060a532c13', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Doctor Create', 'Dr. Portia Graham', '1b421062-0c9a-45a4-acd9-a0e09cd46a0d', '2025-06-24 09:13:23', '2025-06-24 09:13:23', NULL),
('8d9f032f-7e90-4341-b87d-67ff4e742c1c', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Logout', NULL, NULL, NULL, '2025-11-26 17:49:38', '2025-11-26 17:49:38', NULL),
('8e58d853-4609-4919-9c1c-cd376e6c010a', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-12-01 16:42:30', '2025-12-01 16:42:30', NULL),
('8e85e739-79d6-4738-8f23-b09e4a61c230', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-11 07:46:15', '2025-06-11 07:46:15', NULL),
('906f5ed3-058d-4ac0-916c-ed0836ab5c34', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-24 14:33:47', '2025-11-24 14:33:47', NULL),
('925fe240-fd1d-4a91-86cb-becfac8d1411', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-25 14:41:28', '2025-11-25 14:41:28', NULL),
('928ffbdc-e97a-4afe-8e42-78c25af92673', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Logout', NULL, NULL, NULL, '2025-11-26 17:33:20', '2025-11-26 17:33:20', NULL),
('92b8bb33-b0c4-4658-95ea-52beb3ad3711', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'HMO Create', 'sdfff', '17ae20f0-3eb6-42be-b047-c3dce8c5316f', '2025-11-26 17:09:44', '2025-11-26 17:09:44', NULL),
('931ccf70-534f-4e80-8c0d-9875024d241f', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-09 05:18:22', '2025-06-09 05:18:22', NULL),
('93be95d5-cf12-4d3b-b14b-495ef64dc65b', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-16 02:05:11', '2025-06-16 02:05:11', NULL),
('96747595-883a-437d-96f5-8d6bc7c27104', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-12-01 10:31:21', '2025-12-01 10:31:21', NULL),
('96e0ea80-392a-4b94-a23e-b9c22b049535', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Changed', 'Homepage', 'Banner', '6d0af61c-cb56-11f0-a135-00155dd8dc27', '2026-01-03 01:45:57', '2026-01-03 01:45:57', NULL),
('97359fa8-d30e-4005-9b2e-150f49e7061a', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-07-16 09:36:24', '2025-07-16 09:36:24', NULL),
('978e16e0-2f84-4c1f-9741-ea7b59cc4a2d', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'HMO Update', 'sdfff', '17ae20f0-3eb6-42be-b047-c3dce8c5316f', '2025-11-26 17:52:00', '2025-11-26 17:52:00', NULL),
('97cef910-bb19-4c76-b370-c7a9118080e1', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Hannah Montes', 'da5a070f-dc8c-4716-a1ce-aeade052725b', '2025-11-24 15:11:51', '2025-11-24 15:11:51', NULL),
('98091d57-5b8d-4798-969b-cfb3814d439f', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Logout', NULL, NULL, NULL, '2025-07-16 05:53:46', '2025-07-16 05:53:46', NULL),
('99e9fbee-9e47-459e-b50b-94fc422a4e3a', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-26 17:43:37', '2025-11-26 17:43:37', NULL),
('9a128c62-74f0-4097-940d-29093e2f1ab4', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-10 06:42:19', '2025-06-10 06:42:19', NULL),
('9c8cddc3-bfbd-4052-b6e6-51ce37747f89', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Doctor Create', 'Dr. Amir Osborn', '6062ce78-df74-41b7-ad88-5c0d880f545d', '2025-11-13 09:11:53', '2025-11-13 09:11:53', NULL),
('9cfe6120-2a5c-4748-b31f-d211dfabc1a6', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-26 15:55:21', '2025-11-26 15:55:21', NULL),
('9d0d2f7f-30d0-4896-8f38-0503d68e81eb', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Doctor Create', 'Dr. Hannah Montes', 'da5a070f-dc8c-4716-a1ce-aeade052725b', '2025-11-24 14:32:52', '2025-11-24 14:32:52', NULL),
('9d833c75-5ddd-411c-bfe6-9cc0fb7b2717', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Blakey Oly', 'ca2b046e-a689-44f3-89d0-8fb8c7084986', '2025-11-03 06:56:44', '2025-11-03 06:56:44', NULL),
('9dfeb1fe-a824-41cf-ada7-ce1dc1f8f26b', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Changed', 'Privacy Policy', 'Content Block', '654a61b2-18e5-40d8-a101-c1a121c2bf71', '2026-01-26 07:11:19', '2026-01-26 07:11:19', NULL),
('a0f68018-5e4a-4b8f-960d-f43d9687582d', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Logout', NULL, NULL, NULL, '2025-06-24 05:23:08', '2025-06-24 05:23:08', NULL),
('a456cd94-2260-4401-abfe-fce016e9dbeb', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Amir Osborn', '6062ce78-df74-41b7-ad88-5c0d880f545d', '2025-11-13 09:30:17', '2025-11-13 09:30:17', NULL),
('a47958d8-fcf0-465a-87f7-fd267e7556ec', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-16 09:11:52', '2025-06-16 09:11:52', NULL),
('a4cfc90a-a44a-4162-9852-ede27d934149', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Diana Bau', 'e55ad8c1-0bb7-4d9a-abd8-496a58a121b9', '2025-11-05 03:44:23', '2025-11-05 03:44:23', NULL),
('a4d4beae-84e0-4c25-9ff4-27945cf01652', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-24 14:35:55', '2025-11-24 14:35:55', NULL),
('a5579142-3209-45b2-a493-6993df2ae1f3', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Logout', NULL, NULL, NULL, '2025-11-26 13:15:12', '2025-11-26 13:15:12', NULL),
('a72bd0b3-005e-47fd-b98a-2f77eb7d81fe', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Changed', 'Homepage', 'Banner', '6d0af61c-cb56-11f0-a135-00155dd8dc27', '2026-01-03 01:45:16', '2026-01-03 01:45:16', NULL),
('a86d036b-adf5-44c8-8daf-c34325ce3a2b', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-10 05:37:00', '2025-06-10 05:37:00', NULL),
('a9235384-decf-4f1d-a667-d25071a239d4', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Logout', NULL, NULL, NULL, '2025-11-26 17:43:34', '2025-11-26 17:43:34', NULL),
('a93918ea-24e0-4ab4-b4ea-02435b82a9a3', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Blakey Oly', 'ca2b046e-a689-44f3-89d0-8fb8c7084986', '2025-07-09 07:42:44', '2025-07-09 07:42:44', NULL),
('a97ba52b-87da-4205-8613-c0b1a63e88ce', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-07-16 05:55:41', '2025-07-16 05:55:41', NULL),
('a9acec02-c5ac-45ac-827c-f373b578d25f', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-24 14:12:50', '2025-11-24 14:12:50', NULL),
('ab5a985c-0300-48a6-82cc-977888471d4c', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Specialty Create', 'test special', 'd2852ecf-5449-4d61-8840-d427a60b15bb', '2025-07-09 05:26:16', '2025-07-09 05:26:16', NULL),
('adbb65bc-ce5e-4173-9e2c-5b33f1ee8f4a', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2026-01-13 08:10:36', '2026-01-13 08:10:36', NULL),
('ae3e0a46-dcea-4184-8c98-21710a55586d', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Axels Osborns', '3530a1dc-7695-4b4a-823d-021cf5da2d4c', '2025-07-02 05:40:44', '2025-07-02 05:40:44', NULL),
('aeee3059-4843-4420-88ab-da2e6304ee97', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2026-01-13 07:08:37', '2026-01-13 07:08:37', NULL),
('afd5c366-5191-4661-8342-c6e5d58e1264', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-07-15 02:42:23', '2025-07-15 02:42:23', NULL),
('b0035165-a455-4369-991b-3dccc333d5e7', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-18 14:15:19', '2025-11-18 14:15:19', NULL),
('b091ca77-c34a-4a41-a065-236d3efb3985', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-03 05:09:00', '2025-11-03 05:09:00', NULL),
('b26aed0e-abba-4c55-831d-7aced0160c5b', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Doctor Create', 'Dr. Axel Cree', 'e390b688-115c-47c6-8007-b412df0f06d0', '2025-07-02 07:42:48', '2025-07-02 07:42:48', NULL),
('b46b0800-1692-4f57-95b0-519a19d94bb7', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-26 07:53:02', '2025-06-26 07:53:02', NULL),
('b6bb46ae-8f71-4061-8cb6-30b61e9acf16', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-24 15:08:59', '2025-11-24 15:08:59', NULL),
('b7824d54-782f-4073-abaf-5923beea8dae', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2026-01-27 07:47:47', '2026-01-27 07:47:47', NULL),
('b85c696c-28c2-4635-b7a8-f4cb159cdf7e', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-26 17:05:28', '2025-11-26 17:05:28', NULL),
('b86ef769-6d79-43bf-95e8-545ebfc83fe7', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-11 09:34:47', '2025-06-11 09:34:47', NULL),
('bb0268e9-b9ed-40db-ac19-5200fad27503', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-25 07:48:11', '2025-06-25 07:48:11', NULL),
('bb2e20b4-71fe-44f5-9804-db27cdd7c410', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Axel Cree', 'e390b688-115c-47c6-8007-b412df0f06d0', '2025-07-07 02:42:50', '2025-07-07 02:42:50', NULL),
('bc323e3e-679e-4f8f-99f5-241f1eb52bd1', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Diana Bau', 'e55ad8c1-0bb7-4d9a-abd8-496a58a121b9', '2025-11-05 03:52:22', '2025-11-05 03:52:22', NULL),
('bd3b8b0d-27a7-4f8a-9eee-6b2d2667dfbc', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Doctor Create', 'Dr. Axel Osborn', '3530a1dc-7695-4b4a-823d-021cf5da2d4c', '2025-07-01 09:12:49', '2025-07-01 09:12:49', NULL),
('be8e7a20-6565-4a03-bb22-8113da1bdb26', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-07-01 07:34:51', '2025-07-01 07:34:51', NULL),
('beb1589e-7036-49e7-bf53-4f10f9389cd9', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-19 02:46:20', '2025-06-19 02:46:20', NULL),
('bfb1d2e2-1da3-4962-a3ad-b131735304da', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Hannah Montes', 'da5a070f-dc8c-4716-a1ce-aeade052725b', '2025-11-24 15:09:20', '2025-11-24 15:09:20', NULL),
('c08baa0d-628c-4ea2-ab71-983cf46e4434', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'HMO Update', 'sdfff', '17ae20f0-3eb6-42be-b047-c3dce8c5316f', '2025-11-26 17:10:10', '2025-11-26 17:10:10', NULL),
('c08bccc6-8521-4e4d-ad70-066dfb3ba0e5', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-09 07:57:55', '2025-06-09 07:57:55', NULL),
('c0a2665c-a7a1-4fc3-a721-2eaae49d1e98', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-07-01 06:36:29', '2025-07-01 06:36:29', NULL),
('c1447bbd-0649-49cc-8c1d-7c6e350d5823', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-09 03:19:52', '2025-06-09 03:19:52', NULL),
('c2f96a8b-aa95-4255-a0e9-0ee170aefe50', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Logout', NULL, NULL, NULL, '2025-11-24 17:32:02', '2025-11-24 17:32:02', NULL),
('c3c678db-dfa1-4536-a345-bd92f4f364c4', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Diana Baust', 'e55ad8c1-0bb7-4d9a-abd8-496a58a121b9', '2025-11-05 03:54:11', '2025-11-05 03:54:11', NULL),
('c3ef565e-ba1a-46fa-8b36-66b9d22f52b6', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-10 09:47:36', '2025-06-10 09:47:36', NULL),
('c49cc7a6-8705-4ef1-a518-33f15eb02795', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-18 14:14:56', '2025-11-18 14:14:56', NULL),
('c61174a9-2034-4908-8725-f3a6a12b4db8', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-26 15:55:50', '2025-11-26 15:55:50', NULL),
('c751ab07-4d5c-483b-a249-0bd8f8a6c197', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-12-25 01:14:29', '2025-12-25 01:14:29', NULL),
('c7646df5-3ade-4e29-8fae-8a6bf361f88e', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Logout', NULL, NULL, NULL, '2025-06-17 02:31:41', '2025-06-17 02:31:41', NULL),
('c8b16f03-a275-4d5e-a566-a6c3eb74baf4', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Diana Bau', 'e55ad8c1-0bb7-4d9a-abd8-496a58a121b9', '2025-07-17 03:39:43', '2025-07-17 03:39:43', NULL),
('cb83b48d-f550-4daa-b6e4-6b92393a1ae1', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-11 06:53:32', '2025-06-11 06:53:32', NULL),
('cb8ce946-4858-4da6-a080-3c7e6e18e20b', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-07-02 06:39:09', '2025-07-02 06:39:09', NULL),
('cb91f0f8-52d8-42c4-a051-45f9ed587e97', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'International Insurance Create', 'xcv', '50e2d6f6-4acb-415a-9b37-ea2a366b01c2', '2025-11-26 17:34:22', '2025-11-26 17:34:22', NULL),
('cdb2f3a4-5343-4389-a67e-6009d918efc9', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-07-02 05:12:53', '2025-07-02 05:12:53', NULL),
('ce7f4533-7965-4e6c-b22e-3bc2c0914461', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Logout', NULL, NULL, NULL, '2025-07-17 05:41:54', '2025-07-17 05:41:54', NULL),
('ceb43199-df81-4bd6-ba69-c85784240462', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-10 07:54:12', '2025-06-10 07:54:12', NULL),
('cef47f09-47c9-40c1-8bf6-838487b4f518', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-26 17:28:51', '2025-11-26 17:28:51', NULL),
('cfed2e23-a2eb-4761-a5fd-e3983fcd4307', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Changed', 'Homepage', 'Banner', '3c815419-9714-4a9b-92fb-460dd033fb5a', '2026-01-03 01:48:54', '2026-01-03 01:48:54', NULL),
('d3bf872b-ded2-4520-8935-debc6e633841', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Logout', NULL, NULL, NULL, '2025-07-02 04:26:24', '2025-07-02 04:26:24', NULL),
('d440dc32-f5d0-49c8-8348-d2a3789544f0', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Doctor Create', 'Dr. Diana Bau', 'e55ad8c1-0bb7-4d9a-abd8-496a58a121b9', '2025-07-16 06:23:24', '2025-07-16 06:23:24', NULL),
('d68b8a15-e375-4f23-8b71-85b6f19f51a6', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Hannah Montes', 'da5a070f-dc8c-4716-a1ce-aeade052725b', '2025-11-24 15:30:57', '2025-11-24 15:30:57', NULL),
('d76c7ba1-867e-4f59-93d1-72c3a4abb8e8', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-07-07 02:31:56', '2025-07-07 02:31:56', NULL),
('d9426b05-09a9-4c0f-9153-707bdde56318', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-10 05:22:43', '2025-06-10 05:22:43', NULL),
('dc460201-48f4-4542-8cd7-dd18d2fdc467', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Hannah Montes', 'da5a070f-dc8c-4716-a1ce-aeade052725b', '2025-12-01 10:25:12', '2025-12-01 10:25:12', NULL),
('dcffc8b1-4207-42c0-ae8e-0f90d9bc5dda', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Axels Osborns', '3530a1dc-7695-4b4a-823d-021cf5da2d4c', '2025-07-02 05:27:44', '2025-07-02 05:27:44', NULL),
('df5d4150-113f-40d8-8b6e-ebb135a55189', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Specialty Create', 'Spec1', '685dd7ee-b153-4a12-bcfc-414b8e26b3b1', '2025-07-10 05:42:49', '2025-07-10 05:42:49', NULL),
('e32e8713-5e06-4a20-ba7b-a7063fb8be98', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-07-01 05:27:04', '2025-07-01 05:27:04', NULL),
('e3753052-760c-4cda-9ce1-0665b7b0dbe2', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Diana Baus', 'e55ad8c1-0bb7-4d9a-abd8-496a58a121b9', '2025-11-05 03:53:48', '2025-11-05 03:53:48', NULL),
('e3c236f4-a1b3-42d0-9820-7b01749d2080', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Changed', 'Terms and Conditions', 'Content', 'b76b3227-c9d0-11f0-8eb5-00155dd8d5a3', '2025-11-26 17:56:13', '2025-11-26 17:56:13', NULL),
('e3eb2c14-0151-4b1c-9a43-3f8a78cab355', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Specialty Create', 'Spec2', '8400b348-492e-4376-b856-1e2b89f22ee8', '2025-07-10 05:37:03', '2025-07-10 05:37:03', NULL),
('e4181039-3d10-443e-8c79-3b2209687869', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Diana Bau', 'e55ad8c1-0bb7-4d9a-abd8-496a58a121b9', '2025-11-05 03:52:16', '2025-11-05 03:52:16', NULL),
('e5ff2128-98bd-4478-aa7a-ca6c2cbdc2a7', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-26 17:34:09', '2025-11-26 17:34:09', NULL),
('e644d5dc-9f0f-4c67-85bb-87da382a793a', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-10 09:15:36', '2025-06-10 09:15:36', NULL),
('e7b3667e-68d7-479e-ab3b-5b6699ce29b1', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-24 15:30:10', '2025-11-24 15:30:10', NULL),
('e837b3e5-550d-4d66-8a0e-aa2c2a953460', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-16 05:05:26', '2025-06-16 05:05:26', NULL),
('e8c1b88b-554c-4828-a448-85cbd1606523', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-10 06:09:49', '2025-06-10 06:09:49', NULL),
('e912b760-2e5e-4998-b43f-782e7024f31d', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-24 02:46:38', '2025-06-24 02:46:38', NULL),
('e96f9798-8300-4bd0-a5c6-fb77ea215991', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Doctor Create', 'Dr. Portia Osborn', '6cf81163-b0a5-44d7-a40e-c739386fcf05', '2025-11-06 07:07:22', '2025-11-06 07:07:22', NULL),
('e980c1ee-bb88-49f5-8c96-47968f026f75', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2026-01-26 06:37:16', '2026-01-26 06:37:16', NULL),
('ede2834b-34fd-4b09-8417-8260ed8f39ac', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-07-16 03:09:47', '2025-07-16 03:09:47', NULL),
('ee50fa16-34ac-4283-8047-f16a853474d1', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-11-24 14:30:02', '2025-11-24 14:30:02', NULL),
('f2f5849b-2c2b-4fd7-8f2e-ad4d07a030d8', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2026-01-03 01:21:38', '2026-01-03 01:21:38', NULL),
('f305a73e-cba2-40a1-b3f6-0eb858d66c2c', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Doctor Create', 'Dr. Blake Oly', 'ca2b046e-a689-44f3-89d0-8fb8c7084986', '2025-07-02 07:40:18', '2025-07-02 07:40:18', NULL),
('f5814a75-c8d1-41f5-b446-0c90e3156a7a', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-06-17 02:43:37', '2025-06-17 02:43:37', NULL),
('f616109d-7327-45d6-9c4a-f1031676ad92', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-12-01 10:24:35', '2025-12-01 10:24:35', NULL),
('f6e85ae2-8f62-4e5f-acc9-45ec928acbbc', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Specialty Create', 'Spec1123', '51126157-5b5b-44d7-aa46-6279f6d31f05', '2025-07-10 07:44:59', '2025-07-10 07:44:59', NULL),
('f752b820-0b78-4702-bc75-f879c3b6a363', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Doctor Create', 'Dr. Jose Cruz', '1959a4d6-7c3c-4887-bc8d-3dd6e903a2db', '2025-11-24 18:16:47', '2025-11-24 18:16:47', NULL),
('f9df9d2a-33f0-4e23-9134-c15edbbc5aa0', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Created', 'Doctor Create', 'Dr. Axels Cree', '2908bcfe-e2e2-4741-8846-ea3d82c42280', '2025-11-12 05:37:41', '2025-11-12 05:37:41', NULL),
('fa06e829-58c8-47c3-b0df-01ec3a64b4e0', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'successfully logged in.', NULL, NULL, NULL, '2025-12-25 01:14:43', '2025-12-25 01:14:43', NULL),
('fa53fc87-4db2-4be7-ad6e-f885b37fe681', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Updated', 'Doctor Update', 'Dr. Axels Osborns', '3530a1dc-7695-4b4a-823d-021cf5da2d4c', '2025-07-15 06:12:12', '2025-07-15 06:12:12', NULL),
('fee20f39-a2e6-4833-8c3f-a11587f9e867', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'Logout', NULL, NULL, NULL, '2025-11-03 04:47:44', '2025-11-03 04:47:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `metadata`
--

CREATE TABLE `metadata` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_rel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metadata`
--

INSERT INTO `metadata` (`id`, `parent_id`, `meta_title`, `meta_description`, `link_rel`, `created_at`, `updated_at`, `deleted_at`) VALUES
('39b7467b-bef0-4246-8945-548868b964a1', 'd0fabcfe-1fc6-4c7a-aea6-0ee86b4e43b6', 'Reliable services that care for you', 'Generali Philippines has been a solid player in the industry, providing life insurance and health services to big companies and SMEs, with convenience and efficiency at its core thru its digital platforms.', 'cannonical', NULL, NULL, NULL),
('6bc81dd7-4ec9-4309-9471-2d0109c2a122', 'eff3d545-df19-4d8c-b335-70dafc36bb39', 'All Around Group Insurance, Caring for Everyone', 'We’re always at the forefront of proudly providing Filipino groups and companies with all around insurance protection - now backed by more than 100 years of legacy.', 'cannonical', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2024_12_10_030244_create_images_table', 1),
(11, '2024_12_10_032143_create_pages_table', 1),
(12, '2024_12_10_090420_create_page_sections_table', 1),
(13, '2024_12_11_024845_create_roles_table', 1),
(14, '2024_12_16_052721_create_metadata_table', 1),
(15, '2024_12_16_060657_create_logs_table', 1),
(16, '2024_12_16_061832_create_user_details_table', 1),
(17, '2025_02_13_140649_update_page_sections_table', 1),
(18, '2025_02_18_171114_create_buttons_table', 1),
(19, '2025_02_20_103247_create_files_table', 1),
(20, '2025_02_20_104034_create_accordions_table', 1),
(21, '2025_02_20_115125_update_logs_table', 1),
(22, '2025_03_31_133414_create_articles_table', 1),
(23, '2025_03_31_150012_create_taxonomies_table', 1),
(24, '2025_04_10_173550_article_categories', 1),
(25, '2025_04_21_101750_update_articles_table', 1),
(26, '2025_06_03_174410_create_doctors_table', 1),
(27, '2025_06_03_174447_create_doctor_availabilities_table', 1),
(28, '2025_06_03_174535_create_doctor_contacts_table', 1),
(29, '2025_06_03_174721_create_specialties_table', 1),
(30, '2025_06_03_174836_create_sub_specialties_table', 1),
(31, '2025_06_03_175006_create_h_m_o_s_table', 1),
(32, '2025_06_03_175040_create_international_insurances_table', 1),
(33, '2025_06_03_175159_create_doctor_educations_table', 1),
(34, '2025_06_03_175222_create_locations_table', 1),
(35, '2025_06_23_140007_update_doctor_contacts_table', 2),
(36, '2025_06_24_132853_create_doctor_relationship_pivots', 3),
(39, '2025_06_26_140450_create_doctor_schedule_groups_table', 4),
(40, '2025_06_26_140555_update_doctor_availabilities_table', 4),
(42, '2025_11_05_110456_update_doctor_table', 5),
(43, '2025_11_06_151839_update_doctors_table', 6),
(44, '2025_11_13_105733_create_doctor_international_insurance_relationship_pivot', 7),
(45, '2025_11_19_141729_create_temp_bookings_table', 8),
(48, '2025_01_20_120000_add_featured_to_h_m_o_s_table', 9),
(49, '2025_11_27_114943_create_jobs_table', 9),
(50, '2025_12_23_204339_create_agents_table', 10),
(51, '2026_01_03_100413_create_taxonomy_ctas_table', 11),
(52, '2026_01_03_204040_create_section_testimonials_table', 12),
(53, '2026_01_03_223238_create_section_faqs_table', 13),
(54, '2026_01_04_014939_create_section_cards_table', 14),
(55, '2026_01_04_171747_create_section_tabs_table', 15),
(56, '2026_01_04_180248_create_providers_table', 16),
(57, '2026_01_04_210744_create_section_videos_table', 17),
(58, '2026_01_08_001227_create_plans_table', 18),
(59, '2026_01_08_004914_create_plan_highlights_table', 18),
(60, '2026_01_08_004938_create_plan_riders_table', 18),
(61, '2026_01_08_004952_create_plan_faqs_table', 18),
(62, '2026_01_08_005044_create_plan_availments_table', 18),
(63, '2026_01_12_164013_create_section_hotlines_table', 19),
(64, '2026_01_12_182814_create_section_benefits_table', 20),
(65, '2026_01_20_181624_create_leaders_table', 21),
(66, '2026_01_21_045214_create_annual_reports_table', 22),
(67, '2026_01_21_132513_article', 23),
(68, '2026_01_21_170003_create_careers_table', 24),
(69, '2026_01_23_102904_create_videos_table', 25),
(70, '2026_01_23_180513_create_section_emails_table', 26),
(72, '2026_01_23_181201_create_section_socials_table', 27),
(73, '2026_01_26_080226_add_parent_to_section_tabs_table', 28);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('fc479e4650cae27441a093accde73782fd98642f3299621775a97b05e37cb156d23975c7905dd4aa', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'a07ebc61-9e40-4c27-b219-67f0ec36e846', 'SLMC-Doctor-Finder Client-Admin', '[]', 0, '2026-01-27 07:47:47', '2026-01-27 07:47:47', '2027-01-27 15:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `scopes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
('9f1c3c81-d0b4-471d-b5ef-7f2598d4a882', NULL, 'SLMC Doctor Finder Personal Access Client', 'Y7g5xI2n9Ru7EfELksynGijaC1owNLJfnXN6WzpX', NULL, 'http://localhost', 1, 0, 0, '2025-06-09 02:30:30', '2025-06-09 02:30:30'),
('9f1c3c81-d8dd-42cf-a030-7c353d929c65', NULL, 'SLMC Doctor Finder Password Grant Client', '60O98pkbqBAGa8O71Ij5kFiBXDcLbalvuzKyLFkW', 'users', 'http://localhost', 0, 1, 0, '2025-06-09 02:30:30', '2025-06-09 02:30:30'),
('a07ebc61-9e40-4c27-b219-67f0ec36e846', NULL, 'Inlife Benefits main website Personal Access Client', 'jhafNYd7bZMUJiX63GuC2mlaIocBQ6XXqbsAPllJ', NULL, 'http://localhost', 1, 0, 0, '2025-12-02 07:51:08', '2025-12-02 07:51:08'),
('a07ebc61-c376-42fe-ba74-4948254797b9', NULL, 'Inlife Benefits main website Password Grant Client', 'YEk3kntkQECkmojS2GW6tqJr7cNbgp7WiZAhGsdp', 'users', 'http://localhost', 0, 1, 0, '2025-12-02 07:51:08', '2025-12-02 07:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, '9f1c3c81-d0b4-471d-b5ef-7f2598d4a882', '2025-06-09 02:30:30', '2025-06-09 02:30:30'),
(2, 'a07ebc61-9e40-4c27-b219-67f0ec36e846', '2025-12-02 07:51:08', '2025-12-02 07:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `identifier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` tinyint NOT NULL,
  `page_parent` tinyint NOT NULL DEFAULT '0',
  `page_parent_seq` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `identifier`, `category`, `order`, `page_parent`, `page_parent_seq`, `created_at`, `updated_at`, `deleted_at`) VALUES
('02b6395d-0f81-4bb9-8227-f9a1d300b65c', 'Blogs', 'resources/blogs', 'blogs', 'blogs', 38, 1, 'K1.2', NULL, NULL, NULL),
('180913f6-e862-4616-a4da-73da2e35023e', 'Claims', 'services/claims', 'claims', 'claims', 8, 1, 'B3', NULL, NULL, NULL),
('210eb16a-11b4-4b34-910f-ec69921e9e09', 'Compliance Commitment', 'compliance-commitment', 'compliance-commitment', 'compliance-commitment', 41, 0, 'M1', NULL, NULL, NULL),
('23edc2c1-a4c3-438a-9777-3411037b1a9d', 'Agent Registry List', 'partnerships-accreditations/agent-registry-list', 'agent-registry-list', 'agent-registry-list', 26, 1, 'D2.6', NULL, NULL, NULL),
('256e6933-f893-4ae8-9f86-f96f0e385d1f', 'Help & FAQ center', 'resources/help-faq-center', 'help-faq-center', 'help-faq-center', 39, 1, 'K1.3', NULL, NULL, NULL),
('27870368-f122-4a01-94ad-23f2fa035b32', 'Dental Availment', 'services/availment-procedures/dental', 'dental-availment', 'dental-availment', 7, 1, 'B2.4', NULL, NULL, NULL),
('2e96a604-4cbb-4cdb-bd6b-49922bb3fa85', 'Member Mobile App', 'services/member-mobile-app', 'member-mobile-app', 'member-mobile-app', 15, 1, 'B7', NULL, NULL, NULL),
('38c39b9d-0234-4748-93ea-05578a625a01', 'Voluntary Employee Benefit Program', 'products/voluntary-employee-benefit-program', 'voluntary-employee-benefit-program', 'voluntary-employee-benefit-program', 19, 1, 'C1.3', NULL, NULL, NULL),
('3b3bed02-ab46-4cab-b3ae-8d79e0616ff0', 'Life Insurance Claims', 'services/claims/life-insurance', 'life-insurance-claims', 'life-insurance-claims', 10, 1, 'B3.2', NULL, NULL, NULL),
('488b6b7f-abca-4d66-b070-b57e3b7ad5a9', 'Availment Procedures', 'services/availment-procedures', 'availment-procedures', 'availment-procedures', 3, 1, 'B2', NULL, NULL, NULL),
('4bd0b10f-16fe-472a-9fa5-a90d556a038d', 'Group Insurance Plan', 'products/group-insurance-plan', 'group-insurance-plan', 'group-insurance-plan', 17, 1, 'C1.1', NULL, NULL, NULL),
('4ce8c64a-c985-4a23-97f8-04796c35f90b', 'Request for Proposal', 'partnerships-accreditations/request-for-proposal', 'request-for-proposal', 'request-for-proposal', 27, 0, 'E1', NULL, NULL, NULL),
('51900e2a-b6f9-4ec1-8aa2-a7e5bd22a709', 'Individual Insurance Plans', 'products/individual-insurance-plan', 'individual-insurance-plan', 'individual-insurance-plan', 18, 1, 'C1.2', NULL, NULL, NULL),
('51c36b7d-3aef-4c62-8f83-0089f396e873', 'Downloadable Forms', 'services/downloadable-forms', 'downloadable-forms', 'downloadable-forms', 15, 1, 'B8', NULL, NULL, NULL),
('5469346e-803f-40cd-8d03-a0647e02614b', 'Beneficiary Enrollment', 'services/beneficiary-enrollment', 'beneficiary-enrollment', 'beneficiary-enrollment', 13, 1, 'B5', NULL, NULL, NULL),
('5d195b86-4dbb-44e5-8d8e-30bcd43bd0c2', 'Code of Conduct', 'about-us/corporate-governance/code-of-conduct', 'code-of-conduct', 'code-of-conduct', 33, 1, 'G1.3', NULL, NULL, NULL),
('5f484a43-5091-4e92-a781-7ff3925c0a45', 'Agent Accreditation', 'partnerships-accreditations/agent-accreditation', 'agent-accreditation', 'agent-accreditation', 25, 1, 'D2.4', NULL, NULL, NULL),
('62ec54d5-cb9a-4e47-8d48-a9f78a9354ec', 'Clinic Accreditation', 'partnerships-accreditations/clinic-accreditation', 'clinic-accreditation', 'clinic-accreditation', 23, 1, 'D2.2', NULL, NULL, NULL),
('63f10bb4-a8f4-47bc-beb0-ea04f01262ef', 'Customers', 'privacy-policy/customers', 'customers', 'customers', 44, 1, 'O1.2', NULL, NULL, NULL),
('646f9e9a-2c93-4d8d-bdae-53d704664405', 'Annual Corporate Governance Reports', 'about-us/corporate-governance/annual-corporate-governance-reports', 'annual-corporate-governance-reports', 'annual-corporate-governance-reports', 32, 1, 'G1.2', NULL, NULL, NULL),
('73dafb0b-9d17-4198-97ab-cee13b8cdb80', 'Digital Platforms', 'services/digital-platforms', 'digital-platforms', 'digital-platforms', 14, 1, 'B6', NULL, NULL, NULL),
('741202e4-f271-4e32-b916-3b493db12ccc', 'Sustainability', 'about-us/sustainability', 'sustainability', 'sustainability', 34, 1, 'H1', NULL, NULL, NULL),
('84dbe3d0-00ee-44ca-8025-4f33397210a5', 'Press Releases', 'resources/press-releases', 'press-releases', 'press-releases', 37, 1, 'K1.1', NULL, NULL, NULL),
('8628841d-9b63-46d9-bb47-216d85a11fb0', 'Emergency Availment', 'services/availment-procedures/emergency', 'emergency-availment', 'emergency-availment', 6, 1, 'B2.3', NULL, NULL, NULL),
('88920416-48d4-406d-be64-b5faea40b61d', 'Resources', 'resources', 'resources', 'resources', 36, 0, 'K1', NULL, NULL, NULL),
('8c76d0f4-d06d-47b0-a22c-bf4216c5193a', 'Corporate Governance', 'about-us/corporate-governance', 'corporate-governance', 'corporate-governance', 30, 0, 'G1', NULL, NULL, NULL),
('9b1263d4-a7d2-4442-adbb-d8188162d603', 'Search Results', 'search-results', 'search-results', 'search-results', 48, 0, 'Q1', NULL, NULL, NULL),
('9dff332a-ceaf-4fb1-9f01-53d06346c626', 'Website Users', 'privacy-policy/website-users', 'website-users', 'website-users', 43, 1, 'O1.1', NULL, NULL, NULL),
('ae9d5cd4-ae75-4488-b03c-155eaffff012', 'Products', 'products', 'products', 'products', 16, 0, 'C1', NULL, NULL, NULL),
('b913a939-4a81-407a-b3c0-8df75d3dfa80', 'Telemedicine', 'products/telemedicine', 'telemedicine', 'telemedicine', 20, 1, 'C1.4', NULL, NULL, NULL),
('bb189a43-59b2-474f-a51f-e5c73219d44f', 'Legal Disclaimer', 'legal-disclaimer', 'legal-disclaimer', 'legal-disclaimer', 47, 0, 'P1', NULL, NULL, NULL),
('bee8793d-f470-45a6-be01-a045c75148e1', 'Hospital Accreditation', 'partnerships-accreditations/hospital-accreditation', 'hospital-accreditation', 'hospital-accreditation', 22, 1, 'D2.1', NULL, NULL, NULL),
('c72aa9fc-054b-4af5-9871-2aecb825f550', 'Careers', 'about-us/careers', 'careers', 'careers', 35, 1, 'J1', NULL, NULL, NULL),
('c9116108-eaf7-4671-8184-471790bd4719', 'Contact Us', 'contact-us', 'contact-us', 'contact-us', 40, 0, 'L1', NULL, NULL, NULL),
('c99ce5f1-a439-4568-bb8a-1cde94fd24eb', 'Privacy Policy', 'privacy-policy', 'privacy-policy', 'privacy-policy', 42, 0, 'O1', NULL, NULL, NULL),
('d0fabcfe-1fc6-4c7a-aea6-0ee86b4e43b6', 'Services', 'services', 'services', 'services', 2, 0, 'B1', NULL, NULL, NULL),
('d32189a9-7c0d-49dd-b54c-a8e6c2dc6370', 'Credit Life Insurance Claims', 'services/claims/credit-life-insurance', 'credit-life-insurance-claims', 'credit-life-insurance-claims', 11, 1, 'B3.3', NULL, NULL, NULL),
('d7d3bffd-ad28-4fcf-bdee-35558f7d6bc8', 'BOD & Management Team', 'about-us/bod-management-team', 'bod-management-team', 'bod-management-team', 29, 1, 'F1.1', NULL, NULL, NULL),
('da261c78-a592-4893-a500-7207abccedf6', 'Providers', 'privacy-policy/providers', 'providers', 'providers', 45, 1, 'O1.3', NULL, NULL, NULL),
('db5280ac-dec3-453c-911b-4bf9e3f447e7', 'Provider Search', 'services/provider-search', 'provider-search', 'provider-search', 12, 1, 'B4', NULL, NULL, NULL),
('e4f33ab8-1d96-426f-b783-4d3e3cf1078a', 'Applicants', 'privacy-policy/applicants', 'applicants', 'applicants', 46, 1, 'O1.4', NULL, NULL, NULL),
('e5d5a585-a4bb-4600-aa6b-85f7c2bd1f68', 'Doctor Accreditation', 'partnerships-accreditations/doctor-accreditation', 'doctor-accreditation', 'doctor-accreditation', 24, 1, 'D2.3', NULL, NULL, NULL),
('e727f862-41ee-43c6-80bf-94b542a5ee0f', 'In-Patient Availment', 'services/availment-procedures/in-patient', 'in-patient-availment', 'in-patient-availment', 4, 1, 'B2.1', NULL, NULL, NULL),
('eff3d545-df19-4d8c-b335-70dafc36bb39', 'Homepage', 'homepage', 'homepage', 'Homepage', 1, 0, 'A1', NULL, NULL, NULL),
('f38f9930-e9b2-4551-9ea9-9f59595770d5', 'Reimbursement Claims', 'services/claims/reimbursement', 'reimbursement-claims', 'reimbursement-claims', 9, 1, 'B3.1', NULL, NULL, NULL),
('f41fb56a-7ffb-46d2-bb37-14ee93aa0de8', 'Partnerships & Accreditations', 'partnerships-accreditations', 'partnerships-accreditations', 'partnerships-accreditations', 21, 0, 'D1', NULL, NULL, NULL),
('fcc3e019-ef6a-4349-9a78-5e6a1dc17b6d', 'Annual Integrated Reports', 'about-us/corporate-governance/annual-integrated-reports', 'annual-integrated-reports', 'annual-integrated-reports', 31, 1, 'G1.1', NULL, NULL, NULL),
('fd0de462-fa4b-410a-a856-0556cec8f235', 'About Us', 'about-us', 'about-us', 'about-us', 28, 0, 'F1', NULL, NULL, NULL),
('fdb35142-eeec-4c3b-a2ef-50ff4e4a77ac', 'Out Patient Availment', 'services/availment-procedures/out-patient', 'out-patient-availment', 'out-patient-availment', 5, 1, 'B2.2', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_sections`
--

CREATE TABLE `page_sections` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `order` tinyint NOT NULL,
  `has_button` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_sections`
--

INSERT INTO `page_sections` (`id`, `page_id`, `name`, `title`, `sub_text`, `description`, `order`, `has_button`, `created_at`, `updated_at`, `deleted_at`) VALUES
('025a29dc-630b-4ee4-b8c8-3f503373e9e6', '38c39b9d-0234-4748-93ea-05578a625a01', 'FAQs', 'Questions about Voluntary Employee Benefits?', 'Voluntary Employee Benefits FAQs', NULL, 5, 0, NULL, NULL, NULL),
('038cd74e-1326-4271-806b-6f3608f8a148', '5469346e-803f-40cd-8d03-a0647e02614b', 'Beneficiary FAQs', 'Common questions about enrolling your\r\nbeneficiaries.', NULL, NULL, 3, 0, NULL, NULL, NULL),
('087a5bac-63f3-4e8a-ada5-7d4bc33c1bb8', '8c76d0f4-d06d-47b0-a22c-bf4216c5193a', 'Annual Report CTA', 'Explore all our annual integrated reports.', NULL, NULL, 4, 1, NULL, NULL, NULL),
('0bc7bf77-e71c-4fa1-b738-cf4002d10385', 'ae9d5cd4-ae75-4488-b03c-155eaffff012', 'Individual Plan CTA', 'Explore our plans for individuals & MSMEs.', 'Individuals & MSMEs Plans', NULL, 3, 0, NULL, NULL, NULL),
('0deeec98-d5d1-40f3-aac8-b3cfdb30babb', 'b913a939-4a81-407a-b3c0-8df75d3dfa80', 'FAQs', 'Got questions about our Telemedicine services?', 'Telemedicine FAQs', NULL, 5, 0, NULL, NULL, NULL),
('1081a2e3-e346-4dfd-aab0-f5eeed01c34c', '63f10bb4-a8f4-47bc-beb0-ea04f01262ef', 'FAQs', 'FAQs', NULL, NULL, 1, 0, NULL, NULL, NULL),
('15cfbdbf-f776-45b4-9b95-a804f494b4ee', '51c36b7d-3aef-4c62-8f83-0089f396e873', 'banner', 'Get all the forms you need.', 'Downloadable Forms', NULL, 1, 0, NULL, NULL, NULL),
('1d72089d-80bd-47af-8782-65f1d7e98f8f', '8c76d0f4-d06d-47b0-a22c-bf4216c5193a', 'Annual Integrated Report File', '', NULL, NULL, 3, 0, NULL, '2026-01-27 07:14:26', NULL),
('1f458320-4ebb-4200-aecc-f7547e798948', '3b3bed02-ab46-4cab-b3ae-8d79e0616ff0', 'Claim Requirements', '', NULL, NULL, 1, 0, NULL, NULL, NULL),
('228a8bd6-d7fb-41ac-9a94-dcfa9ee4d92f', 'd0fabcfe-1fc6-4c7a-aea6-0ee86b4e43b6', 'Digital Platforms CTA', 'Explore our digital platforms.', 'Digital Platforms', 'Learn about our suite of digital platforms that makes policy and member management fast and easy.', 6, 1, NULL, NULL, NULL),
('23848f82-f63e-4344-bd80-3add752fb433', '38c39b9d-0234-4748-93ea-05578a625a01', 'banner', 'Voluntary Employee Benefit Program', NULL, 'Your employees can now feel more secured with their added life and health protection. The VEB also allows them to extend protection to their immediate family members. ', 1, 0, NULL, NULL, NULL),
('2538f728-bf64-45ca-b98e-1a18c0a5b611', '2e96a604-4cbb-4cdb-bd6b-49922bb3fa85', 'Member Mobile App FAQs ', 'Questions about our Member Mobile App?', NULL, NULL, 5, 0, NULL, NULL, NULL),
('264085a2-ce61-46da-ba92-a3af4e1242ba', 'bb189a43-59b2-474f-a51f-e5c73219d44f', 'Content Block', 'Legal Dislcaimer', NULL, '<h2>Terms and Conditions of Use</h2><p>The Generali’s website (the “Site” or the “Generali Site”) is managed by Generali Life Assurance Philippines, Inc. (“GENERALI”).</p><p>By using this site or downloading materials from it, you agree to abide by the terms and conditions set forth in this notice. By using this site you will be deemed to have irrevocably agreed to these terms.</p><p>If you do not agree to abide by these terms and conditions, you are kindly requested not to use this Site.</p><hr><h2>Limited Use</h2>', 1, 0, NULL, NULL, NULL),
('2bc5c657-67eb-49f0-9b8b-95a626ed9eb4', 'fd0de462-fa4b-410a-a856-0556cec8f235', 'BOD & Management Team CTA', 'See the team that leads us.', 'Our BOD & Management Team', NULL, 7, 1, NULL, NULL, NULL),
('2de50348-31a2-4302-b017-34bd1765f52b', '38c39b9d-0234-4748-93ea-05578a625a01', 'Plan Highlights', 'Benefits are best when shared.', 'Plan Highlights', NULL, 2, 0, NULL, NULL, NULL),
('33ba871f-3967-442f-8389-dd10aa1365c3', '51900e2a-b6f9-4ec1-8aa2-a7e5bd22a709', 'banner', 'Individual plans fit for you.', 'Our Individual & MSME Plans', NULL, 1, 0, NULL, NULL, NULL),
('37ff972a-2f66-45cc-8fea-aefe5d3c79f5', 'bee8793d-f470-45a6-be01-a045c75148e1', 'Downloadable Files', 'Downloads', NULL, NULL, 2, 0, NULL, NULL, NULL),
('39d395f8-59bd-4d07-ac42-8da71ad06156', '3b3bed02-ab46-4cab-b3ae-8d79e0616ff0', 'Claim Instructions', 'Here’s how to file an Reimbursement Claim', 'Here are the forms you’ll need', NULL, 2, 0, NULL, NULL, NULL),
('3a673d72-fe0c-4f43-9e72-6872ab2c1422', 'd0fabcfe-1fc6-4c7a-aea6-0ee86b4e43b6', 'Availment Procedures CTA', 'See our availment procedures.', NULL, NULL, 2, 0, NULL, NULL, NULL),
('3c815419-9714-4a9b-92fb-460dd033fb5a', 'eff3d545-df19-4d8c-b335-70dafc36bb39', 'Homepage Banner', 'All Around Group Insurance, Caring for Everyone', NULL, NULL, 1, 0, NULL, '2026-01-03 01:48:54', NULL),
('3f0ef96c-bf19-4739-921b-5fd50b66767c', '488b6b7f-abca-4d66-b070-b57e3b7ad5a9', 'Availment Procedure FAQs', 'Common questions about Availments.', 'Availment Procedure FAQs', NULL, 4, 0, NULL, NULL, NULL),
('3feeda4f-aacf-45cb-9e6b-d58ddb34f8d5', '488b6b7f-abca-4d66-b070-b57e3b7ad5a9', 'Availment Procedures Banner', 'See our availment procedures.', 'Availment Procedures', NULL, 1, 0, NULL, NULL, NULL),
('40b91f49-5df8-4d06-b9e2-a8a586131b1b', 'eff3d545-df19-4d8c-b335-70dafc36bb39', 'Testimonials', 'Trusted by companies nationwide.', 'Testimonials', NULL, 2, 0, NULL, NULL, NULL),
('40ec68be-289e-40d7-8c12-2927249aa187', '62ec54d5-cb9a-4e47-8d48-a9f78a9354ec', 'Downloadable Files', 'Downloads', NULL, NULL, 2, 0, NULL, NULL, NULL),
('4105ccc9-9bc2-4f32-a73d-a2e994f0dad8', 'fd0de462-fa4b-410a-a856-0556cec8f235', 'History', 'Backed by over 100 years of heritage.', 'Our Milestones & History', NULL, 6, 0, NULL, NULL, NULL),
('45e9cd30-d2ed-400d-9062-267dc1ac3a1a', 'c72aa9fc-054b-4af5-9871-2aecb825f550', 'CTA', 'Become an accredited insurance agent.', 'Agent Accreditation', 'Interested in helping new customers get covered? See how you can get accredited\r\nas an agent with us.', 4, 1, NULL, NULL, NULL),
('46da49e1-8c90-428d-a77f-4c3adacf0361', 'c9116108-eaf7-4671-8184-471790bd4719', 'Socials', 'Follow us on socials!', NULL, NULL, 3, 0, NULL, NULL, NULL),
('47b48c8d-ce83-4ad9-978f-15f1704f1513', '51c36b7d-3aef-4c62-8f83-0089f396e873', 'Forms', 'Forms', NULL, NULL, 2, 0, NULL, NULL, NULL),
('482c4f34-127c-458b-bd17-47dc04fc6d3e', '180913f6-e862-4616-a4da-73da2e35023e', 'Claims FAQs', 'Common questions about filing claims.', NULL, NULL, 2, 0, NULL, NULL, NULL),
('4839e9cb-8605-4013-ba02-32174b5137e9', '488b6b7f-abca-4d66-b070-b57e3b7ad5a9', 'Emergencies CTA', 'Availments for non-accredited hospitals.', 'For Emergencies', NULL, 3, 1, NULL, NULL, NULL),
('49d10cb9-c178-49d6-8e03-44e2774181a2', '5469346e-803f-40cd-8d03-a0647e02614b', 'Enrollment Guide', 'Enroll a beneficiary in a few easy steps!', NULL, NULL, 2, 0, NULL, NULL, NULL),
('4c01f444-796d-49be-ac8d-e1de8cad931c', '62ec54d5-cb9a-4e47-8d48-a9f78a9354ec', 'FAQs', 'Commonly Asked Accreditation Questions', 'Clinic Accreditation FAQs', NULL, 3, 0, NULL, NULL, NULL),
('4e57df06-fcd0-44c4-9719-3b49c11f4bbb', 'fdb35142-eeec-4c3b-a2ef-50ff4e4a77ac', 'Availment Instructions', 'Here’s how to file an In-Patient Availment', 'Here are the forms you’ll need', NULL, 1, 0, NULL, NULL, NULL),
('4f72ce5b-73f3-4206-bd68-c632b59b5ca4', 'fd0de462-fa4b-410a-a856-0556cec8f235', 'Values', 'A dedication to our people and partners.', 'Our Values', NULL, 5, 0, NULL, NULL, NULL),
('5144b953-5580-444b-901e-a060c5ce4010', '8628841d-9b63-46d9-bb47-216d85a11fb0', 'Availment Instructions', 'Here’s how to file an In-Patient Availment', 'Here are the forms you’ll need', NULL, 1, 0, NULL, NULL, NULL),
('515a7602-82ed-47dc-8236-4e0e9ab3e57f', 'f38f9930-e9b2-4551-9ea9-9f59595770d5', 'Claim Requirements', '', NULL, NULL, 1, 0, NULL, NULL, NULL),
('51ab3b63-5cb3-4caf-8bcd-317a4cbc7ee5', '8c76d0f4-d06d-47b0-a22c-bf4216c5193a', 'Content Block', 'Our Governance Practices', NULL, 'At InLife Benefits, we are committed to transparency, accountability, and sustainability. We work with our people, partners, and stakeholders to drive progress, embrace transformation, and continue delivering value to the communities we serve.', 2, 0, NULL, NULL, NULL),
('544f0ae5-920b-43b1-912f-5955795e844c', '256e6933-f893-4ae8-9f86-f96f0e385d1f', 'FAQ Topics', 'Our FAQ Topics', NULL, NULL, 1, 0, NULL, NULL, NULL),
('563152e1-6744-4ad8-a525-83061fb2076c', '646f9e9a-2c93-4d8d-bdae-53d704664405', 'sidebar section', 'Browse by Section', NULL, NULL, 2, 0, NULL, NULL, NULL),
('567b97c9-ffa9-46e8-926c-f6bbeed86276', 'ae9d5cd4-ae75-4488-b03c-155eaffff012', 'Group Plan CTA', 'See our plans for businesses & groups.', 'Group & Corporate Plans', NULL, 2, 0, NULL, NULL, NULL),
('56e8b57d-c4e5-4e9c-b1d2-2635f38c55e1', 'c9116108-eaf7-4671-8184-471790bd4719', 'Call Us', 'Call Us', NULL, NULL, 1, 0, NULL, NULL, NULL),
('57420356-6a08-406f-8908-81945df3b60c', 'c9116108-eaf7-4671-8184-471790bd4719', 'Thank you message', 'We’ve received your message!', NULL, 'Thanks for your message. We’ve received your message and we’ll get back to you through your preferred method of contact at the soonest possible time.', 4, 0, NULL, NULL, NULL),
('583e0c33-5da7-464b-983f-d36d92682eec', 'd0fabcfe-1fc6-4c7a-aea6-0ee86b4e43b6', 'Services Banner', 'Reliable services that care for you.', 'Services', NULL, 1, 0, NULL, NULL, NULL),
('59730505-5de4-494b-a692-e89b1f6b132c', 'c72aa9fc-054b-4af5-9871-2aecb825f550', 'Banner', 'Join us in giving our customers all-around care.', 'Careers', NULL, 1, 0, NULL, NULL, NULL),
('5987494e-57cc-48c0-a8b8-9d5d7b42212e', 'd0fabcfe-1fc6-4c7a-aea6-0ee86b4e43b6', 'Beneficiary Enrollment Guide CTA', 'See how you can enroll your beneficiaries online.', 'Beneficiary Enrollment Guide', NULL, 5, 0, NULL, NULL, NULL),
('5f0a1b33-34a2-40e5-8700-ef773a9bc562', 'c99ce5f1-a439-4568-bb8a-1cde94fd24eb', 'Banner', 'Our Privacy Policy', 'Generali Life Assurance Philippines, Inc. 2025 NPC Seal of Registration', '<h2>Data Privacy Statement</h2><p>Generali Life Assurance Philippines, Inc. (“GLAPI”) is part of the Generali Group authorized to provide insurance products in the Philippines.</p><p>GLAPI considers stakeholders’ personal data as core value to be safeguarded and wishes to establish a relationship with them based on full transparency and awareness with respect to the purposes and modalities it uses when processing personal data. GLAPI respects your privacy and wants you to understand the ways it collects and uses information provided online. Please read this notice carefully.</p><h2>Data Privacy Vision</h2><p>At GLAPI, we envision a future where data privacy is at the forefront of everything we do. We aspire to create a culture of trust and transparency, where the protection of personal information is paramount. Our vision is to be recognized as a leader in data privacy practices within the insurance market, adhering to the most rigorous standards.</p>', 1, 0, NULL, NULL, NULL),
('5fd78ce0-aa61-4def-ad19-7ada4d446866', 'd0fabcfe-1fc6-4c7a-aea6-0ee86b4e43b6', 'Claims Filing CTA', 'Learn how to file a claim.', NULL, NULL, 3, 0, NULL, NULL, NULL),
('620cf776-4830-413c-b887-e9517f95211b', '2e96a604-4cbb-4cdb-bd6b-49922bb3fa85', 'Mobile App CTA', 'Make your coverage easy. Download our Member Mobile App now!', NULL, NULL, 4, 1, NULL, NULL, NULL),
('6282bf09-5da5-4618-b5cf-74a83199bd50', '4bd0b10f-16fe-472a-9fa5-a90d556a038d', 'Request Proposal CTA', 'Get a free insurance consultation for businesses.', NULL, NULL, 2, 1, NULL, NULL, NULL),
('63e79f66-ae1b-4650-b769-054f137716fd', 'e5d5a585-a4bb-4600-aa6b-85f7c2bd1f68', 'FAQs', 'Commonly Asked Accreditation Questions', 'Doctor Accreditation FAQs', NULL, 3, 0, NULL, NULL, NULL),
('654a61b2-18e5-40d8-a101-c1a121c2bf71', 'c99ce5f1-a439-4568-bb8a-1cde94fd24eb', 'Content Block', 'Content Block', NULL, '<h2>Data Privacy Mission</h2><p>Our mission at InLife Benefits is to safeguard the privacy of personal information entrusted to us by our customers, employees, partners, and stakeholders. We are committed to upholding the principles of data protection and compliance with relevant laws and regulations. Through continuous education, robust policies, and state-of-the-art technologies, we strive to:</p><h3>Foster Trust and Transparency</h3><p>We prioritize building and maintaining trust with our stakeholders through transparent communication, proactive engagement, and ethical data handling practices.</p><h3>Educate and Empower</h3><p>We aim to educate all stakeholders about their rights regarding personal data and empower them to make informed decisions about its use, thus ensuring that data subjects always remain in control of their own personal information.</p><h3>Ensure Accountability</h3><p>We hold ourselves accountable for the protection of personal information entrusted to us, ensuring its confidentiality, integrity, and availability.</p><h3>Promote Innovation</h3><p>We embrace innovative solutions that enhance data privacy while enabling us to deliver exceptional services and experiences to our customers, tailored specifically to our insurance products.</p><h3>Continuously Improve</h3><p>We are committed to continuous improvement in our data privacy management systems, processes, and technologies, to adapt to evolving threats and regulatory requirements.</p><p>By adhering to our mission, Generali Life Assurance Philippines, Inc. endeavors to build lasting relationships built on trust, integrity, and respect for privacy in the digital age.</p>', 2, 0, NULL, NULL, NULL),
('6938eae5-1204-4c4d-979b-e645aa9afe59', 'f41fb56a-7ffb-46d2-bb37-14ee93aa0de8', 'Agency Registry CTA', 'See Our List of Accredited Insurance Agents.', 'Agent Registry List', NULL, 3, 1, NULL, NULL, NULL),
('6be97c67-a1c7-4a7d-8dbb-1bebbf8fd609', '646f9e9a-2c93-4d8d-bdae-53d704664405', 'banner', '2024 Annual Corporate Governance Report (ACGR)', NULL, NULL, 1, 0, NULL, NULL, NULL),
('6ccafa7f-bd80-4e2e-bf29-cff72b5e36cb', 'e5d5a585-a4bb-4600-aa6b-85f7c2bd1f68', 'Requirement Checklist File', 'Requirements', NULL, NULL, 1, 0, NULL, NULL, NULL),
('6e0a93e2-a4b7-4d57-8e28-5bbb17a0c1ae', 'eff3d545-df19-4d8c-b335-70dafc36bb39', 'Request for Proposal CTA', 'Get a free insurance\r\nconsultation for businesses.', NULL, NULL, 7, 0, NULL, NULL, NULL),
('72bfe3b4-99b0-433b-9e63-8677a5a9ccbf', 'c72aa9fc-054b-4af5-9871-2aecb825f550', 'Benefits', 'Making InLife Benefits one of the best places to work.', 'Life at InLife Benefits', NULL, 2, 0, NULL, NULL, NULL),
('73da9e85-435f-4ead-a5f0-bc20ed22728d', 'c72aa9fc-054b-4af5-9871-2aecb825f550', 'Commitment', 'Our commitment reflects how we value people.', 'Our Commitment to Our People', 'We apply our ', 3, 0, NULL, NULL, NULL),
('74e0a80c-af1f-4b12-ae1a-b55e896e3494', 'c72aa9fc-054b-4af5-9871-2aecb825f550', 'Careers FAQs', 'See our common career questions.', 'Careers FAQs', NULL, 5, 0, NULL, NULL, NULL),
('78525d41-a84e-4c8f-b701-0cacc5870adf', 'f41fb56a-7ffb-46d2-bb37-14ee93aa0de8', 'InLife Benefits Partner', 'Connect with an ever growing network.', 'Why Be an InLife Benefits Partner?', NULL, 2, 0, NULL, NULL, NULL),
('7f5f05f2-6345-4e8a-a3d4-86b64e718233', '8c76d0f4-d06d-47b0-a22c-bf4216c5193a', 'banner', 'Leading the industry with good governance and management.', 'Corporate Governance', NULL, 1, 0, NULL, NULL, NULL),
('80d5cfc8-32fc-4a1a-9015-43aa211a6218', 'fd0de462-fa4b-410a-a856-0556cec8f235', 'Company Video', 'Providing a full suit of benefits.', 'Company Video', 'With our wide network of partners and providers, InLife Benefits is one of the leading insurance providers that helps companies offer a wide range of coverages and benefits to their employees.', 2, 0, NULL, NULL, NULL),
('848c4b84-3916-44bc-a01d-2eaa5b1c44d9', '741202e4-f271-4e32-b916-3b493db12ccc', 'CTA', 'Spotlighting how women make an impact everywhere.', 'InLife Sheroes', NULL, 3, 1, NULL, NULL, NULL),
('8a52b2de-56c6-40f4-9c86-67fc584c2256', 'd0fabcfe-1fc6-4c7a-aea6-0ee86b4e43b6', 'Downloadable Forms CTA', 'Explore our Downloadable Forms ', NULL, NULL, 4, 1, NULL, NULL, NULL),
('8adde00d-a8e1-47a0-835b-88409fda7b72', '62ec54d5-cb9a-4e47-8d48-a9f78a9354ec', 'Requirement Checklist File', 'Requirements', NULL, NULL, 1, 0, NULL, NULL, NULL),
('8e9c9978-ce11-4e33-8ad6-fadbaa9b8995', 'd32189a9-7c0d-49dd-b54c-a8e6c2dc6370', 'Claim Requirements', '', NULL, NULL, 1, 0, NULL, NULL, NULL),
('920be0c5-8650-409a-bc21-9a7bb2067a76', 'b913a939-4a81-407a-b3c0-8df75d3dfa80', 'Telemedicine Features', 'Consulting with a doctor, hassle free.', 'What can I do through Telemedicine?', NULL, 2, 0, NULL, NULL, NULL),
('93626331-3954-4ad6-bcf4-7bd5d39b355f', 'fd0de462-fa4b-410a-a856-0556cec8f235', 'Sustainability & CSR CTA', 'Helping communities nationwide.', 'Sustainability & CSR', NULL, 9, 1, NULL, NULL, NULL),
('944ee017-6908-4629-8629-74f2e219327b', '51900e2a-b6f9-4ec1-8aa2-a7e5bd22a709', 'Faqs', 'Find quick answers about our Individual and MSME Plans.', 'Individual & MSME Plans FAQs', NULL, 2, 0, NULL, NULL, NULL),
('98857472-68f4-4fe1-bb14-88ef07cc1f1e', 'fd0de462-fa4b-410a-a856-0556cec8f235', 'Mission Vision', 'Moving forward guided by our vision and mission.', 'Our Vision & Mission', NULL, 4, 0, NULL, NULL, NULL),
('98d4cb0f-6fdd-4b09-a07c-8e99de2c4938', 'e4f33ab8-1d96-426f-b783-4d3e3cf1078a', 'FAQs', 'FAQs', NULL, NULL, 1, 0, NULL, NULL, NULL),
('9a4d56c4-00a4-4442-923f-f05eeca159c8', 'f38f9930-e9b2-4551-9ea9-9f59595770d5', 'Claim Instructions', 'Here’s how to file an Reimbursement Claim', 'Here are the forms you’ll need', NULL, 2, 0, NULL, NULL, NULL),
('9b545321-59d3-47ed-ad09-15426227ab09', '2e96a604-4cbb-4cdb-bd6b-49922bb3fa85', 'Video', 'Watch how the app works.', NULL, NULL, 3, 0, NULL, NULL, NULL),
('a24fb3e4-942a-4f54-8ca5-71451556186b', '88920416-48d4-406d-be64-b5faea40b61d', 'banner', 'All our resources in one place.', 'Resources', NULL, 1, 0, NULL, NULL, NULL),
('a37cbbf1-49b2-4a43-a57c-0dd766246c3f', 'bee8793d-f470-45a6-be01-a045c75148e1', 'FAQs', 'Commonly Asked Accreditation Questions', 'Hospital Accreditation FAQs', NULL, 3, 0, NULL, NULL, NULL),
('a4407653-0886-4de1-9a24-4591ef5c45b9', '741202e4-f271-4e32-b916-3b493db12ccc', 'banner', 'Giving all around care in our communities.', 'Sustainability & CSR', NULL, 1, 0, NULL, NULL, NULL),
('ab134e6c-c5e0-4bac-a054-7613b5af1098', '2e96a604-4cbb-4cdb-bd6b-49922bb3fa85', 'Banner', 'InLife Benefits Member Mobile App', 'Download the app now!', 'Get the most of your care and coverage through our Member Mobile App. ', 1, 1, NULL, NULL, NULL),
('adafa9f8-d16f-47b2-a12d-f9e794893a5e', '210eb16a-11b4-4b34-910f-ec69921e9e09', 'Content Block', 'Content Block', NULL, 'Trust between business partners is paramount for guaranteeing the sustainability of our business, the protection of our customers and the quality of our products and services.\r\n\r\nThis section outlines the general principles that have to underpin fruitful relations with our business partners. The establishment of a network based on long-lasting and mutually satisfactory relations with our partners is a strategic objective for GLAPI and builds competitive success. Thus, GLAPI requires its business partners to ensure compliance with all regulatory requirements and to align with its policies while performing business. The Generali Group and GLAPI as part of it are committed to performing business with partners by complying with the following principles and provisions:', 1, 0, NULL, NULL, NULL),
('ae9d5cd4-ae75-4488-b03c-155eaffff012', 'ae9d5cd4-ae75-4488-b03c-155eaffff012', 'Banner', 'Giving you full circle protection.', 'Products', NULL, 1, 0, NULL, NULL, NULL),
('b0b0fc92-9bcf-4a5f-8bd7-c0c64137ad72', '73dafb0b-9d17-4198-97ab-cee13b8cdb80', 'Banner', 'Make insurance access easy.', 'Our Digital Platforms', NULL, 1, 0, NULL, NULL, NULL),
('b1490527-db5a-4284-ab89-9b5b3d2c8d4c', '4bd0b10f-16fe-472a-9fa5-a90d556a038d', 'Banner', 'All around group protection.', 'Our Group Insurance Plans', NULL, 1, 0, NULL, NULL, NULL),
('b1c1a18c-ac18-4473-b984-b353475290b8', 'd32189a9-7c0d-49dd-b54c-a8e6c2dc6370', 'Claim Instructions', 'Here’s how to file an Reimbursement Claim', 'Here are the forms you’ll need', NULL, 2, 0, NULL, NULL, NULL),
('b4e6e86e-10f0-43c5-9f6c-0fd357820e2b', 'fd0de462-fa4b-410a-a856-0556cec8f235', 'Banner', 'We’re doing group insurance better.', 'About InLife Benefits', NULL, 1, 0, NULL, NULL, NULL),
('c4fdcc71-32e6-4f0f-9b6c-41ff5e1c9b57', 'eff3d545-df19-4d8c-b335-70dafc36bb39', 'General FAQs', 'Find quick answers with our FAQs.', NULL, NULL, 6, 0, NULL, NULL, NULL),
('c9fe6a6b-2e13-4e86-8b9e-8e3eff423afb', 'b913a939-4a81-407a-b3c0-8df75d3dfa80', 'Call a doc hotline', 'Can’t use the Member Mobile App?', '24/7 Call-A-Doc is powered by', 'No worries! You may still consult via the 24/7 Call-A-Doc Hotline numbers listed below.', 4, 0, NULL, NULL, NULL),
('cb75b8b0-ccee-46f1-b2b2-e5ecc13e0c43', 'fd0de462-fa4b-410a-a856-0556cec8f235', 'Careers CTA', 'Join us in giving our customers all-around care.', 'CTA', NULL, 10, 1, NULL, NULL, NULL),
('cc1ea159-a847-409d-91b7-8e4be9757896', '27870368-f122-4a01-94ad-23f2fa035b32', 'Availment Instructions', 'Here’s how to file an In-Patient Availment', 'Here are the forms you’ll need', NULL, 1, 0, NULL, NULL, NULL),
('cc30c0ed-ddfd-449a-b5fa-35d95d03ffc4', 'eff3d545-df19-4d8c-b335-70dafc36bb39', 'Member Mobile App CTA', 'Manage your benefits on the go.', 'Member Mobile App', 'Download the InLife Benefits Member App View your coverage, file claims, and get care wherever you are.', 4, 1, NULL, NULL, NULL),
('cd03399a-5ce7-4e28-9de4-016b88a5c9d5', 'fd0de462-fa4b-410a-a856-0556cec8f235', 'Corporate Governance CTA', 'Leading the way with good governance.', 'Corporate Governance', NULL, 8, 1, NULL, NULL, NULL),
('ce69a142-65f3-4c85-8633-53e72a978ad0', 'bee8793d-f470-45a6-be01-a045c75148e1', 'Requirement Checklist File', 'Requirement Checklist', NULL, NULL, 1, 0, NULL, NULL, NULL),
('d0d3bcd9-81cb-4c3e-9319-8a6c7824037d', 'eff3d545-df19-4d8c-b335-70dafc36bb39', 'eShop CTA', 'Shop our individual plans online.', 'InLife Benefits eShop', 'Out and about? No worries! Get personal plans through our easy and convenient InLife Benefits eShop.', 3, 1, NULL, NULL, NULL),
('d14ceb34-27a8-4c28-ad2a-bc551ddcb66c', '88920416-48d4-406d-be64-b5faea40b61d', 'CTA', 'Have questions? Find answers on our Help & FAQs.', NULL, NULL, 2, 1, NULL, NULL, NULL),
('d4fc90f5-d432-4202-a2fa-57076cec9f5a', 'da261c78-a592-4893-a500-7207abccedf6', 'FAQs', 'FAQs', NULL, NULL, 1, 0, NULL, NULL, NULL),
('def15e75-4eb3-4cc5-b7b2-88f455719d1d', '741202e4-f271-4e32-b916-3b493db12ccc', 'Content Block', 'A commitment to our people and the planet.', NULL, 'At InLife Benefits, we are committed to transparency, accountability, and sustainability. We work with our people, partners, and stakeholders to drive progress, embrace transformation, and continue delivering value to the communities we serve.', 2, 0, NULL, NULL, NULL),
('df7b710a-d93d-4add-aa10-ac07aba8fee0', 'c9116108-eaf7-4671-8184-471790bd4719', 'Email Us', 'Email Us', NULL, NULL, 2, 0, NULL, NULL, NULL),
('e1132375-bad0-4b42-b9bb-88106523e1c9', '4bd0b10f-16fe-472a-9fa5-a90d556a038d', 'Group Plans FAQs', 'Find quick answers about our Group Plans.', 'Group Plans FAQs', NULL, 3, 0, NULL, NULL, NULL),
('e252184b-330e-4559-b8c0-6e3a1a282973', '5469346e-803f-40cd-8d03-a0647e02614b', 'Banner', 'Enroll your beneficiaries online.', 'Beneficiary Enrollment', 'Need to enroll your beneficiaries?', 1, 1, NULL, NULL, NULL),
('e3899d24-86fa-4ea3-a452-9fa429973165', 'e727f862-41ee-43c6-80bf-94b542a5ee0f', 'Availment Instructions', 'Here’s how to file an In-Patient Availment', 'Here are the forms you’ll need', NULL, 1, 0, NULL, NULL, NULL),
('e4a849f1-6f8d-418c-a827-c6b1f1d47dd0', 'eff3d545-df19-4d8c-b335-70dafc36bb39', 'Our Digital Platforms CTA', 'Access our Online\r\nDigital Platforms.', 'Our Digital Platforms', NULL, 5, 0, NULL, NULL, NULL),
('e5f084af-3d78-4a8a-9bdc-bbbb99d2a99c', 'b913a939-4a81-407a-b3c0-8df75d3dfa80', 'banner', 'Get reliable care anytime, anywhere.', 'Telemedicine', 'Consulting with a quality doctor has never been this easy. See how you can meet with one of our accredited doctors anytime, anywhere. Download the app to access Telemedicine!', 1, 1, NULL, NULL, NULL),
('e5f37631-4a2e-422e-a5ba-8075492de15c', 'e5d5a585-a4bb-4600-aa6b-85f7c2bd1f68', 'Downloadable Files', 'Downloads', NULL, NULL, 2, 0, NULL, NULL, NULL),
('e605c853-d983-4634-8463-7fe114b389fd', '2e96a604-4cbb-4cdb-bd6b-49922bb3fa85', 'App Highlights', 'What can I do on the app?', 'App Highlights', NULL, 2, 0, NULL, NULL, NULL),
('e9d269d3-4d87-44ba-9f2b-473d7f7de107', 'fd0de462-fa4b-410a-a856-0556cec8f235', 'About Inlife', 'Backed by the first and largest Filipino insurance life company.', 'About Inlife', 'With the acquisition of Generali Philippines in December 2024, InLife Benefits is now enhanced by the expertise, experience and network of Insular Life Philippines. We remain committed to serving Filipinos with the very best employee benefits we offer.', 3, 1, NULL, NULL, NULL),
('eb1c8afa-a784-4eec-80f0-64ac118809a9', 'b913a939-4a81-407a-b3c0-8df75d3dfa80', 'Mobile App CTA', 'Talk to a Doctor 24/7. Download our Member Mobile App now!', NULL, NULL, 3, 1, NULL, NULL, NULL),
('eefd2ade-d380-4386-98fc-2cb728b12a5d', '38c39b9d-0234-4748-93ea-05578a625a01', 'Optional Benefits', 'Get more from your coverage.', 'Optional Benefits', NULL, 3, 0, NULL, NULL, NULL),
('f14ede76-191c-4de3-8d04-900f14c353de', '180913f6-e862-4616-a4da-73da2e35023e', 'Claims Banner', 'Making claims straightforward.', 'Claims Filing', NULL, 1, 0, NULL, NULL, NULL),
('f2913c8b-9c2f-43ce-abd6-0b86ff1fe1ec', 'ae9d5cd4-ae75-4488-b03c-155eaffff012', 'Benefits', 'Insurance plans that give you peace of mind.', 'Why Choose InLife Benefits?', NULL, 4, 0, NULL, NULL, NULL),
('f817218f-40e9-458b-b2b4-920705d67b99', 'f41fb56a-7ffb-46d2-bb37-14ee93aa0de8', 'banner', 'Join our nationwide network of reliable providers.', 'Partnerships & Accreditations', NULL, 1, 0, NULL, NULL, NULL),
('f9934d62-c28f-450d-a7e3-f48e18ec9a4e', '38c39b9d-0234-4748-93ea-05578a625a01', 'Brochure CTA', 'Download our brochure to learn about Voluntary Employee Benefits.', NULL, NULL, 4, 0, NULL, NULL, NULL),
('faca4f0f-7497-4105-8741-95fca7aae61b', '5d195b86-4dbb-44e5-8d8e-30bcd43bd0c2', 'Content Block', 'Code of Conduct', NULL, 'The Generali Life Assurance Philippines, Inc. Code of Conduct applies to all its employees regardless of their rank or position. Our Code of Conduct is being also applied to all members of supervisory and management bodies (including its Board of Directors and Senior Management). In addition, third parties (consultants, suppliers, agents, etc.) who act on behalf of Generali Life Assurance Philippines, Inc. or Generali Group are expected to adhere to the principles set out in the Code.\r\n\r\nThe Code of Conduct sets minimum standards of behavior to be observed and provides specific rules of conduct in relation to the following issues: promotion of diversity and inclusion, assets and business data protection, conflicts of interest, anti-bribery and anti-corruption, financial information and insider dealing, anti-money laundering, anti-terrorist financing and international sanctions.\r\n\r\nThe Code of Conduct has been translated in all the languages of the countries where the Group operates.', 1, 0, NULL, NULL, NULL),
('fb8b66f6-f030-4970-96dc-b0d7c7209e6b', '488b6b7f-abca-4d66-b070-b57e3b7ad5a9', 'Mobile App Availment CTA', 'How to file through our Mobile App.', 'Mobile App Availment', NULL, 2, 1, NULL, NULL, NULL),
('fd58d96a-99ce-4183-bc7e-50cfdd5dbdfb', '9dff332a-ceaf-4fb1-9f01-53d06346c626', 'FAQs', 'FAQs', NULL, NULL, 1, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('group','individual') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `shop_link` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `upgrade_badge` tinyint NOT NULL DEFAULT '0',
  `plus_badge` tinyint NOT NULL DEFAULT '0',
  `slug` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sequence` int NOT NULL DEFAULT '0',
  `enabled` tinyint NOT NULL DEFAULT '1',
  `featured` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `title`, `type`, `subtitle`, `description`, `shop_link`, `upgrade_badge`, `plus_badge`, `slug`, `sequence`, `enabled`, `featured`, `created_at`, `updated_at`, `deleted_at`) VALUES
('4c79a296-004c-4304-bb05-39151d9cf2c8', 'Group Life', 'group', 'Annual Renewable Term with Riders', 'All Around Group Life Insurance\r\nwith lump sum benefits and flexible add-ons for employees.', NULL, 1, 0, 'group-life', 1, 1, 1, '2026-01-11 11:57:11', '2026-01-11 11:57:11', NULL),
('8df5f869-2b6f-48cc-aee8-bb80975c6cc9', 'Hospital Assist', 'individual', 'Your Hospitalization Support', 'We assist you by covering confinement expenses such as private room provision, professional fees, surgery, medicines and more', 'https://google.com', 0, 0, 'hospital-assist', 1, 1, 0, '2026-01-11 13:06:05', '2026-01-11 13:06:05', NULL),
('d6ac0c60-26f1-492b-9026-0ff180db3fa1', 'Group Personal Accident', 'group', 'Coverage for Injury or Death', 'Comprehensive Accident Care Support for treatment, disability, or loss of life.', NULL, 1, 0, 'group-personal-accident', 2, 1, 0, '2026-01-11 13:42:48', '2026-01-11 13:42:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plan_availments`
--

CREATE TABLE `plan_availments` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sequence` int NOT NULL DEFAULT '0',
  `plan_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_availments`
--

INSERT INTO `plan_availments` (`id`, `title`, `sequence`, `plan_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('474d8ed0-b690-4ae1-a725-7eddb19a4815', 'tes', 1, '4c79a296-004c-4304-bb05-39151d9cf2c8', '2026-01-26 06:46:28', '2026-01-26 06:46:28', NULL),
('4da91adc-5360-495f-b060-1dc713b2fa9c', 'Outpatient Availment', 1, '8df5f869-2b6f-48cc-aee8-bb80975c6cc9', NULL, NULL, NULL),
('bec94d15-9050-4ccf-9802-d661dfe66e5e', 'In-Patient Availment', 3, '8df5f869-2b6f-48cc-aee8-bb80975c6cc9', NULL, NULL, NULL),
('bf6477ce-94d1-4951-aba2-909e140ed3f5', 'Emergency Availment', 2, '8df5f869-2b6f-48cc-aee8-bb80975c6cc9', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plan_faqs`
--

CREATE TABLE `plan_faqs` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sequence` int NOT NULL DEFAULT '0',
  `plan_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_faqs`
--

INSERT INTO `plan_faqs` (`id`, `title`, `answer`, `sequence`, `plan_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('1491e2f7-dea5-4b24-82ae-9e6fef07c083', 'Is treatment for animal bite covered under this policy?', '[insert content here]', 4, '8df5f869-2b6f-48cc-aee8-bb80975c6cc9', NULL, NULL, NULL),
('3813709f-8a64-4066-bebb-b5907fce271a', 'Is Physical Therapy covered under this policy?', '[insert content here]', 2, '8df5f869-2b6f-48cc-aee8-bb80975c6cc9', NULL, NULL, NULL),
('3fa28ae1-3716-4cae-999c-bd8522ae2c0f', 'Does the policy cover Pre-Existing Conditions?', 'Yes, Pre-Existing Conditions will be covered up to the Annual Benefit Limit (ABL) after 12 months of continuous coverage.', 1, '8df5f869-2b6f-48cc-aee8-bb80975c6cc9', '2026-01-11 18:17:30', NULL, NULL),
('628af411-e7f8-41f7-8cd8-59ec2b87d7d7', 'Can I use this for dental treatment?', '[insert content here]', 3, '4c79a296-004c-4304-bb05-39151d9cf2c8', NULL, NULL, NULL),
('69f6e330-413a-4036-8cf4-70dfba71787e', 'Is Physical Therapy covered under this policy?', '[insert content here]', 2, '4c79a296-004c-4304-bb05-39151d9cf2c8', NULL, NULL, NULL),
('be397171-34aa-4900-98e8-f17f1053f1ff', 'Does the policy cover the cost of MRI, CT Scan, and UTZ?', '[insert content here]', 5, '4c79a296-004c-4304-bb05-39151d9cf2c8', NULL, NULL, NULL),
('c20f6eaa-f7c8-4ea4-a810-a203228218aa', 'Is treatment for animal bite covered under this policy?', '[insert content here]', 4, '4c79a296-004c-4304-bb05-39151d9cf2c8', NULL, NULL, NULL),
('dd19603f-bd6f-47d9-bf7b-fc55b1388ce1', 'Does the policy cover Pre-Existing Conditions?', 'Yes, Pre-Existing Conditions will be covered up to the Annual Benefit Limit (ABL) after 12 months of continuous coverage.', 1, '4c79a296-004c-4304-bb05-39151d9cf2c8', '2026-01-11 18:17:30', NULL, NULL),
('e3f66875-f90c-4559-8518-998c43d99f0d', 'Can I use this for dental treatment?', '[insert content here]', 3, '8df5f869-2b6f-48cc-aee8-bb80975c6cc9', NULL, NULL, NULL),
('ec283fd8-da35-4d7a-8106-6f57fc9b9ce1', 'Does the policy cover the cost of MRI, CT Scan, and UTZ?', '[insert content here]', 5, '8df5f869-2b6f-48cc-aee8-bb80975c6cc9', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plan_highlights`
--

CREATE TABLE `plan_highlights` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `has_tooltip` tinyint NOT NULL DEFAULT '0',
  `tooltip_content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sequence` int NOT NULL DEFAULT '0',
  `plan_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_highlights`
--

INSERT INTO `plan_highlights` (`id`, `title`, `description`, `has_tooltip`, `tooltip_content`, `sequence`, `plan_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('0014bb05-2d3b-442a-a0f4-b1ddb408d4ee', 'Wide Medical Partner Network', 'Easily find an in-network hospital, clinic or doctor no matter where\r\nyou are in the country.', 0, NULL, 6, '8df5f869-2b6f-48cc-aee8-bb80975c6cc9', NULL, NULL, NULL),
('102bc88d-f49e-49fd-a2d3-c1ad2173d1e1', 'Up to PHP 200,000 Emergency Care Coverage', 'Covers emergencies if treatment leads to confinement.', 2, NULL, 0, '8df5f869-2b6f-48cc-aee8-bb80975c6cc9', NULL, NULL, NULL),
('52aff229-234a-47af-aa42-ab20b781dfa8', 'Up to PHP 200,000 Hospitalization Coverage', 'Covers per illness per year. Includes Regular Private Room. ', 0, NULL, 1, '8df5f869-2b6f-48cc-aee8-bb80975c6cc9', NULL, NULL, NULL),
('95f9cf6a-b7f0-4cbd-9139-4c159211d441', 'Ambulance Service Coverage', 'Covers transport expenses to nearby hospitals in cases of emergencies.', 0, NULL, 5, '8df5f869-2b6f-48cc-aee8-bb80975c6cc9', NULL, NULL, NULL),
('97150ecc-56cb-4985-acbb-53b96039c28c', 'Dental Care Access', 'Gives you access to InLife Benefit’s nationwide dental care network.', 0, NULL, 3, '8df5f869-2b6f-48cc-aee8-bb80975c6cc9', NULL, NULL, NULL),
('9e384a3c-c9b2-47fe-9fb0-8c4f76ceeddc', 'Flexible Options for Your Group ', 'Whether you’re a small business or a large corporation, we can tailor fit your plan to your group’s needs.', 0, NULL, 3, '4c79a296-004c-4304-bb05-39151d9cf2c8', NULL, NULL, NULL),
('aaa6708f-e0e7-4972-9e24-613b7959e11c', 'Comprehensive Life Coverage', 'Provides lump sum benefit to the beneficiary/ies in case of insured member’s death, for whatever reason it may be.*', 0, NULL, 2, '4c79a296-004c-4304-bb05-39151d9cf2c8', NULL, NULL, NULL),
('cade99cb-6f4f-4634-a74a-7b31b10ec9ba', 'One Year Renewable Insurance Term', 'No need to worry about long term insurance payments as this plan renews yearly.', 0, NULL, 1, '4c79a296-004c-4304-bb05-39151d9cf2c8', '2026-01-11 13:29:44', '2026-01-11 13:29:44', NULL),
('e0f64004-3096-4e67-a8bf-733b333f692f', 'Get Annual Physical Examinations', 'Stay updated with your health through our Annual Physical Examination (APE) coverage. ', 0, NULL, 4, '8df5f869-2b6f-48cc-aee8-bb80975c6cc9', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plan_riders`
--

CREATE TABLE `plan_riders` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sequence` int NOT NULL DEFAULT '0',
  `plan_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan_riders`
--

INSERT INTO `plan_riders` (`id`, `title`, `description`, `sequence`, `plan_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('81f10f2c-3ed7-4e95-a994-eb7b2c80dfd8', 'Burial Assistance Benefit Rider', 'Provides funeral service assistance in the event of the death of the member. ', 4, '4c79a296-004c-4304-bb05-39151d9cf2c8', NULL, NULL, NULL),
('acf8071c-6132-422a-a6c7-3eec570a0067', 'Daily Hospital Income Rider', 'We’ll provide a daily income benefit up to 31 days to help ease salary deductions due to hospital related absences. ', 5, '4c79a296-004c-4304-bb05-39151d9cf2c8', NULL, NULL, NULL),
('bcd554b5-055b-4306-b81c-224a6bc2d096', 'Accidental Death and Disability Rider', 'We’ll provide financial benefit should there be a loss of life or disability due to an accident.', 1, '4c79a296-004c-4304-bb05-39151d9cf2c8', NULL, NULL, NULL),
('c0a4a1b9-d202-467c-aadb-8d12d2022a35', 'Total and Permanent Disability Rider', 'We’ll provide financial benefit in case of disability due to bodily injury, whether by accident or disease.', 2, '4c79a296-004c-4304-bb05-39151d9cf2c8', NULL, NULL, NULL),
('d7ae0de9-95d6-4071-aa51-0fe97005b250', 'Terminal Illness Rider', 'Provides benefit, equivalent to 50% of the amount of insurance, up to a maximum limit, if diagnosed to be terminally ill.', 3, '4c79a296-004c-4304-bb05-39151d9cf2c8', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialization` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `clinic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_link` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `name`, `specialization`, `clinic`, `location`, `address`, `address_link`, `created_at`, `updated_at`, `deleted_at`) VALUES
('66933a72-5866-4154-bc93-e5919d12e56c', 'Dr. Almazan, Ma. Cristina G. ', 'Anesthesiology', 'Antipolo Doctors’ Hospital', 'Antipolo, Rizal', 'Lores Country Executive Homes M.L. Quezon Ave. Ext. Dalig Antipolo City', 'https://maps.app.goo.gl/KXdAYmPRrAe9rPyy6', NULL, NULL, NULL),
('baf00052-42f4-4418-aca6-81423c500c4f', 'Dr. Arceo, Ed N. ', 'Anesthesiology', 'Angeles University Foundation Medical Center', 'Angeles, Pampanga', 'McArthur Highway Angeles Pampanga', 'https://share.google/gIcYe0k3wEs040DV7', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `identifier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('admin','client','client-admin','customer','specialist') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_to` json DEFAULT NULL,
  `editable` int NOT NULL DEFAULT '1',
  `permissions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `permissions_in_store` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `identifier`, `type`, `access_to`, `editable`, `permissions`, `permissions_in_store`, `created_at`, `updated_at`, `deleted_at`) VALUES
('f269b653-5ef6-4fed-aa4b-1e1c81bdbc99', 'Client-Admin', 'client-admin', 'client-admin', NULL, 1, '[]', NULL, '2025-06-09 02:30:26', '2025-06-09 02:30:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_benefits`
--

CREATE TABLE `section_benefits` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `type` enum('medical','agent') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sequence` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_benefits`
--

INSERT INTO `section_benefits` (`id`, `parent_id`, `title`, `description`, `type`, `sequence`, `created_at`, `updated_at`, `deleted_at`) VALUES
('1ae211d1-0a06-45f2-8a29-ec6ea2fa4e73', '78525d41-a84e-4c8f-b701-0cacc5870adf', 'Get Access to InLife’s Network', 'Gain access to InLife’s training and development programs and end-to-end digital sales tools to reach your maximum potential.', 'agent', 2, NULL, NULL, NULL),
('857dfb73-cd5e-4b47-a4e0-d59d24f4b0de', '78525d41-a84e-4c8f-b701-0cacc5870adf', 'Achieve a flexible schedule.', 'Pursue a career as an agent that helps you grow while achieving a good work-life balance.', 'agent', 1, NULL, NULL, NULL),
('a492bab8-b07d-46cd-84e4-d504cac7812a', '78525d41-a84e-4c8f-b701-0cacc5870adf', 'Increased Patient Volume', 'With our continuously growing nationwide corporate customer base, partners in our network get increased patient engagement.', 'medical', 1, NULL, NULL, NULL),
('aa11a600-13be-4839-96c7-a8224ecb6623', '78525d41-a84e-4c8f-b701-0cacc5870adf', 'Hassle-free Payments', 'Our robust payment systems ensure that payments for services rendered are always\r\non time and hassle-free.', 'medical', 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_cards`
--

CREATE TABLE `section_cards` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sequence` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_cards`
--

INSERT INTO `section_cards` (`id`, `parent_id`, `title`, `description`, `sequence`, `created_at`, `updated_at`, `deleted_at`) VALUES
('04da33ce-b33d-4314-9232-d6ee620f69c3', 'e605c853-d983-4634-8463-7fe114b389fd', 'Keep a record of your doctor’s notes', '', 6, NULL, NULL, NULL),
('0514e46b-0e55-4ed2-8953-4eb6a32838a9', '49d10cb9-c178-49d6-8e03-44e2774181a2', 'Fill up the Beneficiary Form', 'Enter your beneficiary’s details as indicated on the form. Note that you’ll need to allocate distribution among your beneficiaries.', 3, NULL, NULL, NULL),
('05a8aa5a-4d95-4950-9297-1a28857a3833', '72bfe3b4-99b0-433b-9e63-8677a5a9ccbf', 'Giving you benefits that care', 'Our benefits go above and beyond the standard. We give you time to rest, recharge and come back ready to go\r\nfor your goals.', 2, NULL, NULL, NULL),
('06cd9010-257a-4329-8bc8-ae1e66b10cc6', '4105ccc9-9bc2-4f32-a73d-a2e994f0dad8', '2009', 'Insular Life re-launched the Insular\r\nLife Gold Eagle awards, providing scholarships to BS Education students enrolled in the University of the Philippines Diliman.', 4, NULL, NULL, NULL),
('0d408abd-1c3c-48bd-926f-14be98361def', '9a4d56c4-00a4-4442-923f-f05eeca159c8', 'Check Status of your Claim', 'A notification will be sent to you via our Mobile App. This is to update you of the status of your claim or if additional requirements will be needed for submission.', 4, NULL, NULL, NULL),
('0eafa39d-e476-414d-8022-b6fdd9ff4ee4', '39d395f8-59bd-4d07-ac42-8da71ad06156', 'Fill out Reimbursement Claim Form on our Mobile App', 'Fill out, completely and correctly, the Reimbursement Claim Form. Upload the necessary documents on our Mobile App.\r\n\r\nDownload the App', 2, NULL, NULL, NULL),
('0f55d172-1175-415b-a533-74220e1f68e4', '4f72ce5b-73f3-4206-bd68-c632b59b5ca4', 'Live the community', 'We are proud to belong to a global Group with strong, sustainable and long lasting relationships in every market in which we operate. Our markets are our homes.', 3, NULL, NULL, NULL),
('16eb3e08-d9f3-4763-b894-74ad778d77e0', '2de50348-31a2-4302-b017-34bd1765f52b', 'Expanded Medical Protection', 'Enroll yourself, your immediate and extended dependents, as coverage is even for beyond the usual insurance – allowed age', 3, NULL, NULL, NULL),
('1ba49bc9-13bf-483c-a2c9-9986a1ea251a', '98857472-68f4-4fe1-bb14-88ef07cc1f1e', 'Our Mission', 'To be the first choice by delivering relevant and accessible insurance solutions', 2, NULL, NULL, NULL),
('1e542fa0-cc1c-473a-8c54-f433a656b700', '49d10cb9-c178-49d6-8e03-44e2774181a2', 'Go to the Beneficiaries Page', 'Click on the ‘Beneficiaries’ tab and press the ‘Add Beneficiary’ button on the top right.', 2, NULL, NULL, NULL),
('2094a66a-5fbf-4f5e-9725-fd906706a6c3', 'e3899d24-86fa-4ea3-a452-9fa429973165', 'Swipe your Member Card at the Medlink POS', 'Next, please swipe your Member Card for approval and Letter of Eligibility (LOE) printout. Once approved, In-Patient Availment will proceed.', 3, NULL, NULL, NULL),
('20f70f17-5220-477f-86f6-7c5123c8f516', 'cc1ea159-a847-409d-91b7-8e4be9757896', 'Alarm Center Receives and Processes your Admission Report', 'Upon admission, our Alarm Center will coordinate with the Hospital Admission staff for In-Patient LOA issuance within 24 hours.', 4, NULL, NULL, NULL),
('21fc7318-ff0f-43cb-a4a5-8748f094e3be', '39d395f8-59bd-4d07-ac42-8da71ad06156', 'Check Status of your Claim', 'A notification will be sent to you via our Mobile App. This is to update you of the status of your claim or if additional requirements will be needed for submission.', 4, NULL, NULL, NULL),
('2903204e-7f08-413f-9c18-e2f87ea8e9fb', '5144b953-5580-444b-901e-a060c5ce4010', 'Balance Settlement and Discharge', 'After admission and treatment, you’ll be discharged and settle any charges that go in excess of your benefits if any.', 6, NULL, NULL, NULL),
('2c737705-7d34-4d36-8831-141079cd05b3', 'e3899d24-86fa-4ea3-a452-9fa429973165', 'Alarm Center Receives and Processes your Admission Report', 'Upon admission, our Alarm Center will coordinate with the Hospital Admission staff for In-Patient LOA issuance within 24 hours.', 4, NULL, NULL, NULL),
('2c830cdf-0c85-4781-9655-a46bb42840aa', 'b1c1a18c-ac18-4473-b984-b353475290b8', 'Claims will be assessed by our Claims Department', 'After submission of your fully accomplished reimbursement claim form and the required documents, our Claims Department will take time to verify and assess your claim.', 3, NULL, NULL, NULL),
('3eddf768-ace0-4120-a866-9d3cbe3973c5', '9a4d56c4-00a4-4442-923f-f05eeca159c8', 'Prepare Requirements', 'Refer to the list above for the necessary documents and requirements.', 1, NULL, NULL, NULL),
('456b7f60-ee3d-48a5-8c52-0ccf9f114011', '72bfe3b4-99b0-433b-9e63-8677a5a9ccbf', 'Rewarding your performance', 'No great performance goes unnoticed here. We make sure to take care of our people that go above and beyond through bonuses and reviews.', 4, NULL, NULL, NULL),
('46309fbf-8f8f-4871-a2ef-421f1297d93c', 'cc1ea159-a847-409d-91b7-8e4be9757896', 'Swipe your Member Card at the Medlink POS', 'Next, please swipe your Member Card for approval and Letter of Eligibility (LOE) printout. Once approved, In-Patient Availment will proceed.', 3, NULL, NULL, NULL),
('5d647c89-644a-4d25-a9f2-691c67f1a123', '9a4d56c4-00a4-4442-923f-f05eeca159c8', 'Claims will be assessed by our Claims Department', 'After submission of your fully accomplished reimbursement claim form and the required documents, our Claims Department will take time to verify and assess your claim.', 3, NULL, NULL, NULL),
('6277e739-a52e-46d9-b013-dff077bddf4b', '4f72ce5b-73f3-4206-bd68-c632b59b5ca4', 'Value our people', 'We value our people, encourage diversity and invest in continuous learning and growth by creating a transparent, cohesive and accessible working environment.\r\n\r\nDeveloping our people will ensure\r\nour company’s long term future.', 2, NULL, NULL, NULL),
('638bfe3e-53f1-4398-a75e-24cde1a80d37', '2de50348-31a2-4302-b017-34bd1765f52b', 'Wide Medical Partner Network', 'Easily find an in-network hospital, clinic or doctor no matter where you are in the country.', 1, NULL, NULL, NULL),
('66e8c0dd-2eab-43c9-b729-dba03bd02ea1', '39d395f8-59bd-4d07-ac42-8da71ad06156', 'Prepare Requirements', 'Refer to the list above for the necessary documents and requirements.', 1, NULL, NULL, NULL),
('6a30be2d-b4b2-44b0-93d9-fef0d03baaf5', '72bfe3b4-99b0-433b-9e63-8677a5a9ccbf', 'Helping you develop yourself', 'Gain access to our training and development programs. We help you up skill through seminars, and open the path to scholarship assistance. ', 3, NULL, NULL, NULL),
('6a961f4d-d8fa-4e42-96a2-62d3ca65b879', '2de50348-31a2-4302-b017-34bd1765f52b', '24/7 Call-A-Doc', 'Talk to a doctor anytime you need, anywhere you may be. ', 6, NULL, NULL, NULL),
('6e5ab59a-bd3f-44ec-b31f-52e59e61a1a4', '4f72ce5b-73f3-4206-bd68-c632b59b5ca4', 'Deliver on the promise', 'We tie a long-term contract of mutual trust with our people, clients and stakeholders; all of our work is about improving the lives of our clients.', 1, NULL, NULL, NULL),
('70fe628d-5be9-4f93-9e28-16145c695b7b', '920be0c5-8650-409a-bc21-9a7bb2067a76', 'Consult with medical specialists.', 'Our extensive network of medical providers ensures that you’re always getting the best medical specialists - even online!', 2, NULL, NULL, NULL),
('75b1d398-159f-4382-8b3e-8ef1333cc49c', 'e605c853-d983-4634-8463-7fe114b389fd', 'Call a doctor anytime, anywhere', '', 4, NULL, NULL, NULL),
('765a94f9-c0a5-497b-b86f-81529f957901', '5144b953-5580-444b-901e-a060c5ce4010', 'Admission and Treatment', 'You will be admitted to the hospital based on your medical benefits and coverage.', 5, NULL, NULL, NULL),
('7751fcb1-7b47-4ab5-b2a6-a6b2ea482173', '9a4d56c4-00a4-4442-923f-f05eeca159c8', 'Funds Credited to Enrolled Bank Account', 'If claim is approved, this will be credited to your enrolled Bank Account within 14 working days.\r\n\r\nPlease ensure you have submitted the accomplished Auto-Credit Arrangement (ACA) Form.\r\n\r\nDay 1 is counted on the day Claims has confirmed completion of the Claims requirements.', 5, NULL, NULL, NULL),
('7b800c72-59c2-4d3a-953d-79381e2e0dc6', '73da9e85-435f-4ead-a5f0-bc20ed22728d', 'We Deliver on the Promise', 'We foster a relationship of mutual trust, assurance and with our people. ', 1, NULL, NULL, NULL),
('7c63fccf-4d0b-4377-8304-aea18feb6d01', 'e3899d24-86fa-4ea3-a452-9fa429973165', 'Proceed to InLife Benefits Accredited Hospital’s Admission Unit', 'Please proceed to an accredited hospital’s admission unit and present your InLife Benefits membership card, admitting order, company ID and PHIC Form. \r\n\r\nYou may also bring the In-Patient LOA if this was prepared ahead of time by the Alarm Center (AC) thru our digital platforms.', 2, NULL, NULL, NULL),
('870f32ce-b6fa-4e3b-a339-4426f55fb70a', '2de50348-31a2-4302-b017-34bd1765f52b', 'Comprehensive In-Patient Coverage', 'Includes Room and Board, Doctor Fees, Ambulance Services among others.', 2, NULL, NULL, NULL),
('8735b34f-87d0-4396-a30b-99e1289948a3', '5144b953-5580-444b-901e-a060c5ce4010', 'Swipe your Member Card at the Medlink POS', 'Next, please swipe your Member Card for approval and Letter of Eligibility (LOE) printout. Once approved, In-Patient Availment will proceed.', 3, NULL, NULL, NULL),
('8b40bcef-5db4-4e5d-b0cd-eb8e0b0b9b56', 'e605c853-d983-4634-8463-7fe114b389fd', 'Submit and track your reimbursements', '', 5, NULL, NULL, NULL),
('8bcfaee1-8f1b-4ab0-8c43-1d565c54d03c', '4e57df06-fcd0-44c4-9719-3b49c11f4bbb', 'Balance Settlement and Discharge', 'After admission and treatment, you’ll be discharged and settle any charges that go in excess of your benefits if any.', 6, NULL, NULL, NULL),
('8dd82194-88f3-49f5-94d9-2897bfc583d4', '98857472-68f4-4fe1-bb14-88ef07cc1f1e', 'Our Vision', 'Our purpose is to actively protect\r\nand enhance people’s lives.', 1, NULL, NULL, NULL),
('8f6ca11f-e090-4067-b0f4-9068090464d8', 'f2913c8b-9c2f-43ce-abd6-0b86ff1fe1ec', 'Customizable Plan Options', 'No matter what your needs are, we offer a variety of plans and options that fit your specific requirements.', 3, NULL, NULL, NULL),
('8fef6a5a-a494-4397-bc41-6bd106191ce4', 'b1c1a18c-ac18-4473-b984-b353475290b8', 'Prepare Requirements', 'Refer to the list above for the necessary documents and requirements.', 1, NULL, NULL, NULL),
('937092a7-b283-466b-bd12-4a6fec98ed6d', '4e57df06-fcd0-44c4-9719-3b49c11f4bbb', 'InLife Benefits Hospital Coordinator (HC) or accredited Specialist issues admitting order to the member.', 'The GP HC and/or accredited specialist shall serve as the Attending Physician.', 1, NULL, NULL, NULL),
('94e796f5-46b3-470d-9da7-d47f63a4fdd1', 'eefd2ade-d380-4386-98fc-2cb728b12a5d', 'Cancer Protect', 'Provides 100% of coverage limit for gender-specific cancer diagnosis.', 1, NULL, NULL, NULL),
('9a5b266e-bda0-4dbc-bb0b-2b5eb1aff1fb', '920be0c5-8650-409a-bc21-9a7bb2067a76', 'Schedule future calls.', 'Done with your consultation? You and your doctor can arrange for future calls through our Member Mobile App.', 4, NULL, NULL, NULL),
('9d808e4e-05a2-40d4-9a36-ff63f28b16b3', 'e605c853-d983-4634-8463-7fe114b389fd', 'Use the app as a Virtual Card', '', 2, NULL, NULL, NULL),
('9e4581b0-6753-4514-b41b-cdc9fcd0d4a2', '4e57df06-fcd0-44c4-9719-3b49c11f4bbb', 'Alarm Center Receives and Processes your Admission Report', 'Upon admission, our Alarm Center will coordinate with the Hospital Admission staff for In-Patient LOA issuance within 24 hours.', 4, NULL, NULL, NULL),
('9f4b5161-b891-4c79-a4b4-07202aef3e61', '4e57df06-fcd0-44c4-9719-3b49c11f4bbb', 'Admission and Treatment', 'You will be admitted to the hospital based on your medical benefits and coverage.', 5, NULL, NULL, NULL),
('9f750274-6eea-4897-871c-a5c0d308f70f', '2de50348-31a2-4302-b017-34bd1765f52b', 'Dental Care Access', 'Gives you access to InLife Benefit’s nationwide dental care network.', 5, NULL, NULL, NULL),
('9fcffd53-cd8d-4633-b466-cc1a953a3eb2', '920be0c5-8650-409a-bc21-9a7bb2067a76', 'Talk to a doctor anytime.', 'Whether you’re outside or in the comfort of your home, have the convenience of talking to your doctor where you are.', 1, NULL, NULL, NULL),
('a0daa519-4d18-4217-ad75-5a5313086e90', '2de50348-31a2-4302-b017-34bd1765f52b', 'Accident Benefit', 'Comprehensive Accident Care Support for treatment, disability,\r\nor loss of life.', 4, NULL, NULL, NULL),
('a23235d3-7151-4998-adcf-d0281f8890a1', '9a4d56c4-00a4-4442-923f-f05eeca159c8', 'Fill out Reimbursement Claim Form on our Mobile App', 'Fill out, completely and correctly, the Reimbursement Claim Form. Upload the necessary documents on our Mobile App.\r\n\r\nDownload the App', 2, NULL, NULL, NULL),
('a70895dc-a1df-4266-94e8-633d4731c27d', 'cc1ea159-a847-409d-91b7-8e4be9757896', 'InLife Benefits Hospital Coordinator (HC) or accredited Specialist issues admitting order to the member.', 'The GP HC and/or accredited specialist shall serve as the Attending Physician.', 1, NULL, NULL, NULL),
('a93d6dc0-614e-4adc-b1a2-943a56c51996', 'e3899d24-86fa-4ea3-a452-9fa429973165', 'InLife Benefits Hospital Coordinator (HC) or accredited Specialist issues admitting order to the member.', 'The GP HC and/or accredited specialist shall serve as the Attending Physician.', 1, NULL, NULL, NULL),
('aa50bbdf-114d-4068-a0dc-c40857cb5288', 'b1c1a18c-ac18-4473-b984-b353475290b8', 'Fill out Reimbursement Claim Form on our Mobile App', 'Fill out, completely and correctly, the Reimbursement Claim Form. Upload the necessary documents on our Mobile App.\r\n\r\nDownload the App', 2, NULL, NULL, NULL),
('b6e21d81-b78c-4e88-83c0-d3739168a954', '4e57df06-fcd0-44c4-9719-3b49c11f4bbb', 'Proceed to InLife Benefits Accredited Hospital’s Admission Unit', 'Please proceed to an accredited hospital’s admission unit and present your InLife Benefits membership card, admitting order, company ID and PHIC Form. \r\n\r\nYou may also bring the In-Patient LOA if this was prepared ahead of time by the Alarm Center (AC) thru our digital platforms.', 2, NULL, NULL, NULL),
('b8db1484-100b-4962-91e9-822ea4e24f55', '4e57df06-fcd0-44c4-9719-3b49c11f4bbb', 'Swipe your Member Card at the Medlink POS', 'Next, please swipe your Member Card for approval and Letter of Eligibility (LOE) printout. Once approved, In-Patient Availment will proceed.', 3, NULL, NULL, NULL),
('b998c1b3-8ec6-409d-9ff9-d693d77efcf4', '4105ccc9-9bc2-4f32-a73d-a2e994f0dad8', '1992', 'The company acquired 100-percent ownership of the AOIH and renamed it Insular Investment and Trust Corporation.', 1, NULL, NULL, NULL),
('b9c4147e-18d4-41ea-ac3c-59369bd714e4', '39d395f8-59bd-4d07-ac42-8da71ad06156', 'Claims will be assessed by our Claims Department', 'After submission of your fully accomplished reimbursement claim form and the required documents, our Claims Department will take time to verify and assess your claim.', 3, NULL, NULL, NULL),
('ba13a576-e013-40bd-948b-ccd793698b08', 'e605c853-d983-4634-8463-7fe114b389fd', 'Request a Letter of Authority (LOA)', '', 3, NULL, NULL, NULL),
('bd434c08-90ef-4f65-bfcc-992725234aa5', '39d395f8-59bd-4d07-ac42-8da71ad06156', 'Funds Credited to Enrolled Bank Account', 'If claim is approved, this will be credited to your enrolled Bank Account within 14 working days.\r\n\r\nPlease ensure you have submitted the accomplished Auto-Credit Arrangement (ACA) Form.\r\n\r\nDay 1 is counted on the day Claims has confirmed completion of the Claims requirements.', 5, NULL, NULL, NULL),
('c1b546e1-b63e-492d-a698-7c3047107aeb', '72bfe3b4-99b0-433b-9e63-8677a5a9ccbf', 'Protecting you all-around', 'Feel more protected and focused through the coverage our Group Health, Life and Accident Assurance provides. ', 1, NULL, NULL, NULL),
('c43ff82d-cdce-4f84-ab47-b7fc878e6d08', 'cc1ea159-a847-409d-91b7-8e4be9757896', 'Proceed to InLife Benefits Accredited Hospital’s Admission Unit', 'Please proceed to an accredited hospital’s admission unit and present your InLife Benefits membership card, admitting order, company ID and PHIC Form. \r\n\r\nYou may also bring the In-Patient LOA if this was prepared ahead of time by the Alarm Center (AC) thru our digital platforms.', 2, NULL, NULL, NULL),
('c5c1c816-5027-4536-87a3-83e98af9af55', '4105ccc9-9bc2-4f32-a73d-a2e994f0dad8', '2001', 'Insular Life transferred to its new headquarters, the Insular Life Corporate Centre in Alabang, Muntinlupa City.', 2, NULL, NULL, NULL),
('c9d7e5b7-63da-4a54-ae21-ca60ddf76b8c', 'b1c1a18c-ac18-4473-b984-b353475290b8', 'Check Status of your Claim', 'A notification will be sent to you via our Mobile App. This is to update you of the status of your claim or if additional requirements will be needed for submission.', 4, NULL, NULL, NULL),
('cac3f83b-7ee1-4ffe-8360-e507888e28ba', '920be0c5-8650-409a-bc21-9a7bb2067a76', 'No Letter of Authorization.', 'You won’t need to request for a Letter of Authorization (LOA) for every consultation with your doctor.', 3, NULL, NULL, NULL),
('d4254aa6-6ec2-4019-bf89-d1bc8d33f657', '49d10cb9-c178-49d6-8e03-44e2774181a2', 'Log in to the Member Portal', 'Access the InLife Benefits Member Portal and login using your details.\r\n\r\nFor Mobile App members, login with your app credentials. ', 1, NULL, NULL, NULL),
('dfa521bb-6366-48fd-b90d-77e3f8cd1cd3', '4f72ce5b-73f3-4206-bd68-c632b59b5ca4', 'Be open', 'We are curious, approachable and empowered people with open and diverse mindsets who want to look at things from a different perspective.', 4, NULL, NULL, NULL),
('e0e440cd-26a2-4e4e-ab5b-c2139f9d9289', '4105ccc9-9bc2-4f32-a73d-a2e994f0dad8', '2008', 'Insular Life re-launched the Insular\r\nLife Gold Eagle awards, providing scholarships to BS Education students enrolled in the University of the Philippines Diliman.', 3, NULL, NULL, NULL),
('e0f9e69c-a82e-4c98-97a4-9bf033e00b89', 'cc1ea159-a847-409d-91b7-8e4be9757896', 'Balance Settlement and Discharge', 'After admission and treatment, you’ll be discharged and settle any charges that go in excess of your benefits if any.', 6, NULL, NULL, NULL),
('e2cdc92d-6ceb-4fcf-adc8-6f1066762c5d', '73da9e85-435f-4ead-a5f0-bc20ed22728d', 'We’re Openly Empowered', 'We encourage diverse ideas by creating a transparent, cohesive and accessible working environment.', 3, NULL, NULL, NULL),
('e4abc176-1013-4cba-987b-808a50dc0264', '5144b953-5580-444b-901e-a060c5ce4010', 'Proceed to InLife Benefits Accredited Hospital’s Admission Unit', 'Please proceed to an accredited hospital’s admission unit and present your InLife Benefits membership card, admitting order, company ID and PHIC Form. \r\n\r\nYou may also bring the In-Patient LOA if this was prepared ahead of time by the Alarm Center (AC) thru our digital platforms.', 2, NULL, NULL, NULL),
('e7135aac-88b0-440a-ada1-778efdb07b45', '5144b953-5580-444b-901e-a060c5ce4010', 'InLife Benefits Hospital Coordinator (HC) or accredited Specialist issues admitting order to the member.', 'The GP HC and/or accredited specialist shall serve as the Attending Physician.', 1, NULL, NULL, NULL),
('ea7e8c38-0370-4014-aaf5-a7ee70a9484d', 'cc1ea159-a847-409d-91b7-8e4be9757896', 'Admission and Treatment', 'You will be admitted to the hospital based on your medical benefits and coverage.', 5, NULL, NULL, NULL),
('ed132123-3f28-42c9-a9db-e15b551d8e7f', '73da9e85-435f-4ead-a5f0-bc20ed22728d', 'We Care for Our People', 'We investing in our people’s continuous learning and growth, and benefits that help us do more. ', 2, NULL, NULL, NULL),
('f2913c8b-9c2f-43ce-abd6-0b86ff1fe1ec', 'f2913c8b-9c2f-43ce-abd6-0b86ff1fe1ec', 'Comprehensive Plan Coverage', 'Be ready for the future with plans that offer a wide range of coverage.', 1, NULL, NULL, NULL),
('f4a0f94a-5ac9-43f7-ae4c-ce8131ba6e2d', 'b1c1a18c-ac18-4473-b984-b353475290b8', 'Funds Credited to Enrolled Bank Account', 'If claim is approved, this will be credited to your enrolled Bank Account within 14 working days.\r\n\r\nPlease ensure you have submitted the accomplished Auto-Credit Arrangement (ACA) Form.\r\n\r\nDay 1 is counted on the day Claims has confirmed completion of the Claims requirements.', 5, NULL, NULL, NULL),
('f71bd820-296c-4101-9249-6a795420a81f', '5144b953-5580-444b-901e-a060c5ce4010', 'Alarm Center Receives and Processes your Admission Report', 'Upon admission, our Alarm Center will coordinate with the Hospital Admission staff for In-Patient LOA issuance within 24 hours.', 4, NULL, NULL, NULL),
('f845224d-36b1-4b4b-9b86-5b62aef9a618', 'e3899d24-86fa-4ea3-a452-9fa429973165', 'Admission and Treatment', 'You will be admitted to the hospital based on your medical benefits and coverage.', 5, NULL, NULL, NULL),
('f859e20f-c5d6-4ebe-9d4a-0b0c2dc35008', 'e3899d24-86fa-4ea3-a452-9fa429973165', 'Balance Settlement and Discharge', 'After admission and treatment, you’ll be discharged and settle any charges that go in excess of your benefits if any.', 6, NULL, NULL, NULL),
('fb09e046-0fa7-4c84-aa7e-de17fcd59dfe', 'f2913c8b-9c2f-43ce-abd6-0b86ff1fe1ec', 'Easy Online Policy Management', 'We make policy management easy  and convenient through our easy to use digital platforms.', 2, NULL, NULL, NULL),
('fc52bd5c-3be8-4212-adc0-0b5189133c7b', 'e605c853-d983-4634-8463-7fe114b389fd', 'Manage your policy and coverage', '', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_emails`
--

CREATE TABLE `section_emails` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sequence` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_emails`
--

INSERT INTO `section_emails` (`id`, `parent_id`, `title`, `email`, `sequence`, `created_at`, `updated_at`, `deleted_at`) VALUES
('10284eda-9a07-4ae8-92c8-c0ffedb5e956', 'df7b710a-d93d-4add-aa10-ac07aba8fee0', 'In-Patient LOA', 'inpatientloa@inlifebenefits.com.ph', 1, NULL, NULL, NULL),
('68ac6fa0-11ff-4d90-a0d0-dd52056db975', 'df7b710a-d93d-4add-aa10-ac07aba8fee0', 'Out Patient LOA', 'outpatientloa@inlifebenefits.com.ph', 2, NULL, NULL, NULL),
('797b1e12-b450-44f1-b0dd-defe0ec3f477', 'df7b710a-d93d-4add-aa10-ac07aba8fee0', 'Sales Inquiries', 'salesinquiry@inlifebenefits.com.ph', 4, NULL, NULL, NULL),
('e5f9481b-2a2b-4dd9-a34f-92d7cc4b60b2', 'df7b710a-d93d-4add-aa10-ac07aba8fee0', 'Technical Support', 'customercare@inlifebenefits.com.ph', 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_faqs`
--

CREATE TABLE `section_faqs` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sequence` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_faqs`
--

INSERT INTO `section_faqs` (`id`, `parent_id`, `title`, `answer`, `sequence`, `created_at`, `updated_at`, `deleted_at`) VALUES
('', '', '', '', 2, NULL, NULL, NULL),
('05e7bf6f-553a-406e-9342-f59002b59f53', 'fd58d96a-99ce-4183-bc7e-50cfdd5dbdfb', 'Why does GLAPI collect Data?', 'insert content', 4, NULL, NULL, NULL),
('0636caef-a147-42ad-80fa-ec1e54bf59a8', '90f2e780-4a07-416c-8380-cfbe9579987b', 'Am I able to enroll my beneficiaries on my own?', 'insert content here', 2, NULL, NULL, NULL),
('06d852b1-200e-4685-a409-6898bfd1c850', '025a29dc-630b-4ee4-b8c8-3f503373e9e6', 'Can I use this for dental treatment?', 'insert content', 3, NULL, NULL, NULL),
('07f5c6b2-5308-421c-ac78-0867cc2a820e', 'c5ebb905-9458-4237-a83c-8f72a7765470', 'sample FAQ for Claims Filing 1', 'sample FAQ for Claims Filing 1', 1, NULL, NULL, NULL),
('0c772e9c-882f-42a7-94a4-4d273232c328', '944ee017-6908-4629-8629-74f2e219327b', 'Can I use this for dental treatment?', 'insert content', 3, NULL, NULL, NULL),
('0c9ec1df-0e89-4465-9b0b-7faba8b0534e', 'c4fdcc71-32e6-4f0f-9b6c-41ff5e1c9b57', 'Where can I check my benefits?', 'InLife Benefits offers Group Term Life, Group Personal Accident, Group Credit Life and Group Health Insurance. These products are designed for SME and corporations to serve as employee or member benefits.', 4, NULL, NULL, NULL),
('10bfa9d9-e5d6-435b-833c-317df4bc6aa1', '0deeec98-d5d1-40f3-aac8-b3cfdb30babb', 'How can I avail of the service?', 'insert content', 2, NULL, NULL, NULL),
('127614ce-4d9d-49b2-bd8d-f0ee3a5bcf78', '038cd74e-1326-4271-806b-6f3608f8a148', 'Where can I check my beneficiaries and/or dependents?', 'insert answer here', 3, NULL, NULL, NULL),
('168f082b-75dd-4424-b96e-fe18c78bb49c', 'aaa7e00d-ed8d-486b-bbe8-e5d7078039c4', 'What is an alarm center?', 'insert content here', 2, NULL, NULL, NULL),
('179f88de-cc02-4cfa-91e2-44d01962146e', '944ee017-6908-4629-8629-74f2e219327b', 'Does the policy cover the cost of MRI, CT Scan, and UTZ?', 'insert content', 5, NULL, NULL, NULL),
('180a56ba-2a5f-499a-a253-f262e4e18788', '025a29dc-630b-4ee4-b8c8-3f503373e9e6', 'Is treatment for animal bite covered under this policy?', 'insert content', 4, NULL, NULL, NULL),
('22da7ba4-405b-4cd6-82ba-55dece8ee201', '74e0a80c-af1f-4b12-ae1a-b55e896e3494', 'What benefits are standard for employees?', 'insert content', 2, NULL, NULL, NULL),
('255d1ec3-9847-4ebc-ba16-c7b58316fb67', '3f0ef96c-bf19-4739-921b-5fd50b66767c', 'How can I request for a Letter of Authorization (LOA)?', 'You may request for an LOA thru any of the following channels:\r\nVia our mobile app which is available for download via Apple Store or Google PlayStore\r\nSend us an email. Please use the subject LOA Request: <Name of Member> x <Company Name> For Consultations and/or Diagnostic Procedures: outpatientloa@inlifebenefits.com.ph For Hospital Admission: inpatientloa@inlifebenefits.com.ph\r\nWe highly encourage members to request an LOA before going to a medical facility. This is to avoid waiting time in the hospital or clinic.', 1, NULL, NULL, NULL),
('27df3cdc-834f-4818-942f-c931aa4d0a14', '025a29dc-630b-4ee4-b8c8-3f503373e9e6', 'Does the policy cover the cost of MRI, CT Scan, and UTZ?', 'insert content', 5, NULL, NULL, NULL),
('2c32472b-3cb9-42c6-bbc4-e67f291ac492', 'c5ebb905-9458-4237-a83c-8f72a7765470', 'sample FAQ for Claims Filing 2', 'sample FAQ for Claims Filing 2', 2, NULL, NULL, NULL),
('2ca118cf-5f9b-428d-acf3-efe46953dfec', '944ee017-6908-4629-8629-74f2e219327b', 'Is treatment for animal bite covered under this policy?', 'insert content', 4, NULL, NULL, NULL),
('325239a6-ccc7-43aa-ba94-7a8189cc558d', 'fd58d96a-99ce-4183-bc7e-50cfdd5dbdfb', 'How long does GLAPI retain web-traffic-Data?', 'insert content', 7, NULL, NULL, NULL),
('325757ef-c4ca-445f-a872-4207fdf8ed5f', '74e0a80c-af1f-4b12-ae1a-b55e896e3494', 'How do I apply for a job at InLife Benefits?', 'You may submit an application through the forms found on each of our job listings posted above. Alternatively you may also email your application directly to us at careers@inlifebenefits.com.ph', 1, NULL, NULL, NULL),
('3408429d-9acd-42fe-8b0b-7ee4b132f469', '482c4f34-127c-458b-bd17-47dc04fc6d3e', 'What is the purpose of requesting for bank\r\naccount details?', '[insert content here]', 2, NULL, NULL, NULL),
('3d3efee9-449c-4fde-bc4f-6203d83feee7', 'e1132375-bad0-4b42-b9bb-88106523e1c9', 'Can I use this for dental treatment?', 'content here', 3, NULL, NULL, NULL),
('40bed2e0-2ba0-40fa-8e24-0c841ac8000c', '90f2e780-4a07-416c-8380-cfbe9579987b', 'What digital portals can I use if I’m a policy holder?', 'insert content here', 1, NULL, NULL, NULL),
('43c5bd3d-a1d6-40ea-b86d-254dea67f8cf', '98d4cb0f-6fdd-4b09-a07c-8e99de2c4938', 'insert FAQ title', 'insert content', 1, NULL, NULL, NULL),
('49db09c2-6124-4aa9-8d52-31467993c794', '2538f728-bf64-45ca-b98e-1a18c0a5b611', 'Can I sign up for the Member Mobile App myself?', 'insert answer here', 2, NULL, NULL, NULL),
('4ce36838-51d7-464a-86a8-f6b5218b16cd', 'fd58d96a-99ce-4183-bc7e-50cfdd5dbdfb', 'What Data does GLAPI collect?', 'When you browse our website (www.generali.com.ph), read its content, or download information published on our site, GLAPI utilizes Google Analytics 4, a third-party service, to analyze non-identifiable web traffic data. This service includes using cookies but incorporates privacy controls such as cookieless-measurement. Only non-identifiable web traffic data -information that never identifies who you are- is analyzed, including:', 1, NULL, NULL, NULL),
('53fdc09b-8243-4646-869a-428a28f39f46', 'c4fdcc71-32e6-4f0f-9b6c-41ff5e1c9b57', 'How much will be the Life Insurance benefit amount?', 'InLife Benefits offers Group Term Life, Group Personal Accident, Group Credit Life and Group Health Insurance. These products are designed for SME and corporations to serve as employee or member benefits.', 3, NULL, NULL, NULL),
('551a84f8-0b54-4bb9-81ed-8d17ba78382b', '944ee017-6908-4629-8629-74f2e219327b', 'Does the policy cover Pre-Existing Conditions?', 'Yes, Pre-Existing Conditions will be covered up to the Annual Benefit Limit (ABL) after 12 months of continuous coverage.', 1, NULL, NULL, NULL),
('57b0518a-b26e-4506-a7aa-a3bcc4e3ff5f', '97386547-cb0b-4520-ad47-44e58de41780', 'Sample FAQ for HR Portal', 'Sample FAQ for HR Portal', 1, NULL, NULL, NULL),
('587d5eb9-1329-4637-9d7e-5782f2d7419b', '0deeec98-d5d1-40f3-aac8-b3cfdb30babb', 'Can I use this service for second opinion or interpretation of lab results?', 'insert content', 4, NULL, NULL, NULL),
('589f291c-2c57-498c-9a3d-86dfe3e6bd81', 'a37cbbf1-49b2-4a43-a57c-0dd766246c3f', 'Can I apply to your email directly?', 'insert content', 2, NULL, NULL, NULL),
('5f117185-3e9c-4b6e-b0e7-9615429aa228', 'fd58d96a-99ce-4183-bc7e-50cfdd5dbdfb', 'With whom does GLAPI share or transfer Data?', 'insert content', 5, NULL, NULL, NULL),
('5f2a7e76-f9ba-4308-973a-2b31fa2eed89', '74e0a80c-af1f-4b12-ae1a-b55e896e3494', 'How do I apply as an agent?', 'insert content', 4, NULL, NULL, NULL),
('621ecd16-6b59-4da8-8398-d58a94059302', 'e1132375-bad0-4b42-b9bb-88106523e1c9', 'Does the policy cover the cost of MRI, CT Scan, and UTZ?', 'content here', 5, NULL, NULL, NULL),
('647de230-22e7-4a94-965e-1c66ed017e87', 'd144f820-6e11-4661-ac63-ec37b983353f', 'sample FAQ for products', 'sample FAQ for products', 1, NULL, NULL, NULL),
('65e10a75-a5a5-4979-9c1e-ce7e69d975a1', '3f0ef96c-bf19-4739-921b-5fd50b66767c', 'Who is responsible for the filing of my PhilHealth with the hospital? What happens when I fail to file my PhilHealth?', '[insert content here]', 4, NULL, NULL, NULL),
('7181f85f-80d2-4979-aa48-2c491ffdf897', '90f2e780-4a07-416c-8380-cfbe9579987b', 'What kind of services does InLife Benefits offer?', '<p>Our customers and policy holders have access to a variety of our services that makes managing their benefits easy and convenient.</p><ol><li>Via our mobile app which is available for download via Apple Store or Google PlayStore</li><li>Send us an email.Please use the subject LOA Request:<br>&lt;Name of Member&gt; × &lt;Company Name&gt;<br>For Consultations and/or Diagnostic Procedures: <a href=\"mailto:outpatientloa@inlifebenefits.com.ph\">outpatientloa@inlifebenefits.com.ph</a><br>For Hospital Admission: <a href=\"mailto:inpatientloa@inlifebenefits.com.ph\">inpatientloa@inlifebenefits.com.ph</a></li></ol><p>We highly encourage members to request an LOA before going to a medical facility. This is to avoid waiting time in the hospital or clinic.</p>', 0, NULL, NULL, NULL),
('722701b7-cb2a-4a50-ac96-b5bc7b18d0bb', 'e1132375-bad0-4b42-b9bb-88106523e1c9', 'Is treatment for animal bite covered under this policy?', 'content here', 4, NULL, NULL, NULL),
('725480c0-1820-42c8-be71-2815d6391938', 'e1132375-bad0-4b42-b9bb-88106523e1c9', 'Is Physical Therapy covered under this policy?', 'content here', 2, NULL, NULL, NULL),
('7a940fa8-3414-46eb-a568-e5bf14324b98', '025a29dc-630b-4ee4-b8c8-3f503373e9e6', 'Is Physical Therapy covered under this policy?', 'insert content', 2, NULL, NULL, NULL),
('82df2b80-9f2a-429b-8555-53160d498ed5', '90f2e780-4a07-416c-8380-cfbe9579987b', 'What if I need help with any of these services?', 'insert content here', 4, NULL, NULL, NULL),
('856fda1b-eef0-4610-809d-d68dd7923899', 'aaa7e00d-ed8d-486b-bbe8-e5d7078039c4', 'How can I request for a Letter of Authorization (LOA)?', '<p>Our customers and policy holders have access to a variety of our services that makes managing their benefits easy and convenient.</p><ol><li>Via our mobile app which is available for download via Apple Store or Google PlayStore</li><li>Send us an email.Please use the subject LOA Request:<br>&lt;Name of Member&gt; × &lt;Company Name&gt;<br>For Consultations and/or Diagnostic Procedures: <a href=\"mailto:outpatientloa@inlifebenefits.com.ph\">outpatientloa@inlifebenefits.com.ph</a><br>For Hospital Admission: <a href=\"mailto:inpatientloa@inlifebenefits.com.ph\">inpatientloa@inlifebenefits.com.ph</a></li></ol><p>We highly encourage members to request an LOA before going to a medical facility. This is to avoid waiting time in the hospital or clinic.</p>', 1, NULL, NULL, NULL),
('858b6036-3e41-4cbf-96b5-ce882ce22471', '90f2e780-4a07-416c-8380-cfbe9579987b', 'What if I need help with any of these services?', 'insert content here', 3, NULL, NULL, NULL),
('8baf839b-21e9-4189-bd21-e1d97d4574d3', '0deeec98-d5d1-40f3-aac8-b3cfdb30babb', 'Can I see the doctor or have a face-to-face consultation?', 'insert content', 5, NULL, NULL, NULL),
('910b8689-d560-4aa5-a751-4fc4c97cd97d', '3f0ef96c-bf19-4739-921b-5fd50b66767c', 'Do I get 100% reimbursement for charges during emergency confinement in a non-accredited hospital?', '[insert content here]', 3, NULL, NULL, NULL),
('959314dd-b0dd-420e-89de-2191daf00a60', '3f0ef96c-bf19-4739-921b-5fd50b66767c', 'What is an Alarm Center?', '[insert content here]', 2, NULL, NULL, NULL),
('985b9c99-ac10-4ae9-bf84-63dce143e20c', '63e79f66-ae1b-4650-b769-054f137716fd', 'Can I apply to your email directly?', 'insert content', 2, NULL, NULL, NULL),
('9b68ea6e-a793-4f3f-89c9-abaaa99135cb', '482c4f34-127c-458b-bd17-47dc04fc6d3e', 'Is a hard copy of a claims document needed to be submitted still?', 'For medical reimbursements, soft copies of claims documents – such as Official Receipt, Breakdown of Procedures – are already accepted. However, please keep the original documents. This might be asked by our Claims Team if further evaluation is deem needed.\r\n\r\nFor life claims, soft copies of necessary documents — such as Death Certificate, Certificate of Employment of the Insured Member – can initially be submitted for faster evaluation. But, original copies must be sent prior to the release of claims payment.', 1, NULL, NULL, NULL),
('a49683c6-d126-4f31-bb91-d00d9357509d', '4c01f444-796d-49be-ac8d-e1de8cad931c', 'Can I apply to your email directly?', 'insert content', 2, NULL, NULL, NULL),
('a512e548-f13e-4692-a170-efd9c7a7c0ad', 'fd58d96a-99ce-4183-bc7e-50cfdd5dbdfb', 'When does GLAPI collect Data?', 'insert content', 3, NULL, NULL, NULL),
('a6445bca-e8d4-473e-9c7c-9ade2f22592d', '038cd74e-1326-4271-806b-6f3608f8a148', 'When will the beneficiary/ies receive the death benefit amount?', 'insert answer here', 2, NULL, NULL, NULL),
('abb398f1-9f5c-4764-bd50-72ec667114cb', '1081a2e3-e346-4dfd-aab0-f5eeed01c34c', 'insert FAQ question', 'insert title', 1, NULL, NULL, NULL),
('ad80fb9f-26bb-47b5-8e87-0636ef40fea6', '74e0a80c-af1f-4b12-ae1a-b55e896e3494', 'I don’t see the job opening I’m interested in. Can I still submit an application?', 'insert content', 3, NULL, NULL, NULL),
('afc0aa50-fcba-4ee7-baf8-54b6f02a1c97', '2538f728-bf64-45ca-b98e-1a18c0a5b611', 'What can I do on the Member Mobile App?', 'insert answer here', 3, NULL, NULL, NULL),
('b068fe13-9326-444e-989b-06cae786003f', '2538f728-bf64-45ca-b98e-1a18c0a5b611', 'Can I use my Member Portal credentials to log in?', 'Yes, the login credentials for both the Member Mobile App and the Member Portal are shared.', 1, NULL, NULL, NULL),
('b6101114-c652-43dc-bb54-4269a1f40832', 'a37cbbf1-49b2-4a43-a57c-0dd766246c3f', 'How do I get my Hospital / Clinic accredited?', 'We have opened the online accreditation application via our website for the convenience of interest, potential network partners. Fill up the form above to get the accreditation process started.', 1, NULL, NULL, NULL),
('b852ef20-a789-4454-a309-8f49bcdd8335', '0deeec98-d5d1-40f3-aac8-b3cfdb30babb', 'What medical specialists does your 24/7 Call-A-Doc service have on board?', 'Most medical specialties are available at our partner’s Telemedicine Center, some of which are OB-Gyne, Pediatrics, Family Medicine, Endocrinology, General Practitioner and many more.', 1, NULL, NULL, NULL),
('b889b285-47ba-49d9-a464-abf1072505f3', '038cd74e-1326-4271-806b-6f3608f8a148', 'Who can I assign as my beneficiaries?', 'An insured member has the right to assign anybody allowed by law as his beneficiary/ies.', 1, NULL, NULL, NULL),
('b91bd6ee-e93d-468c-b99d-1abda56a14db', '038cd74e-1326-4271-806b-6f3608f8a148', 'How do I update my beneficiary information?', 'insert answer here', 4, NULL, NULL, NULL),
('bbf8b74a-5458-4c8d-a47d-937dd963e0b0', '63e79f66-ae1b-4650-b769-054f137716fd', 'How long does it take to get accredited?', 'insert content\r\n\r\n', 3, NULL, NULL, NULL),
('bf700645-d385-4ce8-a605-ffe37f6ecebb', 'c4fdcc71-32e6-4f0f-9b6c-41ff5e1c9b57', 'Where can I check my beneficiaries and/or dependents?', 'InLife Benefits offers Group Term Life, Group Personal Accident, Group Credit Life and Group Health Insurance. These products are designed for SME and corporations to serve as employee or member benefits.', 5, NULL, NULL, NULL),
('bfbe5289-a4e8-4a8e-83da-827e1ce9ee70', 'aaa7e00d-ed8d-486b-bbe8-e5d7078039c4', 'Who is responsible for the filling of my PhilHealth with the Hospital? What happends when I fail to file my PhilHealth', 'insert content here', 4, NULL, NULL, NULL),
('c708c439-7319-46ad-982c-3fa131b43d5c', 'fca7c869-5803-475e-bb33-37a8af5785e5', 'sample FAQ for Member Portal', 'sample FAQ for Member Portal', 1, NULL, NULL, NULL),
('c827a117-81a6-4fb4-a0d1-949ff8de02d7', '85bb9fbf-e1e5-4f65-b6db-2b9957fdc6b2', 'sample FAQ for Member Mobile App', 'sample FAQ for Member Mobile App', 1, NULL, NULL, NULL),
('ca49b8f6-6fe6-4833-a4d5-a9d9d59a6200', 'd4fc90f5-d432-4202-a2fa-57076cec9f5a', 'insert FAQ title', 'insert content', 1, NULL, NULL, NULL),
('cd7a3edc-b209-48ec-8486-4e38e69c00b4', '0deeec98-d5d1-40f3-aac8-b3cfdb30babb', 'What can I expect when I call the hotline numbers?', 'insert content', 3, NULL, NULL, NULL),
('d1aeb8b3-1b21-4215-a24b-d3f2fb5ebb8f', 'fd58d96a-99ce-4183-bc7e-50cfdd5dbdfb', 'Where does GLAPI store Data?', 'insert content', 6, NULL, NULL, NULL),
('d501dedd-83ed-4c15-b278-27266878a91c', 'e1132375-bad0-4b42-b9bb-88106523e1c9', 'Does the policy cover Pre-Existing Conditions?', 'Yes, Pre-Existing Conditions will be covered up to the Annual Benefit Limit (ABL) after 12 months of continuous coverage.', 1, NULL, NULL, NULL),
('d8e1a22e-89ee-4851-bbbd-073b5ea20b13', 'a37cbbf1-49b2-4a43-a57c-0dd766246c3f', 'How long does it take to get accredited?', 'insert content', 3, NULL, NULL, NULL),
('daecffa0-8319-432d-8345-f392c735c1ba', '4c01f444-796d-49be-ac8d-e1de8cad931c', 'How do I get my Hospital / Clinic accredited?', 'We have opened the online accreditation application via our website for the convenience of interest, potential network partners. Fill up the form above to get the accreditation process started.', 1, NULL, NULL, NULL),
('dc293f65-f9c1-43f5-80ae-2cf5a2e741ec', '63e79f66-ae1b-4650-b769-054f137716fd', 'How do I get my Hospital / Clinic accredited?', 'We have opened the online accreditation application via our website for the convenience of interest, potential network partners. Fill up the form above to get the accreditation process started.', 1, NULL, NULL, NULL),
('defa8592-6f3d-4d10-86a9-8a300c572683', '700eebfb-603b-4222-84da-bb43775f1713', 'sample FAQ for Beneficiary Enrollment', 'sample FAQ for Beneficiary Enrollment', 1, NULL, NULL, NULL),
('e464ccd5-0fdd-4469-b55d-af2a6c6f94ca', '025a29dc-630b-4ee4-b8c8-3f503373e9e6', 'Does the policy cover Pre-Existing Conditions?', 'Yes, Pre-Existing Conditions will be covered up to the Annual Benefit Limit (ABL) after 12 months of continuous coverage.', 1, NULL, NULL, NULL),
('eb749cce-d651-4279-9ef9-1449e6404b72', 'c4fdcc71-32e6-4f0f-9b6c-41ff5e1c9b57', 'Who are qualified for Group Life Insurance?', 'InLife Benefits offers Group Term Life, Group Personal Accident, Group Credit Life and Group Health Insurance. These products are designed for SME and corporations to serve as employee or member benefits.', 2, NULL, NULL, NULL),
('f42d35de-2d9d-4654-ac1d-f17f5ae0e57f', '4c01f444-796d-49be-ac8d-e1de8cad931c', 'How long does it take to get accredited?', 'insert content', 3, NULL, NULL, NULL),
('f49ef899-2a19-4627-be98-a2d0609409bf', '944ee017-6908-4629-8629-74f2e219327b', 'Is Physical Therapy covered under this policy?', 'insert content', 2, NULL, NULL, NULL),
('f78aa734-91fb-4dac-aabc-9e939f1d0806', '5e989d74-f913-4427-9bab-2edbbdd1cdf7', 'Sample FAQ for Provider Portal', 'Sample FAQ for Provider Portal', 1, NULL, NULL, NULL),
('f791d735-e308-48c9-b11e-85ca41e23263', 'aaa7e00d-ed8d-486b-bbe8-e5d7078039c4', 'Do I get 100% reimbursement for charges during emergency confinement in a non-accredited hospital', 'insert content here', 3, NULL, NULL, NULL),
('f9167926-d61c-4182-aa26-580b3b38f86b', 'fd58d96a-99ce-4183-bc7e-50cfdd5dbdfb', 'What if I contact GLAPI by sending an email or participate in an initiative?', 'insert content', 2, NULL, NULL, NULL),
('ff0d0cf4-546c-4e21-8f4b-79ede65a2dcd', 'c4fdcc71-32e6-4f0f-9b6c-41ff5e1c9b57', 'What kind of insurance do you offer?', 'InLife Benefits offers Group Term Life, Group Personal Accident, Group Credit Life and Group Health Insurance. These products are designed for SME and corporations to serve as employee or member benefits.', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_hotlines`
--

CREATE TABLE `section_hotlines` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('mobile','landline') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sequence` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_hotlines`
--

INSERT INTO `section_hotlines` (`id`, `parent_id`, `title`, `type`, `primary_number`, `secondary_number`, `sequence`, `created_at`, `updated_at`, `deleted_at`) VALUES
('1567c34a-2ad0-4d10-affc-7c110b870a40', 'c9fe6a6b-2e13-4e86-8b9e-8e3eff423afb', 'Mobile (Globe)', 'mobile', '+639613334311', '+639176501510', 3, NULL, NULL, NULL),
('38c44aa6-4ff9-461b-8e70-003ad7ea2efc', '56e8b57d-c4e5-4e9c-b1d2-2635f38c55e1', 'Customer Care Hotline', 'landline', '+63 (02) 8580 6600', NULL, 1, NULL, NULL, NULL),
('6053d021-1516-4070-a62a-13e27c602edb', '56e8b57d-c4e5-4e9c-b1d2-2635f38c55e1', 'Telemedicine Hotline', 'landline', '+63 (02) 8580 6600', NULL, 2, NULL, NULL, NULL),
('9c690de4-0310-4527-8fd5-17bf56bbe58a', 'c9fe6a6b-2e13-4e86-8b9e-8e3eff423afb', 'Mobile (Smart)', 'mobile', '+639613334311', '+639688987488', 2, NULL, NULL, NULL),
('cff6ea0b-7a16-445f-b155-769c942b9694', '56e8b57d-c4e5-4e9c-b1d2-2635f38c55e1', 'Toll Free Hotline', 'landline', '+63 (1800) 1888 5637', NULL, 3, NULL, NULL, NULL),
('fb8dfad1-16e4-43ee-bf42-91a5d9407882', 'c9fe6a6b-2e13-4e86-8b9e-8e3eff423afb', 'Landline', 'landline', '+63283730002', NULL, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_socials`
--

CREATE TABLE `section_socials` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sequence` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_socials`
--

INSERT INTO `section_socials` (`id`, `parent_id`, `title`, `link`, `sequence`, `created_at`, `updated_at`, `deleted_at`) VALUES
('271b3fac-3817-46d9-9afa-467bb0c7290b', '46da49e1-8c90-428d-a77f-4c3adacf0361', 'Youtube', 'https://google.com', 4, NULL, NULL, NULL),
('79105f57-2d7c-4a7c-9fb7-b3ff56ad8d86', '46da49e1-8c90-428d-a77f-4c3adacf0361', 'Linkedin', 'https://google.com', 3, NULL, NULL, NULL),
('f5585296-7414-449a-b0a0-f3244ef268f3', '46da49e1-8c90-428d-a77f-4c3adacf0361', 'Facebook', 'https://google.com', 1, NULL, NULL, NULL),
('fcd9933a-94bc-46a2-8f29-320b3689b966', '46da49e1-8c90-428d-a77f-4c3adacf0361', 'Instagram', 'https://google.com', 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_tabs`
--

CREATE TABLE `section_tabs` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_1` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content_2` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sequence` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `parent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'root'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_tabs`
--

INSERT INTO `section_tabs` (`id`, `parent_id`, `title`, `content_1`, `content_2`, `sequence`, `created_at`, `updated_at`, `deleted_at`, `parent`) VALUES
('16fddd9c-b053-4fa3-b4b4-ac5484e017d2', '1f458320-4ebb-4200-aecc-f7547e798948', 'In-Patient Claims', 'Basic Requirements ', 'Additional Requirements', 1, NULL, NULL, NULL, 'root'),
('47b0f050-434a-4a2a-984f-eb88b7627c22', '563152e1-6744-4ad8-a525-83061fb2076c', 'Cultivating a Synergic Relationship with Shareholders', NULL, NULL, 4, NULL, NULL, NULL, 'root'),
('4fd36191-9a40-41ae-9c3d-2af094cb41e0', '47b48c8d-ce83-4ad9-978f-15f1704f1513', 'Claims Forms - Attending Physician’s Statement', NULL, NULL, 3, NULL, NULL, NULL, 'root'),
('53d786f1-e7ec-4bf4-b9aa-fd36c40aa622', '8e9c9978-ce11-4e33-8ad6-fadbaa9b8995', 'In-Patient Claims', 'Basic Requirements ', 'Additional Requirements', 1, NULL, NULL, NULL, 'root'),
('5e989d74-f913-4427-9bab-2edbbdd1cdf7', '544f0ae5-920b-43b1-912f-5955795e844c', 'Provider Portal', NULL, NULL, 7, NULL, NULL, NULL, '90f2e780-4a07-416c-8380-cfbe9579987b'),
('6a650e65-b4d6-45da-98b5-087edfab3189', '563152e1-6744-4ad8-a525-83061fb2076c', 'Duties to Stakeholders', NULL, NULL, 5, NULL, NULL, NULL, 'root'),
('6b0e071c-6fe9-4dfd-a8eb-795fa8bcc629', '1f458320-4ebb-4200-aecc-f7547e798948', 'Out Patient Claims', 'Basic Requirements', 'Additional Requirements', 2, NULL, NULL, NULL, 'root'),
('6e3c7389-806e-43ad-84ce-9ab70b9b9c6f', '563152e1-6744-4ad8-a525-83061fb2076c', 'The Board’s Governance Responsibilities', NULL, NULL, 1, NULL, NULL, NULL, 'root'),
('700eebfb-603b-4222-84da-bb43775f1713', '544f0ae5-920b-43b1-912f-5955795e844c', 'Beneficiary Enrollment', NULL, NULL, 3, NULL, NULL, NULL, '90f2e780-4a07-416c-8380-cfbe9579987b'),
('733707fa-48c2-4602-998a-091d6bdb7964', '47b48c8d-ce83-4ad9-978f-15f1704f1513', 'Claims Forms', NULL, NULL, 2, NULL, NULL, NULL, 'root'),
('85bb9fbf-e1e5-4f65-b6db-2b9957fdc6b2', '544f0ae5-920b-43b1-912f-5955795e844c', 'Member Mobile App', NULL, NULL, 4, NULL, NULL, NULL, '90f2e780-4a07-416c-8380-cfbe9579987b'),
('90f2e780-4a07-416c-8380-cfbe9579987b', '544f0ae5-920b-43b1-912f-5955795e844c', 'Services', NULL, NULL, 1, NULL, NULL, NULL, 'root'),
('92512dee-dd0b-4afb-8a6f-e9796ea95e00', '8e9c9978-ce11-4e33-8ad6-fadbaa9b8995', 'Out Patient Claims', 'Basic Requirements', 'Additional Requirements', 2, NULL, NULL, NULL, 'root'),
('97386547-cb0b-4520-ad47-44e58de41780', '544f0ae5-920b-43b1-912f-5955795e844c', 'HR Portal', NULL, NULL, 6, NULL, NULL, NULL, '90f2e780-4a07-416c-8380-cfbe9579987b'),
('9b018af8-3ebd-4d68-af89-6f5144e861f9', '515a7602-82ed-47dc-8236-4e0e9ab3e57f', 'In-Patient Claims', 'Basic Requirements ', 'Additional Requirements', 1, NULL, NULL, NULL, 'root'),
('a44b7381-535d-4158-8847-490e1dbda5fc', '515a7602-82ed-47dc-8236-4e0e9ab3e57f', 'Out Patient Claims', 'Basic Requirements', 'Additional Requirements', 2, NULL, NULL, NULL, 'root'),
('aaa7e00d-ed8d-486b-bbe8-e5d7078039c4', '544f0ae5-920b-43b1-912f-5955795e844c', 'Availment Procedures', NULL, NULL, 1, NULL, NULL, NULL, '90f2e780-4a07-416c-8380-cfbe9579987b'),
('b065662c-98cc-453b-a504-a0a819e680b9', '563152e1-6744-4ad8-a525-83061fb2076c', 'Internal Control System and Risk Management Framework', NULL, NULL, 3, NULL, NULL, NULL, 'root'),
('c13fc7eb-7fee-4792-80f5-a9cf385f972b', '47b48c8d-ce83-4ad9-978f-15f1704f1513', 'Application Forms', NULL, NULL, 1, NULL, NULL, NULL, 'root'),
('c5ebb905-9458-4237-a83c-8f72a7765470', '544f0ae5-920b-43b1-912f-5955795e844c', 'Claims Filing', NULL, NULL, 2, NULL, NULL, NULL, '90f2e780-4a07-416c-8380-cfbe9579987b'),
('c64dd884-cfdf-401b-bae1-6c002ba03230', '2bc5c657-67eb-49f0-9b8b-95a626ed9eb4', 'sfsd', '<p>sdfsd</p>', '<p>sdfsdf</p>', 0, '2026-01-27 05:21:18', '2026-01-27 05:21:18', NULL, 'root'),
('c93a03cf-c475-4188-97f2-64d3e9af7e6d', '47b48c8d-ce83-4ad9-978f-15f1704f1513', 'Claims Forms - Claimant’s Statement', NULL, NULL, 4, NULL, NULL, NULL, 'root'),
('d144f820-6e11-4661-ac63-ec37b983353f', '544f0ae5-920b-43b1-912f-5955795e844c', 'Products', NULL, NULL, 2, NULL, NULL, NULL, 'root'),
('ea4474cd-feaa-4b10-8476-cecab270ea7a', '47b48c8d-ce83-4ad9-978f-15f1704f1513', 'Claims Forms - Other Forms', NULL, NULL, 5, NULL, NULL, NULL, 'root'),
('fca7c869-5803-475e-bb33-37a8af5785e5', '544f0ae5-920b-43b1-912f-5955795e844c', 'Member Portal', NULL, NULL, 5, NULL, NULL, NULL, '90f2e780-4a07-416c-8380-cfbe9579987b'),
('fd10c851-e7e0-4418-86ee-e68fa109171d', '563152e1-6744-4ad8-a525-83061fb2076c', 'Disclosure and Transparency', NULL, NULL, 2, NULL, NULL, NULL, 'root');

-- --------------------------------------------------------

--
-- Table structure for table `section_testimonials`
--

CREATE TABLE `section_testimonials` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sequence` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_testimonials`
--

INSERT INTO `section_testimonials` (`id`, `parent_id`, `name`, `position`, `company`, `content`, `sequence`, `created_at`, `updated_at`, `deleted_at`) VALUES
('95c1b66e-5509-4a23-ba60-f3e4d7e1baa3', '40b91f49-5df8-4d06-b9e2-a8a586131b1b', 'Fernando A.', 'Admin Head', 'Northstar Co. Limited', 'Knowing our employees are protected gives us the confidence to keep moving forward together.', 2, '2026-01-03 13:43:42', '2026-01-03 13:43:42', NULL),
('bcc7f402-616f-4e93-b051-f48151993941', '40b91f49-5df8-4d06-b9e2-a8a586131b1b', 'Susie W.', 'HR Manager,', 'Equinox Private Equity', 'As an HR leader, I’ve seen how InLife Benefits delivers not just coverage, but confidence for our entire organization.', 3, '2026-01-03 13:44:28', '2026-01-03 13:44:28', NULL),
('d2b0e0cf-648f-48dd-8210-644b2c5a5de4', '40b91f49-5df8-4d06-b9e2-a8a586131b1b', 'Michael S.', 'HR Business Partner', 'Alpha Investment Group', 'Seamless service, flexible plans, and genuine support', 1, '2026-01-03 12:57:10', '2026-01-03 13:57:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `section_videos`
--

CREATE TABLE `section_videos` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yt_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `yt_url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `embed_url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `yt_title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `yt_thumbnail` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `yt_published_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_videos`
--

INSERT INTO `section_videos` (`id`, `parent_id`, `title`, `yt_id`, `yt_url`, `embed_url`, `yt_title`, `yt_thumbnail`, `yt_published_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
('a9b825fe-f5bb-4498-9acc-e015c9ff3cf6', '9b545321-59d3-47ed-ad09-15426227ab09', 'test', 'IvNi96Qm0Yg', 'https://www.youtube.com/watch?v=IvNi96Qm0Yg', 'https://www.youtube.com/embed/IvNi96Qm0Yg', 'Your Member’s Mobile App: Fast Access to Your Health Benefits', 'https://i.ytimg.com/vi/IvNi96Qm0Yg/maxresdefault.jpg', '2025-12-02 19:59:36', '2026-01-04 13:33:44', '2026-01-04 13:33:44', NULL),
('d38b2bb6-cd9f-4692-bd1e-55ee014f45af', '80d5cfc8-32fc-4a1a-9015-43aa211a6218', 'test', 'Q6ObomqINTQ', 'https://www.youtube.com/watch?v=Q6ObomqINTQ', 'https://www.youtube.com/embed/Q6ObomqINTQ', 'InLife | A Lifetime For Good', 'https://i.ytimg.com/vi/Q6ObomqINTQ/sddefault.jpg', '2018-12-02 17:18:16', '2026-01-20 07:23:47', '2026-01-20 07:23:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `taxonomies`
--

CREATE TABLE `taxonomies` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taxonomies`
--

INSERT INTO `taxonomies` (`id`, `name`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
('2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 'Diversity, Equality and Inclusivity', 'article_category', NULL, NULL, NULL),
('4c1406b2-86f9-4caf-ad95-99bd3217f075', 'Paperless Billing', 'article_category', NULL, NULL, NULL),
('4c496d9a-3182-4a32-8472-671114e54000', 'General Agency', 'agent_position', '2026-01-15 06:23:15', '2026-01-15 06:23:15', NULL),
('5c56f166-7d86-4245-b36c-ff175afaa3bf', 'Individual Agent', 'agent_position', NULL, NULL, NULL),
('85b5cb80-2c8c-486a-9296-f1264a0cf776', 'Tree Planting', 'article_category', NULL, NULL, NULL),
('97e0a130-f6b8-48e8-b8d0-ed14f2c0881c', 'Health & Wellness', 'article_category', NULL, NULL, NULL),
('e53ee4b2-5cc7-4756-a9bb-2de713b51e4a', 'Unit Manager', 'agent_position', '2026-01-15 06:22:29', '2026-01-15 06:22:29', NULL),
('f1d160dd-6810-4256-926c-9aff02b33017', 'Webinars', 'article_category', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `taxonomy_ctas`
--

CREATE TABLE `taxonomy_ctas` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `button_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `has_button` int NOT NULL DEFAULT '0',
  `is_link_out` int NOT NULL DEFAULT '0',
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sequence` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taxonomy_ctas`
--

INSERT INTO `taxonomy_ctas` (`id`, `title`, `subtitle`, `type`, `description`, `button_name`, `has_button`, `is_link_out`, `link`, `sequence`, `created_at`, `updated_at`, `deleted_at`) VALUES
('0b5980bf-d2dc-4e29-adc5-2eb618f0e813', 'Ready to get this plan? Get it on our Online Shop.', NULL, 'online_shop', 'Whether you’re at home or on the go, sign up for this policy and get protected through our convenient Online Shop!', 'Get Plan on Shop', 1, 1, 'https://google.com', 1, NULL, NULL, NULL),
('6327d5e3-07b8-4f18-9c50-f99a4e4f2d82', 'Boost your employee’s existing coverage.', 'Voluntary Employee Benefits', 'employee', NULL, 'Learn About VEB', 1, 0, '#', 2, NULL, NULL, NULL),
('6462a88d-4d64-4049-827e-c626b6965bdd', 'Shop our individual plans online.', 'InLife Benefits eShop', 'eshop_cta', 'Out and about? No worries! Get personal plans through our easy and convenient InLife Benefits eShop.', 'Visit our eShop', 1, 1, 'https://google.com', 1, NULL, NULL, NULL),
('b657d017-217e-4b91-950f-c40ecf1f13b7', 'Additional protection with Group Health', 'Upgrade with Group Health', 'insurance_upgrade', 'Extensive HMO coverage, covering healthcare, in-patient care, doctor fees, and emergency needs.', NULL, 0, 0, NULL, 1, NULL, NULL, NULL),
('d9db5df8-9e91-400b-b88b-a40ad95e9bba', 'Looking for a healthcare provider near you?', 'Provider Search', 'providers', 'Check out our list of partnered healthcare providers to ensure you get the absolute best care and coverage.', 'See List of Providers', 1, 0, '/providers', 1, NULL, NULL, NULL),
('ff01cbec-b114-4872-9f01-bc56359cd0cc', 'Get convenient care with our Telemedicine.', 'Telemedicine', 'telemedicine', 'See how you can meet with one of our accredited doctors anytime, anywhere.', 'Discover Our Telemedicine', 1, 0, '/telemedicine', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint DEFAULT '0',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `role_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `enabled`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `role_id`) VALUES
('59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', 'admin@admin.com', '2025-06-09 02:30:26', '$2y$10$Li21QyioXCpzd86mpSPs0OcA0bvTJFpHnvnjysVgvM5uyuoj8beDS', 1, 'BWpBZDuml5', '2025-06-09 02:30:26', '2025-06-09 02:30:26', NULL, 'f269b653-5ef6-4fed-aa4b-1e1c81bdbc99');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `member_id`, `first_name`, `last_name`, `full_name`, `contact_number`, `telephone_number`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
('2971f7d5-2119-4cea-b222-2f1aaf6b134e', '59ce9e0c-f1e9-4eee-a840-2a17b68dbc10', '5b15cbf5-8921-4f71-959c-55db6baf8906', 'Admin', 'SLMC', 'Admin SLMC', '(636) 634-9833', NULL, '', '2025-06-09 02:30:26', '2025-06-09 02:30:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('blog','press-release') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `yt_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `yt_url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `embed_url` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `yt_title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `yt_thumbnail` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `yt_published_date` timestamp NULL DEFAULT NULL,
  `category_id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` int NOT NULL DEFAULT '1',
  `featured` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `slug`, `content`, `type`, `yt_id`, `yt_url`, `embed_url`, `yt_title`, `yt_thumbnail`, `yt_published_date`, `category_id`, `enabled`, `featured`, `created_at`, `updated_at`, `deleted_at`) VALUES
('23275f99-932a-4e2c-a0de-ae6cc69c85d4', 'test', 'your-members-mobile-app-fast-access-to-your-health-benefits', 'test', 'blog', 'IvNi96Qm0Yg', 'https://www.youtube.com/watch?v=IvNi96Qm0Yg', 'https://www.youtube.com/embed/IvNi96Qm0Yg', 'Your Member’s Mobile App: Fast Access to Your Health Benefits', 'https://i.ytimg.com/vi/IvNi96Qm0Yg/maxresdefault.jpg', '2025-12-02 19:59:36', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-23 07:11:16', '2026-01-23 07:11:16', NULL),
('4b36180d-9db3-409e-a77a-2f4de9eba40e', 'test', 'inlife-leading-filipinos-to-a-lifetime-for-good', 'test', 'blog', 'fxlBtF0djhU', 'https://www.youtube.com/watch?v=fxlBtF0djhU', 'https://www.youtube.com/embed/fxlBtF0djhU', 'InLife │Leading Filipinos to A Lifetime for Good', 'https://i.ytimg.com/vi/fxlBtF0djhU/maxresdefault.jpg', '2023-08-31 00:49:37', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-23 07:16:35', '2026-01-23 07:16:35', NULL),
('f860e512-1c4a-465e-88e3-901d04bdd08e', 'test', 'love-in-life', 'test', 'blog', 'oR0Dgmo0uOc', 'https://www.youtube.com/watch?v=oR0Dgmo0uOc', 'https://www.youtube.com/embed/oR0Dgmo0uOc', 'LOVE IN LIFE ♫', 'https://i.ytimg.com/vi/oR0Dgmo0uOc/maxresdefault.jpg', '2025-09-18 19:16:05', '2daa2e82-2821-4a1d-bfc1-b0a3bfbb62c1', 1, 0, '2026-01-23 07:15:32', '2026-01-23 07:15:32', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `annual_reports`
--
ALTER TABLE `annual_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buttons`
--
ALTER TABLE `buttons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `leaders`
--
ALTER TABLE `leaders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logs_editor_id_foreign` (`editor_id`);

--
-- Indexes for table `metadata`
--
ALTER TABLE `metadata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_sections`
--
ALTER TABLE `page_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD KEY `password_reset_tokens_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_availments`
--
ALTER TABLE `plan_availments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plan_availments_plan_id_foreign` (`plan_id`);

--
-- Indexes for table `plan_faqs`
--
ALTER TABLE `plan_faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plan_faqs_plan_id_foreign` (`plan_id`);

--
-- Indexes for table `plan_highlights`
--
ALTER TABLE `plan_highlights`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plan_highlights_plan_id_foreign` (`plan_id`);

--
-- Indexes for table `plan_riders`
--
ALTER TABLE `plan_riders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plan_riders_plan_id_foreign` (`plan_id`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_benefits`
--
ALTER TABLE `section_benefits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_cards`
--
ALTER TABLE `section_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_emails`
--
ALTER TABLE `section_emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_faqs`
--
ALTER TABLE `section_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_hotlines`
--
ALTER TABLE `section_hotlines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_socials`
--
ALTER TABLE `section_socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_tabs`
--
ALTER TABLE `section_tabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_testimonials`
--
ALTER TABLE `section_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_videos`
--
ALTER TABLE `section_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxonomies`
--
ALTER TABLE `taxonomies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `taxonomies_type_index` (`type`);

--
-- Indexes for table `taxonomy_ctas`
--
ALTER TABLE `taxonomy_ctas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_details_user_id_foreign` (`user_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_editor_id_foreign` FOREIGN KEY (`editor_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plan_availments`
--
ALTER TABLE `plan_availments`
  ADD CONSTRAINT `plan_availments_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plan_faqs`
--
ALTER TABLE `plan_faqs`
  ADD CONSTRAINT `plan_faqs_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plan_highlights`
--
ALTER TABLE `plan_highlights`
  ADD CONSTRAINT `plan_highlights_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `plan_riders`
--
ALTER TABLE `plan_riders`
  ADD CONSTRAINT `plan_riders_plan_id_foreign` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
