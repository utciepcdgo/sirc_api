<?php

declare(strict_types=1);

namespace App\Traits;

use App\Enums\RegistrationStatus;

trait HasRegistrationStatus {
    /**
     * Get the registration status.
     */
    public function getStatus(): ?RegistrationStatus
    {
        return $this->status;
    }

    /**
     * Set the registration status.
     */
    public function setStatus(RegistrationStatus $status): void
    {
        $this->update(['status' => $status]);
    }

    /**
     * Determine if the registration is formally presented.
     */
    public function isPresented(): bool
    {
        return $this->status->is(RegistrationStatus::FORMALLY_PRESENTED);
    }

    /**
     * Determine if the registration is awaiting presentation.
     */
    public function isAwaitingPresentation(): bool
    {
        return $this->status->is(RegistrationStatus::AWAITING_PRESENTATION);
    }

    /**
     * Determine if the registration is approved.
     */
    public function isApproved(): bool
    {
        return $this->status->is(RegistrationStatus::APPROVED);
    }

    /**
     * Determine if the registration is rejected.
     */
    public function isRejected(): bool
    {
        return $this->status->is(RegistrationStatus::REJECTED);
    }

    /**
     * Set the registration status to Formally Presented.
     */
    public function setPresented(): void
    {
        $this->setStatus(RegistrationStatus::FORMALLY_PRESENTED);
    }

    /**
     * Set the registration status to Awaiting Presentation.
     */
    public function setAwaitingPresentation(): void
    {
        $this->setStatus(RegistrationStatus::AWAITING_PRESENTATION);
    }

    /**
     * Set the registration status to Approved.
     */
    public function setApproved(): void
    {
        $this->setStatus(RegistrationStatus::APPROVED);
    }

    /**
     * Set the registration status to Rejected.
     */
    public function setRejected(): void
    {
        $this->setStatus(RegistrationStatus::REJECTED);
    }

}
