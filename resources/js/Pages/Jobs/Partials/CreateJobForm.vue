<script setup>
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import Checkbox from "@/Components/Checkbox.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { useForm, usePage } from "@inertiajs/vue3";
import { computed } from "vue";

const form = useForm({
    title: "",
    description: "",
    type: "",
    paused: false,
});

const created = computed(() => usePage().props.created);

function submit() {
    return form.post(route("jobs.store"), { only: ["created", "jobs"] });
}
</script>
<template>
    <form @submit.prevent="submit()">
        <div class="mb-4">
            <InputLabel for="title" value="Title" />
            <TextInput
                id="title"
                v-model="form.title"
                type="text"
                class="mt-1 block w-full"
                required
                autofocus
            />
            <InputError class="mt-2" :message="form.errors.title" />
        </div>
        <div class="mb-4">
            <InputLabel for="description" value="Description" />
            <textarea
                name="description"
                id="description"
                v-model="form.description"
                cols="30"
                rows="10"
                class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
            ></textarea>
            {{ form.description }}
            <InputError class="mt-2" :message="form.errors.description" />
        </div>

        <div class="mb-4">
            <InputLabel for="type">Job type</InputLabel>
            <select
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                name="type"
                v-model="form.type"
                required
            >
                <option value="CLT" selected>CLT</option>
                <option value="Contractor">Contractor</option>
                <option value="Freelance">Freelance</option>
            </select>
            <InputError class="mt-2" :message="form.errors.type" />
        </div>

        <div class="block mb-4">
            <label class="flex items-center">
                <Checkbox name="paused" v-model:checked="form.paused" />
                <span class="ml-2 text-sm text-gray-600"
                    >Create job already as paused</span
                >
            </label>
        </div>

        <div class="flex items-center gap-4">
            <PrimaryButton>Submit</PrimaryButton>
            <Transition
                enter-from-class="opacity-0"
                leave-to-class="opacity-0"
                class="transition duration-500 ease-in-out"
            >
                <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">
                    Job created successfuly!
                </p>
            </Transition>
        </div>
    </form>
</template>
