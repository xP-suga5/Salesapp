@extends('layouts.home')

@section('content')

<div class="py-12">
  <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8 border-2">
    <h1 class="text-2xl">セールスステータス設定</h1>

    <form action="{{ route('status.all_update')}}" method="POST" class="content-update__form" id="all">
      <div class="flex flex-col md:flex-row">
        @csrf
        @foreach ($statuses as $status)
        <div class="flex flex-col">
          <label for="sta{{$status->id}}">ステータス{{$status->id}}</label>
          <input type="text" value="{{$status->name}}" name="name[{{$status->id}}]"
            class="appearance-none block w-full bg-white text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="sta{{$status->id}}">
        </div>
        @endforeach
      </div>
    </form>


    <input type="submit" value="更新"
      class="w-full mt-8 px-2 py-1 text-blue-500 border border-blue-500 font-semibold rounded hover:bg-blue-100" form="all">
  </div>
</div>

@endsection