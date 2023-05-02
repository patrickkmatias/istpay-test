<script setup>
import SecondaryButton from "./SecondaryButton.vue";
import Modal from "./Modal.vue";
import { ref } from "vue";
import JobPostDetail from "./JobPostDetail.vue";
import { CheckCircleIcon, PlusCircleIcon } from "@heroicons/vue/24/outline";
import { useJobsStore } from "@/Stores/JobsStore";
import { storeToRefs } from "pinia";
import { computed } from "vue";

const store = useJobsStore();

const { selectJobs, selectedJobs } = storeToRefs(store);

const { job } = defineProps({
    job: Object,
});

const showModal = ref(false);

const isSelected = computed(() => selectedJobs.value.includes(job.id));

const toggleModal = () => (showModal.value = !showModal.value);

const closeModal = () => (showModal.value = false);

function getDescription() {
    if(!job.description) return;
    return job.description.length > 130
        ? job.description.slice(0, 130) + "..."
        : job.description;
}

const test = () => console.log(isSelected.value, selectedJobs.value);
</script>
<template>
    <article
        class="p-4 border-4 rounded-xl shadow-lg bg-indigo-200 border-indigo-400 hover:shadow-xl transition-all duration-500"
    >
        <span class="inline-flex justify-between w-full">
            <h1 class="text-xl font-bold">{{ job.title }}</h1>
            <Transition
                enter-from-class="opacity-0"
                leave-to-class="opacity-0"
                class="transition duration-500 ease-in-out"
            >
                <button
                    v-show="selectJobs"
                    @click="store.selectJob(job.id)"
                    type="button"
                    :class="`w-fit h-fit rounded-full transition-colors duration-300 ${
                        isSelected
                            ? 'bg-green-300 hover:bg-green-400'
                            : 'bg-indigo-300 hover:bg-indigo-400'
                    }`"
                >
                    <CheckCircleIcon v-if="isSelected" class="w-6 h-6" />
                    <PlusCircleIcon v-else class="w-6 h-6" />
                </button>
            </Transition>
        </span>
        <h2 class="text-lg font-medium">{{ job.type }}</h2>
        <p class="py-2">{{ getDescription() }}</p>
        <section class="flex items-end justify-between gap-3 mt-2">
            <SecondaryButton
                @click="toggleModal()"
                type="button"
                class="bg-indigo-300 border-indigo-400 hover:bg-indigo-400"
                >Read more</SecondaryButton
            >
            <p @click="toggleModal()" class="text-sm font-medium opacity-70">
                {{ job.candidates.length }} candidate{{ job.candidates.length !== 1 ? 's' : null }}
            </p>
        </section>
        <Modal :show="showModal" @close="closeModal">
            <JobPostDetail :job="job" @close="closeModal"></JobPostDetail>
        </Modal>
    </article>
</template>
