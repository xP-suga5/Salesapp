<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-x1 sm rounded-lg px-4 py-4">
            @if(session()->has('message'))
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
            @endif
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-1000 text-center">
                        <th class="border px-4 py2 w-20">id</th>
                        <th class="border px-4 py-2">会社名</th>
                        <th class="border px-4 py-2">責任者</th>
                        <th class="border px-4 py-2">電話番号</th>
                        <th class="border px-4 py-4">メールアドレス</th>
                        <th class="border px-4 py-4">ステータス</th>
                        {{--<th class="px-4 py-4">作成日</th>--}}
                        {{--<th class="px-4 py-4">更新日</th>--}}
                        <th class="border px-4 py-4">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clients as $client)
                    <tr>
                        <td class="border px-4 py-2 text-center">{{ $client->id }}</td>
                        <td class="border px-4 py-2 break-words">{{ $client->campany_name }}</td>
                        <td class="border px-4 py-2">{{ $client->manager }}</td>
                        <td class="border px-4 py-2 break-words">{{ $client->phone_number }}</td>
                        <td class="border px-4 py-2 break-words">{{ $client->client_email }}</td>
                        <td class="border px-4 py-2">
                            {{ $client->status_id }}
                            {{ $client->status->name }}
                        </td>
                        {{--<td class="border px-4 py-2">{{ $client->created_at }}</td>--}}
                        {{--<td class="border px-4 py-2">{{ $client->updated_at }}</td>--}}
                        <td class="border px-4 py2">
                            <button wire:click="edit({{ $client->id }})"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">編集</button>
                            <button wire:click="delete({{ $client->id }})"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">削除</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>