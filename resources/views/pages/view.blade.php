<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact details') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

                <div class="relative w-24 h-24 rounded-lg overflow-hidden">
                    <img class="rounded-full object-cover border border-gray-100" src="contact/{{$contact->image}}" alt="user image" />
                </div>

                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                    <form
                        method="POST"
                        action="{{ route('update_contact', $contact->id) }}"
                        enctype="multipart/form-data"
                        >
                        @csrf

                        <div class="mt-4">
                            <x-jet-label for="firstName" value="{{ __('First Name') }}" />
                            <x-jet-input id="firstName" value='{{$contact->firstName}}' class="block mt-1 w-full" type="text" name="firstName" required />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="lastName" value="{{ __('Last Name') }}" />
                            <x-jet-input id="lastName" value='{{$contact->lastName}}' class="block mt-1 w-full" type="text" name="lastName" required />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="phone" value="{{ __('Mobile Number') }}" />
                            <x-jet-input id="phone" value='{{$contact->phone}}' class="block mt-1 w-full" type="number" name="phone" required />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" value='{{$contact->email}}' class="block mt-1 w-full" type="email" name="email" required />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
