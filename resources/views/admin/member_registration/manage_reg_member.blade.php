@extends('admin.master')
@section('content')
<div class="ibox">
        <div class="ibox-head">
                <div class="ibox-title"> Member  List</div>
               
            </div>
<div class="ibox-body">

        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
            <thead>
                    <tr>
                            <th>SL</th>
                            <th>Registration  Number </th>
                            <th>Acount Number</th>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>Registration Date</th>
                           
                         
                         
                            <th>Action</th>
    
                    </tr>
            </thead>
          
            <tbody>
               <?php
                $i=1;
                ?>
    @foreach ($member_details as $item)
           
  
      <tr>
                    <th>{{$i++}}</th>
                    <td>{{$item->reg_number}}</td>
                    <td>{{$item->ac_number}}</td>
                    <td>{{$item->reg_name}}</td>
                    <td>{{$item->reg_phone}}</td>
                    <td>{{$item->reg_date}}</td>
                  

                 <td>
                        @if($item->member_activation==1)
                        <a href="{{route('member_status_update',['id'=>$item->id])}}" class="btn btn-success" title="Active">
                            <span class="fa fa-arrow-up"></span>
                        </a>
                        @elseif($item->member_activation==0)
                        <a href="{{route('member_status_update',['id'=>$item->id])}}" class="btn btn-danger" title="Inactive">
                                <span class="fa fa-arrow-down"></span>
                            </a>
                        @endif
                        
                        <a href="{{  url('/regi-member-details/view/'.$item->id) }}" class="btn btn-success" title="view">
                            <span class="fa fa-eye font-14  "></span>
                        </a>
                        <a href="{{  url('/edit-member/'.$item->id) }}" class="btn btn-success" title="Edit">
                            <span class="fa fa-pencil font-14  "></span>
                        </a>
                        <a href="{{  url('/regi-member/delete/'.$item->id) }}" class="btn btn-danger" title="Delete"onclick="return confirm('Are you sure to delete this?')">
                            <span class="fa fa-trash font-14  "></span>
                        </a>

                    </td>
                </tr>

                @endforeach  

            </tbody>
        </table>
    </div>
</div>               
@endsection