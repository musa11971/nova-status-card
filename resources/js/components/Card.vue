<template>
    <card class="relative px-6 py-4 overflow-y-scroll">
        <div class="flex mb-4">
            <h3 class="mr-3 text-base text-80 font-bold block">{{ this.card.title }}</h3>
        </div>

        <!-- Display the items -->
        <div class="pb-4">
            <div v-for="item in this.card.items" :key="item.name" class="block flex justify-between">
                <span class="text-xs text-80 leading-normal">{{ item.name }}</span>

                <span v-if="item.value === null" class="select-none" :title="card.localize.noDataString">—</span>

                <span v-else-if="item.type === 'string'" class="text-xs">{{ item.value }}</span>

                <span v-else-if="item.type === 'percentage'" class="text-xs">{{ item.value }}%</span>

                <span v-else-if="item.type === 'statusIndicator'" :title="item.value.hint">
                    <svg v-if="item.value.status === 'ok'" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                    <svg v-if="item.value.status === 'danger'" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-danger" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                    <svg v-if="item.value.status === 'risky'" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-warning-dark" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                    <svg v-if="item.value.status === null" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                </span>
            </div>
        </div>
    </card>
</template>

<script>
export default {
    props: ['card']
}
</script>
