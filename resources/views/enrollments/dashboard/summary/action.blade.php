<div class="btn-group">
    {{-- Exchange action --}}
    @if ($settings->withinExchangePeriod() && $enrollment->availableForExchange())
        <a
            href="{{ route('exchanges.create', $enrollment->id )}}"
            class="btn btn-outline-secondary btn-sm">
            Exchange shift
        </a>
    @endif

    {{-- Enrollment actions --}}
    @if ($settings->withinEnrollmentPeriod())
        <button type="button" class="btn btn-outline-secondary btn-sm disabled">Enrolled</button>
        <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
            <form action="{{ route('enrollments.destroy', $enrollment->course_id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="dropdown-item btn btn-sm text-danger">Delete enrollment</button>
            </form>
        </div>
    @endif
</div>