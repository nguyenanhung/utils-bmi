<?php
/**
 * Project utils-bmi
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/7/19
 * Time: 09:51
 */

require_once __DIR__ . '/../vendor/autoload.php';

use nguyenanhung\Utils\BMI\Weight;

$wi = new Weight();

$wi->setBmiIndex(1);

echo "<pre>";
print_r($wi->calculateWeight());
echo "</pre>";
