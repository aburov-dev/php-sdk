<?php

namespace Mindbox\Tests\Responses;

use Mindbox\DTO\BalanceResponseCollection;
use Mindbox\MindboxRequest;
use Mindbox\Responses\MindboxBalanceResponse;
use PHPUnit\Framework\TestCase;

/**
 * Class MindboxBalanceResponseTest
 *
 * @package Mindbox\Tests\Responses
 */
class MindboxBalanceResponseTest extends TestCase
{
    /**
     * @var MindboxBalanceResponse
     */
    protected $response;

    public function setUp()
    {
        $this->response = new MindboxBalanceResponse(
            200,
            [],
            [
                'result' => [
                    'balances' => [

                    ],
                ],
            ],
            '',
            new MindboxRequest('', '', '', '', [])
        );
    }

    public function testGetBalances()
    {
        $this->assertInstanceOf(BalanceResponseCollection::class, $this->response->getBalances());
    }
}
