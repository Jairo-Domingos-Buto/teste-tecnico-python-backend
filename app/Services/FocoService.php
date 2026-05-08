<?php

namespace App\Services;
use App\Repositories\FocoRepository;
use App\Models\Foco;
use Illuminate\Support\Facades\DB;

class FocoService
{
    public function __construct(protected FocoRepository $repository) {}

    public function create(array $data): Foco
    {
        return DB::transaction(fn() => $this->repository->create($data));
    }

    public function diagnostic(): array
    {
        $diagnosticos = $this->repository->diagnostic();

        if ($diagnosticos->isEmpty()) {
            throw new \Exception("Nenhum registro encontrado para gerar diagnóstico.", 404);
        }

        $mediaFoco = $diagnosticos->avg("nivel_foco");
        $tempoTotal = $diagnosticos->sum("tempo_minutos");
        $totalSessoes = $diagnosticos->count();
        $mediaTempo = $tempoTotal / $totalSessoes;

        return [
            "estatisticas" => [
                "media_foco" => round($mediaFoco, 2),
                "media_tempo" => round($mediaTempo, 2),
                "total_sessoes" => $totalSessoes,
            ],
            "diagnóstico" => $this->gerarFeedback($mediaFoco),
        ];
    }

    private function gerarFeedback(float $media): string
    {
        if ($media >= 4) {
            return "Você está em uma maratona produtiva de alto nível!";
        } elseif ($media >= 3) {
            return "Você está em uma maratona produtiva de nível médio.";
        } else {
            return "Você está em uma maratona produtiva de baixo nível. Sugerimos pausas mais longas e menos notificações.";
        }
    }
}
