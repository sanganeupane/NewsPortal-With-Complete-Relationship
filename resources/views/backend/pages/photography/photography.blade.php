@extends('backend.master.master')
@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Add Photos
            </h1>

        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                @include('backend.layouts.message')


                                <form action="#" method="post" enctype="multipart/form-data">
                                    @csrf


                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <a style="color:red;">{{$errors->first('image')}}</a>
                                        <input type="file" name="image" class="form-control" placeholder="Your image"
                                               value="{{old('image')}}" id="image">
                                    </div>



                                    <div class="form-group">
                                        <button class="btn btn-danger">Add-photo</button>
                                    </div>


                                </form>


                            </div><!-- /.col -->

                        </div><!-- /.col -->
                    </div><!-- ./box-body -->

                </div><!-- /.box -->
            </div>

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

@endsection
