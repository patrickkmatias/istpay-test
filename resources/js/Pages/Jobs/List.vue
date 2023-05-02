<script setup>
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import Checkbox from "@/Components/Checkbox.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import CreateJobForm from "./Partials/CreateJobForm.vue";
import JobPost from "@/Components/JobPost.vue";
import ListFooter from "./Partials/ListFooter.vue";
import { ArrowPathIcon, Squares2X2Icon } from "@heroicons/vue/24/outline";
import { useJobsStore } from "@/Stores/JobsStore";
import { storeToRefs } from "pinia";
import { ref } from "vue";

const store = useJobsStore();

const { jobs, filters } = storeToRefs(store);

const showCreateForm = ref(false);

const showSelectJob = ref(false);

const selectedJobs = ref([]);

const toggleCreateForm = () => (showCreateForm.value = !showCreateForm.value);

const toggleSelectPost = () => (showSelectJob.value = !showSelectJob.value);

function selectJob(id) {
    let ids = selectedJobs.value;
    const existentId = ids.indexOf(id);

    existentId ? ids.push(id) : ids.splice(existentId, 1);
    console.log(selectedJobs.value, existentId)
}
</script>
<template>
    <section class="p-8 relative">
        <section class="px-2">
            <PrimaryButton
                type="button"
                @click="toggleCreateForm()"
                class="mb-4"
                >Create new job post</PrimaryButton
            >
            <Transition
                enter-from-class="opacity-0"
                leave-to-class="opacity-0"
                class="transition duration-500 ease-in-out"
            >
                <CreateJobForm v-if="showCreateForm" class="mb-4" />
            </Transition>
        </section>
        <form @submit.prevent="" class="px-2">
            <div>
                <InputLabel for="search">Search</InputLabel>
                <TextInput
                    id="search"
                    type="text"
                    class="mt-1 block w-full"
                    minlength="3"
                    autofocus
                    v-model="filters.query"
                />
            </div>
            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="paused" v-model:checked="filters.paused" />
                    <span class="ml-2 text-sm text-gray-600"
                        >Show paused jobs</span
                    >
                </label>
            </div>
            <section class="w-full flex gap-4 mt-2">
                <div>
                    <InputLabel for="jobsPerPage">Jobs per page</InputLabel>
                    <select
                        class="w-24 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                        name="jobsPerPage"
                        v-model="filters.per_page"
                    >
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                    </select>
                </div>
                <div>
                    <InputLabel for="jobType">Job type</InputLabel>
                    <select
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                        name="jobType"
                        v-model="filters.type"
                    >
                        <option :value="null" selected>All</option>
                        <option value="CLT">CLT</option>
                        <option value="Contractor">Contractor</option>
                        <option value="Freelance">Freelance</option>
                    </select>
                </div>
            </section>
        </form>
        <div class="px-2 my-6 flex justify-between items-center">
            <div class="text-sm">
                <p class="font-bold">
                    Total jobs encountered: {{ jobs.meta.total }}
                </p>
                <p
                    v-if="jobs.meta.total != jobs.data.length"
                    class="font-medium"
                >
                    Showing {{ jobs.data.length }} jobs.
                </p>
            </div>
            <div class="flex gap-2">
                <SecondaryButton
                    @click="toggleSelectPost()"
                    type="button"
                    class="!p-2 w-fit h-fit !border-0 !shadow-md"
                    ><Squares2X2Icon class="w-6 h-6 text-black"
                /></SecondaryButton>
                <SecondaryButton
                    @click="store.updateJobs()"
                    type="button"
                    class="!p-2 w-fit h-fit !border-0 !shadow-md"
                    ><ArrowPathIcon class="w-6 h-6 text-black"
                /></SecondaryButton>
            </div>
        </div>
        <div class="mt-2">
            <JobPost
                v-for="job in jobs.data"
                :job="job"
                :show-select="showSelectJob"
                @select-job="selectJob($event)"
                class="mb-6"
            />
        </div>
        <Transition
            enter-from-class="opacity-0"
            leave-to-class="opacity-0"
            class="transition duration-500 ease-in-out"
        >
            <ListFooter
                v-if="showSelectJob"
                class="fixed z-50 bottom-0 left-0"
            />
        </Transition>
    </section>
</template>
