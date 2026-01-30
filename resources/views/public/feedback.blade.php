@extends('layout')

@section('title', 'Feedback')
@section('content')
<div class="max-w-xl mx-auto bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 rounded-2xl shadow-xl px-6 py-8 mt-6 sm:mt-10 border border-gray-700">
    <h2 class="text-2xl sm:text-3xl font-bold mb-3 sm:mb-4 text-[#EAD63D] text-center sm:text-left">Feedback</h2>
    <p class="mb-6 text-gray-300 text-base sm:text-lg leading-relaxed text-center sm:text-left">I'd love to know what you think of the website! Please let me know your thoughts, suggestions, or any issues you encountered.</p>
    <form method="POST" action="{{ route('feedback.store') }}">
            @if(session('success'))
                <div class="mb-4 p-3 rounded bg-green-700 text-green-100 font-semibold">
                    {{ session('success') }}
                </div>
            @endif
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            <div>
                <label for="name" class="block text-sm font-semibold mb-2">Name (optional)</label>
                <input type="text" id="name" name="name" class="w-full rounded-lg border border-gray-600 bg-gray-800 text-white p-3 focus:ring-yellow-400 focus:border-yellow-400" maxlength="255">
            </div>
            <div>
                <label for="email" class="block text-sm font-semibold mb-2">Email (optional)</label>
                <input type="email" id="email" name="email" class="w-full rounded-lg border border-gray-600 bg-gray-800 text-white p-3 focus:ring-yellow-400 focus:border-yellow-400" maxlength="255">
            </div>
        </div>
        <div class="mb-4">
            <label for="feedback" class="block text-sm font-semibold mb-2">Your Feedback</label>
            <textarea id="feedback" name="feedback" rows="6" class="w-full rounded-lg border border-gray-600 bg-gray-800 text-white p-3 focus:ring-yellow-400 focus:border-yellow-400" required></textarea>
        </div>
        <button type="submit" class="w-full md:w-auto block md:inline-block mt-2 px-6 py-3 bg-[#EAD63D] text-[#50482D] font-bold rounded-lg hover:bg-yellow-400 transition text-center">Submit</button>
    </form>
</div>
@endsection
