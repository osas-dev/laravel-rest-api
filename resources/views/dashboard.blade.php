<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
                    <div class="block mb-8">
                        <a href="{{url('add_contacts')}}"
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add User</a>
                    </div>
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200 w-full">
                                        <thead>
                                            <tr>
                                                <th scope="col" width="50"
                                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    ID
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Full Name
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Email
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Phone number
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 bg-gray-50 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($contact as $contacts)

                                            <tr>
                                                <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-900">
                                                    {{$contacts->id}}
                                                </td>

                                                <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-900">
                                                    {{$contacts->firstName}} {{$contacts->lastName}}
                                                </td>

                                                <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-900">
                                                    {{$contacts->email}}
                                                </td>

                                                <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-900">
                                                    {{$contacts->phone}}
                                                </td>

                                                <td
                                                    class="px-6 py-2 whitespace-nowrap text-sm font-medium flex justify-center">
                                                    <a
                                                        href='{{route('view_contact', $contacts->id)}}'
                                                        class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 mb-2 mr-2">View</a>
                                                    <a href="{{route('edit_contact', $contacts->id)}}"
                                                        class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75 mb-2 mr-2">Edit</a>

                                                    <a href="{{route('delete_contact', $contacts->id)}}"
                                                        onclick="confrim_delete(event)"
                                                        class="py-2 px-4 bg-red-500 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75 mb-2 mr-2">Delete</a>
                                                </td>
                                            </tr>

                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                                {!!$contact->appends(Request::all())->links()!!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
