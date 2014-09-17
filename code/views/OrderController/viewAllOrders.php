<?php

$mask = "|%-15s |%-12s |%-5s |\n";
printf("Here is the list of products:\n");

printf($mask, "Name", "Type", "Price");
printf("---------------------------------------\n");
for ($i = 0; $i < count($param); $i++) {
    printf($mask, $param[$i]['Name'], $param[$i]['Type'], 
           $param[$i]['Price']);
}
printf("\n");

