<!doctype html>
<html>

<head>
    <title>Home page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>

    <body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">

        <body class="font-mono bg-gray-400">
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
                            <h3 class="pt-4 text-2xl text-center">edit a ticket</h3>
                            <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded"
                                action="{{ route('Tickets.update', $tik_ed->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="Name">
                                            Name
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            id="Name" type="text" name="name" placeholder=" Name"
                                            value="{{ $tik_ed->name }}" />
                                    </div>
                                    <div class="md:ml-2">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                            email
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            id="email" type="email" name="email" placeholder=" email"
                                            value="{{ $tik_ed->email }}" />
                                    </div>
                                </div>
                                <div class="mb-4 md:flex md:justify-between">
                                    <div class="mb-4 md:mr-2 md:mb-0">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="Phone">
                                            Phone
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            id="Phone" type="tel" pattern="[0-9]{4}[0-9]{3}[0-9]{3}"
                                            name="Phone" value="{{ $tik_ed->phone }}" placeholder=" 09********" />
                                    </div>
                                    <div class="md:ml-2">
                                        <label class="block mb-2 text-sm font-bold text-gray-700" for="Name">
                                            project
                                        </label>
                                        <input
                                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                            id="Project" type="text" name="project" placeholder=" Project Name"
                                            value="{{ $tik_ed->project }}" />
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700">Select an option</label>
                                    <select name="type" id="type"
                                        class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                                        id="Project">
                                        <!-- <option selected>Choose Type</option> -->
                                        <option selected>{{ $tik_ed->type }}</option>



                                    </select>

                                </div>

                                <div class="mb-4">
                                    <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                        Description
                                    </label>
                                    <textarea name="Description" id="Description"
                                        class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                                   {{ $tik_ed->Description }}
    
                                    </textarea>

                                </div>



                                <div class="mb-4 text-center">




                                    <button type="submit"
                                        class="bg-blue-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">
                                        <span class="py-2 px-2 ">update</span>
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
        </body>
    </body>

</html>
