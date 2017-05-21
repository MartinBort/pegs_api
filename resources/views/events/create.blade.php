@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Peg</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/events">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('event_name') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Event Title</label>
                            <div class="col-md-6">
                                <input type="text" name="event_name">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('event_date_start') ? ' has-error' : '' }}">
                            <label for="event_date_start" class="col-md-4 control-label">Event date start</label>
                            <div class="col-md-6">
                                <input type="date" name="event_date_start">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('event_time_start') ? ' has-error' : '' }}">
                            <label for="event_time_start" class="col-md-4 control-label">Event time start</label>
                            <div class="col-md-6">
                                <input type="time" name="event_time_start">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('event_date_end') ? ' has-error' : '' }}">
                            <label for="event_date_end" class="col-md-4 control-label">Event date finish</label>
                            <div class="col-md-6">
                                <input type="date" name="event_date_end">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('event_time_start') ? ' has-error' : '' }}">
                            <label for="event_time_end" class="col-md-4 control-label">Event time start</label>
                            <div class="col-md-6">
                                <input type="time" name="event_time_end">
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('event_text') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Event Description</label>
                            <div class="col-md-6">
                                <textarea name="event_text"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                        <!-- end form -->                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
