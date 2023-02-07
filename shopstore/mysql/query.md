

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