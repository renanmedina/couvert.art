<?php

namespace App\Frontend\Components;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
            <nav class="bg-white p-6 shadow-lg">
                <div class="container mx-auto">
                    <a href="#" class="text-gray-900 text-xl font-bold">Couvert.art</a>
                </div>
            </nav>

            <header class="bg-cover bg-center py-24 px-6 text-center text-white" style="background-color: #34495e;">
                <div class="container mx-auto">
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">Empodere sua Audiência. Aumente sua Performance.</h1>
                    <p class="text-lg mb-8">Bem-vindo à sua ferramenta de engajamento artístico, onde a música encontra os pedidos de forma perfeita.</p>
                    <a href="#" class="bg-green-500 hover:bg-green-600 text-white py-3 px-6 rounded-full text-lg font-bold uppercase">Experimente Grátis</a>
                </div>
            </header>
        </div>
        HTML;
    }
}
