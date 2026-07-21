<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'content' => $this->content,
            'cover_url' => $this->thumnail_url,
            'user_id' => $this->user_id,
            'status' => [
                'status' => $this->status->value,
                'color' => $this->status->setColor(),
            ],

            'published_at' => $this->when($this->published_at, $this->published_at),

        ];
    }
}
