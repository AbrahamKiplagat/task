<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <h2>{{ __("You're logged in!") }}</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h3 class="text-lg font-semibold mb-4">Good Morning, </h3>

                <p>Welcome to your personalized dashboard. Here, you can manage your tasks and stay organized. Feel free to explore the features available:</p>

                <ul class="list-disc ml-8">
                    <li>Add tasks to your task list.</li>
                    <li>Stay updated with important reminders.</li>
                    <li>Customize your preferences in the settings.</li>
                </ul>

                <p>If you have any questions or need assistance, don't hesitate to reach out. Enjoy your day!</p>

                <hr class="my-6">

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- Upcoming Events Card -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                        <h3 class="text-lg font-semibold mb-4">Upcoming Events</h3>
                        <ul class="list-disc ml-4">
                            <li>Team Meeting - Tomorrow at 10 AM</li>
                            <li>Project Deadline - Next Week</li>
                            <li>Training Session - Next Month</li>
                        </ul>
                    </div>

                    <!-- Recent Activities Card -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                        <h3 class="text-lg font-semibold mb-4">Recent Activities</h3>
                        <ul class="list-disc ml-4">
                            <li>Completed Task: Update User Profile</li>
                            <li>Added new project to the task list</li>
                            <li>Reviewed and approved expense reports</li>
                        </ul>
                    </div>
                </div>

                <hr class="my-6">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- User Notifications -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                        <h3 class="text-lg font-semibold mb-4">Notifications</h3>
                        <ul class="list-disc ml-4">
                            <li>New message from [Sender]</li>
                            <li>Task deadline approaching</li>
                            <li>System update scheduled</li>
                        </ul>
                    </div>

                    <!-- Statistics Widget -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                        <h3 class="text-lg font-semibold mb-4">Statistics</h3>
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-xl font-semibold">Total Tasks</p>
                                <p class="text-gray-600">25 tasks</p>
                            </div>
                            <div>
                                <p class="text-xl font-semibold">Completed Tasks</p>
                                <p class="text-gray-600">15 tasks</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
