DB  : musadbshop

       users (per gli amministratori)
            id (tinyint)
            name (varchar 45)
            surname (varchar 45)
            email (varchar 50)
            user (varchar 16)
            password (varchar 16)
            last update timestamp
            creadtion date timestamp
            
       products (prodotti)
            id  (MEDIUMINT UNSIGNED)
            name (varchar 45)
            description (VARCHAR)
            price  DECIMAL(10,2)
            quantity SMALLINT UNSIGNED
            image blob (TINYBLOB)
            id_category -> categories id SMALLINT UNSIGNED

        categories
            id SMALLINT UNSIGNED
            name (varchar 45)
            description (VARCHAR)

       orders
            id 1 (MEDIUMINT UNSIGNED)
            order_num (es 1-musa2023) (non solo numerico)
            id_customer -> customers _ id (MEDIUMINT UNSIGNED)
            creation date timestamp
            last modif timestamp

        order_details
            id (INT UNSIGNED)
            id_products -> chiave su product -> id  (MEDIUMINT UNSIGNED)
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
            id_adresses -> adresses (MEDIUMINT UNSIGNED)
            user (varchar 16)
            password (varchar 16)
            last update timestamp
            creadtion date timestamp

        adresses
            id (MEDIUMINT UNSIGNED)
            address (varchar 80)
            city (varchar 30)
            state (varchar 15)
            zip (varchar 6)
            last update timestamp
            creadtion date timestamp