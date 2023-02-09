-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Feb 09, 2023 alle 14:13
-- Versione del server: 10.4.27-MariaDB
-- Versione PHP: 8.1.12



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musadbshop`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `addresses`
--

CREATE TABLE `addresses` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `address` varchar(80) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(15) NOT NULL,
  `zip` int(11) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `addresses`
--

INSERT INTO `addresses` (`id`, `address`, `city`, `state`, `zip`, `last_update`, `creation_date`) VALUES
(1, 'piazza Duomo', 'Milano', 'Italia', 20100, '2023-02-08 12:11:06', '2023-02-08 13:11:06'),
(2, 'piazza Mazzini', 'Roma', 'Italia', 144, '2023-02-08 12:12:27', '2023-02-08 13:12:27'),
(3, 'via Indipendenza', 'Napoli', 'Italia', 80016, '2023-02-08 12:14:44', '2023-02-08 13:14:44');

-- --------------------------------------------------------

--
-- Struttura della tabella `categories`
--

CREATE TABLE `categories` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(2, 'UTENSILI', 'tutto per il bricolage'),
(3, 'GIARDINAGGIO', 'cura orto e giardino'),
(4, 'ELETTRODOMESTICI', 'dalla lavatrice al laptop');

-- --------------------------------------------------------

--
-- Struttura della tabella `costumers`
--

CREATE TABLE `costumers` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `photo` tinyblob DEFAULT NULL,
  `society` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address_id` mediumint(8) UNSIGNED NOT NULL,
  `user` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `costumers`
--

