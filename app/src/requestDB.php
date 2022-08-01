<?php

/**
 *  Handle requests (Ajax) for wine pairings 
 * 
 */


require_once 'db_handler.php';

if( $_GET['type'] === "pair" ) {

    $food = $_GET['food'];
    $sql = "SELECT * FROM food join pairs on food.id = pairs.foodid join wines on wines.id = pairs.wineid where food.name = \"$food\" ";
    $result = mysqli_query($conn,$sql);
    echo "<h2> Best wines for $food </h2>";

    if (mysqli_num_rows($result)> 0) { // and $food === "Strip"
        //echo "<table id=\"contable\"><tr><th>Add to <br> Favorites</th><th>ID</th><th>Name</th><th>Date</th><th>Artist Name</th><th>Category</th></tr>";
        // output data of each row
        //echo "<p style=\"color:#000000\" style=\"font-family:Yanone Kaffeesatz;\"> pairs</p>";
        echo "<ol class = \"resultsol\" >" ;
        // echo "<table style=\"color:#000000\" id=\"contable\"><tr><th>ID</th><th>Name</th><th>type</th><th>category</th><th>Price Aver.</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
           
            //echo "<ol id = \"ggg\" style=\"color:#000000;font-family:sans-serif;display:list-item;\">" ;

            if (is_null($row["name"])){
                echo   "<li>Variety: ".$row["type"]." , ".$row["category"]."
                        <p>Recommendations: <br>
                        No recommendations</p>
                        </li>";
                
                        echo "<br>";
            }
            else{           
                echo   "<li>Variety: ".$row["type"]." , ".$row["category"]."
                        <p>Recommendations: <br>
                        ".$row["name"].", with average price of \xE2\x82\xAc".$row["priceapr"]."</p>
                        </li>";
                    
                        //echo "</ol>";
                        echo "<br>";
            }

            
        }
       echo "</ol>";
    } else {
        echo "0 results";
    }
    
    

    exit();
}

/* echo "<tr>
                            <td >".$row["id"]."</td>
                            <td>".$row["name"]."</td>
                            <td>".$row["type"]."</td>
                            <td>".$row["category"]."</td>
                            <td>".$row["priceapr"]."</td>
                        </tr>";
*/

?>