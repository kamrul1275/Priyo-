<h1>Search Results for {{ ucfirst($gender) }} Members</h1>

<ul>
    @foreach($search_results as $member)
        <li>
            {{ $member->full_name }} ({{ $member->email }})
            @if($member->created_at)
                - Registered on {{ $member->created_at->format('d-m-Y') }}
            @endif
        </li>
    @endforeach
</ul>

@if($search_results->isEmpty())
    <p>No members found.</p>
@endif
