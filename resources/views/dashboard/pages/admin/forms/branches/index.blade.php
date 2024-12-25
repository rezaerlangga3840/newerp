@extends('dashboard.master.main')
@section('pagebreadcrumb')
<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Dashboard</a></li>
<li class="breadcrumb-item text-sm text-dark active" aria-current="page">Branches</li>
@endsection
@section('pagetitle')
Branches
@endsection
@section('pagedescription')
Check the sales, value and bounce rate by country.
@endsection
@section('pagecontent')
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Branches</h6>
          
        </div>
        
      </div>
      <div class="card-body px-0 pb-2">
        
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <td colspan="3">
                <button type="button" class="btn btn-icon btn-2 btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
                  <span class="btn-inner--icon"><i class="material-symbols-rounded">add</i></span>
                </button>
              </td>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Group Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Branch Name</th>
                <th class="text-secondary opacity-7"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                
              </tr>
              @foreach($branches as $branch)
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div class="d-flex flex-column justify-content-center">
                      <h6 class="mb-0 text-sm">{{$branch->group_name}}</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <p class="text-xs font-weight-bold mb-0">{{$branch->branch_name}}</p>
                  <p class="text-xs text-secondary mb-0">{{$branch->branch_address}}</p>
                </td>
                <td class="align-middle">
                  <button type="button" class="btn btn-icon btn-2 btn-primary" data-bs-toggle="modal" data-bs-target="#editModal_{{$branch->id}}">
                    <span class="btn-inner--icon"><i class="material-symbols-rounded">edit</i></span>
                  </button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@include('dashboard.pages.admin.forms.branches.create')
@foreach($branches as $branch)
@include('dashboard.pages.admin.forms.branches.edit')
@endforeach
@endsection