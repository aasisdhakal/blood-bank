<?php

namespace App\Http\Controllers;

use App\Http\Filters\DonorFilter;
use App\Http\Requests\DonorRequest;
use App\Http\Resources\DonorResource;
use App\Models\Donor;

class DonorController extends Controller
{
    
    public function index(DonorFilter $filter, Donor $donor)
    {
        $donor = $donor->filter($filter)->get();
    
        return $this->respond(DonorResource::collection($donor));
        
    }
    
    public function show( Donor $donor, int $id)
    {
        $donor = $donor->findorfail($id);
        
        return $this->respond($donor);
        
    }
    
    public function create(DonorRequest $request, Donor $donor)
    {
        
        $validated = $request->validated();
        
        $donor = $donor->create($validated);
        
        return $this->setMessage('Donor successfully created')->created(new DonorResource($donor));
        
    }
    
    public function update(DonorRequest $request, Donor $donor, $id)
    {
        $donor = $donor->findorfail($id);
        $donor->update($request->validated());
        
        return $this->updated(new DonorResource($donor));
    }
    
    public function destroy(Donor $donor, $id)
    {
        $donor = $donor->findOrFail($id);
        
        $donor->delete();
        
        return $this->deleted();
    }
    
    
}
