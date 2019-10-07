<?php
/**
 * Project utils-bmi
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/7/19
 * Time: 09:36
 */

namespace nguyenanhung\Utils\BMI;

/**
 * Class Weight
 *
 * @package   nguyenanhung\Utils\BMI
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Weight implements WeightInterface
{
    /** @var float|int Chỉ số BMI */
    private $bmiIndex;

    /**
     * Function setBmiIndex
     *
     * @param float|int $bmiIndex
     *
     * @return $this
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 10/7/19 37:35
     */
    public function setBmiIndex($bmiIndex)
    {
        $this->bmiIndex = $bmiIndex;

        return $this;
    }

    /**
     * Function calculateWeight
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 10/7/19 51:02
     */
    public function calculateWeight()
    {
        // Làm tròn chỉ số BMI
        $bmi = number_format(($this->bmiIndex * 10000), 2);

        // Tính toán output
        if ($bmi < 16) {
            return self::GAY_DO_III;
        } elseif ($bmi >= 16 && $bmi < 17) {
            return self::GAY_DO_II;
        } elseif ($bmi >= 17 && $bmi < 18.5) {
            return self::GAY_DO_I;
        } elseif ($bmi >= 18.5 && $bmi < 25) {
            return self::BINH_THUONG;
        } elseif ($bmi >= 25 && $bmi < 30) {
            return self::THUA_CAN;
        } elseif ($bmi >= 30 && $bmi < 35) {
            return self::BEO_PHI_DO_I;
        } elseif ($bmi >= 35 && $bmi < 40) {
            return self::BEO_PHI_DO_II;
        } else {
            return self::BEO_PHI_DO_III;
        }
    }
}
