<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RegistrationsFormallySubmittedMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;
    public array $data;
    public ?String $filePath;

    public function __construct(array $data, ?string $filePath = null)
    {
        $this->data = $data;
        $this->filePath = $filePath;
    }
    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: ['alexparra2404@gmal.com'],
            subject: 'Registros presentados formalmente'
        );
    }

    public function content(): Content
    {
        return new Content(
            html: 'emails.registrations-formally-submitted',
            with: [
                'party' => $this->data['party'],
                'count' => $this->data['count'],
                'hash' => $this->data['hash'],
                'date' => now()->format('d/m/Y H:i:s'),
            ]
        );
    }

    /**
     * @return array<Attachment>
     */
    public function attachments(): array
    {
        return $this->filePath ? [
            Attachment::fromPath($this->filePath)
                ->as(basename($this->filePath))
                ->withMime('application/vnd.ms-excel'),
        ] : [];
    }
}
