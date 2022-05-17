@extends('layouts.app')
@section('title', 'Chat')

@section('content')
    <br>

    <!-- end section -->

    @if ($trainee_id)
        <!-- section -->
        <div class="section layout_padding contact_section" style="background:#f6f6f6;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12">
                        <div class=""
                             style="background: #fff; padding: 30px 20px; border-radius: 10px; box-shadow: 1px 2px 3px #aaa">
                            @foreach($conversations as $conversation)
                                <a href="/chatTrainer?conversation_id={{ $conversation->id }}">
                                    <h3 class="m-0">{{ $conversation->trainee->name }}</h3>
                                    <p class="m-0">{{ $conversation->last_message }}</p>
                                </a>
                                <hr>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-12"
                         style="background: #fff; padding: 30px 20px; border-radius: 10px; box-shadow: 1px 2px 3px #aaa">
                        <div class="contact_form">
                            @foreach($messages as $message)
                                @if ($message->sender->id == auth('trainers')->id())
                                    <div class="row" style="background-color: #457b9d; padding: 10px 5px; border-radius: 25px; color: #fff">
                                        <div class="col-md-12">
                                            <p style="color: #fff" class="m-0">{{ $message->sender->name }}<span style="float: right">{{ \Carbon\Carbon::create($message->created_at)->format('Y/m/d H:i:s') }}</span></p>
                                            <p style="color: #fff">{{ $message->message }}</p>
                                        </div>
                                    </div>
                                @else
                                    <div class="row" style="background-color: #a8dadc; padding: 10px 5px; border-radius: 25px; color: #fff">
                                        <div class="col-md-12">
                                            <p style="color: #fff" class="m-0">{{ $message->sender->name }}<span style="float: right">{{ \Carbon\Carbon::create($message->created_at)->format('Y/m/d H:i:s') }}</span></p>
                                            <p style="color: #fff">{{ $message->message }}</p>
                                        </div>
                                    </div>
                                @endif
                                <br>
                            @endforeach
                        </div>
                        <hr>
                        <form action="{{ route('send_message', ['target_id' => $trainee_id]) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <div class=" field">
                                    <textarea class="form-control" name="message" placeholder="Massage"></textarea>
                                    <span style="float:right"><button class="btn btn-primary"
                                                                      type="submit">Send</button></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end section -->
    @else
        <div class="section layout_padding contact_section" style="background:#f6f6f6;">
            <div class="container">
                <div class="row text-center">
                    You don't have any messages to show
                </div>
            </div>
        </div>
    @endif
@endsection
