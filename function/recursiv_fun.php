<?php

function sell($hour)
{
    if ($hour < 8) {
        echo ("ShopKeeper is keeping selling for " . $hour . "hour. <br>");
        sell($hour + 1);
    }
}
sell(1);
?>
