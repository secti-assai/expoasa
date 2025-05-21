<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Equipe;

class AtualizarNotasMedias extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ideasun:atualizar-notas-medias';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Atualiza a nota média de todas as equipes com base nas avaliações recebidas';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Iniciando atualização das notas médias...');
        
        // Buscar todas as equipes que têm avaliações
        $equipes = Equipe::has('avaliacoes')->withCount('avaliacoes')->get();
        
        $this->output->progressStart($equipes->count());
        
        foreach ($equipes as $equipe) {
            $notaMedia = $equipe->avaliacoes()->avg('nota_total');
            
            $equipe->nota_media = $notaMedia;
            $equipe->save();
            
            $this->output->progressAdvance();
        }
        
        $this->output->progressFinish();
        
        $this->info('Atualização concluída. ' . $equipes->count() . ' equipes foram atualizadas.');
        
        return Command::SUCCESS;
    }
}
