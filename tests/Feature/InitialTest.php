<?php
namespace Tests;

use App\Modules\Advertisement_Package\src\Http\Requests\StoreRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StoreRequestTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function testValidationRules()
    {
        $request = new StoreRequest();

        $this->assertEquals([
            'title' => ['required', 'string', 'max:255'],
        ], $request->rules());
    }

    public function testValidationMessages()
    {
        $request = new StoreRequest();

        $this->assertEquals([
            'title.max' => __('Заголовок не должен превышать :max символов'),
        ], $request->messages());
    }
}
