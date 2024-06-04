<x-app-layout>
<x-slot name="header">
    <div class="flex justify-between items-center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reservation') }}
        </h2>
        <a href="{{ route('cart') }}" class="btn btn-primary">My Reservation</a>
    </div>
</x-slot>

 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0"></h1>
                    <br>
                    <hr />
                    @if (session()->has('error'))
                    <div>
                        {{session('error')}}
                    </div>
                    @endif

                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
 
                    <form action="{{ route('add_reservation') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                        <strong>Book Title</strong>
                            <div class="col">
                            <select name="name" id="inputState" class="form-control">
                            <option selected>Death Hallow</option>
                            <option>UFO Of GOD</option>
                            <option>The Finest Hours</option>
                            <option>The Power Of Stillness</option>
                            <option>Life After Loss</option>
                            <option>Curious Minds</option>
                        </select>
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                        <strong>Book Author</strong>
                            <div class="col">
                            <select name="author" id="inputState" class="form-control">
                            <option selected>J.K Rowling</option>
                            <option>Micheal J Tougias</option>
                            <option>Bob Deits</option>
                            <option>Chris Bledsoe</option>
                            <option>Jacob C Hezz</option>
                            <option>Jordan Moore</option>
                        </select>
                                @error('author')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
    <strong>Date of Reserve</strong>
    <div class="col">
        <input type="date" name="date" id="reserveDate" class="form-control" placeholder="date">
        @error('date')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>
                        
                        <div class="row mb-3">
                            <div class="col">
                            <input class="form-check-input" type="radio" name="reserved" id="exampleRadios1" value="reserved" checked>
  <label class="form-check-label" for="exampleRadios1">
    Reserve
  </label>
                                @error('reserved')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Reserve</button>
                            </div>
                        </div>
                    </form>

                    <!-- <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>#<th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>image</th>
                                <th>Date</th>
                                <th>Reservation</th>
                                <th>ACTIION</th>
                            </tr>
                        </thead>
                        <tbody>
                          
                            @foreach($products as $productlist)
                            <tr>
                                    <td class="align-middle">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $productlist->id }}</td>
                                    <td class="align-middle">{{ $productlist->name }}</td>
                                    <td class="align-middle">{{ $productlist->author }}</td>
                                    <td class="align-middle">{{ $productlist->image }}</td>
                                    <td class="align-middle">{{ $productlist->date }}</td>
                                    <td class="align-middle">{{ $productlist->reserved }}</td>
                                    <td class="align-middle">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="" type="button" class="btn btn-secondary">Edit</a>
                                        <a href="" type="button" class="btn btn-danger">Delete</a>
</td>
                                    </div>
                                </tr>
                            @endforeach
                     
                        </tbody>
                    </table> -->
                    
                </div>
            </div>
        </div>
    </div>

    <script>
    // Get today's date
    var today = new Date().toISOString().split('T')[0];
    // Set the minimum date for the input field to today
    document.getElementById("reserveDate").setAttribute("min", today);
</script>
</x-app-layout>