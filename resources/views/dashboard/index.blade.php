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

                {{-- Applicants --}}
                <div class="mt-4 bg-gray-100 p-2">
                    <h4 class="mb-2 text-lg font-semibold">Applicants</h4>
                    @forelse($job->applicants as $applicant)
                        <div class="py-2">
                            <p class="text-gray-800">
                                <strong>Name: </strong> {{ $applicant->full_name }}
                            </p>
                            <p class="text-gray-800">
                                <strong>Phone: </strong> {{ $applicant->contact_phone }}
                            </p>
                            <p class="text-gray-800">
                                <strong>Email: </strong> {{ $applicant->contact_email }}
                            </p>
                            <p class="text-gray-800">
                                <strong>Message: </strong> {{ $applicant->message }}
                            </p>
                            <p class="mt-2 text-gray-800">
                                <a class="text-sm text-blue-500 hover:underline"
                                    href="{{ asset('storage/' . $applicant->resume_path) }}" download>
                                    <i class="fas fa-download"></i> Download Resume
                                </a>
                            </p>
                            {{-- Delete Applicant --}}
                            <form method="POST" action="{{ route('applicant.destroy', $applicant->id) }}"
                                onsubmit="return confirm('Are you sure you want to delete this applicant?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-sm text-red-500 hover:text-red-700" type="submit">
                                    <i class="fas fa-trash"></i> Delete Applicant
                                </button>
                            </form>
                        </div>
                    @empty
                        <p class="mb-5 text-gray-700">No applicants for this job</p>
                    @endforelse
                </div>
            @empty
                <p class="text-gray-700">You have not job listings</p>
            @endforelse
        </div>
    </section>
    <x-bottom-banner />
</x-layout>
