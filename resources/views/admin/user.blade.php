<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Database') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("") }}

                    <table class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>#<th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                             
                                
                           
                            </tr>
                        </thead>
                        <tbody>
                          
                            @foreach($users as $productlist)
                            <tr>    
                                    <td class="align-middle">{{ $productlist->id }}</td>
                                    <td class="align-middle"></td>
                                    <td class="align-middle">{{ $productlist->name }}</td>
                                    <td class="align-middle">{{ $productlist->email }}</td>
                                    <td class="align-middle">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                       
                                       
                                        <form action="{{ route('admin.users.destroy', $productlist->id)  }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                                        </form>
                              
                                    </div>
                                    </td>
                                </tr>
                            @endforeach
                     
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
