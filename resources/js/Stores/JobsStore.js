import { router, usePage } from "@inertiajs/vue3";
import { defineStore } from "pinia";
import { computed, ref, watch } from "vue";

export const useJobsStore = defineStore("jobs", () => {
    const jobs = computed(() => usePage().props.jobs);

    const filters = ref(usePage().props.filters);

    function updateJobs() {
        return router.visit(route("jobs.list"), {
            only: ["jobs", "filters"],
            data: filters.value,
            preserveScroll: true,
        });
    }

    let searchTimeout = null;

    watch(
        () => ({ ...filters.value }),
        async (updated, old) => {
            if (updated.query !== old.query || searchTimeout) {
                clearTimeout(searchTimeout);
                searchTimeout = setTimeout(() => updateJobs(), 1200);
                return;
            }
            return updateJobs();
        }
    );

    return { jobs, filters, updateJobs };
});
