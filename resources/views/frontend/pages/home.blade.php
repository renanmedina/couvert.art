@extends('frontend.layouts.public')

@section('content')
    <livewire:header />
    <!-- Seção Sobre -->
    <livewire:about />
    <!-- Seção de Recursos -->
    <livewire:features />
    <!-- Seção de Chamada para Ação -->
    <section class="py-24 px-6">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Junte-se ao couver.art e transforme suas apresentações!</h2>
            <a href="#" class="bg-green-500 hover:bg-green-600 text-white py-3 px-8 rounded-full text-lg font-bold uppercase">Experimente Grátis</a>
        </div>
    </section>
    <!-- Rodapé -->
    <livewire:footer />
@endsection
