<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <Link :href="'/'">
        <img src="{{ asset('img\logo.png') }}" class="w-20 h-20" alt="Imagem">
    </Link>
</template>
