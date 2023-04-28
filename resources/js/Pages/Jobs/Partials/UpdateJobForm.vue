<script setup>
import InputLabel from "@/Components/InputLabel.vue";
import InputError from "@/Components/InputError.vue";
import TextInput from "@/Components/TextInput.vue";
import Checkbox from "@/Components/Checkbox.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { useForm, usePage } from "@inertiajs/vue3";
import { computed } from "vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";

const { job } = defineProps({
    job: Object,
});

const emit = defineEmits(["close"]);

const form = useForm({
    title: job.title,
    description: job.description,
    type: job.type,
    paused: !!job.paused,
});

const updated = computed(() => usePage().props.updated);

function submit() {
    return form.patch(route("jobs.update", job.id), {
        only: ["updated"],
    });
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
            <InputError class="mt-2" :message="form.errors.description" />
        </div>

        <div class="mb-4">
            <InputLabel for="type">Job type</InputLabel>
            <select
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                name="type"
                v-model="form.type"
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
                <span class="ml-2 text-sm text-gray-600">Pause job</span>
            </label>
        </div>

        <div class="flex items-center gap-4 flex-row-reverse">
            <PrimaryButton
                class="bg-indigo-800 border-indigo-900 hover:bg-indigo-900 focus:bg-indigo-900 active:bg-indigo-900"
                >Submit</PrimaryButton
            >
            <SecondaryButton
                @click="emit('close')"
                type="button"
                class="bg-indigo-100 !border-0 hover:bg-indigo-300"
                >Return</SecondaryButton
            >
        </div>
        <Transition
            enter-from-class="opacity-0"
            leave-to-class="opacity-0"
            class="transition duration-500 ease-in-out"
        >
            <p
                v-if="form.wasSuccessful"
                class="text-sm text-gray-600 mt-4 text-center"
            >
                Job updated successfuly! <br />
                Refresh the main page to see the effects.
            </p>
        </Transition>
    </form>
</template>
