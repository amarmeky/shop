@extends('layout.master')
@section('title', 'Category')
@section('content')
    <h1>Category Page</h1>
    <p>Welcome to the category page.</p>
@endsection

@section('sidebar')
    @parent  <?php echo  "<br>"?>
    hello from category sidebar
@endsection