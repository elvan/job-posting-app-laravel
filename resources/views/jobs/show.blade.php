<x-layout>
    <div class="grid grid-cols-1 gap-6 md:grid-cols-4">
        <section class="md:col-span-3">
            <div class="rounded-lg bg-white p-3 shadow-md">
                <div class="flex items-center justify-between">
                    <a class="block p-4 text-blue-700" href="{{ route('jobs.index') }}">
                        <i class="fa fa-arrow-alt-circle-left"></i>
                        Back To Listings
                    </a>
                    <div class="ml-4 flex space-x-3">
                        <a class="rounded bg-blue-500 px-4 py-2 text-white hover:bg-blue-600"
                            href="{{ route('jobs.edit', $job->id) }}">Edit</a>
                        <!-- Delete Form -->
                        <form method="POST" action="{{ route('jobs.destroy', $job->id) }}"
                            onsubmit="return confirm('Are you sure that you want to delete this job?')">
                            @csrf
                            @method('DELETE')
                            <button class="rounded bg-red-500 px-4 py-2 text-white hover:bg-red-600" type="submit">
                                Delete
                            </button>
                        </form>
                        <!-- End Delete Form -->
                    </div>
                </div>
                <div class="p-4">
                    <h2 class="text-xl font-semibold">
                        {{ $job->title }}
                    </h2>
                    <p class="mt-2 text-lg text-gray-700">
                        {{ $job->description }}
                    </p>
                    <ul class="my-4 bg-gray-100 p-4">
                        <li class="mb-2">
                            <strong>Job Type:</strong> {{ $job->job_type }}
                        </li>
                        <li class="mb-2">
                            <strong>Remote:</strong> {{ $job->remote ? 'Yes' : 'No' }}
                        </li>
                        <li class="mb-2">
                            <strong>Salary:</strong> ${{ number_format($job->salary) }}
                        </li>
                        <li class="mb-2">
                            <strong>Site Location:</strong> {{ $job->city }}, {{ $job->state }}
                        </li>
                        @if ($job->tags)
                            <li class="mb-2">
                                <strong>Tags:</strong> {{ ucwords(str_replace(',', ', ', $job->tags)) }}
                            </li>
                        @endif
                    </ul>
                </div>
            </div>

            <div class="container mx-auto p-4">
                @if ($job->requirements || $job->benefits)
                    <h2 class="mb-4 text-xl font-semibold">Job Details</h2>
                    <div class="rounded-lg bg-white p-4 shadow-md">
                        <h3 class="mb-2 text-lg font-semibold text-blue-500">
                            Job Requirements
                        </h3>
                        <p>
                            {{ $job->requirements }}
                        </p>
                        <h3 class="mb-2 mt-4 text-lg font-semibold text-blue-500">
                            Benefits
                        </h3>
                        <p>
                            {{ $job->benefits }}
                        </p>
                    </div>
                @endif
                <p class="my-5">
                    Put "Job Application" as the subject of your email
                    and attach your resume.
                </p>
                <a class="block w-full cursor-pointer rounded border bg-indigo-100 px-5 py-2.5 text-center text-base font-medium text-indigo-700 shadow-sm hover:bg-indigo-200"
                    href="mailto:{{ $job->contact_email }}">
                    Apply Now
                </a>
            </div>

            <div class="mt-6 rounded-lg bg-white p-6 shadow-md">
                <div id="map"></div>
            </div>
        </section>

        <aside class="rounded-lg bg-white p-3 shadow-md">
            <h3 class="mb-4 text-center text-xl font-bold">
                Company Info
            </h3>
            @if ($job->company_logo)
                <img class="m-auto mb-4 w-full rounded-lg" src="/storage/{{ $job->company_logo }}" alt="Ad" />
            @endif
            <h4 class="text-lg font-bold">{{ $job->company_name }}</h4>
            @if ($job->company_description)
                <p class="my-3 text-lg text-gray-700">
                    {{ $job->company_description }}
                </p>
            @endif
            @if ($job->company_website)
                <a class="text-blue-500" href="{{ $job->company_website }}" target="_blank">Visit Website</a>
            @endif
            <a class="mt-10 flex w-full items-center justify-center rounded-full bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-600"
                href=""><i
                    class="fas fa-bookmark mr-3"></i> Bookmark
                Listing</a>
        </aside>
    </div>
</x-layout>
