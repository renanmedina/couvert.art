<?php
namespace App\Frontend\Components;

use Livewire\Component;

class About extends Component {

    public function render() {
        return <<<'blade'
            <section class="py-24 px-6">
                <div class="container mx-auto">
                    <div class="max-w-3xl mx-auto text-center">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4">Sobre nós</h2>
                        <p class="text-lg mb-8">Couver.art é uma plataforma revolucionária projetada exclusivamente para artistas de cover, bandas e músicos que desejam se conectar com sua audiência como nunca antes.</p>
                        <ul class="text-left mb-8">
                            <li class="mb-2"><span class="font-bold">Pedidos de Músicas em Tempo Real:</span> Receba instantaneamente pedidos de músicas do seu público durante apresentações ao vivo.</li>
                            <li class="mb-2"><span class="font-bold">Setlists Personalizáveis:</span> Prepare e organize seus setlists com base nas preferências e pedidos da audiência.</li>
                            <li class="mb-2"><span class="font-bold">Ferramentas de Engajamento com o Público:</span> Interaja com seus fãs através de chat, enquetes e anúncios especiais.</li>
                            <li class="mb-2"><span class="font-bold">Análises de Performance:</span> Obtenha insights sobre as preferências da audiência e a popularidade das músicas para aprimorar suas apresentações.</li>
                        </ul>
                        <a href="#" class="bg-green-500 hover:bg-green-600 text-white py-3 px-6 rounded-full text-lg font-bold uppercase">Saiba Mais</a>
                    </div>
                </div>
            </section>
        blade;
    }
};
