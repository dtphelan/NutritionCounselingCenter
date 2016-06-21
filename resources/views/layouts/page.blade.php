@extends('layouts.master')

@section('title')
Nutrition Counseling Center - <?php echo $page ?>
@stop

@section('content')
    <h1><?php echo $page ?></h1>

    @if($page == 'About')

    @elseif($page == 'Services')

    @elseif($page == 'Testimonials')

    @elseif($page == 'Directions')

    @elseif($page == 'Contact')

    @else

    @endif
@stop
