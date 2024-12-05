<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <h1>Hello from the Jobs Page.</h1>


    @foreach ($jobs as $job)
        <li>
            <a href="/job/{{ $job['id'] }}"><strong>{{ $job['title'] }} : </strong> pay {{ $job['salary'] }}</a>
        </li>
    @endforeach

</x-layout>