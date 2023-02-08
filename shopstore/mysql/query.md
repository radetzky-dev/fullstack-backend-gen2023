

Esercizio lezione 11

select customer_id, first_name, last_name from customer where customer_id = 101;

select customer_id, first_name, last_name from customer where first_name ='victoria' and last_name = 'gibson';

select title, release_year, rental_rate from film where title like 'B%' order by rental_rate;

SELECT SUM(amount) as "Spesa cliente", customer_id as "Cliente"  FROM payment group by customer_id order by SUM(amount);

SELECT amount as "Spesa cliente", first_name as NOME, last_name AS COGNOME
FROM payment 
INNER JOIN customer ON customer.customer_id = payment.customer_id;

ESEMPIO INNER JOIN
select actorTbl.first_name AS NOME, actorTbl.last_name AS COGNOME, filmTbl.title as TITOLO, filmTbl.description AS TRAMA, filmTbl.release_year AS ANNO, languageTbl.name AS LINGUA 
from actor AS actorTbl 
INNER JOIN film_actor AS filmActorTbl ON actorTbl.actor_id = filmActorTbl.actor_id 
INNER JOIN film AS filmTbl ON filmActorTbl.film_id = filmTbl.film_id
INNER JOIN language AS languageTbl ON filmTbl.language_id = languageTbl.language_id
LIMIT 20;

UNION
(SELECT first_name AS name,last_name as surname, email FROM staff)
UNION
(SELECT first_name AS nameC,last_name, email FROM customer);


LEFT JOIN
select title, rental_date as "DATA NOLEGGIO" from film
left join inventory on film.film_id = inventory.film_id
left join rental as rentalTbl on inventory.inventory_id = rentalTbl.inventory_id;

RIGHT JOIN
select title, rental_date as "DATA NOLEGGIO" from film
right join inventory on film.film_id = inventory.film_id
right join rental as rentalTbl on inventory.inventory_id = rentalTbl.inventory_id;

ESERCITAZIONE
Visualizza ciascun customer con la sua città/country

select `cu`.`customer_id` AS `ID`,concat(`cu`.`first_name`,' ',`cu`.`last_name`) AS `name`,`a`.`address` AS `address`,`a`.`postal_code` AS `zip code`,`a`.`phone` AS `phone`,`sakila`.`city`.`city` AS `city`,`sakila`.`country`.`country` AS `country`,if(`cu`.`active`,'active','') AS `notes`,`cu`.`store_id` AS `SID` from (((`sakila`.`customer` `cu` join `sakila`.`address` `a` on(`cu`.`address_id` = `a`.`address_id`)) join `sakila`.`city` on(`a`.`city_id` = `sakila`.`city`.`city_id`)) join `sakila`.`country` on(`sakila`.`city`.`country_id` = `sakila`.`country`.`country_id`))

***
select `a`.`actor_id` AS `actor_id`,`a`.`first_name` AS `first_name`,`a`.`last_name` AS `last_name`,group_concat(distinct concat(`c`.`name`,': ',(select group_concat(`f`.`title` order by `f`.`title` ASC separator ', ') 
from ((`sakila`.`film` `f` 
join `sakila`.`film_category` `fc` on(`f`.`film_id` = `fc`.`film_id`)) 
join `sakila`.`film_actor` `fa` on(`f`.`film_id` = `fa`.`film_id`)) where `fc`.`category_id` = `c`.`category_id` and `fa`.`actor_id` = `a`.`actor_id`)) order by `c`.`name` ASC separator '; ') AS `film_info` 
from (((`sakila`.`actor` `a` left join `sakila`.`film_actor` `fa` on(`a`.`actor_id` = `fa`.`actor_id`)) 
left join `sakila`.`film_category` `fc` on(`fa`.`film_id` = `fc`.`film_id`)) left join `sakila`.`category` `c` on(`fc`.`category_id` = `c`.`category_id`)) group by `a`.`actor_id`,`a`.`first_name`,`a`.`last_name`


select actorTbl.actor_id, count(filmActorTbl.film_id) as numFilm from actor as actorTbl
INNER join film_actor As filmActorTbl on(actorTbl.actor_id = filmActorTbl.actor_id) 
where actorTbl.actor_id = 1;


SELECT `actor`.`actor_id`, `film_actor`.`actor_id`, `film`.`title`, `actor`.`first_name`, `actor`.`last_name`, `category`.`name`
FROM `actor` 
	LEFT JOIN `film_actor` ON `film_actor`.`actor_id` = `actor`.`actor_id` 
	LEFT JOIN `film` ON `film_actor`.`film_id` = `film`.`film_id`
	, `category`;

ESEMPI per INSERT
 INSERT INTO actor (first_name, last_name) VALUES ("Stefano", "Accorsi");

INSERT INTO actor (first_name, last_name) VALUES ("Pierfrancesco", "Favino"), ("Sophia", "Loren"), ("Alessandro", "Borghi");


