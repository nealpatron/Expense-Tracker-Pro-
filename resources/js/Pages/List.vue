<script setup>
defineProps({ trans: Array })
</script>

<template>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mx-52 mt-12">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Transaction
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Amount
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700" v-for="tran in trans" :key="tran.id">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ tran.date }}
                        </th>
                        <td class="px-6 py-4">
                            {{ tran.name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ tran.amount }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
</template>