@extends('admin_layout')

@section('title', 'Admin Feedback')

@section('content')
    <div class="flex items-center justify-between gap-4 mb-6">
        <h2 class="text-2xl font-bold">Feedback</h2>
        <a href="{{ route('admin.weekly_draw') }}" class="text-sm underline hover:text-white">Back to Admin</a>
    </div>

    <div class="bg-white/10 border border-white/20 rounded-xl overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="bg-white/10 text-left">
                    <tr>
                        <th class="px-4 py-3 font-semibold">Date</th>
                        <th class="px-4 py-3 font-semibold">Name</th>
                        <th class="px-4 py-3 font-semibold">Email</th>
                        <th class="px-4 py-3 font-semibold">Feedback</th>
                        <th class="px-4 py-3"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-white/10">
                    @forelse($feedbackItems as $item)
                        <tr class="hover:bg-white/5">
                            <td class="px-4 py-3 whitespace-nowrap">
                                {{ $item->created_at?->format('Y-m-d H:i') ?? '-' }}
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap">
                                {{ $item->name ?? '-' }}
                            </td>
                            <td class="px-4 py-3 whitespace-nowrap">
                                {{ $item->email ?? '-' }}
                            </td>
                            <td class="px-4 py-3 max-w-xl">
                                <div class="truncate">
                                    {{ $item->feedback }}
                                </div>
                            </td>
                            <td class="px-4 py-3 text-right whitespace-nowrap">
                                <a href="{{ route('admin.feedback.show', $item) }}" class="underline hover:text-white">View</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="px-4 py-6 text-center text-white/80" colspan="5">
                                No feedback submitted yet.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-6">
        {{ $feedbackItems->links() }}
    </div>
@endsection

@section('footer')
@endsection