film
2 italiano
INSERT INTO film (title,description,language_id) VALUES ("L'ulitmo bacio","L'ultimo bacio è un film del 2001 scritto e diretto da Gabriele Muccino, con Stefano Accorsi, Giovanna Mezzogiorno, Stefania Sandrelli e Martina Stella nella sua prima apparizione cinematografica.", 2);

 insert into film_actor (actor_id,film_id) VALUES (201,1001);

 insert into film_category (film_id,category_id) VALUES (1001,5);

 select * from actor_info where last_name like "%accorsi%";

 INSERT INTO actor (first_name, last_name) VALUES ("Paolo", "Rossi");

 delete from actor where actor_id=LAST_INSERT_ID();	


UPDATE
 UPDATE  actor SET last_name = UPPER('cruz') WHERE actor_id = 1;
 UPDATE  actor SET first_name = UPPER('Russell') WHERE actor_id = 105;

INSERT INTO film (title,release_year,description, language_id, rental_duration,rental_rate, length, replacement_cost, rating,special_features) VALUES ("Top Gun",1986,"As students at the United States Navy's elite fighterweapons school compete to be best in the class",1,6,4.99,110,20.99, "G","Trailers,Commentaries");

insert into film_category (film_id,category_id) VALUES (1002,1),(1002,7);

insert into film_text (film_id,title,description) VALUES (1002,"Top Gun","As students at the United States Navy's elite fighterweapons school compete to be best in the class");

SELECT MAX(Price) AS HighertPrice, MIN(Price) AS SmallestPrice, AVG(Price) AS Media , COUNT(Price) AS quanti, 
sum(Price) as Totale

FROM Products;

//Mettere tracciato degli INSERT per il database e-commerce


INSERT INTO users (name, surname, email, user, password, creation_date) VALUES ("Mario", "Rossi", "admin@admin.it", "admin", "admin", NOW());

INSERIRE INDIRIZZO
insert into addresses (address,city,state,zip,creation_date) VALUES ("piazza Duomo","Milano","Italia","20100", NOW());
insert into addresses (address,city,state,zip,creation_date) VALUES ("piazza Mazzini","Roma","Italia","00144", NOW());
insert into addresses (address,city,state,zip,creation_date) VALUES ("via Indipendenza","Napoli","Italia","80016", NOW());

INSERT INTO costumers (name, surname, email, society, phone, address_id, user, password, creation_date) VALUES ("Federico", "Verdi", "guest1@guest.it", "society1", "3772711234", 1, "guest1", "guest1", NOW());
 INSERT INTO costumers (name, surname, email, society, phone, address_id, user, password, creation_date) VALUES ("Mario", "Bianchi", "guest2@guest.it", "society2", "3772733334", 2, "guest2", "guest2", NOW());
 INSERT INTO costumers (name, surname, email, society, phone, address_id, user, password, creation_date) VALUES ("Patrizia", "Rossi", "guest3@guest.it", "society3", "36672733334", 3, "guest3", "guest3", NOW());

 insert into categories (name,description) VALUES ("UTENSILI" ,"tutto per il bricolage");
 insert into categories (name,description) VALUES ("GIARDINAGGIO" ,"cura orto e giardino");
 insert into categories (name,description) VALUES ("ELETTRODOMESTICI" ,"dalla lavatrice al laptop");

 insert into products (name, description, price, quantity,category_id,creation_date) VALUE ("martello", "per piantare i chiodi","3.99",5,2,NOW());
 insert into products (name, description, price, quantity,category_id,creation_date) VALUE ("rastrello", "per raccogliere le foglie","7.49",3,3,NOW());
 insert into products (name, description, price, quantity,category_id,creation_date) VALUE ("laptop", "computer con UBUNTU","299.49",7,4,NOW());

insert into products (name, description, price, quantity,category_id,creation_date) VALUE ("forbice potatura", "forbice da giardino","8.90",9,3,NOW());

insert into products (name, description, price, quantity,category_id,creation_date) VALUE ("carriola", "carriola per agricoltura","59.90",5,3,NOW());

insert into products (name, description, price, quantity,category_id,creation_date) VALUE ("tavoletta grafica", "Tavoletta grafica con schermo touch","149.50",3,4,NOW());

insert into products (name, description, price, quantity,category_id,creation_date) VALUE ("scopa elettrica", "Scopa Elettrica Ricaricabile 2in1","70.00",7,4,NOW());

insert into orders (order_num, costumer_id, creation_date) VALUES ("FAT-1",1,NOW());

insert into order_details (product_id, order_id, quantity, actual_single_price, creation_date) VALUES (9,1,1,"65.9",NOW());

insert into order_details (product_id, order_id, quantity, actual_single_price, creation_date) VALUES (4,1,2,"7.49",NOW());

insert into order_details (product_id, order_id, quantity, actual_single_price, creation_date) VALUES (7,1,3,"66",NOW());



ALTER VIEW ordini_clienti AS
SELECT orders.order_num as "NUM.ORD", DATE_FORMAT(orders.creation_date, '%d %m %Y') AS "DATA", costumers.name as "NOME", costumers.surname As "COGNOME", products.name AS "PRODOTTO",
order_details.quantity as "QTA", order_details.actual_single_price AS "PREZZO"
FROM orders 
INNER JOIN costumers ON costumers.id = orders.costumer_id
LEFT JOIN order_details ON order_details.order_id = orders.id
LEFT JOIN products ON order_details.product_id = products.id;
