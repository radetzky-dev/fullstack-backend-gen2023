<?php

namespace Tests\Feature;

use App\Http\Controllers\FlightController;
use Mockery\MockInterface;
use Tests\TestCase;

class FlightTest extends TestCase
{

/*
public function test_single_flight(): void
{

$flightController = new FlightController();
$result = $flightController->show(5);

}
 */

    public function test_store_flight(): void
    {
        $mock = $this->mock(FlightController::class, function (MockInterface $mock) {
            $input = [31, 'name', 'airline', 'destination', 'from'];
            $mock->shouldReceive('create')->once()->with($input);
        });

        $input = [31, 'name', 'airline', 'destination', 'from'];
        $mock->create($input);

    }

}
