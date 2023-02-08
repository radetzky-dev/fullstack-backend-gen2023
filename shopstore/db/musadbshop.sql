-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Feb 08, 2023 alle 14:14
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
(3, 'Patrizia', 'Rossi', 'guest3@guest.it', NULL, 'society3', '36672733334', 3, 'guest3', 'guest3', '2023-02-08 12:17:18', '2023-02-08 13:17:18');

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
,`DATA` datetime
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
(10, 'scopa elettrica', 'Scopa Elettrica Ricaricabile 2in1', '70.00', 7, NULL, 4, '2023-02-08 12:42:29', '2023-02-08 13:42:29', b'1');

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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ordini_clienti`  AS SELECT `orders`.`order_num` AS `NUM.ORD`, `orders`.`creation_date` AS `DATA`, `costumers`.`name` AS `NOME`, `costumers`.`surname` AS `COGNOME`, `products`.`name` AS `PRODOTTO`, `order_details`.`quantity` AS `QTA`, `order_details`.`actual_single_price` AS `PREZZO` FROM (((`orders` join `costumers` on(`costumers`.`id` = `orders`.`costumer_id`)) left join `order_details` on(`order_details`.`order_id` = `orders`.`id`)) left join `products` on(`order_details`.`product_id` = `products`.`id`))  ;

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
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
