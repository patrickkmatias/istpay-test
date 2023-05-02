import { router, usePage } from "@inertiajs/vue3";
import { defineStore } from "pinia";
import { computed, ref, watch } from "vue";

export const useJobsStore = defineStore("jobs", () => {
    const jobs = computed(() => usePage().props.jobs);

    const filters = ref(usePage().props.filters);

    const selectJobs = ref(false);

    const selectedJobs = ref([]);

    function toggleSelectJobs() {
        selectJobs.value = !selectJobs.value;
    }

    function selectJob(id) {
        const ids = selectedJobs.value;
        const existentId = ids.includes(id);
        if (existentId) return ids.splice(ids.indexOf(id), 1);
        return ids.push(id);
    }

    function updateJobs() {
        return router.visit(route("jobs.list"), {
            only: ["jobs", "filters"],
            data: filters.value,
            preserveScroll: true,
        });
    }

    function deleteJobs() {
        if (!selectedJobs.value) return;
        const ids = selectedJobs.value.toString();
        return router.visit(route("jobs.destroy", ids), {
            method: "delete",
            onSuccess: () => {
                selectedJobs.value = [];
                router.reload({ only: ["jobs"] });
            },
            preserveState: true,
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

    return {
        jobs,
        filters,
        selectJobs,
        selectedJobs,
        updateJobs,
        toggleSelectJobs,
        selectJob,
        deleteJobs,
    };
});
