<script setup>
import { PencilIcon } from "@heroicons/vue/24/outline";
import PrimaryButton from "./PrimaryButton.vue";
import SecondaryButton from "./SecondaryButton.vue";
import UpdateJobForm from "@/Pages/Jobs/Partials/UpdateJobForm.vue";
import { ref } from "vue";

const { job } = defineProps({
    job: Object,
});

const emit = defineEmits(["close"]);

const showForm = ref(false);

const toggleForm = () => (showForm.value = !showForm.value);

const description = ref(getDescription());

const expandedDescription = ref(false);

function getDescription() {
    return job.description.length > 260
        ? job.description.slice(0, 260)
        : job.description;
}

function expandDescription() {
    description.value = job.description;
    expandedDescription.value = !expandedDescription.value
}
</script>
<template>
    <div
        class="p-4 border-8 border-indigo-400 rounded-lg bg-indigo-200 transition-all duration-500"
    >
        <UpdateJobForm v-if="showForm" :job="job" @close="toggleForm()" />
        <article v-else>
            <h1 class="text-xl font-bold">{{ job.title }}</h1>
            <h2 class="text-lg font-medium">{{ job.type }}</h2>
            <p class="py-2 text-sm whitespace-pre-wrap">
                {{ description }}
                <span
                    v-if="job.description.length > 260 && !expandedDescription"
                    @click="expandDescription()"
                    class="text-end underline opacity-70 hover:opacity-100 underline-offset-2"
                    >... show more</span
                >
            </p>
            <section class="flex gap-2 mt-2 flex-row-reverse">
                <PrimaryButton
                    type="button"
                    class="bg-indigo-800 border-indigo-900 hover:bg-indigo-900 focus:bg-indigo-900 active:bg-indigo-900"
                    >Apply</PrimaryButton
                >
                <SecondaryButton
                    @click="emit('close')"
                    type="button"
                    class="!border-0 bg-indigo-400 hover:bg-indigo-500 text-white"
                    >Close</SecondaryButton
                >
                <SecondaryButton
                    @click="toggleForm()"
                    type="button"
                    class="!p-2 w-fit h-fit !border-0 bg-indigo-400 hover:bg-indigo-500"
                    ><PencilIcon class="w-6 h-6 text-white"
                /></SecondaryButton>
            </section>
        </article>
    </div>
</template>
