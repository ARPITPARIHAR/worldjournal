@extends('admin.layouts.app')
{{-- @section('content') --}}
<div class="section-body">
    <div class="container-fluid">          
        <div class="row clearfix">
            <div class="col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        @if (session('success'))
                           <h3 class="card-title test-success"> {{session('success')}}</h3>
                        @elseif(session('error'))
                            <h3 class="card-title test-info">{{session('error')}}</h3>
                        @else
                            <h3 class="card-title">Student fees List</h3>
                        @endif                        
                    </div>
                    <div class="card-body">
                        {{-- <a class="btn btn-info" href="{{route('admin.fees.create')}}">Deposit fees</a> --}}
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped text-nowrap table-vcenter mb-0">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>NAME</th>
                                        <th>SURNAME</th>
                                        <th>ADDRESS</th>
                                        <th>POSTAL CODE</th>
                                        <th>CITY</th>
                                        <th>COMPANY</th>
                                        <th>PUBLISHER NAME</th>
                                        <th>MOBILE NU</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $addjournal)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$addjournal->session['session_id']}}</td>
                                        <td>{{$feescollection->student_class->name}} ({{$feescollection->section->name}})</td>
                                        <td>{{$feescollection->section_id}}</td>
                                        <td>{{$feescollection->student->name}}</td> 
                                        <td>{{$feescollection->deposit}}</td> 
                                        <td>{{$feescollection->deposit_date}}</td>
                                        <td>{{$feescollection->payment}}</td>
                                     
                                    </tr>
                                    @endforeach
                                    {{-- {{$fees->student->name}}
                                    {{$fees->student->student_class->name}}
                                    {{$fees->student->section->name}}
                                </tbody>
                            </table>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

