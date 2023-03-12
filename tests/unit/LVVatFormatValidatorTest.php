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
                'vatNumber' => 'LV12345678901',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'LV11111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'LV00000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'LV99999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '12345678901',
                'isValid' => true,
            ],
            [
                'vatNumber' => '00000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '11111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '99999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'LV123456789011',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'LV1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => '123456789011',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE12345678901',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
        ];
    }
}
