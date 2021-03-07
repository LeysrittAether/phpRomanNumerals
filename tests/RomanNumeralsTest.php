<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use PHPUnit\Framework\TestCase;

final class RomanNumeralsTest extends TestCase
{
    /**
     * @test
     */
    public function si_son_1_5_10_50_y_100_devuelve_I_V_X_L_y_C()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("I", $romanNumerals->say(1));
        $this->assertEquals("V", $romanNumerals->say(5));
        $this->assertEquals("X", $romanNumerals->say(10));
        $this->assertEquals("L", $romanNumerals->say(50));
        $this->assertEquals("C", $romanNumerals->say(100));
    }

    /**
     * @test
     */
    public function si_son_2_y_3_devuelve_II_y_III()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("II", $romanNumerals->say(2));
        $this->assertEquals("III", $romanNumerals->say(3));
    }

    /**
     * @test
     */
    public function si_es_4_devuelve_IV()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("IV", $romanNumerals->say(4));
    }

    /**
     * @test
     */
    public function si_son_6_y_7_devuelve_VI_y_VII()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("VI", $romanNumerals->say(6));
        $this->assertEquals("VII", $romanNumerals->say(7));
    }

    /**
     * @test
     */
    public function si_es_9_devuelve_IX()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("IX", $romanNumerals->say(9));
    }

    /**
     * @test
     */
    public function si_es_17_devuelve_XVII()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("XVII", $romanNumerals->say(17));
    }

    /**
     * @test
     */
    public function si_es_38_devuelve_XXXVIII()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("XXXVIII", $romanNumerals->say(38));
    }

    /**
     * @test
     */
    public function si_es_24_devuelve_XXIV()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("XXIV", $romanNumerals->say(24));
    }

    /**
     * @test
     */
    public function si_es_39_devuelve_XXXIX()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("XXXIX", $romanNumerals->say(39));
    }

    /**
     * @test
     */
    public function si_es_44_devuelve_XLIV()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("XLIV", $romanNumerals->say(44));
    }

    /**
     * @test
     */
    public function si_es_49_devuelve_IL()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("IL", $romanNumerals->say(49));
    }

    /**
     * @test
     */
    public function si_es_57_devuelve_LVII()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("LVII", $romanNumerals->say(57));
    }

    /**
     * @test
     */
    public function si_es_95_devuelve_XCV()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("XCV", $romanNumerals->say(95));
    }

    /**
     * @test
     */
    public function si_es_99_devuelve_IC()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("IC", $romanNumerals->say(99));
    }

    /**
     * @test
     */
    public function si_es_149_devuelve_CIL()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("CIL", $romanNumerals->say(149));
    }

    /**
     * @test
     */
    public function si_es_150_devuelve_CL()
    {
        // Preparación
        $romanNumerals = new RomanNumerals();

        // Ejecución

        // Comprobación
        $this->assertEquals("CL", $romanNumerals->say(150));
    }
}