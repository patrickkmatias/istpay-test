<script setup>
const props = defineProps({
    candidates: Object,
});
</script>
<template>
    <section class="h-2/4 overflow-hidden">
        <h1 class="text-xl font-bold">Candidates</h1>
        <ul class="h-full bg-indigo-300 rounded-xl overflow-scroll">
            <li
                v-for="candidate in candidates"
                class="h-10 border-b-2 border-b-indigo-500 flex gap-4 items-center"
            >
                <h1 class="w-8 h-full grid place-items-center bg-indigo-400">
                    {{ candidate.id }}
                </h1>
                <p class="text-sm">{{ candidate.note.slice(0, 30) }}</p>
            </li>
            <div class="h-10 w-full"></div>
        </ul>
    </section>
</template>
