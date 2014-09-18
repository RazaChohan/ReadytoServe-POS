<?php

$omask = "|%8s |%20s |%20s |\n";   //mask for order
$imask = "|%5s|%25s|%10s|%8s |%10s|%10s|\n";
$lineCounter = 1;
$currentOrderID = 0;
$orderTot=0;

printf("These are all Orders:\n");

if($currentOrderID != 0)
{
printf("-------------------------------------------------------\n");
}
for ($i = 0; $i < count($param); $i++) {
    if ($currentOrderID !== $param[$i]['order_id']) {
        printf("TOTAL:".$orderTot."\n");
        printf("-------------------------------------------------------\n");
        $orderTot=0;
        $lineCounter = 1;
        $currentOrderID = $param[$i]['order_id'];
        printf($omask, "Order ID", "Salesman Name", "Date / Time");
        printf($omask, $param[$i]['order_id'], $param[$i]['name'], 
               $param[$i]['order_datetime']);
          echo "\n"; 
          printf("%45s", "<< Order Line Items>>\n".PHP_EOL);
          printf($imask, "L.No.", "Item Name", "Item Price", "Quantity", 
                  "Discount", "Amount"); 
    }

    printf($imask, $lineCounter++, $param[$i]['product_description'], 
           $param[$i]['unit_price'], $param[$i]['quantity'], 
           $param[$i]['discount'], $param[$i]['Amount']);
    $orderTot=$orderTot+$param[$i]['Amount'];
}
printf("\n-------------------------------------------------------\n");

printf("\n");
