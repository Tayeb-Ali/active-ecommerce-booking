@extends('backend.layouts.app')

@section('content')

<section class="gry-bg py-4 profile">
    <div class="container-fluid">
        <form class="" action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row gutters-10">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-header d-block">
                            <div class="form-group">
                                <input class="form-control form-control-sm" type="text" name="keyword" placeholder="">
                            </div>
        
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection



@section('script')
@endsection
