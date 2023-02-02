DB  : musadbshop

       users (per gli amministratori)
            id
            name
            surname
            email
            user 
            password 
            last update
            creadtion date
            
       products (prodotti)
            id  
            name 
            description
            price 
            quantity
            image
            id_category -> categories id

        categories
            id 
            name
            description

       orders
            id 1
            order_num 1-2feb
            importo tot
            id_customer -> customers _ id
            creation date
            last modif

        order_details
            id
            id_prodcuts -> chiave su product -> id
            id_ order -> chiave orders -> id
            quantity
            actual_single_price

                +++ ESEMPIO +++
                3 - banana - 3 - 1,5
                1 - lapop - 1 - 1250 l'una
                2 - rastrelli - 12 l'uno
                +++++

       customers (acquirenti)
            id
            name
            surname
            email
            photo
            society
            phone
            id_adresses -> adresses
            user 
            password 
            last update
            creadtion date

        adresses
            id
            address 
            city 
            state
            zip
            last update
            creadtion date