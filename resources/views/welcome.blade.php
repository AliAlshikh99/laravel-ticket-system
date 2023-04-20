<!doctype html>
<html>

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')



</head>






<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">


    <!-- Container -->
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                <!-- Col -->
                <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg"
                    style="background-image: url('https://images.pexels.com/photos/3197390/pexels-photo-3197390.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2')">
                </div>
                <!-- Col -->
                <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">


                    <h3 class="pt-4 text-2xl text-center">Submit a ticket</h3>
                    @if ($errors->any())

                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                            role="alert">
                            <strong class="font-bold">Big Error:</strong>
                            <span class="block sm:inline">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach

                                </ul>



                            </span>
                            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <svg class="fill-current h-6 w-6 text-red-500" role="button"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <title>Close</title>
                                    <path
                                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                                </svg>
                            </span>
                        </div>

                    @endif


                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" action="{{ route('Tickets.store') }}"
                        method="post">
                        @csrf
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="Name">
                                    Name
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="Name" type="text" name="name" placeholder=" Name"
                                    value="{{ old('name') }}" />
                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                    email
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="email" type="email" name="email" placeholder=" email"
                                    value="{{ old('email') }}" />
                            </div>
                        </div>
                        <div class="mb-4 md:flex md:justify-between">
                            <div class="mb-4 md:mr-2 md:mb-0">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="Phone">
                                    Phone
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="Phone" type="tel" pattern="[0-9]{4}[0-9]{3}[0-9]{3}" name="phone"
                                    value="{{ old('phone') }}" placeholder=" 09********" />
                            </div>
                            <div class="md:ml-2">
                                <label class="block mb-2 text-sm font-bold text-gray-700" for="Name">
                                    project
                                </label>
                                <input
                                    class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                    id="Project" type="text" name="project" placeholder=" Project Name"
                                    value="{{ old('project') }}" />
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700">Select an option</label>
                            <select name="type" id="type"
                                class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                id="Project"">
                                <!-- <option selected>Choose Type</option> -->
                                <option value="Bug">Bug</option>
                                <option value="New Request">New Request</option>
                            </select>
                        </div>


                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="Description">
                                Description
                            </label>
                            <textarea name="Description" value="{{ old('Description') }}" id="Description"
                                class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
    
                                    </textarea>

                        </div>



                        <div class="mb-4 text-center">
                            <button type="submit"
                                class="bg-blue-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                <span class="py-2 px-2 ">Submit</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                </svg>

                            </button>


                        </div>
                        <hr class="mb-6 border-t" />

                    </form>










                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')




</html>
