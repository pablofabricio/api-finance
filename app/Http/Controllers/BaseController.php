<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController implements BaseControllerInterface
{
    protected $service;

    public function all()
    {
        return $this->service->all();
    }

    public function find(string $id)
    {
        return $this->service->find($id);
    }
    
    public function destroy(string $id)
    {
        $this->service->destroy($id);

        return response()->json(null, 204);
    }

    public function create(Request $request)
    {
        $resource = $this->service->create($request->all());

        return response()->json($resource, 201);
    }

    public function update(Request $request)
    {
        $resource = $this->service->create($request->all());

        return response()->json($resource, 201);
    }
}
