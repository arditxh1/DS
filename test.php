    <?php  
    include 'php/dbh.php';
        $query = $con->prepare("SELECT * FROM projekete_app INNER JOIN reviews ON projekete_app.id = reviews.PrId");

        $query->execute();

        $projekte = $query->fetchAll();
                                           foreach ($projekte as $obj) {
                                                echo "<tr id=Tr$num>";
                                                    echo "<td id='Emri$num'>"           . $obj["Emri"]     ."</td>";
                                                    echo "<br>";

                                                    echo "<td id='username$num'>"       . $obj["username"] ."</td>";
                                                         echo "<br>";
                                                    echo "<td id='Short$num' class='longT'>"          . $obj["Short"]    ."</td>";
                                                    echo "<br>";
                                                    echo "<td id='Full$num' class='longT'>"           . $obj["Full"]     ."</td>";
                                                    echo "<br>";
                                                    echo "<td id='APK$num'> <a href = " . $obj["SCR"]      ." download>Screenshots</a></td>";
                                                    echo "<br>";
                                                    echo "<td id='APK$num'> <a href = " . $obj["Icon"]     ." download>Icons</a></td>";
                                                    echo "<br>";
                                                    echo "<td id='APK$num'> <a href = " . $obj["CD"]       ." download>Cover Designs</a></td>";
                                                    echo "<br>";
                                                    echo "<td id='APK$num'> <a href = " . $obj["APK"]      ." download>APK</a></td>";
                                                    echo "<br>";
                                                    echo "<td id='Rev$num'>"           . $obj["Review"]     ."</td>";
                                                    echo "<br>";
                                                    echo "<br>";
                                                    echo "<td id='Id$num'>"           . $obj["id"]     ."</td>";
                                                    echo "<br>";
                                                echo "</tr>";
                                            } 
   
    ?>