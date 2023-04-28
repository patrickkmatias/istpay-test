<script setup>
import SecondaryButton from "./SecondaryButton.vue";
import Modal from "./Modal.vue";
import { ref } from "vue";
import JobPostDetail from "./JobPostDetail.vue";

const { job } = defineProps({
    job: Object,
});

const showModal = ref(false)

const toggleModal = () => showModal.value = !showModal.value

const closeModal = () => showModal.value = false

function getDescription() {
    return job.description.length > 100
        ? job.description.slice(0, 130) + "..."
        : job.description;
}

const test = () => console.log(job.description);
</script>
<template>
    <article
        class="p-4 border-4 rounded-xl shadow-lg bg-indigo-200 border-indigo-400 hover:shadow-xl transition-all duration-500"
    >
        <h1 class="text-xl font-bold">{{ job.title }}</h1>
        <h2 class="text-lg font-medium">{{ job.type }}</h2>
        <p class="py-2">{{ getDescription() }}</p>
        <section class="flex gap-2 mt-2">
            <SecondaryButton
                @click="toggleModal()"
                type="button"
                class="bg-indigo-100 border-indigo-300 hover:bg-indigo-300"
                >Read more</SecondaryButton
            >
        </section>
        <Modal :show="showModal" @close="closeModal">
            <JobPostDetail :job="job" @close="closeModal"></JobPostDetail>
        </Modal>
    </article>
</template>
