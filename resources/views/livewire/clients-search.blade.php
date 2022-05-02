<x-slot name="header">

</x-slot>


<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-x1 sm rounded-lg px-4 py-4">
            {{--@if(session()->has('message'))
            <div class="bg-teal-100 border-lt-4 border teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
            @endif
            <button wire:click="create()"
                class="bg-blue-500 hover bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">新規登録</button>
            @if($isOpen)
            @include('livewire.clients.create')
            @endif--}}
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-1000">
                        @foreach ($statuses as $status)
                        <th class="px-4 py-2">{{ $status->name}}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                    @switch ( $client->status_id )
                    @case(1)
                    <tr>
                        <td class="border px-4 py-2">{{ $client->campany_name }}</td>
                        <td class="border px-4 py-2"></td>
                        <td class="border px-4 py-2"></td>
                        <td class="border px-4 py-2"></td>
                        <td class="border px-4 py-2"></td>
                    </tr>
                    @break
                    @case(2)
                    <tr>
                        <td class="border px-4 py-2">{{ $client->campany_name }}</td>
                        <td class="border px-4 py-2">{{ $client->campany_name }}</td>
                        <td class="border px-4 py-2"></td>
                        <td class="border px-4 py-2"></td>
                        <td class="border px-4 py-2"></td>
                    </tr>
                    @break
                    @case(3)
                    <tr>
                        <td class="border px-4 py-2">{{ $client->campany_name }}</td>
                        <td class="border px-4 py-2">{{ $client->campany_name }}</td>
                        <td class="border px-4 py-2">{{ $client->campany_name }}</td>
                        <td class="border px-4 py-2"></td>
                        <td class="border px-4 py-2"></td>
                    </tr>
                    @break
                    @case(4)
                    <tr>
                        <td class="border px-4 py-2">{{ $client->campany_name }}</td>
                        <td class="border px-4 py-2">{{ $client->campany_name }}</td>
                        <td class="border px-4 py-2">{{ $client->campany_name }}</td>
                        <td class="border px-4 py-2">{{ $client->campany_name }}</td>
                        <td class="border px-4 py-2"></td>
                    </tr>
                    @break
                    @case(5)
                    <tr>
                        <td class="border px-4 py-2">{{ $client->campany_name }}</td>
                        <td class="border px-4 py-2">{{ $client->campany_name }}</td>
                        <td class="border px-4 py-2">{{ $client->campany_name }}</td>
                        <td class="border px-4 py-2">{{ $client->campany_name }}</td>
                        <td class="border px-4 py-2">{{ $client->campany_name }}</td>
                    </tr>
                    @endswitch
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>