INSERT INTO `costumers` (`id`, `name`, `surname`, `email`, `photo`, `society`, `phone`, `address_id`, `user`, `password`, `last_update`, `creation_date`) VALUES
(1, 'Federico', 'Verdi', 'guest1@guest.it', NULL, 'society1', '3772711234', 1, 'guest1', 'guest1', '2023-02-08 12:15:33', '2023-02-08 13:15:33'),
(2, 'Mario', 'Bianchi', 'guest2@guest.it', NULL, 'society2', '3772733334', 2, 'guest2', 'guest2', '2023-02-08 12:16:30', '2023-02-08 13:16:30'),
(3, 'Patrizia', 'Rossi', 'guest3@guest.it', NULL, 'society3', '36672733334', 3, 'guest3', 'guest3', '2023-02-08 12:17:18', '2023-02-08 13:17:18'),
(5, 'Lenny', 'Cravitz', 'guest1@guest.it', NULL, 'society1', '3772711234', 1, 'guest1', 'guest1', '2023-02-09 12:14:23', '2023-02-09 01:11:51'),
(8, 'Gianni', 'Blue', 'gianni.blue@blue.com', NULL, 'society17802', '333-17802', 3, 'guest17802', 'guest17802', '2023-02-09 12:20:59', '2023-02-09 13:20:59'),
(9, 'Giulia', 'Pink', 'giulia.pink@pink.com', NULL, 'society16967', '333-16967', 3, 'guest16967', 'guest16967', '2023-02-09 12:21:29', '2023-02-09 13:21:29'),
(10, 'Paola', 'Yellow', 'paola.yellow@yellow.com', NULL, 'society19533', '333-19533', 1, 'guest19533', 'guest19533', '2023-02-09 12:24:58', '2023-02-09 13:24:58'),
(11, 'Giulia', 'Blue', 'giulia.blue@blue.com', NULL, 'society29897', '333-29897', 2, 'guest29897', 'guest29897', '2023-02-09 12:25:46', '2023-02-09 13:25:46'),
(12, 'Boh', 'Clinton', 'boh.clinton@clinton.com', NULL, 'society1007', '333-1007', 2, 'guest1007', 'guest1007', '2023-02-09 12:57:34', '2023-02-09 13:57:34'),
(13, 'Rachel', 'White', 'rachel.white@white.com', NULL, 'society73882', '333-73882', 3, 'guest73882', 'guest73882', '2023-02-09 12:57:34', '2023-02-09 13:57:34'),
(14, 'Paola', 'White', 'paola.white@white.com', NULL, 'society4767', '333-4767', 1, 'guest4767', 'guest4767', '2023-02-09 12:59:21', '2023-02-09 13:59:21'),
(15, 'Rachel', 'White', 'rachel.white@white.com', NULL, 'society66332', '333-66332', 2, 'guest66332', 'guest66332', '2023-02-09 12:59:21', '2023-02-09 13:59:21'),
(17, 'Paola', 'White', 'paola.white@white.com', NULL, 'society4272', '333-4272', 3, 'guest4272', 'guest4272', '2023-02-09 13:03:23', '2023-02-09 14:03:23'),
(18, 'Gianni', 'Red', 'gianni.red@red.com', NULL, 'society75707', '333-75707', 3, 'guest75707', 'guest75707', '2023-02-09 13:05:04', '2023-02-09 14:05:04'),
(19, 'Remo', 'Green', 'remo.green@green.com', NULL, 'society52059', '333-52059', 3, 'guest52059', 'guest52059', '2023-02-09 13:05:04', '2023-02-09 14:05:04'),
(20, 'Remo', 'Clinton', 'remo.clinton@clinton.com', NULL, 'society37006', '333-37006', 1, 'guest37006', 'guest37006', '2023-02-09 13:12:04', '2023-02-09 14:12:04'),
(21, 'Rachel', 'White', 'rachel.white@white.com', NULL, 'society34085', '333-34085', 3, 'guest34085', 'guest34085', '2023-02-09 13:12:04', '2023-02-09 14:12:04'),
(22, 'Remo', 'Red', 'remo.red@red.com', NULL, 'society51988', '333-51988', 3, 'guest51988', 'guest51988', '2023-02-09 13:13:27', '2023-02-09 14:13:27'),
(23, 'Fulvio', 'Blue', 'fulvio.blue@blue.com', NULL, 'society79913', '333-79913', 3, 'guest79913', 'guest79913', '2023-02-09 13:13:27', '2023-02-09 14:13:27'),
(24, 'Paola', 'Clinton', 'paola.clinton@clinton.com', NULL, 'society2812', '333-2812', 1, 'guest2812', 'guest2812', '2023-02-09 13:13:27', '2023-02-09 14:13:27'),
(25, 'Giulia', 'Pink', 'giulia.pink@pink.com', NULL, 'society74925', '333-74925', 3, 'guest74925', 'guest74925', '2023-02-09 13:13:27', '2023-02-09 14:13:27'),
(26, 'Boh', 'Blue', 'boh.blue@blue.com', NULL, 'society60352', '333-60352', 2, 'guest60352', 'guest60352', '2023-02-09 13:13:27', '2023-02-09 14:13:27'),
(27, 'Giulia', 'Clinton', 'giulia.clinton@clinton.com', NULL, 'society32742', '333-32742', 2, 'guest32742', 'guest32742', '2023-02-09 13:13:27', '2023-02-09 14:13:27'),
(28, 'Paola', 'Red', 'paola.red@red.com', NULL, 'society32593', '333-32593', 2, 'guest32593', 'guest32593', '2023-02-09 13:13:27', '2023-02-09 14:13:27'),
(29, 'Boh', 'Blue', 'boh.blue@blue.com', NULL, 'society34264', '333-34264', 2, 'guest34264', 'guest34264', '2023-02-09 13:13:27', '2023-02-09 14:13:27'),
(30, 'Paola', 'Blue', 'paola.blue@blue.com', NULL, 'society6951', '333-6951', 1, 'guest6951', 'guest6951', '2023-02-09 13:13:27', '2023-02-09 14:13:27');

-- --------------------------------------------------------

--
-- Struttura della tabella `orders`
--

CREATE TABLE `orders` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `order_num` varchar(30) NOT NULL,
  `costumer_id` mediumint(8) UNSIGNED NOT NULL,
  `creation_date` datetime NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `orders`
--

