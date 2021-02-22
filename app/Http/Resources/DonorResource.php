<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DonorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'          => $this->id,
            'name'        => $this->name,
            'age'         => $this->age,
            'sex'         => $this->sex,
            'blood_group' => $this->blood_group,
            'location'    => $this->location,
            'phone'       => $this->phone,
        ];
    }
}
