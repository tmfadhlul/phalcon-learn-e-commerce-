<?php

use Phalcon\Mvc\Controller;

class HelloController extends Controller {
  function edit($name) {
    echo "Haii $name!";
  }
}
