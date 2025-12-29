<div class="min-h-screen bg-linear-to-br from-gray-50 via-slate-50 to-gray-100">
    <!-- Flash Messages -->
    @if (session('message'))
        <div class="fixed top-20 right-4 z-50 max-w-md notification-enter pointer-events-auto flex items-center gap-3 px-5 py-4 rounded-xl text-white font-medium shadow-2xl border-l-4 bg-green-500 border-green-600 backdrop-blur-sm bg-opacity-95"
            id="success-message">
            <div class="shrink-0">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                </svg>
            </div>
            <div class="flex-1">
                <p class="text-sm leading-relaxed">{{ session('message') }}</p>
            </div>
            <button onclick="this.parentElement.remove()" class="shrink-0 ml-2 hover:opacity-70 transition-opacity">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
            </button>
        </div>
    @endif

    @if (session('error'))
        <div class="fixed top-20 right-4 z-50 max-w-md notification-enter pointer-events-auto flex items-center gap-3 px-5 py-4 rounded-xl text-white font-medium shadow-2xl border-l-4 bg-red-500 border-red-600 backdrop-blur-sm bg-opacity-95"
            id="error-message">
            <div class="shrink-0">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                </svg>
            </div>
            <div class="flex-1">
                <p class="text-sm leading-relaxed">{{ session('error') }}</p>
            </div>
            <button onclick="this.parentElement.remove()" class="shrink-0 ml-2 hover:opacity-70 transition-opacity">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
            </button>
        </div>
    @endif

    <!-- Page Header -->
    <div class="bg-white/80 backdrop-blur-sm border-b border-gray-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center py-6 gap-4">
                <div class="min-w-0 flex-1">
                    <div class="flex items-center gap-3 mb-2">
                        <div class="w-10 h-10 bg-linear-to-br from-blue-600 to-blue-700 rounded-xl flex items-center justify-center shadow-md">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-2xl sm:text-3xl font-bold text-gray-900">{{ $project->name }}</h1>
                            <p class="text-gray-600 text-sm">Project Dashboard</p>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-3 shrink-0">
                    <!-- Refresh Button -->
                    <button wire:click="refreshData" wire:loading.attr="disabled"
                        class="bg-linear-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 disabled:from-blue-400 disabled:to-blue-400 text-white px-4 py-2.5 rounded-xl text-sm font-semibold transition-all duration-200 flex items-center space-x-2 shadow-lg shadow-blue-500/25 hover:shadow-xl hover:shadow-blue-500/30 transform hover:-translate-y-0.5 active:translate-y-0">
                        <svg wire:loading.remove class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                            </path>
                        </svg>
                        <svg wire:loading class="w-4 h-4 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                            </path>
                        </svg>
                        <span wire:loading.remove class="hidden sm:inline">Refresh</span>
                        <span wire:loading class="hidden sm:inline">Refreshing...</span>
                    </button>

                    <!-- Logout Button -->
                    <button wire:click="logout"
                        class="bg-linear-to-r from-red-600 to-red-700 hover:from-red-700 hover:to-red-800 text-white px-4 py-2.5 rounded-xl text-sm font-semibold transition-all duration-200 flex items-center space-x-2 shadow-lg shadow-red-500/25 hover:shadow-xl hover:shadow-red-500/30 transform hover:-translate-y-0.5 active:translate-y-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                            </path>
                        </svg>
                        <span class="hidden sm:inline">Logout</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 space-y-8">
        <!-- Project Stats Overview -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Total Team -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl border border-gray-200/50 p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-center">
                    <div class="p-3 bg-linear-to-br from-blue-500 to-blue-600 rounded-xl shadow-md">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-semibold text-gray-600">Total Team</p>
                        <p class="text-3xl font-bold text-gray-900">{{ $projectStats['total_team'] ?? 0 }}</p>
                    </div>
                </div>
            </div>

            <!-- Progress -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl border border-gray-200/50 p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-center">
                    <div class="p-3 bg-linear-to-br from-green-500 to-green-600 rounded-xl shadow-md">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-4 flex-1">
                        <p class="text-sm font-semibold text-gray-600">Progress</p>
                        <p class="text-3xl font-bold {{ $projectStats['progress_percentage'] >= 100 ? 'text-green-600' : ($projectStats['progress_percentage'] >= 75 ? 'text-blue-600' : ($projectStats['progress_percentage'] >= 50 ? 'text-yellow-600' : 'text-gray-900')) }}">
                            {{ $projectStats['progress_percentage'] ?? 0 }}%
                        </p>
                        <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                            <div class="bg-linear-to-r {{ $projectStats['progress_percentage'] >= 100 ? 'from-green-400 to-green-600' : ($projectStats['progress_percentage'] >= 75 ? 'from-blue-400 to-blue-600' : ($projectStats['progress_percentage'] >= 50 ? 'from-yellow-400 to-yellow-600' : 'from-gray-400 to-gray-600')) }} h-2 rounded-full transition-all duration-300"
                                style="width: {{ min($projectStats['progress_percentage'] ?? 0, 100) }}%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Remaining Days -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl border border-gray-200/50 p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-center">
                    <div class="p-3 bg-linear-to-br from-yellow-500 to-yellow-600 rounded-xl shadow-md">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-semibold text-gray-600">Remaining Days</p>
                        <p class="text-3xl font-bold {{ $projectStats['remaining_days'] !== null && $projectStats['remaining_days'] < 0 ? 'text-red-600' : 'text-gray-900' }}">
                            {{ $projectStats['remaining_days'] ?? 'N/A' }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Total Tasks -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl border border-gray-200/50 p-6 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="flex items-center">
                    <div class="p-3 bg-linear-to-br from-purple-500 to-purple-600 rounded-xl shadow-md">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                            </path>
                        </svg>
                    </div>
                    <div class="ml-4">
                        <p class="text-sm font-semibold text-gray-600">Total Tasks</p>
                        <p class="text-3xl font-bold text-gray-900">{{ $projectStats['total_tickets'] ?? 0 }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab Layout Container -->
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl border border-gray-200/50 shadow-xl" id="dashboard-tabs">
            <!-- Tab Navigation -->
            <div class="border-b border-gray-200">
                <!-- Desktop/Tablet Tab Navigation -->
                <nav class="hidden sm:flex space-x-8 px-6" aria-label="Tabs">
                    <button
                        class="tab-button py-4 px-1 border-b-2 font-semibold text-sm whitespace-nowrap transition-colors duration-200"
                        data-tab="tasks" onclick="switchTab('tasks')">
                        <span class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                                </path>
                            </svg>
                            <span class="hidden md:inline">Project Tasks</span>
                            <span class="md:hidden">Tasks</span>
                        </span>
                    </button>
                    <button
                        class="tab-button py-4 px-1 border-b-2 font-semibold text-sm whitespace-nowrap transition-colors duration-200"
                        data-tab="activity" onclick="switchTab('activity')">
                        <span class="flex items-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <span class="hidden md:inline">Recent Activity</span>
                            <span class="md:hidden">Activity</span>
                        </span>
                    </button>
                </nav>

                <!-- Mobile Tab Dropdown -->
                <div class="sm:hidden px-4 py-3">
                    <div class="relative">
                        <button type="button" onclick="toggleMobileTabDropdown()"
                            class="w-full bg-white border border-gray-300 rounded-xl px-4 py-3 text-left cursor-pointer focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm"
                            id="mobile-tab-button">
                            <span class="flex items-center justify-between">
                                <span class="flex items-center space-x-2 font-medium" id="mobile-tab-selected">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                                        </path>
                                    </svg>
                                    <span>Project Tasks</span>
                                </span>
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </span>
                        </button>

                        <div id="mobile-tab-dropdown"
                            class="hidden absolute top-full left-0 right-0 mt-2 bg-white border border-gray-200 rounded-xl shadow-xl z-10">
                            <div class="py-2">
                                <button onclick="switchMobileTab('tasks')"
                                    class="mobile-tab-option w-full px-4 py-3 text-left hover:bg-gray-50 focus:bg-gray-50 focus:outline-none transition-colors duration-150"
                                    data-tab="tasks">
                                    <span class="flex items-center space-x-2 font-medium">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                                            </path>
                                        </svg>
                                        <span>Project Tasks</span>
                                    </span>
                                </button>
                                
                                <button onclick="switchMobileTab('activity')"
                                    class="mobile-tab-option w-full px-4 py-3 text-left hover:bg-gray-50 focus:bg-gray-50 focus:outline-none transition-colors duration-150"
                                    data-tab="activity">
                                    <span class="flex items-center space-x-2 font-medium">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                        </svg>
                                        <span>Recent Activity</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="tab-content-container">
                <!-- Tasks Tab -->
                <div id="tasks-tab" class="tab-content">
                    <div class="px-6 py-6 border-b border-gray-200">
                        <div class="flex flex-col gap-4">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Project Tasks</h3>
                                <p class="text-sm text-gray-600 mt-1">All tasks in this project (ordered by creation date)</p>
                            </div>

                            <!-- Filters -->
                            <div class="flex flex-col gap-3">
                                <!-- Search -->
                                <div class="relative">
                                    <input type="text" wire:model.live.debounce.300ms="searchTerm"
                                        placeholder="Search tasks..."
                                        class="w-full pl-11 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                    </div>
                                </div>

                                <!-- Filters Row -->
                                <div class="flex flex-col sm:flex-row gap-3">
                                    <!-- Status Filter -->
                                    <select wire:model.live="selectedStatus"
                                        class="flex-1 px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent text-sm font-medium shadow-sm">
                                        <option value="">All Status</option>
                                        @foreach ($statuses as $status)
                                            <option value="{{ $status->id }}">{{ $status->name }}</option>
                                        @endforeach
                                    </select>

                                    <!-- Clear Filters -->
                                    @if ($selectedStatus || $searchTerm)
                                        <button wire:click="clearFilters"
                                            onclick="setTimeout(() => switchTab(getCurrentTab()), 150)"
                                            class="px-5 py-3 text-sm font-semibold text-gray-700 hover:text-gray-900 bg-gray-100 hover:bg-gray-200 rounded-xl transition-colors duration-200 whitespace-nowrap shadow-sm">
                                            Clear Filters
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Table Container -->
                    <div class="overflow-x-auto">
                        <!-- Desktop Table -->
                        <table class="hidden sm:table min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50/80">
                                <tr>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Code</th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Task Name</th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Due Date</th>
                                    <th class="px-6 py-4 text-left text-xs font-bold text-gray-700 uppercase tracking-wider">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($this->tickets as $ticket)
                                    <tr class="hover:bg-blue-50/50 transition-colors duration-150">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                            {{ $ticket->uuid }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-900">
                                            <div class="font-semibold">{{ $ticket->name }}</div>
                                            @if ($ticket->description)
                                                <div class="text-gray-500 text-xs mt-1 line-clamp-2">
                                                    {{ Str::limit($ticket->description, 100) }}
                                                </div>
                                            @endif>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            @if ($ticket->due_date)
                                                <div class="flex flex-col">
                                                    <span class="{{ \Carbon\Carbon::parse($ticket->due_date)->isPast() ? 'text-red-600 font-semibold' : 'text-gray-900 font-medium' }}">
                                                        {{ \Carbon\Carbon::parse($ticket->due_date)->format('M d, Y') }}
                                                    </span>
                                                    @if (\Carbon\Carbon::parse($ticket->due_date)->isPast())
                                                        <span class="text-red-500 text-xs font-medium mt-1">Overdue</span>
                                                    @endif
                                                </div>
                                            @else
                                                <span class="text-gray-400 italic">No due date</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold text-white shadow-sm"
                                                style="background-color: {{ $ticket->status->color ?? '#6B7280' }}">
                                                {{ $ticket->status->name ?? 'Unknown' }}
                                            </span>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-16 text-center">
                                            <div class="text-gray-500">
                                                <svg class="w-16 h-16 mx-auto mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                                                    </path>
                                                </svg>
                                                <p class="text-lg font-semibold text-gray-900">No tasks found</p>
                                                <p class="text-sm text-gray-500 mt-1">Try adjusting your search or filter criteria.</p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <!-- Mobile Card View -->
                        <div class="sm:hidden">
                            @forelse($this->tickets as $ticket)
                                <div class="border-b border-gray-200 p-4 hover:bg-blue-50/50 transition-colors duration-150">
                                    <div class="space-y-3">
                                        <!-- Header Row -->
                                        <div class="flex items-start justify-between gap-3">
                                            <div class="flex-1 min-w-0">
                                                <h4 class="font-semibold text-gray-900 line-clamp-2">{{ $ticket->name }}</h4>
                                                <p class="text-sm text-gray-600 font-mono mt-1">{{ $ticket->uuid }}</p>
                                            </div>
                                            <span class="shrink-0 inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold text-white shadow-sm"
                                                style="background-color: {{ $ticket->status->color ?? '#6B7280' }}">
                                                {{ $ticket->status->name ?? 'Unknown' }}
                                            </span>
                                        </div>

                                        <!-- Description -->
                                        @if ($ticket->description)
                                            <p class="text-sm text-gray-600 line-clamp-2">
                                                {{ Str::limit($ticket->description, 120) }}
                                            </p>
                                        @endif

                                        <!-- Due Date -->
                                        <div class="flex items-center text-sm">
                                            <svg class="w-4 h-4 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v14a2 2 0 002 2z">
                                                </path>
                                            </svg>
                                            @if ($ticket->due_date)
                                                <span class="{{ \Carbon\Carbon::parse($ticket->due_date)->isPast() ? 'text-red-600 font-semibold' : 'text-gray-700 font-medium' }}">
                                                    Due: {{ \Carbon\Carbon::parse($ticket->due_date)->format('M d, Y') }}
                                                    @if (\Carbon\Carbon::parse($ticket->due_date)->isPast())
                                                        <span class="text-red-500 text-xs ml-1">(Overdue)</span>
                                                    @endif
                                                </span>
                                            @else
                                                <span class="text-gray-400 italic">No due date</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="p-12 text-center">
                                    <svg class="w-16 h-16 mx-auto mb-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                                        </path>
                                    </svg>
                                    <p class="text-lg font-semibold text-gray-900">No tasks found</p>
                                    <p class="text-sm text-gray-500 mt-1">Try adjusting your search or filter criteria.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>

                    <!-- Pagination -->
                    @if ($this->tickets->hasPages())
                        <div class="px-6 py-4 border-t border-gray-200 bg-gray-50/50" id="tasks-pagination-section">
                            {{ $this->tickets->links() }}
                        </div>
                    @endif
                </div>

                <!-- Activity Tab -->
                <div id="activity-tab" class="tab-content hidden">
                    <div class="px-6 py-6 border-b border-gray-200">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Recent Activity</h3>
                            <p class="text-sm text-gray-600 mt-1">Latest updates and changes in the project</p>
                        </div>
                    </div>
                    <div class="p-6">
                        @if ($this->recentActivities->count() > 0)
                            <!-- Desktop Activity List -->
                            <div class="hidden sm:block space-y-3">
                                @foreach ($this->recentActivities as $activity)
                                    <div class="flex items-start space-x-3 p-4 hover:bg-blue-50/50 rounded-xl transition-colors duration-150">
                                        <div class="shrink-0">
                                            <div class="w-10 h-10 bg-linear-to-br from-gray-100 to-gray-200 rounded-xl flex items-center justify-center shadow-sm">
                                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-sm text-gray-900">
                                                <span class="font-semibold">{{ $activity->ticket->name ?? 'Unknown Task' }}</span>
                                                @if ($activity->status)
                                                    moved to <span class="font-semibold px-2 py-0.5 rounded text-xs text-white"
                                                        style="background-color: {{ $activity->status->color ?? '#6B7280' }}">{{ $activity->status->name }}</span>
                                                @else
                                                    was updated
                                                @endif
                                            </p>
                                            <p class="text-xs text-gray-500 mt-1">{{ $activity->created_at->diffForHumans() }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Mobile Activity List -->
                            <div class="sm:hidden space-y-3">
                                @foreach ($this->recentActivities as $activity)
                                    <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm">
                                        <div class="flex items-start space-x-3">
                                            <div class="shrink-0">
                                                <div class="w-8 h-8 bg-linear-to-br from-gray-100 to-gray-200 rounded-lg flex items-center justify-center">
                                                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="flex-1 min-w-0">
                                                <p class="text-sm text-gray-900 font-semibold leading-tight">
                                                    {{ $activity->ticket->name ?? 'Unknown Task' }}
                                                </p>
                                                @if ($activity->status)
                                                    <p class="text-sm text-gray-600 mt-1">
                                                        Moved to <span class="font-semibold px-2 py-0.5 rounded text-xs text-white"
                                                            style="background-color: {{ $activity->status->color ?? '#6B7280' }}">{{ $activity->status->name }}</span>
                                                    </p>
                                                @else
                                                    <p class="text-sm text-gray-600 mt-1">Task was updated</p>
                                                @endif
                                                <p class="text-xs text-gray-500 mt-2">{{ $activity->created_at->diffForHumans() }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <!-- Recent Activities Pagination -->
                            @if ($this->recentActivities->hasPages())
                                <div class="mt-6 pt-4 border-t border-gray-200">
                                    {{ $this->recentActivities->links() }}
                                </div>
                            @endif
                        @else
                            <div class="text-center py-16">
                                <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <div>
                                    <p class="text-lg font-semibold text-gray-900">No recent activity</p>
                                    <p class="text-sm text-gray-500 mt-1">Activities will appear here when tasks are updated</p>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const successMessage = document.getElementById('success-message');
            const errorMessage = document.getElementById('error-message');

            if (successMessage) {
                setTimeout(() => {
                    successMessage.classList.add('notification-exit');
                    setTimeout(() => successMessage.remove(), 300);
                }, 5000);
            }

            if (errorMessage) {
                setTimeout(() => {
                    errorMessage.classList.add('notification-exit');
                    setTimeout(() => errorMessage.remove(), 300);
                }, 5000);
            }
        });

        // Tab Management
        let currentActiveTab = sessionStorage.getItem('currentActiveTab') || 'tasks';
        let tabScrollPositions = {};

        function saveCurrentTab(tabName) {
            currentActiveTab = tabName;
            sessionStorage.setItem('currentActiveTab', tabName);
        }

        function getCurrentTab() {
            return sessionStorage.getItem('currentActiveTab') || 'tasks';
        }

        function toggleMobileTabDropdown() {
            const dropdown = document.getElementById('mobile-tab-dropdown');
            dropdown.classList.toggle('hidden');

            if (!dropdown.classList.contains('hidden')) {
                setTimeout(() => {
                    document.addEventListener('click', closeMobileDropdownOnClickOutside);
                }, 10);
            }
        }

        function closeMobileDropdownOnClickOutside(event) {
            const dropdown = document.getElementById('mobile-tab-dropdown');
            const button = document.getElementById('mobile-tab-button');

            if (!dropdown.contains(event.target) && !button.contains(event.target)) {
                dropdown.classList.add('hidden');
                document.removeEventListener('click', closeMobileDropdownOnClickOutside);
            }
        }

        function switchMobileTab(tabName) {
            updateMobileTabSelection(tabName);
            document.getElementById('mobile-tab-dropdown').classList.add('hidden');
            document.removeEventListener('click', closeMobileDropdownOnClickOutside);
            switchTab(tabName);
        }

        function updateMobileTabSelection(tabName) {
            const selectedContainer = document.getElementById('mobile-tab-selected');
            const tabData = {
                'tasks': {
                    icon: 'M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2',
                    label: 'Project Tasks'
                },
                'activity': {
                    icon: 'M13 10V3L4 14h7v7l9-11h-7z',
                    label: 'Recent Activity'
                }
            };

            const tab = tabData[tabName];
            if (tab) {
                selectedContainer.innerHTML = `
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="${tab.icon}"></path>
                    </svg>
                    <span>${tab.label}</span>
                `;
            }
        }

        function switchTab(tabName) {
            if (currentActiveTab) {
                tabScrollPositions[currentActiveTab] = window.pageYOffset;
            }

            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.remove('active');
                tab.classList.add('hidden');
            });

            document.querySelectorAll('.tab-button').forEach(button => {
                button.classList.remove('active', 'border-blue-600', 'text-blue-600');
                button.classList.add('border-transparent', 'text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300');
            });

            const selectedTab = document.getElementById(tabName + '-tab');
            const selectedButton = document.querySelector(`[data-tab="${tabName}"]`);

            if (selectedTab && selectedButton) {
                selectedTab.classList.add('active');
                selectedTab.classList.remove('hidden');
                
                selectedButton.classList.remove('border-transparent', 'text-gray-500', 'hover:text-gray-700', 'hover:border-gray-300');
                selectedButton.classList.add('active', 'border-blue-600', 'text-blue-600');

                saveCurrentTab(tabName);

                if (window.innerWidth < 640) {
                    updateMobileTabSelection(tabName);
                }

                if (tabScrollPositions[tabName] !== undefined) {
                    setTimeout(() => {
                        window.scrollTo({
                            top: tabScrollPositions[tabName],
                            behavior: 'smooth'
                        });
                    }, 50);
                }
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const savedTab = getCurrentTab();
            switchTab(savedTab);

            if (typeof Livewire !== 'undefined') {
                setupLivewireListeners();
            } else {
                document.addEventListener('livewire:init', setupLivewireListeners);
            }
        });

        document.addEventListener('livewire:morph', function() {
            setTimeout(() => {
                switchTab(getCurrentTab());
            }, 50);
        });

        document.addEventListener('livewire:navigated', function() {
            setTimeout(() => {
                switchTab(getCurrentTab());
            }, 100);
        });

        function handlePaginationClick(event) {
            const currentScrollPos = window.pageYOffset;
            const currentTab = getCurrentTab();

            setTimeout(() => {
                switchTab(currentTab);
                setTimeout(() => {
                    window.scrollTo({
                        top: currentScrollPos,
                        behavior: 'instant'
                    });
                }, 50);
            }, 100);
        }

        document.addEventListener('click', function(e) {
            if (e.target.closest('nav[role="navigation"]') || e.target.closest('.pagination')) {
                handlePaginationClick(e);
            }
        });

        document.addEventListener('change', function(e) {
            if (e.target.matches('select[wire\\:model\\.live]') || e.target.matches('input[wire\\:model\\.live]')) {
                setTimeout(() => {
                    switchTab(getCurrentTab());
                }, 150);
            }
        });

        document.addEventListener('input', function(e) {
            if (e.target.matches('input[wire\\:model\\.live\\.debounce]')) {
                setTimeout(() => {
                    switchTab(getCurrentTab());
                }, 500);
            }
        });

        function setupLivewireListeners() {
            Livewire.on('data-refreshed', () => {
                setTimeout(() => {
                    switchTab(getCurrentTab());
                }, 150);
            });

            Livewire.on('pagination-updated', () => {
                setTimeout(() => {
                    switchTab(getCurrentTab());
                }, 50);
            });

            Livewire.hook('morph.updated', ({ el, component }) => {
                setTimeout(() => {
                    switchTab(getCurrentTab());
                }, 25);
            });
        }
    </script>
@endpush