INSERT INTO `orders` (`id`, `order_num`, `costumer_id`, `creation_date`, `last_update`) VALUES
(1, 'FAT-1', 1, '2023-02-08 13:45:17', '2023-02-08 12:45:17');

-- --------------------------------------------------------

--
-- Struttura della tabella `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` mediumint(8) UNSIGNED NOT NULL,
  `order_id` mediumint(8) UNSIGNED NOT NULL,
  `quantity` smallint(5) UNSIGNED NOT NULL,
  `actual_single_price` decimal(10,2) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `order_details`
--

INSERT INTO `order_details` (`id`, `product_id`, `order_id`, `quantity`, `actual_single_price`, `last_update`, `creation_date`) VALUES
(1, 9, 1, 1, '65.90', '2023-02-08 12:49:26', '2023-02-08 13:49:26'),
(2, 4, 1, 2, '7.49', '2023-02-08 12:49:59', '2023-02-08 13:49:59'),
(3, 7, 1, 3, '66.00', '2023-02-08 12:50:27', '2023-02-08 13:50:27');

-- --------------------------------------------------------

--
-- Struttura stand-in per le viste `ordini_clienti`
-- (Vedi sotto per la vista effettiva)
--
CREATE TABLE `ordini_clienti` (
`NUM.ORD` varchar(30)
,`DATA` varchar(10)
,`NOME` varchar(45)
,`COGNOME` varchar(45)
,`PRODOTTO` varchar(45)
,`QTA` smallint(5) unsigned
,`PREZZO` decimal(10,2)
);

-- --------------------------------------------------------

--
-- Struttura della tabella `products`
--

CREATE TABLE `products` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` smallint(5) UNSIGNED NOT NULL,
  `image` tinyblob DEFAULT NULL,
  `category_id` smallint(5) UNSIGNED NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `creation_date` datetime NOT NULL,
  `available` bit(1) NOT NULL DEFAULT b'1' COMMENT '1 per defualt è disponibile 0 se non lo è'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `quantity`, `image`, `category_id`, `last_update`, `creation_date`, `available`) VALUES
(3, 'martello', 'per piantare i chiodi', '3.99', 5, NULL, 2, '2023-02-08 12:24:06', '2023-02-08 13:24:06', b'1'),
(4, 'rastrello', 'per raccogliere le foglie', '7.49', 3, NULL, 3, '2023-02-08 12:26:04', '2023-02-08 13:26:04', b'1'),
(5, 'laptop', 'computer con UBUNTU', '299.49', 7, NULL, 4, '2023-02-08 12:27:06', '2023-02-08 13:27:06', b'1'),
(7, 'forbice potatura', 'forbice da giardino', '8.90', 9, NULL, 3, '2023-02-08 12:42:29', '2023-02-08 13:42:29', b'1'),
(8, 'carriola', 'carriola per agricoltura', '59.90', 5, NULL, 3, '2023-02-08 12:42:29', '2023-02-08 13:42:29', b'1'),
(9, 'tavoletta grafica', 'Tavoletta grafica con schermo touch', '149.50', 3, NULL, 4, '2023-02-08 12:42:29', '2023-02-08 13:42:29', b'1'),
(10, 'scopa elettrica', 'Scopa Elettrica Ricaricabile 2in1', '70.00', 7, NULL, 4, '2023-02-08 12:42:29', '2023-02-08 13:42:29', b'1'),
(11, 'Friggitrice', 'loren ipsum', '384.00', 10, NULL, 2, '2023-02-09 13:12:04', '2023-02-09 14:12:04', b'1'),
(12, 'Scatola di chiodi', 'loren ipsum', '356.00', 7, NULL, 3, '2023-02-09 13:12:04', '2023-02-09 14:12:04', b'1'),
(13, 'Friggitrice', 'loren ipsum', '71.00', 8, NULL, 2, '2023-02-09 13:12:04', '2023-02-09 14:12:04', b'1'),
(14, 'Tappi da bottiglia', 'loren ipsum', '610.00', 7, NULL, 4, '2023-02-09 13:12:04', '2023-02-09 14:12:04', b'1'),
(15, 'Friggitrice', 'loren ipsum', '767.00', 7, NULL, 3, '2023-02-09 13:12:04', '2023-02-09 14:12:04', b'1'),
(16, 'Stendipanni', 'loren ipsum', '890.00', 12, NULL, 3, '2023-02-09 13:13:27', '2023-02-09 14:13:27', b'1'),
(17, 'Zerbino', 'loren ipsum', '607.00', 12, NULL, 4, '2023-02-09 13:13:27', '2023-02-09 14:13:27', b'1'),
(18, 'Macchina da scrivere', 'loren ipsum', '885.00', 5, NULL, 2, '2023-02-09 13:13:27', '2023-02-09 14:13:27', b'1'),
(19, 'Zerbino', 'loren ipsum', '746.00', 8, NULL, 2, '2023-02-09 13:13:27', '2023-02-09 14:13:27', b'1'),
(20, 'Zerbino', 'loren ipsum', '878.00', 8, NULL, 4, '2023-02-09 13:13:27', '2023-02-09 14:13:27', b'1'),
(21, 'Zerbino', 'loren ipsum', '916.00', 3, NULL, 2, '2023-02-09 13:13:27', '2023-02-09 14:13:27', b'1'),
(22, 'Friggitrice', 'loren ipsum', '521.00', 7, NULL, 4, '2023-02-09 13:13:27', '2023-02-09 14:13:27', b'1'),
(23, 'Computer', 'loren ipsum', '671.00', 4, NULL, 2, '2023-02-09 13:13:27', '2023-02-09 14:13:27', b'1'),
(24, 'Macchina da scrivere', 'loren ipsum', '235.00', 7, NULL, 3, '2023-02-09 13:13:27', '2023-02-09 14:13:27', b'1');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` tinyint(4) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `user`, `password`, `last_update`, `creation_date`) VALUES
(1, 'Paolo', 'Rossi', 'admin@admin.it', 'admin', 'admin', '2023-02-08 12:04:05', '2023-02-08 13:03:17');

