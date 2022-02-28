<template>
    {{ users }}
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import { Inertia } from '@inertiajs/inertia';

    export default defineComponent({
        props: ['users'],
        components: {
            AppLayout
        },
    })
</script>
