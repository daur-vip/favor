<div class="mt-4 -mb-3">
    <div class="not-prose relative bg-slate-50 rounded-xl overflow-hidden dark:bg-slate-800/25">
        <div class="relative rounded-xl overflow-auto">
            <div class="shadow-sm overflow-hidden my-8">
                <table class="border-collapse table-auto w-full text-sm">
                    <thead>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Name</th>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Email</th>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Phone</th>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Address</th>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pr-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                Favorites</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-slate-800">
                        @foreach ($contacts as $contact)
                            <tr>
                                <td
                                    class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                    {{ $contact->name }}</td>
                                <td
                                    class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">
                                    {{ $contact->email }}</td>
                                <td
                                    class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                    {{ $contact->phone }}</td>
                                <td
                                    class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                    {{ $contact->address }}</td>
                                <td
                                    class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-slate-500 dark:text-slate-400">
                                    <input wire:model="inFavorites" value="{{ $contact->id }}" type="checkbox" />
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="absolute inset-0 pointer-events-none border border-black/5 rounded-xl dark:border-white/5">
        </div>
    </div>
</div>
