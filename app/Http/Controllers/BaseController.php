<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BaseController implements BaseControllerInterface
{
    public function __construct(
        protected $service, 
        protected $resource
    ) 
    {
    }

    public function all()
    {
        
        return $this->resource::collection($this->service->all());
    }

    public function find(string $id)
    {
        return new $this->resource($this->service->find($id));
    }
    
    public function destroy(string $id)
    {
        $this->service->destroy($id);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }

    public function create(Request $request)
    {
        $resource = $this->service->create($request);

        return new $this->resource($resource, Response::HTTP_CREATED);
    }

    public function update(Request $request)
    {
        $resource = $this->service->create($request);

        return new $this->resource($resource, Response::HTTP_OK);
    }
}
