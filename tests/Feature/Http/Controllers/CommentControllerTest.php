<?php

namespace Tests\Feature\Http\Controllers;

use App\Events\NewComment;
use App\Mail\CommentCreated;
use App\Models\Comment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Mail;
use JMac\Testing\Traits\AdditionalAssertions;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\CommentController
 */
final class CommentControllerTest extends TestCase
{
    use AdditionalAssertions, RefreshDatabase, WithFaker;

    #[Test]
    public function create_displays_view(): void
    {
        $response = $this->get(route('comments.create'));

        $response->assertOk();
        $response->assertViewIs('comment.create');
    }


    #[Test]
    public function store_uses_form_request_validation(): void
    {
        $this->assertActionUsesFormRequest(
            \App\Http\Controllers\CommentController::class,
            'store',
            \App\Http\Requests\CommentStoreRequest::class
        );
    }

    #[Test]
    public function store_saves_and_redirects(): void
    {
        $content = $this->faker->paragraphs(3, true);

        Event::fake();
        Mail::fake();

        $response = $this->post(route('comments.store'), [
            'content' => $content,
        ]);

        $comments = Comment::query()
            ->where('content', $content)
            ->get();
        $this->assertCount(1, $comments);
        $comment = $comments->first();

        $response->assertRedirect(route('comment.create'));
        $response->assertSessionHas('message', $message);

        Event::assertDispatched(NewComment::class, function ($event) use ($comment) {
            return $event->comment->is($comment);
        });
        Mail::assertSent(CommentCreated::class, function ($mail) use ($comment) {
            return $mail->comment->is($comment);
        });
    }
}
