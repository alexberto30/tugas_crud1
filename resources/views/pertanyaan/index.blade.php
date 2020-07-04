@extends('layout.master')

@section('content')
	<div class="row">
        <div class="col-md-12 mb-5">
            <a href="{{url('pertanyaan/create')}}" class="btn btn-dark float-right" style="margin-right: 10px; margin-top: 10px;"> <i class="fa fa-plus"></i>&nbsp;Tambah Pertanyaan</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @foreach($list_pertanyaan->sortByDesc('created_at') as $pertanyaan)
            <div class="card card-default">
                <div class="card-header">
                    <b>{{$pertanyaan->title}}</b>
                    <label for="" class="label label-default float-right">{{$pertanyaan->created_at->format('d M Y H:i')}}</label>
                </div>
                <div class="card-body">
                    {{($pertanyaan->content)}}<br>
                    <button type="button" class="btn btn-light"><i class="fas fa-comment-dots"></i>&nbsp;Jawab</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection