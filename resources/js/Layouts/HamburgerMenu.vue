<template>
    <div class="h-fit p-2 mt-4 border-2 border-gray-400 cursor-pointer">
        <HamburgerLine class="mb-[.35rem]"/>
        <HamburgerLine class="mb-[.35rem]" :class="{'opacity-0' : open}"/>
        <HamburgerLine />
    </div>
</template>

<script>
    import { defineComponent } from 'vue'
    import HamburgerLine from './HamburgerLine.vue';
    export default defineComponent({
        components: {
            HamburgerLine,
        },
    });
</script>
