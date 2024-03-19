<?php
use Intrepidity\LicensePlate\LuxembourgianLicensePlate;

class LuxembourgianLicensePlateSidecodeTest extends \PHPUnit\Framework\TestCase
{
    public function testSidecode1()
    {
        $licenseplate = new LuxembourgianLicensePlate('A1234');
        $this->assertEquals($licenseplate->getSidecode(), 1);
        $this->assertTrue($licenseplate->isValid());
    }

    public function testSidecode2()
    {
        $licenseplate = new LuxembourgianLicensePlate('AA123');
        $this->assertEquals($licenseplate->getSidecode(), 2);
        $this->assertTrue($licenseplate->isValid());
    }

    public function testSidecode3()
    {
        $licenseplate = new LuxembourgianLicensePlate('AA1234');
        $this->assertEquals($licenseplate->getSidecode(), 3);
        $this->assertTrue($licenseplate->isValid());
    }
    public function testSidecode4()
    {
        $licenseplate = new LuxembourgianLicensePlate('1234');
        $this->assertEquals($licenseplate->getSidecode(), 4);
        $this->assertTrue($licenseplate->isValid());
    }
    public function testSidecode5()
    {
        $licenseplate = new LuxembourgianLicensePlate('12345');
        $this->assertEquals($licenseplate->getSidecode(), 5);
        $this->assertTrue($licenseplate->isValid());
    }
    public function testSidecode6()
    {
        $licenseplate = new LuxembourgianLicensePlate('19');
        $this->assertEquals($licenseplate->getSidecode(), 6);
        $this->assertTrue($licenseplate->isValid());
    }
    public function testSidecode7()
    {
        $licenseplate = new LuxembourgianLicensePlate('CD19');
        $this->assertEquals($licenseplate->getSidecode(), 7);
        $this->assertTrue($licenseplate->isValid());
    }
    public function testSidecode8()
    {
        $licenseplate = new LuxembourgianLicensePlate('50');
        $this->assertEquals($licenseplate->getSidecode(), 8);
        $this->assertTrue($licenseplate->isValid());
    }
    public function testSidecode9()
    {
        $licenseplate = new LuxembourgianLicensePlate('CD50');
        $this->assertEquals($licenseplate->getSidecode(), 9);
        $this->assertTrue($licenseplate->isValid());
    }
}