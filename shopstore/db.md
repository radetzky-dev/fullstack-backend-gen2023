DB  : musadbshop

       users (per gli amministratori)
            id (tinyint)
            name (varchar 45)
            surname
            email
            user 
            password 
            last update timestamp
            creadtion date timestamp
            
       products (prodotti)
            id  (MEDIUMINT UNSIGNED)
            name 
            description
            price  DECIMAL(10,2)
            quantity SMALLINT UNSIGNED
            image blob
            id_category -> categories id SMALLINT UNSIGNED

        categories
            id SMALLINT UNSIGNED
            name
            description

       orders
            id 1 (MEDIUMINT UNSIGNED)
            order_num (es 1-musa2023) (non solo numerico)
            id_customer -> customers _ id
            creation date
            last modif

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
            name
            surname
            email
            photo
            society
            phone
            id_adresses -> adresses (MEDIUMINT UNSIGNED)
            user 
            password 
            last update
            creadtion date

        adresses
            id (MEDIUMINT UNSIGNED)
            address 
            city 
            state
            zip
            last update
            creadtion date