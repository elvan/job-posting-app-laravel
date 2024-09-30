<x-layout>
    <section class="flex flex-col gap-4 md:flex-row">
        {{-- Profile Info Form --}}
        <div class="w-full rounded-lg bg-white p-8 shadow-md">
            <h3 class="mb-4 text-center text-3xl font-bold">
                Profile Info
            </h3>

            @if ($user->avatar)
                <div class="mt-2 flex justify-center">
                    <img class="h-24 w-24 rounded-full object-cover" src="{{ asset('storage/' . $user->avatar) }}"
                        alt="{{ $user->name }}">
                </div>
            @endif

            <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <x-inputs.text id="name" name="name" label="Name" value="{{ $user->name }}" />
                <x-inputs.text id="email" name="email" label="Email address" type="email"
                    value="{{ $user->email }}" />

                <x-inputs.file id="avatar" name="avatar" label="Upload Avatar" />

                <button
                    class="w-full rounded border bg-green-500 px-4 py-2 text-white hover:bg-green-600 focus:outline-none"
                    type="submit">Save</button>
            </form>
        </div>

        {{-- Job Listings --}}
        <div class="w-full rounded-lg bg-white p-8 shadow-md">
            <h3 class="mb-4 text-center text-3xl font-bold">
                My Job Listings
            </h3>
            @forelse($jobs as $job)
                <div class="flex items-center justify-between border-b-2 border-gray-200 py-2">
                    <div>
                        <h3 class="text-xl font-semibold">{{ $job->title }}</h3>
                        <p class="text-gray-700">{{ $job->job_type }}</p>
                    </div>
                    <div class="flex space-x-3">
                        <a class="rounded bg-blue-500 px-4 py-2 text-sm text-white"
                            href="{{ route('jobs.edit', $job->id) }}">Edit</a>
                        <!-- Delete Form -->
                        <form method="POST" action="{{ route('jobs.destroy', $job->id) }}?from=dashboard"
                            onsubmit="return confirm('Are you sure that you want to delete this job?')">
                            @csrf
                            @method('DELETE')
                            <button class="rounded bg-red-500 px-4 py-2 text-sm text-white hover:bg-red-600"
                                type="submit">
                                Delete
                            </button>
                        </form>
                        <!-- End Delete Form -->
                    </div>
                </div>
            @empty
                <p class="text-gray-700">You have not job listings</p>
            @endforelse
        </div>
    </section>
    <x-bottom-banner />
</x-layout>
