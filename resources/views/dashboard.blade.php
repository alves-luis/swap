@extends('layouts.app')

@section('content')
<div class="container">
        @if(!$proposedExchanges->isEmpty())
            <div class="card mb-4">
                <div class="card-header card-warning"><strong>Exchanges waiting for your confirmation</strong></div>
                @include('exchanges.shared.requested.index', ['exchanges' => $proposedExchanges])
            </div>
        @endif
        @if(!$requestedExchanges->isEmpty())
            <div class="card mb-4">
                <div class="card-header"><strong>Pending requested exchanges</strong></div>
                <div class="card-table mb-0">
                    @include('exchanges.shared.proposed.index', ['exchanges' => $requestedExchanges])
                </div>
            </div>
        @endif
        <div class="card">
            <div class="card-header"><strong>Current enrollments</strong></div>
            @if ($enrollments->isEmpty())
                @include('enrollments.shared.table.empty')
            @else
                @include('enrollments.shared.table.index')
            @endif
        </div>
    </div>
</div>
@endsection