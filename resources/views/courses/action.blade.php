<div class="btn-group">
    @if (Auth::user()->student->isEnrolledInCourse($course))
        <button type="button" class="btn btn-outline-secondary btn-sm disabled">Enrolled</button>

        @if ($settings->withinEnrollmentPeriod())
            {{-- Show dropdown to remove enrollment in course. --}}
            <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <form action="{{ route('enrollments.destroy') }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="hidden" name="course_id" value="{{ $course->id }}">
                    <button type="submit" class="dropdown-item btn btn-sm text-danger">Delete enrollment</button>
                </form>
            </div>
        @endif
    @elseif ($settings->withinEnrollmentPeriod())
        {{-- Show button to enroll in course. --}}
        <form action="{{ route('enrollments.create') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="course_id" value="{{ $course->id }}">
            <button type="submit" class="btn btn-success btn-sm">Enroll in course</button>
        </form>
    @endif
</div>