{{--<x-slot name="header">

</x-slot>--}}

<div>
    @auth
    <!--<div>
        {{-- 「formを送信したらSearch.phpのrenderメソッドを呼び出す」 --}}
        <form wire:submit.prevent="render" method="GET">
            <div>
                <input type="text" wire:model.lazy="word">
                <button>
                    検索
                </button>
            </div>
        </form>
    </div>-->

    <input wire:model="search" type="search" placeholder="企業名または代表者名で検索" 
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 mt-8  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 md:container md:mx-auto w-full lg:w-1/2 ">

    @if ($clients->count() === 0)
    検索キーワードに一致する検索結果がありません。
    @endif
    @endauth

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-x1 sm rounded-lg px-4 py-4">
                <table class="table-fixed w-full">
                    <thead>
                        <tr class="bg-gray-1000">
                            @foreach ($statuses as $status)
                            <th class="px-4 py-2">{{ $status->name }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                        @switch ($client->status_id)
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
</div>
