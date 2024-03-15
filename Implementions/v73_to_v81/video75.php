<?php
echo round(7.50) . "<br>";//8
echo round(7.99) . "<br>";//8
echo round(7.01) . "<br>";//7
echo round(7.49) . "<br>";//7

echo round(5.99,1) . "<br>";//6
echo round(5.94,1) . "<br>";//5.9
echo round(5.995,2) . "<br>";//6
echo round(5.994,1) . "<br>";//6
echo round(5.994,2) . "<br>";//5.99

echo round(5.99,0,PHP_ROUND_HALF_UP) . "<br>";//6
echo round(5.4,0,PHP_ROUND_HALF_UP) . "<br>";//5

echo round(5.50,0,PHP_ROUND_HALF_DOWN) . "<br>";//5

echo round(5.50,0,PHP_ROUND_HALF_EVEN) . "<br>";//6
echo round(4.50,0,PHP_ROUND_HALF_EVEN) . "<br>";//4


echo round(5.50,0,PHP_ROUND_HALF_ODD) . "<br>";//5
echo round(4.50,0,PHP_ROUND_HALF_ODD) . "<br>";//5