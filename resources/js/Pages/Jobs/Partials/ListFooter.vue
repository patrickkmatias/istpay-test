<script setup>
import SecondaryButton from "@/Components/SecondaryButton.vue";
import { TrashIcon } from "@heroicons/vue/24/outline";
</script>
<template>
    <footer
        class="w-full h-20 px-8 border-t-4 flex justify-between items-center bg-indigo-200 border-indigo-400 shadow-lg"
    >
        Selected quantity: {{ 0 }}
        <SecondaryButton
            @click="toggleSelectPost()"
            type="button"
            class="!p-2 w-fit h-fit border-indigo-400 bg-indigo-300 hover:bg-indigo-400 !shadow-none"
            ><TrashIcon class="w-6 h-6 text-black"
        /></SecondaryButton>
    </footer>
</template>
