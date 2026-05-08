<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FocoResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "nivel de foco" => $this->nivel_foco,
            "tempo" => $this->tempo_minutos,
            "Descrição" => $this->descricao,
            "data" => $this->data,

        ]
    }
}
