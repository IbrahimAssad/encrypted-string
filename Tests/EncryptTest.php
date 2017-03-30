<?php

namespace IbrahimAssad\Encrypted\Tests;

require_once __DIR__ . '../../src/Constants.php';
require_once __DIR__ . '../../src/Encrypt.php';

use IbrahimAssad\Encrypted\Encrypt;
use PHPUnit\Framework\TestCase;

/**
 * Class EncryptTest
 *
 * @package IbrahimAssad\Encrypted\Tests
 */
class EncryptTest extends TestCase
{
    /**
     * DESC
     *
     * @author Ibrahim Assad <Ibrahim.assad@tajawal.com>
     *
     */
    public function testRun()
    {

        $test = new Encrypt("ibrahim");
        $this->assertTrue($test->doEncrypt("ibrahim"));
        $this->assertTrue($test->doEncrypt("mIbrahid"));
        $this->assertTrue($test->doEncrypt("irahimb"));
        $this->assertTrue($test->doEncrypt("ibrahimasda"));
        $this->assertTrue($test->doEncrypt("asdasibrahim"));
        $this->assertTrue($test->doEncrypt("asaaaibrahimdddddddsadasdas"));

        $test = new Encrypt("fcd");
        $this->assertFalse($test->doEncrypt("abcdef"));
        $this->assertFalse($test->doEncrypt("abcdef"));


    }


//    public function testReadFromFile()
//    {
//
//
//        $data            = file(__DIR__ . "/data/data.in", FILE_IGNORE_NEW_LINES);
//        $expectedResults = file(__DIR__ . "/data/data.out", FILE_IGNORE_NEW_LINES);
//
//        for ($itemIndex = 0; $itemIndex < count($data); $itemIndex++) {
//            $lineToken = $data[$itemIndex++];
//            $lineKey  = $data[$itemIndex];
//            $test     = new Encrypt($lineKey);
//
//            $expected = $expectedResults[$itemIndex / 2];
//
//            echo $lineKey . " " . $lineToken . " = " . $expected.PHP_EOL;
//
//            if ($expected == "YES") {
//                $this->assertTrue($test->doEncrypt($lineToken));
//            } else {
//                $this->assertFalse($test->doEncrypt($lineToken));
//            }
//        }
//    }
}