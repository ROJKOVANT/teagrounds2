<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NewsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'subject' => $this->subject,
            'title' => $this->title,
            'content1' => $this->content1,
            'content2' => $this->content2,
            'picture' => $this->picture,
            'slug' => $this->slug,
            'paragraphs' => $this->paragraph,
        ];
    }
}
