<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create contact') }}
        </h2>
    </x-slot>
    @include('sweetalert::alert')

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                    <form
                        method="POST"
                        action="{{ url('create_contact') }}"
                        enctype="multipart/form-data"
                        >
                        @csrf

                        <div class="mt-4">
                            <x-jet-label for="firstName" value="{{ __('First Name') }}" />
                            <x-jet-input id="firstName" class="block mt-1 w-full" type="text" name="firstName" required />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="lastName" value="{{ __('Last Name') }}" />
                            <x-jet-input id="lastName" class="block mt-1 w-full" type="text" name="lastName" required />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="phone" value="{{ __('Mobile Number') }}" />
                            <x-jet-input id="phone" class="block mt-1 w-full" type="number" name="phone" required />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" required />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="image" value="{{ __('Image') }}" />
                            <x-jet-input id="image" class="block mt-1 w-full" type="file" name="image" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">

                            <x-jet-button class="ml-4">
                                {{ __('Create') }}
                            </x-jet-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
