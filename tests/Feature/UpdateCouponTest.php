<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UpdateCouponTest extends TestCase
{

    use WithFaker;

    private $attributes = [];

    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->setBaseRoute('coupons');
        $this->setBaseModel('App\Models\Coupon');

        $this->attributes = [
            'description' => $this->faker->sentence
        ];
    }

    /** @test */
    public function a_user_can_update_coupon()
    {
        $this->signIn();
        $this->update($this->attributes);
    }

}