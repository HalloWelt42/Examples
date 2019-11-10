<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 14.04.19
 * Time: 19:31
 */

namespace arrays;

class ExampleArrayStadard
{
  /**
   * ExampleArrayObject constructor.
   */
  public function __construct()
  {


    /**
     * Definition eines Arrays in PHP
     */
    $zutaten = [
        'Teigboden' => 1,
        'Tomaten' => 3,
        'Pilze' => 12,
        'Käsestück' => 2
    ];


    /**
     * Ausgabemöglichkeit für einfache Arrays
     */
    print_r(
        $zutaten['Tomaten'] . PHP_EOL
    );


    /**
     * Methoden auf Array anwenden
     */
    ksort(
        $zutaten
    );

    print_r(
        $zutaten
    );


  }

}