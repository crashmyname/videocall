<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\WebRtcSignal;

class WebRtcController extends Controller
{
    public function offer($offer)
    {
        broadcast(new WebRtcSignal(['offer' => $offer]))->toOthers();
    }

    public function answer($answer)
    {
        broadcast(new WebRtcSignal(['answer' => $answer]))->toOthers();
    }

    public function iceCandidate($candidate)
    {
        broadcast(new WebRtcSignal(['ice-candidate' => $candidate]))->toOthers();
    }
}
