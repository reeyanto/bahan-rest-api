<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
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
            'content'       => $this->content,
            'author'        => $this->author,
            'external_link' => $this->external_link,
            'image'         => $this->image,
            'views'         => $this->views,
        ];
    }
}
