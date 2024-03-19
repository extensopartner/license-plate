<?php
use Intrepidity\LicensePlate\LuxembourgianLicensePlate;

class LuxembourgianLicensePlateFormatTest extends \PHPUnit\Framework\TestCase
{
    public function testFormat()
    {
        $licenseplate = new LuxembourgianLicensePlate('A1234');
        $this->assertTrue($licenseplate->isValid());
        $this->assertEquals($licenseplate->format(), 'A 1234');

        $licenseplate = new LuxembourgianLicensePlate('AB123');
        $this->assertTrue($licenseplate->isValid());
        $this->assertEquals($licenseplate->format(), 'AB 123');

        $licenseplate = new LuxembourgianLicensePlate('AB1234');
        $this->assertTrue($licenseplate->isValid());
        $this->assertEquals($licenseplate->format(), 'AB 1234');

        $licenseplate = new LuxembourgianLicensePlate('9999');
        $this->assertTrue($licenseplate->isValid());
        $this->assertEquals($licenseplate->format(), '9999');

        $licenseplate = new LuxembourgianLicensePlate('99999');
        $this->assertTrue($licenseplate->isValid());
        $this->assertEquals($licenseplate->format(), '99999');

        $licenseplate = new LuxembourgianLicensePlate('19');
        $this->assertTrue($licenseplate->isValid());
        $this->assertEquals($licenseplate->format(), '19');

        $licenseplate = new LuxembourgianLicensePlate('CD19');
        $this->assertTrue($licenseplate->isValid());
        $this->assertEquals($licenseplate->format(), 'CD 19');

        $licenseplate = new LuxembourgianLicensePlate('50');
        $this->assertTrue($licenseplate->isValid());
        $this->assertEquals($licenseplate->format(), '50');

        $licenseplate = new LuxembourgianLicensePlate('CD50');
        $this->assertTrue($licenseplate->isValid());
        $this->assertEquals($licenseplate->format(), 'CD 50');
    }
}