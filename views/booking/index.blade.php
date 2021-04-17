@extends('backend.layouts.app')

@section('content')

    <section class="gry-bg py-4 profile">
        <div class="container-fluid">
            <form class="" action="/booking" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row gutters-10">
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-header d-block">
                                <div class="form-group">
                                    <select class="form-control" name="user_id">
                                        @foreach($user as $user)
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                    {{--                                    <label id="user_id"> Booking Day</label>--}}
                                    <input id="booking_day" class="form-control form-control-sm" type="date"
                                           name="booking_day"
                                           placeholder=" Booking Day">

                                    <input id="booking_time" class="form-control form-control-sm" type="time"
                                           name="booking_time"
                                           placeholder=" Booking Time">

                                    <label for="booking_note">write note</label>
                                    <textarea id="booking_note" class="form-control form-control-sm"></textarea>

                                    <input type="submit" class="btn btn-primary" value="save">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>


    <section class="gry-bg py-4 profile">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    @foreach($booking as $book)
                        <p>booking time{{$book->booking_time}}: &nspar; by: {{$book->user->name}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection



@section('script')
@endsection
