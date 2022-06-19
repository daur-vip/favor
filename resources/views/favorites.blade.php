<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Favorite Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @php
                        $userId = Illuminate\Support\Facades\Auth::id();
                        $user = App\Models\User::find($userId);
                        $contacts = $user->contacts;
                    @endphp

                    @if (sizeof($contacts) == 0)
                        <p class="text-slate-500">No favorite contacts</p>
                    @else
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
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <div
                                    class="absolute inset-0 pointer-events-none border border-black/5 rounded-xl dark:border-white/5">
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
