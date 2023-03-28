<?php
require("conn.php");
$table = $pdo->prepare("Select * from ferramentas");
$table -> execute();
$results = $table -> fetchAll();
echo '<pre>';
print_r($results);
echo '</pre>';

?>


    <body>
    
    <table><tr>
        <th>prod_name</th>
        <th>num_serie</th>
        <th>categoria</th>
    </tr>

   <?php
   foreach ($results as $product) {
    echo '<tr>';
    echo '<td>'.$product['prod_name'].'</td>';
    echo '<td>'.$product['num_serie'].'</td>';
    echo '<td>'.$product['categoria'].'</td>';  
    
    
    echo '</tr>';
}
?>

</table>    
    </body>
</html>