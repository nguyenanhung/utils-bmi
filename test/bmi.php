<?php
/**
 * Project utils-bmi
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/7/19
 * Time: 09:24
 */
require_once __DIR__ . '/../vendor/autoload.php';

use nguyenanhung\Utils\BMI\BMI;

$bmi = new BMI();

$bmi->setHeight(170)->setWeight(100);

$result = $bmi->calculate();

echo "<pre>";
print_r($result * 10000);
echo "</pre>";
