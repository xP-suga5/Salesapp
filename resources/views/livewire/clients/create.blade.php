<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <div class="fixed inset-0 tansition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <!--<span class="hidden sm:inline-block sm:aligh-middle sm:h-screen"></span>-->
        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="mb-4">
                        <label for="campany_name" class="block text-gray-700 text-sm font-bold mb-2">会社名</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="campany_name" placeholder="campany_name" wire:model="campany_name">
                        @error('campany_name') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="manager" class="block text-gray-700 text-sm font-bold mb-2">責任者</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="manager" placeholder="manager" wire:model="manager">
                        @error('manager') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="phone_number" class="block text-gray-700 text-sm font-bold mb-2">電話番号</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="phone_number" placeholder="phone_number" wire:model="phone_number">
                        @error('phone_number') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="client_email" class="block text-gray-700 text-sm font-bold mb-2">メールアドレス</label>
                        <input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="client_email" placeholder="client_email" wire:model="client_email">
                        @error('client_email') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="status_id" class="block text-gray-700 text-sm font-bold mb-2">ステータス</label>
                        <!--<input type="text"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="status_id" placeholder="status_id" wire:model="status_id">-->

                        <div class="inline-block relative w-64">
                            <select
                                class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"  id="status_id" placeholder="status_id" wire:model="status_id">
                                @foreach ($statuses as $status)
                                <option value="{{ $status_id }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <!--<path
                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />-->
                                </svg>
                            </div>
                        </div>




                        @error('status_id') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                </div>

                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click.prevent="store()" type="button"
                            class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Save
                        </button>
                    </span>
                    <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                        <button wire:click="closeModal()" type="button"
                            class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Cancel
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>