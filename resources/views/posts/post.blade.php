@extends('layouts.app')

@section('content')
    <div class="px-64 flex ">
        <div class="posts pr-5 w-4/6">
            <div class="post-single bg-white shadow pl-5 py-4 pr-5">
                <span class="tag text-xs capitalize font-extrabold bg-blue-900 text-white py-2 px-3 rounded-full text-center">
                    Cloud computing
                </span>
                <h1 class="font-semibold text-gray-800 mt-3 font-bold leading-tight text-xl">
                    This is a simple post for cloud computing
                </h1>
                <p class=" mb-2 text-sm mt-2 text-gray-700 truncate">
                    This is the content for the site This is the content for the site This is the content for the site
                </p>
                <hr>
                <div class="mt-2">
                    <a href="#" class="inline-block bg-blue-900 text-xs font-bold text-white px-3 py-1 rounded focus:outline-none">
                        Edit
                    </a>
                    <a href="#" class=" inline-block bg-red-900 text-xs font-bold text-white px-3 py-1 rounded ml-2 focus:outline-none">
                        Delete
                    </a>
                </div>
            </div>
            <div class="post-single bg-white shadow pl-5 mt-2 py-4 pr-5">
                <span class="tag text-xs capitalize font-extrabold bg-blue-900 text-white py-2 px-3 rounded-full text-center">
                    Cloud computing
                </span>
                <h1 class="font-semibold text-gray-800 mt-3 font-bold leading-tight text-xl">
                    This is a simple post for cloud computing
                </h1>
                <p class=" mb-2 text-sm mt-2 text-gray-700 truncate">
                    This is the content for the site This is the content for the site This is the content for the site
                </p>
                <hr>
                <div class="mt-2">
                    <a href="#" class="inline-block bg-blue-900 text-xs font-bold text-white px-3 py-1 rounded focus:outline-none">
                        Edit
                    </a>
                    <a href="#" class=" inline-block bg-red-900 text-xs font-bold text-white px-3 py-1 rounded ml-2 focus:outline-none">
                        Delete
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar   w-2/6  ">
            <div class="w-full bg-white shadow py-4 pr-5 pl-5">
                <h1 class="text-gray-700 text-lg font-bold mb-2 ">Menu</h1>
                <hr>
                <div class="categories pt-2">
                <span class="bg-blue-900 text-xs inline-block text-white font-extrabold px-3 py-2 rounded-full">
                    php
                </span>
                    <span class="bg-blue-900 text-xs inline-block text-white font-extrabold px-3 py-2 rounded-full">
                    php
                </span>
                </div>
            </div>
        </div>
    </div>
@endsection
