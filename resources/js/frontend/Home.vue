<script setup>
import Header from './components/Header.vue';
import About from './components/About.vue';
import Features from './components/Features.vue';
import Footer from './components/Footer.vue';
</script>

<template>
 <body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <Header />
    <!-- Seção Sobre -->
    <About />
    <!-- Seção de Recursos -->
    <Features />
    <!-- Seção de Chamada para Ação -->
    <section class="py-24 px-6">
        <div class="container mx-auto text-center">
          <h2 class="text-3xl md:text-4xl font-bold mb-4">Junte-se ao couver.art e transforme suas apresentações!</h2>
          <a href="#" class="bg-green-500 hover:bg-green-600 text-white py-3 px-8 rounded-full text-lg font-bold uppercase">Experimente Grátis</a>
        </div>
    </section>
    <!-- Rodapé -->
    <Footer />  
  </body>
</template>