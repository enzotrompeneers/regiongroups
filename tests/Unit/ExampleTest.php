<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Portfolio;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $first = factory(Portfolio::class)->create();
        $second = factory(Portfolio::class)->create([
            'created_at' => \Carbon\Carbon::now()->subMonth()->setLocale('nl')
        ]);

        $portfolio = Portfolio::groupCities();

        $this->assertEquals(2, $portfolio);
    }
}