-- --------------------------------------------------------

--
-- Struttura per vista `ordini_clienti`
--
DROP TABLE IF EXISTS `ordini_clienti`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ordini_clienti`  AS SELECT `orders`.`order_num` AS `NUM.ORD`, date_format(`orders`.`creation_date`,'%d %m %Y') AS `DATA`, `costumers`.`name` AS `NOME`, `costumers`.`surname` AS `COGNOME`, `products`.`name` AS `PRODOTTO`, `order_details`.`quantity` AS `QTA`, `order_details`.`actual_single_price` AS `PREZZO` FROM (((`orders` join `costumers` on(`costumers`.`id` = `orders`.`costumer_id`)) left join `order_details` on(`order_details`.`order_id` = `orders`.`id`)) left join `products` on(`order_details`.`product_id` = `products`.`id`))  ;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `costumers`
--
ALTER TABLE `costumers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_costumers_addresses_id` (`address_id`),
  ADD KEY `idx_costumers_surname` (`surname`);

--
-- Indici per le tabelle `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orders_costumer_id` (`costumer_id`);

--
-- Indici per le tabelle `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orderdetails_order_id` (`order_id`),
  ADD KEY `fk_orderdetails_products_id` (`product_id`);

--
-- Indici per le tabelle `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_products_categories_id` (`category_id`),
  ADD KEY `idx_products_name` (`name`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `categories`
--
ALTER TABLE `categories`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `costumers`
--
ALTER TABLE `costumers`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT per la tabella `orders`
--
ALTER TABLE `orders`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `products`
--
ALTER TABLE `products`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` tinyint(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `costumers`
--
ALTER TABLE `costumers`
  ADD CONSTRAINT `fk_costumers_addresses_id` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE;

--
-- Limiti per la tabella `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_costumer_id` FOREIGN KEY (`costumer_id`) REFERENCES `costumers` (`id`) ON DELETE CASCADE;

--
-- Limiti per la tabella `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `fk_orderdetails_order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_orderdetails_products_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Limiti per la tabella `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_categories_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
