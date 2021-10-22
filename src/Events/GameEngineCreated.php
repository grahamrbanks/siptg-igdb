<?php

namespace MarcReichel\IGDBLaravel\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use MarcReichel\IGDBLaravel\Models\GameEngine;

class GameEngineCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @var GameEngine
     */
    public GameEngine $data;

    /**
     * @param GameEngine $data
     *
     * @return void
     */
    public function __construct(GameEngine $data)
    {
        $this->data = $data;
    }
}
