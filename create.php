<?php
    // connect to mongodb
    $m = new MonggoClient();
    echo "connection to database succesfully";

    // select a database
    $db = $m->datasiswarpl1;
    echo"Database mydb selected";
    $collection = $db->CreateCollection("BEM");
    echo "Collection created succesfully";

?>