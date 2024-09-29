<x-layout>
    <x-slot name="title">Create Job</x-slot>
    <div class="mx-auto w-full rounded-lg bg-white p-8 shadow-md md:max-w-3xl">
        <h2 class="mb-4 text-center text-4xl font-bold">
            Create Job Listing
        </h2>
        <form method="POST" action="/jobs" enctype="multipart/form-data">
            @csrf
            <h2 class="mb-6 text-center text-2xl font-bold text-gray-500">
                Job Info
            </h2>

            <div class="mb-4">
                <label class="block text-gray-700" for="title">Job Title</label>
                <input
                    class="@error('title') border-red-500 @enderror w-full rounded border px-4 py-2 focus:outline-none"
                    id="title" type="text" name="title" placeholder="Software Engineer"
                    value="{{ old('title') }}" />
                @error('title')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="description">Job Description</label>
                <textarea class="@error('description') border-red-500 @enderror w-full rounded border px-4 py-2 focus:outline-none"
                    id="description" cols="30" rows="7" name="description"
                    placeholder="We are seeking a skilled and motivated Software Developer to join our growing development team...">{{ old('description') }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="salary">Annual Salary</label>
                <input class="w-full rounded border px-4 py-2 focus:outline-none" id="salary" type="number"
                    name="salary" placeholder="90000" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="requirements">Requirements</label>
                <textarea class="w-full rounded border px-4 py-2 focus:outline-none" id="requirements" name="requirements"
                    placeholder="Bachelor's degree in Computer Science"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="benefits">Benefits</label>
                <textarea class="w-full rounded border px-4 py-2 focus:outline-none" id="benefits" name="benefits"
                    placeholder="Health insurance, 401k, paid time off"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="tags">Tags (comma-separated)</label>
                <input class="w-full rounded border px-4 py-2 focus:outline-none" id="tags" type="text"
                    name="tags" placeholder="development,coding,java,python" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="job_type">Job Type</label>
                <select
                    class="@error('job_type') border-red-500 @enderror w-full rounded border px-4 py-2 focus:outline-none"
                    id="job_type" name="job_type">
                    <option value="Full-Time" {{ old('job_type') == 'Full-Time' ? 'selected' : '' }}>
                        Full-Time
                    </option>
                    <option value="Part-Time" {{ old('job_type') == 'Part-Time' ? 'selected' : '' }}>Part-Time</option>
                    <option value="Contract" {{ old('job_type') == 'Contract' ? 'selected' : '' }}>Contract</option>
                    <option value="Temporary" {{ old('job_type') == 'Temporary' ? 'selected' : '' }}>Temporary</option>
                    <option value="Internship" {{ old('job_type') == 'Internship' ? 'selected' : '' }}>Internship</option>
                    <option value="Volunteer" {{ old('job_type') == 'Volunteer' ? 'selected' : '' }}>Volunteer</option>
                    <option value="On-Call" {{ old('job_type') == 'On-Call' ? 'selected' : '' }}>On-Call</option>
                </select>
                @error('job_type')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="remote">Remote</label>
                <select class="w-full rounded border px-4 py-2 focus:outline-none" id="remote" name="remote">
                    <option value="false">No</option>
                    <option value="true">Yes</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="address">Address</label>
                <input class="w-full rounded border px-4 py-2 focus:outline-none" id="address" type="text"
                    name="address" placeholder="123 Main St" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="city">City</label>
                <input class="w-full rounded border px-4 py-2 focus:outline-none" id="city" type="text"
                    name="city" placeholder="Albany" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="state">State</label>
                <input class="w-full rounded border px-4 py-2 focus:outline-none" id="state" type="text"
                    name="state" placeholder="NY" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="zipcode">ZIP Code</label>
                <input class="w-full rounded border px-4 py-2 focus:outline-none" id="zipcode" type="text"
                    name="zipcode" placeholder="12201" />
            </div>

            <h2 class="mb-6 text-center text-2xl font-bold text-gray-500">
                Company Info
            </h2>

            <div class="mb-4">
                <label class="block text-gray-700" for="company_name">Company Name</label>
                <input class="w-full rounded border px-4 py-2 focus:outline-none" id="company_name" type="text"
                    name="company_name" placeholder="Company name" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="company_description">Company Description</label>
                <textarea class="w-full rounded border px-4 py-2 focus:outline-none" id="company_description"
                    name="company_description" placeholder="Company Description"></textarea>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="company_website">Company Website</label>
                <input class="w-full rounded border px-4 py-2 focus:outline-none" id="company_website" type="text"
                    name="company_website" placeholder="Enter website" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="contact_phone">Contact Phone</label>
                <input class="w-full rounded border px-4 py-2 focus:outline-none" id="contact_phone" type="text"
                    name="contact_phone" placeholder="Enter phone" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="contact_email">Contact Email</label>
                <input class="w-full rounded border px-4 py-2 focus:outline-none" id="contact_email" type="email"
                    name="contact_email" placeholder="Email where you want to receive applications" />
            </div>

            <div class="mb-4">
                <label class="block text-gray-700" for="company_logo">Company Logo</label>
                <input
                    class="@error('company_logo') border-red-500 @enderror w-full rounded border px-4 py-2 focus:outline-none"
                    id="company_logo" type="file" name="company_logo" />
                @error('company_logo')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <button class="my-3 w-full rounded bg-green-500 px-4 py-2 text-white hover:bg-green-600 focus:outline-none"
                type="submit">
                Save
            </button>
        </form>
    </div>
</x-layout>
