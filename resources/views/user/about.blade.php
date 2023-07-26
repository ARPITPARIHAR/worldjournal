@extends('user.layouts.app')
@section('meta_title', 'contact')
@extends('user.includes.nav')
@section('content')
<br><br>
<br> <br>


<!DOCTYPE html>
<html>
<head>
    <header class="about">
        Welcome to World Journal's Alert - Your Gateway to Cutting-Edge Research and Enlightening Conferences!
      </header>
    
      <div class="container">
        <p class="description">
            {{-- <span style="font-size: 24px; font-weight: bold; color: #336699;">Welcome to World Journal's Alert</span><br>
            <span style="font-size: 18px; color: #555;">Your Gateway to Cutting-Edge Research and Enlightening Conferences!</span>
          </p> --}}
          <p class="description">
            <span style="font-size: 20px; color: #333;">At World Journal's Alert, we are the torchbearers of knowledge, illuminating the path for researchers, academics, and enthusiasts worldwide.</span>
          </p>
          <p class="description">
            <span style="font-size: 20px; color: #333;">As a premier online platform, we take immense pride in our role as the bridge that connects curious minds to the latest advancements across diverse fields of knowledge.</span>
          </p>
          <p class="description">
            <span style="font-size: 20px; color: #333;">Our curated database of esteemed journals and conferences is meticulously crafted to provide comprehensive access to high-quality scholarly publications and enlightening gatherings.</span>
          </p>
          <p class="description">
            <span style="font-size: 20px; color: #333;">Stay connected with World Journal's Alert to enrich your academic journey and make your mark in the realm of knowledge.</span>
          </p>
          <p class="description">
            <span style="font-size: 20px; color: #333;">Let us be your guiding light to success and innovation.</span>
          </p>
          <p class="description">
            <span style="font-size: 24px; font-weight: bold; color: #336699;">Discover. Engage. Inspire.</span><br>
            <span style="font-size: 20px; color: #333;">Join World Journal's Alert today!</span>
          </p>
          
        </p>
      </div>
    </head>
    </html>

  <style>
.about{
    background-color: #336699;
  color: white;
  padding: 10px;
  font-size: 24px;
  text-align: center;
  width: 1200px;
  margin-left: 150px;
}
.description{
    margin-left: 40px;
}



  </style>



  @include('user.includes.footer')
  
@endsection
