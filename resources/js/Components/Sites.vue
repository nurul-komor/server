<template>
    <div>

        <div class="overflow-x-auto rounded-lg border border-gray-200">
            <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
                <thead class="ltr:text-left rtl:text-right">
                    <tr>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Name</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Date of Birth</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Role</th>
                        <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Salary</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">John Doe</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">24/05/1995</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">Web Developer</td>
                        <td class="whitespace-nowrap px-4 py-2 text-gray-700">$120,000</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    props: ['sites']
}
</script>

<style scoped></style>
