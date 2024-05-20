<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

interface BaseControllerInterface
{
    public function all();

    public function find(string $id);

    public function destroy(string $id);

    public function create(Request $request);

    public function update(Request $request);
}
