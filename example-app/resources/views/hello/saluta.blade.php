<html>

    <body>
        <p>{{ $francese }}</p>
        <p>{{ $italiano }}</p>
        <p>Solo le ore UNIX {{time()}}</p>
        <p>Saluta {{SayHi();}}</p>
        <p>Oggi {{date("F j, Y, g:i a")}}</p>

      
        <?php echo "PHP francese ". $francese;?>
        <?php echo "PHP italiano ". $italiano;?>

        <?php
        function SayHi()
        {
            return "Ciao mondo";
        }
        ?>
        
    </body>
</html>