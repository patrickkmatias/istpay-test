<script setup>
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import Checkbox from "@/Components/Checkbox.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import CreateJobForm from "./Partials/CreateJobForm.vue";
import JobPost from "@/Components/JobPost.vue";
import { router } from "@inertiajs/vue3";
import { ref, watch } from "vue";

const showCreateForm = ref(false);

const toggleCreateForm = () => (showCreateForm.value = !showCreateForm.value);

const { filters, jobs } = defineProps({
    filters: Object,
    jobs: Object,
});

const data = () => console.log({ filters, jobs });

function updateJobs() {
    return router.visit(route("jobs.list"), {
        only: ["jobs", "filters"],
        data: filters,
    });
}

let searchTimeout = null;

watch(
    () => ({ ...filters }),
    async (updated, old) => {
        if (updated.query !== old.query || searchTimeout) {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => updateJobs(), 1200);
            return;
        }
        return updateJobs();
    }
);
</script>
<template>
    <section class="p-8">
        <PrimaryButton type="button" @click="toggleCreateForm()" class="mb-4"
            >create new job post</PrimaryButton
        >
        <Transition
            enter-from-class="opacity-0"
            leave-to-class="opacity-0"
            class="transition duration-500 ease-in-out"
        >
            <CreateJobForm v-if="showCreateForm" class="mb-4" />
        </Transition>
        <div>
            <InputLabel for="search">Search</InputLabel>
            <TextInput
                id="search"
                type="text"
                class="mt-1 block w-full"
                minlength="3"
                v-model="filters.query"
            />
            query value {{ filters.query }}
        </div>
        <div class="block mt-4">
            <label class="flex items-center">
                <Checkbox name="paused" v-model:checked="filters.paused" />
                <span class="ml-2 text-sm text-gray-600">Show paused jobs</span>
            </label>
            checkbox value {{ filters.paused }}
        </div>
        <div>
            <InputLabel for="jobsPerPage">Jobs per page</InputLabel>
            <select name="jobsPerPage" v-model="filters.per_page">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
            </select>
            per page value {{ filters.per_page }}
        </div>
        <div>
            <InputLabel for="jobType">Job types</InputLabel>
            <select name="jobType" v-model="filters.type">
                <option :value="null" selected>All</option>
                <option value="CLT">CLT</option>
                <option value="Contractor">Contractor</option>
                <option value="Freelance">Freelance</option>
            </select>
            job type value {{ filters.type }}
        </div>
        <PrimaryButton @click="data">console.log</PrimaryButton>
        <p>Jobs quantity {{ jobs.data.length }}</p>
        <div>
            <JobPost v-for="job in jobs.data" :job="job" class="mb-6" />
        </div>
    </section>
</template>
