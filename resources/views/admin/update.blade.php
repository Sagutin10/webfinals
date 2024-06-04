<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('UPDATE TABLE') }}
            </h2>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Back</a>
        </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


                


                <!-- <form action="{{ route('products.update', $products->id) }}" method="POST"> -->
                <form action="{{ route('products.update', $products->id) }}" method="POST">

    @csrf
    @method('PUT')
    <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Title</label>
                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{$products->name}}">
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Author</label>
                                <input type="text" name="author" class="form-control" placeholder="Author" value="{{$products->author}}">
                                @error('author')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Reservation</label>
                                <input type="text" name="rdate" class="form-control" placeholder="Reservation Date" value="{{$products->reserved}}">
                                @error('rdate')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Date</label>
                                <input type="date" name="date" class="form-control" placeholder="date" value="{{$products->date}}">
                                @error('date')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="d-grid">
                            <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                        </div>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
