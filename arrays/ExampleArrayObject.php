<?php
/**
 * Created by PhpStorm.
 * User: alpha
 * Date: 14.04.19
 * Time: 17:55
 */


namespace arrays;

use ArrayObject;

/**
 * Class ExampleArrayObject
 * @package arrays
 */
class ExampleArrayObject
{


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
     * Objektifizierung des definierten Arrays ( Array-Wrapping )
     */
    $zutaten_obj = new ArrayObject($zutaten);


    /**
     * Diese Option ermöglicht die Nutzung des Array wie Objekt-Properties
     *
     */
    $zutaten_obj->setFlags(ArrayObject::ARRAY_AS_PROPS);


    print_r('Anzahl der Käsestücke für meine Pizza: ');
    /**
     * Ausgabemöglichkeiten:
     *
     *      kompartibler Aufruf, wie bei einem Standard-Array
     *
     */
    print_r(
        $zutaten_obj['Käsestück']
    );
    print_r(PHP_EOL);


    print_r('Anzahl der Käsestücke für meine Pizza ( über Properties ): ');
    /**
     * Array-Keys als Propperty
     */
    print_r(
        $zutaten_obj->Käsestück
    );
    print_r(PHP_EOL);


    /**
     *
     */
    print_r(
        "Anzahl der Elemente unserer Zutatenliste : {$zutaten_obj -> count ()} \n"
    );


  }


}