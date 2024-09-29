<x-layout>
    <x-slot name="title">Create Job</x-slot>
    <h1>Create New Job</h1>
    <form action="/jobs" method="POST">
        @csrf
        <input name="title" type="text" placeholder="title">
        <input name="description" type="text" placeholder="description">
        <button type="submit">Submit</button>
    </form>
</x-layout>
