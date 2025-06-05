<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use SkuzKo\PhpEmailOpenBotDetection\EmailOpenBotDetector;

class EmailOpenBotDetectorTest extends TestCase
{
    /**
     * @dataProvider dataProviderTestSuccess
     */
    public function testSuccess(string $userAgent, bool $expected): void
    {
        $detector = new EmailOpenBotDetector();
        $actual = $detector::isBot($userAgent);

        $this->assertEquals($expected, $actual);
    }

    public static function dataProviderTestSuccess(): array
    {
        return [
            [
                'userAgent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36 Edge/12.246 Mozilla/5.0',
                'expected' => true,
            ],
            [
                'userAgent' => 'python-requests/2.26.0',
                'expected' => true,
            ],
            [
                'userAgent' => 'GoogleImageProxy',
                'expected' => true,
            ],
            [
                'userAgent' => 'YahooMailProxy',
                'expected' => true,
            ],
            [
                'userAgent' => 'OutlookImageProxy',
                'expected' => true,
            ],
            [
                'userAgent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36',
                'expected' => false,
            ],
            [
                'userAgent' => '',
                'expected' => true,
            ]
        ];
    }
}
