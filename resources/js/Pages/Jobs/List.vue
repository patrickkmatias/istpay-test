<script setup>
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import Checkbox from "@/Components/Checkbox.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { router } from "@inertiajs/vue3";
import { watch } from "vue";

const { filters, jobs } = defineProps({
    filters: Object,
    jobs: Object,
});

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

const data = () => console.log({ filters, jobs });
</script>
<template>
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
        <InputLabel for="jobType">Jobs type</InputLabel>
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
        <div v-for="job in jobs.data" class="border-2">
            <h1 class="text-xl font-bold">{{ job.title }}</h1>
            <h2 class="text-lg font-medium">{{ job.type }}</h2>
            <p>{{ job.description }}</p>
        </div>
    </div>
</template>
