<?php

namespace Modules\Cms\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class CommitteeMemberResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
			'designation' => $this->designation,
			'bio' => $this->bio,
			'email' => $this->email,
			'phone' => $this->phone,
			'mobile' => $this->mobile,
			'fax' => $this->fax,
			'facebook' => $this->facebook,
			'twitter' => $this->twitter,
			'linkedin' => $this->linkedin,
			'committee_category_id' => $this->committee_category_id,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y')
        ];
    }
}
