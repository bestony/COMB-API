<?php

use Bestony\Comb\Http;

class HttpTest extends PHPUnit_Framework_TestCase {

  public function testDoRequest()
  {
    $http = new Http;
    $this->assertTrue($http->doRequest());
  }

}