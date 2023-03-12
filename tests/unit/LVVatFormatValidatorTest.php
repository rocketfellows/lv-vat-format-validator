<?php

namespace rocketfellows\LVVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;

class LVVatFormatValidatorTest extends TestCase
{
    /**
     * @var LVVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new LVVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber',
                'isValid',
            ],
        ];
    }
}
