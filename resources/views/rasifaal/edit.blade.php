@extends('layout.app')
@section('title')
    Add Rashifal
@endsection
@section('css')
    <link href="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/css/nepali.datepicker.v3.7.min.css"
        rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="card">
        <div class="header">
            <h4 class="title">Edit Rasifal</h4>
        </div>
        <div class="content">

            <form method="post" action="{{ route('rasifal.update', ['rashifal' => $rashifal]) }}"
                enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">

                    <input type="text" name="date" id="nepali-datepicker" value="{{ $rashifal->date }}" />
                </div>
                <div class="row">

                    <div class="col-md-4">
                        <label>Mesh</label>
                        <textarea class="form-control" name="mesh" rows="2" required>{{ $rashifal->mesh }}</textarea>
                    </div>
                    <div class="col-md-4">
                        <label>brish</label>
                        <textarea class="form-control" name="brish" rows="2" required>{{ $rashifal->brish }}</textarea>
                    </div>
                    <div class="col-md-4">
                        <label>mithun</label>
                        <textarea class="form-control" name="mithun" rows="2" required>{{ $rashifal->mithun }}</textarea>
                    </div>
                    <div class="col-md-4">
                        <label>karkat</label>
                        <textarea class="form-control" name="karkat" rows="2" required>{{ $rashifal->karkat }}</textarea>
                    </div>
                    <div class="col-md-4">
                        <label>singha</label>
                        <textarea class="form-control" name="singha" rows="2" required>{{ $rashifal->singha }}</textarea>
                    </div>
                    <div class="col-md-4">
                        <label>kanya</label>
                        <textarea class="form-control" name="kanya" rows="2" required>{{ $rashifal->kanya }}</textarea>
                    </div>
                    <div class="col-md-4">
                        <label>tula</label>
                        <textarea class="form-control" name="tula" rows="2" required>{{ $rashifal->tula }}</textarea>
                    </div>
                    <div class="col-md-4">
                        <label>brischik</label>
                        <textarea class="form-control" name="brischik" rows="2" required>{{ $rashifal->brischik }}</textarea>
                    </div>
                    <div class="col-md-4">
                        <label>dhanu</label>
                        <textarea class="form-control" name="dhanu" rows="2" required>{{ $rashifal->dhanu }}</textarea>
                    </div>
                    <div class="col-md-4">
                        <label>makar</label>
                        <textarea class="form-control" name="makar" rows="2" required>{{ $rashifal->makar }}</textarea>
                    </div>
                    <div class="col-md-4">
                        <label>kumbha</label>
                        <textarea class="form-control" name="kumbha" rows="2" required>{{ $rashifal->kumbha }}</textarea>
                    </div>
                    <div class="col-md-4">
                        <label>min</label>
                        <textarea class="form-control" name="min" rows="2" required>{{ $rashifal->min }}</textarea>
                    </div>
                </div>
                <div class="footer text-right">
                    <button type="submit" class="btn btn-info btn-fill">Update Rashifal</button>
                </div>

            </form>

        </div>
    </div>
@endsection
@section('js')
    <script src="http://nepalidatepicker.sajanmaharjan.com.np/nepali.datepicker/js/nepali.datepicker.v3.7.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        window.onload = function() {
            var mainInput = document.getElementById("nepali-datepicker");
            mainInput.nepaliDatePicker();
        };
    </script>
@endsection
