<template>
    <app-layout title="Crear contenidos">

        <div>Añadir nuevo local</div>
        <form @submit.prevent="submit">
            <label for="name">Nombre del local</label>
            <input v-model="name" type="text" />

            <label for="address">Dirección del local</label>
            <input v-model="address" type="text" />

            <button type="submit">Enviar</button>
        </form>

        <div>Añadir salas de locales </div>

        <div>Añadir nuevas especies de animales</div>

        
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import { Inertia } from '@inertiajs/inertia';

    export default defineComponent({
        components: {
            AppLayout
        },
        methods: {
            submit(){
                Inertia.post(route('local.store'), {
                    name: this.name,
                    address: this.address,
                });
            },
        },
    })
</script>
