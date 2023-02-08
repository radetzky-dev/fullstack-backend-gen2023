

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


//Mettere tracciato degli INSERT per il database e-commerce