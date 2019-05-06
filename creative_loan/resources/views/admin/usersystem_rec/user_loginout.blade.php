@extends('admin.master')
@section('content')

<div class="page-content fade-in-up">




    <div class="ibox">
            <div class="ibox-head">
                    <div class="ibox-title">User Login Logout Record</div>
                   
                </div>
            <div class="ibox-body">
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                                <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Login</th>
                                        <th>Logout</th>

                
                                </tr>
                        </thead>
                      <?php $i=1;
                      ?>
                        <tbody>
                                @foreach($loginrecord as $item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    @foreach ($companyUser as $item2)

                                    @if ($item->user_id==$item2->id)
                                    <td>{{$item2->first_name}}&nbsp;{{$item2->last_name}}</td>
                                    <td>{{$item2->email}}</td>
                      
                                    @endif
                                    
                                    @endforeach
                                    
                                    
                                    <td>{{$item->login_time}}</td>
                                    <td>{{$item->logout_time}}</td>
                               
                                   
                                </tr>
            
                                @endforeach
            
                            </tbody>
                    </table>
                </div>
        </div>
        
</div>





@endsection
