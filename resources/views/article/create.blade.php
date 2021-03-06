@extends('layouts.app')
@section('content')
<div class="container mx-auto justify-center">
    @if(session()->has('message'))
    <div class="font-serif bg-green-lightest border border-green-light text-green-dark px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{{ session()->get('message') }}</span>
    </div>
    @endif
    @if(session()->has('errormessage'))
    <div class="font-serif bg-red-lightest border border-red-light text-red-dark px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{{ session()->get('errormessage') }}</span>
    </div>
    @endif
<form id="form" class="w-full mt-10 mb-20" method="POST" action="/postarticle" enctype="multipart/form-data">
    @csrf
    <div class="flex flex-wrap container mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label class="font-serif block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                Article Name
            </label>
            <input class="font-serif appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="name" type="text" placeholder="Article Name" autocomplete="off" required>
        </div>
        <div class="append w-full md:w-1/2 px-3">
            <label class="font-serif block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                Article Image
            </label>
            <input class="clone font-serif appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="image[]" id="image" type="file" placeholder="" autocomplete="off" accept="image/*" required multiple>
            <p class="font-serif text-red">*Image size must be under 2MB</p>
        </div>
    </div>
    <div class="flex flex-wrap container mb-6">
        <div class="append w-full md:w-1/2 px-3">
            <label class="font-serif block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                Select Tag
            </label>
            <Select class="font-serif appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="tag" autocomplete="off" required>
                <option value="">Select Tag</option>
                <option value="World">World</option>
                <option value="Technology">Technology</option>
                <option value="Business">Business</option>
                <option value="Politics">Politics</option>
                <option value="Science">Science</option>
                <option value="Health">Health</option>
            </select>
        </div>
    </div>
    <div class="flex flex-wrap container mb-6">
        <div class="w-full  px-3">
            <label class="font-serif block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                Article
            </label>
            <textarea class="font-serif appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="article" rows="7" type="text" placeholder="" autocomplete="off" required></textarea>
        </div>
    </div>
    <div class="flex flex-wrap container mb-6">
        <div class="w-full  px-3">
            <input class="font-serif bg-transparent hover:bg-blue text-blue-dark font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded" type="submit" id="submit" value="Post">
        </div>
    </div>
</form>
</div>
@endsection
