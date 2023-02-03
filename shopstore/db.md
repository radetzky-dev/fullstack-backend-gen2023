DB  : musadbshop

       users (per gli amministratori)
            id (tinyint)
            name (varchar 45)
            surname (varchar 45)
            email (varchar 50)
            user (varchar 16)
            password (varchar 16)
            last_update timestamp
            creation_date datetime
            
       products (prodotti)
            id  (MEDIUMINT UNSIGNED)
            name (varchar 45)
            description (VARCHAR)
            price  DECIMAL(10,2)
            quantity SMALLINT UNSIGNED
            image blob (TINYBLOB)
            category_id -> categories id SMALLINT UNSIGNED

        categories
            id SMALLINT UNSIGNED
            name (varchar 45)
            description (VARCHAR)

       orders
            id (MEDIUMINT UNSIGNED)
            order_num (es 1-musa2023) (non solo numerico)
            customer_id -> customers _ id (MEDIUMINT UNSIGNED)
            creation_date datetime
            last_update     timestamp

        order_details
            id (INT UNSIGNED)
            id_product -> chiave su product -> id  (MEDIUMINT UNSIGNED)
            id_ order -> chiave orders -> id (MEDIUMINT UNSIGNED)
            quantity SMALLINT UNSIGNED
            actual_single_price  DECIMAL(10,2)

                +++ ESEMPIO +++
                3 - banana - 3 - 1,5
                1 - lapop - 1 - 1250 l'una
                2 - rastrelli - 12 l'uno
                +++++

       customers (acquirenti)
            id (MEDIUMINT UNSIGNED)
            name (VARCHAR 45)
            surname (VARCHAR 45)
            email (varchar 50)
            photo (TINYBLOB)
            society (varchar 50)
            phone (varchar 15)
            address_id -> adresses (MEDIUMINT UNSIGNED)
            user (varchar 16)
            password (varchar 16)
            last_update timestamp
            creation_date datetime

        addresses
            id (MEDIUMINT UNSIGNED)
            address (varchar 80)
            city (varchar 30)
            state (varchar 15)
            zip (varchar 6)
            last_update timestamp
            creation_date datetime


FK
Script per creare FK:
    ALTER TABLE order_details ADD CONSTRAINT `fk_orderdetails_order_id`
    FOREIGN KEY (order_id) REFERENCES orders (id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT;

    ` accento grave backtik = option + \
    ~ tilde  = option + 5


    ALTER TABLE order_details ADD CONSTRAINT `fk_orderdetails_products_id`
    FOREIGN KEY (product_id) REFERENCES products (id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT;

    ALTER TABLE products ADD CONSTRAINT `fk_products_categories_id`
    FOREIGN KEY (category_id) REFERENCES categories (id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT;

    ALTER TABLE orders ADD CONSTRAINT `fk_orders_costumer_id`
    FOREIGN KEY (costumer_id) REFERENCES costumers (id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT;

ALTER TABLE adresses RENAME TO `addresses`;

    ALTER TABLE costumers ADD CONSTRAINT `fk_costumers_addresses_id`
    FOREIGN KEY (address_id) REFERENCES addresses (id)
    ON DELETE CASCADE
    ON UPDATE RESTRICT;

ALTER TABLE `costumers` ADD KEY `idx_costumers_surname` (`surname`);
ALTER TABLE `products` ADD KEY `idx_products_name` (`name`);