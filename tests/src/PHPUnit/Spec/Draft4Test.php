<?php

namespace Swaggest\JsonSchemaBench\Tests\PHPUnit\Spec;


class Draft4Test extends SchemaTestSuite
{
    protected function skipTest($name)
    {
        return false;
    }


    public function specOptionalProvider()
    {
        $path = __DIR__ . '/../../../../spec/JSON-Schema-Test-Suite/tests/draft4/optional';
        return $this->provider($path);
    }

    public function specProvider()
    {
        $path = __DIR__ . '/../../../../spec/JSON-Schema-Test-Suite/tests/draft4';
        return $this->provider($path);
    }

    public function specAjvProvider()
    {
        $path = __DIR__ . '/../../../../spec/ajv/spec/tests/schemas';
        return $this->provider($path);
    }

}