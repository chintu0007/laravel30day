<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    @if($jobs)
        <ul>
            @foreach ($jobs as $job)
                <li>
                    <a class="text-blue-500 hover:underline;" href="/job/{{ $job['id'] }}"><strong>{{ $job['title'] }} : </strong> pay {{ $job['salary'] }}</a>
                </li>
            @endforeach
        </ul>
    @endif

</x-layout>