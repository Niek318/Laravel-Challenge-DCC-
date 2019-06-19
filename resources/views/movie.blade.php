@extends('layouts.app')

@section('content')


  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Random movie picker</div>

                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif

                      @php
                        $array = file_get_contents('movies.json');
                        $json = json_decode($array, true);
                        $random = rand(0, count($json) - 1);
                        $random_title = $json[$random]['title'];
                        $random_year = $json[$random]['year'];
                        $string_title = json_encode($random_title);
                        $clean_title = preg_replace("/[^a-zA-Z0-9\s]/", "", $string_title);
                        $string_year = json_encode($random_year);

                        $url = "https://www.imdb.com/find?ref_=nv_sr_fn&q=". $clean_title . "+" . $string_year ."&s=all";
                      @endphp

                      <p>Maybe you could watch @php echo($string_title) @endphp from the year @php echo($string_year) @endphp.</p>

                      <p>Click <a href='@php echo $url @endphp', target="_blank">here</a> to read what its about.</p>

                        <FORM>
                        <INPUT TYPE="button" onClick="history.go(0)" VALUE="Nah, give me a new movie.">
                        </FORM>
                    </div>
              </div>
          </div>
      </div>
  </div>


@endsection
