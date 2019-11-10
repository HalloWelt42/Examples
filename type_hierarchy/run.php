<?php

class Universal{}
class Exakt extends Universal{}
class Unbekannt{}

class Main{

  public function __construct( Universal $element ){
    $class_name = get_class( $element );
    echo "{$class_name} ist ein gültiger Typ." . PHP_EOL;
  }

}

new Main( new Universal() );
new Main( new Exakt() );

try{
  new Main( new Unbekannt() );
} catch (TypeError $e) {
  echo 'Unbekannt ist ein ungültiger Typ.'.PHP_EOL;
}
