<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FilmResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title'         => $this->title,
            'category'      => $this->category->name,
            'director'      => $this->director,
            'release_year'  => $this->release_year,
            'review'        => $this->review,
            'link'          => $this->link,
            'poster'        => $this->poster,
        ];
    }
}
