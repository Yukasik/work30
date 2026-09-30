<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('repair_requests.store') }}">
                    @csrf
                    <select name="car_id">
                        @foreach($cars as $car)
                        <option value="{{$car->id}}">{{$car->brand}} <br> {{$car->model}} <br> {{$car->registration_number}}</option>
                        @endforeach
                    </select>
                    <input type="text" name="problem_description" value="{{old('problem_description')}}">
                    <input type="text" name="status" value="{{old('status')}}">
                    <input type="date" name="repair_date" value="{{old('repair_date')}}">
                    <button type="submit">Сохранить</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>