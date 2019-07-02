<?php

namespace App\Judite\Contracts\Registry;

use App\Judite\Models\Enrollment;

interface ExchangeRegistry
{
    /**
     * Record an exchange of enrollments in the exchanges history.
     *
     * @param \App\Judite\Models\Enrollment $fromEnrollment
     * @param \App\Judite\Models\Enrollment $toEnrollment
     * @param mixed|null $transactionId
     */
    public function record(Enrollment $fromEnrollment, Enrollment $toEnrollment, $transactionId = null);

    /**
     * Get the exchanges history paginator.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function paginate();

    /**
     * Truncate registry.
     */
    public function truncate();
}
