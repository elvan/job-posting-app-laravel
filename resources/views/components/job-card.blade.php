@props(['job'])

<div class="rounded-lg bg-white p-4 shadow-md">
    <div class="space-between flex items-center gap-4">
        @if ($job->company_logo)
            <img class="w-14" src="/storage/{{ $job->company_logo }}" alt="{{ $job->company_name }}" />
        @endif
        <div>
            <h2 class="text-xl font-semibold">
                {{ $job->title }}
            </h2>
            <p class="text-sm text-gray-500">{{ $job->job_type }}</p>
        </div>
    </div>
    <p class="mt-2 text-lg text-gray-700">
        {{ Str::limit($job->description, 100) }}
    </p>
    <ul class="my-4 rounded bg-gray-100 p-4">
        <li class="mb-2"><strong>Salary:</strong> ${{ number_format($job->salary) }}</li>
        <li class="mb-2">
            <strong>Location:</strong> {{ $job->city }}, {{ $job->state }}
            @if ($job->remote)
                <span class="ml-2 rounded-full bg-green-500 px-2 py-1 text-xs text-white">Remote</span>
            @else
                <span class="ml-2 rounded-full bg-red-500 px-2 py-1 text-xs text-white">On-site</span>
            @endif
        </li>
        @if ($job->tags)
            <li class="mb-2">
                <strong>Tags:</strong> {{ ucwords(str_replace(',', ', ', $job->tags)) }}
            </li>
        @endif
    </ul>
    <a class="block w-full rounded border bg-indigo-100 px-5 py-2.5 text-center text-base font-medium text-indigo-700 shadow-sm hover:bg-indigo-200"
        href="{{ route('jobs.show', $job->id) }}">
        Details
    </a>
</div>
