import { router, usePage } from "@inertiajs/vue3";
import { defineStore } from "pinia";
import { computed, ref } from "vue";

export const useCandidateStore = defineStore("candidate", () => {
    const candidate = ref(usePage().props.candidate)

    const lastApply = computed(() => usePage().props.candidate.last_apply)

    function apply(jobId) {
        return router.visit(route('candidates.apply', jobId), {
            method: 'post',
            preserveState: true
        })
    }

    function unapply(jobId) {
        return router.visit(route('candidates.unapply', jobId), {
            method: 'post',
            preserveState: true
        })
    }

    return { candidate, lastApply, apply, unapply };
});
