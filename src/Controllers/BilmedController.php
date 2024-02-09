<?php

namespace Beecorp\Bilmed\Controllers;
use Beecorp\Bilmed\Bilmed;
class BilmedController
{
    public function __invoke(Bilmed $bilmed) :string {
        $message=$bilmed->test('Oğuzhan Karanfil');
        return view('greeting::index', compact('message'));
    }
}
