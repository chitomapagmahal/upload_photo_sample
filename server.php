<?php

    $SERVER = "localhost";
    $USER = "root";
    $PASS = "";
    $DATABASE = "sample_array_save"; 
    
    $CONN = mysqli_connect($SERVER, $USER, $PASS, $DATABASE);

    $COUNTER = 0;

    $STRINGS_OF_CRUSHES = "";

    $LIST_OF_CHITO_CRUSH = array("Ariane", "Mikay", "Jessa", "Q3\'s Friend", "Future Crush");

    while ($COUNTER <= count($LIST_OF_CHITO_CRUSH) - 1)
    {
        $SQL = "INSERT INTO `crushes` (`name`) VALUES ('". $LIST_OF_CHITO_CRUSH[$COUNTER] ."'); ";
        $RESULT = mysqli_query($CONN, $SQL);

        $COUNTER++;
    }

?>
