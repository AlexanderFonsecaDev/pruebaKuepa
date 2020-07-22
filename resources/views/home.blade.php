@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Video</div>

                    <div class="card-body">
                        <iframe width="100%" height="480" src="https://www.youtube.com/embed/6DwGz4lV8H4"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="height: 575px;">
                    <div class="card-header">
                        Mensajes

                        <span class="float-right badge badge-primary">Usuarios @{{ numberOfUsers }}</span>

                    </div>
                    <div class="card-body overflow-auto" v-chat-scroll>
                        <ul class="list-group">
                            <message
                                v-for="value, index in chat.message"
                                :key="value.index"
                                :color=chat.color[index]
                                :user=chat.user[index]
                                :time=chat.time[index]
                            >
                                @{{ value }}
                            </message>
                        </ul>
                        <strong>@{{ typing }}</strong>
                    </div>
                    <div class="card-footer">
                        <input type="text" class="form-control" placeholder="Escribe tu mensaje" v-model="message"
                               v-on:keyup.enter="send()">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
