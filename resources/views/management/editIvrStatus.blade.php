@extends('../layouts.app')
@section('title')
CRM - IVR Status
@endsection
@section('content')
<div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
            <div class="heading1 margin_0">
                <h2>Add/Edit IVR Status Name</h2>
            </div>
        </div>

        <div class="table_section padding_infor_info">
            <div class="table-responsive-sm">
                
                <form action="{{route('update-ivrstatus')}}" method="POST">
                    @csrf
                    @if(isset($ivr))
                    <input type="hidden" name="id" value="{{ $ivr->id }}">
                    @endif
                    <div class="row">

                        <div class="col-md-3">
                            <label for="type">Choose Type</label>
                            <select class="form-control" name="type" required>
                                <option value="" disabled>Choose Type</option>
                                <option value="leads" {{ (isset($ivr) && $ivr->type == 'leads') ? 'selected' : '' }}>Leads</option>
                                <option value="Sanction" {{ (isset($ivr) && $ivr->type == 'Sanction') ? 'selected' : '' }}>Sanction</option>
                                <option value="credit" {{ (isset($ivr) && $ivr->type == 'credit') ? 'selected' : '' }}>Credit</option>
                                <option value="disbursal" {{ (isset($ivr) && $ivr->type == 'disbursal') ? 'selected' : '' }}>Disbursal</option>
                                <option value="collection" {{ (isset($ivr) && $ivr->type == 'collection') ? 'selected' : '' }}>Collection</option>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <label for="ivrstageName">IVR Status Name</label>
                            <input type="text" class="form-control" name="ivrstageName"
                                value="{{ $ivr->ivrstageName}}" required>
                        </div>

                        <div class="col-md-3">
                            <label for="iconCode">Icon Code</label>
                            <input type="text" class="form-control" name="iconCode"
                                value="{{ old('iconCode', $ivr->iconCode ?? '') }}" required>
                        </div>

                        <div class="col-md-3">
                            <label for="status">Choose Status</label>
                            <select class="form-control" name="status" required>
                                <option value="">Choose Status</option>
                                <option value="Active" {{ (isset($ivr) && $ivr->status == 'Active') ? 'selected' : '' }}>Active</option>
                                <option value="In Active" {{ (isset($ivr) && $ivr->status == 'In Active') ? 'selected' : '' }}>In Active</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="appmsg">APP Notification Message</label>
                            <textarea class="form-control" name="appmsg" rows="5">{{ old('appmsg', $ivr->appmsg ?? '') }}</textarea>
                        </div>

                        <div class="col-md-12 mt-3">
                            <button type="submit" name="submit" class="btn cur-p btn-primary">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection