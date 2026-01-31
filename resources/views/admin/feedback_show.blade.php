@extends('admin_layout')

@section('title', 'Feedback Details')

@section('content')
    <div class="flex items-center justify-between gap-4 mb-6">
        <h2 class="text-2xl font-bold">Feedback Details</h2>
        <a href="{{ route('admin.feedback.index') }}" class="text-sm underline hover:text-white">Back</a>
    </div>

    <div class="bg-white/10 border border-white/20 rounded-xl p-6 space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <div class="text-xs uppercase tracking-widest text-white/70">Submitted</div>
                <div class="font-semibold">{{ $feedback->created_at?->format('Y-m-d H:i') ?? '-' }}</div>
            </div>
            <div>
                <div class="text-xs uppercase tracking-widest text-white/70">Name</div>
                <div class="font-semibold">{{ $feedback->name ?? '-' }}</div>
            </div>
            <div>
                <div class="text-xs uppercase tracking-widest text-white/70">Email</div>
                <div class="font-semibold">{{ $feedback->email ?? '-' }}</div>
            </div>
            <div>
                <div class="text-xs uppercase tracking-widest text-white/70">ID</div>
                <div class="font-semibold">{{ $feedback->id }}</div>
            </div>
        </div>

        <div class="pt-2">
            <div class="text-xs uppercase tracking-widest text-white/70 mb-2">Message</div>
            <div class="bg-black/30 border border-white/10 rounded-lg p-4 whitespace-pre-wrap">{{ $feedback->feedback }}</div>
        </div>
    </div>
@endsection

@section('footer')
@endsection
