@extends('../layouts.app')
@section('title')
CRM - Black List
@endsection
@section('content')
<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
            <div class="heading1 margin_0">
                <h2>Blacklist Customer</h2>
            </div>
        </div>
        <div class="table_section padding_infor_info">
            <div class="table-responsive-sm">

                <form action="{{route('create-blacklist')}}" method="POST">
                    @csrf
                    <div class="row">


                        <div class="col-md-4">
                            <label for="email">PAN No.</label>
                            <input type="text" class="form-control" name="pan" value="" required="">
                        </div>
                        <div class="col-md-4">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="" required="">
                        </div>
                        <div class="col-md-4">
                            <label for="email">Mobile</label>
                            <input type="number" class="form-control" name="mobile" value="" required="">
                        </div>
                        <div class="col-md-12">
                            <label for="email">Resons</label>
                            <input type="text" class="form-control" name="remark" value="" required="">
                        </div>
                        <div class="col-md-12">
                            <button type="submit" name="submit" class="btn cur-p btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection