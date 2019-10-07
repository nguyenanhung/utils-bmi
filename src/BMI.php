<?php
/**
 * Project utils-bmi
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/7/19
 * Time: 09:19
 */

namespace nguyenanhung\Utils\BMI;

use InvalidArgumentException;

/**
 * Class BMI
 *
 * @package   nguyenanhung\Utils\BMI
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class BMI
{
    /**
     * weight in kilogram
     * Cân nặng - tính bằng kilogram
     *
     * @var float $weight ;
     */
    private $weight;

    /**
     * height in centimeters
     * Chiều cao - tính bằng centimeters
     *
     * @var float $height
     */
    private $height;

    /**
     * Function setWeight (Cân nặng - tính bằng kilogram)
     *
     * @param float $weight
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 10/7/19 22:03
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Function setHeight (Chiều cao - tính bằng centimeters)
     *
     * @param float $height
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 10/7/19 22:09
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Function calculate
     *
     * @return float|int
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 10/7/19 22:27
     */
    public function calculate()
    {
        if (NULL === $this->weight) {
            throw new InvalidArgumentException('weight is empty');
        }

        if (NULL === $this->height) {
            throw new InvalidArgumentException('height is empty');
        }

        return ($this->weight / ($this->height ** 2));
    }
}
