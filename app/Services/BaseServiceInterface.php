<?php

namespace App\Services;

use Illuminate\Http\Request;

interface BaseServiceInterface
{
    public function all();

    public function find(int $id);

    public function destroy(string $id);
    
    public function create(Request $request);
    
    public function update(Request $request);
}
