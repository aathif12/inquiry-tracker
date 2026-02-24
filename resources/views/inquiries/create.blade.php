@extends('layouts.app')

@section('content')
    <div class="px-4 sm:px-0 max-w-2xl mx-auto">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-semibold leading-tight text-gray-900">Create New Inquiry</h2>
            <a href="{{ route('inquiries.index') }}" class="text-indigo-600 hover:text-indigo-900">&larr; Back to List</a>
        </div>

        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <form action="{{ route('inquiries.store') }}" method="POST">
                    @csrf

                    <!-- Client Name -->
                    <div class="mb-4">
                        <label for="client_name" class="block text-sm font-medium text-gray-700">Client Name</label>
                        <input type="text" name="client_name" id="client_name" value="{{ old('client_name') }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2 border"
                            required>
                        @error('client_name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Service Requested -->
                    <div class="mb-4">
                        <label for="service_requested" class="block text-sm font-medium text-gray-700">Service
                            Requested</label>
                        <select name="service_requested" id="service_requested"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2 border"
                            required>
                            <option value="">Select a service...</option>
                            <option value="Web Development" {{ old('service_requested') == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                            <option value="VPS Hosting" {{ old('service_requested') == 'VPS Hosting' ? 'selected' : '' }}>VPS
                                Hosting</option>
                            <option value="Network Solutions" {{ old('service_requested') == 'Network Solutions' ? 'selected' : '' }}>Network Solutions</option>
                            <option value="IT Support" {{ old('service_requested') == 'IT Support' ? 'selected' : '' }}>IT
                                Support</option>
                            <option value="Other" {{ old('service_requested') == 'Other' ? 'selected' : '' }}>Other</option>
                        </select>
                        @error('service_requested')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Message -->
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea name="message" id="message" rows="4"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm p-2 border"
                            required>{{ old('message') }}</textarea>
                        @error('message')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit"
                            class="w-full inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Submit Inquiry
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection