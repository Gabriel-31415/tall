<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Comment extends Component
{
    public $comments = [
        [
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Quisque in nulla in nibh porta porta ac id neque. In aliquet ligula a ante convallis,
            eu feugiat leo interdum.',
            'created_at' => '3 minute ago',
            'creator' => 'Lorem Ipsum',
        ]
    ];
    public $newComment;

    public function addComment()
    {
        array_unshift($this->comments, [
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'creator' => 'Gabriel Silva'
        ]);
        $this->newComment = '';
    }


    public function render()
    {
        return view('livewire.comment');
    }
}
