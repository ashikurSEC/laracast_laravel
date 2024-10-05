<x-layout>
    <x-slot:title>
        Jobs Listing 
    </x-slot:title>
    <ul class="space-y-2">
        @foreach ($jobs as $job )
        <li>
            <a href="/jobs/{{ $job['id'] }}" class="text-blue-600 hover:underline">
                <strong>{{ $job['title'] }}:</strong> Pays {{ $job['salary']  }} per months.</strong>
            </a>
        </li>
    @endforeach
    </ul>
</x-layout>